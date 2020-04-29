<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/features.css">
	<link rel="stylesheet" href="css/services.css">
	<link rel="stylesheet" href="css/keep-in-touch.css">
	<link rel="stylesheet" href="css/get-started.css">
  <link rel="stylesheet" href="css/footer.css">
  <script src="js/slider.js" defer></script>
	<?php 
	if (isset($args['scroll']))
	{
			echo "<script src='js/scroll.js' defer></script>";
	}
	?>
	<title>Bino</title>
</head>
<body>
	<header id="header">
    <button id="left-slider-btn">
      <img src="img/angle-left.png" alt="left">
    </button>
    <button id="right-slider-btn" >
      <img src="img/angle-right.png" alt="right">
    </button>
    <a href="#fooooter">
      <button class="down-btn">
        <img src="img/header-down-icon.png" alt="go down">
      </button>
    </a>
    <div class="header-top">
      <a href="">
        <img src="img/bino-logo.png" alt="logo">
      </a>
      <nav>
        <a href="" class="nav-link">Home</a>
        <a href="" class="nav-link">About us</a>
        <a href="" class="nav-link">Portfolio</a>
        <a href="" class="nav-link">Pricing</a>
        <a href="" class="nav-link">Team</a>
        <a href="" class="nav-link">Blog</a>
        <a href="" class="nav-link">Contact</a>
      </nav>
    </div>
    <div id="slide1" class="slide" slideNumber="1">
      <div class="container">
        <div class="slider">
          <pre>Our Clients Are Our First Priority</pre>
          <h1>Welcome to Bino</h1>
          <div class="figure">
            <hr>
            <img src="img/header-figure-ellipse.png" alt="dot">
            <hr>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown 
            printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="slider-buttons">
            <button class="get-started">Get started now</button>
            <button class="learn-more">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="slide" id="slide2" slideNumber="2">
      <div class="container">
        <div class="slider">
          <pre>Our Clients Are Our First Priority</pre>
          <h1>Low price</h1>
          <div class="figure">
            <hr>
            <img src="img/header-figure-ellipse.png" alt="dot">
            <hr>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown 
            printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="slider-buttons">
            <button class="get-started">Get started now</button>
            <button class="learn-more">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="slide" id="slide3" slideNumber="3">
      <div class="container">
        <div class="slider">
          <pre>Our Clients Are Our First Priority</pre>
          <h1>Great quality</h1>
          <div class="figure">
            <hr>
            <img src="img/header-figure-ellipse.png" alt="dot">
            <hr>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown 
            printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="slider-buttons">
            <button class="get-started">Get started now</button>
            <button class="learn-more">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="slide" id="slide4" slideNumber="4">
      <div class="container">
        <div class="slider">
          <pre>Our Clients Are Our First Priority</pre>
          <h1>5 year guarantee</h1>
          <div class="figure">
            <hr>
            <img src="img/header-figure-ellipse.png" alt="dot">
            <hr>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown 
            printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="slider-buttons">
            <button class="get-started">Get started now</button>
            <button class="learn-more">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="slide" id="slide5" slideNumber="5">
      <div class="container">
        <div class="slider">
          <pre>Our Clients Are Our First Priority</pre>
          <h1>24/7 support</h1>
          <div class="figure">
            <hr>
            <img src="img/header-figure-ellipse.png" alt="dot">
            <hr>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown 
            printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="slider-buttons">
            <button class="get-started">Get started now</button>
            <button class="learn-more">Learn more</button>
          </div>
        </div>
      </div>
    </div>
	</header>
	<div class="features">
		<div class="container">
			<div class="feature">
				<img src="img/features-1.png" alt="sleek design">
				<h2 class="feature-highlighted-heading">Sleek design</h2>
				<hr>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting let. 
					Lorem Ipsum has been the industry.
				</p>
			</div>
			<div class="feature">
				<img src="img/features-2.png" alt="sleek design">
				<h2>Cleen code</h2>
				<hr>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting let. 
					Lorem Ipsum has been the industry.
				</p>
			</div>
			<div class="feature">
				<img src="img/features-3.png" alt="sleek design">
				<h2>Creative ideas</h2>
				<hr>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting let. 
					Lorem Ipsum has been the industry.
				</p>
			</div>
			<div class="feature">
				<img src="img/features-4.png" alt="sleek design">
				<h2>Free support</h2>
				<hr>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting let. 
					Lorem Ipsum has been the industry.
				</p>
			</div>
		</div>
	</div>
	<div class="services">
		<img src="img/services-web-btn.png" class="web-btn" alt="web design">
		<img src="img/services-print-btn.png" class="print-btn" alt="print design">
		<img src="img/services-photo-btn.png" class="photo-btn" alt="photography">
		<div class="services-left">
			<div class="container">
				<div class="services-heading">
					<h2>Our services</h3>
					<hr>
				</div>
				<div class="service">
					<h3>Web design</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
						Lorem Ipsum has been the industry's standard dummy text ever.
					</p>
				</div>
				<div class="service">
					<h3>Print design</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
						Lorem Ipsum has been the industry's standard dummy text ever.
					</p>
				</div>
				<div class="service">
					<h3>Photography</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
						Lorem Ipsum has been the industry's standard dummy text ever.
					</p>
				</div>
			</div>
		</div>
		<div class="services-right"></div>
	</div>
	<div class="keep-in-touch" id="forms">
		<div class="container">
			<div class="keep-in-touch-heading">
				<h2>Keep in touch</h2>
				<p>
					Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna 
					suscipit, dictum quam nec. 
				</p>
				<div class="figure">
					<hr>
					<img src="img/header-figure-ellipse.png" alt="dot">
					<hr>
				</div> 
			</div>
			<div class="service-blocks" id="form-block">
				<div class="info">
					<div class="info-block" class="first-info-block">
						<h3>Our address</h3>
						<p>	
							House #13, Streat road, Sydney 
							2310 Australia
						</p>
					</div>
					<div class="info-block">
						<h3>Call us</h3>
						<p>
							+ 880 168 109 1425<br>
							+ 0216809142
						</p>
					</div>
					<div class="info-block">
						<h3>Email us</h3>
						<p>contactus@email.com</p>
					</div>
				</div>
				<div class="message" action="">
					<div class="container">
						<form method="POST">
							<input type="text" class="small-input" placeholder="Name" name="name">
							<input type="text" class="small-input" placeholder="Email" name="email">
							<input type="text" class="small-input" placeholder="Subject" name="subject">
							<textarea class="big-textarea" placeholder="Message" name="message"></textarea>
							<input type="submit" value="SEND MESSAGE" class="message-submit">
						</form>
					</div>
				</div>
			</div>
			<?php 
			error_reporting(E_ERROR | E_PARSE);
			if (isset($args['error_msg']))
			{
					echo "<div class='form-error'><h3>".$args['error_msg']."</h3></div>";
			} else if (isset($args['success']))
			{
					echo "<div class='form-success'><h3>Success!</h3></div>";
			}
			?>
			<div class="write-back">
				<div class="container">
					<form method="POST" action="feedbacks.php">
						<input type="text" class="small-input" placeholder="Your email" name="email">
						<input type="submit" value="Write back!" class="message-submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="get-started-block">
		<h2>
			Let's Get Started Now. <b>It's FREE!</b>
		</h2>
		<p>
			30 day free trial. Free plan allows up to 2 projects. Pay 
			if you need more. Cancel anytime. No catches.
		</p>
		<button>
			Start free trial
		</button>
	</div>
	<footer id="fooooter">
		<a href="#top">
		<button class="go-to-up">
			<img src="img/up-arrow.png" alt="go to up">
		</button>
		</a>	
		<div class="container">
			<div class="social-icons">
				<a href="">
					<img src="img/fb-logo.png" alt="facebook" class="social-icon small-social-icon">
				</a>
				<a href="">
					<img src="img/twitter-logo.png" alt="twitter" class="social-icon">
				</a>
				<a href="">
					<img src="img/rss-logo.png" alt="rss" class="social-icon">
				</a>
				<a href=""><img src="img/google-plus-logo.png" alt="google+" class="social-icon"></a>
				<a href="">
					<img src="img/linkedin-logo.png" alt="linkedin" class="social-icon">
				</a>
				<a href="">
					<img src="img/skype-logo.png" alt="skype" class="social-icon">
				</a>
				<a href="">
					<img src="img/vimeo-logo.png" alt="vimeo" class="social-icon">
				</a>
				<a href="">
					<img src="img/tumblr-logo.png" alt="tumblr" class="social-icon small-social-icon">
				</a>
			</div>
			<div class="copyright">
				<h4>
					Kazi Erfan © All Rights Reserved 
				</h4>
			</div>
		</div>
	</footer>
</body>
</html>