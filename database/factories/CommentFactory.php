<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $liked=[0,1];
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'game_id' => Game::inRandomOrder()->first()->id,
            'liked' => $liked[array_rand($liked)],
            'content' => $this->faker->text,
        ];
    }
}
