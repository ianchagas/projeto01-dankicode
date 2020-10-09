<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do nosso site">
    <meta name="keywords" content="palavra-chave, do, site, teste, projeto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="estilo/css/style.css" rel="stylesheet">
    <title>Projeto 01</title>
</head>

<body>
    <header> <!-- cabeçalho -->
        <div class="center"> <!-- abre center cria contexto para responsivo -->
            <div class="logo left"><a href="/">Logomarca</a></div> <!-- logo -->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div> <!-- limpa sobreposição do left/right para background aparecer -->
        </div> <!-- fecha center cria contexto para responsivo -->
    </header> <!-- fecha cabeçalho -->
    
    <section class="banner-principal"> <!-- banner -->
        <div class="overlay"></div> <!-- overlay -->
        <div class="center"> <!-- abre center cria contexto para responsivo -->
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div> <!-- fecha center cria contexto para responsivo -->
    </section> <!-- fecha banner -->

    <section class="descricao-autor"> <!-- autor -->
        <div class="center"> <!-- abre center cria contexto para responsivo -->
            <div class="w50 left">
                <h2>Ian Chagas Salgado</h2>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui. tincidunt porttitor feugiat venenatis eros odio eget mauris donec aliquet porta laoreet turpis quam, massa consectetur elementum quisque eros platea ipsum netus luctus potenti mollis. luctus sed phasellus ac nec luctus porta, lectus aliquam facilisis ad nec, convallis blandit felis hendrerit non. condimentum dolor nostra nullam lorem varius, posuere litora duis ornare porttitor, convallis fringilla luctus class. </p>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui. tincidunt porttitor feugiat venenatis eros odio eget mauris donec aliquet porta laoreet turpis quam, massa consectetur elementum quisque eros platea ipsum netus luctus potenti mollis. luctus sed phasellus ac nec luctus porta, lectus aliquam facilisis ad nec, convallis blandit felis hendrerit non. condimentum dolor nostra nullam lorem varius, posuere litora duis ornare porttitor, convallis fringilla luctus class. </p>
            </div> <!-- w50 -->
            <div class="w50 left">
                <!-- Pega imagem do autor -->
                <img class="right" src="estilo/images/foto.jpg">
            </div> <!-- w50 -->
            <div class="clear"></div>
        </div> <!-- fecha center cria contexto para responsivo -->
    </section> <!-- fecha autor -->

    <section class="especialidades"> <!-- abre especialidades -->
        <div class="center"> <!-- abre center cria contexto para responsivo -->
            <h2 class="title">Especialidades</h2>
            <div class="w25 left box-especialidade"> <!-- especialidades -->
                <h3><i class="fab fa-php"></i></h3>
                <h4>PHP</h4>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</p>
            </div> <!-- fecha especialidades -->
            <div class="w25 left box-especialidade"> <!-- especialidades -->
                <h3><i class="fab fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</p>
            </div> <!-- fecha especialidades -->
            <div class="w25 left box-especialidade"> <!-- especialidades -->
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</p>
            </div> <!-- fecha especialidades -->
            <div class="w25 left box-especialidade"> <!-- especialidades -->
                <h3><i class="fab fa-js-square"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</p>
            </div> <!-- fecha especialidades -->
            <div class="clear"></div>
        </div> <!-- fecha center cria contexto para responsivo -->
    </section> <!-- fecha especialidades -->

    <section class="extras"> <!-- abre extras -->
        <div class="center"> 
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui."</p>
                    <p class="nome-autor">Ianzin</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui."</p>
                    <p class="nome-autor">Patricio The Cat</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui."</p>
                    <p class="nome-autor">Ablublublé</p>
                </div>
            </div> <!-- w50 -->

            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</li>
                        <li>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</li>
                        <li>Lorem ipsum aenean adipiscing mauris quisque, luctus augue feugiat maecenas eleifend quisque, nostra gravida litora fusce. inceptos malesuada velit imperdiet habitasse hac ornare dolor viverra maecenas ullamcorper hac feugiat magna torquent, suscipit id senectus tempus tincidunt orci laoreet aliquam euismod condimentum scelerisque dui.</li>
                    </ul>
                </div>
            </div> <!-- w50 -->
            <div class="clear"></div>
        </div>
    </section> <!-- fecha extras -->

    <footer> <!-- rodapé -->
        <div class="center">
            <p>Todos os direitos reservados ®</p>
        </div>
    </footer> <!-- fecha rodapé -->
    <!--importa jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>