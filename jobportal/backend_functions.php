<?php

require 'dbcon.php';
extract($_REQUEST);
if (isset($submit) && $submit == 'APPLYJOB') {
    $SQUERY = "SELECT * FROM applied_jobs where user_id=$userid and job_id=$jobid";
    $sresult = mysqli_query($dbcon, $SQUERY);
    if (mysqli_num_rows($sresult) == 0) {
        $query = "INSERT INTO applied_jobs (user_id,job_id) values($userid,$jobid)";
        $result = mysqli_query($dbcon, $query);
        echo mysqli_error($dbcon);
        if ($result) {
            echo json_encode(['status' => 1, 'message' => 'Success']);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Error while stroing data']);
        }
    }
} else if (isset($submit) && $submit == 'EMPLOGIN') {
    $query = "SELECT * FROM empregistration where email='$email' and password='$password'";
    $result = mysqli_query($dbcon, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['emp_id'] = $row['id'];
        $_SESSION['emp_name'] = $row['name'];
        $_SESSION['emp_email'] = $row['email'];
        echo json_encode(['status' => 1, 'message' => 'success']);
    } else {
        echo json_encode(['status' => 0, 'message' => 'Username or password is incorrect']);
    }
} else if (isset($submit) && $submit == 'SLOGIN') {
    $query = "SELECT * FROM jobseeker where email='$email' and password='$password'";
    $result = mysqli_query($dbcon, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['s_id'] = $row['id'];
        $_SESSION['s_name'] = $row['fullname'];
        $_SESSION['s_email'] = $row['email'];
        echo json_encode(['status' => 1, 'message' => 'success']);
    } else {
        echo json_encode(['status' => 0, 'message' => 'Username or password is incorrect']);
    }
} else if (isset($submit) && $submit == "REGISTRATION") {
    $query = "INSERT INTO  jobseeker(fullname,email,password,contactnumber,knownlanguages,qualifications,skills) values('$sname','$semail','$spassword',$scontact,'$sklanguages','$squalifications','$sskills')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo '<h4>Successfully registered!..</h4>';
        echo '<a href="jobseekerlogin.php">Log in</a>';
    } else {
        echo 'Error wile inserting record ' . mysqli_error($dbcon);
    }
} else if (isset($submit) && $submit == "EREGISTRATION") {
    $description = mysqli_real_escape_string($dbcon, $empdescription);
    $query = "INSERT INTO  empregistration(name,email,password,website,description,cmpname)values('$empname','$empemail','$emppassword','$cmpwebsite','$description','$cmpname')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo '<h4>Successfully registered!..</h4>';
        echo '<a href="emplogin.php">Log in</a>';
    } else {
        echo 'Error wile inserting record ' . mysqli_error($dbcon);
    }
} else if (isset($submit) && $submit == "JPREGISTRATION") {
    $description = mysqli_real_escape_string($dbcon, $jdiscription);
    $roles = mysqli_real_escape_string($dbcon, $jroles);
    $requirement = mysqli_real_escape_string($dbcon, $jrequire);
    $whywork = mysqli_real_escape_string($dbcon, $jwhy);
    $query = "INSERT INTO  jobposting(empid,jobtitle,jobdescription,roles,requirement,whywork) values('$empid','$jtitle','$description','$roles','$requirement','$whywork')";

    $result = mysqli_query($dbcon, $query);
    echo mysqli_error($dbcon);
    if ($result) {
        echo '<h4>Successfully registered!..</h4>';
        echo '<a href="index.php">Home Page</a>';
    } else {
        echo 'Error wile inserting record ' . mysqli_error($dbcon);
    }
} else if (isset($submit) && $submit == "SEND") {
    $query = "INSERT INTO  contactus(name,email,message) values('$conname','$conemail','$conmessage')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo '<h4>Successfully registered!..</h4>';
        echo '<a href="index.php">Home Page</a>';
    } else {
        echo 'Error wile inserting record ' . mysqli_error($dbcon);
    }
}