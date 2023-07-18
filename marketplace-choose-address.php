<?php include('header.php'); ?>

<div class="page-title-block has-meta has-indicator">
	<div class="page-title">
		<header class="page-title__title">
			<div class="indicator indicator--order">
				<span>51</span>
			</div>
			<h1>Order</h1>
		</header>
	</div>
	<div class="page-title-block__meta">
		<ul>
			<li><strong>Date Created: </strong>12/03/2023 10:15</li>
			<li><strong>Created By: </strong><a title="Click to view the details of this Person" href="#">Mr Sami Chamoun</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="shadow-panel shadow-panel--padded form-grid">
			<header class="shadow-panel__main-title" >
				<h3>Shipping Address</h3>
			</header>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Recipient</label>
					<input type="text" name="ShippingRecipientName" maxlength="50" size="40" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Line 1</label>
					<input type="text" name="ShippingAddress1" maxlength="50" size="40" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Line 2</label>
					<input type="text" name="ShippingAddress2" maxlength="50" size="40" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Line 3</label>
					<input type="text" name="ShippingAddress3" maxlength="50" size="40" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Suburb</label>
					<input type="text" name="ShippingSuburb" maxlength="30" size="20"/>
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
					<input type="text" maxlength="20" size="5" name="ShippingPostcode" value=""  />
				</div>
				<div class="form__field">
					<label>Country</label>
					<select name="ShippingCountryID">
						<option value="">(Select a Country)</option>
						<option value="AU" selected="selected">Australia</option>
						<option value="NZ">New Zealand</option>
					</select>
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field form__field form__field__cta utility-margin-top-5">	
					<input type="submit" name="btnSubmit" value="Complete Order" title="Click here to create this Order" class="Buttons" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 panel-column">
		<div class="content-panel">
			<header class="small-title">
				Billing Address
			</header>
			
			
		</div>
		<div class="content-panel">
			<header class="small-title">
				Common Shipping Addresses
			</header>
			
			
		</div>	
	</div>
</div>

<?php include('footer.php'); ?>