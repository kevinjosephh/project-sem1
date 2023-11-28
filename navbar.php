<!-- navbar.php -->


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                DriveEase Car Rentals </a>
            </div>
            <?php
            if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about_us.php">About us</a>
            </li>
            <li>
                        <a href="contact_us.php">Contact us</a>
            </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="about_us.php">About us</a>
                    </li>
                    <li>
                        <a href="contact_us.php">Contact us</a>
            </li>
                </ul>
            </div>
            <?php   }
                ?>
        </div>
    </nav>
