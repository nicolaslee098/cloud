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



if (!is_null($_POST['deakin'])) 
{
  $_POST['name'] = 'Deakin University';

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
}

if (!is_null($_POST['latrobe'])) 
{
  $_POST['name'] = 'La Trobe University';

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
}

if (!is_null($_POST['monash'])) 
{
  $_POST['name'] = 'Monash University';

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
}

if (!is_null($_POST['rmit'])) 
{
  $_POST['name'] = 'RMIT University';

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
}

if (!is_null($_POST['swinburne'])) 
{
  $_POST['name'] = 'Swinburne University';

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
}

if (!is_null($_POST['tanu'])) 
{
  $_POST['name'] = 'The Australian National University';

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
}


if (!is_null($_POST['tuoa'])) 
{
  $_POST['name'] = 'The University of Adelaide';

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
}


if (!is_null($_POST['tuoq'])) 
{
  $_POST['name'] = 'The University of Queensland';

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
}


if (!is_null($_POST['tuos'])) 
{
  $_POST['name'] = 'The University of Sydney';

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
}


if (!is_null($_POST['unsw'])) 
{
  $_POST['name'] = 'UNSW Sydney';

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
}


if (!is_null($_POST['uom'])) 
{
  $_POST['name'] = 'University of Melbourne';

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
}


if (!is_null($_POST['uot'])) 
{
  $_POST['name'] = 'University of Tasmania';

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
}


if (!is_null($_POST['vu'])) 
{
  $_POST['name'] = 'Victoria University';

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
}


if (!is_null($_POST['wau'])) 
{
  $_POST['name'] = 'William Angliss University';

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

   <div class="browsebg">


     
   <!-- JS nav -->
   <script src="js/navbar.js"></script>
    <form action="" method="post">
    <br><br> 
    <h1 class="ausuni">Australian Universities</h1>
    <br><br> 
    <div class="polaroid">
      <img src="https://manoa.hawaii.edu/mix/wp-content/uploads/2017/11/3269_150116_BC_Building_Burwod_08.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="Deakin University" id="deakin" name ='deakin'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.universitiesaustralia.edu.au/wp-content/uploads/2019/05/LaTrobe3_web-1333x1000.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="La Trobe University" id="latrobe" name ='latrobe'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://media.glassdoor.com/l/85/a8/8e/fb/monash-university-clayton-campus.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="Monash University" id="monash" name ='monash'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.rmit.edu.au/content/dam/rmit/au/en/study-with-us/interest-areas/thumbnails/business-study-area-1220x732.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="RMIT University" id="rmit" name ='rmit'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://media3.architecturemedia.net/site_media/media/cache/81/41/8141675cbc697ba27393f448ddbce88f.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="Swinburne University" id="swinburne" name ='swinburne'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://corporate.amp.com.au/content/dam/corporate/newsroom/images/Capital/Property/1.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="The Australian National University" id="tanu" name ='tanu'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.campustravel.com.au/sites/campustravel.com.au/files/styles/main_image/public/170116-campt-lpnew-uni-of-adelaide.jpg?itok=-1VlZ9nO" style="width:100%">
      <div class="container">
      <input type="submit" value="The University of Adelaide" id="tuoa" name ='tuoa'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.choosebrisbane.com.au/~/media/choose/study/wide/uq_greatcourt_20180417_wide.ashx" style="width:100%">
      <div class="container">
      <input type="submit" value="The University of Queensland" id="tuoq" name ='tuoq'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.sydney.edu.au/content/dam/corporate/images/architecture/quadrangle/high-quad-shot1.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="The University of Sydney" id="tuos" name ='tuos'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://newsroom.unsw.edu.au/sites/default/files/thumbnails/image/shutterstock_331014299_3.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="UNSW Sydney" id="unsw" name ='unsw'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://pbs.twimg.com/media/DdN46rpU0AA9Ht0.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="University of Melbourne" id="uom" name ='uom'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://www.sbs.com.au/nitv/sites/sbs.com.au.nitv/files/styles/full/public/utas.jpeg?itok=aJnCDmkh" style="width:100%">
      <div class="container">
      <input type="submit" value="University of Tasmania" id="uot" name ='uot'></div>
      </div>
    </div><br>
    
    <div class="polaroid">
      <img src="https://www.vu.edu.au/sites/default/files/styles/featured_link_768x430/public/images/victoria-university-building.jpg?itok=UaEXN2e6" style="width:100%">
      <div class="container">
      <input type="submit" value="Victoria University" id="vu" name ='vu'></div>
      </div>
    </div><br>

    <div class="polaroid">
      <img src="https://ovec.ms/wp-content/uploads/2018/01/02-1.jpg" style="width:100%">
      <div class="container">
      <input type="submit" value="William Angliss University" id="wau" name ='wau'></div>
      </div>
    </div> 

    </form>

  </div> 

  <!-- Footer -->
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
 </section> 
    </div>
  </body>
</html>