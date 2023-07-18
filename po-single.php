<?php include 'header.php'; ?>

<div class="page-title-block has-meta has-indicator">
	<div class="page-title">
		<header class="page-title__title">
			<div class="indicator indicator--po">
				67
				<a class="indicator__sub indicator--order" href="orders-single.php">50</a>
			</div>
			<h1>Purchase Order</h1> 
		</header>
		<div class="page-title__cta">
			<a class="icon-link" onclick="location.href='/Script/MCH/SupplierOrderU.asp?ObjectID=F0D0E695-921F-449D-921A-AE300CA624D3&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3DF0D0E695-921F-449D-921A-AE300CA624D3%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D'; this.disabled = true;" class="Buttons" title="Click to Edit this Purchase Order">
				<div class="icon-link__icon">
					<i class="fa-solid fa-file-pen"></i>
				</div>
				<div class="icon-link__label">
					Edit Purchase Order
				</div>
			</a>
		</div>
	</div>
	<div class="page-title-block__meta">
		<ul>
			<li><strong>Date Created: </strong>12/03/2023 10:15</li>
			<li><strong>Created By: </strong><a title="Click to view the details of this Person" href="/Script/CRM/PersonS.asp?ObjectID=AEE58C8D-67E5-4F79-B6F8-F46FF52FC26E&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3DF0D0E695-921F-449D-921A-AE300CA624D3%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D">Mr Sami Chamoun</a></li>
			<li>
				<div class="status status--awaiting-approval">
					Awaiting Approval
				</div>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="/Static/MCH/JS/SupplierOrderS.js"></script>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="content-panel TableCRM utility-margin-bottom-2">
			<div class="form-grid form">
				<div class="form-grid__row">
					<div class="form__field Required">
						<label>Supplier</label>
						<input type="text" value="Colgate" readonly />	
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Supplier Sell Currency</label>
						<input type="text" value="Australian Dollars (AUD$)" readonly />
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="content-panel content-panel--corner-link">
					<nav class="corner-link">
						<a class="icon-link" title="Click to view this address in Google Maps" href="http://maps.google.com/?q=12345%20Dental%20Street%2C%20Brisbane%2C%20QLD%2C%204031%2C%20AU" target="_blank">
							<div class="icon-link__icon">
								<i class="fa-solid fa-map-location-dot"></i> 
							</div>
						</a>
					</nav>
					<header class="small-title">
						Billing Address
					</header>
					<address>
						DAMM<br />
						1/888 Brunswick Street<br />
						Fortitude Valley<br />
						QLD, 4000, Australia	
					</address>			
				</div>	
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="content-panel content-panel--corner-link">
					<nav class="corner-link">
						<a class="icon-link" title="Click to view this address in Google Maps" href="http://maps.google.com/?q=1/888%20Brunswick%20Street%2C%20Fortitude%20Valley%2C%20QLD%2C%204000%2C%20AU" target="_blank">
							<div class="icon-link__icon">
								<i class="fa-solid fa-map-location-dot"></i> 
							</div>
						</a>
					</nav>
					<header class="small-title">
						Shipping Address
					</header>
					<address>
						DAMM<br />
						1/888 Brunswick Street<br />
						Fortitude Valley<br />
						QLD, 4000, Australia	
					</address>			
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
				
				<script type="text/javascript" src="/Static/WF/JS/JournalX_Object.js"></script>
				
				<script type="text/javascript">
				
								var tbl = [ 
						['73694211-11E0-402D-BD7A-6AA2FA194323', '0', '0', ''],
					
						['1E62C742-FDEA-4664-98E8-CDC83973776E', '0', '0', '0'],
					 ];
							
					function tableLookup( obj )
					{
						//reseting the target. If a popup had run previously without the page reloading everything would now be a popup.
						//document.updateform.target = "";
	
						obj.form.target = "";
						var uTransitionID = obj.value;
						var i = 0
						if ( !obj.value )
						{
							ValidateControl( obj, true, 'text', 'Transition' );
							return false;
						}
						for (var i = 0; i <= tbl.length; i++)
						{
							if ( tbl[i][0] == uTransitionID )
							{
								if ( tbl[i][1] == 1 )  // if requires narrative
								{
									if ( !ValidateControl( obj.form.Narrative, true, 'text', 'Narrative' ) )
									//if ( !ValidateControl( document.getElementById( 'idNarrative' ), true, 'text', 'Narrative' ) )
									{
										return false;
									}
								}
	
								if ( tbl[i][2] == 1 )	// if requires confirmation
								{
									if ( !confirm( 'Really perform this Action?' ) )
									{
										return false;
									}
								}
	
								if ( tbl[i][3] == 1 ) //if data capture page requires popup in new window
								{
									var j = window.open( obj.form.action, "dataCapturePopup", 'width=750,height=550,resizable=yes,scrollbars=yes,location=yes,menubar=yes,status=yes,toolbar=yes' )
									//document.updateform.target = "dataCapturePopup";
									  obj.form.target = "dataCapturePopup";
								}
	
								break;
							}
						}
					}
				</script>
				
				<form action="/Script/WF/TransitionX.asp" name="updateform_SUPPLIERORDER_PROCESS" method="get" onsubmit="return validateWorkflowJournalForm(this);">
					
					<input type="hidden" name="ObjectID" value="F0C5C5E4-8184-4F11-BBA8-DA3AF7959239" />
					<input type="hidden" name="SubjectObjectID" value="F0D0E695-921F-449D-921A-AE300CA624D3" />
					
					<div class="utility-margin-bottom-5">
						<div class="form__field form__field--radio icon-radio icon-radio--close">
							<label for="idTransitionIDSUPPLIERORDER_PROCESS1">
							<input type="radio" class="radiobutton" name="TransitionID_Radio" id="idTransitionIDSUPPLIERORDER_PROCESS1" onclick="onclick_hiddenTransitionID('1E62C742-FDEA-4664-98E8-CDC83973776E', 'SUPPLIERORDER_PROCESS')" style="vertical-align:middle;" /><span>Cancel Purchase Order</span></label>
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--check">
							<label for="idTransitionIDSUPPLIERORDER_PROCESS2">
							<input type="radio" class="radiobutton" name="TransitionID_Radio" id="idTransitionIDSUPPLIERORDER_PROCESS2" onclick="onclick_hiddenTransitionID('F5C49B8D-D203-4462-8C15-5AB948380875', 'SUPPLIERORDER_PROCESS')" style="vertical-align:middle;" /><span>Complete Purchase Order</span></label>	
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--open-package">
							<label for="idTransitionIDSUPPLIERORDER_PROCESS3">
							<input type="radio" class="radiobutton" name="TransitionID_Radio" id="idTransitionIDSUPPLIERORDER_PROCESS3" onclick="onclick_hiddenTransitionID('09814CBD-8E94-4D30-88C4-5479FE1CD54D', 'SUPPLIERORDER_PROCESS')" style="vertical-align:middle;" /><span>Order Purchase Order</span></label>	
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--pdf">
							<label for="idTransitionIDSUPPLIERORDER_PROCESS4">
							<input type="radio" class="radiobutton" name="TransitionID_Radio" id="idTransitionIDSUPPLIERORDER_PROCESS4" onclick="onclick_hiddenTransitionID('F55A1F9A-8579-4806-995E-AB585209D67E', 'SUPPLIERORDER_PROCESS')" style="vertical-align:middle;" /><span>Print to PDF</span></label>	
						</div>
						<div class="form__field form__field--radio icon-radio icon-radio--money">
							<label for="idTransitionIDSUPPLIERORDER_PROCESS5">
							<input type="radio" class="radiobutton" name="TransitionID_Radio" id="idTransitionIDSUPPLIERORDER_PROCESS5" onclick="onclick_hiddenTransitionID('73694211-11E0-402D-BD7A-6AA2FA194323', 'SUPPLIERORDER_PROCESS')" style="vertical-align:middle;" /><span>Set Miscellaneous Production Costs</span></label>	
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
					
					<input type="hidden" name="TransitionID" id="idTransitionID_SUPPLIERORDER_PROCESS" />
					<input type="hidden" name="ReturnURL" value="/Script/MCH/SupplierOrderS.asp?ObjectID=F0D0E695-921F-449D-921A-AE300CA624D3&amp;ReturnURL=/Script/MCH/SupplierOrderF.asp%3FReturnURL%3D%26PageAction%3Dsearch%26SortDir%3D%26SortKey%3D%26UseLightboxPopups%3D1%26Keyword%3D%26VendorID%3D%26SupplierID%3D%26WorkflowStateID%3D%26StateTypeID%3D%26StartDate%3D%26EndDate%3D%26LinkPurchaseOrderRef%3D" />
				</form>
			</nav>
		</div>
	</div>
</div>

<div class="container container--narrow utility-margin-top-8">
	<header class="table-title">
		<div class="table-title__title">
			<h3>Line Items</h3>
		</div>
		<div class="table-title__cta">
			<a class="icon-link" title="Add Line Item to Purchase Order" href="/Script/MCH/SupplierOrderItemI.asp?ObjectID=68F801E7-F65F-4D80-9AE4-0AFF1195AED6&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3D68F801E7-F65F-4D80-9AE4-0AFF1195AED6%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D&amp;Msg=Please%20Complete%20the%20Details%20of%20the%20Purchase%20Order%20Line%20Item">
				<div class="icon-link__icon">
					<i class="fa-solid fa-plus"></i>
				</div>
				<div class="icon-link__label">
					Add Line Item
				</div>
			</a>	
		</div>
	</header>
	<div class="shadow-panel">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th align="center">
						Product Name
					</th>
					<th>
						Unit Price Ex.
					</th>
					<th>
						Misc. Cost
					</th>
					<th>
						Qty
					</th>
					<th>
						Received
					</th>
					<th>
						Price Ex.
					</th>
					<th>
						Rebate Ex.
					</th>
					<th>
						Sell Price Inc.
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						Colgate Toothbrush
					</td>
					<td>
						$6.95	
					</td>
					<td>
						$0.00	
					</td>
					<td>
						110
					</td>
					<td>
						10
					</td>
					<td>
						$764.50					
					</td>
					<td>
						$0.00					
					</td>
					<td>
						$764.50
					</td>					
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to Edit this Line Item" href="/Script/MCH/SupplierOrderItemU.asp?ObjectID=68F801E7-F65F-4D80-9AE4-0AFF1195AED6&amp;SupplierOrderItemID=1B3DC20C-EB23-4210-993D-3A8AD086C486&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3D68F801E7-F65F-4D80-9AE4-0AFF1195AED6%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
							
							<a class="actions-link" title="Click to Receive Stock for this Line Item" href="#">
								<i class="fa-solid fa-barcode"></i>	
							</a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Line Item" href="/Script/MCH/SupplierOrderItemD.asp?ObjectID=68F801E7-F65F-4D80-9AE4-0AFF1195AED6&amp;SupplierOrderItemID=1B3DC20C-EB23-4210-993D-3A8AD086C486&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3D68F801E7-F65F-4D80-9AE4-0AFF1195AED6%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D" />
								<i class="fa-solid fa-trash"></i>
							</a>	
						</nav>
					</td>
				</tr>
				<tr>
					<td>
						Experttorque Drill
					</td>
					<td>
						$769.95	
					</td>
					<td>
						$0.00	
					</td>
					<td>
						1
					</td>
					<td>
						0
					</td>
					<td>
						$769.95					
					</td>
					<td>
						$0.00					
					</td>
					<td>
						$769.95
					</td>					
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to Edit this Line Item" href="/Script/MCH/SupplierOrderItemU.asp?ObjectID=68F801E7-F65F-4D80-9AE4-0AFF1195AED6&amp;SupplierOrderItemID=1B3DC20C-EB23-4210-993D-3A8AD086C486&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3D68F801E7-F65F-4D80-9AE4-0AFF1195AED6%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
							
							<a class="actions-link" title="Click to Receive Stock for this Line Item" href="#">
								<i class="fa-solid fa-barcode"></i>	
							</a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Line Item" href="/Script/MCH/SupplierOrderItemD.asp?ObjectID=68F801E7-F65F-4D80-9AE4-0AFF1195AED6&amp;SupplierOrderItemID=1B3DC20C-EB23-4210-993D-3A8AD086C486&amp;ReturnURL=/Script/MCH/SupplierOrderS.asp%3FObjectID%3D68F801E7-F65F-4D80-9AE4-0AFF1195AED6%26ReturnURL%3D/Script/MCH/SupplierOrderF.asp%253FReturnURL%253D%2526PageAction%253Dsearch%2526SortDir%253D%2526SortKey%253D%2526UseLightboxPopups%253D1%2526Keyword%253D%2526VendorID%253D%2526SupplierID%253D%2526WorkflowStateID%253D%2526StateTypeID%253D%2526StartDate%253D%2526EndDate%253D%2526LinkPurchaseOrderRef%253D" />
								<i class="fa-solid fa-trash"></i>
							</a>	
						</nav>
					</td>
				</tr>
			</tbody>
		</table>		
	</div>
	<footer class="table-footer utility-margin-top-5">
		<div class="table-footer__label">
			<h5>Total</h5>
		</div>
		<div class="table-footer__amount">
			<h5>$1,759.45</h5>
		</div>
	</footer>
</div>

<div class="container container--narrow utility-margin-top-8">
	<header class="table-title">
		<div class="table-title__title">
			<h3>Received Stock</h3>
		</div>
	</header>
	<div class="shadow-panel">
		<table class="TableCRM stripe-table">
			<thead>
				<tr>
					<th align="center">
						Product Name
					</th>
					<th>
						Date Received
					</th>
					<th>
						Received Qty
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						Colgate Toothbrush	
					</td>
					<td>
						23/04/2024	
					</td>
					<td>
						10	
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to View Received Stock Line Item" href="#">
								<i class="fa-solid fa-eye"></i>	
							</a>	
						</nav>
					</td>
				</tr>
			</tbody>	
		</table>
	</div>
</div>

<div class="container container--narrow utility-margin-top-8">
	<header class="table-title">
		<div class="table-title__title">
			<h3>Comments</h3>
		</div>
	</header>
	<div class="shadow-panel shadow-panel--dark">
		<table class="TableCRM stripe-table stripe-table--dark">
			<thead>
				<tr>
					<th align="center">
						Date
					</th>
					<th>
						Type
					</th>
					<th>
						Narrative
					</th>
					<th>
						Operator
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						04/04/2024	
					</td>
					<td>
						-	
					</td>
					<td>
						-	
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
						-	
					</td>
					<td>
						-	
					</td>
					<td>
						-	
					</td>
				</tr>
			</tbody>	
		</table>
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
						-	
					</td>
					<td>
						-	
					</td>
				</tr>
				<tr>
					<td>
						04/04/2024  10:30	
					</td>
					<td>
						Admin Approve -> Pending Payment	
					</td>
					<td>
						-	
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