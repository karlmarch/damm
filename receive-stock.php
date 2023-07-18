<?php include('header.php'); ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>Receive Stock</h1>
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
		</div>
	</form>
</div>

<div class="container container--narrow">
	<header class="table-title">
		<div class="table-title__left">
			<div class="table-title__title">
				<h3>Orders with outstanding stock</h3>
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
						<div class="status status--pending-export"> <!-- Status needs correct modifier -->
							Pending Export
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