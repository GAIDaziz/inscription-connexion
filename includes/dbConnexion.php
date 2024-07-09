<?php

//gestion de connexion avec la base de donnée
 class DbConnexion{
    //declaration en private un atribut representant la liaison avec la bd

    private static $dbConnexion = null;
    //definire le construct
    private function __construct(){
        self::$dbConnexion = new PDO("mysql:host=localhost;port=3307;dbname=task_manager","root","");

    }

    //definire methode statique
    public static function dbLog(){
        if(self::$dbConnexion == null){
            new dbConnexion();
            return self::$dbConnexion;
        }else{
            return self::$dbConnexion;
        }

    }
 }


