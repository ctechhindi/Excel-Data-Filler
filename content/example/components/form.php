<form action="" id="add_record" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="full_name">Full Name</label>
    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth [DD/MM/YYYY]</label>
    <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth">
  </div>
  <div class="form-group">
    <label for="select">Example select</label>
    <select class="form-control" id="select" name="select">
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <option value="4">Option 4</option>
      <option value="5">Option 5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="multi_select">Example multiple select</label>
    <select multiple class="form-control" id="multi_select" name="multi_select">
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <option value="4">Option 4</option>
      <option value="5">Option 5</option>
	  <option value="6">Option 6</option>
    </select>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
  </div>  
  <p>Habits</p>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="reading" id="habit_reading" name="habit_reading">
      <label class="form-check-label" for="habit_reading">
        Reading
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="music" id="habit_music" name="habit_music">
      <label class="form-check-label" for="habit_music">
        Music
      </label>
    </div>
	<div class="form-check">
      <input class="form-check-input" type="checkbox" value="gaming" id="habit_gaming" name="habit_gaming">
      <label class="form-check-label" for="gender_gaming">
        Gaming
      </label>
    </div>
  </div>
  <p>Marital Status</p>
  <div class="form-group">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="marital_status" value="single">
      <label class="form-check-label">Single</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="marital_status" value="married">
      <label class="form-check-label">Married </label>
    </div>
  </div>
  <div class="form-group">
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="1" id="agree" name="agree">
	  <label class="form-check-label" for="gender_gaming">
		I agree to the Terms and Conditions
	  </label>
	</div>
  </div>
  <button class="btn btn-danger" type="submit">Submit</button>
</form>