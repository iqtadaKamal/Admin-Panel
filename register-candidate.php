<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
 <!-- Page Content -->
   <link rel="stylesheet" type="text/css" href="css/sb-admin-candidate.css">

<div class="container-fluid">
<button type="button" class="btn btn-success" onclick="AddCandidateForm()">ADD CANDIDATES</button>
<button type="button" class="btn btn-primary" onclick="UpdateCandidateForm()">UPDATE CANDIDATES</button>
<button type="button" class="btn btn-danger" onclick="DeleteCandidateForm()">DELETE CANDIDATES</button>
</div>

 <!-- Page Content Add Candidate-->
<div id="Add" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="far fa-address-card"></i> Register an Candidates</div>
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
</div>
<!-- /.container-fluid Add Candidate -->


 <!-- Page Content Update Candidate-->
<div id="Update" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-address-card"></i> Update an Candidates</div>
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
              <form action="update-candidate.php" method="POST">
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

<!-- /.container-fluid Update Candidate -->


 <!-- Page Content Delete Candidate-->
<div id="Delete" style="display: none;">
  <br>
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-trash"></i> Delete an Candidates</div>
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

 <!--/.container-fluid Delete Candidates-->


  <!--/.container-fluid-->



    <!-- Register Candidate JavaScript-->
      <script src="js/sb-admin-register-candidate.js"></script>


      <script type="text/javascript">

            function AddCandidateForm() {
              document.getElementById("Add").style.display = "block";
              document.getElementById("Update").style.display = "none";
              document.getElementById("Delete").style.display = "none";
          }

    function UpdateCandidateForm() {
              document.getElementById("Add").style.display = "none";
              document.getElementById("Update").style.display = "block";
              document.getElementById("Delete").style.display = "none";
          }

    function DeleteCandidateForm() {
              document.getElementById("Add").style.display = "none";
              document.getElementById("Update").style.display = "none";
              document.getElementById("Delete").style.display = "block";
          }
      </script>
<?php
include('includes/footer.php');
?>