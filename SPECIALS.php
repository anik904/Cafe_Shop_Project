<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Club Coffee</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/SPECIALS.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>

</head>

<body>
	<?php
	include('menu.php');
	?>
	<div id=box class="card-header bg-transparent border-success mt-2"style="font-size:40px;">Specials Offer</div>
	<div  id=box  class="card-group p-5 rounded-shadow">
		<div class="card m-2 rounded">
			<img src="IMAGES/new offer1.PNG" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">CHOCOLATE FROST CUPCAKE</h5>
			</div>
		</div>
		<div class="card m-2 p-2 rounded">
			<img src="IMAGES/new offer2.PNG" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">STRAWBERRY CLOUD CUPCAKE</h5>
			</div>
		</div>
		<div class="card m-2 rounded">
			<img src="IMAGES/new offer3.PNG" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">CLASSIC CUPCAKE</h5>
			</div>
		</div>
	</div>
	<script>
		gsap.from("#box", {
			duration: 3,
			scale: 0.9,
			opacity: 0,
			delay: 1,
			stagger: 0.2,
			ease: "elastic",
			force3D: true
		});

	
	</script>

	<!-- <div class="specails">
		<center>
			<p style="font-size:50px;">SPECIAL OFFERS</p>
		</center>

		<div class="div">
			<div class="div1">
				<div class="div1a"><img src="IMAGES/new offer1.PNG" style="height:279px; width:310px; "></div>
				<div class="div1b">
					<center>
						<p>CHOCOLATE FROST CUPCAKE</p>
					</center>
				</div>
			</div>

			<div class="div1">
				<div class="div1a"><img src="IMAGES/new offer2.PNG" style="height:279px; width:310px; "></div>
				<div class="div1b">
					<center>
						<p>STRAWBERRY CLOUD CUPCAKE</p>
					</center>
				</div>
			</div>


			<div class="div1">
				<div class="div1a"><img src="IMAGES/new offer3.PNG" style="height:279px; width:310px; "></div>
				<div class="div1b">
					<center>
						<p>CLASSIC CUPCAKE</p>
					</center>
				</div>
			</div>







		</div>
	</div> -->


	<div class="bottom">
		<center>
			<p style="padding:30px;">Club Coffee </p>
		</center>
	</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>