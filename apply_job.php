
<?php include 'templates/header.php'; ?>
<div class="container py-5">
  <h2 class="mb-4 text-center">Apply for a Job</h2>
  <form action="submit_application.php" method="POST" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="full_name" required>
    </div>
    <div class="col-md-6">
      <label for="emailAddress" class="form-label">Email</label>
      <input type="email" class="form-control" id="emailAddress" name="email" required>
    </div>
    <div class="col-md-12">
      <label for="jobTitle" class="form-label">Job Title</label>
      <input type="text" class="form-control" id="jobTitle" name="job_title" required>
    </div>
    <div class="col-md-12">
      <label for="resume" class="form-label">Resume Details</label>
      <textarea class="form-control" id="resume" name="resume" rows="5" required></textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success">Submit Application</button>
    </div>
  </form>
</div>
<main class="flex-grow-1">
  <!-- all your container and content here -->
</main>
<?php include 'templates/footer.php'; ?>
