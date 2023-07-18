<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Purchase Orders</h1>
		</header>
		<div class="page-title__cta">
			<a class="icon-link" href="po-new.php">
				<div class="icon-link__icon">
					<i class="fa-solid fa-file-plus"></i> 
				</div>
				<div class="icon-link__label">
					New Purchase Order
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
							<a onclick="return calendar_onclick( calSD, document.SearchForm.StartDate, 'anchor1' );" title="Click to Select a Start Date from the Calendar" name="anchor1" id="anchor1" class="icon-link">
								<div class="icon-link__icon">
									<i class="fa-solid fa-calendar"></i> 
								</div>
							</a>
						</div>
						<div class="date-field">
							<div id="EndDatediv"></div>
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
					<label>Manufacturer</label>
					<select name="VendorID">
						<option value="">All</option>
						<option value="E32E205D-47D3-4D85-883D-8E910637CEEC">Centaur</option>
						<option value="6475B7B0-73C5-4F89-AE8B-993434684D5D">Other</option>
					</select>	
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
				
				<div class="form__field">
					<label>Status Type</label>
					<select name="StateTypeID">
						<option value="">All</option>
						<option value="Closed">Closed</option>
						<option value="Open">Open</option>
					</select>
				</div>
				
				<div class="form__field">
					<label>PO Number</label>
					<input type="text" name="LinkPurchaseOrderRef" size="20" maxlength="30" value="" />
				</div>
			</div>		
		</div>
	</form>
</div>

<div class="container container--narrow">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Recent Purchase Orders</h3>
			</div>
		</div>
	</header>
	<div class="shadow-panel">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th>
						PO No
					</th>
					<th>
						Supplier
					</th>
					<th>
						Created On
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
						<a class="indicator indicator--po" href="po-single.php"><span>67</span></a>
					</td>
					<td>
						Colgate
					</td>
					<td>
						15/03/2023
					</td>
					<td>
						<div class="status status--awaiting-approval">
							Awaiting Approval
						</div>
					</td>
					<td>
						$425.98
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Purchase Order" href="/Script/MCH/SupplierOrderS.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-eye fa-fw"></i></a>
							
							<a class="actions-link" title="Click to Edit this Purchase Order" href="/Script/MCH/SupplierOrderU.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-pen-to-square fa-fw"></i></a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Purchase Order" href="/Script/MCH/SupplierOrderD.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D" onclick="return confirm( 'Really Delete this Purchase Order?' );"><i class="fa-solid fa-trash fa-fw"></i></a>
						</nav>
					</td>
				</tr>
				<tr>
					<td>
						<a class="indicator indicator--po" href="po-single.php"><span>67</span></a>
					</td>
					<td>
						Really long company name
					</td>
					<td>
						15/03/2023
					</td>
					<td>
						<div class="status status--awaiting-approval">
							Awaiting Approval
						</div>	
					</td>
					<td>
						$425.98
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Purchase Order" href="/Script/MCH/SupplierOrderS.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-eye"></i></a>
							
							<a class="actions-link" title="Click to Edit this Purchase Order" href="/Script/MCH/SupplierOrderU.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-pen-to-square"></i></a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Purchase Order" href="/Script/MCH/SupplierOrderD.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D" onclick="return confirm( 'Really Delete this Purchase Order?' );"><i class="fa-solid fa-trash"></i></a>
						</nav>
					</td>
				</tr>
				<tr>
					<td>
						<a class="indicator indicator--po" href="po-single.php"><span>67</span></a>
					</td>
					<td>
						Colgate
					</td>
					<td>
						15/03/2023
					</td>
					<td>
						<div class="status status--awaiting-approval">
							Awaiting Approval
						</div>	
					</td>
					<td>
						$425.98
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View this Purchase Order" href="/Script/MCH/SupplierOrderS.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-eye"></i></a>
							
							<a class="actions-link" title="Click to Edit this Purchase Order" href="/Script/MCH/SupplierOrderU.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D"><i class="fa-solid fa-pen-to-square"></i></a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Purchase Order" href="/Script/MCH/SupplierOrderD.asp?ObjectID=8FB7E22E-D6F3-4DCB-83D3-B741AC1069FA&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D" onclick="return confirm( 'Really Delete this Purchase Order?' );"><i class="fa-solid fa-trash"></i></a>
						</nav>
					</td>
				</tr>
			</tbody>
		</table>		
	</div>
</div>

<?php include 'footer.php'; ?>