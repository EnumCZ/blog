<?php

namespace Component;


use \Nette\Application\UI\Form;
use Kdyby\Doctrine\EntityManager;
use App\Model\Entity\Category;


class CategoryForm extends \Nette\Application\UI\Control
{

	public $onAdded = [];

	/**
	* @var Category
	*/
	private $category;


	/**
	* @var EntityManager
	*/
	private $em;


	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}


	public function setCategory($category)
	{
		$this->category = $category;
	}


	public function render() 
	{
		$this->template->setFile(__DIR__ . '/categoryForm.latte');
		$this->template->render();
	}


	protected function createComponentCategoryForm()
	{
		$form = new Form;

		$form->addText('name', 'Název:')
			->setRequired();
		$form->addText('description', 'Popis:')
			->setRequired();
		$form->addSubmit('send', 'Uložit');

		if($this->category) {
			$form->setDefaults([
				'name' => $this->category->name,
				'description' => $this->category->description
				]);
		}

		$form->onSuccess[] = [$this, 'categoryFormSucceeded'];

		return $form;
	}


	public function categoryFormSucceeded($form, $values) 
	{
		if(!$this->category){

			$category = new Category;

			$category->name = $values->name;
			$category->description = $values->description;

			$this->em->persist($category);
			$this->em->flush();
			
		} else {

			$category = $this->category;

			$category->name = $values->name;
			$category->description = $values->description;

			$this->em->flush();
			
		}

		$this->onAdded();
	}

}


interface ICategoryFormFactory
{
	/**
	* @return CategoryForm 
	*/
	public function create();
}