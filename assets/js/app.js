require('../css/app.scss');
require('slick-carousel');

console.log('Hello Webpack Encore');
const $ = require('jquery');

$(document).ready(function () {
    $('.carouselGalerie').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
    });
});


