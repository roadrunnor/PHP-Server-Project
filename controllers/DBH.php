<?php 
    /* Database Handler PDO Connection */
    class DBH {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $charset;

        public function connect(){
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "Toscane2000**";
            $this->dbname = "wsphp_projet";
            $this->charset = "utf8mb4";

            /* PBO Connection Source : https://www.youtube.com/watch?v=yWJFbPT3TC0 (Dani Krossing) */
            try {
                /* Data Source Name */
                $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                /* PDO Connection */
                $pdo =  new PDO($dsn, $this->username, $this->password);
                /* last thing to connect to my Database using other ClASSES is to RETURN this PDO  */
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                /* Connexion ok */
                echo "PDO Connection is Successfull";
                return $pdo;
            } catch (PDOException $e) {
                echo "Connection failed: ".$e->getMessage();
            }
        }
    }
?>