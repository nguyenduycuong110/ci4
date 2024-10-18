<script src="resources/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>   
<script src="resources/uikit/js/uikit.min.js"></script>
<script src="resources/uikit/js/uikit-slideshow.js"></script>
<script src="resources/uikit/js/components/lightbox.min.js"></script>
<script type='text/javascript' src='resources/plugins/3d-flipbook-dflip-lite/assets/js/dflip.min.js?ver=1.7.6.3'></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mobile-menu-bar').on('click', function(){
            var navigation = $('.navigation');
            // if(navigation.hasClass('block')){
            //     navigation.removeClass('block');
            // }else{
            //     navigation.addClass('block');
            // }

            // navigation.toggleClass('block');

            navigation.slideToggle();


            return false;
        });
    });
</script>
<script type="text/javascript">
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
<script src="resources/function.js"></script>
