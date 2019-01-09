<?php

namespace Faker\Provider\cs_CZ;

class Address extends \Faker\Provider\Address {
	protected static $streetAddressFormats = array(
		'{{streetName}}',
		'{{streetName}} {{buildingNumber}}',
		'{{streetName}} {{buildingNumber}}',
		'{{streetName}} {{buildingNumber}}',
		'{{streetName}} {{buildingNumber}}',
	);

	protected static $addressFormats = array(
		"{{streetAddress}}\n{{region}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}",
		"{{streetAddress}}\n{{postcode}} {{city}}\nČeská republika",
	);

	protected static $buildingNumber = array('%', '%%', '%/%%', '%%/%%', '%/%%%', '%%/%%%');

	protected static $postcode = array('#####', '### ##');

	/**
	 * Source: https://cs.wikipedia.org/wiki/Seznam_m%C4%9Bst_v_%C4%8Cesku_podle_po%C4%8Dtu_obyvatel
	 */
	protected static $city = array(
		'Brno', 'Břeclav', 'Cheb', 'Chomutov', 'Chrudim', 'Černošice', 'Česká Lipa', 'České Budějovice',
		'Český Těšin', 'Děčin', 'Frýdek-Mistek', 'Havličkův Brod', 'Haviřov', 'Hodonin', 'Hradec Králové',
		'Jablonec nad Nisou', 'Jihlava', 'Karlovy Vary', 'Karviná', 'Kladno', 'Kolin', 'Krnov', 'Kroměřiž',
		'Liberec', 'Litoměřice', 'Litvinov', 'Mladá Boleslav', 'Most', 'Nový Jičin', 'Olomouc', 'Opava', 'Orlová',
		'Ostrava', 'Pardubice', 'Plzeň', 'Praha', 'Prostějov', 'Pisek', 'Přerov', 'Přibram', 'Sokolov', 'Šumperk',
		'Teplice', 'Trutnov', 'Tábor', 'Třebič', 'Třinec', 'Uherské Hradiště', 'Ústi nad Labem',
		'Valašské Meziřiči', 'Vsetin', 'Zlin', 'Znojmo',
	);

	/**
	 * Source: https://cs.wikipedia.org/wiki/Seznam_st%C3%A1t%C5%AF_sv%C4%9Bta
	 */
	protected static $country = array(
		'Afghánistán', 'Albánie', 'Alžirsko', 'Andorra', 'Angola', 'Antigua a Barbuda', 'Argentina',
		'Arménie', 'Austrálie', 'Ázerbájdžán', 'Bahamy', 'Bahrajn', 'Bangladéš', 'Barbados', 'Belgie',
		'Belize', 'Benin', 'Bělorusko', 'Bhútán', 'Bolivie', 'Bosna a Hercegovina', 'Botswana', 'Brazilie',
		'Brunej', 'Bulharsko', 'Burkina Faso', 'Burundi', 'Cookovy ostrovy', 'Čad', 'Černá Hora', 'Česká republika',
		'Čina', 'Dánsko', 'Demokratická republika Kongo', 'Dominika', 'Dominikánská republika', 'Džibutsko',
		'Egypt', 'Ekvádor', 'Eritrea', 'Estonsko', 'Etiopie', 'Fidži', 'Filipiny', 'Finsko', 'Francie', 'Gabon',
		'Gambie', 'Ghana', 'Grenada', 'Gruzie', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras',
		'Chile', 'Chorvatsko', 'Indie', 'Indonésie', 'Irák', 'irán', 'Irsko', 'Island', 'Itálie', 'Izrael', 'Jamajka',
		'Japonsko', 'Jemen', 'Jihoafrická republika', 'Jižni Korea', 'Jižni Súdán', 'Jordánsko', 'Kambodža', 'Kamerun',
		'Kanada', 'Kapverdy', 'Katar', 'Kazachstán', 'Keňa', 'Kiribati', 'Kolumbie', 'Komory', 'Republika Kongo',
		'Kostarika', 'Kuba', 'Kuvajt', 'Kypr', 'Kyrgyzstán', 'Laos', 'Lesotho', 'Libanon', 'Libérie', 'Libye',
		'Lichtenštejnsko', 'Litva', 'Lotyšsko', 'Lucembursko', 'Madagaskar', 'Maďarsko', 'Makedonie', 'Malajsie',
		'Malawi', 'Maledivy', 'Mali', 'Malta', 'Maroko', 'Marshallovy ostrovy', 'Mauritánie', 'Mauricius', 'Mexiko',
		'Federativni státy Mikronésie', 'Moldavsko', 'Monako', 'Mongolsko', 'Mosambik', 'Myanmar', 'Namibie', 'Nauru',
		'Nepál', 'Německo', 'Niger', 'Nigérie', 'Nikaragua', 'Niue', 'Nizozemsko', 'Norsko', 'Nový Zéland', 'Omán',
		'Pákistán', 'Palau', 'Panama', 'Papua-Nová Guinea', 'Paraguay', 'Peru', 'Pobřeži slonoviny', 'Polsko',
		'Portugalsko', 'Rakousko', 'Rovniková Guinea', 'Rumunsko', 'Rusko', 'Rwanda', 'Řecko', 'Salvador', 'Samoa',
		'San Marino', 'Saúdská Arábie', 'Senegal', 'Severni Korea', 'Seychely', 'Sierra Leone', 'Singapur',
		'Slovensko', 'Slovinsko', 'Somálsko', 'Spojené arabské emiráty', 'Spojené královstvi', 'Spojené státy americké',
		'Srbsko', 'Středoafrická republika', 'Surinam', 'Súdán', 'Svatá Lucie', 'Svatý Kryštof a Nevis',
		'Svatý Tomáš a Princův ostrov', 'Svatý Vincenc a Grenadiny', 'Svazijsko', 'Sýrie', 'Šalamounovy ostrovy',
		'Španělsko', 'Šri Lanka', 'Švédsko', 'Švýcarsko', 'Tádžikistán', 'Tanzanie', 'Thajsko', 'Togo', 'Tonga',
		'Trinidad a Tobago', 'Tunisko', 'Turecko', 'Turkmenistán', 'Tuvalu', 'Uganda', 'Ukrajina', 'Uruguay',
		'Uzbekistán', 'Vanuatu', 'Vatikán', 'Venezuela', 'Vietnam', 'Východni Timor', 'Zambie', 'Zimbabwe',
	);

	/**
	 * Source: https://cs.wikipedia.org/wiki/Kraje_v_%C4%8Cesku#Ekonomika
	 */
	private static $regions = array(
		'Hlavni město Praha', 'Jihomoravský kraj', 'Jihočeský kraj', 'Karlovarský kraj', 'Královéhradecký kraj',
		'Liberecký kraj', 'Moravskoslezský kraj', 'Olomoucký kraj', 'Pardubický kraj', 'Plzeňský kraj',
		'Středočeský kraj', 'Vysočina', 'Zlinský kraj', 'Ústecký kraj',
	);

	/**
	 * Source: http://aplikace.mvcr.cz/adresy/
	 */
	protected static $street = array(
		'Alžirská', 'Angelovova', 'Antoninská', 'Arménská', 'Čelkovická', 'Červenkova', 'Československého exilu',
		'Chluminská', 'Chládkova', 'Diskařská', 'Do Kopečka', 'Do Vozovny', 'Do Vršku', 'Doubravická', 'Doudova',
		'Drahotinská', 'Dělnická', 'Generála Šišky', 'Gončarenkova', 'Gutova', 'Havlinova', 'Havrani', 'Helmova',
		'Hečkova', 'Holubinková', 'Holinská', 'Horni Hrdlořezská', 'Horni Stromky', 'Hostivařské nám.', 'Houbařská',
		'Hořanská', 'Hrachovská', 'Hrad III. nádvoři', 'Hrdlořezská', 'Jenská', 'Jerevanská', 'Ježovická', 'K Březince',
		'K Dobré Vodě', 'K Hořavce', 'K Hrušovu', 'K Háji', 'K Návsi', 'K Padesátniku', 'K Pyramidce', 'K Samotě',
		'K Vinici', 'K Vystrkovu', 'Karlovarská', 'Karlinské nám.', 'Kaňkova', 'Ke Kyjovu', 'Ke Stadionu', 'Kejnická',
		'Klatovská', 'Kohoutových', 'Kopanská', 'Kralupská', 'Kukelská', 'Kukučinova', 'Kunešova', 'Kvestorská',
		'Křišťanova', 'Lanžhotská', 'Leštinská', 'Lindavská', 'Litevská', 'Lojovická', 'Lukešova', 'Maltézské náměsti',
		'Melodická', 'Mečiková', 'Milady Horákové', 'Mšenská', 'N. A. Někrasova', 'Na Dědince', 'Na Habrové',
		'Na Jezerce', 'Na Jilech', 'Na Petynce', 'Na Rozcesti', 'Na Sedlišti', 'Na Vrchu', 'Na Výšině', 'Na Úboči',
		'Na Štamberku', 'Nad Hlinikem', 'Nad Hřištěm', 'Nad Klikovkou', 'Nad libeňským nádražim', 'Nad Nuslemi',
		'Nad Slávii', 'Nad Trnkovem', 'Nad Šauerovými sady', 'Netřebská', 'Nivnická', 'Nádražni', 'nám. Pod Lipou',
		'nám. Před bateriemi', 'nám. Svatopluka Čecha', 'Odlehlá', 'Okrasná', 'Omská', 'Otavova', 'Oválová',
		'Palackého nám.', 'Pavlišovská', 'Paškova', 'Petřinské sady', 'Pilovská', 'Pod Bruskou', 'Pod novou školou',
		'Pod soutratim', 'Pod Svahem', 'Pod Útesy', 'Pohledná', 'Pošepného nám.', 'Prokopových', 'Pávovské náměsti',
		'Pětipeského', 'Přibramská', 'Radbuzská', 'Radnické schody', 'Raichlova', 'Roentgenova', 'Rozkošného',
		'Rozrazilová', 'Ruzyňská', 'Řimovská', 'Řični', 'Satalická', 'Schoellerova', 'Smrková', 'Souvratni', 'Sovova',
		'Sportovni', 'Stadionová', 'Statková', 'Stavebni', 'Široká', 'Školni', 'Tatranská', 'Tomsova', 'Toruňská',
		'Točenská', 'Trnkovo náměsti', 'Truhlářova', 'Tvrdonická', 'Týmlova', 'U Beránky', 'U Chmelnice',
		'U Chodovského hřbitova', 'U Drážky', 'U Fořta', 'U Kamýku', 'U Klubovny', 'U Lesa', 'U Pekáren',
		'U Prašné brány', 'U Prádelny', 'U Silnice', 'U Sladovny', 'U Slovanky', 'U Soutoku', 'U Trojice', 'U Vinice',
		'U vinných sklepů', 'U Vodárny', 'U Vorliků', 'U zeleného ptáka', 'U Čekárny', 'U Županských', 'Ukrajinská',
		'Újezdská', 'V Jámě', 'V Přednim Hloubětině', 'V Rohu', 'V Uličce', 'Valčikova', 'Ve Lhotce', 'Ve Vršich',
		'Velenická', 'Violková', 'Vlašská', 'Voděradská', 'Vyderská', 'Vysokoškolská', 'Výpadová', 'Vřesovická',
		'Za Pekárnou', 'Zámecká',
	);

	/**
	 * Randomly returns a czech city.
	 *
	 * @example 'Krnov'
	 *
	 * @return string
	 */
	public function city() {
		return static::randomElement(static::$city);
	}

	/**
	 * Randomly returns a czech region.
	 *
	 * @example 'Liberecký kraj'
	 *
	 * @return string
	 */
	public static function region() {
		return static::randomElement(static::$regions);
	}

	/**
	 * Real street names as random data can hardly be
	 * generated due to inflection.
	 *
	 * @example 'U Vodárny'
	 *
	 * @return string
	 */
	public function streetName() {
		return static::randomElement(static::$street);
	}
}
