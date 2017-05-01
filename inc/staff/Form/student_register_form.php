<form name="student_add" action="" method="post" class="col s12">
	<div class="row">
        <div class="input-field col s6" disabled="true">

          <input  id="reg_no" name="regno" type="text" class="validate" pattern="[0-9]{8}" required>
          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
        </div>

        <div class="input-field col s6">

          <input  id="id_no" type="text" class="validate" pattern="^[Ss][0-9]{5}" required>
          <label for="id_no" data-error="wrong" data-success="right">ID Card Number</label>
        </div>
    </div>
	 <div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">account_circle</i>
          <input  id="first_name" type="text" class="validate" pattern="[a-zA-Z\s]+" required>
          <label for="first_name" data-error="wrong" data-success="right">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" pattern="[a-zA-Z\s]+" required>
          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
        </div>
		</div>

		<div class="row">
        <div class="input-field col s6">
        	<i class="material-icons prefix">account_circle</i>
          <input  id="father_first_name" type="text" class="validate" pattern="[a-zA-Z\s]+" required>
          <label for="father_first_name" data-error="wrong" data-success="right">Father's First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="father_last_name" type="text" class="validate" pattern="[a-zA-Z\s]+" required>
          <label for="father_last_name" data-error="wrong" data-success="right">Father's Last Name</label>
        </div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">today</i>
				<input id="dob" type="date" class="datepicker" required>
				<label for="dob">Date of Birth</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<p class="col s6">
					<label for="gender">Gender</label><br>
		      	<input name="gender" type="radio" id="male" checked/>
		      	<label for="male">Male</label>
		      	<input name="gender" type="radio" id="female" />
		      	<label for="female">Female</label>
                    <input name="gender" type="radio" id="other" />
					      	<label for="other">Other</label>
		    </p>
			</div>

			<div class="input-field col s6">
          <!--<input  id="blood_group" type="text" class="validate" pattern="\b[A|B|O|AB]\b[\+\-]{1}" required>
          <label for="blood_group" data-error="wrong" data-success="right">Bloog Group</label>-->
                <select>
			      		<option value="" disabled selected>Blood Group</option>
			      		<option value="1">A+</option>
			      		<option value="2">A-</option>
			      		<option value="3">B+</option>
			      		<option value="4">B-</option>
			      		<option value="5">AB+</option>
			      		<option value="6">AB-</option>
			      		<option value="7">O+</option>
			      		<option value="8">O-</option>
			  		</select>
			  		<label>Blood Group</label>
        </div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">phone</i>
				<input id="phone" type="text" class="validate" pattern="[0-9]{10}" required>
				<label for="phone" data-error="wrong" data-success="right">Phone</label>
			</div>

			<div class="input-field col s6">
				<i class="material-icons prefix">email</i>
				<input id="email" type="email" class="validate" required>
				<label for="email" data-error="wrong" data-success="right">Email</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">location_on</i>
				<textarea id="primary_add" class="materialize-textarea" data-length="100" required></textarea>
				<label for="primary_add" data-error="wrong" data-success="right">Primary Address</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<p>
		      <input type="checkbox" id="add" />
		      <label for="add">Local address is same as Primary address</label>
		    </p>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">location_on</i>
				<textarea id="local_add" class="materialize-textarea" data-length="100" required></textarea>
				<label for="local_add" data-error="wrong" data-success="right">Local Address</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				 <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">General</option>
			      <option value="2">OBC</option>
			      <option value="3">SC</option>
			      <option value="4">ST</option>
			    </select>
			    <label>Category</label>
			</div>
		</div>

		<div class="row">
        <div class="input-field col s6">
				 <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="2">M.Sc</option>
			      <option value="3">MCA</option>
			      <option value="4">M.Tech(NIE)</option>
			      <option value="4">M.Tech(CSE)</option>
			    </select>
			    <label>Course</label>
			</div>

        <div class="input-field col s6">
        	<i class="material-icons prefix">today</i>
          	<input id="doa" type="date" class="datepicker" required>
				<label for="doa">Date of Admission </label>
        </div>
    </div>

    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
		<i class="material-icons right">send</i>
	</button>
</form>
