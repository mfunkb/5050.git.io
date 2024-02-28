<?php 
// koneksi database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skateshop</title>

   

    <!-- Favicons -->
    <link href="assets/img/mainPhoto.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- FrameWorks -->
    <link href="assets/frameworks/aos/aos.css" rel="stylesheet">
    <link href="assets/frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/frameworks/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/frameworks/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/frameworks/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/frameworks/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/styles/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Style -->
    <link href="assets/styles/style.css" rel="stylesheet">
</head>
<body>






<!-- ======= home Section ======= -->
<section class="d-flex flex-column justify-content-center align-items-center" id="home">
    <div class="home-container" data-aos="fade-in">
        <h1>5050 SKATE SHOP</h1>
        <p>Selling  <span class="typed"
                     data-typed-items="Local Skate., Import Skate., T-shirt., Cap.,."></span></p>
        <!-- Tombol Register -->
         <a href="login.php" class="btn btn-primary">Get Started</a>
        
    </div>
</section>

<!-- End home -->





    

   

                   

                    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Always available for freelancing if the right project comes along, Feel free to contact me.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Pelawatta,Hapugala,Galle,Sri Lanka</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>nimeshpiyumantha11@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+94 76 591 0270</p>
                        </div>

                        <iframe src="https://maps.google.com/maps?q=Srilanka,Galle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</main>
<!-- Framework JS Files -->
<script rel="script" src="assets/frameworks/purecounter/purecounter_vanilla.js"></script>
<script rel="script" src="assets/frameworks/aos/aos.js"></script>
<script rel="script" src="assets/frameworks/bootstrap/js/bootstrap.bundle.min.js"></script>
<script rel="script" src="assets/frameworks/glightbox/js/glightbox.min.js"></script>
<script rel="script" src="assets/frameworks/isotope-layout/isotope.pkgd.min.js"></script>
<script rel="script" src="assets/frameworks/swiper/swiper-bundle.min.js"></script>
<script rel="script" src="assets/frameworks/typed.js/typed.min.js"></script>
<script rel="script" src="assets/frameworks/waypoints/noframework.waypoints.js"></script>
<script rel="script" src="assets/frameworks/php-email-form/validate.js"></script>

<!--Jquery-->
<script src="assets/styles/js/jquery.min.js" type="text/javascript"></script>
<!--Boostrap-Jquery-->
<script src="assets/styles/js/bootstrap.js" type="text/javascript"></script>

<!-- Template Main JS File -->
<script rel="script" src="assets/styles/js/main.js"></script>
</body>
</html>