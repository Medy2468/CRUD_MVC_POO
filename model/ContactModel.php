<?php
    require_once 'Database.php';

    class ContactModel {
          private $database;
          public function __construct()
          {
            $this->db = new DB() ;
          }

          public function inserer($prenom,$nom,$tel)
          {
            $queryPrepare = $this->db->ds->prepare("INSERT INTO contact(prenom,nom,tel) VALUES(?,?,?) ");
            return $queryPrepare->execute(array($prenom,$nom,$tel));
          }

          public function modifier($prenom,$nom,$tel,$id)
          {
            $query = $this->db->ds->prepare("UPDATE contact SET prenom = ?,nom = ?, tel = ? WHERE id = ?");
            return $query->execute(array($prenom,$nom,$tel,$id));
          }

          public function supprimer($id)
          {
            $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id = :idContact"); 
            $sql->bindValue(":idContact",$id);
            return $sql->execute();
          }

          public function lister()
          {
            $query = $this->db->ds->prepare("SELECT * FROM contact ORDER BY nom");
            $query->execute();
            return $query->fetchAll();
          }

          public function findContactById($id)
          {
            $query = $this->db->ds->prepare("SELECT * FROM contact WHERE id = ?");
            $query->execute(array($id));
            return $query->fetch();
          }

    }