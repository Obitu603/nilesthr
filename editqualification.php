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
                                <h1 class="h4 text-gray-900 mb-4">EDIT QUALIFICATION RECORD 
                                     
                            </h1>
                           
                            </div></center>
                            <?php
                                if(isset($_GET['id']))
                                {   $id =mysqli_real_escape_string($connection, $_GET['id']);
                                    $query = "SELECT *FROM qualification WHERE id='$id'";
                                    $query_run = mysqli_query($connection, $query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        $id= mysqli_fetch_array($query_run);
                                       ?>

                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?=$id['id'];?>">
                                                <div class="mb-3">
                                                    <label  class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" value="<?=$id['fullname'];?>" name="Fullname" aria-describedby="emailHelp">
                                                    </div>

                                                    <div class="mb-3">
                                                    <label  class="form-label">FileNo</label>
                                                    <input type="text" class="form-control"value="<?=$id['fileno'];?>" name="fileNo" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                <label class="form-label">Qualification</label>
                                <select class="form-control" id="qualification">
                                    <option value="option1">Select Qualification---</option>
                                    <option value="PHD">PHD</option>
                                    <option value="MSC">MSC</option>
                                    <option value="BSC">BSC</option>
                                    <option value="HND">HND</option>
                                    <option value="National Dipolma">National Dipolma</option>
                                    <option value="Dipolma">Dipolma</option>
                                    <option value="Certi">Certi</option>
                                    <option value="Secondary School">Secondary School</option>
                                    <option value="Primary">Primary</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Discipline</label>
                                <input type="text" class="form-control" name="discipline"value="<?=$id['discipline'];?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Institute</label>
                                <input type="text" class="form-control" name="institute" value="<?=$id['institute'];?>"
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Date Obtained</label>
                                <input type="Date" class="form-control" name="Dateobtained"value="<?=$id['Dateobtained'];?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload a scanned copy</label>
                                <input type="file" class="form-control" name="Certi_scanned" value="<?=$id['Certi_scanned'];?>">
                            </div>
        
                                    <center> <a href="admin_2.php" class="btn btn-danger float-end">Back</a>
                                    <button type="submit" name="UpdateRecord" class="btn btn-primary">Update Record</button></center>
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