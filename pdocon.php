<?php 

class PDOcon {

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "cus_app";
    private $dbc;
    
    private $errorMsg;

   
    public function __construct(){
         $dsn = "mysql:host=" .$this->hostname. ";dbname=".$this->dbname;

         $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        );
    
        try {
            $this->dbc = new PDO($dsn, $this->username, $this->password, $options);
            if($this->dbc){
                echo "Database connected successfully";
            }
        } catch (PDOException $error) {
            $this->errorMsg = $error->getMessage();

            echo $this->errorMsg;
        }
     
    }
   
}

$db = new PDOcon();

?>