<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint"content="width=device-width, initial-scale=1.0">

<title>Clvr bikes- Contact</title>
<?php require('include/links.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>



</head>
    <body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark">
</div>

        </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px4">
          <div class="bg-white roubded shadow p-4  ">
            
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19404.15409238678!2d76.77074996470435!3d30.712714542268433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec53c07ea637%3A0x60ac0940e3360c5a!2sTerraced%20Garden!5e0!3m2!1sen!2sin!4v1713332756913!5m2!1sen!2sin"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  <h5>Address</Address></h5>
      <a href="https://maps.app.goo.gl/D5geuFQJAky9mvFE6" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-geo-alt-fill"></i>   Sector 33/a Chandigarh
      </a>    
      <h5 class="mt-4"> Call Us </h5>
      <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i> +917898754639
      </a>
          <br>
      <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i> +919898754639
       </a>    
       <br>
       <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i> +919898752239
       </a>
       <h5 class="mt-4">E-mail</h5>
       <a href="mailto:manishrajput78151j@mail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-envelope-fill"></i> manishrajput78151@gmail.com
       </a>
       <h5 class="mt-4"> Follow Us </h5>
       <a href="#" class="d-inline-block text-dark fs-5 me-2">
        <i class="bi bi-instagram me-1"></i> 
       </a>
           
       <a href="#" class="d-inline-block text-dark fs-5 me-2">
         <i class="bi bi-facebook me-1"></i>
        </a>       
        <a href="t#" class="d-inline-block text-dark fs-5 ">
          <i class="bi bi-youtube me-1"></i> 
         </a> 
</div>
        </div>
      
      
      <div class="col-lg-6 col-md-6 mb-5 px4">
          <div class="bg-white roubded shadow p-4" >
            
         <form  action="https://api.web3forms.com/submit" method="POST">
          <h5>Send a message</h5>
          <div class="mb-3">

          
			<input type="hidden" name="access_key" value="af5ffeeb-4b63-4fda-a955-ecc7adc38939">
            <label class="form-label" style="font-weight: 500;">Name</label>
            <input name="name" required type="text" class="form-control shadow-none">
          </div>

          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">E-mail</label>
            <input name="emai" required type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Subject</label>
            <input name="subject" required type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Message</label>
          
            <textarea name="message" required class="form-control shadow-none"  rows="5" style=resize:none></textarea>
          </div>
          <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send</button>
         </form>
        </div>
        </div>
        
      </div>

    </div>
      
    </div>

<?php
if(isset($_POST['send']))
{
  $frm_data =filteration($_POST);

  $q =" INSERT INTO `user_queries`( `name`, `email`, `message`) VALUES (?,?,?)";
  $values = [$frm_data['name'],$frm_data['email'],$frm_data['message']];

}
  else{
    alert('success', 'sorry, try again later.');

  }

?>

<?php require('include/footer.php'); ?>

   
  </body>
</html>