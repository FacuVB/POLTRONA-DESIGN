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
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/favicomatic/apple-touch-icon-144x144.png">
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
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="catalogo.html">Catálogo</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="servicios.html">Servicios</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="proyectos.html">Proyectos</a>
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
    <footer class="footer-07">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <img class="footer-heading" src="img/footer-logo.png" alt="">
                    <p class="menu">
                        <a href="index.html">Home</a>
                        <a href="catalogo.html">Catálogo</a>
                        <a href="servicios.html">Servicios</a>
                        <a href="proyectos.html">Proyectos</a>
                        <a href="contacto.php">Contacto</a>
                    </p>
                    <ul class="ftco-footer-social p-0">
                    <li><a href="https://www.facebook.com/poltronainteriores/" title="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/poltronainteriores/" title="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Poltrona
                        <!-- <a href="#" target="_blank"></a> -->
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