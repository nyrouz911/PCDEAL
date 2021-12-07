<?php
require 'config.php';
$id=$_GET['id'];
$sql='SELECT * FROM forum WHERE id:=id';
$statement= $connection->prepare($sql);
$statement->execute([':id' => $id]);
$post=$statement->fetch();


if (isset ($_POST['name'])  && isset($_POST['email']) ) 
{
  $title = $_POST['name'];
  $descr = $_POST['email'];
  $sql = 'UPDATE forum SET titre_q=:title, descr_q=:descr WHERE id_q=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':title' => $title, ':descr' => $descr , ':id' => $id])) 
    {
    header("Location: ../Views/showpost.php?id= $id ");
    }

}


?>


<!DOCTYPE html>
<html>

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Forum - PCDEAL</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="..\image\fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body class="main-layout">

  <div class="loader_bg">
    <div class="loader"><img src="ASSETS/image/loading.gif" alt="#" /></div>
  </div>


  <header>

    <div class="header">

      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="forum.html"><img src="ASSETS/image/logo.png" height="75" width="150" alt="#"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <div class="menu-area">
              <div class="limit-box">
                <nav class="main-menu">
                  <ul class="menu-area-main">
                    <li class="active"> <a href="index.html">Home</a> </li>
                    <li> <a href="about.html">About</a> </li>
                    <li><a href="brand.html">Brand</a></li>
                    <li><a href="special.html">Specials</a></li>
                    <li><a href="forum.html">Forum</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li class="last">
                      <a href="#"><img src="ASSETS/image/search_icon.png" alt="icon" /></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-6 offset-md-6">
            <div class="location_icon_bottum">
              <ul>
                <li><img src="ASSETS/icon/call.png" />(+216) 71 961 985</li>
                <li><img src="ASSETS/icon/email.png" />datalords@gmail.com</li>
                <li><img src="ASSETS/icon/loc.png" />Tunis</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="brand_color">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Forum</h2>
          </div>
        </div>
      </div>
    </div>
  </div>










  <div class="container">
  </div>







  <div class="row justify-content-center">
  </div>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Update post</h2>
      </div>
      <div class="card-body">
        <?php if (!empty($message)) : ?>
          <div class="alert alert-success">
            <?= $message; ?>
          </div>
        <?php endif; ?>
        <form method="post">
          <div class="form-group">
            <label for="name">Title</label>
            <input type="text"  name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Description</label>
            <textarea name="email"  id="email" class="form-control" cols="150" rows="5"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info">Update Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <div id="contact" class="footer">
      <div class="container">
        <div class="row pdn-top-30">
          <div class="col-md-12 ">
            <div class="footer-box">
              <div class="headinga">
                <h3>Address</h3>
                <span>Berges du Lac Mariout BHB 110711, P.O. Box 2045, Tunis, Tunisia</span>
                <p>(+216) 71 961 983 / 4 (+216) 71 961 985
                  <br>datalords@gmail.com
                </p>
              </div>
              <ul class="location_icon">
                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

              </ul>
              <div class="menu-bottom">
                <ul class="link">
                  <li> <a href="#">Home</a></li>
                  <li> <a href="#">About</a></li>
                  <li> <a href="#">Forum</a></li>
                  <li> <a href="#">Brand </a></li>
                  <li> <a href="#">Specials </a></li>
                  <li> <a href="#"> Contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>PCDEAL© 2021 All Rights Reserved. Design By DATALORDS</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function() {

        $(this).addClass('transition');
      }, function() {

        $(this).removeClass('transition');
      });
    });
  </script>
</body>

</html>