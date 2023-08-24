<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["id"]= $_GET['Id'];
    $id = $_SESSION["id"];
    $statement = $con -> prepare("SELECT * FROM events_list WHERE Id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">img:</label>
                                    <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img" >
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Event Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="EventName" value="<?php echo $table['EventName']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Location:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Location" value="<?php echo $table['Location']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Description" value="<?php echo $table['Description']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Charges:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Charges" value="<?php echo $table['Charges']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date of Event:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="DateOfEvent" value="<?php echo $table['DateOfEvent']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update Event</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>