<?php
require('include/essentials.php');
require('include/db_config.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admion Panel - Rooms</title>
	<?php require('include/links.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</head>
<body class="bg-light">

<?php require('include/header.php') ;?>

<div class="container-fluid" id="main-content" >
<div class="row">
	<div class="col-lg-10 ms-auto p-4 overflow-hidden">
<h3 class="mb-4">Rooms</h3>

<div class="card-body">

<div class="text-end mb-4 ">
<button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room" >

<i class="bi bi-plus-square"></i> Add	
</button>

</div>
	
<div class="table-responsive-lg" style="height: 450px; overflow-y:scroll;" >

<table class="table table-hover border">
	<thead>
		<tr class="bg-dark text-light" >
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Area</th>
			<th scope="col">Guests</th>
			<th scope="col">Price</th>
			<th scope="col">Quantity</th>
			<th scope="col">Status</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody id="room-data" >
	</tbody>
</table>
</div>
</div>

	</div>
</div>
</div>
</div>







<!--- Add room Model -->


<div class="modal fade " id="add-room" data-bs-backdrop="static" data-bs-keyword="true" tabindex="-1" aria-labelledby="staticBackdropLabel" >
	<div class="modal-dialog" >
<form id="add_room_form" autocomplete="off">
	<div class="modal-content" >
<div class="modal-header"  >
<h5 class="col-md-6 mb-3"> Add Room</h5>
</div>
<div class="modal-body">
	<div class="row" >
	<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Name</label>
		<input type="text" name="name" class="form-control shadow-none" required>
</div>	

	<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Area</label>
		<input type="number" min="1" name="area" class="form-control shadow-none" required>
</div>	

	<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Price</label>
		<input type="number" name="price" class="form-control shadow-none" required>
</div>	

	<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Quantity</label>
		<input type="number" name="quantity" class="form-control shadow-none" required>
</div>	
<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Adults</label>
		<input type="number" name="adults" class="form-control shadow-none" required>
</div>	
<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Children</label>
		<input type="number" name="children" class="form-control shadow-none" required>
</div>
<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">Heater</label>
		<input type="number" max="3" name="heater" class="form-control shadow-none" required>
</div>
<div class="col-md-6 mb-3" >
        <label class="form-label fw-bold">Wifi</label>
		<input type="number" max="2" name="wifi" class="form-control shadow-none" required>
</div>
<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">T.V</label>
		<input type="number" max="1" name="t.v" class="form-control shadow-none" required>
</div>
<div class="col-md-6 mb-3" >
		<label class="form-label fw-bold">AC</label>
		<input type="number" max="2" name="ac" class="form-control shadow-none" required>
</div>	


	</div>
	<div class="modal-footer" >
		<button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal" >CANCEL</button>
		<button type="submit" class="btn custom-bg text-white shadow-none" >SUBMIT</button>

	</div>

</div>
	</div>

</form>
	</div>

</div>




</body>
</html>
