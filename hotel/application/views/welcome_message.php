<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad" id="target-1">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Announcements</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats"> What's happening this month? </h6>
                  <b> 10/28/2017: Resort Renovation </b>
                  <br><span>Dear Valued Guest,</span>
                  <br><br>
                  <span>Please be advised that our sports facility and medical services area will be closed for
                    renovations starting November, 2017 for approximately two months.We am thrilled to
                    announce that our highly anticipated interior renovation has begun, with the expected
                    completion date of January, 2018. While our resort remains a preferred choice of many
                    families and business travellers alike, these extensive renovations will allow us to provide
                    the very best resort experience to our valued clients. During the renovation period, we
                    apologize for any inconvenience and offer our sincere thanks for your patience and support.
                    If you have any concerns, please email us at borrego_springs_resort@gmail.com.
                  </span> <br><br>
                    <span>With thanks,</span> <br><br>
                    <span>Steven Duong, Manager </span> <br> <span>Borrego Springs Resort</span>
                </div>
                <!-- /widget-content -->
                <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/*
.active, .dot:hover {
  background-color: #717171;
}
*/

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}



/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 12px}
}
</style>
</head>

</html>
              </div>
            </div>
          </div>

          <!-- /widget -->
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Special Promotions</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <b> Super Savings! </b><i>20% off on Thanksgiving weekend from 11/27/2017 - 11/26/2017 </i>

            </div>
            <!-- /widget-content -->
          </div>

        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
                  <!--
                  <a href="<?php echo base_url(); ?>login/logout" class="shortcut"><i class="shortcut-icon icon-home"></i><span class="shortcut-label">Rooms</span> </a>
                  -->
                <?
                  if(!UID)
                  { ?>
                    <a href="<?php echo base_url(); ?>login" class="shortcut"><i class="shortcut-icon icon-off"></i><span class="shortcut-label">Login</span> </a>
                    <a href="<?php echo base_url(); ?>register/" class="shortcut"><i class="shortcut-icon icon-home"></i><span class="shortcut-label">Register</span> </a>
                <?}
                  elseif (UID)
                  { ?>
                    <a href="<?php echo base_url(); ?>login/logout" class="shortcut"><i class="shortcut-icon icon-off"></i><span class="shortcut-label">Logout</span> </a>
                <?} ?>


                <!--<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i><span class="shortcut-label">Tags</span> </a>-->
              </div>
              <!-- /shortcuts -->
            </div>
            <!-- /widget-content -->
          </div>


          <body>

          <div class="slideshow-container">

          <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="img/sampleResortLogo.png"
            style="width:100%; height: 400px">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="img/resort_pic1.png"
             style="width:100%; height: 400px">
            <div class="text">Look at the view!</div>
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="img/desert-flowers-in-anza-borrego.jpg"
            style="width:100%; height: 400px">
            <div class="text">Desert flowers in the spring</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
          <br>

          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>

          <script>
          var slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
          }
          </script>

          </body>


        </div>
        <!-- /span6 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->
