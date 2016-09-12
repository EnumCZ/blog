<?php

namespace App\Model\Repository;

use App\Model\Entity;
use Nette,
Nette\Utils;
use Kdyby;


/**
* Class Posts
* @package Model
*/
class Posts extends Nette\Object
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
        $this->repository = $entityManager->getRepository(Entity\Post::getClassName());
    }


    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }


    public function findAll()
    {
        return $this->repository->findBy(array(), array('date' => 'DESC'));
    }


    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) {
        return $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }


    public function postLike($word)
    {
        $query = $this->repository->createQueryBuilder('p')
               ->where('p.title LIKE :word')
               ->orWhere('p.body LIKE :word')
               ->setParameter('word', '%'.$word.'%')
               ->getQuery();

        $posts = $query->getResult();

        return $posts;
    }

}