<?php

class Article{
    private $title;
    private $summary;
    private $content;
    private $author_name;

    public function __construct($title, $summary, $content, $author_name){
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->author_name= $author_name;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getSummary(){
        return $this->summary;
    }
    public function setSummary($summary){
        $this->summary = $summary;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getAuthorName(){
        return $this->author_name;
    }
    public function setAurthorName($author_name){
        $this->author_name = $author_name;
    }
}

