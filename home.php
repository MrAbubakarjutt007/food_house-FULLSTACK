<?php
include ("foodconnection.php");
session_start();
  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:login.php");
     exit;
  }
  if(isset($_SESSION['logindata']) && $_SESSION ['logindata']==true)
  {
     $logindata=true;
  }
  else
  {
    $logindata=false;
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>FOOD WEB</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
    <!-- stylecsheet -->
    <link rel="stylesheet" type="text/css" href="style/webfood4.css"> 
   	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awsome -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" -->
   <!--  google font -->
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&family=Kaushan+Script&display=swap" rel="stylesheet">
   <!-- silk slider -->
   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body>
  <?php include "addtocard/addcard.php"?>
  <?php include "connectionfiles/_ofsetcanves.php"?>
  <?php include "modeldata/modelbox.php"?>
  <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="d-flex">
               <div class="mt-3">
                        <h3 id="goith3"><i>FOOD HOUSE <img src="./pngimges/fireimg1.png" alt="fireimg1" width="15%" class=""></i></h3> 
                  </div>
                  </div>
            </div>
            
            <div class="col-lg-8 col-md-8 col-12">
              <div class="d-flex" style="float:right;">
               <div class="mt-3">
                        <a href="#" class="p-1 text-danger"><i class="fa-brands fa-facebook"></i></a> 
                        <a href="#" class="p-1 text-danger"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="#" class="p-1 text-danger"><i class="fa-brands fa-twitch"></i></a>
                        <a href="#" class="p-1 text-danger"><i class="fa-brands fa-instagram"></i></a> 
                        <?php
                        if($logindata){
                        echo '<a href="logout.php" class="p-1 btn text-light">LOGOUT</a>';
                        }
                        ?> 
                  </div>
                  </div>
            </div>
          </div>
        </div>     


  </section>
  <section>
	<div class="container-fluid">
   <div class="row">
    <div class="col-lg-5 col-md-5 col-12">
      <div class="mt-5" id="styling">
      <marquee>
       <h1 id="what">FOOD HOUSE</h1> 
      </marquee>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-12">
      <img src="foodimages\chikenlogo.jpg" alt="chikenlogo" height="150px" width="150px" class="img-thumbnail" id="foodimage">
    </div>
    <div class="col-lg-5 col-md-5 col-12">
      <div class="mt-5" id="styling">
      <marquee>
       <h1 id="what">FOOD HOUSE</h1> 
      </marquee>
      </div>  
    </div>   
  </div>
 </div>
</section>
<br>
<?php include "connectionfiles/_nev.php"?>
<section>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#data" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#data" data-bs-slide-to="1" class="active"></button>
    <button type="button" data-bs-target="#data" data-bs-slide-to="2" class="active"></button>
    <button type="button" data-bs-target="#data" data-bs-slide-to="3" class="active"></button>
    <button type="button" data-bs-target="#data" data-bs-slide-to="4" class="active"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="foodimages\burgersliderimg.jpg" alt="burgersliderimg" class="d-block" style="width:100%; height:600px;">
      <div class="carousel-caption">
        <h3 class="bolt"><b>HOT PEZZA</b></h3>
        <p class="bolt">I LOVE FAST FOOD!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="foodimages\zingerbergerimg.jpg" alt="zingerbergerimg" class="d-block" style="width:100%;height:600px;">
      <div class="carousel-caption">
        <h3 class="bolt">BERGER</h3>
        <p class="bolt">BURGER FOR FAST FOOD LOVERS!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="foodimages\sliderimgdeal.jpg" alt="sliderimgdeal" class="d-block" style="width:100%;height:600px;">
      <div class="carousel-caption">
        <h3 class="bolt">PAKISTEN FAST FOOD RESTTRORENT</h3>
        <p class="bolt">BEST FOOD ARE AVALIBLE  IN FOOD HOUSE!</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="foodimages\dealslideritem.jpg" alt="dealslideritem" class="d-block" style="width:100%;height:600px;">
      <div class="carousel-caption">
        <h3 class="bolt">BERGER</h3>
        <p class="bolt">BURGER FOR FAST FOOD LOVERS!</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="foodimages\datafoodslider.jpg" alt="datafoodslider" class="d-block" style="width:100%;height:600px;">
      <div class="carousel-caption">
      <h3 class="bolt">PAKISTEN FAST FOOD RESTTRORENT</h3>
        <p class="bolt">BEST FOOD ARE AVALIBLE  IN FOOD HOUSE!</p>
      </div>  
    </div>
  </div>
  
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#data" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#data" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</section>
<br>
<br>
<section>
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
         <hr>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <h1>FAST FOOD SLIDER</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <hr>
         <div class="shopping mt-3 text-danger">
                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-bag-shopping"></i>
                    <span class="quantity">0</span></button>
                  </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>

  <div class="container-fluid">
  <div class="row slider">
    <div class="col-md-12">
          <div class="details">
          <h2 class="have">ZINGER BERGER</h2>
          <p>CODE,#4567</p>
          <img src="foodimages\don.jpg"  alt="don" class="rounded-pill img-thumbnail" width="80%" >
          <div class="raw">
          <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>300RS</b></a>
          <button class="btn text-white mx-2" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
          </div>
           </div>

          
        </div>
        <div class="col-md-12">
          <div class="details ml-2">         
          <h2 class="have">BLACK ZINGER</h2>
          <p>CODE,#4568</p>
          <img src="foodimages\blACK.JPG" alt="blACK" class="rounded-pill img-thumbnail" width="80%" >
          <div class="rew">
          <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>500RS</b></a>
          <button class="btn text-white mx-2" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
          </div>
           </div>
           
          
        </div>
        <div class="col-md-12">
          <div class="details">         
          <h2 class="have">CHEAZE ZENGER</h2>
          <p>CODE,#4569</p>
          <img src="foodimages\don.jpg"  alt="don" class="rounded-pill img-thumbnail" width="80%">
          <div class="raw">
          <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>420RS</b></a>
          <button class="btn text-white mx-2" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
          </div>
           </div>
           
          
        </div>
        <div class="col-md-12">
          <div class="details">
          <h2 class="have">PEZZA</h2>
          <p>CODE,#4570</p>
          <img src="foodimages\pezza.jpg" alt="pezza" class="rounded-pill img-thumbnail" width="75%">
          <div class="raw">
           <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>650RS</b></a>
           <button class="btn text-white mx-2" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
           </div>
           </div>
           
          
        </div>
        <div class="col-md-12">
          <div class="details">
          <h2 class="have">CHEAZE PEZZA</h2>
          <p>CODE,#4571</p>
          <img src="foodimages\hotpeza.jpg" alt="hotpeza" class="rounded-pill img-thumbnail" width="75%">
          <div class="raw">
          <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>900RS</b></a>
          <button class="btn text-white mx-2" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
           </div>
           </div>
          
        </div>
        <div class="col-md-12">
          <div class="details">
          <h2 class="have">VAGETABLES PEZZA</h2>
          <p>CODE,#4572</p>
          <img src="foodimages\pezza2.jpg" alt="pezza2" class="rounded-pill img-thumbnail" width="75%">
          <div class="raw">
           <a href="#" class="have" data-bs-toggle="modal" data-bs-target="#myModal"><b>750RS</b></a>
           <button class="btn text-white" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
           </div>
          </div>
        </div>
  </div>
</div>
<br>
<br>
<section>
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
         <hr>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <h1>FOOD GALLERY</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <hr>
                  <div class="shopping mt-3 text-danger">
                    <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#addcard"><i class="fa-solid fa-bag-shopping"></i>
                    <span class="quantity">0</span></button>
                  </div>
      </div>
    </div>
  </div>
</section>
<br>
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
          <p class="card-text"> I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 350</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" onclick="changedata()" ><i class="fa-solid fa-credit-card"></i>CARD</button>
         </div>
  </div>
 </div>
 <br>
 <div class="col-lg-4 col-md-4 col-12">
     <div class="card img-thumbnail">
        <img src="foodimages\deal.jpg" class="card-img-top" alt="deal" height="170px">
          <div class="card-body">
          <h5 class="card-title">ZINGER CHISE BERGER WITH FRIZES</h5>
          <br>
          <p class="card-text">I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 450</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button" ><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <br>
 <div class="col-lg-4 col-md-4 col-12">
     <div class="card img-thumbnail" style="width: 18rem;  box-shadow:3px 3px 3px 3px orange;">
        <img src="foodimages\DEAL2.JPG" class="card-img-top" alt="DEAL2" height="170px">
          <div class="card-body">
          <h5 class="card-title">LARGE-PEZZA,FRIZES,ZINGER BERGER RS1130</h5>
          <p class="card-text">TASTE AND SPICE DEAL FOR YOU,JUST <b><i>RS 1130</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
<br> 
 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail">
        <img src="foodimages\nugeats.jpg" class="card-img-top" alt="nugeats" height="170px">
          <div class="card-body">
          <h5 class="card-title">CHICKEN NAGAGETS</h5>
          <p class="card-text">I HAVE A SAPESICAL DEAL FOR YOU,JUST <b><i>RS 220</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail" style="width:18rem; box-shadow:3px 3px 3px 3px orange;">
        <img src="foodimages\imagesdubel.jpg" class="card-img-top" alt="imagesdubel" height="170px">
          <div class="card-body">
          <h5 class="card-title"><b><i>FOOD HOUSE SAPESICAL DEAL</i></b></h5>
          <p class="card-text">JUST,<b><i>RS 3600</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button"><i class="fa-solid fa-credit-card"></i>CARD</button>
   </div>
  </div>
 </div>
 <div class="col-lg-4 col-md-4 col-12 mt-5">
     <div class="card img-thumbnail">
        <img src="foodimages\differentitems.jpg" class="card-img-top" alt="differentitems" height="170px">
          <div class="card-body">
          <h5 class="card-title">MONSTER DEAL, EVERY THINGS IN THIS DEAL</h5>
          <p class="card-text">JUST,<b><i>RS 3300</i></b></p>
          <button class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#order"><i class="fa-solid fa-cart-shopping"></i>ORDER</button>
          <button class="btn text-white" type="button"><i class="fa-solid fa-credit-card"></i>CARD</button>
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
<script src="../addcard.js"></script>
<script src="javasc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
  $('.slider').slick({
  dots:true,
  infinite:false,
  speed: 300,
  slidesToShow: 4 ,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
</body>
</html>






