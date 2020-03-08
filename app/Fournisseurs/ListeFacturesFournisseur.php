<?php
namespace App\Fournisseurs;

use App\Fournisseurs\ListeFournisseur;
use App\Http\Traits\FormatDate;

/**
 *
 */
class ListeFacturesFournisseur extends ListeFournisseur
{

  use FormatDate;

  public function creeListe($factures)
  {
    $this->liste = collect();

    foreach ($factures as $facture) {

      $description = [];

      $num_facture = $this->lienFactory($facture->id, "n° ".$facture->id, 'factures.show', 'Cliquer pour afficher le détail de cette facture');

      $nom = $this->lienFactory($facture->user_id, $facture->user->name, 'eleveurAdmin.show', "Cliquer pour afficher cet éleveur");

      $faite_date = $this->itemFactory($this->dateSortable($facture->faite_date));

      $total_ht = $this->itemFactory($facture->total_ht);

      $total_ttc = $this->itemFactory($facture->total_ttc);

      $envoyee_date = $this->itemFactory($this->dateSortable($facture->envoyee_date));

      $payee = $this->ouinonFactory($facture->facture_id, $facture->payee);

      $payee_date = $this->itemFactory($this->dateSortable($facture->payee_date));

      $description = [
        $num_facture,
        $nom,
        $faite_date,
        $total_ht,
        $total_ttc,
        $envoyee_date,
        $payee,
        $payee_date,
      ];

      $this->liste->put($facture->facture_id, $description);
     }

     return $this->liste;
  }
}
