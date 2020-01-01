// Destiné à afficher le détail du formulaire de création d'un utilisateur
// Après la saisie des informations communes à tous les utilisateurs, en cliquant sur le bouton "Continuer"
//
$('#userCreateForm').on('submit', function(e) {

  e.preventDefault(); // évite d'envoyer le formulaire


  var saisie = $(this).serialize(); // serialize les données du formulaire

  var url_actuelle = window.location.protocol + "//" + window.location.host + window.location.pathname; // récupère l'adresse de la page actuelle

  var url_store = url_actuelle.replace('/create', ''); // remplace cette adresse par l'adresse correspondant à la méthode store

  $.post({ // envoi une requete ajax pour stocker les données communes du nouvel utilisateur

    url: url_store,
    dataType : 'html',
    data: saisie,
  })
    .done(function(data){

      var donnees = JSON.parse(data); // on récupère trois type d'infos: le nouvel user, son mot de passe et son usertype

  //######################################
      // ON RECUPERE L'usertype POUR POUVOIR AFFICHER LE FORMULAIRE CORRESPONDANT
      var usertype_code = donnees.usertype.code; // code de l'usertype du nouvel user

      var form = '#'+usertype_code+"CreateForm"; // création des variables pour modifier userCreate.blade.php

      $(form).removeClass('d-none'); // On fait afficher le formulaire correspondant au type d'utilisateur
  //#####################################

  //####################################
      // ON MASQUES LES ELEMENTS DU FORMULAIRE INITIAL ET ON DONNE LE FOCUS AU CHAMP address_1 SI IL EXISTE
      $('#enregistreAnnule').addClass('d-none'); // Masque les bouton poursuivre et annuler

      $('#titreCreationUser').removeClass('d-flex').addClass('d-none'); // Masque le titre

      $('#inputUsertype').addClass('d-none'); // Masque le choix du type d'éleveur

      $('#identite').addClass('d-none'); // Masque les champs nom et email

      $('input[name = "address_1"]').focus()
  //####################################
      })
      .fail(function(data) { // et si ça merde ...

        alert("Désolée, un problème est arrivé à l'enregistrement du nouvel utilisateur. \n\nAppelez Bouiboui !");

      });

})