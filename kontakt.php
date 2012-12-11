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
	<div id="master">
    
          	<div id="kontaktWrap"> 
            	<h1>Title</h1>
                
                
            	<div class="kontaktPers"><img class="kontaktPic" src="images/pic01.jpg" />
                	<p>Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
                <div class="kontaktPers"><img class="kontaktPic" src="images/pic02.jpg" />
                	<p>Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
              <div class="kontaktPers"><img class="kontaktPic" src="images/pic03.jpg" />
                	<p>Info text<br />
                    info text 2<br />
                  info tetx 3</p>
                </div>
                
                <div class="kontaktPers"><img class="kontaktPic" src="images/pic04.jpg" />
                	<p>Info text<br />
                    info text 2<br />
                  info tetx 3</p>
              </div>
     	
            </div><!-- kontaktWrap -->
            
            <div id="formWrap">
             
             		<div id="kontaktForm">
                    	<h1>Kontakt os</h1>
                        <br />
                    	<form action="#" method="post" onsubmit="return validateform(); Eller lignende">
                        	Fornavn: <br /><input type="text" name="fname" size="30"/><br />
                      		Efternavn: <br /><input type="text" name="lname" size="30"/><br />
                            Adresse: <br /><input type="text" name="addr" size="30"/><br />
                            Postnummer: <br /><input type="text" name="zip" size="30"/><br />
                            By: <br /><input type="text" name="bynavn" size="30"/><br />
                            Email: <br /><input type="text" name="email" size="30"/><br />
                            <input type="submit" />
                        </form>
                    
                		</div>
            	</div><!-- formWrap -->
             
             	
            
    
    
    </div> <!-- master -->

	

</body>
</html>