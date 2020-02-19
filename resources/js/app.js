// require( './usertypes.js');
require('./bootstrap');

require( './bootstrap-table.min.js');
require( './bootstrap-table-accent-neutralise.min.js');
require( './bootstrap-table-locale-all.js');

require( './createUser.js');
require( './createDemande.js');
require( './signe.js');
require( './envoi.js');
require( './choisir.js');
require( './nbPrelevement.js');


require( 'jquery-confirm' );


$(function() {

  $('[data-toggle="tooltip"]').tooltip();

  $('#table').bootstrapTable({

  })


    $('.suppr').on('click', function(event) {
      event.preventDefault();
      var form_id = "#"+$(this).attr('id');
      $.confirm({
        theme : 'dark',
        type : 'red',
        typeAnimated: 'true',
        title: "Suppression",
        content : "Faut-il vraiment effectuer cette suppression ?",
        buttons : {
          oui: {
            text : 'oui',
            btnClass : 'btn-red',
            action : function() {
              $(form_id).submit();
            },
          },
          non: function() {

          }
        }
      })
    });

  $('#list-tab-eleveur a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});

  Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
  });
$('#reception').val(new Date().toDateInputValue());

$('.carousel').carousel();

envoiMail($('#envoiMail').is(':checked'));

$('#envoiMail').on('change', function() {

  envoiMail($('#envoiMail').is(':checked'));
})

function envoiMail(etat) {
  if(etat) {
    $('#imprimer').hide();
    $('#imprimerEnvoyer').show();
  }
  else {
    $('#imprimer').show();
    $('#imprimerEnvoyer').hide();
  }
}

});
