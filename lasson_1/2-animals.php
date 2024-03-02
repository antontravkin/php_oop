<?php 
    class Animals{
        public $animal;
    }

    class Cat{
        public $name;
        public $health;
        public $power;
        public $alive;

        public function __construct( string $name, int $health, int $power){
            this->name = $name;
            this->health = $health;
            this->power = $power;
            this->alive = true;

        }
    }
?>