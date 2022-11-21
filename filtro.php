<?php 
    require_once 'header.php';
    require_once 'Scripts/FiltroBooks.php';
?>
<!-- Início do banner da página -->

<div class="container my-3">
    <div class="row">
        <div class="col bg-primary text-center rounded pt-3 text-white">
            <h1>Biblioteca</h1>
            <p>Livros disponíveis para leitura <b><?php echo $i;?></b></p>
        </div>
    </div>
</div>

<!-- Fim do banner da página -->

<div class="container">
    <div class="row">
        
        <!-- Início dos cards -->

        <?php
            foreach($row as $k)
            {
                //echo $k['id'];
        ?>
        <div class="col-lg-4 my-3">
            <div class="card">
                <img src="Uploads/<?php echo $k['capa'];?>" style="width:auto;  height:450px;" alt="" class="img-card-top">
                <div class="card-body">
                    
                    <h3 class="card-title">
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


                    </h3>
                    <p>
                        <b>Classificação: </b> 
                        
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
                    </p>
                    <a href="dados_livro.php?livro=<?php echo $k['id'];?>" class="btn btn-primary"><i class="b bi-question-circle"></i> Dados do livro</a>
                </div>
            </div>
        </div>
        
        <?php
            }
        ?>



        <!-- Fim dos cards -->

    </div>
</div>
           
<?php require_once 'footer.php';?>