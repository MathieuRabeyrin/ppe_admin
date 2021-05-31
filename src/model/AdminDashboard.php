<?php
    require_once("./src/model/Db.php");

    class AdminDashboard extends Db 
    {
        private $db;

        public function __construct()
        {
            $this->db = $this->dbConnect();
        }

        public function getAllUsers()
        {
            $response = $this->db->query("SELECT * FROM clients");
            return $response->fetchAll();
        }

        public function getUser($id)
        {
            $query = $this->db->prepare("SELECT * FROM clients WHERE id_client = ?");
            $query->bindValue(1, $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }

        public function deleteUser($id)
        {
            $query = $this->db->prepare("DELETE FROM clients WHERE id_client = ?");
            $query->bindValue(1, $id, PDO::PARAM_INT);
            $query->execute();
            return $query;
        }

        public function addUser($lastname, $firstname, $age, $email)
        {
            $query = $this->db->prepare("INSERT INTO clients (nom, prenom, age, email) VALUES (:lastname, :firstname, :age, :email)");
            $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
            $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
            $query->bindParam(":age", $age, PDO::PARAM_INT);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->execute();
            return $query;
        }

        public function updateUser($id, $lastname, $firstname, $age, $email)
        {
            $query = $this->db->prepare("UPDATE clients SET nom = :lastname, prenom = :firstname, age = :age, email = :email WHERE id_client = :id");
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
            $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
            $query->bindParam(":age", $age, PDO::PARAM_INT);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->execute();
            return $query;
        }
    }

?>