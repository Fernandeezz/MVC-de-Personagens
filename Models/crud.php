<!-- Crud -->
<?php
include_once '../Models/dbConfig.php';

class Crud extends DbConfig
{  
    public function __construct()
    {
        parent::__construct();  
    }

    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }

    public function execute($query)
    {
        $result = $this->connection->query($query);

        if ($result === false){
            
            
            throw new Exception('Error: ' . $this->connection->error);
        } 
        
        return true;
    }

    public function getData($query)
    {
        $result = $this->connection->query($query);
        if ($result == false){

            throw new Exception('Error: ' . $this->connection->error);
        }        

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }
    
    public function delete($query) 
    {
        $result= $this->connection->query($query);

        if ($result === false){
            throw new Exception('Error: ' . $this->connection->error);
        } 
        
        return true;
    }

    public function update($query) 
    {
        $result= $this->connection->query($query);

        if ($result === false){
            
            
            throw new Exception('Error: ' . $this->connection->error);
        } 
        
        return true;
    }
}
?>
