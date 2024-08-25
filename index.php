<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DPPG - Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href="assets/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">


    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>


    <!-- Main CSS File -->

    <?php
    if (isset($_SESSION['user_id'])) {
        echo '
            <link href="assets/css/style.css" rel="stylesheet">
            ';
    } else {
        echo '<link href="assets/css/main.css" rel="stylesheet">';
    }
    ?>


</head>

<body class="index-page">

    <?php
    if (isset($_SESSION['user_id'])) {
        include 'components/user_header.php';
    } else {
        include 'components/header.php';
    }
    ?>

    <main class="main" id="main">
        <?php if (isset($_SESSION['user_id'])) {
            include 'components/portfolio.php';
        } else {
            include 'components/landingPage.php';
        }
        ?>
    </main>

    <?php if (isset($_SESSION['user_id'])){
        echo '
            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">
                <div class="copyright">
                    &copy; Copyright <strong><span>DPPG</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">DPPG</a>
                </div>
            </footer><!-- End Footer -->
            ';
            }else{
            include 'components/footer.php';
        }
    ?>


    <!-- JS Files -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- Main JS File -->


    <?php
    if (isset($_SESSION['user_id'])) {
        echo '
            <script src="assets/js/user_main.js"></script>
            ';
    } else {
        echo '<script src="assets/js/main.js"></script>';
    }
    ?>

    <script>
        function toggleClass(section) {
            var register = document.getElementById("register");
            var login = document.getElementById("login");
            if (section == 'l') {
                if (!register.classList.contains("d-none")) {
                    register.classList.add("d-none");
                }
                if (login.classList.contains("d-none")) {
                    login.classList.remove("d-none");
                }
            } else {
                if (register.classList.contains("d-none")) {
                    register.classList.remove("d-none");
                }
                if (!login.classList.contains("d-none")) {
                    login.classList.add("d-none");
                }
            }




        }
    </script>

</body>

</html>