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
    <title>Admin Panel - dashboard</title>
    <?php require('include/links.php'); 
    require('include/essentials.php');?>
</head>
<body class="bg-light"> 
    
<?php require('include/header.php'); ?>


  <div class="container-fluid p-4" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">

</div>
</div>
  </div>  
<?php require('include/script.php'); ?>
</body>
</html>