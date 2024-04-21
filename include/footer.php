<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3"> ClVr Bikes</h3>
      <p text-align-justify>
      ClVr Bikes is a web portal under the renowned GirnarSoft group. We are a team who believe that the customer is king and strive to make sure you are treated like a king. <br>
Our efforts and drive doesn’t just come from one person but from all of our partners and employees. We believe that together we can make your experience one that you never forget.<br> 
That’s why our website is your one stop shop for two wheelers.<br>

      </p>
    </div>
 <div class="col-lg-4 p-4">
<h5 class="mb-3">Links</h5>
<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
<a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Bikes</a><br>
<a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
<a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About </a>
 
</div>
 <div class="col-lg-4 p-4">
 
    <h5> Follow Us </h5>
    <br>
    <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
     <i class="bi bi-instagram me-1"></i> Instagram
    </a><br>
    <a href="tel:+917898754639" class="d-inline-block mb-2 text-decoration-none text-dark">
      <i class="bi bi-facebook me-1"></i> Facebook
     </a>       <br>
     <a href="tel:+917898754639" class="d-inline-block mb- text-decoration-none text-dark">
       <i class="bi bi-youtube me-1"></i> You Tube
      </a>
 </div>
  </div>

</div>
<br><br><br>
<br><br><br>
<br><br><br>

<h6 class="text-center bg-dark text-white p-3 mb-0">Designed & Developed by Manish & Ajay</h6>
<script>

  

let register_form=document.getElementById('register-form');

register-form.addEventListener('submit',(e)=>{
e.preventDefault();
let data = new FormData(register_form);

data.append('fname', register_form.elements['fname'].value);
data.append('lname', register_form.elements['lname'].value);
data.append('phone', register_form.elements['phone'].value);
data.append('email', register_form.elements['email'].value);

data.append('address', register_form.elements['address'].value);
data.append('pin', register_form.elements['pin'].value);
data.append('dob', register_form.elements['dob'].value);
data.append('pass', register_form.elements['pass'].value);
data.append('cpass', register_form.elements['cpass'].value);
data.append('profile', register_form.elements['profile'].files[0]);
data.append('register','');

var myModal = document.getElementById('registerModal')
var modal = bootstrap.Modal.getInstance(myModal);
modal.hide();

let xhr = new XMLHttpRequest();
xhr.open('POST','ajax/login_register.php',true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

xhr.onload =function(){
}
xhr.send('data');

});

</script>