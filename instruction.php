<?php 
session_start();
  if(!isset($_SESSION['logindata']) || $_SESSION['logindata']!=true)
  {
     header("location:login.php");
     exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTRUCTION</title>
    <link rel="stylesheet" href="instruction/instruction.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awsome -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<?php include "connectionfiles/_nev.php"?>
<section>
  <div class="container-fluid text-center">
    <div class="row">
    <h1 class="help text-center mt-2">HELP GUIDE FOR SINGLE ITEM <i class="fa-solid fa-book mr-2"></i></h1>
        <div class="col-lg-6 col-md-6 col-12">
              <div class="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
              </div>

        </div>
        <div class="col-lg-6 col-md-6 col-12">
                <div class="">   
                <img src="./pngimges/pngwing.png" alt="pngwing" width="50%" class="">
                </div>
              </div>

        </div>
    </div>
  </div>
  </section>
  <section>
  <div class="container-fluid text-center">
    <div class="row">
    <h1 class="help text-center mt-2">HELP GUIDE FOR DEAL ITEM <i class="fa-solid fa-book mr-2"></i></h1>
        <div class="col-lg-6 col-md-6 col-12">
              <div class="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, laborum asperiores sit repellendus velit, neque fugit earum magni, nobis temporibus alias et fuga. Cupiditate, impedit inventore tempora at dignissimos libero.</p>
                
              </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
              <div class="">
              <img src="./pngimges/fireimg1.png" alt="fireimg1" width="50%" class="">
              </div>
        </div>
        
    </div>
  </div>
  </section>
</body>
</html>