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
    	draggable: false,
		disableDoubleClickZoom: true,
		disableDefaultUI:true,
		scrollwheel:false
      });
      var infoWindow = new google.maps.InfoWindow;
	  
	  
	  var myLatlng = new google.maps.LatLng(40.656681,-7.914328);
	  var marker = new google.maps.Marker({
    	position: myLatlng,
    	map: map,
    	title:"iVentos",
		animation:google.maps.Animation.BOUNCE});
		
	  var contentString = '<div class="InfoWindowContent">'+
      '<h1>Bem Vindos ao iVentos</h1>'+
      '<div class="InfoWindowBody">'+
      '<h3><b>iVentos</b>, um site de criacao e gestao de Eventos culturais e desportivos em Viseu</h3>' +
      '<p class="footer">Criado por Martin Krusev,Eladio Branco e Daniel Louro</p>'+
      '</div>'+
      '</div>';
	  var infowindow = new google.maps.InfoWindow();
		infowindow.setContent(contentString);
		infowindow.open(map, marker);
	}