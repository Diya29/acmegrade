<?php
session_start();

// Start the session
// Check if the add to cart button is clicked
if (isset($_POST["add_to_cart"])) {
	
	// Get the product ID from the form
	$product_id = $_POST["product_id"];
	
	// Get the product quantity from the form
	$product_quantity = $_POST["product_quantity"];

	// Initialize the cart session variable
	// if it does not exist
	if (!isset($_SESSION["cart"])) {
		$_SESSION["cart"] = [];
		header("location:cart.php");
	}

	// Add the product and quantity to the cart
	$_SESSION["cart"][$product_id] = $product_quantity;
	header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Shopping Web Application</title>
		<link rel="stylesheet"
				href="shop.css">
	</head>
	<body>
		<header>
			<h1>Welcome <?php
			$user = $_SESSION["user"];
			echo $user["name"];
			?> to Bags Shopping Web Application</h1>
		</header>
		<nav>
			<ul>
				<li><a href="shop.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</nav>
		<main>
			<section>
				<h2>Products</h2>
				<ul>
					<li>
						<h3>Mini Bag</h3>
						<img src=
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9-cNY_UqNI3PUvX70hCkYhAPOYq2RcR6IRSz9J1-b4FrYP_kuRuQ5el2tde_w5yeTT7w&usqp=CAU							alt="Product 1">
						<p>Bag with 2 Extra pockets</p>
						<p><span>Rs.1200</span></p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="1">
							<label for="product1_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart</button>
						</form>
					</li>
					<li>
						<h3>Shoulder Bag</h3>
						<img src=
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ZqnJbpskh_azquVu8xf2TSXQhqDNWlu_20CNy3BZX6LT0R2j-VNEeDUVdPcNlKeLfE0&usqp=CAU							alt="Product 2">
						<p>100% Leather</p>
						<p>
							<span>Rs. 2000</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="2">
							<label for="product2_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
						</button>
						</form>
					</li>
					<li>
						<h3>Work/College Bag</h3>
						<img src=
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe8EUVO8ZoVgVKd_b-uQ-kn6mFCUpt295SkA&usqp=CAU                                     alt="Product 3">

                        <p>Backpack Bag</p>
						<p>
							<span>Rs. 5000</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="3">
							<label for="product3_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
							</button>
						</form>
					</li>
								
					<!-- Add forms for the other products here -->
				</ul>
			</section>
		</main>
		<script src="shop.php"></script>
	</body>
</html>
