<?php

class connection {
        private $db;
        private $host = "localhost";
        private $database = "";
        private $user = "";
        private $password = "";
        public function __construct() {
            try {
                $this->db = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo "" . $e->getMessage();
            }
        }
    }

