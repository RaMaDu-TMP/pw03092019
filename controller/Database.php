<?php
    class Database {
        private $host = 'localhost';
        private $db = 'bdweb';
        private $user = 'root';
        private $pass = '';

        private $conn;

        function __construct() {
            try {
                $this->conn = new PDO('mysql:'.
                                    'host='.$this->host.
                                    ';dbname='.$this->db.
                                    ';charset=utf8mb4',
                                    $this->user,
                                    $this->pass
                                );

                $this->conn->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            } catch(Trowable $e) {
                die("ERROR: Could not connect. ".$e.getMessage());
            }
        }

        function connection() {
            return $this->conn;
        }
    }
?>