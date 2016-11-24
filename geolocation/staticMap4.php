<!DOCTYPE html>

<html>

<head>

    <title>Static Map</title>

    <script type="text/javascript">

        window.onload = function()

        {

            if (navigator.geolocation)

            {

                navigator.geolocation.getCurrentPosition(onSuccess, onError);

            }

        };

        function onSuccess(position)

        {

            var currentLat = position.coords.latitude;

            var currentLong = position.coords.longitude;

            var latlong = currentLat + "," + currentLong;

            var mapUrl = "https://maps.googleapis.com/maps/api/staticmap?center=" + latlong + "&zoom=17&size=600x500&maptype=roadmap&key=AIzaSyDuECh_YoiNk2yA38hAhUwHNfV1qs8fEIk";

            document.getElementById("staticmap").innerHTML = "<img src='" + mapUrl + "'>";

        }

        function onError(error)

        {

            switch(error.code)

            {

                case PERMISSION_DENIED:

                    alert("User denied permission");

                    break;

                case TIMEOUT:

                    alert("Geolocation timed out");

                    break;

                case POSITION_UNAVAILABLE:

                    alert("Geolocation information is not available");

                    break;

                default:

                    alert("Unknown error");

                    break;

            }

        }

    </script>

</head>

<body>

<div id="staticmap" style="width:600px;height:500px;"></div>

</body>

</html>