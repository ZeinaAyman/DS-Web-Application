<link rel="stylesheet" href="master.css">
<style media="screen">
  body
  {
    margin: 0;
    background-color: #847F79;
  }
  .create-acc
  {
   margin-left: 42%;
    color: #D6E8E9;
    font-size: 36;
    font-family: : "Montserrat";
    opacity: 1;
  }
  .createacccontainer
  {
  position: fixed;
  top: 30%;
  left: 35%;
  width: 30%;
  height: 60%;
  background-color: #B1DBAD;
  border-width: 2px;
  border-color: #E3B7A5;
  border-style: solid;
  }

  .empname
  {
   margin-top: 2.5%;
   margin-bottom: 2.5%;
   margin-left: 3.5%;
   color : #76323F;
   font-size: 24px;
   display: block;
  }
  .empinput,.emplist
  {
  margin-left: 3.5%;
  background-color: #9ABE9F;
  border-color: black;
  width: 93%;
  }
  .createbut
  {
   width: 20%;
   position: absolute;
   left: 40%;
   color: #B1DBAD;
   top: 80%;
   border-radius: 6%;
   height: 10%;
   background-color: #76323F;
  }

.input{
  text-align: center;
}
.input .placeholder{
  left: 145px;
}
</style>
<div class="topnav">
  <h2>Designs Solutions</h2>
  <!-- <h3>LOGO</h3> -->
</div>

<div class="create-acc">
  Create Account
</div>

  <div class="createacccontainer">
    <form action= "" method="post">
      <div class="input">
        <input class="info" type="text" placeholder="Employee Name"  name="name">
      </div>
      <div class="input">
        <input class="info" type="text" placeholder="Employee Email" name="email"><br>
      </div>
      <div class="input">
        <select class ="info">
          <option disabled selected>Employee Role</option>
          <option value="2">Designer</option>
          <option value="3">Manager</option>
        </select>
      </div>
      <div class="input">
        <input class="info" type="password" placeholder="Password" name="password"><br>
      </div>
      <input class="button" type="submit" value="Create" name="Submit">
    </form>

  </div>
</div>
<script type="text/javascript">
var inputs = document.querySelectorAll('.input input');
for (let i = 0; i < inputs.length; i++) {
  var placeholder = inputs[i].getAttribute('placeholder');
  var newPlaceholder = document.createElement('div');
  newPlaceholder.setAttribute('id', 'input' + i);
  newPlaceholder.classList.add('placeholder');
  newPlaceholder.innerHTML = placeholder;
  inputs[i].setAttribute('placeholder', '');
  inputs[i].parentElement.appendChild(newPlaceholder);
  placeholder = document.getElementById('input' + i);
  if (inputs[i].value.length > 0) {
    placeholder.classList.add('selected');
  } else {
    placeholder.classList.remove('selected');
  }

  inputs[i].addEventListener('input', function() {
    var placeholder = document.getElementById('input' + i);
    if (this.value.length > 0) {
      placeholder.classList.add('selected');
      this.parentElement.classList.add('selected');
    } else {
      placeholder.classList.remove('selected');
      this.parentElement.classList.remove('selected');
    }
  });
}
</script>
