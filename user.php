<?php

require_once "database.php";

class User extends Database{

    public function register($first_name, $last_name, $email, $password){

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$password')";

        if($this->conn->query($sql)){

            header('location: ../views');
            exit;
        }else{
            die('Error in Registering: '.$this->conn->error);
        }

    }


    public function login($email, $password){
        $sql = "SELECT * FROM users WHERE email = '$email'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password'])){
                session_start();

                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $user['email'];


                if($user['role'] == 'A'){
                    header("location: ../admin/dashboard.php");
                }elseif($user['role'] == 'U'){
                    header("location: ../views/");
                }
                exit;

            }else{
                die("Your Password is incorrect");
            }

        }else{
            die("Your account not found");
        }
    }














}


?>