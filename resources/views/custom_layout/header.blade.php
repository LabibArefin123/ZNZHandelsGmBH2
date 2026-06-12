<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZNZ Handels GmbH || Your Trusted Partner in Global Trade</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<header>
    <!-- Header Section -->
    <div class="bg-light py-3 shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-2 mb-md-0">
                    <a href="{{ route('home') }}">
                        <img src="img/bg.png" alt="Logo" class="img-fluid" style="max-width: 350px; height: auto;">
                    </a>
                </div>

                <!-- Navigation Menu -->
                <div class="col-lg-6 col-md-8">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <!-- Toggler Button for Mobile View -->
                        <button class="navbar-toggler mx-auto mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item me-lg-3">
                                    <a class="nav-link position-relative" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item me-lg-3">
                                    <a class="nav-link position-relative" href="{{ route('about') }}">About Us</a>
                                </li>
                                <!-- <li class="nav-item dropdown me-lg-3">
                                    <a class="nav-link dropdown-toggle position-relative" href="{{ route('product') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Product
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('men') }}">Men</a></li>
                                        <li><a class="dropdown-item" href="{{ route('women') }}">Women</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item me-lg-3">
                                    <a class="nav-link position-relative" href="{{ route('product') }}">Product</a>
                                </li>
                                <li class="nav-item me-lg-3">
                                    <a class="nav-link position-relative" href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item me-lg-3">
                                    <a class="nav-link position-relative" href="{{ route('contact') }}">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Icons Section -->
                <div class="col-lg-3 col-md-12 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="#" class="text-dark"><i class="bi bi-search" title="Search"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-heart" title="Wishlist"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>
