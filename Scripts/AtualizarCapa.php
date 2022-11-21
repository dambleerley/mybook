<?php

try
{
    $conn = new pdo('mysql:host=localhost;dbname=mybook','master','2468');
    
        $id = $_POST['id'];
        
        $path = "../Uploads/";
        
        $extensao = strtolower(substr($_FILES['capa']['name'],-4));
        $novoNome = date('YmdHjs').$extensao;
        
        move_uploaded_file($_FILES['capa']['tmp_name'] , $path.$novoNome);
        
        $query = "UPDATE book SET capa = '$novoNome' WHERE id='$id'";
        
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