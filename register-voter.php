<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
 <!-- Page Content -->
<link rel="stylesheet" type="text/css" href="css/sb-admin-voter.css">

<div class="container-fluid">
<button type="button" class="btn btn-success" onclick="AddVoterForm()">ADD VOTER</button>
<button type="button" class="btn btn-primary" onclick="UpdateVoterForm()">UPDATE VOTER</button>
<button type="button" class="btn btn-danger" onclick="DeleteVoterForm()">DELETE VOTER</button>
</div>


<!-- Page Content Add Voter-->
<div id="Add" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="far fa-address-card"></i> Register an Voter</div>
      <div class="card-body">
       <form action="" method="POST" class="form-horizontal form-label-left">

       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="name" class="form-control" id="inputfname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Imran" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastName">Last Name</label>
      <input type="name" class="form-control" id="inputlname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Khan" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
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
              <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC"  placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" onkeyup="btnDisable()" required> 
        </div>
    </div>

<!-- NA & PS CONSTITUENCY-->
<div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNA">NA-CONSTITUENCY</label>
            <input type="text" class="form-control" id="inputNA"  placeholder="NA-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPS">PS-CONSTITUENCY</label>
            <input type="name" class="form-control" id="inputPS" placeholder="PS-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" onkeyup="btnDisable()" required>
        </div>
    </div>
<!--!!!!!END NA & PS CONSTITUENCY!!!!!-->

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" onkeypress="return onlyAlphabets(event)" pattern="(?:[A-Z][a-z.-]+[ ]?)+" placeholder="Karachi" id="inputCity" onkeyup="btnDisable()" required>
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
  <button type="button" class="btn btn-warning">Scan Finger Print</button>   
  <button type="submit"  class="btn btn-primary" id='btnRegister'>Register</button>
</div>  
</form>
      </div>
    </div>
</div>
<!-- /.container-fluid Add Voter -->


 <!-- Page Content Update Voter-->

<div id="Update" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-address-card"></i> Update an Voter</div>
      <div class="card-body">

        <div class="app-container app-login">
       <div class="flex-center">
       <div class="app-body">
       <div class="app-block">
       <div class="app-form">
        <div class="form-header">
            <div class="app-brand text-center"><b>ENTER CNIC NUMBER</b></div>
            </div>
            <br>
              <form action="update-voter.php" method="POST">
                <div class="input-group">   

                  <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC" placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" required>     

                </div>
                    <div class="text-center">
                      <br>
                      <button type="submit" class="btn btn-success"><b>UPDATE</b></button>
                    </div>
                </form>
        </div>
    </div>         
</div>    
</div>
</div>

       </div>
     </div>
   </div>

<!-- /.container-fluid Update Voter -->

 <!-- Page Content Delete Candidate-->
<div id="Delete" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-trash"></i> Delete an Voter</div>
      <div class="card-body">

        <div class="app-container app-login">
       <div class="flex-center">
       <div class="app-body">
       <div class="app-block">
       <div class="app-form">
        <div class="form-header">
            <div class="app-brand text-center"><b>ENTER CNIC NUMBER</b></div>
            </div>
            <br>
              <form action="" method="POST">
                <div class="input-group">   

                  <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC" placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" required>     

                </div>
                    <div class="text-center">
                      <br>
                      <button type="submit" class="btn btn-danger"><b>DELETE</b></button>
                    </div>
                </form>
        </div>
    </div>         
</div>    
</div>
</div>

       </div>
     </div>
   </div>

 <!--/.container-fluid Delete Voter-->



  
  <!-- Register Voter JavaScript-->
      <script src="js/sb-admin-register-voter.js"></script>

  <script type="text/javascript">

            function AddVoterForm() {
              document.getElementById("Add").style.display = "block";
              document.getElementById("Update").style.display = "none";
              document.getElementById("Delete").style.display = "none";
          }

    function UpdateVoterForm() {
              document.getElementById("Add").style.display = "none";
              document.getElementById("Update").style.display = "block";
              document.getElementById("Delete").style.display = "none";
          }

    function DeleteVoterForm() {
              document.getElementById("Add").style.display = "none";
              document.getElementById("Update").style.display = "none";
              document.getElementById("Delete").style.display = "block";
          }
      </script>

<?php
include('includes/footer.php');
?>