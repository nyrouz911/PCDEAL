<?php
include_once "C:/xampp/htdocs/projetfinal/config.php";
class reclamationC {
function afficherreclamation()
{   
    $sql="SELECT * FROM reclamation";
    $db = config::getConnexion(); 
    try{
    $req=$db->prepare($sql);
    $req->execute();
    $reclamation= $req->fetchALL(PDO::FETCH_OBJ);
    return $reclamation;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }  
}

function Supprimerreclamation ($id_rec){
    $sql="DELETE  from reclamation where id_rec=$id_rec";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


function ajouterreclamation($reclamation)
{

  $sql="INSERT INTO reclamation (desc_rec,etat_rec,traiter_rec) VALUES(:desc_rec,:etat_rec,:traiter_rec)";
  $db = config::getConnexion();
  try{

        $req=$db->prepare($sql);
      //  $id_rec=$reclamation->get_id_rec();
        $desc_rec=$reclamation->get_desc_rec();
        $etat_rec=$reclamation->get_etat_rec();
        $traiter_rec=$reclamation->get_traiter_rec();
        
     
$test=0;
//$req->bindValue(':id_rec',$id_rec);
$req->bindValue(':desc_rec',$desc_rec);
$req->bindValue(':etat_rec',$etat_rec);
$req->bindValue(':traiter_rec',$test);





            if($req->execute())
            {
            echo "data insrted successul";
                     header("Location:contact.php");
                 
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
}

}



?>