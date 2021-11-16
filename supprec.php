<?php

require_once ("C:/xampp/htdocs/projetfinal/model/reclamation.php");
require_once ("C:/xampp/htdocs/projetfinal/controller/reclamationC.php");
$id_rec=$_GET['id_rec'];


$ec= new reclamationC();
$ec->Supprimerreclamation($id_rec);
header('Location: tablesrec.php');  
?>