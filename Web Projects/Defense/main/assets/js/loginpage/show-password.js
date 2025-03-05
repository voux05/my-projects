var passwordField = document.getElementById('password');
var showIcon = document.getElementById('show-icon');
var hideIcon = document.getElementById('hide-icon');

showIcon.addEventListener('click', function() {
    passwordField.type = 'text';
    showIcon.style.display = 'none';
    hideIcon.style.display = 'block';
});

hideIcon.addEventListener('click', function() {
    passwordField.type = 'password';
    showIcon.style.display = 'block';
    hideIcon.style.display = 'none';
})