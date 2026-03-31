<?php
$conn = pg_connect("host=localhost dbname=IMS user=postgres password=postgres");
if(!$conn){
    echo "Connection failed";
}
else{
    echo "Connected to database successfully";
}
?>