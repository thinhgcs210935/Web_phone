<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<header>
			<a class="logo">Theworldofwoodcase</a>
			<nav class="navbar">
				<a href="./index">Home</a>
				<a href="./cart.php">Products</a>
			</nav>
			<div class="icons">
				<a href="./catalog.php" class="fas fa-magnifying-glass"></a>
				<a href="./my_cart.php" class="fas fa-shopping-cart"></a>
				<a href="./payment.php" class="fa-solid fa-credit-card"></a>
				<a href="./login.php" class="fas fa-user"></a>
			</div>
			</header>
		</nav>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
			
			:root{
				--black:#2c2c54;
				--orange:#ff9f1a;
				--red: #FF4500;
			}
			header{
				position: relative;
				top:0; left:0; right:0;
				z-index: 1000;
				background:#fff;
				width: 100%;
				padding:.75rem 9%;
				display: flex;
				align-items: center;
				justify-content: space-between; /*Gía trị này giúp cho các khoảng cách giữa các thành phần luôn bằng nhau, tuy nhiên phần tử đầu luôn nằm sát trái, phần tử cuối luôn nằm sát phải */
				box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
			}
			header .logo{
				position: relative;
				left: -3%;
				font-size: 2.5rem;
				color:#FF4500;
			}
			header .navbar a{
				position: relative;
				left:45%;
				font-size: 1.5rem;
				color:var(--black);
				margin:0 .5rem;
			}
			header .navbar a:hover{
				color:var(--orange);
			}
			header .icons a{
				position: relative;
				left:40%;
				font-size: 1.5rem;
				color:var(--black);
				margin-left:1.3rem;
			}
			header .icons a:hover{
				color:var(--red);
			}
		</style>
	</body>
</html>