<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            [
                'titre' => 'CEMA TECHNOLOGIES',
                'description' => 'Pendant toute ma durée de formation chez CEMA TECHNOLOGIES, j\'ai fait de la maintenance et de l\'assistance informatique.
                                  Quand un utilisateur avait un besoin ou avait un problème sur son matériel informatique, je devais faire le nécessaire pour que le problème soit résolu dans les plus brefs délais.',
                'url_img' => '/assets/img/projets/entreprises.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-01-14'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'Group LDC',
                'description' => 'LDC est une entreprise dans l’agroalimentaire. Elle a été fondée en 1968 par la famille Lambert et la famille Dodard Chancereul. LDC s’est spécialisé dans la transformation et la commercialisation de la volaille en Europe et les plats préparés. Aujourd’hui, LDC est le leader n°1 Français et un des leaders Européen dans la volaille.',
                'url_img' => '/assets/img/projets/entreprises.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-04-01'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'titre' => 'LDC Services',
                'description' => 'LDC SERVICE est actif depuis 8 ans. L’entreprise s’est spécialisée dans le secteur d’activité du conseil en systèmes et logiciels informatiques. Son effectif est compris entre 100 et 199 salariés.',
                'url_img' => '/assets/img/projets/entreprises.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-04-01'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
