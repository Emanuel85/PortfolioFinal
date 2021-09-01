<?php $header="contacto";?>
<?php $footer= "contacto";?>
<?php if ($_POST) {
    $nombre= $_REQUEST["txtName"];
    $correo= $_REQUEST["txtCorreo"];
    $telefono= $_REQUEST["txtTel"];
    $mensaje= $_REQUEST["txtMensaje"];

    // Varios destinatarios
    $para  = 'emanuelquintanilla85@gmail.com' . ', '; // atención a la coma
       
    $título = 'Se contactaron desde tu sitio Web';

    $mensaje = '
    Nombre: $nombre</br>
    Correo: $correo</br>
    telefono: $telefono</br>
    mensaje: $mensaje</br>
    ';
    
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       
    // Enviarlo
    $envio=mail($para, $título, $mensaje, $cabeceras);
    
    if (!$envio) {

        echo header("Location: confirmacionEnvio.php");
        
    }else{

        echo "Su mensaje fue enviado correctamente";

    }
} ?>

<!DOCTYPE html>
<html lang="es">
  
<?php include_once("head.php") ?>

<body id="contacto">
    <?php 
    
    include_once("header.php");
    
    ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1><?php echo traduccion($idioma,"contacto");?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <p><?php echo traduccion($idioma,"invitacion");?></p>
                </div>

                <div class="col-12 col-sm-6">

                    <form action="" href="" method="POST">
                        <div>
                            <input type="text" name="txtName" id="txtName" placeholder="<?php echo traduccion($idioma,"nombre");?>"
                                class="form-control mb-2 shadow">
                        </div>

                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="<?php echo traduccion($idioma,"correo");?>"
                                class="form-control my-3 shadow">
                        </div>

                        <div>
                            <input type="tel" name="txtTel" id="txtTel" placeholder="<?php echo traduccion($idioma,"telefonoWhatsapp");?>"
                                class="form-control my-3 shadow">
                        </div>

                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10"
                                placeholder="<?php echo traduccion($idioma,"mensaje");?>" class="form-control my-3 shadow"></textarea>
                        </div>

                        <div class="text-center text-sm-start">
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn enviar mt-1"><?php echo traduccion($idioma,"enviar");?></button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </main>

    <?php include_once("footer.php")?>

    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=541161075927" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
    
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>