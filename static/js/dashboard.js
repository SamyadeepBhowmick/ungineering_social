$(document).ready(function () {
    $('#dashboard').submit(function() {
        var url = "/social_media/index.php/home/dashboard_submit";
        var data = $('#dashboard').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
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
        window.location.href = "/social_media/index.php/home/dashboard"; 
    } else {
        alert(data.message);
    }
};
var on_error = function () {
    alert("something went wrong");
};
