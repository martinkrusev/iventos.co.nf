// JavaScript Document
    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(40.656681,-7.914328),
        zoom: 15,
        mapTypeId: 'roadmap',
		disableOverlay:true,
		navigationControl: false,
    	mapTypeControl: false,
    	scaleControl: false,
    	draggable: true,
		disableDoubleClickZoom: true,
		disableDefaultUI:true,
		scrollwheel:false
      });
      var infoWindow = new google.maps.InfoWindow;

var marker;
function placeMarker(location) {
  if ( marker ) {
    marker.setPosition(location);
  } else {
    marker = new google.maps.Marker({
      position: location,
      map: map
    });
  }
}
	  
	google.maps.event.addListener(map, 'click', function( event ){
		//alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
		document.getElementById('lat').value=event.latLng.lat();
		document.getElementById('lng').value=event.latLng.lng();
		placeMarker(event.latLng);
	  });
}
