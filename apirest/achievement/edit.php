<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once(__DIR__ . '/../connection.php');
        $id_achievement = $_GET["id_achievement"];
        $achievement_name = $_GET["achievement_name"];
        $achievement_description = $_GET["achievement_description"];

        $my_query = "UPDATE achievement SET achievement_name = '".$achievement_name."', achievement_description = '".$achievement_description."' WHERE id_achievement = ".$id_achievement;
        $result = $mysql->query($my_query);

        if($result === false){
            echo 'error';
            echo $result;
        }

    } else {
        echo 'unknown error';
    }

?>