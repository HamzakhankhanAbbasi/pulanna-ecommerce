<?php include 'includes/header.php';?>


<section class="card-detail-sec">
	<div class="container">
		<div class="breadcrums-bar d-flex align-items-center">
			<p>Home</p>
			<span>/</span>
			<p>Shop</p>
			<span>/</span>
			<p>Checkout</p>
		</div>

		<div class="card-detail-wrap">
			<h1 class="gen-top-heading">Payment Method
				<span>There are 3 products in your cart</span>
			</h1>

			<form class="card-detail-form">
				<h1 class="heading">Select Your Card</h1>

				<div class="payment-cards-wrap">
					<div class="payment-card active">
						<img src="assets/images/payment-card-type-1.png">
					</div>
					<div class="payment-card">
						<img src="assets/images/payment-card-type-2.png">
					</div>
					<div class="payment-card">
						<img src="assets/images/payment-card-type-3.png">
					</div>
					<div class="payment-card">
						<img src="assets/images/payment-card-type-4.png">
					</div>
				</div>

				<div class="form-group">
					<label>Card Number</label>
					<input type="number" name="" placeholder="0000-0000-0000-0000">
				</div>
				<div class="form-group type-2">
					<div class="date-wrap">
						<label>Expiry Date</label>
						<input type="number" name="" placeholder="MM">
						<span>/</span>
						<input type="numbere" name="" placeholder="YY">
						<i class="far fa-credit-card"></i>
					</div>
					<div class="cvv-number">
						<label>CVV</label>
						<input type="number" name="" placeholder="123">
					</div>
				</div>
				<div class="form-group type-3">
					<input type="checkbox" name="">
					<p class="tagline">Save card for next time</p>
				</div>
				<div class="form-group">
					<button>Place an Order</button>
				</div>
			</form>

		</div>
	</div>
</section>


	<?php include 'includes/footer.php';?>
