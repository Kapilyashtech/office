<?php

namespace Faker\Provider\sk_SK;

class Person extends \Faker\Provider\Person {
	protected static $lastNameFormat = array(
		'{{lastNameMale}}',
		'{{lastNameFemale}}',
	);

	protected static $maleNameFormats = array(
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
		'{{titleMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
	);

	protected static $femaleNameFormats = array(
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
		'{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
	);

	protected static $firstNameMale = array(
		'Drahoslav', 'Severin', 'Alexej', 'Ernest', 'Rastislav', 'Radovan', 'Dobroslav', 'Dalibor', 'Vincent', 'Miloš', 'Timotej', 'Gejza', 'Bohuš',
		'Alfonz', 'Gašpar', 'Emil', 'Erik', 'Blažej', 'Zdenko', 'Dezider', 'Arpád', 'Valentin', 'Pravoslav', 'Jaromir', 'Roman', 'Matej', 'Frederik',
		'Viktor', 'Alexander', 'Radomir', 'Albin', 'Bohumil', 'Kazimir', 'Fridrich', 'Radoslav', 'Tomáš', 'Alan', 'Branislav', 'Bruno', 'Gregor',
		'Vlastimil', 'Boleslav', 'Eduard', 'Jozef', 'Viťazoslav', 'Blahoslav', 'Beňadik', 'Adrián', 'Gabriel', 'Marián', 'Emanuel', 'Miroslav',
		'Benjamin', 'Hugo', 'Richard', 'Izidor', 'Zoltán', 'Albert', 'Igor', 'Július', 'Aleš', 'Fedor', 'Rudolf', 'Valér', 'Marcel', 'Ervin',
		'Slavomir', 'Vojtech', 'Juraj', 'Marek', 'Jaroslav', 'Žigmund', 'Florián', 'Roland', 'Pankrác', 'Servác', 'Bonifác', 'Svetozár', 'Bernard',
		'Júlia', 'Urban', 'Dušan', 'Viliam', 'Ferdinand', 'Norbert', 'Róbert', 'Medard', 'Zlatko', 'Anton', 'Vasil', 'Vit', 'Adolf', 'Vratislav',
		'Alfréd', 'Alojz', 'Ján', 'Tadeáš', 'Ladislav', 'Peter', 'Pavol', 'Miloslav', 'Prokop', 'Cyril', 'Metod', 'Patrik', 'Oliver', 'Ivan',
		'Kamil', 'Henrich', 'Drahomir', 'Bohuslav', 'Iľja', 'Daniel', 'Vladimir', 'Jakub', 'Krištof', 'Ignác', 'Gustáv', 'Jerguš', 'Dominik',
		'Oskar', 'Vavrinec', 'Ľubomir', 'Mojmir', 'Leonard', 'Tichomir', 'Filip', 'Bartolomej', 'Ľudovit', 'Samuel', 'Augustin', 'Belo', 'Oleg',
		'Bystrik', 'Ctibor', 'Ľudomil', 'Konštantin', 'Ľuboslav', 'Matúš', 'Móric', 'Ľuboš', 'Ľubor', 'Vladislav', 'Cyprián', 'Václav', 'Michal',
		'Jarolim', 'Arnold', 'Levoslav', 'František', 'Dionýz', 'Maximilián', 'Koloman', 'Boris', 'Lukáš', 'Kristián', 'Vendelin', 'Sergej',
		'Aurel', 'Demeter', 'Denis', 'Hubert', 'Karol', 'Imrich', 'René', 'Bohumir', 'Teodor', 'Tibor', 'Maroš', 'Martin', 'Svätopluk', 'Stanislav',
		'Leopold', 'Eugen', 'Félix', 'Klement', 'Kornel', 'Milan', 'Vratko', 'Ondrej', 'Andrej', 'Edmund', 'Oldrich', 'Oto', 'Mikuláš', 'Ambróz',
		'Radúz', 'Bohdan', 'Adam', 'Štefan', 'Dávid', 'Silvester',

	);

	protected static $firstNameFemale = array(
		'Alexandra', 'Karina', 'Daniela', 'Andrea', 'Antónia', 'Bohuslava', 'Dáša', 'Malvina', 'Kristina', 'Nataša', 'Bohdana', 'Drahomira',
		'Sára', 'Zora', 'Tamara', 'Ema', 'Tatiana', 'Erika', 'Veronika', 'Agáta', 'Dorota', 'Vanda', 'Zoja', 'Gabriela', 'Perla', 'Ida', 'Liana',
		'Miloslava', 'Vlasta', 'Livia', 'Eleonóra', 'Etela', 'Romana', 'Zlatica', 'Anežka', 'Bohumila', 'Františka', 'Angela', 'Matilda',
		'Svetlana', 'Ľubica', 'Alena', 'Soňa', 'Vieroslava', 'Zita', 'Miroslava', 'Irena', 'Milena', 'Estera', 'Justina', 'Dana', 'Danica',
		'Jela', 'Jaroslava', 'Jarmila', 'Lea', 'Anastázia', 'Galina', 'Lesana', 'Hermina', 'Monika', 'Ingrida', 'Viktória', 'Blažena', 'Žofia',
		'Sofia', 'Gizela', 'Viola', 'Gertrúda', 'Zina', 'Júlia', 'Juliana', 'Želmira', 'Ela', 'Vanesa', 'Iveta', 'Vilma', 'Petronela', 'Žaneta',
		'Xénia', 'Karolina', 'Lenka', 'Laura', 'Stanislava', 'Margaréta', 'Dobroslava', 'Blanka', 'Valéria', 'Paulina', 'Sidónia', 'Adriána',
		'Beáta', 'Petra', 'Melánia', 'Diana', 'Berta', 'Patricia', 'Lujza', 'Amália', 'Milota', 'Nina', 'Margita', 'Kamila', 'Dušana', 'Magdaléna',
		'Oľga', 'Anna', 'Hana', 'Božena', 'Marta', 'Libuša', 'Božidara', 'Dominika', 'Hortenzia', 'Jozefina', 'Štefánia', 'Ľubomira', 'Zuzana',
		'Darina', 'Marcela', 'Milica', 'Elena', 'Helena', 'Lýdia', 'Anabela', 'Jana', 'Silvia', 'Nikola', 'Ružena', 'Nora', 'Drahoslava', 'Linda',
		'Melinda', 'Rebeka', 'Rozália', 'Regina', 'Alica', 'Marianna', 'Miriama', 'Martina', 'Mária', 'Jolana', 'Ľudomila', 'Ľudmila', 'Olympia',
		'Eugénia', 'Ľuboslava', 'Zdenka', 'Edita', 'Michaela', 'Stela', 'Viera', 'Natália', 'Eliška', 'Brigita', 'Valentina', 'Terézia', 'Vladimira',
		'Hedviga', 'Uršuľa', 'Alojza', 'Kvetoslava', 'Sabina', 'Dobromila', 'Klára', 'Simona', 'Aurélia', 'Denisa', 'Renáta', 'Irma', 'Agnesa',
		'Klaudia', 'Alžbeta', 'Elvira', 'Cecilia', 'Emilia', 'Katarina', 'Henrieta', 'Bibiána', 'Barbora', 'Marina', 'Izabela', 'Hilda', 'Otilia',
		'Lucia', 'Branislava', 'Bronislava', 'Ivica', 'Albina', 'Kornélia', 'Sláva', 'Slávka', 'Judita', 'Dagmara', 'Adela', 'Nadežda', 'Eva',
		'Filoména', 'Ivana', 'Milada',

	);

	protected static $lastNameMale = array(
		'Sloboda', 'Novotný', 'Kučera', 'Veselý', 'Horák', 'Marek', 'Pokorný', 'Král', 'Růžička', 'Zeman', 'Kolár', 'Urban', 'Bartoš', 'Vlček',
		'Polák', 'Kopecký', 'Konečný', 'Malý', 'Holub', 'Abrahám', 'Adam', 'Adamec', 'Almáši', 'Anderle', 'Antal', 'Babka', 'Bahna', 'Bahno',
		'Bajnok', 'Balaša', 'Balog', 'Balogh', 'Baláž', 'Baran', 'Baranka', 'Bartovič', 'Bartoš', 'Bača', 'Beck', 'Beihofner', 'Bella', 'Beran',
		'Bernolák', 'Beňo', 'Bicek', 'Bielik', 'Biringer', 'Blaho', 'Bondra', 'Bosák', 'Boška', 'Brezina', 'Bugár', 'Buš', 'Chalupka', 'Chudik',
		'Cyprich', 'Ciger', 'Dacej', 'Danko', 'Debnár', 'Dej', 'Dekýš', 'Doležal', 'Dostál', 'Dočolomanský', 'Drajna', 'Droppa', 'Dubovský',
		'Dudek', 'Dula', 'Dulla', 'Dusik', 'Dvonč', 'Dzurjanin', 'Dávid', 'Fabian', 'Fabián', 'Fajnor', 'Farkašovský', 'Feldek', 'Fico', 'Filc',
		'Filip', 'Finka', 'Ftorek', 'Galis', 'Gallo', 'Gašpar', 'Gašparovič', 'Gocnik', 'Golonka', 'Greguš', 'Grznár', 'Hablák', 'Habšuda',
		'Haluška', 'Halák', 'Hanko', 'Hanzal', 'Hanzel', 'Hanzel', 'Haščák', 'Heretik', 'Hečko', 'Hečková', 'Hlaváček', 'Hlinka', 'Hochschorner',
		'Holub', 'Holuby', 'Horváth', 'Hossa', 'Hraško', 'Hric', 'Hrmo', 'Hrušovský', 'Huba', 'Hudáček', 'Hála', 'Ihnačák', 'Janoška', 'Jantošovič',
		'Janik', 'Jonata', 'Jurina', 'Jurinová', 'Jurik', 'Jáni', 'Jánošik', 'Kaliský', 'Karul', 'Karvaš', 'Keniž', 'Klapka', 'Klaus', 'Kolnik',
		'Konstantinidis', 'Korec', 'Kostrec', 'Kováč', 'Kováčik', 'Koza', 'Kubik', 'Kučera', 'Labuda', 'Langoš', 'Lepšik', 'Lexa', 'Lintner',
		'Lubina', 'Lukáč', 'Lupták', 'Liška', 'Majeský', 'Malachovský', 'Mališek', 'Marián', 'Masaryk', 'Maslo', 'Matiaško', 'Medveď', 'Menyhért',
		'Mečiar', 'Mečiř', 'Mikloško', 'Mikulik', 'Mikuš', 'Mikúš', 'Mišik', 'Mojžiš', 'Mokroš', 'Molnár', 'Moravčik', 'Musil', 'Mydlo', 'Nagy',
		'Nemec', 'Neruda', 'Nezval', 'Nitra', 'Novák', 'Nábělek', 'Němec', 'Obšut', 'Otčenáš', 'Pauko', 'Pavlikovský', 'Pavúk', 'Pašek', 'Paška',
		'Paško', 'Pelikán', 'Petrovický', 'Petruška', 'Plch', 'Podhradská', 'Podkonický', 'Poliak', 'Procházka', 'Puskás', 'Puškáš', 'Raši',
		'Repiský', 'Riszdorfer', 'Romančik', 'Rozenberg', 'Rus', 'Ružička', 'Rúfus', 'Růžička', 'Samson', 'Sedliak', 'Senko', 'Sidor', 'Sklenka',
		'Skutecký', 'Slašťan', 'Sloboda', 'Slobodnik', 'Slota', 'Slovák', 'Smrek', 'Stodola', 'Straka', 'Szabó', 'Sámel', 'Sýkora', 'Tatar',
		'Tatarka', 'Tatár', 'Tatárka', 'Timko', 'Tiso', 'Tomeček', 'Truben', 'Turčok', 'Tóth', 'Uram', 'Urblik', 'Vajcik', 'Valent', 'Valuška',
		'Varga', 'Vašiček', 'Vesel', 'Vico', 'Višňovský', 'Vydarený', 'Weiss', 'Zima', 'Zimka', 'Zipser', 'Zátopek', 'Zúbrik', 'Čaplovič',
		'Čarnogurský', 'Čierny', 'Ďaďo', 'Ďurica', 'Ďuriš', 'Šimonovič', 'Škriniar', 'Šouc', 'Šoustal', 'Štefan', 'Štefanka', 'Šulc', 'Šurka',
		'Švehla', 'Šťastný',

	);

	protected static $lastNameFemale = array(
		'Slobodová', 'Novotná', 'Čierna', 'Kučerová', 'Veselá', 'Krajčiová', 'Nemcová', 'Králová', 'Růžičková', 'Fialová', 'Zemanová',
		'Kolárová', 'Kováčová', 'Vlčková', 'Poláková', 'Kopecká', 'Šimková', 'Konečná', 'Malá', 'Holubová', 'Staneková', 'Šťastná',
		'Vargová', 'Tóthová', 'Horváthová', 'Balážová', 'Szabová', 'Molnárová', 'Balogová', 'Lukáčová', 'Vicenová', 'Ringlóciová', 'Popovičová',
		'Hulmanová', 'Zelenayová', 'Fingerlandová', 'Králiková', 'Kapustová', 'Hantuchová', 'Holéczyová', 'Butvinová', 'Oslejová', 'Radičová', 'Sárová',
		'Sobotková', 'Kažimirová', 'Plšková', 'Jakubová', 'Šindlerová', 'Ondrejková', 'Slobodniková', 'Sadloňová', 'Černá', 'Nosková',
		'Virčiková', 'Taliánová', 'Čuntalová', 'Oťapková', 'Zuzulová', 'Godolová', 'Gonová', 'Jančová', 'Kocúrová', 'Svobodová', 'Oravcová', 'Muráriková',
		'Holubová', 'Kubáňová', 'Ondrišová', 'Šoltisová', 'Molnárová', 'Rezničková', 'Dubničková', 'Karolčiková', 'Máliková', 'Maliková', 'Litajová',
		'Kolrusová', 'Košiková', 'Kušnirová', 'Kravjarová', 'Hotová', 'Hajzerová', 'Ferjenčiková', 'Senková', 'Adamcová', 'Pirošová', 'Šimonová',
		'Finková', 'Hrdá', 'Murčová',
	);

	protected static $title = array(
		'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
		'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.',
	);

	private static $suffix = array(
		'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.',
	);

	public function title($gender = null) {
		return static::titleMale();
	}

	/**
	 * replaced by specific unisex slovakian title
	 */
	public static function titleMale() {
		return static::randomElement(static::$title);
	}

	/**
	 * replaced by specific unisex slovakian title
	 */
	public static function titleFemale() {
		return static::titleMale();
	}

	/**
	 * @param string|null $gender 'male', 'female' or null for any
	 * @example 'Novotný'
	 */
	public function lastName($gender = null) {
		if ($gender === static::GENDER_MALE) {
			return static::lastNameMale();
		} elseif ($gender === static::GENDER_FEMALE) {
			return static::lastNameFemale();
		}

		return $this->generator->parse(static::randomElement(static::$lastNameFormat));
	}

	public static function lastNameMale() {
		return static::randomElement(static::$lastNameMale);
	}

	public static function lastNameFemale() {
		return static::randomElement(static::$lastNameFemale);
	}

	/**
	 * @example 'PhD'
	 */
	public static function suffix() {
		return static::randomElement(static::$suffix);
	}
}
