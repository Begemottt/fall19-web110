<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Robin</title>
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		<meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <! -- jQery -- >
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        
        <! -- MenuMaker plugin -- >
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        
        <! -- Icon Library -- >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <script src="js/script.js"></script>
		<link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/nav.css" />
	</head>
	<body>
		<main>
            <header>
                <h1> <a href="index.html">Robin VanGilder Web Development Examples and Resources</a></h1>

                <! -- Menu code from CSSMenuMaker -->
                 <nav id="cssmenu">
                  <ul>
                     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
                     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
                     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
                      
                      <! -- Drop down for Research Pages -- >
                     <li><a href="#">Research</a>
                        <ul>
                           <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                           <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                           <li><a href="forms.html"> <i class="fa fa-fw fa-check-square-o"></i> Forms</a></li>
                        </ul>
                     </li>
                                            
                      <! -- Drop down menu for google pages -- >
                     <li><a href="#">Embeds</a>
                        <ul>
                           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                        </ul>
                     </li>
                      
                     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact</a></li>
                  </ul>
                </nav>
            </header>
            <section class="fullwidth">
                <h2 class="subheader">Contact Robin</h2>
                <?php
                    /*
                     * Below are 2 different forms to be re-used       
                     * 
                     * Only use one at a time, comment out the other!       
                     *
                     */

                    include 'includes/contact_include.php'; #site keys & code here

                    $toAddress = "poliosis@gmail.com";  //place your/your client's email address here
                    $toName = "Robin VanGilder"; //place your client's name here
                    $website = "Robin's Student Page";  //place NAME of your client's website

                    echo loadContact('simple.php');#demonstrates a simple contact form
                    //echo loadContact('multiple.php');#demonstrates multiple form elements

                ?>
            </section>

			<footer>
				<p>
					<small>&copy; 2019 by 
						<a href="contact.php">Robin VanGilder</a>, All Rights Reserved ~ 
						<a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ 
						<a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
					</small>
				</p>
			</footer>
		</main>
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }   
      </script>
	</body>
</html>