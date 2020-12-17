<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Orbifolia',
            "family" => 'Calathea',
            'slug' => 'orbifolia',
            'diameter' => '19 cm ',
            'height' => '60 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert", "partiellement couvert"]),
            'price' => 35,
            'image' => "https://plnts.com/wp-content/uploads/2020/10/PL_XL_015_Calathea-Orbifolia_nurse-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Lutescens',
            "family" => 'Areca',
            'slug' => 'lutescens',
            'diameter' => '21 cm ',
            'height' => '105 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 39,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_004_Areca_potCR_XL_1035831-s-2-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Lyrata',
            "family" => 'Ficus',
            'slug' => 'lyrata',
            'diameter' => '21 cm ',
            'height' => '105 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Moyen',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_006_Ficus-Lyrata_potCR_XL_144259-s-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Mitis',
            "family" => 'Caryota',
            'slug' => 'mitis',
            'diameter' => '21 cm ',
            'height' => '95 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert", "ensoleillé"]),
            'price' => 35,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_007_Caryota-Mitis_potCR_L_1051614-s-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Zebrina',
            "family" => 'Alocasia',
            'slug' => 'zebrina',
            'diameter' => '19 cm ',
            'height' => '60 cm',
            'level' => 'Sensible',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 25,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_008_Zebrina_nurse-s-600x750.jpg",
            'size' => 3
        ]);
    }
}
