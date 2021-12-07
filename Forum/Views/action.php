<?php

  require 'config.php';
  if(isset($_GET['t'],$_GET['id']))
  {
    $getid=(int)$_GET['id'];
    $gett=(int) $_GET['t'];
    $check=$connection->prepare('SELECT id_c FROM comment WHERE id_c=:getid');
    $check->execute(array($getid));
    if($check->rowCount()==1){
      if($gett==1)
      {
        $user="1";
        $ins=$connection->prepare('INSERT INTO up_c (com_up,user_up) VALUES (:getid,:user)');
        $ins->execute([':getid' => $getid , ':user' => $user]);
        $id=$ins->com_up;
        var_dump($ins);
      }
      elseif($gett==2)
      {
        $user="1";
        $ins=$connection->prepare('INSERT INTO down_c (com_down,user_down) VALUES (:getid,:user)');
        $ins->execute([':getid' => $getid , ':user' => $user]);
        $id=$ins->com_down;
        var_dump($ins);
      }
      header("Location: ../Views/showpost.php?id=  ");
    
  }
  else
  {
    exit('error');
  }
}
else
{
  exit('error');
}

?>