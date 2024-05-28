<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1 class="mb-0">Fashion Store</h1>
            <nav class="mt-2">
                <a href="index.php" class="text-white">Home</a>
                <a href="login.php" class="text-white ml-3">Login</a>
                <a href="register.php" class="text-white ml-3">Register</a>
            </nav>
        </div>
    </header>
    <main class="container mt-5">
        <section class="hero text-center mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image1.jpg" class="d-block w-100" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Classic Cream Blouse Shirt</h2>
                            <p>Light breathable blouse for any condition</p>
                            <p class="text-danger">$82.61 <del class="text-muted">$153.92</del></p>
                            <button class="btn btn-primary">View More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image2.jpg" class="d-block w-100" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Stylish Red Dress</h2>
                            <p>Perfect for any occasion</p>
                            <p class="text-danger">$120.00 <del class="text-muted">$200.00</del></p>
                            <button class="btn btn-primary">View More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image3.jpg" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Casual Blue Jeans</h2>
                            <p>Comfortable and stylish</p>
                            <p class="text-danger">$45.00 <del class="text-muted">$90.00</del></p>
                            <button class="btn btn-primary">View More</button>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="trending">
            <h2>Trending Products</h2>
            <div class="row">
                <?php
                $stmt = $pdo->query("SELECT * FROM products LIMIT 4");
                while ($row = $stmt->fetch()) {
                    echo '<div class="col-md-3 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                    echo '<p class="card-text">$' . $row['price'] . '</p>';
                    echo '<a href="product.php?id=' . $row['id'] . '" class="btn btn-primary">View Details</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
