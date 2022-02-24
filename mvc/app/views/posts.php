<?php
require_once('componenet/navbar.php');

$posts = new PostController();
$posts = $posts->selectPosts();

?>


<div class="container d-flex flex-column">
    <?php foreach ($posts as $post) : ?>
        <div class="post d-flex align-items-center">

            <img src="assets/images/p-1.jpg" class="w-25" alt="">

            <div class="description ms-5 d-flex flex-column">
                <div>
                    <h1><?= $post['title']; ?></h1>
                    <p><?= $post['description']; ?> <span style="color:gray" ;>nostrum minima eos impedit nam aliquid est recusandae. Rerum eum rem veritatis facere nam qui ea saepe autem explicabo eligendi?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Atque sint facilis soluta ......</span>
                </div>
                <div>

                </div>
                <form action="">
                    <input type="hidden" name="idPost" value="<?= $post['post_id']; ?>">
                    <button type="button" class="btn btn-dark w-25">View more</button>
                </form>
            </div>
        </div>


    <?php endforeach; ?>

</div>


</div>


<?php
require_once('componenet/footer.php');
?>