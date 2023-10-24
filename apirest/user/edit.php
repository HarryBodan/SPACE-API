<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $id_user = $_GET["id_user"];
        $user_password = $_GET["user_password"];

        $my_query = "UPDATE user SET user_password = '".$user_password."' WHERE id_user = ".$id_user;
        $result = $mysql->query($my_query);

        if($result === false){
            echo 'error';
            echo $result;
        }

    } else {
        echo 'unknown error';
    }

?>