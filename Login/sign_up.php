<?php include "connection.php";
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="padding-left: 20rem; padding-right: 20rem;">
            <div class="row">
              <div class="col-lg-12 mb-3">
                  <input type="text" class="form-control" name="fname" placeholder="First Name">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="text" class="form-control" name="lname" placeholder="Last Name">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
              </div>
              <div class="col-lg-12 mb-3">
                  <input type="number" class="form-control" name="phone" placeholder="Phone no.">
              </div>
              <div class="col-lg-12 mb-3">
                <span>Already have an account? <a href="login.php">Login</a></span>
            </div>
              <div class="col-lg-12 mb-3">
                <center>
                    <button name="sign_up" class="btn btn-primary">Sign Up</button>
                </center>
            </div>
            </div>
        </form>
      </div>

      <?php

        if(isset($_POST['sign_up'])) {
          $fname = mysqli_real_escape_string($con,$_POST['fname']);
          $lname = mysqli_real_escape_string($con,$_POST['lname']);
          $email = mysqli_real_escape_string($con,$_POST['email']);
          $pasword = mysqli_real_escape_string($con,$_POST['password']);
          $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
          $phone = mysqli_real_escape_string($con,$_POST['phone']);

          $hash_pass = password_hash($pasword,PASSWORD_BCRYPT);

          $sql = "SELECT * FROM `useraccount` WHERE email='$email'";
          $sql2 = "SELECT * FROM `useraccount` WHERE 'phone no'='$phone'";
          $query = mysqli_query($con,$sql) or die("Select Query error");
          $query2 = mysqli_query($con,$sql2) or die("Select Query2 error");

          $emailcount = mysqli_num_rows($query);
          $phonecount = mysqli_num_rows($query2);

          if($emailcount > 0){
            echo "Email already exist";
          }
          else {
            if($phonecount > 0){
              echo "Phone no already exist";
            }
            else{
              if($pasword===$cpassword){
                $insert="INSERT INTO `useraccount`(`first name`, `last name`, `email`, `password`, `phone no`) VALUES ('$fname','$lname','$email','$hash_pass','$phone')";
                $iquery = mysqli_query($con,$insert);
              }
              else {
                echo "incorrect password";
              }
            }
          }

        }

      ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>