<?php 
class customerQuery{
    public $username;
    static public $secretword;
    public $email;
    public $age;
    public $fullname;
    public $address;
    public $customer_complaint;

    public function __construct($username, $secretword, $email, $age, $fullname, $address, $customer_complaint){
        $this->username = $username;
        self::$secretword = $secretword;
        $this->email = $email;
        $this->age = $age;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->customer_complaint = $customer_complaint;

        echo "Welcome ".$this->fullname ."<br>";
    }

    static public function validate_secretword(){
        if(strlen(self::$secretword) < 8){
            return self::$secretword ." has less than 8 characters <br>";
        }
    }

    
}

class child extends customerQuery{

    public function validate(){
        return parent::validate_secretword();
    }

    public function displayQueries(){
        echo "User Name is ". $this->username . "<br>";
        echo "Secret word  is ". self::$secretword . "<br>";
        echo "Email is ". $this->email . "<br>";
        echo "Age is ". $this->age . "<br>";
        echo "Full Name is ". $this->fullname . "<br>";
        echo "Address is ". $this->address . "<br>";
        echo "customer complaint is ". $this->customer_complaint . "<br>";
    }
   
}


$query = new customerQuery("Varun", "xyz", "xyz@gmail.com", 26, "Varun Jatav", "Jhansi", "ugdiudhi ddhuifhweuih fhweuihfuihfiuwe");
echo $query->validate_secretword();

$child  = new child("Varun", "xyzdsadsdds", "xyz@gmail.com", 26, "Varun Jatav", "Jhansi", "ugdiudhi ddhuifhweuih fhweuihfuihfiuwe");
echo $child->validate();
$child->displayQueries();


?>