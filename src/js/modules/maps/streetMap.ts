import "leaflet";

export default function streetMap() {
    // const coords = [45.42080767307064, 11.285030639883836];
    const coords = [42.73098978413411, -71.42441090169454];

    const marker_url = 'ie-finsweet';
    const addressText = '8 Brewery Drive, Hudson, NH 03051 USA';

    let map = L.map('map').setView(coords, 17);

    let myIcon = L.icon({
        iconUrl: '/wp-content/themes/' + marker_url + '/assets/i/static/map-icon.png',
        iconSize: [38, 38],
        iconAnchor: [38, 38],
        shadowSize: [68, 95],
        shadowAnchor: [22, 94]
    });

    L.marker(coords, {icon: myIcon})
        .bindTooltip(addressText, {
            direction: 'right',
            offset: [-10, -30],
            permanent: false,
        })
        .addTo(map)

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 24,
        attribution:
            '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);
}

