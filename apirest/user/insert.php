<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $user_user = $_GET["user_user"];
        $user_name = $_GET["user_name"];
        $user_lastname = $_GET["user_lastname"];
        $user_city = $_GET["user_city"];
        $user_country = $_GET["user_country"];
        $user_photo = $_GET["user_photo"];
        $user_born = $_GET["user_born"];
        $user_password = $_GET["user_password"];
        $user_height = $_GET["user_height"];
        $user_weight = $_GET["user_weight"];
        


        $my_query = "insert into user (user_user, user_name, user_lastname, user_city, user_country, user_photo, user_born, user_password, user_height, user_weight) values('".$user_user."','".$user_name."','".$user_lastname."','".$user_city."','".$user_country."','".$user_photo."','".$user_born."','".$user_password."','".$user_height."','".$user_weight."')";
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        } 
    } else {
        echo 'unknown error';
    }


?>