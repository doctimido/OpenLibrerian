		<h1>Admin space</h1>
		
		<p>You have try to log in in this space. But you have failed. Now, what do you want to do ?</p>
		
		<div class="panel-group" id="solutions">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2 class="panel-title"><a data-toggle="collapse" data-parent="#solutions" href="#tryAgain">Try again</a></h2>
				</div>
				<div id="tryAgain" class="panel-collapse collapse">
					<div class="panel-body">
						<p>To try again to fill this form, reload this page doing <kbd>F5</kbd> or <a href="<?php echo PREFIX_LINK_LANG; ?>admin/">click here</a></p>
					</div>
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title"><a data-toggle="collapse" data-parent="#solutions" href="#reset">Reset password</a></h2>
				</div>
				<div id="reset" class="panel-collapse collapse">
					<div class="panel-body">
						<p class="alert alert-danger">You will reset your password. If you reset it, your actual password will expire.</p>
						
						<form role="form" action="<?php echo PREFIX_LINK_LANG; ?>admin/" method="post">
							<input type="hidden" aria-hidden="true" name="token" value="{{token}}">
							<input type="submit" role="button" class="btn btn-danger" name="resetPassword" value="Reset password">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		