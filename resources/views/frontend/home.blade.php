<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Yayasan Dian Mandiri</title>

    @include('frontend.content.head')
</head>

<body>
    <div id="app">
        <!-- ======= Header ======= -->
        <front-end.header></front-end.header>
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
            <front-end.about></front-end.about>
            <front-end.program></front-end.program>
            <front-end.reward></front-end.reward>
            <front-end.team></front-end.team>
            <front-end.media></front-end.media>
            <front-end.figures></front-end.figures>
            <front-end.sertifikat></front-end.sertifikat>
            <front-end.affilations></front-end.affilations>
            <front-end.donate></front-end.donate>
            <front-end.contact></front-end.contact>
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
    </div>
    @include ('frontend.content.script')

</body>

</html>