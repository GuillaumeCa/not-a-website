<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Recherche lieu</title>
</head>
<body>
  <h1>recherche lieu avec completion AJAX</h1>
  <div class="search">
    <input id="search" type="text" name="search" value="" onkeyup="getresults(this.value)" autocomplete="off" onfocus="showsearch()" spellcheck="false">
    <p id="results">
      taper pour rechercher...
    </p>
  </div>
  <script>
  function getresults(str) {
    if (str.length == 0) {
      document.getElementById("results").innerHTML = "taper pour rechercher...";
      document.getElementById("results").visible = "false";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("results").innerHTML = xmlhttp.responseText;
          document.getElementById("results").visible = "true";
        }
      };
      xmlhttp.open("GET", "getlocation.php?l=" + str, true);
      xmlhttp.send();
    }
  }

  function get(str) {
    document.getElementById('search').value = str;
  }
  function showsearch() {
    var search = document.getElementById('results');
    search.classList.add('visible');
  }

  function hidesearch(e) {
    var search = document.getElementById('search');
    var results = document.getElementById('results');
    if ( e.target != search && e.target != results ) {
      results.classList.remove('visible');
      console.log("remove");
    }
  }

  document.onclick = hidesearch;
  </script>
</body>
</html>
