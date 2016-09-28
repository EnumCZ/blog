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
    private $username;


    /**
    * @ORM\Column(type="string") 
    */
    private $password;


    /**
    * @ORM\Column(type="string") 
    */
    private $role;


    public function getUsername() {
        return $this->username;
    }


    public function getPassword() {
        return $this->password;
    }


    public function getRole() {
        return $this->role;
    }


    public function setUsername($username) {
        $this->username = $username;
    }


    public function setPassword($password) {
        $this->password = $password;
    }


    public function setRole($role) {
        $this->role = $role;
    }

}