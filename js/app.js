//var $ = require('jquery');
var $ = global.jQuery = global.$ = require('jquery');
require('bootstrap');
$('#test').hide();
$('li').addClass('test');
$('.dropdown-toggle').dropdown();
$('.carousel').carousel();