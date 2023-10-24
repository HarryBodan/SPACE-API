<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $achievement_name = $_GET["achievement_name"];
        $achievement_description = $_GET["achievement_description"];
        
        $my_query = "insert into achievement (achievement_name, achievement_description) values('".$achievement_name."','".$achievement_description."')";
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        } 
    } else {
        echo 'unknown error';
    }
?>