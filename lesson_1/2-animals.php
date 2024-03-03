<?php 

    class Animal{
        public $name;
        public $health;
        private $power;
        private $alive;

        public function __construct( string $name, int $health, int $power){
            $this->name = $name; //имя
            $this->health = $health; //здоровье
            $this->power = $power; //сила
            $this->alive = true; //жив
        }

        public function calcDamage(){ // урон
            return $this->power * (mt_rand(100, 300) / 200);
        }

        public function applyDamage (int $damage){
            $this->health -= $damage;
            if ($this->health <= 0){
                $this->health = 0;
                $this->alive = false;
            }
        }
    }

    class Cat extends Animal{
        private $lifes;
        public function __construct(string $name, int $health, int $power){
            parent::__construct($name, $health, $power);
            $this->lifes = 9;
            
        }
    }

    class Dog extends Animal{
        
    }


    class Mouse extends Animal{
        private $hiddenLevel;
        public function __construct(string $name, int $health, int $power){
            parent::__construct($name, $health, $power);
            $this->hiddenLevel = 0;
        }

        public function setHiddenLevel(float $lavel){
            $this->hiddenLevel = $lavel;
        }

        public function applyDamage(int $damage){
            if (mt_rand(1,100)/ 100 > $this->hiddenLevel) {
                parent::applyDamage($damage);
            }
        }
    }

    class GameCore{
        private $unit; //

        public function __construct(){
            $this->units = [];
        }

        public function addUnit(Animal $unit){
            $this->units[] = $unit;
        }

        public function nextTick(){
            foreach ($this->units as $unit){ 
                $damage = $unit->calcDamage();
                var_dump($damage);
            }
        }
    }

    $core = new GameCore();
    $barsik = new Cat('barsik', 100, 10);
    $bobik = new Dog('bobik', 100, 10);
    $jerry = new Mouse('Jerry', 10, 2);
    /* $barsik = new Cat('barsik', 100, 10);
    
      */

    $core->addUnit($barsik);
    $core->addUnit($bobik);
    $core->addUnit($jerry);
    $core->nextTick();

    /* $barsik->calcDamage(10);
    echo '<pre>';
    print_r( $barsik );
    echo '<pre>';  */

?>