<?php

// class Car {
//     public $speed;
//     private $model;
//     private $color;
    
//     private $type;
//     public function __construct($speed, $model, $color, $type = "Sedan"){
//         $this->speed = $speed;
//         $this->model = $model;
//         $this->color = $color;
//         $this->type = $type;
//     }
//     static public function checkSpeed($check_speed){
//         if($check_speed >= self::$speed){
//             echo "Your car is very fast";
//         }
//         else{
//             echo "Your car is not that fast";
//         }
//     }
    
//     public function __destruct(){
//         echo "<br>My Car is ". $this->type;
//     }
//      public function description(){
//         echo "My car is $this->model its a $this->type of color $this->color and its top speed is $this->speed MPH";
//     }
// }

// echo Car::$speed;
// echo "<br>";
// Car::checkSpeed(500);


// class OldCar extends Car{

//     public function get_description(){
//         $this->description();
//     }
// }
// $myCar = new Car(400, "BMW", "Black");
// $myCar->description();
//  echo "<br>";
// $oldCar = new OldCar(300, "Audi", "Red", "SUV");
// $oldCar->get_description();



// class Exeption {
//     //properties
//     public $message;
//     //methods
//     public function __construct($message){
//         $this->message = $message;
//     }

//     public function getMessage(){
//         //collect error message
//         echo $this->message;
//     }
// }
// echo "<br>";

// $errormsg = new Exeption("Hii");

// $errormsg->getMessage();
// echo "<br>";
?>



 <?php 
 include "dbconnection.php";
 
 $query = "SELECT * FROM users";

 $run = mysqli_query($connection, $query);
 /* 
  insert query
 */
//  $query = "INSERT INTO users (id ,email, password,full_name, spending_amt) VALUES ('NULL','scurry@virtuallines.com','0000',' Stephen Curry','15200')";

//  $run_query = mysqli_query($connection, $query);

//  if($run_query){
//     echo "Data has been inserted in users table"; 
// }else{
//     echo "Data is not inserted in users table";
// }

// // mysqli_close($connection);
// echo "<br>";


 /* 
  update query
 */
// $updt = "UPDATE users SET full_name = 'varun Jatav', email = 'mohit.mohit989@gmail.com'  WHERE id = 3";

// $updt_query = mysqli_query($connection, $updt);

// if($updt_query){
//     echo "Data has been updated in users table"; 
// }else{
//     echo "Data is not updated in users table";
// }

// mysqli_close($connection);



 /* 
  select query
 */
// $email = 'mohit.mohit989@gmail.com';
// $password = '0000';
// $select = "SELECT * FROM users WHERE email='$email' and password='$password'";

//  $select_query = mysqli_query($connection, $select);

//  $row = $select_query->fetch_all(MYSQLI_ASSOC);


//  $result = mysqli_fetch_array($select_query,MYSQLI_ASSOC);
// while ($result = mysqli_fetch_assoc($select_query)){
 
//     echo $result['full_name'] . "<br>";
// };

// $result = mysqli_num_rows($select_query);

// if($result > 0){
//     echo "Welcome";
// }else{
//     echo "No records";
// }

// mysqli_close($connection);

/* 
 DELETE QUERY
*/

// $delete = "DELETE FROM users WHERE id = 4";

// $delete_query = mysqli_query($connection, $delete);
// // if($delete_query){
// //     echo "Data is deleted from table";
// // }else{
// //     echo "Data is not deleted from the table";
// // }
// mysqli_close($connection);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
        
      <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
     
    </thead>
    <tbody>
    <?php 
       
        while($results = mysqli_fetch_assoc($run)) {?>
      <tr>
        <td><?php echo $results['full_name']  ?></td>
        <td><?php echo $results['email']  ?></td>
        <td><?php echo $results['password']  ?></td>
      </tr>

      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
