<?php include 'header.php'; ?>

<div class="page-title-block">
	<div class="page-title">
		<header class="page-title__title">
			<h1>
				<span>Reports</span>
				This is the report name
			</h1>
		</header>
	</div>
</div>

<div class="content-panel">
	<form name="" method="get" action="">
		<div class="form-grid form">	
			<div class="form-grid__row">
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
					<input type="submit" name="btnSubmit" value="Run" title="Run" class="Buttons" />	
				</div>
			</div>	
		</div>
	</form>
</div>

<?php include 'footer.php'; ?>