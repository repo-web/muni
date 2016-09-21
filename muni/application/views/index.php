<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:locale" content="es_ES" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta name="description" property="og:description" content="" />
        <meta property="og:site_name" content="" />
        <script>
            var base_url = '<?php echo base_url(); ?>';
        </script>  
        <title> ILUSTRE MUNICIPALIDAD DE LINARES </title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>../img/favicon.png"/> 


        <link rel="stylesheet" href="<?php echo base_url(); ?>../css/main.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/jquery-ui.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/jquery-ui.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/jquery-ui.structure.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/alertify.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/alertify.core.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/alertify.default.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/funciones.js"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=454500034628078";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--menu movil-->
        <div id="menu-movil">
            <div class="wrap">
                <nav id="menu-principal">
                    <ul id="menu-main-menu" class="menu-main">
                        <li><a href="<?php echo base_url(); ?>">Inicio</a></li>

                        <li><a href="#">Municipalidad </a>
                            <ul class="sub-menu">
                                <li><a href="#">Quienes somos</a></li>
                                <li><a href="#">Historia</a></li>
                                <li><a href="#">Mensaje del Alcalde</a></li>
                                <li><a href="#">Consejo Municio</a></li>
                                <li><a href="#">Estructura Organica</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Departamentos</a>
                            <ul class="sub-menu">
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>
                                <li><a href="#">Deporte</a></li>
                                <li><a href="#">Transito</a></li>
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>
                        </li>
                    </ul>
                    </li>
                    <li><a href="#">Tramites En Linea</a>
                        <ul class="sub-menu">
                            <li><a href="#">Permiso De Circulacion</a></li>
                            <li><a href="#">Item Sub-menú 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contacto</a>
                    </li>
                    <li><a id="loginm">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--slider principal y movil-->
        <header style="background-image:url('<?php echo base_url(); ?>../img/bg.png')">
            <div class="wrap">
                <h1 id="logo-main">
                    <a href="/">
                        <img src="<?php echo base_url(); ?>../img/logo-main2.png">
                    </a>
                </h1>
                <!--menu general-->
                <nav id="menu-principal">
                    <ul id="menu-main-menu" class="menu-main">
                        <li><a href="<?php echo base_url(); ?>">Inicio</a></li>

                        <li><a href="#">Municipalidad </a>
                            <ul class="sub-menu">
                                <li><a href="#">Quienes somos</a></li>
                                <li><a href="#">Historia</a></li>
                                <li><a href="#">Mensaje del Alcalde</a></li>
                                <li><a href="#">Consejo Municio</a></li>
                                <li><a href="#">Estructura Organica</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Departamentos</a>
                            <ul class="sub-menu">
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>
                                <li><a href="#">Deporte</a></li>
                                <li><a href="#">Transito</a></li>
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>
                        </li>
                    </ul>
                    </li>
                    <li><a href="#">Tramites En Linea</a>
                        <ul class="sub-menu">
                            <li><a href="#">Permiso De Circulacion</a></li>
                            <li><a href="#">Item Sub-menú 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contacto</a>
                    </li>
                    <li><a id="login" >Login</a>
                    </li>
                    </ul>
                </nav>

                <a href="#" id="menu-movil-trigger">Menú Principal</a>

            </div>
        </header>

<!--        Metodo para visualizador de imagenes

                <div >
                    <a href="<?php echo base_url(); ?>../img/bg.png" class="lsb-preview" data-lsb-group="gallery1"> 
                        <img src="<?php echo base_url(); ?>../img/bg.png" alt="Image Title"> 
                    </a> 
                    <a href="img/img02_fullsize.jpg" class="lsb-preview" data-lsb-group="gallery1"> 
                    </a> 
                    <a href="img/img03_fullsize.jpg" class="lsb-preview" data-lsb-group="gallery1"> 
                    </a>
                </div>

        FIN visualizador de imagenes-->

        <div id="content">

            <div class="wrap">

                <div id="main">
                    <div id="dialog"  style="width: 300px" title="Control De Acceso" >
                        <table border="0.5" width="400" >

                            <tbody>
                                <tr>
                                    <td>Correo</td>
                                    <td><input type="text" id="correo"value="" /></td>
                                </tr>
                                <tr>
                                    <td>Contraseña</td>
                                    <td><input type="password" id="clave"value="" /></td>
                                </tr> 
                                <tr>
                                    <td></td>
                                    <td><button id="conectar">Ingresar</button>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                    <!-- Normal -->
                    <div id="stream" class="stream" >
<!--                        <img id="der"  src="" width="20" height="20"  />-->

                        <!-- INICIO Noticia destacada -->
                        <h5 class="titulo-seccion">Últimas Noticias</h5>

                        <div class="post tarjeta destacado">
                            <div class="pic">
                                <a href="#">
                                    <!--<img src="http://placehold.it/660x250">-->
                                    <iframe width="660" height="250" src="https://www.youtube.com/embed/E9Gg7kmPrmg" frameborder="0" allowfullscreen></iframe> </a>
                            </div>
                            <div class="texto">
                                <div class="left">
                                    <h4 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pretium seme, turpis mi mollis leo</a></h4>
                                </div>
                                <div class="right">
                                    <span class="meta">11 de marzo de 2014</span>
                                    <p>Etiam vel tempor urna, eu viverra lacus. Vestibulum imperdiet, eros ac tristique ullamcorper, turpis mi mollis leo, tempor pellentesque lectus eros quis arcu. Nunc condimentum orci a mi cursus porttitor. Etiam aliquam vulputate mauris et blandit. Nunc tortor nunc</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                    </li>
                                    <li>
                                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                        </div>
                        <!-- FIN Noticia destacada -->
                        <div class="post tarjeta">
                            <div class="pic">
                                <a href="#">
                                    <img src="http://placehold.it/320x210">
                                </a>
                            </div>
                            <div class="texto">
                                <span class="meta">11 de marzo de 2014</span>
                                <h4 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pretium seme, turpis mi mollis leo</a></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="post tarjeta">
                            <div class="pic">
                                <a href="#">
                                    <img src="http://placehold.it/320x210">
                                </a>
                            </div>
                            <div class="texto">
                                <span class="meta">11 de marzo de 2014</span>
                                <h4 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pretium seme, turpis mi mollis leo</a></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="post tarjeta">
                            <div class="pic">
                                <a href="#">
                                    <img src="http://placehold.it/320x210">
                                </a>
                            </div>
                            <div class="texto">
                                <span class="meta">11 de marzo de 2014</span>
                                <h4 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pretium seme, turpis mi mollis leo</a></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <a href="#" id="mas-noticias" class="boton">+ Ver más <strong>Noticias</strong></a>

                    </div>
                    <!-- Fin Normal -->           
                    <!-- nel -->      
                    <div id="contenido" >
                    </div>
                    <!--                    <div class="buscar clearfix">
                                            <form action="">
                                                <label for="query">Busca en las noticias</label>
                                                <input type="text" id="query" placeholder="Ej.:“Lorem Ipsum“ ">
                                                <input type="submit" id="boton" value="Enviar">
                                            </form>
                                        </div>-->

                    <!--                    <div class="banner banner-foto">
                                            <a href="#">
                                                <div class="imagen">
                                                    <img src="http://placehold.it/660x130" alt="">
                                                </div>
                                                <div class="velo"></div>
                                                <div class="texto">
                                                    <span>Lorem Ipsum</span>
                                                    <span><strong>Dolor sit amet.</strong></span>
                                                </div>
                                            </a>
                                        </div>-->




                </div>
                <!--INICIO COLUMNA DERECHA-->
                <div id="sidebar">

                    <div class="redes-lista">
                        <h5 class="titulo-seccion">Síguenos</h5>
                        <ul>
                            <li id="facebook">
                                <a class="clearfix" href="https://www.facebook.com/www.munilinares.cl" target="_blank">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Facebook</span>
                                        <span class="usuario">/www.munilinares.cl</span>
                                    </div>
                                </a>
                            </li>
                            <li id="twitter">
                                <a class="clearfix" href="https://twitter.com/munilinares2013">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Twitter</span>
                                        <span class="usuario">/munilinares2013</span>
                                    </div>
                                </a>
                            </li>
                            <li id="flickr">
                                <a class="clearfix" href="#">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Flickr</span>
                                        <span class="usuario">usuario</span>
                                    </div>
                                    
                                    
                                </a>
                            </li>
                            <li id="youtube">
                                <a class="clearfix" href="https://www.youtube.com/user/munilinares" target="_blank">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Youtube</span>
                                        <span class="usuario">/munilinares</span>
                                    </div>
                                </a>
                            </li>
                            <li id="instagram">
                                <a class="clearfix" href="#">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Instagram</span>
                                        <span class="usuario">usuario</span>
                                    </div>
                                </a>
                            </li>
                            <!--                            <li id="pinterest">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Pinterest</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="vimeo">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Vimeo</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="linkedin">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Linkedin</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="slideshare">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">SlideShare</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="scribd">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Scribd</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="soundcloud">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">SoundCloud</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>-->
                            <div class="clearfix"></div>
                        </ul>
                    </div>

                    <div class="fotodeldia">

                        <a href="#" class="foto">
                            <img src="http://placehold.it/320x210" alt="Foto Destacada">
                            <div class="clearfix"></div>
                            <h5>Foto Destacada</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui vel tellus ultricies, id sollicitudin lorem </p>
                        </a>
                    </div>

                    <div class="banners">

                        <div class="banner banner-corto">
                            <a href="#"><img src="<?php echo base_url(); ?>../img/cuenta-publica.png" alt="Banner 320x120"></a>
                        </div>

                        <div class="banner banner-corto">
                            <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                        </div>

                        <div class="banner banner-corto">
                            <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>
                <!--FIN COLUMNA DERECHA-->
                <div class="clearfix"></div>

            </div>

        </div>

        <div id="prefooter">
            <div class="wrap">

                <div id="cita-destacada">
                    <div class="bicolor">
                        <span class="azul"></span>
                        <span class="amarillo"></span>
                        <span class="verde"></span>
                    </div>
                    <div class="left">
                        <div class="texto">
                            <span class="nombre">Autor de la Cita</span>
                            <span class="descripcion">Cargo del autor de la cita</span>
                            <span class="usuario">usuario</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="texto">
                            Nullam scelerisque ut tortor eu ullamcorper. Proin gravida dolor vitae sem semper feugiat. Ut at semper velit. Maecenas sit amet blandit sapien. Vivamus blandit diam.
                        </div>
                        <span class="fecha">15 de abril de 2014</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="banners banners-mosaico">

                    <div class="banner banner-corto">
                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=8691dfce267db7cb63c54511ff105f64"><img src="<?php echo base_url(); ?>../img/solitrasparencia.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="<?php echo base_url(); ?>../img/lobby.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="<?php echo base_url(); ?>../img/patente.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>

        <div class="clearfix"></div>

        <footer>
            <div class="wrap">

                <div class="bicolor">
                    <span class="azul"></span>
                    <span class="amarillo"></span>
                    <span class="verde"></span>
                </div>

                <div class="top">

                    <div class="listas">

                        <div class="lista">
                            <h5>Trasnparencia</h5>
                            <ul>
                                <li><a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=8691dfce267db7cb63c54511ff105f64"">Transparencia</a></li>
                                <li><a href="http://www.bcn.cl/leyfacil/recurso/transparencia---acceso-a-la-informacion-publica">Que es la Transparencia</a></li>
                                <li><a href="http://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrg=580">Solicita Informacion</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="#">Item 6</a></li>
                                <li><a href="#">Item 7</a></li>
                            </ul>
                        </div>

                        <div class="lista">
                            <h5>Ley del Lobby</h5>
                            <ul>
                                <li><a href="https://www.leylobby.gob.cl/instituciones/MU140">Plataforma Ley del Lobby</a></li>
                                <li><a href="https://www.youtube.com/watch?v=6cLz23GTw-4">Video Ley del Lobby</a></li>
                                <li><a href="#">Item 3</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="http://www.infolobby.cl/">	Ir al Portal de Consolidación del Estado de La Ley del Lobby</a></li>
                                <li><a href="http://www.munilinares.cl/transparencia/ley_lobby/info_ley_del_lobby/buenas_practicas_lobistas/buenas_practicas_lobby.pdf">Buenas Practicas Para  Lobistas</a></li>
                            </ul>
                        </div>

                        <div class="lista">
                            <h5>Enlaces 3</h5>
                            <ul>
                                <li><a href="#">Item 1</a></li>
                                <li><a href="#">Item 2</a></li>
                                <li><a href="#">Item 3</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="#">Item 6</a></li>
                                <li><a href="#">Item 7</a></li>
                            </ul>
                        </div>


                    </div>

                    <div class="clearfix"></div>
                    <div class="sep"></div>

                </div>

                <div class="bottom">

                    <div class="left">
                        <span>Kurt Moller 391 - Teléfono: <a href="tel:+56 73 2 564600">+56 73 2 564600 +56 73 2 564700</a></span>
                    </div>

                    <nav>
                        <ul>
                            <li><a href="#">Grupo de desarrollo Dpt Informatica</a></li

                        </ul>
                    </nav>

                    <div class="clearfix"></div>

                    <div class="bicolor">
                        <span class="azul"></span>
                        <span class="amarillo"></span>
                        <span class="verde"></span>
                    </div>

                </div>

            </div>

        </footer>


        <script type="text/javascript" src="<?php echo base_url(); ?>../js/main.js" ></script>

        <script type="text/javascript">
            window.___gcfg = {lang: 'es-419'};
            (function () {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        </script>

        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>

    </body>
</html>
