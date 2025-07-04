<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="username">UserName :</label>
        <input id="username" type="text" name="username" id="" placeholder="Enter User name">
        <label for="secretword">Secret Word:</label>
        <input id="secretword" name="secretword" type="text" placeholder="Enter Secret Word">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter Email">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter Address">
        <label for="customer_complaint">Customer Complaint</label>
        <input type="text" name="customer_complaint" id="customer_complaint" placeholder="Enter Complaint">
        <input type="submit" >
    </form>
</body>
</html>

<?php 
session_start();
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = trim($_POST['username']);
   
    $secretword = minlength(trim($_POST['secretword']));

   
    if($secretword == false){
        display_error("Secret word should be more than of 8 character long");
        exit;
    }
    $raw_email = trim($_POST['email']);
    $email = filter_var($raw_email, FILTER_VALIDATE_EMAIL);
   
    $fullname = trim($_POST['fullname']);
    $address = trim($_POST['address']);
    $complaint = trim($_POST['customer_complaint']);
    
    $_SESSION['user_info'] = array(
        "username" => $username,
        "email" => $email
    );

    processcustomerquery($username, $secretword, $email, $fullname, $address, $complaint);
}

function minlength($str){
    $length = strlen($str);
    if($length < 8){
        return false;
    }else{
        return $str;
    }
}

function  processcustomerquery($username, $secretword, $email, $fullname, $address, $complaint){
    echo  "<div>
       <h1> Your username is  <span style='color:green'>".$username . "</span></h1>
       <h1> Your secretword is  <span style='color:green'>".$secretword . "</span></h1>
       <h1> Your email is  <span style='color:green'>".$email . "</span></h1>
       <h1> Your fullname is  <span style='color:green'>".$fullname . "</span></h1>
       <h1> Your address is  <span style='color:green'>".$address . "</span></h1>
       <h1> Your complaint is  <span style='color:green'>".$complaint . "</span></h1>
    </div>";
   
}

function display_error($mssge){
    echo "<h1 style='color:red'>".$mssge."</h1>";
}
?>