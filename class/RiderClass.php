<?php

$db = new Database();

class Riders extends Database
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getData()
    {
        $query = $this->db->prepare('SELECT * FROM riders ORDER by id asc');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRandomRider()
    {
        $query = $this->db->prepare('SELECT * FROM riders ORDER by RAND() LIMIT 1');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function searchData($name)
    {
        $name ='%'.$name.'%';
        $query = $this->db->prepare('SELECT * FROM riders WHERE Name LIKE ?');
        $query->execute([$name]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function serachByNum($num)
    {
        $num = $num;
        $query = $this->db->prepare('SELECT * FROM riders WHERE Number LIKE ?');
        $query->execute([$num]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
