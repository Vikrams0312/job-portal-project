<?php
require_once 'dbcon.php';
if (!isset($_SESSION['emp_email'])) {
    header("location:emplogin.php");
    exit;
}
?>
<html>
    <head>
        <title>Job posting</title>
        <?php require_once 'css_files.php' ?>
    </head>
    <body>

        <form method="post" action="backend_functions.php">
            <div class="row p-4">
                <div class="col-6">
                    <?php echo 'Name: ' . $_SESSION['emp_name'] ?>
                    <h2 class=" text-primary text-center"><b>Job Posting Page</b></h2>
                </div>
                <div class="col-6 ">
                    <ol class="list-unstyled d-flex flex-row ">



                        <li class="p-3"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
                        <li class="p-3"><a class="text-decoration-none text-dark" href="jobseekerlogin.php">Job Seekers</a></li>
                        <li class="p-3"><a class="text-decoration-none text-dark"href="emplogin.php">Employers</a></li>
                        <li class="p-3"><a class="text-decoration-none text-dark"href="Admin_page.php">Admin</a></li>
                        <li class="p-3"><a class="text-decoration-none text-dark"href="About_us.php">About Us</a></li>
                        <li class="p-3"><a class="text-decoration-none text-dark" href="Contact_us.php">Contact Us</a></li>

                    </ol>           
                </div>   

                <div class="p-5">
                    <div class="col-6 offset-3 p-lg-5 bg-body-secondary rounded">
                        <div class="p-2">
                            <label>Job Title:</label>
                            <input type="hidden" name="empid" value="<?= $_SESSION['emp_id'] ?>">
                            <input type="text" class="form-control" name="jtitle" id="jtitle">
                        </div>
                        <div  class="p-2">
                            <label>Job Description:</label>
                            <textarea class="form-control" name="jdiscription" id="jdiscription"></textarea>
                        </div  class="p-2">
                        <div  class="p-2">
                            <label>Roles/Responsiblities:</label>
                            <input type="text" class="form-control" name="jroles" id="jroles">
                        </div>
                        <div  class="p-2">
                            <label>Requirements:</label>
                            <input type="text" class="form-control" name="jrequire" id="jrequire">
                        </div>
                        <div  class="p-2">
                            <label>Why Work With Us:</label>
                            <input type="text" class="form-control" name="jwhy" id="jwhy">
                        </div>
                        <div class="col-2 offset-4 p-3">
                            <button  name="submit" value="JPREGISTRATION" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>