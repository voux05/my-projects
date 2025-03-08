// var homeTag = document.querySelector('#home-tag');
// var dashboardTag = document.querySelector('#dashboard-tag');

// homeTag.addEventListener('click', function() {
//     homeTag.class = 'active';
//     homeTag.style.color = 'black';
//     dashboardTag.style.color = '';
// });

// dashboardTag.addEventListener('click', function() {
//     dashboardTag.class = 'active';
//     dashboardTag.style.color = 'black';
//     homeTag.style.color = '';
// });

var luzonDirect = document.querySelector('#luzon-direct');
var visayasDirect = document.querySelector('#visayas-direct');
var mindanaoDirect = document.querySelector('#mindanao-direct');

luzonDirect.addEventListener('click', function () {
    window.location.href = 'luzon-spots.html';
});

visayasDirect.addEventListener('click', function() {
    window.location.href = 'visayas-spots.html';
});

mindanaoDirect.addEventListener('click', function() {
    window.location.href = 'mindanao-spots.html';
});