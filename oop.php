<?php 

// $value = "Hi!";
// echo $value;

class Human {

    private $words;

    public function setWords($words) {
        $this->words = $words;
    }

    public function getWords() {
        return $this->words;
    }

    public function sayIt() {
        return $this->getWords();
    }

}

$human = new Human();

$human->setWords("Hi!");
echo $human->sayIt();


?>