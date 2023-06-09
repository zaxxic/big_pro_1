<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data pengguna
        $company = [
            ['name' => 'hai', 'email' => 'hai', 'npwp' => 'hai', 'addtelephoneress' => 'hai', 'city' => 'hai', 'postal_code' => 'hai', 'province' => 'hai', 'logo' => 'hai'],
            
            // Tambahkan data pengguna lain sesuai kebutuhan
        ];

        // Simpan data pengguna ke dalam tabel
        foreach ($company as $company) {
            Company::create($company);
        }
    }
}
