<?php
require_once('componenet/navbar.php');
$posts = new PostController();
$posts = $posts->selectPosts();
?>
<!-- //show post o cmmetair dyalo  -->

<div class="row py-5 px-4">
    <div class="col-md-5 w-75 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded ">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5">
                        <h4 class="mt-0 mb-0">Mark Williams</h4>
                        <h5>email@gmail.com</h5>
                        <a href="./logout">Logout</a>
                        <!-- <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p> -->
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Number Posts</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Number Comments</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Genre Films</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Web Developer</p>
                    <p class="font-italic mb-0">Lives in New York</p>
                    <p class="font-italic mb-0">Photographer</p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="./addpost" class="add btn btn-link text-muted">Add Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
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




    <?php
    require_once('componenet/footer.php');
    ?>