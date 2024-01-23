$(function () {
    $('#submit').click(function () {
        var email = $('#empemail').val();
        var password = $('#emppassword').val();
        $.ajax({
            type: 'post',
            url: 'backend_functions.php',
            data: {
                email: email,
                password: password,
                submit: 'EMPLOGIN'
            },
            success: function (response) {
                var info = $.parseJSON(response);
                if (info.status == 0) {
                    $('#logstatus').html(info.message).css({color: 'red'});
                } else {
                    window.location = 'Job_posting_form.php';
                }
            }
        });
    });


    $('#applybtn').click(function () {
        var btntag = $(this);
        var jobid = $(this).attr('jobid');
        var userid = $(this).attr('userid');
        $.ajax({
            type: 'post',
            url: 'backend_functions.php',
            data: {
                jobid: jobid,
                userid: userid,
                submit: 'APPLYJOB'
            },
            success: function (resp) {
                var info = $.parseJSON(resp);
                if (info.status == 1) {
                    alert(info.message);
                    $(btntag).text('Applied');
                    $(btntag).removeAttr('id');
                    $(btntag).removeClass('btn-danger');
                    $(btntag).addClass('btn-success');
                } else {
                    alert(info.message);
                }
            }
        });
    });

});
