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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-dark">Advanced CRUD APP</h3>
                <hr>
                <?php if(isset($_SESSION['response'])){ ?>
                <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
   <b><?= $_SESSION['response']; ?>
  
</div>
<?php } unset($_SESSION['response']); ?>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <h3 class="text-center text-info">Add Record</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<? $id; ?>">
            <div class="form-group">
                <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="Enter name" required>
</div>
<div class="form-group">
                <input type="email" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter e-mail" required>
</div>
<div class="form-group">
                <input type="tel" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="Enter phone" required>
</div>
<div class="form-group">
                <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                <input type="file" name="image" class="custom-file">
                <img src="<?= $photo; ?>" width="120" class="img-thumbnail">

</div>
<div class="form-group">
  <?php if($update==true){ ?>
    <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
    <?php } else{ ?>
    <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
    <?php } ?>
</div>
        </form>
</div>
<div class="col-md-8">
    <?php 
    $query="SELECT * FROM crud";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    ?>
<h3 class="text-center text-info">Records Present In The Database</h3>
<table class="table  table-hover">
    <thead>
      <tr>
        
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php while($row=$result->fetch_assoc()){ ?>
      <tr>
      
		
        <td><?=$row['id']; ?></td>
        <td><img src="<?= $row['photo']; ?>" width="25"></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td>
            <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a>
            <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-primary p-2" onclick="return confirm('Do you want delete this record..?');">Delete</a>
            <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>

</td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>

</body>

</html>