<!DOCTYPE html>
<html class="tksbg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Time Keeping System by: Enterprise Solutuions Group</title>
    <link rel="stylesheet" href="<?= base_url('stylesheets/1.11.0-jquery-ui.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('javascript_plugins/bootstrap/css/bootstrap.min.css') ;?>"type="text/css">
    <link rel="stylesheet" href="<?= base_url('javascript_plugins/bootstrap/css/bootstrap-select.min.css') ;?>"type="text/css"> <!-- bootstrap select -->
    <link rel="stylesheet" href="<?= base_url('stylesheets/modal.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('stylesheets/jquery.signature.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('stylesheets/tks_login.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('stylesheets/user.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('stylesheets/adduseraccount.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('javascript_plugins/chosen_v1.4.2/docsupport/prism.css') ;?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('javascript_plugins/chosen_v1.4.2/chosen.css') ;?>" type="text/css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="screen">


    <script src="<?= base_url('javascripts/jquery1.11.1.min.js') ;?>"></script>
    <script src="<?= base_url('javascripts/jquery-ui-1.10.3.js') ;?>"></script>
    <script src="<?= base_url('javascript_plugins/bootstrap/js/bootstrap.min.js') ;?>"></script>
    <script src="<?= base_url('javascript_plugins/bootstrap/js/bootstrap-select.min.js') ;?>"></script>
    <script src="<?= base_url('javascripts/jquery.signature.min.js') ;?>"></script>
    <!--[if IE]>
        <script src="<?= base_url('javascripts/excanvas.js') ;?>"></script>
    <![endif]-->
    <script src="<?= base_url('javascripts/jquery.ui.touch-punch.min.js') ;?>"></script>
    <script src="<?= base_url('javascripts/jquery.webcam.min.js') ;?>"></script>

    <script>

        $(document).ready(function(){
			
            /* to be hidden first end*/
            /* div height vars start*/
		
           var field_height_user = parseInt($(".field-cont").css("height"));
		   $(".settings").tooltip();
		   $(".prints").tooltip();
		   $(".applytk").tooltip();
		   
			
            /* div height vars end*/

            function autoadjust(){
                var h = window.innerHeight;
                var w = window.innerWidth;

                var standard_height = 702;
				


                if(h > standard_height){
                    /* GSX logo div size= 130, GSX content= 523, max window on 13inch=702 */
                    $(".field-cont").css("height", field_height_user+h-standard_height);
                }else if(h < standard_height){
                    $(".field-cont").css("height", field_height_user-(standard_height-h));
                };
				
				if(h > standard_height){
                    /* GSX logo div size= 130, GSX content= 523, max window on 13inch=702 */
                    $(".field-cont").css("height", field_height_user+h-standard_height);
                }else if(h < standard_height){
                    $(".field-cont").css("height", field_height_user-(standard_height-h));
                };
				
				
		
            }

            $(window).resize(function(){
                autoadjust();
            });

            /* init functions  s*/
            	autoadjust();
            /* init functions  e*/
			
			/*----calendar date--s*/
			 
                $( ".datepicker" ).datepicker();
            
			/*----calendar date--e*/

        }); //closing of document.ready

    </script>
</head>
<body>
