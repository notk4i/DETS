<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Centered Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style type="text/css">
    body {
        background-color: black;
    }

    .navbar a {
        color: white !important;
        padding: 14px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background-color: #575757;
    }

    .hero {
        background: url('troph.jpg') no-repeat center center/cover;
        height: 50vh;
        color: #fff;
        text-align: center;
        padding: 100px 20px;
        position: relative;
        flex-grow: 1;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .gallery-img {
        color: white;
        width: 100%;
        height: 200px;
        background-color: white;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .gallery-img:hover {
        transform: scale(1.05);
    }

    #map {
        height: 400px;
        width: 100%;
        border-radius: 10px;
        margin-bottom: 40px;
    }

    footer {
        background-color: #36454F;
        color: white;
        padding: 10px 0;
        text-align: center;
        width: 100%;
        position: relative;
    }

    footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
    }

    footer a:hover {
        text-decoration: underline;
    }

    /* Sidebar styles */
    .sidebar {
        background-color: #343a40;
        min-height: 100vh;
        padding-top: 20px;
    }

    .sidebar a {
        color: white;
        font-size: 18px;
        padding: 10px 15px;
        display: block;
    }

    .sidebar a:hover {
        background-color: #575757;
    }

  </style>
</head>
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

<!-- Main Content and Sidebar Layout -->
<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-2 sidebar">
      <h5 class="text-white text-center">Menu</h5>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Scores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Settings</a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">
      
      <!-- Hero Section -->
      <section class="hero d-flex align-items-center">
        <div class="container hero-content">
          <h1 class="display-4"><strong>Compete with heart, celebrate with pride</strong></h1>
          <p class="lead text-light mt-3">
            Ready to make your mark? Explore events, track scores, and join the spirit of competition today.
          </p>
        </div>
      </section>

      <!-- Image Gallery -->
      <div class="container my-5">
        <div class="row g-4">
          <div class="col-md-3"><img src="CD.jpg" alt="Gallery Image 1" class="gallery-img"></div>
          <div class="col-md-3"><img src="LB.jpg" alt="Gallery Image 2" class="gallery-img"></div>
          <div class="col-md-3"><img src="CI.jpg" alt="Gallery Image 3" class="gallery-img"></div>
          <div class="col-md-3"><img src="miss.jpg" alt="Gallery Image 4" class="gallery-img"></div>
          <div class="col-md-3"><img src="SS.jpg" alt="Gallery Image 5" class="gallery-img"></div>
          <div class="col-md-3"><img src="AZ.jpg" alt="Gallery Image 6" class="gallery-img"></div>
          <div class="col-md-3"><img src="LL.jpg" alt="Gallery Image 7" class="gallery-img"></div>
        </div>
      </div>

      <!-- Google Map -->
      <div class="container mb-5">
        <h2 class="text-white mb-3">Our Location</h2>
        <div class="ratio ratio-16x9">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15796.0!2d124.6527!3d8.4882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff8e50824925a1%3A0x10a71a3df4a8cc6b!2sCapitol%20University!5e0!3m2!1sen!2sph!4v1712996933831!5m2!1sen!2sph"
            width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container">
    <p>&copy; 2025 Dynamic Event Tabulation System. All Rights Reserved.</p>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>
