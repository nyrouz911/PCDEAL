<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'DELETE FROM comment WHERE id_c=:id';
$statement = $connection->prepare($sql);
if($statement->execute([':id' => $id]))
 { header("Location: ../tablescomment.php");
}

?>