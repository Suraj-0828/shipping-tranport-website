<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oops! Something Went Wrong</title>
    <meta name="description" content="We couldn’t process your request. Please check your details and try again, or contact us directly for assistance.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/banner/banner/feb-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <style>
		.success {
			text-align: center;
			margin: auto;
			background-color: gray;
			color: black;
		}

		.successful {
			text-align: center;
			margin: auto;
			padding: 60px 50px 20px 50px;
			font-size: 50px !important;
			color: black;
		}

	       .color-failed{
            		color: red;
      		}

		.imgg {
			max-width: 100%;
		}

		.img-size {
			width: 100px;
			height: 100px;
			margin: auto;
			margin-top: 25px;
			margin-bottom: -20px;
		}
        .text-black{
            padding-bottom: 30px;
        }

		.pp {
			text-align: center;
		}

		@media (max-width: 576px) {
			/* Extra small devices (phones) */
			.successful {
				font-size: 20px !important;
			}
		}
	</style>
</head>

<body class="theme-red">


    <?php include('header.php') ?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h1 class="title">Failed</h1>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem">Failed</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <div class="container pt-5 pb-4">
				<div class="img-size">
					<img class="imgg" src="assets/img/about/failed.png" />
				</div>
				<div class="successful text-black">
					Your Email Has Not Send!
				</div>
				<div class="pp text-black">Something went <span class="color-failed">wrong</span> please try again after sometime.</div>

			</div>


    </main>
    <!-- main-area-end -->

    <?php include('footer.php') ?>