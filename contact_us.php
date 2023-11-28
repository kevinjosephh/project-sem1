<!DOCTYPE html>
<html>

<?php 
    session_start(); 
    require 'connection.php';
    $conn = Connect();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Car Rentals</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
        body {
            padding-top: 70px; /* Adjust this value as needed */
        }
        .navbar {
            z-index: 1000; /* Ensure the navbar stays on top */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.navbar').css('background-color', '#fff'); // Opaque background
                } else {
                    $('.navbar').css('background-color', 'transparent'); // Transparent background
                }
            });
        });
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Contact Us</h2>
                <p>Got questions or feedback? Reach out to us through the form below or via our contact information. We'd love to hear from you!</p>
                
                <!-- Contact Form -->
                <form action="contact_process.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- End Contact Form -->

                <!-- Contact Information -->
                <div class="mt-4">
                    <h4>Contact Information:</h4>
                    <p>Email: info@carrentals.com</p>
                    <p>Phone: +1234567890</p>
                    <p>Address: 123 Main Street, City, Country</p>
                </div>
                <!-- End Contact Information -->
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
