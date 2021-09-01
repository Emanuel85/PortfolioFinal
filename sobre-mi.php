
<?php $header="sobre-mi";?>
<?php $footer= "sobre-mi";?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("head.php") ?>

</head>

<body id="sobreMi">
    
<?php include_once("header.php"); ?>

    <main>
        <div class="container">
            <div class="row sobreMi my-5">

                <div class="col-12 col-sm-6">

                    <div class="col-12 my-5">
                        <h1><?php echo traduccion($idioma,"quienSoy");?></h1>
                    </div>

                    <div class="col-12 my-5">
                        <p> <?php echo traduccion($idioma,"presentacion");?></p>
                    </div>

                    <div class="col-12 my-5 text-center">
                        <a href="/portfolio/failes/Cv.pdf" download="QuintanillaEmanuel CV.pdf"><?php echo traduccion($idioma,"descargar");?></a>
                    </div>

                </div>

                <div class="col-12 col-sm-6 text-center">
                    <img src="../portfolio/images/fotoPerfil.png" alt="">
                </div>

            </div>
        </div>

        <section class="tecnologia colorGradiente">
            <div class="container">
                <div class="row">
                    <div class="ccol-12 p-0 mt-5 mb-3 mx-4">
                        <h2><i class="fas fa-chalkboard me-3"></i><?php echo traduccion($idioma,"stack");?></h2>
                    </div>

                    <div class="row m-0 ">

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3></i><?php echo traduccion($idioma,"javaScript");?></h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-js"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center text-center my-1">
                                    <h3>PHP</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-php"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>html5</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-html5"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>React.js</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-react"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>jQuery</h3>
                                </div>
                                <div class="text-center">
                                    <img src="../portfolio/images/icon-jquery.png" alt="" width="100px" height="100px">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>Bootstrap</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-bootstrap"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row m-0">

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>Laravel</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-laravel"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>MySQL</h3>
                                </div>
                                <div class="text-center">
                                    <img src="../portfolio/images/icon-mariadb.png" alt="" width="100px" height="100px">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>CSS</h3>
                                </div>
                                <div class="text-center icon">
                                    <i class="fab fa-css3-alt"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>Git</h3>
                                </div>
                                <div class="text-center">
                                    <img src="../portfolio/images/icon-git.png" alt="" width="100px" height="100px">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>Apache</h3>
                                </div>
                                <div class="text-center">
                                    <img src="../portfolio/images/icon-apache.png" alt="" width="150px" height="100px">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 col-6 mb-3">
                            <div class="bg-rosa py-4">
                                <div class="text-center my-1">
                                    <h3>MercadoPago</h3>
                                </div>
                                <div class="text-center">
                                    <img src="../portfolio/images/icon-mercadopago.png" alt="" width="100px"
                                        height="100px">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="experiencia colorGradiente">
            <div class="container ps-3 pb-2">

                <div class="col-12 p-0 mt-5 mb-3 ms-2 pt-5">
                    <h2><i class="fas fa-briefcase me-2"></i> <?php echo traduccion($idioma,"experiencia");?> </h2>
                </div>
                <div class="col-12 bg-experiencia ms-2">

                    <div class="col-12">
                        <div class="row m-0 ">
                            <div class="col-sm-2 p-5 mt-0 text-center">
                                <img src="../portfolio/images/logo-caba.png" alt="" class="img fluid" width="125px" height="125px">
                            </div>

                            <div class="col-sm-10 mt-3 pe-4">
                                <h3><?php echo traduccion($idioma,"docente");?></h3>
                                <h4>Gobierno de la Ciudad</h4>
                                <h5>2017 - <?php echo traduccion($idioma,"presente");?></h5>
                                <p><?php echo traduccion($idioma,"docenteExp");?></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row m-0 ">
                            <div class="col-sm-2 p-4 text-center">
                                <img src="../portfolio/images/sin-logo.png" alt="" class="img fluid" width="125px" height="150px">
                            </div>

                            <div class="col-sm-10 mt-3 pe-4">
                                <h3><?php echo traduccion($idioma,"modelador");?></h3>
                                <h4>Be.Ar</h4>
                                <h5>2014 - 2016</h5>
                                <p><?php echo traduccion($idioma,"modeladorExp");?></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row m-0 ">
                            <div class="col-sm-2 py3 my-4 text-center">
                                <img src="../portfolio/images/logo-personal.jpg" alt="" class="img fluid" width="125px" height="125px">
                            </div>

                            <div class="col-sm-10 mt-3 pe-4">
                                <h3><?php echo traduccion($idioma,"disenio");?></h3>
                                <h4>Freelance</h4>
                                <h5>2012 - <?php echo traduccion($idioma,"presente");?></h5>
                                <p><?php echo traduccion($idioma,"disenioExp");?></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="row m-0 ">
                            <div class="col-sm-2 py-3 px-4 my-3 text-center">
                                <img src="../portfolio/images/logo-coto.png" alt="" class="img fluid" width="125px" height="110px">
                            </div>

                            <div class="col-sm-10 mt-3 pe-4">
                                <h3><?php echo traduccion($idioma,"programador");?></h3>
                                <h4>COTO</h4>
                                <h5>2008 - 2010</h5>
                                <p><?php echo traduccion($idioma,"mantenimiento");?></p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="formacion colorGradiente">
            <div class="container ps-3 pb-3">

                <div class="col-12 p-0 mt-5 mb-3 ms-2 pt-5">
                    <h2><i class="fas fa-graduation-cap me-2"></i><?php echo traduccion($idioma,"formacion");?></h2>
                </div>

                <div class="col-12 bg-experiencia ms-2">
                    <div class="row m-0">
                        
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-sm-2 my-3 text-center">
                                    <img src="../portfolio/images/formacion-davinci.png" alt="" class="img fluid" width="125px" height="125px">
                                </div>

                                <div class="col-sm-10 ps-5 my-3">
                                    <h3><?php echo traduccion($idioma,"videoJuego");?></h3>
                                    <h4>Escuela Da Vinci</h4>
                                    <h5>2015 - 2018</h5>
                                    <h5>https://www.davinci.edu.ar/</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-sm-2 my-3 text-center">
                                    <img src="../portfolio/images/logo-caba.png" alt="" class="img fluid" width="125px" height="125px">
                                </div>

                                <div class="col-sm-10 ps-5 my-3">
                                    <h3><?php echo traduccion($idioma,"titulo");?></h3>
                                    <h4>Gobierno de la Ciudad </h4>
                                    <h5>2017 - 2019</h5>
                                    <h5>https://www.buenosaires.gob.ar/educacion/docentes </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-sm-2 my-2 text-center">
                                    <img src="../portfolio/images/formacion-escuela.png" alt="" class="img fluid" width="125px" height="125px">
                                </div>

                                <div class="col-sm-10 ps-5 my-3">
                                    <h3><?php echo traduccion($idioma,"tecnico");?></h3>
                                    <h4>ET32 DE14 Gral Jose de San Martin </h4>
                                    <h5>2001 - 2006 </h5>
                                    <h5>https://escuelatecnica32de14.edu.ar/</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>

    </main>

    <?php include_once("footer.php")?>

    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=541161075927" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>