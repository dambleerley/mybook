<?php 

require_once 'header.php';
require_once 'Scripts/DataBooks.php';

?>
<!-- Início do banner da página -->

<div class="container my-3">
    <div class="row">
        <div class="col bg-primary text-center rounded pt-3 text-white">
            <h1>Dados do livro</h1>
            <p>Todas as informações disponíveis do livro no sistema.</p>
        </div>
    </div>
</div>

<!-- Fim do banner da página -->

<div class="container my-4">
    <div class="row">
        
        <div class="col">


            <?php
                foreach($row as $k)
                {
            ?>

                <div class="card flex flex-row d-flex">
                    <img src="Uploads/<?php echo $k['capa'];?>" style="height: auto; width:400px;" alt="" class="img-card">
                    <div class="card-body">
                        <h1>
                            <?php
                                $status = $k['status'];
                                switch($status)
                                {
                                    case 1:
                                        echo "Lendo Agora";
                                        break;
                                    
                                    case 2:
                                        echo "Livro em Pausa";
                                        break;
                                    
                                    case 3:
                                        echo "Livro Concluído";
                                        break;
                                    
                                    default:
                                        echo "Não Iniciado";   
                                    break;
                                }
                            ?>
                        </h1>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Título: </b><?php echo $k['titulo'];?></li>
                            <li class="list-group-item"><b>Autor: </b><?php echo $k['autor'];?></li>
                            <li class="list-group-item"><b>Editora: </b><?php echo $k['editora'];?></li>
                            <li class="list-group-item"><b>Páginas: </b><?php echo $k['paginas'];?></li>
                            <li class="list-group-item"><b>ISBN: </b><?php echo $k['isbn'];?></li>
                            <li class="list-group-item"><b>Publicação: </b><?php echo $k['publicacao'];?></li>
                            <li class="list-group-item"><b>Classificação: </b>
                        
                                <?php
                                    $status = $k['classificacao'];
                                    switch($status)
                                    {
                                        case 1:
                                            echo "
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                            ";   
                                            break;
                                        
                                        case 2:
                                            echo "
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                            ";   
                                            break;
                                        
                                        case 3:
                                            echo "
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                            ";   
                                            break;
                                        
                                        case 4:
                                            echo "
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star'></i>
                                            ";   
                                            break;
                                        
                                        case 5:
                                            echo "
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                                <i class='b bi-star-fill'></i>
                                            ";   
                                            break;
                                        
                                        default:
                                            echo "
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                                <i class='b bi-star'></i>
                                            ";   
                                        break;
                                    }
                                ?>
                        
                            </li>
                            <li class="list-group-item">
                                <b>Status: </b>
                                <?php
                                    $status = $k['status'];
                                    switch($status)
                                    {
                                        case 1:
                                            echo "Lendo Agora";
                                            break;
                                        
                                        case 2:
                                            echo "Livro em Pausa";
                                            break;
                                        
                                        case 3:
                                            echo "Livro Concluído";
                                            break;
                                        
                                        default:
                                            echo "Não Iniciado";   
                                        break;
                                    }
                                ?>
                            </li>
                        </ul>

                        <a href="editar.php?livro=<?php echo $k['id'];?>" class="btn btn-primary my-4">
                            <i class="b bi-pen"></i> Editar livro
                        </a>
                        <button type="button" class="btn btn-danger my-4" data-bs-toggle="modal" data-bs-target="#deletar">
                            <i class="b bi-trash"></i> Deletar livro
                        </button>
                    </div>
                </div>

            <?php
                }
            
            ?>

        </div>

    </div>
</div>
           
<?php
    require_once 'footer.php';
?>