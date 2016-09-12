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
    protected $name;


    /**
    * @ORM\Column(type="string") 
    */
    protected $description;


    /**
    * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
    * @ORM\OrderBy({"date" = "DESC"})
    */
    protected $posts;

}