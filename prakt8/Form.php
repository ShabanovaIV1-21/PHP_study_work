<?php
//It describes the form on the site
class Form
{ //fields of the form
    public $login;
    public $password;
    public $email;
    public $phone;
    public $userfile;


    public function __construct()
    {
        $this->login = $_POST["login"];
        $this->password = $_POST["password"];
        $this->email = $_POST["email"];
        $this->phone = $_POST["phone"];
        $this->userfile = $_FILES["userfile"];
    }

    public function deleteFile() //It deletes saved user's file
    {
        unlink($this->userfile["name"]);
    }

    public function saveFile() //It saves user's file from the form
    {
        move_uploaded_file($this->userfile["tmp_name"], $this->userfile["name"]);
        $this->deleteFile();
        
        return $this->userfile["name"];
    }
}
