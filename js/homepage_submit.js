$(document).ready(function () {
    $('#loggedin_submit').submit(function() {
        var url = "homepage_submit.php";
        var data = $('#loggedin_submit').serialize();
        $.ajax(url, {
            data: data,
            success: status_uploaded,
            error: on_error,
            type: "POST"
        });
        return false;
    });

 });   

var status_uploaded= function (data) {
    data = JSON.parse(data);

    if (data.success) {
         alert(data.message);
        window.location.href = "homepage.php";
    } else {
        alert(data.message);
    }
};



var on_error = function () {
    alert("something went wrong");
};
