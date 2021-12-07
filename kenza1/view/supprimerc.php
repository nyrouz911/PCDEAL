<?php

include_once '../controller/controller.php';


CommentaireC::supprimer($_GET["id"]);

header ('Location: ' .'blogarticle.php?id='.$_GET["idp"]);
