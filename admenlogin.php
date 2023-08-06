<?php
  $login=false;
  $showError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            include ("./foodconnection.php");
            $username=$_POST["admenname"];
            $password=$_POST["passworddata"];
            
           
                 $sql="SELECT * FROM `admenpassword` WHERE `admenname`= '$username' AND `passworddata`='$password'";
                 $result=mysqli_query($con,$sql);
                 $numb =mysqli_num_rows($result);
                  if($numb==1)
                  {
                    // echo "connect data";
                    $login=true;
                    session_start();
                    $_SESSION['loginvalue'] = true;
                    $_SESSION['admenname'] = $username;
                    header("location:displayfood.php");
                  } 
            
            else
            {
               
                $showError="plese enter right password";    
            }


        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="shortcut icon" type="image/png" href="pngimges/fireimg1.png">
    <link rel="stylesheet" href="style/loginstyle1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- font awsome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    
</head>
<body>
<?php include("admen/_nevadmen.php")?>
<?php
    if($login){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>signup!</strong> You are login .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>signup!</strong> '. $showError .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        ?>
        <h1 class="text-center text-light">LOGIN ADMEM PANAL</h1>
    <div class="container text-light">
        <div class="row">
         <div class="col-lg-8 col-md-8 col-12">   
      <form action=" " method="POST">
            <div class="form-group mb-3 col-md-6">
                <label for="username" class="form-label">USER NAME</label>
                <input type="text" class="form-control" id="username" name="admenname" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="passworddata" id="exampleInputPassword1" required>
            </div>
            <button type="submit" name="submitdata"   class="btn btn-dark col-md-6">LOGIN PANAL<i class="fa-solid fa-user-plus"></i></button>
      </form> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="pngimges/pngwing.png" alt="pngwing" width="100%">
        </div>
      </div>
    </div>
</body>
</html>