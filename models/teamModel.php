<?php
require_once "includes/dbConnexion.php";
class teamModel{
    public static function createTeam($name , $members){
        //connexion a la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requette
        $request = $dbConnect -> prepare ("INSERT INTO teams (team_name) VALUES (:nom)");
        $request->bindParam(':nom',$name);
        $request->execute();
        
        
        #debut jeudi a distance 

        //recpere l'éditanfiant de la derniere insserssion
$lastInserteId = $dbConnect-> lastInsertId();
//insertion pour chaque element du tableaux

/*foreach($members as $member){
    $request = $dbConnect->prepare (" INSERT INTO user_teams (user_id, team_id)
vallues(:user,: team)");
$request->bindParm(':user',$member);
$request->bindParm(':team',$lastInserteId);
try{
    $request->execute();
    return true;
}catch(PDOExeption $e){
    return "internal error";
}
}*/
    }
}

