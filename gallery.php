    <?php
        include 'connection.php';
        $sql="select * from gallery_photos order BY ID DESC limit 12";
        $result=mysqli_query($con,$sql);
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="drsatyam, Dr Satyam's Physiotherapy, physiotherapy in ranchi, physiotherapy services in ranchi">
    <title>Ranchi Best Physiotherapy Clinic | Dr. Satyam Prakash</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <style>
        .session-title{
            margin-top:80px;
        }
        .fitcontent{
            height:350px;
            width:350px;
        }
    </style>
    <!-- google font -->
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    <header>
       
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 no-padding col-sm-12 nav-img">
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                       <a href="index.html"> <img src="images/myfinallogo.png" alt=""></a>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a class="h" href="index.html">Home</a></li>
                            <li><a class="h" href="index.html#about">About Us</a></li>
                            <li><a class="h" href="index.html#services">Services</a></li>
                            <li><a class="h" href="index.html#gallery">Gallery</a></li>
                            <li><a class="h" href="index.html#contact">Contact Us</a></li>
                            <li><a href="login.php"><button class="btn btn-info"><i class="fa fa-user-tie"></i> Login</button></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
    
     <!-- ################# Slider Starts Here#######################--->
    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">
           <div class="session-title row">
                <h2>Our Gallery</h2>
            </div>
            <div class="row">
                <br />
                <?php 
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter">
                            <img src="admindash/gallery_photos/<?php echo $row['photo_path'];?>" class="img-responsive zoom">
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->
    
        <!--  ************************* Contact Us Starts Here ************************** -->
<!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        The World is equipped with modern facilities, instruments and innovative methodologies fulfilling the needs of every person searching for best Physical Therapy Clinic in Ranchi.
                    </p>
                    <p> A developing Satyam’s Pathology, Ranchi is slowly shading its sweet and tranquil existence to match their steps to rapid globalization</p>
                </div>
                <!-- <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div> -->
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Our Timing</h2>
                    <address class="md-margin-bottom-40">
                        Days : <a class="h" href="?">Monday to Saturday</a> <br>
                               <a href="?" style="color: #8585ff;">Sunday Appointment Only</a>  <br>
                        Hours: <a class="h" href="?" class="">9 AM To 8 PM</a><br>
                        Web: <a class="h" href="index.html" class="">http://drsatyamsphysiotherapyclinic.com</a>
                    </address>

                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Indira place , ground floor <br>
                        Hinoo<br>
                        Ranchi, Jharkhand 834002, IND <br>
                        Phone: <a class="h" href="tel:+919835756761">+91 9835756761</a> <br>
                        Email: <a class="h" href="mailto:dr.satyamprakash.20@gmail.com" class="">dr.satyamprakash.20@gmail.com</a><br>
                        Web: <a class="h" href="index.html" class="">http://drsatyamsphysiotherapyclinic.com</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a class="h" href="tel:+916201675668">2021 &copy; All Rights Reserved | Designed and Developed by A+ Techs(+916201675668)</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/Dr-Satyams-Physiotherapy-clinic-113237767472139/"><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>
</html>