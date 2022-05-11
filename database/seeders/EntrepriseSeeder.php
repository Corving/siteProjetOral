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
                'url_img' => '/assets/img/projets/maintenance.jpg',
                'alt_img' => 'maintenance',
                'date_projet' => Carbon::parse('2022-01-14'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
