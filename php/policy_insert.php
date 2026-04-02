<?php
include '../db.php';

$pno = $_POST['pno'];
$cid = $_POST['cid'];
$pid = $_POST['pid'];
$gcode = $_POST['gcode'];
$amount = $_POST['amount'];

$query = "INSERT INTO Insurance_Policy 
VALUES ($pno, $cid, $pid, $gcode, CURRENT_DATE, $amount, 'Pending')";

pg_query($conn, $query);

echo "<b> <h1>Policy Created Successfully</h1></b><br>";
echo "<a href='../policy.html'><h4><b>Back</b></h4></a>";
?>