<?php 
        include('security.php');
        include('Templates/header.php'); 
        include('Templates/navbar.php'); 

?> 
<button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add New Staff
      </button></center>
  </div> 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Register New Staff</h1><br>
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <form>
                <center><h2 class="modal-title fs-5" id="exampleModalLabel">Bio Data</h2></center>
                    <div class="mb-3">
                      <label for="" class="form-label">FirstName</label>
                      <input type="text" class="form-control" id="firstname" aria-describedby="">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Surname</label>
                      <input type="text" class="form-control" id="Surname">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="lastname">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Select Gender</label>
                        <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                              <label class="form-check-label" for="male">
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                              <label class="form-check-label" for="female">
                                Female
                              </label>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Date of Birth</label>
                        <input type="Date" class="form-control" id="lastname">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Next of Kin</label>
                        <input type="text" class="form-control" id="NOK">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Residence Address</label>
                        <input type="text" class="form-control" id="Raddress">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">State of Orgin</label>
                        <input type="select" class="form-control" id="lastname">
                      </div>
                      
                    <!-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Button trigger modal -->
      


<?php include('Templates/script.php'); 
        include('Templates/footer.php'); 

?> 