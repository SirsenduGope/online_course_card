<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Student</a></li>
	    <li class="tab col s6"><a href="#test2">Update Student Details</a></li>
	  </ul>
	</div>

	<!--Add New Student-->
	<div id="test1" class="col s12">
		<div class=" row">
<<<<<<< HEAD
			<?php require("Form/student_register_form.php") ?>

=======
            <?php require("Form/student_register_form.php") ?>
>>>>>>> 91856a0a22933df493c423d604dfd79c03213057
		</div>
	</div>

	<!--Update Student Details-->

	<div id="test2" class="col s12" disabled>
		<div class=" row">
			<form name="student_search" class="col s12">
				<div class="row">
			        <div class="input-field col s4">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="2">M.Sc</option>
						      <option value="3">MCA</option>
						      <option value="4">M.Tech(NIE)</option>
						      <option value="4">M.Tech(CSE)</option>
						    </select>
						    <label>Course</label>
						    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
      				</div>

      				<div class="input-field col s4">
			          <input  id="reg_no" type="text" class="validate" pattern="[0-9]{8}"  required>
			          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
			        </div>
      			</div>
			</form>

			<hr>
			<hr>

			<?php require("Form/student_register_form.php") ?>
		</div>
	</div>
</div>
