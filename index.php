<?php 

class Movie{

    public $name;
    public $year;
    public $rating;

    public function __construct($name, $year, $rating){
        $this->name=$name;
        $this->year=$year;
        $this->rating=$rating;

    }

    public function getYear(){
        return $this->year;

    }

};

$firstMovie= new Movie("trottola", 2022 , 4);

$secondMovie= new Movie("calciatore", 2012 , 2);


var_dump($firstMovie->getYear());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Film</h1>
        <ul>
            <li> Nome: <?php echo $firstMovie->name ?> </li>
            <li> Anno di uscita:<?php echo $firstMovie->year ?>  </li>
            <li> voto: <?php echo $firstMovie->rating ?>  </li>
        </ul>

        <ul>
            <li> Nome: <?php echo $secondMovie->name ?> </li>
            <li> Anno di uscita:<?php echo $secondMovie->year ?>  </li>
            <li> voto: <?php echo $secondMovie->rating ?>  </li>
        </ul>

    </main>
    
</body>
</html>



