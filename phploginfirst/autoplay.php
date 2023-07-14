<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Autoplay usage demo">
    <meta name="author" content="David Deutsch">
    <title>
      Autoplay Demo | Owl Carousel 
    </title>
    <link rel="stylesheet" href="./carousel/css/docs.theme.min.css">
    <link rel="stylesheet" href="./carousel/css/owl.carousel.min.css">
 
    <script src="./carousel/js/jquery.min.js"></script>
    <script src="./carousel/js/owl.carousel.js"></script>
  </head>
  <body>
     <!--  Demos -->
     <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
            <div><img src="./images/airindia-logo-white.svg" alt=""></div>
            </div>
            <div class="item">
            <div><img src="./images/microsoft.png" alt=""></div>
            </div>
            <div class="item">
            <div><img src="./images/airindia-logo-white.svg" alt=""></div>
            </div>
            <div class="item">
            <div ><img src="./images/microsoft.png" alt=""></div>
            </div>
            <div class="item">
            <div><img src="./images/airindia-logo-white.svg" alt=""></div>
            </div>
            <div class="item">
            <div><img src="./images/airindia-logo-white.svg" alt=""></div>
            </div>      
          </div>  
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
        </div>
      </div>
      </section>
    <!-- <script src="./carousel/js/highlight.js"></script> -->
    <!-- <script src="./carousel/js/app.js"></script> -->
  </body>
</html>