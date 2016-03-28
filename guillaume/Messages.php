<?php

if(isset($_GET['update'])) {
  updateList($_GET['update']);
}
if (isset($_GET['send'])) {
  $msg = $_GET['send'];
  $user = $_GET['user'];
  sendMessage($msg, $user);
}

function db()
{
  // url du serveur
  $servername = "localhost";
  // Nom d'utilisateur Base de données
  $username = "root";
  // MDP utilisateur
  $password = "";
  // Nom de la base de donnée
  $dbname = "websiteTest";

  return mysqli_connect($servername, $username, $password, $dbname);

}

// affiche la liste de tout les messages
function updateList($user)
{
  $sql = "SELECT * FROM message";
  $result = mysqli_query(db(), $sql);
  if (mysqli_num_rows($result) == 0) {
    echo "aucun messages";
  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['user'] == $user) {
        echo "<div class='sent'><p class='content' title='{$row['date']}'>{$row['msg']}</p><div class='icon'>me</div></div>";
      } else {
        echo "<div class='received'><div class='icon'>people</div><p class='content' title='{$row['date']}'>{$row['msg']}</p></div>";
      }
    }
  }
}

function sendMessage($msg, $user)
{
  echo $msg;
  echo $user;
  $co = db();
  $sql = "INSERT INTO message (msg, date, user) VALUES ('$msg', NOW(), '$user') ";
  if (!$co->query($sql)) {
    echo "tamere";
    echo $co->error;
  }
}
