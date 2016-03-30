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
      <input type="text" value="" placeholder="Entrez un pseudo pour commencer" id="pseudo" onblur="updateMessageList();autorefresh()" autocomplete="off" spellcheck="false">
    </div>
    <div class="messagerie">
      <div class="messages-area">

      </div>
      <div class="messages-input">
        <input id="msg" name="message" placeholder="Appuyez sur Entrée pour envoyer" autocomplete="off">
        <button type="submit" onclick="createMessage()">Envoyer</button>
      </div>
    </div>

  <script src="chat.js" charset="utf-8"></script>
  </body>
</html>
