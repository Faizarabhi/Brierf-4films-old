<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include('script.php');?>
    <title>cine-master</title>

<style>
 
</style>

<link rel="stylesheet" href="./mvc/app/styles/footer.css"/>
<link rel="stylesheet" href="./mvc/app/styles/navbar.css">
<link rel="stylesheet" href="./mvc/app/styles/home.css">
<!-- 
 -->
</head>
<body>





<!-- Write your code here -->



<div class="navbar">
    <div class="max-width">
        <div class="logo"><a href="./">Cine<span class="point">Master.</span></sapn></a></div>
        <div>
        <ul class="menu">
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">Now Showing</a></li>
            <li><a href="#">Coming Soon</a></li>
            <li><a href="#">Concession</a></li> -->
            <li><a href="./login"> Login in</a></li>
            <li><a href="./signup"> Sign up</a></li>
            
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

    
