<?php

namespace Component;

use \Nette\Application\UI\Form;
use Nette\Utils\Strings;
use Kdyby\Doctrine\EntityManager;
use App\Model\Repository\Categories;
use App\Model\Entity\Post;


class PostForm extends \Nette\Application\UI\Control
{

	public $onPost = [];

	/**
	* @var Post
	*/
	private $post;


	/**
	* @var EntityManager
	*/
	private $em;


	/**
	* @var Categories
	*/
	private $categories;


	public function __construct(EntityManager $em, Categories $categories) 
	{
		$this->em = $em;
		$this->categories = $categories;
	}


	public function setPost($post)
	{
		$this->post = $post;
	}


	public function render() 
	{
		$this->template->setFile(__DIR__ . '/postForm.latte');
		$this->template->render();
	}


	protected function createComponentPostForm() 
	{
		$form = new Form;

		$category_names = $this->categories->getCategoryNames();

		$form->addText('title', 'Nadpis:')
			->setRequired();
		$form->addSelect('category', 'Kategories:', $category_names)
    		->setPrompt('Zvolte kategorii')
    		->setRequired();
		$form->addTextArea('body', 'Text:')
			->setRequired();
		$form->addCheckbox('disable_comments', 'Zakázat komentáře');

		$form->addSubmit('send', 'Přidat');

		// vychozi hodnoty pri editaci clanku
		if($this->post) {
			$form->setDefaults([
				'title' => $this->post->title,
				'body' => $this->post->body,
				'category' => $this->post->category->name,
				'disable_comments' => $this->post->disable_comments
				]);
		}

		$form->onSuccess[] = [$this, 'postFormSucceeded'];

		return $form;
	}


	public function postFormSucceeded($form, $values) 
	{	

		$category = $this->categories->findOneBy(['name' => $values->category]);

		// novy post
		if(!$this->post) {

			$post = new Post;

			$post->title = $values->title;
			$post->body = $values->body;
			$post->category = $category;
			$post->slug = Strings::webalize($values->title);
			$post->disable_comments = $values->disable_comments;

			$this->em->persist($post);
			$this->em->flush();

		// update postu
		} else {
			
			$post = $this->post;

			$post->title = $values->title;
			$post->body = $values->body;
			$post->category = $category;
			$post->slug = Strings::webalize($values->title);
			// datum se nemeni pri updatu
			$post->date = $post->date;
			$post->disable_comments = $values->disable_comments;

			$this->em->flush();
		}

		$this->onPost();
	}
}


interface IPostFormFactory
{
	/**
	* @return PostForm 
	*/
	public function create();
}