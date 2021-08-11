<!DOCTYPE html>
<html lang="en">

    <title>AutoHire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  
  
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="styling.css">
    
    
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

   <style type="text/css">
        body{ font: 14px Century Gothic; text-align: center; }
        .wrapper{ width: 1200px; padding: 20px; margin-left: 70px; margin-top: 70px; color: #000000; background-color: #ffffff; opacity: 0.8; border-radius: 20px; }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>

<div class="hero-wrap" style="background-image: url('images/Bugatti/bugatti_chiron_super_sport_300__prototype_2019_4k_8k-1280x720.jpg');"  data-stellar-background-ratio="0.5">
   
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Auto<span>Hire</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="customerhome.php" class="nav-link">AuToHire Home</a></li>
           <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Rent-Prices</a></li>
	          <li class="nav-item"><a href="car.html" class="nav-link">Car-Rent</a></li>
	          <!--<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
      </nav>
      

      
   
    
    <div class="wrapper">
        
                        <h2 class="pull-left">AuTo Hire Customer Details</h2>

                        <!--<a href="directorcreate.php" class="btn btn-success pull-right">ADD Driver CarWash Request</a><br>-->
                        <a href="customerwelcome.php" class="btn btn-success pull-right">BACK</a><br>

                
                    <?php
                    // Include config file
                    require_once "customerconfig.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM CarHireDetails";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Location</th>";
                                        echo "<th>duration</th>";
                                        echo "<th>Car Name</th>";
                                        echo "<th>Car Plate Number</th>";
                                        echo "<th>Means of Payment</th>";
                                        echo "<th>Action</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['location'] . "</td>";
                                        echo "<td>" . $row['duration'] . "</td>";
                                        echo "<td>" . $row['carname'] . "</td>";
                                        echo "<td>" . $row['carplateno'] . "</td>";
                                        echo "<td>" . $row['payment'] . "</td>";
                                        echo "<td>";

                                         echo "<a href='customerread.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='customerupdate.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='customerdelete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                            
                                           
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

 
                    // Close connection
                    mysqli_close($link);
                    ?>
                        
                </div>
                </div>
          
</body>
</html>