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
                'name_uz' => 'Kasalliklar',
                'name_en' => 'Diseases',
                'name_ru' => 'Болезни',
                'subcategories' => [
                    ['uz' => 'Yurak kasalliklari', 'en' => 'Cardiovascular', 'ru' => 'Сердечно-сосудистые'],
                    ['uz' => 'Nafas yo‘llari', 'en' => 'Respiratory', 'ru' => 'Дыхательная система'],
                ]
            ],
            [
                'name_uz' => 'Tibbiy maslahatlar',
                'name_en' => 'Medical Tips',
                'name_ru' => 'Медицинские советы',
                'subcategories' => [
                    ['uz' => 'Sog‘lom ovqatlanish', 'en' => 'Healthy Eating', 'ru' => 'Здоровое питание'],
                    ['uz' => 'Jismoniy faollik', 'en' => 'Physical Activity', 'ru' => 'Физическая активность'],
                ]
            ]
        ];

        foreach ($parentCategories as $parent) {
            $parentCategory = Category::create([
                'name_uz' => $parent['name_uz'],
                'name_en' => $parent['name_en'],
                'name_ru' => $parent['name_ru'],
                'parent_id' => null,
            ]);

            foreach ($parent['subcategories'] as $sub) {
                Category::create([
                    'name_uz' => $sub['uz'],
                    'name_en' => $sub['en'],
                    'name_ru' => $sub['ru'],
                    'parent_id' => $parentCategory->id,
                ]);
            }
        }
        $categories = Category::whereNotNull('parent_id')->get();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {
                $post = Post::create([
                    'category_id' => $category->id,
                    'title_uz' => "$category->name_uz bo‘yicha maslahat $i",
                    'title_en' => "$category->name_en advice $i",
                    'title_ru' => "$category->name_ru совет $i",
                    'content_uz' => "$category->name_uz haqida foydali ma'lumotlar. Bu $i-chi maqola.",
                    'content_en' => "Useful information about $category->name_en. This is article $i.",
                    'content_ru' => "Полезная информация о $category->name_ru. Это статья $i.",
//                    'status' => 'active',
                ]);

                for ($j = 1; $j <= 5; $j++) {
                    $post->images()->create([
                        'image' => "posts/ACaW6iQ9RpA4ak1ke4MbrUMKNG4deOOYawQv.jpg",
                    ]);
                }
            }
        }
    }



}
