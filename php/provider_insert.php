<?php
include '../db.php';

$id = $_POST['id'];
$email = $_POST['email'];
$ratio = $_POST['ratio'];

$query = "INSERT INTO Insurance_Provider 
VALUES ($id, NULL, '$email', $ratio)";

pg_query($conn, $query);

echo "Provider Added Successfully<br>";
echo "<a href='../html/provider.html'>Back</a>";
?>