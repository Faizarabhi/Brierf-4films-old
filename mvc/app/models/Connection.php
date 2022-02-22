<?php

    class Connection
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database="cinemaste";
        protected $conn;

        public function __construct()
        {

            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
                
                
            
                } catch(PDOException $e) 
                {
                echo "Connection failed: " . $e->getMessage();
                }
                
        }
    }