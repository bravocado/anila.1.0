<?php
  $contain = @$_GET['p'];
  if(!$contain) $contain = 'home';
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Kapi Anila - Narradian</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="humans.txt">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

<!-- Facebook Metadata /-->
<meta property="fb:page_id" content="" />
<meta property="og:image" content="" />
<meta property="og:description" content=""/>
<meta property="og:title" content=""/>

<!-- Google+ Metadata /-->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">

<!-- Twitter Metadata /-->
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

<!--[if (lt IE 9) & (!IEMobile)]>
  <script src="js/html5.js"></script>
  <link rel="stylesheet" href="css/style.css">
<![endif]-->

<!-- for printing -->
<link rel="stylesheet" media="print" href="css/style.css" />

<!-- for no script -->
<noscript>
  <link rel="stylesheet" href="css/noscript.css" />
</noscript>
<script type="text/javascript" src="js/min/modernizr.min.js"></script>

<!--[if (gt IE 8) | (IEMobile)]><!-->
<script>
  var ADAPT_CONFIG = {
    path: 'css/',
    dynamic: true,
    range: [
      '0 to 767px = style-phone.css',
      '767px to 1023px = style-tablet.css',
      '1023px = style-desktop.css'
    ]
  };
</script>
<script src="js/min/adapt.min.js"></script>
<!--<![endif]-->

</head>

<body>
	
	<div class="wrapper">
		<?php require("inc/".$contain.".php"); ?>
	</div>

  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script>window.jQuery || document.write('<script src="js/min/jquery.min.js"><\/script>')</script>

  <script type="text/javascript" src="js/min/anila.js"></script>

  <!-- others plugin -->

  <!-- Google Analytics -->
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>