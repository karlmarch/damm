<?php include 'header.php'; ?>

<div class="dashboard">
	<div class="dashboard__row">
		<div class="dashboard__intro shadow-panel">
			<a class="icon-link settings-link ControlPanelDisplayButton" href="#">
				<div class="icon-link__icon">
					<i class="fa-solid fa-gear"></i>
				</div>
				
				<div class="settings-link__dropdown controlPanelContent">
					<ul>
						<li><input type="checkbox" /> Recent Purchase Orders</li>
						<li><input type="checkbox" /> Recent Orders</li>
						<li><input type="checkbox" /> My Tasks</li>
						<li><input type="checkbox" /> My Reports</li>
						<li><input class="Buttons" type="button" id="PanelSaveButton" value="Save Panels" />
							<input class="Buttons" type="button" id="PanelResetButton" value="Reset Panels" style="margin:0px;" /></li>
					</ul>
				</div>
			</a>
			<header>
				<h1>Good Morning Karl</h1>
			</header>
			<nav class="dashboard__intro__links">
				<ul>
					<li>
						<a href="#" class="icon-link icon-link--small">
							<div class="icon-link__icon">
								<i class="fa-solid fa-file-plus"></i>
							</div>
							<div class="icon-link__label">
								New Purchase Order	
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="icon-link icon-link--small">
							<div class="icon-link__icon">
								<i class="fa-solid fa-file-plus"></i>
							</div>
							<div class="icon-link__label">
								Create New Order	
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="icon-link icon-link--small">
							<div class="icon-link__icon">
								<i class="fa-solid fa-barcode"></i>
							</div>
							<div class="icon-link__label">
								Receive Stock	
							</div>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<!------------ Notification Panel Starts -------------->
		
		<div class="dashboard__panel shadow-panel">
			<header>
				Notifications
			</header>
			<div class="dashboard__panel__content">
				<table class="stripe-table stripe-table--notifications">
					<tr class="alert">
						<td width="20%">
							<div class="icon-link icon-link--notification">
								<div class="icon-link__icon">	
									<i class="fa-solid fa-triangle-exclamation"></i>
								</div>
							</div>
						</td>
						<td>Low stock warning - Colgate Toothbrush</td>
					</tr>
					<tr>
						<td width="20%">
							<div class="icon-link">
								<div class="icon-link__icon">	
									<i class="fa-solid fa-envelope"></i>
								</div>
							</div>
						</td>
						<td>This is a standard notification</td>
					</tr>
				</table>
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="#">Notification Centre</a>
			</div>
		</div>
		
		<!------------ Notification Panel Ends -------------->
		
	</div>
	<div class="dashboard__row">
		
		<!------------ Purchase Order Panel Start -------------->
		
		<div class="dashboard__panel shadow-panel">
			<header>
				Recent Purchase Orders
			</header>
			<div class="dashboard__panel__content">
				<table class="stripe-table">
					<tr>
						<td>
							<a class="indicator indicator--po" href="#">49</a>
						</td>
						<td>Colgate</td>
						<td>15/03/2023</td>
						<td>$425.98</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--po" href="#">49</a>
						</td>
						<td>Longer Company Name</td>
						<td>15/03/2023</td>
						<td>$45.99</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--po" href="#">49</a>
						</td>
						<td>This Company</td>
						<td>15/03/2023</td>
						<td>$35,000</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--po" href="#">49</a>
						</td>
						<td>Colgate</td>
						<td>15/03/2023</td>
						<td>$35,000</td>
					</tr>
				</table>
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="po-dashboard.php">Purchase Order Dashboard</a>
			</div>
		</div>
		
		<!------------ Purchase Order Panel Ends -------------->
			
		<!------------ Recent Orders Panel Starts -------------->
			
		<div class="dashboard__panel shadow-panel">
			<header>
				Recent Orders
			</header>
			<div class="dashboard__panel__content">
				<table class="stripe-table">
					<tr>
						<td>
							<a class="indicator indicator--order" href="#">49</a>
						</td>
						<td>Colgate</td>
						<td>15/03/2023</td>
						<td>$425.98</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--order" href="#">49</a>
						</td>
						<td>Colgate</td>
						<td>15/03/2023</td>
						<td>$45.99</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--order" href="#">49</a>
						</td>
						<td>This Company</td>
						<td>15/03/2023</td>
						<td>$35,000</td>
					</tr>
					<tr>
						<td>
							<a class="indicator indicator--order" href="#">49</a>
						</td>
						<td>Colgate</td>
						<td>15/03/2023</td>
						<td>$35,000</td>
					</tr>
				</table>
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="orders-dashboard.php">Orders Dashboard</a>
			</div>
		</div>
		
		<!------------ Recent Orders Panel Ends -------------->
			
		<!------------ Marketplace Panel Starts -------------->
		
		<div class="dashboard__panel shadow-panel">
			<header>
				Marketplace
			</header>
			<div class="dashboard__panel__content">
				
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="#">Start Marketplace Order</a>
			</div>
		</div>
		
		<!------------ Marketplace Panel Ends -------------->
	</div>
	
	<div class="dashboard__row">
		
		<!------------ My Tasks Panel Starts -------------->
		
		<div class="dashboard__panel shadow-panel">
			<header>
				My Tasks
			</header>
			<div class="dashboard__panel__content">
				<table class="stripe-table">
					<tr>
						<td>Task info here</td>
					</tr>
					<tr>
						<td>Task info here</td>
					</tr>
					<tr>
						<td>Task info here</td>
					</tr>
					<tr>
						<td>Task info here</td>
					</tr>
				</table>			
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="#">Tasks Dashboard</a>
			</div>
		</div>
		
		<!------------ My Tasks Panel Ends -------------->
			
		<!------------ My Reports Panel Starts -------------->
		
		<div class="dashboard__panel shadow-panel">
			<header>
				My Reports
			</header>
			<div class="dashboard__panel__content">
				<table class="stripe-table">
					<tr>
						<td>
							<div class="actions-link">
								<i class="fa-solid fa-file-lines"></i>
							</div>	
						</td>
						<td>Job Invoicing Report</td>
					</tr>
					<tr>
						<td>
							<div class="actions-link">
								<i class="fa-solid fa-file-lines"></i>
							</div>	
						</td>
						<td>Job Tech Hours Report</td>
					</tr>
					<tr>
						<td>
							<div class="actions-link">
								<i class="fa-solid fa-file-lines"></i>
							</div>	
						</td>
						<td>SLA Report</td>
					</tr>
					<tr>
						<td>
							<div class="actions-link">
								<i class="fa-solid fa-file-lines"></i>
							</div>	
						</td>
						<td>Open Jobs By Company</td>
					</tr>
				</table>							
			</div>
			<div class="dashboard__panel__cta">
				<a class="button" href="#">Reports Dashboard</a>
			</div>
		</div>
		
		<!------------ My Reports Panel Ends -------------->
			
	</div>
</div>

<?php include 'footer.php'; ?>