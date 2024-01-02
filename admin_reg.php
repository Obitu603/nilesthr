<?php 
        include('security.php');
        include('Templates/header.php'); 
        include('Templates/navbar.php'); 
        include('message.php');
        

?> 
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Registered Admin</h1>
                    </div>
 

      <div class ="card-body">
        <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM hradmin_reg";
            $query_run = mysqli_query($connection, $query); 
                ?>
        <table class="table table-bordered table-striped" id="dataTable" width = "100%" cellspacing = "0">
              <thead>
                <tr>
                    <th>S/N</th>
                  <th>Name</th>
                  <th>Username</th>
                  <!-- <th>Passport</th> -->
                  <th>Email</th>
                  <th>Password</th>
                  <th>Usertype</th>
                  <th>Action</th>
        

            </tr>
          </thead>
        <tbody>
         <?php
             if(mysqli_num_rows($query_run)>0){
              while($row = mysqli_fetch_assoc($query_run))
              {
              ?>  
           
                <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <!-- <td><?php //echo $row['passport']; ?></td> -->
            <td><?php echo $row['email']; ?></td> 
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['usertype']; ?></td>

            <td>
              <!-- <button type="submit"class ="btn btn-info">VIEW</button>
              <button type="submit"class ="btn btn-success">EDIT</button>
            <button type="submit"class ="btn btn-danger">DELETE</button> -->
            <!-- <a href=""class ="btn btn-info">VIEW</a> -->
            <a href="Editadmin.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
            <form action="code.php" method="POST" class="d-inline">
              <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
            <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
            </form>
          </tr>
          <?php
              }
            }else{
              echo "No record found";
            }
         ?>

          </tbody>

        </table>

  
        </div>
    </div>
    <center>
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Add Admin
      </button></center>
  </div> 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Register New Admin</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                      <label  class="form-label">FullName</label>
                      <input type="text" class="form-control" name="Fullname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <input type="file" name="passport">
                    </div>
                <div class="mb-3">
                      <label  class="form-label">Username</label>
                      <input type="text" class="form-control" name="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Email address</label>
                      <input type="email" class="form-control" name="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Password</label>
                      <input type="password" class="form-control" name="Password">
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Comfirm Password</label>
                        <input type="password" class="form-control" name="Cpassword">
                      </div>
                     <input type="hidden" name ="usertype" value="admin">
                      
                    <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
                  </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
      
      <!-- Button trigger modal -->
      


<?php include('Templates/script.php'); 
        include('Templates/footer.php'); 

?> 