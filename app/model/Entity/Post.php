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
    private $slug;


    /**
    * @ORM\Column(type="text") 
    */
    private $title;


    /**
    * @ORM\Column(type="text") 
    */
    private $body;


    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts") 
    */
    private $category;


    /**
    * @ORM\Column(type="datetime")
    */
    private $date;


    /**
    * @ORM\Column(type="boolean", nullable=FALSE)
    */
    private $disable_comments;


    public function getSlug() {
        return $this->slug;
    }


    public function getTitle() {
        return $this->title;
    }


    public function getBody() {
        return $this->body;
    }


    public function getCategory() {
        return $this->category;
    }


    public function getDate() {
        return $this->date;
    }


    public function getDisable_comments() {
        return $this->disable_comments;
    }


    public function setSlug($slug) {
        $this->slug = $slug;
    }


    public function setTitle($title) {
        $this->title = $title;
    }


    public function setBody($body) {
        $this->body = $body;
    }


    public function setCategory($category) {
        $this->category = $category;
    }


    public function setDate($date) {
        $this->date = $date;
    }


    public function setDisable_comments($disable_comments) {
        $this->disable_comments = $disable_comments;
    }

}