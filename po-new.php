<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<div class="indicator indicator--po">
				<span>68</span>
			</div>
			<h1>New Purchase Order</h1>
		</header>
	</div>
</div>

<form name="UpdateForm" method="post" action="/Script/MCH/SupplierOrderI.asp" onsubmit="return form_onsubmit( this );">
	<input type="hidden" name="ReturnURL" value="/Script/MCH/SupplierOrderF.asp" />
	<input type="hidden" name="ObjectID" value="" />
	<input type="hidden" name="PageAction" value="update" />
	<input type="hidden" name="URL_SEARCHADDRESS" value="" disabled="disabled" />
	<div class="row">
		<div class="col-lg-8 col-md-8">
			<div class="content-panel utility-margin-bottom-5">
				<div class="form-grid form">
					<div class="form-grid__row">
						<div class="form__field Required">
							<label>Supplier</label>
							<select name="SupplierID">
								<option value="">(Please select a supplier)</option>
								<option value="464AF73B-A20C-462A-BB1F-782D16876662">Centaur</option>
								<option value="BE3B5745-9FC6-46B1-85AC-CEDA0FEF3041">eMark Systems</option>
								<option value="67B8D5E4-BD7A-43CF-869B-7C4E24827740">Internal Supplier</option>
							</select>	
						</div>
					</div>
					<div class="form-grid__row">
						<div class="form__field">
							<label>Purchase Order Reference</label>
							<input type="text" name="LinkPurchaseOrderRef" size="25" maxlength="36" />
						</div>
						<div class="form__field">
							<label>Supplier Invoice Reference</label>
							<input type="text" name="SupplierInvoiceRef" size="25" maxlength="30" />
						</div>
					</div>
				</div>
			</div>
			<div class="shadow-panel shadow-panel--padded form-grid">
				<header class="shadow-panel__main-title" >
					<h3>Shipping Address</h3>
				</header>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Recipient</label>
						<input type="text" name="ShippingRecipientName" maxlength="50" size="40" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Line 1</label>
						<input type="text" name="ShippingAddress1" maxlength="50" size="40" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Line 2</label>
						<input type="text" name="ShippingAddress2" maxlength="50" size="40" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Line 3</label>
						<input type="text" name="ShippingAddress3" maxlength="50" size="40" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Suburb</label>
						<input type="text" name="ShippingSuburb" maxlength="30" size="20" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
					<div class="form__field">
						<label>State</label>
						<select name="ShippingState" onclick="clearShippingAddressButtons(this.form);">
							<option value="">(None)</option>
							<option value="">Australia</option>
							<option value="ACT">&nbsp;&nbsp;&nbsp;Australian Capital Territory</option>
							<option value="NSW">&nbsp;&nbsp;&nbsp;New South Wales</option>
							<option value="NT">&nbsp;&nbsp;&nbsp;Northern Territory</option>
							<option value="QLD">&nbsp;&nbsp;&nbsp;Queensland</option>
							<option value="SA">&nbsp;&nbsp;&nbsp;South Australia</option>
							<option value="TAS">&nbsp;&nbsp;&nbsp;Tasmania</option>
							<option value="VIC">&nbsp;&nbsp;&nbsp;Victoria</option>
							<option value="WA">&nbsp;&nbsp;&nbsp;Western Australia</option>
						</select>
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field">
						<label>Postcode</label>
						<input type="text" maxlength="20" size="5" name="ShippingPostcode" value="" style="text-align:right;" onkeydown="clearShippingAddressButtons(this.form);" />
					</div>
					<div class="form__field">
						<label>Country</label>
						<select name="ShippingCountryID" onclick="clearShippingAddressButtons(this.form);">
							<option value="">(Select a Country)</option>
							<option value="AU" selected="selected">Australia</option>
							<option value="NZ">New Zealand</option>
						</select>
					</div>
				</div>
				<div class="form-grid__row">
					<div class="form__field form__field form__field__cta utility-margin-top-5">	
						<input type="submit" name="btnSubmit" value="Create Purchase Order" title="Click here to create the Purchase Order" class="Buttons" />
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 panel-column">
			<div class="content-panel">
				<header class="small-title">
					Billing Address
				</header>
				<div class="form__field form__field--radio">
					<input type="radio" name="BillingAddressID" id="idBillingAddressID_1" value="98C11D74-5877-4F55-8B46-9526F90299A2" checked="checked" />
					<label for="idBillingAddressID_1">
						<address>
							Damm<br />
							1/888 Brunswick Street<br />
							Fortitude Valley<br />
							QLD, 4000, AU
						</address>
					</label>
				</div>
			</div>
			<div class="content-panel">
				<header class="small-title">
					Common Shipping Addresses
				</header>
				
				<div class="form__field form__field--radio">	
					<input type="radio" name="ShippingAddressID" id="idShippingAddressID_1" value="B9CF51A5-18E3-44B8-BC8A-C7F88C622B91" onclick="chooseAddress(document.UpdateForm, 'Clinic 1 -Front Office','12345 Dental Street','','','Brisbane','4031','QLD','AU'); return true;" />
					
					<label for="idShippingAddressID_1" onclick="chooseAddress(document.UpdateForm, 'Clinic 1 -Front Office','12345 Dental Street','','','Brisbane','4031','QLD','AU'); return true;">
						<address>
							Clinic 1 -Front Office<br />
							12345 Dental Street<br />
							Brisbane<br />
							QLD,4031, AU
						</address>
					</label>
				</div>
				<div class="form__field form__field--radio">
					<input type="radio" name="ShippingAddressID" id="idShippingAddressID_2" value="59DFF83F-E001-443B-8BA4-DA5AEC6C1CA8" onclick="chooseAddress(document.UpdateForm, 'Clinic 1 -Room A','5 Sydney Place','','','Penrith','6000','NSW','AU'); return true;" />
					
					<label for="idShippingAddressID_2" onclick="chooseAddress(document.UpdateForm, 'Clinic 1 -Room A','5 Sydney Place','','','Penrith','6000','NSW','AU'); return true;">
						<address>
							Clinic 1 -Room A<br />
							5 Sydney Place<br />
							Penrith<br />
							NSW, 6000, AU
						</address>
					</label>
				</div>
				<div class="form__field form__field--radio">
					<input type="radio" name="ShippingAddressID" id="idShippingAddressID_3" value="98C11D74-5877-4F55-8B46-9526F90299A2" onclick="chooseAddress(document.UpdateForm, 'Damm','1/888 Brunswick Street','','','Fortitude Valley','4000','QLD','AU'); return true;" />
					
					<label for="idShippingAddressID_3" onclick="chooseAddress(document.UpdateForm, 'Damm','1/888 Brunswick Street','','','Fortitude Valley','4000','QLD','AU'); return true;">
						<address>
							Damm<br />
							1/888 Brunswick Street<br />
							Fortitude Valley<br />
							QLD, 4000, AU
						</address>
					</label>
				</div>
			</div>
		</div>
	</div>
</form>

<?php include 'footer.php'; ?>