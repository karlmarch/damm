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
	<div class="tab">
		<a href="stock-management-dashboard--store-room.php"></a>
		Store Room	
	</div>
	<div class="tab tab--active">
		<a href="stock-management-dashboard--equipment-inventory.php"></a>
		Equipment Inventory	
	</div>	
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="/Script/STK/ItemF.asp">
		
		<div style="display:none;">
			<input type="hidden" name="ReturnURL" value="" />
			<input type="hidden" name="PageAction" value="search" />
		</div>
		<div id="search_table" class="form-grid form">	
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field">
					<label>Serial No</label>
					<input title="Enter a Serial No Here and Click Search" type="text" name="SerialNo" value="" size="12" maxlength="20" style="text-align:right;" />	
				</div>
				<div class="form__field">
					<label>Status</label>
					<select name="Status">
						<option value="">(All Statuses)</option>
						<option value="E">Exchanged</option>
						<option value="N">New</option>
						<option value="R">Rotational</option>
						<option value="S">Salvaged</option>
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
					<label>Supplier</label>
					<select name="VendorID">
						<option value="">(All Manufacturers)</option>
						<option value="E32E205D-47D3-4D85-883D-8E910637CEEC">Centaur</option>
						<option value="6475B7B0-73C5-4F89-AE8B-993434684D5D">OTHER</option>
					</select>
				</div>
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
					<label>Manufacturer Code</label>
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
					<label>PO Number</label>
					<input title="Enter a Purchase Order Number Here and Click Search" type="text" name="LinkPurchaseOrderRef" value="" size="30" maxlength="50" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Service Date Range</label>
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
					<label>Warranty Expiration Date Range</label>
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
			</div>	
		</div>
	</form>
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
				<h3>Equipment Inventory</h3>
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
						Serial No
					</th>
					<th>
						Product Name
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
						Kavo Experttorque
					</td>
					<td>
						Company X
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
							<a class="actions-link" title="Click to View this Inventory Item" href="equipment-stock-item-single.php"><i class="fa-solid fa-eye fa-fw"></i></a>
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
						Kavo Experttorque
					</td>
					<td>
						Company X
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
							<a class="actions-link" title="Click to View this Inventory Item" href="equipment-stock-item-single.php"><i class="fa-solid fa-eye fa-fw"></i></a>
							
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