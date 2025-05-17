<?php include 'templates/header.php'; ?>

<main class="flex-grow-1">
  <div class="container py-5">
    <h2 class="mb-4 text-center">Search Job Listings</h2>
    <form class="row g-3 mb-4" method="GET" action="search_jobs.php">
      <div class="col-md-5">
        <input type="text" class="form-control" name="title" placeholder="Job title or keyword">
      </div>
      <div class="col-md-5">
        <input type="text" class="form-control" name="location" placeholder="Location">
      </div>
      <div class="col-md-2 d-grid">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    <!-- Sample Job Results -->
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Frontend Developer</h5>
          <small>New York, NY</small>
        </div>
        <p class="mb-1">Join a fast-paced startup building web apps. Experience with React preferred.</p>
        <small>Posted 2 days ago</small>
      </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Marketing Specialist</h5>
          <small>Remote</small>
        </div>
        <p class="mb-1">Drive growth and outreach in digital campaigns. Remote opportunity available.</p>
        <small>Posted 5 days ago</small>
      </a>
    </div>
  </div>
</main>
<main class="flex-grow-1">
  <!-- all your container and content here -->
</main>

<?php include 'templates/footer.php'; ?>
