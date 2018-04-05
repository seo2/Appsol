 <footer>
<?php $themeURL = get_stylesheet_directory_uri(); ?> 

        <div class="container">

          <div class="col-lg-2 col-lg-offset-1">
              <img src="<?php echo $themeURL; ?>/assets/img/footer_corfo.jpg" class="img-responsive center-block">
          </div>
          <div class="col-lg-1">
               <p class="text-center">Colaboran:</p>
          </div>
          <div class="col-lg-3">
              <img src="<?php echo $themeURL; ?>/assets/img/footer_acesol.jpg" class="img-responsive center-block">
          </div>
          <div class="col-lg-2">
              <img src="<?php echo $themeURL; ?>/assets/img/footer_gobierno.jpg" class="img-responsive center-block">
          </div>
          <div class="col-lg-3">
              <img src="<?php echo $themeURL; ?>/assets/img/footer_aiguasol.jpg" class="img-responsive center-block">
          </div>
 
        </div>    
</footer>
 
<script type="text/javascript">
  jQuery(window).load(function(){
    jQuery('.elbanner').slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          fade: true,
        });

      function vidplay() {
         var video = document.getElementById("video_banner");
         var button = document.getElementById("play");
         if (video.paused) {
            video.play();
            button.textContent = "||";
         } else {
            video.pause();
            button.textContent = ">";
         }
      }     
  });
</script>


<?php wp_footer(); ?>
</body>

</html>
