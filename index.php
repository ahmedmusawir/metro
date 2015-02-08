<html>
<head>
  <title>The Metro</title>
  <!-- Latest compiled and minified CSS & JS -->
  <!-- link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" -->
  <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/metroStyle.css">
  <link rel="stylesheet" href="css/metroStyleHeaderNav.css">
  <link rel="stylesheet" href="css/metroStyleTop.css">
  <link rel="stylesheet" href="css/metroStyleMiddle.css">
  <link rel="stylesheet" href="css/metroStyleFooter.css">
  <link rel="stylesheet" href="css/metroStylePartnerBlock.css">
  <style type="text/css" media="screen">
    .panel a {
      text-decoration: none;
      color: ;
    }
    .panel-heading {
      background: #F5F5F5;
    }
  </style>
  
</head>
<body>
<div class="top_header_nav">	
	<header class="container">
		<!--TOP NAV PHP INCLUDE GOES HERE -->
		<?php include('header.php'); ?>
	</header>
</div>

<div class="">

	<section class='block_top'>
		<!--ROW 1 PHP INCLUDE GOES HERE -->
		<?php include('block_top.php'); ?>
		<br><br>	
	</section>

	<section class='container' id="block_middle">
		<!--ROW 2 PHP INCLUDE GOES HERE -->
		<?php include('block_middle.php'); ?>
	</section>

</div>	<!--MAIN CONTAINER ENDS -->


<footer id="footer_main">
	<?php include('footer.php'); ?>
</footer> <!--FOOTER ENDS -->

<!-- SCRIPTS LOADED HERE -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="_js/header.js"></script>
</body>
</html>