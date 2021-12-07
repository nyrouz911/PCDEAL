
<?php

include_once 'C:\xampp\htdocs\kenza\controller\controller.php';

//ArticleC::modifier(1,)




$id = 4;

$article = ArticleC::afficherArticle(4);

// foreach ($article as $a){
//     echo $a["contenu"];
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <!-- bootstrap css -->
         <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- style css -->
     <link rel="stylesheet" href="css/style.css">
     <!-- Responsive-->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- fevicon -->
     <link rel="icon" href="C:\Users\ASUS\Desktop\Suivi 1\ASSETS\image\fevicon.png" type="image/gif" />
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
     <!-- Tweaks for older IEs-->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <!-- owl stylesheets -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">




    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?php 
    foreach ($article as $a){


        ?>


    
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form action="" method="post">
          <fieldset>
            <legend class="text-center">edit article</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">title</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value="<?php echo $a["nom"]?>" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">writer</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" value="<?php echo $a["ecrivain"]?>" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">content</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message"  rows="5"><?php echo $a["contenu"]?></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<?php 
}
?>

<?php   

if (isset($_POST["name"])){

    
    ArticleC::modifier($id,$_POST["name"], $_POST["message"],$_POST["email"]);
}

?>




</body>
</html>
