<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass ="";
$db = "db_connect";

$conn = new mysqli ($dbhost,$dbuser,$dbconntact,$db);
// check connection
if($conn->connect_error){
    echo "connection was failed";
}

?>