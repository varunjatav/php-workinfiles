<?php

class PDOcon
{

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "cus_app";
    private $dbc;

    private $errorMsg;
    private $stmt;


    public function __construct()
    {
        $dsn = "mysql:host=" . $this->hostname . ";dbname=" . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbc = new PDO($dsn, $this->username, $this->password, $options);
            if ($this->dbc) {
                // echo "Database connected successfully";
            }
        } catch (PDOException $error) {
            $this->errorMsg = $error->getMessage();

            echo $this->errorMsg;
        }
    }


    public function prepare($query)
    {
        $this->stmt = $this->dbc->prepare($query);
    }

    public function bindValue($param, $value, $type)
    {
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
       return $this->stmt->execute();
    }

    public function confirm_result()
    {
        return $this->stmt->lastInsertedId();
    }

    public function fetch_multiple_data(){
        $this->execute();
       return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch_single_data(){
        $this->execute();
        return $this->stmt->fetch();
    }
    
}



?>









