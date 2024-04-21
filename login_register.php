<?php 
 require('connection.php');

 if(isset($_POST['register'])){
$user_exist_query = "SELECT * FROM `registeruser` WHERE 'email' ='$_POST[email]' AND 'phoneno' = '$_POST[phoneno]' "; 

$result = mysqli_query($con, $user_exist_query);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {

        #user already exist

$result = mysqli_fetch_assoc($result);
if($result_fetch['email'] ==  $_POST['phoneno'])
{
    echo "<script>
    alert ('$result_fetch[email]  - already registered');
    window.location.href = 'index.php';
    </script>";
}
    }

    else{
        echo "<script>
    alert ('$result_fetch[phoneno]  - already registered');
    window.location.href = 'index.php';
    </script>";
    }
}
    else{
        $query ="INSERT INTO `registeruser`(`fname`, `lname`, `phoneno`, `email`, `profile`, `address`, `pin`, `dob`, `pass`, `cpass`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[phoneno]','$_POST[email]','$_POST[profile]','$_POST[address]','$_POST[pin]','$_POST[dob]','$_POST[pass]','$_POST[cpass])";
        if(mysqli_query($con, $query))
        {
            echo "<script>
            alert ('Registered successfully');
            window.location.href = 'index.php';
            </script>";
        }
    }
    

}
else{
    echo "<script>
    alert ('cannot run');
    window.location.href = 'index.php';
    </script>";
}


?>