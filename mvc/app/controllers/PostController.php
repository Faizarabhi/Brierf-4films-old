<?php
class PostController
{
    public function addpost()
    {   

        
        if (isset($_POST['add'])) {
            $addp = new PostModel();
            $isCreated = $addp->addpost(array_remove(['add'], $_POST), $_SESSION['id_user']);
            if ($isCreated) {
                header("location: ../user");
            }
        }
    }

    public function selectPosts()
    {
        $getPost = new PostModel();
        return $getPost->getAllPosts();
    }
    public function selectPostsuser()
    {
        $getPost = new PostModel();
        return $getPost->getALLPostsByid($_SESSION['id_user']);
    }

    // public function selectPost()
    // {
    //     if(isset($_POST['vMore']))
    //     {
    //         $id = $_POST['idPost'];
    //         $_SESSION['id'] = $id;
    //         header("location: ../onepost");
    //     }
    // }
    public function showPost($id)
    {
        $getPost = new PostModel();
        return $getPost->getPost($id);

    }

    public function updatePost($id)
    {
    }
    public function removePost($id)
    {
        if (isset($_POST['deleteP'])) {
            $delp = new PostModel();
            $isCreated = $delp->deletePost("post", ["post_id" => $_POST['id']]);
            if ($isCreated) {
                header("location: ./");
            }
        }
    }
}
