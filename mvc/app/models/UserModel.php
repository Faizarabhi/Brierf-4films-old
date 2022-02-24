<?php


    class UserModel extends Connection{

        // insert new user
        protected $table = "users";

        public function insert($data)
        {
            $keys = array_keys($data);
    
            $columns = implode(",", $keys);
    
            $placeholders = implode(",", array_map(function ($key) {
                return ":$key";
            }, $keys));
    
            $query = $this->conn->prepare("insert into ".$this->table." ($columns) values ($placeholders)");
    
            return $query->execute($data);
        }
        public function selectbyEmail($email)
    {
        $query = $this->conn->prepare("SELECT * FROM ".$this->table." where email = :email");
        $query->execute(["email" => $email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    

}