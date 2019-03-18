<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
 <!-- Page Content -->

    <div class="card mb-3">
      <div class="card-header"><i class="far fa-address-card"></i> Update an Candidates</div>
      <div class="card-body">
       <form action="" method="POST" class="form-horizontal form-label-left">


 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="name" class="form-control" id="inputfname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Imran" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastName">Last Name</label>
      <input type="name" class="form-control" id="inputlname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Khan"onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPartyName">Party Name</label>
      <input type="name" class="form-control" id="inputpname" maxlength="30" placeholder="PTI" onkeypress="return alphaOnlyWithSpace(event)" onkeyup="btnDisable()" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputElectorialSign">Electorial Sign</label>
    <input type="text" class="form-control" id="inputSign" placeholder="Bat" onkeyup="btnDisable()" maxlength="25" required>
  </div>

  
  <!--Gender-->

  <div class="form-group">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control" onkeyup="btnDisable()" required>
        <option ></option>
        <option>Male</option>
        <option>Female</option>
      </select>
  </div>

<!--!!!!END Gender!!!!!-->

        <div class="form-group">
            <label for="inputCNIC">CNIC</label>
            
            <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC" onkeyup="btnDisable()" placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" required>    
        </div>


<!-- NA CONSTITUENCY-->

<div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNA">NA-CONSTITUENCY</label>
            <input type="text" class="form-control" id="inputNA" onkeyup="btnDisable()" placeholder="NA-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" required>
        </div>
    
    </div>
<!--!!!!!END NA & PS CONSTITUENCY!!!!!-->

  <div class="form-row">

     <div class="form-group col-md-2">
      <label for="inputGender">Province/State</label>
      <select id="inputGender" class="form-control" onkeyup="btnDisable()" required>
        <option ></option>
        <option>Sindh</option>
        <option>Punjab</option>
        <option>Balochistan</option>
        <option>Kpk</option>
        <option>Gilgit Baltistan</option>
      </select>
  </div>
  </div>




  <div>
  <button type="button" class="btn btn-warning"><b>Scan Finger Print</b></button>   
  <button type="submit"  class="btn btn-primary" id='btnRegister'><b>Register</b></button>
</div>  
</form>
      </div>
    </div>

<!-- /.container-fluid Add Candidate -->

<?php
include('includes/footer.php');
?>


    <!-- Register Candidate JavaScript-->
      <script src="js/sb-admin-register-candidate.js"></script>