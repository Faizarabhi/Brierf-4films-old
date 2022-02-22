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
    <style>
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  background-color: #a80000;
}
.row{
  background-color : #fff;
  border-radius: 30px;
  /* box-shadow : 12px 12px 22px #2a0182; */
}
.img-fluid{
  border-top-left-radius : 30px;
  border-bottom-left-radius : 30px;
}
.logo{
  width: 100%;
}
.container{
  margin-top: 10%;
}
  
.btn1{
  border: none;
  outline: none;
  height: 50px;
  width: 100%;
  background-color: #2a0182;
  color: #fff;
  border-radius: 4px;
  font-weight:bold;
}
.btn1:hover{
  background-color: #fff;
  border:1px solid;
  color :#2a0182;
}


    </style>
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