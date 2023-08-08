<?php

require_once('index.php');

class Post {
    protected $titolo;
    public $categoria;
    protected $tag;

    public function __construct($titolo, Category $categoria, $tag)
    {   
        $this->titolo=$titolo;
        $this->categoria=$categoria;
        $this->tag=$tag;
    }
}

$test_post=new Post("Titolo",new Storia,"Tag");
var_dump($test_post);
$test_post->categoria->getMyCategory();
