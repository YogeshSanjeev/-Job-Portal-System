<!-- admin_login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: 'Segoe UI', sans-serif;
        }
        .login-card {
            max-width: 400px;
            margin: 120px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            color: white;
        }
        .form-control {
            background: rgba(255,255,255,0.7);
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="login-card">
    <h3 class="text-center mb-4">Admin Login</h3>
    <form method="post" action="admin_panel.php">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button type="submit" class="btn btn-light w-100">Login</button>
    </form>
</div>
</body>
</html>
