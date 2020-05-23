<?php
require_once "config.php";
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\Datastore\DatastoreClient;


$datastore = new DatastoreClient([
    'projectId' => 'university-277504'


]);


	if (isset($_SESSION['access_token'])) {
		header('Location: index');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();



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


   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

   <!-- Style CSS -->
   <link href="css/style.css" rel="stylesheet">
   <link href="css/Animate.css" rel="stylesheet">

    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

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

</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                <form >
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>

            </div>
        </div>
    </div>
</body>
</html>