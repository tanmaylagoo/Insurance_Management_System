<?php
session_start();
include '../db.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM Users WHERE username='$user' AND password='$pass'";
    $result = pg_query($conn, $query);

    if(pg_num_rows($result) > 0){
        $_SESSION['user'] = $user;
        header("Location: ../home.php");
        exit();
    } else {
        echo "Invalid credentials <br>";
        echo "<a href='../html/login.html'>Try again</a>";
    }
}
?>