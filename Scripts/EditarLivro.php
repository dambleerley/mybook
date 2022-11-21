<?php

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor  = $_POST['autor'];
        $editora = $_POST['editora'];
        $paginas    = $_POST['paginas'];
        $isbn   = $_POST['isbn'];
        $publicacao = $_POST['publicacao'];
        $status = $_POST['status'];
        $classificacao  = $_POST['classificacao'];

        $query = "UPDATE book SET
            titulo = '$titulo', 
            autor   = '$autor', 
            editora = '$editora', 
            paginas = '$paginas', 
            isbn    = '$isbn', 
            publicacao  = '$publicacao', 
            status  = '$status', 
            classificacao   = '$classificacao'
            WHERE id='$id'";
        
        $salvarLivro = $conn->prepare($query);
        $salvarLivro->execute();

        header("location:../");
    
}
catch(Exception $e)
{
    print $e->getMessage();
}