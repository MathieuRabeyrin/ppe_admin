<?php
    class Db 
    {
        protected function dbConnect()
        {
            try {
                $dsn = "mysql:host=localhost;dbname=client_ligue;charset=utf8";
                $opt = array(
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                );
                return new PDO($dsn,'admin','password', $opt);
            } catch (Exception $e) {
                die ('Erreur : ' .$e->getMessage());
            }
        }
    }
?>