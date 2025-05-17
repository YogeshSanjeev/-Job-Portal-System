
<?php include 'templates/header.php'; ?>
<div class="container py-5 d-flex justify-content-center">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Admin Login</h3>
        <form action="admin_authenticate.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'templates/footer.php'; ?>
