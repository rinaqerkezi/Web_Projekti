<?php 
include_once 'Register.php';
//include_once 'addstd.php';

$re = new Register();

if(isset($_GET['delUser'])){
  $id=base64_decode($_GET['delUser']);
  $deleteUser=$re->deleteUser($id);
}


?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

 <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>


    <div id="Kontinieri">
      <div class="kontenti">
         <h2>Luxury <br>
        Heavens</h2>
  <div>
  <nav>
     
      <div class="navbar">
        
          
          <nav>
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="aboutus.php">ABOUT US</a></li>
                  <li><a href="Offers.php">OFFERS</a></li>
                  <li><a href="login.php">LOG IN</a></li>
                  <li><a href="book.php">BOOK</a></li>
                  <li><a href="Destinations.php">DESTINATION</a></li>
                  <li><a href="dashboard.php">DASHBOARD</a></li>


                 
                 
              </ul>
          </nav>
    
  </div>
  </div>
      </div>
    </div>







    <div class="grid-container">

<header class="header">




       <div class="menu-icon" onclick="openSidebar()">
              <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
       <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>

     
      <aside id="sidebar">
        <div class="sidebar-title">
    <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Dashboard
      </div>
   <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
     <li class="sidebar-list-item">
      <a href="#" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
                </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">inventory_2</span> Offers
            </a>
          </li>
        
         
          <li class="sidebar-list-item">
       <a href="#" target="_blank">
        <span class="material-icons-outlined">shopping_cart</span> Sales ORDERS
            </a>
          </li>
 
          <li class="sidebar-list-item">
            <a href="Perdoruesit.php" target="_blank">
              <span class="material-icons-outlined">settings</span> Settings
            </a>
          </li>
        </ul>
      </aside>
    


      <main class="main-container">
     <div class="main-title">
              <p class="font-weight-bold">DASHBOARD</p>
        </div>
<br>
<?php 
if(isset($deleteUser)){
?>
<div class="alert-alert">
<strong><?=$deleteUser?></strong>
<button type="button" class="close" data-dismiss="alert"
aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<?php
}


?>


<div class="card-header">
<div class="row">
<div class="col-md-6">
<h3>ALL USERS REGISTRATION</h3>
</div>
<div class="col-md-6">
<a href="addstd.php" class="btn btn-info ">
 Add User
</a>
</div>
</div>
  </div>
  <div class="card-body">
        <table class="table table-bordered">
         <tr>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>PHONE</th>
          <th>ADRESS</th>
          <th>ACTION</th>

         </tr>
         <?php 
         $allUs= $re->allUsers();
         if($allUs){
          while($row=mysqli_fetch_assoc($allUs)){
            ?> 
            <tr>
          <td><?=$row['Emri']?></td>
          <td><?=$row['Mbiemri']?></td>
          <td><?=$row['Emaili']?></td>
          <td><?=$row['Passwordi']?></td>
          <td>
          <a href="edit.php?id=<?=base64_encode($row['id'])?>" 
          class="btn btn-warning">Edit
          <a href="?delUser=<?=base64_encode($row['id'])?>" 
          onclick="return confirm('Are you sure you want to delete this user')" class="btn btn-danger">Delete</a>
          </a>
          </td>

         </tr>
            
            <?php
          }
         }
         ?>
         
        </table>
        </div>
<br>





        <div class="main-cards">

          <div class="card">
           
            <div class="card-inner">
              <p class="text-primary">Offers</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">4</span>
          </div>

        

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Sales ORDERS</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">79</span>
          </div>

         

        </div>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
    </div>



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







 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <script src="dashboard.js"></script>
  </body>
</html>