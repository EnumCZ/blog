<?php

namespace App\AdminModule\Presenters;


use Component\IPostFormFactory;
use Component\IRegisterFormFactory;
use Component\IPasswordChangeFormFactory;
use Component\ICategoryFormFactory;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;
use App\Model\Repository;


class AdminPresenter extends BasePresenter
{

	/**
	* @inject
	* @var IPostFormFactory
	*/
	public $postForm;


	/**
	* @inject
	* @var IRegisterFormFactory
	*/
	public $registerForm;


	/**
	* @inject
	* @var IPasswordChangeFormFactory
	*/
	public $passwordChangeForm;


	/**
	* @inject
	* @var EntityManager
	*/
	public $em;


	/**
	* @inject
	* @var ICategoryFormFactory 
	*/
	public $categoryForm;


	/**
	* @inject
	* @var Repository\Posts
	*/
	public $posts;


	/**
	* @inject
	* @var Repository\Users
	*/
	public $users;


	/**
	* @inject
	* @var Repository\Categories
	*/
	public $categories;


	/**
	* @var Post
	*/
	private $post;


	/**
	* @var Category
	*/
	private $category;


	/**
	* @var User
	*/
	private $user;


	public function startup()
	{
		parent::startup();

		if(!$this->getUser()->isAllowed('Admin', 'read')){
			$this->redirect(':Sign:in', ['backlink' => $this->storeRequest()]);
		}
	}


	public function actionAddPost()
	{
		$this->post = NULL;	
	}


	public function actionEditPost($post_id) 
	{
		$post = $this->posts->findOneBy(['id' => $post_id]);

		if($post){
			$this->post = $post;
		} else {
			$this->error('Článek nenalezen');
		}
	}


	public function actionEditCategory($category_id) 
	{
		$category = $this->categories->findOneBy(['id' => $category_id]);

		if($category){
			$this->category = $category;
		} else {
			$this->error('Kategorie nenalezena');
		}
	}


	public function actionEditUser($user_id)
	{
		$user = $this->users->findOneBy(['id' => $user_id]);

		if($user){
			$this->user = $user;
		} else {
			$this->error('Uživatel nenalezen');
		}
	}


	public function renderEditUser($user_id) 
	{
		$this->template->user_info = $this->user;
	}


	/**
    * @secured
    */
	public function handleDeleteUser($user_id)
	{
		$user = $this->users->findOneBy(['id' => $user_id]);

		if($user){
			$this->em->remove($user);
			$this->em->flush();
			$this->redirect('this');
		} else {
			$this->error('Uživatel nenalezen');
		}
	}

	/**
	* @secured
	*/
	public function handleDeletePost($post_id)
	{
		$post = $this->posts->findOneBy(['id' => $post_id]);

		if($post) {
			$this->em->remove($post);
			$this->em->flush();
			$this->redirect('this');
		} else {
			$this->error('Článek nenalezen');
		}
	}

	/**
	* @secured
	*/
	public function handleDeleteCategory($category_id)
	{
		$category = $this->categories->findOneBy(['id' => $category_id]);

		if($category){
			$this->em->remove($category);
			$this->em->flush();
			$this->redirect('this');
		} else {
			$this->error('Kategorie nenalezena');
		}
	}


	public function renderUsers() 
	{
		$this->template->users = $this->users->findAll();
	}


	public function renderCategories()
	{
		$this->template->categories = $this->categories->findAll();
	}


	public function renderPosts()
	{
		$this->template->posts = $this->posts->findAll();
	}


	protected function createComponentPostForm()
	{
		$form = $this->postForm->create();

		if($this->post) {
			$form->setPost($this->post);
		}

		$form->onPost[] = function() {
			$this->redirect(':Homepage:default');
		};

		return $form;
	}


	protected function createComponentPasswordChangeForm() 
	{
		$form = $this->passwordChangeForm->create($this->user);

		return $form;
	}


	protected function createComponentRegisterForm() 
	{
		$form = $this->registerForm->create();

		return $form;
	}


	protected function createComponentCategoryForm()
	{
		$form = $this->categoryForm->create();

		if($this->category) {
			$form->setCategory($this->category);
		}

		$form->onAdded[] = function() {
			$this->redirect('Admin:categories');
		};

		return $form;
	}

}