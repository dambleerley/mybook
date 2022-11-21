<?php

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
        $path = "../Uploads/";
        $id = $_GET['livro'];

        $query = "SELECT * FROM book WHERE id = '$id'";
        
        $selectLivro = $conn->prepare($query);
        $selectLivro->execute();
        $row = $selectLivro->fetchAll();
        $i = count($row);
        if($i == 0)
        {
            echo "Sem dados para exibir!";
        }
    
}
catch(Exception $e)
{
    print $e->getMessage();
}