<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $id_user = $_GET["id_user"];
        $id_achievement = $_GET["id_achievement"];
        
        $my_query = "insert into player_achievement (id_user, id_achievement) values('".$id_user."','".$id_achievement."')";
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        } 
    } else {
        echo 'unknown error';
    }


?>