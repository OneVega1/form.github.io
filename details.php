<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sahil Kumar">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,
    shrink-to-fit=no">
    <tittle>CRUD APP</tittle>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
   <div class="container">
    <div cass="row justify-content-center">
        <div class="col-md-6 mt-3 bg-info p-4 rounded">
    <h2 class="bg-light p-2 rounded text-center text-dark">ID :<?= $vid; ?></h2>
       <div class="text-center">
        <img src="<?= $vphoto; ?>" width="300" class="img-thumbnail">
       </div>
       <h4 class="text-light">Name : <?= $vname; ?></h4>
       <h4 class="text-light">Email : <?= $vemail; ?></h4>
       <h4 class="text-light">Phone : <?= $vphone; ?></h4>
      
</div>
    </div>
   </div>

   
                
</body>

</html>