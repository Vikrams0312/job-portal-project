<html>
    <head>
        <title>Jobseeker</title>
         <?php require_once 'css_files.php' ?>
    </head>
    <body>
        <div class="row p-5">
            <div class="col-4">
            </div>
             <?php require_once 'menu.php' ?>
            

            <div class="col-5 offset-4 bg-body-secondary p-5 rounded">
                <h2 class="text-primary text-center p-2">Job seeker Login</h2>
                <div class="p-1">
                    <label>Email:</label><span id="logstatus"></span>
                    <input type="email" class="form-control" name="semail" id="semail">
                </div>

                <div class="p-1">
                    <label>Password:</label>
                    <input type="Password" class="form-control" name="spassword" id="spassword">
                </div>
                <div class="p-3 col-2 offset-4">
                    <button type="button" class="btn btn-primary" id="submit">Submit</button>
                </div>
                <p>If you don't have account <a href='Job_seeker.php'>Click to Register</a></p>
            </div>
        </div>
          <?php require_once 'js_files.php' ?>
        <script>
            $(function () {
                $('#submit').click(function () {
                    var email = $('#semail').val();
                    var password = $('#spassword').val();
                    $.ajax({
                        type: 'post',
                        url: 'backend_functions.php',
                        data: {
                            email: email,
                            password: password,
                            submit: 'SLOGIN'
                        },
                        success: function (response) {
                            var info = $.parseJSON(response);
                            if (info.status == 0) {
                                $('#logstatus').html(info.message).css({color: 'red'});
                            }else{
                                window.location='index.php';
                            }
                        }
                    });
                });

            });
        </script>

    </body>
</html>