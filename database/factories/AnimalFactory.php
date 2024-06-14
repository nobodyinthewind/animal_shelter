<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dogBreeds = [
            'Labrador Retriever',
            'German Shepherd',
            'Golden Retriever',
            'Bulldog',
            'Beagle',
            'Poodle',
            'Rottweiler',
            'Yorkshire Terrier',
            'Boxer',
            'Dachshund',
        ];

        $catBreeds = [
            'Siamese',
            'Persian',
            'Maine Coon',
            'Ragdoll',
            'Bengal',
            'Sphynx',
            'Birman',
            'Oriental',
            'Abyssinian',
            'Scottish Fold',
        ];

        $dogNames = [
            'Max', 'Bella', 'Charlie', 'Molly', 'Buddy', 'Lucy', 'Rocky', 'Daisy', 'Jack', 'Sadie',
        ];

        $catNames = [
            'Luna', 'Oliver', 'Leo', 'Milo', 'Loki', 'Bella', 'Nala', 'Simba', 'Chloe', 'Max',
        ];

        $type = $this->faker->randomElement(['dog', 'cat']);
        $name = 'dog' === $type ? $this->faker->randomElement($dogNames) : $this->faker->randomElement($catNames);
        $breed = 'dog' === $type ? $this->faker->randomElement($dogBreeds) : $this->faker->randomElement($catBreeds);

        return [
            'name' => $name,
            'sex' => fake()->randomElement(['male', 'female']),
            'breed' => $breed,
            'age' => fake()->randomElement([1, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]),
            'dob' => fake()->date(),
            'colour' => fake()->colorName(),
            'markings' => fake()->text(255),
            'note' => fake()->text(),
            'short_description' => fake()->text(),
            'pic2' => 'https://placedog.net/640/480?random',
            'pic3' => 'https://placedog.net/640/480?random',
            'pic4' => 'https://placedog.net/640/480?random',
            'wormed' => fake()->date(),
            'fleaed' => fake()->date(),
            'incoming' => fake()->date(),
            'microchip' => fake()->uuid(),
            'kennel_cough' => fake()->date(),
            'spayed_neutered' => fake()->date(),
            'located_date' => fake()->date(),
            'status' => fake()->randomElement(['available', 'adopted', 'reserved', 'special-homes']),
            'training_dec_due' => fake()->date(),
            'weight' => fake()->randomElement([1, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]),
            'first_jab' => fake()->date(),
            'spay_dec_due' => fake()->date(),
            'second_jab' => fake()->date(),
            'medical_note' => fake()->text(),
            'training_dec_returned' => fake()->date(),
            'spay_dec_returned' => fake()->date(),
            'booster_due' => fake()->date(),
            'stitches_out' => fake()->date(),
            'status_change' => fake()->dateTime(),
            'assessment_note' => fake()->text(),
            'other_note' => fake()->text(),
            'adopt_app' => fake()->text(255),
            'dom_update' => fake()->dateTime(),
            'l_modified' => fake()->dateTime(),
            'r_homing' => fake()->text(255),
            'locked' => fake()->text(255),
            'locked_time' => fake()->dateTime(),
            'adopt_wording' => fake()->text(),
            'available_date' => fake()->date(),
            'updated_date' => fake()->date(),
            'dom_date' => fake()->date(),
            'age_no' => fake()->randomNumber(2),
            'dom' => fake()->boolean(),
            'dow' => fake()->boolean(),
            'baby' => fake()->boolean(),
            'ex_breeding' => fake()->boolean(),
            'only_animal' => fake()->boolean(),
            'from_outside' => fake()->boolean(),
            'update_chip' => fake()->boolean(),
            'type' => fake()->randomElement(['dog', 'cat', 'other']),
            'assessment_date' => fake()->dateTime(),
            'vetter_note' => fake()->text(),
            'located_at' => User::factory(),
        ];
    }
}
