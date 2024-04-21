<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint"content="width=device-width, initial-scale=1.0">

<title>Base project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">


<style>

    *{
        font-family: 'Kanit', sans-serif;

font-family: 'Poppins', sans-serif;
    }
    .h-font{
        font-family: 'Merienda', cursive;

    }
.slider{
  height: 100vh;
  margin-top: -50px;
  position: relative;
}
.slider .list .item{
  position: absolute;
  inset: 0 0 0 0;
  overflow: hidden;
  opacity: 0;
  transition: .5s;
}
.slider .list .item .img{
  width: 100%;
  height: 100%;
  object-fit: cover;

}
.slider .list .item::after{
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  bottom: 0;
background-image: linear-gradient(
  to top, #000 40%, transparent
);
}
.slider .list .ietm .content{
  position: absolute;
  left: 10%;
  top: 20%;
  width: 500px;
  max-width: 80%;
  z-index: 1;
}
.slider .list .item .content p:nth-child(1){
  text-transform: uppercase;
  letter-spacing: 10px;

}
.slider .list .ietm .content h2{
  font-size: 100px;
  margin: 0;
}
.slider .list .ietm .content.active{
  opacity: 1;
  z-index: 10;
}
@keyframes showContent {
  to{
    transform: translate(0);
    filter: blur(0);
    opacity: 1;
  }
}
.slider .list .ietm p:nth-child(1),
.slider .list .ietm.active h2,
.slider .list .ietm.active p:nth-child(3){
  transform:  translateY(30px);
  filter: blur(20px);
  opacity: 0;
  animation: showContent .5 .7s ease-in-out;
}
.slider .list .ietm.active h2{
  animation-delay: 1s;
  }
  .slider .list .ietm.active p:nth-child(3){
    animation-delay: 1.3s;
  }
</style>

</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

          <div class="slider">
            <div class="list">
  <div class="item active">
<img src="1460629.jpg">
<div class ="content">
  <p>design</p>
  <h2>Slider 02</h2>
  <p>sjfjf
    fdsjkjk
  </p>
</div>  
</div>
<div class="item">
<img src="wallpaperflare.com_wallpaper.jpg">
<div class ="content">
  <p>design</p>
  <h2>Slider 02</h2>
  <p>sjfjf
    fdsjkjk
  </p>
</div>  
</div>
<div class="item">
<img src="clvr-high-resolution-logo-white.png">
<div class ="content">
  <p>design</p>
  <h2>Slider 02</h2>
  <p>sjfjf
    fdsjkjk
  </p>
</div>  
</div>
            </div>

          </div>
          <img src="1460629.jpg">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
        
    
    
      </body>


</html>