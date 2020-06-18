<!doctype html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="http://www.calderaspimmsa.com.mx/c052_contenido_armado/favicon.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">

    <link rel="stylesheet" href="css/style.css" id="personal-css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />



    <script>
        function toogleMenu() {
            var div1 = document.getElementById('divMenu1');
            var hamb = document.getElementById('menuHamburguesa');

            var estilo = div1.style.display;
            if (estilo == "" || estilo == "block") {
                div1.style.display = "none";
                hamb.style.display = "block";

            } else {
                div1.style.display = "block";
                hamb.style.display = "none";

            }
        }
    </script>

    <title>PIMMSA</title>
</head>

<body>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="slick/slick.min.js"></script>


    <div class="menuEstatico">

        <div style="height: 20px;" class="d-none d-md-block row ">
        </div>
        <div class="row align-items-center ">
            <div class="d-none d-md-block col-lg-1 col-md-1 "></div>
            <div class="d-none d-md-block col-lg-2 col-md-2" align="center">

                <a href="horizontales.php">Horizontales</a>

            </div>
            <div class="d-none d-md-block col-lg-2 col-md-2" align="center"><a href="verticales.php">Verticales</a></div>
            <div class="d-none d-md-block col-lg-2 col-md-2" align="center"><a href="index.php"><img src="objetos/PIMMSA.svg"></a></div>
            <div class="d-none d-md-block col-lg-2 col-md-2" align="center"><a href="biomasa.php">Biomasa</a></div>
            <div class="d-none d-md-block col-lg-2 col-md-2" align="center"><a href="contacto.php">Contacto</a></div>
            <div class="d-none d-md-block col-lg-1 col-md-1"></div>
        </div>
        <div style="height: 20px;" class="d-none d-md-block row ">
        </div>

    </div>
    <div style="height: 70px;" class="d-none d-md-block row ">
    </div>

    <div id="divMenu1" class="row menuMovilAparece" style="display:none;">
        <div class="row w-100" style="height: 30px;">
        <div class="col-12 " align="right">
                
                    <img src="objetos/X.svg" style="height: 25px;padding-right: 10px" onclick="toogleMenu()">
            </div>
        </div>
        <div class="row w-100" style="height: 20px;">
        </div>
        <div class="row w-100">
            <div class="col-12 " align="center">
                <a href="index.php">
                    <img src="objetos/PIMMSA.svg" style="height: 45px;padding-left: 20px;"></a>
            </div>
        </div>
        <div class="row w-100" style="height: 30px;">
        </div>
        <div class="row w-100">
            <div class="col-12 " align="center">
                <a class="mylink" href="horizontales.php">Horizontales</a>
            </div>
        </div>
        <div class="row w-100" style="height: 20px;">
        </div>
        <div class="row w-100">
            <div class="col-12 " align="center">
                <a class="mylink" href="verticales.php">Verticales</a>
            </div>
        </div>
        <div class="row w-100" style="height: 20px;">
        </div>
        <div class="row w-100">
            <div class="col-12 " align="center">
                <a class="mylink" href="biomasa.php">Biomasa</a>
            </div>
        </div>
        <div class="row w-100" style="height: 20px;">
        </div>
        <div class="row w-100">
            <div class="col-12 " align="center">
                <a class="mylink" href="contacto.php">Contacto</a>
            </div>
        </div>


        <div class="row w-100" style="height: 30px;">
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="galeriaInicio/g1.jpg" alt="1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g2.jpg" alt="2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g3.jpg" alt="3">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g4.jpg" alt="4">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g5.jpg" alt="5">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g6.jpg" alt="6">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g7.jpg" alt="7">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="galeriaInicio/g8.jpg" alt="8">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a href="#nosotrosHorizontal">
        <img src="objetos/BannerTexto.svg" class='banner'>
    </a>
    <img src="objetos/Menu.svg" id="menuHamburguesa" class='d-md-none menumovil' onclick="toogleMenu()">


    <img src="objetos/InicioMovil.svg" class="img-fluid w-100 d-lg-none">

    <a href="#nosotrosMovil">
        <img src="objetos/ConoceMas.svg" class='botonConoceMas'>
    </a>

    <div style="height: 40px;" class="d-lg-none row ">
    </div>
    <div style="height: 40px;" class="d-none d-md-block row ">
    </div>
    <div class="row align-items-start">
        <div class="col-lg-3 col-md-2 col-1"></div>
        <div class="col-lg-6 col-md-8 col-10" align="center">

            <span class="soluciones">
                Soluciones integrales en la generación y ahorro de energía
            </span>

        </div>

        <div class="col-lg-3 col-md-2 col-1"></div>
    </div>




    <img  src="objetos/IconosHorizontal.svg" class="img-fluid w-100 d-none d-lg-block">


<img  src="objetos/IconosMovil.svg" class="img-fluid w-100 d-lg-none">

    
    


    <img id="nosotrosHorizontal" src="objetos/NosotrosInicio.svg" class="img-fluid w-100 d-none d-lg-block">


    <img id="nosotrosMovil" src="objetos/NosotrosMovil.svg" class="img-fluid w-100 d-lg-none">

    <div style="height: 100px;background-color: #333333;" class="row align-items-center ">

        <div class="col" align="center">
            <span class="algunosClientes">
                Algunos de nuestros clientes
            </span>
        </div>
    </div>



    <img src="objetos/gif5.gif" class="gifunoInicio">


    <img src="objetos/gif5.gif" class="gifdosinicio">


    <script type="text/javascript" src="slick/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="slick/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {



            $('.caruselslick').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>


    <div style="height: 100px;background-color: #333333;" class="row align-items-center ">

        <div class="col-2">
        </div>
        <div class="col-8" align="center">
            <div class="caruselslick">
                <div> <img src="clientes/g1.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g2.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g3.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g4.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g5.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g6.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g7.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g8.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g9.svg" style="height: 45px;"></div>
                <div> <img src="clientes/g10.svg" style="height: 45px;"></div>

            </div>
        </div>
        <div class="col-2" align="center">
        </div>

    </div>
    <div style="height: 50px;background-color: #333333;" class="row align-items-center ">
    </div>
    <img src="objetos/piepagina.svg" class="img-fluid w-100 d-none d-lg-block">

<img  src="objetos/piemovilinicio.svg" class="img-fluid w-100 d-lg-none">




</body>

</html>