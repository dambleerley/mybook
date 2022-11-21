<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBook</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="Assets/img/book.png" type="image/x-icon">
</head>
<body class="bg-dark">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 bg-light">
                <div class="row pt-3">
                    <div class="col text-center">
                        <a href="index.php" class="navbar-brand p-4"><img src="Assets/img/book.png" style="height:50px;" alt=""></a>
                        <h1>myBook</h1>
                    </div>
                </div>
                <ul class="nav flex-column py-3">
                    <li class="nav-item">
                        <a href="biblioteca" class="nav-link"><i class="b bi-book"></i> Biblioteca</a>
                    </li>
                    <li class="nav-item">
                        <a href="catalogar" class="nav-link"><i class="b bi-list"></i> Catalogar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sobre" class="nav-link"><i class="b bi-exclamation-circle"></i> Sobre</a>
                    </li>
                    <div class="container bg-primary">
                        <span class="text-white">Filtros</span>
                    </div>
                    <li class="nav-item">
                        <a href="biblioteca" class="nav-link"><i class="b bi-check"></i> Todos</a>
                    </li>
                    <li class="nav-item">
                        <a href="nao_iniciado" class="nav-link"><i class="b bi-check"></i> Não iniciados</a>
                    </li>
                    <li class="nav-item">
                        <a href="lendo_agora" class="nav-link"><i class="b bi-check"></i> Lendo agora</a>
                    </li>
                    <li class="nav-item">
                        <a href="em_pausa" class="nav-link"><i class="b bi-check"></i> Em pausa</a>
                    </li>
                    <li class="nav-item">
                        <a href="concluidos" class="nav-link"><i class="b bi-check"></i> Concluídos</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10" style="background-color:#ccc;">