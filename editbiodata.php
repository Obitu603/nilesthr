<?php
    include('security.php');
     include('message.php');
     require'dbcon.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Record Update</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-0 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                           <center> <div class="card-text">
                                <h1 class="h4 text-gray-900 mb-4">EDIT BIODATA
                                     
                            </h1>
                           
                            </div></center>
                            <?php
                                if(isset($_GET['id']))
                                {   $id =mysqli_real_escape_string($connection, $_GET['id']);
                                    $query = "SELECT *FROM biodata WHERE id='$id'";
                                    $query_run = mysqli_query($connection, $query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        $id= mysqli_fetch_array($query_run);
                                       ?>

                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
        <center>
        <img class="rounded-circle profile-picture" src="img/<?php echo $id['passport']; ?>" width="200px" height="200px" alt="Profile Picture" style="border: 8px solid #DCDCDC;">
        <input type="file" name="passport">
        </center>
    </div>
                                                
                                                <input type="hidden" name="id" value="<?=$id['id'];?>">
                                                <div class="mb-3">
                                                    <label  class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" value="<?=$id['fullname'];?>" name="fullname" id="fullname"aria-describedby="emailHelp">
                                                    </div>

                                                <div class="mb-3">
                                                    <label  class="form-label">File No</label>
                                                    <input type="text" class="form-control"value="<?=$id['fileNo'];?>" name="fileNo" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                <label class="form-label">State of Orgin</label>
                                <select class="form-control" name="stateSelect" id="stateSelect">
                                    <option value="option1">State of Orgin---</option>
                                    <option value="abia">Abia</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwa_ibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bayelsa">Bayelsa</option>
                                    <option value="benue">Benue</option>
                                    <option value="borno">Borno</option>
                                    <option value="cross_river">Cross River</option>
                                    <option value="delta">Delta</option>
                                    <option value="ebonyi">Ebonyi</option>
                                    <option value="edo">Edo</option>
                                    <option value="ekiti">Ekiti</option>
                                    <option value="enugu">Enugu</option>
                                    <option value="gombe">Gombe</option>
                                    <option value="imo">Imo</option>
                                    <option value="jigawa">Jigawa</option>
                                    <option value="kaduna">Kaduna</option>
                                    <option value="kano">Kano</option>
                                    <option value="katsina">Katsina</option>
                                    <option value="kebbi">Kebbi</option>
                                    <option value="kogi">Kogi</option>
                                    <option value="kwara">Kwara</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="nasarawa">Nasarawa</option>
                                    <option value="niger">Niger</option>
                                    <option value="ogun">Ogun</option>
                                    <option value="ondo">Ondo</option>
                                    <option value="osun">Osun</option>
                                    <option value="oyo">Oyo</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="sokoto">Sokoto</option>
                                    <option value="taraba">Taraba</option>
                                    <option value="yobe">Yobe</option>
                                    <option value="zamfara">Zamfara</option>
                                    <option value="fct">Federal Capital Territory</option>
                                </select>
                            </div>
                                                    <div class="mb-3">
                                                    <label  class="form-label">Local Government Area</label>
                                                    <input type="text" class="form-control" value="<?=$id['local_gov_area'];?>"name="lgaSelect">
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                    <label  class="form-label">Language</label>
                                                    <input type="text" class="form-control" value="<?=$id['language'];?>"name="language">
                                                    </div>
                                                    <div class="mb-3">
                                                    <label  class="form-label">Religion</label>
                                                    <input type="text" class="form-control" value="<?=$id['religion'];?>"name="religion">
                                                    </div>
                                                    <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male">
                                    <label class="form-check-label" for="maleRadio">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female">
                                    <label class="form-check-label" for="femaleRadio">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Martial Status</label>
                                <select class="form-control"  name="martial_status" id="martial_status">
                                    <option value="option1">Select Martial Status---</option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                    <option value="Divorce">Divorce</option>
                                </select>
                            </div>
                                        <div class="mb-3">
                                                    <label  class="form-label">Date of Birth</label>
                                                    <input type="text" class="form-control" value="<?=$id['DOB'];?>"name="DOB">
                                         </div>
                                         <div class="mb-3">
                                                    <label  class="form-label">Phone</label>
                                                    <input type="text" class="form-control" value="<?=$id['phone_no'];?>"name="'phone_no">
                                         </div>
                                         <div class="mb-3">
                                                    <label  class="form-label">Father's Name</label>
                                                    <input type="text" class="form-control" value="<?=$id['father_name'];?>"name="father_name">
                                         </div>
                                         <div class="mb-3">
                                                    <label  class="form-label">Next of Kin</label>
                                                    <input type="text" class="form-control" value="<?=$id['next_of_kin'];?>"name="next_of_kin">
                                         </div>
                                                   
                                    <center> <a href="admin_2.php" class="btn btn-danger float-end">Back</a>
                                    <button type="submit" name="UpdateEditRecord" class="btn btn-primary">Update Record</button></center>
                                </form>
                                  <?php
                                    }
                                    else
                                    {
                                        echo"Id not found";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>