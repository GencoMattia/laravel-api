<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $types = Type::all()->pluck("id");
        $users = User::all()->pluck("id");

        $projects = [
            [
                'title' => 'La Torre di Spellgard',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro e potenziamento delle difese magiche di una torre antica.',
                'image' => 'spellgard.jpg',
                'client' => 'Arcimago Elminster',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1372, 5, 12),
            ],
            [
                'title' => 'Il Portale per Evermeet',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progetto di ricerca per stabilizzare un portale verso la patria elfica.',
                'image' => 'evermeet.jpg',
                'client' => 'Regina Amlaruil',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1368, 8, 22),
            ],
            [
                'title' => 'Il Labirinto di Undermountain',
                'type_id' => $faker->randomElement($types),
                'description' => 'Mappatura e esplorazione del labirinto sotterraneo.',
                'image' => 'undermountain.jpg',
                'client' => 'Gilda degli Esploratori',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1354, 3, 1),
            ],
            [
                'title' => 'La Flotta di Luskan',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di nuove navi da guerra per la città portuale.',
                'image' => 'luskanfleet.jpg',
                'client' => 'Capitano Deudermont',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1365, 10, 7),
            ],
            [
                'title' => 'Le Miniere di Mithral',
                'type_id' => $faker->randomElement($types),
                'description' => 'Ottimizzazione dell\'estrazione del prezioso metallo.',
                'image' => 'mithralmines.jpg',
                'client' => 'Clan Ironfist',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1358, 6, 18),
            ],
            [
                'title' => 'Il Tempio di Helm',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro e fortificazione del santuario del dio della protezione.',
                'image' => 'helmtemple.jpg',
                'client' => 'Sommo Sacerdote di Helm',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1362, 1, 4),
            ],
            [
                'title' => 'L\'Accademia di Stregoni',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di incantesimi per gli studenti.',
                'image' => 'wizardacademy.jpg',
                'client' => 'Arcimago Theledorn',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1360, 9, 15),
            ],
            [
                'title' => 'La Gilda dei Ladri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di un sistema di comunicazione segreto.',
                'image' => 'thievesguild.jpg',
                'client' => 'Pasha Pook',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1367, 2, 13),
            ],
            [
                'title' => 'Il Circo di Volothamp',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo spettacolo acrobatico.',
                'image' => 'volothampcircus.jpg',
                'client' => 'Volothamp Geddarm',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1371, 7, 3),
            ],
            [
                'title' => 'La Fortezza di Sundabar',
                'type_id' => $faker->randomElement($types),
                'description' => 'Potenziamento delle difese contro gli attacchi dei giganti.',
                'image' => 'sundabarfortress.jpg',
                'client' => 'Re Helmfast',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1369, 12, 20),
            ],
            [
                'title' => 'Il Santuario di Mielikki',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un giardino magico per la dea della natura.',
                'image' => 'mielikkishrine.jpg',
                'client' => 'Alta Sacerdotessa di Mielikki',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1366, 4, 28),
            ],
            [
                'title' => 'L\'Ordine del Guanto',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di nuove armature potenziate magicamente.',
                'image' => 'orderofthegauntlet.jpg',
                'client' => 'Sir Isteval',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1359, 8, 5),
            ],
            [
                'title' => 'Il Clan Battlehammer',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un sistema di difesa per la fortezza nanica.',
                'image' => 'battlehammerclan.jpg',
                'client' => 'Re Bruenor Battlehammer',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1355, 2, 11),
            ],
            [
                'title' => 'La Torre di Ramazith',
                'type_id' => $faker->randomElement($types),
                'description' => 'Esplorazione della torre abbandonata di un potente mago.',
                'image' => 'ramazithtower.jpg',
                'client' => 'Gilda degli Avventurieri',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1373, 1, 9),
            ],
            [
                'title' => 'Il Pozzo dei Draghi',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un sistema di allerta per avvistamenti di draghi.',
                'image' => 'dragonwell.jpg',
                'client' => 'Consiglio di Neverwinter',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1364, 5, 23),
            ],
            [
                'title' => 'Il Mercato di Waterdeep',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di un\'app per la gestione delle merci.',
                'image' => 'waterdeepmarket.jpg',
                'client' => 'Signori Mascherati',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1370, 8, 24),
            ],
            [
                'title' => 'La Gilda degli Avventurieri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un database di missioni e ricompense.',
                'image' => 'adventurersguild.jpg',
                'client' => 'Durnan',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1356, 7, 4),
            ],
            [
                'title' => 'Il Tempio di Tyr',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro degli affreschi raffiguranti il dio della giustizia.',
                'image' => 'tyrtemple.jpg',
                'client' => 'Sommo Sacerdote di Tyr',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1363, 9, 28),
            ],
            [
                'title' => 'La Scuola di Bardo',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di uno strumento musicale incantato.',
                'image' => 'bardschool.jpg',
                'client' => 'Maestro Lelar',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1357, 4, 16),
            ],
            [
                'title' => 'La Torre dell\'Orologio',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo meccanismo per l\'orologio magico.',
                'image' => 'clocktower.jpg',
                'client' => 'Consiglio di Waterdeep',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1361, 11, 8),
            ],
            [
                'title' => 'Il Palazzo di Neverwinter',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro dei giardini pensili del palazzo.',
                'image' => 'neverwinterpalace.jpg',
                'client' => 'Lord Neverember',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1368, 3, 5),
            ],
            [
                'title' => 'La Fiera di Baldur\'s Gate',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un gioco interattivo per i visitatori.',
                'image' => 'baldursgatefair.jpg',
                'client' => 'Duca Portyr',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1372, 9, 30),
            ],
            [
                'title' => 'La Gilda dei Mercanti',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di una rete di comunicazione commerciale.',
                'image' => 'merchantguild.jpg',
                'client' => 'Lady Rylanthra',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1360, 2, 2),
            ],
            [
                'title' => 'Il Tempio di Sune',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo altare per la dea della bellezza.',
                'image' => 'sunetemple.jpg',
                'client' => 'Somma Sacerdotessa di Sune',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1369, 6, 14),
            ],
            [
                'title' => 'La Scuola di Ladri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di furto per gli studenti.',
                'image' => 'thiefschool.jpg',
                'client' => 'Gilda dei Ladri',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1365, 1, 19),
            ],
            [
                'title' => 'La Torre di Zhentarim',
                'type_id' => $faker->randomElement($types),
                'description' => 'Infiltrazione e sabotaggio della base nemica.',
                'image' => 'zhentarimtower.jpg',
                'client' => 'Arpisti',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1371, 4, 5),
            ],
            [
                'title' => 'Il Pozzo di Silverymoon',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un sistema di purificazione dell\'acqua.',
                'image' => 'silverymoonwell.jpg',
                'client' => 'Consiglio di Silverymoon',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1359, 7, 27),
            ],
            [
                'title' => 'Il Mercato di Scornubel',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo sistema di illuminazione.',
                'image' => 'scornubelmarket.jpg',
                'client' => 'Gilda dei Mercanti di Scornubel',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1373, 3, 12),
            ],
            [
                'title' => 'La Gilda degli Artigiani',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un catalogo online dei prodotti.',
                'image' => 'artisanguild.jpg',
                'client' => 'Gilda degli Artigiani di Waterdeep',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1370, 10, 3),
            ],
            [
                'title' => 'Il Tempio di Gond',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro della statua del dio della forgiatura.',
                'image' => 'gondtemple.jpg',
                'client' => 'Sommo Sacerdote di Gond',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1366, 8, 9),
            ],
            [
                'title' => 'La Scuola di Guerrieri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di combattimento.',
                'image' => 'warriorschool.jpg',
                'client' => 'Ordine del Drago Purpureo',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1370, 1, 25),
            ],
            [
                'title' => 'La Spada di Drizzt',
                'type_id' => $faker->randomElement($types),
                'description' => 'Forgiatura di una spada leggendaria per un ranger drow.',
                'image' => 'drizzt.jpg',
                'client' => 'Drizzt Do\'Urden',
                'user_id' => $faker->randomElement($users),
                'creation_date' => Carbon::create(1356, 11, 2),
            ],
        ];

        foreach ($projects as $project){
            Project::create($project);
        }

    }
}
