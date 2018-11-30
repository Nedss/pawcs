document.addEventListener("DOMContentLoaded", function() {
  
  var divAnnonces = document.querySelector("#liste-annonces");
});
  function lireAnnonces() {
    var divAnnonces = document.querySelector("#liste-annonces");
    var requete = new XMLHttpRequest();
    requete.addEventListener("load", function() {
      var annonces = JSON.parse(this.responseText);
      var annoncesStructure = '';
      for (var i=0; i<annonces.length; i++) {
        annoncesStructure += "<div class='row border border-dark rounded m-2 text-center'>" +
          "<div class='col-4'>" +
          "<a href='" + annonces[i].photo + "' >" +
          "<img src='" + annonces[i].photo + "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />" +
          "</a>" +
          "</div>" + 
          "<div class='col-8 cell-align'>" +
          "<div>" +
          "<p>" + annonces[i].titre + "</p>" +
          "<p>" + annonces[i].categorie + "</p>" +
          "<p>" + annonces[i].prix + " euros </p>" +
          "<p>" + annonces[i].date_ajout + "</p>" +
          "</div>" +
          "</div>" +
          "</div>";
      }
      divAnnonces.innerHTML = annoncesStructure;
    });
    requete.open("GET", "get_info.php");
    requete.send();
    console.log("Ok")
    setInterval(lireAnnonces, 60000);
  }
  //setInterval(lireAnnonces, 3000);
  //lireAnnonces();

//});
