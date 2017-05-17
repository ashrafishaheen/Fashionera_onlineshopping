<!DOCTYPE html>
<?php
include_once('header.php');
?>


      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <?php
	include_once('left.php');
	?>
    <!-- end of left content -->
	  <link href="js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js-image-slider.js" type="text/javascript"></script>
    <link href="tooltip.css" rel="stylesheet" type="text/css" />
    <script src="tooltip.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='image/thumb" + (thumbIndex + 1) 
		+ ".jpg' style='width:50px;height:44px;' />"; });
    </script>
    <div class="center_content">
	<div id="sliderFrame">
        <div id="slider">
            <a href="" target="_blank">
                <img src="image/image-slider-1.jpg" />
            </a>
            <img src="image/image-slider-2.jpg" />
            <img src="image/image-slider-3.jpg"  />
            <img src="image/image-slider-4.jpg" />
            <img src="image/image-slider-5.jpg"/>
        </div>
        <div style="display: none;">
            <div id="cap1">
                Welcome to <a href="">Menucool.com</a>.
            </div>
            <div id="cap2">
                <em>HTML</em> caption. Link to <a href="">Google</a>.
            </div>
        </div>
    </div>
     
    </div>
    <!-- end of center content -->
	<?php
	include_once('right.php');
	?>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php
  include_once('footer.php');
  ?>
