<?php
  $login=false;
  $showError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            include ("foodconnection.php");
            $username=$_POST["username"];
            $password=$_POST["password"];
            
           
                 $sql="SELECT * FROM `tablecollection` where username= '$username' AND  password= '$password'";
                 $result=mysqli_query($con,$sql);
                 $numb =mysqli_num_rows($result);
                  if($numb==1)
                  {
                    $login=true;
                    session_start();
                    $_SESSION['logindata'] = true;
                    $_SESSION['username'] = $username;
                    header("location:home.php");
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
    <link href="css/style.css" rel="stylesheet">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style/loginstyle1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- font awsome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    
</head>
<body>
<?php include "connectionfiles/_nev.php"?>
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
        <h1 class="text-center text-light">LOGIN TO OUR WEBSITE</h1>
    <div class="container text-light">
        <div class="row">
         <div class="col-lg-8 col-md-8 col-12">   
      <form action=" " method="POST">
            <div class="form-group mb-3 col-md-6">
                <label for="username" class="form-label">USER NAME</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-dark col-md-6">LOGIN<i class="fa-solid fa-user-plus"></i></button>
      </form> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="pngimges/pngwing.png" alt="pngwing" width="100%">
        </div>
      </div>
    </div>
</body>
</html>