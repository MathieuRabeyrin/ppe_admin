<?php
    require_once("./src/model/AdminDashboard.php");
    session_start();

    class FormController
    {
        public $form;
        
        public function __construct($formData)
        {
            $this->form = $formData;
        }

        public function isValid()
        {
            $fields = ["lastname", "firstname", "age", "mail"];

            foreach ($fields as $field) {
                if (empty($this->form[$field])) {
                    $_SESSION['error'] = "Tous les champs sont obligatoires";
                    return FALSE;
                }
            }
            return TRUE;
        }

        public function submitForm()
        {
            $db = new AdminDashboard();
            $db->addUser(
                $this->form["lastname"],
                $this->form["firstname"],
                $this->form["age"],
                $this->form["mail"],
            );
        }

        public function updateForm($id)
        {
            $db = new AdminDashboard();
            $db->updateUser(
                $id,
                $this->form["lastname"],
                $this->form["firstname"],
                $this->form["age"],
                $this->form["mail"],
            ); 
        }
    }
?>