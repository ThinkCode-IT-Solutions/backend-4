<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(200)->create();

        Product::factory()->create([
            'name' => "Iphone 14 pro",
            'price' => "1500",
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'image_url' => 'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse3.explicit.bing.net%2Fth%2Fid%2FOIP.muM3lyNF2vObnlAQZDhoKQHaJP%3Fpid%3DApi&sp=1767264784T0108fa64fdda23637c7df5821ebc3429fd739db3013bb3da943b8acf93da4e1e',
            'tags' => 'iphone,iphone14,ios',
            'is_active' => true,
        ]);
    }
}
