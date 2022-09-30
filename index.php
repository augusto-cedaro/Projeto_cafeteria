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
    <main class="container-fluid row d-flex align-items-center">
        <div class="col-6">
            <p class="h2 text-center">O verdadeiro café</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, 
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="col-6">
            <img src="images/cafe1.jpg" alt="xicara de café" class="w-100">
        </div>
    </main>
    <section class="container-fluid row">
        <div class="col-12 d-flex justify-content-center p-5">
           <p class="h3">Nossa Localização</p>
        </div>
           <div class="col-12 d-flex justify-content-center pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.1795075651767!2d-51.94153948554687!3d-23.417881862193248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd7be26deb2e5%3A0x49ebdc81261d048a!2sThe%20Coffee!5e0!3m2!1spt-BR!2sbr!4v1664562999316!5m2!1spt-BR!2sbr" 
                    width="800" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="border border-dark border-2 rounded">
                </iframe>
           </div> 

    </section>
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