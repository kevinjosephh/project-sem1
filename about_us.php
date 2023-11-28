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
    <title>About Us - Car Rentals</title>
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
                <h2>Welcome to DriveEase Rentals</h2>
                <p>
                At DriveEase Rentals, we're more than just a car rental service; we're your ultimate travel companion. Our journey began with a shared passion for transforming the way people experience travel. Founded by a group of enterprising students from Thakur MCA, we set out to bridge the gap between convenience, affordability, and exceptional service in the car rental industry.
                </p>
                <!-- Rest of your content -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Our Story</h2>
                <p>
                Driven by a desire to streamline the car rental process for students and travelers alike, our story started within the halls of Thakur MCA. Frustrated by the limitations and complexities of existing rental services, our founders envisioned a seamless and student-friendly alternative. Through dedication and innovation, DriveEase Rentals emerged as a solution-oriented platform catering to the diverse needs of our community.
                </p>
                <!-- Rest of your content -->
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Mission and Values</h2>
                <p>
                <b>Mission:</b> Our mission is simple – to empower every traveler with accessible, reliable, and affordable transportation solutions. We're committed to providing a hassle-free rental experience that exceeds expectations.
                <br>
                <b>Values:</b> Our core values revolve around transparency, accessibility, and customer-centricity. We believe in fostering a culture of trust, sustainability, and continuous improvement.
                </p>
                <!-- Rest of your content -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Why Choose DriveEase Rentals</h2>
                <p>
                <b>Student-Centric Focus:</b> As a student-initiated venture, we understand the unique needs and budget constraints of students. Our rental options and pricing are tailored to accommodate student lifestyles without compromising on quality.
                <br>
                <b>Diverse Fleet:</b> From compact cars for solo adventures to spacious SUVs for group travels, our diverse fleet ensures there's a perfect ride for every occasion.
                <br>
                <b>Exceptional Service:</b> Our commitment to exceptional customer service means a seamless booking experience, timely assistance, and a reliable support system throughout your rental journey.
                </p>
                <!-- Rest of your content -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Meet Our Team</h2>
                <p>
                At DriveEase Rentals, our team comprises passionate individuals driven by a shared vision. From the tech-savvy minds behind our user-friendly platform to our dedicated customer service representatives, each member plays a pivotal role in delivering unparalleled service.
                </p>
                <!-- Rest of your content -->
            </div>
        </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
