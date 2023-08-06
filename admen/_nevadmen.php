<?php
if(isset($_SESSION['loginvalue']) && $_SESSION ['loginvalue']==true)
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
    <title>FOOD WEB</title>
    <!-- stylecsheet -->
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awsome -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!--  google font -->
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&family=Kaushan+Script&display=swap" rel="stylesheet">
   <!-- silk slider -->
   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body>
<section>
  <?php
   echo'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h1 class="navbar-brand" id="heading">FOOD HOUSE</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mymanu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mymanu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="nevb" aria-current="page" href="displayfood.php">DISPLAYFOOD<i class="fa-solid fa-house"></i></a>
        </li>';
        if(!$logindata){ 
      echo  '<li class="nav-item">
          <a class="nav-link" id="nevb" href="admenlogin.php">LOGIN</a>
        </li>';
        }
        if($logindata){
      echo '<li class="nav-item">
          <a class="nav-link" id="nevb" href="admemlogout.php">LOGOUT</a>
        </li>';
        }      
      echo'</ul>
    </div>
  </div>
</nav>';
?>
</section>    
</body>
</html>