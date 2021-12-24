<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Club Coffee</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/projectcafe.css" />
	<link rel="stylesheet" type="text/css" href="css/combo offers.css" />
	<link rel="stylesheet" type="text/css" href="css/menu1.css" />
	<link rel="stylesheet" type="text/css" href="css/beverages.css" />

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
</head>

<body>
	<?php
	include('menu.php');
	?>


	<div id=logo class="snap"><img src="https://d4t7t8y8xqo0t.cloudfront.net/app//resized/720X280/group/207/ccdchainimage.jpg" height="350px" width="1000px" border="3px" style="margin-top:20px;">
	</div>
	<script>
		gsap.from("#logo", {
			duration: 3,
			x: 300,
			opacity: 0,
			scale: 0.5
		});
	</script>

	<div class="line" style="font-size:25px;">
		<marquee>The right place to have good rest | A good day full of Coffee | Coffee makes everything possible !</marquee>

	</div>

	<div class="d-flex justify-content-center" style="font-size:20px; ">
		<div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="IMAGES/C4.PNG" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="IMAGES/c5.PNG" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<p class="card-text">Only here you will meet the combination of exquisite cuisine, pleasant interior and great service!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id=box class="d-flex justify-content-center p-4 justify-content-around">
		<div class="card" style="width: 25rem; height:fit-content">
			<img style="height:250px" src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2021/04/15/fn_frozen-pasta-and-chicken-getty_s4x3.jpg.rend.hgtvcom.406.305.suffix/1618503700797.jpeg" class="card-img-top" alt="...">
			<div class="card-body">
				<center><a href="menu1.php" class="btn btn-primary">Food</a></center>
			</div>
		</div>
		<div id=box class="card" style="width: 25rem; height:fit-content">
			<img style="height:250px" src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/beveragedaily.com/article/2020/03/31/beverage-webinar-today-what-drinks-do-consumers-want/10866454-1-eng-GB/Beverage-webinar-today-What-drinks-do-consumers-want.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<center><a href="beverages.php" class="btn btn-primary">Beverages</a></center>
			</div>
		</div>

		<div id=box class="card" style="width: 25rem; height:fit-content">
			<img style="height:250px" src="https://s3-media0.fl.yelpcdn.com/bphoto/KGQ3eBfo5r7doJ84gG7qYQ/ls.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<center> <a href="combo offers.php" class="btn btn-primary">Combo Offer</a></center>
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



	</div>
	<div class="bottom">
		<center>
			<p style="padding:30px;">Club Coffee</p>
		</center>

	</div>

</body>

</html>