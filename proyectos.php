
<?php $header="proyectos";?>
<?php $footer= "proyectos";?>

<!DOCTYPE html>
<html lang="es">

<head>

    <?php include_once("head.php") ?>
    
</head>

<body id="proyectos">

<?php include_once("header.php"); ?>

    <main>

        <div class="container">
            <div class="row">
                <div class="col 12 py-5">
                    <h1><?php echo traduccion($idioma,"proyectos");?></h1>
                </div>


                <div class="row p-0">

                    <div class="col 12 mb-3 px-4 ms-0">
                        <h2>
                            <p><?php echo traduccion($idioma,"trabajos");?></p>
                        </h2>
                    </div>

                    <div class="row caja m-0 p-0">

                        <div class="col-12 col-sm-4 m-0 px-4 py-2">

                            <div class="row card m-0 p-0">

                                <div class="col-12 p-0">
                                    <img src="../portfolio/images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                                </div>

                                <div class="col-12 gradiente px-0">
                                    <h2><?php echo traduccion($idioma,"clientes");?></h2>
                                </div>

                                <div class="col-12 bg-dark py-3 px-2">
                                    <p> <?php echo traduccion($idioma,"abm");?> </p>
                                </div>

                                <div class="row bg-dark m-0 ">

                                    <div class="col-6 py-4 text-center VerOnline">
                                        <a href="sistemas/abmclientes" class="btn" target="_blank"><?php echo traduccion($idioma,"online");?></a>
                                    </div>

                                    <div class="col-6 py-4 mt-2 text-center CodigoFuente">
                                        <a a href="sistemas/abmclientes" target="_blank"><?php echo traduccion($idioma,"codigo");?></a>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                        <div class="col-12 col-sm-4 m-0 px-4 py-2">

                            <div class="row card m-0 p-0">

                                <div class="col 12 p-0">
                                    <img src="../portfolio/images/abmventas.png" alt="ABM VENTAS" class="img-fluid">
                                </div>

                                <div class="col 12 gradiente px-0">
                                    <h2><?php echo traduccion($idioma,"abmClientes");?></h2>
                                </div>

                                <div class="col 12 bg-dark py-3 px-2">
                                    <p> <?php echo traduccion($idioma,"sistemaGestion");?> </p>
                                </div>

                                <div class="row bg-dark m-0 ">

                                    <div class="col 6 py-4 text-center VerOnline">
                                        <a href="sistemas/abmclientes" class="btn" target="_blank"><?php echo traduccion($idioma,"online");?></a>
                                    </div>

                                    <div class="col 6 py-4 mt-2 text-center CodigoFuente">
                                        <a a href="sistemas/abmclientes" target="_blank"><?php echo traduccion($idioma,"codigo");?></a>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                        <div class="col-12 col-sm-4 m-0 px-4 py-2">

                            <div class="row card m-0 p-0">

                                <div class="col 12 p-0">
                                    <img src="../portfolio/images/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid">
                                </div>

                                <div class="col 12 gradiente px-0">
                                    <h2> <?php echo traduccion($idioma,"proyectoIntegrador");?></h2>
                                </div>

                                <div class="col 12 bg-dark py-3 px-2">
                                    <p> <?php echo traduccion($idioma,"fullStack");?> </p>
                                </div>

                                <div class="row bg-dark m-0 ">

                                    <div class="col 6 py-4 text-center VerOnline">
                                        <a href="sistemas/abmclientes" class="btn" target="_blank"><?php echo traduccion($idioma,"online");?></a>
                                    </div>

                                    <div class="col 6 py-4 mt-2 text-center CodigoFuente">
                                        <a a href="sistemas/abmclientes" target="_blank"><?php echo traduccion($idioma,"codigo");?></a>
                                    </div>

                                </div>

                            </div>
                            
                        </div>


                    </div>

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