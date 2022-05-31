<?php
require 'connect.php';
$id= $_POST['id'];
$age= $_POST['age'];
$name= $_POST['name'];
$email= $_POST['email'];

    try {
        $sql="UPDATE `data` 
        SET  age = $age 
         WHERE id = $id ";
        $statement=$conn->query($sql);
        $message = array( 'Row Updated !!!');
    }
    catch (PDOException $e){
        $message= array("Can't Update  ");
    }
    echo json_encode($message);

?>