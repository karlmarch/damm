<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Stock Management</h1>
		</header>
		<div class="page-title__cta">
			<a href="#" class="icon-link">
				<div class="icon-link__icon">
					<i class="fa-solid fa-barcode"></i> 
				</div>
				<div class="icon-link__label">
					Receive Stock
				</div>
			</a>
		</div>
	</div>
</div>

<div class="search-form-tabs">
	<div class="tab tab--active">
		<a href="stock-management-dashboard--store-room.php"></a>
		Store Room	
	</div>
	<div class="tab">
		<a href="stock-management-dashboard--equipment-inventory.php"></a>
		Equipment Inventory	
	</div>	
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="/Script/STK/ItemTypeF.asp">
		
		<div style="display:none;">
			<input type="hidden" name="ReturnURL" value="" />
			<input type="hidden" name="PageAction" value="search" />
			<input type="hidden" name="HTML_returnFunc" value="" />
			<input type="hidden" name="RequiresSourceWarehouse" value="" />
		</div>
		<div id="search_table" class="form-grid form">	
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field">
					<label>Supplier</label>
					<select name="SupplierID">
						<option value="">All Suppliers</option>
						<option value="464AF73B-A20C-462A-BB1F-782D16876662">Centaur</option>
						<option value="BE3B5745-9FC6-46B1-85AC-CEDA0FEF3041">eMark Systems</option>
						<option value="67B8D5E4-BD7A-43CF-869B-7C4E24827740">Internal Supplier</option>
					</select>	
				</div>
				<div class="form__field">
					<label>Status</label>
					<select name="WorkflowStateID">
						<option value="">Any Status</option>
						<option value="11CF5C52-C92B-418A-94A2-A541597D5E0D">Cancelled</option>
						<option value="84FAF672-31AF-48DD-9293-CBD08BADB141">Completed</option>
						<option value="DBECE537-6B5B-4E93-9E47-D4F5A6170662">Export Error</option>
						<option value="F1FA0BA7-E317-4C91-9381-A29A65E353FA">Initialised</option>
						<option value="42C6D6E4-96A2-46A1-8BE5-D9E3C57ADEB1">Ordered</option>
						<option value="6F1BBCEA-8A65-4A28-B8F2-EA3FFB670D12">Pending Export</option>
					</select>
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
					<label>Category</label>
					<select name="CatID">
						<option value="">(All Categories)</option>
						<option value="59CB6278-6B32-47FD-94EF-0C24822983C0">All Stock</option>
						<option value="635DA4DE-3738-460F-B6A1-76F3F1B1558A">Category 1</option>
						<option value="1379F93A-D9A6-4F50-9DD9-EE9C45F3F403">New stock items</option>
					</select>
				</div>
				<div class="form__field">
					<label>Supplier Code</label>
					<input title="Enter a Vendor Code Here and Click Search" type="text" name="VendorCode" value="" size="30" maxlength="50" />	
				</div>
				<div class="form__field">
					<label>Clinic Room</label>
					<select name="WarehouseID">
						<option value="">(All Warehouses)</option>
						<option value="2A7476BD-0264-437D-9485-C1DA2C0F1EE6">Clinic 1 -Front Office</option>
						<option value="EA003CC6-F3EA-4A78-B259-B57F01E02651">Clinic 1 -Room A</option>
						<option value="AA6DD567-2BD7-486E-9E85-503E9F0F62B0">Clinic 1 -Room B</option>
						<option value="C238EE16-C63F-4392-9DAE-AF1F52087AEE">Clinic 2- Front desk</option>
						<option value="37A8113D-84F4-4D7B-8A21-813FCAAD1B08">Clinic 2 -Room A</option>
						<option value="B1F660B2-484D-48BA-978E-6F7305453973">Room D</option>
					</select>
				</div>
				<div class="form__field">
					<label>Packaging Type</label>
					<select name="PackagingTypeID">
						<option value="">(All Packaging Types)</option>
						<option value="KG">Kilogram</option>
					</select>	
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Expiration Date Range</label>
					<div class="form-grid__row form__field__dates">
						<div class="date-field">
							<input title="Enter an End Date Here" type="text"  value="" placeholder="From DD/MM/YYYY" />
				
							<a class="icon-link">
								<div class="icon-link__icon">
									<i class="fa-solid fa-calendar"></i> 
								</div>
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
				<div class="form__field">
					<label>Is Consumable?</label>
					<select name="IsConsumable">
						<option value="">(All)</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
				<div class="form__field">
					<label>Is Composite Product?</label>
					<select name="IsCompositeProduct">
						<option value="">(All)</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
			</div>	
		</div>
	</form>
</div>

<div class="container container--narrow utility-margin-top-11">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Store Room</h3>
			</div>
		</div>
		<div class="table-title__right">
			<h5>Showing 1 - 10 of 357</h5>
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
					Product Name
				</th>
				<th>
					Supplier
				</th>
				<th>
					Available
				</th>
				<th>
					On Order
				</th>
				<th>
					Backorder
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
					Toothbrush
				</td>
				<td>
					Colgate
				</td>
				<td>
					1,567
				</td>
				<td>
					100	
				</td>
				<td>
					0
				</td>
				<td class="stripe-table__actions">
					<nav class="actions-links">
						<a class="actions-link" title="Click to View this Product" href="#"><i class="fa-solid fa-eye fa-fw"></i></a>
						<a class="actions-link" title="Click to Receive Stock" href="#"><i class="fa-solid fa-barcode fa-fw"></i></a>
					</nav>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" />	
				</td>
				<td>
					Toothbrush
				</td>
				<td>
					Colgate
				</td>
				<td>
					1,567
				</td>
				<td>
					100	
				</td>
				<td>
					0
				</td>
				<td class="stripe-table__actions">
					<nav class="actions-links">
						<a class="actions-link" title="Click to View this Product" href="#"><i class="fa-solid fa-eye fa-fw"></i></a>
						<a class="actions-link" title="Click to Receive Stock" href="#"><i class="fa-solid fa-barcode fa-fw"></i></a>
					</nav>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" />	
				</td>
				<td>
					Toothbrush
				</td>
				<td>
					Colgate
				</td>
				<td>
					1,567
				</td>
				<td>
					100	
				</td>
				<td>
					0
				</td>
				<td class="stripe-table__actions">
					<nav class="actions-links">
						<a class="actions-link" title="Click to View this Product" href="#"><i class="fa-solid fa-eye fa-fw"></i></a>
						<a class="actions-link" title="Click to Receive Stock" href="#"><i class="fa-solid fa-barcode fa-fw"></i></a>
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

<?php include 'footer.php'; ?>