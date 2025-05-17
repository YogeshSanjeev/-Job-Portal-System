<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    header("Location: login.php");
    exit();
}

require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$jobCollection = $client->job_portal->jobs;
$applicationsCollection = $client->job_portal->applications;

$jobCount = $jobCollection->countDocuments();
$appCount = $applicationsCollection->countDocuments();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 40px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card h2 {
            margin-top: 0;
        }
        .stats {
            display: flex;
            gap: 20px;
        }
        .stat {
            flex: 1;
            text-align: center;
            padding: 20px;
            background: #28a745;
            color: white;
            border-radius: 10px;
        }
        .stat:nth-child(2) {
            background: #17a2b8;
        }
        .logout {
            text-align: right;
            padding: 10px 20px;
        }
        .logout a {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <div class="stats">
            <div class="stat">
                <h2><?= $jobCount ?></h2>
                <p>Total Jobs Posted</p>
            </div>
            <div class="stat">
                <h2><?= $appCount ?></h2>
                <p>Total Applications</p>
            </div>
        </div>

        <div class="card">
            <h2>Manage</h2>
            <ul>
                <li><a href="admin_panel.php">View Applications</a></li>
                <li><a href="../post_job.php">Post a New Job</a></li>
                <li><a href="../search_jobs.php">Search Jobs</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
