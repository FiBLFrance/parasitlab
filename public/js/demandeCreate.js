!function(e){var t={};function a(i){if(t[i])return t[i].exports;var n=t[i]={i:i,l:!1,exports:{}};return e[i].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=e,a.c=t,a.d=function(e,t,i){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(a.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(i,n,function(t){return e[t]}.bind(null,n));return i},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/",a(a.s=33)}({2:function(e,t){o();var a=$("#choixDestFact").data("factureto");$("#facture").val(a);var i=$("#choixDestFact").data("facturetotype");$(".destfact").each((function(e,t){t.id.split("_")[1]==i?$("#"+t.id).addClass("active").removeClass("notActive").attr("selected","selected"):$("#"+t.id).removeClass("active").addClass("notActive").removeAttr("selected")}));var n=$("#choixDestFact").data("eleveur"),r=$("select[name=tovetouser_id] option:selected").val();function o(){if(0==$("select[name=tovetouser_id]").val()){if($("#type_veterinaire").hide(),$("#type_veterinaire").attr("selected")){var e=$("#choixDestFact").data("eleveur");$("#facture").val(e),$("#type_veterinaire").removeClass("active").addClass("notActive").removeAttr("selected"),$("#type_laboratoire").removeClass("active").addClass("notActive").removeAttr("selected"),$("#type_eleveur").removeClass("notActive").addClass("active").attr("selected","selected")}}else $("#type_veterinaire").show()}$("#type_laboratoire").attr("data-title",0),$("#type_veterinaire").attr("data-title",r),$("#type_eleveur").attr("data-title",n),$("select[name=tovetouser_id]").on("change",(function(){o();var e=$("select[name=tovetouser_id] option:selected").val();$("#type_veterinaire").attr("data-title",e),$("#type_veterinaire").attr("selected")&&$("#facture").val(e)})),$("#choixDestFact a").on("click",(function(){var e=$(this).data("title"),t=$(this).data("toggle");$("#"+t).prop("value",e),$('a[data-toggle="'+t+'"]').not('[data-title="'+e+'"]').removeClass("active").addClass("notActive").removeAttr("selected"),$('a[data-toggle="'+t+'"][data-title="'+e+'"]').removeClass("notActive").addClass("active").attr("selected","selected")}))},3:function(e,t){function a(e,t,a){$(".date_alerte").hide(),Date.now()-e<0?$(t+"_futur").show():($(t+"_ok").show(),$("#anatypeSelect").length&&$(a).removeAttr("disabled").focus())}function i(e){var t=new Date($(e).attr("date")),a=("0"+t.getDate()).slice(-2),i=("0"+(t.getMonth()+1)).slice(-2),n=t.getFullYear()+"-"+i+"-"+a;$(e).val(n)}function n(){if(""!==$("#prelevement").val()&&""!==$("#reception").val()){var e=Date.parse($("#prelevement").val());Date.parse($("#reception").val())-e<0?($(".date_ok").hide(),$("#reception_prelevement").show()):$(".date_ok").show()}}$("#prelevement").on("change",(function(){$(".date_alerte").hide(),id_actuel="#"+$(this).attr("id"),a(Date.parse($(this).val()),id_actuel,"#reception"),n()})),$("#reception").on("change",(function(){$(".date_alerte").hide(),id_actuel="#"+$(this).attr("id"),a(Date.parse($(this).val()),id_actuel,"#anatypeSelect"),console.log($("#anatypeSelect").length),n()})),i("#"+$("#reception").attr("id")),i("#"+$("#prelevement").attr("id"))},33:function(e,t,a){e.exports=a(34)},34:function(e,t,a){a(35),a(36),a(2),a(3)},35:function(e,t){$("#userSelect").focus(),$(".liste_anatypes").hide(),$("#troupeauSelect").attr("disabled","disabled"),$("#anatypeSelect").attr("disabled","disabled"),$("#anaacteSelect").attr("disabled","disabled"),$("#prelevement").attr("disabled","disabled"),$("#reception").attr("disabled","disabled"),$("#nbPrelevements").attr("disabled","disabled"),$("#userSelect").val()||$("#especeSelect").attr("disabled","disabled");var a=window.location.protocol+"//"+window.location.host+window.location.pathname;function i(){0==$("select[name=veto_id]").val()?$("#type_veterinaire").hide():$("#type_veterinaire").show()}$("select[name='userDemande']").change((function(){if($(".listeSerie").remove(),"Nouveau"==$("select[name='userDemande'] > option:selected").val()){var e=$("select[name='userDemande'] > option:selected"),t=a.replace("demandes","user");$.confirm({theme:"dark",type:"red",typeAnimated:"true",title:e.attr("titre"),content:e.attr("texte"),buttons:{oui:{text:"oui",btnClass:"btn-red",action:function(){window.location=t,$("#especeSelect").removeAttr("disabled").focus()}},non:function(){}}})}else $("#userSelect > options:selected").attr("id"),$(this).removeClass("is-invalid").addClass("is-valid"),$("#especeSelect").removeAttr("disabled").focus()})),$("#especeSelect").on("change",(function(){var e=$("#userSelect").val();$("#especeSelect > option:selected").attr("id");var t=$("#especeSelect > option:selected").attr("id");$(this).addClass("is-valid"),$("#troupeauSelect").removeAttr("disabled").focus(),function(e,t){var i=a.replace("laboratoire/demandes/create","api/troupeau/"+e+"/"+t);$.get({url:i}).done((function(e){var t=JSON.parse(e);if($(".listeTroupeau").remove(),t.length>0){var a="";$.each(t,(function(e,t){a+='<option value="'+t.id+'" class="listeTroupeau" required>'+t.nom+"</option>"})),$("#troupeauSelect").append(a)}else $('#troupeauSelect option[value="nouveau"]').prop("selected",!0),$("#troupeauSelect").trigger("change")})).fail((function(e){console.log(e)}))}(e,t),function(e){var t=a.replace("laboratoire/demandes/create","api/anatypes/"+e);$.get({url:t}).done((function(e){var t=JSON.parse(e);$(".liste_anatypes").hide(),$.each(t,(function(e,t){$("#anatypes_"+t).show()}))})).fail((function(e){console.log("il y a une erreur "+e)}))}(t)})),$("#troupeauSelect").on("change",(function(){$("#prelevement").removeAttr("disabled").focus(),$("#reception").removeAttr("disabled")})),$("#anatypeSelect").on("change",(function(){$("#anaacteSelect").removeAttr("disabled").focus()})),$("#anaacteSelect").on("change",(function(){$("#nbPrelevements").removeAttr("disabled").focus()})),i(),$("select[name=veto_id]").on("change",(function(){i()})),$("#choixDestFact a").on("click",(function(){var e=$(this).data("title"),t=$(this).data("toggle");$("#"+t).prop("value",e),$('a[data-toggle="'+t+'"]').not('[data-title="'+e+'"]').removeClass("active").addClass("notActive"),$('a[data-toggle="'+t+'"][data-title="'+e+'"]').removeClass("notActive").addClass("active")}))},36:function(e,t){var a=window.location.protocol+"//"+window.location.host+window.location.pathname,i=$("#anatypeSelect > option:selected").val();function n(e){$("#premierPrelevementSerie").val(null),$("#estSerie").addClass("d-none"),$(".listeSerie").remove();var t=$("#especeSelect").children("option:selected").attr("id"),i=a.replace("laboratoire/demandes/create","api/anaactes/"+e+"/"+t);$("#anaacteSelect").children().remove(),$.get({url:i}).done((function(e){try{var t=JSON.parse(e),a='<option value="" disabled selected>Choisir une option ...</option>';$.each(t,(function(e,t){var i;a+='<option value="'+t.id+'">'+(((i=t.nom)+"").charAt(0).toUpperCase()+i.substr(1)+"</option>")})),$("#anaacteSelect").append(a),1==t.length&&($("#anaacteSelect").children().attr("selected","selected").trigger("change"),r($("#anaacteSelect > option:selected").val(),$("#userSelect > option:selected").attr("id")))}catch(e){}}))}function r(e,t){var i=a.replace("laboratoire/demandes/create","api/estSerie/"+e+"/"+t);$.get({url:i,data_type:"json"}).done((function(e){$("#premier").empty();var t=JSON.parse(e);if(1==t.estSerie)if($("#estSerie").removeClass("d-none"),$("#premierPrelevementSerie").val("premier"),0!=t.nbDemandes){$("#pas_de_serie").hide(),$("#y_a_serie").show();for(var a=0;a<t.nbDemandes;a++)$("#premier").append('<div class="form-check"><input type="radio" class="form-check-input"  id="premierPrelevementSerie" name="serie" value="null" checked ><label class="form-check-label" for="premierPrelevementSerie">'+$("#premier_envoi").attr("texte")+'</label></div><div class="form-check mt-2"><input type="radio" class="form-check-input" id="serie_'+t[a].id+'" name="serie" value="'+t[a].id+'"><label class="form-check-label" for="demande_id">'+$("#autre").attr("texte")+" "+t[a].date_reception+"</label></div>")}else $("#y_a_serie").hide(),$("#pas_de_serie").show();else $("#premierPrelevementSerie").val(null),$("#estSerie").addClass("d-none"),$(".listeSerie").remove()})).fail((function(e){console.log(e)}))}null==i&&n(i),$("#anatypeSelect").on("focus",(function(){""==$("#userSelect > option:selected").val()&&($(this).addClass("is-invalid"),$("#typeAlerte").show(),$("#userSelect").focus())})),$("#anatypeSelect").on("change",(function(){n($(this).children("option:selected").val()),$(this).addClass("is-valid"),$("#anaacteSelect").focus()})),$("select[name='anaacte_id'] ").on("change",(function(){$(".listeSerie").remove(),r($("#anaacteSelect > option:selected").val(),$("#userSelect > option:selected").attr("id"))}))}});
//# sourceMappingURL=demandeCreate.js.map