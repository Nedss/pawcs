function suppression() {
  var checkBox = document.getElementsByTagName('input');
  console.log(checkBox);
  var requete = new XMLHttpRequest();
  requete.open("POST", "/Cours/TechnoWeb/PROJET/pawcs/php/suppression.php");
  requete.send(checkBox);
  requete.addEventListener('load', function(){
    alert("Annonce(s) supprimée(s) !");
  });
};
