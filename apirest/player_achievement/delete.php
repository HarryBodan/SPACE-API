<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $id_user = $_GET["id_user"];
        $my_query = "delete from player_achievement where id_user =".$id_user;
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        }
        
    } else {
        echo 'unknown error';
    }

?>