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
            'diameter' => '19 cm',
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
            'diameter' => '21 cm',
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
            'diameter' => '21 cm',
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
            'diameter' => '21 cm',
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
            'diameter' => '19 cm',
            'height' => '60 cm',
            'level' => 'Sensible',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 25,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_008_Zebrina_nurse-s-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Coconut',
            "family" => 'Palm',
            'slug' => 'coconut',
            'diameter' => '21 cm',
            'height' => '110 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/11/PL_XL_016_Coconut-Palm_potCR_XL_1035849-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Portodora',
            "family" => 'Alocasia',
            'slug' => 'portodora',
            'diameter' => '21 cm',
            'height' => '60 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Moyen',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 27,
            'image' => "https://plnts.com/wp-content/uploads/2020/10/PL_XL_011_Alocasia-Portodora_potCR_XL_1057291-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Nicolai',
            "family" => 'Strelitzia',
            'slug' => 'nicolai',
            'diameter' => '21 cm',
            'height' => '70 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 35,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL.XL_.005_Strelitzia_potCR_XL_1035831-s-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Amate',
            "family" => 'Schefflera',
            'slug' => 'amate',
            'diameter' => '21 cm',
            'height' => '80 cm',
            'level' => 'Facile',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_009_Amate_potCR_XL_BLPS-27_GRICR_XL_WSWDGRIG-24-s-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Triostar',
            "family" => 'Calathea',
            'slug' => 'triostar',
            'diameter' => '19 cm',
            'height' => '60 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert", "ensoleillé", "partiellement couvert"]),
            'price' => 39,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_XL_001_Calathea-Triostar_potCR_XL_144259-s-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Regal Shield',
            "family" => 'Alocasia',
            'slug' => 'regal-shield',
            'diameter' => '17 cm',
            'height' => '55 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Moyen',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 49,
            'image' => "https://plnts.com/wp-content/uploads/2020/11/PL_L_014_Alocasia-Regal-Shield_potCR_L_1027722-1-600x750.jpg",
            'size' => 3
        ]);
        Product::create([
            'name' => 'Maculata',
            "family" => 'Begonia',
            'slug' => 'Maculata',
            'diameter' => '12 cm',
            'height' => '15 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 13,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_M_016_Monstera-Begonia-Maculata_potCR_M_1035827-s-1-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Tortum',
            "family" => 'Philodendron',
            'slug' => 'tortum',
            'diameter' => '13 cm',
            'height' => '45 cm',
            'level' => 'Sensible',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 49,
            'image' => "https://plnts.com/wp-content/uploads/2020/10/PL_EXCL_18_Philodendron-Bipinnatifidum_potCR_M_1065538-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Mottled',
            "family" => 'Syngonium',
            'slug' => 'mottled',
            'diameter' => '13 cm',
            'height' => '25 cm',
            'level' => 'Sensible',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 49,
            'image' => "https://plnts.com/wp-content/uploads/2020/08/PL_EXCL_12_Syngonium-Mottled_potCR_M_1051611-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Pink Dragon',
            "family" => 'Alocasia',
            'slug' => 'pink-dragon',
            'diameter' => '13 cm',
            'height' => '35 cm',
            'level' => 'Sensible',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_M_036_Alocasia-Pink-Dragon_potCR_M_1027725-2-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Ludisia Discolor',
            "family" => 'Jewel Orchid',
            'slug' => 'ludisia-discolor',
            'diameter' => '12 cm',
            'height' => '25 cm',
            'level' => 'Facile',
            'sun' => json_encode(["couvert", "partiellement couvert"]),
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_S_M_035_Jewel-Orchid-Ludisia-Discolor_potCR_M_1051611-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Arifolia',
            "family" => 'Hemionitis',
            'slug' => 'arifolia',
            'diameter' => '12 cm',
            'height' => '25 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["ensoleillé", "couvert", "partiellement couvert"]),
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_M_025_Hermionitis-Arifolia_potCR_M_L1020_BL-s-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Adansonii Variegated',
            "family" => 'Monstera',
            'slug' => 'adansonii-variegated',
            'diameter' => '12 cm',
            'height' => '25 cm',
            'level' => 'Sensible',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 899,
            'image' => "https://plnts.com/wp-content/uploads/2020/08/PL_EXCL_11_Monstera-Adansonii-Variegated_nurse.-2-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Majesty',
            "family" => 'Philodendron',
            'slug' => 'majesty',
            'diameter' => '13 cm',
            'height' => '25 cm',
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 79,
            'image' => "https://plnts.com/wp-content/uploads/2020/10/PL_EXCL_21_Philodendron-Majesty_potCR_M_1051611-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Reflector',
            "family" => 'Dieffenbachia',
            'slug' => 'reflector',
            'diameter' => '17 cm',
            'height' => '45 cm',
            'sun' => json_encode(["couvert"]),
            'level' => 'Facile',
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_L_007_Dieffenbachia-Reflector_potCR_L_1035839-s-1-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Hastatum Silver',
            "family" => 'Philodendron',
            'slug' => 'hastatum-silver',
            'diameter' => '17 cm',
            'height' => '35 cm',
            'sun' => json_encode(["couvert"]),
            'level' => 'Facile',
            'price' => 39,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_L_001_Philodendron-Hastatum-Silver_potCR_L_1022417-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Red Secret',
            "family" => 'Alocasia',
            'slug' => 'red-secret',
            'diameter' => '12 cm',
            'height' => '25 cm',
            'sun' => json_encode(["couvert"]),
            'level' => 'Facile',
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_M_018_Alocasi-Red-Secret_potCR_M_144274-s-1-600x750.jpg",
            'size' => 2
        ]);
        Product::create([
            'name' => 'Baby Sugar',
            "family" => 'Pilea Peperomioides',
            'slug' => 'baby-sugar',
            'diameter' => '12 cm',
            'height' => '25 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["ensoleillé", "couvert", "partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_M_025_Hermionitis-Arifolia_potCR_M_L1020_BL-s-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Mojito',
            "family" => 'Pilea Peperomioides',
            'slug' => 'baby-mojito',
            'diameter' => '2 cm',
            'height' => '10 cm',
            'advantage' => 'Purificateur d\'air',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["ensoleillé", "couvert", "partiellement couvert"]),
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/09/PL_S_B_029_Pilea-Mojito_potCR_S-1006529-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Anoectochilus Chapaensis',
            "family" => 'Jewel Orchid',
            'slug' => 'baby-anoectochilus-chapaensis',
            'diameter' => '9 cm',
            'height' => '15 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert"]),
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/12/PL_S_M_035_Jewel-Orchid-Anoectochilus-Chapaensis_potCR_S_ORA_11-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Pink Princess',
            "family" => 'Aglaonema',
            'slug' => 'baby-pink-princess',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert", "partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_S_M_031_Aglaonema-Pink-Princess_potCR_S_1027723-1-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Carnosa Tricolor',
            "family" => 'Hoya',
            'slug' => 'baby-carnosa-tricolor',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert", "partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_S_M_022Hoya-Carnosa-Tricolor_potCR_S_1006526_RO-s-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Roseopicta Dottie',
            "family" => 'Calathea',
            'slug' => 'baby-roseopicta-dottie',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_S_M_026_Calathea-Roseopicta-Dottie_CR_S_144929-1-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Robusta',
            "family" => 'Ficus',
            'slug' => 'baby-robusta',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_S_M_025_Ficus_Robusta_potsku-s-600x750.jpeg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Rex Boweri',
            "family" => 'Begonia',
            'slug' => 'baby-rex-boweri',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/03/PL_S_M_030_Begonia-Rex-Boweri_potSTYLE-s-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Usneoides Large',
            "family" => 'Tillandsia',
            'slug' => 'baby-usneoides-large',
            'diameter' => '6 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 15,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_S_BG_018_Tillandsia-Usneoides_Jellyfish-large-2-1-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Harrisii',
            "family" => 'Tillandsia',
            'slug' => 'baby-harrisii',
            'diameter' => '2 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["partiellement couvert"]),
            'price' => 15,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_S_BG_014_Tillandsia_Harrisii_hand-1-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Baby Bulbosa',
            "family" => 'Hoya',
            'slug' => 'baby-bulbosa',
            'diameter' => '2 cm',
            'height' => '10 cm',
            'level' => 'Facile',
            'pet_friendly' => true,
            'sun' => json_encode(["couvert", "partiellement couvert"]),
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/07/PL_S_BG_012_Tillandsia-Bulbosa_hand-1-600x750.jpg",
            'size' => 1
        ]);
        Product::create([
            'name' => 'Pilea Family Kit',
            "family" => 'Peperomioides S & M',
            'slug' => 'pilea-family-kit',
            'price' => 19,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/SET_005_Pilea-Family-Set-Peperomioides-S-MTerracotta-9cm15cm-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Air Purifying Kit',
            "family" => 'Reginae, Veitchi, Adansonii M',
            'slug' => 'air-purifying-kit',
            'advantage' => 'Purificateur d\'air',
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/SET_002_Air-Purifying-Set-M_RegineaVeitchiAdansonii-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Baby Air Purifying Kit',
            "family" => 'Bifurcatum, Deliciosa, Blonde S',
            'slug' => 'baby-air-purifying-kit',
            'advantage' => 'Purificateur d\'air',
            'price' => 29,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/SET_001_Baby-Air-Purifying-Set_BifurcatumDeliciosaExaltata-Blonde-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Baby Easy Care Kit',
            "family" => 'Robusta, Makoyana, Tineke',
            'slug' => 'baby-easy-care-kit',
            'price' => 12,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/SET_004_Baby-Easy-Care-Set_RobustaMakoyanaTineke-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Baby Kit de d’initiation',
            "family" => '8 items',
            'slug' => 'baby-starter-kit',
            'price' => 39,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/Baby-PLNTS-Starter-Kit-1-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Baby Trio Starter Kit',
            "family" => '11 items',
            'slug' => 'baby-trio-starter-kit',
            'price' => 49,
            'image' => "https://plnts.com/wp-content/uploads/2020/05/Baby-Trio-Starter-Kit-1-600x750.jpg",
            'size' => 4
        ]);
        Product::create([
            'name' => 'Baby Grow Kit',
            "family" => 'Terracotta 9cm, Soil 3l, Plant Nutrition',
            'slug' => 'grow-kit',
            'price' => 9,
            'image' => "https://plnts.com/wp-content/uploads/2020/04/Baby-Grow-Set_3-600x750.jpg",
            'size' => 4
        ]);
    }
}
