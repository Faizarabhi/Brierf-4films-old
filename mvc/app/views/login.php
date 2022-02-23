<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./mvc/app/styles/login.css">
        <title>Hello, world!</title>
    
    <style>
 
    </style>
  </head>
  <body>

<section class="Form my-4 mx-5">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-5">
        <img  src="assets/image2.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-lg-7 px-5 py-5">
        <img class="logo py-3" src="assets/logo.png" alt="">
        <h4 class=" py-3">Sign into you account</h4>
        <form action="./auth/login" method="POST">
          <div class="form-row">
            <div class="col-lg-7">
              <input type="email" placeholder="Email-Address" name="email" id="" class="form-control my-3 p-4">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <input type="password" placeholder="*******" name="password" id="" class="form-control my-3 p-4">
            </div>
          </div>  
            <div class="form-row">
            <div class="col-lg-7">
              <button   class="btn1 mt-3 mb-5"> Login in</button>
            </div>
          </div>
          <a href="#">Forget Password</a>
          <p >Don't have account? <a href="./signup">Register Here</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- // a[href="#"]
assets/login.jpg -->

































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
