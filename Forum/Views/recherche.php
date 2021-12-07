<?php
    require 'config.php';

    $rech=$_POST['search'];
    $sql='SELECT * FROM forum WHERE titre_q=:rech';
    $statement=$connection->prepare($sql);
    $statement->execute([':rech' => $rech]);
    $result=$statement->fetch(PDO::FETCH_OBJ);
    var_dump($result);
    header("Location: ../Views/showpost.php?id= $result->id_q");






?>