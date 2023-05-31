<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                'name' => 'Biscotto al cioccolato',
                'description' => 'Delizioso biscotto al cioccolato croccante.',
                'price' => 2.50,
                'image' => 'biscotto_cioccolato.jpg',
                'in_stock' => true,
                'weight' => 50,
                'product_code' => 'BC001',
            ],
            [
                'name' => 'Pasticcino alla vaniglia',
                'description' => 'Dolce pasticcino alla vaniglia con crema al centro.',
                'price' => 1.80,
                'image' => 'pasticcino_vaniglia.jpg',
                'in_stock' => true,
                'weight' => 30,
                'product_code' => 'PV002',
            ],
            [
                'name' => 'Biscotto all \'arancia',
                'description' => 'Biscotto dal gusto fresco di arancia.',
                'price' => 2.20,
                'image' => 'biscotto_arancia.jpg',
                'in_stock' => false,
                'weight' => 40,
                'product_code' => 'BA003',
            ]
        ];
        foreach ($products as $product) {
            $newproduct = new Product();
            $newproduct->name = $product['name'];
            $newproduct->description = $product['description'];
            $newproduct->price = $product['price'];
            $newproduct->img = $product['image'];
            $newproduct->in_stock = $product['in_stock'];
            $newproduct->weight = $product['weight'];
            $newproduct->product_code = $product['product_code'];
            $newproduct->save();
        }
    }
}
