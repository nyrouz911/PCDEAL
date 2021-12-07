<?php

include_once '../controller/controller.php';

$idU = 2;
$id = $_GET["id"];


$liste = ArticleC::afficherArticle($id);
$listeC = CommentaireC::afficher($id);

 

if (isset($_POST["comment"])) {
   CommentaireC::ajouter($idU, $id, $_POST["comment"]);
   header ('Location: ' .'blogarticle.php?id='.$id);
}


if (isset($_GET["like"])){
   ArticleC::ajouterlike($id,$idU);
   header ('Location: ' .'blogarticle.php?id='.$id);
}
if (isset($_GET["dislike"])){
   ArticleC::ajouterdislike($id,$idU);
   header ('Location: ' .'blogarticle.php?id='.$id);
}


?>


<!DOCTYPE html>
<html lang="en">
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>PCDEAL</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- <link rel="stylesheet" href="assets/styles.css"> -->
<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/preloader.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/meanmenu.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.css">
<link rel="stylesheet" href="assets/css/backToTop.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
<link rel="stylesheet" href="assets/css/elegantFont.css">
<link rel="stylesheet" href="assets/css/default.css">
<link rel="stylesheet" href="assets/css/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- vfdngfsgfh,gfhhgh,ftdrge -->
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
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

<body>

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


   <?php
   foreach ($liste as $l) {


   ?>
      <section class="blog__area pt-120 pb-120">
         <div class="blog__author-3 d-sm-flex grey-bg mb-90">
            <div class="blog__author-thumb-3 mr-20">
            </div>
            <div class="blog__author-content">
               <h1><?php echo $l["nom"] ?></h1>
<a href="blogarticle.php?id=<?php echo $l["id"] ?>&like=true">
<?php echo (ArticleC::afficherlikes($l["id"]))["nb"]; ?>
               
<img src="data:image/png;base64,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" alt="" width=30 height=30 >
</a>
<a href="blogarticle.php?id=<?php echo $l["id"] ?>&dislike=true">
<?php echo (ArticleC::afficherdislikes($l["id"]))["nb"]; ?>
               
<img src="data:image/jpeg;base64,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" alt="" width=30 height=30 >
</a>

            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="blog__wrapper">
                     <div class="blog__text mb-40">
                        <p><?php echo $l["contenu"] ?></p>
                     </div>

                     <div class="blog__text mb-30">
                     </div>
                     <div class="blog__link mb-35">
                     </div>
                     <div class="blog__img w-img mb-45">
                        <img src="<?php echo $l["photo"] ?>" alt="">
                     </div>
                     <div class="blog__text mb-40">

                     </div>
                     <div class="blog__line"></div>
                     <div class="blog__meta-3 d-sm-flex justify-content-between align-items-center mb-80">
                        <div class="blog__tag-2">
                           <a href="#">Art & Design</a>
                           <a href="#">Education</a>
                           <a href="#">App</a>
                        </div>
                        <div class="blog__social d-flex align-items-center">
                           <h4>Share:</h4>
                           <ul>
                              <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                              <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                              <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="blog__author-3 d-sm-flex grey-bg mb-90">
                        <div class="blog__author-thumb-3 mr-20">
                           <img src="assets/img/blog/author/blog-author-1.jpg" alt="">
                        </div>
                        <div class="blog__author-content">
                           <h3><?php echo $l["ecrivain"] ?></h3>
                           <span>Author</span>
                        </div>
                     </div>
                     <div class="blog__recent mb-65">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Related <span class="yellow-bg-sm">Post <img src="assets/img/shape/yellow-bg-4.png" alt=""> </span></h2>
                           <p>You don't have to struggle alone, you've got our assistance and help.</p>
                        </div>
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="blog__item white-bg mb-30 transition-3 fix">
                                 <div class="blog__thumb w-img fix">
                                    <a href="blog-details.html">
                                       <img src="assets/img/blog/blog-1.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="blog__content">
                                    <div class="blog__tag">
                                       <a href="#">Art & Design</a>
                                    </div>
                                    <h3 class="blog__title"><a href="blog-details.html">The Challenge Of Global Learning In Public Education</a></h3>

                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                       <div class="blog__author d-flex align-items-center">
                                          <div class="blog__author-thumb mr-10">
                                             <img src="assets/img/blog/author/author-1.jpg" alt="">
                                          </div>
                                          <div class="blog__author-info">
                                             <h5>Jim Séchen</h5>
                                          </div>
                                       </div>
                                       <div class="blog__date d-flex align-items-center">
                                          <i class="fal fa-clock"></i>
                                          <span>April 02, 2022</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="blog__item white-bg mb-30 transition-3 fix">
                                 <div class="blog__thumb w-img fix">
                                    <a href="blog-details.html">
                                       <img src="assets/img/blog/blog-2.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="blog__content">
                                    <div class="blog__tag">
                                       <a href="#" class="purple">Marketing</a>
                                    </div>
                                    <h3 class="blog__title"><a href="blog-details.html">Exactly How Technology Can Make Reading Better</a></h3>

                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                       <div class="blog__author d-flex align-items-center">
                                          <div class="blog__author-thumb mr-10">
                                             <img src="assets/img/blog/author/author-2.jpg" alt="">
                                          </div>
                                          <div class="blog__author-info">
                                             <h5>Barry Tone</h5>
                                          </div>
                                       </div>
                                       <div class="blog__date d-flex align-items-center">
                                          <i class="fal fa-clock"></i>
                                          <span>July 02, 2022</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="blog__comment">
                        <h3>Write a commment</h3>
                        <form action="" method="POST">
                           <div class="row">



                              <div class="col-xxl-12">
                                 <div class="blog__comment-input">
                                    <textarea placeholder="Enter your comment ..." name="comment"></textarea>
                                 </div>
                              </div>

                              <div class="col-xxl-12">
                                 <div class="blog__comment-btn">
                                    <button type="submit" class="e-btn">Post Comment</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
               </div>
            </div>
         </div>
         </div>
         <h1>test</h1>

         <?php foreach ($listeC as $comment) {


         ?>
<h3>kenza</h3>     <?php // a changer?>
<p><?php echo $comment["contenu"]?></p>
<a href="supprimerc.php?id=<?php echo $comment["id"]?>&idp=<?php echo $id?>">supprimer</a>
<a href="modifierc.php?id=<?php echo $comment["id"]?>&idp=<?php echo $id?>">modifier</a>



         <?php
         }
         ?>
      </section>
      <!-- blog area end -->
   <?php
   }
   ?>



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


   <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
   <script src="assets/js/vendor/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/jquery.meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/jquery.fancybox.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/parallax.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/jquery.counterup.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>