<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umkm;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            Umkm::create([
                'nama'       => fake()->company(),
                'kategori'   => fake()->randomElement(['Kuliner','Fashion','Kriya','Teknologi']),
                'kota'       => fake()->city(),
                'deskripsi'  => fake()->sentence(15),
                'gambar'     => fake()->imageUrl(800,500,'business',true),
                'alamat'     => fake()->address(),
                'kontak'     => fake()->phoneNumber(),
                'website'    => fake()->optional()->url(),
                'instagram'  => '@'.fake()->userName(),
            ]);
        }
    }
}
