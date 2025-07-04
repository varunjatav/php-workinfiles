<?php
if (isset($_SERVER) && $_SERVER["REQUEST_METHOD"] == 'POST') {
   
        $name = $_POST['fullname'];
        $email = $_POST['email'];

        if(empty($name)){
            echo "Your name is empty";
        }else{
            echo "Your name is ". $name;
        }
        echo "<br>";
        if(empty($email)){
            echo "Your email is empty";
        }else{
            echo "Your email is ". $email;
        }
}



?>