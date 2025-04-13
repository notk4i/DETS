<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
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

    .dashboard-container {
             padding: 30px;
         }
 
         .summary-card {
             background-color: #f8f9fa;
             border: 1px solid #ddd;
             border-radius: 10px;
             padding: 20px;
             text-align: center;
             box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
         }
 
         .summary-card h5 {
             margin-top: 10px;
         }
 
         @media (max-width: 767.98px) {
             .sidebar {
                 display: none;
             }
         }

</style>
<body>

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

    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-container">
             <h2 class="mb-4 mt-5">Dashboard Overview</h2>
 
             <!-- Summary Cards -->
             <div class="row mb-4">
                 <div class="col-md-3">
                     <div class="summary-card">
                         <h2>15</h2>
                         <h5>Total Events</h5>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="summary-card">
                         <h2>Capitolians</h2>
                         <h5>Participants</h5>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="summary-card">
                         <h2>10</h2>
                         <h5>Completed Events</h5>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="summary-card">
                         <h2>5</h2>
                         <h5>Upcoming Events</h5>
                     </div>
                 </div>
             </div>
 
             <!-- Recent Events -->
             <h4>Recent Events</h4>
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>Event Name</th>
                         <th>Date</th>
                         <th>Status</th>
                         <th>Top Scorer</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>Intramurals 2025</td>
                         <td>April 3</td>
                         <td><span class="badge bg-success">Done</span></td>
                         <td>CCS</td>
                     </tr>
                     <tr>
                         <td>Defense</td>
                         <td>April 28</td>
                         <td><span class="badge bg-warning text-dark">Pending</span></td>
                         <td>DETS</td>
                     </tr>
                 </tbody>
             </table>
         </main>
     </div>
 </div>
</body>
</html>