var admin = document.getElementById('Admin');
var client = document.getElementById('Client');

admin.addEventListener('mouseover', () => {
  admin.style.cursor = "pointer";
});
client.addEventListener('mouseover', () => {
  client.style.cursor = "pointer";
});

//Direction
admin.addEventListener('click', () => {
  window.location = "http://www.google.fr";
});
client.addEventListener('click', () => {
  window.location = "http://www.google.fr";
});
