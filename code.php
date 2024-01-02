<?php
include('security.php');
require'dbcon.php';
include('message.php');

if(isset($_POST['delete_admin']))
{
    $id = mysqli_real_escape_string($connection, $_POST['delete_id']);
    $query = "DELETE FROM hradmin_reg WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    if( $query_run)
    {
        $_SESSION['message'] = "Admin Deleted";
        header('Location: admin_reg.php');
    }
    else
    {
        $_SESSION['message'] = "Admin Not Deleted";
        header('Location: admin_reg.php');
    }
}



if(isset($_POST['UpdateRecord'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['Fullname'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $usertype = $_POST['usertype'];

    $query = "UPDATE hradmin_reg SET fullname = '$fullname', username = '$username', email = '$email', password = '$password', usertype = '$usertype' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($_FILES['passport']['error'] == UPLOAD_ERR_OK) {
        $tempname = $_FILES['passport']['tmp_name'];
        $folder = 'img/'; // Replace with the actual folder path

        // Generate a unique name for the file to avoid overwriting
        $filename = uniqid() . '_' . basename($_FILES['passport']['name']);

        // Move the uploaded file to the desired folder
        move_uploaded_file($tempname, $folder . $filename);

        // Update the filename in the database
        $query = "UPDATE hradmin_reg SET passport = '$filename' WHERE id = '$id'";
        $query_run = mysqli_query($connection, $query);
    }

    if ($query_run) {
        $_SESSION['message'] = "Admin Profile Updated";
        header('Location: admin_reg.php');
    } else {
        $_SESSION['message'] = "Admin Profile Not Updated";
        header('Location: admin_reg.php');
    }
}

if(isset($_POST['submit']))
{
    $fullname = $_POST['Fullname'];
    $username = $_POST['Username'];
    $passport = $_POST['passport'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['Cpassword'];
    $usertype = $_POST['usertype'];

    
        if($password === $cpassword)
        {
            $query = "INSERT INTO hradmin_reg(fullname,username,passport,email,password,usertype) VALUES ('$fullname','$username','$passport',$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query); 
            if($query_run)
            {
                $_SESSION['message'] = "Admin Profile Added";
                header('Location: admin_reg.php');
            }
            else 
            {
                $_SESSION['message'] = "Admin Profile Not Added";
                header('Location: admin_reg.php');  
            }
        }
        else 
        {
            $_SESSION['message'] = "Password and Confirm Password Does Not Match";
            header('Location: admin_reg.php');  
        }
    }

    if(isset($_POST['loginbtn'])) {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];
        $query = "SELECT * FROM hradmin_reg WHERE email='$email_login' AND password='$password_login'";
        $query_run = mysqli_query($connection, $query);
        $usertypes = mysqli_fetch_array($query_run);
    
        if($usertypes['usertype'] == "superadmin") {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        } elseif ($usertypes['usertype'] == "hradmin") {
            header('Location: hradmin.php');
        } elseif ($usertypes['usertype'] == "dept_admin") {
            $_SESSION['username'] = $email_login;
            header('Location: dept.php');
        } elseif ($usertypes['usertype'] == "staff") {
            $_SESSION['username'] = $email_login;
            header('Location: staff.php');
        } else {
            $_SESSION['message'] = "Incorrect Email/Password";
            header('Location: login.php');
        }
    }
    
    if(isset($_POST['logout'])){

    session_destroy();
    unset( $_SESSION['username']);
    header('Location: index1.html');
 }
   

//qualification section
if(isset($_POST['qualifybtn'])){
    $fullname = $_POST['fullname'];
    $fileno = $_POST['fileNo'];
    $qualification = $_POST['qualification'];
    $Certi_category= $_POST['Certi_cat'];
    $certificate = $_POST['certificate'];
    $discipline = $_POST['discipline'];
    $institute = $_POST['institute'];
    $Dateobtained = $_POST['Dateobtained'];
    $Certi_scanned = $_POST['Certi_scanned'];
    $query = "INSERT INTO qualification(fullname,fileNo,qualification,Certi_category,certificate,discipline,institute,Dateobtained,Certi_scanned) VALUES 
    ('$fullname','$fileno','$qualification','$Certi_category','$certificate','$discipline','$institute','$Dateobtained','$Certi_scanned')";

      $query_run = mysqli_query($connection, $query); 
      if($query_run)
            {
                $_SESSION['message'] = "Qualification Record saved";
                header('Location: admin_2.php');
            }
            else 
            {
                $_SESSION['message'] = "Qualification Record not saved";
                header('Location: admin_2.php');  
            }
}

//biodata section
if(isset($_POST['biobtn'])){
    $fullname = $_POST['fullname'];
    $fileno = $_POST['fileNo'];
    $stateoforgin = $_POST['stateSelect'];
    $localgovarea= $_POST['lgaSelect'];
    $language = $_POST['language'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];
    $martialStatus = $_POST['martial_status'];
    $DOB = $_POST['DOB'];
    $phoneno = $_POST['phone_no'];
    $fathername = $_POST['father_name'];
    $nextofkin = $_POST['next_of_kin'];
    $passport = $_POST['passport'];
    $tempname = $_FILES['passport'] ['tmp_name'];;
    $folder = 'img/' . $passport;
    $query = "INSERT INTO biodata(fullname,fileNo,state_of_orgin,local_gov_area,language,religion,gender,martial_status,DOB,phone_no,father_name,next_of_kin,passport) VALUES 
    ('$fullname','$fileno','$stateoforgin','$localgovarea','$language','$religion','$gender','$martialStatus','$DOB','$phoneno','$father_name','$next_of_kin','$passport')";

      $query_run = mysqli_query($connection, $query); 
      if($query_run)
            {
                $_SESSION['message'] = "Biodata Record saved";
                move_uploaded_file($_FILES['passport']['tmp_name'], $folder);
                header('Location: admin_2.php');
            }
            else 
            {
                $_SESSION['message'] = "Biodata Record not saved";
                header('Location: admin_2.php');  
            }
}

//promotion section
if(isset($_POST['promotionbtn'])){
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $promotion_Title = $_POST['promotion_Title'];
    $from_level = $_POST['from_level'];
    $to_level = $_POST['to_level'];
    $YOP = $_POST['YOP'];
    $promotion_Salary = $_POST['promotion_Salary'];
    $query = "INSERT INTO promotion(fileno,fullName,promotion_Title,from_level,to_level,Year_Of_Promition,promotion_Salary) VALUES 
    ('$fileno','$fullname','$promotion_Title','$from_level','$to_level','$YOP','$promotion_Salary')";
     
     $query_run = mysqli_query($connection, $query); 
     if($query_run)
           {
               $_SESSION['message'] = "Promotion Record saved";
               header('Location: admin_2.php');
           }
           else 
           {
               $_SESSION['message'] = "Promotion Record not saved";
               header('Location: admin_2.php');  
           }
}

//Association section

//committee section
if(isset($_POST['Assbtn'])){
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $AssociationType = $_POST['AssociationType'];
    $Datejoined = $_POST['Datejoined'];
    $query = "INSERT INTO association(fileNo,fullName,AssociationType,Datejoined) VALUES 
    ('$fileno','$fullname','$AssociationType','$Datejoined')"; 
     $query_run = mysqli_query($connection, $query);
     if($query_run)
           {
               $_SESSION['message'] = "Association Record saved";
               header('Location: admin_2.php');
           }
           else 
           {
               $_SESSION['message'] = "Association Record not saved";
               header('Location: admin_2.php');  
           }
   
}
//leave section
if(isset($_POST['leavebtn'])){
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $leaveStartDate = $_POST['leaveStartDate'];
    $leaveEndDate = $_POST['leaveEndDate'];
    $leaveType = $_POST['leaveType'];
    $query = "INSERT INTO leave_record(fileno,fullName,leaveStartDate,leaveEndDate,leaveType) VALUES 
    ('$fileno','$fullname','$leaveStartDate','$leaveEndDate','$leaveType')"; 
     $query_run = mysqli_query($connection, $query);
     if($query_run)
           {
               $_SESSION['message'] = "leave Record saved";
               header('Location: admin_2.php');
           }
           else 
           {
               $_SESSION['message'] = "leave Record not saved";
               header('Location: admin_2.php');  
           }
   
}

//posting section
if(isset($_POST['postingbtn'])){
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $postingLocation = $_POST['postingLocation'];
    $postingStartDate = $_POST['postingStartDate'];
    $postingEndDate = $_POST['postingEndDate'];

    $query = "INSERT INTO posting_record(fileNo,fullName,posting_location,postingStartDate,postingEndDate) VALUES 
    ('$fileno','$fullname','$postingLocation','$postingStartDate','$postingEndDate')"; 
      $query_run = mysqli_query($connection, $query);
      if($query_run)
           {
               $_SESSION['message'] = "Post Record saved";
               header('Location: admin_2.php');
           }
           else 
           {
               $_SESSION['message'] = "Post Record not saved";
               header('Location: admin_2.php');  
           }
  
}
//Department section
    if(isset($_POST['deptbtn'])){
        $fullname = $_POST['fullName'];
        $fileno = $_POST['fileNo'];
        $department = $_POST['department'];
        $directoriate = $_POST['directoriate'];
        $query = "INSERT INTO department(fileno,fullName,department,directoriate) VALUES 
        ('$fileno','$fullname','$department','$directoriate')"; 
         $query_run = mysqli_query($connection, $query);
         if($query_run)
               {
                   $_SESSION['message'] = "Department Record saved";
                   header('Location: admin_2.php');
               }
               else 
               {
                   $_SESSION['message'] = "Department Record not saved";
                   header('Location: admin_2.php');  
               }
}

//places travelled section
if(isset($_POST['placebtn'])){
        $fullname = $_POST['fullName'];
        $fileno = $_POST['fileNo'];
        $destination = $_POST['destination'];
        $purpose = $_POST['purpose'];
        $StartDate = $_POST['startDate'];
        $EndDate = $_POST['EndDate'];
        $query = "INSERT INTO places_travelled(fileno,fullName,destination,purpose,StartDate,EndDate) VALUES 
        ('$fileno','$fullname','$destination','$purpose','$StartDate','$EndDate')"; 
         $query_run = mysqli_query($connection, $query);
         if($query_run)
               {
                   $_SESSION['message'] = "Places travelled Record saved";
                   header('Location: admin_2.php');
               }
               else 
               {
                   $_SESSION['message'] = "Places travelled Record not saved";
                   header('Location: admin_2.php');  
               }


}
//working experience section
if(isset($_POST['experiencebtn'])){
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $OrgName = $_POST['OrgName'];
    $jobTitle = $_POST['jobTitle'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $query = "INSERT INTO work_experience(fileno,fullName,OrgName,jobTitle,startDate,endDate) VALUES 
    ('$fileno','$fullname','$OrgName','$jobTitle','$startDate','$endDate')"; 
     $query_run = mysqli_query($connection, $query);
     if($query_run)
           {
               $_SESSION['message'] = "working experience Record saved";
               header('Location: admin_2.php');
           }
           else 
           {
               $_SESSION['message'] = "working experience Record not saved";
               header('Location: admin_2.php');  
           }

}
// editbiodata

if(isset($_POST['UpdateEditRecord']))
{
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullname'];
    $fileno = $_POST['fileNo'];
    $stateoforgin = $_POST['stateSelect'];
    $localgovarea = $_POST['lgaSelect'];  // Corrected variable name
    $language = $_POST['language'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];
    $martialStatus = $_POST['martial_status'];
    $DOB = $_POST['DOB'];
    $phoneno = $_POST['phone_no'];
    $fathername = $_POST['father_name'];
    $nextofkin = $_POST['next_of_kin'];
  // Handle file upload
  if ($_FILES['passport']['error'] == UPLOAD_ERR_OK) {
    $tempname = $_FILES['passport']['tmp_name'];
    $folder = 'img/'; // Replace with the actual folder path

    // Generate a unique name for the file to avoid overwriting
    $filename = uniqid() . '_' . basename($_FILES['passport']['name']);

    // Move the uploaded file to the desired folder
    move_uploaded_file($tempname, $folder . $filename);

    // Update the filename in the database
    $passport = $filename;
} else {
    // Use the existing filename if no new file is uploaded
    $passport = $_POST['existing_passport']; // Assuming you have a hidden input for the existing passport filename in your form
}

$query = "UPDATE biodata SET fullname='$fullname', fileNo='$fileno', state_of_orgin='$stateoforgin', local_gov_area='$localgovarea', language='$language', religion='$religion', gender='$gender', martial_status='$martialStatus', DOB='$DOB', phone_no='$phoneno', father_name='$fathername', next_of_kin='$nextofkin', passport='$passport' WHERE id='$id'";

    $query_run = mysqli_query($connection, $query);

    if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}

// editassociation
if(isset($_POST['UpdateAssRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $AssociationType = $_POST['AssociationType'];
    $Datejoined = $_POST['Datejoined'];
   
    $query = "UPDATE association SET fullName = '$fullname',fileNo='$fileno',AssociationType='$AssociationType',Datejoined='$Datejoined'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}
//editdepartment
if(isset($_POST['UpdatedepRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $department = $_POST['department'];
    $directoriate = $_POST['directoriate'];
    
    $query = "UPDATE department SET fullName = '$fullname',fileno='$fileno',department='$department',directoriate='$directoriate'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}
//Leaveupdate
if(isset($_POST['UpdateleaveRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['Fullname'];
    $fileno = $_POST['fileNo'];
    $leaveStartDate = $_POST['leaveStartDate'];
    $leaveEndDate = $_POST['leaveEndDate'];
    $leaveType = $_POST['leaveType'];
    $query = "UPDATE leave_record SET fullName = '$fullname',fileno='$fileno',leaveStartDate='$leaveStartDate',leaveEndDate='$leaveEndDate',leaveType='$leaveType'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}

//postingupdate
if(isset($_POST['UpdatepostingRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $postingLocation = $_POST['postingLocation'];
    $postingStartDate = $_POST['postingStartDate'];
    $postingEndDate = $_POST['postingEndDate'];

    $query = "UPDATE posting_record SET fullName = '$fullname',fileno='$fileno',posting_location=' $postingLocation',postingStartDate='$postingStartDate',postingEndDate='$postingEndDate'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}

//placeupdate
if(isset($_POST['UpdatepostingRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $OrgName = $_POST['OrgName'];
    $jobTitle = $_POST['jobTitle'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];


    $query = "UPDATE work_experience SET fullName = '$fullname',fileno='$fileno',OrgName='$OrgName',jobTitle='$jobTitle',startDate='$startDate',endDate='$endDate'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}
//promotionedit
if(isset($_POST['UpdatepromotionRecord']))
{
    $id =mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = $_POST['fullName'];
    $fileno = $_POST['fileNo'];
    $promotion_Title = $_POST['promotion_Title'];
    $from_level = $_POST['from_level'];
    $to_level = $_POST['to_level'];
    $YOP = $_POST['YOP'];
    $promotion_Salary = $_POST['promotion_Salary'];

    $query = "UPDATE promotion SET fullName = '$fullname',fileno='$fileno',promotion_Title='$promotion_Title',from_level='$from_level',to_level='$to_level',Year_Of_Promition='$YOP',promotion_Salary='$promotion_Salary'WHERE id='$id'";
      $query_run = mysqli_query($connection, $query);
     if ($query_run)
     {
        $_SESSION['message'] = "Record Updated";
        header('Location: admin_2.php');
     }else
     {
        
        $_SESSION['message'] = "Not Record Updated";
        header('Location: admin_2.php');  
     }
}




?>
	