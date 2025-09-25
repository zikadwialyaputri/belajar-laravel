<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .jumbotron {
            background-color: #007bff;
            color: white;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 3rem;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .alert {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">

        <!-- Jumbotron / Hero Section -->
        <div class="jumbotron rounded">
            <h1>{{ $username }}</h1>
            <p>{{ $last_login }}</p>
        </div>

        <div class="row">
            <!-- About Section -->
            <div class="col-lg-8 mb-4">
                <div class="card p-4 h-100">
                    <h5 class="card-title">About Our Application</h5>
                    <p class="card-text">Our application provides a clean and intuitive interface, allowing users to navigate easily and perform tasks efficiently. Built with Laravel and Bootstrap, it offers flexibility and responsiveness.</p>
                    <a href="#" class="btn btn-primary">Explore More</a>
                </div>
            </div>

            <!-- Alerts Section -->
            <div class="col-lg-4 mb-4">
                <div class="card p-4 h-100">
                    <h5 class="card-title">Alerts</h5>
                    <div class="alert alert-info" role="alert">
                        Informational alert
                    </div>
                    <div class="alert alert-success" role="alert">
                        Success alert
                    </div>
                    <div class="alert alert-warning" role="alert">
                        Warning alert
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
