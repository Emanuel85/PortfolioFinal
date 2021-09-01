<?php


function traduccion($idioma,$componente){

switch($idioma){
    /*-------------------------------------- ESPAÑOL ------------------------------------------------*/


        /*IDIOMA MENU ESPAÑOL (ES)*/
    case "es":
        if($componente=="inicio"){
            return $inicioES="Inicio";
        }
        if($componente=="sobreMi"){
            return $sobreMiES="Sobre Mi";
        }
        if($componente=="proyectos"){
            return $proyectosES="Proyectos";
        }
        if($componente=="contacto"){
            return $contactoMiES="Contacto";
        }


        /*IDIOMA INDEX ESPAÑOL (ES)*/
        if($componente=="bienvenido"){
            return $bienvenidoES="Bienvenidos a mi primer porfolio.";
        }
        if($componente=="misProyectos"){
            return $misProyectosES="Conoce mis proyectos";
        }
        

         /*IDIOMA PAGINA CONTACTO ESPAÑOL (ES)*/
        if($componente=="confirmacion"){
            return $confirmacionES="Gracias por contactarte";
        }
        if($componente=="agradecimiento"){
            return $agradecimientoES="te estare respondiendo a la brevedad";
        }  
        if($componente=="contacto"){
            return $nombreES="Contacto";
        } 
        if($componente=="nombre"){
            return $nombreES="Nombre";
        }
        if($componente=="correo"){
            return $correoES="Correo";
        }
        if($componente=="telefonoWhatsapp"){
            return $telefonoES="Telefono/Whatsapp";
        }
        if($componente=="mensaje"){
            return $mensajeES="Escribe aqui tu mensaje";
        }
        if($componente=="enviar"){
            return $enviariES="Enviar";
        }
        if($componente=="invitacion"){
            return $invitacionES="Te invito a que me contactes enviándome un mensaje o por whatsapp";
        }
       

         /*IDIOMA PAGINA PROYECTO ESPAÑOL (ES)*/
        if($componente=="proyectos"){
            return $proyectosES="Proyectos";
        } 
        if($componente=="trabajos"){
            return $trabajosES="Los siguientes son algunos de los trabajos que he realizado:";
        }
        if($componente=="clientes"){
            return $clientesES="ABM Clientes";
        }
        if($componente=="abm"){
            return $abmES="Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS,
            PHP,Bootstrap y Json.";
        }
        if($componente=="online"){
            return $onlineES="Ver online";
        }
        if($componente=="codigo"){
            return $codigoES="Codigo Fuente";
        }


        if($componente=="abmClientes"){
            return $abmClientesES="ABM Clientes";
        }
        if($componente=="sistemaGestion"){
            return $sistemaGestionES="Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos";
        }


        if($componente=="proyectoIntegrador"){
            return $proyectoIntegradorES="PROYECTO INTEGRADOR";
        }
        if($componente=="fullStack"){
            return $fullStackES="Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.";
        }


         /*IDIOMA PAGINA SOBRE MI ESPAÑOL (ES)*/
         if($componente=="quienSoy"){
            return $quienSoyES="Quien soy...";
        }
        if($componente=="presentacion"){
            return $presentacionES="Me llamo Emanuel soy desarrollador y diseñador en crecimiento de Buenos Aires, Argentina.
            En 2021 decidí tomarme en serio mi carrera profesional y comence un curso de Programación
            Full Stack Laravel el
            cuál me catapultó al mundo IT donde he estado aprendiendo y mejorando mis habilidades,
            espero poder desarrollar multiples
            proyectos tanto simples como complejos y poder ir adquiriendo nuevos conocimientos a lo
            largo del camino.";
        }
        if($componente=="descargar"){
            return $descargarES="Descargar CV";
        }
        if($componente=="stack"){
            return $stackES="STACK Tecnologico";
        }
        if($componente=="javaScript"){
            return $javaScriptES="Java Script";
        }
        if($componente=="experiencia"){
            return $experienciaES="Experiencia Laboral";
        }
        if($componente=="docente"){
            return $docenteES="Docente";
        }
        if($componente=="docenteExp"){
            return $docenteExpES="Docente de escuela técnica publica en orientación de computación ciclo superior, 
            enfoque en apartado de diseño de UI para la implementación de futuros proyectos.";
        }
        if($componente=="modelador"){
            return $modeladorExpES="Modelador/Freelance";
        }
        if($componente=="modeladorExp"){
            return $modeladorExpES="Modelado inorgánico para proyectos de edificación, Aplicación de texturas a modelos y escena, 
            configuración de cámaras y luces paa renderizado basado en V-ray.";
        }
        if($componente=="disenio"){
            return $disenioES="Diseñador";
        }
        if($componente=="disenioExp"){
            return $disenioExpES="Producción de proyectos personales, desarrollo de diseños para particulares y empresas, 
            maquetación de UX/UI para app y videojuegos. Presentaciones de identidad de marcas.";
        }
        if($componente=="programador"){
            return $programadorEN="Programador Junio";
        }
        if($componente=="mantenimiento"){
            return $mantenimientoES="Mantenimiento del Sistema gestión de personal en planta, 
            corrección de errores en el funcionamiento de altas y bajas del sistema. Tecnologías c++";
        }
        if($componente=="formacion"){
            return $formacionES="Formacion academica";
        }
        if($componente=="videoJuego"){
            return $videoJuegoES="Desarrollador Videojuegos - Artistico";
        }
        if($componente=="titulo"){
            return $tituloES="Titulos Docente habilitante para la modalidad técnico-profesional";
        }
        if($componente=="tecnico"){
            return $tecnicoES="Tecnico Computacion";
        }        




        break;

        /*-------------------------------------- INGLES ------------------------------------------------*/

         /*IDIOMA MENU INGLES (EN)*/
        case "en":
        if($componente=="inicio"){
            return $inicioEN="Home";
        }
        if($componente=="sobreMi"){
            return $sobreMiEN="About Me";
        }
        if($componente=="proyectos"){
            return $proyectosEN="Project";
        }
        if($componente=="contacto"){
            return $contactoEN="Contact";
        }
         

        /*IDIOMA INDEX INGLES (EN)*/
        if($componente=="bienvenido"){
            return $bienvenidoES="Welcome to my first portfolio.";
        }
        if($componente=="misProyectos"){
            return $misProyectosES="Know my projects";
        }

         /*IDIOMA PAGINA CONTACTO INGLES (EN)*/
         if($componente=="confirmacion"){
            return $confirmacionEN="Thanks for contacting you";
        }
        if($componente=="agradecimiento"){
            return $agradecimientoEN="I will be answering you shortly";
        }
        if($componente=="contacto"){
            return $contactoEN="Contact";
        }     
        if($componente=="nombre"){
            return $nombreEN="Name";
        }
        if($componente=="correo"){
            return $mailEN="Mail";
        }
        if($componente=="telefonoWhatsapp"){
            return $telefonoEN="Telephone/Whatsapp";
        }
        if($componente=="mensaje"){
            return $mensajeEN="Write your message here";
        }
        if($componente=="enviar"){
            return $enviarEN="Send";
        }
        if($componente=="invitacion"){
            return $invitacionEn="I invite you to contact me by sending me a message or by whatsapp";
        }


         /*IDIOMA PAGINA PROYECTO INGLES (EN)*/
        if($componente=="proyectos"){
            return $proyectosEN="Project";
        } 
        if($componente=="trabajos"){
            return $trabajosEN="The following are some of the work I have done:";
        }
        if($componente=="clientes"){
            return $clientesEN="ABM customers";
        }
        if($componente=="abm"){
            return $abmEN="Registration, cancellation and modification of a customer record. Made in HTML, CSS, PHP, Bootstrap and Json.";
        }
        if($componente=="online"){
            return $onlineEN="Watch online";
        }
        if($componente=="codigo"){
            return $codigoEN="Source code";
        }


        if($componente=="abmClientes"){
            return $abmClientesEN="ABM customers";
        }
        if($componente=="sistemaGestion"){
            return $sistemaGestionEN="Customer, product and sales management system. Made in HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery and MySQL database";
        }


        if($componente=="proyectoIntegrador"){
            return $proyectoIntegradorEN="INTEGRATING PROJECT";
        }
        if($componente=="fullStack"){
            return $fullStackEN="Full Stack project developed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago with administrator panel, user manager, permission module and functionalities at the end.";
        }


         /*IDIOMA PAGINA SOBRE MI INGLES (ES)*/
         if($componente=="quienSoy"){
            return $quienSoyEN="Who I am...";
        }
         if($componente=="presentacion"){
            return $presentacionEN="My name is Emanuel, I am a growing developer and designer from Buenos Aires, Argentina.
            In 2021 I decided to take my professional career seriously and started a Programming course
            Full Stack Laravel the
            which catapulted me into the IT world where I have been learning and improving my skills,
            I hope I can develop multiple
            both simple and complex projects and to be able to acquire new knowledge along
            along the way.";
        }
        if($componente=="descargar"){
            return $descargarEN="Download CV";
        }
        if($componente=="stack"){
            return $stackEN="Technological STACK";
        }
        if($componente=="javaScript"){
            return $javaScriptEN="Java Script";
        }
        if($componente=="experiencia"){
            return $experienciaEN="Work experience";
        }
        if($componente=="docente"){
            return $docenteEN="Docente";
        }
        if($componente=="docenteExp"){
            return $docenteExpEN="Teacher of public technical school in computer orientation upper cycle,
            focus on UI design section for the implementation of future projects.";
        }
        if($componente=="modelador"){
            return $modeladorEN="Modeler/Freelance";
        }
        if($componente=="modeladorExp"){
            return $modeladorExpEN="Inorganic modeling for building projects, Application of textures to models and scene,
            camera and light settings for V-ray based rendering.";
        }
        if($componente=="disenio"){
            return $disenioEN="Designer";
        }
        if($componente=="disenioExp"){
            return $disenioExpEN="Production of personal projects, development of designs for individuals and companies,
            UX / UI layout for app and video games. Brand identity presentations.";
        }
        if($componente=="programador"){
            return $programadorEN="Junior programmer";
        }
        if($componente=="mantenimiento"){
            return $mantenimientoEN="Maintenance of the plant personnel management system,
            correction of errors in the operation of system registrations and cancellations. C ++ technologies.";
        }
        if($componente=="formacion"){
            return $formacionEN="Academic training";
        }
        if($componente=="videoJuego"){
            return $videoJuegoEN="Videogame Developer - Artistic";
        }
        if($componente=="titulo"){
            return $tituloEN="Qualifying teaching qualifications for the technical-professional modality";
        }
        if($componente=="tecnico"){
            return $tecnicoEN="Computer Technician";
        }
            
        break;

}
}

?>


