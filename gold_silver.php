<!DOCTYPE html>
<html>
<head>
	<title>Gold and Silver Prices</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		.container {
			margin-top: 50px;
			text-align: center;
		}
		.price-box {
			border: 1px solid #eee;
			padding: 30px;
			margin-bottom: 30px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 5px 15px #ddd;
			transition: all 0.3s ease-in-out;
		}
		.price-box:hover {
			transform: scale(1.05);
			box-shadow: 0px 10px 20px #ddd;
		}
		.price-box h2 {
			font-size: 40px;
			margin-top: 0;
			margin-bottom: 10px;
			color: #333;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 2px;
		}
		.price-box p {
			font-size: 28px;
			margin-bottom: 0;
			color: #777;
			font-weight: 500;
		}
		.gold {
			background-color: #ffd700;
		}
		.silver {
			background-color: #c0c0c0;
		}
		@media only screen and (max-width: 767px) {
			.price-box {
				padding: 20px;
			}
			.price-box h2 {
				font-size: 30px;
			}
			.price-box p {
				font-size: 24px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Gold and Silver Prices</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="price-box gold">
					<h2>Gold Price</h2>
					<p>₹62,270.00 </p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="price-box silver">
					<h2>Silver Price</h2>
					<p>₹77,400

					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
