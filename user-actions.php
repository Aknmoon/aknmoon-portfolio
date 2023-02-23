<?php

require_once "../classes/user.php";

$user_obj = new User;

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_obj->register($first_name, $last_name, $email, $password);
}
elseif(isset($_POST['btn_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_obj->login($email, $password);
}
?>