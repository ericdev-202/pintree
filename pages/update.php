<?php
session_start();
$id = $_SESSION['id'];
include 'conixion.php';
if (isset($_POST['submit'])){
    $EventName = $_POST['EventName'];
    $Location = $_POST['Location'];
    $Description = $_POST['Description'];
    $Charges = $_POST['Charges'];
    $DateOfEvent = $_POST['DateOfEvent'];


    $requete = $con -> prepare("UPDATE events_list 
    SET 
    EventName = '$EventName',
    Location = '$Location',
    Description = '$Description',
    Charges = '$Charges',
    DateOfEvent = '$DateOfEvent'
    WHERE Id = $id");
    $res = $requete -> execute();
    header("location:events_list.php");
}
?>