<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eTutor - Accueil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.11.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">eTutor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil
          </a></li>
          <li><a class="nav-link scrollto" href="#about">À propos de nous</a></li>
          <li><a class="nav-link scrollto" href="#services">Nos offres</a></li>
          <li><a class="nav-link scrollto" href="#team">L'équipe</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li style="margin-right: 30px; margin-left: 50px;"></li> <!-- Balise vide avec une marge de droite de 30px pour créer de l'espace -->
<li>

        @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
              @auth
                  <li><a href="{{ url('/dashboard') }}" class="getstarted scrollto">Tableau de bord</a></li>
              @else
                  <li><a href="{{ route('login') }}" class="nav-link scrollto">Connexion</a></li>

                  @if (Route::has('register'))
                     <li><a href="{{ route('register') }}" class="getstarted scrollto">S'enregistrer</a></li>
                  @endif
              @endauth
          </div>
      @endif
</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Un suivi optimisé pour réussir ensemble</h1>
          <h2>une plateforme de suivi collaboratif pour booster la créativité, la cohésion et la réussite de vos projets tutorés.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Démarrer votre projet</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Regarder la vidéo</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>À propos de nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Notre plateforme de suivi de projets tutorés a été conçue pour faciliter la réussite des projets étudiants. 
              Nous encourageons la collaboration entre étudiants et enseignants pour atteindre les objectifs de manière efficace et rapide. 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Nous proposons un suivi régulier des projets pour garantir une avancée coordonnée et un accomplissement collectif.</li>
              <li><i class="ri-check-double-line"></i> Notre plateforme permet d'interagir facilement avec les enseignants pour obtenir des ressources supplémentaires ou des retours sur votre travail.</li>
              <li><i class="ri-check-double-line"></i> Grâce à notre outil, vous pouvez suivre vos progrès et les tâches accomplies à tout moment, ce qui vous permet de rester organisé et de garder une vue d'ensemble sur l'avancée du projet.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Vous souhaitez améliorer la coordination et la réussite de vos projets tutorés ? 
              Notre plateforme de suivi de projets étudiants est là pour vous aider à atteindre vos objectifs. 
              Grâce à notre outil, vous pouvez collaborer efficacement avec vos enseignants et vos coéquipiers pour garantir une avancée coordonnée et une réussite collective de votre projet.
            </p>
            <a href="#" class="btn-learn-more">Découvrir notre plateforme</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Notre approche axée sur votre  <strong>satisfaction</strong></h3>
              <p>
                Pourquoi nous sommes le meilleur choix pour votre projet ?
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Comment travaillons-nous ?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Nous travaillons en étroite collaboration avec chaque groupe d'étudiants pour comprendre leurs besoins et leurs attentes. 
                      Nous nous engageons à fournir des solutions personnalisées qui répondent à leurs objectifs et contraintes, dans les délais impartis. 
                      Nous sommes là pour les accompagner tout au long de leur projet et leur offrir un soutien constant pour atteindre leurs objectifs
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>  Notre engagement envers la qualité <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Nous sommes passionnés par notre travail et nous nous engageons à offrir un accompagnement de qualité supérieure à nos étudiants. 
                      Nous sommes fiers de notre approche personnalisée et de notre capacité à comprendre les besoins uniques de chaque groupe d'étudiants, afin de leur fournir un suivi adapté pour leur projet tutoré.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>  Notre expertise <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Nous sommes des professionnels expérimentés et toujours à la pointe des dernières tendances et technologies dans notre domaine. 
                      Nous mettons notre expertise à votre service pour vous offrir des solutions personnalisées qui répondent à vos besoins spécifiques.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos offres</h2>
          <p>  Nous proposons une gamme complète de services pour répondre à vos besoins spécifiques. De la conception à la réalisation, 
            nous sommes là pour vous accompagner tout au long de votre projet et vous offrir des solutions sur mesure.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Suivi du temps</a></h4>
              <p>Les élèves peuvent enregistrer leur temps de travail sur le projet pour que l'enseignant puisse vérifier leur progression.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Rapports</a></h4>
              <p>L'enseignant peut facilement suivre l'évolution du projet et déterminer si les étudiants respectent les échéances.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bi-chat-left-text"></i></div>
              <h4><a href="">Commentaires</a></h4>
              <p>Les étudiants peuvent ainsi recevoir des commentaires constructifs et des suggestions d'amélioration pour leur projet.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bi-shield-fill-check"></i></div>
              <h4><a href="">Securité</a></h4>
              <p>Des mesures de sécurité strictes protègent les données des étudiants, incluant l'authentification à deux facteurs.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Rejoignez-nous !</h3>
            <p> Notre plateforme de suivi de projets tutorés offre toutes les fonctionnalités dont vous avez besoin pour suivre et évaluer efficacement le travail de vos étudiants. Inscrivez-vous maintenant pour en bénéficier !</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Rejoignez-nous !</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>L'équipe</h2>
          <p>Notre équipe passionnée et expérimentée est déterminée à offrir les meilleures solutions pour aider les étudiants à réaliser leurs projets les plus ambitieux.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/Equipe/SOUHEIB_ALI_MIGANEH.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Souheib Ali</h4>
                <span>Chief Executive Officer</span>
                <p>En tant que CEO passionné par l'innovation, 
                  je suis impatient de travailler avec vous.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/Equipe/ABDINK.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillahi Mohamed</h4>
                <span>Développeur front-end</span>
                <p>Développeur front-end déterminé à concevoir une excellente UI avec une UX agréable.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/Equipe/MAMI.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mami Otban</h4>
                <span>Développeur back-end</span>
                <p>Développeur back-end déterminé à concevoir une gestion de base de données efficace.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mugap</h4>
                <span>UX - Designer</span>
                <p>Designer passionné pour UX optimale, fonctionnalités conviviales et visuels accrocheurs.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/Equipe/ABD.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillahi Abdi</h4>
                <span>Spécialiste en Marketing</span>
                <p>Marketing passionné pour stratégie innovante, canaux pertinents et mesure d'efficacité.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Questions fréquemment posées</h2>
          <p>Vous avez des questions sur notre plateforme de suivi de projets tutorés ? 
            Pour créer un nouveau projet, connectez-vous à votre compte et cliquez sur "Créer un projet" dans le menu principal. Remplissez ensuite les informations nécessaires pour votre projet, telles que le titre, la description et les membres de l'équipe.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Comment puis-je créer un nouveau projet sur la plateforme ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Pour créer un nouveau projet, connectez-vous à votre compte et cliquez sur "Créer un projet" dans le menu principal. Remplissez ensuite les informations nécessaires pour votre projet, telles que le titre, la description et les membres de l'équipe.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Comment puis-je ajouter de nouveaux membres à mon équipe de projet ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Pour ajouter de nouveaux membres à votre équipe, allez dans la section "Membres" de votre projet, puis cliquez sur "Ajouter un membre". Entrez ensuite les informations du nouveau membre et envoyez-lui une invitation pour rejoindre l'équipe.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Comment puis-je modifier un projet existant ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Pour modifier un projet existant, connectez-vous à votre compte et cliquez sur le projet que vous souhaitez modifier. Vous pouvez ensuite modifier les informations du projet, ajouter ou supprimer des membres de l'équipe et mettre à jour les fichiers du projet.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Comment puis-je contacter l'enseignant en charge de mon projet ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Pour contacter l'enseignant en charge de votre projet, allez dans la section "Enseignant" de votre projet et cliquez sur le bouton "Contacter". Vous pouvez ensuite envoyer un message directement à l'enseignant via la plateforme.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Comment puis-je suivre l'état d'avancement de mon projet ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Pour suivre l'état d'avancement de votre projet, allez dans la section "Avancement" de votre projet. Vous pouvez voir les tâches actuelles, les tâches à venir et les tâches terminées, ainsi que les commentaires et les mises à jour de l'enseignant en charge du projet.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>eTutor</h3>
            <p>
              Route National 1 <br>
              Balbala, PK12<br>
              République de Djibouti <br><br>
              <strong>Téléphone:</strong> +253 21 36 76 85<br>
              <strong>Email:</strong> contact@etutor.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eTutor</span></strong>. Tous droits réservés
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>