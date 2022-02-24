<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
<link rel="stylesheet" href="./mvc/app/styles/signup.css">

  </head>
  <body>

<section class="Form my-4 mx-5">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-5">
        <img  src="assets/image9.jpg" alt="" class="img-fluid d-flex align-items-stretch">
      </div>
      <div class="col-lg-7 px-5 py-1">
        <img class="logo py-3" src="assets/logo.png" alt="">
        <h4 class=" py-3">Sign Up</h4>
        <p>sign in to continue to our application</p>
        <form action="./auth/create" method="POST">
          <div class="form-row">
          <div class="col-lg-7">
              <input type="text" placeholder="Full-name" name="full_name" id="" class="form-control my-3 p-3">
            </div>
            <div class="col-lg-7">
              <input type="text" placeholder="User-Name" name="username" id="" class="form-control my-3 p-3">
            </div>
            <div class="col-lg-7">
              <?php
              if(isset($_SESSION['dupli'])){
                echo "<h4 >Cette email est déja exist</h4>";
                unset($_SESSION['dupli']);
              } ?>
              <input type="email" placeholder="Email-Address" name="email" id="" class="form-control my-3 p-3">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <input type="password" placeholder="*******" name="password" id="" class="form-control my-3 p-3">
            </div>
          </div>  
            <div class="form-row">
            <div class="col-lg-7">
              <button  name="submit" class="btn1 mt-3 mb-5">Create Account</button>
              <p >Do You have account <a href="./login">Click</a></p>

            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</div>
  </body>
</html>