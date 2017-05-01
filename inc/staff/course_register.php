<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Course</a></li>
	    <li class="tab col s6"><a href="#test2">Update Course Details</a></li>
	  </ul>
	</div>

	<!--Add New Course-->

	<div id="test1" class="col s12">
		<div class=" row">
			<form name="subject_add" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[0-9]{3}" required>
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <!--<input  id="course_name" type="text" class="validate" pattern="[a-zA-Z\.\s]+" required>
			          <label for="course_name" data-error="wrong" data-success="right">Course Name</label>-->
                        <select>
			      		<option value="" disabled selected>Choose Your Course</option>
			      		<option value="1">MCA</option>
			      		<option value="2">M.Sc</option>
			      		<option value="3">M.Tech(NIE)</option>
			      		<option value="4">M.Tech(CSE)</option>
			  		</select>
			  		<label>Course</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <!--<input  id="course_duration" type="text" class="validate" pattern="[0-9]" Data-length="1" required>
			          <label for="course_duration" data-error="wrong" data-success="right">Duration(years)</label>-->
                      <select>
                          <option value="" disabled selected>Choose Duration</option>
			      		<option value="2">2 years</option>
			      		<option value="3">3 years</option>
			  		</select>
			  		<label>Duration</label>
			        </div>

			        <div class="input-field col s6">
			          <input  id="total_credit" type="text" class="validate" pattern="[0-9]{2,3}" required>
			          <label for="total_credit" data-error="wrong" data-success="right">Total Credit</label>
			        </div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>


	<!--Update Course Details-->

	<div id="test2" class="col s12">
		<div class=" row">
			<form name="subject_search" class="col s12">
				<div class="input-field col s4">
					<select>
			      		<option value="" disabled selected>Choose your option</option>
			      		<option value="1">MCA</option>
			      		<option value="2">M.Sc</option>
			      		<option value="3">M.Tech(NIE)</option>
			      		<option value="3">M.Tech(CSE)</option>
			  		</select>
			  		<label>Course</label>

			  		<button class="btn waves-effect waves-light"  type="submit" name="action">Submit
						<i class="material-icons right">Send</i>
					</button>
			  	</div>
			</form>

			<hr>
			<hr>

			<form name="subject_update" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[0-9]{3}" required>
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <!--<input  id="course_name" type="text" class="validate" pattern="[a-zA-Z\.]+" required>
			          <label for="course_name" data-error="wrong" data-success="right">Course Name</label>-->
                        <select>
			      		<option value="" disabled selected>Chose your option</option>
			      		<option value="1">MCA</option>
			      		<option value="2">M.Sc</option>
                        <option value="3">M.Tech(NIE)</option>
                        <option value="3">M.Tech(CSE)</option>
			  		</select>
			  		<label>Course</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <!--<input  id="course_duration" type="text" class="validate" pattern="[2|3]{1}" Data-length="1" required>
			          <label for="course_duration" data-error="wrong" data-success="right">Duration(years)</label>-->
                      <select>
                          <option value="" disabled selected>Choose duration</option>
			      		<option value="2">2 years</option>
			      		<option value="3">3 years</option>
			  		</select>
			  		<label>Duration</label>
			        </div>
                

			        <div class="input-field col s6">
			          <input  id="total_credit" type="text" class="validate" pattern="[0-9]{3}" Data-length="3" required>
			          <label for="total_credit" data-error="wrong" data-success="right">Total Credit</label>
			        </div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Update
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>
