<?php


$mysqli= new mysqli('localhost','root','','forum') 
or die(mysqli_error($mysqli));

$id=0;
$title='';
$descr='';
$update=false;


if (isset($_POST['post']))
{
    $title = $_POST['title'];
    $descr = $_POST['description'];

    $mysqli->query("INSERT INTO forum (titre_q, descr_q) VALUES ('$title','$descr')")
    or die($mysqli->error);

    $_SESSION['message']="Post has been added!";
$_SESSION['msg_type']="success";

header("location: forum.php");
}

if (isset($_GET['delete']))
{
    $id_q=$_GET['delete'];
    $mysqli->query("DELETE FROM forum WHERE id_q=$id_q") or die($mysqli->error);

    $_SESSION['message']="Your post has been deleted!";
    $_SESSION['msg_type']="danger";
header("location: forum.php");
}

if (isset($_GET['edit']))
{
    $id_q=$_GET['edit'];
    $update = true;
    $result=$mysqli->query("SELECT * FROM forum WHERE id_q=$id_q") or die($mysqli->error);
    if(count($result)==1)
    {
        $row=$result->fetch_array();
        $title=$row['titre_q'];
        $descr=$row['descr_q'];
    }
}


?>