<?php
session_start();

// If user is not logged in → redirect
if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            background: #90a4f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #314595;
            color: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            width: 300px;
        }

        a {
            display: block;
            margin-top: 15px;
            color: white;
            text-decoration: none;
            background: #6366f1;
            padding: 10px;
            border-radius: 6px;
        }

        a:hover {
            background: #4f46e5;
        }
    </style>
</head>

<body>

<div class="card">
    <h2>Welcome <?php echo $_SESSION['user']; ?> 👋</h2>

    <p>You are successfully logged in!</p>

    <a href="policy.html">Go to Policy Page</a>
    <a href="display/policy_display.php">View Policies</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>