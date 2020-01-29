<?php

use Illuminate\Database\Seeder;

class PrelevementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prelevements')->insert([
          [
            'id' => 1,
            'identification' => "Anthenaises",
            'demande_id' => 1,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 2,
            'identification' => "maigres",
            'demande_id' => 1,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 2,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 3,
            'identification' => "normales",
            'demande_id' => 1,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 4,
            'identification' => "multipares",
            'demande_id' => 2,
            'analyse_id' => 6,
            'etat_id' => 2,
            'consistance_id' => 1,
            'created_at' => "2019-11-08 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 5,
            'identification' => "primipares",
            'demande_id' => 2,
            'analyse_id' => 6,
            'etat_id' => 2,
            'consistance_id' => 1,
            'created_at' => "2019-11-08 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 6,
            'identification' => "Mustang",
            'demande_id' => 3,
            'analyse_id' => 3,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-02 00:00:00",
            'updated_at' => "2019-11-06 00:00:00",
          ],
          [
            'id' => 7,
            'identification' => "Jument",
            'demande_id' => 4,
            'analyse_id' => 3,
            'etat_id' => 1,
            'consistance_id' => 3,
            'created_at' => "2019-06-02 00:00:00",
            'updated_at' => "2019-06-05 00:00:00",
          ],
          [
            'id' => 13,
            'identification' => "Jument",
            'demande_id' => 4,
            'analyse_id' => 3,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-08-02 00:00:00",
            'updated_at' => "2019-08-05 00:00:00",
          ],
          [
            'id' => 9,
            'identification' => "Lot 2",
            'demande_id' => 5,
            'analyse_id' => 2,
            'etat_id' => 1,
            'consistance_id' => 2,
            'created_at' => "2019-11-03 00:00:00",
            'updated_at' => "2019-11-06 00:00:00",
          ],
          [
            'id' => 10,
            'identification' => "maigres",
            'demande_id' => 6,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 2,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => "2019-11-08 00:00:00",
          ],
          [
            'id' => 11,
            'identification' => "chevrettes",
            'demande_id' => 6,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => "2019-11-08 00:00:00",
          ],
          [
            'id' => 12,
            'identification' => "autres",
            'demande_id' => 6,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => "2019-11-08 00:00:00",
          ],
/*
// TEST DE RESISTANCE SUR BREBIS 1 PRELEVEMENT À CHAQUE FOIS
*/
          [
            'id' => 24,
            'identification' => "brebis",
            'demande_id' => 7,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-08 00:00:00",
            'updated_at' => null,
          ],
          [
            'id' => 14,
            'identification' => "brebis",
            'demande_id' => 8,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-11-18 00:00:00",
            'updated_at' => null,
          ],
/*
// SUIVI DE CAMPAGNE 3 DEMANDES AVEC 3 PRELEVEMENTS
*/
// PREMIERE SERIE DE PRELEVEMENTS
          [
            'id' => 15,
            'identification' => "maigres",
            'demande_id' => 9,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 2,
            'created_at' => "2019-06-15 00:00:00",
            'updated_at' => "2019-06-17 00:00:00",
          ],
          [
            'id' => 16,
            'identification' => "chevrettes",
            'demande_id' => 9,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-06-15 00:00:00",
            'updated_at' => "2019-06-17 00:00:00",
          ],
          [
            'id' => 17,
            'identification' => "autres",
            'demande_id' => 9,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-06-15 00:00:00",
            'updated_at' => "2019-06-17 00:00:00",
          ],
// DEUXIÈME SERIE DE PRELEVEMENTS
          [
            'id' => 18,
            'identification' => "maigres",
            'demande_id' => 10,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 2,
            'created_at' => "2019-07-20 00:00:00",
            'updated_at' => "2019-07-20 00:00:00",
          ],
          [
            'id' => 19,
            'identification' => "chevrettes",
            'demande_id' => 10,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-07-20 00:00:00",
            'updated_at' => "2019-07-20 00:00:00",
          ],
          [
            'id' => 20,
            'identification' => "autres",
            'demande_id' => 10,
            'analyse_id' => 1,
            'etat_id' => 1,
            'consistance_id' => 1,
            'created_at' => "2019-07-20 00:00:00",
            'updated_at' => "2019-07-20 00:00:00",
          ],
// TROISIEME SERIE DE PRELEVEMENTS
        [
          'id' => 21,
          'identification' => "maigres",
          'demande_id' => 11,
          'analyse_id' => 1,
          'etat_id' => 1,
          'consistance_id' => 2,
          'created_at' => "2019-09-03 00:00:00",
          'updated_at' => "2019-09-04 00:00:00",
        ],
        [
          'id' => 22,
          'identification' => "chevrettes",
          'demande_id' => 11,
          'analyse_id' => 1,
          'etat_id' => 1,
          'consistance_id' => 1,
          'created_at' => "2019-09-03 00:00:00",
          'updated_at' => "2019-09-04 00:00:00",
        ],
        [
          'id' => 23,
          'identification' => "autres",
          'demande_id' => 11,
          'analyse_id' => 1,
          'etat_id' => 1,
          'consistance_id' => 1,
          'created_at' => "2019-09-03 00:00:00",
          'updated_at' => "2019-09-04 00:00:00",
        ],
      ]);
    }
}
