<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Address extends \Faker\Provider\Address {
	/**
	 * @var array Countries in icelandic
	 */
	protected static $country = array(
		'Afganistan', 'Albania', 'Alsir', 'Andorra', 'Angóla', 'Angvilla', 'Antigva og Barbúda', 'Argentina',
		'Armenia', 'Arúba', 'Aserbaidsjan', 'Austur-Kongó', 'Austurriki', 'Austur-Timor', 'Álandseyjar',
		'Ástralia', 'Bahamaeyjar', 'Bandarikin', 'Bandariska Samóa', 'Bangladess', 'Barbados', 'Barein',
		'Belgia', 'Belis', 'Benin', 'Bermúdaeyjar', 'Bosnia og Hersegóvina', 'Botsvana', 'Bouvet-eyja', 'Bólivia',
		'Brasilia', 'Bresku Indlandshafseyjar', 'Bretland', 'Brúnei', 'Búlgaria', 'Búrkina Fasó', 'Búrúndi', 'Bútan',
		'Cayman-eyjar', 'Chile', 'Cooks-eyjar', 'Danmörk', 'Djibúti', 'Dóminika', 'Dóminiska lýðveldið', 'Egyptaland',
		'Eistland', 'Ekvador', 'El Salvador', 'England', 'Eritrea', 'Eþiópia', 'Falklandseyjar', 'Filippseyjar',
		'Finnland', 'Fidjieyjar', 'Filabeinsströndin', 'Frakkland', 'Franska Gvæjana', 'Franska Pólýnesia',
		'Frönsku suðlægu landsvæðin', 'Færeyjar', 'Gabon', 'Gambia', 'Gana', 'Georgia', 'Gibraltar', 'Ginea',
		'Ginea-Bissá', 'Grenada', 'Grikkland', 'Grænhöfðaeyjar', 'Grænland', 'Gvadelúpeyjar', 'Gvam', 'Gvatemala',
		'Gvæjana', 'Haiti', 'Heard og McDonalds-eyjar', 'Holland', 'Hollensku Antillur', 'Hondúras', 'Hong Kong',
		'Hvita-Rússland', 'Indland', 'Indónesia', 'irak', 'iran', 'irland', 'island', 'israel', 'italia', 'Jamaika',
		'Japan', 'Jemen', 'Jólaey', 'Jómfrúaeyjar', 'Jórdania', 'Kambódia', 'Kamerún', 'Kanada', 'Kasakstan', 'Katar',
		'Kenia', 'Kirgisistan', 'Kina', 'Kiribati', 'Kongó', 'Austur-Kongó', 'Vestur-Kongó', 'Kostarika', 'Kókoseyjar',
		'Kólumbia', 'Kómoreyjar', 'Kórea', 'Norður-Kórea;', 'Suður-Kórea', 'Króatia', 'Kúba', 'Kúveit', 'Kýpur',
		'Laos', 'Lesótó', 'Lettland', 'Liechtenstein', 'Litháen', 'Libanon', 'Liberia', 'Libia', 'Lúxemborg',
		'Madagaskar', 'Makaó', 'Makedónia', 'Malasia', 'Malavi', 'Maldiveyjar', 'Mali', 'Malta', 'Marokkó',
		'Marshall-eyjar', 'Martinik', 'Mayotte', 'Máritania', 'Máritius', 'Mexikó', 'Mið-Afrikulýðveldið',
		'Miðbaugs-Ginea', 'Mikrónesia', 'Mjanmar', 'Moldóva', 'Mongólia', 'Montserrat', 'Mónakó', 'Mósambik',
		'Namibia', 'Nárú', 'Nepal', 'Niue', 'Niger', 'Nigeria', 'Nikaragva', 'Norður-irland', 'Norður-Kórea',
		'Norður-Marianaeyjar', 'Noregur', 'Norfolkeyja', 'Nýja-Kaledónia', 'Nýja-Sjáland', 'Óman', 'Pakistan',
		'Palá', 'Palestina', 'Panama', 'Papúa Nýja-Ginea', 'Paragvæ', 'Páfagarður', 'Perú', 'Pitcairn', 'Portúgal',
		'Pólland', 'Púertó Rikó', 'Réunion', 'Rúanda', 'Rúmenia', 'Rússland', 'Salómonseyjar', 'Sambia',
		'Sameinuðu arabisku furstadæmin', 'Samóa', 'San Marinó', 'Sankti Helena', 'Sankti Kristófer og Nevis',
		'Sankti Lúsia', 'Sankti Pierre og Miquelon', 'Sankti Vinsent og Grenadineyjar', 'Saó Tóme og Prinsipe',
		'Sádi-Arabia', 'Senegal', 'Serbia', 'Seychelles-eyjar', 'Simbabve', 'Singapúr', 'Sierra Leóne', 'Skotland',
		'Slóvakia', 'Slóvenia', 'Smáeyjar Bandarikjanna', 'Sómalia', 'Spánn', 'Sri Lanka', 'Suður-Afrika',
		'Suður-Georgia og Suður-Sandvikureyjar', 'Suður-Kórea', 'Suðurskautslandið', 'Súdan', 'Súrinam', 'Jan Mayen',
		'Svartfjallaland', 'Svasiland', 'Sviss', 'Sviþjóð', 'Sýrland', 'Tadsjikistan', 'Tailand', 'Taivan', 'Tansania',
		'Tékkland', 'Tonga', 'Tógó', 'Tókelá', 'Trinidad og Tóbagó', 'Tsjad', 'Tsjetsjenia', 'Turks- og Caicos-eyjar',
		'Túnis', 'Túrkmenistan', 'Túvalú', 'Tyrkland', 'Ungverjaland', 'Úganda', 'Úkraina', 'Úrúgvæ', 'Úsbekistan',
		'Vanúatú', 'Venesúela', 'Vestur-Kongó', 'Vestur-Sahara', 'Vietnam', 'Wales', 'Wallis- og Fútúnaeyjar', 'Þýskaland',
	);

	/**
	 * @var array Icelandic cities.
	 */
	protected static $cityNames = array(
		'Reykjavik', 'Seltjarnarnes', 'Vogar', 'Kópavogur', 'Garðabær', 'Hafnarfjörður', 'Reykjanesbær', 'Grindavik',
		'Sandgerði', 'Garður', 'Reykjanesbær', 'Mosfellsbær', 'Akranes', 'Borgarnes', 'Reykholt', 'Stykkishólmur',
		'Flatey', 'Grundarfjörður', 'Ólafsvik', 'Snæfellsbær', 'Hellissandur', 'Búðardalur', 'Reykhólahreppur',
		'isafjörður', 'Hnifsdalur', 'Bolungarvik', 'Súðavik', 'Flateyri', 'Suðureyri', 'Patreksfjörður',
		'Tálknafjörður', 'Bildudalur', 'Þingeyri', 'Staður', 'Hólmavik', 'Drangsnes', 'Árneshreppur', 'Hvammstangi',
		'Blönduós', 'Skagaströnd', 'Sauðárkrókur', 'Varmahlið', 'Hofsós', 'Fljót', 'Siglufjörður', 'Akureyri',
		'Grenivik', 'Grimsey', 'Dalvik', 'Ólafsfjörður', 'Hrisey', 'Húsavik', 'Fosshóll', 'Laugar', 'Mývatn',
		'Kópasker', 'Raufarhöfn', 'Þórshöfn', 'Bakkafjörður', 'Vopnafjörður', 'Egilsstaðir', 'Seyðisfjörður',
		'Mjóifjörður', 'Borgarfjörður', 'Reyðarfjörður', 'Eskifjörður', 'Neskaupstaður', 'Fáskrúðsfjörður',
		'Stöðvarfjörður', 'Breiðdalsvik', 'Djúpivogur', 'Höfn', 'Selfoss', 'Hveragerði', 'Þorlákshöfn', 'Ölfus',
		'Eyrarbakki', 'Stokkseyri', 'Laugarvatn', 'Flúðir', 'Hella', 'Hvolsvöllur', 'Vik', 'Kirkjubæjarklaustur',
		'Vestmannaeyjar',
	);

	/**
	 * @var array Street name suffix.
	 */
	protected static $streetSuffix = array(
		'ás', 'bakki', 'braut', 'bær', 'brún', 'berg', 'fold', 'gata', 'gróf',
		'garðar', 'höfði', 'heimar', 'hamar', 'hólar', 'háls', 'kvisl', 'lækur',
		'leiti', 'land', 'múli', 'nes', 'rimi', 'stigur', 'stræti', 'stekkur',
		'slóð', 'skógar', 'sel', 'teigur', 'tún', 'vangur', 'vegur', 'vogur',
		'vað',
	);

	/**
	 * @var array Street name prefix.
	 */
	protected static $streetPrefix = array(
		'Aðal', 'Austur', 'Bakka', 'Braga', 'Báru', 'Brunn', 'Fiski', 'Leifs',
		'Týs', 'Birki', 'Suður', 'Norður', 'Vestur', 'Austur', 'Sanda', 'Skógar',
		'Stór', 'Sunnu', 'Tungu', 'Tangar', 'Úlfarfells', 'Vagn', 'Vind', 'Ysti',
		'Þing', 'Hamra', 'Hóla', 'Kriu', 'Iðu', 'Spóa', 'Starra', 'Uglu', 'Vals',
	);

	/**
	 * @var Icelandic zip code.
	 **/
	protected static $postcode = array(
		'%##',
	);

	/**
	 * @var array Icelandic regions.
	 */
	protected static $regionNames = array(
		'Höfuðborgarsvæðið', 'Norðurland', 'Suðurland', 'Vesturland', 'Vestfirðir', 'Austurland', 'Suðurnes',
	);

	/**
	 * @var array Icelandic building numbers.
	 */
	protected static $buildingNumber = array(
		'%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
	);

	/**
	 * @var array Icelandic city format.
	 */
	protected static $cityFormats = array(
		'{{cityName}}',
	);

	/**
	 * @var array Icelandic street's name formats.
	 */
	protected static $streetNameFormats = array(
		'{{streetPrefix}}{{streetSuffix}}',
		'{{streetPrefix}}{{streetSuffix}}',
		'{{firstNameMale}}{{streetSuffix}}',
		'{{firstNameFemale}}{{streetSuffix}}',
	);

	/**
	 * @var array Icelandic street's address formats.
	 */
	protected static $streetAddressFormats = array(
		'{{streetName}} {{buildingNumber}}',
	);

	/**
	 * @var array Icelandic address format.
	 */
	protected static $addressFormats = array(
		"{{streetAddress}}\n{{postcode}} {{city}}",
	);

	/**
	 * Randomly return a real city name.
	 *
	 * @return string
	 */
	public static function cityName() {
		return static::randomElement(static::$cityNames);
	}

	/**
	 * Randomly return a street prefix.
	 *
	 * @return string
	 */
	public static function streetPrefix() {
		return static::randomElement(static::$streetPrefix);
	}

	/**
	 * Randomly return a building number.
	 *
	 * @return string
	 */
	public static function buildingNumber() {
		return static::toUpper(static::bothify(static::randomElement(static::$buildingNumber)));
	}

	/**
	 * Randomly return a real region name.
	 *
	 * @return string
	 */
	public static function region() {
		return static::randomElement(static::$regionNames);
	}
}
