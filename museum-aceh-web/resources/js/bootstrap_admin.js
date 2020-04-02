
window._ = require('lodash');


window.slugify = require('slugify');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) { }
