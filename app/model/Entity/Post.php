<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="post",options={"engine":"MyISAM"})
 */
class Post extends BaseEntity
{

    use Identifier;


    /**
    * @ORM\Column(type="string", unique=TRUE) 
    */
    protected $slug;


    /**
    * @ORM\Column(type="text") 
    */
    protected $title;


    /**
    * @ORM\Column(type="text") 
    */
    protected $body;


    /**
    * @ORM\Column(type="string", nullable=TRUE) 
    */
    protected $author;


    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts") 
    */
    protected $category;


    /**
    * @ORM\Column(type="datetime", nullable=FALSE, options={"default"="CURRENT_TIMESTAMP"})
    */
    protected $date;


    /**
    * @ORM\Column(type="boolean", nullable=FALSE)
    */
    protected $disable_comments;

}