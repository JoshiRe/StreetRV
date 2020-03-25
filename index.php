<!-- 
    > El sitio como tal no te lleva a ninguna página. Mas bien, está dividida en secciones, las cuales se pueden ver
    haciendo scroll o dando click en algún botón de la barra de navegación.
    > La barra de navegación es sticky, se va a anclar al tope de la página cuando esta llegue a ese punto.
    > El main css es el que aplica el estilo general a toda la página.
    > A cada sección le dediqué su propio css, con tal de tener todo más ordenado.
    > Las secciones son:
        - Inicio: aquí va una imagen de fondo, acompañado de un título llamativo y un video corto.
        - Nosotros: la descripcíon de quienes somos como empresa, acompañado del logo de esta.
        - Desarrollo: aquí va el video de las entrevistas y el proceso de desarrollo.
        - Equipo: aquí va un layout de 6 vistas. Cada vista contendrá una imagen de cada miembro del equipo, su nombre y puesto.
        - Contacto: el formulario

    > Cada sección sigue un patrón:
        - Deben ir con la etiqueta "section"
        - Deben contener un título h1 con la clase "titulo1"
        Por lo tanto, si quieres agregar otra sección, sigue ese patrón.

    > Si quieres agregar otro botón en el navbar, solo agrega otro div con su respectivo enlace y atributos.
        Guíate de los botones que ya están agregados.
    
    BUGS Y OTRAS WEAS:
    > Si das un segundo click a algún botón de la barra de navegación, no podrás seguir haciendo scroll. Tendrás
        que presionar otro botón. Pensaba resolver esto con js.
    > Cuando presionas un botón del navbar, este te lleva a sección deseada, pero parte de esa sección se queda oculta.
        Pretendía buscar la forma de resolver eso mediante css o js. Si bien no es algo que afecte el funcionamiento de la página,
        no se ve estético.
    > Cuando presionas un botón del navbar, no se queda de color naranja para indicar que estás en esa sección. Pretendía resolver eso
        con js y css.
 -->
 <?php
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "streetRV";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido conectar a la base de datos" );

$consultaActivo = "SELECT * FROM contacto order by fecha desc limit 5";

$resultado = mysqli_query( $conexion, $consultaActivo ) or die ( "Algo ha ido mal en la consulta a la base de datos");


 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>StreetRV</title>
        <meta charset="utf-8">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Jquery -->
        <script type="text/javascript" src="Jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Jquery/popper.min.js"></script> 
        <!-- Librerías externas -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Plugins/smooth-scroll.min.js"></script> <!-- Para que se haga un scroll fluido -->

        <!-- Estilos propios -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/nosotros.css">
        <link rel="stylesheet" href="css/desarrollo.css">
        <link rel="stylesheet" href="css/equipo.css"> 
        <link rel="stylesheet" href="css/contacto.css">          
        <!-- Script de fuente -->
        <link rel="stylesheet" type="text/css" href="fonts/style.css"/>
        <!-- Scripts propios -->
        <script type="text/javascript" src="js/myNavbar.js"></script>
    </head>


    <body id="body">


        <!-- Aquí irá el título llamativo 
        <header>
            
        
        </header>
        -->
        <!-- NAVBAR -->
        <!-- 
            > Notarás que hay unos atributos extras, estos forman parte de la sintaxis de la librería "smooth-scroll"
         -->
        <div id="navbar" class="">
            <div>
                <a data-easing="easeInOutCubic" href="#body"><img src="img/150x40.png" alt=""></a>
            </div>
            <nav>
                <div><a data-easing="easeInOutCubic" href="#inicio" id="inicio-nav">Inicio </a><span class="aux selecteds"></span></div>
                <div><a data-easing="easeInOutCubic" href="#quienes-somos" id="nosotros-nav">Nosotros</a><span class="aux"></span></div>
                <div><a data-easing="easeInOutCubic" href="#desarrollos" id="desarrollo-nav">Desarrollo</a><span class="aux"></span></div>
                <div><a data-easing="easeInOutCubic" href="#equipos" id="equipo-nav">Equipo</a><span class="aux"></span></div>
                <div><a data-easing="easeInOutCubic" href="#contacto" id="contacto-nav">Contacto</a><span class="aux"></span></div>
            </nav>
        </div>


        <div id="inicio">
            <img class="back" src="img/4.jpg"  />
            <img class="sobre" src="img/3.png" />
        </div>
        <strong class="tituloinicio"> Street Luge RV <br>
        <img style="margin-top: 1%;" src="img/special.png" class="tituloimg">
        <br> <p> Experiencia en Realidad Virtual </p>
        <a href="#desarrollos"><button> Conoce Más</button></a>
        </strong>



<b style="margin-left: -15px;" id="quienes-somos"> </b>
            <!-- NOSOTROS --> <!-- Aquí sí uso bootstrap  y flexbox -->
        <div class="" id="nosotros">
               <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="img/team.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h1 class="titulo1">¿QUIENES SOMOS?</h1>
                        <p class="card-text">Para Renew Dev, la satisfacción del cliente es sinónimo de calidad.  Es por eso que la empresa tiene como principal enfoque el poder satisfacer las necesidades del cliente, brindando productos y servicios que cumpla con las expectativas de los mismos. </p>
                        <p>
                        Para ello, Renew Dev proporciona apoyo y soporte con su equipo de programadores e ingenieros altamente capacitados, para brindar productos y servicios de excelente calidad. Renew Dev, somos una empresa de software líder, que cuenta con empleados capacitados que sabrán como resolver sus problemas de aplicación en tecnologías de una manera segura, confiable, eficiente y agradable. 
                    </p> <p> En la época actual, el mercado demanda una atención inmediata, una interfaz sencilla y una experiencia grata por eso, con nuestro conocimiento y experiencia, junto a nuestras avanzadas e innovadoras herramientas de soporte y asistencia, nos permiten ofrecer un servicio tecnológico integral que responde totalmente a las necesidades productivas de tu empresa.</p>
                    <p> ¿Porqué elegirnos?
                    •   Contamos con asesoramiento en última tecnología para logística directa e inversa.
                    •   Desarrollamos software multidispositivo y multiplataforma.
                    •   Te aseguramos una seguridad informática y protección de datos.
                    •   Tenemos estrategias y gestión de máximo nivel para tu empresa.
                    •   Nuestro equipo profesional tiene amplio conocimiento en los nuevos avances tecnológicos.
                    •   Generaremos una reducción de costos.

                        </p>
                    </div>
                </div>
            </div>
        </div>

<b style="margin-left: -15px;" id="desarrollos"> </b>
            
            <!-- DESARROLLO -->
            <div class="" id="desarrollo">
                <h1 class="titulo1">DESARROLLO</h1>                
                <img style=" margin-left: 43%;" src="img/special.png">

                        <div id="playvideo">
                            <img src="img/play.jpg">   
                        </div>
                    </a>
            </div>

            <!-- EQUIPO -->
            <!--
                Aquí uso mis propias reglas css, me base un poco en lo que hace bootstrap. Te explico las clases:
                - myCard-row: solo es una fila donde irán las vistas. Si se necesita otra fila, se agrega otro div con esa clase.
                - myCard-col: es la caja que contiene cada uno de los layout.
                - myCard-container: es el layout que contiene la imagen, el nombre de la persona y su puesto.
                - myCard-header: aquí va la imagen.
                - myCard-body: aquí va el nombre de la persona.
                - myCard-footer: aquí va el puesto de la persona.

                Si necesitas modificar el margen entre las filas, modifica "myCard-row".
                Si necesitas modificar el padding del layout, modifica "myCard-container".
                Los bordes de colores son solo para visualización, esos se deben quitar.
                P.d. Sorry, creo que pude haber hecho lo mismo con bootstrap.
            -->
        <b style="margin-top: -35px; position: absolute;" id="equipos"> </b>

            <div class="" id="equipo" style="margin-top: 35px;">
               <h1 class="titulo1">EQUIPO</h1>                
                <img style=" margin-left: 43%; margin-bottom: 3%;" src="img/special.png">
                <!-- Card Row 1 -->
                <div class="myCard-row">
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header "><img class="pefil " src="img/60x60.png" alt="perfil"></div>
                            <div class="myCard-body activo">
                                Mariana García
                            </div>
                            <div class="myCard-footer activo">
                                Investigación y Difusión
                            </div>
                              <div class="myCard-back">
                                 Es la encargada de dirigir y coordinar las actividades relacionadas con el análisis y desarrollo del proyecto. Realizar los estudios de factibilidad y pertinencia de las líneas de generación y aplicación del proyecto. Gestiona y supervisa los recursos para la difusión del proyecto.                      
                            </div>
                        </div>

                    </div>
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header"><img class="pefil" src="img/60x60.png" alt="perfil"></div>
                            <div class="myCard-body activo">
                                Jose Gerónimo
                            </div>
                            <div class="myCard-footer activo">
                                Programador Web
                            </div>
                             <div class="myCard-back">
                                 Es el encargado de diseñar, crear y realizan mantenimiento a la aplicacion web del proyecto.  Habilidad para la resolución de problemas. Alta capacidad de análisis y de concentración.  Conocimientos profundos técnicos de lenguajes de programación complejos.                   
                            </div>
                        </div>
                    </div>
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header"><img class="pefil" src="img/60x60.png" alt="perfil"></div>
                            <div class="myCard-body activo">
                                Luis Javier López
                            </div>
                            <div class="myCard-footer activo">
                                Programador Háptico
                            </div>
                            <div class="myCard-back">
                                 Es el encargado de crear una experiencia convincente para el usuario: encargado de crear las conexiones adecuadas entre el arduino y el motor grafico. Su objetivo es hacer que los sistemas de hapticos funcionen de forma más eficiente. Desarrollar las modificaciones y mejoras.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Row 2 -->
                <div class="myCard-row">
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header"><img  class="pefil" src="img/60x60.png" alt="perfil"></div>
                            <div class="activo myCard-body">
                                Verónica Olmos                                
                            </div>
                            <div class="activo myCard-footer">
                                Modeladora y Animadora
                            </div>
                               <div class="myCard-back">
                                 Es la encargada de capturar requerimientos del proyecto en cuestion de modelados y animación 3D. Correcciones a las piezas generadas. Comprensión de los requerimientos del proyecto, generación y argumentación de alternativas de solución. Conocimiento en iluminación, render y animación 3D.
                            </div>
                        </div>
                    </div>
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header"><img class="pefil" src="img/60x60.png" alt="perfil"></div>
                            <div class="activo myCard-body">
                                Marcelo Rivera
                            </div>
                            <div class="activo myCard-footer">
                                Multimedia y Difusión
                            </div>
                             <div class="myCard-back">
                                 Es el encargado de conceptualizar, diseñar y desarrollar el proyecto de forma estrategica que integran medios digitales y medios tradicionales, para la divulgacion el proyecto en tema de competencia en beneficio de la empresa, y la promoción estrategica de trabajo.
                            </div>
                        </div>
                    </div>
                    <!-- Card Col -->
                    <div class="myCard-col">
                        <div class="myCard-container">
                            <div class="activo myCard-header"><img class="pefil" src="img/60x60.png" alt="perfil"></div>
                            <div class="activo myCard-body">
                                Ulises Resendiz
                            </div>
                            <div class="activo myCard-footer">
                                Programador Motor Gráfico
                            </div>
                            <div class="myCard-back">
                                 Es el encargado de desarrollar, diseñar e implementar codigo para el proyecto en el motor establecido unreal engine 4, sus tareas son ejecutar el programa para descartar cualquier falla. Desarrollar las modificaciones y mejoras. Refinar el código de ser necesario.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="container">  
        </main>
            <!-- CONTACTO -->
            <div class="" id="contacto">
                   <h1 style="margin-top: 2%;" class="titulo1">CONTACTO</h1>
                   <img style="margin-top: 1%;" src="img/special.png">
                   <div>
                  
                    <div style="right: 8%; width: 48%; position: absolute; margin-top: 7%;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                            <div class="carousel-inner">
                              <?php
                                while ($columna = mysqli_fetch_array( $resultado ))
                                {
                                $date = date_create($columna[4]);
                                echo "<div class='carousel-item'>";
                                 echo "<h4>" . $columna['comentario'] . "</h4><p>" . $columna['nombre'] . "</p><p style='color: #797979'class='fecha'>". date_format($date, 'g:i A d/m/Y') . "</p>";
                                 echo "</tr>  </div>";
                                }
                                ?>  
                                                  
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                         </div>
                    </div>   
                      <div style="margin-left: 12%; width: 30%; "> 
                        <div class="form-contacto"> 
                                     
                                    <input id="nombre" name="name" type="text" class="feedback-input" placeholder="Nombre" autocomplete="off" />   
                                    <input id="email" name="email" type="text" class="feedback-input" placeholder="Email" autocomplete="off" />
                                    <textarea id="comentario" name="text" class="feedback-input" placeholder="Comentario"></textarea>
                                    <button id="enviar"> ENVIAR</button>
                             
                            </div>
                        </div> 
                </div>
                
            </div>

        <div id="openModal" class="modalDialog">
            <div>
                <a title="Cerrar" class="close">X</a>
                <video width="100%" height="100%" controls id="video">
                <source src="media/ditto.mp4" type="video/mp4">
                Tu navegador no soporta el formato mp4.
            </video>

            </div>
        </div>
    
    </body>


    <!-- 
        Este script lo pide la librería de smooth-scroll, no hay mucho que decir.
     -->
    <script type="text/javascript">
        var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

        if (document.querySelector('[data-easing]')) {
            var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
        }
    </script>
</html>