<?php 

class Movie{

    public $name;
    public $year;
    public $rating;

    public function __construct($name, $year, $rating){
        $this->name=$name;
        $this->year=$year;
        $this->name=$rating;

    }

};

$firstMovie= new Movie("trottola", 2022 , 4);

$secondMovie= new Movie("calciatore", 2012 , 2);



