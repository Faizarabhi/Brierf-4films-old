<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include('script.php');?>
    <title>cine-master</title>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        

    }
    .max-width{
        max-width: 1300px;
        padding: 0 80px;
        margin : auto;
    }
    /* Nav bar Styling */
    .navbar{
        width: 100%;
        padding: 30px 0;
        background-color: #fff;
        font-family: 'poppins',sans-serif;
        transition: all 0.3s ease;
    }
    .navbar.sticky{
        position: fixed;
        padding: 30px 0;
        top: 0;
        background-color:#2a0182;
        z-index: 99;
        
    }
    
    .navbar .max-width{
        display : flex;
        align-items: center;
        justify-content: space-between;
    }
    .navbar .logo a{
        color: #a80000;
        font-size: 35px;
        font-weight: 600;
        text-decoration: none;

    }
    .navbar .logo a span{
        color:#2a0182;
        transition: all 0.3s ease;
    }
    .navbar.sticky .logo a span{
        color:#fff;
    }
    .navbar .menu ul{

    }
    .navbar .menu li{
        list-style: none;
        display: inline-block;
    }
    .navbar .menu li a{
        color: #a80000;
        font-size: 18px;
        font-weight: 500;
        margin-left: 25px;
        text-decoration: none;

        transition:color 0.3s ease;

    }
    .navbar.sticky .menu li a{
        color: #a80000;
        transition: all 0.3s ease;
    }
    
    .navbar .menu li a:hover{
        color:crimson;
        font-weight: 800;
    }
    /* menu btn styling */
    .menu-btn{
        color:#a80000;
        font-size: 23px;
        cursor: pointer;
        display: none; 

    }



.container{
    margin-top: 2vw;
}


/* resonsive media query start */
@media (max-width:947px){
    .max-width{
        padding: 0 50px;
        
    }
    .menu-btn{
        display: block;
        z-index: 100;
    }
    .menu-btn i.active:before{
        content: "\f00d";
    }
    .navbar .menu{
        position: fixed;
        height: 100vh;
        width: 100%;
        left: -100%;
        top: 0;
        background:#2a0182;
        text-align: center;
        padding-top: 36%;
    }
    .navbar .menu.active{
        left :0;
        transition : all 0.3s ease;

    }
    .navbar .menu li {
        display: block;
    }
    .navbar .menu li a{
        display: inline-block;
        margin: 20px 0;
        font-size: 25px;
    }
}
</style>

</head>
<body>





<!-- Write your code here -->



<div class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#">Cine<span class="point">Master.</span></sapn></a></div>
        <div>
        <ul class="menu">
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">Now Showing</a></li>
            <li><a href="#">Coming Soon</a></li>
            <li><a href="#">Concession</a></li> -->
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul></div>
        <div class="menu-btn">
        <i class="fa fa-bars"></i>
        </div>
    </div>
</div>




<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{

            $('.navbar').removeClass("sticky");
        }
    })
});
// toggle menu/navbar script
$(`.menu-btn`).click(function(){
    $(`.navbar .menu`).toggleClass("active");
    $(`.menu-btn i`).toggleClass("active");
});
// toggle makhdamach
</script>

    
