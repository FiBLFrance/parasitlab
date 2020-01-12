<?php
namespace App\Fournisseurs;

use App\Fournisseurs\ListeFournisseur;

use App\Models\Productions\Demande;

use App\Http\Traits\FormatDate;

/**
 *  FOURNIT LES DATAS POUR L'AFFICHAGE DE LA LISTE DES DEMANDES D'UN ELEVEUR DANS index.blade.php
 */
class ListeDemandesVetoFournisseur extends ListeFournisseur
{

  use FormatDate;

  public function creeliste($demandes)
  {
    $this->liste = collect();

    foreach ($demandes as $demande) {

      $description = [];

      $eleveur = $this->lienFactory($demande->user_id, $demande->user->name, 'eleveurAdmin.show', "Cliquer pour afficher cet éleveur");

      $analyse = $this->lienFactory($demande->id, $demande->anapack->nom, 'demandes.show', "Cliquer pour afficher cette demande d'analyse");

      if(isset($demande->serie_id)) {

        $serie = $this->lienFactory($demande->serie->id, "n°".$demande->serie->id, 'serie.show', "Cliquer pour afficher cette série");

      }
      else {

        $serie = $this->itemFactory('');

      }

      $espece = $this->iconeFactory($demande->espece->icone);

      $reception = $this->itemFactory($this->dateSortable($demande->date_reception));

      $terminee = $this->ouinonFactory($demande->id, $demande->acheve);

      $description = [
        $eleveur,
        $analyse,
        $serie,
        $espece,
        $reception,
        $terminee,
      ];

      $this->liste->put($demande->id, $description);
    }

    return $this->liste;

  }
}
