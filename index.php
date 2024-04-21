<?php require('connection.php'); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint"content="width=device-width, initial-scale=1.0">

<title>Clvr Bikes - Home</title>
<?php require('include/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<style>

    
.availability-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width:575px){
  .availability-form{
  margin-top: 25px;
padding: 0 35px ;  
} 
}
    </style>

</head>
    <body class="bg-light">

    <?php require('include/header.php'); ?>
<!-- carousel swiper js -->

<div class="container-fluid px-lg-1 mt-2 ">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="image/carousel/view-cool-powerful-motorcycle.jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/mid journey.jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/cool-motorcycle-indoors.jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/2150849303 (2).jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/brand-new-shiny-black-retro-chopper-is-parked-brick-building.jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/bikes/2150810235.jpg" class="w-100 d-block" >
      </div>
      <div class="swiper-slide">
        <img src="image/carousel/amazing-brand-new-motorbike-is-standing-dark-underground-parking.jpg" class="w-100 d-block" >
      </div>
     
    </div>
    </div>
    
  </div>
 



<!-- check availability form-->
<div class="container availability-form">
<div class="row">
  <div class="col-lg-12 bg-white shadow p-4 rounded">
    <h5 class="mb-4">Feedback</h5>
    <form action="https://api.web3forms.com/submit" method="POST">
      <div class="row align-items-end">
        <div class="col-lg-15 mb-2">
        <input type="hidden" name="access_key" value="af5ffeeb-4b63-4fda-a955-ecc7adc38939">
        <textarea name="message" required class="form-control shadow-none"  rows="4" style=resize:none></textarea>
      </div>
          <div class="col-lg-12 text-center mt-5 ">
            <button type="submit" class="btn text-white shadow-none custom-bg ">Submit</button>
          </div>
      </div>
    </form>
</div>
</div>
</div>


<!-- Our Bikes -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Bikes</h2>

<div class="container">
<div class="row">



<div class="col-log-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width:350px; margin: auto;">
    <img src="Image/bikes/classic350redditchred.png" class="card-img-top" >
   <div class="card-body">
      <h5 >Royal Enfield Classic 350</h5>
      <h6 class="mb-4">Price Starting from ₹ 1,93,080</h6>
      <div class="features mb-4">
<h6 class="mb-1">Engine</h6>
<span class="badge bg-light text-dark tesxt-wrap lh-base">
  349.82cc
</span>

      </div>
      <div class="Facilities mb-4">
        <h6 class="mb-1">Max Power</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        20.2 bhp @ 6100 rpm
      </span>
      </div>
      <div class="Guest mb-4">
        <h6 class="mb-1">Max Torque</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        27 Nm @ 4000 rpm
      </span>
      </div>
      <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

      </div>
    <div class="d-flex justify-content-evenly mb-2">
<a href="https://www.bikewale.com/royalenfield-bikes/classic-350/" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>

 </div>
  </div>
  </div>
</div>

<div class="col-log-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width:350px; margin: auto;">
    <img src="Image/bikes/ns4.png" class="card-img-top" >
   <div class="card-body">
      <h5 >Pulsar NS200</h5>
      <h6 class="mb-4">Price Starting from ₹ 1,42,055</h6>
      <div class="features mb-4">
<h6 class="mb-1">Engine</h6>
<span class="badge bg-light text-dark tesxt-wrap lh-base">
199.5 cc
</span>

      </div>
      <div class="Facilities mb-4">
        <h6 class="mb-1">Max Power</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        24.13 bhp @ 9750 rpm
      </span>
      </div>
      <div class="Guest mb-4">
        <h6 class="mb-1">Max Torque</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        18.74 Nm @ 8000 rpm
      </span>
      </div>
      <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

      </div>
    <div class="d-flex justify-content-evenly mb-2">
<a href="https://www.bikewale.com/bajaj-bikes/pulsar-ns/" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>

 </div>
  </div>
  </div>
</div>

<div class="col-log-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width:350px; margin: auto;">
    <img src="Image/bikes/d3.png" class="card-img-top" >
   <div class="card-body">
      <h5 >Dominar 400</h5>
      <h6 class="mb-4">Price Starting from ₹ 122408/-</h6>
      <div class="features mb-4">
<h6 class="mb-1">Engine</h6>
<span class="badge bg-light text-dark tesxt-wrap lh-base">
373.3 cc
</span>

      </div>
      <div class="Facilities mb-4">
        <h6 class="mb-1">Max Power</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        39.68bhp @8750rpm
      </span>
      </div>
      <div class="Guest mb-4">
        <h6 class="mb-1">Max Torque</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        35 Nm @6750rpm
      </span>
      </div>
      <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

      </div>
    <div class="d-flex justify-content-evenly mb-2">
<a href="https://www.bikewale.com/bajaj-bikes/dominar-400/" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>

 </div>
  </div>
  </div>
</div>

<div class="col-log-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width:350px; margin: auto;">
    <img src="Image/bikes/n3.png" class="card-img-top" >
   <div class="card-body">
      <h5 >Pulsar N160</h5>
      <h6 class="mb-4">Price Starting from ₹ 122408/-</h6>
      <div class="features mb-4">
<h6 class="mb-1">Engine</h6>
<span class="badge bg-light text-dark tesxt-wrap lh-base">
  160.82cc
</span>

      </div>
      <div class="Facilities mb-4">
        <h6 class="mb-1">Max Power</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        15.68bhp @8750rpm
      </span>
      </div>
      <div class="Guest mb-4">
        <h6 class="mb-1">Max Torque</h6>
        <span class="badge bg-light text-dark tesxt-wrap lh-base">
        14.65 Nm @6750rpm
      </span>
      </div>
      <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
        <i class="bi bi-star-fill  text-warning"></i>
       
        </span>

      </div>
    <div class="d-flex justify-content-evenly mb-2">
<a href="https://www.bajajauto.com/bikes/pulsar/pulsar-ns160" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>

 </div>
  </div>
  </div>
</div>


    
<!--reach us-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US </h2>
<div class="container">
  <div class="row">
  <div class="col-lg-8 col-md p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19404.15409238678!2d76.77074996470435!3d30.712714542268433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec53c07ea637%3A0x60ac0940e3360c5a!2sTerraced%20Garden!5e0!3m2!1sen!2sin!4v1713332756913!5m2!1sen!2sin"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="bg-white p-4 rounded mb-4">
      <h5> Call Us </h5>
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
</div>
<div class="bg-white p-4 rounded mb-4">
       <h5> Follow Us </h5>
       <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-instagram me-1"></i> Instagram
       </a>
           <br>
       <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
         <i class="bi bi-facebook me-1"></i> Facebook
        </a>       <br>
        <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-youtube me-1"></i> You Tube
         </a> 
       
    </div>
    </div>

    </div>
  </div>
</div>

<?php require('include/footer.php'); ?>



<div class="modal fade"  id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="https://api.web3forms.com/submit" method="POST"  id="register-form">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" >
        <i class="bi bi-person-fill-up fs-3 me-2"></i>User Register</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge bg-light text-dark mb-3 tesxt-wrap lh-base">Note: Your details must match with ID</span>

      <div class ="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
          <input type="hidden" name="access_key" value="af5ffeeb-4b63-4fda-a955-ecc7adc38939">
          <label  class="form-label">First Name</label>
    <input name="fname" placeholder="fname" type="text" class="form-control shadow-none" required >
          </div>
          <div class="col-md-6 p-0 mb-3">
          <label  class="form-label">Last Name</label>
    <input name="lname" placeholder="lname" type="text" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Phone Number</label>
    <input name="phone" placeholder="phoneno" type="number" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 p-0 mb-3">
          <label  class="form-label">Email address</label>
    <input name="email" placeholder="email" type="email" class="form-control shadow-none" required >
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Profile Picture </label>
    <input name="profile" placeholder="profile" type="file" accept=".jpg, .png, .jpeg" class="form-control shadow-none"  >
          </div>
          <div class="col-md-12 ps-0 mb-3">
          <label  class="form-label">Address</label>
    <textarea name="address" placeholder="address" class="form-control shadow-none"  rows="3" required></textarea>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Pincode</label>
    <input name="pin" placeholder="pin" type="number" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 p-0 mb-3">
          <label  class="form-label">Date of birth</label>
    <input name="dob" type="date" placeholder="dob" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Password</label>
    <input name="pass" type="password" placeholder="pass" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 p-0 mb-3">
          <label  class="form-label">Confirm Password</label>
    <input name="cpass" placeholder="cpass" type="password" class="form-control shadow-none" required>
          </div>
      </div>
      <div class="text-center" my-1>
      <button type="submit" class="btn btn-dark shadow-none" name="register" >REGISTER</button>
      </div>
      </div>
</form>
    </div>
  </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
    loop:true,
    autoplay:{
      delay:3500,
      disableOnInteraction:false,
    }
  });
  </script>


<script>
const script='https://script.google.com/macros/s/AKfycbwp94TRhvfqqgw6zSOWP2rvSQfVlMVH-pudMzGjan43bPe_hPONe53sN_6ijBZirSktPw/exec'
const form=document.forms['google-sheet']

form.addEventListener('submit', e=>{
  e.preventDefault()
  fetch(scriptURL,{
    method: 'POST',
    body: new FormData(form)
  })
  .then(response=> alert("Thanks for contacting us. We will get back to you soon."))
  .catch(error => console.error('Error!', error.message))
 
})

</script>
  
  </body>
</html>