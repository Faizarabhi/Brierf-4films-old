<?php

class PostModel extends Connection{
    protected $table ="post";
            //  get post 
    public function getALLPosts()
    {


        
        
        

        
        
        $stmt = $this->conn->prepare('SELECT 
                            post.id as post_id,
                            users.id as user_id,
                            users.full_name as full_name,
                            users.username as username,
                            users.email as user_email,
                            post.title as title,
                            post.photo as photo,
                            post.movieName as movieName,
                            post.published_at as date_publier,
                            post.genre as genre,
                            post.description as description,
                            FROM $this->table
                            INNER JOIN users
                            ON post.id_user= users.user_id
                            ORDER BY post.id DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function getPost($id)
    {

        
        $stmt = $this->conn->prepare('SELECT 
                            post.id as post_id,
                            users.id as user_id,
                            users.full_name as full_name,
                            users.username as username,
                            users.email as user_email,
                            post.title as title,
                            post.photo as photo,
                            post.movieName as movieName,
                            post.published_at as date_publier,
                            post.genre as genre,
                            post.description as description,
                            FROM $this->table 
                            INNER JOIN users
                            ON post.id_user= users.user_id
                            WHERE post.id = $id
                            ORDER BY post.id DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
public function addPost($data, $user_id)
    {
    
        
        $query = $this->conn->prepare("INSERT INTO $this->table (id_user,title, photo,movieName, description, genre) values (:user,:title, :photo, :movieName, :description, :genre)");
        
        return $query->execute([...$data, "user" => $user_id]);
    }

    public function deletePost($table, $data)
    {
        $query = $this->conn->prepare("DELETE FROM $table WHERE id=:post_id");

        return $query->execute($data);
    }

    
        }
        

    
