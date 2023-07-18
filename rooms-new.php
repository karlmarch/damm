<?php include('header.php'); ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Clinic Rooms</h1>
		</header>
	</div>
</div>

<script type="text/javascript" src="/Static/STK/JS/WarehouseIU.js"></script>

<div class="container container--small">
	<div class="shadow-panel shadow-panel--padded">
		<header class="shadow-panel__main-title" >
			<h3>Add Clinic Room</h3>
		</header>
		
		<form name="updateform" action="/Script/STK/WarehouseI.asp" method="post" onsubmit="return validateform( this );">
			<input type="hidden" name="HTML_returnFunc" value="" />
			<input type="hidden" name="ObjectID" value="" />
			<input type="hidden" name="ReturnURL" value="/Script/STK/WarehouseL.asp?ReturnURL=&amp;PageAction=search&amp;HTML_returnFunc=&amp;UseLightboxPopups=1&amp;Keyword=&amp;btnSubmit=Search" />
			<input type="hidden" name="PageAction" value="update" />
			<input type="hidden" name="UseLightboxPopups" id="UseLightboxPopups" value="1" />
			
			<div class="form-grid__row">
				<div class="form__field">
					<label>Clinic Room Name</label>
					<input type="text" name="DisplayName" size="60" value="" maxlength="128" />
				</div>
			</div>
			
			<div class="form-grid__row">
				<div class="form__field">
					<label>Parent Clinic Room</label>
					<select>
						<option>Clinic Room 1</option>
						<option>Clinic Room 2</option>
					</select>
				</div>
			</div>
			
			<div class="form-grid__row">
				<div class="form__field">
					<label>ABN</label>
					<input type="text" name="TaxNumber" value="" size="30" maxlength="30" />
				</div>
				<div class="form__field">
					<label>ACN</label>
					<input type="text" name="CompanyNumber" value="" size="30" maxlength="30" />
				</div>
			</div>
			
			<div class="form-grid__row">
				<div class="form__field">
					<label>DUNS</label>
					<input type="text" name="DUNS" value="" size="30" maxlength="9" />
				</div>
			</div>
			
			<div class="form-grid__row">
				<div class="form__field">
					<label>Telephone Number</label>
					<input type="text" name="Workphone" value="" size="30" maxlength="30" />
				</div>
				<div class="form__field">
					<label>Fax Number</label>
					<input type="text" name="Facsimile" value="" size="30" maxlength="30" />
				</div>
			</div>
			
			<div class="form-grid__row">
				<div class="form__field form__field form__field__cta utility-margin-top-5">	
					<input type="submit" name="btnSubmit" value="Create Clinic Room" title="Click here to create the Clinic Room" class="Buttons" />
				</div>
			</div>
			
		</form>	
	</div>	
</div>

<?php include('footer.php'); ?>