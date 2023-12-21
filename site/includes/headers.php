  <!-- Topbar Start -->
  <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
      <div class="row gx-0">
          <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
              <div class="d-inline-flex align-items-center">
                  <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                  <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                  <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
              </div>
          </div>
          <div class="col-md-6 text-center text-lg-end">
              <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                  <div class="me-3 pe-3 border-end py-2">
                      <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@marytechenock.com</p>
                  </div>
                  <div class="py-2">
                      <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+263 788 684 321</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
      <a href="index.php">
          <?php
            $file = file_exists('img/Image1.jpeg') ? 'img/Image1.jpeg' : '../img/Image1.jpeg';

            echo "<img class='logo w-100' src='$file' alt='Image'>";

            ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 me-n3">
              <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house"></i>Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link">Services</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academics</a>
                  <div class="dropdown-menu m-0">
                      <a href="./html/pages/blog.php" class="dropdown-item">Blog Grid</a>
                      <a href="html/pages/detail.php" class="dropdown-item">Blog Detail</a>
                      <a href="html/pages/feature.php" class="dropdown-item">Features</a>
                      <a href="html/pages/quote.php" class="dropdown-item">Quote Form</a>
                      <a href="html/pages/team.php" class="dropdown-item">The Team</a>
                      <a href="html/pages/testimonial.php" class="dropdown-item">Testimonial</a>
                  </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>
      </div>
  </nav>
  <!-- Navbar End -->