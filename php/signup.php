<?php
include '../db.php';

if(isset($_POST['signup'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

   
    $check = pg_query($conn, "SELECT * FROM Users WHERE username='$user'");

    if(pg_num_rows($check) > 0){
        echo "User already exists <br>";
        echo "<a href='../html/signup.html'>Try again</a>";
    } else {
        pg_query($conn, "INSERT INTO Users VALUES('$user','$pass')");
        echo "Signup successful! <br>";
        echo "<a href='../html/login.html'>Go to Login</a>";
    }
}
?>