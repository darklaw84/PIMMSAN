<?php
$entro = "";

$nombre = "";
$telefono = "";
$mensaje = "";
$empresa = "";
$empresa = "";
$correo = "";
        //$entro = $_POST['entro'] ?? '';
        $entro = $_POST['entro'];

if ($entro == 1) {
/*
    $nombre = $_POST['nombre'] ?? '';
    $empresa = $_POST['empresa'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';
*/
       $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];


    if (
        trim($nombre) == "" || trim($empresa) == "" || trim($telefono) == ""
        || trim($correo) == "" || trim($mensaje) == ""
    ) {
        echo '<script language="Javascript">
    alert("Todos los campos son obligatorios");
    </script>';
    } else {

        $pattern = '/^([0-9]{4})(-)([0-9]{7})$/';
        $pattern_2 = '/^([0-9]{3})(-)([0-9]{4})(-)([0-9]{4})$/';

        if (is_numeric($telefono)) {

            if (is_valid_email($correo)) {




                $message = "Nombre: " . $nombre . "\n\n Empresa: " . $empresa . "\n\n Telefono: " . $telefono . "\n\n  Correo: " . $correo . "\n\n  Mensaje: " . $mensaje;

                require_once "Mail.php";

                $from = "Pimmsa <pimmsacontacto@gmail.com> ";
                 $to = "jlbvaldespino <jlbvaldespino@calderaspimmsa.com.mx>";
                //$to = "andy <darklaw84@gmail.com>";
                $subject = "Nueva cotizacion Pimmsa";
                $body = $message;

                $host = "smtp.gmail.com";
                $username = "pimmsacontacto@gmail.com";
                $password = "Mexico2020";

                $headers = array(
                    'From' => $from,
                    'To' => $to,
                    'Subject' => $subject
                );
                $smtp = Mail::factory(
                    'smtp',
                    array(
                        'host' => $host,
                        'auth' => true,
                        'username' => $username,
                        'password' => $password
                    )
                );

                $mail = $smtp->send($to, $headers, $body);


                if (PEAR::isError($mail)) {
                    echo '<script language="Javascript">
                    alert("Problema enviando ' . $mail->getMessage() . ' ");
                    </script>';
                } else {
                    echo '<script language="Javascript">
                    alert("Email enviado exitosamente");
                    </script>';
                }


                $telefono = "";
                $correo = "";
                $empresa = "";
                $nombre = "";
                $mensaje = "";
            } else {

                echo '<script language="Javascript">
            alert("El correo no es correcto");
            </script>';
            }
        } else {

            echo '<script language="Javascript">
        alert("El telefono no es correcto");
        </script>';
        }
    }
}


function is_valid_email($str)
{
    return (false !== strpos($str, "@") && false !== strpos($str, "."));
}





?>


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

    <title>Contacto</title>
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

    <img src="contacto/BannerHorizontal.svg" class="img-fluid w-100 d-none d-lg-block">


    <img src="contacto/BannerMovil.svg" class="img-fluid w-100 d-lg-none">


    <form method="POST" id="formulario" action="contacto.php">

        <div class="formularioContacto">
            <input type="hidden" name="entro" value="1">
            <div style="height: 30px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <span class="escribenos">ESCRÍBENOS</span>
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <input type="text" class="campoTexto" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <input type="text" class="campoTexto" name="empresa" placeholder="Empresa" value="<?php echo $empresa; ?>">
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <input type="text" class="campoTexto" name="telefono" placeholder="Telefono" value="<?php echo $telefono; ?>">
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <input type="text" class="campoTexto" name="correo" placeholder="Correo" value="<?php echo $correo; ?>">
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <textarea placeholder="Mensaje" rows="6" class="campoTexto" name="mensaje"><?php echo $mensaje ?></textarea>
            </div>
            <div style="height: 15px" class="row w-100">
            </div>
            <div class="row w-100 justify-content-center">
                <img src="contacto/enviar.svg" class="enviar" onclick="document.getElementById('formulario').submit();">
            </div>

        </div>
        <img src="contacto/Mascota.svg" class="mascotaVoladora">
    </form>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.53443283193!2d-101.13747938567029!3d19.73243588671473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d11b7638c99bd%3A0xf89fe575bcc26f1!2sCalle%20Nte.%204%20600%2C%20Cd%20Industrial%2C%2058200%20Morelia%2C%20Mich.%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sma!4v1583362621255!5m2!1ses-419!2sma" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


        <img src="objetos/piepagina.svg" class="img-fluid w-100 d-none d-lg-block">

    <img  src="objetos/piepaginaMovil.svg" class="img-fluid w-100 d-lg-none">



</body>

</html>