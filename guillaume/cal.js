var month = 1;

function showCalendar(month) {
  var cal = document.getElementsByClassName('cal');
  var calendrier = document.getElementById(month.toString());
  for (var i = 0; i < cal.length; i++) {
    cal[i].classList.remove('selected');
  }
  calendrier.classList.add('selected');
}

function changeCal(sens) {
  if (sens == 1 && month < 12) {
    month++;
  } else if (sens == -1 && month > 1) {
    month--;
  }
  showCalendar(month);
}

function refreshCal(e) {
  var events = document.getElementsByClassName('event');
  for (var i = 0; i < events.length; i++) {
    if (events[i].getAttribute('calendrier') == e.getAttribute('calendrier')) {
      events[i].classList.toggle('hidden');
    }
  }
}

showCalendar(month);
