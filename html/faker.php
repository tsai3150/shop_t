


<?php
namespace Database\Factories;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $chars = $this->faker->randomElements(array ('多樣顏色可供挑選','尺寸齊全','30天退款保證','尺度驚奇','樣式超多','支援克制','免費運送'), $count = 3);
        $str_chars = implode(';', $chars);
        $pics = $this->faker->randomElements(array ('items/md-9b2958642621fc80479759bd76bced0c.jpg','items/original.jpg','items/md-9b2958642621fc80479759bd76bced0c.jpg','items/20201006-101640_U19741_M643789_f8c7.jpg','items/md-9b2958642621fc80479759bd76bced0c.jpg','items/original.jpg'), $count = 2);
        $str_pics = json_encode($pics,true);

        return [

        ];
    }
}
