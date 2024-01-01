
<?php
session_start();
// ... Votre code existant ...

// Vérifier le paramètre de succès
//$success = isset($_GET['success']) ? $_GET['success'] : null;

// Afficher un message en fonction du paramètre de succès
/*if ($success === '1') {
    $message = "Votre message a été envoyé avec succès !";
} elseif ($success === '0') {
    $message = "Une erreur s'est produite lors de l'envoi du message.";
} else {
    $message = null;
}*/

?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>ONG ERFI, Empowered Rural Families International</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Ong ERFI, Charity Fund, aid for disadvantaged children in Senegal,
         Children's education and social assistances" />
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <link rel="icon" type="image/png" href="images/logo.png" />
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
   </head>
   <body>
      <div class="main-top" id="home">
         <!-- header -->
         <div class="headder-top">
            <div class="container-fluid">
               <!-- nav -->
               <nav >
                 <a class="" href="#home"><img src="images/logo.png" alt="" class="img-logo" width="15%" height="15%"></a>
                 <!--
                  <div id="logo">
                    <h1><a class="" href="index.html">ERFI<span>Charity Fund </span></a>
                  </div>
                  -->
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="index.php">Accueil</a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="#about">À propos</a></li>
                     <li><a href="#service">Engagez-vous</a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle toogle-2">Découvrir <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Découvrir <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2">
                        <ul>
                            <li><a href="#gallery" class="drop-text">Galerie</a></li>
                            <li><a href="#team" class="drop-text">Bénévoles</a></li>
                            <li><a href="#blog" class="drop-text">Évènements</a></li>
                        </ul>
                     </li>
                     <li><a href="#contact">Contactez-nous</a></li>
                  </ul>
               </nav>
               <!-- //nav -->
            </div>
         </div>
         <!-- //header -->
         <!-- banner -->
         <div class="main-banner">
            <div class="container">
               <div class="style-banner ">
                  <h4 class="mb-1">Bienvenue chez ERFI </h4>
                  <h5>Notre Mission : Éduquer. Soigner. Transformer.
                  </h5>
               </div>
                <!--
               <div class="two-demo-button mt-lg-4 mt-3">
                  <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
               </div>
               -->
               <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                  <a href="#about" class="btn scroll">À propos</a>
               </div>
            </div>
         </div>
      </div>
      <!-- //banner -->
      <section class="three-grids">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info1">
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h4>Don</h4>
                     </div>
                     <p> Découvrez comment vous pouvez contribuer à notre mission.</p>
                     <div class="view-price mt-3">
                        <a href="#service" class=" scroll">Lire la suite</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info2">
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h4>Devenir Bénévole</h4>
                     </div>
                      <p>Rejoignez-nous dans notre mission d'aider les familles rurales.</p>
                     <div class="view-price mt-3">
                        <a href="#contact" class=" scroll">Nous Contacter</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-7 col-md-6">
                  <div class="wthree-about-txt mb-lg-5 mb-md-4 mb-3">
                     <h5>Notre Mission</h5>
                  </div>
                  <div class="about-para-txt">
                     <p>Chez ERFI « Empowered Rural Families International», nous croyons en un avenir où chaque enfant a accès à une éducation de qualité et où chaque mère peut accueillir son bébé dans des conditions optimales. En tant qu'association à but non lucratif régie par les articles 60 et suivants du Code Civil Suisse, nous sommes déterminés à faire une différence concrète dans la vie des communautés rurales.
                     </p>
                     <p class="mt-2">Nous luttons contre la déperdition scolaire en favorisant l'accès aux études secondaires pour les enfants des villages.
                         De plus, nous nous engageons à offrir des soins de santé de qualité, en mettant particulièrement l'accent sur le bien-être des futures mamans vivant dans ces milieux.</p>
                      <p class="mt-2"> Rejoignez-nous dans notre mission d'autonomisation des familles rurales à travers l'éducation et les soins de santé.</p>

                  </div>
                   <!--
                  <div class="view-price mt-lg-5 mt-md-4 mt-3">
                     <a href="#contact" class=" scroll">Lire la suite</a>
                  </div>
                  -->
               </div>
               <div class="col-lg-5 col-md-6 about-imgs-txt">
               </div>
            </div>
         </div>
      </section>
      <!-- about  -->
      <!--state -->
      <section class="stats py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="stats-info row ">
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num ">
                     <div class="count-icon">
                        <span class="fa fa-paw" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">5400/an</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Don</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-smile-o" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">20</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Bénévoles</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-leaf" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">40</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Enfants</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-globe" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">4</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Pays</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//state -->
      <!-- service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Soutenez Notre Cause</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Bienvenue dans notre espace dédié à l'engagement, où vous pouvez jouer un rôle actif dans l'amélioration des vies</p>
            </div>
            <div class="row">
               <div class="col-lg-5 service-two-grids">
                  <div class="color-img-five">
                     <div class="ser-sevice-grid text-center">
                        <h4 class="pb-3">Votre Don Change des Vies</h4>
                        <p>Chaque don que vous faites contribue directement à la réalisation de notre mission. Qu'il s'agisse de fournir des fournitures scolaires aux enfants, d'assurer un suivi médical pré et postnatal aux futures mamans, ou de mettre en place des programmes éducatifs innovants, votre soutien a un impact concret.</p>
                        <p>Chaque geste compte. Merci de votre engagement envers notre cause.</p>
                         <div class="view-price mt-3">
                             <a href="#contact" class=" scroll">Soutenir Maintenant</a>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 service-two-grids">
                  <div class="img-cols-grid row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class=" color-img-one" >
                            <div class="ser-sevice-grid text-center">
                                <h4 class="pb-3">Faire un Don unique</h4>
                                <p>Faites un don unique pour soutenir nos projets en cours.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class=" color-img-two">
                            <div class="ser-sevice-grid text-center">
                                <h4 class="pb-3">Devenir Bénévole</h4>
                                <p>Rejoignez notre équipe de bénévoles dévoués. Votre temps, vos compétences et votre énergie peuvent avoir un impact positif.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-three">
                            <div class="ser-sevice-grid text-center">
                                <h4 class="pb-3">Dons en Nature</h4>
                                <p>Contribuez avec des fournitures éducatives, des vêtements, ou d'autres articles essentiels.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-four">
                            <div class="ser-sevice-grid text-center">
                                <h4 class="pb-3">Parrainer un enfant</h4>
                                <p>Devenez un parrain et apportez un soutien continu à un enfant dans le besoin.</p>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!--team -->
      <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2 clr">Nos Bénévoles</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 sub-colors">
               <p>À la Rencontre de Ceux Qui Font la Différence : Nos Bénévoles en Action</p>
            </div>
            <div class="row ">
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t6.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>A.SARR</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t5.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>A.NDOUR</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t7.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>J.DACOUGNA</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t5.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>D.NDOUR</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//team -->
      <!-- gallery-main -->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Notre Galerie</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p >Découvrez notre Monde en Images : La Galerie d'ERFI
               </p>
            </div>
            <div class="row gallery-info">
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal1"><img src="images/g1b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal2"><img src="images/g2b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal3"><img src="images/g3b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids p-0">
                     <a href="#gal4"><img src="images/g4b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal5"><img src="images/g5b.JPG" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal6"><img src="images/g6b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal7"><img src="images/g10.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal8"><img src="images/g7b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal9"><img src="images/g8b.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// gallery-main -->
      <!-- popup-->
      <div id="gal1" class="popup-effect">
         <div class="popup">
            <img src="images/g1b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
         <div class="popup">
            <img src="images/g2b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
         <div class="popup">
            <img src="images/g3b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
         <div class="popup">
            <img src="images/g4b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
         <div class="popup">
            <img src="images/g5b.JPG" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
         <div class="popup">
            <img src="images/g6b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal7" class="popup-effect">
         <div class="popup">
            <img src="images/g10.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal8" class="popup-effect">
         <div class="popup">
            <img src="images/g7b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal9" class="popup-effect">
         <div class="popup">
            <img src="images/g8b.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- //gallery popups -->
      <!-- //gallery -->
      <!-- blog -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Derniers Événements</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Galas de Récolte de Fonds : Célébrons Ensemble pour Soutenir nos Initiatives</p>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-one">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                      <a href="#" class="scroll">
                        <ul>
                            <li>DEC</li>
                            <li>17</li>
                        </ul>
                      </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Le Bureau d'ERFI Unis pour un Avenir meilleur</a></h4>
                  <p>Dans cette image, les membres du bureau d'ERFI se réunissent pour une photo mémorable.
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-four ">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                     <a href="#" class="scroll">
                        <ul>
                           <li>DEC</li>
                           <li>17</li>
                        </ul>
                     </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Une Soirée de Solidarité et de Célébration</a></h4>
                  <p>Cette photo saisissante capture l'instant où les invités d'honneur, empreints d'une générosité éclatante, enrichissent de leur présence le dîner de galas d'ERFI.
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Reconnaître Nos Partenaires et Bénévoles</a></h4>
                  <p>Nous tenons à exprimer notre profonde gratitude envers nos partenaires, bénévoles et tous ceux qui ont contribué au succès de cet événement. Votre générosité et votre soutien sont les fondements de nos réalisations.
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-two ">
                  <div class="blog-info">
                     <a href="#" class="scroll">
                        <ul>
                            <li>DEC</li>
                            <li>17</li>
                        </ul>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">L'Équipe Dirigeante</a></h4>
                  <p>Les Membres du Bureau Exécutif d'ERFI Réunis.
                      Cette image incarne l'esprit collaboratif et la force intellectuelle qui propulsent ERFI vers la réalisation de sa mission d'autonomisation des familles rurales.
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-three pl-sm-0">
                  <div class="blog-info">
                     <a href="#" class="scroll">
                        <ul>
                            <li>DEC</li>
                            <li>17</li>
                        </ul>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //blog -->
      <!-- Info-matter -->
      <section class="info-matter py-lg-4 py-md-3 py-sm-3 py-3" id="info-matter">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-6 text-sm-center">
                  <img src="images/info.png" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6 info-matter-join mt-lg-4 mt-3">
                  <h5 class="mb-lg-4 mb-3">Êtes-vous prêt à devenir bénévole ?</h5>
                  <p>Êtes-vous prêt à partager votre temps et vos compétences pour une cause qui compte ?
                  </p>
                  <p class="mt-2">Devenez bénévole dès maintenant et participez à des initiatives qui changent des vies.
                  </p>
                  <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                     <a href="#contact" class="btn scroll">Rejoignez-nous</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// Info-matter-->
      <!-- contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Contactez-nous</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Besoin d'Informations Supplémentaires ? Contactez-nous !
               </p>
            </div>
            <div class="message-container text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" id="messageContainer" >
                <p></p>
            </div>

            <div class="row">
               <div class="col-lg-6 col-md-6 contact-details">
                   <form action="database/contact.php" method="post" id="contactForm">
                       <div class="form-group contact-forms">
                           <select name="objet" class="form-control" required="">
                               <option value="" disabled selected>Sélectionnez l'objet</option>
                               <option value="don">Don unique</option>
                               <option value="donNature">Dons en nature</option>
                               <option value="benevole">Devenir bénévole</option>
                               <option value="parrainage">Parrainer un enfant</option>
                               <option value="info">Demande d'informations</option>
                               <option value="autres">Autres</option>
                           </select>
                       </div>
                       <div class="form-group contact-forms">
                           <select name="civilite" class="form-control" required="">
                               <option value="" disabled selected>Civilité</option>
                               <option value="monsieur">Monsieur</option>
                               <option value="madame">Madame</option>
                           </select>
                       </div>
                       <div class="form-group contact-forms">
                           <input type="text" name="nom" class="form-control" placeholder="Nom" required="">
                       </div>
                       <div class="form-group contact-forms">
                           <input type="email" name="email" class="form-control" placeholder="Email" required="">
                       </div>
                       <div class="form-group contact-forms">
                           <input type="tel" name="tel" class="form-control" placeholder="Tél"  pattern="[0-9]{10}">
                       </div>
                       <div class="form-group contact-forms">
                           <textarea name="message" class="form-control" placeholder="Message" rows="3" required=""></textarea>
                       </div>
                       <div class="form-group contact-forms">
                           <label>
                               <input type="checkbox" name="newsletter" value="1"> Recevoir notre newsletter
                           </label>
                       </div>
                       <button type="button" class="btn sent-butnn" onclick="submitForm()">Envoyer</button>
                   </form>
               </div>
               <div class="col-lg-6 col-md-6 address-grid text-center">
                 <!-- <div class="contact-address-info mb-md-4 mb-3">
                     <h2><a href="index.php">Funding</a></h2>
                  </div>-->
                  <div class="contact-address-grid mb-3">
                     <h4> Adresse</h4>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>L'Ancienne-Route 20,<br>Genève , Switzerland.</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>+41 79 34 06 323</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p><a href="mailto:info@example.com">ongerfi@gmail.com</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//contact -->
      <!--<div class="address_mail_footer_grids">
         <iframe src="https://www.google.com/maps/place/Rte+de+la+Pr%C3%AAle+2B,+1142+Pampigny,+Suisse/@46.5822671,6.4194136,17z/data=!3m1!4b1!4m10!1m2!2m1!1s2b+route+de+la+prele+pampigny+iframe!3m6!1s0x478c4a3e826c74eb:0x2dfe3ca20b5fcae7!8m2!3d46.5822635!4d6.4242845!15sCiQyYiByb3V0ZSBkZSBsYSBwcmVsZSBwYW1waWdueSBpZnJhbWWSARBnZW9jb2RlZF9hZGRyZXNz4AEA!16s%2Fg%2F11c267r7bs?entry=ttu"></iframe>
      </div>
       footer -->
      <footer class=" py-3">
        <!-- <div class="container">
            <div class="icons mt-3 text-center">
               <ul class="d-flex justify-content-center pb-3 social-icons">
                  <li>
                     <a href="#">
                     <span class="fa fa-facebook-f"></span>
                     </a>
                  </li>
                  <li class="mx-3">
                     <a href="#">
                     <span class="fa fa-twitter"></span>
                     </a>
                  </li>
                  <li class="mr-3">
                     <a href="#">
                     <span class="fa fa-google-plus"></span>
                     </a>
                  </li>
                  <li><a href="#"><span class="fa fa-vk"></span></a></li>
               </ul>
            </div>
         </div>-->
         <div class="footer-main txt-center">
            <p>
               © 2023 Developed by <a href="https://www.linkedin.com/in/augustin-varore-05969714b" target="_blank">Augustin VARORE</a>
            </p>
         </div>
         <!-- move icon -->
         <div class="txt-center">
            <a href="#home" class="move-top txt-center mt-3"></a>
         </div>
         <!--//move icon -->
      </footer>
      <!--//footer -->
      <script>
          function submitForm() {
              const form = document.getElementById('contactForm');

              // Utiliser reportValidity pour afficher les messages d'erreur et mettre en surbrillance les champs invalides
              if (!form.reportValidity()) {
                  // Le formulaire n'est pas valide, vous pouvez ajouter des actions ici si nécessaire
                  return;
              }

              const formData = new FormData(form);

              $.ajax({
                  type: 'POST',
                  url: 'database/contact.php',
                  data: formData,
                  contentType: false,
                  processData: false,
                  cache: false,
                  success: function(response) {
                      console.log('Réponse du serveur :', response);
                      // Mettre à jour la section de message avec la réponse du serveur
                      $('#messageContainer').html('<p>' + response + '</p>');

                      // Afficher ou masquer la section en fonction de la présence de message
                      if (response.trim() !== '') {
                          $('#messageContainer').show(); // Afficher la section
                      } else {
                          $('#messageContainer').hide(); // Masquer la section
                      }
                  }
              });
          }
      </script>
   </body>
</html>
