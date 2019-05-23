<?php 

$d = $_GET['data'];

require_once("ProductClass.php");

$productTabel = new Product();

$result = $productTabel->GetAllRecordsByValues($d);

$result->execute();

$results = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results); 
?>