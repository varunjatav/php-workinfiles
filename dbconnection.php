<?php 
// msqli_connect takes 4 parameters
// first parameter-> name of the server = localhost
// second parameter -> username of the server = root
// third parameter -> password = ""
// fourth parameter -> name of database = cus_app

$server = "localhost";
$username = "root";
$password = "";
$database = "cus_app";



try {
    $connection = mysqli_connect($server, $username, $password, $database);
    if($connection){
        // echo "Database connection was successfull";
        // echo "<br>";
     }
     
} catch (Exception $e) {
    //throw $e;
    echo $e->getMessage();
}

?>