<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
 <!-- Page Content -->

    <div class="card mb-3">
      <div class="card-header"><i class="far fa-address-card"></i> Update an Voter</div>
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
      <label for="inputFatherName">Father Name</label>
      <input type="name" class="form-control" id="inputfaname" pattern="^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$" maxlength="22" placeholder="Muhammad Jinnah" onkeypress="return alphaOnlyWithSpace(event)" onkeyup="btnDisable()" required>
    </div>
  </div>
   <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="B-413, Bisma Residency, Block#13, Gulistan-e-Jauhar, Karachi" onkeyup="btnDisable()" required>
  </div>
  
  <!--Date of birth + Age + Gender-->
  <div class="form-row">
    <div class="well"> 
      <div class="form-group">
      <label for="DOB">Date of Birth</label>
      <input type="date" class="form-control" id="inputDOB" placeholder="Date of Birth" onkeyup="btnDisable()" required>
    </div>
  </div>
  <div class="well"> 
  </div>
  <div class="well"> 
  
    <div class="form-group col-md-6">
        <label for="inputAge">Age</label>
        <input type="number"  id="inputAge" placeholder="18+" min="18" max="150" onkeyup="btnDisable()" required>
    </div>
  </div>

  <div class="form-group col-md-2">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control" onkeyup="btnDisable()" required>
        <option ></option>
        <option>Male</option>
        <option>Female</option>
      </select>
  </div>

  </div>
<!--!!!!END Date of birth + Age + Gender!!!!!-->
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNationality">Nationality</label>
            <input type="name" class="form-control" id="inputNationality" onkeypress="return onlyAlphabets(event)" pattern="[A-Z]{1}[a-z]{2,}" placeholder="Pakistan" maxlength="12" onkeyup="btnDisable()" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCNIC">CNIC</label>
            
            <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC" onkeyup="btnDisable()" placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" required>    
        </div>
    </div>

<!-- NA & PS CONSTITUENCY-->
<div class="container">


  <label class="checkbox-inline">
  NA-CONSTITUENCY <input type="checkbox" value="" id="chkNA" onclick="checkStatusChk(this);">
  </label>
  <label class="checkbox-inline">
  PS-CONSTITUENCY <input type="checkbox" value="" id="chkPS" onclick="checkStatusChk(this);"> 
  </label>
  <label class="checkbox-inline">
    BOTH <input type="checkbox" value="" id="chkBoth" onclick="checkStatusChk(this);">
  </label>

</div>
<div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNA">NA-CONSTITUENCY</label>
            <input type="text" class="form-control" id="inputNA"  placeholder="NA-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPS">PS-CONSTITUENCY</label>
            <input type="name" class="form-control" id="inputPS"  placeholder="PS-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" required>
        </div>
    </div>
<!--!!!!!END NA & PS CONSTITUENCY!!!!!-->

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" pattern="(?:[A-Z][a-z.-]+[ ]?)+" placeholder="Karachi" id="inputCity" required>
    </div>
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
      <script src="js/sb-admin-register-voter.js"></script>