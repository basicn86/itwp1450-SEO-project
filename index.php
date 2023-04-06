<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/x-icon" href="./favicon.png">
	<link rel="stylesheet" href="./styles.css">

	<!--Begin SEO-->
	<meta name="description" content="Trade, sell, and learn about stocks and crypto.">
	<!--End SEO-->

	<title>Learn, Trade, Buy, and Sell - BoneStocks</title>
</head>
<body>
	<header>
		<?php include("./templates/topnav.php"); ?>
	</header>

	<hr>

	<div class="grid-container">
		<div class="left-column">
			<h1>Top News Today</h1>
			<article>
				<img class="article-image" src="./images/stocks.webp" width="2121" height="1414" alt="Stock news">
				<h2><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, alias.</a></h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos eveniet hic perspiciatis, accusamus autem. Laboriosam recusandae praesentium maiores, consequatur deserunt rerum nobis eligendi facere officiis? Eum officia debitis quae laboriosam ipsam quibusdam nobis qui odio ipsum quos corrupti labore porro illum fuga quia sint exercitationem aperiam, iusto ex neque?</p>
			</article>
			<h1>Top Stocks Today</h1>
			<article>

				<h2><a href="#">Lorem</a></h2>
				<p>$<?php echo rand(1, 500)?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptatum est nemo officiis, pariatur numquam quaerat porro cumque dolorem veniam.</p>

				<h2><a href="#">Lorem</a></h2>
				<p>$<?php echo rand(1, 500)?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptatum est nemo officiis, pariatur numquam quaerat porro cumque dolorem veniam.</p>
				
				<h2><a href="#">Lorem</a></h2>
				<p>$<?php echo rand(1, 500)?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptatum est nemo officiis, pariatur numquam quaerat porro cumque dolorem veniam.</p>

			</article>
		</div>
		<div class="right-column">
			<h3><a href="#">CTA</a></h3>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, quo ut ex a porro doloribus nobis ducimus at dolores rerum facilis vitae cumque minima nesciunt repellat. Voluptates mollitia nihil nobis voluptatem ipsa assumenda ea consequuntur dicta magni illum consequatur possimus voluptatibus, aperiam eius alias molestias officia doloribus, inventore praesentium ut?</p>
			<h3><a href="#">CTA</a></h3>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, quo ut ex a porro doloribus nobis ducimus at dolores rerum facilis vitae cumque minima nesciunt repellat. Voluptates mollitia nihil nobis voluptatem ipsa assumenda ea consequuntur dicta magni illum consequatur possimus voluptatibus, aperiam eius alias molestias officia doloribus, inventore praesentium ut?</p>
			<h3><a href="#">CTA</a></h3>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, quo ut ex a porro doloribus nobis ducimus at dolores rerum facilis vitae cumque minima nesciunt repellat. Voluptates mollitia nihil nobis voluptatem ipsa assumenda ea consequuntur dicta magni illum consequatur possimus voluptatibus, aperiam eius alias molestias officia doloribus, inventore praesentium ut?</p>
		</div>
	</div>

	<hr>

	<footer>
		<?php include("./templates/footernav.php"); ?>
	</footer>
</body>
</html>