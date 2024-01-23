<html>
    <head>
        <title>contact us</title>
        <?php require_once 'css_files.php' ?>

    </head>
    <body>
        <form method="post" action="backend_functions.php">
            <div class="row p-5">
                <div class="col-4">
                </div>
                <?php require_once 'menu.php' ?>

                <div class="row ">
                    <div class="col-5 offset-4 bg-body-secondary p-3 rounded">
                        <h2 class="text-primary text-center p-2">Contact Us</h2>

                        <label>Name:<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                        <input class="form-control" type="text" name="conname" id="conname"><br>
                        <label>Email:<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                        <input class="form-control" type="email" name="conemail" id="conemail"><br>
                        <label>Message:<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                        <input class="form-control" type="message" name="conmessage" id="conmessage"><br>
                        <div class="col-4 offset-5">
                            <button  name="submit" value="SEND" class="btn btn-primary ">Submit</button>
                        </div>



                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
