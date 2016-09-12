<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user",options={"engine":"MyISAM"})
 */
class User extends BaseEntity
{

    use Identifier;


    /**
    * @ORM\Column(type="string") 
    */
    protected $username;


    /**
    * @ORM\Column(type="string") 
    */
    protected $password;


    /**
    * @ORM\Column(type="string") 
    */
    protected $role;

}