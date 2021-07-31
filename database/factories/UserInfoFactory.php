<?php

namespace Database\Factories;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomNumber(8),
            'login_key' => $this->faker->password(),
            'password' => $this->faker->password(),
            'name' => $this->faker->name(),
            'name_kana' => $this->faker->kanaName,
            'age' => $this->faker->numberBetween(10,100),
            'gender' => $this->faker->randomElement(['0','1','2']),
            'email' => $this->faker->unique()->safeEmail(),
            'tell' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'update_at' => $this->faker->date($format='Y-m-d',$max='now'),
            'create_at' => $this->faker->date($format='Y-m-d',$max='update_at'),
            'deleted_flag' => 0,

        ];
    }
}
