<form name="staff_settings" class="col s12">
	<div class="row">
		<div class="input-field col s6">
			<i class="material-icons prefix">phone</i>
			<input id="phone" type="text" class="validate" pattern="[0-9]+" data-length="10">
			<label for="phone" data-error="wrong" data-success="right">Phone</label>
		</div>

		<div class="input-field col s6">
			<i class="material-icons prefix">email</i>
			<input id="email" type="email" class="validate">
			<label for="email" data-error="wrong" data-success="right">Email</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12">
			<i class="material-icons prefix">location_on</i>
			<textarea id="local_add" class="materialize-textarea" data-length="100"></textarea>
			<label for="local_add" data-error="wrong" data-success="right">Local Address</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s6">
			<input id="password" type="password" class="validate" pattern="[a-zA-Z0-9\!\@\#\$\%\&\*\-\_\*]+">
			<label for="password" data-error="wrong" data-success="right">Password</label>
		</div>
	</div>

	<button class="btn waves-effect waves-light"  type="submit" name="action">Save
		<i class="material-icons right">send</i>
	</button>
</form>