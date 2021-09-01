<?php
include "idioma.php";

if(isset ($_GET["lenguaje"])){

   $idioma=$_GET["lenguaje"];

}else{

    $idioma="es";
}
?>


<header>
        <nav class="navbar navbar-expand-md">
            <div class="container">

                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($header=="inicio")? "activate" : ""?>"  href="index.php?lenguaje=<?= $idioma?>"><?php echo traduccion($idioma,"inicio");?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($header=="sobre-mi")? "activate" : ""?>"  href="sobre-mi.php?lenguaje=<?= $idioma?>"> <?php echo traduccion($idioma,"sobreMi");?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($header=="proyectos")? "activate" : ""?>"  href="proyectos.php?lenguaje=<?= $idioma?>"><?php echo traduccion($idioma,"proyectos");?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($header=="contacto")? "activate" : ""?>"  href="contacto.php?lenguaje=<?= $idioma?>"><?php echo traduccion($idioma,"contacto");?></a>
                        </li>
                    </ul>
                    
                    <form class="d-flex idioma">
                        <ul class="navbar-nav me-auto mb-md-0 ">
                            <li class="nav-item es">
                                 <a class="nav-link" href="?lenguaje=es">ES</a> 
                               
                            </li>

                            <li class="nav-item en">
                                <a class="nav-link" href="?lenguaje=en">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>