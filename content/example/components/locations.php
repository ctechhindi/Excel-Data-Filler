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
    <label for="state">State</label>
    <select class="form-control" id="state" name="state" onchange="getDistrictName()">
      <option value="">Select State Name</option>
      <option value="LD">Lakshadweep</option>
      <option value="MP">Madhya Pradesh</option>
      <option value="MH">Maharashtra</option>
      <option value="MN">Manipur</option>
      <option value="ML">Meghalaya</option>
      <option value="MZ">Mizoram</option>
      <option value="NL">Nagaland</option>
      <option value="OR">Odisha</option>
      <option value="PY">Puducherry</option>
      <option value="PB">Punjab</option>
      <option value="RJ">Rajasthan</option>
      <option value="SK">Sikkim</option>
      <option value="TN">Tamil Nadu</option>
      <option value="TS">Telangana</option>
      <option value="TR">Tripura</option>
      <option value="UP">Uttar Pradesh</option>
      <option value="UK">Uttarakhand</option>
      <option value="WB">West Benga</option>
    </select>
  </div>
  <div class="form-group">
    <label for="district">District</label>
    <select class="form-control" id="district" name="district" onchange="getBlockName()">
    </select>
  </div>
  <div class="form-group">
    <label for="block">Block</label>
    <select class="form-control" id="block" name="block" onchange="getVillageName()">
    </select>
  </div>
  <div class="form-group">
    <label for="village">Village</label>
    <select class="form-control" id="village" name="village">
    </select>
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
<script>
function getDistrictName(e) {
  var state = document.getElementById("state");
  if (!state === false && !state.value === false) {
    setTimeout(() => {
      var district = document.getElementById("district");
      district.innerHTML = "\
        <option value=''>Select District Name</option> \
        <option value='0'>Agra</option> \
        <option value='1'>Rampur</option> \
        <option value='2'>Aligarh</option> \
        <option value='3'>Allahabad</option> \
        <option value='4'>Ambedkar Nagar</option> \
        <option value='5'>Amroha</option> \
        <option value='6'>Auraiya</option> \
        <option value='7'>Azamgarh</option> \
        <option value='8'>Baghpat</option> \
        <option value='9'>Bahraich</option> \
        <option value='10'>Ballia</option> \
        <option value='11'>Balrampur</option> \
        <option value='12'>Banda</option> \
        <option value='13'>Barabanki</option> \
        <option value='14'>Bareilly</option> \
        <option value='15'>Basti</option> \
        <option value='16'>Bhadohi</option> \
        <option value='17'>Bijnor</option> \
        <option value='18'>Budaun</option> \
        <option value='19'>Bulandshahr</option> \
        <option value='20'>Chandauli</option> \
        <option value='21'>Chitrakoot</option> \
        <option value='22'>Moradabad</option> \
      ";
    }, 3000);
  }
}

function getBlockName(e) {
  var district = document.getElementById("district");
  if (!district === false && !district.value === false) {
    setTimeout(() => {
      var block = document.getElementById("block");
      block.innerHTML = "\
        <option value=''>Select Block Name</option> \
        <option value='0'>Achnera</option> \
        <option value='1'>Fatehpur Sikri</option> \
        <option value='2'>Akola</option> \
        <option value='3'>Bichpuri</option> \
        <option value='4'>Baroli Ahir</option> \
        <option value='5'>Khandoli</option> \
        <option value='6'>Etmadpur</option> \
        <option value='7'>Jagner</option> \
        <option value='8'>Kheragarh</option> \
        <option value='9'>Sainyan</option> \
        <option value='10'>Shamsabad</option> \
        <option value='11'>Fatehabad</option> \
        <option value='12'>Pinahat</option> \
        <option value='13'>Bah</option> \
        <option value='14'>Jaitpur Kalan</option> \
      ";
    }, 3000);
  }
}

function getVillageName(e) {
  var block = document.getElementById("block");
  if (!block === false && !block.value === false) {
    setTimeout(() => {
      var village = document.getElementById("village");
      village.innerHTML = "\
        <option value=''>Select Village Name</option> \
        <option value='1'>Agra Ward No - 12</option> \
        <option value='13'>Agra Ward No - 13</option> \
        <option value='25'>Agra Ward No - 14</option> \
        <option value='37'>Agra Ward No - 15</option> \
        <option value='49'>Agra Ward No - 16</option> \
        <option value='61'>Agra Ward No - 17</option> \
        <option value='73'>Agra Ward No - 18</option> \
        <option value='85'>Agra Ward No - 19</option> \
        <option value='97'>Agra Ward No - 20</option> \
        <option value='109'>Agra Ward No - 21</option> \
        <option value='121'>Agra Ward No - 22</option> \
        <option value='133'>Agra Ward No - 23</option> \
        <option value='145'>Agra Ward No - 24</option> \
        <option value='157'>Agra Ward No - 25</option> \
        <option value='169'>Agra Ward No - 26</option> \
        <option value='181'>Agra Ward No - 27</option> \
        <option value='193'>Agra Ward No - 28</option> \
        <option value='205'>Agra Ward No - 29</option> \
        <option value='217'>Agra Ward No - 30</option> \
        <option value='229'>Agra Ward No - 31</option> \
        <option value='241'>Agra Ward No - 32</option> \
        <option value='253'>Agra Ward No - 33</option> \
        <option value='265'>Agra Ward No - 34</option> \
        <option value='277'>Agra Ward No - 35</option> \
        <option value='289'>Agra Ward No - 36</option> \
        <option value='301'>Agra Ward No - 37</option> \
        <option value='313'>Agra Ward No - 38</option> \
        <option value='325'>Agra Ward No - 39</option> \
        <option value='337'>Agra Ward No - 40</option> \
        <option value='349'>Agra Ward No - 41</option> \
        <option value='361'>Agra Ward No - 42</option> \
      ";
    }, 3000);
  }
}
</script>