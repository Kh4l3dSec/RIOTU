<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Research Area</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<!-- CORE CSS -->
<?php
    include_once 'include/headers_links.php';
    include_once 'include/utils.php';
    ?>
</head>

<body onload="navigation()">
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php include_once 'include/nav_bar.php';?>

		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Research</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active"></li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-bottom">
			<div class="container">
				<p></p>

				<h2 class="section-heading">RESEARCH AREAS</h2>


				<div class="paragraph_large">
				<?php $myfile = fopen("Text/RESEARCH AREAS main.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/RESEARCH AREAS main.txt"));?>
				</div>
				<br>
				<h2 class="section-heading">CONSULTATION SERVICES</h2>

<div class="paragraph_large">
					<?php $myfile = fopen("Text/CONSULTATION SERVICES.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Text/CONSULTATION SERVICES.txt"));?>

				</div>
			</div>


			<!--
<div class="cta cta-solid-bg cta-2-columns margin-top-50">
<div class="container">
<h2 class="heading">An elegant Bootstrap theme with tons of features</h2>
<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> PURCHASE</a>
</div>
</div>
-->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
	<script src="theme/assets/js/bootstrap.min.js"></script>
	<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="theme/assets/js/bravana.js"></script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54522619-4', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
