<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>E-commerce Landing page Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="../footer/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<header>

		<?php include '../NavBar/index.php';?>

		
		<div id="header-hero">
			<div class="header-bg"> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412561/E-commerce%20landing%20page/header/header-image_3x.jpg" alt="header-image" /> </div>
			<div class="header-content">
				<p class="heading-1">fashion collection  <?php   $year = date ("Y");  echo $year; ?></p>
				<h1>wellcome to brand<span class="logo-style">y</span> unique store</h1>
				<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="button">
					<p>shop now</p>
				</div>
			</div>
		</div>
	</header>
	<section id="summer-collection">
		<div class="container">
			<div class="sc-content">
				<h1>summer collection</h1>
				<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
					has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<a href="#">discover now</a> </div>
			<div class="sc-media">
				<div class="sc-media-bg"> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412556/E-commerce%20landing%20page/summer-collection/cold-fashion-man-women_3x.jpg" alt="sc-image" /> </div>
			</div>
		</div>
	</section>
	<section id="products">
		<div class="container">
			<div class="products-header">
				<h2>popular products</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div class="product product-1">
				<figure> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412551/E-commerce%20landing%20page/products-showcase/product-1-img_3x.jpg" alt="product-image">
					<figcaption>cold fashion</figcaption>
					<figcaption>Rs.560.00</figcaption>
				</figure>
			</div>
			<div class="product product-2">
				<figure> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412546/E-commerce%20landing%20page/products-showcase/product-2-img_3x.jpg" alt="product-image">
					<figcaption>women fashion</figcaption>
					<figcaption>Rs. 840.00</figcaption>
				</figure>
			</div>
			<div class="product product-3">
				<figure> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412550/E-commerce%20landing%20page/products-showcase/product-3-img_3x.jpg" alt="product-image">
					<figcaption>women fashion</figcaption>
					<figcaption>Rs. 480.00</figcaption>
				</figure>
			</div>
			<div class="product product-4">
				<figure> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412550/E-commerce%20landing%20page/products-showcase/product-4-img_3x.jpg" alt="product-image">
					<figcaption>men fashion</figcaption>
					<figcaption>Rs. 89.00</figcaption>
				</figure>
			</div>
		</div>
	</section>
	<section id="collections">
		<div class="container">
			<div class="c-1">
				<div class="c-1-image-holder"> <img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412550/E-commerce%20landing%20page/suit-collections/suit-collection-img_3x.jpg" alt="image"> </div>
			</div>
			<div class="c-2">
				<h2>featured collection</h2>
				<hr />
				<div class="c-2-image-holder"> <img class="left" src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412552/E-commerce%20landing%20page/suit-collections/collection-2-img_3x.jpg" alt=""><img class="right" src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412552/E-commerce%20landing%20page/suit-collections/collection-1-img_3x.jpg"
					 alt=""></div>
				<p class="button">view all collections</p>
			</div>
		</div>
	</section>
	
	<?php include '../footer/foot.php';?>
</body>
</html>