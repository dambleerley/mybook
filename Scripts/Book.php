<?php

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
        $path = "../Uploads/";
        
        $extensao = strtolower(substr($_FILES['capa']['name'],-4));
        $novoNome = date('YmdHjs').$extensao;
        
        move_uploaded_file($_FILES['capa']['tmp_name'] , $path.$novoNome);
        
        $titulo = $_POST['titulo'];
        $autor  = $_POST['autor'];
        $editora = $_POST['editora'];
        $paginas    = $_POST['paginas'];
        $isbn   = $_POST['isbn'];
        $publicacao = $_POST['publicacao'];
        $status = $_POST['status'];
        $classificacao  = $_POST['classificacao'];

        $query = "INSERT INTO book(
            titulo, 
            autor, 
            editora, 
            paginas, 
            isbn, 
            publicacao, 
            capa, 
            status, 
            classificacao
            )VALUES (
                '$titulo',
                '$autor',
                '$editora',
                '$paginas',
                '$isbn',
                '$publicacao',
                '$novoNome',
                '$status',
                '$classificacao'
            )";
        
        $salvarLivro = $conn->prepare($query);
        $salvarLivro->execute();

        echo '<pre>';
            print_r($_POST);
        echo '</pre>';

        header("location:../");
    
}
catch(Exception $e)
{
    print $e->getMessage();
}