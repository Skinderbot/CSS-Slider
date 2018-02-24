<!doctype html>
<?
$imgOneLeft = 'Mclaren P1';
$imgOneRight = 'Turning At Speed';
$imgTwoLeft = 'Mclaren P1';
$imgTwoRight = 'View From The Rear';
$imgThreeLeft = 'Mclaren P1';
$imgThreeRight = 'On The Track';
$imgFourLeft = 'Mclaren P1';
$imgFourRight = 'All Doors Open';
?>
<html>
<head>
<meta charset="UTF-8">
<title>100% CSS Full Slider &bull; Mark Skinner</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="v-pad-10"></div>
<h1 class="text-centered">Fully Functioning CSS Slider</h1>
<div class="v-pad-10"></div>
<div class="relative main-slider-box">
  <aside class="folder relative">
    <input type="radio" name="info" class="toggle" id="toggle1" checked="checked"/>
    <div class="fold relative">
      <div class="slider_boundary_large relative">
        <div class="slider">
          <div class="picture relative">
            <figure><img src="img/bg-1.jpg" alt="Background - 1">
              <figcaption class="figcation1"></figcaption>
            </figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-2.jpg" alt="Background - 2">
              <figcaption class="figcation1"></figcaption>
            </figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-3.jpg" alt="Background - 3">
              <figcaption class="figcation1"></figcaption>
            </figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-4.jpg" alt="Background - 4">
              <figcaption class="figcation1"></figcaption>
            </figure>
          </div>
        </div>
        <div class="caption-bg absolute">
          <div class="relative fullsize">
            <div class="caption-left caption_one absolute">
              <h5><?php echo $imgOneLeft; ?></h5>
            </div>
            <div class="caption-right caption_one absolute">
              <h5><?php echo $imgOneRight; ?></h5>
            </div>
            <div class="caption-left caption_two absolute">
              <h5><?php echo $imgTwoLeft; ?></h5>
            </div>
            <div class="caption-right caption_two absolute">
              <h5><?php echo $imgTwoRight; ?></h5>
            </div>
            <div class="caption-left caption_three absolute">
              <h5><?php echo $imgThreeLeft; ?></h5>
            </div>
            <div class="caption-right caption_three absolute">
              <h5><?php echo $imgThreeRight; ?></h5>
            </div>
            <div class="caption-left caption_four absolute">
              <h5><?php echo $imgFourLeft; ?></h5>
            </div>
            <div class="caption-right caption_four absolute">
              <h5><?php echo $imgFourRight; ?></h5>
            </div>
          </div>
        </div>
        <div class="nav-dots absolute">
          <label for="toggle4" class="toggle-label left-button float-left"></label>
          <div class="absolute center" style="bottom:0px;">
            <label for="toggle1" class="toggle-dot toggle-dot1">
            <h4></h4>
            </label>
            <label for="toggle2" class="toggle-dot toggle-dot2">
            <h4></h4>
            </label>
            <label for="toggle3" class="toggle-dot toggle-dot3">
            <h4></h4>
            </label>
            <label for="toggle4" class="toggle-dot toggle-dot4">
            <h4></h4>
            </label>
          </div>
          <label for="toggle2" class="toggle-label right-button float-right"></label>
        </div>
      </div>
    </div>
  </aside>
  <aside class="folder relative">
    <input type="radio" name="info" class="toggle" id="toggle2"/>
    <div class="fold relative">
      <div class="slider_boundary_large">
        <div class="slider">
          <div class="picture relative">
            <figure><img src="img/bg-2.jpg" alt="Background - 2"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-3.jpg" alt="Background - 3"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-4.jpg" alt="Background - 4"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-1.jpg" alt="Background - 1"></figure>
          </div>
        </div>
        <div class="caption-bg absolute">
          <div class="relative fullsize">
            <div class="caption-left caption_one absolute">
              <h5><?php echo $imgTwoLeft; ?></h5>
            </div>
            <div class="caption-right caption_one absolute">
              <h5><?php echo $imgTwoRight; ?></h5>
            </div>
            <div class="caption-left caption_two absolute">
              <h5><?php echo $imgThreeLeft; ?></h5>
            </div>
            <div class="caption-right caption_two absolute">
              <h5><?php echo $imgThreeRight; ?></h5>
            </div>
            <div class="caption-left caption_three absolute">
              <h5><?php echo $imgFourLeft; ?></h5>
            </div>
            <div class="caption-right caption_three absolute">
              <h5><?php echo $imgFourRight; ?></h5>
            </div>
            <div class="caption-left caption_four absolute">
              <h5><?php echo $imgOneLeft; ?></h5>
            </div>
            <div class="caption-right caption_four absolute">
              <h5><?php echo $imgOneRight; ?></h5>
            </div>
          </div>
        </div>
        <div class="nav-dots absolute">
          <label for="toggle1" class="toggle-label left-button float-left"></label>
          <div class="absolute center" style="bottom:0px;">
            <label for="toggle1" class="toggle-dot toggle-dot4">
            <h4></h4>
            </label>
            <label for="toggle2" class="toggle-dot toggle-dot1">
            <h4></h4>
            </label>
            <label for="toggle3" class="toggle-dot toggle-dot2">
            <h4></h4>
            </label>
            <label for="toggle4" class="toggle-dot toggle-dot3">
            <h4></h4>
            </label>
          </div>
          <label for="toggle3" class="toggle-label right-button float-right"></label>
        </div>
      </div>
    </div>
  </aside>
  <aside class="folder relative">
    <input type="radio" name="info" class="toggle" id="toggle3"/>
    <div class="fold relative">
      <div class="slider_boundary_large">
        <div class="slider">
          <div class="picture relative">
            <figure><img src="img/bg-3.jpg" alt="Background - 3"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-4.jpg" alt="Background - 4"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-1.jpg" alt="Background - 1"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-2.jpg" alt="Background - 2"></figure>
          </div>
        </div>
        <div class="caption-bg absolute">
          <div class="relative fullsize">
            <div class="caption-left caption_one absolute">
              <h5><?php echo $imgThreeLeft; ?></h5>
            </div>
            <div class="caption-right caption_one absolute">
              <h5><?php echo $imgThreeRight; ?></h5>
            </div>
            <div class="caption-left caption_two absolute">
              <h5><?php echo $imgFourLeft; ?></h5>
            </div>
            <div class="caption-right caption_two absolute">
              <h5><?php echo $imgFourRight; ?></h5>
            </div>
            <div class="caption-left caption_three absolute">
              <h5><?php echo $imgOneLeft; ?></h5>
            </div>
            <div class="caption-right caption_three absolute">
              <h5><?php echo $imgOneRight; ?></h5>
            </div>
            <div class="caption-left caption_four absolute">
              <h5><?php echo $imgTwoLeft; ?></h5>
            </div>
            <div class="caption-right caption_four absolute">
              <h5><?php echo $imgTwoRight; ?></h5>
            </div>
          </div>
        </div>
        <div class="nav-dots absolute">
          <label for="toggle2" class="toggle-label left-button float-left"></label>
          <div class="absolute center" style="bottom:0px;">
            <label for="toggle1" class="toggle-dot toggle-dot3">
            <h4></h4>
            </label>
            <label for="toggle2" class="toggle-dot toggle-dot4">
            <h4></h4>
            </label>
            <label for="toggle3" class="toggle-dot toggle-dot1">
            <h4></h4>
            </label>
            <label for="toggle4" class="toggle-dot toggle-dot2">
            <h4></h4>
            </label>
          </div>
          <label for="toggle4" class="toggle-label right-button float-right"></label>
        </div>
      </div>
    </div>
  </aside>
  <aside class="folder relative">
    <input type="radio" name="info" class="toggle" id="toggle4"/>
    <div class="fold relative">
      <div class="slider_boundary_large">
        <div class="slider">
          <div class="picture relative">
            <figure><img src="img/bg-4.jpg" alt="Background - 4"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-1.jpg" alt="Background - 1"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-2.jpg" alt="Background - 2"></figure>
          </div>
          <div class="picture absolute">
            <figure><img src="img/bg-3.jpg" alt="Background - 3"></figure>
          </div>
        </div>
        <div class="caption-bg absolute">
          <div class="relative fullsize">
            <div class="caption-left caption_one absolute">
              <h5><?php echo $imgFourLeft; ?></h5>
            </div>
            <div class="caption-right caption_one absolute">
              <h5><?php echo $imgFourRight; ?></h5>
            </div>
            <div class="caption-left caption_two absolute">
              <h5><?php echo $imgOneLeft; ?></h5>
            </div>
            <div class="caption-right caption_two absolute">
              <h5><?php echo $imgOneRight; ?></h5>
            </div>
            <div class="caption-left caption_three absolute">
              <h5><?php echo $imgTwoLeft; ?></h5>
            </div>
            <div class="caption-right caption_three absolute">
              <h5><?php echo $imgTwoRight; ?></h5>
            </div>
            <div class="caption-left caption_four absolute">
              <h5><?php echo $imgThreeLeft; ?></h5>
            </div>
            <div class="caption-right caption_four absolute">
              <h5><?php echo $imgThreeRight; ?></h5>
            </div>
          </div>
        </div>
        <div class="nav-dots absolute">
          <label for="toggle3" class="toggle-label left-button float-left"></label>
          <div class="absolute center" style="bottom:0px;">
            <label for="toggle1" class="toggle-dot toggle-dot2">
            <h4></h4>
            </label>
            <label for="toggle2" class="toggle-dot toggle-dot3">
            <h4></h4>
            </label>
            <label for="toggle3" class="toggle-dot toggle-dot4">
            <h4></h4>
            </label>
            <label for="toggle4" class="toggle-dot toggle-dot1">
            <h4></h4>
            </label>
          </div>
          <label for="toggle1" class="toggle-label right-button float-right"></label>
        </div>
      </div>
    </div>
  </aside>
</div>
<div class="v-pad-10"></div>
<div class="relative center content font-weight-2 letter-spacing-1">
  <p>Please be aware of the limitation that exists due to this being a 100% CSS toggle based system. The buttons will not allow you to toggle back or start onto the same one that is already checked.</p>
  <div class="v-pad-5"></div>
  <p>This project was not necessarily one done for practical purposes more than just to do as much of a fully functioning 100% CSS slider as I think could be done.</p>
  <div class="v-pad-5"></div>
  <p>If you are not familiar with .php then please check out the .html version.</p>
<div class="v-pad-10"></div>
</div>
</body>
</html>
