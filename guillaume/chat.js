
pseudo = document.getElementById('pseudo');
area = document.body.querySelector('.messages-area');
content = document.getElementById('msg');

area.onscroll = function () {
  if (area.scrollTop < maxheight) {
    clearInterval(timer);
    clearInterval(timer1);
    end = true;
  } else if (area.scrollTop == maxheight && end) {
    end = false;
    autorefresh();
  }
}

function autorefresh() {
  if (pseudo.value != "") {
    timer = window.setInterval(updateMessageList, 1000);
    timer1 = window.setInterval(getDown, 1000);
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
  getDown();
}

function request(url, callback) {
  var httpRequest = new XMLHttpRequest();
  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        callback(JSON.parse(httpRequest.responseText));
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
    var url = "Messages.php?update="+pseudo.value+"&nb="+getNbOfMessages();
    request(url, function (response) {
      area.innerHTML += response['message'];
      if (response['new']) {
        var title = document.title;
        document.title = "1 Nouveau message";
        setTimeout(function () {
          document.title = title;
        }, 2000);
      }
    });
  } else {
    alert("Veuillez entrer un pseudo");
  }
  getDown();
}

function getDown() {
  area.scrollTop = area.scrollHeight;
  maxheight = area.scrollTop;
}

function getNbOfMessages() {
  return document.body.querySelectorAll('.messages-area > div').length;
}

function sendMessage() {
  if (content.value != "") {
    var url = "Messages.php?send="+content.value+"&user="+pseudo.value;
    request(url, function (response) {});
  }
}
