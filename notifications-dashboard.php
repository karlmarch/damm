<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Notifications</h1>
		</header>
	</div>
</div>

<div id="search-form" class="content-panel">
	<form name="SearchForm" method="get" action="">
		<div id="search_table" class="form-grid form">	
			<div class="form-grid__row">
				<div class="form__field">
					<label>Search</label>
					<input title="Enter a Search Keyword Here and Click Search" type="text" name="Keyword" value="" size="30" maxlength="50" placeholder="Keywords" />	
				</div>
				<div class="form__field">
					<label>Type</label>
					<select name="">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3/option>
					</select>
				</div>
				<div class="form__field">
					<label>Date Range</label>
					<div class="form-grid__row form__field__dates">
						<div class="date-field">
							<div id="StartDatediv"></div>
								<input title="Enter an End Date Here" type="text" name="EndDate" value="" placeholder="From DD/MM/YYYY" />
								
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
				<div class="form__field form__cta form-grid__row__cta">
					<input type="submit" name="btnSubmit" value="Search" title="Search" class="Buttons" />	
				</div>
			</div>	
		</div>
	</form>
</div>

<header class="table-title">
	<div class="table-title__left">
		
	</div>
	<div class="table-title__right">
		<h5>Showing 1 - 10 of 1,987</h5>
	</div>
</header>

<div class="shadow-panel">
	<div class="dashboard__panel__content">
		<table class="stripe-table stripe-table--notifications">
			<thead>
				<th>
					
				</th>
				<th>
					Received
				</th>
				<th>
					Type
				</th>
				<th>
				</th>
			</thead>
			<tbody>
				<tr class="alert">
					<td width="20%">
						<div class="icon-link icon-link--notification">
							<div class="icon-link__icon">	
								<i class="fa-solid fa-triangle-exclamation"></i>
							</div>
						</div>
					</td>
					<td>
						15/03/2023
					</td>
					<td>Low Stock Warning</td>
					<td>Colgate Toothbrush - less than 10 left</td>
				</tr>
				
				<tr>
					<td width="20%">
						<div class="icon-link">
							<div class="icon-link__icon">	
								<i class="fa-solid fa-envelope"></i>
							</div>
						</div>
					</td>
					<td>
						15/03/2023
					</td>
					<td>Notification</td>
					<td>This is a standard message</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>

<?php include 'footer.php'; ?>