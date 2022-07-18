<!DOCTYPE html>
<html>
<head>
<title>School Management System</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- Nav -->
<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse left-nav" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0 " href="#" >
        <span style="color:rgb(255, 19, 184); font-weight:700; font-size:40px; margin-right:30px;">S M S</span>
      
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" >
          <a  style="color:white; font-weight:600;" class="nav-link" href="#">Admission</a>
        </li>
        <li class="nav-item">
          <a style="color:white; font-weight:600;" class="nav-link" href="#">Result</a>
        </li>
        <li class="nav-item">
          <a style="color:white;  font-weight:600;" class="nav-link" href="#">Exams</a>
        </li>
        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center right-nav">
      <!-- Icon -->
      <input class="search-box" type="text" placeholder="Search..">
      <button class= "search-btn "> Search</button>
      
        
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- Navbar -->
<div class="container-fluid bg-video">
    <div class="row">
        <div class="col-lg-12">
        <video src="2.mp4" class="video-bg" autoplay loop muted></video>
        </div>
        <!-- <div class="col-lg-6">
        <video src="2.mp4" class="video-bg" autoplay loop muted></video>
        </div> -->

    </div>
</div>




<div class="container-fluid float-content">
    <div class="row">
        <div class="col-lg-6 left-content">
            <h1 class="title">School Management System</h1>
            <p style="font-size:27px; color: white;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla nostrum earum esse nisi optio tempora temporibus et pariatur laboriosam natus?</p>
            <button class="rm-btn readmore">Read More</button>
        </div>
        <div class="col-lg-6 right-content">
        <div class="card top-card">
            <h1 class="admission">Admission Form</h1>
        <input class="search-box input-box" type="text" placeholder="Name.."> <br>
        <input class="search-box input-box" type="text" placeholder="Email.."> <br>
        <input class="search-box input-box" type="text" placeholder="Contact.."> <br>
        <input class="search-box input-box" type="text" placeholder="Class.."> 
        <button class="rm-btn submit">Submit</button>
        </div>
        </div>
    </div>
    
</div>
<div class="second-title">
    <h1>Our Classes</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quam!</p>
</div>
<div class="container card-section">
    <div class="row">
        <?php
        for($i=0; $i<12; $i++){ ?>
        <div class="col-lg-3">
            <div class="card class-card">
                <div class="image">
                    <img src="1.jpg" alt="">
                </div>
                <div class="info d-flex align-items-center flex-column">
                    <br>
                    <h5 style="color:rgb(255, 19, 184);">Web Development</h5>
                    <p> <b>Duration:</b> 45hours</p>
                    <p> <b>Price:</b> 45$</p>
                    <button class="rm-btn  enroll">Enroll Now</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<div class="second-title">
    <h1>Our Teachers</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quam!</p>
</div>

<div class="container">
  <div class="row">
  <?php
        for($i=0; $i<8; $i++){ ?>
        <div class="col-lg-3">
            <div class="card class-card teacher-card">
                <div class="image">
                    <img src="1.jpg" alt="">
                </div>
                <div class="info d-flex align-items-center flex-column">
                    <br>
                    <h5 style="color:rgb(255, 19, 184);">Jhankar</h5>
                    <p> <b>Specialised In:</b> CSS</p>
                    <p> <b>Ratings:</b> 
                    <i class="fas fa-star" style="color:#FDD017;"></i>
                    <i class="fas fa-star" style="color:#FDD017;"></i>
                    <i class="fas fa-star" style="color:#FDD017;"></i>
                    <i class="fas fa-star" style="color:#FDD017;"></i>
                    <i class="fas fa-star-half-alt" style="color:#FDD017;"></i>
                  </p>
                    
                </div>
                <div class="social d-flex justify-content-around">
                  <a href=""><i class="fab fa-facebook-f" style="color:#00008B; font-size:25px"></i></a>
                  <a href=""><i class="fab fa-linkedin-in" style="color:#2B547E;font-size:25px"></i></a>
                  <a href=""><i class="fab fa-stack-overflow" style="color:#FFA500;font-size:25px"></i></a>
                </div>
            </div>
        </div>
        <?php } ?>
  </div>
</div>




<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://rahatrrs.github.io/responsive-portfolio/">Rahat Raihan</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>
</body>
</html>