<?php 

    $username =   $_POST['username'];
    $password =   $_POST['password'];
    $contact = $_POST['contact'] ;
    $email = $_POST['email'];



    $conn =mysqli_connect("localhost","root","","db","3306");
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error() );
    } 
    $query = "create table if not exists users (id INT NOT NULL AUTO_INCREMENT primary key,username varchar(40),password varchar(20),contact varchar(10),email varchar(100))";
    mysqli_query($conn,$query);
        $sql = "INSERT INTO  users (username,password,contact,email) values ('$username','$password','$contact','$email')";
    if(mysqli_query($conn,$sql))
    {
        echo "User has been created";
    }
    else
    {
        echo "User cannot be created".mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>