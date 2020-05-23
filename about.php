<?php
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\Datastore\DatastoreClient;


$datastore = new DatastoreClient([
    'projectId' => 'university-277504'


]);

session_start();
if (!is_null($_POST['name'])) 
{
  
   $key = $datastore->key('university',$_POST['name']);
   $entity = $datastore->lookup($key);
      if($_POST['name'] == $entity['name'])
      {
        $_SESSION['entry_requirements'] = $entity['entry_requirements'];
        $_SESSION['address'] = $entity['address'];
        $_SESSION['contact'] = $entity['contact'];
        $_SESSION['description'] = $entity['description'];
        $_SESSION['major'] = $entity['major'];
        $_SESSION['name'] = $entity['name'];
        $_SESSION['rank'] = $entity['rank'];
        $_SESSION['tuition'] = $entity['tuition'];
        $_SESSION['website'] = $entity['website'];
        $_SESSION['latitude'] = $entity['latitude'];
        $_SESSION['longitude'] = $entity['longitude'];
        $_SESSION['image'] = $entity['image'];
        $_SESSION['logo'] = $entity['logo'];
        echo '<script type="text/javascript">window.location = "https://university-277504.ts.r.appspot.com/university"</script>';
      }
      else
      {
        echo $_POST['name'];
        echo " not found";  
      }
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://seeklogo.com/images/A/australia-map-logo-6D023C3336-seeklogo.com.png">
    <title>Universities in Australia</title>
 
    <!-- favicon -->
    <link href="assets/calculation.png" rel=icon>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/Animate.css" rel="stylesheet">
    <style>
	body {
	  font-family: Arial;
	  color: white;
	}

	.split {
	  height: 80%;
	  width: 50%;
	  position: fixed;
	  z-index: 1;
	  top: 100;
	  overflow-x: hidden;
	  padding-top: 20px;
	}

	.left {
	  left: 0;
	  background-color: #d6daeb;
	}

	.right {
	  right: 0;
	  background-color: white;
	}

	.centered {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  text-align: center;
	}

	.centered img {
	  width: 150px;
	  border-radius: 50%;
	}
	</style>
 </head>
<!-- nav -->
   <div class="topnav">
       <a href="https://university-277504.ts.r.appspot.com/">Universities in Australia</a>
       <a href="https://university-277504.ts.r.appspot.com/browse">Browse</a>
       <a href="https://university-277504.ts.r.appspot.com/sql">World Stat</a>
       <a href="https://university-277504.ts.r.appspot.com/ai">Image Search</a>
       <a href="https://university-277504.ts.r.appspot.com/login">Login</a>
       
       <div class="active">
         <button class="openBtn" onclick="openSearch()">Search</button>
       </div>
   </div>

   <!-- Search -->
   <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="" method="post">
          <input type="text" placeholder="Search.." name="name" id="name">
          <button type="submit">Search<i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <!-- follows navbar -->
    <script>
      window.onscroll = function() {myFunction()};
      
      var topnav = document.getElementById("topnav");
      var sticky = topnav.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          topnav.classList.add("sticky")
        } else {
          topnav.classList.remove("sticky");
        }
      }
      </script>

    <!-- JS Search -->
   <script>
      function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
      }

      function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
      }
   </script>

   <!-- JS nav -->
   <script src="js/navbar.js"></script>	

<div class="container">
        

        <div class="row">

        	<h1>About Us</h1>

			<p>We currently are studying in RMIT University majoring in information technology. This web application is made for our cloud computing assignment 2 where this website is developed for any student who are looking forward to study in Australia.</p>

			<body class="aboutbg">
				<div class="split left">
				  <div class="centered">
				    <img src="data:image/png;base64,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" alt="Avatar woman">
				    <h2>Nicolas Nicolas</h2>
				    <p>s3827493[at]student.rmit.edu.au</p>
				  </div>
				</div>

				<div class="split right">
				  <div class="centered">
				    <img src="data:image/png;base64,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" alt="Avatar man">
				    <h2>Muhammad Andi Yusuf</h2>
				    <p>sxxxxxx[at]student.rmit.edu.au</p>
				  </div>
				</div>

			</body>
		</div>
</div>

<section id="footer" class="">
      <div class="container">
         <div class="row">
            <div class="footer-container">
               <div class="footer-address-container animated wow fadeInUp">
                  <p class="footer-address-container-heading"><span class="highlight-stylish">RMIT University</span></p>
                  <p class="footer-address-container-subheading">Swanston Street, Melbourne</p>
                  <p class="footer-address-container-subheading">Victoria - 3000, Australia</p>
               </div>

               <div class="footer-end animated wow fadeInLeft">
                  <p class="all-right"><span class="all-rights-university">Cloud Computing Assignment 2</span>
                     <span class="all-rights-year">2020 ®</span> </p>
                  <p class="all-right all-rights-university">Developed by <span class="footer-end-name">
                     <a href="https://university-277504.ts.r.appspot.com/about">Muhammad Andi Yusuf and Nicolas Nicolas</a><br>
                     <a href="https://github.com/nicolaslee098/cloud" target="_blank">Source Code</a><br>
                  <p class="all-right all-rights-university"><span class="all-rights-year">RMIT</span>, All Rights Reserved</p>
               </div>
            </div>
         </div>
      </div>
   </section>  
</html>