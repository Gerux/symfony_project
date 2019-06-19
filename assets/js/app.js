import $ from 'jquery';

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

$('#nav-login').click(function(){
    showLogin();
});

$('.exit-login').click(function(){
    hideLogin();
});

function showLogin(){
    $('.login-popup').css('display', 'flex');
}

function hideLogin(){
    $('.login-popup').css('display', 'none');
}