

<html>
    <head>
        <title>Admin</title>
        <?php require_once 'css_files.php' ?>
    </head>
    <body>
        <div class="row p-5">
            <div class="col-4">
            </div>
             <?php require_once 'menu.php' ?>

            <div class="col-5 offset-4 bg-body-secondary p-5 rounded">
                <h2 class="text-primary text-center p-2">Admin Login</h2>
                <div class="p-1">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="admemail" id="admemail">
                </div>

                <div class="p-1">
                    <label>Password:</label>
                    <input type="Password" class="form-control" name="admpassword" id="admpassword">
                </div>
                <div class="p-3 col-2 offset-4">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </div>
    </body>
</html>