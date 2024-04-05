<!--<?php
//session_start();
//if(!isset($_SESSION['uid']))
//header("location:Login.php");
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GYM WEBSITE</title>
</head>
<body>
<?php include 'navigation.php' ?>;
<h1>Welcome <?= $_SESSION['uid'] ?> (<?php 
if($_SESSION['Gender']=='m')
{
    echo "Mr. ";
}
else 
{
    echo "Miss ";
}
echo $_SESSION['FirstName'].$_SESSION['LastName'];
?>)</h1>
	<div class="container-fluid">
<div style="background-color:yellow;" class="header1">
<header>
	<nav>
		<div class="logo">
			<span id="red">KUM</span>AR
		</div>
		<div class="menu">
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="#Services">Services</a>
			<a href="profile.html">Profile</a>
			<a href="Customer.php">Customer</a>
			<a href="Trainer.php">TRAINER</a>
			<a href="#">Our Work</a>
			<a href="Contact.php">Contact</a>
			<a href="logout.php">Logout</a>
		</div>

		<div class="icon">
			<img src="images/icon.png"/>
		</div>

	</nav>
	<br/><br/><br/><br/>

	<div class="container">
		<div class="left">
			<img src="images/banner.png"/>
		</div>
		<div class="right">
			<p class="text-danger"><strong>I am a</strong></p>
		<h1><strong>Gym Trainer</strong></h1>
		<p>From India,doing gym is good for healthy life. it helps our body to fit. it release stress from our mind.</p>
		
		<button class="btn">Join us</button>
		</div>
	</div>
</header>
</div>


<div style="background-color:red;" class="about1">
<section id="about">
	<div class="about-row">
		<div class="about-left-col">
			<h1> About <span id="blue">me</span></h1>
			<p id="p-title">I am a Gym Trainer</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, iusto corporis rerum impedit neque tempora veniam, sapiente assumenda quae tempore quisquam at nobis nisi sunt. Eligendi at eos asperiores vel?

			</p>
			<p>
				From India,doing gym is good for healthy life.
			</p>
			<button class="btn c-btn">Read more</button>
		</div>
		<div class="about-right-col">
			<img src="images/img1.jpg">
		</div>
	</div>
</section>
</div>


<div style="background-color:red;" class="piyush1">
	<h1 class="text-center">hello piyush</h1>
	<h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis unde quibusdam quia? Hic adipisci, commodi obcaecati ratione ipsam quos veniam saepe nam, delectus facere, voluptates ducimus. Eaque aut non maxime!</h1>
<section id="piyush">
	.<br/>.<br/>
	.<br/>.<br/>
	.<br/>.<br/>
	.<br/>.<br/>
</section>
</div>



<section id="banner">
	<img src="images/banner-man-2.png" alt="" title="" style="height:40%; width: 100%;"/>
	<button class="btn btn-lg" id="click"><a href="signup.php">Click Me</a></button>
	<strong class="text-center" id="pain">NO PAIN NO GAIN</strong>
</section>


<section id="signup">
	<div class="signup-row">
		<div class="signup-left-col">
			<img src="images/img2.png">
		</div>
		<div class="signup-right-col">
				<h1> BEING <span id="blue">BODY</span></h1>
			<h2>BUILDER</h2>
			<button class="c-btn"><a href="signup.php">Signup</a></button>

		</div>
	</div>
</section>

<!--
<section id="work">
	<div class="services-info">
		<h1>Our <span id="blue">Works</span></h1>
<p>What we Provide</p>
</div>
<div class="services-row">
<div class="work-box">
	<img src="img/dp.jpg">
</div>
<div class="work-box">
	<img src="images/ex2.jpg">
</div>
<div class="work-box">
	<img src="images/ex3.jpg">
</div>
<div class="work-box">
	<img src="images/ex4.jpg">
</div>
<div class="work-box">
	<img src="images/ex5.jpg">
</div>
<div class="work-box">
	<img src="images/ex6.jpg">
</div>
</div>
<h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem suscipit a dolores libero officia. Voluptatem tempore neque aliquam aperiam. Quaerat aliquam voluptas eaque minus fugit repudiandae exercitationem facere et sit!</h1>
<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae maiores doloribus assumenda expedita vitae voluptate ab quasi animi, tenetur quae harum veritatis nesciunt neque facilis eius fugit repellendus ad itaque.</h2>
</section>
-->
<section id="Services" class="text-center"><br/>
	<strong>HAVE A LOOK AT OUR SERVICES</strong><br/><br/>
	<div class="row text-center">
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-1.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1><b>AEROBICS/
						ZUMBA</b></h1>
					<p><b>Groove and workout to trendy tunes</b></p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-2.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1><b>CROSSFIT TRAINING</b></h1>
					<p><b>High intensity workouts with your frainds</b></p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-3.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1><b>CARDIO TRAINING</b></h1>
					<p><b>Loss the belly fat now</b></p>
				</div>
			</div>
		</div>

		<div class="col-sm-1"></div>
	</div><br/>
	<div class="row text-center">
		<div class="col-sm-1"></div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-4.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1><b>ENDURANCE TRAINING</b></h1>
					<p><b>Build your stamina with us today</b></p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-5.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1><b>STRENGTH TRAINING</b></h1>
					<p><b>Gain muscle weight at Our Gym</b></p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="box">
				<img src="images/service-6.jpg" alt="" style="height: 100%; width: 100%;">
				<div class="text">
					<h1>WEIGHT LOSS</h1>
					<p><b>Loss excess fat with personal training</b></p>
				</div>
			</div>			
		</div>
		<div class="col-sm-1"></div>
	</div>
<br/>
</section>

<section id="trainer" class="text-center">
	<strong id="trainer1">OUR TRAINERS</strong>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			<h1><strong>AARYAN</strong></h1>
			<p><span class="text-info">STRENGTH TRAINING</span><br/><br/>				
				Welcome to Mutants Gym! I have been an expert in <br/>
				crossfit and endurance training for more than 5 years now,<br/>
				and would love for us to get together and train a little! <br/>
				Come over to Mutants if you would like to learn from me, and<br/>
				be better at what you dreamt of doing.<br/><br/>
				
				We are the best gym in Patna and here, we don’t just talk big,<br/>
				but instead, we put our words into practice. Train with state-of-the-art <br/>
				equipment and under personal guidance of expert trainers like me at the best<br/>
				gym in Kankarbagh Patna, Mutants Gym.</p>
		</div>
		<div class="col-sm-5">
			<img src="images/WhatsApp Image 2023-01-27 at 13.00.41.jpg" alt="" title="" style="height: 100%; width: 70%;border-radius: 30%;
	
			box-shadow: 0 0 0 2px rgb(137, 222, 62), 8px 8px 0 0 rgb(72, 239, 42), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3); "/>
		</div><br/><br/>
		<div class="col-sm-1"></div>
	</div>
</section>

<section id="last">
	<img src="images/image_2023_03_16T15_05_00_603Z.png" alt="" title="" style="height: 100%; width: 100%;"/>
</section>

<section id="touch" class="text-light"><br/><br/>
	<h1 class="text-center"><b>GET IN <span class="text-info">TOUCH</span></b></h1><h3 class="text-center"><b>We are Available</b></h3><br/><br/><br/><br/>
	<div class="row ">
		<div class="col-sm-3"></div>
		<div class="col-sm-3 text-center">
			<form action="index.php" method="get">
				<input type="email" class="form-control" name="email" placeholder="Email"/><br/><br/>
				<input type="text" class="form-control" name="subject" placeholder="Subject"/><br/><br/>
				<textarea rows="10" type="text" name="message" class="form-control" cols="40" placeholder="Message"></textarea>
			</form>
		</div>
		<div class="col-sm-5">
			<h1><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</h1> <p>piyushbilla@gmail.com</p><br>
			<h1><i class="fa fa-phone" aria-hidden="true"></i> Mobile</h1><p>9135520267, 6205059314</p>
			<br>
			<h1><i class="fa fa-location-arrow" aria-hidden="true"></i> Address</h1>
			<p> Near Sury Mandir<br>
				Deo Aurangabad Bihar
			</p>
		</div>
		<div class="col-sm-1"></div>
	</div>
</section>

<section id="footer">
	<div class="logo">
		<span id="red">KUM</span>AR
	</div>
	
	<p>&copy; 2023 KUMAR, Aurangabad, India </p>
	<img src="images/icon.png">

</section>
</div>
</body>
</html>