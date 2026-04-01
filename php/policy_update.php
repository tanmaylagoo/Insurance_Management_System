<?php
include '../db.php';

$pno = $_POST['pno'];
$cid = $_POST['cid'];
$pid = $_POST['pid'];
$gcode = $_POST['gcode'];
$amount = $_POST['amount'];

$query = "UPDATE Insurance_Policy 
SET Customer_ID = $cid,
    Provider_ID = $pid,
    Government_Code = $gcode,
    Amount_Requested = $amount
WHERE Policy_Number = $pno";

pg_query($conn, $query);

echo "Policy Updated Successfully<br>";
echo "<a href='../display/policy_display.php'>Back</a>";
?>