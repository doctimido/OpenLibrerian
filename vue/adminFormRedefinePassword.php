		<h1>Admin space</h1>

		<p>You have confirm your identity clicking on the link. Now, redefine your new password.</p>
		
		<form role="form" class="form-signin" action="<?php echo PREFIX_LINK_LANG; ?>admin/" method="post">
			<input type="password" autofocus required placeholder="Your new password" title="Your new password" class="form-control" name="password">
			<input type="password" required placeholder="Confirmation of your new password" title="Confirmation of your new password" class="form-control" name="confirmation">
			<input type="hidden" aria-hidden="true" name="token" value="{{token}}">
			<button type="submit" class="btn btn-lg btn-primary btn-block">Reset password</button>
		</form>
		
		<ul class="list-group">
			<li class="list-group-item list-group-item-success">1. You have ask for the reset.</li>
			<li class="list-group-item list-group-item-success">2. We have send you an mail. You have click on the link in this mail.</li>
			<li class="list-group-item list-group-item-info">3. Define your new password.</li>
		</ul>