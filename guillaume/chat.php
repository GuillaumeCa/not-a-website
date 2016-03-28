<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messagerie instantanée</title>
    <style media="screen">
      .received::before {
        content: 'people: ';
        font-weight: bold;
      }
      .sent::before {
        content: 'me: ';
        font-weight: bold;
      }

      .messages-area {
        height: 300px;
        overflow: auto;
        border: grey solid 1px;
        padding: 10px;
      }
      p {
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <h1>Messagerie instantanée</h1>
    <div class="messagerie">
      <div class="messages-area">
        <p class="received">
          Slt!
        </p>
        <p class="sent">
          yo
        </p>
      </div>
      <div class="messages-input">
        <textarea id="msg" name="message" rows="1" cols="40" placeholder="type your message here"></textarea>
        <button type="submit" onclick="createMessage()">Envoyer</button>
      </div>
    </div>
    <script type="text/javascript">
      function createMessage() {
        var msg = document.createElement('p');
        var area = document.body.querySelector('.messages-area');
        var content = document.getElementById('msg');
        msg.classList.add('sent');
        msg.innerHTML = content.value;
        content.value = '';
        area.appendChild(msg);
        area.scrollTop = area.scrollHeight ;
      }
    </script>
  </body>
</html>
