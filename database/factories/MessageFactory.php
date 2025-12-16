<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        $sender = User::inRandomOrder()->first();
        $receiver = User::where('id', '!=', optional($sender)->id)->inRandomOrder()->first();

        // If no users exist, fall back to nulls (seeder will handle)
        return [
            'sender_id' => $sender?->id,
            'receiver_id' => $receiver?->id,
            'message' => $this->faker->realText(80),
            'read' => $this->faker->boolean(55),
        ];
    }
}

