<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            [
                'titre' => 'Maintenance du parc informatique',
                'description' => 'Pendant toute ma durée de formation chez CEMA TECHNOLOGIES, j\'ai fait de la maintenance et de l\'assistance informatique.
                                  Quand un utilisateur avait un besoin ou avait un problème sur son matériel informatique, je devais faire le nécessaire pour que le problème soit résolu dans les plus brefs délais.',
                'url_img' => '/assets/img/projets/maintenance.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-01-14'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Intégration des nouveaux postes de travail dans l’entreprise',
                'description' => 'Pour chaque nouveau postes, on devait suivre une procédure. Tout d\'abord on faisait un point avec l\'utilisateur afin de déterminer ses besoins (logiciels, imprimante, VPN)',
                'url_img' => '/assets/img/projets/maintenance.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-01-14'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Calculer la somme des commandes par affaire',
                'description' => 'J’ai été chargé du suivie du bon fonctionnement d’un "CRM". J’avais la charge de faire évoluer celui-ci.',
                'url_img' => '/assets/img/projets/code.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2021-06-05'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Transformation de données pour un robot',
                'description' => 'Pour toute les demandes de développement, c\'est à moi de choisir le langage à utiliser.',
                'url_img' => '/assets/img/projets/code.jpg',
                'alt_img' => 'code',
                'date_projet' => Carbon::parse('2021-02-01'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Facturation',
                'description' => 'Zoho CRM peut créer que des factures Pro-forma. Pour créer des factures acquittées, la comptable utilise le logiciel "compta.com".',
                'url_img' => '/assets/img/projets/code.jpg',
                'alt_img' => 'code',
                'date_projet' => Carbon::parse('2021-12-31'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Fiche Client',
                'description' => 'Un fois la demande d’évolution accepté et attribuée à un développeur, un mantis est créé. Ce mantis correspond à notre cahier des charges.',
                'url_img' => '/assets/img/projets/code.jpg',
                'alt_img' => 'code',
                'date_projet' => Carbon::parse('2022-03-15'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
