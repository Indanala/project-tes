<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class ProductSeeder extends Seeder
{
    public function run()
    {
    $response = Http::get('https://dummyjson.com/products');

    if ($response->successful()) {
        $data['product'] = $response->json()['products'];

        // Looping data dan masukkan ke dalam database
        foreach ($data as $item) {
            Product::create($item);
        }
    } else {
        // Tangani jika permintaan tidak berhasil
        $errorCode = $response->status();
        $errorMessage = $response->body();
        // ...
    }
}


    // $faker = \Faker\Factory::create('id_ID');
    //    $client = new Client();
    //     $response = $client->request('GET', 'https://dummyjson.com/products');
    //     $product = $response->getBody()->getContents();
    //     $data = json_decode($product,true);

    //     // Contoh: Memasukkan data ke dalam tabel menggunakan Eloquent
    //     foreach ($data as $item) {
    //         Product::create($item);
    //     }
    // }
}
