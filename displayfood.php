<?php
include ("foodconnection.php");
session_start();
  if(!isset($_SESSION['loginvalue']) || $_SESSION['loginvalue']!=true)
  {
     header("location:admenlogin.php");
     exit;
  }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DISPLAYFOOD</title>
        <link rel="stylesheet" type="text/css" href="displaycss/fooddisplay1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
         <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&family=Kaushan+Script&display=swap" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    </head>
    <body>
      <?php include("admen/_nevadmen.php")?>
         <div class="container">
            <div class="row slider">
                <div class="col-md-12">
              <?php
                 include ("foodconnection.php");                   
                 $data ="SELECT * FROM  enterfood";
                 $select = mysqli_query($con,$data);
                 $display = mysqli_num_rows($select);
                 $total = mysqli_fetch_assoc($select); 
                 if($total!=0)
                 {
                    ?>
                       <div class='tableimg'><h1><i><b>FOOD HOUSE CUSTOMER ORDER</b></i></h1></div>
                       <table class='what'>
                          <tr>
                            <th class='why'><i>ID</i></th>
                            <th class='why'><i>FOODNAME</i></th>
                            <th class='why'><i>NAME</i></th>
                            <th class='why'><i>MOBILE NUMBER</i></th>
                            <th class='why'><i>ADDRESS</i></th>
                            <th class='why'><i>SIZE</i></th>
                            <th class='why'><i>DELETE</i></th>
                          </tr>
                    
                    <?php
                    while($total = mysqli_fetch_assoc($select))
                    {
                        echo"<tr>
                                <td class='what'>".$total['userid']."</td>
                                <td class='what'>".$total['fooddata']."</td>
                                <td class='what'>".$total['username']."</td>
                                <td class='what'>".$total['mobiledata']."</td>
                                <td class='what'>".$total['useraddress']."</td>
                                <td class='what'>".$total['useritem']."</td>
                                <td><a href='delete.php?in=$total[userid]' onclick='return confermdelet()' class='link'>DELETE</a></td>
                            </tr>";
                    }
                 }
                 else
                {
                    echo "no record found";
                }  
              ?>
              </table>
          </div>
          <div class="col-md-12">
            <?php                   
                 $dataitem ="SELECT * FROM  singleitem";
                 $selectdata = mysqli_query($con,$dataitem);
                 $display = mysqli_num_rows($selectdata);
                 $totaldata = mysqli_fetch_assoc($selectdata); 
                 if($totaldata!=0)
                 {
                    ?>
                       <div class='tableimg'><h1><i><b>FOOD HOUSE SINGAL ITEM</b></i></h1></div>
                       <table class='what'>
                          <tr>
                            <th class='why'><i>ID</i></th>
                            <th class='why'><i>CODE</i></th>
                            <th class='why'><i>NAME</i></th>
                            <th class='why'><i>ADDRESS</i></th>
                            <th class='why'><i>MOBILE NUMBER</i></th>
                            <th class='why'><i>QUANTITY</i></th>
                            <th class='why'><i>DELETE</i></th>
                          </tr>
                    
                    <?php
                    while($totaldata = mysqli_fetch_assoc($selectdata))
                    {
                        echo"<tr>
                                <td class='what'>".$totaldata['id']."</td>
                                <td class='what'>".$totaldata['codedata']."</td>
                                <td class='what'>".$totaldata['namedata']."</td>
                                <td class='what'>".$totaldata['addressdetail']."</td>
                                <td class='what'>".$totaldata['enternumber']."</td>
                                <td><a href='delete.php?out=$totaldata[id]' onclick='return confermdelet()' class='link'>DELETE</a></td>
                            </tr>";
                    }
                 }
                 else
                {
                    echo "no record found";
                }  
              ?>
              </table>
              <script>
          function confermdelet()
          {
             return confirm('are you sure you want to delet data'); 
          }
       </script></div>
        </div>
       </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
  $('.slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
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
       // instead of a settings object
  ]
});
    </script>
    </body>
</html>
