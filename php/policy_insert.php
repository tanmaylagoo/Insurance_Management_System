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

echo "Policy Created Successfully<br>";
echo "<a href='../html/policy.html'>Back</a>";
?>