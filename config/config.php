<?php
session_start();
$autoload =  function ($class){
    include 'app/'.$class.'.php';
};
spl_autoload_register($autoload);
define('HOST','localhost');
define('DBNAME','crud_db');
define('USER','root');
define('PASS','');

?>
