<?php

require('../admin/include/essentials.php');
require('../admin/include/db_config.php');


if(isset($_POST['register'])){

$data = filteration($_POST);

// match password & conifrm password

if($data['pass'] !== $data['cpass']){
    echo 2;
    exit;
}

//check user exist or not

$u_exist = select("SELECT * FROM `user_cred` WHERE 'email'=? AND 'phonenum'=?",
[$data['email'], $data['phonenum']],"ss");

if(mysqli_num_rows($u_exist) !=0){
    $u_exist_fetch = mysqli_fetch_assoc($u_exist);
    echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already ': 'phone_already' ;
    exit;
}

// upload user image
$img = uploadUserImage($_FILES['image']);

if($imge == 'inv_img'){
    echo 'inv_img';
    exit;
}
else if($imge == 'upd_failed'){
    echo 'upd_failed';
    exit;
}

// send confirmation link


}
?>