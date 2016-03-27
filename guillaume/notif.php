<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notif Test</title>
  </head>
  <body>
    <h1>Test de notification</h1>
    <button type="button" onclick="notify()">Envoyer notification</button>
    <script type="text/javascript">

    Notification.requestPermission().then(function(result) {
      console.log(result);
    });

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


    </script>
  </body>
</html>
