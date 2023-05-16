<?php

class Login {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function validarCredenciales($username, $password) {
        if ($this->username === $username && $this->password === $password) {
            return true;
        } else {
            return false;
        }
    }

}

class Register{
    public $model;
    public $name;
    public $brand;
    public $price;
    public $type_product;
    public $serial_number;
    public $release_date;
    public $arrive_date;
    public $size;
    public $color;
    public $number_cameras;
    public $storage;
    public $refresh_rate;
    public $ram;
    public $android;
    public $cpu;
    public function __construct($model, $name, $brand, $price, $type_product, $serial_number, $release_date, $arrive_date, 
    $size, $color, $number_cameras , $storage, $refresh_rate, $ram, $android, $cpu)
    {
        $this->model = $model;
        $this->name = $name;
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
        $this->type_product = $type_product;
        $this->serial_number = $serial_number;
        $this->release_date = $release_date;
        $this->arrive_date = $arrive_date;
        $this->size = $size;
        $this->color = $color;
        $this->number_cameras = $number_cameras;
        $this->storage = $storage;
        $this->refresh_rate = $refresh_rate;
        $this->ram = $ram;
        $this->android = $android;
        $this->cpu = $cpu;
    }
}


// class Logout{
//     function logout() {
        
//         session_destroy();
//         unset($submit_login['email']);
//         unset($submit_login['password']);
//     }
    

// }


