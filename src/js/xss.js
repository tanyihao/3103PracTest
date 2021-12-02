function checkXSS() {
    var searchBox = document.getElementById("search");
    $.ajax({ // ajax form php validation
        url: 'button_process.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            action: 'checkXSS', formValue: search.value
        },
        success: function (data) {
            // If xss successful, clear input and remain on homepage
            if (data.success == true) {
                searchBox.value = "";
            } else {
                window.location = "dashboard.php";
            }
            return false;
        },
        error: function (request, status, error) {
            console.log(request);
            alert(status);
        },
        async: false
    });
    return false;   
}