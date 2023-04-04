<?php

class DB{
    private $hot = "localhost";
    private  $user = "root";
    private  $pass="";
    private  $dbname="crud_mvc_poo";
    
    public $ds;
    
    
    public function __construct()
    {
        
 

    //Définir le Domain Server Name
    //set DNS
    $dsn = 'mysql:host='.$this->hot.';dbname='.$this->dbname.';charset=utf8';
    //Option de POO pour la gestion des erreurs
    $tabOptions = array( 
        PDO::ATTR_PERSISTENT=> true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION /**/
    ); 

    //Création d'instance POO
    try
    {
        $this->ds = new PDO($dsn,$this->user,$this->pass, $tabOptions);
    }
    catch(PDOException $e)
    {
       echo $e->getMessage();
    }


    }
}