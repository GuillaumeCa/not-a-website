<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../style.css">
  <title>Recherche lieu</title>
</head>
<body>
  <h1>Recherche villes en France</h1>
  <div class="search">
    <input id="search" type="text" name="search" value="" onkeyup="getresults(this.value, event); out(event)" autocomplete="off" onfocus="showsearch()" spellcheck="false">
    <p id="results">
      taper pour rechercher...
    </p>
  </div>
  <script src="recherche.js" charset="utf-8"></script>
</body>
</html>
