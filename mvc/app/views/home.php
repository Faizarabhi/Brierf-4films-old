
   <?php 
    require_once('componenet/navbar.php');
    ?>
    <style>
      
        .carousel-item{
            height: 100vh;
            min-height: 300px;
            background: 300px;
            background: no-repeat scroll;
            background-size:cover;
            z-index: -1;
        }
        .carousel-item::before{
            content : "";
            display :block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            /* background-color: #a80000; */
            background-color: #2a0182;
            opacity: 0.4;
        }
        .carousel-caption{
            bottom: 180px;
            padding-left: 100px;
            padding-right: 100px;

        }
        .carousel-caption h5{
            font-size: 42px;
            font-weight: 700;
            
        }
        .carousel-caption p{
            font-size:18px;
            top: 2em;
        }
        .slider-btn{
            margin-top: 30px;

        }
        .slider-btn .btn{
            color:#fff;
            background-color:#2a0182;
            columns: #fff;
            border-radius: 0;
            padding: 1.5rem 2rem;
            font-size: 1.2rem;
            font-weight: 600;
            width: 15vw;
            margin-right: 15px;
            

        }
        .slider-btn .btn-2{
            color:#2a0182;
            background-color:#fff;
        }
        .bg{
            background-color:#000;
            
        }
        
        .wrapper{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background-color: #000;
        }
        .card{
            background-color: #2a0182;
            width: 320px;
            height: 420px;
            margin: 10px;
            border-style: 0 0 5px #a80000;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-align: center !important;
        }
        .card::before{
          background: #a80000;
          position: absolute;
          width: 100%;
          height: 100%;
          content: "" ;
          top: -50%;
          transform: skewY(345deg);
          transition: 1s ease-in;
      }
      .card:hover::before{
          top :-70%;
          transform: skewY(390deg);
      }
      .image{
          position: absolute;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;

      }
      .image img{
          max-width: 100%;

          transition: 0.7s ease-in;
          border-radius: 5px;


      }
      .card:hover .image img{
          width: 80%;
      }
      .about-film{
          position: absolute;
          bottom: -50px !important;
          left: 20%;color: #fff;
          text-align: center;
          transition: 1s ease-in;

      }
      .card:hover .about-film{
          bottom: 15px !important;
      }
      .card .button{
        color: #fff;
        width: 150px;
        background-color: #a80000;
        margin-top: 20px;
        border:none;
      }
      .about-film h3{
          margin-left : 25px;
      }
    </style>
    <a href="./signup"> Sign up</a>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image8.jpg" class="d-block w-400" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SPACE FORCE CAST MAKE A CASE FOR YOUR WEEKEND BINGE OF SEASON 2</h5>
        <p>TAWNY NEWSOM E, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.TAWNY NEWSOM E, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.TAWNY NEWSOM E, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.TAWNY NEWSOM E, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.</p>
      <div class="slider-btn">
      <div class="btn btn-1 " ><a href="/signup.php"> Sign up</a></div>
          <div class="btn btn-2">Log in</div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>SPACE FORCE CAST MAKE A CASE FOR YOUR WEEKEND BINGE OF SEASON 2</h5>
        <p>TAWNY NEWSOME, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.</p>

        <div class="slider-btn">
          <div class="btn btn-1">Sign up</div>
          <div class="btn btn-2">Log in</div>
      </div>  
    </div>
   
    </div>
    <div class="carousel-item">
      <img src="assets/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>SPACE FORCE CAST MAKE A CASE FOR YOUR WEEKEND BINGE OF SEASON 2</h5>
        <p>TAWNY NEWSOME, BEN SCHWARTZ, DIANA SILVERS, AND JIMMY O. YANG CLUE US IN ON SEASON 2 OF THE NETFLIX COMEDY.</p>

        <div class="slider-btn">
        <div class="btn btn-1">Sign up</div>
          <div class="btn btn-2">Log in</div>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="bg">

<div class="container">



<!-- <div class="wrapper">
    <div class="card text-center">
        <div class="image">
            <img src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div>
</div> -->

<div class="wrapper">
    <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div>      <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div>     <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div>     <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div>     <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div>     <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button"><a href="./post">Show more</a></button>
        </div>
    </div> 
</div>


















<?php 
    require_once('componenet/footer.php');
    ?>
</body>
</html>