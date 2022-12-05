<?php
//use to fetch product data
class ProductClass
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }
    //fetch product data using getData method
    public function getData($table='product'){
        $result= $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        while($item =mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item; 
        }
        return $resultArray;
    }
}
?>