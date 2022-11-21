<?php

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
        $path = "../Uploads/";
        $status = $_GET['status'];
        $query = "SELECT * FROM book ORDER BY status='1' DESC";
        
        $selectLivro = $conn->prepare($query);
        $selectLivro->execute();
        $row = $selectLivro->fetchAll();
        $i = count($row);
        if($i == 0)
        {
            echo "<div class='container bg-danger text-white'>Sem dados para exibir!</div>";
        }
    
}
catch(Exception $e)
{
    print $e->getMessage();
}