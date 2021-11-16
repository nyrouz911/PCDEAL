<?php
include_once "C:/xampp/htdocs/projetfinal/config.php";
class catrecC
{


function affichercatrec()
{
    $db = config::getConnexion();
        $sql="SELECT * FROM catrec";
    try{
    $req=$db->prepare($sql);
    $req->execute();
    $catrec= $req->fetchALL(PDO::FETCH_OBJ);
    return $catrec;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }  
}

function Supprimercatrec($id_catrec){
    $sql="DELETE  from catrec where id_catrec=$id_catrec";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


function ajoutercatrec($catrec)
{

  $sql="INSERT INTO catrec (id_catrec,nom_catrec) VALUES(:id_catrec,:nom_catrec)";
  $db = config::getConnexion();
  try{

        $req=$db->prepare($sql);
        $id_catrec=$catrec->get_id_catrec();
        $nom_catrec=$catrec->get_nom_catrec();
        
     

$req->bindValue(':id_catrec',$id_catrec);
$req->bindValue(':nom_catrec',$nom_catrec);



            if($req->execute())
            {
            echo "data insrted successul";
                     header("Location:tables.php");
                 
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
}


function modifiercatrec($catrec,$id_catrec){
    $sql="UPDATE catrec SET  id_catrec=:id_catrec , nom_catrec=:nom_catrec     WHERE id_catrec=$id_catrec";
    $db = config::getConnexion();

    try{
       $req=$db->prepare($sql);        
   $id_catrec=$catrec->get_id_catrec();
    $nom_catrec=$catrec->get_nom_catrec();
    
 

    $req->bindValue(':id_catrec',$id_catrec);
    $req->bindValue(':nom_catrec',$nom_catrec);
    

           
         if($req->execute())
        {
            echo "data insrted successul";
                 header("Location:tables.php");
             
        }
    }
    catch (Exception $e){

        echo 'Erreur: '.$e->getMessage();
    }
    }


    function catrec_details($id_catrec)
    {

        $sql="SELECT *  FROM catrec  where id_catrec = $id_catrec";
        $db = config::getConnexion();
        try{
        $catrec=$db->query($sql);
        return $catrec;
        }
        catch (Exception $e){
            
            die('Erreur: '.$e->getMessage());
        }
    }
   
    

}



?>