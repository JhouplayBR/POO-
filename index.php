<?php
include ('config/config.php');
if (isset($_SESSION['user_success'])){
    include ('includes/main.php');
}else{
    include ('login.php');
}
?>
