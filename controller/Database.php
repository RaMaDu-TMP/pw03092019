<?php
    class DB {
        private $host = 'localhost';
        private $db = 'bdweb';
        private $user = 'root';
        private $pass = '';

        private $conn;

        function __contruct() {
            $this->conn = new PDO('mysql:'.
                                'host='.$this->host.
                                ';dbname='.$this->db.
                                ';charset=utf8mb4',
                                $this->user,
                                $this->pass
                            );
        }

        function connection() {
            return $this->conn;
        }
    }
?>