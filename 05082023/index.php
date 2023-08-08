<?php 
abstract class Category {
    abstract public function getMyCategory();
}

class News extends Category {
    public function getMyCategory(){
        echo "La mia categoria è News \n";
    }
}

class Sport extends Category {
    public function getMyCategory(){
        echo "La mia categoria è Sport \n";
    }
}

class Gossip extends Category {
    public function getMyCategory(){
        echo "La mia categoria è Gossip \n";
    }
}

class Storia extends Category {
    public function getMyCategory(){
        echo "La mia categoria è Storia \n";
    }
}

$test_news=new News();
$test_sport=new Sport();
$test_gossip=new Gossip();
$test_storia=new Storia();

$test_news->getMyCategory();
$test_sport->getMyCategory();
$test_gossip->getMyCategory();
$test_storia->getMyCategory();

// var_dump($test_news);
// var_dump($test_sport);
// var_dump($test_gossip);
// var_dump($test_storia);