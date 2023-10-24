<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__ . '/../connection.php');
        $id_achievement = $_GET["id_achievement"];
        $my_query = "delete from achievement where id_achievement =".$id_achievement;
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        }
        
    } else {
        echo 'unknown error';
    }

?>