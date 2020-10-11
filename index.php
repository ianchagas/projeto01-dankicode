<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do nosso site">
    <meta name="keywords" content="palavra-chave, do, site, teste, projeto">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/css/style.css" rel="stylesheet">
    <title>Projeto 01</title>
</head>

<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'sobre':
                echo '<target target="sobre" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>

    <header> <!-- cabeçalho -->
        <div class="center"> <!-- abre center cria contexto para responsivo -->
            <div class="logo left"><a href="/">Logomarca</a></div> <!-- logo -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div> <!-- limpa sobreposição do left/right para background aparecer -->
        </div> <!-- fecha center cria contexto para responsivo -->
    </header> <!-- fecha cabeçalho -->
    
    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        }else{
            if($url != 'sobre' && $url != 'servicos') {
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }

    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="footer-fixed"'; ?>> <!-- rodapé -->
        <div class="center">
            <p>Todos os direitos reservados ®</p>
        </div>
    </footer> <!-- fecha rodapé -->
    <!--importa jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php
        if($url == 'contato'){
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCyZnNvRgCexvOGQU65tCh9yLGZAEMY_yw"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>
</html>