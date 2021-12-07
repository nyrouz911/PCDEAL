<?php

include_once '../controller/controller.php';



if (isset($_POST["comment"])){
    CommentaireC::modifier($_GET["id"],$_POST["comment"]);
    header ('Location: ' .'blogarticle.php?id='.$_GET["idp"]);

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
<label for="comment">new comment</label>
        <input type="text" name="comment" id="comment">
        <input type="submit" name="submit" id="submit" value="update">
    </form>
</body>
</html>