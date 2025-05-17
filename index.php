<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Job Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      font-weight: 700;
      font-size: 1.75rem;
    }
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216') center/cover no-repeat;
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.25rem;
      margin-bottom: 30px;
    }
    .features .card {
      transition: transform 0.3s ease;
    }
    .features .card:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="bi bi-briefcase-fill me-2"></i>Job Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="search_jobs.php"><i class="bi bi-search"></i> Search Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="apply_job.php"><i class="bi bi-pencil-square"></i> Apply for a Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin_login.php"><i class="bi bi-shield-lock"></i> Admin Panel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <h1>Find Your Dream Job</h1>
    <p>Explore opportunities or post your job openings with ease.</p>
    <a href="search_jobs.php" class="btn btn-light btn-lg me-2">Search Jobs</a>
    <a href="apply_job.php" class="btn btn-light btn-lg me-2">Apply for a Job</a>
    <a href="admin_login.php" class="btn btn-light btn-lg me-2">Admin Panel</a>
  </div>
</section>

<section class="py-5 features">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="card p-4 h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-globe2 me-2"></i>Browse Listings</h5>
            <p class="card-text">Explore a wide range of job listings across various industries and locations.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card p-4 h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-lightning-fill me-2"></i>One-Click Apply</h5>
            <p class="card-text">Apply easily and manage your applications from a centralized dashboard.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card p-4 h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-shield-check me-2"></i>Admin Control</h5>
            <p class="card-text">Manage job postings, view applicants, and maintain platform integrity.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    <small>&copy; 2025 <strong>Job Portal</strong>. All rights reserved.</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
