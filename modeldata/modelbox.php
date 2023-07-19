<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">BUY NOW<i class="fa-solid fa-cart-shopping"></i></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body d-flex">
       <form action="" method="GET">
        <label for="food">ENTER-CODE#</label><br>
        <input type="text" name="codedata" placeholder="CODE"><br>
        <label for="nameenter">NAME</label><br>
        <input type="text" name="namedata" placeholder="NAME"><br>
        <label for="addressdata">ADDRESS</label><br>
        <input type="text" name="addressdetail" placeholder="ADDRESS"><br>
        <label for="phone">CONTECT NUMBER:</label><br>
        <input type="text" id="" name="enternumber" value=""><br><br>
        <input type="submit" class="btn text-white" name="submiteddata" value="BUY"/>
       </form>
       <img src="pngimges\pngwing.png" class="mx-2" alt="pngwing" width="100%">
      </div>
      <?php
                       
                       include ("foodconnection.php");
                       if(isset($_GET['submiteddata']))
                       { 
                                $iddataenter = $_GET['id'];
                                $enterdete = $_GET['codedata'];
                                $putdata = $_GET['namedata'];
                                $detailenter = $_GET['addressdetail'];
                                $addressnumber = $_GET['enternumber'];
                                if($enterdete!="" &&  $putdata!="" && $detailenter!="" && $addressnumber!="")
                                { 
                                    $qureydata = "INSERT INTO `singleitem`(`id`, `codedata`, `namedata`, `addressdetail`, `enternumber`) VALUES ('$iddataenter',' $enterdete','$putdata','$detailenter',' $addressnumber')";
                                    $datamarg= mysqli_query($con,$qureydata);
                                    if($datamarg)
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

</body>
</html>