<?php
include ('security.php');
include('message.php');
?>
<body id="page-top">
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="style.css">

        <title>Admin-Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mycss.css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                        <!-- Topbar Search -->
                    <span class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <img src="img/NILESTLOGO.png" alt="" srcset="" class = "logo">
                        </div>
                        <div class="sidebar-brand-text mb-0 h3 font-weight-bold text-white">NILEST HUMAN RESOURCE</div>
                    </span>
                                            <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <!-- <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div> -->
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-white-600 small">
                                        <?php
                                        echo $_SESSION['username'];
                                        ?> 
                                    </span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->
                    <div class="container-fluid">


                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <!-- <h5 class="card-title">Special title treatment</h5> -->
            </div>
            <div class="card-body">
                <label class="form-label">What information do you want?</label>
                <select id="contentSelect" class="form-control">
                    <option value="" selected disabled>Select Content</option>
                    <option value="biodata">Biodata</option>
                    <option value="promotion">Promotion</option>
                    <option value="qualification">Qualification</option>
                    <option value="association">Association</option>
                    <option value="leave-record">Leave-record</option>
                    <option value="posting">Posting</option>
                    <option value="department">Department</option>
                    <option value="place-travelled">Place-travelled</option>
                    <option value="work_experience">Work Experience</option>
                </select>
            
                
            </div>
            <div class="card-footer bg-white">
                <button type="submit" onclick="showContent()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="okButton">Search</button>
                <button type="reset" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Reset</button>
            </div>
            
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#View">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Edit">Edit</a>
                    </li>
                </ul>
            </div>
    
            <div class="card-body">
                <div class="tab-content col-sm-12" id="viewcontent">
                    <div class="tab-pane fade show active" id="View">
    
        <div class="tab-content" id="View">
        
            <div class="tab-pane fade show " id="biodata" role="tabpanel">
            <h5 class="header bg-white text-primary">Bio Data</h5>
            <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM biodata";
            $query_run = mysqli_query($connection, $query); 
                ?>
        
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>State of Orgin</th>
                                                <!-- <th>LGA</th> -->
                                               
                                                <th>Passport</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>                  <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['state_of_orgin']; ?></td>
                                            <!-- <td><?php echo $row['local_gov_area']; ?></td> -->
                                            <td><?php echo $row['passport']; ?></td>
                                            <td>
                                            <a href="editbiodata.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td></tr>
                                            <?php
            }
        } else {
            echo "<tr><td colspan='13'>No records found</td></tr>";
        }
        ?>
                                        </tbody>
                                    </table>
                                    

            </div></div>
            <div class="tab-pane fade" id="promotion" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Promotion</h5>
            <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM promotion";
            $query_run = mysqli_query($connection, $query); 
                ?>
            
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Name of Employee</th>
                                                <th>Promotion title</th>
                                                <th>Year of Promotion</th>
                                                
                                                <th>Action</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>             
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
                                            <td><?php echo $row['promotion_Title']; ?></td>
                                            <td><?php echo $row['Year_Of_Promition']; ?></td>
                                            <td>
                                            <a href="editpromotion.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td></tr>
                                            <?php
            }
        } else {
            echo "<tr><td colspan='13'>No records found</td></tr>";
        }
        ?>
                                        </tbody>
                                    </table>
            </div></div>
            <div class="tab-pane fade" id="qualification" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Qualification</h5> <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM qualification";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Displine</th>
                                                <th>Institute</th>
                                                <th>Year Obtained</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                            <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['discipline']; ?></td>
                                            <td><?php echo $row['institute']; ?></td>
                                            <td></td>
                                            <td>
                                            <a href="editqualification.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form> 
                                            </td></tr>
                                            <?php
            }
        } else {
            echo "<tr><td colspan='13'>No records found</td></tr>";
        }
        ?>
                                        </tbody>
                                    </table>
            </div></div>
            <div class="tab-pane fade" id="association" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Association</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM association";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Name of Committee </th>
                                                <!-- <th>Date Joined</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?><tr>
                                           <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
                                            <td><?php echo $row['AssociationType']; ?></td>
                                            <!-- <td>#<?php echo $row['Datejoined']; ?></td> -->
                                            <td>
                                            <a href="editassociation.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form> 
                                            </td></tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
            </div>
        </div>
            <div class="tab-pane fade" id="leave-record" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Leave-record</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM leave_record";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Leave Start Date</th>                                        <th>Type of Leave</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
                                            <td><?php echo $row['leaveStartDate']; ?></td>
                                            <td><?php echo $row['leaveType']; ?></td>
                                            
                                            <td>
                                            <a href="editleave.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td></tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
            </div></div>

            <div class="tab-pane fade" id="posting" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Posting</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM posting_record";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Posting Location</th>
                                                <!-- <th>Posting Start Date</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                       <tr>
                                       <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fileNo']; ?></td>
                                        <td><?php echo $row['fullName']; ?></td>
                                        <td><?php echo $row['posting_location']; ?></td>
                                        
                                         
                                            <td>
                                            <a href="editposting.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?></tr>

                                        </tbody>
                                    </table>
            </div></div>

            <div class="tab-pane fade" id="department" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Department</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM department";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>Directoriate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?><tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            <td><?php echo $row['directoriate']; ?></td>
                                            <td>
                                            <a href="editdepartment.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td></tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?></tr>
                                        </tbody>
                                    </table>
            </div></div>

        
            <div class="tab-pane fade" id="place-travelled" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Places travelled</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM places_travelled";
            $query_run = mysqli_query($connection, $query); 
                ?>
           
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Destination</th>
                                                <th>Purpose</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?><tr>
                                           <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['destination']; ?></td>
                                            <td><?php echo $row['purpose']; ?></td>
                                            
                                
                                            <td>
                                            <a href="editplaces.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td></tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
            </div>
            
            
            <div class="tab-pane fade" id="work_experience" role="tabpanel">
            <h5 class="card-header bg-white text-primary">Work Experience</h5>
            <?php
            if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM work_experience";
            $query_run = mysqli_query($connection, $query); 
                ?>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Organisation</th>
                                                <th>Job Title</th>
                                                <th>Start Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                        <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['OrgName']; ?></td>
                                            <td><?php echo $row['jobTitle']; ?></td>
                                            <td><?php echo $row['startDate']; ?></td>
                                        
                                            <td>
                                            <a href="editwork.php?id=<?=$row['id']; ?>"class ="btn btn-success">EDIT</a>
            <!-- <a href=""class ="btn btn-danger">DELETE</a></td> -->
                                        <form action="code.php" method="POST" class="d-inline">
                                        <input type="hidden" name="delete_id"value="<?php echo $row ['id'];?>">
                                        <button type="submit"class ="btn btn-danger"name="delete_admin">DELETE</button>
                                        </form>
                                            </td>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
            </div>
          </div>
        </div>                                 

    </div>
            
                    <div class="tab-pane fade" id="Edit">
                        <p>This is the content for tab 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 col-sm-12 ">
                            <ul class="nav nav-tabs " id="myTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#content1">Bio Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content2">Qualification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content3">Promotion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content4">Association</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content5">Leave Record</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content6">Posting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content7">Department</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content8">Places travelled</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content9">Working experience</a>
                                </li>

                            </ul>

                            <div class="tab-content ">

                                <div class="tab-pane fade show active" id="content1">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h5 class="card-header bg-primary text-white">Bio Data</h5>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#BioModal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                    <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
        <div class ="table_responsive">
        <?php 
           require'dbcon.php';
            $query = "SELECT *FROM biodata";
            $query_run = mysqli_query($connection, $query); 
                ?>
        

                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Name</th>
                                                <th>State of Orgin</th>
                                                <th>LGA</th>
                                                <th>language</th>
                                                <th>Religion</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Date of Birth</th>
                                                <th>Father's Name</th>
                                                <th>Next of Kin</th>
                                                <th>Passport</th>


                                            </tr>
                                        </thead>
                                        <tbody>
        <?php
        // Assuming $query_run is your mysqli query result
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fileNo']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['state_of_orgin']; ?></td>
                    <td><?php echo $row['local_gov_area']; ?></td>
                    <td><?php echo $row['language']; ?></td>
                    <td><?php echo $row['religion']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['martial_status']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['father_name']; ?></td>
                    <td><?php echo $row['next_of_kin']; ?></td>
                    <td><?php echo $row['passport']; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='13'>No records found</td></tr>";
        }
        ?>
    </tbody>
    </table></div>
</div>
       <div class="tab-pane fade" id="content2">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h4 class="card-header bg-primary text-white">Qualification</h4>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>

                                    </div>
                                    <?php
        if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
          echo '<h2>'.$_SESSION['message'].'</h2>';
          unset($_SESSION['message']);
        }
         ?>
                                    <div class ="table_responsive">
                                    <?php 
                                    require'dbcon.php';
                                        $query = "SELECT *FROM qualification";
                                        $query_run = mysqli_query($connection, $query); 
                                            ?>
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Qualification</th>
                                                <th>Category</th>
                                                <th>Certificate</th>
                                                <th>Displine</th>
                                                <th>Institute</th>
                                                <th>Year Obtained</th>
                                                <th>Scanned Copy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['qualification']; ?></td>
                                            <td><?php echo $row['Certi_category']; ?></td>
                                            <td><?php echo $row['certificate']; ?></td>
                                            <td><?php echo $row['discipline']; ?></td>
                                            <td><?php echo $row['institute']; ?></td>
                                            <td><?php echo $row['Dateobtained']; ?></td>
                                            <td><?php echo $row['Certi_scanned']; ?></td>
                                            </tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                                            </div>
                                
  
        <div class="tab-pane fade" id="content3">
            <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                <h4 class="card-header bg-primary text-white">Promotion </h4>
                <div>
                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#Promotion_Modal">
                        <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                    </button>
                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fa fa-times" aria-hidden="true"></i> Delete
                    </button>
                </div>
            </div>
            <div class="table_responsive">
                <?php
                require 'dbcon.php';
                $query = "SELECT * FROM promotion";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>File No</th>
                            <th>Name of Employee</th>
                            <th>Promotion title</th>
                            <th>From(Level)</th>
                            <th>To(Level)</th>
                            <th>Year of Promotion</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fileno']; ?></td>
                                    <td><?php echo $row['fullName']; ?></td>
                                    <td><?php echo $row['promotion_Title']; ?></td>
                                    <td><?php echo $row['from_level']; ?></td>
                                    <td><?php echo $row['to_level']; ?></td>
                                    <td><?php echo $row['Year_Of_Promition']; ?></td>
                                    <td><?php echo $row['promotion_Salary']; ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='8'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
</div>

<div class="tab-pane fade" id="content4">
    <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
        <h4 class="card-header bg-primary text-white">Association</h4>
        <div>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#commitee_Modal">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
            </button>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-times" aria-hidden="true"></i> Delete
            </button>
        </div>
    </div>
    <div class="table_responsive">
        <?php
        require 'dbcon.php';
        $query = "SELECT * FROM association";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>File No</th>
                    <th>Employee Name</th>
                    <th>Name of Committee</th>
                    <th>Date Joined</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fileNo']; ?></td>
                            <td><?php echo $row['fullName']; ?></td>
                            <td><?php echo $row['AssociationType']; ?></td>
                            <td><?php echo $row['Datejoined']; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

                                <div class="tab-pane fade" id="content5">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h5 class="card-header bg-primary text-white">Leave Record</h5>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#leave_Modal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class ="table_responsive">
                                    <?php 
                                    require'dbcon.php';
                                        $query = "SELECT *FROM leave_record";
                                        $query_run = mysqli_query($connection, $query); 
                                            ?>
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                         <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Leave Start Date</th>
                                                <th>Leave End Date</th>
                                                <th>Type of Leave</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
                                            <td><?php echo $row['leaveStartDate']; ?></td>
                                            <td><?php echo $row['leaveEndDate']; ?></td>
                                            <td><?php echo $row['leaveType']; ?></td>
                                            </tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                
<div class="tab-pane fade" id="content6">
    <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
        <h5 class="card-header bg-primary text-white">Posting</h5>
        <div>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#posting_Modal">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
            </button>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-times" aria-hidden="true"></i> Delete
            </button>
        </div>
    </div>
    <div class ="table_responsive">
        <?php 
        require 'dbcon.php';
        $query = "SELECT * FROM posting_record";
        $query_run = mysqli_query($connection, $query); 
        ?>
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>File No</th>
                    <th>Employee Name</th>
                    <th>Posting Location</th>
                    <th>Posting Start Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fileNo']; ?></td>
                            <td><?php echo $row['fullName']; ?></td>
                            <td><?php echo $row['posting_location']; ?></td>
                            <td><?php echo $row['postingStartDate']; ?></td>
                        </tr>
                        <?php
                    }
                }
                else {
                    echo "No Record Found";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
                  <div class="tab-pane fade" id="content7">
                                <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h5 class="card-header bg-primary text-white">Department</h5>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#Department_Modal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class ="table_responsive">
                                    <?php 
                                    require'dbcon.php';
                                        $query = "SELECT *FROM department";
                                        $query_run = mysqli_query($connection, $query); 
                                            ?>
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>Directoriate</th>
                                            </tr>
                                        </thead>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                       
                                            if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileno']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            <td><?php echo $row['directoriate']; ?></td>
                                            <tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                   </div>
                                </div>
                                <div class="tab-pane fade" id="content8">
                                <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h5 class="card-header bg-primary text-white">Places Travelled</h5>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#Places_Modal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class ="table_responsive">
                                    <?php 
                                    require'dbcon.php';
                                        $query = "SELECT *FROM places_travelled";
                                        $query_run = mysqli_query($connection, $query); 
                                            ?>
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Destination</th>
                                                <th>Purpose</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                       
                                            if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                             <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['destination']; ?></td>
                                            <td><?php echo $row['purpose']; ?></td>
                                            <td><?php echo $row['StartDate']; ?></td>
                                            <td><?php echo $row['EndDate']; ?></td>
                                            </tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="content9">
                                <div class="d-sm-flex align-items-center justify-content-between mb-6 bg-primary">
                                        <h5 class="card-header bg-primary text-white">Working Experience</h5>
                                        <div>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#WorkingExperience_Modal">
                                                <i class="fa fa-plus-square" aria-hidden="true"></i> Add New
                                            </button>
                                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                <i class="fa fa-times" aria-hidden="true"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class ="table_responsive">
                                    <?php 
                                    require'dbcon.php';
                                        $query = "SELECT *FROM work_experience";
                                        $query_run = mysqli_query($connection, $query); 
                                            ?>
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>File No</th>
                                                <th>Employee Name</th>
                                                <th>Name of Organisation</th>
                                                <th>Job Title</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        // Assuming $query_run is your mysqli query result
                                       
                                            if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                            <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fileNo']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['OrgName']; ?></td>
                                            <td><?php echo $row['jobTitle']; ?></td>
                                            <td><?php echo $row['startDate']; ?></td>
                                            <td><?php echo $row['endDate']; ?></td>
                                            </tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='13'>No records found</td></tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                 </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- second modal -->


                </div>
            </div>
        </div>


        </div>
        <!-- Section for Qualification -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Qualification Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Qualification Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>
                            <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Enter employee name">
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
                                <label class="form-label">Category of Certificate</label>
                                <input type="text" class="form-control" name="Certi_cat" placeholder="Enter category of the Certificate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Discipline</label>
                                <input type="text" class="form-control" name="discipline" placeholder="Enter discipline">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Institutey</label>
                                <input type="text" class="form-control" name="institute" placeholder="Enter name of Institution">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Date Obtained</label>
                                <input type="Date" class="form-control" name="Dateobtained">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload a scanned copy</label>
                                <input type="file" class="form-control" name="Certi_scanned">
                            </div>

                            <center><button type="submit" name="qualifybtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>



        <!-- Section for BioData -->
        <div class="modal fade" id="BioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Bio Data Record</div>
                        <!-- <h1 class="modal-title fs-6" id="exampleModalLabel">Add New Bio Data Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">FullName</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Enter Staff Fullname (note:start with Surname)" aria-describedby="emailHelp">
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
                                <label for="lgaSelect">Enter Local Government Area</label>
                                <!-- <select class="form-control" id="lgaSelect">
                                    <!-- Local government area options will be populated dynamically -->
                                <!-- </select> --> 
                                <input type="text" class="form-control" name="lgaSelect">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Language</label>
                                <input type="text" class="form-control" name="language">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Religion</label>
                                <input type="text" class="form-control" name="religion" placeholder="Religion" aria-describedby="emailHelp">
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
                                <label class="form-label">Date of Birth</label>
                                <input type="Date" class="form-control" name="DOB">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter PhoneNo:" aria-describedby="emailHelp">
                            </div>

                            <label class="form-label">Family Background</label>
                            <div class="mb-3">
                                <label class="form-label">Father's Name</label>
                                <input type="text" class="form-control" name="father_name" placeholder="Enter Father's name" aria-describedby="emailHelp">                            </div>
                            <div class="mb-3">
                                <label class="form-label">Next of Kin</label>
                                <input type="text" class="form-control" name="next_of_kin" placeholder="Enter name of Next of kin" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload a scanned copy of passport</label>
                                <input type="file" class="form-control" name="passport">
                            </div>
                            <center><button type="submit" name="biobtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
                </div>
            </div>
        </div>

        <!-- Section of promotion -->
        <div class="modal fade" id="Promotion_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Promotion Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Promotion Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" id="fileNo"name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control"id="fullName" name="fullName" placeholder="Enter Employee Name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="promotionTitle">Promotion Title</label>
                                <input type="text" class="form-control" id="promotion_Title" name="promotion_Title" placeholder="Enter promotion title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">From Level</label>
                                <select class="form-control" id="from_level" name="from_level">
                                    <option value="option0">Select Level---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                            <div class="mb-3">To Level</label>
                                <select class="form-control" id="to_level" name="to_level">
                                    <option value="option1">Select Level---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Year of promotion</label>
                                <input type="Date" class="form-control" name="YOP">
                            </div>
                            <div class="mb-3">
                                <label for="promotionSalary">Promotion Salary</label>
                                <input type="number" class="form-control" name="promotion_Salary" placeholder="Enter promotion salary">
                            </div>
                            <center><button type="submit" name="promotionbtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Section of Commitee -->
        <div class="modal fade" id="commitee_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Committee Membership Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Committee Membership Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" id="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter employee name">
                            </div>
                            <label class="form-label">Association</label>
                                <select class="form-control" id="AssociationType" name="AssociationType">
                                <option>Select Association----</option>    
                                    <option  value="SANIP">SANIP</option>
                                    <option value="NASU">NASU</option>
                                    <option value="ASUP">ASUP</option>
                                    <option value="ASURI">ASURI</option>
                                </select>
                                <div class="mb-3">
                                <label class="form-label">Date Joined</label>
                                <input type="date" class="form-control" name="Datejoined" id="Datejoined">
                            </div>

                            <center><button type="submit" name="Assbtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Section of Leave -->
        <div class="modal fade" id="leave_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Leave Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Leave Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter employee name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Leave Start Date</label>
                                <input type="date" class="form-control" name="leaveStartDate" id="leaveStartDate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Leave End Date</label>
                                <input type="date" class="form-control" name="leaveEndDate" placeholder="leaveEndDate">
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
                            

                            <center><button type="submit" name="leavebtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Section of posting -->
        <div class="modal fade" id="posting_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Posting Record</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">File Number</label>
                        <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" class="form-control" name="fullName" placeholder="Enter employee name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Posting Location</label>
                        <input type="text" class="form-control" name="postingLocation" placeholder="Enter posting location">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Posting Start Date</label>
                        <input type="date" class="form-control" name="postingStartDate">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Posting End Date</label>
                        <input type="date" class="form-control" name="postingEndDate">
                    </div>
                    <center><button type="submit" name="postingbtn" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
        </div>
    </div>
</div>
         
        <!-- Section for Department -->
        <div class="modal fade" id="Department_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Department Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Department Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter employee name">
                            </div>
                            <label class="form-label">Department</label>
                                <select class="form-control" id="department" name="department">
                                    <option>Select  Department----</option>    
                                    <option  value="Computer Science">Computer Science</option>
                                    <option value="ICT">ICT</option>
                                    <option value="SLT">SLT</option>
                                    <option value="Footwear">Footwear</option>
                                    <option value="Leather Production">Leather Production</option>
                                    <option value="Polymer Technology">Polymer Technology</option>
                                    <option value="GNS">GNS</option>
                                </select>
                                <div class="mb-3">
                                <label class="form-label">Directoriate</label>
                                <select class="form-control" id="directoriate" name="directoriate">
                                    <option>Select Directoriate----</option>    
                                    <option  value="Directorate of Academic Planning">Directorate of Academic Planning</option>
                                    <option value="Directoriate of Amin and Services">Directoriate of Amin and Services</option>
                                    <option value="Directoriate of Finance and Account">Directoriate of Finance and Account</option>
                                    <option value="Directoriate of Leather and Leather Product Technology">Directoriate of Leather and Leather Product Technology</option>
                                    <option value="Directoriate  of Polymer and Enivronmetal Technology">Directoriate  of Polymer and Enivronmetal Technology</option>
                                    <option value="Directoriate of Research and Development Extension Services">Directoriate of Research and Development Extension Services</option>
                                    <option value="Directoriate of Science and Technology7">Directoriate of Science and Technology</option>
                                    <option value="Directoriate of Works and Infrastucture Development">Directoriate of Works and Infrastucture Development</option>
                                </select>
                            </div>

                            <center><button type="submit" name="deptbtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Section of Places Travelled -->
        <div class="modal fade" id="Places_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Travel Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Travel Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3"
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter employee name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Destination</label>
                                <input type="text" class="form-control" name="destination"id="destination" placeholder="Enter destination">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Purpose</label>
                                <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Enter purpose">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="startDate" id="startDate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="EndDate" id="endDate">
                            </div>
                            

                            <center><button type="submit" name="placebtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Section for Working Experience -->
        <div class="modal fade" id="WorkingExperience_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-title fs-5 mb-0 h6 font-weight-bold">Add New Work Experience Record</div>
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Work Experience Record</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">File Number</label>
                                <input type="text" class="form-control" name="fileNo" placeholder="Enter File Number" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter employee name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name of Organisation</label>
                                <input type="text" class="form-control" name="OrgName" id="OrgName" placeholder="Enter name of organisation">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job Title</label>
                                <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Enter job title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="startDate" id="startDate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="endDate" id="endDate">
                            </div>
                            

                            <center><button type="submit" name="experiencebtn" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        
       <script>
        function showContent() {
            var selectedOption = document.getElementById("contentSelect").value;
            if (selectedOption) {
                $('#View .tab-pane').removeClass('show active');
                $('#View #' + selectedOption).addClass('show active');
            }
        }
    </script>

        <?php include('Templates/script.php');
        include('Templates/footer.php');

        ?>