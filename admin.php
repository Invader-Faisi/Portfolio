<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/apple-touch-icon.png" alt="">
                <span class="d-none d-lg-block">DPPG</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i>
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name'] ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                <span>Account</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" id="logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="#" data-id="users">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users Table</h5>
                        <p class="text-danger text-center" id="error" ></p>
                        <p class="text-success text-center" id="message" ></p>
                        <!-- Default Table -->
                        <table class="table col-12" id="users_table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="user_modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update User Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="user_status">
                                    <option value="">User status</option>
                                    <option value="Approved">Approve</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <p class="text-danger" id="user_error"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="update_user">Update</button>
                    </div>
                </div>
            </div>
        </div><!-- End Basic Modal-->

        <div class="modal fade" id="delete_modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update User Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-3">
                            <div class="alert alert-danger fade show" role="alert">
                                Are you sure you want to delete this user
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="delete_user">Delete</button>
                    </div>
                </div>
            </div>
        </div><!-- End Basic Modal-->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>DPPG</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">DPPG</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JS File -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/user_main.js"></script>

    <script>
        $(document).ready(function () {
            let user_id = '';
            loadData();

            $(document).on('click', '.edit', function (){
                $('#user_modal').modal('show');
                user_id = $(this).data('id');
            });

            $(document).on('click', '.delete', function (){
                $('#delete_modal').modal('show');
                user_id = $(this).data('id');
            });

        $('#update_user').click(function(){
           let user_status = $('#user_status').val();
           if(user_status === ''){
               $('#user_error').text('Please select the value');
           }else{
               $('#user_error').text('');

               $.ajax({
                   url: 'backend/dbHandler.php',
                   type: 'POST',
                   data: {
                       user_id: user_id,
                       user_status: user_status,
                       action: 'updateUser',       // Specify the action
                   },
                   dataType: 'json',
                   success: function(response) {
                       if(response.message === 'success'){
                           toastr.success('User Status Updated');
                       }else{
                           $('#error').text(response.message);
                           toastr.error('Something went wrong');
                       }
                       $('#user_modal').modal('hide');
                       loadData();
                   },
                   error: function(xhr, status, error) {
                       toastr.error('Some Database error');
                   }
               });
           }
        });

        $('#delete_user').click(function(){
            $.ajax({
                url: 'backend/dbHandler.php',
                type: 'POST',
                data: {
                    user_id: user_id,
                    action: 'deleteUser',       // Specify the action
                },
                dataType: 'json',
                success: function(response) {
                    if(response.message === 'success'){
                        toastr.success('User deleted successfully');
                    }else{
                        toastr.error('Something went wrong');
                    }
                    $('#delete_modal').modal('hide');
                    loadData();
                },
                error: function(xhr, status, error) {
                    toastr.error('Some Database error');
                }
            });
        });

        $('#logout').click(function(){
            $.ajax({
                url: 'backend/dbHandler.php',
                type: 'POST',
                data: {
                    action: 'logout',       // Specify the action
                },
                dataType: 'json',
                success: function(response) {
                    if(response.message === 'success'){
                        window.location.replace("http://localhost/portfolio/index.php");
                    }else{
                        $('#error').text(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                }
            });
        });

        function loadData(){
            $.ajax({
                url: 'backend/dbHandler.php',
                type: 'GET',
                data: {
                    action: 'getUsers',  // Specify the action
                },
                dataType: 'json',
                success: function(response) {
                    if(response.message === 'success'){
                        let table = $('#users_table tbody');
                        let count = 1;
                        table.empty();
                        response.users.forEach(user => {
                            let row = `
                        <tr>
                            <th scope="row">${count++}</th>
                            <td>${user.name}</td>
                            <td>${user.username}</td>
                            <td>${user.email}</td>
                            <td>${user.plan}</td>
                            <td>${user.status}</td>
                            <td>
                                <a href="#"><i class="bi bi-pencil-square info edit" data-id="${user.user_id}"></i></a>
                                <a href="#"><i class="bi bi-trash-fill text-danger delete" data-id="${user.user_id}"></i></a>
                            </td>
                        </tr>
                    `;
                            table.append(row);
                        });
                    } else {
                        toastr.error(response.error);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error("Some database error");
                }
            });
        }
    });
    </script>

</body>

</html>