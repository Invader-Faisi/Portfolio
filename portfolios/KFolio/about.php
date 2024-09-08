<?php include_once 'components/header.php'?>


<main class="main">

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
</main>

<?php include_once 'components/footer.php'?>
