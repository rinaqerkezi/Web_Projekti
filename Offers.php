<?php  
require('config2.php');
session_start();

$amsterdam = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Amsterdam'"));
$berlin = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Berlin'"));
$aspen = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Aspen'"));
$paris = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Paris'"));
$borabora = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Borabora'"));
$vienna = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Vienna'"));
$london = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'London'"));
$maldives = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fotot WHERE Emri = 'Maldives'"));

$maldivesO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ofertat WHERE vendi = 'Maldives'"));

$amsterdamO= mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ofertat WHERE vendi = 'Amsterdam'"));
$berlinO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM   ofertat WHERE vendi = 'Berlin'"));
$aspenO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM    ofertat WHERE vendi = 'Aspen'"));
$parisO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM    ofertat WHERE vendi = 'Paris'"));
$boraboraO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ofertat WHERE vendi = 'Borabora'"));
$viennaO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM   ofertat WHERE vendi = 'Vienna'"));
$londonO = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM   ofertat WHERE vendi = 'London'"));

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
    <img src="<?php echo $paris['Foto'] ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
    <h3><?php echo $parisO ['vendi'] ?></h3>
    <p><?php echo $parisO['koment'] ?></p>
    <a href="book.php" class="btn">Book Now</a>
</div>


            <div class="box">
            <img src="<?php echo $aspen['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
            <h3><?php echo $aspenO ['vendi'] ?></h3>
    <p><?php echo $aspenO['koment'] ?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>

            <div class="box">
            <img src="<?php echo $borabora['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
            <h3>Bora-Bora</h3>
            <p>Nature's Masterpiece.</p>

                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
            <img src="<?php echo $vienna['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
            <h3><?php echo $viennaO ['vendi'] ?></h3>
    <p><?php echo $viennaO['koment'] ?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>

            <div class="box">
                <img src="<?php  echo $berlin['Foto']  ?>" alt="b" style="width: 180px; height: 100px; object-fit: cover;">
                <h3><?php echo $berlinO ['vendi'] ?></h3>
    <p><?php echo $berlinO['koment'] ?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
            <img src="<?php echo $maldives['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
            <h3><?php echo $maldivesO ['vendi'] ?></h3>
    <p><?php echo $maldivesO['koment'] ?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
            <img src="<?php echo $london['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
            <h3><?php echo $londonO ['vendi'] ?></h3>
    <p><?php echo $londonO['koment'] ?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
            <div class="box">
                <img src="<?php echo $amsterdam['Foto']  ?>" alt="am" style="width: 180px; height: 100px; object-fit: cover;">
                <h3><?php echo $amsterdamO ['vendi'] ?></h3>
    <p><?php echo $amsterdamO['koment'] ?></p>
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