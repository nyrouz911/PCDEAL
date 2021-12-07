<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'DELETE FROM forum WHERE id_q=:id';
$statement = $connection->prepare($sql);
if($statement->execute([':id' => $id]))
 { header("Location: ../Views/feed.php");
}

?>