<?php

$id = $_POST['id'];

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
    $query = "DELETE FROM book WHERE id = '$id'";
    $delete = $conn->prepare($query);
    $delete->execute();

    header("location:../");
}
catch(Exception $e)
{
    print $e->getMessage();
}