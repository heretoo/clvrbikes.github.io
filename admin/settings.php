</php
require('include/essentials.php');
require('include/db_config.php');
adminLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - settings</title>
    <?php require('include/links.php'); 
    require('include/essentials.php');?>
</head>
<body class="bg-light"> 
    
<?php require('include/header.php'); ?>


  <div class="container-fluid p-4" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">

<h4 class="mb-4">SETTINGS</h4>

<!---General setting-->

<div class="card" >
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="card-title">General Settings</h5>
      <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#general-s">
  Edit
</button>
    </div>
    <h6 class="card-subtitle mb-1 fw-bold">Site Settings</h6>
    <p class="card-text"> content</p>
    <h6 class="card-text">About Us</h6>
    <p class="card-text">Content</p>
  </div>
</div>

<div class="modal fade" id="general-s" data-bs-backdrop="static" data-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>
  </div>  

<?php require('include/script.php'); ?>
</body>
</html>