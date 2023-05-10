/*Mapa de leaflet en la página sobre nosotros*/

var map = L.map('map').setView([36.7196, -4.42002], 13);
var marker = L.marker([36.7196, -4.45002]).addTo(map);
var popup = L.popup()
    .setLatLng([36.7250, -4.45002])
    .setContent("¡Estamos aquí!")
    .openOn(map);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 13,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);