 
<?php $header="inicio";?>
<?php $footer= "inicio";?>

<!DOCTYPE html>
<html lang="es">

<?php include_once("head.php") ?>

<body id="index">
    
<?php include_once("header.php"); ?>

    <main>

        <div class="container">

            <div class="row porfolio">

                <div class="col-12 col-sm-12 mt-4 text-center">
                    <img src="../portfolio/images/naveEspacial.png" alt="">
                </div>

                <div class="col-12 col-sm-12 my-4 text-center">
                    <p><?php echo traduccion($idioma,"bienvenido");?></p>
                </div>

                <div class="col-12 col-sm-12 mb-5 text-center btnProyectos">
                    <a href="proyectos.html" class="btn"><?php echo traduccion($idioma,"misProyectos");?></a>
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