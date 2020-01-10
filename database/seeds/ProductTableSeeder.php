<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
            'imagePath' => 'https://via.placeholder.com/150',
            'title' => 'Огурец',
            'description' => 'Обыкновенный, или он же — огурец посевной (лат. сucumis sativus) — травянистое
однолетнее растение семейства тыквенные. Это растение с продолговатыми зелеными
плодами известно человечеству уже более шести тысяч лет.',
            'price' => 45
        ]);
        $product->save();
        $product = new App\Product([
            'imagePath' => 'https://via.placeholder.com/150',
            'title' => 'Помидор',
            'description' => 'Тома́т или помидóр (лат. Solánum lycopérsicum) — однолетнее или многолетнее ... «Помидор», другой популярный вариант названия овоща, происходит от итал. pomo d\'oro — «золотое яблоко». ',
            'price' => 60
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://via.placeholder.com/150',
            'title' => 'Тыква',
            'description' => 'Тыква – растение со стелющимися стеблями, плоды обычно оранжевые, но встречаются и другие расцветки кожуры. Польза тыквы для мужчин и ...',
            'price' => 90
        ]);
        $product->save();
        $product = new App\Product([
            'imagePath' => 'https://via.placeholder.com/150',
            'title' => 'Арбуз',
            'description' => 'Обыкновенный, или он же — огурец посевной (лат. сucumis sativus) — травянистое
однолетнее растение семейства тыквенные. Это растение с продолговатыми зелеными
плодами известно человечеству уже более шести тысяч лет.',
            'price' => 50
        ]);

        $product->save();
    }
}
