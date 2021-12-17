<?php include 'includes/header.php';?>


<section class="cart-sec">
	<div class="container">
		<div class="breadcrums-bar d-flex align-items-center">
			<p>Home</p>
			<span>/</span>
			<p>Shop</p>
			<span>/</span>
			<p>Cart</p>
		</div>
				<div class="cart-wrap">
					<div class="cart-top-bar">
						<div class="cart-wrap-2">
							<h1 class="gen-top-heading">Your Cart
								<span>There are 3 products in your cart</span>
							</h1>
							<button class="clear-cart-btn me-2"><i class="fas fa-trash-alt"></i> Clear Data</button>
						</div>
					</div>
					<div class="row">
						<div class="col-9">
							<div class="wish-list-box cart-list-box">
								<div class="top-bar">
									<h1 class="heading type-1">
										<input type="checkbox" name="" class="me-2">
										Products
									</h1>
									<h1 class="heading">
										Unit Price
									</h1>
									<h1 class="heading">
										Quantity
									</h1>
									<h1 class="heading">
										Subtotal
									</h1>
									<h1 class="heading">
										Remove
									</h1>
								</div>
								<ul class="items-listing">
									<li>
										<div class="text-box">
											<input type="checkbox">
											<div class="img-box me-4 ms-4">
												<img src="assets/images/product-card-1.png">
											</div>
											<div class="products-specs">
												<p class="top-tagline">Bio-gold Series	</p>
												<h1 class="name">Bio-gold Gold Cleansing Milk</h1>
												<div class="rating">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<p>(5.0)</p>
												</div>
											</div>
										</div>
										<div class="detail-box">
											<div class="price">$24.65</div>
											<div class="action-btns">
												<div class="quaitity-box">
													<form>
														<div class="plus-minus">
															<span class="minus"><i class="fas fa-minus"></i></span>
															<input type="number" class="count" name="qty" value="1">
															<span class="plus"><i class="fas fa-plus"></i></span>
														</div>
													</form>
												</div>
												<p class="sub-total">$24.65</p>
											</div>
											<button class="dlt-item"><i class="fas fa-trash-alt"></i></button>
										</div>
									</li>
									<li>
										<div class="text-box">
											<input type="checkbox">
											<div class="img-box me-4 ms-4">
												<img src="assets/images/product-card-2.png">
											</div>
											<div class="products-specs">
												<p class="top-tagline">Bio-gold Series	</p>
												<h1 class="name">Bio-gold & Grape Moisturizing Toner</h1>
												<div class="rating">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<p>(5.0)</p>
												</div>
											</div>
										</div>
										<div class="detail-box">
											<div class="price">$58.80</div>
											<div class="action-btns">
												<div class="quaitity-box">
													<form>
														<div class="plus-minus">
															<span class="minus"><i class="fas fa-minus"></i></span>
															<input type="number" class="count" name="qty" value="1">
															<span class="plus"><i class="fas fa-plus"></i></span>
														</div>
													</form>
												</div>
												<p class="sub-total">$58.80</p>
											</div>
											<button class="dlt-item"><i class="fas fa-trash-alt"></i></button>
										</div>
									</li>
									<li>
										<div class="text-box">
											<input type="checkbox">
											<div class="img-box me-4 ms-4">
												<img src="assets/images/product-card-3.png">
											</div>
											<div class="products-specs">
												<p class="top-tagline">Bio-gold Series	</p>
												<h1 class="name">Bio-gold & Grape Moisturizing Cream</h1>
												<div class="rating">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<p>(5.0)</p>
												</div>
											</div>
										</div>
										<div class="detail-box">
											<div class="price">$30.80</div>
											<div class="action-btns">
												<div class="quaitity-box">
													<form>
														<div class="plus-minus">
															<span class="minus"><i class="fas fa-minus"></i></span>
															<input type="number" class="count" name="qty" value="1">
															<span class="plus"><i class="fas fa-plus"></i></span>
														</div>
													</form>
												</div>
												<p class="sub-total">$30.80</p>
											</div>
											<button class="dlt-item"><i class="fas fa-trash-alt"></i></button>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-3">
							<div class="order-summary-card">
								<div class="summary-group type-1">
									<ul>
										<li class="pt-0">
											<p class="sub-total">Subtotal</p>
											<span class="sub-total-price">$15.00</span>
										</li>
									</ul>
								</div>
								<div class="summary-group">
									<ul>
										<li>
											<span>Shipping</span>
											<span>Free</span>
										</li>
										<li class="pt-1">
											<span>Estimate for</span>
											<span>United Kingdom</span>
										</li>
									</ul>
								</div>
								<div class="summary-group">
									<ul>
										<li>
											<span class="total">Total</span>
											<span class="total-price">$20.00</span>
										</li>
									</ul>
									<a href="checkout.php" class="gen-btn xy-center mt-3">Checkout<i class="ms-3 fas fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<button class="shipping-btn"><i class="fas fa-long-arrow-alt-left me-2"></i> Continue Shopping</button>
				</div>
			
	</div>
</section>


<?php include 'includes/footer.php';?>
