<?php 
require 'connect.php';

$response=array(); 

$id=$_POST['id']; 

$sql="SELECT * FROM data WHERE id= $id ";
$statement=$conn->query($sql);
$data=$statement->fetchAll();

header("Content-Type: JSON");

foreach($data as $value){
$response['id']=$value['id'];
$response['name']=$value['name'];
$response['age']=$value['age'];
$response['email']=$value['email'];


}

echo json_encode($response,JSON_PRETTY_PRINT);

?>