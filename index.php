<?php
session_start();

require_once "controllers/userController.php";
require_once "controllers/teamController.php";



$url = isset($_GET['url']) ? $_GET['url'] : "login";



switch($url){
    case "register":
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $lastNam = $_POST['nom'];
            $firstName = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['mdp'];
  
        $user = new UserController ($lastNam,$firstName,$email,$password);   
        $user->register();
        }
        else{require_once "views/register.php";}
        break;

    case "login";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $email=$_POST['email'];
            $password = $_POST['mdp'];
            UserController::login($email, $password);

        }else {
            if (isset($_session["user_info"])){
                require_once "views/dashboard.php";
            }else{
              require_once "views/login.php";   
            }
        }  
        break;   

        case "dashboard":
            require_once "views/dashboard.php";
            break;
        
        case "logout":
            UserController::logout();
            break; 
            
            
        case "add_team":
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $teamName = $_POST ['nom'];
                $teamMembers= $_POST['members'];
                TeamController::addTeam( $teamName, $teamMembers);
            }else{
            $listUser = UserController::getUserList();
            require_once "views/add_team.php";
            }
            break;
         

        default:
            echo "404 cette page n'éxiste pas";    


}