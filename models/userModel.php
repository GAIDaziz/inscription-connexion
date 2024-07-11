<?php
require_once "includes/dbConnexion.php";
//definire la class user
class UserModel{
    public static function inscription($lastName,$firstName,$email,$password){
        //etablire conexion
        $dbConnect = DbConnexion::dbLog();

        //preparer la requette
        $request=$dbConnect->prepare(
        
        "INSERT INTO users (lastname,firstname,email,password)
        
        VALUES (:lastname, :firstname, :email, :password)"
        
        
        );

        //executer la requette
        
        $request ->bindParam ('lastname',$lastName);
        
        $request ->bindParam ('firstname',$firstName);
       
        $request ->bindParam ('email',$email);
       
        $request ->bindParam ('password',$password);


        try{
            $request->execute();
            return "201 ok";
        }catch(PDOExeptoin $e){
            echo "500 internal error!".$e->getMessage();
        }
       
    }
    //definire une methode pour se connecter

    public static function connexion ($email, $password){
        //etablire connexion base de données
        $dbConnect = DbConnexion::dbLog();
        //preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM users WHERE email = :mail");
        $request->bindParam(":mail",$email);

        //executer la requete
        try{
            $request->execute();
            $user=$request->fetch();
            
            return $user;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function userlist(){
        //etablir connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
//preparer la requete
        
        $request = $dbConnect->prepare("SELECT * FROM users ");
        //execute requette
        $request->execute();
//recupere le resultat dans un tableau
        $user=$request->fetchAll(PDO::FETCH_ASSOC);
        return $user;

    }
}