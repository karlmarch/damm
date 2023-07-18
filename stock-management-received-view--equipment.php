<?php include 'header.php'; ?>

<div class="page-title-block has-meta">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Kavo Experttorque</h1>
		</header>
		<div class="page-title__cta">
			<a href="marketplace-dashboard.php" class="icon-link">
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
			<li><strong>Received Date: </strong>12/03/2023</li>
			<li><strong>Received By: </strong><a href="#">Karl March</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<header class="content-panel-title">
			Supplier Information
		</header>
		<div class="content-panel TableCRM utility-margin-bottom-2">
			<div class="form-grid form">
				<div class="form-grid__row">
					<div class="form__field Required">
						<label>Supplier</label>
						<input type="text" value="Kavo" readonly />	
					</div>
				</div>
			</div>
		</div>
		
		<div class="utility-margin-top-4">
			<header class="content-panel-title">
				Inventory Information
			</header>
			
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="content-panel">
						<header class="small-title">
							Received Stock Qty
						</header>
						<div class="large-number">
							1
						</div>	
					</div>	
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="content-panel">
						<header class="small-title">
							PO Number
						</header>
						<a class="indicator indicator--po" href="po-single.php">67</a>	
					</div>	
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="content-panel">
						<header class="small-title">
							Order Number
						</header>
						<a class="indicator indicator--order" href="orders-single.php">50</a>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="utility-margin-top-5">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="shadow-panel shadow-panel--padded">
						<header class="small-title">
							Location	
						</header>
						Clinic Room 1
					</div>
				</div>	
				<div class="col-lg-6 col-md-6">
					<div class="shadow-panel shadow-panel--padded">
						<header class="small-title">
							Status	
						</header>
						<div class="status status--in-storage">In Storage</div>
					</div>
				</div>	
			</div>	
		</div>	
		
		<div class="utility-margin-top-5">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="shadow-panel shadow-panel--padded">
						<header class="small-title">
							Warranty Expiration Date		
						</header>
						24/05/2024
					</div>
				</div>	
				<div class="col-lg-6 col-md-6">
					<div class="shadow-panel shadow-panel--padded">
						<header class="small-title">
							Service Date	
						</header>
						24/05/2024
					</div>
				</div>	
			</div>	
		</div>	
	</div>
	
	
	<div class="col-lg-4 col-md-4">
		<div class="content-panel">
			<header class="small-title">
				Actions
			</header>	
			<nav class="icon-links form">
				
				<form action="#" name="" method="get">
					
					<!-- Hidden fields here -->
					
					<div class="utility-margin-bottom-5">
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="">
							<input type="radio" class="radiobutton" name="" id=""><span>Action</span></label>
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="">
							<input type="radio" class="radiobutton" name="" id=""><span>Action</span></label>
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="">
							<input type="radio" class="radiobutton" name="" id=""><span>Action</span></label>
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="">
							<input type="radio" class="radiobutton" name="" id=""><span>Action</span></label>
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="">
							<input type="radio" class="radiobutton" name="" id=""><span>Action</span></label>
						</div>
					</div>
					<header class="small-title utility-margin-bottom-2">
						Add notes to action
					</header>	
					<div class="form__field utility-margin-bottom-2">
						<textarea name="Narrative" maxlength="4000"></textarea>				
					</div>
					<div class="form__field form__field--cta">
						<input type="submit" name="btnSubmit" value="Save" />
					</div>
					
				</form>
			</nav>
		</div>
	</div>
</div>

<div class="container container--narrow utility-margin-top-8">
	<header class="table-title">
		<div class="table-title__title">
			<h3>Journal</h3>
		</div>
	</header>
	<div class="shadow-panel shadow-panel--dark">
		<table class="TableCRM stripe-table stripe-table--dark">
			<thead>
				<tr>
					<th align="center">
						Date / Time
					</th>
					<th>
						Action
					</th>
					<th>
						By
					</th>
					<th>
						Narrative
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						04/04/2024  10:30	
					</td>
					<td>
						Admin Approve -> Pending Payment	
					</td>
					<td>
						Karl March	
					</td>
					<td>
						-	
					</td>
				</tr>
				<tr>
					<td>
						04/04/2024	
					</td>
					<td>
						Admin Approve -> Pending Payment	
					</td>
					<td>
						Karl March	
					</td>
					<td>
						-	
					</td>
				</tr>
			</tbody>	
		</table>
	</div>
</div>

<?php include 'footer.php'; ?>