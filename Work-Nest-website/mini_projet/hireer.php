<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Job Offer</title>
  <link rel="stylesheet" href="hireer.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a class="logo pap">
          <img src="WN LOGO4.png">
          <span class="nav-item"></span>
        </a></li>
        <li><a class="pap" href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a class="pap" href="job.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Add Offer</span>
        </a></li>
        <li><a class="pap" href="apply.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Application</span>
        </a></li>
        <li><a href="mini_projet.html" class="logout pap">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
  
   
     
    

    <section class="main">
      <div class="main-top">
        <h1>Our Team</h1>
        <i class="fas fa-user-cog"> <?php echo($_SESSION['pseudo']);?></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="st.jpg">      
          <h4>Atig Sadok</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>

        <div class="card">
          <img src="933b9b891895ec1a268bbb9aab89f071.jpg">
          <h4>Balbina kherr</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="az.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="x.jpg">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div>

      <section class="attendance">
        
        <div class="attendance-list">


        <?php

$con = new mysqli('localhost','root','','test');
$access=$_SESSION['pseudo'];

$table='<table class="table">
    <thead>
      <tr>
        <th>Job</th>
        <th>Diplomas</th>
        <th>Competance</th>
        <th>Y.Experience</th>
        <th>Salary</th>
        <th>dis</th> 
        
        <th>Pseudo</th>
        <th>Operation</th>
        <th>Operation</th>
      </tr>
    </thead>';
    $sql="select * from offer where pseudo='$access'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $score=0;
        $job=$row['job'];
        $diplomas=$row['diplomas'];
        $competance=$row['competance'];
       
        $experience=$row['experience'];
        $salary=$row['salary'];
        $dis=$row['dis'];
        $pseudo=$row['pseudo'];

   


          $table.='<tr>
          <td>'.$job.'</td>
          <td>'.$diplomas.'</td>
          <td>'.$competance.'</td>
          <td>'.$experience.'</td>
          <td>'.$salary.'</td>
          <td>'.$dis.'</td>
       
          <td>'.$pseudo.'</td>
          <td><button><a href="update.php?updatejob='.$salary.'">Update</a></button></td>
          <td><button><a href="delete.php?deljob='.$salary.'">Delete</a></button></td>
        </tr>';
    }
    $table.='</table>';
    echo $table;
























/*
$con = new mysqli('localhost','root','','test');
	
        $stmt = $con->prepare("select * from offer");
       $result= $con->query($stmt);
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Depart</th>
                <th>Date</th>
                <th>Join Time</th>
                <th>Logout Time</th>
                <th>Operation</th>
                <th>Operation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Sam David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>Update</button></td>
                <td><button>Delete</button></td>
              </tr>
              <tr class="active">
                <td>02</td>
                <td>Balbina Kherr</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>Update</button></td>
                <td><button>Delete</button></td>
                
              </tr>
              <tr>
                <td>03</td>
                <td>Badan John</td>
                <td>testing</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>Update</button></td>
                <td><button>Delete</button></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Sara David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>Update</button></td>
                <td><button>Delete</button></td>
              </tr>
              
            </tbody>
          </table>
        
        */
        ?>
        
        </div>
      </section>
    </section>
  </div>
  <script src="score.js"></script>
</body>
</html>