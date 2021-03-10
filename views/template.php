<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Site</title>
</head>
<body>
    <header class="headerContainer">
        <div class="headerContainerFirst">
            <h1>Logo</h1>
            <nav>
                <ul class="navUlContainer">
                    <li class='navLi'>github</li>
                    <li class='navLi'>linkedin</li>
                    <li class='navLi'>email</li>
                </ul>
            </nav>
        </div>
        <div class="headerContainerSecond">
            <div class="contaContainer">
                <p>Conta</p>
                <div class="contaAba">
                    <ul>
                        <li class="liStyleNone">Criar</li>
                        <li class="liStyleNone">Status</li>
                    </ul>
                </div>
            </div>
            <div><p>Duvidas</p></div>
            <div><p>Contato</p></div>
        </div>
    </header>
    <main>
        <?php require 'views/'.$view.'.php' ?>
    </main>

    <footer>
    
    </footer>
    <script type='module' src="./js/script.js"></script>
</body>
</html>