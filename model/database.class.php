<?php
class DBController {
    //Database Connection Properties
    protected $host='localhost';
    protected $user ='root';
    protected $password = "";
    protected $database = "e-commerce-online-store-fight-store";

    //connection property
    public $con = null;

    //constructor
    public function __construct(){
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        // echo "connection successful!";
    }

        // for mysqli closing connection
        public function __destruct(){
            $this->closeConnection();
        }
    
        protected function closeConnection(){
            if ($this->con != null ){
                $this->con->close();
                $this->con = null;
            }
        }
        
   
}

?>