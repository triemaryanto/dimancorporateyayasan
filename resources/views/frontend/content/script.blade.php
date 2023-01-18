<script src="{{ asset('js/app.js')}}"></script>
<!-- Vendor JS Files -->
<script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingpage/assets/js/main.js')}}"></script>
<script src="{{ asset('landingpage/assets/js/script.js')}}"></script>
<!-- slider js -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function() {
        baguetteBox.run(".gallery");
        baguetteBox.run(".figure");
    });

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            defaultLanguage: 'en',
            pageLanguage: 'en',
            includedLanguages: 'en,id,ja,zh-CN,zh-TW',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            multilanguagePage: true,
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>