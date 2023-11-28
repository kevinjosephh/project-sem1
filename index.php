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
    <title>DriveEase Car Rentals</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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

    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: black">DriveEase Car Rentals</h1>
                            <p class="intro-text">
                                Online Car Rental Service
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Cars</h3>
<br>
<!-- Update the checkbox HTML -->
<?php 
$selectedFuelTypes = isset($_GET['fuelTypes']) ? explode(',', $_GET['fuelTypes']) : [];
$selectedSegments = isset($_GET['segments']) ? explode(',', $_GET['segments']) : [];

?>
<div style="display: flex; justify-content: flex-start; gap: 20px;">
<div>
    <label>Filter by Fuel Type:</label><br>
    <input type="checkbox" id="petrolCheckbox" onchange="applyFilters()" <?php if(in_array('Petrol', $selectedFuelTypes)) echo 'checked'; ?>>
    <label for="petrolCheckbox">Petrol</label><br>
    <input type="checkbox" id="dieselCheckbox" onchange="applyFilters()" <?php if(in_array('Diesel', $selectedFuelTypes)) echo 'checked'; ?>>
    <label for="dieselCheckbox">Diesel</label>
    <!-- Add checkboxes for other fuel types -->
</div>
<div>
    <label>Filter by Segment:</label><br>
    <input type="checkbox" id="hatchbackCheckbox" onchange="applyFilters()" <?php if(in_array('Hatchback', $selectedSegments)) echo 'checked'; ?>>
    <label for="hatchbackCheckbox">Hatchback</label><br>
    <input type="checkbox" id="sedanCheckbox" onchange="applyFilters()" <?php if(in_array('Sedan', $selectedSegments)) echo 'checked'; ?>>
    <label for="sedanCheckbox">Sedan</label><br>
    <input type="checkbox" id="suvCheckbox" onchange="applyFilters()" <?php if(in_array('SUV', $selectedSegments)) echo 'checked'; ?>>
    <label for="suvCheckbox">SUV</label>
    <!-- Add checkboxes for other segment types -->
</div>
</div>
        <section class="menu-content">
            <?php 

if (!empty($selectedFuelTypes) || !empty($selectedSegments)) {
    $conditions = [];

    if (!empty($selectedFuelTypes)) {
        $fuelTypeConditions = implode("' OR fuel_type='", $selectedFuelTypes);
        $conditions[] = "fuel_type IN ('$fuelTypeConditions')";
    }

    if (!empty($selectedSegments)) {
        $segmentConditions = implode("' OR segment='", $selectedSegments);
        $conditions[] = "segment IN ('$segmentConditions')";
    }

    $whereClause = implode(' AND ', $conditions);

    $sql1 = "SELECT * FROM cars WHERE car_availability='yes' AND ($whereClause)";
} else {
    // If no filters are selected, fetch all cars
    $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
}

$result1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1)){
        $car_id = $row1["car_id"];
        $car_name = $row1["car_name"];
        $ac_price = $row1["ac_price"];
        $ac_price_per_day = $row1["ac_price_per_day"];
        $non_ac_price = $row1["non_ac_price"];
        $non_ac_price_per_day = $row1["non_ac_price_per_day"];
        $car_img = $row1["car_img"];
        $segment = $row1["segment"];
        $fuel_type = $row1["fuel_type"];
   
        ?>
         <a href="booking.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $car_name; ?> </b></h5>
            <h6> AC Fare: <?php echo ("Rs. " . $ac_price . "/km & Rs." . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("Rs. " . $non_ac_price . "/km & Rs." . $non_ac_price_per_day . "/day"); ?></h6>

            
            </div> 
           
            
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            ?>                                      
        </section>
                    
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2023 Car Rentals</h5>
                </div>
                
            </div>
        </div>
    </footer>
    <script>
    function applyFilters() {
        var petrolChecked = $('#petrolCheckbox').is(':checked');
        var dieselChecked = $('#dieselCheckbox').is(':checked');
        // Add more fuel type checkboxes as needed

        var hatchbackChecked = $('#hatchbackCheckbox').is(':checked');
        var sedanChecked = $('#sedanCheckbox').is(':checked');
        var suvChecked = $('#suvCheckbox').is(':checked');
        // Add more segment checkboxes as needed

        var selectedFuelTypes = [];
        if (petrolChecked) selectedFuelTypes.push('Petrol');
        if (dieselChecked) selectedFuelTypes.push('Diesel');
        // Push other selected fuel types

        var selectedSegments = [];
        if (hatchbackChecked) selectedSegments.push('Hatchback');
        if (sedanChecked) selectedSegments.push('Sedan');
        if (suvChecked) selectedSegments.push('SUV');
        // Push other selected segments

        var selectedFuelTypesParam = selectedFuelTypes.join(',');
        var selectedSegmentsParam = selectedSegments.join(',');

        var url = 'index.php';
        if (selectedFuelTypesParam !== '' || selectedSegmentsParam !== '') {
            url += '?';
            if (selectedFuelTypesParam !== '') {
                url += 'fuelTypes=' + selectedFuelTypesParam;
                if (selectedSegmentsParam !== '') {
                    url += '&';
                }
            }
            if (selectedSegmentsParam !== '') {
                url += 'segments=' + selectedSegmentsParam;
            }
        }

        window.location.href = url;
    }
</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>