<?php 

    class Cat{
        public $name;
        public $health;
        public $power;
        public $alive;

        public function __construct( string $name, int $health, int $power){
            this->name = $name; //имя
            this->health = $health; //здоровье
            this->power = $power; //сила
            this->alive = true; //жив

        }

        public function calcDamage(){ // урон
            return $this->power * (mt_rand(1, 3) / 0.5);
        }

        public function getDamage (int $damage){
            $this->health -= $damage;
        }
    }

    $barsik = new Cat('barsik', 100, 10);

    $barsik->calcDamage();

    echo '<pre>';
    print_r( $barsik );
    echo '<pre>';

?>