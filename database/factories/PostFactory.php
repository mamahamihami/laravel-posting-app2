<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 新しいユーザーを作成してuser_idに設定する
        $user = \App\Models\User::factory()->create();
        return [
            'user_id' => $user->id,
            'title' => fake()->realText(),
            'content' => fake()->realText()
        ];
    }
}
