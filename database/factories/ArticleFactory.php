<?php

namespace Database\Factories;

use app\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     *
     *  @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'noSerie'=> $this->faker->swiftBicNumber,
            'imageURl'=> $this->faker->imageURl(),
            'estDisponible'=>rand(0,1),
            'type_article_id' =>rand(1,4)

        ];
    }
}
