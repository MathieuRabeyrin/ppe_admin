<?php
    class Db 
    {
        protected function dbConnect()
        {
            try {
                $dsn = "mysql:host=localhost;dbname=league_customers;charset=utf8";
                $opt = array(
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                );
                return new PDO($dsn,'root','', $opt);
            } catch (Exception $e) {
                die ('Erreur : ' .$e->getMessage());
            }
        }
    }
?>