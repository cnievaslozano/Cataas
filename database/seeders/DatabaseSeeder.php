<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\Models\CatImage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $client = new Client();

        $response = $client->get('https://cataas.com/api/cats?&skip=0&limit=100000');
        $data = json_decode($response->getBody(), true);

        foreach ($data as $item) {
            CatImage::create([
                '_id' => $item['_id'],
                'mimetype' => $item['mimetype'],
                'size' => isset($item['size']) ? $item['size'] : "0",
                'tags' => json_encode($item['tags']),
            ]);
        }
    }
}