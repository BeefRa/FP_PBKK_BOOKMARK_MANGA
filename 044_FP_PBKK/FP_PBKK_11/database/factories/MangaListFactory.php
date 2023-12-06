<?php

namespace Database\Factories;
use App\Models\MangaList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MangaList>
 */
class MangaListFactory extends Factory
{
    protected $model = MangaList::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
        ];
    }
}