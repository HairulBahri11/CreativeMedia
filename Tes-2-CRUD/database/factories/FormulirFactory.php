<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FormulirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            // 'agama' sesuai enum islam kristen katolik hindu budha
            'agama' => $this->faker->randomElement(['islam', 'kristen', 'katolik', 'hindu', 'budha']),
            'kebangsaan' => $this->faker->country,
            'pendidikan_terakhir' => $this->faker->jobTitle,
            'pt' => $this->faker->company,
            'jurusan' => $this->faker->jobTitle,
            'ipk' => $this->faker->randomFloat(2, 0, 4),
            'suku' => $this->faker->randomElement(['dayak', 'madura', 'jawa', 'tionghoa', 'batak', 'sunda']),
            'foto' => $this->faker->imageUrl(),
            'alamat' => $this->faker->address,
        ];
    }
}
