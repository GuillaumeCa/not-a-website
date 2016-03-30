<?php

if(isset($_GET['update'])) {
  updateList($_GET['update'], $_GET['nb']);
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

  $co = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset($co,"utf8mb4");
  return $co;

}

// affiche la liste de tout les messages
function updateList($user, $nbmessages)
{
  $sql = "SELECT COUNT(*) FROM message";
  $result = mysqli_query(db(), $sql);
  $result = mysqli_fetch_all($result)[0][0];

  $DATA = ["new" => false, "message"=>""];

  if ($nbmessages < $result) {
    if ($nbmessages != 0) {
      $nbnew = $result - $nbmessages;
      $sql = "SELECT * FROM message ORDER BY date DESC LIMIT $nbnew";
      $result = mysqli_query(db(), $sql);
      $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
      $taille = count($messages);
      $message = $messages;

      for ($i=1; $i < $taille-1; $i++) {
        $messages[$i] = $message[$taille-$i];
      }

    } else {
      $sql = "SELECT * FROM message";
      $result = mysqli_query(db(), $sql);
      $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    foreach ($messages as $row) {
      if ($row['user'] == $user) {
        $DATA['message'] .= "<div class='sent'><p class='content' title='{$row['date']}'>{$row['msg']}</p><div class='icon'>me</div></div>";
      } else {
        $DATA['message'] .= "<div class='received'><div class='icon'>anonym</div><p class='content' title='{$row['date']}'>{$row['msg']}</p></div>";
        $DATA['new'] = true;
      }
    }
  }
  echo json_encode($DATA);
}

function sendMessage($msg, $user)
{
  $co = db();
  $sql = "INSERT INTO message (msg, date, user) VALUES ('$msg', NOW(), '$user') ";
  echo '{}';
  if (!$co->query($sql)) {
    echo $co->error;
  }
}
