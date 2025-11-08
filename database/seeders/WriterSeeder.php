<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-smiling-woman-jane-sitting-with-crossed-legs-holding-laptop-freelance-studying-online-education-work-home-work-concept-3d-vector-people-character-illustration-cartoon-minimal-style_365941-742.jpg',
            'name' => 'Bia Mecca Annisa',
            'specialization' => 'Spesialis Data Science'
        ]);

        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-smiling-woman-jane-sitting-with-crossed-legs-holding-laptop-freelance-studying-online-education-work-home-work-concept-3d-vector-people-character-illustration-cartoon-minimal-style_365941-742.jpg',
            'name' => 'Lia Mecca Annisa',
            'specialization' => 'Spesialis Data Science'
        ]);

        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-smiling-woman-jane-sitting-with-crossed-legs-holding-laptop-freelance-studying-online-education-work-home-work-concept-3d-vector-people-character-illustration-cartoon-minimal-style_365941-742.jpg',
            'name' => 'Husna Mecca Annisa',
            'specialization' => 'Spesialis Data Science'
        ]);

        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-man-finding-new-idea-shiny-light-bulb-flat-style-cartoon-vector-illustration_357257-1121.jpg',
            'name' => 'Abi Firmansyah',
            'specialization' => 'Spesialis Network Security'
        ]);

        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-man-finding-new-idea-shiny-light-bulb-flat-style-cartoon-vector-illustration_357257-1121.jpg',
            'name' => 'Ali Firmansyah',
            'specialization' => 'Spesialis Network Security'
        ]);

        Writer::create([
            'image_url' => 'https://img.freepik.com/premium-vector/young-man-finding-new-idea-shiny-light-bulb-flat-style-cartoon-vector-illustration_357257-1121.jpg',
            'name' => 'Arya Firmansyah',
            'specialization' => 'Spesialis Network Security'
        ]);
    }
}
