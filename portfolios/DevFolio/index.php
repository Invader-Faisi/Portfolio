<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DevFolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/portfolio/assets/img/favicon.ico" rel="icon">
    <link href="/portfolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
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

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="" id="site_img" alt="User Image" data-aos="fade-in">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2 id="user_heading_name"><br></h2>
            <p>I'm <span class="typed" data-typed-items="Developer, Freelancer"></span></p>
            <div class="social-links" id="social">
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>

        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-between">
                <div class="col-lg-4 profile-img align-self-start">
                    <img src="" id="user_about_img" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 content">
                    <h3 id="user_profession"></h3>
                    <p id="user_about">
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <strong>Birthday:</strong> <span id="user_dob"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Phone:</strong> <span id="user_cell"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>City:</strong> <span id="user_address"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Age:</strong> <span id="user_age"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Degree:</strong> <span id="user_edu"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Email:</strong> <span id="user_email"></span></li>
                        <li><i class="bi bi-check2-all"></i> <strong>Freelance:</strong> <span>Available</span></li>
                    </ul>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Skills Section -->
    <section id="skills" class="services section">

        <!-- Skills Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills & Tools</h2>
            <p>I am a highly skilled worker and bearing expertise in following skills & Tools</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4" id="dev_skills">

            </div>

        </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>

        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-between">
                <div class="col-lg-12 content">
                    <h3 id="user_resume_user_name"></h3>
                    <p><em>
                            Results-oriented professional with over 3 years of experience in designing and developing user-centered solutions, from initial concept to final deliverable. Adept at creating impactful materials and managing projects to meet deadlines
                        </em></p>
                    <ul>
                    <li><i class="bi bi-check"></i> <span id="user_resume_address"></span></li>
                    <li><i class="bi bi-check"></i> <span id="user_resume_cell"></span></li>
                    <li><i class="bi bi-check"></i> <span id="user_resume_email"></span></li>
                    </ul>
                </div>
                <h3>Education</h3>
                <div class="col-lg-12 d-flex flex-wrap">
                    <p id="dev_edu"></p>

                </div>
                <h3 id="dev_profession">Professional Experience</h3>

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

            <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-5">

                    <div class="col-lg-4">
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p id="user_contact_address"></p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-4">
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call<br></h3>
                                <p id="user_contact_cell"></p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-4">
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p id="user_contact_email"></p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>
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

<footer id="footer" class="footer light-background">
    <div class="container">
        <h3 class="sitename">Dev Folio</h3>
        <div class="container">
            <div class="copyright">
                <span>Copyright</span> <strong class="px-1 sitename">DPPG</strong> <span>All Rights Reserved</span>
            </div>
            <div class="credits">
                Designed by <a href="#">DPPG</a>
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

<!-- Main JS File -->
<script src="main.js"></script>
<!-- Jquery JS File /portfolio-->
<script src="../ajax.js"></script>

</body>

</html>