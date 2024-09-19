<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-align: left;
            font-size: 18px;
            color: white;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            margin-left: 250px;
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="text-white text-center">My Dashboard</h4>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-4">Dashboard Overview</h1>
                    <p>Welcome to your dashboard! Use the sidebar to navigate through the sections.</p>
                    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <p class="card-text">Manage users in the system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <p class="card-text">Track your sales data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Reports</h5>
                                    <p class="card-text">Generate detailed reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
