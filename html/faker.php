$this->faker->name,                       // 名字
$this->faker->word,                       // 一句話
$this->faker->unique()->word,             // 一個獨特的詞
$this->faker->sentence,                   // 一個句子
$this->faker->paragraph,                  // 段落
$this->faker->realText(20),               // 真實文本20字
$this->faker->text($maxNbChars = 300),    // 300 個字符的長文本
$this->faker->safeEmail,                  // 電子郵件地址
$this->faker->hexcolor,                   // 十六進制顏色
$this->faker->randomDigit,                // 一個隨機數
rand(1,10),                               // 1-10的隨機數
$this->faker->unique()->numberBetween($min=0,$max=200),         // 介於0-200的隨機數
'slug' => 'articles-' . $this->faker->unique()->randomNumber    // 字串 . 唯一數
'pic' => 'images/blog-post-' . rand(1, 4) . '.jpg',             // 字串 . 隨機產生1-4的數字 . 字串
'pic' => $this->faker->imageUrl($width = 640, $height = 480),   //隨機產生 640*480圖片的url
$this->faker->randomElement(array(true,false)),                 // 隨機產生true或false
$this->faker->randomElement(array('published', 'draft', 'pending')),    // 隨機產生published, draft或pending
$this->faker->swiftBicNumber,                               // swift Bic號碼
Carbon::now()->addDays(rand(0,10)),                         //隨機產生日期,天數差額為0-10天
Carbon::createFromFormat('Y-m-d', $this->faker->date),      //隨機產生Y-m-d結構日期

進階
$price_og = $this->faker->randomNumber;
$price_new = $price_og * 0.8;
'price_og' => $price_og,
'price_new' => $price_new,

$chars = $this->faker->randomElements(array('多樣顏色可供挑選','尺寸齊全','30天內退費保證','尺碼齊全','樣式超多','可客製化','免費運送'), $count = 3);
$str_chars = implode(';', $chars);
//隨機產生3個陣列中的句子,並以';'串接
'chars' => $str_chars,

$pics = $this->faker->randomElements(array('elements/123.jpg','elements/234.jpg','elements/345.jpg','elements/456.jpg','elements/567.jpg'), $count = 2);
$str_pics = json_encode($pics, true);
//隨機產生2個陣列中的圖片路徑,並以json_encode格式輸出(集合)
'pics' => $str_pics,