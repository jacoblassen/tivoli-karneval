<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Tivoli Karneval</title>
		<link rel="stylesheet" href="cssreset.css" type="text/css" />
		<link rel="stylesheet" href="stylesheet.css" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
        <link href="css/quake.slider.css" rel="stylesheet" type="text/css" />
        <link href="skins/plain/quake.skin.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
    	<script src="js/quake.slider-min.js" type="text/javascript"></script>
    	<script src="javascript.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ effects: ['linearPealReverse', 'slideIn', 'explodeFancy', 'chopDimensions'],
                thumbnails: true,
                captionOpacity: '0.3',
				pauseTime: 10000,
				captionOpacity: 0.7,
				 captionsSetup: [
                                {
                                    "orientation": "right",
                                    "slides": [0, 1, 2, 3],
                                    "callback": captionAnimateCallback
								}
                               ]
				
            });
			function captionAnimateCallback(captionWrapper, captionContainer, orientation) {
               captionWrapper.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
               captionContainer.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
           }
		   	function captionAnimationCallback1(captionWrapper, captionContainer, orientation) {
               captionWrapper.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
               captionContainer.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
           }
        });
    	</script>
	</head>

	<body>
	

	
	<?php
		include 'tilmeld.html';
		include 'header.html';
	?> 
    
    <script type="text/javascript">
    	var id = "index";
    	document.getElementById(id+'A').style.display = "block";
    </script>
    
    <?php
		include 'lady.html'
	?>
    <div id="master">
		<div id="featherdiv">    	
            <div class="quake-slider">
                <div class="quake-slider-images">
                    <a href="javascript:/"><img src="images/fastelavn01.jpg" alt="" /></a>
                    <a href="javascript:/"><img src="images/tivoliaarskort.jpg" alt="" /></a>
                    <a href="javascript:/"><img src="images/udklaedning.jpg" alt="" /></a>
                </div>
                
                <div class="quake-slider-captions quake-slider-caption-container">
                    <div class="quake-slider-caption">
                    	<h1>Nyhed</h1>
                       	<p class="p1"> - Slå katten af tønden for de små!</p>
                       	<br />
                       	<p class="p1"> - Bliv årets kattekonge og kattedronning i Tivoli</p>
                	</div><!--quake-slider-caption-->
                	<div class="quake-slider-caption">
                    	<h1>Konkurrence</h1>
                        <br />
                        <p class="p1"> - Tilmeld dig Tivolis karneval og vær med i lodtrækningen af gratis årskort!</p>
            		</div><!--quake-slider-caption-->
                    <div class="quake-slider-caption">
                    <h1>Vind</h1>
                    <p class="p1"> - Pris for de bedst udklædte!</p>
                    <br />
                    <p class="p1"> - Kom og vær klædt ud og vind fede premier!</p>
                    </div><!--quake-slider-caption-->
                </div><!--quake-slider-captions quake-slider-caption-container-->
                
           	</div>
    	</div><!--featherdiv-->
	
		
        
        <div id="frame">
        	<div id="frametop">
            	<div id="frametophtag">
                	<h1>Nyheder</h1>
                </div><!--frametophtag-->
            </div><!--frametop-->
            <div id="rammemiddle">
               	<div class="rammecontent">
               	</div><!--rammecontent-->
            </div><!--rammemiddle-->
            <div id="framebottom">
            </div><!--framebottom-->
       	</div><!--frame-->

    </div><!--master-->
        
	</body>
</html>
