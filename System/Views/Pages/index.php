<?php
$themeFunc = new ThemeFunctions();
$socialLinks = $themeFunc->getSocialLinks();
?>



<!DOCTYPE HTML>

<html>
	<head>
		<title>PanTu All in One Video&Audio Downloader</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo Config::$realpath?>/System/Views/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo Config::$realpath?>/System/Views/assets/css/noscript.css" /></noscript>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span class="icon major fa-cloud-download"></span>
					<h1><strong>PanTu</strong> Downloader<br /></h1>
					<p>Paste Link and Download Content Any Sites...</p>
					<div class="container">
<header class="major">

					</header>
<form action="javascript:void(0);" id="UrlForm" name="getInfoForm">
							<div class="row gtr-uniform gtr-50">
								<div class="col-12 col-12-xsmall">
									<input type="text" name="contentUrl" id="contentUrl" value="" placeholder="Paste Link..." />
								</div>

								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Download" class="primary" id="getInfoButton" /></li>
									</ul>
								</div>
							</div>
						</form>
</div>
				</div>
			</section>

		<div id="one">
		</div>




		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2>Free Online Video Downloader</h2>
					</header>

					<div class="row gtr-150">
						<div class="col-4 col-12-medium">
							<span class="icon major fa-cloud"></span>

							<h3>Download Videos from Multiple Sources</h3>
							<p>Video Downloader Script offers you to download videos in multiple formats including MP4, M4A, 3GP, WEBM, MP3, JPG from multiple sources</p>

						</div>
						<div class="col-4 col-12-medium">
							<span class="icon major fa-globe"></span>

							<h3>Supported Websites</h3>
							<p>YouTube, Twitter, ESPN, Facebook, Instagram, IMDb, Vimeo, Dailymotion, Izlesene, Imgur, Tumblr, Bandcamp, TED, LiveLeak, Flickr, Mashable, Soundcloud, 9GAG, Break, TV.com, Tiktok, Odnoklassniki, Udemy and 700+ sites.</p>

						</div>
						<div class="col-4 col-12-medium">
							<span class="icon major fa-music"></span>

							<h3>Download Audios</h3>
							<p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed volutpat et nascetur.</p>

						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>Need Help ?</h2>
					</header>
					<p>Sed lacus nascetur ac ante amet sapien.</p>
					<ul class="actions special">
						<li><a href="#" class="button wide primary">Sign Up</a></li>
						<li><a href="#" class="button wide">Learn More</a></li>
					</ul>
				</div>
			</section>




		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="<?php echo $socialLinks["TWITTERADRESS"]; ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="<?php echo $socialLinks["FACEBOOKADRESS"]; ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="<?php echo $socialLinks["INSTAGRAMADRESS"]; ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="<?php echo $socialLinks["MAILADRESS"]; ?>" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</section>





	<section id="WaitAnimation" class="main style1" style="display:none;">

		<div class="alert alert-success" role="alert">

			<div class="d-flex justify-content-center">
				<div class="spinner-grow text-primary" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				<div class="spinner-grow text-secondary" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				<div class="spinner-grow text-success" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				<div class="spinner-grow text-danger" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				<div class="spinner-grow text-warning" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				<div class="spinner-grow text-info" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>

		</div>


</section>

		<!-- Scripts -->
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/jquery.min.js"></script>
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/browser.min.js"></script>
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/util.js"></script>
			<script src="<?php echo Config::$realpath?>/System/Views/assets/js/main.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

			<script>
			$('#UrlForm').submit(function(e){
													$("#getInfoButton").attr("disabled", true);
													$("#getInfoButton").val('Processing ...'); // Form submit edildiğinde
														$.ajax({ // Ajax metodu
																type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
																url: "/ajax", // POST işleminin olacağı sayfa
																data: $("#UrlForm").serialize()+'&form_name='+$("#UrlForm").attr("name"), // Formdaki tüm verileri al
																success: function(result){ // Eğer işlem başarılı olursa sonuç
																		$('#one').html(result);
																		$('html, body').animate({
			            scrollTop: $("#one").offset().top
			        }, 2000);
							$("#getInfoButton").attr("disabled", false);
							$("#getInfoButton").val('Download');
							$("#one").show();// Id'si result olan divde sonucu yaz
																}
														});
												e.preventDefault(); // Formu sayfa üzerinde gönder
												});

												function downloadAudio() {
													$('#getAudioModalalertBox').html($('#WaitAnimation').html());
												$.ajax({ // Ajax metodu
																type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
																url: "/ajax", // POST işleminin olacağı sayfa
																data: $("#getAudioForm").serialize()+'&form_name='+$("#getAudioForm").attr("name")+'&submit_name=getAudio', // Formdaki tüm verileri al
																success: function(result){ // Eğer işlem başarılı olursa sonuç
																		$('#getAudioModalcontainer').html(result);
																}
														});
												e.preventDefault(); // Formu sayfa üzerinde gönder


												}


												function downloadVideo() {
													$('#getVideoModalalertBox').html($('#WaitAnimation').html());
												$.ajax({ // Ajax metodu
																type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
																url: "/ajax", // POST işleminin olacağı sayfa
																data: $("#getVideoForm").serialize()+'&form_name='+$("#getVideoForm").attr("name")+'&submit_name=getVideo', // Formdaki tüm verileri al
																success: function(result){ // Eğer işlem başarılı olursa sonuç
																		$('#getVideoModalcontainer').html(result);
																}
														});
												e.preventDefault(); // Formu sayfa üzerinde gönder


												}



			</script>


	</body>
</html>
