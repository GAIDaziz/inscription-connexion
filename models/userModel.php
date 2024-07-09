<?php
require_once "includes/dbConnexion.php";
//definire la class user
class UserModel{
    public static function inscription($lastName,$firstName,$email,$password){
        //etablire conexion
        $dbConnect = DbConnexion::dblog();

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
        $request ->execute();
        //recuperer le resultat dans un tableau
        $user=$request->fetch();
        if (empty($user)){
             header ("Location: http://localhost/task_manager/?url=login");
        }else{
            if(password_verify($password, $user['password'])){
                unset($user['password']);
                //tout ce oasse bien donc on cree les session
                $_SESSION["user_info"]= $user ;
                header ("Location: http://localhost/task_manager/?url=dashboard");
         

            }else{
                header ("Location: http://localhost/task_manager/?url=login");
                $_SESSION['error_message']="login ou mot de pass incorect!";


            }
        
        }
    }
}