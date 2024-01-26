<?php
function nrVizitave(){
$numroHits = $_COOKIE['numro'] ?:0;
$numroHits++;
setcookie('numro',$numroHits,time()+86400*30);
echo "Ju keni vizituar kete Uebfaqe: ".$numroHits." here.";
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="index.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <div id="Kontinieri">

            <h2>Luxury <br>Heavens</h2>
            <div>
    
        <div class="navbar">


                        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                                <li><a href="aboutus.php">ABOUT US</a></li>
                                <li><a href="Offers.php">OFFERS</a></li>
                                <li><a href="login.php">LOG IN</a></li>
                                <li><a href="book.php">BOOK</a></li>
                                <li><a href="Destinations.php">DESTINATION</a></li>



              
                            </ul>
                        </nav>

                    </div>
        </div>
                 </nav>
        </div>

    </div>
    </div>

    <h2
        style="font-size: x-large; text-align: center ;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; min-height: 200px;">
        Find And Book <br>
        A Great Experience</h2>


    <div class="fotot">
        <img src="sky.jpeg" alt="sky background" class="background-image">
        <img src="plane.png" alt="plane background" class="overlay-image">





    </div>


    <div class="text" style="padding-top: 100px;">
        <h4 style="font-size: medium; text-align: center; font-family: 'Roboto', sans-serif; min-height: 200px;"> T R A
            V E L &nbsp; S U P P O R T</h4>
        <h2
            style="font-size: x-large; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; min-height: 100px;">
            Plan your travel with confidence</h2>
    </div>
    <br>
    <div id="slider">
        <header>

            <img id="slideshow" />
        </header>
        <div class="dots" id="dotsContainer"></div>
        <button onclick="changeImg()">Next</button>
    </div>
    <div class="classes">
        <div class="loc">
            <h1>Location</h1>
            <p>Where are we going?</p>
            <li><a href="#"><i class="fa-solid fa-location-dot"></i></a></li>


        </div>
        <div class="travelers">
            <h1>Travelers</h1>
            <p>add guests</p>
            <li><a href="#"><i class="fa-solid fa-user"></i></i></a></li>

        </div>
        <div class="check">
            <h1>Check-in</h1>
            <p>add date</p>
            <li><a href="#"><i class="fa-solid fa-calendar-days"></i></a></li>


        </div>
        <div class="checko">
            <h1>Check-out</h1>
            <p>add date </p>
            <li><a href="#"><i class="fa-solid fa-calendar-days"></i></a></li>

        </div>

    </div>
    <br>
    <div class="f">
        <h5>Here's why travelers choose Luxury Heaven </h5>

        <div class="h">
            <ul>
                <li><a href="#"><i class="fa-solid fa-check"></i></a></li>
            </ul>
            <h1>Get Great Deals!</h1>
            <p>Choose from 500+ airlines for low airfares!</p>
        </div>

        <div class="m">
            <ul>
                <li><a href="#"><i class="fa-solid fa-check"></i></a></li>
            </ul>
            <h1>Price Match Promise</h1>
            <p>Find low prices to destinations worldwide.</p>
        </div>

        <div class="c">
            <ul>
                <li><a href="#"><i class="fa-solid fa-check"></i></a></li>
            </ul>
            <h1>Easy Cancellations with CheapOair</h1>
            <p>Convenient self-service options available online.</p>
        </div>

        <div class="l">
            <ul>
                <li><a href="#"><i class="fa-solid fa-check"></i></a></li>
            </ul>
            <h1>Expert Guidance</h1>
            <p>Get personalized assistance from our travel experts.</p>
        </div>
    </div>
    <br>
    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>Popular Features</h2>
                <ul>
                    <li>Free Meeting Schedular</li>
                    <li>Social Media Tools</li>
                    <li>Eamil Tracking </li>
                    <li>Apply for a job </li>
                    <li>Careers</li>
                </ul>
            </div>

            <div class="secquicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul>
                    <li>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span>Dukagjini Residence 55 <br>
                            Gjakova,50000 KS <br>EUR</span>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <p><a href="mail: luxuryheavens@gmail.info">luxuryheavens@gmail.info</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel:1234567890">+38345989954</a><br>
                            <a href="tel:1234567890">+38344839417</a>
                        </p>
                    </li>
                </ul>

            </div>
        </div>
        <h3> <?php nrVizitave(); ?></h3>

    </footer>
    <div class="copyRightText">
        <p>Copyright © 2023 . All Rights deserved</p>
    </div>
   




</body>

</html>