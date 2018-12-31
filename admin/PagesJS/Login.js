AllClickFunction();
KeyEnter();
function AllClickFunction() {
    $('.btnLogin').click(function () {

        var Email = $('.txtEmail').val();
        var Password = $('.txtPassword').val();

        Login(Email, Password);
    });

    $('#btnLogout').click(function () {
        alert('click');
        Logout();
    });

}

function KeyEnter() {
    $(document).keypress(function (e) {
        if (e.which == 13) {
            $(".btnLogin").click();
        }
    });
}

function Login(Email, Password) {
    var request = $.ajax({
        method: "POST",
        url: "DatabaseFiles/Login.php?action=Login",
        data: { "Email": Email, "Password": Password }
    });
    request.done(function (data) {

        var res = JSON.parse(data);


        res = res.split('|');

        if (res[0] == "Success") {
            setCookie('RoleId', res[1], 1);
            window.location = "Pages/Dashboard.php";
        }
        else {
            showError('Incorrect Email or Password!');
        }
    });
    request.fail(function (jqXHR, textStatus) {
        console.log(textStatus);

    });
}


