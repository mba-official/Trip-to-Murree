<?php

$connection = mysqli_connect('localhost', 'root', '', 'trip_data') or die('Database Cannot Connect');


$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
$city = $_POST['city'];
$addres = $_POST['addres'];
$class = $_POST['class'];




$sql = "INSERT INTO user_info(fullname, fname, age, gender, contact, email, cnic, city, addres, class) VALUES ('{$fullname}', '{$fname}','{$age}','{$gender}','{$contact}','{$email}','{$cnic}','{$city}','{$addres}','{$class}')";

if(mysqli_query($connection, $sql)){
    echo "Hello {$fullname} your form is submitted succcessfully.";
}else{
    echo "Form didn't submit successfully.";
}

?>