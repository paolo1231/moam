<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="js/jquery.slider.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="js/jquery.slider.ie6.css" />
<![endif]-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slider.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".slider").slideshow({
        width      : 900,
        height     : 225,
        transition : 'slide',
      });
    });
</script>
</head>

<body>

<div class="slider">
          <div><img src="images/testimonial-2.jpg" alt=""/></div>
          <div><img src="images/testimonial-3.jpg" alt=""/></div>
          <div><img src="images/testimonial-4.jpg" alt=""/></div>
          <div><img src="images/testimonial-5.jpg" alt=""/></div>
          <div><img src="images/testimonial-6.jpg" alt=""/></div>
</div>    
</body>
</html>