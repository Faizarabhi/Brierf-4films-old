<style>
    
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
            width: 100%;
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
          left: 20%
          ;color: #000;
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



   <?php 
    require_once('componenet/navbar.php');
    ?>
<!-- //show post o cmmetair dyalo  -->

<div class="row py-5 px-4">
    <div class="col-md-5 w-75 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-scroll">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">Mark Williams</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Web Developer</p>
                    <p class="font-italic mb-0">Lives in New York</p>
                    <p class="font-italic mb-0">Photographer</p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Add Post</a>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div> -->
                
<div class="wrapper">
    <div class="card text-center">
        <div class="image">
            <img src="assets/image1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div>  
    <div class="card text-center">
        <div class="image">
            <img src="assets/image3.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div>   
    <div class="card text-center">
        <div class="image">
            <img src="assets/images/post-10.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div> 
    <div class="card text-center">
        <div class="image">
            <img src="assets/images/post-1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div> <div class="card text-center">
        <div class="image">
            <img src="assets/images/post-1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div> 
    <div class="card text-center">
        <div class="image">
            <img src="assets/images/post-1.jpg" width="300" height="270px" alt="">
        </div>
        <div class="about-film text-center">
            <h3>Title film1</h3>
            <h4>chi <small>haja</small></h4>
            <button class="btn btn-success button">Show more</button>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
</div>


<?php 
    require_once('componenet/footer.php');
    ?>
