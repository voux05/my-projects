var getUser = document.querySelector('#username');
var getPass = document.querySelector('#password');

var signIn = document.querySelector('#sign-in-button');

signIn.addEventListener('click', function () {
    if (getUser.length == 0 || getPass.length == 0) {
        window.alert("Please fill up the fields.");
    } else if (getUser.value === "philip25" && getPass.value === "john16") {
        window.location.href = 'main.html';
    } else {
        window.alert("Username or Password wrong.");
    }
});

