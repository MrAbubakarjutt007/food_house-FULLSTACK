<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>FOOD JOBS</title>
    <!-- stylecsheet -->
    <link rel="stylesheet" type="text/css" href="dacoration/dacoration.css"> 
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
<body style="background-image:linear-gradient(rgb(255, 77, 45),rgb(156, 17, 22))">
    <div class="container">
        <divb class="row">
            <div class="col-lg-4 col-md-4 col-12">
             <h1 class="info  text-white">OWNER</h1>   
            <div class="card" style="width:18rem;">
                <img src="ownerimages/person.jpg" class="card-img-top" alt="person">
                <div class="card-body">
                    <h5 class="card-title">CH ABUBAKAR</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <h1 class="info text-white">MANEGER</h1>
            <div class="card" style="width:18rem;">
                <img src="ownerimages/person.jpg" class="card-img-top" alt="person">
                <div class="card-body">
                    <h5 class="card-title">AQIB BUTT</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <div class=""> 

                   <a href="../home.php" class="btn mt-5 text-white bg-dark">LOGEOUT</a>
                
                </div>  
            </div>
        </divb>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="staff text-center text-white">KICHAN STAFF-INFO</h1>
            </div>
        </div>
    </div> 
    <br>
    <section>    
        <div class="container">
        <div class="row slider">
            <div class="col-lg-12 col-md-12 col-12">
            <div class="card mr-2" style="width:18rem;">
            <img src="ownerimages/person.jpg" class="card-img-top" alt="person">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
            <div class="card" style="width:18rem;">
            <img src="ownerimages/person.jpg" class="card-img-top" alt="person">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
            <div class="card" style="width:18rem;">
            <img src="ownerimages/person.jpg" class="card-img-top" alt="person">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
            <div class="card" style="width:18rem;">
            <img src="ownerimages/person.jpg" class="card-img-top" alt="person">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
            <div class="card" style="width:18rem;">
            <img src="ownerimages/person.jpg" class="card-img-top" alt="person">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            
            
            
           
        </div>
      </div>
  
    </section>     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>           
    <script type="text/javascript">
            $('.slider').slick({
            dots: true,
            infinite: false,
            speed:900,
            slidesToShow:3,
            slidesToScroll:1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll:1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
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














