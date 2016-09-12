<?php

namespace App\Model\Repository;

use App\Model\Entity;
use Nette,
Nette\Utils;
use Kdyby;

/**
* Class Categories
* @package Model
*/
class Categories extends Nette\Object
{

    /**
    * @var Kdyby\Doctrine\EntityManager
    */
    private $em;

    /**
    * @var Kdyby\Doctrine\EntityRepository
    */
    private $repository;

    /**
    * @param Kdyby\Doctrine\EntityManager
    */
    public function __construct(Kdyby\Doctrine\EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $entityManager->getRepository(Entity\Category::getClassName());
    }


    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }


    public function findAll()
    {
        return $this->repository->findAll();
    }


    public function getCategoryNames()
    {
        $categories = $this->findAll();
        $category_names = [];

        foreach($categories as $category) {
            $category_names[$category->name] = $category->name;
        }

        return $category_names;
    }

}