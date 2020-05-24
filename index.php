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
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="https://seeklogo.com/images/A/australia-map-logo-6D023C3336-seeklogo.com.png">
   <title>Universities in Australia</title>

   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

   <!-- Style CSS -->
   <link href="css/style.css" rel="stylesheet">
   <link href="css/Animate.css" rel="stylesheet">
</head>
<body>
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
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $_SESSION['id'] ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<a type = button href = "https://university-277504.ts.r.appspot.com/logout">log out</a>
	</div>
</div>
</body>
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