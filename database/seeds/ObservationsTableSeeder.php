<?php

use Illuminate\Database\Seeder;

class ObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('observations')->insert([
          [
            "categorie_id" => 1,
            "ordre" => 3,
            "intitule" => "J‘ai des animaux qui maigrissent",
            "explication" => "Le parasitisme est souvent responsable d'amaigrissement",
            "autres" =>  "alimentation, maladies chroniques",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 2,
            "intitule" => "J’observe une baisse de production",
            "explication" => "Les infestations parasitaires provoquent souvent des baisse de production",
            "autres" => "alimentation insuffisante ou déséquilibrée, infections chroniques, stress, etc.",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 4,
            "intitule" => "J’ai des animaux qui ont une mauvaise laine",
            "explication" => "Une mauvaise laine peut être signe de parasitisme interne",
            "autres" => "carences alimentaires, parasites externes (mélophages, gâles, ...)",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 5,
            "intitule" => "J'ai des animaux qui perdent leur laine",
            "explication" => "La chute de la laine peut être signe de parasitisme interne",
            "autres" => "carences alimentaires, des parasites externes (mélophages, gâles, ...)",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 6,
            "intitule" => "J'ai des animaux qui ont un mauvais poil",
            "explication" => "Un mauvais poil peut être signe de parasitisme interne",
            "autres" => "carences alimentaires, des parasites externes (poux, gâles, ...)",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 7,
            "intitule" => "J'ai des animaux qui ont de la diarrhée",
            "explication" => "Les strongles intestinaux, le paramphistome ou la grande douve peuvent provoquer de la diarrhée",
            "autres" => "déséquilibre alimentaire, changement alimentaire, mise à l'herbe, infections intestinales",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 13,
            "intitule" => "J'ai des animaux qui meurent",
            "explication" => "Une très forte infestation parasitaire peut provoquer la mort des animaux. C'est souvent le cas chez les petits ruminants infestés par Haemonchus contortus",
            "autres" => "accidents, maladies diverses, etc.",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 8,
            "intitule" => "J'ai des animaux qui toussent",
            "explication" => "La toux d'été est souvent provoquée par des strongles respiratoires",
            "autres" => "infections respiratoires, allergies, ...",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 9,
            "intitule" => "J'ai des animaux qui mouchent",
            "explication" => "Chez les petits ruminants, le nez qui coule ou qui est bouché est souvent signe de la présence d'oestres (indétectables à la coproscopie). Chez les bovins cela peut être un signe de strongles respiratoires.",
            "autres" => "infections respiratoires, allergies, ...",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 11,
            "intitule" => "J'ai des animaux très anémiés",
            "explication" => "Chez les petits ruminants, Haemonchus contortus est responsable d'anémies mortelles. Parfois la petite douve peut aussi parfois provoquer des anémies",
            "autres" => "hémorragies, parasites sanguins, carences, etc."
          ],
          [
            "categorie_id" => 1,
            "ordre" => 12,
            "intitule" => "J'ai des animaux avec le signe de la bouteille",
            "explication" => "Le signe de la bouteille est un signe d'anémie ou d'atteinte grave du foie. Il peut être le reflet d'un fort parasitisme par Haemonchus contortus ou par les douves",
            "autres" => "toute maladie anémiante ou toute atteinte grave du foie",
          ],
          [
            "categorie_id" => 2,
            "ordre" => 8,
            "intitule" => "J'ai fait un traitement avec un vermifuge et la situation ne s'est pas améliorée",
            "explication" => "Si votre animal était vraiment parasité et que le traitement était adapté, vous êtes peut-être face à une résistance au vermifuge utilisé",
            "autre" => "mauvais diagnostic, traitement inadapté ou mal administré (sous-dosage)",
          ],
          [
            "categorie_id" => 2,
            "ordre" => 6,
            "intitule" => "Je viens d'acheter un animal",
            "explication" => "Il risque d'introduire du parasitisme dans votre troupeau et même peut-être des parasites résistants à certains vermifuges",
            "autres" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 7,
            "intitule" => "Je viens d'acheter un troupeau",
            "explication" => "Il est important que vous connaissiez sa situation vis-à-vis du parasitisme. Ce troupeau peu aussi vous amener des parasites résistants à certains vermifuges",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 2,
            "intitule" => "Je rentre mon troupeau en bergerie",
            "explication" => "C'est le moment de faire une évaluation de la situation parasitaire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 2,
            "intitule" => "Je rentre mon troupeau en bâtiment",
            "explication" => "C'est le moment de faire une évaluation de la situation parasitaire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 2,
            "intitule" => "Je rentre mon animal au box",
            "explication" => "C'est le moment de faire une évaluation de la situation parasitaire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 3,
            "intitule" => "c'est le début de l'hiver",
            "explication" => "C'est le moment de faire une évaluation de la situation parasitaire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 4,
            "intitule" => "Je vais sortir mes animaux à l'herbe",
            "explication" => "Si vous n'avez pas évalué le parasitisme de votre troupeau à la rentrée en bâtiment, il est encore temps de le faire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 5,
            "intitule" => "Je pars en transhumance",
            "explication" => "C'est le moment de faire une évaluation de la situation parasitaire",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 1,
            "intitule" => "Je veux connaître la situation de mon troupeau",
            "explication" => "La réalisation d'examens coproscopiques viendra compléter les observations faites sur les animaux",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 1,
            "intitule" => "Je veux connaître la situation de mon animal",
            "explication" => "La réalisation d'examens coproscopiques viendra compléter les observations faites sur cet animal",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 1,
            "intitule" => "Je veux connaître la situation d'un animal",
            "explication" => "La réalisation d'examens coproscopiques viendra compléter les observations faites sur cet animal",
            "autre" => null,
          ],
          [
            "categorie_id" => 2,
            "ordre" => 8,
            "intitule" => "Je veux mettre en place une rotation de pâturage",
            "explication" => "La rotation de pâturage ayant pour but de diminuer l'infestation parasitaire, il est intéressant de vérifier celle-ci régulièrement",
            "autre" => null,
          ],
          [
            "categorie_id" => 3,
            "ordre" => 1,
            "intitule" => "Je vis plutôt en zone sèche",
            "explication" => "Vous avez plus de probabilité d'avoir de la petite que de la grande douve",
            "autre" => null,
          ],
          [
            "categorie_id" => 3,
            "ordre" => 2,
            "intitule" => "Je vis plutôt en climat méditerranéen",
            "explication" => "Il est important de surveiller l'infestation par Haemonchus contortus",
            "autre" => null,
          ],
          [
            "categorie_id" => 3,
            "ordre" => 4,
            "intitule" => "Mes animaux ont accès à des pâturages humides",
            "explication" => "Attention aux infestations par la grande douve et le paramphistome",
            "autre" => null,
          ],
          [
            "categorie_id" => 3,
            "ordre" => 5,
            "intitule" => "J'ai régulièrement des foies saisis pour grande douve",
            "explication" => "C'est un signe assez sûr d'infestation des animaux",
            "autre" => null,
          ],
          [
            "categorie_id" => 3,
            "ordre" => 3,
            "intitule" => "J'ai régulièrement des foies saisis pour petite douve",
            "explication" => "C'est un signe assez sûr d'infestation des animaux",
            "autre" => null,
          ],
          [
            "categorie_id" => 1,
            "ordre" => 6,
            "intitule" => "J'ai observé des \"grains de riz blancs\" dans les crottes de mes animaux",
            "explication" => "Il s'agit d'une infestation par Moniezia expansa, le ténia des agneaux d'herbe ",
            "autre" => null,
          ],
          [
            "categorie_id" => 1,
            "ordre" => 4,
            "intitule" => "Mon animal se frotte régulièrement l'arrière-train aux arbres ou aux poteaux",
            "explication" => "Cela peut être un signe d'infestation par des oxyures, petits vers présents dans le rectum",
            "autre" => "parasites externes",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 10,
            "intitule" => "J'ai des animaux qui toussent",
            "explication" => "Le passage de larves d'ascaris dans le poumons peut être responsable de toux",
            "autres" => "infections respiratoires, allergies, ...",
          ],
          [
            "categorie_id" => 1,
            "ordre" => 10,
            "intitule" => "J'ai des animaux qui éternuent et qui mouchent",
            "explication" => "Chez les petits ruminants, les éternuements le nez qui coule ou qui est bouché est souvent signe de la présence de larves d'oestres dans les narines: ces larves sont indétectables à la coproscopie.",
            "autres" => "infections respiratoires, allergies, poussière, ...",
          ],
          [
            'categorie_id' => 1,
            'ordre' => 1,
            'intitule' => "Mon troupeau me paraît globalement en bonne santé",
            "explication" => "Si le parasitisme est modéré et l'immunité des animaux suffisante, la présence de parasitisme ne provoque pas forcément de symptômes.",
            "autres" => null,

          ],
          [
            'categorie_id' => 1,
            'ordre' => 1,
            'intitule' => "Mon animal me paraît globalement en bonne santé",
            "explication" => "Si le parasitisme est modéré et l'immunité de l'animal-hôte suffisante, la présence de parasitisme ne provoque pas forcément de symptômes.",
            "autres" => null,

          ],
          // ################################################################################
          // ##################### AJOUT ####################################################
          [
            "categorie_id" => 2,
            "ordre" => 4,
            "intitule" => "Je vais mettre mon animal au pré",
            "explication" => "Si vous n'avez pas évalué le parasitisme de cet animal à la rentrée en box, il est encore temps de le faire",
            "autre" => null,
          ],
          // ##############################################################################
        ]);
    }
}
