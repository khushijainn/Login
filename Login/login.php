<?php
session_start();
include "connection.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <h1 class="text-center py-5">Sign Up</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST' style="padding-left: 20rem; padding-right: 20rem;">
            <div class="row">
              <div class="col-lg-12 mb-3">
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="col-lg-12 mb-3">
                <span>New to our website? <a href="sign_up.php">sign up</a></span>
            </div>
              <div class="col-lg-12 mb-3">
                <center>
                    <button name='login' class="btn btn-primary">Login</button>
                </center>
            </div>
            </div>
        </form>
      </div>

      <?php

        if(isset($_POST['login'])) {
           $email = mysqli_real_escape_string($con,$_POST['email']);
           $password = mysqli_real_escape_string($con,$_POST['password']);

            $sql = "SELECT * FROM `useraccount` WHERE email = '$email'";
            $query = mysqli_query($con,$sql) or die("Select query error");
            $email_check = mysqli_num_rows($query);
             if($email_check){

               $row = mysqli_fetch_assoc($query);
               $hash_pass = $row['password'];
               $_SESSION['user']=$row['first name'];
               $pass_verify = password_verify($password,$hash_pass);
               if($pass_verify){
                 echo "Login successful";
                 header("location:user.php");
               }
               else{
                 echo "Login failed";
               }
              
             }
             else{
               echo "Email not found";
             }
        }
        
      ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>