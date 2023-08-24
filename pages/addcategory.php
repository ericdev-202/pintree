

<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        

        $CategoryName = $_POST['CategoryName'];

        $Description = $_POST['Description'];


        $requete = $con->prepare("INSERT INTO category(CategoryName,Description) VALUES('$CategoryName','$Description')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:category_list.php')
    ?>    