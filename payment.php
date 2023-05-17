<!doctype html>
<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Phonewoodcase</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>

    <div class="container">
		<h1 class="h-1">Orders Payment</h1>
		<div class="payment-method">
			<h2>Payment methods</h2>
			<div class="pay">
				<div class="radio">
					<input type="radio" id="credit-card" name="payment-method" value="credit-card" checked>
					<label for="credit-card">Credit</label>
				</div>
				<div class="radio">
					<input type="radio" id="debit-card" name="payment-method" value="debit-card">
					<label for="debit-card">Debit card</label>
				</div>
				<div class="radio">
					<input type="radio" id="paypal" name="payment-method" value="paypal">
					<label for="paypal">PayPal</label>
				</div>
				<div class="radio">
					<input type="radio" id="tienmat" name="payment-method" value="tienmat">
					<label for="paypal">Receive_money_on_delivery</label>
				</div>
			</div>
		</div>

		<div class="shipping-address">
			<div class="h-name">Delivery address</div>
			<label class="abc" for="name">Full_name:</label>
			<div class="iput">
				<input type="text" id="name" name="name">
			</div>
			<label class="abc" for="address">Address:</label>
			<div class="iput">
				<input type="text" id="address" name="address">
			</div>
			<label class="abc" for="SDT">Phone_number:</label>
			<div class="iput">
				<input type="text" id="phone-number" name="address">
			</div>
			<label class="abc" for="city">District:</label>
			<div class="iput">
				<input type="text" id="city" name="city">
			</div>
			<label class="abc" for="state">City:</label>
			<div class="iput">
				<input type="text" id="state" name="state">
			</div>
			<label class="abc" for="strict">Wards:</label>
			<div class="iput">
				<input type="text" id="strict" name="zip-code">
			</div>
		</div>
        <a href="payment.php"><button type="submit" id="checkout-btn">Order</button></a>
	</div>
	<style>
		.container {
			width: 500px;
			margin-top: 1.5rem;
			padding: 20px;
		}
		.payment-method{
			position:relative;
			top: 100px;
			left: -60%;
		}
		.h-1{
			position: relative;
			top: 40px;
			left: -230px;
			font-size: 50px;
			color:#FFA500;
		}
		.h2 {
			position:relative;
			top: -100px;
			left: 0;
			text-align: center;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		th, td {
			padding: 10px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
		.pay{
			background: #F8F8FF;
			padding: 8px 16px;
			border-style: groove;
		}
		.radio {
			margin-bottom: 10px;
		}
		label {
			display: inline-block;
			width: 100px;
		}
		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		button[type="submit"] {
			position:relative;
			top: -400px;
			left: 92%;
			margin: 20px auto;
			padding: 8px 16px;
			background-color: #F5FFFA;
			color:#FFA500;
			border-radius: 5px;
			border-style: 2rem solid;
			cursor: pointer;
			font-size: 24px;

		}
		button[type="submit"]:hover {
			background-color: #191970;
		}
		.product-list {
			list-style: none;
			padding: 0;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.product-list li {
			display: inline-block;
			flex-direction: column;
			align-items: center;
			text-align: center;
			border: 1px solid black;
			padding: 10px;
			margin-bottom: 20px;
			width: calc(29.44% - 25.44px);
		}
		.product-image {
			width: 100%;
			padding-bottom: 100%;
			position: relative;
		}
		.product-image img {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.shipping-address{
			position: relative;
			top: -300px;
			left: 250px;
			background:#E0FFFF;
			position: relative;
			width: 450px;
			height:750px;
			border-radius: 1.5rem;
			font-size: 20px;
		}
		.iput{
			position: relative;
			left: 50px;
			top: 20px;
			width: 350px;
			border-radius: 1rem;
		}
		.abc{
			position:relative;
			left:50px;
			top:20px;
			font-family: Candara;

			font-size: 20px;
		}
		.h-name{
			position:relative;
			top:10px;
			font-family: Arial;
			font-weight: bolder;
			font-size: 32px;
			text-align: center;
		}
	</style>
    <script>
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
		crossorigin="anonymous"
	</script>
  </body>
</html>