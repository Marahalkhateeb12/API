<?php 
$servername='localhost';
$dsn="mysql:host=$servername;dbname=api_php";

try {
    $conn=new PDO($dsn,'root','');
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); 
}

?>