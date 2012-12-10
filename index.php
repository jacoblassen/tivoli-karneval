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
        <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ effects: ['linearPealReverse', 'slideIn', 'explodeFancy'],
                thumbnails: true,
                captionOpacity: '0.3',
				pauseTime: 10000,
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
    
    <?php
		include 'lady.html'
	?>
    <div id="master">
		<div id="featherdiv">    	
            <div class="quake-slider">
                <div class="quake-slider-images">
                    <a href="javascript:/"><img src="images/fastelavn01.jpg" alt="" /></a>
                    <a href="javascript:/"><img src="images/tivoliaarskort.jpg" alt="" /></a>
                </div>
                
                <div class="quake-slider-captions quake-slider-caption-container">
                    <div class="quake-slider-caption">
                       <p>Slå katten af tønden for de små!</p>
                       <p>Vi kårer årets kattekonge og kattedronning med pompt og pragt.</p>
                    </div>
                    <div class="quake-slider-caption">
                         <p>Vind et Tivoli årskort ved at tilmelde dig vores konkurrence.</p>
                    </div>
                </div>
                
            </div>
    	</div><!--featherdiv-->
	</div><!--master-->
    
        
	</body>
</html>
