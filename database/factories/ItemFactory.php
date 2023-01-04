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
        $chars = $this->faker->randomElements(array ('多樣顏色可供挑選','尺寸齊全','30天退款保證','尺度驚奇','樣式超多','支援克制','免費運送'), $count = 3);
        $str_chars = implode(';',$chars);
        $pics = $this->faker->randomElements(array ('items/md-9b2958642621fc80479759bd76bced0c.jpg','items/original.jpg','items/md-9b2958642621fc80479759bd76bced0c.jpg','items/20201006-101640_U19741_M643789_f8c7.jpg','items/md-9b2958642621fc80479759bd76bced0c.jpg','items/original.jpg'), $count = 2);
        $str_pics = json_encode($pics,true);
        return [
            'title' => $this->faker->word,
            'price_og' => $price_og, 
            'price_new' => $price_new,
            'star' => rand(1,10),
            'enabled' => $this->faker->randomElement(array(true,false)), 
            'sort' => $this->faker->unique()->numberBetween($min=0,$max=200),
            'desc' => $this->faker->sentence,
            'stock' => rand(0,100),
            'sku' => $this->faker->swiftBicNumber,
            'cgy_id' => rand(1,3),
            'chars' => $str_chars,
            'badge' => $this->faker->word,
            'pics' => $str_pics

        ];
    }
}

