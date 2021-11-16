<?php

require_once ("C:/xampp/htdocs/projetfinal/model/catrec.php");
require_once ("C:/xampp/htdocs/projetfinal/controller/catrecC.php");
$id_catrec=$_GET['id_catrec'];


$ec= new catrecC();
$ec->Supprimercatrec($id_catrec);
header('Location: tables.php');  
?>




