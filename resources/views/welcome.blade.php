<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">

</head>

<body class="antialiased">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><img src="landingpage/assets/img/logo.png"> &nbsp;<a href="index.html">Dian Mandiri</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a class="nav-link scrollto" href=""><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><a class="nav-link scrollto" href="#reward">Reward</a></li>
                            <li><a class="nav-link scrollto" href="#figures">Figure</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="#">Publications</a></li> -->
                    <li class="dropdown"><a class="nav-link scrollto" href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#">Cooperative</a></li>
                            <li><a class="nav-link scrollto" href="#">Social Giving</a></li>
                            <li><a class="nav-link scrollto" href="#">Early Childhood Education</a></li>
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="#faq">News & Media</a></li>
                    <li><a class="nav-link scrollto" href="#Affilations">Affilations</a></li>
                    <li><a class="nav-link scrollto" href="#Affilations">Donate</a></li>
                    <li><a class="nav-link scrollto" href="https://recruitment.talenta.co/DimanCareer" target="_blank">Carrer</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                    <li>
                        <div class="nav-link scrollto" id="google_translate_element"></div>
                    </li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h3>Welcome to <strong>Dian Mandiri</strong></h3>
            <h1>Assist Through Action</h1>
            <h2>
                Dian Mandiri (DIMAN) Foundation was established in 1998 with a
                strong commitment to reduce poverty in Indonesia through
                holistic Micro Enterprise Development (MED).
            </h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="credits">
                    &copy; Copyright <span><strong>Dian Mandiri</strong></span> @2023. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://facebook.com/dimanfoundation" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/dimanfoundation" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="app"></div>
    <script src="js/app.js"></script>
</body>


</html>