<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
  
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Page Content -->

  <div class="row">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header"><i class="fas fa-user"></i> User Manage</div>
              <div class="card-body">

  <div class="container">
      <div class="row">
              <div class="col-sm-8"><h2><b><i class="fas fa-user"></i> USER MANAGE</b></h2>
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
              </div>
      </div>
      <table class="table table-hover table-responsive">
        <thead class="thead-dark">
         <th>First Name</th>
         <th>Last Name</th>
         <th>Date</th>
         <th>Role</th>
         <th>Action</th>
        </thead>
        <tbody>
         <tr>
           <td>Iqtada</td>
           <td>Kamal</td>
           <td>24-Feb-19</td>
           <td>Admin</td>
           <td>
             <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
             <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
             <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
           </td>
        
         </tr>

          <tr>
           <td>Shahzaib</td>
           <td>Butt</td>
           <td>24-Feb-19</td>
           <td>Super Admin</td>
           <td>
             <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
             <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
             <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
           </td>
         </tr>
        </tbody>
      </table>
  </div>

   </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
</div>

<!-- /.container-fluid -->

<!-- User JavaScript-->
      <script src="js/sb-admin-user.js"></script>
      <script src="js/user.js"></script>


<?php
include('includes/footer.php');
?>