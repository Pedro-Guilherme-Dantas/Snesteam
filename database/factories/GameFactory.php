<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $Path = storage_path('game_covers');
        return [
            'title' => $this->faker->word,
            'description'=> $this->faker->text,
            'cover' => $this->faker->image('public/storage/game_covers',640,480, null,false),
            'img1' =>$this->faker->image('public/storage/game_images',640,480, null, false),
            'img2' => $this->faker->image('public/storage/game_images',640,480, null, false),
            'img3' => $this->faker->image('public/storage/game_images',640,480, null, false),
            'img4' => $this->faker->image('public/storage/game_images',640,480, null, false),
            'file' => $this->faker->file('public/storage/arquivosFactory', 'public/storage/game_files', false),
        ];
    }
}
