<html>
    <head>
        <title>Job seeker</title>
        <?php require_once 'css_files.php' ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
        <form method="post" action="backend_functions.php">
            <div class="row p-5">
                <div class="col-4"><h2 class="text-primary text-center p-2">Job Seekers Register</h2>
                </div>

                <?php require_once 'menu.php' ?>

                <div class="col-2">

                </div>
                <div class="col-8  bg-body-secondary rounded">

                    <div class=" rounded-2 p-4" >
                        <div class="row">
                            <div class="col-6">
                                <label>Fullname<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="text" name="sname" id="sname" ><br>
                                <label>Password<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="password" name="spassword" id="spassword" ><br>
                                <label>Contact number<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="number" name="scontact" id="scontact"><br>
                                <label>Qualifications<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="text" name="squalifications" id="squalifications" ><br>


                                <lable>Resume<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</lable>
                                <input type="file" class="form-control" name="sresume" id="sResume"><br>

                            </div>
                            <div class="col-6">
                                <label>Your email<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="email" name="semail" id="semail" ><br>

                                <label> Conform Password<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="password"><br>
                                <label>Know languages<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="text" name="sklanguages" id="sklanguages"><br>
                                <label>Skills<sup><i class="bi bi-asterisk  text-danger" style="font-size:9px;"></i></sup>:</label>
                                <input class="form-control" type="text" name="sskills" id="sskills"><br>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col-5">

                            </div>
                            <div class="col-4">
                                <button  name="submit" value="REGISTRATION" class="btn btn-primary ">Submit</button>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>

                        <br>
                    </div>
                </div>
                <div class="col-2">

                </div>
            </div>
        </form>

    </body>
</html>

