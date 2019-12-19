<?php
namespace App\Fournisseurs;

use App\Fournisseurs\ListeFournisseur;

use App\Models\Productions\Demande;

use App\Http\Traits\FormatDate;

/**
 *  FOURNIT LES DATAS POUR L'AFFICHAGE DE LA LISTE DES DEMANDES D'UN ELEVEUR DANS index.blade.php
 */
class ListeDemandesEleveurFournisseur extends ListeFournisseur
{

  use FormatDate;

  public function creeliste($demandes)
  {
    $this->liste = collect();

    foreach ($demandes as $demande) {

      $description = [];

      $analyse = $this->lienFactory($demande->id, $demande->anapack->nom, 'demandes.show', 'Cliquer pour voir le détail de la demande');

      if(isset($demande->serie_id)) {

        $serie = $this->lienFactory($demande->serie->id, "n°".$demande->serie->id, 'serie.show', 'Cliquer pour voir la série');

      }
      else {

        $serie = $this->itemFactory('','');

      }

      $espece = $this->iconeFactory($demande->espece->icone);

      $toveto = $this->lienFactory($demande->veto->user->id, $demande->veto->user->name, 'vetoAdmin.show', "Cliquer pour afficher le vétérinaire");

      $reception = $this->itemFactory(null, $this->dateSortable($demande->date_reception));

      $terminee = $this->ouinonFactory(null, $demande->acheve);

      $facture = $this->lienFactory($demande->facture->id, "n°".$demande->facture->id, 'home', "Cliquer pour afficher la facture");

      $suppr = $this->delFactory($demande->id, 'demandes.destroy');

      $description = [
        $analyse,
        $serie,
        $espece,
        $toveto,
        $reception,
        $terminee,
        $facture,
        $suppr,
      ];

      $this->liste->put($demande->id, $description);
    }

    return $this->liste;

  }
}
