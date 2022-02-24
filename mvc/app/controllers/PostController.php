<?php 
    class PostController{
        public function addpost()
        {
            
            if (isset($_POST['add'])) {
                $addp = new PostModel();
                $isCreated = $addp->addpost( array_remove(['add'], $_POST), $_SESSION['id']);
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
    public function selectAllPost(){


    }
    

    public function updatePost($id){

    }
    public function removePost($id){
        if (isset($_POST['deleteP'])) {
            $delp = new PostModel();
            $isCreated = $delp->deletePost("post", ["post_id" => $_POST['id']]);
            if ($isCreated) {
                header("location: ./");
            }
        }
    }
    }