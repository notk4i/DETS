<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style type="text/css">
    .navbar a {
        color: white !important;
        padding: 14px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background-color: #575757;
    }

     .about-section {
      background-color: #f8f9fa;
      padding: 60px 0;
    }
    .about-img {
      max-width: 100%;
      border-radius: 8px;
    }
    .social-icons i {
      margin-right: 15px;
      color: #333;
      transition: color 0.3s;
    }
    .social-icons i:hover {
      color: #007bff;
    }

</style>
<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DETS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex justify-content-center w-100">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log In</a>
          </li>
        </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="about-section d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3 class="mb-3">ABOUT US</h3>
        <p>A Dynamic Event Tabulation System (DETS) is a software solution designed to efficiently track, organize, and analyze events in real-time. It is particularly useful in scenarios that require continuous updates, automation, and structured data management, such as healthcare, sports, business analytics, and research.</p>
        <p>Key Features<br><br>1. <strong>Real-Time Data Entry & Updates:</strong> Automated data collection from multiple sources, Instant updates and synchronization across devices.<br>2. <strong>Leaderboards:</strong> Participants are ranked based on points, achievements, or other performance metrics.<br>3. <strong>Automated Data Processing & Analysis:</strong> It improves efficiency, accuracy, and scalability in data-driven decision-making.<br>4. <strong>Event Scheduling Management:</strong> It often involves automation tools to streamline scheduling, resource allocation, and communication, reducing conflicts and improving productivity.<br>5. <strong>Multi-Event:</strong> It requires coordination of logistics, resources, participants, and communication across various events while ensuring efficiency and minimal conflicts.
</p>
        <a href="#" class="btn btn-dark mb-3">Read More</a>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="kkk.jpg" alt="About Image" class="about-img">
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>