<?php

include_once 'C:\xampp\htdocs\kenza\config.php';

class ArticleC{


    static public function afficher(){

        $db=config::getConnexion();

        $sql = "SELECT * FROM article ";
        $liste = $db->query($sql);
        return $liste;


    }
    static public function afficherArticle($id){

        $db=config::getConnexion();

        $sql = "SELECT * FROM article WHERE id=$id ";
        $liste = $db->query($sql);
        return $liste;


    }

    static public function ajouter($nom, $contenu, $ecrivain, $photo){
        $db=config::getConnexion();

        $sql = "INSERT INTO article(id, nom, contenu, ecrivain, photo) VALUES (null, '$nom', '$contenu', '$ecrivain', '$photo')";

        $db->query($sql);

    } 

    static public function supprimer($id){

        $db=config::getConnexion();
        $sql="DELETE FROM article WHERE id=$id";
        $db->query($sql);
    }


    
    static public function modifier($id, $nom, $contenu, $ecrivain){

        $db=config::getConnexion();

$sql="UPDATE article SET nom = '$nom', contenu='$contenu', ecrivain='$ecrivain' WHERE id='$id'";
$db->query($sql);




    }

    static public function ajouterlike($idp, $idu){

        
        
        $db=config::getConnexion();
        $sql = "INSERT INTO likes VALUES (null, $idu, $idp)";
        $db->query($sql);
 
    }
    static public function afficherlikes($idp){
        $db=config::getConnexion();
        $sql = "SELECT count(id) as nb FROM likes where id_post=$idp";
        $liste = $db->query($sql);
        return $liste->fetch();
        


    }

    static public function ajouterdislike($idp, $idu){

        
        
        $db=config::getConnexion();
        $sql = "INSERT INTO dislikes VALUES (null, $idu, $idp)";
        $db->query($sql);
 
    }
    static public function afficherdislikes($idp){
        $db=config::getConnexion();
        $sql = "SELECT count(id) as nb FROM dislikes where id_post=$idp";
        $liste = $db->query($sql);
        return $liste->fetch();
        


    }


}


class CommentaireC{



    public static function ajouter($id_user, $id_post, $contenu){
        $db=config::getConnexion();

        $sql = "INSERT INTO commentaire VALUES (null, '$id_user', '$id_post', '$contenu')";

        $db->query($sql);

    }

    public static function modifier($id, $contenu){

        $db=config::getConnexion();

        $sql="UPDATE commentaire SET  contenu='$contenu' WHERE id=$id";
        $db->query($sql);
    }

    public static function supprimer($id){


        $db=config::getConnexion();
        $sql="DELETE FROM commentaire WHERE id=$id";
        $db->query($sql);
    }

    public static function afficher($id){


        $db=config::getConnexion();

        $sql = "SELECT * FROM commentaire WHERE id_article=$id ";
        $liste = $db->query($sql);
        return $liste;

    }
}