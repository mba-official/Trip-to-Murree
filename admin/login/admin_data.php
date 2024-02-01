<?php 

session_start();
if(!isset($_POST['loggedIn'])){
    header:('Location: logout.php');
}

if(isset($_POST['login'])){
    $con = mysqli_connect('localhost', 'root', '', 'admin_data_info');
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM admin_record WHERE 'email' = '{$email}' AND  'password' = '{$password}'";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query)>0){
        $_SESSION['loggedIn'] = 'login';
        $_SESSION['email'] = $email;
        echo 'Login Success';
    }else{
        echo 'Login Failed';
    }
}





?>