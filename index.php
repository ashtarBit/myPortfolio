<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ashtar-Portfolio</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>


  <div class="background-overlay"></div>
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>

  <!-- Tech-inspired elements (circles represent icons) -->
  <div class="tech-icon icon1">&#x2B50;</div>
  <div class="tech-icon icon2">&#x1F4BB;</div>



  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/index.html">Abdullah Ashtar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#Donation">Donation</a></li>
      </ul>
    </div>
  </nav>
  <hr>


  <!-- About Section -->
  <section id="about" class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <img draggable="false" src="./img/Personal-Photo.jpg" alt="Your Photo"
          class="img-fluid rounded-circle mb-3">
      </div>

      <div id="content" class="col-md-8">
        <h1>Welcome to My Portfolio</h1>
        <span>Explore my projects and learn more about my work in web development, software engineering, and
          technology innovation.</span>
      </div>
    </div>
  </section>
  <hr>

  <section class="icons-bar py-3">
    <div class="container text-center">
      <i class="fab fa-html5 fa-2x icon"></i>
      <i class="fab fa-css3-alt fa-2x icon"></i>
      <i class="fab fa-js-square fa-2x icon"></i>
      <i class="fab fa-react fa-2x icon"></i>
      <i class="fab fa-node-js fa-2x icon"></i>
      <i class="fab fa-bootstrap fa-2x icon"></i>
      <i class="fab fa-github fa-2x icon"></i>
      <i class="fab fa-sass fa-2x icon"></i>
      <i class="fab fa-vuejs fa-2x icon"></i>
      <i class="fab fa-angular fa-2x icon"></i>
      <i class="fab fa-gulp fa-2x icon"></i>
      <i class="fab fa-git fa-2x icon"></i>
    </div>
  </section>

  <hr>
  <section class="language-icons py-3">
    <div class="container text-center">
      <div>
        <i class="fas fa-flag"></i> Arabic - Native
      </div>
      <div>
        <i class="fas fa-flag"></i> English - Very Good
      </div>
      <div>
        <i class="fas fa-flag"></i> German - Good
      </div>
      <div>
        <i class="fas fa-flag"></i> Turkish - Conversational
      </div>
    </div>
  </section>

  <hr>

  <!-- Projects Section with Slide-up Effect -->
  <section id="projects">
    <div class="container">
      <h2 class="text-center mb-4">Projects</h2>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <h5 class="card-title">Project 1</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 2">
            <div class="card-body">
              <h5 class="card-title">Project 2</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <h5 class="card-title">Project 3</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 4">
            <div class="card-body">
              <h5 class="card-title">Project 4</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 5">
            <div class="card-body">
              <h5 class="card-title">Project 5</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card slide-up">
            <img src="images/project1.jpg" class="card-img-top" alt="Project 6">
            <div class="card-body">
              <h5 class="card-title">Project 6</h5>
              <p class="card-text">A brief description of your project.</p>
              <a href="#" class="btn btn-primary">View Project</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <hr>

  <section id="resume" class="container py-5">
    <h2 class="text-center mb-4">My Resume</h2>
    <div class="resume-buttons text-center mb-4">
      <button onclick="showResume('english')" class="btn btn-primary mr-2">English Resume</button>
      <button onclick="showResume('german')" class="btn btn-secondary">German Resume</button>
    </div>

    <div id="resume-viewer" class="resume-viewer card mx-auto" style="display: none;">
      <embed id="resume-pdf" src="#" type="application/pdf" width="100%" height="500px">
    </div>
  </section>


  <hr>

  <!-- Contact Section -->

  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>Contact me now!</h4>
      </div>
      <div class="card-body">
        <form action="sendmail.php" method="POST">
          <div class="mb-3">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="fullname" required class="form-control" />
          </div>

          <div class="mb-3">
            <label for="email_address">Email Address</label>
            <input type="text" name="email" id="email_address" required class="form-control" />
          </div>

          <div class="mb-3">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" required class="form-control" />
          </div>

          <div class="mb-3">
            <label for="message">Message</label>
            <textarea name="message" id="message" required class="form-control" rows="5"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>
          </div>

        </form>

      </div>

    </div>

  </div>

  <hr>

  <!-- Donation Bar -->

  <h3 align="center">Support My Work:</h3>
  <p align="center">
    <a href="https://www.buymeacoffee.com/ashtarbit" target="_blank">
      <img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="210" height="50" alt="Buy Me A Coffee" />
    </a>
  </p>

  <hr>

  <div class="social-bar">
    <a href="https://github.com/ashtarBit" target="_blank" class="social-icon">
      <i class="fab fa-github"></i>
    </a>
    <a href="https://www.linkedin.com/in/abdullah-ashtar-288990317" target="_blank" class="social-icon">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://www.instagram.com/aasht_ar/" target="_blank" class="social-icon">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.youtube.com/@AbdullahAshtar-d4p" target="_blank" class="social-icon">
      <i class="fab fa-youtube"></i>
    </a>
  </div>
  <hr>
  <footer class="text-center py-4">
    <p>&copy; 2025 Abdullah Ashtar. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function showResume(language) {
      var resumeViewer = document.getElementById("resume-viewer");
      var resumePdf = document.getElementById("resume-pdf");

      resumeViewer.style.display = "block";

      if (language === "english") {
        resumePdf.src =
          "https://drive.google.com/file/d/17iNEzUAAHVL-FOJJCHFAijrPYgzX7ax-/preview";
      } else if (language === "german") {
        resumePdf.src =
          "https://drive.google.com/file/d/1bd69Fx9tB-jS2TS5GjT0irsEN7UJTkLi/preview";
      }
    }

    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if (messageText != '') {

      Swal.fire({
        title: "Thank you!",
        text: messageText,
        icon: "success"
      });
      <?php unset($_SESSION['status']); ?>
    }
  </script>
</body>

</html>