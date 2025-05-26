<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parentCategories = [
            [
                'name_uz' => 'Yangiliklar',
                'name_ru' => 'Новости',
                'name_en' => 'News',

            ],
            [
                'name_uz' => 'Jaxon tibbiyoti',
                'name_ru' => 'Мировая медицина',
                'name_en' => 'World Medicine',

            ],
            [
                'name_uz' => 'Shifokor maslaxati',
                'name_en' => 'Doctor\'s advice',
                'name_ru' => 'Совет врача',

            ],
            [
                'name_uz' => 'Profilaktika',
                'name_en' => 'Prevention',
                'name_ru' => 'Профилактика',

            ],
            [
                'name_uz' => 'Sog\'lom turmush tarzi',
                'name_en' => 'Healthy lifestyle',
                'name_ru' => 'Здоровый образ жизни',

            ],
            [
                'name_uz' => 'Tabiatning ozi tabib',
                'name_en' => 'Nature\'s little healer',
                'name_ru' => 'Маленький целитель природы',

            ],
            [
                'name_uz' => 'Faoliyat',
                'name_en' => 'Activity',
                'name_ru' => 'Активность',

            ]
        ];

        foreach ($parentCategories as $parent) {
            $parentCategory = Category::create([
                'name_uz' => $parent['name_uz'],
                'name_en' => $parent['name_en'],
                'name_ru' => $parent['name_ru'],

            ]);

        }




    }



}
