<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cafe</title>
</head>
<body class="bg-light">
    <header>
            <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between px-5 bg-light">
                <a class="navbar-brand position-relative" href="index.php">
                    <img src="images/logo_cafe-removebg.png" alt="logo" class="w-50">
                </a>
                <div class="" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active h4 text-pop-up-top ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item h4 text-pop-up-top">
                        <a class="nav-link" href="#">Quem Somos</a>
                    </li>
                    <li class="nav-item h4 text-pop-up-top">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    </ul>
                </div>
            </nav>
    </header>
    <main>
        <div class="container-fluid row">
            <div class="col-12 pb-5 d-flex justify-content-center">
                <p class="h1">Contato</p>
            </div>
        </div>
        <div class="container-fluid row">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-6 pb-5">
                    <form>
                        <label for="nomeCompleto" class="form-label h3">Nome Completo</label><br>
                        <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control"><br>
                        
                        <label for="email" class="form-label h3">E-mail</label><br>
                        <input type="text" id="email" name="email" class="form-control"><br>

                        <label for="telefone" class="form-label h3">Telefone</label><br>
                        <input type="text" id="telefone" name="telefone" class="form-control"><br>

                        <label for="mensagem" class="form-label h3">Mensagem</label><br>
                        <textarea class="form-control" id="mensagem" rows="4"></textarea><br>

                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </form>
                </div>
            <div>
        </div>
    </main>
    <footer class="container-fluid">
        <div class="row bg-dark">
            <div class="col-4 d-flex justify-content-center">
                <img src="images/copo_cafe_branco.png" alt="icone café" class="img-fluid">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div>    
                    <p class="text-white  pt-3  align-self-end  ">
                        Rua Julio Rossato O Milior, 69 <br> Maringá-PR 
                    </p>
                    <p class="text-white align-self-end ">
                        Desingned by Augusto Cedaro 
                    </p>
                </div>    
            </div>
            <div class="col-4 ">
                <div class="">
                    <img src="images/whats_branco_100.png" alt="icone whatsapp" class="botaoWhats">
                    <img src="images/insta.png" alt="icone instagram" class="botaoInsta">
                    <img src="images/facebook.png" alt="icone facebook" class="botaoFace">
                </div>
                <div>
                    <p class="text-white">Conheça nossas Redes Socias !</p>
                </div>
            </div>
        </div>
    </footer>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>