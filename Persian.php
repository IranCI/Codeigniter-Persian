<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persian
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function numbers($numbers)
	{
		$numbers = $this->numbers_ar($numbers);
		$numbers = $this->numbers_en($numbers);

		return $numbers;
	}

	public function numbers_ar($numbers)
	{
		$find    = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
		$replace = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

		return (string) str_replace($find,$replace,$numbers);
	}

	public function numbers_en($numbers)
	{
		$find    = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$replace = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

		return (string) str_replace($find,$replace,$numbers);
	}

	public function numbers_to_english($numbers)
	{
		$find    = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
		$replace = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

		$numbers = str_replace($find,$replace,$numbers);

		$find    = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
		$replace = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

		return (string) str_replace($find,$replace,$numbers);
	}

	public function text($text)
	{

		$from = array(
			// collection 1
			array('؆','؇','؈','؉','؊','؍','؎','ؐ','ؑ','ؒ','ؓ','ؔ','ؕ','ؖ','ؘ','ؙ','ؚ','؞','ٖ','ٗ','٘','ٙ','ٚ','ٛ','ٜ','ٝ','ٞ','ٟ','٪','٬','٭','ہ','ۂ','ۃ','۔','ۖ','ۗ','ۘ','ۙ','ۚ','ۛ','ۜ','۞','۟','۠','ۡ','ۢ','ۣ','ۤ','ۥ','ۦ','ۧ','ۨ','۩','۪','۫','۬','ۭ','ۮ','ۯ','ﮧ','﮲','﮳','﮴','﮵','﮶','﮷','﮸','﮹','﮺','﮻','﮼','﮽','﮾','﮿','﯀','﯁','ﱞ','ﱟ','ﱠ','ﱡ','ﱢ','ﱣ','ﹰ','ﹱ','ﹲ','ﹳ','ﹴ','ﹶ','ﹷ','ﹸ','ﹹ','ﹺ','ﹻ','ﹼ','ﹽ','ﹾ','ﹿ'),
			// collection 2
			array('أ','إ','ٱ','ٲ','ٳ','ٵ','ݳ','ݴ','ﭐ','ﭑ','ﺃ','ﺄ','ﺇ','ﺈ','ﺍ','ﺎ','𞺀','ﴼ','ﴽ','𞸀'),
			// collection 3
			array('ٮ','ݕ','ݖ','ﭒ','ﭓ','ﭔ','ﭕ','ﺏ','ﺐ','ﺑ','ﺒ','𞸁','𞸜','𞸡','𞹡','𞹼','𞺁','𞺡'),
			// collection 4
			array('ڀ','ݐ','ݔ','ﭖ','ﭗ','ﭘ','ﭙ','ﭚ','ﭛ','ﭜ','ﭝ'),
			// collection 5
			array('ٹ','ٺ','ٻ','ټ','ݓ','ﭞ','ﭟ','ﭠ','ﭡ','ﭢ','ﭣ','ﭤ','ﭥ','ﭦ','ﭧ','ﭨ','ﭩ','ﺕ','ﺖ','ﺗ','ﺘ','𞸕','𞸵','𞹵','𞺕','𞺵'),
			// collection 6
			array('ٽ','ٿ','ݑ','ﺙ','ﺚ','ﺛ','ﺜ','𞸖','𞸶','𞹶','𞺖','𞺶'),
			// collection 7
			array('ڃ','ڄ','ﭲ','ﭳ','ﭴ','ﭵ','ﭶ','ﭷ','ﭸ','ﭹ','ﺝ','ﺞ','ﺟ','ﺠ','𞸂','𞸢','𞹂','𞹢','𞺂','𞺢'),
			// collection 8
			array('ڇ','ڿ','ݘ','ﭺ','ﭻ','ﭼ','ﭽ','ﭾ','ﭿ','ﮀ','ﮁ','𞸃','𞺃'),
			// collection 9
			array('ځ','ݮ','ݯ','ݲ','ݼ','ﺡ','ﺢ','ﺣ','ﺤ','𞸇','𞸧','𞹇','𞹧','𞺇','𞺧'),
			// collection 10
			array('ڂ','څ','ݗ','ﺥ','ﺦ','ﺧ','ﺨ','𞸗','𞸷','𞹗','𞹷','𞺗','𞺷'),
			// collection 11
			array('ڈ','ډ','ڊ','ڌ','ڍ','ڎ','ڏ','ڐ','ݙ','ݚ','ﺩ','ﺪ','𞺣','ﮂ','ﮃ','ﮈ','ﮉ'),
			// collection 12
			array('ﱛ','ﱝ','ﺫ','ﺬ','𞸘','𞺘','𞺸','ﮄ','ﮅ','ﮆ','ﮇ'),
			// collection 13
			array('٫','ڑ','ڒ','ړ','ڔ','ڕ','ږ','ݛ','ݬ','ﮌ','ﮍ','ﱜ','ﺭ','ﺮ','𞸓','𞺓','𞺳'),
			// collection 14
			array('ڗ','ڙ','ݫ','ݱ','ﺯ','ﺰ','𞸆','𞺆','𞺦'),
			// collection 15
			array('ﮊ','ﮋ','ژ'),
			// collection 16
			array('ښ','ݽ','ݾ','ﺱ','ﺲ','ﺳ','ﺴ','𞸎','𞸮','𞹎','𞹮','𞺎','𞺮'),
			// collection 17
			array('ڛ','ۺ','ݜ','ݭ','ݰ','ﺵ','ﺶ','ﺷ','ﺸ','𞸔','𞸴','𞹔','𞹴','𞺔','𞺴'),
			// collection 18
			array('ڝ','ﺹ','ﺺ','ﺻ','ﺼ','𞸑','𞹑','𞸱','𞹱','𞺑','𞺱'),
			// collection 19
			array('ڞ','ۻ','ﺽ','ﺾ','ﺿ','ﻀ','𞸙','𞸹','𞹙','𞹹','𞺙','𞺹'),
			// collection 20
			array('ﻁ','ﻂ','ﻃ','ﻄ','𞸈','𞹨','𞺈','𞺨'),
			// collection 21
			array('ڟ','ﻅ','ﻆ','ﻇ','ﻈ','𞸚','𞹺','𞺚','𞺺'),
			// collection 22
			array('؏','ڠ','ﻉ','ﻊ','ﻋ','ﻌ','𞸏','𞸯','𞹏','𞹯','𞺏','𞺯'),
			// collection 23
			array('ۼ','ݝ','ݞ','ݟ','ﻍ','ﻎ','ﻏ','ﻐ','𞸛','𞸻','𞹛','𞹻','𞺛','𞺻'),
			// collection 24
			array('؋','ڡ','ڢ','ڣ','ڤ','ڥ','ڦ','ݠ','ݡ','ﭪ','ﭫ','ﭬ','ﭭ','ﭮ','ﭯ','ﭰ','ﭱ','ﻑ','ﻒ','ﻓ','ﻔ','𞸐','𞸞','𞸰','𞹰','𞹾','𞺐','𞺰'),
			// collection 25
			array('ٯ','ڧ','ڨ','ﻕ','ﻖ','ﻗ','ﻘ','𞸒','𞸟','𞸲','𞹒','𞹟','𞹲','𞺒','𞺲','؈'),
			// collection 26
			array('ػ','ؼ','ك','ڪ','ګ','ڬ','ڭ','ڮ','ݢ','ݣ','ݤ','ݿ','ﮎ','ﮏ','ﮐ','ﮑ','ﯓ','ﯔ','ﯕ','ﯖ','ﻙ','ﻚ','ﻛ','ﻜ','𞸊','𞸪','𞹪'),
			// collection 27
			array('ڰ','ڱ','ڲ','ڳ','ڴ','ﮒ','ﮓ','ﮔ','ﮕ','ﮖ','ﮗ','ﮘ','ﮙ','ﮚ','ﮛ','ﮜ','ﮝ'),
			// collection 28
			array('ڵ','ڶ','ڷ','ڸ','ݪ','ﻝ','ﻞ','ﻟ','ﻠ','𞸋','𞸫','𞹋','𞺋','𞺫'),
			// collection 29
			array('۾','ݥ','ݦ','ﻡ','ﻢ','ﻣ','ﻤ','𞸌','𞸬','𞹬','𞺌','𞺬'),
			// collection 30
			array('ڹ','ں','ڻ','ڼ','ڽ','ݧ','ݨ','ݩ','ﮞ','ﮟ','ﮠ','ﮡ','ﻥ','ﻦ','ﻧ','ﻨ','𞸍','𞸝','𞸭','𞹍','𞹝','𞹭','𞺍','𞺭'),
			// collection 31
			array('ؤ','ٶ','ٷ','ۄ','ۅ','ۆ','ۇ','ۈ','ۉ','ۊ','ۋ','ۏ','ݸ','ݹ','ﯗ','ﯘ','ﯙ','ﯚ','ﯛ','ﯜ','ﯝ','ﯞ','ﯟ','ﯠ','ﯡ','ﯢ','ﯣ','ﺅ','ﺆ','ﻭ','ﻮ','𞸅','𞺅','𞺥'),
			// collection 32
			array('ة','ھ','ۀ','ە','ۿ','ﮤ','ﮥ','ﮦ','ﮩ','ﮨ','ﮪ','ﮫ','ﮬ','ﮭ','ﺓ','ﺔ','ﻩ','ﻪ','ﻫ','ﻬ','𞸤','𞹤','𞺄'),
			// collection 33
			array('ؠ','ئ','ؽ','ؾ','ؿ','ى','ي','ٸ','ۍ','ێ','ې','ۑ','ے','ۓ','ݵ','ݶ','ݷ','ݺ','ݻ','ﮢ','ﮣ','ﮮ','ﮯ','ﮰ','ﮱ','ﯤ','ﯥ','ﯦ','ﯧ','ﯨ','ﯩ','ﯼ','ﯽ','ﯾ','ﯿ','ﺉ','ﺊ','ﺋ','ﺌ','ﻯ','ﻰ','ﻱ','ﻲ','ﻳ','ﻴ','𞸉','𞸩','𞹉','𞹩','𞺉','𞺩'),
			// collection 34
			array('ٴ','۽','ﺀ'),
			// collection 35
			array('ﻵ','ﻶ','ﻷ','ﻸ','ﻹ','ﻺ','ﻻ','ﻼ'),
			// collection 36
			array('ﷲ','﷼','ﷳ','ﷴ','ﷵ','ﷶ','ﷷ','ﷸ','ﷹ','ﷺ','ﷻ')
			);

		$to = array(
			// collection 1
			'',
			// collection 2
			'ا',
			// collection 3
			'ب',
			// collection 4
			'پ',
			// collection 5
			'ت',
			// collection 6
			'ث',
			// collection 7
			'ج',
			// collection 8
			'چ',
			// collection 9
			'ح',
			// collection 10
			'خ',
			// collection 11
			'د',
			// collection 12
			'ذ',
			// collection 13
			'ر',
			// collection 14
			'ز',
			// collection 15
			'ژ',
			// collection 16
			'س',
			// collection 17
			'ش',
			// collection 18
			'ص',
			// collection 19
			'ض',
			// collection 20
			'ط',
			// collection 21
			'ظ',
			// collection 22
			'ع',
			// collection 23
			'غ',
			// collection 24
			'ف',
			// collection 25
			'ق',
			// collection 26
			'ک',
			// collection 27
			'گ',
			// collection 28
			'ل',
			// collection 29
			'م',
			// collection 30
			'ن',
			// collection 31
			'و',
			// collection 32
			'ه',
			// collection 33
			'ی',
			// collection 34
			'ء',
			// collection 35
			'لا',
			// collection 36
			array('الله','ریال','اکبر','محمد','صلعم','رسول','علیه','وسلم','صلی','صلی الله علیه وسلم','جل جلاله')
			);


		for ($i=0; $i < count($from); $i++) { 
			$text = str_replace($from[$i],$to[$i],$text);
		}

		preg_match('/([!\w\s{*}]+)/ui',$text,$matches);

		if (! is_array($matches) || count($matches) < 1) {
			return null;
		}

		return (string) $matches[0];
	}

	public function standard($string)
	{
		$string = $this->numbers_to_english($string);
		$string = $this->text($string);

		return $string;
	}

}

/* End of file Persian.php */
/* Location: /Codeigniter-Persian/Persian.php */
