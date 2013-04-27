<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>Contruconsa</title>
        <?php include_once("include/head_metas.php"); ?>


        
        <link rel="stylesheet" type="text/css" href="assets/elastislide/elastislide.css" />
        <link rel="stylesheet" type="text/css" href="assets/elastislide/custom.css" />
        <script src="assets/elastislide/modernizr.custom.17475.js"></script>
        
    </head>
    <body>
        
        <!-- Header -->

        <?php include_once("include/header.php"); ?>


        <div class="container2">
        <div class="demos">
            <ul id="carousel" class="elastislide-list">
                <li><a id="pros01" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An01.png" alt="image01" /></a></li>
                <li><a id="pros02" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An02.png" alt="image02" /></a></li>
                <li><a id="pros03" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An01.png" alt="image03" /></a></li>
                <li><a id="pros04" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An02.png" alt="image04" /></a></li>
                <li><a id="pros05" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An01.png" alt="image05" /></a></li>
                <li><a id="pros06" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An02.png" alt="image06" /></a></li>
                <li><a id="pros07" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An01.png" alt="image07" /></a></li>
                <li><a id="pros08" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An02.png" alt="image08" /></a></li>
                <li><a id="pros09" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An01.png" alt="image09" /></a></li>
                <li><a id="pros10" href="javascript:;" title="Construconsa"><img src="assets/images/pro/small/An02.png" alt="image11" /></a></li>
            </ul>
        </div>
        </div>
       

        <!-- Arrow Navigation 
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a> -->
    
        <!-- Time Bar  
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div> -->

           
        
        <span class="trama"></span>

         <!-- Carrousel -->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
        <script type="text/javascript" src="assets/elastislide/jquerypp.custom.js"></script>
        <script type="text/javascript" src="assets/elastislide/jquery.elastislide.js"></script>
        <script type="text/javascript">

          $( '#carousel' ).elastislide();
          
        </script>

         <!-- FancyBox -->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <script type="text/javascript" src="assets/js/pros.js"></script>    
        

       

        <!-- Supersized -->

        <?php include_once("include/supersized.php"); ?>
        <script type="text/javascript">
        jQuery.noConflict();
            jQuery(function(jQuery){
                jQuery.supersized({
                    // Components                           
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links             :   1,          // Individual thumb links for each slide
                    thumbnail_navigation    :   0,          // Thumbnail navigation
                    slides                  :   [           // Slideshow Images
                                                        {image : 'assets/images/slides/1.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/1.jpg'},
                                                        {image : 'assets/images/slides/2.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/2.jpg'},  
                                                        {image : 'assets/images/slides/1.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/3.jpg'},
                                                        {image : 'assets/images/slides/2.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/4.jpg'},
                                                        {image : 'assets/images/slides/1.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/5.jpg'}
                                                ],                   
                    // Theme Options               
                    progress_bar            :   1,          // Timer for each slide                         
                    mouse_scrub             :   0 
                });
            });
        </script> 

        <script type="text/javascript" src="assets/js/jquery-1.2.3.min.js"></script>

        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

    </body>
</html>


       
