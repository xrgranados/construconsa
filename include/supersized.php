        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/supersized/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="assets/theme/supersized.shutter.min.js"></script>
        <script type="text/javascript">
        jQuery.noConflict();
            jQuery(function(jQuery){
                jQuery.supersized({
                    // Components 
                    start_slide             :   1,                          
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links             :   1,          // Individual thumb links for each slide
                    thumbnail_navigation    :   0,          // Thumbnail navigation
                    slides                  :   [           // Slideshow Images
                                                        {image : 'assets/images/slides/1.jpg', title : 'Contruconsa'},
                                                        {image : 'assets/images/slides/2.jpg', title : 'Contruconsa'},  
                                                        {image : 'assets/images/slides/3.jpg', title : 'Contruconsa'},
                                                        {image : 'assets/images/slides/4.jpg', title : 'Contruconsa'},
                                                        {image : 'assets/images/slides/5.jpg', title : 'Contruconsa'}
                                                ],                   
                    // Theme Options               
                    progress_bar            :   1,          // Timer for each slide                         
                    mouse_scrub             :   0 
                });
            });
        </script> 
        