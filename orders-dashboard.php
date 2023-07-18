<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Orders</h1>
		</header>
		<div class="page-title__cta">
			<a href="marketplace-new-order.php" class="icon-link">
				<div class="icon-link__icon">
					<i class="fa-solid fa-file-plus"></i> 
				</div>
				<div class="icon-link__label">
					Start Marketplace Order
				</div>
			</a>
		</div>
	</div>
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="/Script/MCH/SupplierOrderF.asp" onsubmit="return validateform(this);">
		
		<div style="display:none;">
			<input type="hidden" name="ReturnURL" value="" />
			<input type="hidden" name="PageAction" value="search" />
			<input type="hidden" name="SortDir" value="" />
			<input type="hidden" name="SortKey" value="" />
			<input type="hidden" name="UseLightboxPopups" id="UseLightboxPopups" value="1" />
		</div>
		<div id="search_table" class="form-grid form">	
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field">
					<label>Date Range</label>
					<div class="form-grid__row form__field__dates">
						<div class="date-field">
							<div id="StartDatediv"></div>
								<input title="Enter an End Date Here" onfocus="this.select();" type="text" name="EndDate" value="" placeholder="From DD/MM/YYYY" />
								
								<script type="text/javascript">var calSD = new CalendarPopup("StartDatediv");</script>
								<a onclick="return calendar_onclick( calSD, document.SearchForm.StartDate, 'anchor1' );" title="Click to Select a Start Date from the Calendar" name="anchor1" id="anchor1">
									<a class="icon-link">
										<div class="icon-link__icon">
											<i class="fa-solid fa-calendar"></i> 
										</div>
									</a>
								</a>
						</div>
						<div class="date-field">
							<input type="text" placeholder="To DD/MM/YYYY">
							<a class="icon-link">
								<div class="icon-link__icon">
									<i class="fa-solid fa-calendar"></i> 
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="form__field form__cta form-grid__row__cta">
					<input type="submit" name="btnSubmit" value="Search" title="Search" class="Buttons" />	
				</div>
			</div>
			<div class="form-grid__row">
				<a class="advanced-search-link"><i class="fa-solid fa-magnifying-glass"></i> Advanced Search</a>
			</div>
		</div>
		<div class="form-grid form advanced-form">
			<div class="form-grid__row">
				<div class="form__field">
					<label>PO Number</label>
					<input type="text" name="LinkPurchaseOrderRef" size="20" maxlength="30" value="" />
				</div>
				<div class="form__field">
					<label>Order Number</label>
					<input type="text" name="#" size="20" maxlength="30" value="" />
				</div>
				<div class="form__field">
					<label>Manufacturer Code</label>
					<input type="text" name="#" size="20" maxlength="30" value="" />
				</div>
			</div>		
		</div>
	</form>
</div>

<div class="container container--narrow">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Recent Orders</h3>
			</div>
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
