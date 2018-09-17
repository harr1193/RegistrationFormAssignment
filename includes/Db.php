<?php
    class Db {
        private $host;
        private $username;
        private $password;
        private $dbname;
        private $dsn;
        private $options;

        protected function connect() {
            $this->host = "tcp:registrationform2063.database.windows.net,1433";
            $this->username = "harr1193";
            $this->password = "~Pickles";
            $this->dbname = "registration_form"; 
            $this->dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $this->options = [];
            try {
                $conn = new PDO("sqlsrv:server = tcp:registrationform2063.database.windows.net,1433; Database = registration_form", "harr1193", "~Pickles");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
            catch (PDOException $e) {
                print("Error connecting to SQL Server.");
                die(print_r($e));
            }
            
        }

        public function install() {
            $connection = $this->connect();
            $sql = file_get_contents("init.sql");
            $connection->exec($sql);
            echo "Database and table users created successfully.";
        }
    }
?>