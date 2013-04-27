<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>Propiedades • Construconsa</title>
        <?php include_once("include/head_metas.php"); ?>

    <!-- Tabs -->
    <link href="assets/uitabs/css/smoothness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
    <script src="assets/uitabs/js/jquery-1.9.1.js"></script>
    <script src="assets/uitabs/js/jquery-ui-1.10.2.custom.js"></script>
    <script>
    $(function() {        
        $( "#tabs" ).tabs();
    });
    </script>


    <!-- Nav -->
    <link rel="stylesheet" type="text/css" href="assets/hover/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />

    <style type="text/css">
       
    </style>

    </head>
    <body>
        
        <!-- Header -->

        <?php include_once("include/header.php"); ?>

        <div class="container">
            <h1 class="text-center title">Proyectos</h1>
        </div>

        <div class="container">
           
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">En Venta</a></li>
                    <li><a href="#tabs-2">En Alquiler</a></li>
                </ul>

                <div id="tabs-1">

                    <nav class="main">
                        <ul>
                            <li>
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                    <div class="flipper">
                                        <div class="front">
                                            <img src="http://placehold.it/300X200/75401E/ffffff&text=Propiedad_01" />
                                        </div>
                                        <div class="back">
                                            <div class="mask">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <a href="#" class="info">Read More</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                            <img src="http://placehold.it/300X200/75401E/ffffff&text=Propiedad_02" />
                                        </div>
                                        <div class="back">
                                            <div class="mask">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <a href="#" class="info">Read More</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                            <img src="http://placehold.it/300X200/75401E/ffffff&text=Propiedad_03" />
                                        </div>
                                        <div class="back">
                                            <div class="mask">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <a href="#" class="info">Read More</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                            <img src="http://placehold.it/300X200/75401E/ffffff&text=Propiedad_03" />
                                        </div>
                                        <div class="back">
                                            <div class="mask">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <a href="#" class="info">Read More</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div id="tabs-2">
                </div>
               
            </div>
            

        </div>

         <br> <br> <br> <br><br> <br> <br> <br>
        <!-- Arrow Navigation 
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a> -->
    
        <!-- Time Bar  
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div> -->

           
        
        <span class="trama"></span>

         <!-- FancyBox -->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <script type="text/javascript" src="assets/js/pros.js"></script>    
        

       

        <!-- Supersized -->

        <?php include_once("include/supersized.php"); ?>

       
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

    </body>
</html>


       
