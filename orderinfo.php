<?php
include ("foodconnection.php");
error_reporting(0); 
session_start();
  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:login.php");
     exit;
  }

?>
<!DOCTYPE html>
<html>
<head>
	
	  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD WEB</title>
    <!-- stylecsheet -->
    <link rel="stylesheet" type="text/css" href="style/orderitem.css">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awsome -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    google font>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&family=Kaushan+Script&display=swap" rel="stylesheet">
   <!-- owl slider -->   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   
</head>
<body>
<?php include "addtocard/addcard.php"?>
<?php include "connectionfiles/_ofsetcanves.php"?>
<?php include "connectionfiles/_nev.php"?>
<section>
<div class="container-fluid mt-4">	
	<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <div class="">
      <video class="fixeddata" autoplay muted loop>
        <source src="foodvideo/foodvideo.mp4" type="video/mp4">
      </video>
     </div>
    </div>
  </div>
</div> 
  </section>
  <section>
      <div class="container-fluid mt-4">	
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12 text-center">
          <div class="owl-carousel owl-theme text-center">
              <div class="item"><a href="#" class="iconsize" style="font-size:20px;"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div>
              <div class="item"><a href="#"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div>    
              <div class="item"><a href="#"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div> 
      
              <div class="item"><a href="#"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div>
              <div class="item"><a href="#"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div>
              <div class="item"><a href="#"><i class="fa-sharp fa-light fa-burger-soda"></i></a></div>       
          </div>
          </div>
          </div>
          </div>
</section>
<br>
<section>
  <div class="container-fluid text-center">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
     <div class="card img-thumbnail">
        <img src="foodimages\berger2.jpg" class="card-img-top" alt="berger2"  height="170px">
          <div class="card-body">
          <h5 class="card-title">ZINGER BERGER WITH FRIZES</h5>
          <br>
          <p class="card-text">I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 350</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12">
     <div class="card img-thumbnail" style="width:18rem; box-shadow:3px 3px 3px 3px #35235e;">
        <img src="foodimages\deal.jpg" class="card-img-top" alt="deal" height="170px">
          <div class="card-body">
          <h5 class="card-title">ZINGER CHESE BERGER WITH FRIZES</h5>
          <br>
          <p class="card-text">I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 450</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12">
     <div class="card img-thumbnail">
        <img src="foodimages\DEAL2.JPG" class="card-img-top" alt="DEAL2" height="170px">
          <div class="card-body">
          <h5 class="card-title">LARGE-PEZZA,FRIZES,ZINGER BERGER RS1130</h5>
          <p class="card-text">TASTE AND SPICE DEAL FOR YOU,JUST <b><i>RS 1130</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail" style="width:18rem; box-shadow:3px 3px 3px 3px lightgreen;">
        <img src="foodimages\nugeats.jpg" class="card-img-top" alt="nugeats" height="170px">
          <div class="card-body">
          <h5 class="card-title">CHICKEN NAGAGETS</h5>
          <p class="card-text">I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 220</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail">
        <img src="foodimages\imagesdubel.jpg" class="card-img-top" alt="imagesdubel" height="170px">
          <div class="card-body">
          <h5 class="card-title"><b>FOOD HOUSE SAPESICAL DEAL</b></h5>
          <p class="card-text">JUST,<b><i>RS 3600</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail" id="color">
        <img src="foodimages\differentitems.jpg" class="card-img-top" alt="differentitems" height="170px">
          <div class="card-body">
          <h5 class="card-title">MONSTER DEAL EVERY THINGS IN THIS DEAL</h5>
          <p class="card-text">JUST,<b><i>RS 3300</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div> 
</div>
</div>
</div>
</section>
<br>
<br>
<?php include "connectionfiles/_footer.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:false
        }
    }
})


</script>       
</body>
</html>



















