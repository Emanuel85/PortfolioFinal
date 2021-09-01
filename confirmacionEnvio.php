<?php $header="contacto";?>
<?php $footer= "contacto";?>


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
                    <h1><?php echo traduccion($idioma,"confirmacion");?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <p><?php echo traduccion($idioma,"agradecimiento");?></p>
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