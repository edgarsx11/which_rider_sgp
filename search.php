<?php
require_once 'class/DatabaseClass.php';
require_once 'class/RiderClass.php';
$name = $_POST['name'];
$rider = new Riders($db);
$dataRows = $rider->searchData($name);
echo json_encode($dataRows);
?>