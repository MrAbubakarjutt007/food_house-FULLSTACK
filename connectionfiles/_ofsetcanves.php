<?php include "foodconnection.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="">
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
    <section>
    <div class="container-fluid class">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
              <div class="offcanvas offcanvas-start mx-5" id="order" style="background-image:linear-gradient(rgb(156, 17, 22),rgb(255, 77, 45));">
                 <div class="offcanvas-header text-white">
                  <h1 class="offcanvas-title">ORDER<i class="fa-brands fa-jedi-order"></i></h1>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body text-white text-center">             
                      <form action="" method="GET">
                        <label for="foodname">FOOD DEAL:</label><br>
                        <select name="fooddata" id="" size="1">
                         <option value="ZINGER BERGER WITH FRIZES">ZINGER BERGER WITH FRIZES RS350</option>
                          <option value="ZINGER CHISE BERGER WITH FRIZES">ZINGER CHISE BERGER WITH FRIZES RS450</option>
                          <option value="LARGE PEZZA WITH FRIZES AND ZINGER BERGER">LARGE-PEZZA,FRIZES,ZINGER BERGER RS1130</option>
                          <option value="CHICKEN NAGAGETS">CHICKEN NAGAGETS RS220</option>
                          <option value="FOOD HOUSE SAPESICAL DEAL">FOOD HOUSE SAPESICAL DEAL RS3600</option>
                          <option value="MONSTER DEAL EVERY THINGS IN THIS DEAL">MONSTER DEAL RS3300</option>
                        </select>
                        <br>
                        <label for="name"> NAME:</label><br>
                        <input type="text" id="" name="username" value=""><br><br>
                        <label for="mobile"> MOBILE NUMBER:</label><br>
                        <input type="text" id="" name="mobiledata" value=""><br><br>
                        <label for="address">ADDRESS:</label><br>
                        <input type="text" name="useraddress" id="" value="">
                        <br>
                        <label for="SIZE">SIZE:</label><br>
                        <select name="useritem" id="" size="1">
                        <option value="empty">empty</option>
                          <option value="large">large</option>
                          <option value="mediem">mediem</option>
                          <option value="small">small</option>
                        </select>
                        <br>
                        <input type="submit" name="deleverdata" value="ORDER FOOD" class="btn" style="background-image:linear-gradient(rgb(255,  77, 45),rgb(156, 17, 22));box-shadow:2px 2px;font-family: 'Kaushan Script', cursive;"/>
                      </form>
                                      
                  </div>
                   <?php
                       if(isset($_GET['deleverdata']))
                       { 
                                $idin   = $_GET['userid'];
                                $datain = $_GET['fooddata'];
                                $userin = $_GET['username'];
                                $foodin = $_GET['mobiledata'];
                                $addresin = $_GET['useraddress'];
                                $itemin = $_GET['useritem'];
                                if($datain!="" && $userin!="" && $foodin!="" && $addresin!="" && $itemin!="")
                                { 
                                    $qureydata = "INSERT INTO `enterfood`(`userid`, `fooddata`, `username`, `mobiledata`, `useraddress`, `useritem`) VALUES ('$idin','$datain','$userin','$foodin','$addresin','$itemin')";
                                    $conection = mysqli_query($con, $qureydata);
                                    if($conection)
                                    {
                                      echo "<script> alert('YOUR ORDER SUCCESSFULL,DILLVER ORDER WITH IN 2 HOUR')</script>";
                                        ?>
                                        <META http-equiv="refresh" content="0; URL=http://localhost/foodhouse/home.php"> 
                                        <?php
                                    }
                               } 
                                else
                                {
                                  echo "<script> alert('your data are not enter')</script>";
                                } 
                       }

                   ?>
                </div>
              </div>
          </div>
    </div>
    </section>   
    </body>
    <!-- <label for="foodname">FOOD DEAL:</label><br>
                        <input type="text" id="" name="fooddata" value=""><br><br> -->
</html>