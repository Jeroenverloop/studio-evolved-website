$( document ).ready(function() {
    resize();

    let lat = 52.0643;
    let long = 5.10858;
    var map = L.map('map').setView([lat,long], 18);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: '',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiamVyb2VudmVybG9vcCIsImEiOiJjanRoMTh5cjIwdDl4NGFycmNqb2theGk3In0.lT_uRMGshrIKCugYll9idw'
    }).addTo(map);
    L.marker([lat,long]).addTo(map);
});

$(window).resize(function(){
    resize();
});


function resize(){

    let container = $('.page');
    let menu = $('.menu');

    let contactFormWidth = (container.width()-menu.width())+15;
    if(contactFormWidth < container.width()*0.45){
        contactFormWidth = container.width()*0.45;
    }
    let infoWidth = 100;
    let contactDataWidth = container.width()-contactFormWidth-infoWidth;

    let credentials = $('.credentials')
    let companyData = $('.company-data');
    let message = $('.message');
    let map = $('.map');

    if(container.width() < 700){
        $('.info').css('display', 'none');
        $('.info').css('width', 0);
        $('.contact-form').css('width', container.width());
        $('.contact-data').css('width', container.width());

        credentials.css('height', 'auto');
        message.css('height', 200);
        credentials.css('margin-top', 20);
    }
    else{
        $('.info').css('display', 'block');
        $('.info').css('width', infoWidth);
        $('.contact-form').css('width', contactFormWidth);
        $('.contact-data').css('width', contactDataWidth);

        credentials.css('height', companyData.height()+40);
        message.css('height', map.height()+10);
        credentials.css('margin-top', 0);
    }






}
