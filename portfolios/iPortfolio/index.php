<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>iPortfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/portfolio/assets/img/favicon.ico" rel="icon">
  <link href="/portfolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link href="/portfolio/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portfolio/assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/portfolio/assets/css/aos.css" rel="stylesheet">
    <link href="/portfolio/assets/css/glightbox.min.css" rel="stylesheet">
    <link href="/portfolio/assets/css/swiper-bundle.min.css" rel="stylesheet">

        <!--    JQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Main CSS File -->
    <link href="main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="" id="user_img" alt="User Image" class="img-fluid">
    </div>

    <a href="#" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename" id="sitename"></h1>
    </a>

    <div class="social-links text-center" id="social">
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#skills"><i class="bi bi-hdd-stack navicon"></i> Skills</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="" id="site_img" alt="User Image" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 id="user_heading_name"></h2>
        <p>I'm <span class="typed" data-typed-items="Freelancer"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p id="user_about"></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="" id="user_about_img" class="img-fluid" alt="User Image">
          </div>
          <div class="col-lg-8 content">
            <h2 id="user_profession"></h2>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span id="user_dob"></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span id="user_cell"></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span id="user_address"></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span id="user_age"></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span id="user_edu"></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span id="user_email"></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>I am a highly skilled worker and bearing following skills.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6" id="user_skills">


          </div>

          <div class="col-lg-6" id="user_tools">


          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p id="user_resume_about"></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4 id="user_resume_user_name"></h4>
              <p><em>
                      Results-oriented professional with over 3 years of experience in designing and developing user-centered solutions, from initial concept to final deliverable. Adept at creating impactful materials and managing projects to meet deadlines
                  </em></p>
              <ul>
                <li id="user_resume_address"></li>
                <li id="user_resume_cell"></li>
                <li id="user_resume_email"></li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title" id="resume_edu">Education</h3>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title" id="resume_profession">Professional Experience</h3>

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
          <p><em>Feel free to reach out for any inquiries or collaborations. I'm here to help and would love to hear from you!</em></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p id="user_contact_address"></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p id="user_contact_cell"></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p id="user_contact_email"></p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">
      <div class="container text-center">
          <h3 class="sitename">I Portfolio</h3>
          <div class="container">
              <div class="copyright">
                  <span>Copyright</span> <strong class="px-1 sitename">DPPG</strong> <span>All Rights Reserved</span>
              </div>
              <div class="credits">
                  Designed by <a href="https://bootstrapmade.com/">DPPG</a>
              </div>
          </div>
      </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- JS Files -->
  <script src="/portfolio/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/portfolio/assets/js/aos.js"></script>
  <script src="/portfolio/assets/js/glightbox.min.js"></script>
  <script src="/portfolio/assets/js/swiper-bundle.min.js"></script>
  <script src="/portfolio/assets/js/typed.umd.js"></script>
  <script src="/portfolio/assets/js/purecounter_vanilla.js"></script>
  <script src="/portfolio/assets/js/noframework.waypoints.js"></script>

  <!-- Main JS File /portfolio-->
  <script src="main.js"></script>

  <!-- Jquery JS File /portfolio-->
  <script src="../ajax.js"></script>


</body>

</html>