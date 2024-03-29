<?php 
include_once 'RegisterB.php';
include_once 'Database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="book.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Booking</title>

</head>

<body>
    <div id="Kontinieri">
        <div class="kontenti">
            <h2>Luxury <br>Heavens</h2>
            
                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                        <li><a href="offers.php">OFFERS</a></li>
                        <li><a href="offers.php">BOOK</a></li>
                        <li><a href="Destinations.php">DESTINATION</a></li>


                    </ul>
                </nav>
            
        </div>
        <section class="home" id="home">
            <div class="container">
                <h1>Make Memories</h1>
                <div class="content grid">
                <div class="box">
                        <span>OFFER no.</span><br>
                        <input type="number" placeholder="01">
                    </div>
                    <div class="box">
                        <span>Arrival Date</span><br>
                        <input type="date" placeholder="16/10/2024">
                    </div>
                    <div class="box">
                        <span>Departure Date</span><br>
                        <input type="date" placeholder="21/10/2024">
                    </div>
                    <div class="box">
                        <span>ADULTS</span><br>
                        <input type="number" placeholder="01">
                    </div>
                    <div class="box">
                        <span>CHILDREN</span><br>
                        <input type="number" placeholder="01">
                    </div>
                   
                    <br>
                    <div class="box">
                      <a href="booked.php" class="flex">
                          <button>
                              <span>BOOK</span>
                              <i class="fas fa-arrow-circle-right"></i>
                          </button>
                      </a>
                  </div>
                  
                </div>
            </div>
        </section>
        <section class="room wrapper2" id="room">
            <div class="container2">
              <div class="heading">
                <br>
                <br>
                <br>
                <br>
                <h2>Fascinating rooms & suites </h2>
              </div>
              <div class="content flex mtop">
                <div class="left grid2">
                  <div class="box">
                    <i class="fas fa-city"></i>
                    <p>Free Cost</p>
                    <h3>Central Location</h3>
                  </div>
                  <div class="box">
                    <i class="fas fa-car"></i>
                    <p>Free Cost</p>
                    <h3>Free parking</h3>
                  </div>
                  <div class="box">
                    <i class="fab fa-resolving"></i>
                    <p>Free Cost</p>
                    <h3>Reservations 24/7</h3>
                  </div>
                  <div class="box">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p>Rating</p>
                    <h3>4.5 Customer Rating</h3>
                  </div>
                  <div class="box">
                    <i class="fas fa-envelope"></i>
                    <p>Free Cost</p>
                    <h3>Fast Message Reply</h3>
                  </div>
                  <div class="box">
                    <i class="fas fa-dumbbell"></i>
                    <p>Free Cost</p>
                    <h3>Indoor and Outdoor Gym</h3>
                  </div>
                </div>
                
              </div>
            </div>
          </section>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <section class="gallary top" id="gallary">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="images/g1.jpg" alt="">
        <div class="overlay">
         
        </div>
      </div>
      <div class="item">
        <img src="images/g2.jpg" alt="">
        <div class="overlay">
         
        </div>
      </div>
      <div class="item">
        <img src="images/g3.jpg" alt="">
        <div class="overlay">
        
        </div>
      </div>
      <div class="item">
        <img src="images/g4.jpg" alt="">
        <div class="overlay">
         
        </div>
      </div>
      <div class="item">
        <img src="images/g5.jpg" alt="">
        <div class="overlay">
          
        </div>
      </div>
      <div class="item">
        <img src="images/g6.jpg" alt="">
        <div class="overlay">
          
        </div>
      </div>
      <div class="item">
        <img src="images/g7.jpg" alt="">
        <div class="overlay">
          
        </div>
      </div>
      
    </div>
   
    <script>
      $(document).ready(function () {
          $(' .owl-carousel').owlCarousel({
              loop: true,
              margin: 0,
              nav: false,
              dots: false,
              autoplay: true,
              slideTransition: 'linear',
              autoplayTimeout: 4000,
              autoplaySpeed: 4000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 1
                  },
                  768: {
                      items: 3
                  },
                  1000: {
                      items: 5
                  }
              }
          });
      });
  </script>
  </section>

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
 
</footer>
<div class="copyRightText">
  <p>Copyright © 2023 . All Rights deserved</p>
</div>




</body>

</html>