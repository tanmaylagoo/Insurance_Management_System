<?php
include '../db.php';

$id = $_GET['id'];

$query = "DELETE FROM Insurance_Provider WHERE Provider_ID = $id";

pg_query($conn, $query);

echo "Provider Deleted Successfully<br>";
echo "<a href='../display/provider_display.php'>Back</a>";
?>