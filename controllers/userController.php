<?php
require_once "models/userModel.php";


class UserController{
    private $lastName;
    private $firstName;
    Private $email;
    private $password;


    public function __construct($la,$fi,$em,$pswd){
        $this->lastName = $la ;
        $this->firstName = $fi ;
        $this->email = $em ;
        $this->password = password_hash($pswd,PASSWORD_DEFAULT) ;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    //? setters
    public function setLastName($la)
    {
        $this->lastname = $la;
    }

    public function setFirstName($fi)
    {
        $this->firstname = $fi;
    }

    public function setEmail($em)
    {
        $this->email = $em;
    }

    public function setPassword($pswd)
    {
        $this->password = $pswd;
    }
    //definire la methode inscription qui vas verifier si les attribut ne sont pas vide 
    public function register (){
        if (empty($this->lastName)||empty($this->firstName) || empty($this->email)|| empty($this->password)){
            echo"veuillez remplire tout le formulaire!<br>";
        }
        else{
            //appele du model userModel

        UserModel::inscription($this->lastName,$this->firstName,$this->email,$this->password);       
     }
}



    //methode pour connecter le user
    public static function login($email, $password){
        UserModel::connexion ($email, $password);

    }
}
