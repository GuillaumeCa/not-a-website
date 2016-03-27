<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notif Test</title>
  </head>
  <body>
    <h1>Test de notification</h1>
    <button type="button" onclick="notify()">Envoyer notification</button>
    <button type="button" onclick="clearInterval(timer)">Stop notif</button>
    <input type="range" name="name" value="5" min="5" max="30" oninput="this.nextSibling.innerHTML = this.value"><label class="range-lb">5</label>
    <h2>Ta position :)</h2>
    <div class="location">

    </div>
    <script type="text/javascript">

    if (Notification.permission !== "granted")
      Notification.requestPermission();

    navigator.geolocation.getCurrentPosition(function (position) {
      document.body.querySelector('.location').innerHTML = '<img src="https://maps.googleapis.com/maps/api/staticmap?center='+position.coords.latitude+','+position.coords.longitude+'&zoom=15&size=500x500&sensor=false" alt="" />';
      console.log('latitude',position.coords.latitude);
      console.log('longitude',position.coords.longitude);
    })

    function spawnNotification(theBody,theIcon,theTitle) {
      var options = {
          body: theBody,
          icon: theIcon
      }
      var n = new Notification(theTitle,options);
    }

    function notify() {
      spawnNotification("Test de notification","", "Slt");
    }

    function getTimeRemaining(endtime){
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor( (t/1000) % 60 );
      var minutes = Math.floor( (t/1000/60) % 60 );
      var hours = Math.floor( (t/(1000*60*60)) % 24 );
      var days = Math.floor( t/(1000*60*60*24) );
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    /*var timer = window.setInterval(function () {
      var time = getTimeRemaining("2016/03/28");
      spawnNotification("","","Il reste " + time.hours + "h" + time.minutes + " " + time.seconds + "s");
    }, 1000);*/

    </script>
  </body>
</html>
