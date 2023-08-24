<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        $image = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];  
        $folder = "../assets/img/".$image;
        
        if(move_uploaded_file($tempname,$folder)){
            echo 'images est uplade';
        }

        $EventName = $_POST['EventName'];
        $CategoryName = $_POST['CategoryName'];
        $Location = $_POST['Location'];
        $Description = $_POST['Description'];
        $Charges = $_POST['Charges'];
        $DateOfEvent = $_POST['DateOfEvent'];

        $requete = $con->prepare("INSERT INTO events_list(img,EventName,CategoryName,Location,Description,Charges,DateOfEvent) VALUES('$image','$EventName','$CategoryName','$Location','$Description','$Charges','$DateOfEvent')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:events_list.php')
    ?>