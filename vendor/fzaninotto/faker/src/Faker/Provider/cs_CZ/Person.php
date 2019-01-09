<?php

namespace Faker\Provider\cs_CZ;

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
	);

	protected static $femaleNameFormats = array(
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
	);

	protected static $firstNameMale = array(
		'Adam', 'Aleš', 'Alois', 'Antonin', 'Bohumil', 'Bohuslav', 'Dagmar',
		'Dalibor', 'Daniel', 'David', 'Dominik', 'Dušan', 'Eduard', 'Emil',
		'Filip', 'František', 'Ilona', 'Ivan', 'Ivo', 'Jakub', 'Jan', 'Ján',
		'Jaromir', 'Jaroslav', 'Jindřich', 'Jiři', 'Josef', 'Jozef', 'Kamil',
		'Karel', 'Kryštof', 'Ladislav', 'Libor', 'Lubomir', 'Luboš', 'Luděk',
		'Ludvik', 'Lukáš', 'Marcel', 'Marek', 'Martin', 'Matěj', 'Matyáš',
		'Michael', 'Michal', 'Milan', 'Miloslav', 'Miloš', 'Miroslav',
		'Oldřich', 'Ondřej', 'Patrik', 'Pavel', 'Peter', 'Petr', 'Radek',
		'Radim', 'Radomir', 'René', 'Richard', 'Robert', 'Roman', 'Rostislav',
		'Rudolf', 'Stanislav', 'Šimon', 'Štefan', 'Štěpán', 'Tomáš',
		'Václav', 'Vasyl', 'Viktor', 'Vit', 'Vitězslav', 'Vladimir',
		'Vladislav', 'Vlastimil', 'Vojtěch', 'Zbyněk', 'Zdeněk',
	);

	protected static $firstNameFemale = array(
		'Adéla', 'Alena', 'Alžběta', 'Andrea', 'Aneta', 'Anežka', 'Anna',
		'Barbora', 'Blanka', 'Božena', 'Dana', 'Daniela', 'Denisa', 'Dominika',
		'Eliška', 'Emilie', 'Eva', 'Františka', 'Gabriela', 'Hana', 'Helena',
		'Irena', 'Iva', 'Ivana', 'Iveta', 'Jana', 'Jarmila', 'Jaroslava',
		'Jindřiška', 'Jiřina', 'Jitka', 'Kamila', 'Karolina', 'Kateřina',
		'Klára', 'Kristýna', 'Lenka', 'Libuše', 'Lucie', 'Ludmila', 'Marcela',
		'Mária', 'Marie', 'Markéta', 'Marta', 'Martina', 'Michaela', 'Milada',
		'Milena', 'Miloslava', 'Miluše', 'Miroslava', 'Monika', 'Naděžda',
		'Natálie', 'Nela', 'Nikola', 'Olga', 'Pavla', 'Pavlina', 'Petra',
		'Radka', 'Renata', 'Renáta', 'Romana', 'Růžena', 'Simona', 'Soňa',
		'Stanislava', 'Šárka', 'Štěpánka', 'Tereza', 'Vendula', 'Věra',
		'Veronika', 'Vladimira', 'Vlasta', 'Zdenka', 'Zdeňka', 'Zdeňka',
		'Zuzana',
	);

	protected static $lastNameMale = array(
		'Adam', 'Adamec', 'Adámek', 'Albrecht', 'Ambrož', 'Anděl', 'Andrle',
		'Antoš', 'Bajer', 'Baláž', 'Balcar', 'Balog', 'Baloun', 'Barák',
		'Baran', 'Bareš', 'Bárta', 'Barták', 'Bartoň', 'Bartoš',
		'Bartošek', 'Bartůněk', 'Bašta', 'Bauer', 'Bayer', 'Bažant',
		'Bečka', 'Bečvář', 'Bednář', 'Bednařik', 'Bělohlávek',
		'Benda', 'Beneš', 'Beran', 'Beránek', 'Berger', 'Berka', 'Berky',
		'Bernard', 'Bezděk', 'Bilek', 'Bilý', 'Bina', 'Bittner',
		'Blaha', 'Bláha', 'Blažek', 'Blecha', 'Bobek', 'Boček', 'Boháč',
		'Boháček', 'Böhm', 'Borovička', 'Bouček', 'Bouda', 'Bouška',
		'Brabec', 'Brabenec', 'Brada', 'Bradáč', 'Braun', 'Brázda',
		'Brázdil', 'Brejcha', 'Brož', 'Brožek', 'Brychta', 'Březina',
		'Břiza', 'Bubenik', 'Buček', 'Buchta', 'Burda', 'Bureš', 'Burian',
		'Buriánek', 'Byrtus', 'Caha', 'Cibulka', 'Cihlář', 'Cisař', 'Coufal',
		'Čada', 'Čáp', 'Čapek', 'Čech', 'Čejka', 'Čermák', 'Černik',
		'Černohorský', 'Černoch', 'Černý', 'Červeňák', 'Červenka',
		'Červený', 'Červinka', 'Čihák', 'Čižek', 'Čonka', 'Čurda',
		'Daněk', 'Daniel', 'Daniš', 'David', 'Dědek', 'Dittrich', 'Diviš',
		'Dlouhý', 'Dobeš', 'Dobiáš', 'Dobrovolný', 'Dočekal', 'Dočkal',
		'Dohnal', 'Dokoupil', 'Doleček', 'Dolejš', 'Dolejši', 'Doležal',
		'Doležel', 'Doskočil', 'Dostál', 'Doubek', 'Doubrava', 'Douša',
		'Drábek', 'Drozd', 'Dubský', 'Duda', 'Dudek', 'Dufek', 'Duchoň',
		'Dunka', 'Dušek', 'Dvorský', 'Dvořáček', 'Dvořák', 'Eliáš',
		'Erben', 'Fabián', 'Fanta', 'Farkaš', 'Fejfar', 'Fencl', 'Ferenc',
		'Fiala', 'Fiedler', 'Filip', 'Fischer', 'Fišer', 'Florián', 'Fojtik',
		'Foltýn', 'Formánek', 'Forman', 'Fořt', 'Fousek', 'Franc', 'Franěk',
		'Frank', 'Fridrich', 'Frydrych', 'Fučik', 'Fuchs', 'Fuksa', 'Gábor',
		'Gabriel', 'Gajdoš', 'Gregor', 'Gruber', 'Grundza', 'Grygar', 'Hájek',
		'Hajný', 'Hála', 'Hampl', 'Hanáček', 'Hána', 'Hanák', 'Hanousek',
		'Hanus', 'Hanuš', 'Hanzal', 'Hanzl', 'Hanzlik', 'Hartman', 'Hašek',
		'Havel', 'Havelka', 'Havliček', 'Havlik', 'Havránek', 'Heczko',
		'Heger', 'Hejda', 'Hejduk', 'Hejl', 'Hejna', 'Hendrych', 'Herman',
		'Heřmánek', 'Heřman', 'Hladik', 'Hladký', 'Hlaváček', 'Hlaváč',
		'Hlavatý', 'Hlávka', 'Hloušek', 'Hoffmann', 'Hofman', 'Holan',
		'Holas', 'Holec', 'Holeček', 'Holik', 'Holoubek', 'Holub', 'Holý',
		'Homola', 'Homolka', 'Horáček', 'Hora', 'Horák', 'Horký', 'Horňák',
		'Horniček', 'Hornik', 'Horský', 'Horváth', 'Horvát', 'Hořejši',
		'Hošek', 'Houdek', 'Houška', 'Hovorka', 'Hrabal', 'Hrabovský',
		'Hradecký', 'Hradil', 'Hrbáček', 'Hrbek', 'Hrdina', 'Hrdlička',
		'Hrdý', 'Hrnčiř', 'Hroch', 'Hromádka', 'Hron', 'Hrubeš', 'Hrubý',
		'Hruška', 'Hrůza', 'Hubáček', 'Hudec', 'Hudeček', 'Hůlka', 'Huml',
		'Husák', 'Hušek', 'Hýbl', 'Hynek', 'Chaloupka', 'Chalupa', 'Charvát',
		'Chládek', 'Chlup', 'Chmelař', 'Chmelik', 'Chovanec', 'Chromý',
		'Chudoba', 'Chvátal', 'Chvojka', 'Chytil', 'Jahoda', 'Jakeš',
		'Jakl', 'Jakoubek', 'Jakubec', 'Janáček', 'Janák', 'Janata',
		'Janča', 'Jančik', 'Janda', 'Janeček', 'Janečka', 'Janiček',
		'Janik', 'Janků', 'Janota', 'Janoušek', 'Janovský', 'Jansa',
		'Jánský', 'Jareš', 'Jaroš', 'Jašek', 'Javůrek', 'Jedlička',
		'Jech', 'Jelen', 'Jelinek', 'Jeniček', 'Jeřábek', 'Ježek', 'Jež',
		'Jilek', 'Jindra', 'Jira', 'Jirák', 'Jiránek', 'Jirásek', 'Jirka',
		'Jirků', 'Jiroušek', 'Jirsa', 'Jiřik', 'John', 'Jonáš', 'Junek',
		'Jurčik', 'Jurečka', 'Juřica', 'Juřik', 'Kabát', 'Kačirek',
		'Kadeřábek', 'Kadlec', 'Kafka', 'Kaiser', 'Kaláb', 'Kala', 'Kalaš',
		'Kalina', 'Kalivoda', 'Kalousek', 'Kalous', 'Kamenik', 'Kaňa',
		'Kaňka', 'Kantor', 'Kaplan', 'Karásek', 'Karas', 'Karban', 'Karel',
		'Karlik', 'Kasal', 'Kašik', 'Kašpárek', 'Kašpar', 'Kavka', 'Kazda',
		'Kindl', 'Klečka', 'Klein', 'Klement', 'Klima', 'Kliment', 'Klimeš',
		'Klouček', 'Klouda', 'Knap', 'Knotek', 'Kocián', 'Kocman', 'Kocourek',
		'Kohoutek', 'Kohout', 'Koch', 'Koláček', 'Kolařik', 'Kolář',
		'Kolek', 'Kolman', 'Komárek', 'Kominek', 'Konečný', 'Koniček',
		'Kopal', 'Kopecký', 'Kopeček', 'Kopečný', 'Kopřiva', 'Korbel',
		'Kořinek', 'Kosik', 'Kosina', 'Kos', 'Kostka', 'Košťál', 'Kotas',
		'Kotek', 'Kotlár', 'Kotrba', 'Kouba', 'Koubek', 'Koudela', 'Koudelka',
		'Koukal', 'Kouřil', 'Koutný', 'Kováč', 'Kovařik', 'Kovářik',
		'Kovář', 'Kozák', 'Kozel', 'Krajiček', 'Králiček', 'Králik',
		'Král', 'Krátký', 'Kratochvil', 'Kraus', 'Krčmář', 'Krejčik',
		'Krejči', 'Krejčiř', 'Krištof', 'Kropáček', 'Kroupa', 'Krupa',
		'Krupička', 'Krupka', 'Křeček', 'Křenek', 'Křivánek', 'Křižek',
		'Křiž', 'Kuba', 'Kubálek', 'Kubánek', 'Kubát', 'Kubec', 'Kubelka',
		'Kubeš', 'Kubica', 'Kubiček', 'Kubik', 'Kubin', 'Kubiš', 'Kuča',
		'Kučera', 'Kudláček', 'Kudrna', 'Kuchař', 'Kuchta', 'Kukla',
		'Kulhánek', 'Kulhavý', 'Kunc', 'Kuneš', 'Kupec', 'Kupka', 'Kurka',
		'Kužel', 'Kvapil', 'Kvasnička', 'Kyncl', 'Kysela', 'Lacina', 'Lacko',
		'Lakatoš', 'Landa', 'Langer', 'Lang', 'Langr', 'Látal', 'Lavička',
		'Lebeda', 'Levý', 'Libal', 'Linhart', 'Liška', 'Lorenc', 'Louda',
		'Ludvik', 'Lukáč', 'Lukášek', 'Lukáš', 'Lukeš', 'Macák', 'Macek',
		'Macura', 'Macháček', 'Machač', 'Macháč', 'Machala', 'Machálek',
		'Mácha', 'Mach', 'Majer', 'Maleček', 'Málek', 'Malik', 'Malina',
		'Malý', 'Maňák', 'Mareček', 'Marek', 'Mareš', 'Maršálek',
		'Maršik', 'Martinec', 'Martinek', 'Martinek', 'Mařik', 'Masopust',
		'Mašek', 'Matějiček', 'Matějka', 'Matoušek', 'Matouš', 'Matula',
		'Matuška', 'Matyáš', 'Matys', 'Maxa', 'Mayer', 'Mazánek', 'Medek',
		'Melichar', 'Mencl', 'Menšik', 'Merta', 'Mička', 'Michalec',
		'Michálek', 'Michalik', 'Michal', 'Michna', 'Mika', 'Mika', 'Mikeš',
		'Miko', 'Mikula', 'Mikulášek', 'Minařik', 'Minář', 'Mirga',
		'Mládek', 'Mlčoch', 'Mlejnek', 'Mojžiš', 'Mokrý', 'Molnár',
		'Moravec', 'Morávek', 'Motl', 'Motyčka', 'Moučka', 'Moudrý',
		'Mráček', 'Mrázek', 'Mráz', 'Mrkvička', 'Mucha', 'Müller',
		'Műller', 'Musil', 'Mužik', 'Myška', 'Nagy', 'Najman', 'Navrátil',
		'Nečas', 'Nedbal', 'Nedoma', 'Nedvěd', 'Nejedlý', 'Němec',
		'Němeček', 'Nesvadba', 'Nešpor', 'Neubauer', 'Neuman', 'Neumann',
		'Nguyen', 'Nguyen', 'Nosek', 'Nováček', 'Novák', 'Novosad', 'Novotný',
		'Nový', 'Odehnal', 'Oláh', 'Oliva', 'Ondráček', 'Ondra', 'Orság',
		'Otáhal', 'Paleček', 'Pánek', 'Papež', 'Pařizek', 'Pašek',
		'Pátek', 'Patočka', 'Paul', 'Pavelek', 'Pavelka', 'Pavel', 'Pavlas',
		'Pavlica', 'Pavliček', 'Pavlik', 'Pavlů', 'Pazdera', 'Pecka',
		'Pecháček', 'Pecha', 'Pech', 'Pekárek', 'Pekař', 'Pelc', 'Pelikán',
		'Pernica', 'Peroutka', 'Peřina', 'Pešek', 'Peška', 'Pešta',
		'Peterka', 'Petrák', 'Petráš', 'Petr', 'Petrů', 'Petřiček',
		'Petřik', 'Pham', 'Picha', 'Pilař', 'Pilát', 'Piša', 'Pivoňka',
		'Plaček', 'Plachý', 'Plšek', 'Pluhař', 'Podzimek', 'Pohl', 'Pokorný',
		'Poláček', 'Polách', 'Polák', 'Polanský', 'Polášek', 'Polivka',
		'Popelka', 'Pospichal', 'Pospišil', 'Potůček', 'Pour', 'Prachař',
		'Prášek', 'Pražák', 'Prchal', 'Procházka', 'Prokeš', 'Prokop',
		'Prošek', 'Provaznik', 'Průcha', 'Průša', 'Přibyl', 'Přihoda',
		'Přikryl', 'Pšenička', 'Ptáček', 'Rác', 'Rada', 'Rak', 'Rambousek',
		'Raška', 'Rataj', 'Remeš', 'Rezek', 'Richter', 'Richtr', 'Roubal',
		'Rous', 'Rozsypal', 'Rudolf', 'Růžek', 'Růžička', 'Ryba', 'Rybář',
		'Rýdl', 'Ryšavý', 'Řeháček', 'Řehák', 'Řehoř', 'Řezáč',
		'Řezniček', 'Řiha', 'Sadilek', 'Samek', 'Sedláček', 'Sedlák',
		'Sedlář', 'Sehnal', 'Seidl', 'Seifert', 'Sekanina', 'Semerád',
		'Severa', 'Schejbal', 'Schmidt', 'Schneider', 'Schwarz', 'Sikora',
		'Sivák', 'Skácel', 'Skala', 'Skála', 'Skalický', 'Sklenář',
		'Skopal', 'Skořepa', 'Skřivánek', 'Slabý', 'Sládek', 'Sladký',
		'Sláma', 'Slanina', 'Slaviček', 'Slavik', 'Slezák', 'Slováček',
		'Slovák', 'Sluka', 'Smejkal', 'Smékal', 'Smetana', 'Smola', 'Smolik',
		'Smolka', 'Smrčka', 'Smrž', 'Smutný', 'Sobek', 'Sobotka', 'Sochor',
		'Sojka', 'Sokol', 'Sommer', 'Souček', 'Soukup', 'Sova', 'Spáčil',
		'Spurný', 'Srb', 'Staněk', 'Stárek', 'Starý', 'Stehlik', 'Steiner',
		'Stejskal', 'Stibor', 'Stoklasa', 'Straka', 'Stránský', 'Strejček',
		'Strnad', 'Strouhal', 'Studený', 'Studnička', 'Stuchlik',
		'Stupka', 'Suchánek', 'Suchomel', 'Suchý', 'Suk', 'Svačina',
		'Svatoň', 'Svatoš', 'Světlik', 'Sviták', 'Svoboda', 'Svozil',
		'Sýkora', 'Synek', 'Syrový', 'Šafařik', 'Šafář', 'Šafránek',
		'Šálek', 'Šanda', 'Šašek', 'Šebek', 'Šebela', 'Šebesta', 'Šeda',
		'Šedivý', 'Šenk', 'Šesták', 'Ševčik', 'Šilhavý', 'Šimáček',
		'Šimák', 'Šimánek', 'Šima', 'Šimčik', 'Šimeček', 'Šimek',
		'Šimon', 'Šimůnek', 'Šindelář', 'Šindler', 'Šipek', 'Šip',
		'Široký', 'Šir', 'Šiška', 'Škoda', 'Škrabal', 'Šlechta',
		'Šmejkal', 'Šmerda', 'Šmid', 'Šnajdr', 'Šolc', 'Špaček',
		'Špička', 'Šplichal', 'Šrámek', 'Šťastný', 'Štefan',
		'Štefek', 'Štefl', 'Štěpánek', 'Štěpán', 'Štěrba', 'Šubrt',
		'Šulc', 'Šustr', 'Šváb', 'Švanda', 'Švarc', 'Švec', 'Švehla',
		'Švejda', 'Švestka', 'Táborský', 'Tancoš', 'Teplý', 'Tesař',
		'Tichý', 'Tománek', 'Toman', 'Tomášek', 'Tomáš', 'Tomeček',
		'Tomek', 'Tomeš', 'Tóth', 'Tran', 'Trávniček', 'Trčka', 'Trnka',
		'Trojan', 'Truhlář', 'Třiska', 'Tuček', 'Tůma', 'Tureček', 'Turek',
		'Tvrdik', 'Tvrdý', 'Uher', 'Uhliř', 'Ulrich', 'Urbanec', 'Urbánek',
		'Urban', 'Vacek', 'Václavek', 'Václavik', 'Vaculik', 'Vágner',
		'Vácha', 'Valášek', 'Vala', 'Válek', 'Valenta', 'Valeš', 'Váňa',
		'Vančura', 'Vaněček', 'Vaněk', 'Vaniček', 'Varga', 'Vašák',
		'Vašek', 'Vašiček', 'Vávra', 'Vavřik', 'Večeřa', 'Vejvoda',
		'Verner', 'Veselý', 'Veverka', 'Vicha', 'Vilimek', 'Vinš', 'Višek',
		'Vitásek', 'Vitek', 'Vit', 'Vlach', 'Vlasák', 'Vlček', 'Vlk',
		'Vobořil', 'Vodák', 'Vodička', 'Vodrážka', 'Vojáček', 'Vojta',
		'Vojtěch', 'Vojtek', 'Vojtišek', 'Vokoun', 'Volek', 'Volf', 'Volný',
		'Vondráček', 'Vondrák', 'Vondra', 'Voráček', 'Vorel', 'Vorliček',
		'Vořišek', 'Votava', 'Votruba', 'Vrabec', 'Vrána', 'Vrba', 'Vrzal',
		'Vybiral', 'Vydra', 'Vymazal', 'Vyskočil', 'Vysloužil', 'Wagner',
		'Walter', 'Weber', 'Weiss', 'Winkler', 'Wolf', 'Zábranský', 'Zahrádka',
		'Zahradnik', 'Zach', 'Zajic', 'Zajiček', 'Zálešák', 'Zámečnik',
		'Zapletal', 'Záruba', 'Zatloukal', 'Zavadil', 'Zavřel', 'Zbořil',
		'Zdražil', 'Zednik', 'Zelenka', 'Zelený', 'Zelinka', 'Zemánek',
		'Zeman', 'Zezula', 'Zika', 'Zikmund', 'Zima', 'Zlámal', 'Zoubek',
		'Zouhar', 'Zvěřina', 'Žáček', 'Žák', 'Žďárský', 'Žemlička',
		'Židek', 'Žižka', 'Žůrek',
	);

	protected static $lastNameFemale = array(
		'Adamová', 'Adamcová', 'Adámková', 'Albrechtová', 'Ambrožová',
		'Andělová', 'Andrlová', 'Antošová', 'Bajerová', 'Balážová',
		'Balcarová', 'Balogová', 'Balounová', 'Baráková', 'Baranová',
		'Barešová', 'Bártová', 'Bartáková', 'Bartoňová', 'Bartošová',
		'Bartošková', 'Bartůňková', 'Baštová', 'Bauerová', 'Bayerová',
		'Bažantová', 'Bečková', 'Bečvářová', 'Bednářová',
		'Bednařiková', 'Bělohlávková', 'Bendová', 'Benešová',
		'Beranová', 'Beránková', 'Bergerová', 'Berková', 'Berkyová',
		'Bernardová', 'Bezděková', 'Bilková', 'Bilová', 'Binová',
		'Bittnerová', 'Blahová', 'Bláhová', 'Blažková', 'Blechová',
		'Bobková', 'Bočková', 'Boháčová', 'Boháčková', 'Böhmová',
		'Borovičková', 'Boučková', 'Boudová', 'Boušková', 'Brabcová',
		'Brabencová', 'Bradová', 'Bradáčová', 'Braunová', 'Brázdová',
		'Brázdilová', 'Brejchová', 'Brožová', 'Brožková', 'Brychtová',
		'Březinová', 'Břizová', 'Bubeniková', 'Bučková', 'Buchtová',
		'Burdová', 'Burešová', 'Burianová', 'Buriánková', 'Byrtusová',
		'Cahová', 'Cibulková', 'Cihlářová', 'Cisařová', 'Coufalová',
		'Čadová', 'Čápová', 'Čapková', 'Čechová', 'Čejková',
		'Čermáková', 'Černiková', 'Černohorská', 'Černochová',
		'Černá', 'Červeňáková', 'Červenková', 'Červená', 'Červinková',
		'Čiháková', 'Čižková', 'Čonková', 'Čurdová', 'Daňková',
		'Danielová', 'Danišová', 'Davidová', 'Dědková', 'Dittrichová',
		'Divišová', 'Dlouhá', 'Dobešová', 'Dobiášová', 'Dobrovolná',
		'Dočekalová', 'Dočkalová', 'Dohnalová', 'Dokoupilová',
		'Dolečková', 'Dolejšová', 'Dolejši', 'Doležalová', 'Doleželová',
		'Doskočilová', 'Dostálová', 'Doubková', 'Doubravová', 'Doušová',
		'Drábková', 'Drozdová', 'Dubská', 'Dudová', 'Dudková', 'Dufková',
		'Duchoňová', 'Dunková', 'Dušková', 'Dvorská', 'Dvořáčková',
		'Dvořáková', 'Eliášová', 'Erbenová', 'Fabiánová', 'Fantová',
		'Farkašová', 'Fejfarová', 'Fenclová', 'Ferencová', 'Fialová',
		'Fiedlerová', 'Filipová', 'Fischerová', 'Fišerová', 'Floriánová',
		'Fojtiková', 'Foltýnová', 'Formánková', 'Formanová', 'Fořtová',
		'Fousková', 'Francová', 'Fraňková', 'Franková', 'Fridrichová',
		'Frydrychová', 'Fučiková', 'Fuchsová', 'Fuksová', 'Gáborová',
		'Gabrielová', 'Gajdošová', 'Gregorová', 'Gruberová', 'Grundzová',
		'Grygarová', 'Hájková', 'Hajná', 'Hálová', 'Hamplová',
		'Hanáčková', 'Hánová', 'Hanáková', 'Hanousková', 'Hanusová',
		'Hanušová', 'Hanzalová', 'Hanzlová', 'Hanzliková', 'Hartmanová',
		'Hašková', 'Havelová', 'Havelková', 'Havličková', 'Havliková',
		'Havránková', 'Heczková', 'Hegerová', 'Hejdová', 'Hejduková',
		'Hejlová', 'Hejnová', 'Hendrychová', 'Hermanová', 'Heřmánková',
		'Heřmanová', 'Hladiková', 'Hladká', 'Hlaváčková', 'Hlaváčová',
		'Hlavatá', 'Hlávková', 'Hloušková', 'Hoffmannová', 'Hofmanová',
		'Holanová', 'Holasová', 'Holcová', 'Holečková', 'Holiková',
		'Holoubková', 'Holubová', 'Holá', 'Homolová', 'Homolková',
		'Horáčková', 'Horová', 'Horáková', 'Horká', 'Horňáková',
		'Horničková', 'Horniková', 'Horská', 'Horváthová', 'Horvátová',
		'Hořejšiová', 'Hošková', 'Houdková', 'Houšková', 'Hovorková',
		'Hrabalová', 'Hrabovská', 'Hradecká', 'Hradilová', 'Hrbáčková',
		'Hrbková', 'Hrdinová', 'Hrdličková', 'Hrdá', 'Hrnčiřová',
		'Hrochová', 'Hromádková', 'Hronová', 'Hrubešová', 'Hrubá',
		'Hrušková', 'Hrůzová', 'Hubáčková', 'Hudcová', 'Hudečková',
		'Hůlková', 'Humlová', 'Husáková', 'Hušková', 'Hýblová',
		'Hynková', 'Chaloupková', 'Chalupová', 'Charvátová', 'Chládková',
		'Chlupová', 'Chmelařová', 'Chmeliková', 'Chovancová', 'Chromá',
		'Chudobová', 'Chvátalová', 'Chvojková', 'Chytilová', 'Jahodová',
		'Jakešová', 'Jaklová', 'Jakoubková', 'Jakubcová', 'Janáčková',
		'Janáková', 'Janatová', 'Jančová', 'Jančiková', 'Jandová',
		'Janečková', 'Janečková', 'Janičková', 'Janiková', 'Janková',
		'Janotová', 'Janoušková', 'Janovská', 'Jansová', 'Jánská',
		'Jarešová', 'Jarošová', 'Jašková', 'Javůrková', 'Jedličková',
		'Jechová', 'Jelenová', 'Jelinková', 'Jeničková', 'Jeřábková',
		'Ježková', 'Ježová', 'Jilková', 'Jindrová', 'Jirová',
		'Jiráková', 'Jiránková', 'Jirásková', 'Jirková', 'Jirková',
		'Jiroušková', 'Jirsová', 'Jiřiková', 'Johnová', 'Jonášová',
		'Junková', 'Jurčiková', 'Jurečková', 'Juřicová', 'Juřiková',
		'Kabátová', 'Kačirková', 'Kadeřábková', 'Kadlcová', 'Kafková',
		'Kaiserová', 'Kalábová', 'Kalová', 'Kalašová', 'Kalinová',
		'Kalivodová', 'Kalousková', 'Kalousová', 'Kameniková', 'Kaňová',
		'Kaňková', 'Kantorová', 'Kaplanová', 'Karásková', 'Karasová',
		'Karbanová', 'Karelová', 'Karliková', 'Kasalová', 'Kašiková',
		'Kašpárková', 'Kašparová', 'Kavková', 'Kazdová', 'Kindlová',
		'Klečková', 'Kleinová', 'Klementová', 'Klimová', 'Klimentová',
		'Klimešová', 'Kloučková', 'Kloudová', 'Knapová', 'Knotková',
		'Kociánová', 'Kocmanová', 'Kocourková', 'Kohoutková', 'Kohoutová',
		'Kochová', 'Koláčková', 'Kolařiková', 'Kolářová', 'Kolková',
		'Kolmanová', 'Komárková', 'Kominková', 'Konečná', 'Koničková',
		'Kopalová', 'Kopecká', 'Kopečková', 'Kopečná', 'Kopřivová',
		'Korbelová', 'Kořinková', 'Kosiková', 'Kosinová', 'Kosová',
		'Kostková', 'Košťálová', 'Kotasová', 'Kotková', 'Kotlárová',
		'Kotrbová', 'Koubová', 'Koubková', 'Koudelová', 'Koudelková',
		'Koukalová', 'Kouřilová', 'Koutná', 'Kováčová', 'Kovařiková',
		'Kovářiková', 'Kovářová', 'Kozáková', 'Kozelová',
		'Krajičková', 'Králičková', 'Králiková', 'Králová',
		'Krátká', 'Kratochvilová', 'Krausová', 'Krčmářová',
		'Krejčiková', 'Krejčová', 'Krejčiřová', 'Krištofová',
		'Kropáčková', 'Kroupová', 'Krupová', 'Krupičková', 'Krupková',
		'Křečková', 'Křenková', 'Křivánková', 'Křižková',
		'Křižová', 'Kubová', 'Kubálková', 'Kubánková', 'Kubátová',
		'Kubcová', 'Kubelková', 'Kubešová', 'Kubicová', 'Kubičková',
		'Kubiková', 'Kubinová', 'Kubišová', 'Kučová', 'Kučerová',
		'Kudláčková', 'Kudrnová', 'Kuchařová', 'Kuchtová', 'Kuklová',
		'Kulhánková', 'Kulhavá', 'Kuncová', 'Kunešová', 'Kupcová',
		'Kupková', 'Kurková', 'Kuželová', 'Kvapilová', 'Kvasničková',
		'Kynclová', 'Kyselová', 'Lacinová', 'Lacková', 'Lakatošová',
		'Landová', 'Langerová', 'Langová', 'Langrová', 'Látalová',
		'Lavičková', 'Lebedová', 'Levá', 'Libalová', 'Linhartová',
		'Lišková', 'Lorencová', 'Loudová', 'Ludviková', 'Lukáčová',
		'Lukášková', 'Lukášová', 'Lukešová', 'Macáková', 'Macková',
		'Macurová', 'Macháčková', 'Machačová', 'Macháčová', 'Machalová',
		'Machálková', 'Máchová', 'Machová', 'Majerová', 'Malečková',
		'Málková', 'Maliková', 'Malinová', 'Malá', 'Maňáková',
		'Marečková', 'Marková', 'Marešová', 'Maršálková',
		'Maršiková', 'Martincová', 'Martinková', 'Martinková',
		'Mařiková', 'Masopustová', 'Mašková', 'Matějičková',
		'Matějková', 'Matoušková', 'Matoušová', 'Matulová', 'Matušková',
		'Matyášová', 'Matysová', 'Maxová', 'Mayerová', 'Mazánková',
		'Medková', 'Melicharová', 'Menclová', 'Menšiková', 'Mertová',
		'Mičková', 'Michalcová', 'Michálková', 'Michaliková',
		'Michalová', 'Michnová', 'Miková', 'Miková', 'Mikešová',
		'Miková', 'Mikulová', 'Mikulášková', 'Minařiková', 'Minářová',
		'Mirgová', 'Mládková', 'Mlčochová', 'Mlejnková', 'Mojžišová',
		'Mokrá', 'Molnárová', 'Moravcová', 'Morávková', 'Motlová',
		'Motyčková', 'Moučková', 'Moudrá', 'Mráčková', 'Mrázková',
		'Mrázová', 'Mrkvičková', 'Muchová', 'Müllerová', 'Műllerová',
		'Musilová', 'Mužiková', 'Myšková', 'Nagyová', 'Najmanová',
		'Navrátilová', 'Nečasová', 'Nedbalová', 'Nedomová', 'Nedvědová',
		'Nejedlá', 'Němcová', 'Němečková', 'Nesvadbová', 'Nešporová',
		'Neubauerová', 'Neumanová', 'Neumannová', 'Nguyenová', 'Vanová',
		'Nosková', 'Nováčková', 'Nováková', 'Novosadová', 'Novotná',
		'Nová', 'Odehnalová', 'Oláhová', 'Olivová', 'Ondráčková',
		'Ondrová', 'Orságová', 'Otáhalová', 'Palečková', 'Pánková',
		'Papežová', 'Pařizková', 'Pašková', 'Pátková', 'Patočková',
		'Paulová', 'Pavelková', 'Pavelková', 'Pavelová', 'Pavlasová',
		'Pavlicová', 'Pavličková', 'Pavliková', 'Pavlová', 'Pazderová',
		'Pecková', 'Pecháčková', 'Pechová', 'Pechová', 'Pekárková',
		'Pekařová', 'Pelcová', 'Pelikánová', 'Pernicová', 'Peroutková',
		'Peřinová', 'Pešková', 'Pešková', 'Peštová', 'Peterková',
		'Petráková', 'Petrášová', 'Petrová', 'Petrová', 'Petřičková',
		'Petřiková', 'Phamová', 'Pichová', 'Pilařová', 'Pilátová',
		'Pišová', 'Pivoňková', 'Plačková', 'Plachá', 'Plšková',
		'Pluhařová', 'Podzimková', 'Pohlová', 'Pokorná', 'Poláčková',
		'Poláchová', 'Poláková', 'Polanská', 'Polášková', 'Polivková',
		'Popelková', 'Pospichalová', 'Pospišilová', 'Potůčková',
		'Pourová', 'Prachařová', 'Prášková', 'Pražáková',
		'Prchalová', 'Procházková', 'Prokešová', 'Prokopová',
		'Prošková', 'Provazniková', 'Průchová', 'Průšová',
		'Přibylová', 'Přihodová', 'Přikrylová', 'Pšeničková',
		'Ptáčková', 'Rácová', 'Radová', 'Raková', 'Rambousková',
		'Rašková', 'Ratajová', 'Remešová', 'Rezková', 'Richterová',
		'Richtrová', 'Roubalová', 'Rousová', 'Rozsypalová', 'Rudolfová',
		'Růžková', 'Růžičková', 'Rybová', 'Rybářová', 'Rýdlová',
		'Ryšavá', 'Řeháčková', 'Řeháková', 'Řehořová', 'Řezáčová',
		'Řezničková', 'Řihová', 'Sadilková', 'Samková', 'Sedláčková',
		'Sedláková', 'Sedlářová', 'Sehnalová', 'Seidlová', 'Seifertová',
		'Sekaninová', 'Semerádová', 'Severová', 'Schejbalová', 'Schmidtová',
		'Schneiderová', 'Schwarzová', 'Sikorová', 'Siváková', 'Skácelová',
		'Skalová', 'Skálová', 'Skalická', 'Sklenářová', 'Skopalová',
		'Skořepová', 'Skřivánková', 'Slabá', 'Sládková', 'Sladká',
		'Slámová', 'Slaninová', 'Slavičková', 'Slaviková', 'Slezáková',
		'Slováčková', 'Slováková', 'Sluková', 'Smejkalová', 'Smékalová',
		'Smetanová', 'Smolová', 'Smoliková', 'Smolková', 'Smrčková',
		'Smržová', 'Smutná', 'Sobková', 'Sobotková', 'Sochorová',
		'Sojková', 'Sokolová', 'Sommerová', 'Součková', 'Soukupová',
		'Sovová', 'Spáčilová', 'Spurná', 'Srbová', 'Staňková',
		'Stárková', 'Stará', 'Stehliková', 'Steinerová', 'Stejskalová',
		'Stiborová', 'Stoklasová', 'Straková', 'Stránská', 'Strejčková',
		'Strnadová', 'Strouhalová', 'Studená', 'Studničková',
		'Stuchliková', 'Stupková', 'Suchánková', 'Suchomelová', 'Suchá',
		'Suková', 'Svačinová', 'Svatoňová', 'Svatošová', 'Světliková',
		'Svitáková', 'Svobodová', 'Svozilová', 'Sýkorová', 'Synková',
		'Syrová', 'Šafařiková', 'Šafářová', 'Šafránková',
		'Šálková', 'Šandová', 'Šašková', 'Šebková', 'Šebelová',
		'Šebestová', 'Šedová', 'Šedivá', 'Šenková', 'Šestáková',
		'Ševčiková', 'Šilhavá', 'Šimáčková', 'Šimáková',
		'Šimánková', 'Šimová', 'Šimčiková', 'Šimečková', 'Šimková',
		'Šimonová', 'Šimůnková', 'Šindelářová', 'Šindlerová',
		'Šipková', 'Šipová', 'Široká', 'Širová', 'Šišková',
		'Škodová', 'Škrabalová', 'Šlechtová', 'Šmejkalová', 'Šmerdová',
		'Šmidová', 'Šnajdrová', 'Šolcová', 'Špačková', 'Špičková',
		'Šplichalová', 'Šrámková', 'Šťastná', 'Štefanová',
		'Štefková', 'Šteflová', 'Štěpánková', 'Štěpánová',
		'Štěrbová', 'Šubrtová', 'Šulcová', 'Šustrová', 'Švábová',
		'Švandová', 'Švarcová', 'Švecová', 'Švehlová', 'Švejdová',
		'Švestková', 'Táborská', 'Tancošová', 'Teplá', 'Tesařová',
		'Tichá', 'Tománková', 'Tomanová', 'Tomášková', 'Tomášová',
		'Tomečková', 'Tomková', 'Tomešová', 'Tóthová', 'Tranová',
		'Trávničková', 'Trčková', 'Trnková', 'Trojanová', 'Truhlářová',
		'Třisková', 'Tučková', 'Tůmová', 'Turečková', 'Turková',
		'Tvrdiková', 'Tvrdá', 'Uherová', 'Uhliřová', 'Ulrichová',
		'Urbancová', 'Urbánková', 'Urbanová', 'Vacková', 'Václavková',
		'Václaviková', 'Vaculiková', 'Vágnerová', 'Váchová',
		'Valášková', 'Valová', 'Válková', 'Valentová', 'Valešová',
		'Váňová', 'Vančurová', 'Vaněčková', 'Vaňková', 'Vaničková',
		'Vargová', 'Vašáková', 'Vašková', 'Vašičková', 'Vávrová',
		'Vavřiková', 'Večeřová', 'Vejvodová', 'Vernerová', 'Veselá',
		'Veverková', 'Vichová', 'Vilimková', 'Vinšová', 'Višková',
		'Vitásková', 'Vitková', 'Vitová', 'Vlachová', 'Vlasáková',
		'Vlčková', 'Vlková', 'Vobořilová', 'Vodáková', 'Vodičková',
		'Vodrážková', 'Vojáčková', 'Vojtová', 'Vojtěchová',
		'Vojtková', 'Vojtišková', 'Vokounová', 'Volková', 'Volfová',
		'Volná', 'Vondráčková', 'Vondráková', 'Vondrová', 'Voráčková',
		'Vorlová', 'Vorličková', 'Vořišková', 'Votavová', 'Votrubová',
		'Vrabcová', 'Vránová', 'Vrbová', 'Vrzalová', 'Vybiralová',
		'Vydrová', 'Vymazalová', 'Vyskočilová', 'Vysloužilová',
		'Wagnerová', 'Walterová', 'Weberová', 'Weissová', 'Winklerová',
		'Wolfová', 'Zábranská', 'Zahrádková', 'Zahradniková', 'Zachová',
		'Zajicová', 'Zajičková', 'Zálešáková', 'Zámečniková',
		'Zapletalová', 'Zárubová', 'Zatloukalová', 'Zavadilová',
		'Zavřelová', 'Zbořilová', 'Zdražilová', 'Zedniková', 'Zelenková',
		'Zelená', 'Zelinková', 'Zemánková', 'Zemanová', 'Zezulová',
		'Ziková', 'Zikmundová', 'Zimová', 'Zlámalová', 'Zoubková',
		'Zouharová', 'Zvěřinová', 'Žáčková', 'Žáková', 'Žďárská',
		'Žemličková', 'Židková', 'Žižková', 'Žůrková',
	);

	protected static $title = array(
		'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.',
	);

	/**
	 * @return czech birth number
	 * @param string|null $gender 'male', 'female' or null for any
	 * @param int $minAge minimal age of "generated person" in years
	 * @param int $maxAge maximal age of "generated person" in years
	 */

	public function birthNumber($gender = null, $minAge = 0, $maxAge = 100, $slashProbability = 50) {
		if ($gender === null) {
			$gender = $this->generator->boolean() ? static::GENDER_MALE : static::GENDER_FEMALE;
		}

		$startTimestamp = strtotime("-${maxAge} year");
		$endTimestamp = strtotime("-${minAge} year");
		$randTimestamp = static::numberBetween($startTimestamp, $endTimestamp);

		$year = intval(date('Y', $randTimestamp));
		$month = intval(date('n', $randTimestamp));
		$day = intval(date('j', $randTimestamp));
		$suffix = static::numberBetween(0, 999);

		// women has +50 to month
		if ($gender == static::GENDER_FEMALE) {
			$month += 50;
		}
		// from year 2004 everyone has +20 to month when birth numbers in one day are exhausted
		if ($year >= 2004 && $this->generator->boolean(10)) {
			$month += 20;
		}

		$birthNumber = sprintf('%02d%02d%02d%03d', $year % 100, $month, $day, $suffix);

		// from year 1954 birth number includes CRC
		if ($year >= 1954) {
			$crc = intval($birthNumber, 10) % 11;
			if ($crc == 10) {
				$crc = 0;
			}
			$birthNumber .= sprintf('%d', $crc);
		}

		// add slash
		if ($this->generator->boolean($slashProbability)) {
			$birthNumber = substr($birthNumber, 0, 6) . '/' . substr($birthNumber, 6);
		}

		return $birthNumber;
	}

	public static function birthNumberMale() {
		return static::birthNumber(static::GENDER_MALE);
	}

	public static function birthNumberFemale() {
		return static::birthNumber(static::GENDER_FEMALE);
	}

	public function title($gender = null) {
		return static::titleMale();
	}

	/**
	 * replaced by specific unisex Czech title
	 */
	public static function titleMale() {
		return static::randomElement(static::$title);
	}

	/**
	 * replaced by specific unisex Czech title
	 */
	public static function titleFemale() {
		return static::titleMale();
	}

	/**
	 * @param string|null $gender 'male', 'female' or null for any
	 * @example 'Albrecht'
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
}
