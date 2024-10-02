<?php
class Database {
    private $host = "sql5.freemysqlhosting.net";
    private $db_name = "sql5734574";
    private $username = "sql5734574";
    private $password = "dq2tdplSjH";
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Database error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>