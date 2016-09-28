<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use \Doctrine\Common\Collections\ArrayCollection;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="category",options={"engine":"MyISAM"})
 */
class Category extends BaseEntity
{
    
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }


    use Identifier;


    /**
    * @ORM\Column(type="string") 
    */
    private $name;


    /**
    * @ORM\Column(type="string") 
    */
    private $description;


    /**
    * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
    * @ORM\OrderBy({"date" = "DESC"})
    */
    private $posts;


    public function getName() {
        return $this->name;
    }


    public function getDescription() {
        return $this->description;
    }


    public function getPosts() {
        return $this->posts;
    }


    public function setName($name) {
        $this->name = $name;
    }


    public function setDescription($description) {
        $this->description = $description;
    }


    public function setPosts($posts) {
        $this->posts = $posts;
    }

}