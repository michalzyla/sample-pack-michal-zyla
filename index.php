<?php
if(isset($_GET["text"])) {
	$text = 'Lorem ipsum dolor sit amet';
} else {
	$text = 'This is just a sample page';
}

if(isset($_GET["color"])) {
	$color = ' style="color: #ee8a55"';
} else {
	$color = '';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sample-pack-michal-zyla</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="top" class="top"></div>

	<header class="grid container">
		<div class="row">
			<div class="menu-item left col-l-3 col-m-3 col-s-3">
				<a class="active" href="#">Home</a>
			</div>
			<div class="menu-item left col-l-2 col-m-2 col-s-2">
				<a href="#">Products</a>
			</div>
			<div class="col-l-2 col-m-2 col-s-2">
				<a href="index.php"><img src="img/logo.png" alt="logo"></a>
			</div>
			<div class="menu-item right col-l-2 col-m-2 col-s-2">
				<a href="#">About us</a>
			</div>
			<div class="menu-item right col-l-3 col-m-3 col-s-3">
				<a href="#">Contact</a>
			</div>
		</div>
	</header>

	<section class="hero container">
		<h1<?php echo $color; ?>><?php echo $text; ?></h1>
		<a class="push btn">push the button</a>
	</section>

	<section id="content" class="content grid container">
		<div class="row">
			<div class="content-item col-l-4">
				<h3>A heading title</h3>
				<p><img src="img/content-img.png" alt="Content item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
					<a href="#" class="rm-show hide">- read more</a>
					<span class="rm-content">
						Vestibulum quis ligula eros. Mauris a ligula et lacus congue tempor. Nunc libero nisl, tincidunt ac tempus eu, blandit in dui. ipsum
						<a href="#" class="rm-hide hide">- read less</a>
					</span>
				</p>
			</div>
			<div class="content-item col-l-4">
				<h3>A much longer heading title</h3>
				<p><img src="img/content-img.png" alt="Content item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
					<a href="#" class="rm-show hide">- read more</a>
					<span class="rm-content">
						Vestibulum quis ligula eros. Mauris a ligula et lacus congue tempor. Nunc libero nisl, tincidunt ac tempus eu, blandit in dui. Class aptent taciti sociosqu ad litora torquent.
						<a href="#" class="rm-hide hide">- read less</a>
					</span>
				</p>
			</div>
			<div class="content-item col-l-4">
				<h3>A heading title</h3>
				<p><img src="img/content-img.png" alt="Content item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
					<a href="#" class="rm-show hide">- read more</a>
					<span class="rm-content">
						Vestibulum quis ligula eros. Mauris a ligula et lacus congue tempor. Nunc libero nisl.
						<a href="#" class="rm-hide hide">- read less</a>
					</span>
				</p>
			</div>
		</div>
	</section>

	<section class="contact grid container">
		<section class="contact_message"></section>
		<h2>Contact us</h2>
		<form action="post.php" method="POST">
			<div class="row">
				<div class="contact-inp col-l-6">
					<input id="name" type="text" name="name" placeholder="name">
					<input id="email" type="text" name="email" placeholder="e-mail">
					<input id="phone" type="text" name="phone" placeholder="phone">
				</div>
				<div class="col-l-6">
					<textarea id="message" rows="7" name="message" class="contact-text" placeholder="your message"></textarea>
				</div>
			</div>
			<input id="submit" type="submit" name="submit" value="send message" class="btn">
		</form>
	</section>

	<section class="footer grid">
		<a href="#top" class="back">back to top</a>
		<div class="footer-content row">
			<div class="container">
				<div class="col-l-5">
					<div class="row">
						<div class="left col-l-6">
							<a class="footer-link" href="#">- home</a>
						</div>
						<div class="col-l-6">
							<a class="footer-link" href="#">- about us</a>
						</div>
					</div>
					<div class="row">
						<div class="left col-l-6">
							<a class="footer-link" href="#">- products</a>
						</div>
						<div class="col-l-6">
							<a class="footer-link" href="#">- contact</a>
						</div>
					</div>
				</div>
				<div class="col-l-2">
					<button class="icon-btn"><i class="fa fa-twitter"></i></button>
					<button class="icon-btn"><i class="fa fa-facebook"></i></button>
				</div>
				<div class="copyright col-l-5">
					<span>Copyright © 2010 Sample & Pack, Inc.</span>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/smooth_scroll.js"></script>
	<script src="js/push_the_button.js"></script>
	<script src="js/read_more.js"></script>
	<script src="js/form.js"></script>
</body>
</html>