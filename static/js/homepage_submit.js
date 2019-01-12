$(document).ready(function () {
    $('#loggedin_submit').submit(function() {
        var url = "/social_media/index.php/home/homepage_submit";
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
        window.location.href = "/social_media/index.php/home/index";
    } else {
        alert(data.message);
    }
};



var on_error = function () {
    alert("something went wrong");
};
