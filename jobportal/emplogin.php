<html>
    <head>
        <title>Employer</title>
        <?php require_once 'css_files.php' ?>
    </head>
    <body>
        <div class="row p-5">
            <div class="col-4">
            </div>
            <?php require_once 'menu.php' ?>

            <div class="col-5 offset-4 bg-body-secondary p-5 rounded">
                <h2 class="text-primary text-center p-2">Employer Login</h2>
                <div class="p-1">
                    <label>Email:</label> <span id="logstatus"></span>
                    <input type="email" class="form-control" name="empemail" id="empemail">
                </div>

                <div class="p-1">
                    <label>Password:</label>
                    <input type="Password" class="form-control" name="emppassword" id="emppassword">
                </div>
                <div class="p-3 col-2 offset-4">
                    <button type="button" class="btn btn-primary" id="submit">Submit</button>
                </div>
                <p>If you don't have account <a href='employer_registration.php'>Click to Register</a></p>
            </div>
        </div>
        <?php require_once 'js_files.php' ?>       
    </body>
</html>