<?php
    require_once 'header.php';
    require_once 'Scripts/DataBooks.php';
?>
<!-- Início do banner da página -->

<div class="container my-3">
    <div class="row">
        <div class="col bg-primary text-center rounded pt-3 text-white">
            <h1>Atualizar</h1>
            <p>Atualizar livros.</p>
        </div>
    </div>
</div>

<!-- Fim do banner da página -->

<div class="container">
    <div class="row">

        <?php
        
        foreach($row as $k)
        {
        
        ?>
        
        <form action="Scripts/EditarLivro.php" class="container bg-white py-3 mb-4" enctype="multipart/form-data" method="post">
            <input type="hidden" name="id" value="<?php echo $k['id'];?>">
            <div class="row pt-3">
                <div class="col-lg-4">
                    <label for="titulo">Título do livro <i class="b bi-pen"></i></label>
                    <input type="text" name="titulo" value="<?php echo $k['titulo'];?>" required class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="autor">Autor <i class="b bi-person"></i></label>
                    <input type="text" name="autor" value="<?php echo $k['autor'];?>" required class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="editora">Editora <i class="b bi-book"></i></label>
                    <input type="text" name="editora" value="<?php echo $k['editora'];?>" required class="form-control">
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-1">
                    <label for="paginas">Pág. <i class="b bi-123"></i></label>
                    <input type="text" name="paginas" value="<?php echo $k['paginas'];?>" required class="form-control">
                </div>
                <div class="col-lg-2">
                    <label for="isbn">ISBN <i class="b bi-123"></i></label>
                    <input type="text" name="isbn" value="<?php echo $k['isbn'];?>" required class="form-control">
                </div>
                <div class="col-lg-2">
                    <label for="publicacao">Publicação <i class="b bi-calendar"></i></label>
                    <input type="text" name="publicacao" value="<?php echo $k['publicacao'];?>" required class="form-control">
                </div>
                <div class="col-lg-7">
                    <label for="capa">Capa <i class="b bi-image"></i></label> <br>
                    <img src="/Uploads/<?php echo $k['capa'];?>" style="height: 40px;" alt="">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar">Atualizar a capa</a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-6">
                    <label for="status">Status da Leitura <i class="b bi-eyeglasses"></i></label>
                    <select name="status" id="" class="form-control">
                        <?php
                            $status = $k['status'];
                            switch($status)
                            {
                                case 1:
                                    echo "<option value='1'>Lendo Agora</option>";
                                    break;
                                
                                case 2:
                                    echo "<option value='2'>Livro em Pausa</option>";
                                    break;
                                
                                case 3:
                                    echo "<option value='3'>Livro Concluído</option>";
                                    break;
                                
                                default:
                                    echo "<option value='0'>Não Iniciado</option>";   
                                break;
                            }
                        ?>    
                        <option value="0">Não Iniciado</option>
                        <option value="1">Lendo Agora</option>
                        <option value="2">Livro em Pausa</option>
                        <option value="3">Livro Concluído</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="classificacao">Classificação <i class="b bi-star"></i></label>
    
                    <select name="classificacao" id="" class="form-control">
                        
                        <?php
                                $status = $k['classificacao'];
                                switch($status)
                                {
                                    case 1:
                                        echo "
                                        <option value='1'>Ruim</option>
                                        ";   
                                        break;
                                    
                                    case 2:
                                        echo "
                                        <option value='2'>Insatisfatório</option>
                                        ";   
                                        break;
                                    
                                    case 3:
                                        echo "
                                        <option value='3'>Regular</option>
                                        ";   
                                        break;
                                    
                                    case 4:
                                        echo "
                                        <option value='4'>Bom</option>
                                        ";   
                                        break;
                                    
                                    case 5:
                                        echo "
                                        <option value='5'>Exelente</option>
                                        ";   
                                        break;
                                    
                                    default:
                                        echo "
                                        <option value='0'>Não classificado</option>
                                        ";   
                                    break;
                                }
                            ?>

                        <option value="0">Não classificado</option>
                        <option value="1">Ruim</option>
                        <option value="2">Insatisfatório</option>
                        <option value="3">Regular</option>
                        <option value="4">Bom</option>
                        <option value="5">Exelente</option>
                            
                        </select>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        <i class="b bi-save"></i> Atualizar livro
                    </button>
                </div>
            </div>
        </form>
        <?php }?>
    </div>
</div>
           
<?php require_once 'footer.php';?>