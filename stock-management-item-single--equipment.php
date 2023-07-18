<?php include 'header.php'; ?>

<div class="page-title-block has-meta">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Kavo Experttorque</h1>
		</header>
		<div class="page-title__cta">
			<a href="receive-stock.php" class="icon-link">
				<div class="icon-link__icon">
					<i class="fa-solid fa-file-plus"></i> 
				</div>
				<div class="icon-link__label">
					Start Marketplace Order
				</div>
			</a>
		</div>
	</div>
	<div class="page-title-block__meta">
		<ul>
			<li><strong>Last Ordered: </strong>12/03/2023 from Supplier X</li>
		</ul>
	</div>
</div>

<div class="container container--narrow utility-margin-top-5">
	<div class="row">
		<div class="col-lg-6 col-md-6">
			<div class="content-panel">
				<header class="small-title">Quantity In Stock</header>
				<div class="large-number">
					3
				</div>
			</div>	
		</div>
		<div class="col-lg-3 col-md-3">
			<div class="content-panel">
				<header class="small-title">On Order</header>
				<div class="large-number">
					0	
				</div>				
			</div>		
		</div>
		<div class="col-lg-3 col-md-3">
			<div class="content-panel">
				<header class="small-title">On Backorder</header>
				<div class="large-number">
					0	
				</div>
			</div>		
		</div>
	</div>
	
	<div class="shadow-panel utility-margin-top-5">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th align="center">
						Clinic Room / Stock Room
					</th>
					<th>
						Qty
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						Clinic Room 1
					</td>
					<td>
						1
					</td>
				</tr>
				<tr>
					<td>
						Clinic Room 2
					</td>
					<td>
						1
					</td>
				</tr>
				<tr>
					<td>
						Clinic Room 3
					</td>
					<td>
						1
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="container container--narrow utility-margin-top-11">
	
	<div class="multiple-choice content-panel">
		<div class="form form-grid">
			<div class="form-grid__row">
				<div class="form__field">
					<label>
						Select an action for the selected 10 records
					</label>
				</div>
				<div class="form__field">
					<select>
						<option>Select</option>
						<option>1</option>
						<option>2</option>
					</select>	
				</div>
				<div class="form__field">
					<input type="submit" value="Go" />
				</div>
			</div>	
		</div>	
	</div>
	
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Received Stock</h3>
			</div>
		</div>
		<div class="table-title__right">
			<h5>Showing 1 - 3 of 3</h5>
		</div>
	</header>
	
	<div class="shadow-panel">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th>
						<input type="checkbox" />	
					</th>
					<th>
						Serial Number
					</th>
					<th>
						Supplier
					</th>
					<th>
						Supplier Code
					</th>
					<th>
						Location
					</th>
					<th>
						Designation
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="checkbox" />	
					</td>
					<td>
						XA986TR
					</td>
					<td>
						Kavo
					</td>
					<td>
						CG54313
					</td>
					<td>
						Clinic Room 1	
					</td>
					<td>
						None
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Stock Item" href="stock-management-received-view--equipment.php"><i class="fa-solid fa-eye fa-fw"></i></a>
						</nav>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="checkbox" />	
					</td>
					<td>
						FG89986
					</td>
					<td>
						Kavo
					</td>
					<td>
						CG54313
					</td>
					<td>
						Clinic Room 1	
					</td>
					<td>
						None
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Stock Item" href="stock-management-received-view--equipment.php"><i class="fa-solid fa-eye fa-fw"></i></a>
						</nav>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="checkbox" />	
					</td>
					<td>
						XA986TR
					</td>
					<td>
						Kavo
					</td>
					<td>
						CG54313
					</td>
					<td>
						Clinic Room 1	
					</td>
					<td>
						None
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Stock Item" href="stock-management-received-view--equipment.php"><i class="fa-solid fa-eye fa-fw"></i></a>
						</nav>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
		
	<div class="pagination">
		<a class="prev" href="#">Previous Page</a>
		<ul>
			<li class="current"><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
		<a class="next" href="#">Next Page</a>
	</div>
</div>

<?php include 'footer.php'; ?>