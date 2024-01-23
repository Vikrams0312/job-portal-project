<?php require_once 'dbcon.php'; ?>
<html>
    <head>
        <title>Home</title>
        <?php require_once 'css_files.php' ?>

    </head>
    <body style=" background-image: url('blue.png');">
        
        <div class="row p-5">
            <div class="col-4"><h2 class="text-primary text-center p-2">Job Portal</h2>
            </div>

            <?php require_once 'menu.php' ?>


            <div class="col-12 bg-primary ">
                <h1 class="text-center text-white">Search Online Jobs !!!!</h1>

                <div class="row d-flex flex-row container p-4">
                    <div class="col-3">

                    </div>
                    <div class="col-6 p-3  bg-info-subtle rounded">

                        <input class="form-control "placeholder="Enter job titile" type="search" name="honame">

                    </div>

                    <div class="col-1 p-3  bg-info-subtle rounded">

                        <input id="nav-search-submit-button" type="submit" class="p-2 nav-input nav-progressive-attribute" value="Go" tabindex="0">

                    </div>
                    <div class="col-5">

                    </div>
                    <div class="col-6 p-3 d-flex flex-row">
                        <div class="col-4 p-2">
                            <button type="button" class="btn bg-light p-3"><a class="text-decoration-none text-dark" href="Job_seeker.php">I'm a Jobseeker</a></button>
                        </div>
                        <div class="col-4 p-2">
                            <button type="button" class="btn bg-light p-3"><a class="text-decoration-none text-dark"href="employer_registration.php">I'm a Employers</a></button>


                        </div>
                    </div>

                    <div class="col-">

                    </div>
                </div>

            </div>

            <div class="col-12"> 
                <div class="row bg-body-secondary ">


                <div class="col-8 offset-2">
                    <h4 class="p-4 mb-3">Recent Hot job</h4>

                    <?php
                    $query = "SELECT jp.id,jp.jobtitle,jp.jobdescription,jp.roles,jp.requirement,jp.whywork,aj.status,aj.user_id FROM jobposting jp left join applied_jobs aj on jp.id=aj.job_id";
                    $result = mysqli_query($dbcon, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="row mb-4">
                                <div class="bg-white p-4 rounded-3">
                                    <div>
                                        <h5><?= $row['jobtitle'] ?></h5>
                                        <div>
                                            <p> <?= substr($row['jobdescription'], 0, 500) ?></p>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <?php
                                        if (isset($_SESSION['s_id']) && $_SESSION['s_id'] == $row['user_id']) {
                                            ?>
                                            <a href="job.php?id=<?= $row['id'] ?>" class="btn btn-success">Applied</a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="job.php?id=<?= $row['id'] ?>" class="btn btn-success">View more</a>
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

    



</body>
</html>

