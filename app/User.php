<?php


class User{

    public $name;
    public $pass;
    public $id;

    public function Login(){
       $login = new Mysql('users_tb');
       $login->setLogin([
           'name'=>$this->name,
           'pass'=>$this->pass
       ]);
}

}
