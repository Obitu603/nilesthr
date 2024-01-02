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
                                <h1 class="h4 text-gray-900 mb-4">EDIT LEAVE RECORD
                                     
                            </h1>
                           
                            </div></center>
                            <?php
                                if(isset($_GET['id']))
                                {   $id =mysqli_real_escape_string($connection, $_GET['id']);
                                    $query = "SELECT *FROM leave_record WHERE id='$id'";
                                    $query_run = mysqli_query($connection, $query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        $id= mysqli_fetch_array($query_run);
                                       ?>

                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?=$id['id'];?>">
                                                <div class="mb-3">
                                                    <label  class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" value="<?=$id['fullName'];?>" name="Fullname" aria-describedby="emailHelp">
                                                    </div>

                                                    <div class="mb-3">
                                                    <label  class="form-label">FileNo</label>
                                                    <input type="text" class="form-control"value="<?=$id['fileno'];?>" name="fileNo" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                <label class="form-label">Leave Start Date</label>
                                <input type="date" class="form-control" name="leaveStartDate" value="<?=$id['leaveStartDate'];?>"id="leaveStartDate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Leave End Date</label>
                                <input type="date" class="form-control" name="leaveEndDate" value="<?=$id['leaveEndDate'];?>"placeholder="leaveEndDate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Leave Type</label>
                                <select class="form-control" id="leaveType" name="leaveType" >
                                <option>Select type of Leave----</option>    
                                    <option value="Sick Leave">Sick Leave</option>
                                    <option  value="Annual Leave">Annual Leave</option>
                                    <option value="Maternity Leave">Maternity Leave</option>
                                    <option value="Unpaid Leave">Unpaid Leave</option>
                                </select>
                            </div>
                            
                                    <center> <a href="admin_2.php" class="btn btn-danger float-end">Back</a>
                                    <button type="submit" name="UpdateleaveRecord" class="btn btn-primary">Update Record</button></center>
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