<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [
                ProductSeederA::class,
                ProductSeederB::class,
                ProductSeederC::class,
                ProductSeederD::class,
                ProductSeederE::class,
                ProductSeederF::class,
            ]
        );
    }
}
