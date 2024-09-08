
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>LauraFolio</title>
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

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename" id="sitename"></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links" id="social">
        </div>

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="" id="user_img" alt="" data-aos="fade-in">

        <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
            <h2 id="user_heading_name"></h2>
            <p>I'M A PROFESSIONAL DEVELOPER & FREELANCER</p>
            <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">About me</span>
            <h2>About Me</h2>
            <p id="user_about"></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="" id="user_about_img" class="img-fluid" alt="">
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
    <section id="skills" class="pricing-2 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">Skills</span>
                <h2>Skills</h2>
                <p>I am a highly skilled worker and bearing following skills.
                </p>
            </div><!-- End Section Title -->

            <div class="row gy-4 gx-lg-5" id="laura_skills">

            </div>

        </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">My Resume</span>
            <h2>My Resume</h2>
            <p id="user_resume_about"></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Sumary</h3>

                    <div class="resume-item pb-0">
                        <<h4 id="user_resume_user_name"></h4>
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
            <span class="description-title">Contact</span>
            <h2>Contact</h2>
            <p><em>Feel free to reach out for any inquiries or collaborations. I'm here to help and would love to hear from you!</em></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p id="user_contact_address"></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p id="user_contact_cell"></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-4">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p id="user_contact_email"></p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                    </div>

                </div>
            </form><!-- End Contact Form -->

        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer position-relative dark-background">
    <div class="container">
        <h3 class="sitename">LauraFolio<br></h3>
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