<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1941d750e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/favicomatic/apple-touch-icon-114x114.png">
    <title>POLTRONA | Contacto</title>
</head>

<body>
    <header>
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.html"><img src="img/logo-header.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catálogo</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="sofás.html">Sofás</a>
                                            <a class="dropdown-item" href="poltronas.html">Poltronas</a>
                                            <a class="dropdown-item" href="sillas.html">Sillas</a>
                                            <a class="dropdown-item" href="banquetas.html">Banquetas</a>
                                            <a class="dropdown-item" href="puffs.html">Puffs</a>
                                            <a class="dropdown-item" href="sillas-de-escritorio.html">Sillas de
                                                escritorio</a>
                                            <a class="dropdown-item" href="mesas-de-comedor.html">Mesas de comedor</a>
                                            <a class="dropdown-item" href="mesas-de-centro.html">Mesas de centro</a>
                                            <a class="dropdown-item" href="dressoires.html">Dressoires</a>
                                            <a class="dropdown-item" href="escritorios.html">Escritorios</a>
                                            <a class="dropdown-item" href="racks-de-tv.html">Racks de TV</a>
                                            <a class="dropdown-item" href="bibliotecas.html">Bibliotecas</a>
                                            <a class="dropdown-item" href="vajilleros.html">Vajilleros</a>
                                            <a class="dropdown-item" href="mesas-de-luz.html">Mesas de luz</a>
                                            <a class="dropdown-item" href="respaldos.html">Respaldoss</a>
                                        </div>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Servicios</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Proyectos</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="contacto.php">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="container mt-5 pt-5">
        <!-- <div class="alert alert-danger alert-dismissible fade show alert-modal" role="alert">
            <h4 class="alert-heading">Oops!!!</h4>
            <p>Ingrese un nombre</p>
            <hr>
            <p>Ingrese un correo valido</p>
            <hr>
            <p>Ingrese un mensaje</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 pb-5 pt-5">
                <form action="enviar.php" method="POST">
                    <div class="card border-secondary rounded-5">
                        <div class="card-header p-0">
                            <div class="bg-transparent text-white text-center py-2">
                                <h3><i class="fa fa-envelope text-secondary"></i> Contacto</h3>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-secondary"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-secondary"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-secondary"></i></div>
                                    </div>
                                    <textarea class="form-control" name="message" placeholder="Envianos tu Mensaje" require></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" id="btn-send" name="submit" value="Enviar" class="btn btn-contacto btn-block rounded-4">
                            </div>
                            <p id="my-form-status"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-5 pt-5 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.2909175560303!2d-68.86125268529499!3d-32.890475776375915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09a9fbfa9125%3A0xe53b9170b5cf288a!2sPOLTRONA%20Interiores!5e0!3m2!1ses-419!2sar!4v1652744522118!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <footer class="footer__bg">
        <div class="footer__top">
            <div class="container-fluid2">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 md-mb-10">
                        <div class="footer__logo mb-40">
                            <a href="index.html"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul class="footer__social md-mb-30">
                            <li>
                                <a href="#" target="_blank">
                                    <span>
                                        <i class="fa-brands fa-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span>
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span>
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span>
                                        <i class="fa-brands fa-linkedin"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <h3 class="footer__title">CONTACTO</h3>
                        <ul class="footer__address">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <div class="dir">
                                    Rufino Ortega 600
                                    <br>
                                    Ciudad de Mendoza
                                    <br>
                                    Mendoza
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-headset"></i>
                                <div class="dir">
                                    <a href="tel:(+549)02614201087)">02614201087</a>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-at"></i>
                                <div class="dir">
                                    <a href="mailto:laliflor9.93@gmail.com">laliflor9.93@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                        <h3 class="footer__title">Menu</h3>
                        <ul class="site-map">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Catálogo</a>
                            </li>
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/app.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>