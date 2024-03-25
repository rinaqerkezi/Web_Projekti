<?php 

session_start();
include_once 'Register.php';
include_once 'UserController.php';
include_once 'connect.php';




$re = new Register();

if(isset($_GET['delUser'])){
  $id=base64_decode($_GET['delUser']);
  $deleteUser=$re->deleteUser($id);
}


?>

<?php 

$query = "SELECT * FROM ofertat";
$result0 = mysqli_query($conn, $query);
?>
<?php



$query = "SELECT * FROM bileta";
$result1 = mysqli_query($conn, $query);



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
            <a href="#" target="_blank">
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

<li><form action="logout.php" method="POST">
    <button type="submit" class="logout-btn">Log out</button>
</form></li>    

    
    
  

<div class="card-header">
<div class="row">
<div class="col-md-6">
<h3>ALL USERS REGISTRATION</h3>
</div>
<div class="col-md-6">
    <a href="addstd.php" class="add-user-btn">Add User</a>
</div>
</div>
  </div>



  <style>
    .card-body {
        margin-top: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    .table th {
        background-color: #3498db;
        color: #fff;
    }

    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tr:hover {
        background-color: #f1f1f1;
    }

    .table td a {
        display: inline-block;
        padding: 8px 12px;
        text-decoration: none;
        background-color: #2ecc71;
        color: #fff;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .table td a:hover {
        background-color: #27ae60;
    }

    .btn-warning {
        background-color: #f39c12;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-warning:hover {
        background-color: #d68910;
    }

    .btn-danger {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    /* CSS for logout button */
.logout-btn {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    text-decoration: none;
}

.logout-btn:hover {
    background-color: #c82333;
}

/* CSS for add user button */
.add-user-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    text-decoration: none;
}

.add-user-btn:hover {
    background-color: #0056b3;
}

</style>










<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>MBIEMRI</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th> 
        </tr>
        <?php 
        $allUs = $re->allUsers();
        if($allUs) {
            while($row = mysqli_fetch_assoc($allUs)) {
                ?> 
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['Emri'] ?></td>
                    <td><?= $row['Mbiemri'] ?></td>
                    <td><?= $row['Emaili'] ?></td>
                    <td><?= $row['Passwordi'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="?delUser=<?= base64_encode($row['id']) ?>" onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
         
        </table>
        </div>
<br>


<style>
  .rg1 {
    margin-top: 20px;
  }

  .userstable {
    width: 100%;
    overflow-x: auto;
  }

  .ut {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  .ut th, .ut td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  .ut th {
    background-color: #3498db;
    color: #fff;
  }

  .ut tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  .ut tr:hover {
    background-color: #f1f1f1;
  }

  .ut td a {
    display: inline-block;
    padding: 8px 12px;
    text-decoration: none;
    background-color: #2ecc71;
    color: #fff;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .ut td a:hover {
    background-color: #27ae60;
  }
</style>









<div class="rg1">
            <div class="userstable">
                <table class="ut">
                    <tr>
                        <th colspan="5"><h2>Offers</h2></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>cmimi</th>   
                        <th>vendi</th>
                        <th>koment</th>
                       
                    </tr>
                    <?php while ($rows = mysqli_fetch_assoc($result0)) { ?>
                        <tr>
                            <td><?php echo $rows['ID']; ?></td>
                            <td><?php echo $rows['cmimi']; ?></td>
                            <td><?php echo $rows['vendi']; ?></td>
                            <td><?php echo $rows['koment']; ?></td>
                           
                            <td><a href='deleteOffers.php?id=<?php echo $rows['ID']; ?>'>Delete</a></td>
                            
                            <td><a href='editOffers.php?id=<?php echo $rows['ID']; ?>'>Edit</a></td>
                        </tr>
                    <?php } ?>
                </table> 
            </div>
        </div>



        <style>
  .rg2 {
    margin-top: 20px;
  }

  .userstabela {
    width: 100%;
    overflow-x: auto;
  }

  .ua {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  .ua th, .ua td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  .ua th {
    background-color: #3498db;
    color: #fff;
  }

  .ua tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  .ua tr:hover {
    background-color: #f1f1f1;
  }

  .ua td a {
    display: inline-block;
    padding: 8px 12px;
    text-decoration: none;
    background-color: #e74c3c;
    color: #fff;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .ua td a:hover {
    background-color: #c0392b;
  }
</style>










        <div class="rg2">
            <div class="userstabela">
                <table class="ua">
                    <tr>
                        <th colspan="5"><h2>Biletat</h2></th>
                    </tr>
                    <tr>
                    <th>ID</th>

                      <br>
                        <th>DATA ARRITJES</th>
                        <br>
                        <th>DATA KTHIMIT</th> 
                        <br>  
                        <th>NR. I TE RRITURVE</th>
                        <br>
                        <th>NR.I FEMIJEVE</th>
                       
                    </tr>
                    <?php while ($rows = mysqli_fetch_assoc($result1)) { ?>
                        <tr>
                            <td><?php echo $rows['ID']; ?></td>
                            <td><?php echo $rows['dataArritjes']; ?></td>
                            <td><?php echo $rows['dataKthimit']; ?></td>
                            <td><?php echo $rows['nrAdults']; ?></td>
                            <td><?php echo $rows['nrKids']; ?></td>

                           
                            <td><a href='deleteBileta.php?id=<?php echo $rows['ID']; ?>'>Delete</a></td>
                            
                            <td><a href='editBileta.php?id=<?php echo $rows['ID']; ?>'>Edit</a></td>
                        </tr>
                    <?php } ?>
                </table> 
            </div>
        </div>



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