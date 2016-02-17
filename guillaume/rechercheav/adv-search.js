
function resizeInput(e) {
  e.size = e.value.length + 1;
}

input = document.getElementById("search-input");

function trigger() {
  input.focus();
}

function addfiltre(str) {
  var li = createElement('li');
}

function deletefilre() {
  if (input.parentElement.previousElementSibling)
  input.parentElement.previousElementSibling.remove();
}

function search(event, element) {
  if (event.keyCode == 8 && element.selectionStart == 0) {
    deletefilre()
  }
}
