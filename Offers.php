<?php  
require('config2.php');
session_start();

$amsterdam = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Amsterdam'"));
$berlin = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Berlin'"));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link rel="stylesheet" type="text/css" href="styleOffers.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>

<body>
    <div class="kontinieri">
        <div class="navbar">
            <img src="logo.png" class="logo">
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


       
            <div class="col">
                <h1>Find Your Peace</h1>
                <p>Embark on a transcendent journey with Luxury Heavens, where the art of travel meets the pinnacle of
                    sophistication.
                    Unveil the secrets of opulent destinations as we curate an experience tailored to your every desire.
                </p>
                <a href="aboutus.php"> <br>
                    <button type="button">Read More</button>
                </a>
            </div>

        
    </div>

    
    <div class="container">

        <h1 class="heading">Our Offers</h1>

        <div class="box-container">

            <div class="box">
                <img src="paris.jpg" alt="p" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Paris</h3>
                <p>Book now a trip to the City of Love and get 20% off!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="aspen.jpg" alt="as" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Aspen</h3>
                <p>Aspen Adventure Awaits!!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="borabora.jpg" alt="bb" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Bora-Bora</h3>
                <p> Nature's Masterpiece</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
                <img src="vienna.jpg" alt="v" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Vienna</h3>
                <p>Vienna: Symphony of Elegance</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="<?php  echo $berlin['']  ?>" alt="b" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Berlin</h3>
                <p>Vibrant, Bold, Berlin Gold</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
                <img src="maldives.jpg" alt="m" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Maldives</h3>
                <p>Maldives Majesty: Dive into Paradise</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
                <img src="london.jpg" alt="l" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>London</h3>
                <p>London Lights, Big City Delights</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
                <img src="<?php echo $amsterdam['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
                <h3>Amsterdam</h3>
                <p>Canvas of Culture and Canals.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>

    <br>
    <footer>
      <div class="containerr">
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
                      <p><a href="mail: luxuryheavens@gmail.info" >luxuryheavens@gmail.info</a></p>
                  </li>
                  <li>
                      <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <p><a href="tel:1234567890">+38345989954</a><br>
                          <a href="tel:1234567890">+38344839417</a></p>
                  </li>
              </ul>
          
    </div>
      </div>
    </footer>
    <div class="copyRightText">
        <p>Copyright © 2023 . All Rights deserved</p>
        </div>
    
    
</body>

</html>