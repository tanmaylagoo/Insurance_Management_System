<?php
include '../db.php';

$id = $_GET['id'];

$query = "DELETE FROM Insurance_Policy WHERE Policy_Number = $id";

pg_query($conn, $query);

echo "Policy Deleted Successfully<br>";
echo "<a href='../display/policy_display.php'>Back</a>";
?>