<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recherche avancée</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <h1>Recherche avancée</h1>
    <div class="search-advanced">
      <div class="input" onclick="trigger()">
        <ul>
          <li><div class="block sport">
            football
          </div></li>
          <li><div class="block lieu">
            Paris
          </div></li>
          <li><textarea id="search-input" onkeydown="search(event, this)" rows="1"></textarea></li>
        </ul>
      </div>
      <div class="result">

      </div>
    </div>
    <script src="adv-search.js" charset="utf-8"></script>
  </body>
</html>
