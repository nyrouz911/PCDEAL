<?php

include '../../controller/controller.php';


ArticleC::supprimer($_GET["id"]);
header ('Location: ' .'backoffice.php');
