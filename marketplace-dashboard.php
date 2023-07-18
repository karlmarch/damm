<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Marketplace</h1>
		</header>
	</div>
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="">
		<div id="search_table" class="form-grid form">	
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field">
					<label>Manufacturer</label>
					<select name="">
						<option value="">Manufacturer</option>
						<option value="">Colgate</option>
						<option value="">Kavo</option>
					</select>
				</div>
				<div class="form__field form__cta form-grid__row__cta">
					<input type="submit" name="btnSubmit" value="Search" title="Search" class="Buttons" />	
				</div>
			</div>	
		</div>
	</form>
</div>

<div class="container container--narrow">
	
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Order Again</h3>
			</div>
		</div>
	</header>
	
	<div class="product-slider">
		
		<div class="product">
			<div class="product__skin">
				<div class="product__image img-frame">
					<a title="Open Product: This is the title of a product" href="marketplace-product-single.php"><img src="img/temp-product.jpg" alt="Colgate Toothbrushes Multi-Pack" width="560" height="560" /></a>
				</div>
				<div class="product__info">
					<header>
						<a href="marketplace-product-single.php">This is the title of a product</a>
					</header>
					<div class="product__info__price">
						<span class="sale">$24.50</span>
						<span>$22.00</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="product">
			<div class="product__skin">
				<div class="product__image img-frame">
					<a title="Open Product: This is the title of a product" href="marketplace-product-single.php"><img src="img/temp-product.jpg" alt="Colgate Toothbrushes Multi-Pack" width="560" height="560" /></a>
				</div>
				<div class="product__info">
					<header>
						<a href="marketplace-product-single.php">This is the title of a product</a>
					</header>
					<div class="product__info__price">
						<span class="sale">$24.50</span>
						<span>$22.00</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="product">
			<div class="product__skin">
				<div class="product__image img-frame">
					<a title="Open Product: This is the title of a product" href="marketplace-product-single.php"><img src="img/temp-product.jpg" alt="Colgate Toothbrushes Multi-Pack" width="560" height="560" /></a>
				</div>
				<div class="product__info">
					<header>
						<a href="marketplace-product-single.php">This is the title of a product</a>
					</header>
					<div class="product__info__price">
						<span class="sale">$24.50</span>
						<span>$22.00</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="product">
			<div class="product__skin">
				<div class="product__image img-frame">
					<a title="Open Product: This is the title of a product" href="marketplace-product-single.php"><img src="img/temp-product.jpg" alt="Colgate Toothbrushes Multi-Pack" width="560" height="560" /></a>
				</div>
				<div class="product__info">
					<header>
						<a href="marketplace-product-single.php">This is the title of a product</a>
					</header>
					<div class="product__info__price">
						<span class="sale">$24.50</span>
						<span>$22.00</span>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="container container--narrow utility-margin-top-11">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Recent Orders</h3>
			</div>
		</div>
		<div class="table-title__right">
			<h5>Showing 1 - 1 of 1</h5>
		</div>
	</header>
	
	<div class="shadow-panel">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th>
						Order No
					</th>
					<th>
						Created On
					</th>
					<th>
						POs
					</th>
					<th>
						Status
					</th>
					<th>
						Value
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a class="indicator indicator--order" href="orders-single.php">50</a>
					</td>
					<td>
						15/03/2023
					</td>
					<td class="has-indicators"> <!-- Table cells that contain indicators require this class -->
						<a class="indicator indicator--po" href="#">66</a>
						<a class="indicator indicator--po" href="#">67</a>	
					</td>
					<td>
						<div class="status status--awaiting-approval"> <!-- Status needs correct modifier -->
							Awaiting Approval
						</div>
					</td>
					<td>
						$425.98
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Purchase Order" href="orders-single.php">
								<i class="fa-solid fa-eye fa-fw"></i>
							</a>
						</nav>
					</td>
				</tr>	
			</tbody>
		</table>		
	</div>
</div>

<?php include 'footer.php'; ?>