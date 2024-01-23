<?php
require_once 'dbcon.php';
if (!isset($_SESSION['s_email'])) {
    header('location:jobseekerlogin.php');
    exit;
}
?>
<html>
    <head>
        <title>Home</title>
        <?php require_once 'css_files.php' ?>
    </head>
    <body>       
        <div class="row p-5">
            <div class="col-4"><h2 class="text-primary text-center p-2">Job Portal</h2>
            </div>

            <?php require_once 'menu.php' ?>



            <div class="row bg-body-secondary">


                <div class="col-8 offset-2 mt-4">


                    <?php
                    extract($_REQUEST);
                    $query = "SELECT jp.id,jp.jobtitle,jp.jobdescription,jp.roles,jp.requirement,jp.whywork,aj.status FROM jobposting jp left join applied_jobs aj on jp.id=aj.job_id where jp.id=$id";
                    $result = mysqli_query($dbcon, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="row mb-4">
                                <div class="bg-white p-4 rounded-3">
                                    <div>
                                        <h5><?= $row['jobtitle'] ?></h5>
                                        <div>
                                            <p> <?= $row['jobdescription'] ?></p>
                                        </div>
                                        <div>
                                            <h4>Roles</h4>
                                            <p> <?= $row['roles'] ?></p>
                                        </div>
                                        <div>
                                            <h4>Requirement</h4>
                                            <p> <?= $row['requirement'] ?></p>
                                        </div>
                                        <div>
                                            <h4>Why work with us</h4>
                                            <p> <?= $row['whywork'] ?></p>
                                        </div>

                                    </div>
                                    <div class="float-end">
                                        <?php
                                        if ($row['status'] == 1) {
                                            ?>
                                         <button  class="btn btn-success">Applied</button>
                                            
                                            <?php
                                        } else {
                                            ?>
                                           <button userid="<?= $_SESSION['s_id'] ?>" jobid="<?= $row['id'] ?>" id="applybtn" class="btn btn-danger">Apply</button>

                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="row mb-4">
                            <div class="bg-white p-4 rounded-3">
                                <div>
                                    <h5>No jobs found!..</h5>
                                </div>                               
                            </div>
                        </div>
                        <?php
                    }
                    ?>





                </div>
            </div>


        </div>

    </div>


    <?php require_once 'js_files.php'; ?>   
</body>
</html>

