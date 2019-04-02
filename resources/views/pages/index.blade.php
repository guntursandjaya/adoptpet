<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>adoptpet</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">
	
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- Start Login Section -->
<div id="Login/Register" class="offset">

<!--- Start Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="/home"><img src="img/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
		data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>	
		</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class = "nav-item">
				<a class="nav-link"href="{{ route('login') }}">Login/Register</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#features">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#adopt">Adopt us</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="#about">About us</a>
				</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact us</a>
			</li>
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<a class="nav-link" href="{{ route('login') }}">Login</a></li>
					<a class="nav-link" href="{{ route('register') }}">Register</a></li>
				@else
					<a class="nav-link" href="dashboard">{{ Auth::user()->name }}</a>
					  
							

				

				@endif
			</ul>
		</ul>
	</div>
</nav>
<!--- End Navigation --> 

<!--- Start Landing Page Section-->
<div class="landing">
	<div class="home-wrap">
		<div class="home-inner">
			</div>
		</div>
	</div>

<div class="caption text-center">
	<h1>Welcome to adoptpet.co.id</h1>
	<h3>The second chance for pet!</h3>
</div>

<!--- End Landing Page Section-->
</div>
<!--- End Login/Register Section -->

<!--- Start Home Section -->
<div id="home">

</div>

<!--- End Home Section -->

<!--- Start About Section -->
<div id="about" class="offset">

		<div class="col-12 narrow text-center">
			<h1>About Us</h1>
				<div class="heading-underline"></div>
					<p class="lead">The company were found when the crisis of stray animals especially cats and dogs started.
					We provide services where government can't achive,the company was founded in the year of 2013 and our aim 
					or goal is to make all of the stray animals to have home and second chances in their life.We also able to
					help the government reducing the percentage of rabies in indonesia.We are non-profitable organisation which
					all you need to pay is only the delivery/shipment and the pet which is very reliable.Our company vision is 
					to reduce the rabies outbreak on stray animal and also helping these stray animals to get their own home and 
					as in giving them a second chance for their live.</p>
				 

		</div>
		</div>
<!--- End About Section -->

<!--- Start Feature Section -->
<div id="features" class="offset">

		<!--- Start Jumbotron -->
		<div class="jumbotron">
		<div narrow="narrow text-center">
		
			<div class="col-12 narrow text-center">
				<h3 class="heading">Features</h3>
				<div class="heading-underline"></div>
			</div>
		
			<div class="row text-center">
		
				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-mobile fa-4x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Cross-platform</h3>
						<p>Now you can adopt any pet by using your favourite
							devices on internet without actually walking to the
							pet shelter/supplier to adopt </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-truck fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
							<h3>Safe and Fast</h3>
							<p>Your new adopted pet will be delivered right into 
								your doorstep and it will be delivered via third
								party delivery company and it will be delivered within 
								hours</p>
						</div>
					 </div>
					 <div class="col-md-4">
							<div class="feature">
								<i class="fas fa-paw fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
									<h3>Enjoy your new pet</h3>
									<p>New adopted pet will come included with a vaccine that 
									   is offered by the supplier or the pet shelter,so it'
									   safer and doesn't waste time to went to store and get
									   a vaccine for your adopted pet</p>
						 </div>
					</div>
		
			</div><!--- End row--> 
		
		</div><!--- End Jumbotron -->
		</div><!--- End Narrow-->
		
		</div>		
<!--- End Feature Section -->

<!--- Start Adopt Section -->
<div id="adopt" class="offset">
		<a class="navbar-brand" href="#"></a>
			</div>
				<div class="col-12 narrow text-center">
					<h3 class="heading">Start adopting now!</h3>
						<div class="heading-underline"></div>
							<a class="btn btn-secondary btn-md" href="#" targets="_blank">Adopt</a>
							</div>
<!--- End Adopt Section -->


<!--- Start Contact Section -->
<div id="contact" class="offset">
	<div class="fixed-background">

<!--- Start Jumbotron -->
<div class="jumbotron">
		<div narrow="text-center"></div>
			<div class="col-12 narrow text-center">
				<h3 class="heading">Contact us</h3>
					<div class="heading-underline"></div>
						</div>

	<div class="row text-center">		
		<div class="col-md-4">
			<h3>Instagram</h3>
				<div class="feature">
					<a class="nav-link" href="#https://www.instagram.com/"><i class="fab fa-instagram fa-3x"></i></a>
						</div>
						<p class="lead">Follow Us On Instagram!</p>
						</div>
		
				<div class="col-md-4">
					<h3>Facebook</h3>
						<div class="feature">
								<a class="nav-link" href="#https://www.facebook.com/"><i class="fab fa-facebook fa-3x"></i></a>
								</div>
								<p class="lead">Follow Us On Facebook!</p>
									</div>
		
							<div class="col-md-4">
								<h3>Twitter</h3>
									<div class="feature">
										<a class="nav-link" href="#https://www.twitter.com/"><i class="fab fa-twitter fa-3x"></i></a>
											</div>
												<p class="lead">Follow Us On Twitter!</p>
													</div>
		
		</div><!--- End Row Dark -->
	
		</div><!--- End Jumbotron -->	
		
		</div><!--- End Row Dark -->

			<div class="fixed-wrap">
				<div class="fixed">

				</div>
			</div>

	
		</div><!--- End Fixed Background -->


<!--- Script Source Files -->

<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>

<!--- Sources For Pictures-->
<!--- https://www.google.co.id/url?sa=i&source=images&cd=&ved=2ahUKEwiqn-v8gp3hAhWg8HMBHcgOAPkQjRx6BAgBEAU&url=%2Furl%3Fsa%3Di%26source%3Dimages%26cd%3D%26cad%3Drja%26uact%3D8%26ved%3D2ahUKEwiqn-v8gp3hAhWg8HMBHcgOAPkQjRx6BAgBEAU%26url%3Dhttps%253A%252F%252Funsplash.com%252Fsearch%252Fphotos%252Fbuilding%26psig%3DAOvVaw2IOcnfZtc2wvbQaJhbI63E%26ust%3D1553592852833251&psig=AOvVaw2IOcnfZtc2wvbQaJhbI63E&ust=1553592852833251-->
<!--- https://www.google.co.id/search?safe=strict&dcr=0&biw=1920&bih=958&tbm=isch&sa=1&ei=lKCYXIyZJ4zGvwSLop34DQ&q=macbook+wallpaper&oq=macbook+wallpaper&gs_l=img.3..0j0i67j0j0i67l2j0l5.1471543.1474303..1474326...0.0..0.73.1001.16......1....1..gws-wiz-img.....0..35i39.V2znS9O2nAA#imgrc=ctfnpFIZ_Bg6cM: -->
<!--- https://www.google.co.id/search?safe=strict&dcr=0&biw=1920&bih=1007&tbm=isch&sa=1&ei=YNKYXKHYNObVz7sP9sSq2AM&q=picture+of+man+&oq=picture+of+man+&gs_l=img.3..0l10.1698.2795..3085...0.0..0.64.495.9......1....1..gws-wiz-img.......0i24j0i8i30.hZSYSCbhRJY#imgrc=Yg36ISFcn_gniM: -->
<!--- https://www.google.co.id/search?safe=strict&dcr=0&biw=828&bih=668&tbm=isch&sa=1&ei=IdiYXOjuHpvCz7sP0JqpwAY&q=225x225+guy&oq=225x225+guy&gs_l=img.3...39469.42939..43003...0.0..1.121.1310.16j3......1....1..gws-wiz-img.......35i39j0j0i5i30.RfXHnIctMhs#imgrc=7fzt_uNIheVnrM:-->
<!--- https://www.google.co.id/search?safe=strict&sa=G&hl=en-ID&q=vacation&tbm=isch&tbs=simg:CAQSlwEJYob4i963PtkaiwELEKjU2AQaBAg9CBUMCxCwjKcIGmIKYAgDEijGGu0QoxCdHOsQ8BumEKQQpRCbHK0usC6oL9c67TrwOqIl4Dq0L90vGjBSg0e8O3RUW9Dv-tHIgcnAxqxqcfXzDLdUk4v4C03RNsa_1ZL1ORB6OhgkqZ7HyK-kgBAwLEI6u_1ggaCgoICAESBLtFqLgM&ved=0ahUKEwjXw_28tJ3hAhVn8HMBHU-wBfYQwg4IKygA&biw=1920&bih=1007#imgrc=7fzt_uNIheVnrM:-->