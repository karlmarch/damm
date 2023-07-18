<?php include('header.php'); ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Clinic Rooms</h1>
		</header>
		<div class="page-title__cta">
			<a class="icon-link" href="rooms-new.php">
				<div class="icon-link__icon">
					<i class="fa-solid fa-building"></i>
				</div>
				<div class="icon-link__label">
					New Clinic Room
				</div>
			</a>
		</div>
	</div>
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="/Script/STK/WarehouseL.asp">
		<input type="hidden" name="ReturnURL" value="" />
		<input type="hidden" name="PageAction" value="search" />
		<input type="hidden" name="HTML_returnFunc" value="" />
		<input type="hidden" name="UseLightboxPopups" id="UseLightboxPopups" value="1" />
		
		<div id="search_table" class="form-grid form">
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field form__cta form-grid__row__cta">
					<input type="submit" name="btnSubmit" value="Search" title="Search" class="Buttons" />	
				</div>
			</div>	
		</div>	
	</form>	
</div>

<div class="container container--narrow">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				
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
						Name
					</th>
					<th>
						Parent
					</th>
					<th>
						Status
					</th>
					<th>
						Stock Count
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						Clinic Room 1
					</td>
					<td>
						
					</td>
					<td>
						<div class="status status--active">
							Active
						</div>
					</td>
					<td>
						34,056
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to Edit this Clinic Room" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
														
							<a class="actions-link actions-link--delete" title="Click to Delete this Clinic Room" href="#"><i class="fa-solid fa-trash"></i></a>
						</nav>
					</td>
				</tr>
				<tr>
					<td>
						Clinic Room 2
					</td>
					<td>
						
					</td>
					<td>
						<div class="status status--active">
							Active
						</div>	
					</td>
					<td>
						312
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">			
							<a class="actions-link" title="Click to Edit this Clinic Room" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
							
							<a class="actions-link actions-link--delete" title="Click to Delete this Clinic Room" href="#"><i class="fa-solid fa-trash"></i></a>
						</nav>
					</td>
				</tr>
				<tr>
					<td>
						Clinic Room 3
					</td>
					<td>
						
					</td>
					<td>
						<div class="status status--active">
							Active
						</div>	
					</td>
					<td>
						8,067
					</td>
					<td class="stripe-table__actions">
						<nav class="actions-links">
							<a class="actions-link" title="Click to Edit this Clinic Room" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
														
							<a class="actions-link actions-link--delete" title="Click to Delete this Clinic Room" href="#"><i class="fa-solid fa-trash"></i></a>
						</nav>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php include('footer.php'); ?>