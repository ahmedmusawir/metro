<html>
<head>
	<title>The Metro</title>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/cssbootstrap.min.css"> -->
	<link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/metroStyle.css">
	<link rel="stylesheet" href="css/metroStyleHeaderNav.css">
	<link rel="stylesheet" href="css/metroStyleTop.css">
	<link rel="stylesheet" href="css/metroStyleMiddle.css">
	<link rel="stylesheet" href="css/metroStyleFooter.css">
	<link rel="stylesheet" href="css/metroStyleAbout.css">
	<link rel="stylesheet" href="css/metroStylePartnerBlock.css">

	
</head>
<body>
<div class="top_header_nav">	
	<header class="container">
		<!--TOP NAV PHP INCLUDE GOES HERE -->
		<?php include('header.php'); ?>
	</header>
</div>

<div class="">

	<section class=''>
		<!--ROW 1 PHP INCLUDE GOES HERE -->
		<?php include('about_page_content.php'); ?>
		<br><br><hr>	
	</section>

	<section class="row">
		<article id="one_box_row">
			<?php include('partner_block.php'); ?>
		</article>
	</section>

</div>	<!--MAIN CONTAINER ENDS -->


<footer id="footer_main">
	<?php include('footer.php'); ?>
</footer> <!--FOOTER ENDS -->

<!-- SCRIPTS LOADED HERE -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--SCRIPT FOR GOOGLE PIE GRAPH -->
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>