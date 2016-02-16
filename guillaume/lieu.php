<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche lieu</title>
</head>
<body>
  <h1>recherche lieu avec completion AJAX</h1>
  <input type="text" name="search" value="" onkeyup="getresults(this.value)" autocomplete="off">
  <p id="results">

  </p>
  <script>
  function getresults(str) {
    if (str.length == 0) {
      document.getElementById("results").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("results").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "getlocation.php?l=" + str, true);
      xmlhttp.send();
    }
  }
  </script>
</body>
</html>
