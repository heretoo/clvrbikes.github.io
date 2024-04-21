<?php

Define('USERS_FOLDER', 'users/');
function adminLogin()
{
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
        echo"<script>
        window.location.href = 'index.php';
        </script>";
    }
    session_regenerate_id(true);
}

function redirect($url){
    echo"
    <script>
     window.location.href = '$url';
    </script>";
}
function alert($type,$msg){
   $bs_class= ($type == "success")? "alert-success" : "alert-danger";


    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
<strong class="me-3">$msg</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
alert; 
}

function uploadUserImage($image)
{
    $valid_mine=[  'image/jpg', 'image/jpeg',  'image/png'];
    $img_mine= $image['type'];

    if(!in_array($img_mine,$valid_mine)){
        return 'inv_img';
    }
    else{
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' .random_int(1111,9999).".jpeg";

 $img_path = USERS_FOLDER.$rname;
 if($ext =='png' || $ext =='PNG'){
    imagecreatefrompng($image['tmp_name']);
}
if(imagejpeg($image ,$img_path,75)){
return $rname;
}
else{
    return 'upd_failed';
}

    
}
}
?>