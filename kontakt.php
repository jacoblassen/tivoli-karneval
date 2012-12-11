<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kontakt os</title>
<link rel="stylesheet" href="cssreset.css" type="text/css" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
	include 'header.html'
?>
<?php
	include 'lady.html'
?>
	<div id="masterKontakt">
    
          	<div id="kontaktWrap"> 
            	<h1>Title</h1>
                <br />
                
            	<div class="kontaktPers"><img class="kontaktPic" src="images/pic01.jpg" />
                	<p class="p2">Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
                <div class="kontaktPers"><img class="kontaktPic" src="images/pic02.jpg" />
                	<p class="p2">Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
              <div class="kontaktPers"><img class="kontaktPic" src="images/pic03.jpg" />
                	<p class="p2">Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
                <div class="kontaktPers"><img class="kontaktPic" src="images/pic04.jpg" />
                	<p class="p2">Info text<br />
                    info text 2<br />
                  info tetx 3</p>
              </div>
     	
            </div><!-- kontaktWrap -->
            
            <div id="formWrap">
             
             		<div id="kontaktForm">
                    	<h1>Kontakt os</h1>
                        <br />
                    	<form action="#" method="post" onsubmit="return validateform(); Eller lignende">
                        	<p class="p2">Fornavn:</p><input type="text" name="fname" size="30"/>
                            <p class="p2">Email:</p><input type="text" name="email" size="30"/>
                            <p class="p2">Emne/kommentar:</p><textarea id="text_area" cols="30" rows="5" style="resize:none"></textarea>
                            <input type="submit" />
                        </form>
                    
                		</div>
            	</div><!-- formWrap -->

    
    </div> <!-- master -->

	

</body>
</html>