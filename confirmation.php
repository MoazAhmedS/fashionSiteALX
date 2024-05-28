<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1 class="mb-0">Confirmation</h1>
            <nav class="mt-2">
                <a href="index.php" class="text-white">Home</a>
                <a href="logout.php" class="text-white ml-3">Logout</a>
            </nav>
        </div>
    </header>
    <main class="container mt-5">
        <h2>Your order has been placed successfully!</h2>
        <p>Thank you for your purchase.</p>
    </main>
</body>
</html>
