<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'descripcion' => 'PC Gamer de Alto Rendimiento',
                'precio' => 3500000,
                'imagen' => 'img/pc_.jpg',
                'categoria' => 'Mejora tu juego',
            ],
            [
                'descripcion' => 'Olla de Acero Inoxidable Premium',
                'precio' => 250000,
                'imagen' => 'img/olla.jpg',
                'categoria' => 'Cocina y Comedor',
            ],
            [
                'descripcion' => 'Juego de Latas Decorativas',
                'precio' => 180000,
                'imagen' => 'img/lata.jpg',
                'categoria' => 'Mejora del hogar',
            ],
            [
                'descripcion' => 'Artículo de Decoración Moderno',
                'precio' => 320000,
                'imagen' => 'img/decoracion.jpg',
                'categoria' => 'Decoración',
            ],
            [
                'descripcion' => 'Almohada Ortopédica Comfort',
                'precio' => 165000,
                'imagen' => 'img/almohada.jpg',
                'categoria' => 'Ropa de cama y baño',
            ],
            [
                'descripcion' => 'Olla a Presión Multifuncional',
                'precio' => 450000,
                'imagen' => 'img/olla.jpg',
                'categoria' => 'Ofertas relámpago',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
