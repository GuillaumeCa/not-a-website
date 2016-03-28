<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messagerie instantanée</title>
    <link rel="stylesheet" href="chat.css" charset="utf-8">
  </head>
  <body>
    <h1>Messagerie instantanée</h1>
    <div class="connexion">
      <input type="text" value="" placeholder="Entrez un pseudo pour commencer" id="pseudo" onchange="updateMessageList();autorefresh()" autocomplete="off" spellcheck="false">
    </div>
    <div class="messagerie">
      <div class="messages-area">

      </div>
      <div class="messages-input">
        <input id="msg" name="message" placeholder="type your message here">
        <button type="submit" onclick="createMessage()">Envoyer</button>
      </div>
    </div>


    <script type="text/javascript">

      pseudo = document.getElementById('pseudo');
      area = document.body.querySelector('.messages-area');
      content = document.getElementById('msg');

      area.onscroll = function () {
        if (area.scrollTop < maxheight) {
          clearInterval(timer);
          end = true;
        } else if (area.scrollTop == maxheight && end) {
          end = false;
          autorefresh();
        }
      }

      function autorefresh() {
        console.log('autorefresh');
        if (pseudo.value != "") {
          timer = window.setInterval(updateMessageList, 1000);
        }
      }

      content.onkeypress = function (e) {
        if (e.keyCode == 13) {
          createMessage();
        }
      }

      function createMessage() {
        sendMessage(content.value);
        content.value = '';
        updateMessageList();
        area.scrollTop = area.scrollHeight;
        maxheight = area.scrollTop;
      }

      function request(url, callback) {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function () {
          if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
              callback(httpRequest.responseText);
            } else {
              alert('There was a problem with the request.');
            }
          }
        };
        httpRequest.open("GET", url, true);
        httpRequest.send();
      }

      function updateMessageList() {
        if (pseudo.value != "") {
          var url = "Messages.php?update="+pseudo.value;
          request(url, function (response) {
            area.innerHTML = response;
          });
        } else {
          alert("Veuillez entrer un pseudo");
        }
        area.scrollTop = area.scrollHeight;
        maxheight = area.scrollTop;
      }

      function sendMessage() {
        if (content.value != "") {
          var url = "Messages.php?send="+content.value+"&user="+pseudo.value;
          request(url, function (response) {

          });
        }
      }
    </script>
  </body>
</html>
