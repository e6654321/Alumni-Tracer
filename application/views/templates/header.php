<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" href="/BWAT/img/map-marker2.png">

<title><?php echo $title;?></title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"
	rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="css/grayscale.min.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-main-collapse">
					Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="<?php echo $top;?>"> <i
					class="fa fa-map-marker"></i> <span class="light">Alumni</span>
					Tracer </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div
				class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a href="<?php echo $top;?>"></a>
					</li>
					<li><a class="page-scroll" href="<?php echo $about;?>">About</a>
					</li>
					<li><a class="page-scroll" href="<?php echo $trace;?>">Trace</a>
					</li>
					<li><a class="page-scroll" href="<?php echo $contact;?>">Contact</a>
					</li>
					<?php if($page=='admin'){
							echo '<li><a class="page-scroll" href="#admin">Admin</a></li>';
					}
					?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Intro Header -->
	<header class="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="brand-heading"><?php echo $header; ?></h1>
						<p class="intro-text">
							A free, responsive, one page Bootstrap theme. <br>Created by
							BitWise Guild.
						</p>
						<a href="#<?php echo $page;?>" class="btn btn-circle page-scroll">
							<i class="fa fa-angle-double-down animated"></i> </a>
					</div>
				</div>
			</div>
		</div>
	</header>