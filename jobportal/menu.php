<div class="col-8">
    <ol class="list-unstyled d-flex flex-row p-2 ">
        <li class="p-3"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
        <li class="p-3"><a class="text-decoration-none text-dark" href="jobseekerlogin.php">Job Seekers</a></li>
        <li class="p-3"><a class="text-decoration-none text-dark"href="emplogin.php">Employers</a></li>
        <li class="p-3"><a class="text-decoration-none text-dark"href="Admin_page.php">Admin</a></li>
        <li class="p-3"><a class="text-decoration-none text-dark"href="About_us.php">About Us</a></li>
        <li class="p-3"><a class="text-decoration-none text-dark"href="Contact_us.php">Contact Us</a></li>

        <?php
        if (isset($_SESSION['s_email'])) {
            ?>
            <li class="p-3"><a class="text-decoration-none "><?= $_SESSION['s_name'] ?></a></li>
            <li class="p-3"><a class="text-decoration-none " href="logout.php">Log out</a></li>
            <?php
        } else {
            ?>
            <li class="p-3"><button class="btn btn-outline-secondary"><a class="text-decoration-none " href="jobseekerlogin.php">Log in</a></button></li>
                <?php
            }
            ?>
    </ol>
</div>