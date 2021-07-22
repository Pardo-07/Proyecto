<?php

require_once('config/connection.php');

class Products
{
    private $db;
    private $products;

    public function __construct()
    {
        $this->db = Connect::connection();
        $this->products = array();
    }

    public function getProducts()
    {
        $query = "SELECT * FROM producto";
        $result = pg_query($this->db, $query);
        while($row = pg_fetch_array($result))
        {
            $this->products[] = $row;
        }
        return $this->products;
    }

}

?>