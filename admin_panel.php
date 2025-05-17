
<?php include 'templates/header.php'; ?>
<div class="container py-5">
  <h2 class="mb-4 text-center">Admin Dashboard</h2>

  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card border-primary shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Post a Job</h5>
          <p class="card-text">Add new job listings for applicants to view.</p>
          <a href="post_job.php" class="btn btn-primary">Post Job</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-success shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Manage Applications</h5>
          <p class="card-text">Review and manage all job applications submitted.</p>
          <a href="manage_applications.php" class="btn btn-success">View Applications</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-secondary shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Logout</h5>
          <p class="card-text">End your admin session securely.</p>
          <a href="logout.php" class="btn btn-secondary">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'templates/footer.php'; ?>
