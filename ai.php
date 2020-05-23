<?php
    session_start();
    require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Machine Learning Vision</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body,html{
            height: 100%;
        }
        .bg{
            background-image: url("building.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
     <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

   <!-- Style CSS -->
   <link href="css/style.css" rel="stylesheet">
   <link href="css/Animate.css" rel="stylesheet">
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
<body class="bg">
        <div class="container">
        <br><br><br>
            <div class= "row">
                <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">
                    <div class= "panel-heading">
                        <h2>AI Vision</h2>
                        <p style="font-style: italic;">Hello, this is AI want to help you with your image</p>
                    </div>
                    <hr>
                    <form action="check" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" accept="image/*" class="form-control">
                        <br>
                        <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Analyse</button>
                    </form>
                </div>
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