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

    <title>Calderas Verticales</title>
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



    <img src="objetos/Menu.svg" id="menuHamburguesa" class='d-md-none menumovil' onclick="toogleMenu()">

    <div style="height: 70px;" class="d-none d-md-block row ">
    </div>

    <img src="verticales/Horizontalcompleto.svg" class="img-fluid w-100 d-none d-lg-block">

    
    <img src="verticales/BannerMovil.svg" class="img-fluid w-100 d-lg-none">


    <a href="contacto.php">
        <img src="verticales/Cotizar.svg" class='botonCotizarVertical'>
    </a>






    <img src="verticales/IconosHorizontal.svg" class="img-fluid w-100 d-none d-lg-block">


    <img src="verticales/IconosMovil.svg" class="img-fluid w-100 d-lg-none">


    <img src="verticales/CalderasHorizontal.svg" class="img-fluid w-100 d-none d-lg-block">


    <img src="verticales/CalderasMovil.svg" class="img-fluid w-100 d-lg-none">

    <div class="row w-100 d-lg-none" style="height: 60px;background-color: #F2F2F2;" align="center">
    <a class="linkCatalogos img-fluid w-100 d-lg-none" target="_blank" href="catalogos/Verticales.pdf">Descarga Catálogo y Ficha Técnica</a>
    </div>

    <img src="verticales/ConoceHorizontal.svg" class="img-fluid w-100 d-none d-lg-block">


    <img src="verticales/ConoceMovil.svg" class="img-fluid w-100 d-lg-none">

    <div class="row w-100" style="height: 30px;">
    </div>


    <img src="objetos/piepagina.svg" class="img-fluid w-100 d-none d-lg-block">

    <img  src="objetos/piepaginaMovil.svg" class="img-fluid w-100 d-lg-none">

    <img src="objetos/gif5.gif" class="gifunoVertical">


    <img src="objetos/gif5.gif" class="gifdosvertical">

    <a class="linkCatalogos calderaVertical d-none d-lg-block " target="_blank" href="catalogos/Verticales.pdf">Descarga Catálogo y Ficha Técnica</a>

</body>

</html>