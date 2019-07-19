require('../css/app.scss');
require('slick-carousel');
require('leaflet');

console.log('Hello Webpack Encore');
const $ = require('jquery');

$(document).ready(function () {
    $('.carouselGalerie').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
    });
});
// insertion map interactive
//definition des coordonnées
var lat = 44.837789;
var lon = -0.57918;
var macarte = null;

// Fonction d'initialisation de la carte
function initMap() {
    var iconBase = '/build/images/logo.png'; //dossier de l'icon
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    //définition des caractéristiques l'icone
    var myIcon = L.icon({
        iconUrl: iconBase,
        iconSize: [50, 50],
        iconAnchor: [25, 50],
        popupAnchor: [-3, -76],
    });
    var marker = L.marker([lat, lon], {icon: myIcon}).addTo(macarte);
}

// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
window.onload = function() {
    initMap();
};

