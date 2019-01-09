$(document).ready(function () {
    $('#dashboard2').submit(function() {
        var url = "dashboard_submit.php";
        var data = $('#dashboard2').serialize();
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
        window.location.href = "dashboard2.php"; 
    } else {
        alert(data.message);
    }
};
var on_error = function () {
    alert("something went wrong");
};
