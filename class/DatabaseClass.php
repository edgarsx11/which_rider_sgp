<?php 


class Database extends PDO{
   public function __construct()
    {
        $host = 'localhost';
        $db_name = 'id19689702_speedway_riders';
        $db_username = 'id19689702_edgarsx11';
        $db_password = 'j|r>MMC9W%cn%Uqo';
       

        parent::__construct("mysql:host=" . $host . ";dbname=" 
        . $db_name . "", $db_username, $db_password); 
    }
}


?>