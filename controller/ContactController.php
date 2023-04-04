<?php
require_once 'model/ContactModel.php';
class ContactController{

    public  function __construct ()
    {
        $this->contactModel = new ContactModel();
    }

    // Methode de gestionnaire de vues
    public function viewManager(){
        $view = isset($_GET['view'] ) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                $this->includeView('ajout');
                break;
            case 'update':
                 $this->includeView('modification');
                break;    
            
            default:
                $this->includeView();
                break;
        }
        $action =  isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if(isset($_POST['add']))
                {
                    extract($_POST);
                    $this->contactModel->inserer($prenom,$nom,$tel);
                    header("location:/Mes projets/CRUD_MVC_POO/index.php");
                } 
                break;
            case 'supprimer':
                if(isset($_GET['id'] )){
                    $id = $_GET['id'];
                    $resultat = $this->contactModel->supprimer($id);
                    if ($resultat){
                        header("location:/Mes projets/CRUD_MVC_POO/index.php");
                    }
                }    
            break;
            case 'modifier':
                if(isset($_POST['modif']))
                {
                    extract($_POST);
                    $this->contactModel->modifier($prenom,$nom,$tel,$id);
                    header("location:/Mes projets/CRUD_MVC_POO/index.php");
                } 

                break;
            default:
                # code...
                break;
        }
        
    }
  
    /*
    // Affichage de la liste de contacts
    public function liste(){
        include_once 'view/contact/liste.php';
    }
     // Affichage de la vue Ajout contact
    public function formAjout(){
        include_once 'view/contact/ajout.php';
    }
    */
    //Inclure une vue du dossier view/contact 
    public function includeView($page = "liste"){
        if ($page == "liste")
        {
            $contacts = $this->contactModel->lister();
            include 'view/contact/'.$page.'.php';
        }
        else{
            if ($page == "modification" && isset($_GET['id'] )) {
                $contacts = $this->contactModel->findContactById($_GET['id']);
                include 'view/contact/'.$page.'.php';
            }else {
                include 'view/contact/'.$page.'.php';
            }    
        
        }
        
    }
    /*
    public function list()
    {
        
        //include "view/contact/liste.php";
    } 
    */  
}