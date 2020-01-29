<?php

use Illuminate\Database\Seeder;

class DemandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demandes')->insert([
          [
            'id' => 1,
            'user_id' => 3,
            'espece_id' => 2,
            'nb_prelevement' => 3,
            'anapack_id' => 1,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => false,
            'date_prelevement' => "2019-11-06 00:00:00",
            'date_reception' => "2019-11-06 00:00:00",
            'date_resultat' => null,
            'date_envoi' => null,
            'date_signature' => null,
            'signe' => false,
            'labo_id' =>null,
            "facture_id" => 4,
          ],
          [
            'id' => 2,
            'user_id' => 3,
            'nb_prelevement' => 2,
            'espece_id' => 3,
            'anapack_id' => 5,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => false,
            'date_prelevement' => null,
            'date_reception' => "2019-11-08 00:00:00",
            'date_resultat' => null,
            'date_envoi' => null,
            'date_signature' => null,
            'signe' => false,
            'labo_id' =>null,
            "facture_id" => 5,
          ],
          [
            'id' => 3,
            'user_id' => 3,
            'nb_prelevement' => 1,
            'espece_id' => 4,
            'anapack_id' => 1,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => true,
            'date_prelevement' => "2019-11-01 00:00:00",
            'date_reception' => "2019-11-02 00:00:00",
            'date_resultat' => "2019-11-06 00:00:00",
            'date_envoi' => "2019-11-06 00:00:00",
            'date_signature' => "2019-11-06 00:00:00",
            'signe' => true,
            'labo_id' => 1,
            "facture_id" => 1,
          ],
          [
            'id' => 4,
            'user_id' => 6,
            'nb_prelevement' => 1,
            'espece_id' => 4,
            'anapack_id' => 3,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => true,
            'date_prelevement' => "2019-11-02 00:00:00",
            'date_reception' => "2019-11-02 00:00:00",
            'date_resultat' => "2019-11-05 00:00:00",
            'date_envoi' => "2019-11-05 00:00:00",
            'date_signature' => "2019-11-05 00:00:00",
            'signe' => true,
            'labo_id' => 2,
            "facture_id" => 2,
          ],
          [
            'id' => 5,
            'user_id' => 7,
            'nb_prelevement' => 2,
            'espece_id' => 5,
            'anapack_id' => 1,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 0,
            'veto_id' => null,
            'acheve' => true,
            'date_prelevement' => "2019-11-03 00:00:00",
            'date_reception' => "2019-11-03 00:00:00",
            'date_resultat' => "2019-11-06 00:00:00",
            'date_envoi' => "2019-11-09 00:00:00",
            'date_signature' => "2019-11-06 00:00:00",
            'signe' => true,
            'labo_id' => 1,
            "facture_id" => 3,
          ],
          [
            'id' => 6,
            'user_id' => 7,
            'nb_prelevement' => 3,
            'espece_id' => 3,
            'anapack_id' => 2,
            'serie_id' => null,
            'informations' => null,
            'toveto' => 0,
            'veto_id' => null,
            'acheve' => true,
            'date_prelevement' => null,
            'date_reception' => "2019-11-06 00:00:00",
            'date_resultat' => "2019-11-08 00:00:00",
            'date_envoi' => null,
            'date_signature' => null,
            'signe' => false,
            'labo_id' =>null,
            "facture_id" => 6,
          ],
/*
// TEST DES RESISTANCE OVINS 1 PRELEVEMENTS
*/
          [
            'id' => 7,
            'user_id' => 6,
            'nb_prelevement' => 1,
            'espece_id' => 2,
            'anapack_id' => 4,
            'serie_id' => 1,
            'informations' => "Traitement avec du Panacur",
            'toveto' => 0,
            'veto_id' => null,
            'acheve' => true,
            'date_prelevement' => null,
            'date_reception' => "2019-11-06 00:00:00",
            'date_resultat' => "2019-11-08 00:00:00",
            'date_envoi' => "2019-11-09 00:00:00",
            'date_signature' => "2019-11-08 00:00:00",
            'signe' => true,
            'labo_id' => 1,
            "facture_id" => 7,
          ],
          [
            'id' => 8,
            'user_id' => 6,
            'nb_prelevement' => 1,
            'espece_id' => 2,
            'anapack_id' => 4,
            'serie_id' => 1,
            'informations' => null,
            'toveto' => 0,
            'veto_id' => null,
            'acheve' => false,
            'date_prelevement' => null,
            'date_reception' => "2019-11-16 00:00:00",
            'date_resultat' => null,
            'date_envoi' => null,
            'date_signature' => null,
            'signe' => false,
            'labo_id' => null,
            "facture_id" => 8,
          ],
/*
// SUIVI DE CAMPAGNE CAPRINS
*/
          [
            'id' => 9,
            'user_id' => 3,
            'nb_prelevement' => 3,
            'espece_id' => 3,
            'anapack_id' => 3,
            'serie_id' => 2,
            'toveto' => 1,
            'informations' => null,
            'veto_id' => 1,
            'acheve' => true,
            'date_prelevement' => "2019-06-14 00:00:00",
            'date_reception' => "2019-06-15 00:00:00",
            'date_resultat' => "2019-06-17 00:00:00",
            'date_envoi' => "2019-06-18 00:00:00",
            'date_signature' => "2019-06-17 00:00:00",
            'signe' => true,
            'labo_id' => 1,
          "facture_id" => 9,
          ],
          [
            'id' => 10,
            'user_id' => 3,
            'nb_prelevement' => 3,
            'espece_id' => 3,
            'anapack_id' => 3,
            'serie_id' => 2,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => true,
            'date_prelevement' => "2019-07-18 00:00:00",
            'date_reception' => "2019-07-20 00:00:00",
            'date_resultat' => "2019-07-20 00:00:00",
            'date_envoi' => "2019-07-18 22:00:00",
            'date_signature' => "2019-07-20 00:00:00",
            'signe' => true,
            'labo_id' => 1,
            "facture_id" => 10,
          ],
          [
            'id' => 11,
            'user_id' => 3,
            'nb_prelevement' => 3,
            'espece_id' => 3,
            'anapack_id' => 3,
            'serie_id' => 2,
            'informations' => null,
            'toveto' => 1,
            'veto_id' => 1,
            'acheve' => true,
            'date_prelevement' => "2019-09-01 00:00:00",
            'date_reception' => "2019-09-03 00:00:00",
            'date_resultat' => "2019-09-04 00:00:00",
            'date_envoi' => "2019-09-04 00:00:00",
            'date_signature' => "2019-09-04 00:00:00",
            'signe' => true,
            'labo_id' => 1,
            "facture_id" => 11,
          ],
        ]);
    }
}
