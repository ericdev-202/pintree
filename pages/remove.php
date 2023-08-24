<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM events_list WHERE Id=$id");
        $stmt -> execute();

    }
    header('location:events_list.php');
?>