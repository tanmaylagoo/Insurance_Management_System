<?php
$conn = pg_connect("host=localhost dbname=IMS user=postgres password=postgres");
if(!$conn){
    echo "Connection failed!!";
}
else{
    echo "<h1> <b>Connected to database successfully!!</b></h1> <br>";
}
?>