<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $price_og = $this->faker->randomNumber;
        $price_new = $price_og * 0.8;
        return [
            'title' => $this->faker->word,
            'price_og' => $price_og, 
            'price_new' => $price_new,
            'star' => rand(1,10),
            'enabled' => $this->faker->randomElement(array(true,false)), 
            'sort' => $this->faker->unique()->numberBetween($min=0,$max=200),
            'desc' => , 
            'stock' => 6, 
            'sku' => 'AF4487375', 
            'cgy_id' =>3,
            'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證',
             'pics' => 'pants/1.jpg,pants/1-1.jpg'

        ];
    }
}
