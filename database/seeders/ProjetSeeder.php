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
                'url_img' => 'assets/img/homepage/stories-img1.jpg',
                'alt_img' => 'test image',
                'date_projet' => Carbon::parse('2000-01-01'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')



            ]
        ]);
    }
}
