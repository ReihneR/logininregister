<?php

if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])&& isset($_GET['gender'])&& isset($_GET['telephone'])&& isset($_GET['password'])){

    $dbc_form = mysqli_connect ("localhost","root","","db");

    $name = $_GET['name'];

    $email = $_GET['email'];

    $age = $_GET['age'];

    $gender = $_GET['gender'];

    $telephone = $_GET['telephone'] ;  
    
    $password = $_GET['password'];
    
    $query = "INSERT INTO informations (name,email,age,phone,gender,password) VALUES ('$name','$email',$age,'$telephone','$gender','$password')";
    
    mysqli_query($dbc_form,$query);
    
    header("location: index.php");
    
    
    
}
    
?>


