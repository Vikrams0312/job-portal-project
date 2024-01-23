<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Employer Registration</title>
        <?php require_once 'css_files.php'; ?>
    </head>
    <body>
        <div class="row p-5">
            <div class="col-4"><h2 class="text-primary text-center p-2">Employer Registeration</h2>
            </div>
            <?php require_once 'menu.php' ?>
            <div class="col-2">

            </div>
            <div class="col-8">
                <form action="backend_functions.php" met>
                    <div class="container bg-body-secondary  rounded-2 p-5">
                        <div class="row mb-1">
                            <div class="col-6  p-1">
                                <div><label class="form-label">Name </label><sup><i class="bi bi-asterisk  text-danger" style="font-size:8px;"></i></sup></div>
                                <div>
                                    <input class="form-control" name="empname" id="empname" placeholder="John">
                                </div>
                            </div>
                            <div class="col-6  p-1">
                                <div>
                                    <label class="form-label">Your email</label>
                                    <sup><i class="bi bi-asterisk  text-danger" style="font-size:8px;"></i></sup>
                                </div>
                                <div>
                                    <input class="form-control " placeholder="abc@gmail.com" name="empemail" id="empemail">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6  p-1">
                                <div><label class="form-label">Password</label><sup><i class="bi bi-asterisk  text-danger" style="font-size:8px;"></i></sup></div>
                                <div>
                                    <input class="form-control " type="password" placeholder="Password" name="emppassword" id="emppassword">
                                </div>
                            </div>
                            <div class="col-6 p-1">
                                <div><label for="cname" class="form-label">Company name</label><sup><i class="bi bi-asterisk  text-danger" style="font-size:8px;"></i></sup></div>
                                <div>
                                    <input id="cname" class="form-control " placeholder="Enter Company Name" name="cmpname" id="cmpname">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6 p-1">
                                <div>Confirm password<sup><i class="bi bi-asterisk  text-danger p-3" style="font-size:8px;"></i></sup></div>
                                <div>
                                    <input type="password"class="form-control " placeholder="Password" >
                                </div>
                            </div>


                            <div class="col-6 p-1">
                                <div>Website<sup><i class="bi bi-asterisk  text-danger" style="font-size:8px;"></i></sup></div>
                                <input type="link" class="form-control " placeholder="https://domainname.com" name="cmpwebsite" id="cmpwebsite">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6  p-1">
                                <div>Description</div>
                                <textarea class="form-control  p-3" name="empdescription" id="empdescription"></textarea>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-2 offset-5">
                                <button class="btn btn-primary"name="submit" value="EREGISTRATION">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>

        </div>
 
    </body>
</html>
