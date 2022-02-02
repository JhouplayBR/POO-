<?php

class Mysql
{
    private $table;

    private $conn;

    function __construct($table = null){
        $this->table = $table;
        $this->ConnectDataBase();
    }

    public function ConnectDataBase(){
        try {
            $this->conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e){
            die('NÃO POSSIVEL SE CONECTAR COM SERVIDOR');
        }
    }

    private function Connect($query,$params = []){
        try {
            $smtp = $this->conn->prepare($query);
            $smtp->execute();
            return $smtp;
        }catch (Exception $e){
            echo($e->getMessage());
        }
    }

    public function setLogin($arr){
        $query = 'SELECT * FROM `'.$this->table.'` WHERE name = "'.$arr['name'].'" AND pass ='.intval($arr['pass']);
        print_r($query);
        print_r(array_values($arr));
       $test = $this->Connect($query,'');
        if ($test->rowCount() == 1){
            $infos  = $test->fetch();
            $_SESSION['user_success'] = true;
            $_SESSION['name'] = $infos['name'];
            $_SESSION['pass'] = $infos['pass'];
            $_SESSION['company'] =  $infos['company'];
            $_SESSION['type'] =  $infos['type'];
            $_SESSION['photo'] =  $infos['photo'];
            $_SESSION['data'] = $infos['data'];
            echo '<script>window.location.href="http://localhost/CRUD/"</script>';
        }else{
            return false;
        }



    }





}
