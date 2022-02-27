<?php
require_once('componenet/navbar.php');
if(!isset($_POST["idPost"])){
    header("location: /posts");
    return;
}

$posts = new PostController();
$authController = new AuthController();
$id = $_POST["idPost"];


$post = $posts->showPost($id);

$user = $authController->selectuser($post["id_user"]);
// var_dump($_SESSION); 
?>
<div class="container d-flex flex-column">
    <div>
        <!-- Photo -->
     <p>user name is <?=$user["full_name"]?></p>   
     <!-- la date -->
    </div>
<div class="post d-flex align-items-center">

<img src="assets/images/p-1.jpg" class="w-25" alt="">

<div class="description ms-5 d-flex flex-column">
    <div>
        <h1><?= $post['title']; ?></h1>
        <p><?= $post['description']; ?>
    </div>
    <div>
<!-- if user name == session iduser n afficher modifier o remove -->
    </div>
    
</div>
</div>
    <?php // foreach ($comments as $coment) : 
    ?>

    <div class="allcmnts p-5">
        <div class="cmnt d-flex border border-dark align-items-center w-100 ">
            <div class="h-25 w-25">
                <img src="assets/profil.jpg" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="comment w-75 ms-5 ">
                <a href="#">Taha Lachgar</a>
                <p>ana lcommentair en personne Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque odio ipsa vitae voluptate voluptatem, illo exercitationem sed consequatur soluta architecto explicabo, neque harum. Neque, ex?</p>
            </div>
        </div>
    </div>
    <?php //endforeach; 
    ?>

    <?php
    require_once('componenet/footer.php');
    ?>













































    <?php
    require_once('componenet/footer.php');


    ?>