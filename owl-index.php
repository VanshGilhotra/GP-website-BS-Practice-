        <div class="row">
          <div id="img" class="owl-carousel owl-theme">
            <div class="item">
              <a href="#"><img src="img/aus.jpg" alt="australia" class="img-fluid"></a>
              <h3 class="text-center text-white bg-yellow py-2">AUSTRALIA</h3>
            </div>
            <div class="item">
              <a href="#"><img src="img/newz.jpg" alt="new zealand" class="img-fluid"></a>
              <h3 class="text-center text-white bg-yellow py-2">NEW ZEALAND</h3>
            </div>
            <div class="item">
              <a href="#"><img src="img/uk.jpg" alt="uk" class="img-fluid"></a>
              <h3 class="text-center text-white bg-yellow py-2">UK</h3>
            </div>
            <div class="item">
              <a href="#"><img src="img/canada.jpg" alt="canada" class="img-fluid"></a>
              <h3 class="text-center text-white bg-yellow py-2">CANADA</h3>
            </div>
          </div> <!-- /.owl-carousel -->
        </div> <!-- /.row -->

        <div class="row">
          <div id="flag" class="owl-carousel owl-theme">
            <div class="item">
              <a href="#"><img src="img/australia-flag.jpg" alt="australia-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/newz-flag.jpg" alt="new zealand-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/uk-flag.jpg" alt="uk-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/canada-flag.jpg" alt="canada-flag" class="img-fluid img-thumbnail"></a>
            </div> 
            <div class="item">
              <a href="#"><img src="img/australia-flag.jpg" alt="australia-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/newz-flag.jpg" alt="new zealand-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/uk-flag.jpg" alt="uk-flag" class="img-fluid img-thumbnail"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/canada-flag.jpg" alt="canada-flag" class="img-fluid img-thumbnail"></a>
            </div>
          </div> <!-- /.owl-carousel -->
        </div> <!-- /.row -->

        <script type="text/javascript">
      $('#img.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplaytimeot:5000,
        margin:30,
        responsive:{
            0:{
                items:1
            },
            467:{
                items:2
            },
            992:{
              items:3
            }
            
        }
      })
      $('#flag.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplaytimeot:5000,
        margin:30,
        responsive:{
            300:{
                items:1
            },
            467:{
                items:2
            },
            992:{
              items:4
            }
            
        }
      })
    </script>