<?php 

declare(strict_types=1);

class UserStatuses{
    const CREATED = 0;
    const ACTIVATE = 1;
    const BANED = 2;
}

class User{
    public $id;
    public $login;
    public $name;
    public $created;

    private $status;
    private $now;
    public function __construct(int $id, string $login, int $status, string $name, int $created){
        $this->id = $id;
        $this->login = $login;
        $this->status = $status;
        $this->name = $name;
        $this->created = $created;
        $this->now = time();
    }

    public function isActive(){
        return $this->status == UserStatuses::ACTIVATED;
    }
    
    public function activate(){
        $this->status = UserStatuses::ACTIVATE;
    }

    public function ban(){
        $this->status = UserStatuses::BANED;
    }

}

$user1 = new User(1, 'admin', 0, 'Anton', 1709403249);

$user1->activate();

echo '<pre>';
print_r($user1);
echo '</pre>';

phpinfo();