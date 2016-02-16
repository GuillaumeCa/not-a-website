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
    <input id="search" type="text" name="search" value="" onkeyup="getresults(this.value)" autocomplete="off" onclick="dispsearch()" onblur="dispsearch()">
    <p id="results">

    </p>
  </div>
  <script>
  function getresults(str) {
    if (str.length == 0) {
      document.getElementById("results").innerHTML = "";
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
  function dispsearch(e) {
    var search = document.getElementById('results');
    search.classList.toggle('visible');
  }
  </script>
</body>
</html>
