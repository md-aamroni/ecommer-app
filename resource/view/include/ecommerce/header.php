<?php

use App\Http\Controllers\NavigationController;

$ctrl = new NavigationController;

$categories = $ctrl->navbarCategory();
?>


<div class="top-notice text-white bg-primary">
	<div class="container text-center">
		<h5 class="d-inline-block mb-0">Get Up to <b>40% OFF</b> New-Season Styles </h5>
		<small>* Limited time only.</small>
		<button title="Close (Esc)" type="button" class="mfp-close">×</button>
	</div>
</div>

<header class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-left header-dropdowns">
				<div class="header-dropdown">
					<a href="#" class="pl-0"><img src="<?php echo asset('images/ecommerce/flags/en.png'); ?>" alt="England flag">ENG</a>
					<div class="header-menu">
						<ul>
							<li><a href="javascript:;"><img src="<?php echo asset('images/ecommerce/flags/en.png'); ?>" alt="England flag">ENG</a></li>
							<li><a href="javascript:;"><img src="<?php echo asset('images/ecommerce/flags/fr.png'); ?>">FRA</a></li>
						</ul>
					</div>
				</div>
				<div class="header-dropdown ml-4">
					<a href="javascript:;">BDT</a>
					<div class="header-menu">
						<ul>
							<li><a href="javascript:;">BDT</a></li>
							<li><a href="javascript:;">EUR</a></li>
							<li><a href="javascript:;">USD</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-right">
				<p class="top-message text-uppercase d-none d-sm-block mr-4"><?php echo APP['return']; ?></p>
				<span class="separator"></span>
				<div class="header-dropdown dropdown-expanded mx-2 px-1">
					<a href="#">Links</a>
					<div class="header-menu">
						<ul>
							<li><a href="about.php">About </a></li>
							<li><a href="#">Our Stores</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php" class="">Log In</a></li>
						</ul>
					</div>
				</div>
				<span class="separator"></span>
				<div class="social-icons">
					<a href="#" class="social-icon social-facebook fab fa-facebook-f" target="_blank"></a>
					<a href="#" class="social-icon social-twitter fab fa-twitter" target="_blank"></a>
					<a href="#" class="social-icon social-instagram fab fa-instagram" target="_blank"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="header-middle">
		<div class="container">
			<div class="header-left w-lg-max ml-auto ml-lg-0">
				<div class="header-icon header-search header-search-inline header-search-category">
					<a href="#" class="search-toggle" role="button"><i class="fas fa-search"></i></a>
					<form action="#" method="get">
						<div class="header-search-wrapper autocomplete">
							<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
							
						</div>
						<script>
							function autocomplete(inp, arr) {
								var currentFocus;
								inp.addEventListener("input", function(e) {
									var a, b, i, val = this.value;
									closeAllLists();
									if (!val) {
										return false;
									}
									currentFocus = -1;
									a = document.createElement("DIV");
									a.setAttribute("id", this.id + "autocomplete-list");
									a.setAttribute("class", "autocomplete-items");
									this.parentNode.appendChild(a);
									for (i = 0; i < arr.length; i++) {
										if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
											b = document.createElement("DIV");
											b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
											b.innerHTML += arr[i].substr(val.length);
											b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
											b.addEventListener("click", function(e) {
												inp.value = this.getElementsByTagName("input")[0].value;
												closeAllLists();
											});
											a.appendChild(b);
										}
									}
								});
								inp.addEventListener("keydown", function(e) {
									var x = document.getElementById(this.id + "autocomplete-list");
									if (x) x = x.getElementsByTagName("div");
									if (e.keyCode == 40) {
										currentFocus++;
										addActive(x);
									} else if (e.keyCode == 38) {
										currentFocus--;
										addActive(x);
									} else if (e.keyCode == 13) {
										e.preventDefault();
										if (currentFocus > -1) {
											if (x) x[currentFocus].click();
										}
									}
								});

								function addActive(x) {
									if (!x) return false;
									removeActive(x);
									if (currentFocus >= x.length) currentFocus = 0;
									if (currentFocus < 0) currentFocus = (x.length - 1);
									x[currentFocus].classList.add("autocomplete-active");
								}

								function removeActive(x) {
									for (var i = 0; i < x.length; i++) {
										x[i].classList.remove("autocomplete-active");
									}
								}

								function closeAllLists(elmnt) {
									var x = document.getElementsByClassName("autocomplete-items");
									for (var i = 0; i < x.length; i++) {
										if (elmnt != x[i] && elmnt != inp) {
											x[i].parentNode.removeChild(x[i]);
										}
									}
								}
								document.addEventListener("click", function(e) {
									closeAllLists(e.target);
								});
							}
							var countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts & Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];
							autocomplete(document.getElementById("q"), countries);
						</script>
					</form>
				</div>
			</div>
			<div class="header-center order-first order-lg-0 ml-0 ml-lg-auto">
				<button class="mobile-menu-toggler" type="button">
					<i class="icon-menu"></i>
				</button>
				<a href="index.php" class="logo">
					<img src="<?php echo asset('images/ecommerce/logo.png'); ?>" alt="Porto Logo">
				</a>
			</div>
			<div class="header-right w-lg-max ml-0 ml-lg-auto">
				<div class="header-contact d-none d-lg-flex align-items-center ml-auto pr-xl-4 mr-4">
					<i class="fas fa-phone"></i>
					<h6 class="pt-1 line-height-1 pr-2">Call us now<a href="tel:#" class="d-block text-dark pt-1 font1">+123 5678 890</a></h6>
				</div>

				<a href="login.php" class="header-icon  pl-1"><i class="fas fa-user-tag"></i></a>

				<a href="#" class="header-icon pl-1 pr-2"><i class="far fa-heart"></i></a>

				<div class="dropdown cart-dropdown">
					<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
						<i class="fas fa-shopping-bag"></i>
						<span class="cart-count badge-circle">2</span>
					</a>

					<div class="dropdown-menu">
						<div class="dropdownmenu-wrapper">
							<div class="dropdown-cart-header">
								<span>2 Items</span>

								<a href="checkout.php" class="float-right">View Cart</a>
							</div>

							<div class="dropdown-cart-products">
								<div class="product">
									<div class="product-details">
										<h4 class="product-title">
											<a href="product.php">Woman Ring</a>
										</h4>

										<span class="cart-product-info">
											<span class="cart-product-qty">1</span>
											x $99.00
										</span>
									</div>

									<figure class="product-image-container">
										<a href="product.php" class="product-image">
											<img src="<?php echo asset('images/ecommerce/products/cart/product-1.jpg'); ?>" alt="product" width="80" height="80">
										</a>

										<a href="#" class="btn-remove fas fa-times" title="Remove Product"></a>
									</figure>
								</div>

								<div class="product">
									<div class="product-details">
										<h4 class="product-title">
											<a href="product.php">Woman Necklace</a>
										</h4>

										<span class="cart-product-info">
											<span class="cart-product-qty">1</span>
											x $35.00
										</span>
									</div>

									<figure class="product-image-container">
										<a href="product.php" class="product-image">
											<img src="<?php echo asset('images/ecommerce/products/cart/product-2.jpg'); ?>" alt="product" width="80" height="80">
										</a>
										<a href="#" class="btn-remove fas fa-times" title="Remove Product"></a>
									</figure>
								</div>
							</div>

							<div class="dropdown-cart-total">
								<span>Total</span>

								<span class="cart-total-price float-right">$134.00</span>
							</div>

							<div class="dropdown-cart-action">
								<a href="shop-cart.php" class="btn btn-dark btn-block">Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.logo',
						'position': 'start',
						'clone': false
					},
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav li.custom',
						'removeClass': 'd-xl-block'
					}
				]
			}">



		<!-- Navigation Bar Content | Start -->
		<div class="container">
			<nav class="main-nav d-flex w-lg-max justify-content-center">
				<ul class="menu">
					<li class="active">
						<a href="index">Home</a>
					</li>
					<?php if (!empty($categories) && is_array($categories)) : ?>
						<?php foreach ($categories as $category) : ?>
							<li>
								<a href="javascript:;"><?php echo $category['title']; ?></a>
								<?php $subCategories = $ctrl->navbarSubCategory($category['id']); ?>
								<?php if (!empty($subCategories) && is_array($subCategories)) : ?>
									<ul>
										<?php foreach ($subCategories as $subCategory) : ?>
											<li><a href="category-list?title=<?php echo $subCategory['slug']; ?>"><?php echo $subCategory['title']; ?></a></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php">About Us</a></li>
					<li class="d-none d-xl-block custom"><a href="#">Special Offer!</a></li>
				</ul>
			</nav>
		</div>
		<!-- Navigation Bar Content | End -->
	</div>
</header>