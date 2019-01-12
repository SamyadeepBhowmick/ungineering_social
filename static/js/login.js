$(document).ready(function () {
    $('#register_form').submit(function() {
        var url = "/social_media/index.php/login/register_submit";
        var data = $('#register_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });

    $('#login_form').submit(function() {
        var url = "/social_media/index.php/login/login_submit";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "/social_media/index.php/home/index";
    } else {
        alert(data.message);
    }
};

var login_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "/social_media/index.php/home/index";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
