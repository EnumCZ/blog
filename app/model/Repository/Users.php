<?php

namespace App\Model\Repository;

use App\Model\Entity;
use Nette,
Nette\Utils;
use Kdyby;


/**
* Class Users
* @package Model
*/
class Users extends Nette\Object
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
        $this->repository = $entityManager->getRepository(Entity\User::getClassName());
    }


    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }


    public function findAll()
    {
        return $this->repository->findAll();
    }

}