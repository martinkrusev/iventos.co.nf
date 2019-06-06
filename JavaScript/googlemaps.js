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

      // Change this depending on the name of your PHP file
      downloadUrl("xmlcreator.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var NomeEvento = markers[i].getAttribute("NomeEvento");
          var Morada = markers[i].getAttribute("Morada");
          var DataEvento = markers[i].getAttribute("DataEvento");
		  var DescEvento = markers[i].getAttribute("DescEvento");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<div class='EventoInfoWindow'><h3>" + NomeEvento + "</h3> <br/>" + Morada + "<br/>"+DataEvento+"<br/>"+DescEvento+"</div>";
          
          var marker = new google.maps.Marker({
            map: map,
            position: point,
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
