<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="span4" style="width:100%">
		        <div class="widget widget-nopad" id="target-1">
            		<div class="widget-header"> <i class="icon-list-alt"></i>
             			<h3> Hiking and Rentals</h3>
            		</div>
            		<!-- /widget-header -->
            		<div class="widget-content">
             			<div class="widget big-stats-container">
                			<div class="widget-content">
                 				<h2 class="bigstats" style="margin: 20px 50px">  Here are the different trails you can go on: </h6>
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
  background-color: #000000;
  font-size: 40px;
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
<body>

<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="https://i1.wp.com/food.theplainjane.com/wp-content/uploads/2014/10/sloths-borrego-springs-sculptures.jpg"
  style="width:100%">
  <div class="text">Dinosaur Trail</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="http://www.lindsaytaub.com/wp-content/uploads/2011/12/Borrego-2.jpg"
   style="width:100%">
  <div class="text">Dragon Trail</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="https://hikinglibrarian.files.wordpress.com/2012/02/whalepeak01.jpg"
  style="width:100%">
  <div class="text">Anza-Borrego State Park</div>
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
</html>
<div class="slideshow-container">

                 				<h2 class="bigstats" style="margin: 20px 50px">  Here are all types of equipment you can rent:</h2>
                 					<h3><center> Hike Package $50</center></h3>
                 					<img src="http://www.justicepriest.com/wp-content/uploads/2016/10/hiking-equipment-hirzlweg.jpg" style="width:100%; max-height:540px">

                          <br> <br> <br>

                          <h3><center> Bike Package $75</center></h3>
                 					<img src="https://bikesreviewed.com/wp-content/uploads/2017/07/Hiking-Bike.jpg" style="width:100%; max-height:540px">

                 			</div>
                 		</div>
                 	</div>
                </div>
                <!-- widget-content -->
              </div>
      		</div>
  		</div>
  	</div>
</div>
