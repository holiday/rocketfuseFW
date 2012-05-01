<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <style type="text/css">
/*<![CDATA[*/
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
  /*]]>*/
  </style>
<script type="text/javascript">
    //<![CDATA[
    function initialize() {
        var myOptions = {
            center: new google.maps.LatLng(-34.397, 150.644),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
        

    }


    function loadScript() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAz5ctpGCckIixLESRUPAyELo3FeTSQ5ww&sensor=false&callback=initialize";
        document.body.appendChild(script);
    }

    window.onload = loadScript;
    //]]>
</script>

  <title></title>
</head>

<body>
  <div id="map_canvas" style="width:100%; height:100%"></div>
</body>
</html>
