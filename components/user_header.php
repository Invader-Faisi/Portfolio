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
              <a class="nav-link" href="#" data-id="plans">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-id="personelInfo">
                  <i class="bi bi-person-circle"></i>
                  <span>Personal Information</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-id="about">
                  <i class="bi bi-card-list"></i>
                  <span>About</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-id="myPortfolios">
                  <i class="bi bi-menu-button-wide"></i>
                  <span>Portfolios</span>
              </a>
          </li>
      </ul>

  </aside><!-- End Sidebar-->