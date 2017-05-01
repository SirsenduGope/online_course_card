<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Choose Departmental Softcore</a></li>
	    <li class="tab col s6"><a href="#test2">Choose other Department Softcore</a></li>
	  </ul>
	</div>

	<div id="test1" class="col s12">
		<div class="input-field col s4">
			<select>
	      		<option value="" disabled selected>Chose your option</option>
	      		<option value="1">MCA</option>
	      		<option value="2">M.Sc.</option>
	      		<option value="3">M.Tech.</option>
	  		</select>
	  		<label>Softcore</label>
	  	</div>
	</div>

	<div id="test2" class="col s12">
		<div class="input-field col s4">
			<form>
				<div class="row">
					<div class="input-field col s6">
			          <input  id="subject_id" type="text" class="validate" pattern="\b(COMS)\b\-\s[0-9]{5}" required>
			          <label for="subject_id" data-error="wrong" data-success="right">Subject ID</label>
			        </div>

			        <div class="input-field col s6">
			          <input  id="subject_name" type="text" class="validate" pattern="[a-zA-Z\s]+" required>
			          <label for="subject_name" data-error="wrong" data-success="right">Subject Name</label>
			        </div>
				</div>

				<div class="row">
					<div class="input-field col s6">
			          <input  id="subject_credit" type="text" class="validate" pattern="[0-9]{2,3}" required>
			          <label for="subject_credit" data-error="wrong" data-success="right">Subject Credit</label>
			        </div>

			        <div class="input-field col s6">
			          <select>
			      		<option value="" disabled selected>Chose your option</option>
			      		<option value="1">MCA</option>
			      		<option value="2">M.Sc.</option>
			      		<option value="3">M.Tech.</option>
			  		</select>
			  		<label>Softcore</label>	
			        </div>
				</div>
				
				<button class="btn waves-effect waves-light"  type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
	  	</div>
	</div>
</div>