<?php 

    class Human {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function say() {
            echo "Меня зовут ".$this->name." и ";

        }
    }

    class Man extends Human {

        public function beard() {
            echo "у меня растет борода";
        }
    }

    class Woman extends Human {
        public function beardChildren() {
            echo "я рожаю детей";
        }
    }

    $man = new Man("Владимир");
    $man->say();
    $man->beard();
    
    echo "<br>";

    $woman = new Woman("Мария");
    $woman->say();
    $woman->beardChildren();



?>