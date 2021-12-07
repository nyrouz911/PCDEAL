<?php
  require 'config.php';
    $user="1";
    $getid=(int)$_GET['id'];
    $check=$connection->prepare('SELECT * FROM forum WHERE id_q=:getid');
    $check->execute([':getid' => $getid]);
    if($check->rowCount()==1){
        $check_like=$connection->prepare('SELECT * FROM likep WHERE post_like=:getid AND user_like=:user');
        $check_like->execute([':getid' =>$getid , ':user' => $user]);

        if($check_like->rowCount()== 1)
        {
            $del=$connection->prepare('DELETE FROM likep WHERE post_like=:getid AND user_like=:user');
            $del->execute([':getid' =>$getid , ':user' => $user]);
        }
        else{
            $sql='INSERT INTO likep (post_like,user_like) VALUES (:getid,:user)';
        $statement=$connection->prepare($sql);
        $statement->execute([':getid' => $getid , ':user' => $user]);
        }        

      header("Location: ../Views/showpost.php?id= $getid  ");
}
?>