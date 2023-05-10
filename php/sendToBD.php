<?php
    session_start();
    require("connectBD.php");

    $link = $conn->real_escape_string( $_POST['link']);
    $name = $conn->real_escape_string($_POST['nameJournal']);
    $note = $conn->real_escape_string($_POST['note']);
    $today = date("Y-m-d H:i:s"); 
    $id_user = $_SESSION['userArr'][0][0];
    //echo $name;
    if (!mysqli_query($conn,"INSERT INTO `journals` (`id`, `user_id`, `name`, `note`, `link`, `date`) VALUES (NULL, '$id_user', '$name', '$note', '$link', '$today') ")) {
        echo "Ошибка при записи";
    }
       
    header ('Location: /index.php');   
?>