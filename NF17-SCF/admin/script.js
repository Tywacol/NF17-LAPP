var vers_menu = document.getElementsByClassName('menu');
var vers_ajout_gare = document.getElementsByClassName('ajout_gare');

for (var i = 0; i < vers_menu.length; i++) {
vers_menu[i].addEventListener('click', () => {
  window.location = "admin.html";
});
}

for (var i = 0; i < vers_ajout_gare.length; i++) {
vers_ajout_gare[i].addEventListener('click', () => {
  window.location = "ajout_gare.html";
});
}
