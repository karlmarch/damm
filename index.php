<?php include 'header.php'; ?>

<header class="login-title">
	<h1>Login to your account</h1>
	<div class="login-title__link">
		<a onclick="location.href='/Script/MCH/ShopPersonI.asp'; this.disabled=true;">Need to register for an account?</a>
	</div>
</header>

<div class="container container--small">
<div class="login-form shadow-panel panel-padding">
	<script type="text/javascript" src="/Static/SEC/JS/LoginX.js"></script>
	<form id="loginform" method="post" action="/Script/SEC/LoginX.asp" onsubmit="return validateformNEW( this );">
		<div style="display:none;">
			<input type="hidden" name="ReturnURL" value="" />
			<input type="hidden" name="TargetURL" value="/Script/STK/ItemF.asp" />
			<input type="hidden" name="LayoutID" value="DF9B920F-9C4D-48F6-8845-111688A44953" />
			<input type="hidden" name="PageAction" value="LOGIN" />
		</div>
		
		<div class="form-grid form-grid--vertical form">
			<div class="form-grid__row">
				<div class="form__field">
					<label>Email Address</label>
					<input type="text" class="override-materialize-input" name="Username" value="" maxlength="255" size="40" tabindex="1" />
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<label>Password</label>
					<input type="password" class="override-materialize-input" name="Password" maxlength="255" size="40" tabindex="2" />
				</div>
			</div>
			<div class="form-grid__row password-remember">
				<div class="form__field">
					<input type="checkbox" name="SaveToToken" value="1" tabindex="3" id="idSaveToToken" class="radiobutton" />
					<label for="idSaveToToken">&nbsp;Remember me?</label>
				</div>
				<div class="form__field password-forget">
					<a href="/Script/SEC/LoginResetPasswordX_1.asp">Forgotten password?</a>
				</div>
			</div>
			<div class="form-grid__row">
				<div class="form__field">
					<input type="submit" name="btnSubmit" value="Login" class="Buttons btn-primary" tabindex="5" />
				</div>
			</div>
		</div>	
	</form>
</div>
</div>

<?php include 'footer.php'; ?>