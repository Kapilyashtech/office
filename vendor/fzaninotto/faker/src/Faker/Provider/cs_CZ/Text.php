<?php

namespace Faker\Provider\cs_CZ;

class Text extends \Faker\Provider\Text {
	public function realText($maxNbChars = 200, $indexSize = 2) {
		$text = parent::realText($maxNbChars, $indexSize);
		$text = str_replace('„', '', $text);

		return str_replace('“', '', $text);
	}

	/**
	 * License: PD old 70
	 *
	 * Title: Krakatit
	 * Author: Karel Čapek
	 * Release Date: 25. 12. 1923 – 15. 4. 1924
	 * Language: Czech
	 *
	 * @see https://cs.wikisource.org/wiki/Krakatit
	 * @var string
	 *
	 * Karel Čapek
	 * KRAKATIT
	 * Zněni tohoto textu vycházi z dila Krakatit tak, jak bylo vydáno v Československém spisovateli v roce 1982
	 * (ČAPEK, Karel. Továrna na absolutno ; Krakatit. 12. vyd. Továrny na absolutno, 16. vyd. Krakatitu. Praha :
	 * Československý spisovatel, 1982. 476 s. Spisy, sv. 3.).
	 * Dalši dila Karla Čapka naleznete online na www stránkách Městské knihovny v Praze: www.mlp.cz/karelcapek.
	 * Elektronické publikováni dila Karla Čapka je společným projektem Městské knihovny v Praze,
	 * Společnosti bratři Čapků, Památniku Karla Čapka a Českého národniho korpusu.
	 */
	protected static $baseText = <<<'EOT'
I.
S večerem zhoustla mlha sychravého dne. Je ti, jako by ses protlačoval řidkou
vlhkou hmotou, jež se za tebou neodvratně zavirá. Chtěl bys být doma. Doma, u
své lampy, v krabici čtyř stěn. Nikdy ses necitil tak opuštěn.
Prokop si razi cestu po nábřeži. Mrazi ho a čelo má zvlhlé potem slabosti;
chtěl by si sednout tady na té mokré lavičce, ale boji se strážniků. Zdá se
mu, že se motá; ano, u Staroměstských mlýnů se mu někdo vyhnul obloukem jako
opilému. Nyni tedy vynakládá veškeru silu, aby šel rovně. Teď, teď jde proti
němu člověk, má klobouk do oči a vyhrnutý limec. Prokop zatiná zuby, vrašti
čelo, napiná všechny svaly, aby bezvadně přešel. Ale zrovna na krok před
chodcem se mu udělá v hlavě tma a celý svět se s nim pojednou zatoči; náhle
vidi zblizka, zblizoučka pár pronikavých oči, jak se do něho vpichly, naráži
na něči rameno, vypravi ze sebe cosi jako „promiňte“ a vzdaluje se s
křečovitou důstojnosti. Po několika krocich se zastavi a ohlédne; ten člověk
stoji a divá se upřeně za nim. Prokop se sebere a odcházi trochu rychleji; ale
nedá mu to, musi se znovu ohlédnout; a vida, ten člověk ještě pořád stoji a
divá se za nim, dokonce samou pozornosti vysunul z limce hlavu jako želva. „Ať
kouká,“ mysli si Prokop znepokojen, „teď už se ani neohlédnu.“ A jde, jak
nejlépe umi; náhle slyši za sebou kroky. Člověk s vyhrnutým limcem jde za nim.
Zdá se, že běži. A Prokop se v nesnesitelné hrůze dal na útěk.
Svět se s nim opět zatočil. Těžce oddychuje, jektaje zuby opřel se o strom a
zavřel oči. Bylo mu strašně špatně, bál se, že padne, že mu praskne srdce a
krev vyšplichne ústy. Když otevřel oči, viděl těsně před sebou člověka s
vyhrnutým limcem.
„Nejste vy inženýr Prokop?“ ptal se člověk, patrně už poněkolikáté.
„Já… já tam nebyl,“ pokoušel se Prokop cosi zalhávat.
„Kde?“ ptal se muž.
„Tam,“ řekl Prokop a ukazoval hlavou kamsi k Strahovu. „Co na mně chcete?“
„Copak mne neznáš? Já jsem Tomeš. Tomeš z techniky, neviš už?“
„Tomeš,“ opakoval Prokop, a bylo mu k smrti jedno, jaké to je jméno. „Ano,
Tomeš, to se rozumi. A co – co mi chcete?“
Muž s vyhrnutým limcem uchopil Prokopa pod paži. „Počkej, teď si sedneš,
rozumiš?“
„Ano,“ řekl Prokop a nechal se dovést k lavičce. „Já totiž… mně neni dobře,
vite?“ Náhle vyprostil z kapsy ruku zavázanou jakýmsi špinavým cárem.
„Poraněn, vite? Zatracená věc.“
„A hlava tě neboli?“ řekl člověk.
„Boli.“
„Tak poslouchej, Prokope,“ řekl člověk. „Teď máš horečku nebo co. Musiš do
špitálu, viš? Je ti zle, to je vidět. Ale aspoň se hleď upamatovat, že se
známe. Já jsem Tomeš. Chodili jsme spolu do chemie. Člověče, rozpomeň se!“
„Já vim, Tomeš,“ ozval se Prokop chabě. „Ten holomek. Co s nim je?“
„Nic,“ řekl Tomeš. „Mluvi s tebou. Musiš do postele, rozumiš? Kde bydliš?“
„Tam,“ namáhal se mluvit Prokop a ukazoval někam hlavou. „U… u Hybšmonky.“
Náhle se pokoušel vstát. „Já tam nechci! Nechoďte tam! Tam je – tam je –“
„Co?“
„Krakatit,“ zašeptal Prokop.
„Co je to?“
„Nic. Neřeknu. Tam nikdo nesmi. Nebo – nebo –“
„Co?“
„Ffft, bum!“ udělal Prokop a hodil rukou do výše.
„Co je to?“
„Krakatoe. Kra-ka-tau. Sopka. Vul-vulkán, vite? Mně to… natrhlo palec. Já
nevim, co…“ Prokop se zarazil a pomalu dodal: „To ti je strašná věc, člověče.“
Tomeš se pozorně dival, jako by něco očekával. „Tak tedy,“ začal po chvilce,
„ty ještě pořád děláš do třaskavin?“
„Pořád.“
„S úspěchem?“
Prokop vydal ze sebe cosi na způsob smichu. „Chtěl bys vědět, že? Holenku, to
neni jen tak. Neni – neni jen tak,“ opakoval klátě opile hlavou. „Člověče, ono
to samo od sebe samo od sebe –“
„Co?“
„Kra-ka-tit. Krakatit. Krrrakatit. A ono to samo od sebe – Já nechal jen
prášek na stole, viš? Ostatni jsem smetl dododo-do takové piksly. Zu-zůstal
jen poprašek na stole, – a najednou –“
„– to vybuchlo.“
„Vybuchlo. Jen takový nálet, jen prášek, co jsem utrousil. Ani to vidět
nebylo. Tuhle – žárovka – kilometr dál. Ta to nebyla. A já – v lenošce, jako
kus dřeva. Viš, unaven. Přiliš práce. A najednou… prásk! Já letěl na zem. Okna
to vyrazilo a – žárovka pryč. Detonace jako – jako když bouchne lydditová
patrona. Stra-strašná brizance. Já – já nejdřiv myslel, že praskla ta por-
porcená – ponce – por-ce-lánová, polcelánová, porcenálová, poncelár, jak se to
honem, to bilé, vite, izolátor, jak se to jmenuje? Kře-mi-čitan hlinitý.“
„Porcelán.“
„Piksla. Já myslel, že praskla ta piksla, se všim všudy. Tak rozškrtnu sirku,
a ona tam je celá, ona je celá, ona je celá. A já – jako sloup – až mně sirka
spálila prsty. A pryč – přes pole – potmě – na Břevnov nebo do Střešovic – Aa
někde mě napadlo to slovo. Krakatoe. Krakatit. Kra-ka-tit. Nene, tak to
nenenebylo. Jak to bouchlo, letim na zem a křičim Krakatit. Krakatit. Pak jsem
na to zapomněl. Kdo je tu? Kdo – kdo jste?“
„Kolega Tomeš.“
„Tomeš, aha. Ten všivák! Přednášky si vypůjčoval. Nevrátil mně jeden sešit
chemie. Tomeš, jak se jmenoval?“
„Jiři.“
„Já už vim, Jirka. Ty jsi Jirka, já vim. Jirka Tomeš. Kde máš ten sešit?
Počkej, já ti něco řeknu. Až vyleti to ostatni, je zle. Člověče, to rozmláti
celou Prahu. Smete. Odfoukne, ft! Až vyleti ta por-ce-lánová dóze, viš?“
„Jaká dóze?“
„Ty jsi Jirka Tomeš, já vim. Jdi do Karlina. Do Karlina nebo do Vysočan, a
divej se, až to vyleti. Běž, běž honem!“
„Proč?“
„Já toho nadělal cent. Cent Krakatitu. Ne, asi – asi patnáct deka. Tam nahoře,
v té por-ce-lánové dózi. Člověče, až ta vyleti – Ale počkej, to neni možné, to
je nesmysl,“ mumlal Prokop chytaje se za hlavu.
„Nu?“
„Proč – proč – proč to nevybuchlo také v té dózi? Když ten prášek – sám od
sebe – Počkej, na stole je zin-zinkový plech – plech – Od čeho to na stole
vybuchlo? Poč-kej, buď tiše, buď tiše,“ drtil Prokop a vrávoravě se zvedl.
„Co je ti?“
„Krakatit,“ zabručel Prokop, udělal celým tělem jakýsi otáčivý pohyb a svalil
se na zem v mrákotách.


II.

Prvni, co si Prokop uvědomil, bylo, že se s nim všechno otřásá v drnčivém
rachotu a že ho někdo pevně drži kolem pasu. Hrozně se bál otevřit oči;
myslel, že se to na něj řiti. Ale když to neustávalo, otevřel oči a viděl před
sebou matný čtyřúhelnik, kterým se sunou mlhavé světelné koule a pruhy. Neuměl
si to vysvětlit; dival se zmateně na uplývajici a poskakujici mátohy, trpně
odevzdán ve vše, co se s nim bude dit. Pak pochopil, že ten horlivý rachot
jsou kola vozu a venku že mijeji jenom svitilny v mlze; a unaven tolikerým
pozorovánim zavřel opět oči a nechal se unášet.
„Teď si lehneš,“ řekl tiše hlas nad jeho hlavou; „spolkneš aspirin a bude ti
lip. Ráno ti přivedu doktora, ano?“
„Kdo je to,“ ptal se Prokop ospale.
„Tomeš. Lehneš si u mne, Prokope. Máš horečku. Kde tě co boli?“
„Všude. Hlava se mi toči. Tak, viš –“
„Jen tiše lež. Uvařim ti čaj a vyspiš se. Máš to z rozčileni, viš. To je
taková nervová horečka. Do rána to přejde.“
Prokop svraštil čelo v námaze vzpomináni. „Já vim,“ řekl po chvili
starostlivě. „Poslyš, ale někdo by měl tu pikslu hodit do vody. Aby
nevybuchla.“
„Bez starosti. Teď nemluv.“
„A… já bych snad mohl sedět. Nejsem ti těžký?“
„Ne, jen lež.“
„– – A ty máš ten můj sešit chemie,“ vzpomněl si Prokop najednou.
„Ano, dostaneš jej. Ale teď klid, slyšiš?“
„Já ti mám tak těžkou hlavu –“
Zatim drkotala drožka nahoru Ječnou ulici. Tomeš slabounce hvizdal nějakou
melodii a dival se oknem. Prokop sipavě dýchal s tichým sténánim. Mlha smáčela
chodniky a vnikala až pod kabát svým sychravým slizem; bylo pusto a pozdě.
„Už tam budeme,“ řekl Tomeš nahlas. Drožka se čerstvěji rozhrčela na náměsti a
zahnula vpravo. „Počkej, Prokope, můžeš udělat pár kroků? Já ti pomohu.“
S námahou vlekl Tomeš svého hosta do druhého patra, Prokop si připadal jaksi
lehký a bez váhy, a nechal se skoro vynést po schodech nahoru; ale Tomeš silně
oddechoval a utiral si pot.
„Viď, jsem jako nitě,“ divil se Prokop.
„Nu ovšem,“ mručel udýchaný Tomeš odemykaje svůj byt.
Prokopovi bylo jako malému ditěti, když jej Tomeš svlékal. „Má maminka,“ začal
něco povidat, „když má maminka, to už je, to už je dávno, tatinek seděl u
stolu, a maminka mne nosila do postele, rozumiš?“
Pak už byl v posteli, přikryt po bradu, jektal zuby a dival se, jak se Tomeš
toči u kamen a rychle zatápi. Bylo mu do pláče dojetim, litosti a slabosti, a
pořád brebentil; uklidnil se, až dostal na čelo studený obkladek. Tu se tiše
dival po pokoji; bylo tu citit tabák a ženu.
„Ty jsi kujón, Tomši,“ ozval se vážně. „Pořád máš holky.“
Tomeš se k němu obrátil. „Nu, a co?“
„Nic. Co vlastně děláš?“
Tomeš mávl rukou. „Mizerně, kamaráde. Penize nejsou.“
„Flámuješ.“
Tomeš jen potřásl hlavou.
„A je tě škoda, viš?“ začal Prokop starostlivě. „Ty bys mohl – Koukej, já
dělám už dvanáct let.“
„A co z toho máš?“ namitl Tomeš přikře.
„No, sem tam něco. Prodal jsem letos třaskavý dextrin.“
„Zač?“
„Za deset tisic. Viš, nic to neni, hloupost. Taková pitomá bouchačka, pro
doly. Ale kdybych chtěl –“
„Je ti už lip?“
„Krásně mi je. Já jsem ti našel metody! Člověče, jeden nitrát ceru, to ti je
vášnivá potvora; a chlor, chlor, tetrastupeň chlordusiku se zapáli světlem.
Rozsvitiš žárovku, a prásk! Ale to nic neni. Koukej,“ prohlásil náhle
vystrkuje zpod pokrývky hubenou, děsně zkomolenou ruku. „Když něco vezmu do
ruky, tak… v tom citim šumět atomy. Zrovna to mravenči. Každá hmota mravenči
jinak, rozumiš?“
„Ne.“
„To je sila, viš? Sila v hmotě. Hmota je strašně silná. Já… já hmatám, jak se
to v ni hemži. Drži to dohromady… s hroznou námahou. Jak to uvnitř rozvikláš,
rozpadne se, bum! Všechno je exploze. Když se rozevře květina, je to exploze.
Každá myšlenka, to je takové prasknuti v mozku. Když mně podáš ruku, citim,
jak v tobě něco exploduje. Já mám takový hmat, člověče. A sluch. Všechno šumi,
jako šumivý prášek. To jsou samé malinkaté výbuchy. Mně ti tak huči v hlavě…
Ratatata, jako strojni puška.“
„Tak,“ řekl Tomeš, „a teď spolkni tuhleten aspirin.“
„Ano. Třa-třaskavý aspirin. Perchlorovaný acetylsalicylazid. To nic neni.
Člověče, já jsem našel exotermické třaskaviny. Každá látka je vlastně
třaskavina. Voda… voda je třaskavina. Hlina… a vzduch jsou třaskaviny. Peři,
peři v peřině je taky třaskavina. Viš, zatim to má jen teoretický význam. A já
jsem našel atomové výbuchy. Já – já – já jsem udělal alfaexploze. Roz-pad-ne
se to na plus plus částice. Žádná termochemie. De-struk-ce. Destruktivni
chemie, člověče. To ti je ohromná věc, Tomši, čistě vědecky. Já ti mám doma
tabulky… Lidi, kdybych já měl aparáty! Ale já mám jen oči… a ruce… Počkej, až
to napišu!“
„Nechce se ti spát?“
„Chce. Jsem – dnes – unaven. A co tys pořád dělal?“
„Nu, nic. Život.“
„Život je třaskavina, viš? Prásk, člověk se narodi a rozpadne se, bum! A nám
se zdá, že to trvá bůhvikolik let, viď? Počkej, já jsem teď něco spletl, že?“
„Docela v pořádku, Prokope. Možná že zitra udělám bum. Nebudu-li mit totiž
penize. Ale to je jedno, starouši, jen spi.“
„Já bych ti půjčil, nechceš?“
„Nech. Na to bys nestačil. Snad ještě můj tatik –“ Tomeš mávl rukou.
„Tak vidiš, ty máš ještě tatinka,“ ozval se Prokop po chvili s náhlou
měkkosti.
„Nu ano. Doktor v Týnici.“ Tomeš vstal a přecházel po pokoji. „Je to mizérie,
člověče, mizérie. Mám to nahnuté, nu! A nestarej se o mne. Já už – něco
udělám. Spi!“
Prokop se utišil. Polozavřenýma očima viděl, jak Tomeš sedá ke stolku a hrabe
se v nějakých papirech. Bylo mu jaksi sladko naslouchat šustěni papiru a
tichému hukotu ohně v kamnech. Člověk skloněný u stolku opřel hlavu o dlaně a
snad ani nedýchal; a Prokopovi bylo, že leži doma a vidi svého staršiho
bratra, svého bratra Josefa; uči se z knižek elektrotechnice a bude zitra
dělat zkoušku; a Prokop usnul horečným spánkem.


III.

Zdálo se mu, že slyši hukot jakoby nesčetných kol. „To je nějaká továrna,“
myslel si a běžel po schodech nahoru. Zničehonic se ocitl před velikými
dveřmi, kde stálo na skleněné tabulce: Plinius. Zaradoval se nesmirně a vešel
dovnitř. „Je tu pan Plinius?“ ptal se nějaké slečinky u psaciho stroje. „Hned
přijde,“ řekla slečinka, a tu k němu přistoupil vysoký oholený muž v cutawayi
a s ohromnými kruhovými skly na očich. „Co si přejete?“ řekl.
Prokop se zvědavě dival do jeho neobyčejně výrazné tváře. Mělo to britskou
hubu a vypouklé rozježděné čelo, na skráni bradavici zvici šestáku a bradu
jako filmový herec. „Vy – vy – račte být – Plinius?“
„Prosim,“ řekl vysoký muž a krátkým gestem mu ukázal do své pracovny.
„Jsem velmi… je mi… ohromnou cti,“ koktal Prokop usedaje.
„Co si přejete?“ přerušil ho vysoký muž.
„Já jsem rozbil hmotu,“ prohlásil Prokop. Plinius nic; hrál si jen s ocelovým
kličkem a zaviral těžká vička pod skly.
„To je totiž tak,“ začal Prokop překotně. „V-v-všecko se rozpadá, že? Hmota je
křehká. Ale já udělám, že se to rozpadne najednou, bum! Výbuch, rozumite? Na
padrť. Na molekuly. Na atomy. Ale já jsem rozbil také atomy.“
„Škoda,“ řekl Plinius povážlivě.
„Proč – jaká škoda?“
„Škoda něco rozbit. I atomu je škoda. Nu tak dál.“
„Já… rozbiju atom. Já vim, že už Rutherford… Ale to byla jen taková páračka se
zářenim, vite? To nic neni. To se musi en masse. Jestli chcete, já vám
rozbourám tunu bismutu; rozštipne to ce-celý svět, ale to je jedno. Chcete?“
„Proč byste to dělal?“
„Je to… vědecky zajimavé,“ zmátl se Prokop. „Počkejte, jakpak bych vám to… To
je – to je vám ne-smir-ně zajimavé.“ Chytil se za hlavu. „Počkejte, mně
praskne hla-va; to bude – vědecky – ohromně zajimavé, že? Aha, aha,“ vyhrkl s
úlevou, „já vám to vyložim. Dynamit – dynamit trhá hmotu na kusy, na balvany,
ale benzoltrioxozonid ji roztrhá na prášek; udělá jen malou diru, ale
rrrozdrti hmotu nana-na submikroskopickou padrť, rozumite? To dělá detonačni
rychlost. Hmota nemá čas ustoupit; nemůže se už ani roz-rozhrnout, roztrhnout,
vite? A já… jjjá jsem stupňoval detonačni rychlost. Argonozonid.
Chlorargonoxozonid. Tetrargon. A pořád dál. Pak už ani vzduch nemůže ustoupit;
je stejně tuhý jako… jako ocelová deska. Roztrhá se na molekuly. A pořád dál.
A najednou vám… od jisté rychlosti… začne brizance děsně stoupat. Roste…
kvadraticky. Já koukám jako blázen. Odkud se to bere? Kde kde kde se najednou
vzala ta energie?“ naléhal Prokop zimničně. „Tak řekněte.“
„Nu, třeba v atomu,“ minil Plinius.
„Aha,“ prohlásil Prokop vitězně a utřel si pot. „Tady je ten vtip. Jednoduše v
atomu. Ono to… vrazi atomy do sebe… a… sss… serve betaplášť… a jádro se musi
rozpadnout. To je alfaexploze. Vite, kdo jsem? Já jsem prvni člověk, který
překročil koeficient stlačitelnosti, pane. Já jsem našel atomové výbuchy. Já…
já jsem vyrazil z bismutu tantal. Poslyšte, vite vy, kolik je vy-výkonu v
jednom gramu rtuti? Čtyři sta dvaašedesát miliónů kilogramometrů. Hmota je
děsně silná. Hmota je regiment, který přešlapuje na mistě: ráz dva, ráz dva;
ale dejte ten pravý povel, a regiment vyrazi v útok, en evant! To je výbuch,
rozumite? Hurá!“
Prokop se zarazil vlastnim křikem; v hlavě mu bušilo tak, že přestal cokoli
vnimat. „Promiňte,“ řekl, aby zamluvil rozpaky, a hledal třesouci se rukou své
pouzdro na cigára. „Kouřite?“
„Ne.“
„Již staři Řimané kouřili,“ ujišťoval Prokop a otevřel pouzdro; byly tam samé
těžké patrony. „Zapalte si,“ nutil, „to je lehoučký Nobel Extra.“ Sám ukousl
špičku tetrylové patrony a hledal sirky. „To nic neni,“ začal, „ale znáte
třaskavé sklo? Škoda. Poslyšte, já vám mohu udělat výbušný papir. Napišete
psani, někdo to hodi do ohně a prásk! celý barák se sesype. Chcete?“
„K čemu?“ ptal se Plinius zvedaje oboči.
„Jen tak. Sila musi ven. Já vám něco povim. Kdybyste chodil po stropě, tak co
vám z toho vznikne? Já předevšim kašlu na valenčni teorie. Všecko se dá dělat.
Slyšite, jak to venku rachoti? To slyšite růst trávu: samé výbuchy. Každé
seminko je třaskavá kapsle, která vyleti. Puf, jako raketa. A ti hlupáci si
mysli, že neni žádná tautomerie. Já jim ukážu takovou merotropii, že budou z
toho blázni. Samá laboratorni zkušenost, pane.“
Prokop citil s hrůzou, že žvani nesmysly; chtěl tomu uniknout a mlel tim
rychleji, pleta páté přes deváté. Plinius vážně kýval hlavou; dokonce komihal
celým tělem hlouběji a pořád hlouběji, jako by se klaněl. Prokop drmolil
zmatené formule a nemohl se zastavit, poule oči na Plinia, který se komihal s
rostouci rychlosti jako stroj. Podlaha pod nim se začala houpat a zvedat.
„Ale tak přestaňte, člověče,“ zařval Prokop zděšen a probudil se. Misto Plinia
viděl Tomše, který neobraceje se od stolku bručel: „Nekřič, prosim tě.“
„Já nekřičim,“ řekl Prokop a zavřel oči. V hlavě mu hučelo rychlými a
bolestnými tepy.
Zdálo se mu, že leti přinejmenšim rychlosti světla; nějak se mu sviralo srdce,
ale to dělá jen Fitzgerald-Lorentzovo zploštěni, řekl si; musim být placatý
jako livanec. A najednou se proti němu vyježi nesmirné skleněné hranoly; ne,
jsou to jenom nekonečné hladce vybroušené roviny, jež se protinaji a
prostupuji v břitkých úhlech jako krystalografické modely; a proti jedné
takové hraně je hnán úžasnou rychlosti. „Pozor,“ zařval sám na sebe, neboť v
tisicině vteřiny se musi roztřištit; ale tu již bleskově odletěl zpět a rovnou
proti hrotu obrovského jehlanu; odrazil se jako paprsek a byl vržen na
skleněně hladkou stěnu, smeká se podle ni, svišti do ostrého úhlu, kmitá
šileně mezi jeho stěnami, je hozen pozpátku nevěda proti čemu, zas odmrštěn
dopadá bradou na ostrou hranu, ale v posledni chvili ho to odhodi vzhůru; nyni
si roztřiskne hlavu o euklidovskou rovinu nekonečna, ale již se řiti střemhlav
dolů, dolů do tmy; prudký náraz, bolestné cuknuti v celém těle, ale hned zas
se zvedl a dal se na útěk. Uháni labyrintickou chodbou a za sebou slyši dupot
pronásledovatelů; chodba se úži, svirá se, jeji stěny se přirážeji k sobě
děsným a neodvratným pohybem; i dělá se tenký jako šidlo, zatajuje dech a
upaluje v bláznivé hrůze, aby tudy proběhl, než ho ty stěny rozdrti. Zavřelo
se to za nim s kamenným nárazem, zatimco sám svisti do propasti podle ledově
čišici zdi. Strašný úder, a ztráci vědomi; když procitl, vidi, že je v černé
tmě; hmatá po slizkých kamenných stěnách a křiči o pomoc, ale z jeho úst
nevycházi zvuku; taková je tu tma. Jektaje hrůzou klopýtá po dně propasti;
nahmatá postranni chodbu, i vrhá se do ni; jsou to vlastně. schody, a nahoře,
nekonečně daleko svitá malinký otvor jako v šachtě; běži tedy nahoru po
nesčislných a strašně přikrých stupnich; ale nahoře neni než plošinka,
lehoučká plechová platforma drnčici a chvějici se nad závratnou hlubinou, a
dolů se šroubem toči jen nekonečné schůdky ze železných plátů. A tu již za
sebou slyšel supěni pronásledovatelů. Bez sebe hrůzou se řitil a točil po
schůdkách dolů, a za nim železně řinči a rachoti dupajici zástup nepřátel. A
najednou vinuté schody se konči ostře v prázdnu. Prokop zavyl, rozpřáhl ruce a
pořád ještě viře padal do bezdna. Hlava se mu zatočila, neviděl už a neslyšel;
váznoucima nohama běžel nevěda kam, drcen strašným a slepým puzenim, že musi
kamsi dorazit, než bude pozdě. Rychleji a rychleji ubihal nekonečným
koridorem; čas od času mijel semafor, na kterém pokaždé vyskočila vyšši
čislice: 17, 18, 19. Najednou pochopil, že běhá v kruhu a ta čisla že udávaji
počet jeho oběhů. 40, 41. Popadla ho nesnesitelná hrůza, že přijde pozdě a že
se odtud nedostane; svištěl zběsilou rychlosti, takže se semafor jenom mihal
jako telegrafni tyče z rychliku; a ještě rychleji! nyni už semafor ani
neubihá, nýbrž stoji na jednom mistě a odpočitává bleskovou rychlosti tisice a
desettisice oběhů, a nikde neni východ z té chodby, a chodba je na pohled
rovná a lesklá jako hamburský tunel, a přece se vraci kruhem; Prokop vzlyká
děsem: to je Einsteinův vesmir, a já musim dojit, než bude pozdě! Náhle zazněl
strašný výkřik, a Prokop ustrnul: je to hlas tatinkův, někdo ho vraždi; i jal
se obihat ještě rychleji, semafor zmizel, udělala se tma; Prokop tápal po
stěnách a nahmatal zamčené dveře, a za nimi je slyšet to zoufalé bědováni a
rány pokáceného nábytku. Řva hrůzou zarývá Prokop nehty do dveři, štipe je a
rozškrabává; vytrhal je po třiskách a našel za nimi staré známé schody, jež ho
denně vedly domů, když byl maličký; a nahoře dusi se tatinek, někdo ho škrti a
smýká jim po zemi. Křiče vyleti Prokop nahoru, je doma na chodbě, vidi konve a
chlebovou skřiň maminčinu a pootevřené dveře do kuchyně, a tam uvnitř chropti
a prosi tatinek, aby ho nezabijeli; někdo mu tluče hlavou o zem; chce mu jit
na pomoc, ale nějaká slepá, bláznivá moc ho nuti, aby tady na chodbě běhal
dokola, pořád rychleji dokolečka a chechtal se jikavě, zatimco uvnitř skomirá
a dusi se tatinkovo sténáni. A neschopen vykročit ze závratného bludného
kruhu, řitě se stále rychleji ryčel Prokop šileným smichem hrůzy.
Tu se probudil zalit potem a jektaje zuby. Tomeš mu stál u hlav a dával mu na
rozžhavené čelo nový chladivý obklad.
„To je dobře, to je dobře,“ mumlal Prokop, „já už nebudu spát.“ I ležel tiše a
dival se na Tomše, jak sedi u lampy. Jirka Tomeš, řikal si, a počkejme, pak
kolega Duras, a Honza Buchta, Sudik, Sudik, Sudik, a kdo ještě? Sudik, Trlica,
Trlica, Pešek, Jovanovič, Mádr, Holoubek, co nosil brejle, to je náš ročnik na
chemii. Bože, a který je tamhleten? Aha, to je Vedral, ten padl v roce
šestnáct, a za nim sedi Holoubek, Pacovský, Trlica, Šeba, celý ročnik. A tu
slyšel najednou: „Pan Prokop bude kolokvovat.“
Lekl se nesmirně. U katedry sedi profesor Wald a tahá se suchou ručičkou za
vousy, jako vždy. „Povězte,“ pravi profesor Wald, „co vite o třaskavinách.“
„Třaskaviny třaskaviny,“ začiná Prokop nervózně, „jejich výbušnost záleži na
tom, že že že se náhle vyvine veliký objem plynu, který který se vyvine z
mnohem menšiho objemu výbušné masy… Prosim, to neni správné.“
„Jak to?“ táže se Wald přisně.
„Já já já jsem našel alfavýbuchy. Výbuch totiž nastane rozpadem atomu.
Částečky atomu se rozleti – rozleti –“
„Nesmysl,“ přeruši ho profesor. „Neni žádných atomů.“
„Jsou jsou jsou,“ drtil Prokop. „Prosim, já já já to dokážu –“
„Překonaná teorie,“ bruči profesor. „Nejsou vůbec žádné atomy, jsou jenom
gumetály. Vite, co je to gumetál?“
Prokop se zapotil úlekem. Toho slova nikdy v životě neslyšel. Gumetál? „To
neznám,“ vydechl stisněně.
„Tak vidite,“ řekl suše Wald. „A pak si troufáte dělat kolokvium. Co vite o
Krakatitu?“
Prokop se nesmirně zarazil. „Krakatit,“ šeptal, „to je… to je úplně nová
třaskavina, která… která dosud…“
„Čim se zaniti? Čim? Čim exploduje?“
„Hertzovými vlnami,“ vyhrkl Prokop s úlevou.
„Jak to vite?“
„Protože mně zničehonic vybuchla. Protože… protože nebyl žádný jiný impuls. A
protože –“
„Nu?“
„… jeji syn-syntéza… se mně povedla za-za-za… vysokofrekvenčni oscilace. Neni
to dosud vyvyvysvětleno; ale já myslim, že – – že to byly nějaké
elektromagnetické vlny.“
„Byly. Já to vim. Teď napište na tabuli chemicky vzorec Krakatitu.“
Prokop vzal kus křidy a načmáral na tabuli svůj vzorec.
„Přečtěte.“
Prokop odřikal vzorec nahlas. Tu vstal profesor Wald a řekl najednou jakýmsi
docela jiným hlasem: „Jak? Jak je to?“
Prokop opakoval formuli.
„Tetrargon?“ ptal se profesor rychle. „Pb kolik?“
„Dvě.“
„Jak se to dělá?“ tázal se hlas podivně blizce. „Postup! Jak se to dělá? Jak?…
Jak se dělá Krakatit?“
Prokop otevřel oči. Nad nim se skláněl Tomeš s tužkou a zápisnikem v ruce a
bez dechu se dival na jeho rty.
„Co?“ mumlal Prokop neklidně. „Co chceš? Jak… jak se to dělá?“
„Něco se ti zdálo,“ řekl Tomeš a schoval zápisnik za zády. „Spi, člověče,
spi.“


IV.

Teď jsem něco vyžvanil, uvědomoval si Prokop jasnějšim cipem mozku; ale jinak
mu to bylo svrchovaně lhostejno; chtělo se mu jen spát, nesmirně spát. Viděl
jakýsi turecký koberec, jehož vzor se bez konce přesunoval, prostupoval a
měnil. Nebylo to nic, a přece ho to jaksi rozčilovalo; i ve spani zatoužil
vidět znovu Plinia. Snažil se vybavit si jeho podobu; misto toho měl před
sebou ohavnou zešklebenou tvář, jež skřipala žlutými vyžranými zuby, až se
drtily, a pak je po kouskách vyplivovala. Chtěl tomu uniknout; napadlo ho
slovo „rybář“, a hle, zjevil se mu rybář nad šedivou vodou i s rybami v
čeřenu; řekl si „lešeni“, a viděl skutečné lešeni do posledni skoby a vazby.
Dlouho se bavil tim, že vymýšlel slova a pozoroval obrázky jimi promitnuté;
ale pak, pak už si živou moci nemohl na žádné slovo vzpomenout. Namáhal se
usilovně, aby našel aspoň jedno jediné slovo nebo věc, ale marně; tu ho zalila
hrůza bezmoci studeným potem. Musim postupovat metodicky, uminil si; začnu zas
od začátku, nebo jsem ztracen. Šťastně si vzpomněl na slovo „rybář“, ale
zjevil se mu hliněný prázdný galon od petroleje; bylo to děsné. Řekl si
„židle“, a ukázal se mu s podivnou podrobnosti dehtovaný továrni plot s
trochou smutné zaprášené trávy a rezavými obručemi. To je šilenstvi, řekl si s
mrazivou jasnosti; to je, pánové, typická pomatenost, hyperofabula ugongi
dugongi Darwin. Tu se mu tento odborný název zazdál neznámo proč ukrutně
směšný, a dal se do hlasitého, zrovna zalykavého smichu, jimž se probudil.
Byl úplně zpocen a odkopán. Dival se horečnýma očima na Tomše, který chvatně
přecházel po pokoji a házel nějaké věci do kufřiku; ale nepoznával ho.
„Poslyšte, poslyšte,“ začal, „to je k smichu, poslyšte, tak počkejte, to
musite, poslyšte –“ Chtěl řici jako vtip ten podivuhodný odborný název, a sám
se smál předem; ale živou moci si nemohl vzpomenout, jak to vlastně bylo, i
rozmrzel se a umkl.
Tomeš si oblékl ulstr a narazil čepici; a když už bral kufřik, zaváhal a sedl
si na pelest k Prokopovi. „Poslyš, starouši,“ řekl starostlivě, „já teď musim
odejet. K tátovi, do Týnice. Nedá-li mně penize, tak – se už nevrátim, viš?
Ale nic si z toho nedělej. Ráno sem přijde domovnice a přivede ti doktora,
ano?“
„Kolik je hodin?“ ptal se Prokop netečně.
„Čtyři… Čtyři a pět minut. Snad… ti tu nic nescházi?“
Prokop zavřel oči, odhodlán nezajimat se už o nic na světě. Tomeš ho pečlivě
přikryl, a bylo ticho.
Náhle otevřel oči dokořán. Viděl nad sebou neznámý strop a po jeho kraji běži
neznámý ornament. Sáhl rukou po svém nočnim stolku, a hmátl do prázdna.
Obrátil se polekán, a misto svého širokého laboratorniho pultu vidi nějaký
cizi stolek s lampičkou. Tam, kde bývalo okno, je skřiň; kde stávalo umyvadlo,
jsou jakési dveře. Zmátl se tim všim nesmirně; nedovedl pochopit, co se s nim
děje, kde se octl, a přemáhaje závrať usedl na posteli. Pomalu si uvědomil, že
neni doma, ale nemohl si vzpomenout, jak se sem dostal. „Kdo je to,“ zeptal se
hlasitě nazdařbůh, stěži hýbaje jazykem. „Pit,“ ozval se po chvili, „pit!“
Bylo trýznivé ticho. Vstal z postele a trochu vrávoravě šel hledat vodu. Na
umyvadle našel karafu a pil z ni dychtivě; a když se vracel do postele,
podlomily se mu nohy a usedl na židli, nemoha dále. Seděl snad hodně dlouho;
pak ho roztřásla zima, neboť se celý polil vodou z karafy, a přišlo mu lito
sebe sama, že je kdesi a nevi sám kde, že ani do postele nedojde a že je tak
bezradně a bezmocně sám; tu propukl v dětský vzlykavý pláč.
Když se trochu vyplakal, bylo mu v hlavě jasněji. Dokonce mohl dojit až k
posteli a ulehl jektaje zuby; a sotva se zahřál, usnul mrákotným spánkem beze
snu.
Když se probudil, byla roleta vytažena do šedivého dne a v pokoji trochu
pouklizeno; nedovedl pochopit, kdo to udělal, ale jinak se pamatoval na vše,
na včerejši explozi, na Tomše i na jeho odjezd. Zato ho třeštivě bolela hlava,
bylo mu těžko na prsou a drásavě ho mučil kašel. Je to špatné, řikal si, je to
docela špatné; měl bych jit domů a lehnout si. Vstal tedy a začal se pomalu
strojit chvilemi odpočivaje. Bylo mu, jako by mu něco drtilo hrozným tlakem
prsa. Usedl pak netečný ke všemu a těžce dýchal.
Tu krátce, jemně zazněl zvonek. Vzchopil se s námahou a šel otevřit. Na prahu
v chodbě stála mladá divka s tváři zastřenou závojem.
„Bydli tady… pan Tomeš?“ ptala se spěšně a stisněně.
„Prosim,“ řekl Prokop a ustoupil ji z cesty; a když, trochu váhajic, těsně
podle něho vcházela dovnitř, zavála na něj slabounká a spanilá vůně, že
rozkoši vzdychl.
Posadil ji vedle okna a usedl proti ni, drže se zpřima, jak nejlépe dovedl.
Citil, že samým úsilim vypadá přisně a strnule, což uvádělo do nesmirných
rozpaků jeho i divku. Hryzala si pod závojem rty a klopila oči; ach, libezná
hladkost tváře, ach, ruce malé a hrozně rozčilené! Náhle zvedla oči, a Prokop
zatajil dech omámen úžasem; tak krásná se mu zdála.
„Pan Tomeš neni doma?“ ptala se divka.
„Tomeš odejel,“ řekl Prokop váhavě. „Dnes v noci, slečno.“
„Kam?“
„Do Týnice, k svému otci.“
„A vráti se?“
Prokop pokrčil rameny.
Divka sklopila hlavu a jeji ruce s něčim zápasily. „A řekl vám, proč – proč –“
„Řekl.“
„A myslite, že – že to udělá?“
„Co, slečno?“
„Že se zastřeli.“
Prokop si bleskem vzpomněl, že viděl Tomše ukládat revolver do kufřiku. ,Možná
že zitra udělám bum,‘ slyšel jej znovu drtit mezi zuby. Nechtěl nic řici, ale
vypadal asi velmi povážlivě.
„Ó bože, ó bože,“ vypravila ze sebe divka, „ale to je strašné! Řekněte,
řekněte –“
„Co, slečno?“
„Kdyby – kdyby někdo mohl za nim jet! Kdyby mu někdo řekl – kdyby mu dal –
Vždyť by to nemusel udělat, chápete? Kdyby někdo za nim ještě dnes jel –“
Prokop se dival na jeji zoufalé ruce, jež se zatinaly a spinaly.
„Já tam tedy pojedu, slečno,“ řekl tiše. „Náhodou… mám snad v tu stranu
nějakou cestu. Kdybyste chtěla – já –“
Divka zvedla hlavu. „Skutečně,“ vyhrkla radostně, „vy byste mohl –?“
„Já jsem jeho… starý kamarád, vite?“ vysvětloval Prokop. „Chcete-li mu něco
vzkázat… nebo poslat… já ochotně…“
„Bože, vy jste hodný,“ vydechla divka.
Prokop se slabě začervenal. „To je maličkost, slečno,“ bránil se. „Náhodou…
mám zrovna volný čas… stejně chci někam jet, a vůbec –“ Mávl v rozpacich
rukou. „To nestoji za řeč. Udělám všecko, co chcete.“
Divka se zarděla a honem se divala jinam. „Ani nevim, jak bych… vám měla
děkovat,“ řekla zmateně. „Mně je tak lito, že… že vy… Ale je to tak důležité –
A pak, vy jste jeho přitel – Nemyslete si, že já sama –“ Tu se přemohla a
upřela na Prokopa čiré oči. „Já mu něco musim poslat. Od někoho jiného. Já vám
nemohu řici –“
„Neni třeba,“ řekl Prokop rychle. „Já mu to dám, a je to. Já jsem tak rád, že
mohu vám… že mohu jemu… Prši snad?“ ptal se náhle divaje se na jeji zrosenou
kožišinku.
„Prši.“
„To je dobře,“ minil Prokop; myslel totiž na to, jak přijemně by chladilo,
kdyby na tu kožišinku směl položit čelo.
„Já to tu nemám,“ řekla vstávajic. „Bude to jen malý baliček. Kdybyste mohl
počkat… Já vám to přinesu za dvě hodiny.“
Prokop se velmi strnule uklonil; bál se totiž, že ztrati rovnováhu. Ve dveřich
se obrátila a pohlédla na něj upřenýma očima. „Na shledanou.“ A byla ta tam.
Prokop usedl a zavřel oči. Krupičky deště na kožišince, hustý a orosený závoj;
zastřený hlas, vůně, neklidné ruce v těsných, maličkých rukavičkách; chladná
vůně, pohled jasný a matouci pod sličným, pevným obočim. Ruce na klině, měkké
řaseni sukně na silných kolenou, ach, maličké ruce v těsných rukavicich! Vůně,
temný a chvějici se hlas, ličko hladké a pobledlé. Prokop zatinal zuby do
chvějicich se rtů. Smutná, zmatená a statečná. Modrošedé oči, oči čisté a
světelné. Ó bože, ó bože, jak se tiskl závoj k jejim rtům!
Prokop zasténal a otevřel oči. Je to Tomšova holka, řekl si se slepým vztekem.
Věděla kudy jit, neni tu poprvé. Snad tady… zrovna tady v tom pokoji – –
Prokop si v nesnesitelné trýzni vrýval nehty do dlani. A já hlupák se nabizim,
že pojedu za nim! Já hlupák, já mu ponesu psaničko! Co – co – co mi je vůbec
po ni?
Tu ho napadla spásná myšlenka. Uteku domů, do svého laboratorniho baráku tam
nahoře. A ona, ať si sem přijde! ať si pak dělá, co chce! Ať – ať – ať si jede
za nim sama, když… když ji na tom záleži –
Rozhlédl se po pokoji; viděl zválenou postel, zastyděl se a ustlal ji, jak byl
zvyklý doma. Pak se mu nezdála dost slušně ustlaná, přestlal ji, rovnal a
hladil, a pak už rovnal všechno všudy, uklizel, pokoušel se pěkně zřasit i
záclony, načež usedl s hlavou zmotanou a hrudi drcenou bolestným tlakem a
čekal.


V.

Zdálo se mu, že jde ohromnou zelinářskou zahradou; kolem dokola nic než samé
zelné hlávky, ale nejsou to hlávky, nýbrž zešklebené a olezlé, krhavé a
blekotajici, nestvůrné, vodnaté, trudovité a vyboulené hlavy lidské; vyrůstaji
z hubených košťálů a lezou po nich odporné zelené housenky. A hle, přes pole k
němu běži divka se závojem na tváři; zvedá trochu sukni a přeskakuje lidské
hlávky. Tu vyrůstaji zpod každé z nich nahé, úžasně tenké a chlupaté ruce a
sahaji ji po nohou a po suknich. Divka křiči v šilené hrůze a zvedá sukni
výše, až nad silná kolena, obnažuje bilé nohy a snaži se přeskočit ty
chňapajici ruce. Prokop zavirá oči; nesnese pohled na jeji bilé silné nohy, a
šili úzkosti, že ji ty zelné hlávky zhanobi. Tu vrhá se na zem a uřezává
kapesnim nožem prvni hlávku; ta zviřecky ječi a cvaká mu vyžranými zuby po
rukou. Nyni druhá, třeti hlávka; Kriste Ježiši, kdy skosi to ohromné pole, než
se dostane k divce zápasici tam na druhé straně nekonečné zahrady? Zběsile
vyskakuje a šlape po těch přišerných hlavách, rozdupává je, kope do nich;
zaplete se nohama do jejich tenkých, přisavných pracek, padá, je uchopen,
rván, dušen, a vše mizi.
Vše mizi v závratném viřeni. A náhle se ozve zblizka zastřený hlas: „Nesu vám
ten baliček.“ Tu vyskočil a otevřel oči, a před nim stoji děvečka z Hybšmonky,
šilhavá a těhotná, se zmáčeným břichem, a podává mu cosi zabaleného v mokrém
hadru. To neni ona, trne bolestně Prokop, a rázem vidi vytáhlou smutnou
prodavačku, která mu dřevěnými tyčinkami roztahuje rukavice. To neni ona,
bráni se Prokop, a vidi naduřelé ditě na křivičných nožkách, jež – jež – jež
se mu nestoudně nabizi! „Jdi pryč,“ křiči Prokop, a tu se mu zjevi pohozená
konev uprostřed záhonu povadlé a slimáky prolezlé kapusty a nemizi přes
všechno jeho úsili.
Vtom tiše zazněl zvonek jako tiknuti ptáčka. Prokop se vrhl ke dveřim a
otevřel; na prahu stála divka se závojem, tiskla k ňadrům baliček a
oddychovala. „To jste vy,“ řekl Prokop tiše a (neznámo proč) nesmirně dojat.
Divka vešla, dotkla se ho ramenem; jeji vůně dechla na Prokopa trýznivým
opojenim.
Zůstala stát uprostřed pokoje. „Prosim vás, nehněvejte se,“ mluvila tiše a
jakoby spěchajic, „že jsem vám dala takové posláni. Vždyť ani nevite, proč –
proč já – Kdyby vám to dělalo nějaké potiže –“
„Pojedu,“ vypravil ze sebe Prokop chraptivě.
Divka upřela na něj zblizka své vážné, čisté oči. „Nemyslete si o mně nic
zlého. Já mám jenom strach, aby pan… aby váš přitel neudělal něco, co by
někoho… někoho jiného do smrti trápilo. Já mám k vám tolik důvěry… Vy ho
zachránite, že?“
„Nesmirně rád,“ vydechl Prokop nějakým nesvým a rozechvěným hlasem; tak ho
opojovalo nadšeni. „Slečno, já… co budete chtit…“ Odvracel oči; bál se, že
něco vybleptne, že je snad slyšet, jak mu bouchá srdce, a styděl se za svou
těžkopádnost.
I divku zachvátil jeho zmatek; hrozně se zarděla a nevěděla kam s očima.
„Děkuju, děkuju vám,“ pokoušela se také jaksi nejistým hlasem, a silně mačkala
v rukou zapečetěný baliček. Nastalo ticho, jež působilo Prokopovi sladkou a
mučivou závrať. Citil s mrazenim, že divka letmo zkoumá jeho tvář; a když k ni
náhle obrátil oči, viděl, že se divá k zemi a čeká, připravena, aby snesla
jeho pohled. Prokop citil, že by měl něco řici, aby zachránil situaci; misto
toho jen hýbal rty a chvěl se na celém těle.
Konečně pohnula divka rukou a zašeptala: „Ten baliček –“ Tu zapomněl Prokop,
proč schovává pravou ruku za zády, a sáhl po tlusté obálce. Divka zbledla a
couvla. „Vy jste poraněn,“ vyhrkla. „Ukažte!“ Prokop honem schovával ruku. „To
nic neni,“ ujišťoval rychle, „to… to se mi jen trochu zanitila… zanitila
taková ranka, vite?“
Divka, docela bledá, zasykla, jako by sama citila tu bolest. „Proč nejdete k
lékaři?“ řekla prudce. „Vy nemůžete nikam jet! Já… já pošlu někoho jiného!“
„Vždyť už se to hoji,“ bránil se Prokop, jako by mu brali něco drahého.
„Jistě, to už je… skoro v pořádku, jen škrábnuti, a vůbec, to je nesmysl; proč
bych nejel? A pak, slečno, v takové věci… nemůžete poslat ciziho člověka,
vite? Vždyť to už ani neboli, hleďte,“ a zatřepal pravou rukou.
Divka stáhla oboči přisnou soustrasti. „Vy nesmite jet! Proč jste mi to
neřekl? Já – já – já to nedovolim! Já nechci –“
Prokop byl docela nešťasten. „Hleďte, slečno,“ spustil horlivě, „to jistě nic
neni; já jsem na to zvyklý. Podivejte se, tady,“ a ukázal ji levou ruku, kde
mu scházel skoro celý malik a kloub ukazováčku naduřel uzlovitou jizvou. „To
už je takové řemeslo, vite?“ Ani nepozoroval, že divka couvá s blednoucimi rty
a divá se na pořádný šrám jeho čela od oka k vlasům. „Udělá to prásk, a je to.
Jako voják. Zvednu se a běžim útokem dál, rozumite? Nic se mně nemůže stát.
Nu, dejte sem!“ Vzal ji z ruky baliček, vyhodil do výše a chytil. „Žádná
starost, pane. Pojedu jako pán. Vite, já, já už jsem dávno nikde nebyl. Znáte
Ameriku?“
Divka mlčela a hleděla na něho se zachmuřeným obočim.
„Ať si řikaji, že maji nové teorie,“ drmolil Prokop horečně; „počkejte, já jim
to dokážu, až vyjdou mé výpočty. Škoda že tomu nerozumite; já bych vám to
vyložil, vám věřim, vám věřim, ale jemu ne. Nevěřte mu,“ mluvil naléhavě,
„mějte se na pozoru. Vy jste tak krásná,“ vydechl nadšeně. „Tam nahoře já
nikdy s nikým nemluvim. Je to jen taková bouda z prken, vite? Haha, vy jste se
tak bála těch hlávek! Ale já vás nedám, o to nic; nebojte se ničeho. Já vás
nedám.“
Pohližela na něho s očima rozšiřenýma hrůzou. „Vy přece nemůžete odejet!“
Prokop zesmutněl a zmalátněl. „Ne, na to nesmite dát, co mluvim. Povidal jsem
nesmysly, že? Já jsem jenom chtěl, abyste nemyslela na tu ruku. Abyste se
nebála. To už přešlo.“ – Přemohl své vzrušeni, byl tuhý a zakaboněný samým
soustředěnim. „Pojedu do Týnice a najdu Tomše. Dám mu ten baliček a řeknu, že
to posilá slečna, kterou zná. Je to tak správně?“
„Ano,“ řekla divka váhavě, „ale vy přece nemůžete –“
Prokop se pokusil o prosebný úsměv; jeho těžká, rozjizvená tvář náhle docela
zkrásněla. „Nechte mne,“ řekl tiše, „vždyť je to – je to – pro vás.“
Divka zamžikala očima; bylo ji skoro do pláče prudkým pohnutim. Mlčky kývla a
podávala mu ruku. Zvedl svou beztvarou levici; pohlédla na ni zvědavě a silně
ji stiskla. „Já vám tolik děkuju,“ řekla rychle, „sbohem!“
Ve dveřich se zastavila a chtěla něco řici; mačkala v ruce kliku a čekala –
„Mám mu… vyřidit… pozdrav?“ optal se Prokop s křivým úsměvem.
„Ne,“ vydechla a rychle na něj pohlédla. „Na shledanou.“
Dveře za ni zapadly. Prokop se na ně dival, bylo mu najednou na smrt těžko a
chabě, hlava se mu točila, a stálo ho nesmirné usili, aby učinil jediný krok.


VI.

Na nádraži bylo mu čekati půldruhé hodiny. Sedl si na chodbě a chvěl se zimou.
V poraněné ruce mu pulsovala ukrutná bolest; zaviral oči, a tu se mu zdálo, že
ta bolavá ruka roste, že je veliká jako hlava, jako tykev, jako hrnec na
vyvářeni prádla, a že v celém jejim rozsahu palčivě cuká živé maso. Přitom mu
bylo mdlo k dáveni a na čele mu ustavičně vyrážel studený pot úzkosti. Nesměl
se podivat na špinavé, poplivané, zablácené dlážky chodby, aby se mu nezvedal
žaludek. Vyhrnul si limec a polo snil, pomalu přemáhán nekonečnou
lhostejnosti. Zdálo se mu, že zas je vojákem a leži poraněn v širém poli; kde
– kde to pořád bojuji? Tu zazněl mu do uši prudký zvon a někdo volal: „Týnice,
Duchcov, Moldava, nastupovat!“
Nyni už tedy sedi ve vagóně u okna a je mu nezřizeně veselo, jako by někoho
přelstil nebo někomu utekl; teď, holenku, už jedu do Týnice a nic mne nemůže
zadržet. Skoro se chechtal radosti, uvelebil se ve svém koutě a s náramnou
čilosti pozoroval své spolucestujici. Naproti němu sedi nějaký krejčik s
tenkým krkem, hubená černá pani, pak člověk s divně bezvýraznou tváři; vedle
Prokopa strašně tlustý pán, kterému se nemůže nějak břicho vejit mezi nohy, a
snad ještě někdo, to už je jedno. Prokop se nesmi divat z okna, protože mu to
dělá závrať. Ratata ratata ratata vybuchuje vlak, vše drnči, bouchá, otřásá se
samou horlivosti spěchu. Krejčikovi se kláti hlava napravo nalevo, napravo
nalevo; černá pani jaksi podivně a ztuhle hopkuje na mistě, bezvýrazná tvář se
třese a kmitá jako špatný snimek ve filmu. A tlustý soused, to je kupa rosolu,
jež se houpe, otřásá, poskakuje nesmirně směšným způsobem. Týnice, Týnice,
Týnice, skanduje Prokop s údery kol; rychleji! rychleji! Vlak se ohřál samým
chvatem, je tu horko, Prokop se poti žárem; krejčik má nyni dvě hlavy na dvou
tenkých krcich, obě hlavy se třesou a narážeji na sebe, až to drnči. Černá
pani výsměšně a urážlivě hopkuje na svém sedadle; tváři se naschvál jako
dřevěná loutka. Bezvýrazná tvář zmizela; sedi tam trup s rukama mrtvě
složenýma na klině, ruce neživě poskakuji, ale trup je bezhlavý.
Prokop sbirá všechny své sily, aby se na to pořádně podival; štipe se do nohy,
ale nic platno, trup je dál bezhlavý a mrtvě se poddává otřesům vlaku.
Prokopovi je z toho děsně úzko; šťouchá loktem tlustého souseda, ale ten se
jen rosolovitě chvěje, a Prokopovi se zdá, že se mu to tlusté tělo bezhlase
chechtá. Nemůže se už na to divat; obraci se k oknu, ale tam zničehonic vidi
lidskou tvář. Nevi zprvu, co je na ni tak zarážejiciho; pozoruje ji
vytřeštěnýma očima a poznává, že to je jiný Prokop, který na něho upirá oči s
děsivou pozornosti. Co chce? zhrozil se Prokop. Proboha, nezapomněl jsem ten
baliček v Tomšově bytě? Hmatá honem po kapsách a najde obálku v náprsni kapse.
Tu se tvář v okně usmála a Prokopovi se ulevilo. Odvážil se dokonce pohlédnout
na bezhlavý trup; a vida, on si ten člověk jen přetáhl pověšený svrchnik přes
hlavu a spi pod nim. Prokop by to udělal také, ale boji se, aby mu někdo
nevytáhl z kapsy tu zapečetěnou obálku. A přece jde na něho spani, je
nesnesitelně unaven; nikdy by si nedovedl představit, že je možno být tak
unaven. Usiná, vyrve se z toho vytřeštěně a opět usiná. Černá pani má jednu
hopkujici hlavu na ramenou a druhou drži na klině oběma rukama; a co se
krejčika týče, sedi misto něho jen prázdné, beztělé šaty, z nichž čouhá
porcelánová palička. Prokop usiná, ale pojednou se z toho vytrhne v horlivé
jistotě, že je v Týnici; snad to někdo venku volal, neboť vlak stoji.
Vyběhl tedy ven a viděl, že už je večer; dva tři lidé vystupuji na malinkém
blikajicim nádraži, za nimž je neznámá a mlhavá tma. Řekli Prokopovi, že do
Týnice musi jet poštou, je-li na ni ještě misto. Poštovni vůz, to byl jen
kozlik a za nim truhlik na zásilky; a na kozliku už seděl pošťák a nějaký
pasažér.
„Prosim vás, vemte mne do Týnice,“ řekl Prokop.
Pošťák potřásl hlavou v nekonečném smutku. „Nejde,“ odpověděl po chvili.
„Proč… jak to?“
„Neni už misto,“ řekl pošťák zrale.
Prokopovi vstoupily do oči slzy samou litosti. „Jak je tam daleko… pěšky?“
Pošťák účastně přemýšlel. „No, hodinu,“ řekl.
„Ale já… nemohu jit pěšky! Já musim k doktoru Tomšovi!“ protestoval Prokop
zdrcen.
Pošťák uvažoval. „Vy jste… jako… pacient?“
„Mně je zle,“ zamumlal Prokop; skutečně se chvěl slabosti a zimou.
Pošťák přemýšlel a potřásal hlavou. „Když to nejde,“ ozval se konečně.
„Já se vejdu, já… kdyby byl jen kousek mista, já…“
Na kozliku ticho; jen pošťák se drbal ve vousech, až to chrastělo; pak neřekl
slova a slezl, dělal něco na postraňku a mlčky odešel do nádraži. Pasažér na
kozliku se ani nepohnul.
Prokop byl tak vyčerpán, že si musel sednout na patnik. Nedojdu, citil
zoufale; zůstanu tady, až… až…
Pošťák se vracel z nádraži a nesl prázdnou bedničku. Nějak ji vpravil na
plošinu kozliku a rozvážně ji pozoroval. „Tak si tam sedněte,“ řekl posléze.
„Kam?“ ptal se Prokop.
„No… na kozlik.“
Prokop se dostal na kozlik tak nadpřirozeně, jako by ho vynesly nebeské sily.
Pošťák zas dělal cosi na řemeni, a teď sedi na bedničce s nohama visicima dolů
a bere opratě. „Hý,“ povidá.
Kůň nic. Jenom se zachvěl.
Pošťák nasadil jakési tenké, hrdelni „rrr“. Kůň pohodil ocasem a pustil
hlasitý pšouk.
„Rrrrr.“
Pošta se rozjela. Prokop se křečovitě chytil nizkého zábradlička; citil, že je
nad jeho sily udržet se na kozliku.
„Rrrrr.“ Zdálo se, že ten vysoký hrčivý zpěv nějak galvanizuje starého koně.
Běžel kulhavě, pohazoval ocasem a při každém kroku pouštěl slyšitelné větry.
„Rrrrrrrr.“ Šlo to aleji holých stromů; byla černočerná tma, jen kmitavý
proužek světla z lucerny se smýkal po blátě. Prokop ztuhlými prsty sviral
zábradličko; citil, že už vůbec nevládne svému tělu, že nesmi spadnout, že
bezmezně slábne. Nějaké osvětlené okno, alej, černá pole. „Rrrr.“ Kůň vytrvale
pšukal a klusal pleta nohama toporně a nepřirozeně, jako by byl už dávno
mrtev.
Prokop se úkosem podival na svého spolucestujiciho. Byl to děda s krkem
ovázaným šálou; pořád něco žvýkal, překusoval, žmoulal a zase vyplivoval. A tu
si Prokop vzpomněl, že tu podobu už viděl. Byla to ta ohavná tvář ze sna, jež
skřipala vyžranými zuby, až se drtily, a pak je po kouskách vyplivovala. Bylo
to divné a strašné.
„Rrrrr.“ Silnice se obraci, motá se do kopce a zase dolů. Nějaký statek, je
slyšet psa, člověk jde po silnici a povidá „dobrý večer“. Domků přibývá, jde
to do kopce. Pošta zatáči, vysoké „rrrr“ náhle ustane a kůň se zastavi.
„Tak tady bydli doktor Tomeš,“ povidá pošťák.
Prokop chtěl něco řici, ale nemohl; chtěl se pustit zábradli, ale nešlo to,
protože mu prsty křečovitě ztuhly.
„No, už jsme tady,“ povidá pošťák znovu. Ponenáhlu křeče povoli a Prokop slézá
z kozliku, chvěje se na celém těle. Jakoby popaměti otvirá vrátka a zvoni u
dveři. Uvnitř zuřivý štěkot, a mladý hlas volá: „Honziku, ticho!“ Dveře se
otevrou, a stěži hýbaje jazykem ptá se Prokop: „Je pan doktor doma?“
Chvilku ticho; pak řekl mladý hlas: „Pojďte dál.“
Prokop stoji v teplé světnici; na stole je lampa a večeře, voni to bukovým
dřivim. Starý pán s brejličkami na čele vstává od svého taliře, jde k
Prokopovi a povidá: „Tak copak vám scházi?“
Prokop se mračně upominal, co tu vlastně chce. „Já… totiž…,“ začal, „je váš
syn doma?“
Starý pán se pozorně dival na Prokopa. „Neni. Co vám je?“
„Jirka… Jiři,“ m ručel Prokop, „já jsem… jeho přitel a nesu mu… mám mu dát…“
Lovil v kapse zapečetěnou obálku. „Je to… důležitá věc a… a…“
„Jirka je v Praze,“ přerušil ho starý pán. „Člověče, sedněte si aspoň!“
Prokop se nesmirně podivil. „Vždyť řikal… řikal, že jede sem. Já mu musim
dát…“ Podlaha se pod nim zakymácela a počala se naklánět.
„Aničko, židli,“ křikl starý pán podivným hlasem.
Tu ještě zaslechl Prokop tlumený výkřik a poroučel se na zem. Zalila ho
nesmirná temnota, a pak již nebylo nic.


VII.

Nebylo nic; jen jako kdyby se časem protrhly mlhy, zjevil se vzorek malované
stěny, řezaná řimsa skřině, cip záclony či frýzek stropu; nebo se naklonila
nějaká tvář jakoby nad otvorem studně, ale nebylo vidět jejich rysů. Něco se
dělo, někdo časem svlažil horké rty nebo pozvedal bezvládné tělo, ale vše
mizelo v plynoucich útržcich sněni. Byly to krajiny, kobercové vzory,
diferenciálni počty, ohnivé koule, chemické formule; jen časem něco vyplulo
navrch a stalo se na okamžik jasnějšim snem, aby se to vzápěti zas rozplynulo
v širokotokém bezvědomi.
Konečně přišla chvile, kdy procitl; viděl nad sebou teplý a bezpečný strop se
štukovým frýzkem; našel očima své vlastni hubené, mrtvě bilé ruce na květované
přikrývce; za nimi objevil pelest postele, skřiň a bilé dveře: vše nějak milé,
tiché a už známé. Neměl poněti, kde je; chtěl o tom uvažovat, ale měl nemožně
slabou hlavu, vše se mu opět počalo mást, i zavřel oči a odpočival v odevzdané
chabosti.
Dveře tichounce zavrzly. Prokop otevřel oči a posadil se na posteli, jako by
ho něco zvedlo. A ono u dveři stoji děvče, vytáhlé nějak a světlé, má
jasňoučké oči náramně udivené, ústa pootevřená překvapenim a tiskne k prsoum
bilé pláténko. Nehýbe se rozpačitá, mrká dlouhými řasami a jeji růžový čumáček
se počiná nejistě, plaše usmivat.
Prokop se zachmuřil; usilovně hleděl něco řici, ale měl v hlavě docela
prázdno; hýbal nehlasně rty a pozoroval divku jaksi přisnýma a vzpominavýma
očima.
„Gúnúmai se, anassa,“ splynulo mu náhle a bezděčně se rtů, „theos ny tis é
brotos essi? Ei men tis theos essi, toi úranon euryn echúsin, Artemidi se egó
ge, Dios kúré megaloio, eidos te megethos te fyén t’anchista eďskó.“ A dále,
verš za veršem, řinulo se božské pozdraveni, jimž Odysseus oslovil Nausikau.
„Proboha prosim tě, pani! Jsi božstvo či smrtelný člověk? Jestližes některá z
bohyň, co sidli na nebi širém, s Artemidou bych já, jež velkého Dia je dcera,
krásou a vzrůstem těla i velkosti nejspiš tě srovnal. Jsi-li však některá z
lidi, co maji na zemi sidlo, třikrát blaženi jsou tvůj otec i velebná matka,
třikrát blaženi bratři, neb jistě jim nadmiru srdce pokaždé rozkoši blahou se
pro tebe rozhřivá v hrudi, kdykoli zři, jak takový květ jde do kola k tanci.“
Divka bez hnuti, jako zkamenělá, naslouchala tomuto po. zdravu v neznámé řeči;
a na jejim hladkém čele bylo tolik zmatku, jeji oči tak dětsky a polekaně
mžikaly, že Prokop zdvojnásobil horlivost Odyssea na břeh vyvrženého, sám jer
nejasně chápaje smysl slov.
„Keinos ďau peri kéri makartatos,“ odřikával rychle. „Avšak nad jiné ten se
pociti blaženým v srdci, který zvitězi dary a tebe si odvede domů, neboť dosud
nikdy jsem takého člověka nezřel ze všech mužů ni žen; já s úžasem na tebe
hledim.“
Sebas m’echei eisoroónta. Děvče se silně zardělo, jako by rozumělo pozdravu
řeckého hrdiny; neobratný a libezný zmatek ji vázal údy, a Prokop, spinaje
ruce na pokrývce, mluvil, jako by se modlil.
„Déló dé pote,“ pokračoval spěšně, „jenom na Délu jednou, bliž oltáře jasného
Foiba, palmový mladý strůmek jsem viděl ze země růsti, – neboť i tam jsem
přišel a množstvi lidu šlo se mnou na cestě té, z niž trampoty zlé mi vzejiti
měly. Tam jsem právě tak stál, pln úžasu, když jsem jej viděl, dlouho, vždyť
takový kmen se nezrodil ze země dosud. Tak teď tobě se divim a žasnu a bojim
se hrozně dotknout se kolenou tvých, ač velký smutek mě tisni.“
Deidia ďainós: ano, bál se hrozně, ale i divka se bála a tiskla k prsoum bilé
prádlo a neodvracela oči z Prokopa, jenž chvátal vypovědět svou trýzeň:
„Včera, až v dvacátý den, jsem ušel třpytnému moři, do doby té jsem vlnou byl
hnán a prudkými větry od výspy Ógygie, teď sem mě zas uvrhlo božstvo, abych tu
též snad zakusil strast, vždyť sotva se, tušim, skonči, a množstvi běd mi
bohové přisoudi ještě.“
Prokop těžce vzdychl a pozvedl úděsně vyhublé ruce. „Alla, anass‘, eleaire!
Avšak slituj se, pani, vždyť vytrpěv útrapy mnohé, nejdřiv přišel jsem k tobě
– z těch druhých nikoho neznám lidi, co v krajině té a v městě své obydli
maji. Do města cestu mi ukaž, dej roucho, bych tělo si zakryl, jestližes
vzala, sem jdouc, snad nějaký na prádlo obal.“
Nyni se divči tvář poněkud vyjasnila, vlahé rty se pootevřely; snad Nausikaá
promluvi, ale Prokop chtěl ji ještě požehnati za ten obláček libezného
soucitu, kterým růžovělo jeji ličko. „Soi de theoi tosa doien, hosa fresi sési
menoinás: bozi pak račte ti dát, čeho ve své mysli si žádáš, muže i dům, a
přidejtež vám i svorného ducha, vzácný to dar, – vždyť lepšiho nic ni krasšiho
neni, než když smýšlenim svorni svou domácnost společně vedou žena i muž, jak
odpůrcům v žal, tak na radost velkou všechněm přiznivcům svým, a nejvic to
pociti sami.“ [* Překlad O. Vaňorného (1921)]
Posledni slova Prokop už skoro jen dýchal; sám stěži rozuměl tomu, co
odřikává, vytékalo to plynně a bez vůle z nějakého neznámého kouta paměti;
bylo tomu skoro dvacet let, co se jakžtakž probiral sladkou melodii šestého
zpěvu. Působilo mu až fyzickou úlevu nechávat to volně odtékat; dělalo se mu v
hlavě lehčeji a jasněji, bylo mu skoro blaženě v té plihé a libé slabosti, a
tu se mu zachvěl na rtech rozpačitý úsměv.
Divka se usmála, pohnula sebou a řekla: „Nu tak?“ Udělala krůček bliž a dala
se do smichu. „Co jste to povidal?“
„Já nevim,“ děl Prokop nejistě.
Tu se rozlétly nedovřené dveře a do pokoje vrazilo něco malého a chundelatého,
kviklo radosti a skočilo Prokopovi na postel.
„Honziku,“ křikla divka polekaně, „jdeš dolů!“ Ale psisko už olizlo Prokopovu
tvář a v náruživé radosti se zachumlávalo do přikrývek. Prokop si sáhl na
tvář, aby se otřel, a s úžasem pocitil pod rukou plnovous. „Co-copak,“ koktal
a umlkl údivem. Psisko bláznilo; kousalo s překypujici něhou Prokopovy ruce,
pištělo, funělo, a tumáš! mokrou mordou se mu dostalo až na prsa.
„Honziku,“ křičela divka, „ty jsi blázen! Necháš pána!“ Přiběhla k posteli a
vzala psika do náruče. „Bože, Honziku, ty jsi hlupák!“
„Nechte ho,“ žádal Prokop.
„Vždyť máte bolavou ruku,“ namitalo děvče s velikou vážnosti, tisknouc k
prsoum zápasiciho psa.
Prokop se podival nechápavě na svou pravici. Od palce přes dlaň táhla se
široká jizva, pokrytá novou, tenoučkou, červenou kožkou přijemně svědici.
„Kde… kde to jsem?“ podivil se.
„U nás,“ řekla s náramnou samozřejmosti, jež Prokopa ihned uspokojila. „U
vás,“ opakoval s úlevou, ač neměl poněti, kde to je. „A jak dlouho?“
„Dvacátý den. A pořád –,“ chtěla něco řici, ale spolkla to. „Honzik spával s
vámi,“ dodala spěšně a zarděla se neznámo proč, chovajic psa jako malé ditě.
„Vite o tom?“
„Nevim,“ vzpominal Prokop. „Copak jsem spal?“
„Pořád,“ vyhrkla. „Už jste se mohl vyspat.“ Tu postavila psa na zem a
přibližila se k posteli. „Je vám lip?… Chtěl byste něco?“
Prokop zakroutil hlavou; nevěděl o ničem, co by chtěl. „Kolik je hodin?“ ptal
se nejistě.
„Deset. Já nevim, co smite jist; až přijde tati… Tati bude tak rád… Chtěl
byste něco?“
„Zrcadlo,“ řekl Prokop váhavě.
Divka se zasmála a vyběhla. Prokopovi hučelo v hlavě; pořád se hleděl
rozpomenout a pořád mu vše unikalo. A už je tu děvče, něco povidá a podává mu
zrcátko. Prokop chce zvednout ruku, ale bůhsámvi proč to nejde; děvče mu
vkládá držadlo mezi prsty, ale zrcátko padá na pokrývku. Tu zbledlo děvče,
nějak se znepokojilo a samo mu nastavilo zrcadlo k očim. Prokop se divá, vidi
docela zarostlé tváře a obličej skoro neznámý; hledi a nemůže pochopit, a tu
se mu roztřásly rty.
„Lehněte si, hned si zas lehněte,“ káže mu drobounký hlásek skoro plačici, a
rychlé ruce mu nastavuji podušku. Prokop se sváži naznak a zavirá oči; jen
chvilinku si zdřimnu, mysli si, a udělalo se libé, hluboké ticho.


VIII.

Někdo ho zatahal za rukáv. „Nu, nu,“ povidá ten někdo, „už bychom nemuseli
spát, co?“ Prokop otevřel oči a viděl starého pána, má růžovou pleš a bilou
bradu, zlaté brejličky na čele a náramně čilý koukej. „Už nespěte, velectěný,“
povidá, „už toho je dost; nebo se probudite na onom světě.“
Prokop si chmurně prohližel starého pána; chtělo se mu totiž dřimat. „Co
chcete?“ ozval se vzdorovitě. „A… s kým mám tu čest?“
Starý pán se dal do smichu. „Prosim, doktor Tomeš. Vy jste mne neráčil dosud
vzit na vědomi, co? Ale nic si z toho nedělejte. Tak co, jak se máme?“
„Prokop,“ ozval se nemocný nevlidně.
„Tak, tak,“ povidal doktor spokojeně. „A já jsem si myslel, že jste Šipková
Růženka. A teď, pane inženýre,“ řekl čile, „se na vás musime podivat. No,
neškareďte se.“ Vyeskamotoval mu z podpaži teploměr a libě zachrochtal.
„Třicet pět osm. Človičku, vy jste jako moucha. Musime vás nakrmit, co?
Nehýbejte se.“
Prokop citil na prsou hladkou pleš a studené ucho, jak mu jezdi od ramene k
rameni, od břicha k hrdlu za povzbuzujiciho broukáni.
„No, sláva,“ řekl konečně doktor a nasadil si brejle na oči. „Napravo vám to
drobátko rachoti, a srdce – no, to se urovná, že?“ Naklonil se k Prokopovi,
drbal ho prsty ve vlasech a přitom mu palcem zvedal a zase zatlačoval očni
vička. „Nespat už, vime?“ mluvil a přitom mu něco zkoumal na zorničkách.
„Dostaneme knižky a budeme čist. Snime něco, vypijeme skleničku vina a –
nehýbejte se! Já vás neukousnu.“
„Co mně je?“ ptal se Prokop nesměle.
Doktor se vztyčil. „No, nic už. Poslechněte, kde jste se tady vzal?“
„Kde tady?“
„Tady, v Týnici. Sebrali jsme vás na podlaze a… Odkud jste, člověče, přišel?“
„Já nevim. Z Prahy, ne?“ vzpominal Prokop.
Doktor potřásl hlavou. „Vlakem z Prahy! Se zápalem mozkových blan! Měl jste
rozum? Vite, co to vůbec je?“
„Co?“
„Meningitis. Spaci forma. A k tomu zápal plic. Čtyřicet celých, he? Kamaráde,
s něčim takovým se nejezdi na výlety. A vite, že – nu, ukažte honem pravou
ruku!“
„To… to bylo jen škrábnuti,“ hájil se Prokop.
„Pěkné škrábnuti. Otrava krve, rozumite? Až budete zdráv, řeknu vám, že jste
byl… že jste byl osel. Odpusťte,“ řekl s důstojným rozhořčenim, „málem bych
byl řekl něco horšiho. Vzdělaný člověk, a nevi, že toho má v sobě na troji
exitus! Jak jste se vůbec mohl držet na nohou?“
„Já nevim,“ šeptal Prokop zahanbeně.
Doktor chtěl hubovat dál, ale zavrčel jen a mávl rukou. „A jak se citite?“
začal přisně. „Trochu pitomý, ne? Žádná paměť, co? A tady, tady nějak,“ ťukal
si na čelo, „nějaký slabý, že?“
Prokop mlčel.
„Tak tedy, pane inženýre,“ spustil doktor. „Z toho si nic nedělat. Nějaký
čásek to potrvá, co? Rozumite mi? Nesmite si namáhat hlavu. Nemyslet. To se
vráti… po kouskách. Jen přechodná porucha, slabá amence, rozumite mi? To
přejde samo od sebe, co? Rozumite mi?“
Doktor křičel, potil se a rozčiloval se, jako by se hádal s hluchoněmým.
Prokop se na něj pozorně dival, a ozval se klidně: „Já tedy zůstanu
slabomyslný?“
„Ale ne, ne,“ rozčiloval se doktor. „Naprosto vyloučeno. Ale prostě… po
nějakou dobu… porucha paměti, roztržitost, únava a takové ty přiznaky,
rozumite mi? Poruchy v koordinaci, chápete? Odpočivat. Klid. Nic nedělat.
Velectěný, děkujte pánubohu, že jste to vůbec přečkal.“
„Přečkal,“ ozval se po chvili a radostně zatroubil do kapesniku. „Poslechněte,
takový připad jsem ještě neměl. Vy jste sem přišel pěkně v deliriu, praštil
jste sebou na zem, a finis, poroučim se vám. Co jsem měl s vámi dělat? Do
nemocnice je daleko, a holka nad vámi tento, brečela… a vůbec, přišel jste
jako host k… Jirkovi, k synovi, no ne? Tak jsme si vás tu nechali, rozumite
mi? Nu, nám to nevadi. Ale takového zábavného hosta jsem ještě neviděl. Dvacet
dni prospat, pěkně děkuju! Když vám kolega primář řezal ruku, ani jste se
neráčil probudit, co? Tichý pacient, namouduši. No, to už je jedno. Jen když
jste z toho venku, člověče.“ Doktor se plácl hlučně do stehna. „U čerta,
nespěte už! Pane, hej, pane, mohl byste usnout nadobro, slyšite? U všech
všudy, hleďte se trochu přemáhat! Nechte toho, slyšite?“
Prokop chabě kývl; citil, že se nějaké závoje přetahuji mezi nim a
skutečnosti, že se vše obestirá, kali a tichne.
„Andulo,“ slyšel zdáli rozčilený hlas, „vino! dones vino!“ Nějaké rychlé
kroky, hovor jakoby pod vodou, a chladivá chuť vina mu stékala do hrdla.
Otevřel oči a viděl nad sebou skloněné děvče. „Nesmite spát,“ povidá děvče
rozechvěně, a jeji předlouhé řasy mžikaji, jako když srdce tluče.
„Já už nebudu,“ omlouvá se Prokop pokorně.
„To bych si vyprosil, velectěný,“ lomozil doktor u pelestě. „Přijede sem z
města primář extra na konzultaci; ať vidi, že my felčaři venku taky něco
umime, no ne? Musite se pěkně držet.“ S neobyčejnou obratnosti zvedl Prokopa a
shrnul mu za záda polštáře. „Tak, teď bude pán sedět; a spani si nechá až po
obědě, že? Já musim do ordinace. A ty, Ando, si tady sedni a něco žvaň; jindy
ti huba jede jako trakař, co? A kdyby chtěl spát, zavolej mne; já už si to s
nim vyřidim.“ Ve dveřich se obrátil a zavrčel: „Ale… mám radost, rozumite? Co?
Tak pozor!“
Prokopovy oči se svezly na divku. Seděla opodál, ruce v klině, a při bohu
nevěděla, o čem mluvit. Tak, teď zvedla hlavu a pootevřela ústa; slyšme, co z
ni vyleti; ale zatim se jenom zastyděla, spolkla to a sklopila hlavu ještě
niž; je vidět jen dlouhé řasy, jak se chvěji nad ličkem.
„Tati je tak prudký,“ ozvala se konečně. „On je tak zvyklý křičet… vadit se… s
pacienty…“ Látka ji bohužel došla; zato – jako na zavolanou – ocitla se ji v
prstech zástěra a nechala se dlouho a všelijak zajimavě skládat, za pozorného
mžikáni ohnutých řas.
„Co to řinči?“ optal se Prokop po delši době.
Obrátila hlavu k oknu; má pěkné světlé vlasy, jež ji ozařuji čelo, a šťavnaté
světélko na vlhké puse. „To jsou krávy,“ povidá s úlevou. „Tam je panský dvůr,
vite? Tenhle dům taky patři k panstvi. Tati má koně a kočárek… Jmenuje se
Fricek.“
„Kdo?“
„Ten kůň. Vy jste nebyl nikdy v Týnici, že? Tady nic neni. Jen aleje a pole…
Dokud byla živa maminka, tak tu bylo veseleji; to sem jezdil náš Jirka… Už tu
nebyl přes rok; pohádal se s tatim a… ani nepiše. Ani se o něm u nás nesmi
mluvit – Vidáte ho často?“
Prokop rozhodně zavrtěl hlavou.
Děvče vzdychlo a zamyslilo se. „On je… já nevim. Takový divný. Jen tu chodil s
rukama v kapsách a zival… Já vim, že tu nic neni; ale přec… Tati je taky rád,
že jste zůstal u nás,“ zakončila rychle a trochu nesouvisle.
Někde venku se chraptivě a směšně rozkřikl mladý kohoutek. Najednou se tam
dole strhlo jakési slepiči rozčileni, bylo slyšet divoké „ko-ko-ko-“ a vitězně
kvikajici štěkot psiska. Děvče vyskočilo. „Honzik honi slepice!“ Ale hned si
zase sedla, odhodlána ponechat slipky jejich osudu. Bylo přijemné a jasné
ticho.
„Já nevim, o čem povidat,“ řekla po chvili s nejkrásnějši prostotou. „Já vám
přečtu noviny, chcete?“
Prokop se usmál. A už tu byla s novinami a pustila se odvážně do úvodniku.
Finančni rovnováha, státni rozpočet, nekrytý úvěr… Libezný a nejistý hlásek
odřikával klidně ty nesmirně vážné věci, a Prokopovi, jenž naprosto
neposlouchal, bylo lépe, než kdyby hluboce spal.


IX.

Nyni už smi Prokop na nějakou hodinku denně vylézt z postele; dosud táhne nohy
všelijak a bohužel neni s nim mnoho řeči; řikejte si mu co chcete, většinou
odpovi nějak skoupě a přitom se omlouvá plachým úsměvem.
Dejme tomu v poledne – je teprve začátek dubna – sedává v zahrádce na lavičce;
vedle něho ježatý teriér Honzik se směje na celé kolo pod svými mokrými
fořtovskými vousy, neboť je zřejmě pyšný na svou funkci společnika, a samou
radosti se oblizne a mhouři oči, když ho zjizvená Prokopova levička pohladi po
teplé huňaté hlavě. V tu hodinu obyčejně doktor vyběhne z ordinace, čepička mu
sem tam jezdi po hladké pleši, sedne na bobek a sázi zeleninu; tlustými
krátkými prsty rozmilá hrudky prsti a pozorně vystýlá lůžko mladých kličků. Co
chvili se začne rozčilovat a bruči; zapichl někde do záhonku svou lulku a
nemůže ji najit. Tu se Prokop zvedne a s divinaci detektiva (neboť čte v
posteli detektivky) zamiři rovnou k ztracené faječce. Čehož Honzik užije k
tomu, aby se hlučně otřepal.
V tu hodinu chodivá Anči (neboť tak a nikoliv Andula si přeje být jmenována)
zalévat tatinkovy záhony. V pravé ruce nese konev, levá plave ve vzduchu;
střibrná prška šumi do mladé hliny, a naskytne-li se nablizku Honzik, dostane
ji na zadek nebo na pitomou veselou hlavu; tu zoufale kvikne a hledá ochranu u
Prokopa.
Celé ráno se trousi do ordinace pacienti. Chrchlaji v čekárně a mlči, každý
mysle jen na své utrpeni. Někdy se ozve z ordinace strašný křik, když doktor
tahá zub nějakému kloučeti. Tu se zase Anči v panice zachráni k Prokopovi,
bledá a zrovna bez sebe, úzkostně mžiká krásnými řasami a čeká, až strašná
událost přejde. Konečně kluk ubihá ven s táhlým vytim, a Anči nějak nešikovně
zamlouvá svou útlocitnou zbabělost.
Ovšem něco jiného je, když před doktorovým domem zastavi vůz vystlaný slámou a
dva strejci opatrně vynášeji po schodech těžce raněného člověka. Má rozdrcenou
ruku nebo zlomenou nohu nebo hlavu roztřištěnou kopytem; studený pot se mu
řine po hrozně bledém čele, a tiše, s hrdinným sebepřemáhánim sténá. Na celý
dům lehne tragické ticho; v ordinaci se bez hluku odehrává něco těžkého,
tlustá veselá služka chodi po špičkách, Anči má oči plné slz a prsty se ji
třesou. Doktor vrazi do kuchyně, s křikem žádá rum, vino nebo vodu, a
dvojnásobnou hrubosti zakrývá mučivý soucit. A ještě celý den potom nemluvi a
vzteká se a bouchá dveřmi.
Ale je také veliký svátek, slavný výročni trh venkovské doktořiny: očkováni
děti. Sta maminek houpá své bečici, řvouci, spici uzličky, je toho plná
ordinace, chodba, kuchyně i zahrádka; Anči je jako blázen, chtěla by chovat,
houpat a převijet všechny ty bezzubé, uřvané, ochmýřené děti v nadšeném
záchvatu kybelického mateřstvi. I starému doktorovi se nějak okázaleji sviti
pleš, od rána chodi bez brejli, aby nepolekal ty haranty, a oči mu plavou
únavou a radosti.
Jindy uprostřed noci rozčileně zařinči zvonek. Pak bruči ve dveřich nějaké
hlasy, doktor hubuje a koči Jozef musi zapřahat. Někde ve vsi za sviticim
okénkem přicházi na svět nový člověk. Až ráno se doktor vraci, unavený, ale
spokojený, a na deset kroků smrdi karbolem; ale takhle ho má Anči nejraději.
Pak jsou tu ještě jiné osobnosti: tlustá řehtavá Nanda v kuchyni, která po
celý den zpivá a řinči a ohýbá se smichem. Dále vážný koči Jozef s visutými
kniry, historik; čte pořád dějepisné knižky a rád vykládá dejme tomu o
husitských válkách nebo o historických tajemnostech kraje. Dále panský
zahradnik, náramný holkář, který denně zaskoči do doktorovy zahrady, očkuje mu
růže, střihá keře a uvádi Nandu do nebezpečných záchvatů smichu. Dále zminěný
chlupatý a rozjařený Honzik, jenž provázi Prokopa, honi blechy a slepice a
zmiry rád jezdi na kozliku doktorova kočárku. Fric, to je starý rap trochu
šedivějici, přitel králiků, rozšafný a dobrosrdečný kůň; pohladit jeho teplé a
citlivé nozdry, to je prostě vrchol přijemnosti. Dále brunátný adjunkt ze
dvora, zamilovaný do Anči, která si z něho ve spojeni s Nandou ukrutně střili.
Ředitel ze dvora, starý lišák a zloděj, jenž chodi s doktorem hrát v šachy;
doktor se rozčiluje, zuři a prohrává. A jiné mistni osobnosti, mezi nimiž
neobyčejně nudný a politicky interesovaný civilni geometr otravuje Prokopa
právem kolegiality.
Prokop mnoho čte nebo se tváři, jako by četl. Jeho zjizvená, těžká tvář mnoho
nepovidá, zejména ne o zoufalém a tajném zápasu s porouchanou paměti. Zvláště
posledni pracovni léta mnoho utrpěla; nejjednodušši vzorce a procesy jsou ty
tam, a na okraji knižek si piše Prokop kusé formule, které se mu vynořuji v
hlavě, když na ně nejméně mysli. Pak se sebere a jde hrát s Anči kulečnik;
neboť je to hra, při které se mnoho nemluvi. I na Anči padá jeho kožená a
neproniknutelná vážnost; hraje soustředěně, miři s přisně staženým obočim, ale
když koule zamiři naschvál jinam, otevře údivem ústa a mokrým jazejčkem ji
ukazuje správnou cestu.
Večery u lampy. Nejvic toho napovidá doktor, nadšený přirodovědec bez
jakýchkoliv znalosti. Zejména jej okouzluji posledni záhady světa:
radioaktivita, nekonečnost prostoru, elektřina, relativita, původ hmoty a
stáři lidstva. Je zapřisáhlý materialista, a právě proto citi tajemnou a
sladkou hrůzu neřešitelných věci. Někdy se Prokop nezdrži a opravuje
büchnerovskou naivitu jeho názorů. Tu starý pán naslouchá přimo pobožně a
počiná si Prokopa nesmirně vážit, zejména tam, kde mu přestává rozumět,
řekněme takhle o rezonančnim potenciálu nebo teorii kvant. Anči, ta prostě
sedi opirajic se bradou o stůl; je sice na tuto pozici už trochu veliká, ale
patrně od maminčiny smrti zapomněla dospivat. Ani nemrká a divá se velkýma
očima z táty na Prokopa a vice versa.
A noci, noci jsou pokojné a širé jako všude venku. Chvilemi zařinči z kravina
řetězy, chvilemi se blizko nebo daleko rozštěkaji psi; po nebi se mihne
padajici hvězda, jarni déšť zašumi v zahradě nebo střibrným zvukem odkapává
osamělá studna. Čirý, hlubinný chlad vane otevřeným oknem, a člověk usiná
požehnaným spánkem bez vidin.


X.

Nuže, bylo lépe; den za dnem se Prokopovi vracel život drobnými krůčky. Citil
jen malátnost hlavy, bylo mu stále trochu jako ve snách. Nezbývalo než
poděkovat doktorovi a jeti po svém. Chtěl to ohlásit jednou po večeři, ale
zrovna všichni mlčeli jako zařezani. A pak vzal starý doktor Prokopa pod paži
a dovedl si ho do ordinace; po nějakém okolkováni vyhrkl s rozpačitou
hrubosti, že jako Prokop nemusi odjiždět, ať raději odpočivá, že nemá ještě
vyhráno, a vůbec ať si tu zůstane a dost. Prokop se matně bránil; faktum ovšem
bylo, že se ještě necitil v sedle a že se poněkud rozmazlil. Zkrátka o odjezdu
nebylo zatim řeči.
Vždy odpoledne se doktor zaviral v ordinaci. „Přijďte si někdy ke mně sednout,
co?“ řekl Prokopovi mimochodem. Tak tedy ho Prokop zastihl u všelijakých
lahviček a kelimků a prášků. „Vite, tady v mistě neni hapatyka,“ vysvětloval
doktor, „já musim sám dělat léky.“ A třesoucimi se tlustými prsty dozoval
nějaký prášek na ručnich vážkách. Měl nejistou ruku, váhy se mu houpaly a
točily; starý pán se rozčiloval, funěl a potil se na nose drobnými krůpějkami.
„Když na to pořádně nevidim,“ zamlouval stáři svých prstů. Prokop se chvili
dival, pak neřekl nic a vzal mu vážky z ruky. Klep, klep, a prášek byl na
miligram odvážen. A druhý, třeti prášek. Citlivé vážky jen tančily v
Prokopových prstech. „Ale koukejme, koukejme,“ divil se doktor a s úžasem
sledoval Prokopovy ruce, rozbité, uzlovité, s netvornými klouby, ulámanými
nehty a krátkými pahýly misto několika prstů. „Človičku, vy máte šikovnost v
těch rukou!“ Za chvili už Prokop roztiral nějakou masť, odměřoval kapky a
nahřival zkumavky. Doktor zářil a nalepoval viněty. Za půl hodiny byl hotov s
celou lékárnou, a ještě tu byla hromada prášků do zásoby. A po několika dnech
Prokop už zběžně četl doktorovy recepty a bez řeči mu dělal magistra. Bon.
Kdysi kvečeru se dloubal doktor na zahradě v kyprém záhonku. Najednou strašná
rána v domě, a hned nato se s řinkotem sypalo sklo. Doktor se vrhl do domu a
na chodbě se srazil s uděšenou Anči. „Co se stalo?“ volal. „Já nevim,“
vypravilo ze sebe děvče. „To v ordinaci…“ Doktor běžel do ordinace a viděl
Prokopa, jak na všech čtyřech sbirá na podlaze střepy a papiry.
„Co jste tu dělal?“ rozkřikl se doktor.
„Nic,“ řekl Prokop a provinile vstával. „Praskla mně zkumavka.“
„Ale co u všech všudy,“ hromoval doktor a zarazil se: z Prokopovy levice
čurkem stékala krev. „Copak vám to utrhlo prst?“
„Jen škrábnuti,“ protestoval Prokop a schovával levičku za zády.
„Ukažte,“ křikl starý doktor a táhl Prokopa k oknu. Půl prstu viselo jen na
kůži. Doktor se hnal ke skřini pro nůžky, a v otevřených dveřich zahlédl Anči
na smrt bledou. „Co tu chceš?“ spustil. „Marš odtud!“ Anči se nehnula; tiskla
ruce k prsoum a vypadala co nejslibněji na omdleni.
Doktor se vrátil k Prokopovi; nejdřiv dělal něco s vatičkou a pak cvakly
nůžky. „Světlo,“ křikl na Anči. Anči se vrhla k vypinači a rozsvitila. „A
nestůj tady,“ hřmotil starý pán a koupal jehlu v benzinu. „Co tu máš co dělat?
Podej sem nitě!“ Anči skočila ke skřini a podala mu ampulku s nitěmi. „A teď
jdi!“
Anči se podivala na Prokopova záda a udělala něco jiného; přistoupila bliž,
chopila oběma dlaněma tu poraněnou ruku a podržela ji. Doktor si zrovna myl
ruce; obrátil se k Anči a chtěl vybuchnout; misto toho zabručel: „Tak, teď drž
pevně! A vic u světla!“
Anči zamhouřila oči a držela. Když nebylo slyšet nic než doktorovo supěni,
odvážila se zvednout oči. Dole, kde pracoval otec, to bylo krvavé a ošklivé.
Pohlédla honem na Prokopa; měl odvrácenou tvář, a jeho vičkem cukala bolest.
Anči trnula a polykala slzy a dělalo se ji nanic.
Zatim Prokopova ruka narůstala: spousta vaty, Billrothův batist a snad
kilometr fáče pořád navijeného; konečně z toho bylo něco ohromného bilého.
Anči držela, kolena se ji třásla, zdálo se ji, že ta strašná operace nikdy
nebude u konce. Najednou se ji zatočila hlava, a pak slyšela, jak otec povidá:
„Na, vypij to honem!“ Otevřela oči a shledala, že sedi v ordinačni sesli, že
tati ji podává skleničku s něčim, za nim že stoji Prokop, usmivá se a chová na
prsou zavázanou ruku vypadajici jako obrovské poupě. „Tak to vypij,“ naléhal
doktor a jen cenil zuby. Spolkla to tedy a rozkuckala se; byl to vražedný
koňak.
„A teď vy,“ řekl doktor a podal skleničku Prokopovi. Prokop byl trochu bledý a
statečně čekal, že dostane vynadáno. Nakonec se napil doktor, odchrchlal a
spustil: „Tak co jste tu vlastně prováděl?“
„Pokus,“ řekl Prokop s křivým úsměvem provinilce.
„Co? Jaký pokus? S čim pokus?“
„Jen tak. Jen – jen – jde-li něco udělat z chloridu draselnatého.“
„Co udělat?“
„Třaskavina,“ šeptal Prokop v pokoře hřišnika.
Doktor se svezl očima na jeho ofáčovanou ruku. „A to se vám vyplatilo,
člověče! Ruku vám to mohlo utrhnout, co? Boli? Ale dobře na vás, patři vám
to,“ prohlašoval krvelačně.
„Ale tati,“ ozvala se Anči, „nech ho teď!“
„A co ty tu máš co dělat,“ zavrčel doktor a pohladil ji rukou páchnouci
karbolem a jodoformem.
Nyni doktor nosil klič od ordinace v kapse. Prokop si objednal balik učených
svazků, chodil s rukou na pásku a studoval po celé dny. Už kvetou třešně,
lepkavé mladé listi se třpyti ve slunci, zlaté lilie rozviraji těžká poupata.
Po zahrádce chodi Anči s obtloustlou kamarádkou, obě se drži kolem pasu a
směji se; teď sestrčily k sobě růžové čumáčky, něco si šeptaji, zrudnou ve
smichu a začnou se libat.
Po létech zase citi Prokop tělesné blaho. Živočišně se oddává slunci a mhouři
oči, aby naslouchal šuměni svého těla. Vzdychne a sedá k práci; ale chce se mu
běhat, toulá se daleko po kraji a věnuje se náruživé radosti dýchat. Někdy
potká Anči v domě či v zahradě a pokouši se něco povidat; Anči se na něj divá
po očku a nevi co mluvit; ale ani Prokop to nevi, a proto upadá do bručivého
tónu. Zkrátka je mu lépe nebo se aspoň citi jistějši, je-li sám.
Při studiu pozoroval, že mnoho zanedbal; věda byla už v mnohém dále a jinde,
leckdy se musel nově orientovat; a hlavně se bál vzpominat na svou vlastni
práci, neboť tam, to citil, se mu nejvic potrhala souvislost. Pracoval jako
mezek nebo snil; snil o nových laboratornich metodách, ale zároveň ho lákal
jemný a odvážný kalkul teoretika; a vztekal se sám na sebe, když jeho hrubý
mozek nebyl s to rozštipnout teninký vlas problému. Byl si vědom, že jeho
laboratorni „destruktivni chemie“ otvirá nejpodivnějši průhledy do teorie
hmoty; narážel na nečekané souvislosti, ale hned zas je rozšlapal svým přiliš
těžkým uvažovánim. Rozmrzen praštil všim, aby se ponořil do nějakého hloupého
románu; ale i tam ho pronásledovala laboratorni posedlost: misto slov četl
samé chemické symboly; byly to bláznivé vzorce plné prvků dosud neznámých, jež
ho znepokojovaly i ve snách.


XI.

Té noci se mu zdálo, že studuje veleučený článek v The Chemist. Zarazil se u
vzorce AnCi a nevěděl si s nim rady; hloubal, kousal se do kloubů a najednou
pochopil, že to znamená Anči. A vida, ona je vlastně tady a posmivá se mu s
pažema založenýma za hlavou; přistoupil k ni, chytil ji oběma rukama a začal
ji libat a kousat do úst. Anči se divoce bráni koleny a lokty; drži ji
brutálně a jednou rukou z ni trhá šaty v dlouhých pásech. Už citi dlaněmi jeji
mladé maso; Anči sebou zběsile zmitá, vlasy padly ji přes tvář, teď, teď náhle
ochabuje a klesá; Prokop se vrhá k ni, ale nalézá pod rukama jen samé dlouhé
hadřiky a fáče; trhá je, rve je, chce se z nich vyprostit, a probouzi se.
Hanbil se nesmirně za svůj sen; i ustrojil se potichu, sedl u okna a čekal na
svitáni. Neni hranice mezi noci a dnem; jen nebe maličko pobledne, a vzduchem
proleti signál, jenž neni ani světlo ani zvuk, ale porouči přirodě: vzbuď se!
Tu tedy nastalo ráno ještě prostřed noci. Rozkřičeli se kohouti, zviřata v
stájich se pohnula. Nebe bledne do perleťova, rozzařuje se a lehce růžovi;
prvni červený pruh vyskočil na východě, „štilip štilip játiti piju piju já,“
štěkaji a křiči ptáci, a prvni člověk jde volným krokem za svým povolánim.
Také učený člověk sedl k dilu. Dlouho kousal násadku, než se odhodlal napsat
prvni slova; neboť toto bude veliká věc, úhrn experimentováni a přemýšleni
dvanácti let, práce opravdu vykoupená krvi. Ovšem, to zde bude jen náčrt, či
spiš jistá fyzikálni filozofie nebo báseň nebo vyznáni viry. Bude to obraz
světa sklenutý z čisel a rovnic; avšak tyto cifry astronomického řádu měři
něco jiného než vznešenost oblohy: kalkuluji vratkost a destrukci hmoty. Vše,
co jest, je tupá a vyčkávajici třaskavina; ale jakékoliv budiž čislo jeji
netečnosti, je jenom mizivým zlomkem jeji brizance. Vše, co se děje, oběhy
hvězd a telurická práce, veškerá entropie, sám pilný a nenasytný život, to vše
jen na povrchu, nepatrně a neměřitelně ohlodává a váže tuto výbušnou silu, jež
se jmenuje hmota. Vězte tedy, že pouto, jež ji váže, je jenom pavučina na
údech spiciho titána; dejte mi silu, aby jej pobodl, i setřese kůru země a
vrhne Jupitera na Saturna. A ty, lidstvo, jsi jenom vlaštovka, která si pracně
ulepila hnizdo pod krovem kosmické prachárny; cvrlikáš za slunce východu,
zatimco v sudech pod tebou mlčky duni strašlivý potenciál výbuchu…
Ty věci Prokop ovšem nepsal; byly mu jenom ztajenou melodii, jež okřidlovala
těžkopádné věty odborného výkladu. Pro něho bylo vice fantazie v holém vzorci
a vic oslnivé krásy v čiselném výrazu. A tak psal svou báseň ve značkách,
čislicich a děsné hantýrce učených slov.
K snidani nepřišel. Přišla tedy Anči a nesla mu mličko. Děkoval a přitom si
vzpomněl na svůj sen, a jaksi to nesvedl podivat se na ni. Koukal tvrdošijně
do kouta; bůhvi jak je to možno, že přesto viděl každý zlatý vlásek na jejich
holých pažich; nikdy si toho tak nevšiml.
Anči stála blizoučko. „Budete psát?“ ptala se neurčitě.
„Budu,“ bručel a myslel, co by tomu řekla, kdyby ji zničehonic položil hlavu
na prsa.
„Po celý den?“
„Po celý den.“ Asi by ucouvla náramně dotčena; ale má pevná, malá a široká
ňadra, o kterých snad ani nevi. Ostatně, co s tim!
„Chtěl byste něco?“
„Ne, nic.“ Je to hloupé; chtěl by ji hryzat do paži či co; ženská nikdy nevi,
jak člověka vyrušuje.
Anči pokrčila rameny trochu uraženě. „Taky dobře.“ A byla pryč.
Vstal a přecházel po pokoji; zlobil se na sebe i na ni, a hlavně se mu už
nechtělo psát. Sbiral myšlenky, ale naprosto se mu to nedařilo. Rozmrzel se a
otráven chodil od stěny ke stěně s pravidelnosti kyvadla. Hodinu, dvě hodiny.
Dole řinči taliře, prostirá se k obědu. Sedl znovu k svým papirům a položil
hlavu do dlani. Za chvili tu byla služka a přinesla mu oběd.
Vrátil jidlo skoro netknuté a vrhl se rozmrzen na postel. Je zřejmo, že už ho
maji dost, že i on má toho všeho až po krk a že je načase odejet. Ano, hned
zitra. Dělal si nějaké plány pro přišti práci, bylo mu neznámo proč stydno a
trapno a konečně z toho všeho usnul jako zabitý. Probudil se pozdě odpoledne s
duši zbahnělou a tělem zamořeným shnilou lenosti. Coural po pokoji, zival a
bezmyšlenkovitě se mrzel. Setmělo se, a ani nerozsvitil.
Služka mu přinesla večeři. Nechal ji vystydnout a poslouchal, co se děje dole.
Vidličky cinkaly, doktor bručel a náramně brzo po večeři práskl dveřmi u svého
pokoje. Bylo ticho.
Jist, že už nikoho nepotká, sebral se Prokop a šel do zahrady. Byla vlažná a
jasná noc. Už kvetou šeřiky a pustoryl, Bootes široce rozpiná na nebi svou
hvězdnou náruč, je ticho prohloubené dalekým psim štěkánim. O kamennou zidku v
zahradě se opirá něco světlého. Je to ovšem Anči.
„Je krásně, že?“ dostal ze sebe, aby vůbec něco řekl, a opřel se o zidku vedle
ni. Anči nic, jenom odvraci tvář a jeji ramena sebou nezvykle a neklidně
trhaji.
„To je Bootes,“ bručel Prokop sdilně. „A nad nim… je Drak, a Cepheus, a tamto
je Kassiopeja, ty čtyři hvězdičky pohromadě. Ale to se musite divat výš.“
Anči se odvraci a něco roztirá kolem oči. „Tamta jasná,“ povidá Prokop váhavě,
„je Pollux, beta Geminorum. Nesmite se na mne zlobit. Snad jsem se vám zdál
hrubý, že? Já jsem… něco mne trápilo, vite? Nesmite na to dát.“
Anči zhluboka vzdychla. „A která je… tamta?“ ozvala se tichým, kolisavým
hláskem. „Ta nejjasnějši dole.“
„To je Sirius, ve Velkém psu. Taky Alhabor mu řikaji. A tamhle docela vlevo
Arcturus a Spica. Teď padala hvězda. Viděla jste?“
„Viděla. Proč jste se ráno na mne tak zlobil?“
„Nezlobil. Jsem snad… někdy… trochu hranatý; ale já jsem byl tvrdě živ, vite,
přiliš tvrdě; pořád sám a… jako prvni hlidka. Nedovedu ani pořádně mluvit.
Chtěl jsem dnes… dnes napsat něco krásného… takovou vědeckou modlitbu, aby
tomu každý rozuměl; myslil jsem, že… že vám to přečtu; a vidite, všechno ve
mně vyschlo, člověk už se stydi… rozehřát se, jako by to byla slabost. Nebo
vůbec něco řici ze sebe. Takový okoralý, vite? Už hodně šedivim.“
„Vždyť vám to sluši,“ vydechla Anči.
Prokopa překvapila tato stránka věci. „Nu vite,“ řekl zmateně, „přijemné to
neni. Už by byl čas… už by byl čas svážet svou úrodu domů. Co by jiný udělal z
toho, co já vim! A já nemám nic, nic, nic z toho všeho. Jsem jenom… ,berühmt‘
a ,célčbre‘ a ,highly esteemed‘; ani o tom… u nás… nikdo nevi. Já myslim,
vite, že mé teorie jsou dost špatné; já nemám hlavu na teoretika. Ale co jsem
našel, neni bez ceny. Mé exotermické třaskaviny… diagramy… a exploze atomů… to
má nějakou cenu. A publikoval jsem sotva desetinu toho, co vim. Co by z toho
jiný udělal! Já už… ani nerozumim jejich teoriim; jsou tak subtilni, tak
duchaplné… a mne to jen mate. Jsem kuchyňský duch. Dejte mně k nosu nějakou
látku, a já zrovna čichám, co se s ni dá dělat. Ale pochopit, co z toho plyne…
teoreticky a filozoficky…, to neumim. Já znám… jen fakta; já je dělám; jsou to
má fakta, rozumite? A přece… já… já za nimi citim nějakou pravdu; ohromnou
obecnou pravdu… která všechno převráti… až vybuchne. Ale ta velká pravda… je
za fakty a ne za slovy. A proto, proto musiš za fakty! až ti to třeba obě ruce
utrhne…“
Anči, opřena o zidku, sotva dýchala. Nikdy dosud se ten zamračený patron tolik
nerozmluvil – a hlavně nikdy nemluvil o sobě. Zápasil těžce se slovem; zmitala
jim ohromná pýcha, ale také plachost a zmučenost; a kdyby mluvil třeba v
integrálách, chápala Anči, že se před ni děje něco naprosto niterného a lidsky
zjitřeného.
„Ale to nejhorši, to nejhorši,“ bručel Prokop. „Někdy… a tady zvlášť… i to, i
to se mně zdá hloupé… a k ničemu. I ta konečná pravda… vůbec všecko. Nikdy
dřiv mně to tak nepřišlo. Nač, a k čemu… Snad je rozumnějši poddat se… prostě
poddat se tomu, tomu všemu – (Nyni ukázal rukou cosi kolem dokola.) Prostě
životu. Člověk nemá být šťastný; to ho změkčuje, vite? Pak se mu zdá všechno
ostatni zbytečné, malé… a nesmyslné. Nejvic… nejvic udělá člověk ze
zoufalstvi. Ze stesku, ze samoty, z ohlušováni. Protože mu nic nestači. Já
jsem pracoval jako blázen. Ale tady, tady jsem začal být šťastný. Tady jsem
poznal, že je snad… něco lepšiho než myslet. Tady člověk jenom žije… a vidi,
že je to něco ohromného… jenom žit. Jako váš Honzik, jako kočka, jako slepice.
Každé zviře to umi… a mně to připadá tak ohromné, jako bych dosud nežil. A
tak… tak jsem podruhé ztratil dvanáct let.“
Jeho potlučená, bůhvikolikrát sešivaná pravice se chvěla na zidce. Anči mlči,
i potmě je vidět jeji dlouhé řasy; opirá se lokty a hrudi o zděný plot a mžiká
k hvězdičkám. Tu zašelestilo něco v křovi, a Anči se zděsila; až ji to moci
vrhlo k Prokopovu rameni. „Co je to?“
„Nic, nejspiš kuna; jde asi do dvora, na kuřata.“
Anči znehybněla. Jeji mladé prsy se nyni pružně, plně opiraji o Prokopovu
pravici, – snad, jistě o tom sama nevi, ale Prokop to vi vic než cokoliv na
světě; boji se hrozně pohnout rukou, neboť, předně, by si Anči myslela, že ji
tam položil schválně, a za druhé by vůbec změnila polohu. Zvláštni však je, že
tato okolnost vylučuje, aby dále mluvil o sobě a o ztraceném životě. „Nikdy,“
koktá zmateně, „nikdy jsem nebyl tak rád… tak šťasten jako tady. Váš tatik je
nejlepši člověk na světě, a vy… vy jste tak mladá…“
„Já jsem myslela, že se vám zdám… přiliš hloupá,“ povidá Anči tiše a šťastně.
„Nikdy jste se mnou takhle nemluvil.“
„Pravda, nikdy dosud,“ zabručel Prokop. Oba se odmlčeli. Citil na ruce lehké
oddechováni jejich ňader; mrazilo ho a tajil dech, i ona, zdá se, taji dech v
tichém trnuti, ani nemrká a široce hledi nikam. Oh, pohladit a stisknout! Oh,
závrati, prvý dotyku, lichotko bezděčná a horouci! Zda tě kdy potkalo
dobrodružstvi opojnějši než tato nevědomá a oddaná důvěrnost? Skloněné poupě,
tělo bázlivé a jemné! kdybys tušilo mučivou něhu té tvrdé chlapské ruky, jež
tě bez hnuti hladi a svirá! Kdybys – kdyby – kdybych teď učinil… a stiskl…
Anči se vztyčila nejpřirozenějšim pohybem. Ach, děvče, tys tedy opravdu o
ničem nevědělo! „Dobrou noc!“ povidá Anči tiše, a jeji tvář je bledá a
nejasná. „Dobrou noc,“ pravi trochu sevřeně a podává mu ruku; podává ji levě a
chabě, je jako polámaná a divá se široce nějak jinam. Neni-liž pak to, jako by
chtěla ještě prodlit? Ne, jde už, váhá; ne, stoji a trhá na kousičky nějaký
listek. Co ještě řici? Dobrou noc, Anči, a spěte lépe než já.
Neboť zajisté nelze teď jit spat. Prokop se vrhá na lavičku a položi hlavu do
dlani. Nic, nic se neudálo… tak dalece; bylo by hanebné hnedle myslet na
bůhvico. Anči je čistá a nevědomá jako telátko, a teď už dost o tom; nejsem
přece chlapec. Tu se rozsvitilo v prvnim patře okno. Je to Ančina ložnice.
Prokopovi bouchá srdce. Vi, že je to hanebnost, tajně se tam divat; jistě, to
by jako host dělat neměl. Pokouši se dokonce zakašlat (aby ho slyšela), ale
jaksi to selhalo; i sedi jako socha a nemůže odvrátit oči od zlatého okna.
Anči tam přecházi, shýbá se, něco dlouze a široce robi; aha, rozestýlá si
postýlku. Teď stoji u okna, divá se do tmy a zakládá ruce za hlavou: zrovna
tak ji viděl ve snu. Teď, teď by bylo radno se ozvat; proč to neudělal? Už je
na to pozdě; Anči se odvraci, přecházi, je ta tam; ba ne, to sedi zády k oknu
a zřejmě se zouvá hrozně pomalu a zamyšleně; nikdy se nesni lip než se
střevicem v ruce. Aspoň teď by bylo načase zmizet; ale misto toho vylezl na
lavičku, aby lip viděl. Anči se vraci, už nemá na sobě živůtek; zvedá nahé
paže a vyndává si z účesu vlásničky. Nyni hodila hlavou, a celá hřiva se ji
rozlévá po ramenou; děvče ji potřese, hurtem si přehodi celou tu úrodu vlasů
přes čelo a teď ji zpracovává kartáčem a hřebenem, až má hlavu jako cibulku;
je to patrně velmi směšné, neboť Prokop, hanebnik, přimo záři.
Anči, panenka bilá, stoji se skloněnou hlavou a splétá si vlasy ve dva copy;
má vička sklopena a něco si šeptá, zasměje se, zastydi se, až ji to ramena
zvedá; pásek košile, pozor, sklouzne. Anči hluboce přemýšli a hladi si bilé
raminko v nějakém rozkošnictvi, zachvěje se chladem, pásek se smeká už
povážlivě, a světlo zhaslo.
Nikdy jsem neviděl nic bělejšiho, nic pěknějšiho a bělejšiho než toto
osvětlené okno.


XII.

Hned ráno ji zastihl, jak drhne mydlinkami Honzika v neckách; psisko zoufale
vytřepávalo vodu, ale Anči se nedala, držela ho za čupřiny a náruživě mydlila,
postřikaná, zmáčená na břiše a usmátá. „Pozor,“ křičela z dálky, „postřiká
vás!“ Vypadala jako mladá nadšená maminka; oj bože, jak je vše prosté a jasné
na tomto slunném světě!
Ani Prokop nevydržel zahálet. Vzpomněl si, že nefunguje zvonek, a jal se
spravovat baterii. Zrovna oškrabával zinek, když se k němu tiše bližila ona;
měla rukávy po loket vyhrnuté a mokré ruce, neboť se pere. „Nevybuchne to?“
ptá se starostlivě. Prokop se musel usmát; i ona se zasmála a střikla po něm
mydlinkami; ale hned mu šla s vážnou tváři utřit loktem bublinku mýdla na
vlasech. Hle, včera by se toho nebyla odvážila.
K polednimu vleče s Nandou koš prádla na zahradu; bude se bilit. Prokop s
povděkem sklapl knihu; nenechá ji přece tahat se s těžkou kropici konvi.
Zmocnil se konve a kropi prádlo; hustá prška přeradostně a horlivě bubnuje na
řásné ubrusy a na bělostné rozložité povlaky a do široce rozevřených náruči
mužských košil, šumi, crči a slévá se ve fjordy a jezirka. Prokop se žene
zkropit i bilé zvonky sukének a jiné zajimavé věci, ale Anči mu vyrve konev a
zalévá sama. Zatim si Prokop sedl do trávy, dýchá s rozkoši vůni vlhkosti a
pozoruje Ančiny činné a krásné ruce. Soi de theoi tosa doien, vzpomněl si
zbožně. Sebas m’echei eisoroónta. Já s úžasem na tebe hledim.
Anči usedá k němu do trávy. „Nač jste to myslel?“ Mhouři oči oslněnim a
radosti, zardělá a kdoviproč tak šťastná. Rve plnou hrsti svěži trávu a chtěla
by mu ji z bujnosti hodit do vlasů; ale bůhvi, i teď ji tisni jakýsi uctivý
ostych před tim ochočeným hrdinou. „Měl jste někdy někoho rád?“ ptá se
zčistajasna a honem se divá jinam.
Prokop se směje. „Měl. Vždyť i vy jste už měla někoho ráda.“
„To jsem byla ještě hloupá,“ vyhrkne Anči a proti své vůli se červená.
„Študent?“
Anči jen kývne a kouše nějakou travinu. „To nic nebylo,“ povidá pak rychle. „A
vy?“
„Jednou jsem potkal děvče, které mělo takové řasy jako vy. Možná že vám byla
podobná. Prodávala rukavice či co.“
„A co dál?“
„Nic dál. Když jsem tam šel podruhé koupit rukavice, už tam nebyla.“
„A… libila se vám?“
„Libila.“
„A… nikdy jste ji…“
„Nikdy. Teď mně dělá rukavice… bandažista.“
Anči soustřeďuje svou pozornost na zem. „Proč… vždycky přede mnou schováváte
ruce?“
„Protože… protože je mám tak rozbité,“ děl Prokop a chudák se začervenal.
„To je zrovna tak krásné,“ šeptá Anči s očima sklopenýma.
„K obědúúú, k obědúúú,“ vyvolává Nanda před domem. „Bože, už,“ vzdychne Anči a
velmi nerada se zvedá.
Po obědě se starý doktor jen tak trochu položil, jen docela málo. „Vite,“
omlouval se, „já jsem se ráno nadřel jako pes.“ A hned začal pravidelně a
pilně chrupat. Zasmáli se na sebe očima a po špičkách vyšli; a i v zahradě
mluvili potichu, jako by ctili jeho sytý spánek.
Prokop musel povidat o svém životě. Kde se narodil a kde rostl, že byl až v
Americe, co bidy poznal, co kdy dělal. Dělalo mu dobře zopakovat si celý ten
život; neboť, kupodivu, byl klikatějši a divnějši, než by sám myslel; a ještě
o mnohém pomlčel, zejména, nu, zejména o jistých citových záležitostech, neboť
předně to nemá takový význam, a za druhé, jak známo, každý mužský má o čem
mlčet. Anči byla tichá jako pěna; připadalo ji jaksi směšné a zvláštni, že
Prokop byl také ditětem a chlapcem a vůbec něčim jiným než bručivým a divným
člověkem, vedle něhož se citi taková nesvá a maličká. Nyni by se už nebála na
něho i sáhnout, zavázat mu kravatu, pročisnout vlasy nebo vůbec. A poprvé
viděla teď jeho tlustý nos, jeho drsná ústa a přisné, mračné, krvavě protkané
oči; připadalo ji to vše nesmirně divné.
A nyni byla řada na ni, aby povidala o svém životě. Už otevřela ústa a
nabirala dechu, ale dala se do smichu. Uznejte, co se může řici o tak
nepopsaném životě, a dokonce někomu, kdo už jednou byl dvanáct hodin zasypán,
kdo byl ve válce, v Americe a kdovikde ještě? „Já nic nevim,“ řekla upřimně.
Nuže, řekněte, neni takové „nic stejně cenné jako mužovy zkušenosti?
Je pozdě odpoledne, když spolu putuji vyhřátou polni stezkou. Prokop mlči a
Anči poslouchá. Anči hladi rukou ostnaté vrcholky klasů. Anči se ho dotýká
ramenem, zpomaluje krok, vázne; pak zase zrychli chůzi, jde dva kroky před nim
a rve klasy v jakési potřebě ničit. Tato slunečná samota je posléze tiži a
znervózňuje; neměli jsme sem jit, mysli si oba potaji, a v tisnivém rozladěni
soukaji ze sebe plytký, potrhaný hovor. Konečně tady je cil, kaplička mezi
dvěma starými lipami; je pozdni hodina, kdy pasáci začinaji zpivat. Tu je
sedátko poutniků; usedli a jaksi ještě vic potichli. Nějaká žena klečela u
kapličky a modlila se, jistěže za svou rodinu. Sotva odešla, zvedla se Anči a
klekla na jeji misto. Bylo v tom něco nekonečně a samozřejmě ženského; Prokop
se citil chlapcem vedle zralé prostoty tohoto pravěkého a posvátného gesta.
Anči konečně vstala, zvážnělá jaksi a vyspělá, o čemsi rozhodnutá, s čimsi
smiřená; jako by něco poznala, jako by něco v sobě nesla, přetižená,
zamyšlená, bůhvičim tak změněná; jen slabikami odpovidala sladkým a potemnělým
hlasem, když se loudali domů cestičkou soumraku.
Nemluvila při večeři a nemluvil ani Prokop; mysleli asi na to, kdy starý pán
si půjde přečist noviny. Starý pán bručel a zkoumal je přes brejličky;
holenku, něco se mu tady netento, nezdálo jaksi v pořádku. Už se to trapně
táhlo, když se ozval zvonek a člověk odněkud ze Sedmidoli nebo ze Lhoty prosil
doktora k porodu. Starý doktor byl pramálo potěšen, zapomněl dokonce hubovat.
Ještě s porodnim tlumokem zaváhal ve dveřich a kázal suše: „Jdi spat, Anči.“
Beze slova se zvedla a sklizela se stolu. Byla dlouho, velmi dlouho někde v
kuchyni. Prokop nervózně kouřil a už chtěl odejit. Tu se vrátila, bledá, jako
by ji mrazilo, a řekla s hrdinným přemáhánim: „Nechcete si zahrát biliár?“ To
znamenalo: se zahradou dnes nic nebude.
Nu, byla to prašpatná partie; zejména Anči byla zrovna toporná, šťouchala
naslepo, zapominala hrát a stěži odpovidala. A když jednou zahodila
nejvyloženějšiho sedáka, ukazoval ji Prokop, jak to měla sehrát: pravá faleš,
vzit trochu dole, a je to; při tom – jen aby ji vedl ruku – položil svou ruku
na jeji. Tu Anči prudce, temně mu vzhlédla do tváře, hodila tágo na zem a
utekla.
Nuže, co dělat? Prokop pobihal po salóně, kouřil a mrzel se. Eh, divné děvče;
ale proč to tak mate mne sama? Jeji hloupá pusa, jasné blizoučké oči, ličko
hladké a horouci, nu, člověk neni konečně ze dřeva. Což by bylo takovým
hřichem pohladit ličko, polibit, pohladit, ach, růžové lice, a požehnat vlasy,
vlasy, přejemné vlásky nad mladou šiji (člověk neni ze dřeva); polibit,
pohladit, vzit do rukou, pocelovat zbožně a opatrně? Hlouposti, mrzel se
Prokop; jsem starý osel; což bych se nestyděl – takové ditě, které na to ani
nemysli, ani nemysli – Dobrá; toto pokušeni vyřidil Prokop sám se sebou, ale
tak rychle to nešlo; mohli byste jej vidět, jak stoji před zrcadlem se rty do
krve rozkousanými a mračně, hořce vyzývá a měři svá léta.
Jdi spat, starý mládenče, jdi; právě sis ušetřil ostudu, až by se ti mladá,
hloupá holčička vysmála; i tenhle výsledek stoji za to. Jakžtakž odhodlán
stoupal Prokop nahoru do své ložnice; jen ho tižilo, že musi tadyhle projit
podle Ančina pokojičku. Šel po špičkách: snad už spi, ditě. A najednou stanul
se srdcem splašeně tlukoucim. Ty dveře… Ančiny… nejsou dovřeny. Nejsou vůbec
zavřeny a za nimi tma. Co je to? A tu slyšel uvnitř cosi jako zakvileni.
Něco ho chtělo vrhnout tam, do těch dveři; ale něco silnějšiho jej tryskem
srazilo se schodů dolů a ven do zahrady. Stál v temném houšti a tiskl ruku k
srdci, jež bouchalo jako na poplach. Kristepane, že jsem k ni nešel! Anči
jistě. kleči – polosvlečena – a pláče do peřinky, proč? to nevim; ale kdybych
byl vešel – nuže, co by se stalo? Nic; klekl bych vedle ni a prosil, aby
neplakala; pohladil, pohladil bych lehké vlasy, vlásky už rozpuštěné – Ó bože,
proč nechala otevřeno?
Ejhle, světlý stin vyklouzl z domu a miři do zahrady. Je to Anči, neni
svlečena ani nemá vlasy rozpuštěné, ale tiskne ruce k skránim, neboť na
palčivém čele ruce chladi; a štká ještě poslednim dozvukem pláče. Jde podle
Prokopa, jako by ho neviděla, ale dělá mu misto po svém pravém boku; neslyši,
nevidi, ale nebráni se, když ji bere pod paži a vede k lavičce. Prokop zrovna
sbirá nějaká slova chlácholeni (u všech všudy, o čem vlastně?), když náhle,
bác, má na rameni jeji hlavu, ještě jednou to křečovitě zapláče, a prostřed
vzlyků a smrkáni to odpovidá, že „to nic neni“; Prokop ji obejme rukou, jako
by ji byl rodným strýčkem, a nevěda si jinak rady bruči cosi, že je hodná a
strašně milá; načež vzlyky roztály v dlouhé vzdechy (citil kdesi v podpaži
jejich horouci vlhkost) a bylo dobře. Ó noci, nebešťanko, ty uleviš sevřené
hrudi a rozvážeš těžký jazyk; povzneseš, požehnáš, okřidliš tiše tlukouci
srdce, srdce teskné a zamlklé; žiznivým dáváš pit ze své nekonečnosti. V
kterémsi mizivém bodě prostoru, někde mezi Polárkou a Jižnim křižem, Centaurem
a Lyrou se děje dojatá věc; nějaký muž se zničehonic citi jediným ochráncem a
tátou tady té mokré tvářičky, hladi ji po temeni a povidá – co vlastně? Že je
tak šťasten, tak šťasten, že má tak rád, hrozně rád to štkajici a
posmrkávajici na svém rameni, že nikdy odtud neodejde a kdesi cosi.
„Já nevim, co mne to napadlo,“ vzlyká a vzdychá Anči. „Já… já jsem tak chtěla
s vámi ještě… mluvit…“
„A proč jste plakala?“ bručel Prokop.
„Protože jste tak dlouho nešel,“ zni překvapujici odpověď.
V Prokopovi něco slábne, vůle či co. „Vy… vy mne… máte ráda?“ vysouká ze sebe,
a hlas mu mutuje jako čtrnáctiletému. Hlava zarytá v jeho podpaži prudce a bez
výhrady kývá.
„Snad jsem… měl za vámi přijit,“ šeptá Prokop zdrcen. Hlava rozhodně vrti, že
ne. „Tady… je mi lip,“ vydechne Anči po chvili. „Tady je… tak krásně!“ Nikdo
snad nepochopi, co je tak krásného na drsném mužském kabátě, čpicim tabákem a
tělesnosti; ale Anči do něho zarývá tvář a za nic na světě by ji neobrátila k
hvězdičkám: tak je šťastna v tomto tmavém a kořenném úkrytu. Jeji vlasy
šimraji Prokopa pod nosem a voni přepěknou vůničkou. Prokop ji hladi schýlená
ramena, hladi jeji mladičkou šiji a hruď, a nalézá jenom chvějici se oddanost;
tu zapominaje na vše, prudký a brutálni popadne jeji hlavu a chce ji polibit
na mokré rty. A hle, Anči se divoce bráni, přimo tuhne hrůzou a jektá „ne ne
ne“; a už zas se zavrtala tváři do jeho kabátu a je citit, jak v ni buchá
poplašené srdce. A Prokop náhle pochopi, že měla být polibena poprvé.
Tu se zastyděl za sebe, zněžněl nesmirně a neodvážil se již ničeho vice než ji
hladit po vlasech: to se smi, to se smi; bože, vždyť je to docela ještě ditě a
úplný pitomec! A nyni již ani slova, ani slovička, jež by se jen dechem dotklo
neslýchaného dětstvi této bilé, veliké jalovičky; ani myšlenky, která by
chtěla hrubě vysvětlit zmatené pohnutky tohoto večera! Nevěděl věru, co
povidá; mělo to medvědi melodii a pražádnou syntaxi; týkalo se to střidavě
hvězd, lásky, boha, krásné noci a kterési opery, na jejiž jméno a děj si
Prokop živou moci nemohl vzpomenout, ale jejiž smyčce a hlasy v něm opojně
zvučely. Chvilemi se mu zdálo, že Anči usnula; i umlkal, až zase pocitil na
rameni blažený dech ospalé pozornosti.
Posléze se Anči vzpřimila, složila ruce v klin a zamyslela se. „Já ani nevim,
já ani nevim,“ povidá sladce, „mně se to ani nezdá možné.“
Po nebi světlou proužkou padá hvězda. Pustoryl voni, tady spi zavřené koule
pivoněk, jakýsi božský dech šelesti v korunách stromů. „Já bych tu tak chtěla
zůstat,“ šeptá Anči.
Ještě jednou bylo Prokopovi svésti němý boj s pokušenim. „Dobrou noc, Anči,“
dostal ze sebe. „Kdyby… kdyby se vrátil váš tati…“
Anči poslušně vstala. „Dobrou noc,“ řekla a váhala; tak stáli proti sobě a
nevěděli, co počit nebo skončit. Anči byla bledá, rozčileně mžikala a
vypadala, jako by se chtěla odhodlat k nějakému hrdinstvi; ale když Prokop –
už nadobro ztráceje hlavu – vztáhl ruku po jejim lokti, uhnula zbaběle a dala
se na ústup. Tak šli zahradni stezičkou dobře na metr od sebe; ale když došli
tam, co je ten nejčernějši stin, patrně ztratili směr či co, neboť Prokop
narazil zuby na nějaké čelo, polibil chvatně studený nos a našel svými ústy
rty zoufale semknuté; tu je rozryl hrubou přesilou, lámaje děvi šiji vypáčil
jektajici zuby a ukrutně libal horouci vláhu otevřených, sténajicich úst. Pak
už se mu vydrala z rukou, postavila se u zahradnich vrátek a vzlykala. Tu ji
běži Prokop těšit, hladi ji, rozsévá hubičky do vlasů a na ucho, na šij a na
záda, ale nepomáhá to; prosi, obraci k sobě mokré ličko, mokré oči, mokrou a
štkajici pusu, má ústa plná slanosti slz, celuje a hladi, a náhle vidi, že ona
se už ničemu nebráni, že se vzdala na milost a nemilost a snad pláče nad svou
hroznou porážkou. Nuže, všechno mužské rytiřstvi rázem procitá v Prokopovi;
poušti z náruči tu hromádku neštěsti a nesmirně dojat libá jenom zoufalé prsty
smáčené slzami a třesouci se. Tak, tak je to lépe; a tu zas ona složi tvář na
jeho hrubou pracku a celuje ji vlhkou, palčivou pusou a horkým dechem a
tlukotem zrosených řas, a nedá si ji vzit. A tu i on mžiká očima a taji dech,
aby nevzdychl mukou něhy.
Anči zvedla hlavu. „Dobrou noc,“ povidá tiše a nastavi zcela prostě rty.
Prokop se k nim skloni, vdechne na ně polibek, jak jemný jen umi, a už se ani
neodváži ji doprovodit dál; stoji a trne, a pak se klidi až na druhý konec
zahrady, kam nepronikne ani paprsek z jejiho okna: stoji a vypadá, jako by se
modlil. Nikoliv, neni to modlitba; je to jen nejkrásnějši noc života.


XIII.

Když svitalo, nemohl už vydržet doma: uminil si, že poběži natrhat květin; pak
je položi na práh Ančiny ložnice, a až ona vyskoči… Okřidlen radosti vykradl
se Prokop z domu málem už ve čtyři ráno. Lidi, je to krása; každý květ jiskři
jako oči (ona má mirné, veliké oči kravičky) (ona má tak dlouhé řasy) (teď
spi, má vička oblá a něžná jako vajička holubi) (bože, znát jeji sny) (má-li
ruce složeny na prsou, zvedaji se dechem; ale má-li je pod hlavou, tu jistě se
ji shrnul rukáv a je vidět loket, kolečko drsné a růžové) (onehdy řikala, že
spi dosud v železné dětské postýlce) (řikala, že v řijnu ji bude už
devatenáct) (má na krku mateřské znaminko) (jak jen je možno, že mne má ráda,
to je tak divné), vskutku, nic se nevyrovná kráse letniho jitra, ale Prokop se
divá do země, usmivá se, pokud to vůbec dovede, a putuje samými závorkami až k
řece. Tam objevi – ale u druhého břehu – poupata lekninů; tu zhrdaje všim
nebezpečim se svlékne, vrhne se do hustého slizu zátoky, pořeže si nohy o
nějakou zákeřnou ostřici a vraci se s náruči lekninů. Leknin je květina
poetická, ale poušti ošklivou vodu z tučných stvolů; i běži Prokop s poetickou
kořisti domů a přemýšli, z čeho by udělal na svou kytku pořádnou manžetu.
Vida, na lavičce před domem zapomněl doktor svou včerejši Političku. Prokop ji
chutě trhá, zhola přehližeje jakousi balkánskou mobilizaci, i to, že se houpe
nějaké ministerstvo a že někdo v černém rámečku zemřel, oplakáván ovšem celým
národem, a bali do toho mokré řapiky. Když pak se chtěl s pýchou podivat na
své dilo, hrklo v něm hrozně. Na manžetě z novin našel totiž jedno slovo. Bylo
to KRAKATIT.
Chvili na to strnule koukal nevěře prostě svým očim. Pak rozbalil se zimničným
spěchem noviny, rozsypal celou nádheru lekninů po zemi a našel konečně tento
inzerát: „KRAKATIT! Ing. P. ať udá svou adresu. Carson, hl. p.“ Nic vic.
Prokop si vytiral oči a četl znova: „Ing. P. ať udá svou adresu. Carson.“ Co u
všech všudy… Kdo je to, ten Carson? A jak vi, hrome, jak může vědět…
Popadesáté četl Prokop záhadný inzerát: „KRAKATIT! Ing. P. ať udá svou
adresu.“ A pak ještě „Carson, hl. p.“ Vic už se z toho vyčist nedalo.
Prokop seděl jako praštěný palici. Proč, proč jen jsem vzal ty proklaté noviny
do rukou, mihlo se mu zoufale hlavou. Jakže to tam je? „KRAKATIT! Ing. P. ať
udá svou adresu.“ Ing. P., to znamená Prokop; a Krakatit, to je právě to
zatracené misto, to zamžené misto tadyhle v mozku, ten těžký nádor, to, nač si
netroufal myslet, s čim chodil tluka hlavou do zdi, to, co už nemělo jména, –
jakže to tu stoji? „KRAKATIT!“ Prokop vytřeštil oči vnitřnim nárazem. Najednou
viděl… tu jistou olovnatou sůl, a rázem se mu rozvinul zmatený film paměti:
předlouhý, zuřivý zápas v laboratoři s tou těžkou, tupou, netečnou látkou;
slepé a sviňské pokusy, když selhávalo vše, žiravý ohmat, když vztekem ji
drobil a drtil v prstech, leptavá chuť na jazyku a čpavý dým, únava, již
usinal na židli, stud, zarytost a najednou – snad ve snu či jak – posledni
nápad, pokus paradoxni a zázračně jednoduchý, fyzikálni trik, jehož doposud
neužil. Viděl teninké bilé jehličky, jež konečně smetl do porcelánové krabice,
přesvědčen, že to zitra pěkně bouchne, až to zapáli v piskové jámě tam v
polich, kde byla jeho velmi protizákonná pokusná střelnice. Viděl svou
laboratorni lenošku, z niž čouhá koudel a dráty; tam tehdy se stočil jako
unavený pes a patrně usnul, neboť byla úplná tma, když za strašlivé exploze a
řinkotu skla se skácel i s lenoškou na zem. Pak přišla ta prudká bolest na
pravé ruce, neboť něco mu ji rozseklo; a potom – potom –
Prokop vraštil čelo bolestně prudkým rozpominánim. Pravda, tady je přes ruku
ta jizva. A potom jsem chtěl rozsvitit, ale žárovky byly prasklé. Pak jsem
hmatal potmě, co se to stalo; na stole plno střepů, a tuhle, kde jsem
pracoval, je zinkový plech pultu roztrhán, zkroucen a seškvařen a dubová
tabule rozštipnuta, jako by do ni sjel blesk. A pak jsem nahmátl tu
porcelánovou krabici, a byla celá, a tehdy teprve jsem se zděsil. Tohle, ano,
tohle tedy byl Krakatit. A potom –
Prokop už nevydržel sedět; překročil rozsypané lekniny a běhal po zahradě
hryže si rozčilenim prsty. Potom jsem někam běžel, přes pole, přes oranice,
několikrát jsem se svalil, bože, kde to vlastně bylo? Tady byla souvislost
vzpominek rozhodně porušena; nepochybná je jenom hrozná bolest pod čelnimi
kostmi a jakási okolnost s policii, potom jsem mluvil s Jirkou Tomšem a šli
jsme k němu, ne, jel jsem tam drožkou; byl jsem nemocen a on mne ošetřoval.
Jirka je hodný. Proboha, jak to bylo dál? Jirka Tomeš řekl, že jede sem, k
tátovi, ale nejel; hleďme, je to divné; zatim já jsem spal či co –
Tu krátce, jemně zazněl zvonek; šel jsem otevřit, a na prahu stála divka s
tváři zastřenou závojem.
Prokop zasténal a zakryl si obličej rukama. Ani nevěděl, že sedi na lavičce,
kde této noci mu bylo hladit a konejšit někoho jiného. „Bydli tady pan Tomeš?“
ptala se udýchaně; asi běžela, kožišinku měla zrosenou deštěm, a náhle, náhle
zvedla oči –
Prokop málem zavyl útrapou. Viděl ji, jako by to včera bylo: ruce, maličké
ruce v těsných rukavičkách, rosička dechu na hustém závoji, pohled čistý a
plný hoře; krásná, smutná a statečná. „Vy ho zachránite, že?“ Divá se na něho
zblizka vážnýma, matoucima očima a mačká nějaký baliček, nějakou silnou obálku
s pečetěmi, tiskne ji k prsoum rozčilenýma rukama a přemáhá se všemožně –
Prokopa jako by udeřilo do tváře. Kam jsem dal ten baliček? Ať kdokoliv je ta
divka: slibil jsem, že jej odevzdám Tomšovi. Ve své nemoci… jsem na všecko
zapomněl; nebo jsem… spiš… na to nechtěl myslet. Ale teď – Musi se teď nalézt,
toť jasno.
Skokem vyběhl do svého pokoje a rozhazoval zásuvky. Neni, neni, neni tu nikde.
Podvacáté přehazoval svých pět švestek, list po listu a kus po kuse; pak usedl
prostřed toho strašného nepořádku jako nad zřiceninami Jeruzaléma a ždimal si
čelo. Buď to vzal doktor nebo Anči nebo řehtavá Nanda; jinak to už neni možno.
Když toto nezvratně a detektivně zjistil, pocitil jakousi nevolnost nebo
zmatek a jako ve snu šel ke kamnům, sáhl hluboko dovnitř a vyňal… hledaný
baliček. Přitom se mu nejasně zdálo, že jej tam kdysi uložil sám, kdysi, když
ještě nebyl… docela zdráv; nějak se upominal, že v onom stavu mrákot a
blouzněni jej pořád musel mit v posteli a zuřil, když mu jej brali, a že se ho
přitom hrozně bál, neboť pojil se k němu mučivý neklid a stesk. Patrně jej tam
se lstivosti blázna ukryl sám před sebou, aby měl od něho pokoj. Čert se
ostatně vyznej v tajemstvich podvědomi; teď je to tady, ta silná převázaná
obálka s pěti pečetěmi, a na ni napsáno „Pro pana Jiřiho Tomše“. Snažil se
vyčist něco bližšiho z toho zralého a pronikavého pisma; ale misto toho viděl
zastřenou divku, jak ždimá obálku v třesoucich se prstech; teď, teď zase zvedá
oči… Přivoněl žiznivě k baličku: voněl slabounce a vzdáleně.
Položil jej na stůl a kroužil dokola. Hrozně by chtěl vědět, co je tam uvnitř,
pod pěti pečetěmi; zajisté je to těžké tajemstvi, nějaký poměr osudný a
palčivý. Řikala sice, že… že to čini pro někoho jiného; ale byla tak rozčilena
– Nicméně že by ona, ona mohla milovat Tomše: toť neuvěřitelno. Tomeš je
darebák, zjišťoval s temným vztekem; vždycky měl u ženských štěsti, ten cynik.
Dobrá, najdu ho a odevzdám mu tu zásilku lásky; a pak ať už je konec –
Najednou se mu rozbřesklo v hlavě: oč že je nějaká souvislost mezi Tomšem a
tim, jakpak se jmenuje, tim zatraceným Carsonem! Nikdo přece nevěděl a nevi o
Krakatitu; jen Tomeš Jirka to asi bůhvijak vytento, vyšpehoval – Nový obrázek
se sám sebou vsunul do zmateného filmu paměti: kterak tehdy on, Prokop, něco
brebentil v horečce (to je asi byt Tomšův), a on, Jirka, se nad nim skláni a
něco si zaznamenává v notesu. Určitě a svatosvatě to byl můj vzorec! vyžvanil
jsem to, vylákal to ze mne, ukradl mi to a prodal to asi tomu Carsonovi!
Prokop ustrnul nad takovou špatnosti. Ježiši, a tomu člověku padlo to děvče do
rukou! Je-li co na světě jasno, tož je to: že je nutno ji zachránit, stůj co
stůj!
Dobrá, nejprve musim nalézt Tomše, zloděje; dám mu tady ten zapečetěný baliček
a mimoto mu vyrazim zuby. Dále, mám ho jednoduše v hrsti: musi mně řici jméno
a pobyt toho děvčete a zavázat se – ne; žádné sliby od takového ničemy. Ale
půjdu k ni a řeknu ji vše. A potom zmizim navždy z jejich oči.
Uspokojen timto rytiřským řešenim stanul Prokop nad nešťastnou obálkou. Ach,
vědět jen to, jen to jediné, zda byla milenkou Tomšovou! Zase ji viděl, jak
stoji, sličná a silná; ani pohledem, ani mžiknutim tehdy nezavadila o hřišné
lože Tomšovo. Což bylo by možno tak lhát očima, tak lhát takovýma očima –
Tu syknuv utrpenim zlomil pečetě, přerval provázek a roztrhl obálku. Byly tam
bankovky a dopis.


XIV.

Zatim už doktor Tomeš sedi u snidaně funě a bruče po těžkém porodu; přitom
vrhá na Anči pohledy zkoumavé a nespokojené. Anči sedi jako zařezaná, neji,
nepije, nevěři prostě svým očim, že se Prokop ještě neukázal; nějak se ji
třesou rty, patrně užuž přijdou slzy. Tu vejde Prokop jaksi zbytečně rázně, je
bledý a nemůže si ani sednout, jak má naspěch; jen taktak že pozdravi,
přeběhne Anči očima, jako by ji ani neznal, a hned se ptá s popudlivou
netrpělivosti: „Kde je teď váš Jirka?“
Doktor se užasle otočil: „Cože?“
„Kde je teď váš syn,“ opakuje Prokop a sžehuje ho uminěnýma očima.
„Copak já vim?“ zavrči doktor. „Já o něm nechci vědět.“
„Je v Praze?“ naléhá Prokop zatinaje pěstě. Doktor mlči, ale něco v něm prudce
pracuje.
„Musim s nim mluvit,“ drti Prokop. „Musim, slyšite? Musim jet za nim, ještě
teď, hned! Kde je?“
Doktor něco přemilá čelistmi a jde ke dveřim.
„Kde je? Kde bydli?“
„Nevim,“ rozkřikl se doktor nesvým hlasem a práskl dveřmi.
Prokop se obrátil k Anči. Seděla strnulá a upirala velikánské oči nikam.
„Anči,“ drmolil Prokop zimničně, „musite mi řici, kde váš Jirka je. Já… já
musim za nim jet, vite? To je totiž… taková věc… Zkrátka jde tu o některé
věci… Já… Přečtěte si to,“ řekl honem a strkal ji před oči sežmolený kus
novin. Anči však viděla jenom jakési kruhy.
„To je můj vynález, rozumite?“ vysvětloval nervózně. „Hledaji mne, nějaký
Hanson – Kde je váš Jiři?“
„Nevime,“ šeptala Anči. „Už dva… už dva roky nám nepsal –“
„Ach,“ utrhl se Prokop a vztekle zmačkal noviny. Děvče zkamenělo, jen oči ji
rostly a rostly a mezi pootevřenými rty ji dýchalo něco zmateně žalostného.
Prokop by se nejraději propadl. „Anči,“ rozřizl posléze mučivé ticho, „já se
vrátim. Já… za několik dni… Tohle je totiž vážná věc. Člověk… musi konečně
myslet… na své povoláni. A má, vite, jisté… jisté povinnosti…“ (Bože, ten to
zkopal!) „Pochopte, že… Já prostě musim,“ křikl najednou. „Raději bych zemřel
než nejel, rozumite?“
Anči jen maličko kývla hlavou. Ach, kdyby byla pokývla vic, byla by ji, bum,
hlava klesla na stůl v hlasitém pláči; ale takto se ji jen zalily oči a to
ostatni mohla ještě spolknout.
„Anči,“ bručel Prokop v zoufalých rozpacich a zachraňoval se ke dveřim, „ani
se nebudu loučit; hleďte, nestoji to za to; za týden, za měsic tu budu zas…
Nu, hleďte –“ Ani se na ni nemohl podivat; seděla jako tupá, s plihými rameny,
očima nevidomýma a nosem, jenž nabihal vnitřnim pláčem; žalno ji vidět.
„Anči,“ pokusil se znovu a zas toho nechal. Nekonečná se mu zdála ta posledni
chvilka ve dveřich; citil, že by měl něco ještě řici nebo něco udělat, ale
misto všeho vysoukal ze sebe jakési „na shledanou“ a trapně se vytratil.
Jako zloděj, po špičkách, opouštěl dům. Zaváhal ještě u dveři, za nimiž nechal
Anči. Bylo tam uvnitř ticho, jež ho sevřelo nevýslovnou trýzni. V domovnich
dveřich se zarazil jako ten, kdo na něco zapomněl, a vracel se po špičkách do
kuchyně; bohudik, Nanda tam nebyla, i zamiřil k poličce. „… ATIT!… adresu.
Carson, hl. p.“ To stálo na kuse novin, jež veselá Nanda cipatě nastřihala na
poličku. Tu tam pro ni položil plnou hrst peněz za všechnu jeji službu, a
zmizel.
Prokope, Prokope, tak nejedná člověk, který se chce za týden vrátit!
„To to ’de, to to ’de,“ skanduje vlak; ale lidské netrpělivosti už ani nestači
jeho lomozný, drkotavý spěch; lidská netrpělivost se zoufale vrti, pořád
vytahuje hodinky a kope kolem sebe v posunčině nervózy. Jedna, dvě, tři,
čtyři: to jsou telegrafni tyče. Stromy, pole, stromy, strážni domek, stromy,
břeh, břeh, plot a pole. Jedenáct hodin sedmnáct. Řepné pole, ženské v modrých
zástěrách, dům, psisko, jež si vzalo do hlavy předhonit vlak, pole, pole,
pole. Jedenáct hodin sedmnáct. Bože, což ten čas stoji? Raději na to nemyslet;
zavřit oči a počitat do tisice; řikat si otčenáš nebo chemické vzorce. „To to
’de, to to ’de!“ Jedenáct hodin osmnáct. Bože, co počit?
Prokop se vytrhl. „KRAKATIT,“ padlo mu odněkud do oči, až se lekl. Kde je to?
Aha, to soused naproti čte noviny, a na zadni straně je zas ten inzerát.
„KRAKATIT! Ing. P. ať udá svou adresu. Carson, hl. p.“ Ať mi dá pokoj ten pan
Carson, mysli si Ing. P.; nicméně na nejbližši stanici sháni všechny noviny,
co jich plodi požehnaná vlast. Bylo to ve všech, a ve všech stejně: „KRAKATIT!
Ing. P. ať udá…“ U všech rohatých, divi se Ing. P., to je po mně nějaká
sháňka! Nač mne potřebuji, když jim to už Tomeš prodal?
Ale misto aby řešil tuto podstatnou záhadu, podival se, neni-li pozorován, a
vytáhl snad už posté onu povědomou roztrženou obálku. S všelijakými okolky,
jež mu působily silnou rozkoš odkladu, po různém potěžkáváni a otáčeni vyňal z
jejiho nitra napěchovaného penězi zas onen dopis, onen drahocenný dopis psaný
pismem zralým a energickým. „Pane Tomši,“ četl znovu dychtivě, „toto nedělám
pro Vás, ale pro svou sestru. Šili od té chvile, kdy jste ji poslal svůj
strašlivý dopis. Chtěla prodat všechny své šaty a šperky, aby Vám poslala
penize; musela jsem ji vši moci zdržet, aby neprovedla něco, co by pak nemohla
utajit před svým mužem. Co Vám posilám, jsou mé vlastni penize; vim, že je
přijmete bez zbytečných rozpaků, a prosim, abyste mi neděkoval. L.“ K tomu
chvatně připsáno: „Pro živého boha, nechte už M. na pokoji! Dala vše, co má;
dala vám vice, než bylo jeji; trnu hrůzou, co bude, vyjde-li to najevo. Prosim
Vás pro vše na světě, nezneuživejte svého strašného vlivu na ni! Bylo by
přiliš podlé, kdybyste –“ Zbytek věty byl přeškrtán, a následovalo ještě jedno
postskriptum: „Poděkujte za mne svému přiteli, který vám toto doruči. Byl ke
mně nezapomenutelně laskav ve chvili, kdy jsem nejvic potřebovala lidské
pomoci.“
Prokopa zrovna drtila přemira těžkého štěsti. Nebyla tedy Tomšova! A nikoho
neměla, o koho by se mohla opřit! Statečné děvče a ženerózni, čtyřicet tisic
sehnala, aby zachránila svou sestru před… patrně před nějakou ostudou! Těchto
čtyřicet tisic je z banky; jsou ještě opatřeny páskou, jak je vyzvedla, – u
čerta, proč na té pásce neni jméno banky? A dalšich deset tisic vymetla kdovi
kde a jak; neboť jsou mezi nimi drobné bankovky, ubohé špinavé pětikoruny,
zchátralé hadřiky z bůhvijakých rukou, zmuchlané penize ženských tobolek;
bože, co rozčilujici sháňky ji muselo stát, než sehnala tuhle hrst peněz! „Byl
ke mně nezapomenutelně laskav…“ V tu chvili by Prokop rozmlátil Tomše, bidnika
nesvědomitého a mrzkého; ale zároveň mu vše jaksi odpouštěl… neboť nebyla jeho
milenkou! Nebyla Tomšova: to přece přinejmenšim znamená, že je to svatosvatě
anděl nejčistši a nejdokonalejši; a tu mu bylo, jako by se nějaká neznámá rána
zacelovala v jeho srdci prudce a zrovna bolestně.
Ano, nalézt ji; musim ji předevšim… předevšim vrátit tyhle jeji penize (ani se
nestyděl za záminku tak průhlednou) a řici ji, že… že zkrátka… že může na mne
počitat, stran Tomše a vůbec… „Byl ke mně nezapomenutelně laskav.“ Prokop až
sepjal ruce: bože, co vše jsem odhodlán učinit, abych si zasloužil tahle slova
–
Ó-ó, jak ten vlak pomalu jede!


XV.

Jakmile přistál v Praze, hnal se do Tomšova bytu. U Muzea se zarazil:
Zatraceně, kde vlastně Tomeš bydli? Šel jsem, ano, šel jsem tehdy, otřásán
zimnici, na dráhu podle Muzea; ale odkud? Z které ulice? Zuře a klna bloudil
Prokop kolem Muzea, hledaje pravděpodobný směr; nenašel nic, i pustil se na
policejni ředitelstvi, odděleni dotazy. Jiři Tomeš, listoval zaprášený oficiál
v knihách, inženýr Tomeš Jiři, to je prosim na Smichově, ulice ta a ta. Byla
to patrně stará adresa. Nicméně letěl Prokop na Smichov do ulice té a té.
Domovnik kroutil hlavou, když se ho ptal po Jiřim Tomši. Toť že tu ten jistý
bydlel, ale už vic než před rokem; kde bydli teď, nevi nikdo; ostatně nechal
tu po sobě všelijaké dluhy –
Zdrcen zalezl Prokop do nějaké kavárny. „KRAKATIT,“ padlo mu do oči na zadni
stránce novin. „Ing. P. ať udá svou adresu. Carson, hl. p.“ Nuže, jistě vi o
Tomšovi ten jistý Carson: už to tak je, že je mezi nimi jakási souvislost.
Dobře tedy, tady je listek: „Carson, hlavni pošta. Přijďte zitra v poledne do
kavárny té a té. Ing. Prokop.“ Jen to napsal, a už ho napadla nová myšlenka:
totiž dluhy. Sebral se a utikal k soudu, odděleni pro pohledávky. A hle, zde
tuze dobře znali adresu pana Tomše: celá hromada nedoručitelných obsilek,
soudnich upominek a tak dále; ale zdá se, že ten jistý Tomeš Jiři zmizel beze
stopy a zejména bez udáni nynějšiho pobytu. Přesto se vrhl Prokop za novou
adresou. Domovnice, osvěžena slušnou odměnou, hned poznala Prokopa, že tu
jednou přespal; i spustila přeochotně, že pan inženýr Tomeš je šejdiř a
darebák; dále, že zrovna tehdy v noci odejel a nechal tu jeho, pána, ji
domovnici na starost; že ona třikrát přišla nahoru se optat, potřebuje-li
čeho, ale že on, pán, jen pořád spal a mluvil ze spani, a pak odpoledne
zmizel. A kdeže jářku je pan Tomeš? Inu, tenkrát tedy odejel a nechal tu
všecko stát a ležet a ještě se nevrátil; jen poslal penize odněkud z ciziny,
ale je už zas dlužen za nový kvartál. Prý mu prodaji v soudni dražbě svršky,
nepřihlási-li se do konce měsice. Nadělal prý dluhů asi za čtvrt miliónu, nu,
a utekl. Prokop podrobil výtečnou ženu křižovému výslechu: je-li ji co známo o
nějaké paničce, která prý měla s panem Tomšem poměr, kdo sem chodival a
podobně. Domovnice nevěděla dohromady nic; co se týče ženských, chodilo jich
sem asi dvacet, takové se závojem na hubě, i jinači, našminkované a všelijaké;
řikám vám, byla to ostuda po celé ulici. Prokop ji tedy zaplatil dlužný
kvartál ze svého, a za to dostal klič od Tomšova bytu.
Bylo tam citit jakousi ztuchlinu bytu dlouho neuživaného a skoro odumřelého.
Teprve teď si Prokop všiml divné nádhery mista, kde zápasil s horečkou. Všude
perské koberce a bucharské či jaké polštáře, na stěnách nahoty a gobeliny,
orient a klubovky, toaletni stůl subrety a koupelna prvotřidni prostitutky,
směs přepychu a sprostoty, smilstva a lajdáctvi. A zde, uprostřed všech těch
svinstev, stála tehdy ona tisknouc k prsoum baliček; upirá čisté, hořeplné oči
k zemi, a teď, bože můj, je zvedá v statečné a ryzi důvěře… Proboha, co si
musela o mně myslet, když mne potkala v tomhle pelechu! Musim ji nalézt,
aspoň… aspoň proto, abych ji vrátil jeji penize; i kdyby nešlo o nic jiného, o
nic většiho… Je naprosto nutno ji nalézt!
To se lehko řekne; ale jak? Prokop si hryzl rty v úporném přemýšleni. Kdybych
aspoň věděl, kde hledat Jirku, řikal si; konečně padl na hromadu
korespondence, která tu čekala na Tomše. Většinou to byly, jak zřejmo,
obchodni dopisy, patrně samé účty. Pak několik soukromých listů, jež obracel a
očichával váhaje. Možná, možná že v některém je nějaká stopa, adresa nebo
cokoliv, co by jej vedlo za nim… nebo za ni! Hrdinně odolával pokušeni otevřit
aspoň jeden dopis; ale byl tu tak sám za kalnými okny, a všechno tu zrovna
vydechuje nějakou mrzkou a tajnou hanebnost. A tu, rychle polykaje všechny
rozpaky, trhal Prokop obálky a četl list po listu. Účet za perské koberce, za
květiny, za tři psaci stroje; velmi důtklivé upominky, aby vyúčtoval zboži
dané do komise; jakési záhadné transakce týkajici se koni, cizich valut a
dvaceti vagónů kulatého dřivi kdesi u Kremnice. Prokop nevěřil svým očim;
podle těchto papirů byl Tomeš buď pašerák ve velkém, nebo agent s perskými
koberci, nebo valutni spekulant, nejspiš ale všecko troje; vedle toho
obchodoval s automobily, vývoznimi certifikáty, kancelářským nábytkem a patrně
všim možným. V jednom dopise je řeč o jakýchsi dvou miliónech, zatimco druhý,
usmolený a psaný tužkou, hrozi žalobou pro vylákanou starožitnost (staro bili
ring podědovi). Úhrnem to vypadalo na celou řadu podvodů, zpronevěru,
falšováni vývoznich listin a jiné paragrafy, pokud tomu Prokop vůbec rozuměl;
je prostě úžasné, že to dosud neprasklo. Jeden advokát stručně sděloval, že
firma ta a ta podala na pana Tomše trestni oznámeni pro zpronevěru čtyřiceti
tisic korun; ať se pan Tomeš ve vlastnim zájmu dostavi do kanceláře atd.
Prokop se zhrozil; až tohle propukne, kam až střikne hanba těchto nevýslovných
špinavosti? Vzpomněl si na tichý dům v Týnici a na tu, jež tady stála, zoufale
odhodlána zachránit toho člověka. I sebral celou tu obchodni korespondenci
firmy Tomeš a běžel ji spálit v kamnech. Bylo tam plno zuhelnatělých papirů.
Patrně sám Tomeš týmž způsobem zjednodušoval poměry, než ujel.
Dobrá, to byly obchodni papiry; zbývá ještě několik zcela soukromých dopisů
jemných anebo uboze umazaných, a nad nimi Prokop váhá znovu v palčivém studu.
U všech všudy, co jiného mohu udělat? Dusil se sice hanbou, ale trhal chvatně
dalši obálky. Zde pár lepkavých důvěrnosti, miláčku, vzpominám, nová schůzka a
dost. Nějaká Anna Chválová s dojemnými pravopisnými chybami sděluje, že
Jeniček zemřel „na vyrážku“. Tady kdosi upozorňuje, že vi „něco, co by
zajimalo na policii“, ale že by dal se sebou mluvit, a že pan Tomeš „jistě vi,
jakou cenu má taková dikrétnost“; k tomu narážka na „ten dům v Břet. ul., kde
pan Tomeš vi, koho má hledat, aby to zůstalo pod pokličkou“. Zas něco o
jakémsi obchodě, o prodaných dluhopisech, podepsáno „Tvá Růža“. Táž Růža
sděluje, že jeji muž odejel. Táž ruka jako na čisle 1, dopis z lázni: nic než
kravské sentimentality, rozvalená erotika zralé a tučné blondýny, ocukrovaná
samými ach, výčitkami a krasocity, a k tomu „drahouši“ a „divochu“ a podobné
ohavnosti; Prokopovi se z toho obracel žaludek. Německý dopis, pismeno „G.“,
valutni obchod, prodej ty papiry, erwarte Dich, P. S. Achtung, K. aus Hamburg
eingetroffen. Táž „G“, uražený a chvatný dopis, mrazivé vykáni, vraťte těch
deset tisic, sonst wird K. dahinterkommen, hm. Prokop se k smrti styděl vnikat
do navoněného přitmi těchto spodničkových záležitosti, ale teď už se nelze
zastavit. Konečně čtyři dopisy signované M.: listy slzavé, horečné a trapné, z
nichž dýchala těžká a vášnivá historie nějaké slepé, dusné, otrocké lásky.
Byly tu úpěnlivé prosby, plazeni v prachu, zoufalé inkriminace, strašné
sebenabizeni a ještě strašnějši sebetrýzeň; zminka o dětech, o muži, nabidka
nové půjčky, nejasné narážky a přespřiliš jasná zbědovanost ženy usmýkané
láskou. Tohle tedy je jeji sestra! Prokopovi bylo, jako by viděl před sebou
výsměšná a krutá ústa, pichlavé oči, panskou a zpupnou, sebevědomou,
sebejistou hlavu Tomšovu: byl by do ni udeřil pěsti. Avšak nic platno: tato
žalostně obnažená láska ženina mu neřekla toho nejmenšiho o… o té druhé, jež
dosud nemá pro něho jména a kterou jest mu hledati.
Nezbývá tedy než nalézti Tomše.


XVI.

Nalézti Tomše: lidi, jako by tohle bylo tak lehké! Prokop provedl znovu
generálni prohlidku celého bytu; řádil ve všech skřinich i zásuvkách,
nenacházeje krom prašiviny starých účtů, milostných dopisů, fotografii a
jiného mládeneckého neřádu nic, co by jakkoliv osvětlilo Tomšovu záležitost.
Nu ovšem, má-li někdo tolik másla na hlavě, dovede už důkladně zmizet!
Znovu vyslechl domovnici; zvěděl sice záplavu všelijakých historek, ale nic,
co by ho uvedlo na stopu. Šel na pana domáciho, odkudže poslal Tomeš ty penize
z ciziny. Bylo mu vyslechnouti celé kázáni nevrlého a dosti nepřijemného
stařika, který trpěl všemi možnými katary a nadával na zkaženost dnešnich
mladých pánů. Za cenu nadlidské trpělivosti zvěděl konečně jen to, že řečené
penize neposlal pan Tomeš, nýbrž jakýsi směnárnik na konto Drážďanské banky
„auf Befehl des Herrn Tomes“. Rozběhl se k advokátovi, který měl, jak výše
sděleno, jistou rozpracovanou záležitost s pohřešovaným. Advokát se zbytečně
halil v profesionálni tajemstvi; ale když Prokop hloupě vybleptl, že má panu
Tomšovi doručit nějaké penize, oživl advokát a žádal, aby je složil do jeho
rukou; i dalo Prokopovi mnoho práce, aby se z toho vymotal. To jej poučilo,
aby nepátral po Tomšovi u lidi, kteři s nim měli jakékoliv obchodni řizeni.
Na nejbližšim rohu zůstal stát: Co teď? Zbývá jen Carson. Neznámá veličina,
jež o něčem vi a něco chce. Dobrá, tedy Carson. Prokop nahmatal v kapse
listek, jejž zapomněl poslat, a rozběhl se na poštu.
Ale u poštovni schránky mu klesla ruka. Carson, Carson, – ano, ale tomu jde o
cosi, co… také neni maličkost. U čerta, ten chlap něco vi o Krakatitu a má za
lubem – inu bůhsámvi co. Proč vůbec mne sháni? Patrně Tomeš nevi vše; nebo
nechtěl vše prodat; nebo si klade nestydaté podminky, a já osel mám být
lacinějši. Tak asi to je; ale (a tu se Prokop poprvé zhrozil dosahu věci) což
je vůbec možno vyrukovat s Krakatitem ven? Předevšim by se muselo u sta hromů
pořádně vědět, co to dělá a k čemu je to dobré, jak se s tim zacházi a kdesi
cosi; Krakatit, holenku, to neni šňupavý tabák nebo zasýpaci prášek pro děti.
A za druhé, za druhé snad je to vůbec… přiliš silný tabák pro tento svět.
Představme si, co by se s tim mohlo natropit… řekněme ve válce. Prokopovi
začalo být z celé věci až úzko. Který čert sem nese toho zatraceného Carsona?
Prokristapána, musi se za každou cenu zabránit –
Prokop se chytil za hlavu tak, až se zastavovali lidé. Vždyť, proboha,
zanechal tam nahoře, ve svém laboratornim baráku u Hybšmonky, v porcelánové
dózi skoro patnáct deka Krakatitu! tedy zrovna dost, aby to mohlo rozmlátit já
nevim co, celé hejtmanstvi! Přimo ztuhl úděsem, a pak se pustil tryskem k
tramvaji: jako by teď ještě záleželo na těch několika minutách! Trpěl pekelně,
než se tramvaj dovlekla na druhý břeh; pak ztekl cvalem košiřskou stráň a
uháněl k svému baráku. Bylo zamčeno, a Prokop marně hledal po kapsách něco
podobného kliči; i rozhlédl se soumrakem jako zloděj, rozbil okenni tabulku,
otevřel závory a vlezl oknem domů.
Jen rozškrtl sirku a už viděl, že je co nejmetodičtěji vyloupen. Totiž peřiny
a takové krámy tu zůstaly; ale všechny lahvičky, kelimky a zkumavky, crushery,
hmoždiře, misky a přistroje, lžice a váhy, celá jeho primitivni chemická
kuchyně, vše, co obsahovalo jeho pokusné hmoty, vše, na čem mohla být jen
usazenina či nálet nějaké chemikálie, vše zmizelo. Pryč je porcelánová dóza s
Krakatitem. Vytrhl zásuvku stolu: veškeré jeho zápisky a záznamy, každý
počmáraný útržek papiru, sebemenši památka dvanáctileté pokusné práce, vše
bylo to tam. Dokonce i s podlahy byly seškrabány skvrny a stopy jeho práce, a
jeho pracovni hazuka, ta stará, potřisněná, lučebninami zrovna zkornatělá
halena byla pryč. Hrdlo se mu sevřelo návalem pláče. Tohle tedy, tohle mi
udělali!
Dlouho do noci seděl na svém vojanském kavalci a strnule ziral do vypleněné
pracovny. Chvilemi se utěšoval, že si snad vzpomene na vše, co během dvanácti
let psal do svých poznámek; ale když namátkou vybral některý experiment a
chtěl si jej popaměti v hlavě zopakovat, nemohl z mista přes úsili
nejzoufalejši; tu hryzal si rozbité prsty a sténal.
Náhle se probudil zarachocenim kliče. Je čiročiré ráno a do pracovny jakoby
nic vcházi cizi člověk a rovnou ke stolu. Tam teď sedi s kloboukem na hlavě,
bruči a pečlivě oškrabuje na stole zinek. Prokop se posadil na kavalci a
vyhrkl: „Člověče, co tu chcete?“
Člověk se obrátil nesmirně překvapen a beze slova koukal na Prokopa.
„Co tu chcete?“ opakoval Prokop podrážděně. Chlapik nic; ještě si ke všemu
nasadil skla a brejlil na Prokopa s ohromným zájmem.
Prokop zaskřipal zuby, neboť se v něm už vařila hrozná nadávka. Ale tu
človiček vlidně zazářil, vymrštil se ze židle a vypadal najednou, jako by
radostně vrtěl ocasem. „Carson,“ řekl honem a spustil po německu: „Bože, to
jsem rád, že jste se vrátil! Četl jste můj inzerát?“
„Četl,“ odpovidal Prokop tvrdou a centovou němčinou. „A co tu hledáte?“
„Vás,“ povidal host báječně potěšen. „Vite, že vás honim už po šest neděl?
Všecky noviny, všecky detektivni ústavy, haha, pane! co tomu řikáte? Hergot,
to mám radost! Jak se vede? Zdráv?“
„Proč jste mne vykradl?“ ptal se Prokop mračně.
„Jak prosim?“
„Proč jste mne vykradl!“
„Ale pane inženýre,“ sypal blažený mužik pranic nedotčen. „Co to řikáte?
Vykradl! Carson! To je ohromné, hahaha!“
„Vykradl,“ opakoval Prokop uminěně.
„Tatata,“ protestoval pan Carson. „Schoval. Všecko uložil. Pane, jak jste to
tu mohl nechat ležet? Někdo vám to mohl ukrást, ne? Co? Ovšem že mohl, pane.
Ukrást, prodat, publikovat, že? To se rozumi, pane. Mohl. Ale já jsem vám to
schoval, rozumite? Čestné slovo. Proto jsem vás hledal. Všecko vrátim. Všecko.
To jest,“ dodával váhavě, a pod zářivými brýlemi to ocelově utkvělo. „Totiž…
budete-li rozumný. Vždyť my se dohodneme, co?“ dodával rychle. „Musite se
habilitovat. Ohromná kariéra. Atomové výbuchy, rozbiti prvků, báječné věci.
Věda, předevšim věda! My se dohodneme, že? Čestné slovo, dostanete všecko
zpátky. Tak.“
Prokop mlčel, ohromen timto přivalem slov, zatimco pan Carson házel rukama a
kroužil po pracovně náramně rozradován. „Všecko, všecko jsem vám schoval,“
mlel jaře. „Každou třisku z podlahy. Roztřiděno, uloženo, s vinětou, pod
pečeti. Haha, mohl jsem se všim ujet, že? Ale já jsem poctivec, pane. Všecko
vrátim. Musime se domluvit. Ptejte se na Carsona. Rodilý Dán, dřive docent v
Kodani. Taky jsem dělal vědu, božskou vědu. Jak to řekl Schiller? Dem einen
ist sie – ist sie – Už nevim, ale je to něco o vědě; švanda, že? Nu, ještě mi
neděkujte. Až později. Tak.“
Prokopovi sice ani nenapadlo děkovat, ale pan Carson zářil jako šťastný
dobrodinec. „Na vašem mistě,“ drmolil nadšeně, „na vašem mistě bych si zařidil
–“
„Kde je teď Tomeš?“ pře rušil ho Prokop.
Pan Carson vysunul zkoumavý pohled. „Nu,“ vycedil obezřele, „my o něm vime. Eh
co,“ obrátil hbitě. „Zařidite si… zařidite si největši laboratoř světa.
Nejlepši přistroje. Světový ústav destruktivni chemie. Máte pravdu, katedra je
hloupost. Odřikávat staré věci, no ne? Škoda času. Zařiďte si to po
amerikánsku. Ohromný ústav, brigáda asistentů, všechno, co chcete. A o penize
se nemusite starat. Punktum. Kde snidáte? Já bych vás ohromně rád pozval.“
„Co vlastně chcete?“ vydralo se z Prokopa.
Tu sedl pan Carson na kavalec vedle něho, vzal ho nesmirně vřele za ruku a
povidal najednou docela jiným hlasem: „Jen se neplašte. Můžete vydělat celou
hromadu miliónů.“


XVII.

Prokop s úžasem vzhlédl na pana Carsona. Kupodivu, teď už to nebyla ta
mopsliči tvář lesknouci se blahem; všecko zvážnělo a zpřisnělo na horlivém
mužikovi, oči zapadly pod těžkými vičky a jen chvilemi se zařizly matným
břitem. „Nebuďte blázen,“ pronesl důrazně. „Prodejte nám Krakatit, a je to.“
„Jak vůbec vite…,“ zahučel Prokop.
„Všecko vám povim. Čestné slovo, všecko. Byl u nás pan Tomeš. Přinesl patnáct
deka a formuli. Bohužel nepřinesl taky postup. Ani on, ani naši chemikové
dosud na to nepřišli, jak to dostat dohromady. Nějaký trik, že?“
„Ano.“
„Hm. Třeba se na to přijde i bez vás.“
„Nepřijde.“
„Pan Tomeš… něco o tom vi, ale dělá s tim tajnosti. Pracoval u nás při
zamčených dveřich. Je hrozně špatný chemik, ale je chytřejši než vy. Aspoň
nežvani o tom, co vi. Proč jste mu to řikal? Neumi nic, jen pumpovat zálohy.
Měl jste přijit sám.“
„Já ho k vám neposlal,“ bručel Prokop.
„Aha,“ spustil pan Carson, „ohromně zajimavé. K nám přišel ten váš pan Tomeš
–“
„Kam vlastně?“
„K nám. Továrny v Balttin. Znáte?“
„Neznám.“
„Zahranični podnik. Báječně moderni. Pokusná laboratoř s novými třaskavinami.
Děláme keranit, metylnitrát, žlutý prach a takové věci. Hlavně armádni, vite?
Tajné patenty. Vy nám prodáte Krakatit, co?“
„Ne. A Tomeš je tam u vás?“
„Aha, pan Tomeš; počkejte, to je švanda. Tak tedy k nám přijde a povidá: Tohle
je odkaz mého přitele, geniálniho chemika Prokopa. Umřel mně v náruči a
poslednim dechem, haha, mně svěřil, hahaha, ohromné, co?“
Prokop se jen křivě usmál. „A je Tomeš dosud… v Balttinu?“
„Počkejte. To se rozumi, nejdřiv jsme ho zadrželi… jako špióna. K nám jich
chodi spousta, vite? A ten prášek, Krakatit, jsme dali přezkoušet.“
„Výsledek?“
Pan Carson zvedl ruce k nebi. „Bá-báječný!“
„Jaká je detonačni rychlost? Jaké jste našli Q? Jaké t? Čisla!“
Pan Carson spustil ruce, až to pláclo, a vyvalil užasle oči: „Člověče, jakápak
čisla! Prvni pokus… padesát procent škrobu… a crusher gauge se roztrhl na
střepy; jeden inženýr a dva laboranti… taky na střepy. Věřil byste? Pokus
čislo dvě: Trauzlův blok, devadesát procent vazeliny, a bum! sebralo to
střechu a jeden dělnik zabit; z bloku zůstal jen škvarek. Tak se do toho
pustili vojáci; smáli se nám… že to umime jako… vesnický kovář. Dali jsme jim
trochu; nacpali to do dělové hlavně, s rozemletým dřevěným uhlim. Ohromný
výsledek. Sedm kanonýrů i se setnikem… Jednu nohu pak našli tři kilometry
daleko. Za dva dny dvanáct mrtvých, tu máte čisla, haha! Báječné, co?“
Prokop chtěl něco řici, ale spolkl to. Dvanáct mrtvých za dva dny, u čerta!
Pan Carson si hladil kolena a zářil. „Třeti den jsme si dali pokoj. Vite, dělá
to špatný dojem, když… je mnoho takových připadů. Dali jsme jen flegmatizovat
Krakatit… asi tři decigramy… v glycerinu a podobně. Prase laborant nechal asi
špetku volně ležet, a v noci, když byla laboratoř zamčena –“
„– to vybuchlo,“ vyhrkl Prokop.
„Ano. V deset třicet pět. Laboratoř byla na třisky, krom toho asi dva objekty…
Vzalo to s sebou nějaké tři tuny metylnitrátu Probst – Zkrátka asi šedesát
mrtvých, no. To se vi, náramné vyšetřováni a kdesi cosi. Ukázalo se, že nikdo
v laboratoři nebyl, že to muselo patrně vybuchnout –“
„– samo od sebe,“ doplnil Prokop sotva dýchaje.
„Ano. Vám také?“
Prokop ponuře kývl.
„Tak vidite,“ řekl pan Carson rychle. „Neni to k ničemu. Tuze nebezpečná věc.
Prodejte nám to, a je to, máte to z krku. Co byste s tim dělal?“
„A co byste s tim dělali vy?“ vycedil Prokop.
„My už… my jsme na to zařizeni. Božinku, pár těch mrtvých – Ale vás by byla
škoda.“
„Ale Krakatit v porcelánové krabici nevybuchl,“ minil Prokop úporně
přemýšleje.
„Chválabohu ne. Kdepak!“
„A bylo to v noci,“ přemýšlel Prokop dál.
„V deset třicet pět. Přesně.“
„A… ta špetka Krakatitu ležela na zinkovém… na kovovém plechu,“ tvrdil Prokop
dále.
„Ten na to nemá vliv,“ vybleptl mužik trochu zmaten, kousl se do rtu a jal se
přecházet po laboratoři. „Bylo to… bylo to asi jen okysličováni,“ zamlouval to
po chvili. „Nějaký chemický proces. Směs s glycerinem taky nevybuchla.“
„Protože neni vodivá,“ zamumlal Prokop. „Nebo nemůže ionizovat, já nevim.“
Pan Carson se nad nim zastavil s rukama na zádech. „Vy jste moc chytrý,“ řekl
uznale. „Musite dostat mnoho peněz. Tady je vás škoda.“
„Je Tomeš pořád v Balttinu?“ ptal se Prokop, vši silou se přemáhaje, aby to
vyznělo lhostejně.
Panu Carsonovi to nějak blýsklo pod brejlemi. „Máme ho na očich,“ řekl
vyhýbavě. „Sem se už jistě nevráti. Přijeďte k nám… třeba ho najdete, když –
tak – tuze – chcete,“ slabikoval důrazně.
„Kde je?“ opakoval Prokop tvrdohlavě, dávaje najevo, že jinak nemluvi.
Pan Carson zamával rukama jako pták. „No, utekl,“ dodával na Prokopův
nechápavý pohled.
„Utekl?“
„Vypařil se. Špatně hlidán, tuze chytrý. Zavázal se, že sestroji celý
Krakatit. Zkoušel to… asi šest neděl. Stál nás hrozné penize. Pak zmizel,
lump. Nevěděl si asi rady, co? Neumi nic.“
„A kde je?“
Pan Carson se naklonil k Prokopovi. „Lump. Teď nabizi Krakatit jinému státu.
Přitom jim přinesl taky náš metylnitrát, ten taškář. Sedli mu na lep, teď dělá
u nich.“
„Kde?“
„Nesmim řici. Na mou čest, nesmim. A když nám pláchl, jel jsem, haha,
navštivit váš hrob. Pieta, co? Geniálni chemik, a nikdo ho tady nezná. To byla
práce, člověče. Musel jsem inzerovat jako blbec. To se vi, že si toho všimli…
ti druzi, vite? Rozumite mi?“
„Ne.“
„Tak se pojďte podivat,“ řekl pan Carson čile a zamiřil k protějši stěně.
„Tady,“ řekl a ťukal na prkno.
„Co je?“
„Kulka. Někdo tu byl.“
„A kdo po něm střelil?“
„No já přece. Kdybyste byl sem lezl… oknem… takhle před čtrnácti dny, byl by
vás třeba někdo… moc šeredně vzal na mušku.“
„Kdo?“
„To je jedno, ten nebo onen stát. Tady si, holenku, podávaly dvéře tuze velké
mocnosti. A vy jste zatim někde, haha, chytal ryby, co? Báječný chlapik! Ale
poslyšte, drahoušku,“ řekl najednou starostlivě, „neračte raději chodit sám.
Nikdy a nikde, rozumite?“
„Nesmysl!“
„Počkejte. Žádný granátnik. Velmi nenápadni lidé. Dnes se to dělá… náramně
diskrétně.“ Pan Carson se zastavil u okna a bubnoval na sklo. „Nemáte poněti,
co jsem na svůj inzerát dostal dopisů. Asi šest Prokopů se hlásilo… Pojďte se
honem podivat!“
Prokop přistoupil k oknu. „Co je?“
Pan Carson jen ukázal krátkým prstem na silnici. Motal se tam na velocipédu
nějaký mládenec v zoufalém zápase s rovnováhou, přičemž každé kolo jevilo
uminěnou náklonnost jet jiným směrem. Pan Carson tázavě pohlédl na Prokopa.
„Uči se asi jezdit,“ minil Prokop nejistě.
„Náramný nešika, že?“ řekl pan Carson a otevřel okno. „Bob!“
Mladik na kole se zastavil jako přibitý: „Yessr.“
„Go to the town for our car!“
„Yessr.“ A přišlápnuv pedály svištěl mladý cyklista k městu.
Pan Carson se obrátil od okna. „Ir. Velrni obratný hoch. Co jsem chtěl řici?
Aha. Tedy asi šest Prokopů se mi hlásilo – schůzky na různých mistech, zejména
v noci – švanda, že? Přečtěte si tenhle listek.“
„Přijďte zitra v deset večer do mé laboratoře, ing. Prokop,“ četl Prokop jako
ve snu. „Ale vždyť je to… bezmála… mé pismo!“
„Tak vidite,“ zubil se pan Carson. „Holenku, tady je horká půda. Prodejte to,
ať máte pokoj!“
Prokop zavrtěl hlavou.
Pan Carson na něm spočinul těžkým, neodbytným pohledem. „Můžete žádat…
řekněme… dvacet miliónů. Prodejte nám Krakatit.“
„Ne.“
„Dostanete všecko zpátky. Dvacet miliónů. Člověče, prodejte to!“
„Ne,“ řekl Prokop těžce. „Nechci mit co dělat… s vašimi válkami. Nechci.“
„Co máte tady? Geniálni chemik a… bydli v prkenné boudě! Krajani! Já to
neznám. Velký člověk nemá žádné krajany. Nekoukejte na nic! prodejte to a –“
„Nechci.“
Pan Carson strčil ruce do kapes a zivl. „Války! Myslite, že jim zabránite?
Pche! Prodejte a nestarejte se k čemu. Vy jste učenec… co je vám po ostatnim?
Války! Jděte, nebuďte směšný. Pokud maji lidé nehty a zuby –“
„Neprodám,“ drtil Prokop mezi zuby.
Pan Carson pokrčil rameny. „Jak chcete. Najdeme si to sami. Nebo to najde
Tomeš. Taky dobře.“
Bylo chvili ticho. „Mně je to jedno,“ ozval se pan Carson. „Je-li vám to
milejši, pojedeme s tim do Francie, do Anglie, kam chcete, třeba do Činy. My
oba, vite? Tady by nám to nikdo nezaplatil. Byl byste osel, kdybyste to prodal
za dvacet miliónů. Spolehněte se na Carsona. Tak co?“
Prokop rozhodně zavrtěl hlavou.
„Charakter,“ prohlásil pan Carson uznale. „Všecka čest. To se mně ohromně
libi. Poslyšte, vám to řeknu. Naprosté tajemstvi. Ruku na to.“
„Neptám se po vašich tajemstvich,“ bručel Prokop.
„Bravo. Diskrétni člověk. Můj typ, pane.“


XVIII.

Pan Carson si sedl a zapálil si velmi tlusté cigáro, načež usilovně přemital.
„Tjaja,“ řekl po chvili. „Tak vám to taky vybuchlo. Kdy to bylo? Datum.“
„… Nevim už.“
„Den v týdnu?“
„… Nevim. Myslim… dva dny po neděli.“
„Tedy v úterý. A v kolik hodin?“
„Asi… po desáté večer.“
„Správně.“ Pan Carson zamyšleně vyfukoval kouř. „Nám to poprvé vybuchlo… jak
vy se račte vyjadřovat, ,samo od sebe‘… v úterý v deset třicet pět. Viděl jste
přitom něco?“
„Ne. Já jsem spal.“
„Aha. Taky to vybuchuje v pátek, kolem půl jedenácté. V úterý a v pátek. My
jsme to zkoušeli,“ vysvětloval na Prokopův vyjevený pohled. „Nechali jsme
volně ležet miligram Krakatitu a hlidali jsme to ve dne v noci. Vybuchovalo to
v úterý a v pátek, o půl jedenácté. Sedmkrát. Jednou taky v ponděli, v deset
dvacet devět. Tak.“
Prokop se omezil na to, že tiše žasnul.
„To proběhne Krakatitem taková modrá jiskra,“ dodával pan Carson zahloubaně,
„a pak to exploduje.“
Bylo tak ticho, že Prokop slyšel tikáni Carsonových hodinek.
„Tjaja,“ vzdychl pan Carson a projel si zoufale zrzavý kartáč vlasů.
„Co to znamená?“ vyrazil Prokop.
Pan Carson jen trhl rameny. „A co vy,“ řekl, „co vy jste si vlastně myslel,
když vám to… ,samo od sebe‘… vybuchlo? Nu?“
„Nic,“ uhýbal Prokop. „Nepřemýšlel jsem o tom… tak dalece.“
Pan Carson zabručel něco urážlivého.
„Totiž,“ opravoval se Prokop, „tehdy mě napadlo, že to dělaji… třeba…
elektromagnetické vlny.“
„Aha. Elektromagnetické vlny. My jsme si to taky mysleli. Výborná myšlenka,
jenže pitomá. Bohužel docela pitomá. Tak.“
Nyni si Prokop opravdu nevěděl rady.
„Předně,“ uvažoval pan Carson, „bezdrátové vlny neběhaji po světě jenom v
úterý a v pátek o půl jedenácté, že? A za druhé, člověče, to si můžete myslet,
že jsme to s nimi hned vyzkoušeli. S krátkými, s dlouhými, se všemi možnými. A
váš Krakatit si z nich nedělal tohle,“ ukazoval na nehtu něco mizivě
nepatrného. „Ale v úterý a v pátek… o půl jedenácté… si umane ,sám od sebe‘
explodovat. A vite co ještě?“
Prokop to ovšem nevěděl.
„Ještě tohle. Od nějaké doby… asi půl roku nebo tak… maji evropské bezdrátové
stanice děsný dopal. Vite, něco jim ruši hovory. Docela pravidelně. Náhodou…
vždycky v úterý a v pátek od půl jedenácté v noci. Pravite?“
Prokop nepravil nic, jen si mnul čelo.
„Nu ano, v úterý a v pátek. Řikaji tomu smazané hovory. Začne to telegrafistům
práskat do uši, a tu to máme; hoši se z toho mohou zbláznit. Trapné, co?“ Pan
Carson si sundal brejle a jal se je čistit s velkými okolky. „Nejdřiv… nejdřiv
mysleli, že to jsou nějaké magnetické bouře či co. Ale když viděli, že to
úřaduje… pravidelně… v úterý a v pátek… Zkrátka Marconi, TSF, Transradio a
nějaká ministerstva pošt a mariny, obchodu, vnitra a já nevim čeho všeho
vyplati dvacet tisic liber chytrákovi, který tomu přijde na kobylku.“ Pan
Carson si nasadil zas brejle a vesele vykoukl. „Mysli se, že existuje nějaká
nezákonná stanice, která se bavi tim, že v úterý a v pátek smazává hovory.
Konina, že? Soukromá stanice, která by jen tak pro švandu posilala nejmiň sto
kilowattů do vzduchu! Fi!“ Pan Carson si odplivl.
„V úterý a v pátek,“ ozval se Prokop, „tedy současně… zároveň…“
„Divné, že?“ šklebil se pan Carson. „Já to mám, panečku, napsáno: V úterý dne
toho a toho v deset třicet pět a několik vteřin porucha na všech stanicich od
Revalu a tak dále. A nám v tu samou vteřinu ,sama od sebe‘, jak vy račte
řikat, exploduje jistá část vašeho Krakatitu. Eh? Co? Detto přišti pátek v
deset dvacet sedm a několik vteřin porucha a výbuch. Item přišti úterý v deset
třicet výbuch a porucha. A tak dále. Výjimečně, jaksi proti programu taky
jednou porucha v ponděli v deset dvacet devět třicet sekund. Detto výbuch.
Klape to na vteřinu. Osmkrát v osmi připadech. Špás, že? Co o tom soudite?“
„N… nevim,“ mumlal Prokop.
„Tak teda ještě něco,“ spustil pan Carson po delšim hloubáni. „Pan Tomeš u nás
pracoval. Neumi nic, ale něco vi. Pan Tomeš si dal do laboratoře postavit
vysokofrekvenčni generátor a zamkl nám dvéře před nosem. Lump. Jakživ jsem
neslyšel, že by se v obyčejné chemii pracovalo s vysokofrekvenčnimi mašinami,
co? Co byste řekl?“
„Nu… ovšem,“ uhýbal Prokop s neklidným pohledem na svůj vlastni zánovni
agregát postavený v koutě.
Pan Carson chytl čile tento pohled. „Hm,“ řekl, „taky tu máte takovou hračku,
že? Pěkný transformátorek. Co vás stál?“
Prokop se zamračil, ale pan Carson počal tiše zářit. „Tak si myslim,“ povidal
s rostouci blaženosti, „že by to byla báječná věc, kdyby se povedlo v nějaké
hmotě… dejme tomu pomoci vysoké frekvence… v jiskrovém poli nebo jak…
rozkmitat, rozviklat, uvolnit vnitřni strukturu tak, že by stačilo ťuknout z
dálky… nějakými vlnami… výboji… oscilacemi nebo čertvi čim, aby se ta hmota
rozpadla, co? Bum! Na dálku! Co tomu řikáte?“
Prokop neřekl nic, a pan Carson cucaje s rozkoši cigáro se na něm jen pásl.
„Já nejsem elektrikář, vite?“ začal po chvili. „Mně to vysvětloval jeden
učenec, ale ať se propadnu, jestli jsem to pochopil. Ten chlap šel na mne s
elektrony, ionty, elementárnimi kvanty a já ani nevim, jak to jmenoval; a
nakonec to katedrové světlo prohlásilo, že to zkrátka a dobře vůbec neni
možno. Člověče, vy jste si dal! Udělal jste něco, co podle světové autority
neni možno…“
„Tak já jsem si to vyložil sám,“ pokračoval, „jen tak ševcovsky. Někdo si
dejme tomu vezme do hlavy… udělat vratkou sloučeninu… z jisté olovnaté soli.
Dotyčná sůl je neřád; ne a ne se slučovat, že? Tak ten chemik zkouši všechno
možné… jako blázen; a tu si dejme tomu vzpomene, že v lednovém čisle The
Chemist bylo povidáni o tom, že dotyčná flegmatická sůl je báječný koherer…
detektor pro elektrické vlny. Dostane nápad. Pitomý a geniálni nápad, že by
snad mohl tu zatracenou sůl přivést elektrickými vlnami do lepši nálady, ne?
povzbudit ji, roztancovat ji, natřást ji jako peřinu, že? Tja, nejlepši nápady
dostane člověk z blbosti. Tak tedy sežene takový komický transformátorek a dá
se do toho; co prováděl, to je zatim jeho tajemstvi, ale koneckonců… dostane
hledanou sloučeninu. Ať mne čert, dostane ji. Nejspiš to nějak slepil tou
oscilaci. Člověče, já se budu muset na stará kolena učit fyzice; řikám boty,
že?“
Prokop zabručel něco docela nesrozumitelného.
„To nevadi,“ prohlásil pan Carson spokojeně. „Jen když to zatim drži
dohromady; já jsem pitomec, já si představuju, že to dostalo nějakou
elektromagnetickou strukturu nebo co. Kdyby se nějak porušila, tak… se to
rozpadne, že? Naštěsti asi deset tisic řádných radiostanic a několik set
nezákonných udržuje v naši pozemské atmosféře takové elektromagnetické klima,
takovou eh eh oscilačni lázeň, která jde zrovna k duhu té struktuře. A tak to
drži dohromady…“
Pan Carson se maličko zamyslil. „A teď,“ začal zase, „teď si představte, že
nějaký ďábel nebo holomek na tomto světě má prostředek, kterým může dokonale
rušit elektrické vlny. Prostě je smazat či co. Představte si, že to – bůhsámvi
proč – tropi pravidelně v úterý a v pátek o půl jedenácté v noci. V tu minutu
a vteřinu se poruši na tomto světě bezdrátové spojeni; ale v tu minutu a
vteřinu se nejspiš něco stane taky v té… labilni sloučenině, pokud neni zrovna
izolována… dejme tomu v… v porcelánové krabici; něco se v ni poruši… jaksi v
ni lupne, a ona se… ona se…“
„… rozpadne,“ vyhrkl Prokop.
„Ano, rozpadne se. Exploduje. Zajimavé, co? Jeden učený pán mně to vysvětloval
– hrome, jak to řikal? že – že prý –“
Prokop vyskočil a popadl pana Carsona za kabát. „Poslyšte,“ koktal hrozně
rozčilen, „kdyby se tedy… Krakatit… roztrousil dejme tomu tady… nebo kdekoliv…
prostě po zemi…“
„… tedy to nejbližšiho úterku nebo pátku o půl jedenácté vyleti do povětři.
Tja. Člověče, neuškrťte mne.“
Prokop pustil pana Carsona a přebihal po světnici hryže si hrůzou prsty. „To
je jasné,“ mručel, „to je jasné! Nikdo nesmi Krakatit vy-vyrá–“
„Krom pana Tomše,“ namitl Carson skepticky.
„Dejte mi pokoj,“ utrhl se Prokop. „Ten na to nepřijde!“
„Nu,“ minil pan Carson s pochybami, „já nevim, kolik jste mu toho řekl.“
Prokop se zastavil jako vražen do země. „Představte si,“ kázal horečně,
„představte si dejme tomu… vvválku! Kdo má v rukou Krakatit, může… může…
kdykoli chce…“
„Zatim jen v úterý a v pátek.“
„… vyhodit do povětři… celá města… celé armády… a všecko! Stači… stači jen
roz-trousit – Dovedete si to představit?“
„Dovedu. Báječně.“
„A proto… v zájmu světa… nikdy… nedám nikdy!“
„V zájmu světa,“ bručel pan Carson. „Vite, v zájmu světa by hlavně bylo přijit
na kloub té – té –“
„Čemu?“
„Té zatracené stanici anarchistů.“


XIX.

„Vy tedy myslite,“ koktal Prokop, „že… že snad…“
„My tedy vime,“ přerušil ho Carson, „že jsou na světě neznámé vysilaci a
přijimaci stanice. Že si pravidelně v úterý a v pátek řikaji nejspiš něco
jiného než dobrou noc. Že disponuji nějakými nám dosud neznámými silami,
výboji, oscilacemi, jiskrami, paprsky nebo čim zatraceným a… a zkrátka
nezachytitelným. Anebo nějakými antivlnami, antioscilacemi nebo jak to k čertu
nazvat, něčim, co prostě přerušuje nebo smazává naše vlny, rozumite?“ Pan
Carson se rozhlédl po laboratoři. „Aha,“ řekl a popadl kus křidy. „Buď je to
takhle,“ povidal rýsuje na podlaze asi půlloketni šipku křidou, „nebo takhle,“
a přitom pokřidoval celý kus prkna a do toho vmázl nasliněným prstem temnou
čáru. „Tak nebo tak, rozumite? Pozitivně nebo negativně. Buď posilaji nějaké
nové vlny do našeho média, nebo vrhaji do našeho kmitajiciho, skrznaskrz
protelegrafovaného prostředi umělé pauzy, chápete? Obojim způsobem se dá
pracovat… bez naši kontroly. Oboji je dosud… technicky i fyzikálně… naprostá
záhada. Zatraceně,“ křikl pan Carson v náhlém vzteku a praštil křidou, až se
rozstřikla, „tohle je přiliš! Posilat neznámými silami tajné depeše záhadnému
adresátovi! Kdo tohleto dělá? Co teda myslite?“
„Třeba Marťané,“ nutil se Prokop zažertovat; ale opravdu, nebylo mu do žertu.
Pan Carson po něm vražedně vykoukl, ale pak se rozřehtal přimo koňsky. „Dejme
tomu, že Marťané. Bájecně! Dejme tomu, mistře. Ale dejme tomu, že spiš někdo
na zemi. Dejme tomu, že nějaká pozemská moc rozesilá své tajné instrukce.
Dejme tomu, že má tuze vážné přičiny vyhnout se lidské kontrole. Dejme tomu,
že je nějaká… mezinárodni služba nebo organizace nebo čertvi co, a že to má k
dispozici neznámé sily, tajemné stanice a kdesi cosi. V každém připadě… V
každém připadě má lidstvo právo zajimat se o ty tajemné depeše, ne? Ať jsou z
pekla nebo z Martu. Je to prostě… zájem lidské společnosti. Můžete si myslet…
Nu, nejspiš, pane, nejspiš to nebudou radiodepeše o Červené karkulce. Tak.“
Pan Carson se rozběhl po světnici. „Předně je jisto,“ uvažoval nahlas, „že
dotyčná vysilaci stanice… je někde ve středni Evropě, přibližně uprostřed
okruhu těch poruch, že ano? Je poměrně slabá, ježto hovoři jenom v noci.
Saprlot, tim hůř; Eiffelka nebo Nauen se najde lehko, že? Pane,“ zvolal náhle
a stanul jako přibitý, „považte, že v samém pupku Evropy existuje a chystá se
něco divného. Je to rozvětvené, má to své úřady, udržuje to tajné spojeni; má
to technické prostředky nám neznámé, tajemné sily, a abyste věděl,“ zařval pan
Carson, „má to Krakatit! Tak!“
Prokop vyskočil jako blázen. „Jak-jakže?“
„Krakatit. Devět deka a pětatřicet decigramů. Všecko, co nám zbylo.“
„Co jste s nim dělali?“ rozzuřil se Prokop.
„Pokusy. Šetřili jsme s nim jako… jako s nějakou ctnosti. A jednoho večera –“
„Co?“
„Zmizel. I s porcelánovou pikslou.“
„Ukraden?“
„Ano.“
„A kdo – kdo –“
„Samozřejmě Marťané,“ šklebil se pan Carson. „Bohužel pozemským
prostřednictvim jednoho laboranta, který se nám ztratil. Ovšem že s
porcelánovou krabičkou.“
„Kdy se to stalo?“
„Nu, zrovna než mne poslali sem, za vámi. Vzdělaný člověk, Sasik. Ani prášek
nám nezůstal. Vite, proto jsem přijel.“
„A vy myslite, že to přišlo do rukou těm… těm neznámým?“
Pan Carson jen frknul.
„Jak to vite?“
„Já to tvrdim. Poslyšte,“ řekl pan Carson houpaje se na krátkých nožkách,
„vypadám jako strašpytel?“
„N-ne.“
„Tak vám řeknu, že z tohohle mám strach. Na mou čest, plné kalhoty. Krakatit…
je zatracená věc; ta neznámá stanice je ještě horši; ale kdyby přišlo oboji do
jedněch rukou, pak… máúcta. Pak si pan Carson složi kufřik a pojede k
tasmanským lidojedům. Vite, já bych nerad viděl konec Evropy.“
Prokop si jen drtil ruce mezi koleny. „Kriste, kriste,“ šeptal pro sebe.
„Nu ano,“ minil pan Carson. „Divim se jenom, vite, že dosud nevylitlo do
vzduchu… něco velikého. Může se jen stisknout kdesi jakási páka… a pár tisic
kilometrů daleko – prásk! A je to. Nač ještě čekaji?“
„To je jasné,“ ozval se Prokop zimničně. „Krakatit se nesmi dát z ruky. A
Tomeš, Tomšovi se musi zabránit…“
„Pan Tomeš,“ namitl Carson rychle, „prodá Krakatit samému ďáblu, když mu to
zaplati. V této chvili je pan Tomeš jedno z největšich světových nebezpeči.“
„U čerta,“ mručel Prokop zoufale, „co tedy dělat?“
Pan Carson vydržel delši pauzu. „To je jasné,“ řekl konečně. „Krakatit se musi
dát z ruky.“
„Nnne! Nikdy!“
„Dát z ruky. Prostě proto, že to je… dešifrovaci klič. Nejvyšši čas, pane. U
všech všudy, dejte to, komu chcete, ale jen žádné dlouhé cavyky. Dejte to
Švýcarům nebo Svazu starých panen nebo čertově babičce; budou nad tim sedět
půl roku, než pochopi, že nejste blázen. Nebo to dejte nám. V Balttinu už
postavili takovou mašinu, vite, přijimaci aparát. Představte si… nekonečně
rychlé výbuchy mikroskopických částeček Krakatitu. Zapalovačem je neznámy
proud. Jakmile jej tam někde zapnou, spusti celá věc: trrr ta ta trrr trrr ta
trrr ta ta ta. A je to. Dešifrovat, a hotovo. Jen mit Krakatit!“
„Nedám,“ dostal ze sebe Prokop pokrytý studeným potem. „Já vám nevěřim. Vy
byste… dělali Krakatit sami pro sebe.“
Pan Carson jen trhl koutkem úst. „Nu,“ řekl, „jde-li jen o to… Můžeme vám na
to svolat Svaz národů, Světovou poštovni unii, Eucharistický kongres nebo
které čerty ďábly chcete. Aby tedy měla dušička pokoj. Já jsem Dán a kašlu na
politiku. Tak. A vy dáte Krakatit do rukou mezinárodni komisi. Co je vám?“
„Já… já byl dlouho nemocen,“ omlouval se Prokop bledna smrtelně. „Neni mi…
dosud… dobře. A… a… dva dny jsem nejedl.“
„Slabost,“ děl pan Carson, přisedl k němu a vzal jej kolem krku. „Přejde hned.
Pojedete do Balttinu. Velmi zdravá krajina. Pak můžete jet za panem Tomšem.
Budete mit peněz jako slupek. Budete big man. Nu?“
„Ano,“ šeptal Prokop jako malé ditě a nechal se mirně kolébat.
„Tak tak. Přilišné napěti, vite? To nic neni. Hlavni… hlavni je budoucnost.
Člověče, vy jste prožil bidy, co? Jste chlapik. Vida, už je lip.“ Pan Carson
zamyšleně kouřil. „Hrozně ohromná budoucnost. Dostanete spoustu peněz. Mně
dáte deset procent, že? Je to už tak mezinárodni zvyk. Carson taky potřebuje…“
Před barákem zatroubilo auto.
„Nu sláva,“ oddychl si pan Carson, „tady je vůz. Tak, pane, jedeme.“
„Kam?“
„Zatim se najist.“


XX.

Den nato se probudil Prokop se strašně těžkou hlavou a nemohl zprvu pochopit,
kde vlastně je; čekal, že uslyši kvokáni slepic nebo hlaholné vyštěkáváni
Honzikovo. Pomalu si uvědomoval, že už neni v Týnici; že leži v hotelu, kam
jej pan Carson dopravil opilého do bezvědomi, nalitého, řvouciho jako zviře;
ale teprve když si pustil na hlavu proud studené vody, upamatoval se na celý
včerejšek a byl by se propadl hanbou.
Už při obědě pili, ale jen málo, jen tolik, že byli oba náramně rudi a vozili
se pak autem někde po sázavských či jakých lesich, aby se jim to vypařilo z
hlavy; přitom Prokop bez ustáni žvanil, zatimco pan Carson žmoulal cigáro a
kýval. „Budete big man.“ Big man, big man dunělo Prokopovi v hlavě jako zvon;
hrome, kdyby mne v této slávě viděla… ta jistá se závojem! Nafukoval se před
Carsonem k prasknuti; ale ten jenom pokyvoval hlavou jako mandarin a ještě
rozdmychoval jeho zběsilou pýchu. Prokop div nevyletěl z auta samou
horečnosti; vykládal podle všeho, jak si představuje světový ústav
destruktivni chemie, socialismus, manželstvi, výchovu děti a jiné nesmysly.
Ale večer to začalo doopravdy. Kde všude pili, to vi bůh; bylo to hrozné,
Carson platil za všechny neznámé, rudý, leskly, s kloboukem naraženým, zatimco
nějaké holky tancovaly, kdosi rozbijel sklenice a Prokop vzlykaje zpovidal se
Carsonovi ze své strašlivé lásky k té, již nezná. Při této vzpomince se Prokop
studem a bolesti chytal za hlavu.
Pak ho, křičiciho „Krakatit“, vsadili do auta. Ďas vi, kam ho vezli; uháněli
po nekonečných silnicich, vedle Prokopa poskakoval rudý ohýnek, to byl asi pan
Carson se svým cigárem, a škytal „rychleji, Bobe“ či co. Najednou v jakémsi
ohybu proti nim vyjela dvě prudká světla, pár hlasů zavylo, auto sebou smýkalo
stranou a Prokop letěl hubou po trávě, čimž se vzpamatoval tak dalece, že
začal vnimat. Několik hlasů se zběsile hádalo a vyčitalo si opilstvi, pan
Carson strašlivě láteřil a bručel „teď musime zpátky“, načež Prokopa jakožto
nejtiže raněného s tisicerými ohledy naložili do toho druhého auta, pan Carson
sedl k němu a jelo se zpátky, zatimco Bob zůstal u porouchaného vozu. V polou
cestě začal těžce raněný zpivat a povykovat a před Prahou pocitil novou žizeň.
Museli s nim projit ještě několik lokálů, než ho umlčeli.
S mračným znechucenim studoval Prokop v zrcadle svou odřenou tvář. Z té trapné
podivané ho vyrušil vrátný hotelu, jenž mu – s patřičnými omluvami – přinášel
k vyplněni přihlašovaci list. Prokop vyplnil své nacionále a doufal, že tim je
věc odbyta; ale sotva si vrátný přečetl jeho jméno a stav, oživl náramně a
prosil Prokopa, aby teď neodcházel; že prý jeden pán z ciziny si vyžádal, aby
mu hned z hotelu zatelefonovali, kdyby se tam pan inženýr Prokop snad ráčil
ubytovat. Jestli tedy pan inženýr dovoli atd. Pan inženýr byl tak rozlicen na
sebe sama, že by byl dovolil i to, aby mu uřizli krk. Sedl si tedy a čekal,
trpně odevzdán ve své boleni hlavy. Za čtvrt hodiny tu byl vrátný zas a
odevzdával navštivenku. Bylo na ni:

SIR REGINALD CARSON
Col. B. A., M. R. A., M. P., D. S. etc.
President of Marconi’s Wireless Co
LONDON

„Sem s nim,“ kázal Prokop, a v hloubi duše se nesmirně divil, proč mu chlapik
Carson neřekl už včera své ohromujici hodnosti a proč dnes přicházi s takovými
okolky; mimoto byl trochu zvědav, jak vypadá pan Carson po včerejši bohopusté
noci. Ale tu již vyvalil oči neuvěřitelně překvapen. Do dveři vcházel docela
neznámý pán, o dobrý loket větši než včerejši pan Carson.
„Very glad to see you,“ pronesl zvolna neznámý gentleman a poklonil se asi
tak, jako by byl telegrafni tyč. „Sir Reginald Carson,“ představil se a
ohližel se po židli.
Prokop ze sebe vydal neurčitý zvuk a ukázal mu na židli. Gentleman pravoúhle
usedl a jal se obširně svlékat velkolepé jeleni rukavice. Byl to velmi dlouhý
a nesmirně vážný pán s koňskou tváři nažehlenou do přisných záhybů; v kravatě
ohromný indický opál, na zlatém řetizku antická kamej, ohromné nohy hráče
golfu, zkrátka každým coulem lord. Prokop tiše žasnul. „Tak prosim,“ ozval se
konečně, když už to trvalo nepřežitelně dlouho.
Gentleman neměl nijak naspěch. „Zajisté,“ začal posléze po anglicku, „zajisté
jste se podivil, když jste našel v novinách moje anonce. Předpokládám, že jste
inženýr Prokop, autor eh velmi zajimavých článků o explozivnich látkách.“
Prokop mlčky přikývl.
„Velmi potěšen,“ řekl sir Carson nikterak nechvátaje. „Pátral jsem po vás v
jisté záležitosti vědecky velmi zajimavé a prakticky důležité pro naši
společnost, Marconi’s Wireless, jejimž prezidentem mám tu čest býti, neméně
než pro Mezinárodni unii pro bezdrátovou telegrafii, kterážto mi prokázala
nezaslouženou čest zvolivši mne svým generálnim sekretářem. Zajisté se
divite,“ pokračoval neudýchán tak dlouhou větou, „že tyto vážené společnosti
mne vysilaji k vám, ačkoli vaše vynikajici práce se pohybuji na zcela jiném
poli. Dovolte.“ Na tato slova otevřel sir Carson svou krokodýli aktovku a
vyňal nějaké papiry, blok a zlatou tužku.
„Asi po tři čtvrtě roku,“ začal pomalu a nasazoval si zlatý skřipec, aby se
podival do svých papirů, „konstatuji evropské bezdrátové stanice –“
„Promiňte,“ skočil mu do řeči Prokop nemoha se už ovládat, „tedy ty inzeráty
jste dával vy?“
„Zajisté. Tedy konstatuji jisté pravidelné poruchy –“
„– v úterý a v pátek, vim. Kdo vám řekl o Krakatitu?“
„Byl bych k tomu došel sám,“ pronesl ctihodný lord poněkud káravě. „Well,
přeskočim bližši podrobnosti, předpokládaje, že jste do jisté miry informován
o našich nesnázich a o eh a –“
„– o tajné světové konspiraci, ne?“
Sir Carson vytřeštil bleděmodré oči. „Prosim za prominuti, o jaké konspiraci?“
„Nu, o těch záhadných nočnich depešich, o tajemné organizaci, která je vysilá
–“
Sir Reginald Carson ho zarazil. „Fantazie,“ řekl s politovánim, „čiré
fantazie. Já vim, nadhodily to dokonce Daily News, když naše společnost
vypsala onu poměrně značnou odměnu –“
„Vim,“ řekl rychle Prokop, obávaje se, aby se o ni pomalý lord nerozhovořil.
„Ano. Čirý nesmysl. Celá věc má jen obchodni pozadi. Někdo má zájem na tom,
aby dokázal nespolehlivost našich stanic, rozumite? Chce podrýt veřejnou
důvěru. Bohužel naše receptory a – eh – koherery nemohou zjistit zvláštni druh
vln, kterými se toto rušeni děje. A jelikož se nám dostalo zprávy, že jste v
drženi jakési substance nebo chemikálie, která velmi, velmi pozoruhodně
reaguje na ony poruchy –“
„Od koho zprávy?“
„Od vašeho spolupracovnika, pana – eh – pana Tomese. Mister Tomes, že ano?“
Pomalý gentleman vylovil ze svých papirů nějaký dopis. „Dear Sir,“ četl s
jakousi námahou, „nalézám v novinách vypsáni odměny et cetera. Jelikož se v
přitomné době nemohu vzdáliti z Balttinu, kde pracuji na jistém vynálezu, a
ježto věc tak velikého dosahu se nedá pisemně vyřizovat, prosim, abyste nechal
v Praze vyhledat mého přitele a dlouholetého spolupracovnika Mr ing. Prokopa,
který má v drženi nově vynalezenou látku, Krakatit, tetrargon jisté olovnaté
soli, jehož syntéza se provádi za specifických účinků vysokofrekvenčniho
proudu. Krakatit reaguje, jak dokazuji přesné experimenty, na neznámé rušivé
vlny silnou explozi; z čehož sám sebou plyne jeho rozhodujici význam pro
výzkum řečených vln. Vzhledem k důležitosti věci předpokládám za sebe i za
svého přitele, že vypsaná odměna bude podstatně zvý-zvýšena –“ Sir Carson se
zakuckal. „To je celkem vše,“ řekl. „O odměně bychom si promluvili zvlášť.
Podepsán Mr Tomes v Balttinu.“
„Hm,“ řekl Prokop jat vážným podezřenim, „že by takováhle soukromá…
nespolehlivá… fantastická zpráva stačila Marconiově společnosti –“
„Beg your pardon,“ namital dlouhý pán, „dostalo se nám samozřejmě velmi
přesných zpráv o jistých pokusech v Balttinu –“
„Aha. Od jakéhosi saského laboranta, že?“
„Ne. Od našeho vlastniho zástupce. Hned vám to přečtu.“ Sir Carson jal se
znovu lovit ve svých papirech. „Tady je to. ,Dear Sir, zdejšim stanicim se
dosud nedaři překonati známé poruchy. Pokusy se zvýšenými vysilacimi energiemi
selhaly naprosto. Dostalo se mi důvěrné, ale spolehlivé zprávy, že vojenský
ústav v Balttinu ziskal nějaké kvantum jisté látky –‘“
Zaklepáno. „Vstupte,“ řekl Prokop, a vešel sklepnik s vizitkou: „Nějaký pán
prosi –“
Na vizitce stálo:

ING. CARSON, Balttin

„Ať vejde,“ kázal Prokop náhle rozjařen a naprosto nedbaje znameni protestu ze
strany sira Carsona.
Vzápěti vstoupil včerejši pan Carson s tváři velmi popleněnou nevyspánim a
hnal se k Prokopovi vydávaje zvuky radosti.


XXI.

„Počkejte,“ zarazil ho Prokop. „Dovolte, abych vás představil. Inženýr Carson,
sir Reginald Carson.“
Sir Carson sebou trhl, ale zůstal sedět s neporušenou důstojnosti; zato
inženýr Carson úžasem hvizdl a snesl se na židli jako člověk, kterému nohy
vypověděly službu. Prokop se opřel o dvéře a pásl se na obou pánech s
bezuzdnou zlomyslnosti. „Tak co?“ zeptal se konečně.
Sir Carson jal se skládati své papiry do aktovky. „Zajisté,“ řekl pomalu,
„bude lépe, navštivim-li vás jindy –“
„Jen račte zůstat,“ přerušil ho Prokop. „Prosim vás, pánové, nejste snad spolu
přibuzni?“
„Ba ne,“ ozval se inženýr Carson. „Spiš naopak.“
„Který z vás je tedy doopravdy Carson?“
Nikdo neodpověděl; bylo to trapné.
„Požádejte toho pána,“ řekl ostře sir Reginald, „aby vám ukázal své papiry.“
„Beze všeho,“ vysypal inženýr Carson, „ale až po panu předřečnikovi. Tak.“
„A kdo z vás inzeroval?“
„Já,“ prohlásil bez váháni inženýr Carson. „Můj nápad, pane. Konstatuju, že i
v našem oboru je neslýchanou špinavosti svést se zadarmo na cizim nápadu.
Tak.“
„Račte dovolit,“ obrátil se sir Reginald k Prokopovi se skutečnou mravni
nevoli, „to už je přiliš. Jak by to bylo vypadalo, kdyby vycházel ještě jeden
inzerát s jiným jménem! Prostě jsem musel přijmout fakt, jak to tamten pán
udělal.“
„Aha,“ dorážel bojovně pan Carson, „a proto ten pán si přisvojil taky mé
jméno, vite?“
„Konstatuji prostě,“ ohradil se sir Reginald, „že tamten pán se naprosto
nejmenuje Carson.“
„Jak se tedy jmenuje?“ tázal se Prokop chvatně.
„… Přesně to nevim,“ vycedil opovržlivě lord.
„Carsone,“ obrátil se Prokop k inženýrovi, „a kdo je tenhle pán?“
„Konkurence,“ řekl s hořkým humorem pan Carson. „Je to ten pán, co mne
podvrženými listy chtěl vylákat na všelijaká mista. Nejspiš mne tam chtěl
seznámit s moc milými lidmi.“
„Se zdejši vojenskou policii, prosim,“ zamručel sir Reginald.
Inženýr Carson zle blýskl očima a varovně zakašlal: Prosim, o tomhle nemluvit!
sic –
„Chtěji si pánové navzájem ještě něco vysvětlit?“ šklebil se Prokop u dveři.
„Ne, nic už,“ řekl důstojně sir Reginald; doposud neuznal druhého Carsona ani
za hodna pohledu.
„Tak tedy,“ začal Prokop, „předevšim vám děkuju za návštěvu. Za druhé mám
velikou radost, že Krakatit je v dobrých rukou, totiž v mých vlastnich; neboť
kdybyste měli nejmenši naději dostat jej jinak, nebyl bych asi tak tuze
hledaná osoba, že? Za tuhle nedobrovolnou informaci jsem vám náramně vděčen.“
„Ještě nejásejte,“ bručel pan Carson. „Zbývá –“
„– on?“ řekl Prokop ukazuje na sira Reginalda.
Pan Carson zavrtěl hlavou. „Kdepak! ale neznámý třeti.“
„Odpusťte,“ minil Prokop skoro uražen, „snad si nemyslite, že vám něco věřim z
toho, co jste mi včera napovidal.“
Pan Carson s politovánim pokrčil rameny. „Nu, jak chcete.“
„Dále a za třeti,“ pokračoval Prokop, „bych vás prosil, abyste mi řekli, kde
je teď Tomeš.“
„Ale vždyť jsem vám povidal,“ vyskočil pan Carson, „že tohle nesmim – Přijeďte
do Balttinu, a je to.“
„Tak vy, pane,“ obrátil se Prokop k siru Reginaldovi.
„Beg your pardon,“ pronesl dlouhý gentleman, „ale tohle nechám pro sebe.“
„Tedy za čtvrté vám kladu na srdce, abyste se tady navzájem nesnědli. Já zatim
půjdu –“
„– na policii,“ minil sir Reginald. „Velmi správně.“
„Těši mne, že s tim souhlasite. Odpusťte, že vás tu zatim zamknu.“
„Oh, prosim,“ řekl lord zdvořile, zatimco pan Carson se pokoušel zoufale
protestovat.
S velkou úlevou zamkl Prokop za sebou dvéře a ještě k nim postavil dva
sklepniky, načež běžel na blizké komisařstvi; neboť považoval za vhodno
poskytnout tam jakés takés vysvětleni. Ukázalo se, že věc neni tak lehká;
poněvadž nemohl oba cizince nařknout aspoň z krádeže střibrných lžiček nebo z
hrani makaa, měl velkou práci překonat pochybnosti policejniho úřednika, který
ho patrně pokládal za blázna. Konečně – snad aby už měl pokoj – přidělil
Prokopovi civilniho strážnika, osobnost velmi ošoupanou a mlčelivou. Když
dorazili do hotelu, našli oba sklepniky statečně vzepřené o dvéře za ohromného
shonu veškerého personálu. Prokop odemkl a civilni strážnik zafrkav nosem
vstoupil klidně dovnitř, jako by si šel kupovat šle. Pokoj byl prázdný. Oba
páni Carsonové zmizeli.
Mlčelivá osobnost se jen omrkla a rovnou se ubirala ke koupelně, na kterou
Prokop dočista zapomněl. Bylo tam okno dokořán otevřené do světliku, a v
protějši straně vyražené okénko k záchodu. Mlčelivá osobnost zamiřila k
záchodu. Ten ústil do jiné chodby, byl zamčen a klič zmizel. Strážnik
zakroutil v zámku pakličem a otevřel: bylo tam prázdno, jen na sedadle klozetu
byly stopy nohou. Nemluvná osobnost vše zase zamkla a řekla, že sem pošle pana
komisaře.
Pan komisař, človiček velmi pohyblivý a slavný kriminalista, se dostavil velmi
brzo; ždimal z Prokopa dobré dvě hodiny, chtěje se mermomoci dozvědět, o čem
měl co jednat s oběma pány; zdálo se, že má velikou chuť zatknout aspoň
Prokopa, který upadal přes tu chvili do hrozných rozporů ve vlastnich
výpovědich, pokud se týkaly jeho styků s oběma cizinci. Potom vyslechl
vrátného a sklepniky a důtklivě vyzval Prokopa, aby se o šesté hodině dostavil
na policejni ředitelstvi; do té doby aby se raději z hotelu nehnul.
Zbytek dne strávil Prokop běhaje po pokoji a mysle s hrůzou na to, že bude asi
zavřen; neboť jaké může dát vysvětleni, když o Krakatitu pro živého boha nic
neřekne? Čertvi jak dlouho může taková vyšetřovaci vazba trvat; a tak misto
aby mohl hledat ji, tu neznámou v závoji… Prokop měl oči plné slz; citil se
sláb a měkký, že se až styděl. Před šestou se však vyzbrojil vši svou
statečnosti a pustil se na policejni ředitelstvi.
Uvedli ho hned do kanceláře, kde byly tlusté koberce, kožená křesla a velká
krabice s doutniky (byla to kancelář policejniho prezidenta). U psaciho stolu
objevil Prokop obrovská, boxerská záda nakloněná nad papiry, záda, jež v něm
na prvý pohled budila hrůzu a pokoru. „Posaďte se, pane inženýre,“ řekla záda
přivětivě, osušila něco a obrátila se k Prokopovi tváři neméně monumentálni,
vhodně umistěnou na tuři šiji. Mohutný pán vteřinku studoval Prokopa a řekl:
„Pane inženýre, nebudu vás nutit, abyste mně povidal, co z přičin jistě
uvážených hodláte nechat pro sebe. Znám vaši práci. Myslim, že v té
záležitosti šlo o nějakou vaši třaskavinu.“
„Ano.“
„Věc má asi větši význam… řekněme vojenský.“
„Ano.“
Mohutný pán se zvedl a podával Prokopovi ruku: „Chtěl jsem vám jenom, pane
inženýre, poděkovat, že jste ji neprodal zahraničnim agentům.“
„To je všechno?“ vydechl Prokop.
„Ano.“
„Chytli jste je?“ vyhrkl Prokop.
„Proč?“ usmál se pán. „K tomu nemáme práva. Pokud jde o tajemstvi jenom vaše a
nikoliv o tajemstvi naši armády…“
Prokop pochytil jemnou výtku a upadl do rozpaků. „Ta věc… neni dosud zralá…“
„Věřim. Spoléhám na vás,“ řekl mocný muž a znovu mu podal ruku.
To bylo vše.


XXII.

„Musim postupovat metodicky,“ umiňoval si Prokop. Dobrá, tedy po předlouhém
rozvažováni a nejpodivnějšich nápadech ustanovil se na tomto postupu:
Předevšim dával obden do všech většich novin inzerát: „Pan Jiři Tomeš. Dámu v
závoji prosi doručitel s poraněnou rukou o udáni adresy. Velmi důležité. P.
zn., 40 000‘ do inz. k. Grégr.“ Tato formulace se mu zdála velmi chytrá; neni
sice jisto, že by mladá dáma četla noviny vůbec a inzertni část zvláště, nu
ale kdovi? Náhoda je mocná. Avšak misto náhody dostavily se okolnosti, jež
bylo možno předvidat, ale na něž Prokop předem nepomyslel. Na udanou značku
došla totiž celá spousta korespondence, jenže byly to většinou účty, upominky,
hrozby a hrubosti na adresu nezvěstného Tomše; nebo „pan Jiři Tomeš nechť ve
vlastnim zájmu udá svůj pobyt pod zn…“ a podobně. Mimoto očumoval v inzertni
kanceláři jakýsi hubený člověk, který, když Prokop si vyzvedl korespondenci, k
němu přistoupil a ptal se ho, kde bydli pan Jiři Tomeš. Prokop si na něho
vyjel tak hrubě, jak okolnosti dovolovaly, a tu hubený pán se vytasil s
policejni legitimaci a vyzval Prokopa důrazně, aby nedělal hlouposti. Šlo tu
totiž o onu jistou zpronevěru a jiné ošklivé věci. Prokopovi se podařilo
přesvědčit hubeného pána, že předevšim on sám by nesmirně potřeboval vědět,
kde pan Tomeš je; nicméně po této přihodě a prostudováni došlé korespondence
jeho důvěra v úspěch inzerce valně ochabla. Skutečně také na dalši anonce
docházelo odpovědi stále méně, zato však byly pořád hrozivějši.
Za druhé navštivil soukromou detektivni kancelář. Vyložil tam, že hledá
neznámou divku v závoji, a pokoušel se ji popsat. Byli ochotni opatřit mu o ni
diskrétni informace, udá-li buď jeji bydliště, nebo jeji jméno. I nezbylo mu
než odejit s nepořizenou.
Za třeti dostal geniálni nápad. V řečené obálce, která ho neopouštěla ve dne
ani v noci, bylo – krom menšich bankovek – třicet tisicovek opatřených páskou,
jak je v bankách zvykem při vypláceni většich peněz. Nebylo tam jméno banky;
ale aspoň to je nejvýš pravděpodobno, že divka je vybrala v některém peněžnim
ústavě téhož dne, kdy on, Prokop, s nimi odejel do Týnice. Nuže, nyni jen
vědět přesné datum, a pak stači obejit všechny banky v Praze a vyprosit si,
aby mu udali jméno osoby, která toho dne vyzvedla třicet tisic nebo o něco
vice korun. Ano, vědět přesné datum; Prokop si byl sice neurčitě vědom, že
Krakatit mu vybuchl v úterý nebo kdy (dva dny předtim byla neděle či svátek),
takže divka vyzvedla penize pravděpodobně kterési středy; avšak týdnem ani
měsicem si nebyl Prokop jist, mohlo to být v březnu nebo v únoru. Se strašnou
námahou hleděl se upomenout nebo si vypočitat, kdy to asi bylo; avšak každý
kalkul se zastavil u toho, že nevěděl, jak dlouho stonal. Dobrá, jistě však
vědi u Tomšů v Týnici, kterého týdne jsem k nim vpadl! Oslněn touto naději
depešoval starému doktoru Tomši: „Telegrafujte datum, kdy jsem k vám přijel.
Prokop.“ Sotva depeši odeslal, zamrzelo ho to; neboť citil zrovna palčivě, že
se k nim nezachoval pěkně. Skutečně také odpověď nedocházela. Když už chtěl
tuto nitku pustit z ruky, napadlo ho, že snad si na onen den vzpomene
domovnice od Jirky Tomše. Letěl k ni; avšak domovnice tvrdila, že to bylo
někdy v sobotu. Prokop si zoufal; ale tu ho došel dopis napsaný velkými a
pečlivými pismenami vzorné školačky, že do Týnice přijel dne toho a toho, ale
„tati nesmi vědět, že jsem Vám psala“. Nic vic. Podepsána Anči. V Prokopovi
bůhviproč krvácelo srdce nad těmi dvěma řádky.
Nuže, se šťastně ziskaným datem běžel do prvni banky: mohou-li mu řici, kdo si
toho a toho dne vybral tady v ústavě řekněme třicet tisic korun. Kroutili nad
tim hlavou, že prý to neni zvykem ani vůbec připustno; ale když viděli, jak je
zdrcen, šli se s někým poradit a pak se ho ptali, na jaký účet byly penize
vybrány; nebo aspoň zda byly vyzvednuty na knižku, na běžný účet, na šek či
akreditiv. Prokop to ovšem nevěděl. Dále, pravili mu, snad ten dotyčný tu
prodal jen cenné papiry; pak jeho jméno ani nemusi být v knihách. A když jim
posléze Prokop doznal, že naprosto nevi, zda ty penize byly vyplaceny v téhle
bance nebo v kterékoliv jiné, dali se mu do smichu a ptali se, chce-li s
takovýmto dotazem zběhat všech dvě stě padesát či kolik peněžnich ústavů,
filiálek a směnáren v Praze. Tak Prokopův geniálni nápad selhal naprosto.
Zbývala už jen čtvrtá možnost, totiž náhoda, že ji potká. I do té náhody se
pokoušel Prokop vpravit jakousi metodu; rozdělil si plán Prahy na sektory a
propátrával jeden úsek po druhém běhaje od rána do večera. Jednoho dne
spočital, s kolika lidmi se takto za celý den setká, a došel k čislu skoro
čtyřiceti tisic; tedy vzhledem k úhrnnému počtu obyvatelstva veškeré Prahy je
tu pravděpodobnost asi jedna ku dvanácti, že uvidi tu, již hledá. Ale i tato
malá pravděpodobnost je velkou naději. Jsou ulice a mista, která se už předem
zdaji nad jiné hodna toho, aby ona tu bydlela nebo tudy prošla; ulice s akáty
kvetoucimi, důstojná stará náměsti, intimni kouty hlubokého a vážného života.
Rozhodně neni možno, že by přebývala v této hlučné a ponuré ulici, kudy se
jenom spěchá; ani v pravoúhlé suchosti těch činžáků bez tváře, ani ve rmutné
špině staroby; proč by však nemohla žit zrovna za těmihle velkými okny, za
nimiž taji dech stinné a jemné ticho? Divě se, bloudě jako v snách objevoval
Prokop poprvé v životě, co vše je v tomto městě, kde strávil tolik let; bože,
tolik krásných mist, kde uplývá život pokojný a zralý a vábi tě, člověče
roztěkaný: ohranič, ohranič sebe sama.
Bezpočtukráte hnal se Prokop za mladými ženami, jež mu z dálky bůhvičim
připomněly tu, již viděl jen dvakrát; běžel za nimi s divě tlukoucim srdcem:
což kdyby to byla ona! A kdo nám povi, jaká to byla divinace nebo čich: vždy
to byly ženy neznámé sice, ale krásné a smutné, uzavřené v sebe a zaštitěné
nevimjakou nedostupnosti. Jednou pak už si byl skoro jist, že to je ona; hrdlo
se mu sevřelo tak, že musel stanout, aby vydechl; tu ta dotyčná vstoupila do
tramvaje a ujela. Po tři dny potom hlidkoval u oné stanice, ale už ji
neuviděl.
Nejhorši pak byly večery, kdy na smrt unaven tiskl ruce mezi koleny a namáhal
se zkombinovat nějaký nový detektivni plán. Bože, nikdy se nevzdám toho,
nalézt ji; jsem posedly, budiž; jsem blázen, blbec a maniak; ale nikdy se toho
nevzdám. Čim vic mi uniká, tim je to silnějši; prostě… je to… osud či co.
Jednou se probudil uprostřed noci, a bylo mu náhle neodvratně jasno, že takhle
ji jakživ nenajde; že musi vstát a vyhledat Jirku Tomše, který o ni vi a musi
mu o ni řici. I ustrojil se uprostřed noci a nemohl se dočkat rána. Nebyl
připraven na nepochopitelné potiže a průtahy s opatřenim pasu; nerozuměl ani,
co všechno na něm chtěji, a zuřil i tesknil horečnou netrpělivosti. Konečně,
konečně jedné noci ho nesl rychlik za hranice. A tedy nejprve do Balttinu!
Teď se to rozhodne, citil Prokop.


XXIII.

Rozhodlo se to bohužel jinak, než minil.
Měl totiž plán vyhledat v Balttinu toho jistého, co se mu vydával za Carsona,
a řici mu asi tolik: něco za něco, já vám kašlu na penize; vy mne dovedete
ihned k Jiřimu Tomši, se kterým mám co jednat, a za to dostanete dobrou
třaskavinu, dejme tomu fulminát jodu se zaručenou detonaci nějakých jedenácti
tisic sekundometrů, nebo pro mne a za mne ten jistý kovový azid s celými
třinácti tisici, pane, a dělejte si s tim, co chcete. – Byli by ovšem blázni,
kdyby na takový obchod nepřistoupili.
Továrna v Balttinu se mu zdála zvenči nehrubě veliká; trochu v něm hrklo, když
misto na portýra narazil na vojenskou hlidku. Ptal se ji na pana Carsona (– u
čerta, vždyť se ten člověk tak nejmenuje!); ale vojáček neřekl a ani b a s
bajonetem ho vedl k šikovateli. Ten neřekl o mnoho vic a dovedl Prokopa k
důstojnikovi. Inženýr Carson je tu neznám, řekl důstojnik, a co prý s nim pán
chce? Prokop prohlásil, že chce vlastně mluvit s panem Tomšem. To na
důstojnika mělo tak dalece účinek, že poslal pro pana obrsta. Pan obrst, velmi
tlustý astmatický člověk, jal se Prokopa důtklivě vyslýchat, kdo je a co tu
chce; to už bylo v kanceláři asi pět vojenských pánů a prohliželi si Prokopa
tak, až se potil. Bylo zřejmo, že čekaji na někoho, pro koho zatim
telefonovali. Když se ten někdo přihnal jako vitr, ukázalo se, že je to pan
Carson; titulovali ho direktorem, ale jeho skutečné jméno Prokop nezvěděl
nikdy. Křičel radosti, když spatřil Prokopa, a tvrdil, že na něho už čekali a
kdesi cosi; hned nařidil telefonovat „do zámku“, aby připravili „kavalirské“
hostinské pokoje, chytil Prokopa pod paži a vedl jej balttinským závodem.
Ukázalo se, že to, co Prokop považoval za továrnu, je jenom vojenská a
hasičská ubikace u vchodu; odtud vede dlouhá chaussée tunelem v porostlé, asi
deset metrů vysoké hrázi. Pan Carson uvedl Prokopa nahoru, a teprve nyni si
Prokop jakžtakž uvědomil, co to jsou balttinské závody: celé město muničnich
baráků označených čislicemi a pismenami, kopečky pokryté trávou, což prý jsou
sklady, o kus dál nádražni park s rampami a jeřáby a za nim nějaké docela
černé budovy a prkenné boudy. „Vidite tamten les?“ ukazoval pan Carson k
obzoru. „Za nim jsou teprve ty pokusné laboratoře, vite? A tamhle, co jsou ty
piskové vršky, je střelnice. Tak. A tadyhle v parku je zámek. Budete mrkat, až
vám ukážu laboratoře. Ef ef, to nejmodernějši. A teď půjdeme do zámku.“
Pan Carson vesele žvanil, ale nic o tom, co bylo nebo má být; šli zrovna
parkem, i ukazoval mu tuhle vzácný druh Amorphophallus a tamhle jakousi
japonskou varietu třešničky; a tady už je balttinský zámek celý zarostlý
břečťanem. U vchodu čeká tichý a jemňoučký stařik v bilých rukavicich, jménem
Paul, a vede Prokopa rovnou do „kavalirského pokoje“. Jakživ nebyl Prokop v
něčem podobném; vykládané parkety, anglický empir, vše staroučké a drahocenné,
že se bál na to sednout. A než se mohl opláchnout, už je tu Paul s vajičky,
lahvi vina a třesouci se sklenici a stavi vše na stůl tak něžně, jako by
posluhoval princezničce. Pod okny je dvůr vysypaný plavým piskem; štolba v
ohrnutých holinkách tam na dlouhé oprati lonžiruje vysokého grošovaného koně;
vedle něho stoji hubená hnědá divka, přimhouřenýma očima sleduje koňův cval a
dává krátce jakési rozkazy, načež přiklekne a ohmatává koňovy kotniky.
Pan Carson se přižene zase jako vitr, a že prý teď Prokopa musi představit
generálnimu řediteli. Vede ho dlouhou bilou chodbou ověšenou samými parohy a
vroubenou černými vyřezávanými židlemi. Růžový panák s bilými rukavicemi
otevře před nimi dveře, pan Carson všoupne Prokopa dovnitř, do jakéhosi
rytiřského sálu, a dveře se zavrou. U psaciho stolu stoji vysoký stařec,
podivně vzpřimen, jako by ho právě vytáhli ze skřině a připravili k uvitáni.
„Pan inženýr Prokop, Jasnosti,“ řekl pan Carson. „Kniže Hagen-Balttin.“
Prokop se zamračil a trhl zlobně hlavou; patrně tento pohyb považoval za
poklonu.
„Buďte – nám – vitán,“ pronesl kniže Hagen a podal mu předlouhou ruku. Prokop
znovu trhl hlavou.
„Dou-fám, že – budete – u nás – spokojen,“ pokračoval kniže, a Prokop si
všiml, že je na půli těla ochrnut.
„Račte – nás poctit – u stolu,“ mluvil kniže s patrnou úzkosti, aby mu
nevypadl umělý chrup.
Prokop nervózně přešlapoval. „Račte odpustit, kniže,“ začal konečně, „ale já
se tu nemohu zdržet; já – já musim ještě dnes –“
„Nemožno, naprosto nemožno,“ vyhrkl pan Carson vzadu.
„Ještě dnes se musim poroučet,“ opakoval Prokop tvrdohlavě. „Chtěl jsem jenom…
poprosit, abyste mi řekli, kde je Tomeš. Byl bych… eventuelně ochoten
poskytnout za to… eventuelně…“
„Jak?“ zvolal kniže a vytřeštil na pana Carsona oči v absolutni nechápavosti.
„Co – chce?“
„Nechte to zatim,“ zahučel pan Carson Prokopovi do ucha. „Pan Prokop jenom
mini, Jasnosti, že nebyl na vaše pozváni připraven. To nevadi,“ obrátil se
čile k Prokopovi. „Já jsem to zařidil. Dnes bude déjeuner na trávniku, tedy…
žádné černé šaty; můžete jit jak jste. Telegrafoval jsem pro krejčiho; žádné
starosti, pane. Zitra je to v pořádku. Tak.“
Nyni zas Prokop vytřeštil oči. „Jaký krejči? Co to znamená?“
„Bude – nám – zvláštni cti,“ zakončil kniže a podal Prokopovi umrlči prsty.
„Co to znamená?“ zuřil Prokop na chodbě a chytil Carsona za rameno. „Člověče,
teď mluvte, nebo –“
Pan Carson se rozřehtal a vysmekl se mu jako uličnik. „Nebo, jaképak nebo?“
smál se prchaje a poskakuje jako mič. „Jestli mne chytite, řeknu vám všechno.
Na mou čest.“
„Vy kašpare,“ zahromoval Prokop rozzuřen a pustil se za nim. Pan Carson
řehtaje se letěl po schodech a vyklouzl podle plechových rytiřů do parku; tam
panáčkoval na trávniku dělaje si zřejmě z Prokopa tatrmany. „Tak co,“ křičel,
„co mně uděláte?“
„Zmlátim vás,“ soptil Prokop řitě se na něho celou svou těžkou vahou. Carson
kvičel radosti a skákal po trávniku kličkuje jako zajic. „Honem,“ jásal, „tady
jsem,“ a už zase uklouzl Prokopovi pod rukou a dělal na něho kukuč za pněm
stromu.
Prokop mlčky uháněl za nim s pěstmi zaťatými, vážný a hrozný jako Aiás. Supěl
už bez dechu, když najednou zahlédl, že ze zámeckých schodů přihmouřenýma
očima sleduje jejich běh hnědá amazonka. Zastyděl se nesmirně, stanul a jaksi
se lekl, že teď snad ta divka mu přijde ohmatat kotniky.
Pan Carson, najednou zase docela vážný, coural se k němu s rukama v kapsách a
povidal přátelsky: „Málo tréninku. Nesmite pořád sedět. Cvičit srdce. Tak.
Aá,“ zahlaholil rozzářen, „naše velitelka, haholihoo! Dcera starého,“ dodával
tiše. „Princezna Wille, totiž Wilhelmina Adelhaida Maud a tak dále. Zajimavá
holka, osmadvacet let, ohromná jezdkyně. Musim vás představit,“ řekl nahlas a
vlekl vzpouzejiciho se Prokopa k divce. „Nejjasnějši princezno,“ volal zdálky,
„tady vám – do jisté miry proti jeho vůli – představuji našeho hosta. Inženýr
Prokop. Strašně zuřivý člověk. Chce mne zabit.“
„Dobrý den,“ řekla princezna a obrátila se k panu Carsonovi: „Vite, že
Whirlwind má zpuchlý kotnik?“
„I proboha,“ děsil se pan Carson. „Ubohá princezno!“
„Hrajete tenis?“
Prokop se mračil a nevěděl ani, že tohle platilo jemu.
„Nehraje,“ odpověděl Carson za něho a šťouchl ho do žeber. „To musite hrát.
Princezna prohrála s Lenglenovou jen o jeden set, že?“
„Protože jsem hrála proti slunci,“ namitla princezna poněkud dotčena. „Co
hrajete?“
Prokop zas nevěděl, že to patřilo jemu.
„Pan inženýr je učenec,“ spustil Carson horlivě. „Našel atomové výbuchy a
takové věci. Ohromný duch, vážně. My jsme proti němu kuchyňské ficky. Takhle
strouhat brambory a podobně. Ale tuhle on,“ a pan Carson podivem hvizdl.
„Jednoduše kouzelnik. Jestli chcete, vyrazi z vizmutu vodik. Tak, panečku.“
Šedivé oči štěrbinou sklouzly po Prokopovi, jenž tu stál zrovna uvařen v
rozpacich a vztekaje se na Carsona.
„Velmi zajimavé,“ řekla princezna a už zas se divala jinam. „Řekněte mu, aby
mne někdy poučil. Tedy v poledne na shledanou, že ano?“
Prokop se uklonil téměř včas, a pan Carson jej vlekl do parku. „Rasa,“ povidal
uznale. „Ta ženská má rasu. Pyšná, co? Počkejte, až ji poznáte bliž.“
Prokop se zastavil. „Poslyšte, Carsone, abyste si to nepletl. Nikoho neminim
poznat bliž. Dnes nebo zitra odjedu, rozumite?“
Pan Carson kousal nějaký list, jakoby nic. „Škoda,“ řekl. „Tady je moc pěkně.
Nu co dělat.“
„Zkrátka mi povězte, kde je Tomeš –“
„Až pojedete odtud. Jak se vám libil starý?“
„Co mi je po něm,“ hučel Prokop.
„Nu ano. Antikni kus, pro reprezentaci. Bohužel ho pravidelně jednou týdně
rani mrtvice. Ale Wille je báječné děvče. Pak je tu Egon, klacek, osmnáct let.
Oba sirotci. Potom hosti, nějaký bratránek princ Suwalski, všelijaci oficiři,
Rohlauf, von Graun, vite, Jockey Club, a doktor Krafft, vychovatel, a taková
společnost. Dnes večer musite přijit mezi nás. Pivni večer, žádná šlechta,
naši inženýři a podobně, vite? Tamhle v mé vile. Je to na vaši počest.“
„Carsone,“ řekl Prokop přisně. „Chci s vámi vážně mluvit než odjedu.“
„To nespěchá. Odpočněte si, a je to. Nu, já musim po své práci. Můžete dělat,
co vám je libo. Žádné formality. Chcete-li se vykoupat, tak tamhle je rybnik.
Nic nic, až později. Udělejte si pohodli. Tak.“
A byl pryč.


XXIV.

Prokop se coural po parku mrze se na cosi a nevyspale zivaje. Divil se, co s
nim vlastně chtěji, a měřil s nelibosti své boty podobné vojenským bagančatům
i své unošené nohavice. Ponořen v tyto myšlenky divže nevlezl až doprostřed
tenisového hřiště, kde princezna hrála se dvěma panáky v bilých šatech. Uhnul
rychle a pustil se směrem, kde předpokládal konec parku. Nu, na této straně
končil se pak park jakousi terasou: kamenná balustrádka a kolmo dolů zeď
nějakých dvanáct metrů vysoká. Možno se pokochat vyhlidkou na borové lesiky a
na vojáčka, který dole přecházi s nasazeným bajonetem.
Prokop zamiřil v tu stranu, kde se park svažoval dolů; našel tam rybnik s
koupelnami, ale přemáhaje chuť vykoupat se vešel do pěkného březového hájku.
Tak vida, tady je jenom laťový plot a u polozarostlé cestičky vrátka; nejsou
dokonce zavřena a lze vyjit ven, do borového lesa. Putoval tiše po klouzavém
jehliči až na kraj lesa. A sakra, tady je dobré čtyři metry vysoký plot z
ostnatého drátu. Jakpak, řekněme, je takový drát pevný? Zkoušel to opatrně
rukou i nohou, až shledal, že k jeho počináni se zájmem přihliži vojáček s
bajonetem na druhé straně plotu.
„To je horko, že?“ řekl Prokop, aby to zamluvil.
„Tudy se nesmi,“ povidal vojáček; i otočil se Prokop na patě a ubiral se podle
ostnatého plotu dál. Borový les přešel v mlázi, a za nim jsou nějaké kůlny a
chlévy, patrně panský dvůr; nakoukl tam plotem, a tu se uvnitř rozlehl strašný
řev, chroptěni a štěkot, a dobrý tucet dog, bloodhoundů a vlčáků se sápal na
plot. Čtyři páry nedůvěřivých oči vykoukly z čtverých dveři. Prokop pro
jistotu pozdravil a chtěl jit dál; ale jeden čeledin vyběhl za nim a povidal,
že „tudy se nesmi“, načež ho dovedl zpátky až k vrátkům do březového háje.
To vše Prokopa velmi rozlaďovalo. Carson mně musi řici, kudy se jde ven,
umiňoval si; nejsem přece kanár, aby mne drželi v kleci. Vyhnul se obloukem
tenisovému hřišti a zamiřil k parkové cestě, kudy ho Carson vedl nahoru do
zámku. Jenže teď se mu postavil do cesty filmový chlapik v placaté čepici, a
kam prý pán ráči.
„Ven,“ řekl Prokop zkrátka. Ale „tudy se nesmi,“ vysvětloval mu člověk v
čepici; tudy prý se jde k rnuničnim barákům, a kdo tam chce jit, musi mit
laissez-passer od ředitelstvi. Ostatně vrata ze zámku přimo ven jsou tuhle
zpátky, po hlavni cestě a vlevo prosim.
Prokop se tedy pustil po hlavni cestě a vlevo prosim, až přišel k velikým
mřižovým vratům. Děda vrátný mu šel otevřit. „Račte mit listek?“
„Jaký listek?“
„Pasirku.“
„Jakou pasirku?“
„Listek, že smite ven.“
Prokop se rozlitil. „Copak jsem v kriminále?“
Děda krčil litostivě rameny: „Prosim, dneska mi dali rozkaz.“
Chudáku, myslel si Prokop, ty bys tak někoho mohl zadržet! Jen udělat rukou
takhle –
Z okna vrátného domku vyhlédla povědomá tvář, náramně podobná jistému Bobovi.
Prokop tedy ani nedokončil svou myšlenku, otočil se na patě a loudal se zpátky
k zámku. U všech rohatých, řekl si, to jsou divné okolky; skoro to vypadá,
jako by tu někdo měl být zavřen. Dobrá, promluvim si o tom s Carsonem.
Předevšim vůbec nestojim o jejich pohostinstvi a nepůjdu k obědu; nebudu sedět
s panáky, kteři se tam na tenisovém hřišti chechtali za mými zády. – Rozhořčen
nesmirně odebral se Prokop do pokojů, které mu byly vykázány, a vrhl se na
staroučkou chaise longue, až to zapraskalo, a hněval se. Za chvili zaklepal
pan Paul a ptal se vlidně a starostlivě, půjde-li pán k déjeuner.
„Nepůjdu,“ vrčel Prokop.
Pan Paul se poklonil a zmizel. Za chvilku tu byl zas a strkal před sebou stůl
na kolečkách, pokrytý sklenicemi, křehoučkým porcelánem a střibrem. „Prosim,
jaké vino?“ ptal se něžně. Prokop zamručel cosi jako aby mu dali pokoj.
Pan Paul šel po špičkách ke dveřim a vzal tam z dvou bilých pracek velikou
misu. „Consommé de tortues,“ šeptal pozorně a naléval Prokopovi, načež misa
opět zmizela v bilých tlapách. Toutéž cestou přišla ryba, pečeně, saláty,
věci, které Prokop jakživ nejedl, a ani dobře nevěděl, jak se jedi; než
ostýchal se dát před panem Paulem najevo jakékoliv rozpaky. Kupodivu, jeho
hněv se nějak rozplýval. „Sedněte si,“ kázal Paulovi, ochutnávaje nosem a
patrem nahořklé bleďoučké vino. Pan Paul se šetrně uklonil a zůstal ovšem
stát.
„Poslyšte, Paul,“ pokračoval Prokop, „myslite, že tu jsem zavřen?“
Pan Paul pokrčil uctivě rameny: „Prosim, nemohu vědět.“
„Kudy se odtud dostanu ven?“
Pan Paul chvilinku přemýšlel. „Prosim, po hlavni cestě a pak nalevo. Porouči
milostpán kávu?“
„No třeba.“ Prokop si opařil krk skvostným moka, zatimco pan Paul mu podával
všechny vůně Arábie v cigárové krabici a střibrný hořák. „Poslyšte, Paul,“
začal zas Prokop kousaje špičku doutniku, „děkuju vám. Neznal jste tady
nějakého Tomše?“
Pan Paul obrátil oči k nebi samým usilovným vzpominánim. „Neznal, prosim.“
„Kolik je tu vojáků?“
Pan Paul uvažoval a počital. „Na hlavni stráži asi dvě stě. To je infanterie.
Potom polni četnici, to nevim kolik. V Balttin-Dortum škardona husarů. Na
střelnici v Balttin-Dikkeln kanonýři, to se měni.“
„Proč tu jsou polni četnici?“
„Prosim, tady je válečný stav. Kvůli munični továrně.“
„Aha. A to se hlidá jen tady kolem?“
„Tady jsou jen patroly, prosim. Řetěz je až dál, za lesem.“
„Jaký řetěz?“
„Hlidková zóna, prosim. Tam nikdo nesmi.“
„A kdyby chtěl člověk odejet –“
„To musi mit povoleni od staničniho komanda. Přeje si pán ještě něco?“
„Ne, děkuju vám.“
Prokop se natáhl na chaise longue rozkošnicky jako sytý bej. Nu uvidime, řekl
si; až potud to neni tak zlé. Chtěl vše uvážit, ale misto toho si vzpomněl,
jak před nim Carson poskakoval. Že bych ho nedohonil? napadlo ho a pustil se
za nim. Stačil jediný pětimetrový skok; ale tu se Carson vznesl jako kobylka a
hladce přelétl přes skupinu keřů. Prokop dupnul nohou a vzlétl za nim, a jen
zvedl nohy, když letěl nad vrcholky křovi. Nový odraz, a již letěl bůhvikam,
nestaraje se dále o Carsona. Vznášel se mezi stromy, lehýnký a volný jako
pták; zkusil několik plaveckých rázů nohama, a vida, stoupal výš. To se mu
nesmirně zalibilo. Mocnými tempy se šrouboval kolmo nahoru. Pod nohama se mu
jako pěkně narýsovaný plán oteviral zámecký park se svými altány, trávniky a
vinutými cestami; lze rozeznat tenisové hřiště, rybnik, střechu zámku, březový
hájek; tam je ten dvůr se psy a borový les a ostnatý plot, a napravo už
začinaji munični baráky, a za nimi vysoká zeď. Prokop zamiřil vzduchem nad tu
stranu parku, kde dosud nebyl. Cestou zjistil, že to, co považoval za terasu,
je vlastně bývalé opevněni zámku, mohutná bašta s podsebitim a přikopem,
druhdy patrně napájeným z rybnika. Hlavně mu šlo o tu část parku mezi hlavnim
východem a baštou; jsou tam zarostlé cestičky a divoké křovi, hradba vysoká už
jen asi tři metry a pod ni jakési smetiště nebo kompost; dále zelinářská
zahrada a kolem řádková zeď hodně chatrná a v ni zelená vrátka; za vrátky
silnice. Tam se podivám, řekl si Prokop a snášel se pomalu dolů. Tu však
vyrazila na silnici škadrona jizdy s tasenými šavlemi, a rovnou na něho.
Prokop přitáhl nohy až k bradě, aby mu je neusekli; ale tim dostal takový
kolmý rozmach, že vylétl do výše jako šip. Když se zas podival dolů, viděl vše
maličké jako na mapě; dole na silnici předjiždi malinká baterie děl, lesklá
hlaveň se obraci nahoru, vyrazil bilý obláček, a bum! prvni granát přeletěl
Prokopovi nad hlavou. Zastřeluji se, minil Prokop, a rychle vesloval rukama,
aby se dostal dál. Bum! druhý granát zafičel Prokopovi před nosem. Prokop se
dal na ústup tak rychle, jak to šlo. Bum! třeti rána mu rázem přerazila křidla
a Prokop se řitil hlavou k zemi, a procitl. Někdo klepal na dveře.
„Vstupte,“ křikl Prokop a vyskočil, nechápaje, kde vůbec je.
Vešel bělovlasý, ušlechtilý pán v černém a hluboce se uklonil.
Prokop zůstal stát a čekal, až ho vznešený pán oslovi.
„Drehbein,“ řekl ministr (nejméně!) a znovu se uklonil.
Prokop se uklonil stejně hluboko. „Prokop,“ představil se. „Čim mohu sloužit?“
„Kdybyste ráčil chvilku stát.“
„Prosim,“ vydechl Prokop, žasna, co se s nim bude dit.
Bělovlasý pán studoval Prokopa s přimhouřenýma očima; dokonce si ho obešel a
pohřižil se do pozorováni jeho zad.
„Kdybyste se ráčil trochu narovnat.“
Prokop se vztyčil jako voják; co to u všech všudy –
„Račte dovolit,“ řekl pán a poklekl před Prokopem.
„Co chcete?“ vyhrkl Prokop couvaje.
„Vzit miru.“ A už vytáhl ze šosu svinutý metr a jal se měřit Prokopovu
nohavici.
Prokop ustoupil až k oknu. „Nechte toho, ano?“ spustil podrážděně. „Já jsem s
žádné šaty neobjednal.“
„Už jsem dostal rozkazy,“ podotkl pán uctivě.
„Poslyšte,“ řekl Prokop přemáhaje se, „jděte mi ke všem – – Nechci žádné šaty
a dost! Rozuměl jste?“
„Prosim,“ souhlasil pan Drehbein, dřepl před Prokopem, nadzvedl mu vestu a
zatahal za dolejši kraj kalhot. „O dva centimetry vic,“ poznamenal vstávaje.
„Račte dovolit.“ Přitom mu znalecky zajel rukou do podpaži. „Přiliš volné.“
„To je dobře,“ zabručel Prokop a obrátil se k němu zády.
„Děkuju,“ minil pán a uhlazoval mu na zádech nějaký záhyb.
Prokop se rozliceně otočil. „Člověče, ruce pryč, nebo –“
„Promiňte,“ omlouval se pán a objal ho měkce kolem pasu; a než ho Prokop mohl
přinejmenšim skolit, stáhl mu pásek u vesty, ustoupil a s nakloněnou hlavou
zpytoval Prokopovu tailli. „Tak je to,“ podotkl zcela uspokojen a hluboce se
uklonil. „Mám tu čest se vám poroučet.“
„Jdi ke všem kozlům,“ křičel za nim Prokop, a „však už tu zitra nebudu,“
zakončil pro sebe, načež popuzen měřil pokoj z rohu do rohu. Hrom do toho,
copak si ti lidé mysli, že tu zůstanu půl roku?
Tu zaklepal a vešel pan Carson s tváři neviňátka. Prokop se zastavil s rukama
za zády a měřil ho ponurýma očima. „Člověče,“ řekl ostře, „kdo vlastně jste?“
Pan Carson ani nemrkl, zkřižil ruce na prsou a klaněl se jako Turek. „Princi
Alaaddine,“ pravil, „jsem džin, tvůj otrok. Kaž, a vyplnim každé tvé přáni.
Ráčil jste spinkat, že? Nu, blahorodi, jak se vám tu libi?“
„Ohromně,“ minil Prokop hořce. „Jen bych rád věděl, jsem-li tady zavřen, a
jakým právem.“
„Zavřen?“ žasl pan Carson, „propána, copak vás někdo nechtěl pustit do parku?“
„Ne, ale z parku ven.“
Pan Carson potřásl účastně hlavou: „Nemilé, že? To mne hrozně mrzi, že jste
nespokojen. Koupal jste se v rybnice?“
„Ne. Kudy se dostanu ven?“
„Božinku, hlavnim vchodem. Jdete rovně a potom vlevo –“
„A tam ukážete pasirku, ne? Jenže já žádné nemám.“
„To je škoda,“ minil pan Carson. „Tady je moc hezké okoli.“
„Hlavně moc hlidané.“
„Moc hlidané,“ souhlasil pan Carson. „Výborně řečeno.“
„Poslyšte,“ vybuchl Prokop, a čelo mu nabihalo hněvem, „myslite, že je
přijemné narazit každým desátým krokem na bajonet nebo ostnatý plot?“
„Kde to?“ divil se pan Carson.
„Všude v pomezi parku.“
„A co vás čerti nesou do pomezi parku? Můžete chodit uvnitř, a je to.“
„Tedy jsem zavřen?“
„Bůh uchovej! Abych nezapomněl, tady je pro vás legitimace. Laissez-passer do
závodu, vite? Kdybyste se tam náhodou chtěl podivat.“
Prokop vzal do rukou legitimaci a podivil se; byla na ni fotografie vzatá
patrně téhož dne. „A s timhle se mohu dostat ven?“
„To ne,“ řekl honem pan Carson. „To bych vám neradil. Vůbec, dejte si na sebe
trochu pozor, co? Rozumite? Pojďte se podivat,“ řekl od okna.
„Co je?“
„Egon se uči boxovat. Heč, dostal ji! To je von Graun, vite? Haha, ten kluk má
kuráž!“
Prokop se s odporem dival na dvůr, kde polonahý chlapec, krváceje z úst i
nosu, vzlykaje bolesti a vztekem se vrhal znovu a znovu na staršiho odpůrce,
aby za okamžik odletěl zkrvácenějši a bědnějši než předtim. Co se mu obzvláště
přičilo, bylo, že k tomu přihližel starý kniže ve vozičkovém křesle, směje se
z plna hrdla, i princezna Wille bavici se přitom klidně se skvělým krasavcem.
Konečně Egon padl do pisku úplně zpitomělý a nechal si odkapávati krev z nosu.
„Dobytek,“ zahučel Prokop na neznámou adresu a zatinal pěstě.
„Tady nesmite být tak citlivý,“ prohlásil pan Carson. „Tvrdá kázeň. Život…
jako na vojně. Nemazlime se s nikým,“ pointoval tak důrazně, že to vypadalo
jako hrozba.
„Carsone,“ řekl Prokop vážně, „jsem tedy… jaksi… ve vězeni?“
„Ale kdepak! Jste jenom v střeženém podniku. V prachárně to neni jako u
holiče, co? Tomu se musite přizpůsobit.“
„Zitra odjedu,“ vyrazil Prokop.
„Haha,“ smál se pan Carson a třepl ho po břiše. „Báječný šprýmař! Tedy
přijdete dnes večer mezi nás, že?“
„Nikam nepřijdu! Kde je Tomeš?“
„Co? Aha, váš Tomeš. Nu, zatim tuze daleko. Tohle je klič od vaši laboratoře.
Nikdo vás tam nebude rušit. Škoda že nemám pokdy.“
„Carsone,“ chtěl ho zadržet Prokop, ale zarazil se před posuňkem tak
velitelským, že se neodvážil ničeho dál; a pan Carson vyklouzl ven hvizdaje si
jako cvičený špaček.
Prokop se svou legitimaci se pustil k hlavnim vratům. Děda vrátný ji studoval
a vrtěl hlavou; tenhle listek prý plati jen pro východ C, tamhle, co se jde k
laboratořim. Prokop putoval k východu C; filmový chlapik s placatou čepici
prohlédl legitimaci a ukazoval: tady rovně, pak třeti přičná severni cesta.
Prokop se ovšem dal prvni cestou k jihu; ale po pěti krocich ho zadržel polni
četnik: zpátky a třeti cesta vlevo. Prokop si odplivl na třeti cestu vlevo a
nabral to rovnou přes louku: za okamžik ho honili tři lidé, tudy že se nesmi.
Šel tedy poslušně třeti severni cestou, a když si myslel, že už na něho
nekoukaji, zamiřil mezi munični sklady. Tam ho sebral voják s bajonetem a
poučil ho, že má jit tamhle, na rozcesti VII, cesta N 6. Prokop zkoušel své
štěsti na každé křižovatce; všude ho zadrželi a posilali na cestu VII, N 6; i
umoudřil se konečně a pochopil, že legitimace popsaná pismenami „C 3 n. w. F.
H. A. VII, N 6. Bar. V, 7. S. b.!“ má smysl tajemný a nevyhnutelný, jemuž jest
se slepě podřiditi. Šel tedy, kam mu ukazovali cestu. Tady už nebyly munični
baráky, ale malé betonové stavbičky všelijak čislované, patrně pokusné
laboratoře či co, roztroušené mezi piskovými násypy a borovými lesiky. Jeho
cesta se stočila k docela osamělému domku V, 7, i zamiřil k němu. Na dveřich
byla mosazná tabulka „Ing. Prokop“. Prokop odemkl kličem, který mu dal Carson,
a vešel dovnitř.
Byla tam vzorně zařizená laboratoř pro chemii třaskavin – tak moderni a úplná,
že se v Prokopovi zatajil dech radosti odbornika. Na hřebiku visela jeho stará
halena, v rohu vojenský kavalec tak jako v Praze, a v přihrádkách velkolepě
vybaveného psaciho stolu ležely pečlivě spořádány a zkatalogizovány veškeré
jeho tištěné články a rukopisné poznámky.


XXV.

Půl roku neměl Prokop v rukou milované nádobičko chemika.
Prohližel nástroj po nástroji; bylo tu vše, o čem kdy mohl snit, lesklé,
zbrusu nové a zrovna výstavni ve své pedantické uspořádanosti. Byla tu
přiručni a odborná knihovna, ohromný regál s chemikáliemi, skřině s citlivými
nástroji, tlumici kabina na pokusné exploze, komora s transformátory, zkušebni
aparáty, které ani neznal; prohlédl sotva polovinu těch divů divoucich, když
poslušen okamžitého nápadu se hnal k regálu pro nějakou sůl barya, kyselinu
dusičnou a ještě cosi a zahájil pokus, při němž se mu povedlo ožehnout si
prst, přivést zkumavku k prasknuti a propálit si diru do kabátu; tu uspokojen
usedl k psacimu stolu a načmáral dvě tři poznámky.
Potom jal se znovu okukovat laboratoř. Trochu mu to připominalo nově zařizenou
parfumerii; bylo to přiliš uspořádané, ale stačilo sáhnout na to a ono, aby to
rozházel po své chuti; tak, teď to tu vypadá intimněji. Uprostřed
nejhorlivějši práce se zarazil: Aha, řekl si, timhle tedy mne chtěji dostat na
lep! Za chvili přijde Carson a začne hučet: budete big man a kdesi cosi.
Sedl si mračně na kavalec a čekal. Když nikdo nepřicházel, šel jako zloděj k
pultu a hrál si znovu s barnatou soli. Beztoho jsem tu naposledy, chlácholil
sebe sama. Pokus se podařil dokonale: prsklo to s dlouhým plamenem a skleněný
zvon na citlivých váhách praskl. „Teď dostanu,“ hrklo v něm provinile, když
uviděl dosah škody, a vytratil se z laboratoře jako školák, který rozbil okno.
Venku byl už soumrak a drobně pršelo. Deset kroků před barákem stála vojenská
hlidka.
Prokop zamiřil pomalu k zámku cestou, po které byl přišel. V parku nebylo živé
duše; jemný déšť šuměl v korunách stromů, v zámku svitili a klavir bouřil do
šera vitěznou pisni. Prokop se pustil do oné pusté části parku mezi hlavnim
východem a terasou. Zarůstalo to tu bezcestně, i zaryl se do vlhkého křovi
jako kanec, naslouchaje chvilemi a opět si raze cestu praskajicim houštim.
Tady je konečně kraj džungle, kde křovi se překláni přes starou hradbu ne
vyšši v těchto mistech než tři metry. Prokop se chytil převislých větvi, aby
se po nich spustil dolů; ale pod jeho solidni tihou větve se zlomily s ostrým
třeskem, jako když z pistole střeli, a Prokop dopadl s těžkým žuchnutim na
jakési smetiště. Zůstal sedět s tlukoucim srdcem: teď někdo na mne přijde.
Nebylo slyšet nic než šustěni deště. I sebral se a hledal zeď se zelenými
vrátky, jak ji byl viděl ve snu.
Bylo to tak, až na jednu okolnost: že vrátka byla pootevřena. Znepokojil se
velmi: buď jimi někdo právě vyšel, nebo se tudy vráti; v obojim připadě je
někde nablizku. Co tedy činit? Rychle rozhodnut kopl Prokop do vrátek a vyšel
rázně na silnici; a opravdu, potloukal se tam nevelký člověk v gumáku a
pokuřoval lulku. Tak stáli oba proti sobě v jistém zmatku, kdo začne a s čim.
Začal ovšem agilnějši Prokop. Zvoliv bleskově mezi několika možnostmi cestu
násili, vrhl se na muže s lulkou a beranim nárazem své hrubé sily jej okamžitě
položil do bláta. Nyni ho tiskne hrudi a lokty k zemi trochu udiven a nevěda,
co s nim teď; neboť nemůže ho přece zaškrtit jako slepici. Člověk pod nim ani
nepoušti faječku z úst a patrně vyčkává. „Vzdej se,“ supi Prokop, ale v tom
okamžiku dostal ránu kolenem do břicha a pěsti pod čelist, a skutálel se do
přikopu.
Když se počal sbirat, čekal novou ránu; ale muž s faječkou stál klidně na
silnici a pozoroval ho. „Ještě?“ vycedil. Prokop zavrtěl hlavou. Tu jal se mu
ten chlapik ohromně špinavým kapesnikem čistit šaty. „Bláto,“ poznamenal a
třel co nejradikálněji.
„Zpátky?“ řekl konečně a ukazoval na zelená vrátka. Prokop chabě souhlasil.
Člověk s lulkou ho tedy vedl zpět až k staré hradbě a sklonil se, opřen rukama
o kolena. „Lezte,“ kázal suše. Prokop se mu postavil na ramena, člověk se
vztyčil a děl: „Hop!“ Prokop se zachytil převislého křovi a vydrápal se na
hradbu. Bylo mu skoro do pláče hanbou.
A ještě to, ještě to ke všemu: Když poškrabán a zpuchlý, uválen v blátě,
strašný a ponižený se kradl po zámeckých schodech do svého „kavalirského“
pokoje, potkala ho princezna Wille. Prokop se chtěl tvářit, jako by to nebyl
on nebo jako by ji neznal či co, zkrátka nepozdravil a hnal se nahoru jako
monument z bláta; a jak uháněl podle ni, zachytil jeji udivený, povýšený,
vskutku velmi urážlivý pohled. Prokop stanul jako udeřen. „Počkat,“ křikl a
seběhl k ni, a čelo mu zrovna praskalo náběhem vzteku. „Jděte,“ křičel, „a
řekněte jim, řekněte jim, že… že na ně kašlu a… že se nedám zavřit, rozumite?
Nedám,“ zařval a uhodil pěsti do zábradli, až zadrnčelo; načež se vyřitil zase
do parku nechávaje za sebou princeznu bledou a přimo ztuhlou.
Několik okamžiků nato vpadl kdosi k nepoznáni zablácený do domku vrátného,
převrhl dubový stůl na večeřiciho stařečka, popadl Boba za krk a škrtl mu
hlavou o zeď tak, že ho napolo skalpoval a nadobro omráčil; načež se zmocnil
kliče, odemkl vrata a běžel ven. Tam narazil na hlidkujiciho vojáčka, jenž
ihned vykřikl výstrahu a strhl pušku; ale než mohl střelit, začal se s nim ten
kdosi cloumat, vyrval mu pušku z ruky a zlomil mu pažbou klični kost. Tu však
přibihaly dvě nejbližši hlidky; temná postava hodila po nich puškou a vrhla se
zpět do parku.
Skoro v témž okamžiku byl přepaden nočni hlidač u východu C: kdosi černý a
veliký ho začal zčistajasna častovat strašnými ranami do spodni čelisti.
Hlidač, plavý obr, nadmiru překvapen chvili držel, než ho napadlo zahvizdat;
tu ho ten někdo hrozně klna pustil a běžel zpět do černého parku. Pak byly
zalarmovány posily a četné patroly procházely parkem.
Asi o půlnoci demoloval kdosi balustrádu na parkové terase a vrhal
desetikilové kameny po stráži, jež přecházela dole v hloubi deseti metrů.
Voják vystřelil, načež shora se vychrlila spousta politických urážek, a bylo
ticho. V tu chvili přijižděli z Dikkeln přivolani kavaleristé, zatimco veškerá
balttinská posádka šťouchala bajonety do křovin. V zámku už dávno nikdo
nespal. V jednu hodinu našli u tenisového hřiště omráčeného vojáka bez pušky.
Brzo nato se v březovém lesiku strhla krátká, ale vydatná přestřelka; raněn
nebyl bohudik nikdo. Pan Carson s tváři ustaranou důtklivě posilal domů
princeznu Wille, jež chvějic se nejspiš nočnim chladem bůhviproč se odvažovala
na bojiště; ale princezna s očima podivně velikýma řekla, aby ji laskavě
opustil. Pan Carson pokrčil rameny a nechal ji bláznit.
Ač kolem zámku bylo lidi jako much, jal se někdo z houšti metodicky vytloukat
zámecká okna. Nastal zmatek, neboť současně padly dvě tři rány z pušky až na
silnici. Pan Carson vypadal náramně znepokojeně.
Zatim princezna ani nedutajic putovala cestičkou červených buků. Najednou se
proti ni řitila ohromná černá postava, stanula před ni, zahrozila pěsti a
drtila cosi, že je to hanba a skandál; pak se ponořila do houšti, jež praskalo
a střásalo těžkou vláhu deště. Princezna se vrátila a zadržela patrolu: že prý
tam nikdo neni. Jeji oči byly rozšiřené a lesklé, jako by měla horečku. Po
chvili se rozlehla střelba z křovin za rybnikem; podle zvuku to byly
brokovnice. Pan Carson huboval, aby se ti pacholci ze dvora do toho nepletli,
nebo že je vytahá za uši. V té chvili ještě nevěděl, že tam kdosi utloukl
kamenem skvostnou dánskou dogu.
Za úsvitu našli Prokopa tvrdě spiciho na lehátku v japonském altánu. Byl
úžasně rozdrásán a zablácen a šaty na něm visely v cárech; na čele měl bouli
jako pěst a vlasy spečené krvi. Pan Carson potřásl hlavou nad spicim hrdinou
noci. Potom se přišoural pan Paul a pečlivě přikryl chrupajiciho spáče teplou
houni; pak přinesl i umyvadlo s vodou a ručnik, čisté prádlo a zbrusu nové
sportovni šaty od pana Drehbeina, a po špičkách odešel.
Jen dva nenápadni muži v civilu, s revolvery v zadni kapse, se procházeli až
do rána v blizkosti japonského altánu s nenucenou tváři lidi, kteři dohližeji
na východ slunce.


XXVI.

Prokop čekal, kdovi co že bude následovat po oné noci; nenásledovalo nic, či
spiše následoval ho onen člověk s lulkou – jediný, kterého se Prokop jaksi
bál. Ten člověk se jmenoval Holz, – jméno, jež povidalo velmi málo o jeho
tiché a bdělé podstatě. Kamkoliv se Prokop hnul, pohyboval se svých pět kroků
za nim; Prokopa to divoce dráždilo a týral ho po celý den způsobem
nejrafinovanějšim: napřiklad pobihal sem tam, sem tam po krátké cestičce
padesátkrát a stokrát, čekaje, že pana Holze omrzi udělat vždycky po dvaceti
krocich čelem vzad; pana Holze to však neomrzelo. I jal se Prokop utikat a
běžel třikrát round celým parkem; pan Holz mlčky uháněl za nim a ani nepřestal
pouštět obláčky kouře, zatimco Prokop se udýchal, až to v něm hvizdalo.
Pan Carson se toho dne ani neukázal; patrně se hněval. Kvečeru se Prokop
sebral a putoval k své laboratoři, provázen ovšem svým mlčelivým stinem. V
laboratornim baráku chtěl za sebou zamknout; ale pan Holz vstrčil nohu mezi
dveře a vešel za nim. A protože byla v předsini přichystána lenoška, bylo
zřejmo, že se pan Holz odtud nehne. Nu, taky dobře. Prokop kutil v laboratoři
něco tajemného, zatimco pan Holz v předsini suše a krátce chrápal. Ke druhé
hodině zrána napouštěl Prokop jakýsi motouz petrolejem, zapálil jej a uháněl
ven, jak rychle jen dovedl. Pan Holz vyletěl okamžitě z lenošky a pustil se za
nim. Po stu krocich vrhl se Prokop do přikopu tváři k zemi; pan Holz zůstal
nad nim stát a rozžihal si lulku. Prokop zvedl hlavu a chtěl mu něco řici, ale
spolkl to, neboť si vzpomněl, že s Holzem zásadně nemluvi; zato vztáhl ruku a
podrazil mu nohy. „Pozor,“ zahučel, a v tom okamžiku zarachotil v baráku
důkladný výbuch a třišť kameni i skla jim letěla nad hlavou, jen to svištělo.
Prokop vstal, tak tak se očistil a rychle běžel odtud, sledován panem Holzem.
V tu chvili již se sbihaly stráže a najiždělo auto s hasiči.
To byla prvni výstraha adresovaná panu Carsonovi. Nepřijde-li teď vyjednávat,
nastanou věci horši.
Pan Carson nepřišel; misto návštěvy došla nová legitimace patrně pro jiný
pokusný barák. Prokop se rozlitil. Dobrá, řekl si, tentokrát jim ukážu, co
dovedu. Poklusem běžel do své nové laboratoře, vybiraje v mysli pádnějši
projev svého protestu; rozhodl se pro třaskavé draslo, jež se zaniti vodou.
Avšak u nového baráku mu klesly bezmocně ruce: Zatraceně, je ten Carson ďábel!
Hned s laboratoři totiž sousedily domky patrně pro závodni hlidače; na
zahrádce se popelil dobrý tucet děti a mladá maminka tam konejšila řvouciho
červeného živočicha. Když viděla zuřivý pohled Prokopův, zarazila se a
přestala zpivat. „Dobrý večer,“ zabručel Prokop a loudal se zpátky s pěstmi
zaťatými. Pan Holz pět kroků za nim.
Cestou do zámku potkal princeznu na koni s celou kavalkádou důstojniků. Uhnul
na postranni cestu, ale princezna v trysku stočila koně za nim. „Chcete-li si
vyjet,“ řekla rychle, a jeji tmavou lici prokmitla vlna krve, „je vám k
dispozici Premier.“
Prokop couval před tančicim Whirlwindem. Jakživ neseděl na koni, ale nepřiznal
by se k tomu za nic na světě. „Děkuji,“ řekl, „neni třeba… oslazovat… mé
vězeni.“
Princezna se zakabonila; bylo ovšem nemistné mluvit právě s ni o této stránce
věci; avšak přemohla se a děla, hladce shrnujic výtku i pozváni:
„Nezapominejte, že na zámku jste hostem u mne.“
„Myslim, že o to nestojim,“ mručel Prokop tvrdohlavě, dávaje pozor na každý
pohyb nervózniho koně.
Princezna podrážděně trhla nohou; Whirlwind zafrkal a počal se vzpinat.
„Nebojte se ho,“ hodila Wille s úsměškem.
Prokop se zamračil a uhodil koně po hubě; princezna vzala bičik, jako by ho
chtěla švihnout přes ruku. Všechna krev valila se Prokopovi do hlavy. „Pozor,“
zaskřipěl a zahryzl se rudýma očima do princezniných jiskřicich. Ale tu již
zpozorovali důstojnici trapný připad a cválali k princezně. „Halloh, co se
děje?“ volal ten, který jel v čele na černé klisně a hnal svého koně rovnou na
Prokopa. Prokop viděl nad sebou koňskou hlavu, i popadl ji za udidlo a vši
silou ji strhl stranou. Kůň zařičel bolesti a vzepjal se tanče na zadnich
nohou, zatimco důstojnik letěl do náruči klidného pana Holze. Dvě šavle
zaplály ve slunci; ale vtom tu byla princezna na třesoucim se Whirlwindu a
tlačila jeho bokem důstojniky nazpátek.
„Nechat,“ kázala, „je to můj host!“ Přitom šlehla po Prokopovi temným pohledem
a dodala: „Ostatně se boji koni. Pánové se spolu seznámi. Poručik Rohlauf.
Inženýr Prokop. Kniže Suwalski. Von Graun. Připad je vyřizen, že ano? Rohlauf
na koně a jedeme. Premier je vám k dispozici, pane. Tedy pamatujte, že tady
jste jen hostem. Na shledanou!“ Bičik mnohoslibně zasvištěl vzduchem,
Whirlwind se zatočil, až pisek tryskal, a kavalkáda zmizela v ohybu cesty; jen
pan Rohlauf obtancoval na koni Prokopa, spaloval ho zuřivýma očima a vypravil
ze sebe hlasem vztekle zajiklým: „Bude mne těšit, pane!“
Prokop se otočil na patě, šel do svého pokoje a zamkl se; po dvou hodinách
putoval po stařičkých nohou Paulových jakýsi dlouhý dopis z „kavalirského
pokoje“ na ředitelstvi. Vzápěti běžel pan Carson s čelem přisně svraštělým k
Prokopovi; velitelským posuňkem vyhnal pana Holze, který pokojně dřimal na
židli před pokojem, a vnikl dovnitř.
Pan Holz si tedy sedl před zámkem a zapálil si lulku. Uvnitř se strhl strašný
řev, ale to se Holze pranic netýkalo; protože mu faječka netáhla, rozšrouboval
ji a znalecky ji protahoval stéblem. Z „kavalirského pokoje“ se ozývalo
chroptěni dvou tygrů do sebe zakousnutých; jeden řval a druhý soptil, bouchl
nějaký nábytek, byl okamžik ticha a opět zatřeskl strašlivý křik Prokopův.
Sbihali se zahradnici, ale pan Holz je zahnal pokynem ruky a jal se
profoukávat troubel. Buráceni nahoře rostlo, oba tygři ryčeli a doráželi na
sebe chraptice zběsilosti. Pan Paul vyběhl ze zámku bled jako stěna a zvedal
uděšené oči k nebi. V tu chvili klusala tudy princezna se svým průvodem; když
uslyšela boži dopuštěni v hostinském křidle zámku, zasmála se nervózně a
docela zbytečně švihla Whirlwinda bičem. Pak se křik poměrně utišil; bylo
slyšeti hromováni Prokopovo, jenž něčim vyhrožuje a bouchá pěsti do stolu. Do
toho mu vpadá ostrý hlas, jenž hrozi a porouči; Prokop řve horečné protesty,
ale břitký hlas odpovidá tiše a rozhodně.
„Jakým právem?“ křiči hlas Prokopův. Velitelský hlas cosi vysvětluje s
přišernou a tichou důtklivosti. „Ale pak, rozumite, pak vyletite všichni do
povětři,“ buráci Prokop, a vřava se rozpoutává nanovo tak hrozně, že pan Holz
rázem stopil lulku do kapsy a rozběhl se k zámku. Ale opět to utichlo, jen
ostrý hlas kázal a odsekával věty, doprovázen temným a hrozivým mručenim; bylo
to, jako když se diktuji podminky přiměři. Ještě dvakrát se rozkatil divý řev
Prokopův, ale ostrý hlas už se nerozčiloval; zdálo se, že si je jist svou
věci.
Po půldruhé hodině vyrazil pan Carson z pokoje Prokopova, fialový a lesklý
potem, funici a nachmuřený, a běžel poklusem k pokojům princezniným. Deset
minut nato pan Paul, třesa se úctou, hlásil Prokopovi, jenž hryzl si rty a
prsty ve svém pokoji: „Jeji Jasnost.“
Vešla princezna ve večernich šatech, popelavě bledá a s obočim palčivě
staženým. Prokop ji pokročil vstřic a chtěl, jak se zdálo, něco řici; ale
princezna jej zadržela pohybem ruky, pohybem, jenž byl pln výsosti a odporu, a
řekla zadrhlým hlasem: „Jdu se vám… pane… omluvit za onen výstup. Neminila
jsem vás šlehnout. Lituji toho nesmirně.“
Prokop zrudl a chtěl opět něco řici; ale princezna pokračovala: „Poručik
Rohlauf dnes odjede. Kniže prosi, abyste někdy přišel k našemu stolu.
Zapomeňte na tu přihodu. Na shledanou.“ Rychle mu podala ruku; Prokop se sotva
dotkl jejich prstů. Byly velmi chladné a jako mrtvé.


XXVII.

Nuže, po bouřce s Carsonem jako by se vyčistil vzduch. Prokop sice prohlásil,
že při nejbližši přiležitosti uteče, ale zavázal se čestným slovem, že až do
té doby se zdrži všech násilnosti a výstrah; za to byl pan Holz odsunut do
vzdálenosti patnácti kroků a Prokopovi dovoleno v jeho průvodu se volně
pohybovat v okruhu čtyř kilometrů od sedmi ráno do sedmi večer, spát v
laboratoři a stravovat se, kde mu libo. Naproti tomu však nasadil mu Carson
přimo do laboratoře ženu s dvěma dětmi, náhodou zrovna vdovu po dělnikovi
zabitém při výbuchu Krakatitu, jako jisté morálni rukojemstvi proti jakékoliv
(řekněme) neopatrnosti. Krom toho vysazen Prokopovi znamenitý plat ve zlatě a
necháno mu na vůli, aby se prozatim bavil nebo zaměstnával, jak mu libo.
Prvni dny po této dohodě strávil Prokop tim, že všemožně prostudoval terén v
okruhu čtyř kilometrů co do možnosti útěku. Byla prašpatná vzhledem k hlidkové
zóně, jež fungovala přimo výtečně. Prokop vymyslel několik způsobů, jak zabiti
Holze; naneštěsti shledal, že tento suchý a houževnatý patron živi pět děti a
krom toho matku a chromou sestru, a že má ještě ke všemu za sebou tři léta
káznice pro zabiti člověka. Tyto okolnosti nebyly přiliš povzbuzujici.
Jistou útěchou Prokopovi bylo, že se do něho oddaně, přimo náruživě zamiloval
pan Paul, kličnik na penzi, dokonale šťastný, že má komu sloužit; neboť
jemného stařečka tuze trápilo, že byl shledán přiliš pomalým, aby posluhoval
při knižeci tabuli. Prokop si někdy až zoufal pro jeho obtižné a uctivé
pozornosti. Mimoto náramně přilnul k Prokopovi doktor Krafft, Egonův
vychovatel, člověk zrzavý jako liška a hrozně nešťastný v životě; byl přimo
neobyčejně vzdělaný, trochu teozof a k tomu nejpošetilejši idealista, jakého
si lze představit. K Prokopovi se bližil pln ostychu a obdivoval se mu
bezuzdně, neboť jej považoval přinejmenšim za génia. Skutečně znal už dávno
Prokopovy odborné články, a dokonce na nich budoval teozofický výklad
nejnižšiho okruhu, čili abych tak po sprostu řekl, hmoty. Nadto byl pacifista
a otrava jako všichni lidé přiliš ušlechtilých názorů.
Prokopa konečně omrzelo bezcilné potloukáni podle hlidkové zóny, a vracel se
stále častěji do laboratoře, aby pracoval na svých věcech. Studoval své staré
poznámky a doplňoval mnohé mezery; sestrojil a opět zničil dlouhou řadu
třaskavin, jež potvrzovaly jeho nejodvážnějši hypotézy. Byl téměř šťasten v
těchto dnech; avšak večer, večer se vyhýbal lidem a tesknil pod klidným
dohledem pana Holze, divaje se na oblaka, na hvězdy a na volný obzor.
Ještě jedna věc ho kupodivu zaměstnávala: jakmile zaslechl dupot koňských
kopyt, přistoupil k oknu a pozoroval jezdce, ať to byl štolba nebo některý
důstojnik nebo princezna (s niž nemluvil od onoho dne), a s očima nachmuřenýma
samou pozornosti zkoumal, jak se to dělá. Shledával, že jezdec vlastně nesedi
jen tak v sedle, nýbrž do jisté miry stoji ve třmenech; že nepracuje zadkem,
nýbrž koleny; že neni trpně jako pytel brambor natřásán koňským cvalem, nýbrž
aktivně vystihuje jeho periodicitu. To vše je prakticky snad velmi jednoduché,
ale pro inženýrského pozorovatele je to mechanismus náramně spletitý,
jmenovitě jakmile kůň začne vzpinat se nebo vyhazovat nebo tančit třesa se
ušlechtilou a nedůtklivou plachosti. To vše studoval Prokop dlouhé hodiny
skryt za okenni záclonou; a jednoho pěkného rána nařidil Paulovi, aby mu dal
osedlat Premiera.
Pan Paul byl velmi zaražen; vysvětloval, že Premier je ohnivý a málo oježděný
rap hrozně nesnášenlivý, avšak Prokop krátce opakoval rozkaz. Jizdecké šaty
měl připraveny ve skřini; oblékl je se slabým pocitem ješitnosti a hnal se na
dvůr. Tam už tancoval Premier tahaje za sebou štolbu, jenž ho držel u huby.
Jako to viděl u jiných, chlácholil Prokop koně hladě mu nozdry a lysinu.
Valach se trochu utišil, jen nohy mu hrály v plavém pisku. Prokop se k němu
obmyslně bližil z boku; užuž zvedal nohu ke třmenu, když Premier bleskově po
něm sekl zadni nohou a uhnul zadkem, že Prokop stěži měl čas uskočit. Štolba
vyprskl v krátký smich; to stačilo; Prokop se útokem vrhl na koňův bok,
neznámo jak dostal špičku nohy do třmene a vymrštil se. V nejbližšich
okamžicich nevěděl, co se děje; všecko se zatočilo, někdo vykřikl, Prokop měl
jednu nohu ve vzduchu, zatimco druhá nemožně uvázla ve třmenu; nyni Prokop
těžce dopadl do sedla a sevřel kolena vši silou. To mu vrátilo vědomi právě ve
chvili, kdy Premier vyhodil zadkem jako střelen; Prokop se honem položil
nazad, znovu dopadl a křečovitě přitáhl uzdu. Následkem toho se bestie
postavila na zadni nohy jako svice; Prokop sviral kolena jako kleště a položil
se tváři až mezi rapovy uši, úzkostlivě dbaje, aby ho neobjal kolem krku,
neboť se bál, že by to vypadalo směšně. Visel vlastně jen na kolenou. Premier
se postavil zase na všechny čtyři a počal se točit jako vlček; toho použil
Prokop k tomu, aby dostal špičku druhé nohy do třmene. „Netiskněte ho tak,“
volal štolba, ale Prokop byl rád, že má koně mezi koleny. Valach se spiš
zoufale než zlomyslně snažil shodit svého divného jezdce; točil se a
vyhazoval, až pisek tryskal, a celý kuchyňský personál vyběhl na dvůr podivat
se na tento divoký cirkus. Prokop zahlédl pana Paula, jenž úzkosti tiskl
ubrousek k ústům, a dr. Krafft se vyřitil, svitě na slunci svou zrzavou
hlavou, a s nasazenim vlastniho života chtěl zadržet Premiera za udidla.
„Nechte ho,“ křikl Prokop v bezuzdné pýše, a bodl valacha do slabin. Pane na
nebi! Premier, kterému se tohle ještě nestalo, vyrazil jako šip a letěl ze
dvora do parku; Prokop stáhl hlavu mezi ramena, počitaje s tim, aby spadl
okrouhleji, až poleti; jinak stál ve třmenech nakloněn kupředu, mimovolně
napodobuje závodni žokeje. Když se takto řitil podle tenisového hřiště,
zahlédl tam několik bilých figurek; tu ho popadlo furiantstvi a začal
traktovat bičem Premierovu kýtu. Nyni zdivočelý rap ztratil hlavu nadobro; po
několika nepřijemných skocich na bok sedl na zadek a zdálo se, že se překoti;
ale misto toho vyrazil přes záhony jako ztřeštěný. Prokop chápal, že nyni
záleži vše na tom, udržet mu hlavu nahoře, nemaji-li oba udělat kotrmelec na
terénu tak nespolehlivém, i visel na uzdě a táhl. Premier se vzepjal, naráz
pokryt potem, a zničehonic začal rozumně cválat. Bylo to vitězstvi.
Prokopovi se nesmirně ulevilo; teprve nyni mohl vyzkoušet, co studoval tak
důkladně, totiž akademickou školu jezdce v sedle. Třesouci se kůň poslouchal
uzdy jedna radost, a Prokop, pyšný jako bůh, točil jej po vinutých cestách
parku miře zpátky k tenisovému hřišti. Už viděl za křovim princeznu s raketou
v ruce, i pobodl Premiera do galopu. Vtom princezna mlaskla jazykem, Premier
se vznesl do vzduchu a letěl k ni přes křovi jako šip; a Prokop naprosto
nepřipraven na tuhle vysokou školu vyletěl ze třmenů a poroučel se přes koňovu
hlavu do trávy. V tu chvili citil, že něco zapraskalo, a na vteřinu se mu
bolesti obestřely smysly.
Když procitl, viděl princeznu a tři pány v onom zaraženém postoji lidi, kteři
nevědi, maji-li se smát povedené švandě, nebo přiběhnout na pomoc. Prokop se
opřel o lokty a pokusil se pohnout levou nohou, jež ležela pod nim divně
stočena. Princezna pokročila s tázavým a trochu již ulekaným pohledem.
„Tak,“ řekl Prokop tvrdě, „teď jste mi zlomila nohu.“ Trpěl hrozně a vědomi se
mu mátlo otřesem; přesto se pokoušel vstát. Když zase přišel k sobě, ležel v
princeznině klině a Wille mu utirala zpocené čelo pronikavě vonicim
kapesnikem. Přes strašlivou bolest v noze byl napolo jako v snách. „Kde je…
kůň,“ blábolil a počal sténati, když jej dva zahradnici kladli na přinesenou
lavici a nesli do zámku. Pan Paul se změnil ve všecko na světě: v anděla,
milosrdnou sestru a rodnou matku, pobihal, rovnal Prokopovi pod hlavou podušky
a kapal mu na rty koňak; pak si musel sednout vedle postele, a Prokop mu
mačkal ruku v poryvech bolesti, posilován dotykem té měkké a stařecky lehýnké
ruky. Dr. Krafft stál u nohou s očima plnýma slz, a i pan Holz zřejmě dojat
rozstřihoval Prokopovi jezdecké nohavice a máčel mu stehno studenými obklady.
Prokop tiše sténal a chvilemi se modrými rty usmival na Kraffta nebo na pana
Paula. A tu již se přivalil plukovni lékař, takový lepši řeznik, provázen
asistentem, a bez dlouhých okolků se pustil do Prokopovy nohy. „Hmjo,“ řekl,
„komplikovaná fraktura femoris a tak dále; nejmiň šest neděl postele,
člověče.“ Vybral dvě dyhy, a nyni se počala trapná věc. „Natahujte mu nohu,“
kázal řeznik asistentovi; ale pan Holz uctivě odstrčil rozčileného nováčka a
chopil se sám zlomeného údu celou svou tvrdou, šlachovitou silou. Prokop se
zahryzl do podušky, aby neřval bolesti jako zviře, a vyhledal očima utrápenou
tvář pana Paula, na niž se zrcadlila všechna jeho vlastni muka. „Ještě
kousek,“ basoval doktor ohmatávaje frakturu; Holz mlčky a pevně táhl. Krafft
prchl koktaje cosi v úplném zoufalstvi. Nyni řeznik rychle a obratně utahoval
dyhy; přitom bručel, že zitra zaleje tu sakramentskou nohu do sádry. Konečně
je po všem; boli to sice přišerně a natažená noha leži jako mrtvá, ale aspoň
ten řeznik je pryč; jenom pan Paul přecházi po špičkách a žbrblaje měkkými rty
se stará, jak by trpiteli ulevil.
Tu se přižene pan Carson autem a bera najednou čtyři schody leti k Prokopovi.
Pokoj se naplni jeho třesknou účasti, hned je tu veseleji a jaksi chlapácky;
pan Carson žvani pro útěchu páté přes deváté, a najednou pohladi Prokopa
nesměle a přátelsky po zježené hlavě; v tu chvili odpoušti Prokop svému
zavilému nepřiteli a tyranu devět desetin jeho špatnosti. Pan Carson se
přehnal jako vitr; a nyni se posunuje po chodbě cosi těžkého, dveře se rozleti
a dva lokajové s bilými prackami vedou dovnitř ochromeného knižete. Kniže už
ode dveři kývá úžasně vyschlou a dlouhou ručkou, aby snad Prokop ze samé úcty
zázračně nevstal a nevykročil vstřic Jeho Jasnosti; pak se nechá posadit a
vypravi ze sebe několik vět nejblahovolnějši účasti.
Sotva zmizelo toto zjeveni, ťuká někdo na dveře a pan Paul šeptá s nějakou
komornou. Hned nato vcházi princezna, má ještě bilé tenisové šaty a v hnědé
tváři vzdor a kajicnost; neboť se přicházi dobrovolně omluvit ze svého
hrozného uličnictvi. Ale než může promluvit, rozzáři se drsný, hrubě omitnutý
Prokopův obličej dětským úsměvem. „Tak co,“ pravi pyšně pacient, „bojim se
koně nebo ne?“
Princezna se zarděla tak, že by to nikdo do ni neřekl; až ji to samu zamrzelo
a uvedlo do rozpaků. Nicméně se přemohla, a rázem je z ni vznešená hostitelka;
hlási, že přijede chirurg profesor, a ptá se, co si Prokop žádá k jidlu, ke
čteni a podobně; ještě nařidi Paulovi, aby dvakrát denně ji podával zdravotni
zprávu, jaksi z dálky urovná cosi na polštáři a s malým kývnutim hlavy odejde.
Když zanedlouho přijel slavný chirurg autem, bylo mu několik hodin čekati, byť
nad tim sebevic kroutil hlavou. Pan inženýr Prokop totiž ráčil hluboce usnout.


XXVIII.

To se rozumi, slavný chirurg neuznal práci vojenského řeznika, roztahoval
znovu Prokopovy zlomeniny a nakonec to vše zalil do sádry a řekl, že levá
extremita zůstane podle všeho chromá.
Prokopovi nastaly dny slavné a ležácké. Krafft mu předčital Swedenborga a pan
Paul rodinné kalendáře, zatimco princezna dala obklopit lůžko trpitele všemi
nádhernými vazbami světové literatury. Nakonec Prokopa omrzely i kalendáře a
jal se Krafftovi diktovat soustavné dilo o destruktivni chemii. Nejvic si –
kupodivu – oblibil Carsona, jehož drzost a bezohlednost mu imponovala; neboť
našel pod ni veliké plány a potrhlou fanatičnost zásadniho, mezinárodniho
militaristy. Pan Paul byl na vrcholu blaženstvi; nyni byl nepostrádatelný od
noci do noci a mohl sloužiti každým dechem a každým krůčkem svých šouravých
nohou.
Ležiš sevřen hmotou, podoben poraženému pni; ale což necitiš jiskřeni
strašlivých a neznámých sil v té nehybné hmotě, jež tě poutá? Hoviš si na
prachových poduškách nabitých větši silou než sud dynamitu; tvé tělo je spici
třaskavina, a i třesouci se, zvadlá ručička Paulova skrývá v sobě větši možnou
brizanci než melinitová kapsle. Spočiváš nehnutě v oceánu nezměřitelných,
nerozložených, nevypáčených sil; co je kolem tebe, nejsou pokojné zdi, tiši
lidé a hučici koruny stromů, nýbrž munični sklad, kosmická prachárna
připravená k strašlivému výkonu; ťukáš kloubem na hmoty, jako bys přehližel
sudy ekrazitu, zkoumaje, jak jsou plné.
Prokopovy ruce zprůhledněly nehybnosti, ale nabyly zato podivného hmatu:
citily zrovna a odhadovaly detonačni potenciál všeho, čehokoliv se dotkly.
Mladé tělo má ohromné brizantni napěti; ale opět dr. Krafft, nadšenec a
idealista, obsahuje poměrně slabou výbušnou kvalitu, kdežto Carsonovo
detonačni čislo se bliži tetranitranilinu; a Prokop se zachvěnim vzpominal na
chladný dotek princezniny ruky, jenž mu vyzradil přišernou brizanci toho
zpupného amazonského tvora. Prokop si lámal hlavu, závisi-li potenciálni
třaskavá energie organismu na přitomnosti nějakých enzymových či jakých látek,
nebo na chemické stavbě samotných buněčných jader, jež jsou náboji par
excellence. Ať je tomu jakkoliv: rád bych viděl, jak by ta černá, nadutá holka
explodovala.
Teď už pan Paul vozi Prokopa v lenošce po parku; pan Holz je nyni zbytečný,
ale čini se, neboť byl v něm objeven veliký talent masérský, a Prokop citi z
jeho tuhých prstů zrovna prýštit blahodárnou explozivni silu. Potká-li někdy
princezna pacienta v parku, promluvi něco s dokonalou a přesně odměřenou
zdvořilosti, a Prokop k svému vzteku nikdy nepochopi, jak se to dělá; neboť
sám je buď přiliš hrubý, nebo přiliš sdilný. Ostatni společnost vidi v
Prokopovi podivina; to jim dává právo nebrat ho vážně a jemu volnost býti k
nim nezdvořilý jako drvoštěp. Jednou se princezna ráčila u něho zastavit s
celým průvodem; nechala pány stát, usedla vedle Prokopa a ptala se ho po jeho
práci. Prokop, chtěje ji co nejvice vyhovět, upadl do tak odborného výkladu,
jako by měl přednášku na mezinárodnim kongresu chemiků; kniže Suwalski a
jakýsi cousin se začali šťouchat a smát, a tu se Prokop rozvzteklil a utrhl se
na ně, jim že to nepovidá. Všechny oči se obrátily na Jeji Jasnost, neboť na
ni bylo usadit nesrstného plebejce; ale princezna se trpělivě usmála a poslala
pány hrát tenis. Zatimco se za nimi divala očima jako kmin přimhouřenýma,
zpytoval ji Prokop úkosem; vlastně poprvé si ji pořádně všiml. Byla tuhá,
tenká, s nadbytkem pigmentu v pleti, vlastně ne zrovna hezká; maličká ňadra,
nohy přehozeny, skvostné rasové ruce; na pyšném čele jizva, oči skryté a
prudké, pod ostrým nosem temné chmýři, zpupné a tvrdé rty; nu ano, vlastně
téměř hezká. Jaké má opravdu oči?
Tu je k němu plně obrátila, a Prokop se zmátl. „Prý umite hmatem poznat
povahu,“ řekla honem. „Vypravoval o tom Krafft.“ Prokop se zasmál tomuto
ženskému výkladu své zvláštni chemotaxe. „Nu ano,“ povidal, „člověk citi,
kolik má která věc sily; to nic neni.“ Princezna pohlédla rychle na jeho ruku
a potom kolem dokola; nebyl tam nikdo.
„Ukažte,“ zabručel Prokop a nastavil rozjizvenou dlaň. Položila na ni hladké
konečky prstů; nějaký blesk proběhl Prokopem, srdce mu zabouchalo a hlavou mu
nesmyslně kmitlo: „Což kdybych sevřel!“ A již hnětl a drtil v hrubé tlapě
tuhé, palčivé maso jeji ruky. Opilá závrať mu zaplavila hlavu; viděl ještě, že
princezna zavirá oči a syká rozchlipenými rty, sám pak semkl oči a zatinaje
zuby propadal se do kroužici tmy; jeho ruka se horce a divoce rvala s tenkými,
přisavnými prsty, které se mu chtěly vyrvat, které se hadovitě svijely, které
se zarývaly nehty do jeho kůže a opět naze, křečovitě přilnuly k jeho masu.
Prokop jektal zuby rozkoši; chvějivé prsty pekelně dráždily jeho zápěsti,
začal vidět rudá kola, náhle prudký a žhavý stisk, a úzká ruka se mu vydrala z
dlaně. Omámen zvedl Prokop opilá vička; v hlavě mu hučelo těžkými tepy; s
úžasem viděl opět zelenou a zlatou zahradu a musel přivřit oči oslněn dennim
světlem. Princezna zrovna zpopelavěla a hryzla se do rtů ostrými zuby; v
štěrbinách oči ji žiřil bezmezný odpor či co.
„Nu?“ řekla ostře.
„Panenská, bezcitná, vilná, vzteklá a pyšná, – vypráhlá jako troud, jako troud
– a zlá; vy jste zlá; vy jste palčivá samou krutosti a nenávistná a bez srdce;
vy jste zlá a k prasknuti nabitá náruživosti; nedotknutelná, chtivá, tvrdá,
tvrdá k sobě, led a oheň, oheň a led –“
Princezna mlčky pokývla: ano.
„– k nikomu dobrá, k ničemu dobrá; nadutá, vznětlivá jako lunt, neschopná
milovat, otrávená a planouci – řeřavá – speklá žárem, a všechno kolem vás
mrzne.“
„Musim být tvrdá k sobě,“ šeptala princezna. „Vy nevite – vy nevite –“ Mávla
rukou a vstala. „Děkuju vám. Pošlu vám Paula.“
Vyliv takto svou osobni, uraženou hořkost, začal Prokop o princezně smýšlet
laskavěji; dokonce ho tuze mrzelo, že se mu nyni zřejmě vyhýbá. Chystal se
řici ji při nejbližši přiležitosti něco hodně přivětivého, ale přiležitost se
už nenaskytla.
Na zámek přijel kniže Rohn, zvaný mon oncle Charles, bratr nebožky kněžny,
takový vzdělaný a jemný světoběžnik, amatér všeho možného, tres grand artiste,
jak se řikalo, který dokonce napsal několik historických románů, ale jinak byl
nadmiru milý člověk; k Prokopovi pojal zvláštni náklonnost a trávil u něho
celé hodiny. Prokop mnoho profitoval od jemného pána, obrousil se jaksi a
pochopil, že jsou na světě také jiné věci než destruktivni chemie. Oncle
Charles byl vtělená anekdotická kronika; Prokop rád stočil hovor na princeznu
a naslouchal se zájmem, jaké to bývalo zlé, ztřeštěné, pyšné a velkodušné
děvčátko, jež kdysi střelilo po svém maître de danse a jindy si chtělo dát
vyřiznout kus kůže na transplantaci pro popálenou chůvu; když ji to zakázali,
porazila ze vzteku une vitrine s nejvzácnějšim sklem. Le bon oncle také
přivlekl k Prokopovi klacka Egona a dával jej (Prokopa) chlapci za přiklad s
takovými elóžemi, že se chudák Prokop červenal stejně jako Egonek.
Po pěti nedělich už běhal o holi; vracel se stále častěji do laboratoře a
pracoval jako morovatý, až mu zas procitla bolest v noze, takže cestou domů
zrovna visel na ruce pozorného Holze. Pan Carson zářil, když viděl Prokopa tak
mirného a pracovitého, a ťukal chvilemi na onu stranu, kde v Pánu odpočival
Krakatit; než to byla věc, o niž Prokop nechtěl ani slyšet.
Jednoho večera bylo na zámku nějaké slavné soirée; nuže, na tento večer
připravil Prokop svůj coup. Princezna zrovna stála ve skupině generálů a
diplomatů, když se otevřely dveře a vešel – bez hole – vzdorovitý vězeň,
poprvé poctivaje knižeci křidlo svou návštěvou. Oncle Charles a Carson mu
běželi vstřic, kdežto princezna na něho jen rychle, zkoumavě pohlédla přes
hlavu činského vyslance. Prokop si myslel, že ho přijde uvitat; ale když
viděl, že se zastavila s dvěma staršimi, až po pupek dekoletovanými paničkami,
zamračil se a couval do kouta, neochotně se ukláněje náramným osobnostem,
kterým ho pan Carson představoval pod titulem „slavného učence“, „našeho
slavného hosta“ a tak dále; jak se zdálo, převzal tu pan Carson roli Holzovu,
neboť nehnul se od Prokopa na krok. Čim dál, tim se Prokop nudil zoufaleji;
vtlačil se už docela do kouta a škaredil na celý svět. Teď mluvi princezna s
nějakými arcihodnostáři, jeden z nich je dokonce admirál a druhý veliké
zahranični zviře; princezna se kvapně podivá stranou, kde se kaboni Prokop,
ale v tu chvili k ni přistupuje pretendent jistého zrušeného trůnu a odvádi ji
na opačnou stranu. „Nu, já půjdu domů,“ bruči Prokop a rozhoduje se v hloubi
své černé duše, že do tři dnů udělá nový pokus o útěk. V tom okamžiku stoji
před nim princezna a podává mu ruku. „Jsem ráda, že jste zdráv.“
Prokopa zradila veškera dobrá výchova oncle Charlesa. Udělal masivni pohyb
rameny (miněný jako poklona) a řekl medvědim hlasem. „Myslel jsem, že mne ani
nevidite.“ Pan Carson zmizel, jako by se propadl.
Princezna je ohromně vystřižena, což uvádi Prokopa ve zmatek; nevi, kam se má
divat, ale vidi jeji tuhé snědé maso s popraškem pudru a citi pronikavou vůni.
„Slyšela jsem, že zase pracujete,“ mluvi princezna. „Co zrovna děláte?“
„Nu, to a ono,“ plave Prokop, „většinou nic valného.“ Hola, teď je tu
přiležitost napravit onu surovost… nu, tehdy ten insult s tou rukou; ale co u
všech všudy lze řici zvláště přivětivého? „Kdybyste chtěla,“ mruči, „udělal
bych… nějaký pokus… s vašim pudrem.“
„Jaký pokus?“
„Třaskavinu. Máte toho na sobě… že by se tim dal vypálit kanón.“
Princezna se zasmála. „Já nevěděla, že pudr je třaskavina!“
„Všecko je třaskavina… když se to vezme pořádně do ruky. Vy sama –“
„Co?“
„Nic. Ztajený výbuch. Vy jste strašně brizantni.“
„Když mne někdo vezme pořádně do ruky,“ zasmála se princezna, a náhle
zvážněla. „Zlá, bezcitná, vzteklá, chtivá a pyšná, že ano?“
„Děvčátko, které se chce nechat stáhnout z kůže… pro starou bábu…“
Princezna se zapálila. „Kdo vám to řekl?“
„Mon oncle Charles,“ pleskl Prokop.
Princezna ztuhla a byla najednou sto mil daleko. „Ah, kniže Rohn,“ opravila ho
suše. „Kniže Rohn mnoho mluvi. Těši mne, že jste all right.“ Malé kývnuti
hlavy, a Wille plovala sálem po boku kavalira v uniformě nechávajic Prokopa
zuřit v koutě.
Nicméně ráno nato donesl pan Paul Prokopovi cosi jako svátost, a že prý to
přinesla princeznina komorná.
Byla to krabička pronikavě vonného nahnědlého pudru.


XXIX.

Prokopa dráždila a znepokojovala ta silná ženská vůně, když pracoval skloněn
nad krabičkou pudru; bylo mu, jako by sama princezna byla v laboratoři a
nahýbala se nad jeho ramenem.
Ve své mládenecké nevědomosti dřive netušil, že pudr je vlastně jen škrobový
prášek; považoval jej patrně za zemitou barvu. Nuže, škrob je výborná věc
dejme tomu na flegmatizováni přiliš ofenzivnich třaskavin, protože je sám o
sobě netečný a tupý; tim hůře, má-li se sám stát třaskavinou. Nyni si s nim
naprosto nevěděl rady; drtil si čelo v dlanich, hrozně pronásledován
pronikavou vůni princezninou, a neopouštěl laboratoř ani v noci.
Ti, kdo ho měli rádi, přestali za nim chodit, neboť schovával před nimi svou
práci a netrpělivě si na ně vyjižděl pořád mysle na zlořečený pudr. U všech
všudy, co ještě zkusit? Po pěti dnech mu začalo svitat; horečně studoval
aromatické nitroaminy, načež se pustil do syntetické páračky, jakou jakživ
nedělal. A pak jedné noci to leželo před nim, nezměněné ve vzhledu a pronikavě
vonici: hnědavý prášek, z něhož dýše zralá ženská pleť.
Natáhl se na kavalci zmořen únavou. Zdálo se mu, že vidi plakát s nápisem
„Powderit, nejlepši třaskavý poudre na pleť“, a na plakátě je vymalována
princezna a vyplazuje na něj jazyk. Chce se odvrátit, ale z plakátu se vysunou
dvě nahé snědé paže a medúzovitě ho táhnou k sobě. Tu vytáhl z kapsy křivák a
přeřizl je jako salám. Pak se zděsil, že se dopustil vraždy, a prchal ulici,
ve které před léty bydlel. Stálo tam hrčici auto, i skočil do něho křiče
„jeďte rychle“. Auto se rozjelo, a tu teprve shledal, že u volantu sedi
princezna a má na hlavě koženou přilbici, v niž ji dosud neviděl. V ohybu
cesty někdo se vrhá před auto, patrně aby zastavilo; nelidský řev, kolo se
přehouplo přes cosi měkkého, a Prokop se probudil.
Nahmatal, že má horečku, i vstal a hledal v laboratoři něco léčivého. Nenašel
nic než absolutni alkohol; přihnul si pořádně, spálil si ústa i požerák a šel
znovu lehnout s motajici se hlavou. Zdály se mu ještě nějaké vzorce, květiny,
Anči a zmatená jizda vlakem; pak se vše rozplynulo v hlubokém spánku.
Ráno si sehnal povoleni podniknout na střelnici pokusnou explozi, z čehož měl
Carson nezřizenou radost. Prokop si zakázal účast jakéhokoliv laboranta a sám
dohližel, aby pokusná chodba byla vydlabána v piskovém kameni co nejdále od
zámku, v té části střelnice, kde ani nebylo elektrické vedeni, takže bylo
nutno přiložit obyčejný doutnák. Když bylo vše připraveno, vzkázal princezně,
že přesně ve čtyři hodiny vyleti do povětři jeji krabička pudru. Osobně pak
doporučil Carsonovi, aby vyklidil nejbližši baráky a naprosto zamezil
komukoliv přistup v okruhu jednoho kilometru; dále si vyžádal, aby pro
tentokrát byl na čestné slovo zbaven Holze. Pan Carson sice minil, že je to
přiliš hluku pro omeletu, ale celkem vyhověl Prokopovi ve všem.
Před čtvrtou hodinou nesl Prokop vlastnoručně krabičku pudru k výbušné štole,
čichl naposledy s jistou lačnosti k princeznině vůni a ponořil krabičku do
jámy; tam ji pak podložil rtuťovou kapsli a navázal Bickfordovu šňůru
vyměřenou na pět minut; načež se uvelebil vedle a čekal s hodinkami v ruce, až
budou za pět minut čtyři.
Ahaha, teď ji ukáže, teď ukáže té zpupné slečince, co dovede. Nu, tohle bude
jednou exploze jak se patři, něco jiného než pokusné bouchačky tam na Bilé
hoře, kde se musel ke všemu schovávat před strážnikem; bude to výbuch slavný a
svobodný, ohnivý sloup až k nebi, nádherná sila, veliké udeřeni hromu;
rozštipnou se nebesa moci ohňovou, a jiskra vykřisnutá rukou člověka –
Za pět minut čtyři. Prokop rychle zapálil šňůru a upaloval odtud s hodinkami v
ruce, slabě pokulhávaje. Za tři minuty; hrome, teď rychleji. Za dvě minuty. A
tu zahlédl napravo princeznu provázenou panem Carsonem, jak miři k výbušné
jámě. Strnul na okamžik hrůzou a zařval na ně výstrahu; pan Carson se zarazil,
ale princezna ani se neohližejic šla dál; Carson klusal za ni, patrně ji
přemlouvaje, aby se vrátila. Přemáhaje prudkou bolest v noze řitil se Prokop
za nimi. „Lehněte,“ ryčel, „u všech čertů lehněte!“ Jeho obličej byl tak
hrozný a zběsilý, že pan Carson zbledl, udělal dva veliké skoky a položil se
do hlubokého přikopu. Princezna šla pořád; nebyla už dále od výbušné jámy než
dvě stě kroků. Prokop praštil hodinkami o zem a pádil za ni. „Lehnout,“ zařval
a chytil ji za rameno. Princezna se prudce obrátila a měřila ho užaslým
pohledem, co si to jako dovoluje; a tu ji Prokop oběma pěstmi srazil na zem a
padl na ni celou svou tihou.
Tuhé, tenké tělo se zoufale pod nim zazmitalo. „Hade,“ sykl Prokop, a těžce
dýchaje tiskl princeznu vši silou hrudniku k zemi. Tělo pod nim se vzepjalo
obloukem a smýklo sebou stranou; avšak kupodivu, ze sevřených úst
princezniných se nevydral ani hlásek, jen krátce, rychle dýchala v horečném
zápasu. Prokop vtiskl koleno mezi jeji kolena, aby se mu nevysmekla, a
zacpával ji dlaněmi uši, mysle bleskově na to, že by ji explozi mohly
prasknout bubinky. Ostré nehty se mu zaryly do šije a v tváři pocitil vzteklé
hryznuti čtyř lasiččich špičáků. „Bestie,“ supěl Prokop a hleděl setřást
zakousnuté zviře; avšak nepovolila, jako přisátá, a z hrdla se ji vydral
vrkavý zvuk; jeji tělo se vlnivě vzpinalo a převracelo se jako v křeči. Známá
pronikavá vůně omámila Prokopa; srdce se v něm splašeně rozbouchalo, a v tom
chtěl vyskočit, nemysle už na explozi, jež musi vyletět v nejbližši vteřině.
Tu však citil, že jektajici kolena obemkla a sviraji jeho nohu a dvě paže mu
křečovitě opinaji hlavu i šiji; a na tváři pocitil vlhký, palčivý, třesouci se
dotyk úst a jazyka. Zaúpěl hrůzou a hledal svými rty ústa princeznina. Vtom
třeskla strašlivá exploze, sloup hliny a kameni se vyryl ze země, něco prudce
udeřilo Prokopa do temene, ale ani o tom nevěděl; neboť v tom okamžiku se
zaryl do horouci vláhy bezdechých úst a libal rty, jazyk, zuby, ústa otevřená
a vrkajici; pružné tělo pod nim rázem ochablo a chvělo se dlouhými vlnami.
Zahlédl nebo se mu jen zdálo, že pan Carson vstal a vykoukl, ale horempádem se
zase položil na zem. Třesouci se prsty šimraji Prokopovu šiji nesnesitelnou a
divou rozkoši; chraptivá ústa celuji jeho tváře a oči drobnými, rozechvěnými
polibky, zatimco Prokop se žiznivě vpiji do tlukouci palčivosti vonného hrdla.
„Drahý, drahý,“ lechtá a páli ho v uše horký, vlhký šepot, jemné prsty se mu
zarývaji do vlasů, plihé tělo se napiná a dlouze k němu přilne celou délkou; a
Prokop se přisál k prýšticim rtům nekonečným sténajicim polibkem.
Sss! Odstrčen loktem Prokop vyskočil a mnul si čelo jako opilý. Princezna
usedla a rovnala si vlasy. „Podejte mi ruku,“ kázala suše, kvapně se rozhlédla
a přitiskla honem jeho podanou ruku k planouci lici; náhle ji prudce
odstrčila, zvedla se, ztuhla a širokýma očima se divala někam do prázdna.
Prokopovi bylo z ni až úzko, chtěl se k ni vrhnout; trhla nervózně ramenem,
jako by něco shazovala; viděl, že se strašně hryže do rtů. Teprve teď si
vzpomněl na Carsona; našel ho opodál, jak leži na zádech – ale ne už v přikopě
– a vesele mrká k modrému nebi. „Už je po tom?“ spustil leže a zatočil palci
na břiše mlýnek. „Já se totiž hrozně bojim takových věci. Mám už vstát?“
Vyskočil a otřepal se jako pes. „Báječná exploze,“ povidal nadšen, a jen tak
jakoby nic mrkl po princezně.
Princezna se obrátila; byla olivově bledá, ale kompaktni a zvládnutá. „To bylo
všecko?“ ptala se ledabyle.
„Můj ty kriste,“ repetil Carson, „jako by toho nebylo dost! Propána, jediná
krabička pudru! Člověče, vy jste čaroděj zapsaný ďáblu, král pekel či kdo. Co?
Baže. Král hmoty. Princezno, ejhle král,“ hodil s patrnou narážkou, a už zas
uháněl dále: „Geniálni, že? Jedinečný člověk. My jsme jen hadráři, na mou
čest. Jaké jste tomu dal jméno?“
Omámenému Prokopovi se vracela rozvaha. „Ať to princezna pokřti,“ řekl, rád,
že se na tolik vzmohl. „Je to… jeji.“
Princezna se zachvěla. „Nazvete to třeba Vicit,“ sykla ostře.
„Co?“ chytil se toho pan Carson. „Aha, Vicit. Znamená ,zvitězil‘, že?
Princezno, vy jste geniálni! Vicit! Ohromné, haha! Hurá!“
Než Prokopovi se mihla hlavou etymologie jiná a strašlivá. Vitium. Le vice.
Neřest. Pohlédl s hrůzou na princeznu; ale na jeji upjaté tváři nebylo lze
čisti žádné odpovědi.


XXX.

Pan Carson běžel napřed k mistu výbuchu. Princezna – patrně schválně – se
opozdila; Prokop myslel, že mu chce něco řici, ale ona jen ukázala prstem na
tváři: pozor, tady – Prokop si rychle sáhl na tvář; našel tam krvavé stopy
jejiho kousnuti, i zvedl hrst hliny a rozmazal si ji po lici, jako by ho při
výbuchu zasáhla hrouda.
Výbušná jáma byla vyryta jako kráter v průměru asi pěti metrů; bylo těžko
odhadnouti brizanci, ale Carson páčil výkon na pětinásobek oxiliquitu. Krásná
látečka, minil, ale pro praktické užiti trochu moc silná. Vůbec pan Carson
obstarával celý hovor hravě klouzaje přes povážlivé trhliny konverzace; a když
se na cestě zpátky s poněkud okatou horlivosti poroučel, že prý musi ještě to
a ono, padla na Prokopa ukrutná tiha: o čem mám nyni mluvit? Bůhvi proč se mu
zdálo, že se ani slovem nesmi dotknout oné divé a temné události, když nastala
exploze a „nebesa se rozštipla moci ohňovou“; kvasil v něm hořký a nechutný
pocit, že by ho princezna mrazivě odbyla jako lokaje, se kterým – se kterým –
Zatinal pěstě ošklivosti a přežvykoval cosi naprosto vedlejšiho, nejspiš o
konich; slova mu vázla v krku, a princezna zřejmě zrychlovala krok, aby už co
nejdřive byla v zámku. Prokop silně kulhal, ale nedával to znát. V parku se
chtěl poroučet, avšak princezna zabočila na postranni cestu. Následoval ji
váhavě; tu se k němu přimkla ramenem, zvrátila hlavu nazad a nastavila žiznivé
rty.
Princeznin činský ratlik Toy zavětřil odněkud svou velitelku a piště radosti
letěl k ni přes záhony a křovim. A tu je, haha! ale co to? Ratlik ustrnul: ten
Velký Nevlidný ji cloumá, jsou do sebe zakousnuti, potáceji se v němém a
zuřivém zápase; oho, Pani to projela, ruce ji klesly a leži sténajic v loktech
Velkého; teď ji zadávi. A Toy začal řváti „pomoc! pomoc!“ ve svém psim nebo
činském jazyce.
Princezna se vyrvala z náruči Prokopova. „I ten pes, i ten pes,“ zasmála se
nervózně. „Pojďme!“ Prokopovi se motala hlava, byl stěži s to udělat několik
kroků. Princezna se do něho zavěsila (šilená! což kdyby někdo –), vleče jej,
ale nohy ji váznou; zarývá prsty do jeho paže, má chuť drásat či co, syká,
vrašti oboči, v očich se ji to temně propadá; a náhle s chraptivým vzlyknutim
leti Prokopovi na krk, až zavrávoral, a hledá jeho ústa. Prokop ji drti pažemi
i zuby; předlouhé bezdeché sevřeni, a tělo napjaté jako luk plihne, hrouti se,
poklesá měkce a bezvládně; se zavřenýma očima leži princezna na jeho prsou a
bláboli slabiky sladké a beze smyslu, nechává si plenit tváře i hrdlo prudkými
polibky a vraci je opile a jakoby ani nevědouc o sobě: do vlasů, na ucho, na
ramena, omámená, poddajná, omdlévajici, bez konce něžná, pokorná jako onučka a
snad, bože, snad v tuto vteřinu šťastná nějakým nevýslovným a bezbranným
štěstim; ó bože, jaký úsměv, jaký rozechvěný a přesličný úsměv na tiše
srkajicich rtech.
Otevřela, vytřeštila oči a prudce se vyvinula z jeho rukou. Stáli na dva kroky
od hlavni aleje. Přejela si obličej dlaněmi jako ten, kdo procitá ze sna;
odstoupila vratce a opřela se čelem o peň dubový. Sotva ji Prokop pustil z
tlap, rozpáčilo se mu srdce ohavnými, ponižujicimi pochybnostmi: jsem, kriste,
jsem pro ni sluha, na kterém se… patrně… jen tak rozněcuje ve… v… v nepřičetné
chvili, kdy… kdy ji přemohla jeji samota či co; nyni mne odkopne jako psa, aby
jindy zas… někdo jiný… Přistoupil k ni a neurvale ji položil tlapu na rameno.
Obrátila se krotce s plachým, téměř bázlivým a poniženým úsměvem. „Ne ne,“
zašeptala spinajic ruce, „prosim, již ne –“
Prokopovi pukalo srdce náhlou přemirou něžnosti. „Kdy,“ bručel, „kdy vás zas
uvidim?“
„Zitra, zitra,“ šeptala úzkostně a couvala k zámku. „Musime jit. Tady nelze –“
„Zitra, kde?“ naléhal Prokop.
„Až zitra,“ opakovala nervózně, zimavě se choulila do sebe a spěchala beze
slova. Před zámkem mu podala ruku: „Sbohem.“
Jejich prsty se palčivě spletly; nevěda o tom táhl ji k sobě. „Nesmiš, teď
nesmiš,“ zasykla a ožehla ho plamenným pohledem.
Jinaké větši škody pokusný výbuch Vicitu nezpůsobil. Shodilo to jen několik
kominů na blizkých barácich a vyrazily se tlakem vzduchu nějaké okenni
tabulky. Také velké vitráže v pokoji knižete Hagena pukly; v tu chvili se
chromý pán namáhavě vztyčil a stoje, jako voják, očekával dalši katastrofu.
Společnost v panském křidle seděla po večeři u černé kávy, když vešel Prokop
rovnou hledaje očima princeznu; nemohl už snést řeřavá muka pochybnosti.
Princezna zbledla; ale žoviálni strýček Rohn se hned Prokopa ujal a gratuloval
mu k skvělému výkonu a kdesi cosi. Dokonce nadutý Suwalski se vyptával se
zájmem, je-li to pravda, že pán může každou věc obrátit v třaskavinu. „Dejme
tomu takový cukr,“ opakoval pořád, a žasl, když Prokop zabručel, že cukrem se
střilelo už dávno za Veliké války. Po jistou dobu byl Prokop vůbec středem
zájmu; ale koktal, odbýval všechny otázky a za živého boha nerozuměl
povzbuzujicim pohledům princezniným; jen je chytal svýma krvavýma očima s
děsnou pozornosti. Princezna byla jako na trni.
Nu, pak se hovor stočil jinam, a Prokopovi se zdálo, že si ho nikdo nevšimá;
ti lidé si rozuměli tak dobře, mluvili velice lehce, v narážkách a s ohromným
zájmem o věcech, kterým on vůbec nerozuměl nebo na kterých zhola nic neviděl.
I princezna celá ožila; tak vidiš, má tisickrát vic společného s těmi panáky
než s tebou. Mračil se, nevěděl co s rukama, zavařilo to v něm slepým vztekem;
tu postavil čišku s kávou tak prudce, že se roztřištila.
Princezna upřela na něho hrozné oči; ale šarmantni oncle Charles zachránil
situaci tim, že začal povidat o lodnim kapitánovi, který rozmačkal v prstech
pivni láhev. Jakýsi tlustý cousin tvrdil, že by to dovedl také. Tu tedy dali
přinést prázdné pivni láhve, a jeden po druhém za hlučného haló zkoušel,
rozdrti-li některou z nich. Byly to těžké láhve z černého skla: nepraskla
žádná.
„Teď vy,“ kázala princezna s rychlým pohledem na Prokopa.
„To nesvedu,“ bručel Prokop, ale princezna poškubla obočim tak – tak
velitelsky – – Prokop vstal a popadl láhev kolem hrdla; stál nehnutě,
nekroutil se úsilim jako ti ostatni, jen svalstvo v obličeji mu k prasknuti
nabihalo; vypadal jako pračlověk, který se chystá někoho zabit krátkým kyjem:
nasupený, s ústy námahou zkřivenými a tváři jakoby přeseknutou hrubými svaly,
s pleci šikmo schýlenou, jako by chtěl zamávat lahvi v gorilim útoku, upřel
krvi zalité oči na princeznu. Nastalo ticho. Princezna se zvedla s očima
zrovna vzepřenýma do jeho; rty se ji stáhly nad zaťatými zuby, v olivové lici
ji vystoupily šlašité provazce, svraštila oboči a prudce oddychovala jakoby
děsnou tělesnou námahou. Tak stáli proti sobě s očima do sebe zakleslýma a
svraštěnou tváři, jako dva zuřivi zápasnici; konvulsivni záchvěvy probihaly
souběžně jejich těly od pat až k šiji. Nikdo ani nedýchal; bylo slyšet jen
sipavé chroptěni dvou lidi. Tu něco chrustlo, třesklo sklo a spodek láhve
řinkl v střepech na podlahu.
Prvni se vzpamatoval mon oncle Charles; udělal zmatený krok vpravo a vlevo,
ale pak se vrhl k princezně. „Minko, ale Minko,“ zašeptal chvatně a spustil
ji, udýchanou a téměř klesajici, do lenošky; klekl před ni a vši silou
rozviral jeji křečovitě zaťaté pěstě; měla dlaně plné krve, jak si zaryla
nehty do masa. „Vemte mu tu láhev z ruky,“ kázal honem le bon prince a páčil
princezně prst za prstem.
Princ Suwalski se vzpamatoval. „Bravo,“ zařval a začal hlučně tleskat; ale tu
již von Graun popadl Prokopovu pravici, jež dosud drtila chrastici střepy, a
zrovna vylamoval jeho křeči sevřené prsty. „Vodu,“ křikl, a tlustý cousin,
zmateně něco hledaje, popadl jakousi dečku, polil ji vodou a hodil Prokopovi
na hlavu.
„Ahahah,“ vydralo se z Prokopa úlevou; křeč povolila, ale v hlavě mu ještě
viřil mrtvičný nával krve; a nohy se mu tak třásly slabosti, že se jen svezl
na židli.
Oncle Charles masiroval na koleně zkřivlé, zpocené a třesouci se prsty
princezniny. „To jsou nebezpečné hry,“ bručel, zatimco princezna, úplně
vyčerpána, stěži popadala dechu; ale na rtech se ji chvěl uchvácený, blouznivě
vitězný úsměv.
„Vy jste mu pomáhala,“ vyhrkl tlustý cousin, „to je to.“
Princezna vstala sotva vlekouc nohy. „Pánové prominou,“ děla chabě, pohlédla
plnýma, zářivýma očima na Prokopa, až se zhrozil, že si toho kdekdo všimne, a
odešla podpirána strýčkem Rohnem.
Nu, pak bylo nutno oslavit nějak Prokopův výkon; koneckonců byli to
dobromyslni mládenci, kteři se jen hrozně rádi chvástali svými hrdinskými
kousky. Prokop u nich ohromně stoupl v ceně tim, že rozmačkal láhev a dovedl
pak vypit neuvěřitelné množstvi vina a kořalek, aniž spadl pod stůl. Ve tři
hodiny ráno jej princ Suwalski slavnostně libal a tlustý cousin téměř se
slzami v očich mu nabizel tykáni; pak skákali přes židle a dělali strašný
rámus. Prokop se usmival a měl hlavu jako v oblacich; ale když ho chtěli
dovést k jediné balttinské holce, vytrhl se jim a prohlásil, že jsou opilá
hovada a on že jde spat.
Avšak misto aby tak zcela rozumně učinil, pustil se do černého parku a dlouho,
nesmirně dlouho měřil očima temnou frontu zámku hledaje jakési okno. Pan Holz
dřimal patnáct kroků dále, opřen o strom.


XXXI.

Den nato pršelo. Prokop běhal po parku vztekaje se, že takhle princeznu asi
vůbec neuvidi. Avšak vyběhla prostovlasá do deště a utikala k němu. „Jen na
pět minut, jen na pět minut,“ šeptala udýchaně a nastavila mu rty k polibeni.
Tu však zahlédla pana Holze. „Kdo je ten člověk?“
Prokop se kvapně ohlédl. „Kdo?“ Byl už tak zvyklý na svůj stin, že si ani
neuvědomoval jeho stálou blizkost. „To je… jen můj hlidač, vite?“
Princezna jen obrátila na Holze velitelské oči; pan Holz ihned zastrčil lulku
a uklidil se o kus dál. „Pojď,“ šeptala princezna a vlekla Prokopa k altánu.
Teď tam sedi a netroufaji si polibit se; neboť pan Holz mokne někde pobliž
altánu. „Ruku,“ káže potichu princezna a proviji svými horečnými prsty
uzlovité, rozmlácené pahýly Prokopovy. „Milý, milý,“ lichoti se, ale hned
přisně spoušti: „Nesmiš se tak na mne divat před lidmi. Já pak nevim, co
dělám. Počkej, počkej, jednou ti skočim kolem krku a bude ostuda, oh bože!“
Princezna zrovna ustrnula. „Šli jste včera k holkám?“ ptá se najednou.
„Nesmiš, teď jsi můj. Milý, milý, pro mne je to tak těžké – Proč nemluviš? Jdu
ti řici, abys byl opatrný. Mon oncle Charles už slidi – Včera jsi byl skvělý!“
Mluvil z ni překotný neklid. „Hlidaji tě pořád? Všude? I v laboratoři? Ah,
c’est bęte! Když jsi včera rozbil ten šálek, byla bych tě šla polibit. Tak
skvostně jsi se vztekal. Pamatuješ se, jak jsi se tenkrát v noci utrhl z
řetězu? Tehdy jsem šla za tebou jako slepá, jako slepá –“
„Princezno,“ přerušil ji Prokop chraptivě, „něco mně musite řici. Buď je to…
všecko… rozmar vznešené dámy, nebo…“
Princezna pustila jeho ruku. „Nebo co?“
Prokop k ni stočil zoufalé oči. „Buď si se mnou jenom hrajete –“
„Nebo?“ protáhla se zřejmou rozkoši trýznit ho.
„Nebo mne – do jisté miry –“
„– milujete, ne? Poslyš,“ řekla, založila ruce za hlavou a divala se na něho
zúženýma očima, „když se mi v jednu chvili zdálo, že… že jsem se do tebe
zamilovala, viš? opravdu zamilovala, na smrt, jako blázen, tedy tenkrát jsem
se pokusila… zmařit tě.“ Přitom luskla jazykem jako tehdy na Premiera. „Nikdy
bych ti nemohla odpustit, kdybych se do tebe zamilovala.“
„Lžete,“ křikl Prokop rozlicen, „teď lžete! Nesnesl bych… nesnesl bych
pomyšleni, že je to… jenom… flirt. Nejste tak zkažená! Neni to pravda!“
„Když to tedy viš,“ řekla princezna tiše a vážně, „pročpak se mne ptáš?“
„Chci to slyšet,“ drtil Prokop, „chci, abys to řekla… přimo… mně řekla, co ti
jsem. To, to chci slyšet!“
Princezna zavrtěla hlavou.
„Musim to vědět,“ zaskřipal Prokop, „jinak – jinak –“
Princezna se mdle usmála a vložila svou ruku na jeho pěsť. „Ne, prosim tě,
nechtěj, nechtěj, abych ti to řekla.“
„Proč?“
„Pak bys měl nade mnou přiliš moci,“ děla tichounce, a Prokop se zachvěl
radosti.
Pana Holze venku přepadl zákeřný kašel, a zdáli mihla se mezi keři silueta
strýčka Rohna. „Vidiš, už hledá,“ zašeptala princezna. „Večer k nám nesmiš.“
Ztichli tisknouce si ruce; jenom déšť šelestil na střeše altánu a prochvival
je rosným chladem. „Milý, milý,“ šeptala princezna a přibližila se ličkem k
Prokopovi. „Jaký ty jsi? Nosatý, zlostný, celý zježený – Řikaji, že jsi velký
učenec. Proč nejsi kniže?“
Prokop sebou trhl.
Otřela se lici o jeho rameno. „Už se zas zlobiš. A mně, mně jsi řekl bestie a
ještě horši věci. Vidiš, ty mi to neosladiš, to, co dělám… a budu dělat…
Milý,“ skončila nehlasně a vztáhla ruku k jeho tváři.
Sklonil se k jejim rtům; chutnaly kajicným steskem.
V šuměni deště se bližily kroky pana Holze.
Nemožno, nemožno! po celý den se Prokop trudil a špehoval, kde by ji zahlédl.
„Večer k nám nesmiš.“ Nu ovšem, nejsi z jeji společnosti; je ji volněji mezi
urozenými klacky. Bylo to prapodivné: v hloubi srdce se Prokop ujišťoval, že
ji vlastně nemá rád, ale žárlil zběsile, umučeně, pln vzteku a pokořeni. Večer
se potloukal v dešti po parku a myslel na to, že teď sedi princezna u večeře,
že záři, že je tam veselo a volno; připadal si jako prašivý pes vykopnutý do
deště. Nejstrašnějši útrapa života je pohana.
A teď tomu udělám konec, rozhodl se; běžel domů, hodil na sebe černé šaty a
vpadl do kuřárny jako včera. Princezna seděla jako nesvá; sotva zahlédla
Prokopa, zabouchalo to v ni a rty ji zvláčněly šťastným úsměvem. Ostatni
mládež ho vitala s kamarádským haló, jen oncle Charles byl o nuanci přiliš
zdvořilý. Princezniny oči varovaly: měj se na pozoru! Nemluvila skorem,
zaražená jaksi a nehybná; a přece našla přiležitost, aby vtiskla Prokopovi do
ruky zmuchlaný listek. „Milý, milý,“ bylo tam načmáráno tužkou velikým pismem,
„co jsi to učinil? Odejdi.“ Zmačkal listek. Ne, princezno, zůstanu tady; dělá
mi tuze dobře pozorovat vaše důvěrné svazky s těmi navoněnými idioty. Za tu
žárlivou paličatost ho princezna odměnila zářivým pohledem; začala si tropit
šašky ze Suwalského, Grauna, všech svých kavalirů, byla zlomyslná, krutá,
impertinentni a vysmivala se jim bez milosti; chvilemi chvatně pohlédla na
Prokopa, ráči-li být spokojen s touto hekatombou galánů, které mu kladla k
nohoum. Milostpán nebyl spokojen; chmuřil se a žádal očima o pět minut důvěrné
rozmluvy. Tu tedy vstala a vedla ho k nějakému obrazu. „Měj rozum, měj přece
rozum,“ zašeptala horečně, stoupla na špičky a polibila ho vlaze na ono jisté
misto na tváři. Prokop ztuhl leknutim nad touto přišernou ztřeštěnosti; ale
nikdo to neviděl, dokonce ani oncle Rohn, který jinak vše pozoroval rozumnýma,
smutnýma očima.
Nic vic, nic vic se nestalo toho dne. A přece se Prokop zmital na svém lůžku
kousaje do podušek; a v druhém křidle zámku nespal někdo po celou noc.
Ráno pan Paul přinesl ostře vonici dopis; neřekl od koho. „Drahý člověče,“
stálo tam, „dnes Tě neuvidim; nevim, co si počnu. Jsme hrozně nápadni; prosim
Tě, buď rozumnějši než já. (Několik řádků přeškrtáno.) Nesmiš chodit před
zámkem, nebo za Tebou vyběhnu. Prosim, učiň něco, aby Tě zbavili toho
protivného hlidače. Měla jsem špatnou noc; vypadám hrozně, nechci, abys mne
dnes viděl. Nechoď k nám, mon oncle Charles už dělá narážky; křičela jsem na
něho a nemluvim s nim; mne rozčiluje, že má tak nesnesitelně pravdu. – Milý,
poraď mi: Teď právě jsem vyhnala svou komornou, donesli mi, že má poměr se
štolbou a chodi k němu. Nesnesu to; byla bych ji tloukla do tváře, když se mi
přiznala. Byla krásná a plakala, a já jsem se pásla na tom, jak ji tekou slzy;
představ si, nikdy jsem tak zblizka neviděla, jak se dělá slza, vyhrkne, kane
rychle, zastavi se a pak ji dohoni druhá. Já plakat neumim; když jsem byla
malá, křičela jsem, až jsem zmodrala, ale slzy mi netekly. Vyhnala jsem ji na
hodinu; nenáviděla jsem ji, mrazilo mne, když stála přede mnou. Máš pravdu,
jsem zlá a pukám vztekem; ale proč ona smi všechno? Drahý, prosim tě, přimluv
se za ni; povolám ji zpět a udělám s ni, co budeš chtit, jen když budu vidět,
že dovedeš takové věci ženám odpouštět. Vidiš, jsem zlá a ke všemu ještě
závistivá. Nevim si rady steskem; chtěla bych Tě vidět, ale teď nemohu. Nesmiš
mi psát. Libám Tě.“
Když toto četl, bouřil v druhém křidle zámku klavir divokými slapy tónů; a
Prokop psal: „Nemilujete mne, to vidim; vymýšlite si nesmyslné překážky,
nechcete se kompromitovat, omrzelo Vás trýznit člověka, který se Vám
nevnucoval. Rozuměl jsem tomu jinak; stydim se za to a chápu, že chcete
učiniti konec. Nepřijdete-li odpoledne do japonského altánu, dovtipim se toho
dokonale a učinim vše, abych Vás dále neobtěžoval.“
Prokop si oddychl; nebyl zvyklý psát milostné dopisy, a toto se mu zdálo býti
napsáno důkladně a dosti srdečně. Pan Paul to běžel odevzdat; klavir v druhém
křidle uryl, a bylo ticho.
Zatim se Prokop rozběhl za Carsonem; potkal ho u skladů a šel rovnou do toho:
aby ho na čestné slovo nechal chodit bez Holze, a že je ochoten složit
jakoukoliv přisahu, že až do dalšiho ohlášeni odtud neuteče. Pan Carson se
významně šklebil: ale ano, proč ne? bude chodit volně jako pták, haha, kam
chce a kdy chce, udělá-li totiž jednu maličkost: vydá-li Krakatit. Prokop se
rozzuřil: „Dal jsem vám Vicit, co ještě chcete? Člověče, řekl jsem vám, že
Krakatit nedostanete, ani kdybyste mi hlavu uřizli!“
Pan Carson krčil rameny a litoval, že v takovém připadě se nedá nic dělat;
neboť kdo má pod kloboukem Krakatit, je osobnost veřejně nebezpečná,
strašnějši než stonásobný vrah a krátce klasický připad pro zajišťovaci vazbu.
„Zbavte se Krakatitu, a je to,“ minil. „Bude vám to stát za to. Jinak… jinak
se bude přemýšlet o tom, dopravit vás někam jinam.“
Prokop, který chtěl užuž spustit válečný křik, se zarazil; zamumlal, že si to
ještě rozmysli, a běžel domů. Snad je tam odpověď, těšil se; ale nebylo tam
nic.
Odpoledne zahájil Prokop své veliké Čekáni v japonském altánu. Až do čtyř
hodin v něm bobtnala nedočkavá, udýchaná naděje: teď, teď už musi každým
okamžikem přijit, princeznička. Ve čtyři už nevydržel sedět; pobihal po altánu
jako jaguár v kleci, chystal se, že ji obejme kolena, třásl se nadšenim a
strachem. Pan Holz diskrétně ustoupil do houšti. K páté hodině počal našeho
pána přemáhat ohavný útlak zklamáni; tu však jej napadlo: snad přijde až za
šera; to se rozumi, že za šera! Usmival se a šeptal něžná slova. Za zámkem
zapadá slunce v podzimnim zlatě; prořidlé stromy se rýsuji ostře a nepohnutě,
je slyšet i šelestěni brouka ve spadaném listi; a nežli se nadáš, měkne jasná
hodina zlatovým soumrakem. Na zelené obloze zajiskři večernice; toť klekáni ve
vesmiru. Země se ztemňuje pod bledými nebesy, netopýr křivolace zakličkuje,
někde za parkem cinkaji potemnělé zvonky stáda; to krávy se vraceji vonice
teplým mlékem. V zámku jedno dvě okna proskoči světlem. Jak, již je šero?
Nebeské hvězdy, málo-li se na vás nahleděl žasnouci chlapec na mezi
mateřidouškové, málo-li se k vám obracel muž, málo-li trpěl a čekal, a zda
někdy nevzlykl pod svým křižem?
Pan Holz vystoupil ze tmy. „Můžeme jit?“
„Ne.“
Dopit, až do dna dopit své poniženi; neboť, hle, je jisto, že nepřijde. Staniž
se; ale nyni je nutno dopit hořkost, na jejimž dně je jistota; ožrat se
bolesti; navalit, navršit utrpeni a hanbu, aby ses svijel jako červ a zpitoměl
mukou. Chvěl jsi se před štěstim; oddej se bolesti, neboť ona je narkotikum
trpiciho. Je noc, již noc; a ona nepřicházi.
Strašná radost prošlehla srdcem Prokopovým: Ona vi, že tu čekám (neboť musi to
vědět); vykrade se v noci, až vše bude spát, a poleti ke mně s náruči
otevřenou a ústy plnými mizy polibků; semknem se němi a nepromluvime, pijice
si ze rtů nevýslovná doznáni. A ona přijde, bledá i potmě, chvějici se
mrazivou hrůzou radosti, a podá mi své hořké rty; a ona vystoupi z černočerné
noci –
Na zámku zhasinaji.
Pan Holz trči přimo před altánem s rukama v kapsách. Jeho unavený obrys pravi
„už by toho mohlo být dost“. Ale ten, který v altánu se zběsilým, nenávistným
smichem udupává posledni jiskřičku naděje, protahuje čas o zoufalé minuty;
neboť posledni minuta čekáni bude znamenat Konec Všemu.
V dalekém městečku bije půlnoc. Tedy konec všemu.
Černým parkem uháni Prokop domů, bůhvi proč teď má tak naspěch. Běži schýlen,
a pět kroků za nim zivá a kluše pan Holz.


XXXII.

Konec všemu: byla to skoro úleva, nebo alespoň něco jistého a bez pochyb; a
Prokop se do toho zahryzl s buldoči houževnatosti. Dobrá, je konec, neni se
již tedy čeho bát. Nepřišla schválně; stači, tenhle poliček stači; je tedy
konec. Seděl v lenošce neschopen vstát, znovu a znovu se opijeje svým
poniženim. Odkopnutý sluha. Nestoudná, nadutá, bez citu. Jistě mne dávala k
lepšimu svým galánům. Nuže, dohráno; tim lépe.
Při každém kroku na chodbě zvedl Prokop hlavu v nepřiznaném a horečném
očekáváni: snad nesou dopis – Ne, nic. Ani za to ji nestojim, aby se omluvila.
Je konec.
Pan Paul se desetkrát přišourá s ustaranou otázkou v bledých očich: Porouči
pán něco? Ne, Paule, docela nic. „Počkat, nemáte pro mne nějaký dopis?“ Pan
Paul vrti hlavou. „Dobře, můžete jit.“
Ledový hrot kameni v Prokopových prsou. Tahle prázdnota, to je konec. I kdyby
dveře se otevřely a stála v nich ona sama, řekl bych: konec. „Milý, milý,“
slyši ji Prokop šeptati, a tu propuká v zoufalstvi: „Proč jste mne tak
ponižila? Kdybyste byla komorná, odpustil bych vám vaši zpupnost; ale
princezně se neodpoušti. Slyšite? Je konec, konec!“
Pan Paul vrazil do dveři: „Porouči pán něco?“
Prokop se zarazil; posledni slova opravdu křičel nahlas. „Ne, Paule. Nemáte
pro mne nějaký dopis?“
Pan Paul vrti hlavou.
Den houstne jako ošklivá pavučina, je už večer. Tu šeptaji na chodbě nějaké
hlasy, a pan Paul se přišoupe v radostném spěchu: „Dopis, tady je dopis,“
šeptá vitězně, „mám rozsvitit?“
„Ne.“ Prokop mačká v prstech tenkou obálku a čichá jeji známou pronikavou
vůni: jako by chtěl poznat čichem, co je uvnitř. Ledový hrot v jeho srdci se
zaryl hlouběji. Proč piše až večer? Protože mi jen porouči: nesmite k nám
přijit, a je to. Dobrá, princezno, staniž se; když konec, tedy konec. Prokop
vyskočil, našel potmě čistou obálku a zalepil do ni jeji dopis neotevřený.
„Paul, Paul! doneste to ihned Jeji Jasnosti.“
Sotva se Paul vytratil, chtěl ho zavolat zpátky; ale bylo již pozdě; a Prokop
si zdrcen uvědomil, že to, co právě učinil, je bez návratu Konec Všemu. Tu
vrhl se na postel duse v poduškách cosi, co se mu nezvládnutelně dralo z úst.
Přišel pan Krafft, nejspiše zalarmován Paulem, a namáhal se čimkoliv utěšit
nebo rozptýlit palčivě rozrytého člověka. Prokop kázal přinést whisky, pil a
násilně se rozjařil; Krafft cucal sodovku a přisvědčoval mu ke všemu, ačkoliv
to byly věci naprosto nesrovnatelné s jeho zrzavým idealismem. Prokop klnul,
rouhal se, válel se v surových a nejnižšich výrazech; jako by mu dělalo dobře
pokálet vše, poplivat a pošlapat a zneuctit. Vyvrhoval ze sebe celé balvany
kleteb a ohavnosti; překypoval oplzlostmi, tahal z žen zrovna vnitřnosti a
častoval je nejstrašnějšimi věcmi, jaké lze vůbec vyslovit. Pan Krafft potě se
hrůzou mlčky přisvědčoval rozlicenému géniu; ale i Prokop se vydal ze své
vehemence, umlkl, chmuřil se a pil, až toho bylo dost; pak ulehl oblečen do
postele hourajici se jako loď a hleděl vytřeštěně do viřici tmy.
Ráno vstal rozkližený a zhnusený a odstěhoval se nadobro do laboratoře.
Nedělal nic, jen coural po světnici a kopal před sebou myci houbu. Pak ho něco
napadlo: namichal strašnou a labilni třaskavinu a poslal ji na ředitelstvi,
doufaje, že z toho povstane nějaká lepši katastrofa. Nestalo se nic; Prokop se
vrhl na kavalec a spal nepřetržitě třicet šest hodin.
Probudil se jako jiný člověk: ledový, střizlivý, ztuhlý; bylo mu jaksi na smrt
jedno, co se dálo předtim. Začal zas pracovat tvrdošijně a metodicky na
explozivnich rozpadech atomů; teoreticky docházel k tak strašlivým vyčisleným
brizancim, že mu vstávaly vlasy nad úžasnosti sil, mezi nimiž žijeme.
Jednou uprostřed počitáni jej stisnil letmý nepokoj. Jsem asi unaven, řekl si,
a šel bez klobouku trochu na vzduch. Ani o tom nevěda zamiřil k zámku;
mechanicky vyběhl po schodech a putoval chodbou k svému bývalému
„kavalirskému“ pokoji. Paul nebyl na své obvyklé židli. Prokop vešel dovnitř.
Vše bylo, jak to opustil; ale ve vzduchu vála známá, silná vůně princezny.
Nesmysl, minil Prokop, nějaká sugesce či co; čichal jsem přiliš dlouho ostré
zápachy laboratoře. A přece ho to trýznivě rozčilovalo.
Usedl na chvili a divil se: jak už je to vše daleko. Bylo ticho, odpoledni
ticho v zámku; zdalipak se tu něco změnilo? Slyšel tlumené kroky na chodbě,
snad je to Paul; i vyšel ven. Byla to princezna.
Překvapeni a skoro hrůza ji vrhly ke stěně; teď tu stoji zsinalá, oči takhle
široké, a rty se ji křivi jako v bolesti, až je vidět korálové maso jejich
dásni. Co hledá v hostinském křidle? Jde asi k Suwalskému, napadlo Prokopa
zčistajasna, a něco se v něm utrhlo; udělal krok, jako by se na ni chtěl
vrhnout, ale vydal jen hrdelni zařičeni a ubihal ven. Byly to ruce, co se za
nim vztáhlo? Nesmiš se ohlédnout! A pryč, pryč odtud!
Až daleko za zámkem, na úhorové půdě střelnice, zaryl Prokop tvář do hliny a
kameni. Neboť jediné jest horši než bolest poniženi: muka nenávisti.
Deset kroků stranou seděl vážný a soustředěný pan Holz.
Noc, která nastala, byla dusná a tiživá, neobyčejně černá; chýlilo se k bouři.
V takové chvili jsou lidé divně podrážděni a nemaji se nijak rozhodovat o svém
osudu; neboť nedobrý je to čas.
K jedenácté vyrazil Prokop ze dveři laboratoře a omráčil židli dřimajiciho
pana Holze natolik, že mu unikl a zmizel v nočni tmě. Chvili nato padly dva
výstřely u závodniho nádraži. Nizko na horizontě se ošklivě blýskalo; pak bylo
tim černěji. Ale z vysoké hráze u vchodu vyletěl ostrý pruh siného světla a
posunoval se kolem nádraži; zachycoval vagóny, rampy, hromady uhli, a nyni
popadl černou postavu, která uháni, kličkuje, padá k zemi a opět mizi ve
stinu. Nyni utiká mezi baráky k parku; několik postav se vrhá za ni. Reflektor
se otáči k zámku; opět dva poplašné výstřely, a běžici postava se zarývá do
houšti.
Krátce nato zadrnčelo okno ložnice princezniny; princezna vyskočila a
otevřela, a tu vletěl dovnitř zmuchlaný list papiru zatižený kaminkem. Na
jedné straně bylo něco naprosto nečitelně naškrabáno přelomenou tužkou; na
druhé straně byly hustě a drobně psané výpočty. Princezna na sebe házela šaty,
ale tu již padl výstřel za rybnikem; podle zvuku to bylo naostro. Ztuhlými
prsty princezna zadrhovala háčky šatů, zatimco komorná, potřeštěná koza, se
třásla pod peřinou strachy ze střileni. Ale než mohla princezna vyjit, viděla
oknem, jak dva vojáci vlekou někoho černého; burácel jako lev a hleděl je
setřást; nebyl tedy raněn.
Jen na obzoru se blýská širokými žlutými plameny; ale ulevujici bouře se ještě
nespustila.
Vystřizlivělý Prokop se vrhl střemhlav do laboratorni práce, nebo aspoň se k
tomu nutil. Před chvili odešel od něho Carson; byl studeně popuzen a prohlásil
zřetelně, že podle všeho bude pan Prokop co nejdřive transferován jinam, na
misto bezpečnějši; když prý to nejde po dobrém, tedy to půjde po zlém. Nu, vše
jedno; na ničem už nezáleži. Zkumavka praskla Prokopovi v prstech.
V předsini odpočivá pan Holz s hlavou ofáčovanou. Prokop mu strkal pár tisic
bolestného, nevzal je. Ach co, ať dělá, co chce. Být transferován jinam –
Staniž se. Zlořečené zkumavky! praská jedna po druhé –
V předsini šramot, jako když někdo vyleti z dřimoty. Zas asi návštěva, Krafft
či kdo; Prokop se ani neobrátil od kahanu, když zaskřipěly dveře. „Milý,
milý,“ zašeptalo to ode dveři. Prokop zavrávoral, zachytil se stolu a otočil
se jako v snách. Princezna stála opřena o veřeje, bledá, s očima temně
utkvělýma, a tiskla pěstě k prsoum, snad aby přemohla tlučeni srdce.
Šel k ni chvěje se na celém těle, a dotkl se prsty jejich lici a ramen, jako
by nemohl uvěřit, že je to ona. Položila mu studené, třesouci se prsty na
ústa. Tu vytrhl dveře a nahlédl do předsině. Pan Holz zmizel.


XXXIII.

Seděla na kavalci jako ztuhlá, s koleny až pod bradou, změtené vlasy proudem
vrženy přes tvář a ruce stočeny kolem šije jako v křeči. Hroze se toho, co
učinil, páčil ji hlavu nazad, libal kolena, ruce, vlasy, smýkal se po zemi,
drtil prosby a laskáni; neviděla a neslyšela. Zdálo se mu, že se otřásá
odporem při každém jeho doteku; vlasy se mu lepily k čelu potem úzkosti, i
běžel k hydrantu a pustil si na hlavu proud studené vody.
Potichu vyskočila a přibližila se k zrcadlu. Šel k ni po špičkách chtěje ji
překvapit; ale tu viděl v zrcadle, jak měři sebe samu s výrazem tak divoké,
hrůzné, zoufalé ošklivosti, že ustrnul. Zahlédla ho za sebou a vrhla se k
němu. „Nejsem ošklivá? Nehnusim se ti? Co jsem udělala, co jsem udělala!“
Přilnula lici k jeho prsoum, jako by se chtěla ukrýt. „Jsem hloupá, viď? Já
vim… já vim, že jsi zklamán. Ale nesmiš mnou pohrdat, viš?“ Zarývala se do
něho tváři jako kajici děvčátko. „Že, již neutečeš? Já udělám všechno, nauč
mne všemu, co chceš, viš? jako bych byla tvá žena. Milý, milý, nenechávej mne
teď myslet; budu zas protivná, když budu myslet, budu jako zkamenělá; nemáš
poněti, nač myslim. Ne, nenech mne teď –“ Zaryla rozechvělé prsty do jeho
šije; zvedl ji hlavu a libal ji mumlaje nadšenim vše možné. Zrůžověla nyni a
zkrásněla. „Nejsem ošklivá?“ šeptala mezi polibky šťastná a omámená. „Chtěla
bych být krásná jen pro tebe. Viš, proč jsem přišla? Čekala jsem, že mne
zabiješ.“
„A kdybys ty,“ šeptal Prokop kolébaje ji v náruči, „kdybys tušila to… to, co
se stalo, byla bys přišla?“
Princezna kývla hlavou. „Jsem hrozná, viď? Co si tak o mně mysliš! Ale já tě
nenechám myslet.“ Prudce ji sevřel a zvedl. „Ne, ne,“ prosila a bránila se mu;
ale pak spočivala s očima vlaze tonoucima a sladkými prsty se probirala v
čupřině jeho těžké lbi. „Milý, milý,“ dýchala mu vlhce do tváře, „jak jsi mne
trápil ty posledni dny! Máš mne –?“ Slovo „rád“ neřekla. Horlivě přisvědčil:
„A ty?“
„Mám. Už bys to mohl vědět. Viš, jaký jsi? Jsi nejkrásnějši nosatý a šeredný
člověk. Máš krvavé oči jako bernardýn. To je od práce? Snad bys nebyl tak
milý, kdybys byl kniže. Ach, pusť už!“
Vyvinula se mu a šla se k zrcadlu česat. Divala se tam zkoumavě a pak provedla
před zrcadlem hlubokou dvorskou poklonu. „To je princezna,“ řekla ukazujic na
svůj obraz, „a tohle,“ dodala bezbarvě a obrátila prst k svým prsoum, „je jen
tvá holka. Tak vidiš. Snad sis nemyslel, že máš princeznu?“
Prokop sebou trhl jako udeřen. „Co to znamená?“ vyhrkl a uhodil pěsti do
stolu, až zařinčelo rozbité sklo.
„To si musiš vybrat, buď princeznu, nebo holku. Princeznu ty nemůžeš mit;
můžeš ji zbožňovat zdálky, ale ruky ji nepolibiš; a nebudeš se ptát jejich
oči, má-li tě ráda. Princezna nesmi; má za sebou tisic let čisté krve. Neviš,
že jsme bývali suverény? Ach, ty neviš nic; ale musiš vědět aspoň to, že
princezna je na skleněné hoře; tam se nedostaneš. Ale obyčejnou ženskou, tuhle
ordinárni hnědou holku můžeš mit; sáhni, je tvá, jako nějaká věc. Nu, tak si
vyber, co z toho dvojiho chceš.“
Prokopa z ni zrovna mrazilo. „Princeznu,“ vypravil těžce ze sebe.
Přistoupila k němu a vážně ho polibila na tvář. „Jsi můj, viď? Ty milý! Tak
vidiš, máš princeznu. Tedy přece jsi pyšný na to, že to je princezna? Vidiš,
jak strašnou věc musi princezna udělat, aby se někdo pár dni nadýmal! Pár dni,
pár týdnů; princezna ani nemůže žádat, aby to bylo navždycky. Já vim, já to
vim: od prvni chvile, co jsi mne viděl, jsi chtěl princeznu; ze vzteku, z
mužského velikášstvi nebo proč, viď? Proto jsi mne tak nenáviděl, že jsi mne
chtěl; a já jsem ti naběhla. Mysliš, že mne to mrzi? Naopak, já jsem na to
pyšná, že jsem to provedla. Je to veliký kousek, že? tak se horempádem
zahodit; být princezna, být panna, a přijit… přijit sama…“
Prokop se děsil jejich řeči. „Mlč,“ prosil a vzal ji do chvějicich se rukou.
„Nejsem-li vám… roven… rodem…“
„Jak jsi to řekl? Roven? Copak si mysliš, kdybys byl kniže, že bych k tobě
přišla? Oh, kdybys chtěl, abych s tebou jednala jako se sobě rovným, nemohla
bych… být u tebe… takhle,“ vykřikla rozpinajic nahé paže. „To je ten hrozný
rozdil, chápeš to?“
Prokopovi klesly ruce. „Tohle jste neměla řikat,“ zaskřipěl couvaje.
Vrhla se mu kolem krku. „Milý, milý, nenechávej mne mluvit! Copak ti něco
vyčitám? Přišla jsem… sama… protožes chtěl utéci nebo se dát zabit, já nevim;
to by přec každé děvče… Mysliš, že jsem to neměla udělat? Řekni! Udělala jsem
špatně? – – Vidiš,“ zašeptala trnouc, „vidiš, ty to také neviš!“
„Počkej,“ křikl Prokop, vyvinul se ji a velkými kroky měřil pokoj; náhlá
naděje ho zrovna oslňovala. „Věřiš ve mne? Věřiš, že něco dovedu? Umim
strašlivě pracovat. Nikdy jsem nemyslel na slávu; ale kdybys chtěla… Pracoval
bych ze všech sil! Viš, že… Darwina nesli k hrobu vévodové? Kdybys chtěla,
udělal bych… udělal bych ohromné věci. Umim pracovat – Mohu změnit povrch
země. Nech mi deset let, a uvidiš, uvidiš –“
Zdálo se, že ho ani neposlouchá. „Kdybys byl kniže, stačilo by ti, abych se na
tebe podivala, abych ti ruku podala, a věděl bys, věřil bys, nemusel
pochybovat – Nemuselo by se ti dokazovat… tak hrozně jako já, viš? Deset let!
Dovedl bys mně věřit deset dni? Kdežpak deset dni! Za deset minut ti bude to
všecko málo; za deset minut se budeš mračit, ty milý, a vztekat se, že
princezna tě už nechce… protože to je princezna a ty nejsi kniže, viď? A tož
dokazuj, ty ztřeštěná, ubohá, přesvědči ho, můžeš-li; žádný tvůj důkaz neni
dost veliký, žádné poniženi dost nelidské – Běhej za nim, nabizej se, dělej
vic než každá jiná holka, já nevim co, já nevim už co! Co si mám s tebou
počit?“ Přistoupila k němu a nabidla mu rty. „Tak co, budeš mi věřit deset
let?“
Popadl ji drsně vzlykaje. „Už je to tak,“ šeptala a hladila mu vlasy. „Také
sebou trháš na řetěze, viď? A přece bych neměnila… neměnila s tim, jaká jsem
byla. Milý, milý, já vim, že ty mne opustiš.“ Zlomila se mu v rukou; zvedl ji
a rozrýval násilnými polibky jeji semknutá ústa.
Odpočivala s očima zavřenýma, sotva dýchajic; a Prokop, nakloněn nad ni, se
srdcem stisněným zkoumal nevyzpytatelný mir té palčivé, napjaté tváře. Vytrhla
se mu jako ze sna. „Co tu všechno máš v těch lahvich? Je to jedovaté?“
Prohližela jeho regály a nástroje. „Dej mi nějaký jed.“
„Proč?“
„Kdyby mne odtud chtěli odvézt.“
Znepokojil se jeji vážnou lici, a aby ji podvedl, odměřoval do malé dózičky
plavenou křidu; než vtom již padla sama na krystalinický arzenik. „Neber to,“
křikl, ale už s tim byla v kabelce.
„Tak ty můžeš být slavný,“ vydechla. „Vidiš, na to jsem ani nemyslela.
Povidáš, že Darwina nesli vévodové? Kteři to byli?“
„Nu, na tom snad nezáleži.“
Polibila ho na tvář. „Ty jsi milý! Jakpak by na tom nezáleželo?“
„Tak tedy… vévoda z Argyllu a… a vévoda z Devonshiru,“ bručel.
„Skutečně!“ Přemýšlela o tom, až vraštila čelo. „To bych nikdy neřekla, že
učenci jsou tak… A tys mi to řekl jen tak vedle, jdi!“ Sáhla mu na prsa a
ramena, jako by byl novou věci. „A ty, ty bys také mohl –? Jistě?“
„Nu, počkej na můj pohřeb.“
„Ach, kdyby to bylo hodně brzo,“ děla roztržitě a s naivni krutosti. „Ty bys
byl hrozně krásný, kdybys byl slavný. Viš, co se mi na tobě nejvic libi?“
„Nevim.“
„Já také ne,“ řekla zamyšleně a vracela se k němu s polibkem. „Teď už to
nevim. Teď, kdybys byl kdo chtěl a jaký chtěl –“ Udělala bezmocný pohyb
rameny. „To je prostě provždycky, viš?“
Prokop žasl nad touto monogamni přisnosti. Stála před nim, až po oči zahalená
v modré lišce, a divala se na něho třpytivýma, měkkýma očima v hodince
soumraku. „Oh,“ vzdychla náhle a svezla se na kraj židle, „třesou se mi nohy.“
Hladila a třela je s naivni nestoudnosti. „Jak budu potom jezdit? Přijď, milý,
přijď se mi dnes ukázat. Mon oncle Charles tu dnes neni, a i kdyby – Mně už je
to jedno.“ Vstala a polibila ho. „Sbohem.“
Ve dveřich stanula, zaváhala a vrátila se k němu. „Zab mne, prosim tě,“ děla s
rukama svislýma, „zab mne!“
Přitáhl ji dlaněmi: „Proč?“
„Abych nemusela odtud… a abych už nikdy, nikdy už nemusela sem.“
Zašeptal ji do ucha: „… Zitra?“
Pohlédla na něho, a sklonila trpně hlavu; bylo to… přece jen přitakáni.
Vyšel až dlouho po ni do vlčiho soumraku. Někdo se sto kroků dále zvedl se
země a čistil si rukávem šaty. Mlčelivý pan Holz.


XXXIV.

Když přišel po večeři, nevěřici už a celý ve střehu, stěži ji poznal, jak byla
krásná. Citila jeho užaslý a žárlivý pohled, pohled, který ji obléval od hlavy
k patě; i zazářila a oddávala se mu očima tak bez ohledu k ostatnim, že trnul.
Byl tam nějaký nový host, ďHémon se jmenoval, diplomat či co: člověk
mongolského typu s fialovými pysky a krátkými černými vousy kolem. Tenhle pán
tedy byl patrně znalý fyzikálni chemie; Becquerel, Planck, Niels Bohr,
Millikan a taková jména mu jen litala od huby; znal Prokopa z literatury a
ohromně se interesoval o jeho práci. Prokop se dal strhnout, rozpovidal se,
zapomněl na okamžik divat se na princeznu; za to utržil pod stolem takové
kopnuti do bérce, že sykl a byl by ji to málem vrátil; nádavkem dostal
planouci pohled žárlivosti. V té chvili musel zodpovědět hloupou otázku prince
Suwalského, co je to vlastně ta energie, o které tu pořád povidaji; i popadl
cukřenku, vrhl na princeznu pohled tak rozhořčený, jako by ji to chtěl hodit
na hlavu, a vysvětloval, kdyby se podařilo naráz vyvinout a vybit všecku
energii obsaženou v tomhle, že by to vyhodilo do povětři Montblank i s
Chamonix; ale to že se nepodaři.
„Vy to uděláte,“ prohlásil ďHémon určitě a vážně.
Princezna se celým tělem naklonila přes stůl: „Co jste to řekl?“
„Že on to udělá,“ opakoval pan ďHémon s naprostou jistotou.
„Tak vidiš,“ řekla princezna docela nahlas, a vitězně si sedla. Prokop zrudl a
netroufal si na ni pohlédnout.
„A když to udělá,“ ptala se dychtivě, „bude hrozně slavný? Jako Darwin?“
„Když to udělá,“ děl pan ďHémon bez váháni, „budou si králové pokládat za čest
nést cip jeho pohřebni pokrývky. Budou-li ještě nějaci králové.“
„Nesmysl,“ bručel Prokop, ale princezna zaplála nevýslovným štěstim. Za nic na
světě by na ni nepohlédl; brumlal celý rudý a v rozpacich drtil mezi prsty
kostky cukru. Konečně se odvážil zvednout oči; divala se na něj přimo a plně,
se strašlivou láskou. „Máš?“ hodila mu polohlasně přes stůl. Rozuměl předobře:
máš mne rád? – ale dělal, jako by neslyšel, a začal se honem divat na ubrus.
Proboha, to děvče šili, nebo chce naschvál –“Máš?“ doletělo přes stůl
hlasitěji a naléhavěji. Kývl rychle a podival se na ni očima opilýma radosti.
Naštěsti v obecném hovoru to všichni přeslechli; jenom pan ďHémon měl výraz
přiliš diskrétni a nepřitomný.
Hovor se stočil sem tam, a najednou pan ďHémon, člověk patrně znalý všeho,
vykládal von Graunovi jeho rodokmen do třináctého stoleti. Princezna se do
toho vmisila s nesmirným zájmem; a tu nový host vypočitával jeji předky, jako
když bičem mrská. „Dost,“ zvolala princezna, když došel k roku 1007, kdy prvý
Hagen založil pečorský baronát v Estonsku, kohosi tam zavraždiv; neboť dále se
genealogové ovšem nedostali. Ale pan ďHémon pokračoval: tento Hagen čili Agn
Jednoruký byl dokázatelně tatarský kniže, zajatý při nájezdu na Kamskou
oblast; perská historie vi o chánu Aganovi, který byl syn Giw-khana, krále
Turkmenů, Uzbeků, Sartů a Kirgizů, který byl syn Weiwuše, který byl syn Litaj-
khana Dobyvatele. Tento „cisař“ Li-Taj je dokázán v činských pramenech jako
vládce Turkmenska, Dzungarska, Altaje a západniho Tibetu až po Kašgar, jejž
spálil povraždiv na padesát tisic lidi, mezi nimi činského vladaře, kterému
dal utahovat namočený provaz kolem hlavy tak dlouho, až praskla jako ořech. O
dalšich předcich Litajových neni nic známo, pokud snad nebudou přistupny
archivy ve Lhase. Jeho syn Weiwuš, i na mongolské pojmy trochu divoký, byl v
Kara Butaku umlácen stanovými tyčemi. Jeho syn Giw-khan vyplenil Chivu a řádil
až po Itil čili Astrachan, kde se proslavil tim, že dal dvěma tisicům lidi
vyloupat oči, uvázal je na provaz a vyhnal do kubánských stepi. Agan-khan
pokračoval v jeho stopách čině nájezdy až po Bolgar neboli dnešni Simbirsk,
kde někde byl zajat, uťata mu pravá ruka a držán jako rukojmi až do té doby,
kdy se mu povedlo utéci k Baltu mezi tamni čudské Livy. Tam byl pokřtěn od
německého biskupa Gotilly nebo Gutilly a nejspiš z náboženského rozniceni
zapichl ve Verro na hřbitově šestnáctiletého dědice pečorského, načež si vzal
jeho sestru za ženu; dokázanou bigamii pak zaokrouhlil své panstvi až po
jezero Pejpus. Viz o tom letopisy Nikiforovy, kde již je nazýván „knjaz Agen“,
kdežto öselský zápis jej tituluje „rex Aagen“. Jeho potomci, dokončil pan
ďHémon tiše, byli vypuzeni, ale nikoliv sesazeni; načež vstal, uklonil se a
zůstal stát.
Nemůžete si představit, jakou tohle udělalo senzaci. Princezna přimo pila
každé slovo ďHémonovo, jako by ta řada tatarských hrdlořezů byla tim
nejohromnějšim zjevenim světa; Prokop na ni hleděl s úžasem: ani nemrkla při
dvou tisicich párech vyloupaných oči; mimovolně hledal na jeji tváři tatarské
rysy. Byla překrásná, vytáhla se jaksi a skoro veličensky se uzavřela v sebe;
najednou byla taková distance mezi ni a všemi ostatnimi, že všichni se
narovnali jako na dvornim dîner a již se ani nepohnuli s očima upřenýma k ni.
Prokop měl tisic chuti praštit do stolu, řici něco hrubého, porušit tu
strnulou a jaksi bezradnou scénu. Seděla s očima sklopenýma, jako by na něco
čekala, a na jejim hladkém čele kmitlo cosi jako netrpělivost: nu tak, bude
to? Pánové pohlédli tázavě na sebe, na vztyčeného pana ďHémona, a počali jeden
po druhém vstávat. Prokop se zvedl také, nechápaje, oč jde. U všech všudy, co
to znamená? všichni stoji jako svice s rukama na švech kalhot a hledi k
princezně; teprve teď zvedá princezna oči a kyne hlavou jako ten, kdo děkuje
na pozdrav nebo dává svoleni usednout. Skutečně všichni usedaji; a teprve když
zase seděl, pochopil Prokop s úžasem: tohle byl hold panovnici osobě. Naráz se
zapotil trapným vztekem. Kriste, a tu komedii jsem dělal s sebou! Což je to
vůbec možno, což se nedaji do smichu povedené legraci, což je myslitelno, aby
někdo bral vážně takové tatrmanstvi?
Už nabiral do plic homérický smich, aby spustil hned s prvnimi (proboha, je to
přec jenom pro švandu?), když se princezna zvedla. Všichni rázem vstali, i
Prokop, pevně přesvědčený, že teď to praskne. Rozhlédla se a utkvěla očima na
tlustém cousinovi; pokročil dva tři kroky k ni, ruce svisle dolů, trochu
nakloněn vpřed, děsně směšný; bohudik, je to tedy přece jen švanda. Princezna
s nim chvili hovoři a kyne hlavou; tlustý cousin se klani a pozpátku couvá.
Princezna pohlédne na Suwalského; princ se bliži, odpovidá, povi nějaký uctivý
vtip; princezna se zasměje a kyne hlavou. Což je to tedy vážné? Nyni utkvivá
princezna očima lehce na Prokopovi; ale Prokop se nehnul. Pánové se stavi na
špičky a hledi napjatě k němu. Princezna mu dává očima znameni; nehnul se.
Princezna miři k starému, jednorukému majoru od artilerie, který je pokryt
medailemi jako Kybelé ceciky. Major se už narovnává, až to na něm řinči, ale
tu malým půlobratem stoji princezna těsně u Prokopa.
„Milý, milý,“ povidá tiše a jasně, „máš –? Už se zas mračiš. Já bych tě chtěla
polibit.“
„Princezno,“ bručel Prokop, „co znamená tahle fraška?“
„Nekřič tak. To je vážnějši, než si můžeš představit. Viš, že mne teď budou
chtit vdát?“ Zachvěla se hrůzou. „Milý, ztrať se teď odtud. Jdi z chodby do
třetiho pokoje a počkej tam na mne. Musim tě vidět.“
„Poslyšte,“ chtěl Prokop něco řici, ale tu již kynula hlavou a miřila plavně k
starému majorovi.
Prokop nevěřil svým očim. Ději se takovéhle věci, neni to smluvená produkce
pro smich, berou ti lidé vážně své role? Tlustý cousin jej vzal pod paži a
táhl diskrétně stranou. „Vite, co to znamená?“ šeptal rozčilen. „Starého
Hagena rani mrtvice, až se to dozvi. Panovnický rod! Viděl jste tady ondyno
toho následnika? Měla být svatba a rozešlo se to. Ten člověk, ten je sem jistě
poslán – Jezus, taková linie!“
Prokop se mu vymknul. „Odpusťte,“ mumlal, vysoukal se co možná nejneobratněji
na chodbu a vešel do třetiho pokoje. Bylo to jakési čajové zákouti se
zastřenými světly, samy lak, červený porcelán, kakemona a podobné hlouposti.
Prokop pobihal s rukama na zádech a bručel v miniaturnim pokojiku jako moucha
masařka narážejici hlavou na okenni tabule. Sakra, něco se změnilo; pro pár
všivých tatarských rasů, za které by se slušný člověk styděl… Pěkný původ,
děkuju nechci! A pro pár takových Hunů ti idioti zrovna trnou, padaji na
břicho, a ona, ona sama – Moucha masařka se bezdeše zarazila. Teď přijde…
tatarská kněžna a řekne: Milý, milý, je mezi námi konec; považ přece, že
pravnučka Litaj-chána se nemůže milovat se synem ševcovým. Klep, klep, slyšel
v hlavě tatinkovo kladivko, a zdálo se mu, že čichá těžký, třislový pach kůže
a trapné čpěni ševcovského mazu; a maminka v modré zástěře stoji, chudák, celá
rudá nad plotýnkou –
Moucha masařka divoce zabzučela. To se vi, kněžna! Kam, kam jsi dal hlavu,
člověče! Teď klekneš, přijde-li, uhodiš čelem o zem a řekneš: Smilováni,
tatarská kněžno; já už se vickrát neukážu.
Čajový pokojik slabě voni kdoulemi a záři matně a měkce; zoufalá moucha naráži
hlavou o skla a úpi hlasem téměř lidským. Kam jsi dal hlavu, ty hlupče?
Princezna rychle, tiše vklouzla do pokoje. U dveři sáhla po vypinači a zhasla;
a potmě citil Prokop ruku, jež se lehýnce dotýká jeho tváře a klade se mu
kolem krku. Sevřel princeznu v dlanich; je tak útlá a skoro netělesná, že se
ji dotýká s bázni jako něčeho křehoučkého a pavučinového. Dýchá mu do tváře
vzdušné polibky a šeptá něco nesrozumitelně; nehmotné hlazeni mrazi Prokopovy
vlasy. Cosi zalomcuje křehoučkým tělem, ruka na jeho šiji se přimyká těsněji a
vlahé rty se pohybuji na jeho ústech, jako by bezhlase a naléhavě mluvily.
Nekonečnou vlnou, celým přilivem záchvěvů zmocňuje se Prokopa silněji a
silněji; táhne k sobě jeho hlavu, tiskne se k němu hrudi a koleny, oviji ho
oběma pažema, vrhá se ústy do jeho úst; strašné, bolestné sevřeni drtici a
němé, náraz zubů o sebe, sténáni člověka, který se dusi; vrávoraji v
křečovitém, nepřičetném objeti, nepustit! zalknout se! srůst nebo zemřit!
Vzlykla a zalomila se bezvládně; uvolnil děsné kleště svých rukou, vymkla se,
zakolisala se jako opilá, vyňala ze záňadři šáteček a osušila na rtech sliny
nebo krev; a aniž řekla slova, vešla do sousedniho osvětleného pokoje.
S hlavou praskajici zůstal Prokop potmě. Toto posledni objeti mu připadlo jako
rozloučeni.


XXXV.

Tlustý cousin měl pravdu: starého Hagena ranila z radosti mrtvice, ale
nedorazila ho ještě; ležel bez vlády obklopen doktory a namáhal se otevřit
levé oko. Narychlo byl přivolán oncle Rohn a jiné přibuzenstvo; starý kniže se
stále pokoušel zvednout levé vičko, aby pohleděl na svou dceru a řekl ji cosi
svým jediným živým okem.
Vyběhla prostovlasá, jak byla u jeho lůžka, a utikala k Prokopovi, jenž od
rána hlidal v parku. Ani za mák nedbajic Holze polibila ho rychle a zavěsila
se do něho; jen tak mimochodem se zminila o otci a oncle Charlesovi, zaujatá
něčim, roztržitá a něžná. Tiskla mu paži a lisala se k němu, hned zase
nepřitomná a zamyšlená. Začal rýpat a žertovat o tatarské dynastii… tak trochu
nahroceně; šlehla po něm očima a zavedla řeč jinam, dejme tomu na včerejši
odpoledne. „Do posledni chvile jsem myslela, že k tobě nepřijdu. Viš, že mně
je skoro třicet let? Když mně bylo patnáct, zamilovala jsem se do našeho
kaplana, ale strašně. Šla jsem se mu zpovidat, abych ho viděla zblizka; a
protože jsem se styděla řici, že jsem kradla nebo lhala, zpovidala jsem se mu,
že jsem zesmilnila; nevěděla jsem, co to je, měl chudák mnoho práce vymluvit
mně to. Teď už bych se mu nemohla zpovidat,“ dokončila tiše, a na rtech se ji
škubla nějaká hořkost.
Prokopa znepokojovala jeji stálá sebeanalýza, v niž tušil palčivou sebetrýzeň.
Hleděl nalézt jakékoliv jiné téma, ale shledával s hrůzou, že nemluvi-li o
lásce, nemaji vlastně o čem mluvit. Stáli na baště; princezně jaksi ulevovalo
vracet se zpátky, vzpominat, povidat o sobě malé a důvěrné věci. „Brzo po té
zpovědi byl ti u nás učitel tance, a ten se miloval s mou guvernantkou,
takovou tlustou ženskou. Já jsem na to přišla a… viděla jsem je, viš? Mně se
to ošklivilo, oh! ale hlidala jsem je a… Já to nemohla pochopit. Ale pak
jednou při tanci jsem to zničehonic pochopila, když mne k sobě přitlačil. Pak
už na mne nesměl vůbec sáhnout; dokonce jsem… po něm… střelila z flobertky.
Museli je dát oba pryč.
V té době… v té době mě hrozně trápili matematikou. Mně vůbec nešla do hlavy,
viš? Učil mě takový zlý profesor, slavný učenec; vy učenci jste všichni divni.
Dal mi úkol a dival se na hodinky; za hodinu to muselo byt vypočitáno. A když
už mně zbývalo jenom pět minut, čtyři minuty, tři minuty, a já neměla ještě
nic, tu mi… zabouchalo srdce, a já měla… takový strašný pocit –“ Zaťala prsty
do Prokopovy paže a zasykla. „Pak už jsem se na ty hodiny i těšila.
V devatenácti mne zasnoubili; to ani neviš, viď? A protože jsem už věděla
všechno, musel mně můj ženich přisahat, že se mne nikdy nedotkne. Za dvě léta
padl v Africe. Vyváděla jsem – z romantiky nebo proč – tak, že mne pak už
nikdy nenutili vdát se. Myslela jsem, že tim mám všecko odbyto.
A vidiš, tehdy jsem se do toho vlastně jen nutila, nutila jsem se věřit, že
jsem mu zůstala něco dlužna a že mu i po smrti musim stát v slově; až se mi
nakonec z toho všeho zdálo, že jsem ho milovala. Teď vidim, že jsem to všechno
jen hrála sama před sebou; a že jsem necitila nic vic, nic vic než hloupé
zklamáni.
Viď, je to divné, že ti musim o sobě řikat takové věci? Viš, to je tak
přijemně nestydaté řici na sebe všechno; člověka přitom až mrazi, jako by něco
svlékal.
Když jsi sem přišel, napadlo mě na prvni pohled, že jsi jako ten profesor
matematiky. Já se tě až bála, ty milý. Teď mi zas dá takový úkol, lekla jsem
se, a už mi začalo bouchat srdce.
Koně, koně, to mne zrovna opijelo. Když mám koně, myslela jsem, že nepotřebuju
lásku. A jezdila jsem jako divá.
Vždycky se mi zdálo, že láska, viš, je něco sprostého a… hrozně ošklivého.
Vidiš, teď se mi to už nezdá; a to mne právě tak děsi a pokořuje. A zas mne až
těši, že jsem jako každá jiná. Když jsem byla malá, bála jsem se vody. Učili
mne plavat na suchu, ale do rybnika jsem nešla; vymyslila jsem si, že tam jsou
pavouci. A jednou to na mne přišlo, taková odvaha nebo zoufalstvi: zavřela
jsem oči, udělala křižek a skočila. Neptej se, jak jsem byla potom pyšná; jako
bych ve zkoušce obstála, jako bych všechno poznala, jako bych se celá změnila.
Jako bych teprv teď vyspěla… Milý, milý, zapomněla jsem udělat křižek.“
Kvečeru přišla do laboratoře, neklidná a zaražená. Když ji vzal do náruče,
koktala s hrůzou: „Otevřel oko, otevřel oko, oh!“ Myslela tim starého Hagena;
odpoledne (neboť Prokop čihal jako blázen) měla dlouhý hovor s oncle Rohnem,
ale nechtěla o tom mluvit. Vůbec zdálo se, že dychti něčemu uniknout; vrhala
se do Prokopova objeti tak žiznivě a oddaně, jako by se chtěla za každou cenu
omámit do bezvědomi. Konečně strnula s očima zavřenýma, chabá jako věchýtek;
myslel, že spi, ale tu počala šeptat: „Milý, nejmilejši, já něco provedu, já
provedu něco hrozného; ale pak, pak mne už nesmiš opustit. Přisahej, přisahej
mi,“ drtila divoce a vyskočila, ale hned to zas přemohla. „Ach ne. Co bys mi
mohl přisahat? V kartách mně vyšlo, že odejdeš. Chceš-li to udělat, udělej to,
udělej to ještě teď, dokud neni pozdě.“
Prokop, to se rozumi, vyletěl jako raketa: že ona se ho chce zbavit, že ji
stoupla do hlavy tatarská pýcha a kdesi cosi. Rozčilila se a křičela na něho,
že je nizký a surový, že si to zapovidá, že… že…; ale jen to z ni vylitlo, už
mu s výkřikem visela na krku zdrcená a kajici: „Jsem zviře, viď? Já to tak
nemyslela. Vidiš, princezna nikdy nekřiči; zamrači se, odvráti se, a dost,
stači to; ale na tebe křičim jako… jako bych byla tvá žena. Bij mne, prosim
tě. Počkej, ukážu ti, že i já bych dovedla… Pustila ho a zničehonic, tak jak
byla, jala se poklizet laboratoř; dokonce namočila pod hydrantem hadr a
pustila se kolenačky do utiráni celé podlahy. Mělo to být patrně pokáni; ale
nějak se ji to zalibilo, rozjařila se, oháněla se hadrem po podlaze a bzučela
si pisničku, kterou pochytla někde od služek, „až půjdeš spat“ či něco
podobného. Chtěl ji zvednout. „Ne, počkej,“ bránila se, „ještě tamhle.“ A již
vlezla s hadrem pod stůl.
„Prosim tě, pojď sem,“ ozvalo se za chvili zpod stolu udiveně. Brumlaje
jistými rozpaky vsoukal se za ni. Seděla v dřepu, objimajic kolena rukama.
„Ne, jen se podivej, jak vypadá stůl zespoda. Já to ještě nikdy neviděla. Nač
to tak je?‘ Položila mu na tvář ruku prokřehlou od mokrého hadru. „Hu, studim,
viď? Ty jsi celý tak hrubě udělaný jako stůl zespoda; to je na tobě to
nejkrásnějši. Jini… jiné lidi jsem viděla jen tak, viš? po té hladké,
ohoblované straně; ale ty, ty jsi na prvni pohled samý takovýhle trám a
štěrbina a všecko to, viš, čim drži lidský tvor pohromadě. Když se po tobě
jede prstem, zadře si člověk třisku; ale přitom je to tak krásně a poctivě
uděláno – Člověk to začne vidět jinak a… vážněji než po té hladké straně. To
jsi ty.“
Schoulila se vedle něho jako starý kamarád. „Mysli si, člověče, že jsme třeba
ve stanu, nebo v takovém srubu,“ šeptala vyjeveně. „Já jsem si nikdy nesměla
hrát s kluky; ale někdy jsem… tajně… šla za zahradnikovými hochy, a lezla s
nimi po stromech a přes ploty… Pak se doma divili, proč mám roztrhané kalhoty.
A když jsem se tak ztratila a letěla za nimi, to mi tak krásně tlouklo srdce
strachem – Když jdu za tebou, mám ti docela ten krásný strach jako tehdy.“
„Teď jsem tak dobře schovaná,“ bzučela šťastně, ležic mu hlavou na kolenou.
„Sem za mnou nemůže nic. I já jsem po rubu, jako ten stůl; obyčejná ženská,
která nemysli na nic a jenom se kolébá – Proč je člověku tak dobře v úkrytu?
Tak vidiš, teď vim, co je štěsti; to se museji zavřit oči… a udělat se malý…
docela maličký a k nenalezeni…“
Kolébal ji mirně a hladil ji rozpoutanou hřivu; ale jeho oči se vytřeštily
přes jeji hlavu do prázdna.
Prudce k němu obrátila tvář. „Nač jsi teď myslel?“
Uhnul plaše očima. Nemohl ji přece řici, že viděl před sebou tatarskou
princeznu v jeji slávě, tvora veličenského a ztuhlého pýchou, a to že je ta,
kterou i teď… kterou v muce a touze…
„Nic, nic,“ zabručel nad pokorným a šťastným uzličkem na svých kolenou, a
pohladil snědé ličko. Zapálilo se milostnou vášnivosti.


XXXVI.

Lépe by byl učinil, kdyby byl toho večera nepřišel; ale přihnal se právě
proto, že mu to zakazovala. Oncle Charles byl k němu velmi, velmi přivětivý;
naneštěsti viděl, jak si ti dva při docela nevhodné a okaté přiležitosti
tisknou ruce, vzal si na to dokonce monokl, aby to lépe viděl; pak teprve
princezna utrhla ruku a začervenala se jako školačka. Oncle k ni přistoupil a
něco ji pošeptal odváděje ji pryč. Pak se již nevrátila; jen Rohn přišel a
tvářil se jakoby nic a mluvil s Prokopem, velmi diskrétně sonduje po citlivých
mistech. Prokop se držel neobyčejně hrdinně, nevyzradil nic, což milého
strýčka uspokojilo, i když ne co do věci, tedy aspoň co do formy. „Ve
společnosti je nutno být velice, velice obezřelý,“ řekl posléze, udileje takto
zároveň důtku i radu; a Prokopovi se velmi ulevilo, když ho hned potom opustil
a nechal přemýšlet o dosahu poslednich slov.
Horši ještě bylo, že se podle všech známek něco vařilo pod pokličkou; zejména
starši přibuzné zrovna pukaly důležitosti.
Když pak ráno Prokop obihal kolem zámku, přišla k němu komorná a udýchaně
vyřizovala, že prý má pán jit do březového hájku. Pustil se tam a čekal
předlouho. Konečně běži princezna dlouhými, krásnými skoky Diany. „Schovej
se,“ šeptá rychle, „oncle jde za mnou.“ Uháněji držice se za ruce a zmizi v
hustém lupeni černého bezu; pan Holz, marně se ohližeje po jiné houštině, se
položi obětavě do kopřiv. A tu již je vidět světlý klobouk oncle Rohna; jde
bystře a kouká napravo nalevo. Princezně jiskři oči radosti jako mladé faunce;
v keři to voni vlhkosti a ztuchlinou, tajemný hmyzi život opřádá větvičky a
kořáni, jsou jako v džungli; a nečekajic ani, až nebezpeči přejde, táhne k
sobě princezna Prokopovu hlavu. Ochutnává mezi zuby polibky, jako by to byly
bobulky jeřabin či dřinu, ovoce trpké a milé; je to vábeni, hra, uhýbáni,
rozkoš tak nová a překvapujici, že jim je, jako by se viděli poprvé.
A toho dne k němu nepřišla; bez sebe všemožným podezřenim pustil se k zámku;
čekala na něho, vodic se s Egonkem kolem krku. Sotva ho uviděla, nechala Egona
stát a šla k němu, bledá, zaražená, přemáhajici nějaké zoufalstvi. „Oncle už
vi, že jsem byla u tebe,“ řekla. „Bože, co se stane! Myslim, že tě odtud
odvezou. Nehýbej se teď, divá se na nás z okna. Mluvil odpoledne s tim… s
tim…“ Zachvěla se. „S ředitelem, viš? Hádali se… Oncle chtěl, aby tě prostě
pustili, aby tě nechali utéci či co. Ředitel zuřil, nechce o tom slyšet. Prý
tě odvezou někam jinam… Milý, buď tady v noci; přijdu ven, uteču, uteču –“
Přišla skutečně; přiběhla bez dechu, vzlykajic se suchýma a rozzelýma očima.
„Zitra, zitra,“ chtěla ze sebe něco vypravit, ale tu se ji položila na rameno
silná a laskavá ruka. Byl to oncle Rohn. „Jdi domů, Minko,“ kázal neodmluvně.
„A vy tu počkáte,“ obrátil se k Prokopovi, a ovinuv ji ruku kolem ramen vedl
ji moci domů. Po chvili vyšel a vzal Prokopa pod paži. „Můj milý,“ řekl bez
hněvu, překusuje jakýsi smutek, „chápu až přiliš dobře vás mladé lidi; a…
citim s vámi.“ Mávl nad tim beznadějně rukou. „Stalo se, co se stát nemělo.
Nechci ovšem a… ani nemohu vás kárat. Naopak uznávám, že… samozřejmě…“
Samozřejmě to byl špatný začátek, a le bon prince tápal po jiném. „Milý
přiteli, vážim si vás a… mám vás opravdu… velice rád. Jste člověk čestný… a
geniálni, což se zřidka najde spojeno. K málokomu jsem pojal takové sympatie –
Vim, že to přivedete nesmirně daleko,“ vyhrkl s úlevou. „Věřite, že to s vámi
dobře myslim?“
„Naprosto ne,“ minil Prokop mirně, střeha se sednout na nějakou vějičku.
Le bon oncle se zmátl. „To je mi lito, neobyčejně lito,“ koktal. „K tomu, co
jsem vám chtěl řici, by bylo třeba – ano – plné vzájemné důvěry –“
„Mon prince,“ přerušil ho Prokop uctivě, „jak vite, nejsem tu v záviděnihodné
situaci volného člověka. Myslim, že za těch okolnosti nemám důvodů tak přiliš
důvěřovat –“
„Aáno,“ oddychl si oncle Rohn potěšen timto obratem. „Máte zcela pravdu.
Narážite na své – eh, na trapný fakt, že jste tady střežen? Vidite, právě o
tom jsem chtěl s vámi mluvit. Milý přiteli, co mne se týče… Prostě od začátku…
a rozhořčeně… jsem odsuzoval tento způsob… vás držet v závodě. Je to
nezákonné, brutálni a… vzhledem k vašemu významu přimo neslýchané. Podnikl
jsem řadu kroků… Rozumite, už dřive,“ dodával rychle. „Intervenoval jsem
dokonce na vyššich mistech, ale… úřady jsou vzhledem k jistému mezinárodnimu
napěti… v panice. Jste tu… konfinován pod inkulpaci špionáže. Nedá se nic
dělat, leda,“ a mon prince se naklonil k Prokopovu uchu, „leda že by se vám
podařilo utéci. Svěřte se mi, já vám opatřim prostředky. Čestné slovo.“
„Jaké prostředky?“ nadhodil Prokop nezávazně.
„Prostě… udělám to sám. Vezmu vás na své auto a – mne tady nemohou zadržet,
rozumite? Ostatni později. Kdy chcete?“
„Odpusťte, já vůbec nechci,“ odpověděl Prokop určitě.
„Proč?“ vyhrkl oncle Charles.
„Předně… nechci, abyste vy, mon prince, něco takového riskoval. Osobnost jako
vy –“
„A za druhé?“
„Za druhé se mi tu začiná libit.“
„A dál, dál?“
„Nic dál,“ usmál se Prokop, a snesl pátravý, vážný pohled princův.
„Poslyšte,“ ozval se oncle Rohn po chvili, „nechtěl jsem vám to řici. Jde o
to, že za den, za dva dny máte být převezen jinam, do pevnosti. Stále pod
obviněnim ze špionáže. Nemůžete si představit – Milý přiteli, uprchněte,
uprchněte rychle, pokud je čas!“
„Je to pravda?“
„Čestné slovo.“
„Pak… pak vám děkuju, že jste mne včas upozornil.“
„Co uděláte?“
„Nu, připravim se na to,“ prohlásil Prokop krvelačně. „Mon prince, mohl byste
JE upozornit, že to… tak lehko… nepůjde.“
„Co – co – jak to, prosim?“ koktal oncle Charles.
Prokop zatočil rukou ve vzduchu, až to svištělo, a vrhl něco imaginárně před
sebe. „Bum,“ udělal.
Oncle Rohn ustrnul. „Vy se chcete bránit?“
Prokop neřekl nic; stál s rukama v kapsách, mračil se hrozně a uvažoval.
Oncle Charles, celý světloučký a vetchý v nočni tmě, k němu přistoupil. „Vy…
vy ji tak milujete?“ řekl skoro se zajikaje dojetim nebo obdivem.
Prokop neodpověděl. „Milujete ji,“ opakoval Rohn a objal ho. „Buďte silný.
Opusťte ji, odjeďte! Nemůže to takhle zůstat, pochopte to, pochopte to přece!
Kam by to vedlo? Prosim vás proboha, mějte s ni slitováni; uchraňte ji
skandálu; což si myslite, že by mohla být vaši ženou? Snad vás miluje, ale –
je přiliš pyšná; kdyby se měla zřici titulu princezny… Oh, to je nemožno,
nemožno! Nechci vědět, co mezi vámi bylo; ale odjeďte, máte-li ji rád! odjeďte
rychle, odjeďte ještě této noci! Ve jménu lásky odjeď, přiteli; zapřisahám tě,
prosim tě na jejim mistě; učinils ji ženou nejnešťastnějši, – nemáš dost na
tom? Chraň ji, nedovede-li už ona sebe chránit! Ty ji miluješ? Tedy se
obětuj!“
Prokop stál nehnutě, s čelem skloněným jako beran; ale bon prince citil, jak
se tenhle černý, hrubý špalek v nitru štipe a praská bolesti. Soucit mu škrtil
srdce, ale ještě měl v záloze jednu zbraň; nedalo mu to, musel s ni vyrukovat.
„Je pyšná, fantastická, šileně ctižádostivá; od dětstvi byla taková. Nyni nám
byly doručeny doklady nesmirné ceny; je kněžnou rovnorodou kterékoliv
panovnické rodině. Ty nechápeš, co to pro ni je. Pro ni i pro nás. Snad to
jsou předsudky, ale… my v nich žijeme. Prokope, princezna se provdá. Vezme si
velkovévodu bez trůnu; je to hodný a pasivni člověk, ale ona, ona bude bojovat
o korunu; neboť bojovat, to je jeji povaha, jeji posláni, jeji pýcha – Teď se
před ni otvirá, o čem snila. Ještě ty se staviš mezi ni a… jeji budoucnost;
ale již se rozhodla, už jenom se trápi výčitkami –“
„Ahaha,“ rozkřikl se Prokop, „tohle tedy? A – a ty si mysliš, že teď, teď
ustoupim? Tak si jen počkej!“
A nežli se oncle Rohn vzpamatoval, zmizel mu ve tmě uháněje k laboratoři. Pan
Holz mlčky za nim.


XXXVII.

Když doběhl k laboratoři, chtěl zavřit Holzovi dveře před nosem, aby se uvnitř
opevnil; ale panu Holzovi se povedlo ještě včas zašeptat: „Princezna.“
„Co je?“ obrátil se k němu Prokop chvatně.
„Ráčila mně nařidit, abych byl s vámi.“
Prokop nebyl s to potlačit radostné překvapeni. „Podplatila tě?“
Pan Holz zavrtěl hlavou a jeho pergamenová tvář se poprvé zasmála. „Podala mně
ruku,“ řekl uctivě. „Slibil jsem ji, že se vám nic nestane.“
„Dobře. Máš bouchačku? Tedy budeš hlidat dveře. Nikdo ke mně nesmi, rozumiš?“
Pan Holz kývl; a Prokop provedl důkladnou strategickou prohlidku celé
laboratoře co do jeji nedobytnosti. Poněkud uspokojen nastavil na stůl různé
plechovky, dóze a kovové krabičky, co kde mohl sehnat, a objevil s nemalou
radosti celou spoustu hřebiků; nato se pustil do práce.
Ráno se pan Carson jakoby nic coural k Prokopově laboratoři; už zdálky ho
uviděl, jak se před barákem bez kabátu patrně pocvičuje ve vrháni kamenů. „Moc
zdravý sport,“ křikl zdálky vesele.
Prokop si honem oblékal kabát. „Zdravý a užitečný,“ odpovidal ochotně. „Tak co
mi jdete řici?“
Kapsy jeho kabátu ohromně odstávaly a harašilo to v nich. „Co to máte v
kapsách?“ ptal se pan Carson ledabyle.
„Takový chlorazid,“ povidal Prokop. „Třaskavý a dusivý chlor.“
„Hm. Proč to nosite po kapsách?“
„Jen tak, pro špás. Chcete mi něco řici?“
„Teď už nic. Zatim raději nic,“ řekl pan Carson znepokojen a drže se poměrně
daleko. „A co ještě máte v těch – v těch škatulkách?“
„Hřebiky. A tohle,“ ukazoval vytahuje z kapsy u kalhot krabičku od vazeliny,
„je benzoltetraoxozonid, novinka dernier cri. He?“
„Nemusel byste tim tak mávat,“ minil pan Carson ustupuje ještě dál. „,Máte
snad nějaké přáni?“
„Mé přáni?“ řekl Prokop přivětivě. „Rád bych, abyste JIM něco vyřidil. Že
odtud předevšim nepůjdu.“
„Dobře, rozumi se. A dál?“
„A že kdyby někdo na mne neopatrně sáhnul… nebo mně chtěl jit zbytečně na
tělo… Doufám, že mne neminite nechat zavraždit.“
„Naprosto ne. Čestné slovo.“
„Můžete jit bliž.“
„Nevyletite do povětři?“
„Dám pozor. Chtěl jsem vám ještě řici, aby nikdo nevlezl tady do mé pevnosti,
když tam nebudu. Na dveřich je třaskavá šňůra. Pozor, člověče; za vámi je
past.“
„Výbušná?“
„Jenom s diazobenzolperchlorátem. Musite dát lidem výstrahu. Tady nemá nikdo
co hledat, že? Dále, mám jisté důvody… citit se ohrožen. Rád bych, abyste
nařidil tuhle Holzovi, že mne má osobně chránit… před každým zásahem. Se
zbrani v ruce.“
„To ne,“ bzučel Carson. „Holz bude přeložen.“
„Kdepak,“ protestoval Prokop, „já se bojim být sám, vite? Poručte mu to
laskavě.“ Přitom se bližil mnohoslibně ke Carsonovi, chrastě přitom, jako by
byl celý z plechu a hřebiků.
„Nu budiž,“ řekl honem Carson. „Holzi, budete střežit pana inženýra. Kdyby mu
někdo chtěl ubližit – K sakru, dělejte si už, co chcete. Přál byste si ještě
něco?“
„Zatim nic. Kdybych něco chtěl, přijdu za vámi.“
„Děkuju uctivě,“ zahučel pan Carson a honem se zachránil z nebezpečné oblasti.
Ale jen doběhl do své kanceláře a telefonoval na všechny strany ty nejnutnějši
rozkazy, když to zachřestilo na chodbě a do dveři vrazil Prokop, naditý pumami
z plechovek, že na něm praskaly švy.
„Poslyšte,“ spustil Prokop bledý vztekem, „kdopak dal rozkaz nevpustit mne do
parku? Buď ten rozkaz hned odvoláte, nebo –“
„Zůstaňte kousek dál, ano?“ vyhrkl Carson drže se za psacim stolem. „Co mně je
u čerta po vaši – – po vašem parku? Jděte si –“
„Počkat,“ zarazil ho Prokop a nutil se vysvětlit mu to trpělivě: „Dejme tomu,
jsou okolnosti, kdy… kdy je někomu docela jedno, co se stane,“ zařval náhle,
„rozumite?“ Haraše a chrastě vrhl se k nástěnnému kalendáři. „Úterý, dnes je
úterý! A tuhle, tuhle mám –“ Hrabal se horečně v kapsách, až vylovil
porcelánovou schránku na mýdlo dosti chatrně ovázanou provázkem. „Zatim pět
deka. Vite, co to je?“
„Krakatit? Vy nám jej nesete?“ vydechl pan Carson ozářen náhlou naději. „Pak –
pak ovšem –“
„Nic pak,“ šklebil se Prokop a stopil schránku do kapsy. „Ale dopálite-li mne,
pak… pak to mohu rozsypat, kde budu chtit, že? Tak co?“
„Tak co?“ opakoval Carson mechanicky, úplně zdrcen.
„Nu, zařiďte to, aby zmizel ten pacholek u vchodu. Já se rozhodně chci projit
v parku.“
Pan Carson přezkoumal rychle Prokopa, a pak si naplil pod nohy. „Fi,“
prohlásil přesvědčeně, „to jsem to provedl pitomě!“
„Provedl,“ souhlasil Prokop. „Ale mne taky dřiv nenapadlo, že mám tuhle barvu
v listě. Tak co?“
Carson potrhl rameny. „Zatim… Božinku, to je maličkost! Já jsem hrozně rád, že
vám to mohu udělat. Na mou čest, ohromně rád. A co vy? Dáte nám těch pět
deka?“
„Nedám. Zrušim je sám; ale… dřiv chci vidět, že plati naše stará smlouva.
Volný pohyb a tak dále, co? Pamatujete se?“
„Stará smlouva,“ bručel pan Carson. „Čert vem starou smlouvu. Tehdy jste ještě
nebyl – tehdy jste ještě neměl poměr –“
Prokop k němu skočil, až to zařinčelo. „Co jste to řekl? Cože jsem neměl?“
„Nic, nic,“ pospišil si pan Carson rychle mrkaje. „Já nic nevim. Mně nic neni
do vašich soukromých věci. Chcete-li se procházet po parku, je to vaše věc, no
ne? Jen spánembohem už jděte a –“
„Poslyšte,“ řekl Prokop podeziravě, „ne aby vás napadlo přerušit elektrické
vedeni do mé laboratoře. Sic bych –“
„Dobře, dobře,“ ujišťoval pan Carson. „Status quo, že? Mnoho štěsti. – Uf,
zatracený člověk,“ doložil zdrceně, když už byl Prokop za dveřmi.
Řinče železem pustil se Prokop do parku, těžký a masivni jako houfnice. Před
zámkem stála skupina pánů; sotva ho zdálky zahlédli, dali se poněkud zmateně
na ústup, patrně už informováni o brizantnim a nabitém zuřivci; a jejich záda
vyjadřovala nejsilnějši pohoršeni, že se „něco takového trpi“. Tamhle jde pan
Krafft s Egonem, konaje peripatetické vyučováni; jak vidi Prokopa, nechá Egona
stát a běži k němu. „Můžete mi podat ruku?“ ptá se a zardivá se nad vlastnim
hrdinstvim. „Teď dostanu jistě výpověď,“ pravi s hrdosti. Od Kraffta tedy
zvěděl, že v zámku se rychlosti blesku rozneslo, že prý on, Prokop, je
anarchista; a ježto zrovna dnes večer má sem zavitat jistý následnik trůnu…
Zkrátka chtěji Jeho Výsosti telegrafovat, aby svůj přijezd odložil; zrovna se
o tom koná velká rodinná rada.
Prokop se obraci na patě a jde do zámku. Dva komornici na chodbě se před nim
rozleti a s hrůzou se tisknou ke zdi, nechávajice beze slova projit
chřesticiho, naditého útočnika. Ve velkém salóně zasedá porada; oncle Rohn
ustaraně přecházi, starši přibuzné se děsně rozčiluji nad zvrhlosti
anarchistů, tlustý cousin mlči a jakýsi jiný pán rozhorleně navrhuje poslat na
toho šileného chlapa jednoduše vojáky: buď se vzdá, nebo bude zastřelen. V tu
chvili se otevřely dveře a chrastě vali se Prokop do salónu. Hledá očima
princeznu; neni tu, a zatimco všichni tuhnou strachem a vstávaji v očekáváni
toho nejhoršiho, povidá chraptivě k Rohnovi: „Jdu vám jenom řici, že se
následnikovi nic nestane. Teď to viš.“ Pokynul hlavou a mocně se vzdálil jako
socha komtura.


XXXVIII.

Chodba byla prázdná. Kradl se, jak tiše to vůbec šlo, k pokojům princezniným a
čekal přede dveřmi, nepohnutý jako plechový rytiř tam dole ve vestibulu.
Vyběhla komorná, vykřikla strašně, jako by viděla bubáka, a zmizela ve
dveřich. Po chvili je otevřela, docela vytřeštěná, a couvajic mu ukázala beze
slova dovnitř, načež se co nejrychleji ztratila. Princezna se mu vlekla
vstřic; halila se v dlouhý plášť, patrně jen tak vyskočila z postele, a vlasy
nad čelem měla slepené a zmáčené, jako by právě odhodila chladivý obklad, a
byla šedivě bledá a nehezká. Pověsila se mu na krk a zvedla k němu rty
rozpukané horkosti. „To jsi hodný,“ šeptala mátožně. „Mně hlava třešti
migrénou, oh bože! Prý máš samé pumy po kapsách? Já se tě nebojim. Jdi teď,
nejsem hezká. Přijdu k tobě v poledne, nepůjdu jist, řeknu, že mi neni dobře.
Jdi.“ Dotkla se jeho úst obolenými, loupajicimi se rty a zakryla si tváře, aby
ji ani neviděl.
Provázen panem Holzem vracel se do laboratoře; každý před nim stanul, uhnul,
uskočil raději až za přikop. Pustil se znovu do práce jako posedlý; misil
látky, jež by nikoho nenapadlo misit, slepě a bezpečně jist, že tohle je
třaskavina; plnil tim lahvičky, škatulky od sirek, plechové konzervy, všecko,
co mu padlo do rukou; měl toho plný stůl, okenni rámy i podlahu, překračoval
to, neměl se už kde postavit. Po poledni vklouzla k němu princezna zastřená
závojem a zahalená v plášti až po nos. Běžel k ni a chtěl ji obejmout,
odstrčila ho. „Ne, ne, nejsem dnes hezká. Prosim tě, pracuj; budu se na tebe
divat.“
Usedla na krajiček židle zrovna uprostřed strašného arzenálu oxozonidových
třaskavin. Prokop rychle, se sevřenými rty něco vážil a misil, zasyčelo to,
kysele začpělo, načež to s neskonalou pozornosti filtroval. Divala se na jeho
ruce nehnutýma, palčivýma očima. Oba mysleli na to, že dnes přijede následnik.
Prokop hledal něco očima na regálu s lučebninami. Vstala, pozvedla závoj,
vzala ho kolem krku a přimkla se pevně k jeho ústům sevřenými suchými rty.
Potáceli se mezi lahvemi s vratkým oxozobenzolem a děsnými fulmináty, dvojice
němá a křečovitá; ale opět ho odstrčila a usedla zastirajic si obličej. Ještě
rychleji, sledován jejima očima, dal se Prokop do práce jako pekař misici
chléb; a toto bude látka z nejďábelštějšich, jaké kdy člověk vyrobil;
nedůtklivá hmota, vzteklý a hrůzně citlivý olej, prchlost a náruživost sama. A
toto, průhledné jako voda, těkavé jako éter, to tedy je ono: děsná věc trhavá
a nevypočitatelná, divost nejvýbušnějši. Ohližel se, kam postavit láhev
naplněnou timto nepojmenovaným. Usmála se, vzala mu ji z ruky a chovala ji na
klině mezi sepnutýma rukama.
Venku pan Holz křikl na někoho: „Stůj!“ Prokop vyběhl ven. Byl to oncle Rohn
stojici povážlivě blizko třaskavé pasti.
Prokop šel až k němu. „Co tu hledáte?“
„Minku,“ řekl oncle Charles krotce, „neni ji dobře, a proto –“
Prokopovi to škublo ústy. „Pojďte si pro ni,“ řekl a dovedl – ho dovnitř.
„Ach, oncle Charles,“ vitala ho princezna přivětivě. „Pojď se divat, je to
hrozně zajimavé.“
Oncle Rohn se podival pátravě po ni a po světnici, a ulevilo se mu. „To bys
neměla, Minko,“ pronesl káravě.
„Proč ne?“ namitla nevinně.
Bezradně pohlédl na Prokopa. „Protože… protože máš horečku.“
„Tady mi je lip,“ děla klidně.
„Vůbec bys neměla…,“ vzdychl le bon prince vážně se kaboně.
„Mon oncle, viš, že vždycky dělám, co chci,“ ukončila neodvolatelně rodinný
výstup, zatimco Prokop odklizel ze židle krabičky s fudroajantni
diazosloučeninou. „Posaďte se,“ zval Rohna zdvořile.
Oncle Charles nezdál se nadšen celou situaci. „Nezdržujeme vás… nezdržujeme tě
v práci?“ ptal se Prokopa bezcilně.
„Naprosto ne,“ řekl Prokop drtě mezi prsty infuzorni hlinku.
„Co to děláš?“
„Třaskaviny. Prosim, tu láhev,“ obrátil se k princezně.
Podala mu ji a „Tumáš,“ řekla provokativně a naplno. Oncle Rohn sebou trhl,
jako by ho pichl; ale tu již ho upoutala rychlá sice, ale nekonečně opatrná
pečlivost, s niž Prokop odkapával čirou tekutinu na hromádku hlinky.
Odkašlal a ptal se: „Čim se to může zanitit?“
„Otřesem,“ odpověděl Prokop dále odpočitávaje kapky.
Oncle Charles se otočil po princezně. „Bojiš-li se, oncle,“ řekla suše,
„nemusiš na mne čekat.“
Usadil se rezignovaně a zaklepal holi na plechovou krabici od kalifornských
broskvi. „Co je v tomhle?“
„To je ručni granát,“ vysvětloval Prokop. „Hexanitrofenylmetylnitramin a
šroubové matičky. Potěžkej to.“
Oncle Rohn upadl v rozpaky. „Nebylo by snad… na mistě… trochu vic opatrnosti?“
ptal se toče mezi prsty krabičkou od sirek, kterou sebral na pultě.
„Zajisté,“ souhlasil Prokop a vzal mu krabičku z rukou. „To je chlorargonát. S
tim si nehraj.“
Oncle Charles se zamračil. „Mám z toho všeho… trochu nepřijemný dojem
zastrašováni,“ podotkl ostře.
Prokop hodil krabičku na stůl: „Tak? A já zas měl dojem zastrašováni, když
jste mi hrozili pevnosti.“
„… Mohu řici,“ pravil Rohn spolknuv tu námitku, „že na mne to celé počináni…
zůstává bez vlivu.“
„Ale na mne má ohromný vliv,“ prohlásila princezna.
„Bojiš se, že něco provede?“ obrátil se k ni le bon prince.
„Já doufám, že něco provede,“ řekla nadějně. „Mysliš, že by to nedovedl?“
„O tom nepochybuji,“ vyhrkl Rohn. „Půjdeme už?“
„Ne. Já bych mu chtěla pomáhat.“
Zatim Prokop přelamoval v prstech kovovou lžičku. „K čemu je to?“ ptala se
zvědavě.
„Došly mně hřebiky,“ bručel. „Nemám čim plnit bomby.“ Rozhližel se hledaje
něco kovového. Tu princezna vstala, zarděla se, strhla si chvatně rukavičku a
smekla s prstu zlatý prsten. „Vezmi si to,“ děla tiše, zalita ruměncem a s
očima sklopenýma. Přijal jej trna; bylo to téměř slavnostni… jako zasnoubeni.
Váhal potěžkávaje prsten v dlani; zvedla k němu oči v naléhavé a horouci
otázce; i pokývl vážně a položil prsten na dno plechové krabičky.
Oncle Rohn starostlivě, přesmutně mrkal ptačima očima poety.
„Teď můžeme jit,“ zašeptala princezna.
Kvečeru přijel dotyčný následnik bývalého trůnu. U vchodu čestná rota,
hlášeni, špalir služebnictva a takové ty okolky; park i zámek slavnostně
osvětleny. Prokop seděl na návršičku před laboratoři a dival se mračnýma očima
k zámku. Nikdo tudy nešel; bylo ticho a temno, jen zámek zářil prudkými snopy
paprsků.
Prokop vzdychl ode dna a vstal. „Do zámku?“ ptal se pan Holz a přendal
revolver z kapsy u kalhot do kapsy svého věčného gumáku.
Jdou parkem už zhaslým; dvakrát nebo třikrát ustoupi před nimi nějaká postava
do houšti, asi padesát kroků za nimi je pořád slyšet něči chůzi ve spadaném
listi, ale jinak je tu pusto, syrově pusto. Jen v zámku plane celé křidlo
velkými zlatými okny.
Je podzim, je už podzim. Zda ještě v Týnici střibrně odkapává studna? Ani vitr
nevane, a přece to zebavě šusti, na zemi nebo ve stromech? Na nebi rudou
proužkou padá hvězda.
Několik pánů ve fracich, hle, jak jsou skvěli a šťastni, vycházeji na plošinu
zámeckých schodů, žvani, pokuřuji, směji se a už se zas vraceji. Prokop
nehnutě sedi na lavičce, otáčeje v roztřiskaných prstech plechovou krabičkou.
Někdy si zachrasti jako ditě svým chřestitkem. Je tam rozlámaná lžička, prsten
a bezejmenná látka.
Pan Holz se ostýchavě přibližil. „Dnes nemůže přijit,“ povidá šetrně.
„Já vim.“
V hostinském křidle se rozžihaji okna. Tato řada, to jsou „knižeci pokoje“.
Nyni sviti celý zámek, vzdušný a prolamovaný jako sen. Všechno tam je:
bohatstvi neslýchané, krása, ctižádost a sláva a hodnosti, plišky na prsou,
požitky, uměni žit, jemnost a duchaplnost a sebevědomi; jako by to byli jini
lidé – jini lidé než my –
Jako uminěné ditě řinči Prokop svým chřestitkem. Ponenáhlu okna zhasinaji;
ještě sviti tamto, jež je Rohnovo, a toto červené, kde je ložnice princeznina.
Oncle Rohn otvirá okenice a vdechuje nočni chlad; a potom přecházi ode dveři k
oknu, ode dveři k oknu, pořád a pořád. Za zastřeným oknem princezniným se
nehýbe ani stin.
I oncle Rohn už zhasil; nyni sviti jediné zardělé okno. Zda najde lidská
myšlenka cestu, zda si prorazi a moci provrtá dráhu těmi sto či kolika metry
němého prostoru, aby zasáhla bdici mozek druhého člověka? Co ti mám vzkázat,
tatarská kněžno? Spi, je už podzim; a je-li nějaký Bůh, ať ti hladi palčivé
čelo.
Červené okno zhaslo.


XXXIX.

Ráno se rozhodl nejit do parku; měl právem za to, že by tam překážel. Umistil
se v poměrně úzké a polopusté končině, kde byla přimá cesta od zámku k
laboratořim, proražená skrze starý zarostlý val. Vydrápal se na val, odkud,
jakžtakž skryt, mohl vidět roh zámku a malou část parku. Misto se mu zalibilo;
zahrabal si tam několik svých ručnich granátů a pozoroval střidavě park,
chvátajiciho střevlika a vrabce na rozhoupaných větvičkách. Jednou tam slétla
dokonce červenka, a Prokop bez dechu pozoroval jeji brunátné hrdélko; tikla
něco, mžikla ocasem a frr, pryč.
Dole v parku jde princezna provázena dlouhým, mladým člověkem; v uctivé
vzdálenosti za nimi skupina pánů. Princezna se divá stranou a házi rukou, jako
by v ni měla prut a švihala jim do pisku. Vic neni vidět.
O hodně později se ukáže oncle Rohn s tlustým cousinem. Pak zase nic. Stoji-li
pak za to tady sedět?
Je skoro poledne. Najednou za rohem zámku se vynoři princezna a miři rovnou
sem. „Jsi tady?“ volá polohlasně. „Pojď dolů a vlevo.“
Svezl se po svahu a prodiral se houštinou vlevo. Bylo tam při zdi smetiště
všeho možného: rezavých obruči, děravých plecháčů, rozbitých cylindrů, všivých
a ohavných trosek; bůhvi kde se takových věci vůbec nabere v knižecim zámku. A
před tou bidnou hromadou stoji princezna svěži a pěkná a kouše se dětsky do
prstu. „Sem jsem se chodila zlobit, když jsem byla malá,“ povidá. „Nikdo to
misto nezná. Libi se ti tu?“
Viděl, že by ji mrzelo, kdyby to tu nepochválil. „Libi,“ řekl honem.
Zazářila a vzala ho kolem krku. „Ty milý! Dávala jsem si tu na hlavu nějaký
plecháč, viš, jako korunu, a hrála jsem si sama pro sebe na panujici kněžnu.
,Jasnost nejmilostivějši kněžna ráči poroučet?‘ ,Zapřáhni šestispřeži, pojedu
do Zahur.‘ Viš, Zahur, to bylo mé vymyšlené misto. Zahur, Zahur! Milý, je něco
takového na světě? Pojď, ujedeme do Zahur! Najdi mi to, ty tolik znáš –“
Nikdy nebyla tak svěži a oživená jako dnes; až na to zažárlil, až v něm
zakvasilo vášnivé podezřeni; popadl ji a chtěl ji sevřit. „Ne,“ bránila se,
„nech; buď rozumný. Ty jsi Prospero, princ zahurský; a jen jsi se převlékl za
kouzelnika, abys mne unesl nebo vyzkoušel, já nevim. Ale za mnou přijede princ
Rhizopod z řiše Alicuri-Filicuri-Tintili-Rhododendron, takový protivný,
protivný člověk, co má misto nosu kostelni svici a studené ruce, hu! A už mne
má dostat za ženu, když ty vstoupiš a řekneš: ,Já jsem kouzelnik Prospero,
dědičný princ zahurský.‘ A mon oncle Metastasio ti padne kolem krku, a začnou
zvonit, troubit a střilet –“
Prokop přiliš dobře pochopil, že jeji libezné tlacháni povidá něco velmi,
velmi vážného; střežil se ji vyrušit. Držela ho kolem krku a třela se vonným
ličkem i rty o jeho drsnou tvář. „Nebo počkej; já jsem princezna zahurská a ty
jsi Velký Prokopokopak, král duchů. Ale já jsem zakletá, řekli nade mnou ,ore
ore baléne, magot malista manigoléne‘, a proto mne má dostat ryba, ryba s
rybima očima a rybima rukama a celým rybim tělem, a má mne odvést na rybi
hrad. Ale tu přileti Velký Prokopokopak na svém větrném plášti a unese mne –
Sbohem,“ skončila znenadáni a polibila ho na ústa. Ještě se usmála, jasná a
růžová jako nikdy, a nechala ho zamračeného nad rzivými troskami Zahuru. U
všech všudy, co tohle znamená? Žádá, abych ji pomohl, toť jasno; podléhá
nátlaku a čeká ode mne, že… že snad ji nějak zachránim! Bože, co učinit?
Hluboce zamyšlen se loudal Prokop k laboratoři. Patrně… už nezbývá než Veliký
Útok; ale kde jej zahájit? Už byl u dveři a sahal do kapsy po kliči; vtom
ustrnul a strašlivě zaklel. Zevni vrata jeho baráku byla zatarasena přičnými
železnými tyčemi na způsob závor. Zalomcoval jimi zběsile; vůbec se to
nehnulo.
Na dveřich byl list papiru a na něm vyklepáno: „Na rozkaz civilnich úřadů se
tento objekt uzavirá pro nepřipustné nahromaděni třaskavých látek bez
zákonných bezpečnostnich opatřeni, §§ 216 a 217d, lit. F tr. z. a nař. 63 507,
M 1889.“ Podpis nečitelný. Pod tim napsáno perem: „Panu ing. Prokopovi se až
na dalši přikazuje k pobytu pokoj u hlidače Gerstensena, strážni barák III.“
Pan Holz odborně zkoumal závory, ale nakonec jen hvizdl a strčil ruce do
kapes; nedalo se naprosto nic dělat. Prokop, rozpálený vztekem do běla, oběhl
celý barák; explozivni pasti byly zákopnicky odstraněny, na všech oknech od
dřivějška mřiže. Honem spočital své válečné prostředky: pět slabšich pumiček
po kapsách, čtyři větši granáty zahrabány na zahurském valu; je to málo na
slušnou akci. Bez sebe hněvem uháněl ke kanceláři zlořečeného Carsona; počkej,
všiváku, s tebou si to vyřidim! Ale jen tam doběhl, hlásil mu sluha: pan
ředitel tu neni a nepřijde. Prokop ho odstrčil a vnikl do kanceláře. Carson
tam nebyl. Prošel rychle všemi kancelářemi, uváděje v úděs veškero úřednictvo
závodu až po posledni slečinku u telefonu. Carson nikde.
Prokop tryskem běžel k zahurskému valu, aby zachránil aspoň svou munici. A
tumáš: celý val i s křovinatou džungli a zahurským smetištěm je dokola obtočen
kozami s ostnatým drátem: hotový zásek válečného řádu. Pokusil se rozmotat
dráty; ruce mu krvácely, ale nepořidil zhola nic. Vzlykaje vztekem a nedbaje
už ničeho, propletl se zásekem dovnitř; našel, že jeho čtyři velké granáty
jsou vyhrabány a pryč. Skoro plakal bezmoci. Ke všemu počalo slizce mžit.
Prodral se zpět, potrhán na cáry a krváceje z rukou i tváři, a hnal se do
zámku, snad aby tam našel princeznu, Rohna, následnika nebo koho. Ve vestibulu
se mu postavil do cesty onen plavý obr, odhodlán nechat se třeba i na kusy
roztrhat. Prokop vyňal jednu ze svých třaskavých plechovek a výstražně
zachrastil. Obr zamrkal, ale neustoupil; najednou se vrhl vpřed a sevřel
Prokopa kolem ramen. Holz ho vši silou praštil revolverem do prstů; obr zařval
a pustil, tři lidé, kteři se hrnuli na Prokopa, jako by ze země vyvstali,
zaváhali maličko, a tu se ti dva honem přitočili zády ke zdi, Prokop s
krabičkou ve zdvižené ruce, aby ji hodil pod nohy prvnimu, kdo se hne, a Holz
(nyni už neodvolatelně zrevolucionovaný) s nastraženým ústim revolveru; a
proti nim čtyři bledi muži, trochu nachýleni vpřed, tři s revolvery v ruce; to
bude mela. Prokop naličil strategickou diverzi ke schodům; čtyři muži se
začali přetáčet v tu stranu, někdo vzadu se dal na útěk, bylo hrozně ticho.
„Nestřilet,“ zašeptal kdosi ostře. Prokop slyši tikat své hodinky. Nahoře v
patře hlaholi veselé hlasy, nikdo tam o ničem nevi; a protože nyni je východ
volný, toči se Prokop pozpátku ke dveřim, kryt Holzem. Čtyři muži u schodů se
nehýbaji, jako by byli vyřezáni ze dřeva. A Prokop vyrazil ven.
Mži chladně a protivně; co nyni? Rychle přezkoumal situaci; napadlo ho zařidit
si vodni pevnost v plovárně na rybnice; ale odtamtud neni vidět na zámek.
Náhle rozhodnut pádil Prokop k domku vrátného; Holz za nim. Vrazili dovnitř,
když děda vrátný zrovna obědval; naprosto nemohl pochopit, že ho „násilim a
pod vyhrůžkami smrti“ odtud vyháněji; vrtěl nad tim hlavou a šel to žalovat na
zámek. Prokop byl svrchovaně spokojen dobytou pozici; důkladně zamknul mřižová
vrata z parku ven a dojedl s notnou chuti stařikův oběd; pak snesl všechno, co
se v domečku podobalo chemikálii, jako uhli, sůl, cukr, klih, zaschlou
olejovou barvu a jiné takové poklady, a uvažoval, co se z toho dá udělat.
Zatim Holz chvilemi hlidal, chvilemi přeměňoval okna ve střilny, což vzhledem
k jeho čtyřem ostrým šestimilimetrovým patronám bylo trochu přepjaté. Prokop
na kuchyňských kaminkách zařidil svou laboratoř; páchlo to hrozně, a přece z
toho nakonec byla trochu těžkopádná třaskavina.
Nepřátelská strana nepodnikla žádný útok; patrně nechtěla, aby došlo k
skandálu za přitomnosti vznešeného hosta. Prokop si lámal hlavu, jak by mohl
zámek vyhladovět; přeřizl sice telefonni vedeni, ale zbývala ještě troji
vrátka, nepočitajic cestu zahurským valem k závodům. Vzdal se tedy – byť nerad
– plánu oblehnout zámek ze všech stran.
Pršelo ustavičně. Princeznino okno se otevřelo, a světlá postavička psala
rukou do vzduchu veliká pismena. Prokop nebyl s to je rozluštit, přesto však
se postavil před domek a psal rovněž do vzduchu povzbuzujici vzkazy, máchaje
rukama jako větrnik. Kvečeru přeběhl k povstalcům dr. Krafft; ve svém
ušlechtilém zápalu zapomněl s sebou přinést jakoukoliv zbraň, takže tato
posila byla spiše jen mravni. Večer se přišoural pan Paul a nesl v koši
nádhernou studenou večeři a množstvi rudého a šampaňského vina; tvrdil, že ho
nikdo s tim neposlal. Nicméně Prokop po něm naléhavě – neřikaje komu –
vzkázal, „že děkuje a že se nevzdá“. Při bohatýrské večeři se dr. Krafft
poprvé odhodlal pit vino, snad aby dokázal svou mužnost; následek toho byla na
jeho mistě blažená lunatická němota, zatimco Prokop a pan Holz se pustili do
zpěvu válečných pisni. Každý sice zpival jiným jazykem a docela jinou
pisničku, ale zdálky, zejména potmě za šelestěni drobného deště, to splývalo v
souzvuk dosti strašlivý a chmurný. Někdo v zámku dokonce otevřel okno, aby
poslouchal; pak se pokusil je zdálky doprovázet na klaviru, ale zvrhlo se to v
Eroiku a potom v nesmyslné boucháni do kláves. Když zámek pohasl, zatarasil
Holz dvéře nesmirnou barikádou, a tři bohatýři pokojně usnuli. Probudil je
teprve důtklivým bouchánim pan Paul, když jim ráno nesl tři kávy pečlivě je
rozlévaje po táce.


XL.

Pršelo. S bilým šátkem parlamentáře přišel tlustý cousin navrhnout Prokopovi,
aby toho nechal; že zase dostane svou laboratoř a kdesi cosi. Prokop
prohlásil, že odtud nepůjde, ledaže by ho vyhodili do povětři; ale dřiv že on
něco udělá, to budete koukat! S touto temnou hrozbou se cousin vracel; v zámku
patrně nesli velmi těžce, že vlastni vjezd do zámku je blokován, ale nechtěli
s věci dělat žádný hluk.
Dr. Krafft, pacifista, přetékal bojovnými a divokými návrhy: přerušit
elektrické vedeni do zámku; zastavit jim vodovod; vyrobit nějaký dusivý plyn a
pustit jej na zámek. Holz našel staré noviny; ze svých tajemných kapes vylovil
skřipec a četl po celý den, nesmirně podoben univerzitnimu docentovi. Prokop
se nezkrotně nudil; hořel touhou po nějakém velikém činu, ale nevěděl, jak do
toho. Konečně nechal Holze hlidat domek a pustil se s Krafftem do parku.
V parku nebylo vidět nikoho; nepřátelské sily byly asi soustředěny v zámku.
Obešel zámek až na tu stranu, kde byly kůlny a stáje. „Kde je Whirlwind?“ ptal
se najednou. Krafft mu ukázal okénko ve výši asi tři metrů. „Opřete se,“
šeptal Prokop, vylezl mu na záda a postavil se mu na ramena, aby se podival
dovnitř. Krafft div nepadl pod jeho tihou; a teď mu ještě ke všemu jaksi
tancuje po ramenou – co to tam dělá? Nějaký těžký rám leti na zem, ze stěny se
droli pisek; a náhle se břemeno vyhouplo, užaslý Krafft zvedl hlavu a div
nevykřikl: nahoře se třepaji dvě dlouhé nohy a mizi v okénku.
Princezna zrovna podávala Whirlwindovi krajic chleba a divala se zamyšleně na
jeho krásné temné oko, když slyšela šramot v okně; a v pološeru teplé konirny
vidi známou potlučenou ruku, jak vyndává drátěnou mřižku v okénku stáje.
Přitiskla ruce k ústům, aby nevykřikla.
Rukama a hlavou napřed sváži se Prokop do Whirlwindovy žebřiny; již seskakuje
a tady je, odřený sice, ale celý; a udýchán se pokouši o úsměv. „Tiše,“ děsi
se princezna, neboť štolba je za dveřmi; a už mu visi na krku: „Prokopokopak!“
Ukázal na okénko: tudy, a rychle ven! „Kam?“ šeptá princezna a mazlivě ho
celuje.
„K vrátnému.“
„Ty hloupý! Kolik vás tam je?“
„Tři.“
„Tak vidiš, to přece nejde!“ Hladi ho po tváři. „Nic si z toho nedělej.“
Prokop rychle uvažuje, jak tedy jinak ji unést; ale je tu šero, a koňský
zápach je jaksi vzrušujici; zasvitily jim oči a vpili se do sebe žádostivým
polibkem. Zlomila se ve vteřině; ucouvla rychle dýchajic: „Jdi pryč! Jdi!“
Stáli proti sobě třesouce se; citili, že vášeň, která je popadá, je nečistá.
Odvrátil se a ukroutil přičku v žebřině; teprve tim se jakžtakž ovládl. Otočil
se k ni; viděl, že rozkousala a roztrhala na cáry svůj kapesnik; přitiskla jej
prudce ke rtům a beze slova mu jej podala odměnou nebo na památku. Za to on
polibil paženi na mistě, kde právě spočivala jeji rozčilená ruka. Nikdy se
neměli tak divoce rádi jako v tuto chvili, kdy nemohli ani promluvit a báli se
sebe dotknout. Na dvoře skřipaly v pisku něči kroky; princezna mu kynula,
Prokop se vyšvihl na žebřinu, chytil se jakýchsi háků u stropu a nohama napřed
se vysmekl z okénka. Když dopadl na zem, objal ho dr. Krafft radosti. „Vy jste
přeřezal konim šlachy, že?“ šeptal krvežiznivě; nejspiš to považoval za
oprávněné válečné opatřeni.
Prokop mlčky uháněl k vrátnici, bodán starosti o Holze. Už zdálky viděl
hroznou skutečnost: dva chlapi stáli ve fortně, zahradnik zahrabával v
rozrytém pisku stopy zápasu, mřižová vrata byla pootevřena a Holz pryč; a
jeden z chlapů měl ruku ovázanou šátkem, protože ho Holz patrně pokousal.
Prokop se stáhl do parku zachmuřený a němý. Dr. Krafft si myslel, že jeho
velitel kuje nový válečný plán, a nerušil ho; a Prokop s těžkým vzdechem usedl
na pařez a ponořil se do pozorováni jakýchsi rozškubaných krajkových hadřiků.
Na cestičce se vynořil dělnik strkajici trakař se smeteným listim. Krafft,
popaden podezřenim, se do něho pustil a namlátil mu strašně; při tom ztratil
skřipec a nemohl jej bez skřipce nalézt; vzal tedy trakař jakožto kořist
zůstavenou na bojišti a spěchal s nim k náčelnikovi. „Utekl,“ hlásil, a
krátkozraké oči mu vitězně plály. Prokop jen zabručel a probiral se dál v tom
měkkém běloučkém, co mu vlálo v prstech. Krafft se zaměstnával trakařem,
nevěda, k čemu je tahle trofej dobrá; konečně ho napadlo obrátit jej dnem
vzhůru, a zazářil: „Dá se na tom sedět!“
Prokop se zvedl a zamiřil k rybniku; dr. Krafft za nim i s trakařem, snad pro
transport přištich raněných. Obsadili plovárnu vestavěnou na kůlech ve vodě.
Prokop obešel kabiny; ta největši byla princeznina, zůstalo tam ještě zrcadlo
a hřeben s několika vytrhanými vlasy, pár vlásniček a huňatý koupaci plášť a
sandálky, věcičky důvěrné a opuštěné; zamezil sem Krafftovi přistup a obsadil
s nim pánskou kabinu na druhé straně. Krafft zářil: nyni měli dokonce loďstvo
skládajici se ze dvou maňásků, kanoe a bachratého člunu, který představoval
jaksi jejich naddreadnought. Prokop dlouho mlčky přecházel po palubě plovárny
nad šedivým rybnikem; potom se ztratil v kabině princeznině, usedl na jeji
lehátko, vzal do náruči jeji huňatý plášť a zaryl se do něho tváři. Dr.
Krafft, který přes svou neuvěřitelnou pozorovaci neschopnost měl nějaké tušeni
o jeho tajemstvi, šetřil jeho citů; točil se po špičkách po koupelně, vyléval
hrncem vodu z baňaté bitevni lodi a sháněl přislušná vesla. Objevil v sobě
velký bojový talent; odvážil se na břeh a nanesl do plovárny kameni všeho
kalibru, až po desetikilové balvany vytržené z hráze; pak se jal odbourávati
prkno po prknu můstek, jenž vedl z pevniny do koupaliště; posléze byli spojeni
se souši jen dvěma holými trámy. Z vytrhaných prken ziskal materiál pro
zabedněni vchodu a krom toho drahocenné rezavé hřebiky, jež natloukl do lopat
vesel hroty ven. Tim vznikla zbraň strašná a vskutku vražedná. Pořidiv to vše
a shledavaje, že dobré jest, byl by se rád tim pochlubil náčelnikovi; ten však
byl zamčen v kabině princeznině a snad ani nedýchal, jak tam bylo ticho. Tu
stanul dr. Krafft nad šedivou plochou rybnika, jenž chladně a tichounce
šplounal; někdy to zažbluňklo, jak se vymrštila ryba, někdy zašelestilo
rákosi; a dr. Krafftovi začalo být úzko z té samoty.
Pokašlával před vůdcovou kabinou a chvilemi něco polohlasně povidal, aby
upoutal jeho pozornost. Konečně Prokop vyšel se rty sevřenými a divnýma očima.
Krafft ho provedl po nové pevnosti, ukazoval mu všecko, předváděl dokonce, jak
daleko dohodi kamenem po nepřiteli; přitom by byl málem sletěl do vody. Prokop
neřekl nic, ale vzal ho kolem krku a polibil na tvář; a dr. Krafft, celý rudý
radosti, by udělal s chuti desetkrát tolik co dosud.
Sedli si na lavičce u vody, kde se slunivala hnědá princezna. Na západě se
zvedly mraky a ukázala se nesmirně daleká, churavě nazlátlá nebesa; celý
rybnik se rozžehl, roztřpytil, rozněžnil bledým a tklivým jasem. Dr. Krafft
rozvijel zbrusu novou teorii o věčné válce, o nadprávi sily, o spáse světa
skrze hrdinstvi; bylo to v ukrutném rozporu s mučivou melancholii tohoto
podzimniho soumraku, ale naštěsti dr. Krafft byl krátkozraký a mimoto
idealista, a následkem toho naprosto nezávislý na nahodilém okoli. Nehledic ke
kosmické kráse této. chvile citili oba zimu a hlad.
A tamhle na souši krátkými, spěchavými krůčky jde pan Paul s košem na lokti,
rozhliži se vpravo vlevo a chvilemi volá stařeckým hláskem:“Kuku! Kuku!“
Prokop jel k němu na bitevni lodi; mermomoci chtěl vědět, kdo ho s tim posilá.
„Prosim, nikdo,“ tvrdil stařik; „ale má dcera, jako Alžběta, je kličnice.“ Byl
by se málem rozmluvil o své dceři Alžbětě; ale Prokop ho pohladil po bilých
vláscich a vzkázal někomu nejmenovanému, že je zdráv a při sile.
Dnes pil dr. Krafft skoro sám, žvanil, filozofoval a opět kašlal na všechnu
filozofii: čin prý, čin je všecko. Prokop se chvěl na princeznině lavičce a
dival se pořád na jednu hvězdu, bůhvi proč si vybral zrovna tu, byla to
oranžová Betelgeuse ve hlavách Oriona. Nebyla to pravda, že je zdráv; pichalo
ho divně v těch mistech, kde to v něm harašilo a šelestilo kdysi v Týnici,
motala se mu hlava a třásl se láman zimnici. Když pak chtěl něco řici, mátl se
mu jazyk a jektal tak, že dr. Krafft vystřizlivěl a tuze se znepokojil. Honem
uložil Prokopa na lehátko v kabině a přikryl ho všim možným, i řasnatým
pláštěm princezniným, a vyměňoval mu na čele namočený ubrousek. Prokop tvrdil,
že je to rýma; k půlnoci usnul a blábolil, pronásledován děsnými sny.


XLI.

Ráno se Krafft probudil teprve Paulovým kukánim; chtěl vyskočit, ale byl úplně
zdřevěnělý, neboť celou noc mrzl a spal stočen jako pes. Když se konečně
jakžtakž sebral, shledal, že je Prokop pryč; a jedna lodička z jejich flotily
se kolébala u břehu. Měl velikou úzkost o svého vůdce, byl by ho šel hledat,
ale bál se opustit pevnost tak dobře vybudovanou. I zlepšoval na ni, co ještě
mohl, a vyhližel krátkozrakýma očima Prokopa.
Zatim Prokop, který se probudil jako rozlámaný a s blátivou chuti v ústech,
zimomřivý a trochu omámený, byl už dávno v parku vysoko v koruně starého
dubiska, odkud bylo vidět celou frontu zámku. Točila se mu hlava, držel se
pevně větve, nesměl se podivat rovně dolů, nebo by se svalil závrati.
Tato strana parku už zřejmě platila za bezpečnou; i staré přibuzné se
odvažovaly aspoň na zámecké schody, páni se procházeli po dvou nebo po třech,
kavalkáda kavalirů se proháněla po hlavni cestě; u vrat zas se toči děda
vrátný. Po desáté hodině vyšla sama princezna provázena následnikem trůnu a
zamiřila někam k japonskému pavilónu. V Prokopovi hrklo, zdálo se mu, že leti
hlavou dolů; křečovitě se chytil větve a třásl se jako list. Nikdo nešel za
nimi; naopak všichni honem vyklidili park a zdržovali se na prostranstvi před
zámkem. Asi rozhodujici rozmluva nebo co. Prokop se kousal do rtů, aby
nevykřikl. Trvalo to nesmirně dlouho, snad hodinu nebo pět hodin. A teď běži
odtamtud následnik sám, je rudý a zatiná pěstě. Panstvo před zámkem se
rozprsklo a počalo ustupovat, jako by mu dělalo misto. Následnik nehledě
napravo ani nalevo běži po schodech; tam mu jde vstřic prostovlasý oncle Rohn,
chvilku spolu hovoři, le bon prince si přejede dlani čelo a oba zajdou.
Panstvo před zámkem se přeskupuje, strká k sobě hlavy a kouskovitě se vytráci.
Před zámek předjiždi pět automobilů.
Prokop chytaje se větvi svezl se z koruny dubiska, až se zaryl do země; chtěl
tryskem běžet k japonskému altánu, ale bylo mu až směšné, jak nevládl nohama;
motal se, jako by šel mlhovým těstem, a nemohl jaksi nalézti ten altán, neboť
věci se mu před očima mátly a prostupovaly. Konečně to našel: tady sedi
princezna, šeptá něco před sebe přisnými rty a švihá do vzduchu proutkem.
Sebral všechny své sily, aby k ni junácky došel. Vstala a pokročila mu vstřic:
„Čekala jsem na tebe.“ Šel k ni a málem by do ni vrazil, neboť viděl ji pořád
jaksi daleko. Položil ji ruku na rameno, divně a násilně napřimen a trochu se
komihaje, a hýbal rtoma; myslel si, že mluvi. Také ona něco povidá, ale neni
ji rozumět; všechno se odehrává jako pod vodou. Tu zazněly sirény a houkačky
vyjiždějicich aut.
Princezna sebou trhla, jako by ji kolena poklesla. Prokop vidi smazaný bledý
obličej, v němž plavou dva temné otvory. „To je konec,“ slyši jasně a zblizka,
„je konec. Milý, milý, já ho poslala pryč!“ Kdyby byl mocen smyslů, viděl by,
že je jako vyřezána ze sloni, ztuhlá a mučednicky krásná ve svrchovanosti své
oběti; ale jen mžikal přemáhaje mdlobný třas viček, a zdálo se mu, že se
podlaha pod nim zvedá, aby se překlopila. Princezna si přitiskla ruce k čelu a
zakolisala; právě se mu chtěla složit do loktů, aby ji nesl, aby ji podepřel
vyčerpanou skutkem přiliš velikým; ale předešel ji a složil se bez hlesu u
jejich nohou; zhroutil se beztvaře, jako by byl jen z hader a provazů.
Neztratil vědomi; bloudil očima, naprosto nechápaje, kde vlastně je a co se s
nim děje. Zdálo se mu, že ho někdo zvedá jikaje úděsem; chtěl sám napomoci,
ale nešlo to. „To je jen… entropie,“ řekl; zdálo se mu, že tim vystihuje
situaci, a opakoval to několikrát. Pak se mu něco rozlilo v hlavě s hukotem
jako jez; jeho hlava těžce vyklouzla z třesoucich se prstů princezniných a
bouchla o zem. Princezna vyskočila jako šilená a běžela pro pomoc.
Věděl nejasně o všem, co se děje; citil, že ho zvedaji tři lidé a vlekou ho
pomalu, jako by byl z olova; slyšel jejich těžké šoupavé kroky a rychlý dech,
a divil se, že ho nemohou unést jen tak v prstech jako onučku. Někdo ho po tu
celou dobu držel za ruku; obrátil se a poznal princeznu. „To jste hodný,
Paul,“ řekl ji vděčně. Pak nastala nějaká zmatená, udýchaná strkanice; to ho
nesli po schodech, ale Prokopovi se zdálo, že s nim padaji kroužice do
propasti. „Netlačte se tak,“ bručel, a hlava se mu zatočila tak, že přestal
vnimat.
Když otevřel oči, viděl, že leži zase v kavalirském pokoji a že ho Paul svléká
rozčilenýma rukama. U hlav stoji princezna s takhle velkýma očima, jako kola.
Prokop si všechno spletl. „Já jsem spadl s koně, že?“ breptal namáhavě. „Vy –
vy jste – vy jste byla při tom, že? Bum, vy-výbuch. Litrogly – nitrogry –
mikro – Cé há dvě o en o dvě. Kom-pli-kovaná fraktura. Kovaná, jako kůň.“
Umlkl, když pocitil na čele studenou úzkou ruku. Pak zahlédl toho řeznika
doktora a zaťal nehty do něčich chladných prstů. „Já nechci,“ úpěl, neboť se
bál, že to začne bolet; ale řeznik jen položil hlavu na jeho prsa a dusil,
dusil jako cent. V úzkostech našel nad sebou temné a rozzelé oči, jež ho
fascinovaly. Řeznik se zvedl a povidal někomu vzadu: „Chřipková pneumonie.
Odveďte Jeji Jasnost, to je nakažlivé.“ Někdo mluvi pod vodou, a doktor
odpovidá: „Dojde-li k zpěněni plic, pak – pak –“ Prokop pochopil, že je
ztracen a že umře; ale bylo mu to svrchovaně lhostejno: tak jednoduché si to
nikdy nepředstavoval. „Čtyřicet celých sedm,“ povidá doktor. Prokop má jediné
přáni: aby ho nechali vyspat, dokud neumře; ale misto toho ho balili do něčeho
studeného, ohoh! Konečně si tam šeptaji; a Prokop zavřel oči a nevěděl dál o
ničem.
Když se probudil, stáli nad nim dva staři černi páni. Bylo mu neobyčejně
lehko. „Dobrý den,“ řekl a chtěl se pozvednout. „Nesmite se hýbat,“ povidá
jeden pán a mirně ho tlači do podušek. Prokop tedy poslušně leži. „Ale je mi
už lépe, že?“ ptá se spokojen. „To se rozumi,“ bruči druhý pán pochybovačně,
„ale nesmite se vrtět. Klid, rozumite?“
„Kde je Holz?“ napadlo Prokopa najednou.
„Zde,“ ozvalo se z kouta, a u nohou postele stoji pan Holz s hrozným
škrábancem a modřinou na tváři, ale jinak suchý a kožnatý jako vždy. A za nim,
propána, to je Krafft, Krafft zapomenutý v plovárně; má oči zpuchlé a rudé,
jako by tři dny brečel. Co se mu stalo? Prokop se na něho usmál, aby ho
potěšil. Také pan Paul jde po špičkách k posteli a drži si ubrousek na ústech.
Prokop má radost, že tu jsou všichni; bloudi očima po pokoji, a za zády obou
černých pánů objevi princeznu. Je na smrt bledá a hledi na Prokopa ostrýma,
zachmuřenýma očima, jež ho nepochopitelně děsi. „Mně už nic neni,“ šeptá, jako
by se omlouval. Optala se očima jednoho z pánů, který rezignovaně pokývl.
Přistoupila tedy k posteli. „Je ti lépe?“ ptá se tiše. „Milý, milý, je ti
skutečně lépe?“
„Ano,“ řekl nejistě, trochu tisněn zaraženým chovánim všech. „Skoro docela
dobře, jen – jen –“ Jeji upřené oči ho plnily zmatkem a téměř úzkosti; bylo mu
nevolno a svěravě.
„Přál by sis něco?“ ptala se naklánějic se nad nim.
Pocitil divou hrůzu z jejiho pohledu. „Spát,“ zašeptal, aby mu unikl.
Pohlédla tázavě na oba pány. Jeden maličko pokývl a podival se na ni tak – tak
divně vážně. Pochopila a zesinala ještě vic. „Spi tedy,“ vypravila ze sebe
seškrceně a obrátila se ke zdi. Prokop se s podivenim rozhlédl. Pan Paul měl
ubrousek nacpaný v ústech, Holz stál jako voják mrkaje očima a Krafft
jednoduše brečel opřen čelem o skřiň a hlučně posmrkával jako uřvané ditě.
„Ale copak –,“ vyhrkl Prokop a chtěl se zvednout; ale jeden pán mu položil na
čelo ruku, jež byla tak měkká a dobrá, tak ujišťujici a zrovna svatá na hmat,
že se rázem uklidnil a blaženě vzdychl. Usnul téměř okamžitě.
Probudil se teninkou nitkou polovědomi. Sviti jen lampička na nočnim stolku, a
vedle postele sedi princezna v černých šatech a divá se na něj lesklýma,
uhrančivýma očima. Rychle zavřel vička, aby je už neviděl; tak úzko mu z nich
bylo.
„Drahý, jak je ti?“
„Kolik je hodin?“ zeptal se mátožně.
„Dvě.“
„Poledne?“
„V noci“
„Už,“ podivil se sám nevěda proč a snoval dál matnou nit spánku. Chvilemi
pootevřel štěrbinkou oči a vyhlédl po princezně, aby zas usnul. Proč se tak
pořád divá? Někdy mu svlažila rty lžičkou vina; spolkl to a zamumlal něco.
Posléze zapadl do tupého a nevědomého spánku.
Procitl teprve tim, že jeden z černých pánů opatrně poslouchal na jeho prsou.
Pět jiných stálo kolem.
„Neuvěřitelno,“ bručel černý pán. „To je zrovna kovové srdce.“
„Musim zemřit?“ zeptal se Prokop znenadáni. Černý pán málem vyskočil
překvapenim.
„Uvidime,“ řekl. „Když jste přečkal tuhle noc – Jak dlouho jste s tim chodil?“
„S čim?“ divil se Prokop.
Černý pán mávl rukou. „Klid,“ řekl, „jenom klid.“ Prokop, třeba mu bylo
nekonečně bidně, se ušklibl; když si doktoři nevědi rady, vždycky předpisuji
klid. Ale ten s dobrýma rukama mu povidal: „Musite věřit, že se uzdravite.
Vira dělá zázraky.“


XLII.

Vytřeštil se ze spánku zalit a promočen hrozným potem. Kde – kde to je? Strop
nad nim se kymáci a hourá; nenene, padá, šroubuje se dolů, sváži se pomalu
jako ohromný hydraulický lis. Prokop chtěl zařvat, ale nemohl; a strop už je
tak nizko, že na něm rozeznává sedici průsvitnou mušku, zrnéčko pisku v
omitce, každou nepravidelnost nátěru; a pořád to klesá niž, a Prokop se na to
divá s bezdechou hrůzou a jen sipe, nemoha ze sebe dostati hlasu. Světlo
zhaslo, je černá tma; teď ho to rozmačká. Prokop už citi, jak se strop dotýká
jeho zježených vlasů, a bezhlase pišti. Ahaha, teď nahmatal dveře, vyrazil je
a vrhl se ven; i tam je taková tma, ale neni to tma, je to mlha, vlči mlha,
mlha tak hustá, že nemohl dýchat a dusil se škytaje děsem. Teď mne to udusi,
zhrozil se a dal se na útěk, šlapaje popopo po nějakých ži-živých tělech, jež
se ještě krouti. Sklonil se tedy a sáhl, a citil pod rukou mladé široké ňadro.
To – to – to je Anči, lekl se, a hmatal ji po hlavě; ale misto hlavy to mělo
misu, por-ce-lánovou misu s něčim slizkým a houbovitým jako hovězi plice. Bylo
mu k zvraceni děsno a chtěl od toho odtrhnout ruce; ale ono to k nim lne,
třese se to, přisává se to a plazi se mu to po pažich nahoru. A ona je to
krakatice, mokrá a rosolovitá sépie s lesklýma očima princezny, jež se na něho
upiraji náruživě a zamilovaně; sune se mu po holém těle a hledá, kam usadi
svou ohavnou, prýštici řiť. Prokop nemůže vydechnout, rve se s ni, zarývá
prsty do povolné klihovité hmoty; a procitl.
Byl nad nim nakloněn pan Paul a dával mu na prsa studený obkladek.
„Kde – kde – kde je Anči,“ zamumlal Prokop s úlevou a zavřel oči. Buch buch
buch běži uřicen přes oranice; nevi, kam má tak naspěch, ale pádi, až mu srdce
taktaktak třešti, a chtěl by vyrazit jek úzkosti, že dorazi pozdě. A tady je
ten dům, jenže nemá dveři ani oken, jen nahoře hodiny a na nich za pět minut
čtyři. A Prokop rázem vi, že až bude rafije na dvanáctce, vyleti celá Praha do
povětři. „Kdo mně vzal Krakatit,“ ryči Prokop; pokouši se vylézt po stěně, aby
zastavil ručičku hodin v posledni minutě; vyskakuje a zarývá nehty do omitky,
ale klouže dolů nechávaje ve zdi dlouhé škrábance. Vyje hrůzou a leti někam
pro pomoc. Vrazil do konirny; tam stoji princezna s Carsonem a miluji se
trhanými, mechanickými pohyby jako panáčci na kamnech poháněni teplým
vzduchem. Když ho spatřili, vzali se za ruce a poskakovali rychle, rychle,
pořád rychleji.
Prokop vzhlédl a viděl nad sebou schýlenou princeznu se sevřenými rty a
palčivýma očima. „Zviře,“ zamručel s chmurnou nenávisti a zavřel rychle oči.
Srdce mu tlouklo tak šileně rychle, jako ti dva křepčili. V očich ho štipal
pot a v ústech citil jeho slanost; jazyk měl připečený k patru a hrdlo slepené
suchou žizni. „Chceš něco?“ ptá se princezna zblizoučka. Zavrtěl hlavou.
Myslela si, že opět spi; ale ozval se po chvili chraptivě: „Kde je ta obálka?“
Měla za to, že jen bláboli; neodpověděla. „Kde je ta obálka?“ opakoval vraště
panovačně čelo. „Tady je, tady,“ řekla honem a vsunula mu mezi prsty prvni
kousek papiru, který měla po ruce. Smačkal jej prudce a zahodil. „To neni ona.
Já – já chci svou obálku. Já – já – já chci svou obálku.“
Opakoval to ustavičně, začal zuřit, i zavolala Paula. Paul se rozpomněl na
jakousi silnou, usmolenou a převázanou obálku; kde honem je? Našel ji v nočnim
stolku: tady je, nu vida! Prokop ji sevřel v obou rukou a přitiskl k prsoum;
utišil se a usnul jako zabitý. Po třech hodinách se zarosil novým vydatným
potem; byl tak zesláblý, že sotva dýchal. Princezna zalarmovala lékařské
konzilium. Teplota povážlivě poklesla, tep sto sedm, puls nitkovitý; chtěli mu
dát ihned kafrovou injekci, ale mistni venkovský doktor, zeselštělý a
ostýchavý mezi takovými kapacitami, minil, že on nikdy pacienta nebudi. „Aspoň
zaspi svůj exitus, že?“ bručel slavný odbornik. „Máte dobře.“
Princezna, úplně vysilená, si šla na hodinku lehnout, když ji ujistili, že
bezprostředně a tak dále; a u pacienta zůstal dr. Krafft, slibiv, že za hodinu
ji vzkáže, jak a co je. Nevzkázal nic, a znepokojená princezna se šla podivat.
Našla Kraffta, jak stoji uprostřed pokoje, máchá rukou a z plných plic káže o
telepatii dovolávaje se Richeta, Jamese a kdekoho; a Prokop ho s jasnýma očima
poslouchá a sem tam ho popichuje námitkami vědeckého a omezeného nevěrce, „Já
ho vzkřisil, princezno,“ křičel Krafft zapominaje na vše, „já jsem upnul svou
vůli na to, aby se uzdravil; já… já jsem nad nim dělal takhle rukama, vite?
Vyzařováni ódu. Ale to člověka vyčerpá, uf! Jsem jako moucha,“ prohlásil a
vypil naráz plnou sklenici benzinu na koupáni pravazek, pokládaje to nejspiš
za vino; tak byl rozčilen svým úspěchem. „Řekněte,“ křičel, „uzdravil jsem vás
nebo ne?“
„Uzdravil,“ řekl Prokop s přivětivou ironii.
Dr. Krafft se zhroutil do lenošky. „To jsem si sám nemyslel, že mám tak silnou
auru,“ oddychl si spokojeně. „Mám na vás ještě vzkládat ruce?“
Princezna pohližela užasle z jednoho na druhého, zruměnila celá, zasmála se,
najednou se ji zamžily oči, pohladila Kraffta po zrzavé lbi a utekla.
„Ženská nic nevydrži,“ konstatoval Krafft pyšně. „Vidite, já jsem docela
klidný. Citil jsem, jak mně to fluidum vyvěrá z prstů. Jistě by se to dalo
fotografovat, vite? jako ultrazářeni.“
Přišly kapacity, vyhodily předevšim Kraffta přes jeho protesty a znovu měřily
teplotu, puls a všechno možné. Teplota vyšši, puls devadesát šest, pacient
jevi chuť k jidlu; nu, to už je slušný obrat. Načež se kapacity odebraly do
druhého křidla zámku, kde jich bylo také třeba; neboť princezna hořela skoro
čtyřiceti stupni horečky, nadobro sesutá po šedesáti hodinách bděni; mimoto
silná anémie a celá řada jiných nemoci až po zanedbané tuberkulózni ložisko.
Den nato už Prokop v posteli seděl a slavně přijimal návštěvy. Veškeré panstvo
se sice rozjelo, jen tlustý cousin tu ještě otálel nudě se a vzdychaje.
Přihnal se Carson trochu rozpačitý, ale dopadlo do dobře; Prokop se o ničem
minulém nezminil, a konečně Carson vyhrkl, že ty hrozné třaskaviny, které
Prokop vyráběl v poslednich dnech, se při zkoušce ukázaly asi tak výbušné jako
piliny; zkrátka – zkrátka musel mit Prokop už pořádnou horečku, když je dělal.
I to přijal pacient klidně, a dal se teprve po chvili do smichu. „No vite,“
řekl dobromyslně, „ale přesto jsem vám nahnal pořádně strachu.“
„Nahnal,“ přiznával se Carson ochotně. „Jakživ jsem se tolik nebál o sebe a o
fabriku.“
Krafft se přivlekl zsinalý a zkroušený. Oslavoval v noci své zázračné fluidum
velkými úlitbami vina, a nyni mu bylo prábidně. Bědoval, že navždycky utopil
svou ódickou silu, a umiňoval si od nynějška indickou askezi podle jógy.
Přišel i oncle Charles, byl trčs aimable a jemně zdrženlivý; Prokop mu byl
vděčen, že le bon prince našel pěkný tón jako před měsicem, znovu mu vykaje a
zábavně povidaje o svých zkušenostech. Jen když se hovor vzdáleně dotkl
princezny, padala na ně jistá rozpačitost.
Zatim princezna v druhém křidle suše, bolestně pokašlávala a přijimala každé
půl hodiny Paula, který musel povidat, co dělá Prokop, co jedl, kdo je u něho.
Ještě se mu vracely horečky s děsnými sny. Viděl temnou kůlnu a nekonečné řady
sudů s Krakatitem; před kůlnou chodi vojáček se zbrani sem a tam, sem a tam;
nic vic, ale bylo to hrůzné. Zdálo se mu, že je zase ve válce; před nim
nesmirné pole s mrtvými, všichni jsou mrtvi, i on je mrtvý a přimrzlý ledem k
zemi; jen pan Carson klopýtá přes mrtvoly, sakruje mezi zuby a divá se
netrpělivě na hodinky. Z druhé strany se škubavými, posunčivými pohyby bliži
chromý Hagen; jde kupodivu rychle, skáče jako polni kobylka a vrže při každém
křečovitém pohybu. Carson nedbale pozdravi a něco mu povidá; Prokop marně
napiná uši, neslyši ani slova, snad to odnáši vitr; Hagen ukazuje předlouhou
vychrtlou rukou k obzoru; co si to povidaji? Hagen se odvráti, sáhne si k
ústům a vyjme odtamtud žlutý koňský chrup i s čelistmi; misto úst má nyni
propadlou černou diru, jež se bezhlase chechtá. Druhou rukou si vydloubne z
očnice ohromnou bulvu oka a drže ji mezi prsty nastavuje ji zblizka k tváři
padlým; a žlutý chrup v jeho druhé ruce skřehotavě počitá: „Sedmnáct tisic sto
dvacet jedna, sto dvacet dvě, sto dvacet tři.“ Prokop se nemůže odvrátit,
neboť je mrtev; děsná krvavá bulva utkvi nad jeho lici, a koňský chrup
zaskřehotá „sedmnáct tisic sto dvacet devět“ a cvakne. Nyni se již Hagen
ztráci v dálce, pořád počitaje; a přes mrtvoly skáče princezna se sukněmi
nestoudně vyhrnutými vysoko nad kraj kalhot, bliži se k Prokopovi a mává v
ruce tatarským bunčukem, jako by to byl bičik. Stane nad Prokopem, zalechtá ho
bunčukem pod nosem a šťouchá ho špičkou nohy do hlavy, jako by zkoušela, je-li
mrtev. Tryskla mu krev do tváři, ač byl skutečně mrtev, tak mrtev, že citil v
sobě srdce zmrzlé na kost; avšak nemohl snést pohled na jeji ztepilé nohy.
„Milý, milý,“ zašeptala a pomalým pohybem spustila sukně, klekla mu u hlav a
sahala dlani lehýnce po jeho prsou. Najednou mu vytrhla z kapsy tu silnou
převázanou obálku a vyskočila, roztrhala ji zuřivě na kousky a hodila do
větru. Pak se s rukama rozpřaženýma roztočila a viřila, viřila šlapajic po
mrtvých, až zmizela v nočni tmě.


XLIII.

Neviděl princeznu od té doby, co ulehla; jen mu psala několikrát denně
kratičké a horouci dopisy, jež vic tajily než povidaly. Od Paula slyšel, že
polehává a opět přecházi po pokojich; nemohl pochopit, že k němu nepřijde, sám
již vstával z postele a čekal, že ho aspoň na minutku zavolá. Nevěděl, že ona
zatim plivá krev z tuberkulózni kaverny, která se v ni akutně otevřela;
nenapsala mu to, patrně se děsila, že by se mu jaksi ošklivěla, že by ho
pálily na rtech stopy jejich někdejšich polibků nebo co; a hlavně, hlavně se
hrozila toho, že by se nezdržela a i nyni ho pocelovala horečnými rty. Neměl
tušeni, že v jeho vlastnich chrchlech našli doktoři stopy infekce, což uvádělo
princeznu v zoufalstvi sebeobviňováni a úzkosti; nevěděl prostě nic, vztekal
se, že s nim dělaji takové okolky, když už se citi skoro zdráv, a trnul
studeným děsem, když opět uplynul den, aniž princezna projevila přáni vidět
ho. Omrzel jsem se ji, napadlo ho; nikdy jsem pro ni nebyl vic než chvilkový
rozmar. Podezřival ji ze všeho možného; nechtěl se ponižit k tomu, aby sám
naléhal na schůzku, nepsal ji skorem a jen čekal v lenošce s rukama a nohama
ledovějicima, že ona přijde, že vzkáže, že se něco vůbec stane.
Za slunečných dnů smi už ven do podzimniho parku, smi posedět na výsluni
obalen plédy; chtěl by je shodit a potloukat se někde u rybnika se svými
černými myšlenkami, ale vždycky je tu Krafft, Paul nebo Holz nebo i sám Rohn,
vlidný a zamyšlený poeta Charles, který má pořád něco na jazyku, ale nikdy to
neřekne; misto toho rozjimá o vědě, osobni zdatnosti, úspěchu a hrdinstvi a já
nevim o čem ještě. Prokop poslouchá jednim uchem; má dojem, že le bon prince
se neobyčejně namáhá zainteresovat jej bůhviproč na vysoké ctižádosti.
Zničehonic dostal od princezny zmatenou bumagu, aby se držel a nebyl
ostýchavý; a hned nato k němu Rohn přivedl úsečného starého pána, na kterém
vše prozrazovalo oficira převlečeného do civilu. Úsečný pán se vyptával
Prokopa, co hodlá podnikat v budoucnosti. Prokop, trochu dopálen jeho tónem,
odpovidal bryskně a velkopansky, že hodlá vytěžit své vynálezy.
„Vojenské vynálezy?“
„Nejsem voják.“
„Váš věk?“
„Třicet osm.“
„Služba?“
„Žádná. A vaše?“
Úsečný pán se trochu zmátl. „Minite své vynálezy prodat?“
„Ne.“ Citil, že je vyslýchán a potěžkáván vysoce oficiálně; nudilo ho to,
odrýval stručné odpovědi a jen tu a tam ráčil utrousit špetku své učenosti
nebo hrst balistických čisel, vida, že tim dělá Rohnovi zvláštni radost.
Skutečně, le bon prince zářil a pořád pokukoval na úsečného pána, jako by se
ho ptal: Nu tak, co řikáte tomu zázraku? Úsečný pán však neřekl nic a konečně
se vlidně poroučel.
Den nato přiletěl Carson hned ráno, mnul si nadšeně ruce a vypadal nesmirně
důležitě. Tlachal páté přes deváté a pořád sondoval; nadhazoval neurčitá
slovička, jako „budoucnost“ a „kariéra“ a „báječný úspěch“; vic nechtěl řici,
zatimco Prokop se nechtěl vůbec ptát. A pak přišlo psani od princezny, bylo
velmi vážné a divné: „Prokope, dnes bude na Tobě učinit rozhodnuti. Já je
učinila a nelituji toho. Prokope, v této posledni chvili Ti pravim, že Tě
miluji a budu na Tebe čekat, jak dlouho bude třeba. I kdybychom se museli
načas odloučit – a musi to být, neboť Tvá žena nemůže být Tvou milenkou –,
kdyby nás na léta rozloučili, budu Ti pokornou nevěstou; už to, už to mi je
takovým štěstim, že Ti to nemohu řici; chodim po pokoji omámená a koktám Tvé
jméno; milý, milý, nedovedeš si představit, jak jsem byla nešťastna od té
chvile, co se to s námi stalo. A nyni učiň, abych se mohla opravdu jmenovati
Tvou W.“
Prokop tomu dobře nerozuměl; četl to bezpočtukrát a nemohl prostě uvěřit, že
princezna mini zkrátka a dobře… Chtěl se k ni rozběhnout, ale nevěděl kudy kam
ukrutnými rozpaky. Snad je to jen nějaký ženský nebo citový výbuch, který se
nesmi brát doslova a kterému vůbec nerozumim; což se v ni vyznáš? Zatimco
takto rozjimal, přišel k němu oncle Charles provázený Carsonem. Oba vypadali
tak… oficiálně a slavnostně, že v Prokopovi hrklo: Jdou mně řici, že teď mne
odvezou na pevnost; princezna něco zavařila, a je zle. Hledal očima nějakou
zbraň, kdyby snad došlo k násili; vybral si mramorové těžitko a usedl
přemáhaje tlučeni srdce.
Oncle Rohn se podival na Carsona a Carson na Rohna s němou otázkou, kdo má
začit. Začal tedy oncle Rohn: „To, co vám jdeme řici, je… do jisté miry…
nepochybně…“ Bylo to známé Rohnovo plaváni; ale náhle se sebral a dal se do
toho odvážněji: „Můj milý, co ti jdeme řici, je věc velmi vážná a… diskrétni.
Neni to jenom v tvém zájmu, abys učinil… nýbrž naopak… Zkrátka byla to nejprve
jeji myšlenka a… co mne se týče, tu po zralé úvaze… Ostatně ji nelze klást
mezi; je uminěná… a vášnivá. Mimoto vskutku, jak se zdá, si vzala do hlavy…
Zkrátka je na všechny strany lépe najit slušné východisko,“ vyhrkl s úlevou.
„Pan ředitel ti to vysvětli.“
Carson, čili pan ředitel, si nasadil pomalu a důstojně brejle; vypadal až
znepokojivě vážně, docela jinak než kdy dosud. „Je mi cti,“ začal, „tlumočit
vám přáni… našich nejvyššich vojenských kruhů, abyste vstoupil do svazku naši
armády. Totiž samozřejmě jen do vyšši technické služby, která leži ve směru
vaši práce, a to hned v hodnosti abych tak řekl… Chci řici, že neni sice
naprosto zvykem vojensky aktivovati – krom připadu války – civilni odborniky,
ale v našem připadě – vzhledem k tomu, že přitomná situace si nezadá mnoho s
válkou – se zvláštnim zřenim k vašemu vskutku mimořádnému, přitomnými poměry
ještě vice pointovanému významu, a… se zcela ojedinělým ohledem k vašemu
výjimečnému postaveni, nebo přesněji řečeno k vašim… v nejvyšši miře soukromým
závazkům –“
„K jakým závazkům?“ přerušil ho Prokop chraptivě.
„Nu,“ zabreptal Carson trochu zmaten, „myslim… váš zájem, váš poměr…“
„Já jsem se vám z žádného zájmu nezpovidal,“ odbyl ho Prokop přikře.
„Haha,“ spustil pan Carson jaksi osvěžen touto hrubosti, „to se vi že ne;
nebylo taky třeby. Holenku, s tim jsme se taky tam nahoře neoháněli, co? To se
rozumi že ne. Prostě osobni ohledy a tečka. Vlivná intervence, vite? Ke všemu
jste dokonce cizozemec – Ostatně i to je vyřizeno,“ dodal honem. „Stači, když
podáte žádost o uděleni našeho státniho občanstvi.“
„Aha.“
„Chtěl jste řici?“
„Nic, jen aha.“
„Aha. Tak to je všecko, ne? Stači tedy podat formálni žádost a… mimoto… Nu,
chápete přece, že… že je třeba jisté záruky, ne? Prostě si něčim vysloužite
hodnost, která se vám uděli… za mimořádné zásluhy, že ano? Předpokládá se, že…
že vydáte armádni správě… rozumite, že vydáte…“
Bylo hrozné ticho. Le bon prince se dival z okna, Carsonovy oči zmizely za
blýskavými skly; a Prokopovi se sviralo srdce úzkosti.
„… že totiž vydáte… prostě vydáte…,“ koktal Carson stěži dýchaje napětim.
„Co?“
Carson napsal prstem do vzduchu veliké K. „Nic vic,“ vydechl odlehčen. „Den
nato dostanete dekret… jmenován extra statum setnikem-inženýrem sapérů…
přidělen do Balttinu. Hotovo. Tak.“
„Totiž jen prozatim setnikem,“ ozval se oncle Charles. „Vic jsme nedocilili.
Ale dostalo se nám záruky, že jakmile dojde neočekávaně k válce –“
„Tedy do roka,“ vyhrkl Carson, „nanejvýš do roka.“
„– jakmile dojde k válce – ať je to kdy chce a s kým chce –, budeš jmenován
generál-inženýrem zákopnictvi… v hodnosti generála jizdy, a změni-li se snad –
po výsledku války – vládni forma, bude s tim spojen titul Excelence a… zkrátka
nejprve baronie. I v tom směru… se nám dostalo… nejvyššiho ujištěni,“ dokončil
Rohn nehlasně.
„A kdo vám řekl, že bych to chtěl?“ ozval se Prokop ledově.
„Ale můj bože,“ vysypal Carson, „kdo by to nechtěl? Mně slibili titul rytiře;
já na to sic kašlu, ale neni to pro mne, je to pro svět. Ostatně pro vás by to
mělo docela zvláštni význam.“
„Tak vy tedy myslite,“ děl Prokop pomalu, „že vám přece jen vydám Krakatit?“
Pan Carson chtěl vyletět, ale oncle Charles jej zadržel. „Máme za to,“ začal
vážně, „že učiniš vše nebo že… připadně… přineseš každou oběť, abys zachránil
princeznu Hagenovou z jejiho nelegálniho a… nesnesitelného postaveni. Za
zvláštnich okolnosti… může princezna podat ruku vojákovi. Jakmile budeš
setnikem, upravi se váš poměr… přisně tajným zasnoubenim; princezna ovšem
odjede a vráti se, až… až bude moci požádati člena panujiciho domu, aby byl
jejim svědkem při svatbě. Do té doby… do té doby je na tobě, aby sis vysloužil
manželstvi, jakého jsi hoden a jakého je hodna princezna. Podej mi ruku.
Nemusiš se ještě rozhodovat; rozvaž dobře, co činiš, co je tvá povinnost a co
máš za ni dát. Mohl bych se dovolávat tvé ctižádosti; ale mluvim jen k tvému
srdci. Prokope, ona trpi nad své sily a přinesla lásce větši oběť než kdy
která žena. I ty jsi trpěl; Prokope, ty trpiš ve svém svědomi; ale nedělám na
tebe nátlak, protože ti věřim. Važ dobře, a potom mně poviš…“
Pan Carson pokyvoval hlavou skutečně a hluboce dojat. „Je to tak,“ řekl. „Jsem
sic sprostá kůže, taková stará hovězi juchta, ale musim řici, že… že… Já vám
to řikal, ta ženská má rasu. Kristepane, to člověk teprve vidi…“ Uhodil se
pěsti do srdečni krajiny a pohnutě mrkal. „Člověče, já bych vás zaškrtil,
kdybyste… kdybyste nebyl hoden…“
Prokop už neposlouchal; vyskočil a pobihal po pokoji s tváři svraštělou a
rozlicenou. „Já… já tedy musim, že?“ drtil chraptivě. „Tak tedy já musim?
Dobře, když musim… Vy jste mne zaskočili! Já přece nechtěl –“
Oncle Rohn vstal a položil mu mirně ruku na rameno. „Prokope,“ řekl,
„rozhodneš se sám. Nepospicháme na tebe; poraď se s tim nejlepšim, co v tobě
je; dotaž se Boha, lásky nebo svědomi nebo cti nebo já nevim čeho. Jen
pamatuj, že nejde jen o tebe, ale i o tu, která tě miluje tak, že je s to…
učinit…“ Mávl bezmocně rukou. „Pojďme!“


XLIV.

Ten den byl podmračný a sychravý. Princezna pokašlávala, mrazilo ji a opět
hořela, ale nevydržela v posteli: čekala odpověď Prokopovu. Vyhližela oknem,
nevyjde-li ven, a zase zavolala Paula. Stále totéž: pan inženýr přecházi po
pokoji. A neřiká nic? Ne, nic neřiká. Vlekla se od stěny ke stěně, jako by ho
chtěla provázet; a zas usedla a kolébala se celým tělem, aby opila svůj
zimničný nepokoj. Oh, ani to už nelze snést! Zničehonic mu začala psát dlouhý
dopis; zapřisahala ho, aby si ji vzal za ženu; že nemusi vydat nic, žádné své
tajemstvi, žádny Krakatit; že ona za nim půjde do jeho života a bude mu
sloužit, děj se co děj. „Miluji Tě tak,“ psala, „že mně už žádná oběť nestači,
abych Ti ji přinesla. Podrob mne zkoušce, zůstaň chudý a neznámý; půjdu s
Tebou jako Tvá žena, a nikdy již se nebudu moci vrátit do světa, který
opustim. Vim, že mne miluješ málo a jen roztržitým koutkem srdce; ale zvykneš
si na mne. Byla jsem pyšná, zlá a vášnivá; změnila jsem se, chodim mezi
starými věcmi jako cizi, přestala jsem být –“ Přečtla to a roztrhala to na
kousky tiše sténajic. Byl večer, a od Prokopa zpráva nepřicházela.
Snad se ohlási sám, napadlo ji, a v netrpělivém chvatu se dala oblékat do
večernich šatů. Rozčilena stála před velikým zrcadlem a zkoumala se palčivýma
očima, děsně nespokojena s účesem, se šaty, se všim možným; pokrývala
rozpálené lice novými a novými vrstvami pudru, mrazilo ji na nahých pažich,
ověšovala se šperky; připadala si ošklivá, nemožná a nemotorná. „Nepřišel
Paul?“ ptala se každou chvili. Konečně přišel: nic nového, pan Prokop sedi
potmě a nedovoli rozsvitit.
Je už pozdě; princezna nesmirně unavena sedi před zrcadlem, pudr ji odprýskává
s rozžhavených lici, je zrovna šedivá a ruce má ztuhlé. „Odstroj mne,“ káže
chabě komorné. Svěži, telátkovité děvče snimá s ni šperk za šperkem, rozpiná
šaty a navléká ji průsvitný peignoir; a právě když se chystá pročesat jeji
rozpoutanou hřivu, vrazi do dveři Prokop neohlášen.
Princezna strnula a zbledla ještě vic. „Jdi, Marieke,“ vydechla a sevřela na
hubených prsou peignoir. „Proč… jsi… přišel?“
Prokop se opiral o skřiň, velmi bledý a s očima načisto krvavýma. „Tak tedy,“
vyrazil zaškrceně, „to byl váš plán, že? To jste na mne dobře nastrojili!“
Vstala jako udeřena: „Co – co – co to mluviš?“
Prokop zaskřipal zuby. „Já vim, co mluvim. Tedy o to tady šlo: abych… abych
vám vydal Krakatit, že? Oni chystaji válku, a vy, vy,“ zařval tlumeně, „vy
jste jejich nástroj! Vy i s vaši láskou! Vy i s vašim manželstvim, vy špiónko!
A já, já měl být chycen na lep, abyste zabijeli, abyste se mstili –“
Svezla se na kraj židle s očima úděsně vytřeštěnýma; celým tělem ji zalomcoval
strašný suchý vzlyk; chtěl se k ni vrhnout, ale zadržela ho posuňkem ztuhlé
ruky.
„Kdo vůbec jste?“ drtil Prokop. „Jste princezna? Kdo vás zjednal? Považ,
ničemná, žes chtěla povraždit tisice tisiců; žes pomáhala tomu, aby byla
rozmetena města a aby náš svět, náš, a ne váš, svět nás lidi byl rozbit!
Rozbit, roztřištěn, zavražděn! Proč jsi to učinila?“ křičel a svezl se na
kolena plaze se k ni. „Co jsi to chtěla učinit?“
Zvedla se s tváři plnou hrůzy a odporu a couvla před nim. Položil tvář na
misto, kde seděla, a rozplakal se těžkým, hrubým chlapským vzlykánim. Užuž by
klekla vedle něho; ale přemohla se a ustoupila ještě dál, tisknouc k prsoum
ruce zkřivené křeči. „Tedy tohle,“ šeptala, „tohle ty mysliš!“
Prokop se dusil litou bolesti. „Viš ty,“ křičel, „co je to válka? Viš, co je
Krakatit? Nikdy tě nenapadlo, že já jsem člověk? A – a – já vás nenávidim!
Proto tedy jsem vám byl dobrý! A kdybych byl Krakatit vydal, bylo by najednou
po všem; princezna by ujela a já, já –“ Vyskočil tluka se pěstmi do hlavy. „A
já to už chtěl udělat! Milión životů za – za – za – Co, ještě málo? Dva
milióny mrtvých! Deset miliónů mrtvých! to – to – to už je partie i pro
princeznu, že? To už stoji za to se trochu zahodit! Já blázen! Aaá,“ zavyl,
„fuj! Já se vás děsim!“
Byl hrozný a netvorný s pěnou kolem úst, tváři naběhlou a očima jako šilenec,
těkajicima v nystagmu nepřičetnosti. Tiskla se ke zdi zsinalá a vytřeštěná, se
rty zkřivenými děsem. „Jdi,“ zaúpěla, „jdi odtud!“
„Neboj se,“ chraptěl, „já tě nezabiju. Vždycky jsem se tě děsil; a i když – i
když jsi byla má, hrozil jsem se a nevěřil jsem ti – ani po vteřinu. A přece,
přece jsem tě – Já tě nezabiju. Já – já vim dobře, co dělám. Já – já –“ Hledal
něco, popadl láhev s kolinskou vodou, nalil si celou záplavu na ruce a myl si
čelo. „Ahah,“ vydechl, „ahaha. Ne-boj se! Ne – ne –“
Uklidnil se jaksi, klesl na židli a položil hlavu do dlani. „Tedy,“ začal
chraptivě, „tedy – tedy si můžeme pohovořit, že? Vidite, jsem klidný. Ani… ani
prsty se mi netřesou…“ Vztáhl ruku, aby to ukázal; třásla se, až hrozno se
podivat. „Můžeme… nerušeně, že? Jsem už docela klidný. Můžete se ustrojit.
Tedy… váš strýček mi řekl, že… že jsem povinen… že je věc cti, abych vám
umožnil… napravit… napravit poklesek, a tedy že musim… prostě musim… si
vysloužit titul… prodat se, a tim zaplatit… oběť, kterou jste –“
Vzchopila se smrtelně bledá, aby něco řekla. „Počkejte,“ zarazil ji. „Ještě
jsem ne – Vy všichni jste mysleli… a máte své pojmy o cti. Tedy jste se
strašně mýlili. Já nejsem kavalir. Já jsem… syn ševce. Na tom nezáleži, ale…
já jsem pária, rozumite? Nizký a ničemný chlap. Já nemám žádnou čest. Můžete
mne vyhnat jako zloděje, nebo mne odvézt na pevnost. Já to neudělám. Nedám
Krakatit. Můžete si myslet… že jsem třeba tak podlý. Mohl bych vám povidat… co
si myslim o válce. Já byl ve válce… a viděl jsem dusivé plyny… a vim, co lidé
dovedou. Já nedám Krakatit. Nač bych vám to vykládal? Tomu vy nerozumite; jste
prostě tatarská princezna, a přiliš nahoře… Chci vám jenom řici, že to
neudělám, a že poniženě děkuju za čest – Ostatně jsem i zasnouben; neznám ji
sice, ale zasnoubil jsem se ji – To je má dalši ničemnost. Lituji, že jsem…
vůbec nebyl hoden vaši oběti.“
Stála jako zkamenělá, zarývajic nehty do zdi. Bylo kruté ticho, jen škrabáni
jejich nehtů skřipělo v nesnesitelném mlčeni.
Zvedl se těžce a pomalu: „Chcete něco řici?“
„Ne,“ vydechla a jeji ohromné oči úporně tkvěly v prázdnu. Byla chlapecky útlá
v rozevřeném peignoiru; byl by se svezl na zem, aby polibil jeji drkotajici
kolena.
Přibližil se k ni spinaje ruce. „Princezno,“ řekl sevřeně, „teď mne odvezou…
pod titulem špióna nebo jak. Nebudu se už bránit. Děj se co děj; jsem
připraven. Vim, že vás už neuvidim. Neřeknete mně nic na cestu?“
Rty se ji chvěly, ale nepromluvila; ó bože, nač se to divá tam do prázdna?
Přistoupil až k ni. „Miloval jsem vás,“ vypravil ze sebe, „miloval jsem vás
vic, než jsem dovedl řici. Jsem nizký a hrubý člověk; ale teď vám mohu řici,
že… že jsem vás miloval jinak… a vic. Bral jsem vás… sviral jsem vás z
úzkosti, že nejste má, že mi uniknete; chtěl jsem se ujistit… Nikdy jsem tomu
nemohl věřit; a proto jsem –“ Nevěda, co čini, položil ji ruku na rameno;
zachvěla se pod teninkou látkou peignoiru. „Miloval jsem vás… jako zoufalec…“
Obrátila k němu oči. „Milý,“ zašeptala, a bledou lici ji prokmitla matná vlna
krve. Sklonil se rychle a polibil jeji prýskajici rty; nebránila se.
„Jak to, jak to,“ zaskřipěl zuby, „že tě i teď miluju?“ Divými tlapami ji
odtrhl od stěny a sevřel; zazmitala sebou tak zběsile, že kdyby povolil,
skácela by se na zem; i zachytil ji pevněji sám kolisaje jejim zdivočelým
odporem. Svijela se se zuby zaťatými a rukama křečovitě vzepřenýma o jeho
prsa; vlasy ji padly přes tvář, hryzala se do nich, aby potlačila křik,
odstrkovala ho od sebe zlomena v pase a převalujic se jako v padoucnici. Bylo
to nesmyslné a ohavné; měl jediné vědomi, že ji nesmi pustit na zem a že nesmi
porazit židli; a že… že… co by si počal, kdyby se mu vymkla? – že by se pak
hanbou musel propadnout. Strhl ji k sobě a zaryl se rty do jeji rozpoutané
kštice; našel rozpálené čelo; odvracela odporem hlavu a zoufale se snažila
uvolnit svěrák jeho paži.
„Dám, dám Krakatit,“ slyšel trna svůj vlastni hlas. „Dddám, slyšiš? Všecko
dám! Válku, novou válku, nové milióny mrtvých. Mně – mně – mně je vše jedno.
Chceš? Řekni jen slovo – Řikám ti přece, že dám Krakatit! Přisahám, já – já ti
při-sss – Miluju tě, slyšiš? Ať – ať – ať už se děje co chce! A – a – kdyby
měl zajit celý svět – Já tě miluju!“
„Pusť,“ zakvilela lomcujic sebou.
„Nemohu,“ sténal ponořen tváři v jeji vlasy. „Jsem nejbidnějši člověk. Zra-
zradil jsem celý svět, celý lidský svět. Naplij mně do tváře, ale ne-vy-háněj
mne! Proč tě nemohu pustit? Dám Krakatit, slyšiš? přisahal jsem to; ale teď,
teď mne nech zapomenout! Kde – kde – kde máš ústa? Jsem podlec, ale lllibej
mne! Jsem ztra-ztra–“
Zakolisal, jako by měl padnout; nyni se mu mohla vymknout, tápal rukama do
prázdna; tu zvrátila hlavu, přehodila vlasy nazad a nastavila mu rty. Vzal ji
do rukou, ztuhlou a pasivni; libal jeji sevřená ústa, palčivé lice, krk, oči;
vzlykal chraptivě, nebránila se, nechala se přimo nést. Zděsil se jeji nehybné
trpnosti a pustil ji couvaje. Zapotácela se, přejela si dlani čelo, usmála se
uboze – byl to strašlivě žalný pokus o úsměv – a vzala ho kolem krku.


XLV.

Bděli přimknuti k sobě a s očima vytřeštěnýma do polotmy. Citil jeji srdce
horečně biti; nepromluvila slova za ty hodiny, libala ho nenasytně a opět se
odtrhla, kladla šáteček mezi své a jeho rty, jako by se bála na něho dechnout;
i nyni odvraci tvář a zirá horečně do tmy –
Posadil se objimaje si kolena. Ano, ztracen; chycen na vějičku, spoután, upadl
v ruce Filištinů. A nyni se děj, co se diti musi. Vydáš zbraň v ruce těch, kdo
ji užiji. Tisice tisiců zahynou. Tak tedy pohleď, neni-li to před tebou
nesmirné pole trosek? Toto byl kostel a toto dům; toto byl člověk. Strašná je
sila a všechno zlé je z ni. Buď zlořečena sila, duše zlá a nevykoupená. Jako
Krakatit, jako já, jako já sám.
Tvořivá, pilná slabosti lidská, z tebe je všechno dobré a poctivé dilo; tvá
práce je vázat a spojovat, slučovat části a udržovat, co je spojeno. Ať je
prokleta ruka, která rozpoutá silu! Ať je zlořečen, kdo poruši svazky živlů!
Všecko lidské je jenom lodička na oceánu sil; a ty, ty rozpoutáš bouři, jaké
dosud nebylo –
Ano, já rozpoutám bouři, jaké dosud nebylo; vydám Krakatit, živel rozvázaný, a
roztřišti se lodička lidstva. Tisice tisiců zahynou. Budou vyhlazeny národy a
smetena města; nebude mezi tomu, kdo má v ruce zbraň a zkázu v srdci. Ty jsi
to učinil. Strašná je vášeň, Krakatit lidských srdci; a všechno zlé je z ni.
Pohlédl na princeznu – bez nenávisti, rván neklidnou láskou a soucitem. Nač
nyni mysli, ztuhlá a vyjevená? Sklonil se a polibil ji na rameno. Za tohle
tedy vydám Krakatit; vydám jej a odejdu odtud, abych už neviděl hrůzu a hanbu
své porážky. Zaplatim strašlivou cenu za svou lásku, a odejdu –
Bezmocně sebou trhl: Cožpak mě nechaji odejit? Co by jim byl platen Krakatit,
pokud jej mohu vyzradit jiným? Aá, proto mne chtěji navěky svázat! Aá, proto
jim musim vydat duši i tělo! Tady, tady zůstaneš, spoután vášni, a věčně se
budeš hroziti této ženy; budeš sebou zmitat v zlořečené lásce, a vymýšlet
budeš pekelné zbraně… a sloužit jim budeš…
Obrátila se k němu bezdechým pohledem. Seděl bez hnuti a po hrubé, těžkotvaré
lici mu stékaly slzy. Zvedla se na lokty a pohližela na něho utkvělýma,
bolestně zkoumavýma očima; nevěděl o tom, přiviral oči a trnul v tuposti
porážky. Tu vstala tichounce, rozsvitila u toaletniho stolku a počala se
strojit.
Vytrhl se teprve cvaknutim odloženého hřebene. Pohližel na ni s údivem, jak
oběma rukama zvedá a stáči rozhozenou kštici. „Zitra… zitra to odevzdám,“
šeptal. Neodpověděla, měla vlásničky mezi rty a rychle svijela vlasy v tuhou
přilbu. Sledoval každé jeji hnuti; spěchala zimničně, opět se zarážela a
hleděla k zemi, pak zase přikývla hlavou a strojila se tim rychleji. Nyni se
zvedá, pohliži na sebe zblizka, pozorně do zrcadla, přejede tvář pudrem: jako
by tu nikdo nebyl. Odcházi do vedlejšiho pokoje a vraci se oblékajic si přes
hlavu sukni. Opět usedá a přemýšli komihajic trupem; pak přikývne hlavou a
zajde do vedlejši garderoby.
Vstal a šel potichu k jejimu toaletnimu stolku. Bože, co je tu věci divných a
něžných! Flakónky, tyčinky, pouzdra, krémy, hračiček bezpočtu; to tedy je
řemeslo žen; oči, úsměv, vůně, vůně ostrá a lichotná – Pahýly jeho prstů se
třásly na těch křehkých a tajemných věcičkách, podrážděny, jako by se dotýkaly
něčeho zakázaného.
Vstoupila do dveři v koženém kabátci a kožené přilbě na hlavě a oblékala
veliké rukavice. „Připrav se,“ řekla bezbarvě, „pojedeme.“
„Kam?“
„Kam chceš. Připrav si, co potřebuješ, ale pospěš, pospěš!“
„Co to znamená?“
„Neptej se dlouho. Tady už zůstat nemůžeš, viš? Oni tě jen tak nepusti.
Pojedeš?“
„Na… na jak dlouho?“
„Navždycky.“
Srdce mu zabouchalo. „Ne – ne – já nepojedu!“
Přistoupila k němu a polibila ho na tvář. „Musiš,“ řekla tiše. „Já ti to
povim, až budeme venku. Přijď před zámek, ale brzo, dokud je tma. Jdi, jdi
teď!“
Jako ve snách šel do svého pokoje; shrábl své papiry, své drahocenné a
nedokončené zápisy, a rychle se rozhlédl: Je to všecko? Ne, nepojedu, blesklo
mu hlavou, i nechal papiry ležet a běžel ven. Stálo tam veliké, nerozsvicené,
tlumeně hrčici auto; princezna už seděla u volantu. „Rychle, rychle,“ šeptala.
„Jsou vrata otevřena?“
„Jsou,“ bručel rozespalý šofér zaviraje kapot vozu.
Nějaký stin obcházel zpovzdáli automobil a stanul ve tmě.
Prokop přistoupil k otevřeným dviřkám vozu. „Princezno,“ mručel, „já… jsem se
rozhodl, že… vydám vše… a… zůstanu.“
Neposlouchala ho; nakloněna kupředu zirala upřeně na misto, kde onen stin
splynul s tmou. „Rychle,“ vydechla najednou, chopila Prokopa za ruku a vtáhla
ho do vozu vedle sebe; a již se jediným pohybem páky auto rozjelo. V tu chvili
se rozsvitilo v zámku nějaké okno, a onen stin se vyřitil ze tmy. „Stát,“
křikl a vrhl se před vůz; byl to Holz.
„Z cesty,“ vykřikla princezna, zavřela oči a zapnula na plnou rychlost. Prokop
zvedl ruce zděšenim; tu již zařičel nelidský řev, kolo se přehouplo přes něco
měkkého, Prokop chtěl vyskočit, ale vtom sebou auto smýklo stranou v ohybu
vrat, až se dviřka sama zabouchla, a šileně letělo do tmy. S hrůzou se otočil
k princezně; stěži ji rozeznal v kožené přilbě, skloněnou tváři až nad volant.
„Co jste to udělala?“ vyrazil.
„Buď tiše,“ sykla ostře a stále se tak nakláněla vpřed. Rozeznal v dálce tři
postavy na bledé silnici; zpomalila a zastavila těsně u nich. Byla to vojenská
hlidka. „Proč nemáte rozsviceno?“ huboval jeden voják. „Kdo je?“
„Princezna.“
Vojáci zvedli ruce k čepicim a ustoupili. „Heslo?“
„Krakatit.“
„Račte rozsvitit. Koho račte mit s sebou? Prosim, povoleni.“
„Hned,“ řekla princezna klidně a zasunula na prvou. Auto vyrazilo přimo
skokem; vojáci stěži uskočili. „Nestřilet,“ křikl jeden, a vůz letěl do tmy.
Na zatáčce rychle zahnula a jela skoro zpátečnim směrem. Zastavila hladce před
šraňky zavirajicimi silnici. Dva vojáci se bližili k vozu.
„Kdo má službu?“ ptala se suše.
„Poručik Rohlauf,“ hlásil voják.
„Zavolat!“
Poručik Rohlauf vyběhl ze strážnice zapinaje se.
„Dobrý večer, Rohlaufe,“ řekla přivětivě. „Jak se máte? Prosim, nechte mi
otevřit.“
Stál tu uctivě, ale nedůvěřivě měřil Prokopa: „Velmi rád, ale… má pán
povoleni?“
Princezna se zasmála. „To je jen sázka, Rohlaufe. Za pětatřicet minut na
Brogel a zpátky. Nevěřite? Přece mi nezkazite sázku.“ Podala mu z vozu ruku,
strhnuvši rychle rukavici. „Na shledanou, ano? Ukažte se zas někdy.“ Srazil
paty a polibil ji ruku hluboce se klaně; vojáci otvirali šraňky a vůz se
rozjel. „Na shledanou!“ volala nazpět.
Řitili se nekonečnou aleji silnice. Tu a tam mihlo se lidské světélko, ve vsi
zaplakalo ditě, pes za plotem běsnil za temným leticim vozem. „Co jste
učinila,“ křičel Prokop. „Vite, že Holz má pět děti a sestru mrzáčka? Jeho
život… je desetkrát vic než můj i váš! Co jsi učinila?“
Neodpovidala; se svraštělým čelem a zuby zaťatými dávala pozor na cestu,
pozvedajic se chvilemi, aby lépe viděla. “Kam chceš?“ zeptala se najednou na
rozcesti vysoko nad spicim krajem.
„Do pekla,“ zaskřipěl.
Zastavila vůz a obrátila se k němu vážně: „Neřikej to! Copak mysliš, že jsem
neměla už stokrát chuť nás oba rozbit na nějaké zdi? Nemysli si, šli bychom
oba do pekla. Já teď vim dobře, že je peklo. Kam chceš jet?“
„Chci… být s tebou.“
Zavrtěla hlavou. „To nejde. Neviš už, co jsi řikal? Jsi zasnouben a… chceš
zachránit svět před něčim hrozným. Tak to udělej. Ty musiš mit čisto sám v
sobě; jinak… jinak jsi zlý. A já už nemohu…“ Hladila rukou volant. „Kam chceš
jet? Kde vůbec jsi doma?“
Sevřel ji vši silou v zápěsti. „Za-zabilas Holze! Copak neviš –“
„Vim,“ řekla tiše. „Mysliš, že jsem to necitila? To ve mně tak zachrustěly
kosti; a pořád ho vidim před sebou, a já pořád, pořád vozem do něho, a zas mně
běži do cesty –“ Zachvěla se. „Tak kudy? Vpravo nebo vlevo?“
„Tedy je konec?“ ptal se tiše.
Pokývla hlavou. „Tedy je konec.“
Otevřel dviřka, vyskočil z vozu a postavil se před kola. „Jeď,“ řekl
chraptivě. „Pojedeš přese mne.“
Ujela s vozem dva kroky zpět. „Pojď, musime dál. Dovezu tě aspoň bliž k
hranicim. Kam chceš?“
„Zpátky,“ skřipěl zuby, „zpátky s tebou.“
„Se mnou neni… ani dopředu, ani zpátky. Copak mi nerozumiš? Musim to udělat,
abys viděl, aby bylo jisto, že jsem tě měla ráda. Mysliš, že bych mohla ještě
jednou slyšet, cos mi řekl? Zpátky nemůžeš; buď bys musel vydat to… co nechceš
a nesmiš, nebo by tě odvezli, a já –“ Spustila ruce do klina. „Vidiš, i na to
jsem myslela, že bych šla s tebou… dopředu. Dovedla bych to, dovedla bych to
jistě; ale – Ty jsi tam někde zasnouben; jdi k ni. Hleď, nikdy mě nenapadlo
ptát se tě na to. Když je člověk princezna, mysli si, že je na světě sám. Máš
ji rád?“
Pohlédl na ni utrýzněnýma očima; přece jen nedovedl zapřit –
„Tak vidiš,“ vydechla. „Ty neumiš ani lhát, ty milý! Ale pochop, když jsem si
to pak srovnala v hlavě – Co jsem ti byla? Co jsem to dělala? Myslel jsi na
ni, když jsi mne miloval? Jak ses mne musel hrozit! Ne, neřikej nic; neber mi
silu řici ti to posledni.“
Zalomila rukama. „Já tě milovala! Já jsem tě milovala, člověče, že – že jsem
mohla cokoliv – a ještě vic – Ale ty, tys o tom pochyboval tak děsně, žes
nakonec zlomil i mou viru. Miluju tě? Já nevim. Mohla bych si rýt nožem v
prsou, když tě tu vidim, a zemřit bych chtěla a já nevim co, ale miluju tě? Já
– já už nevim. A když jsi mne… naposledy… vzal do rukou, citila jsem… něco
nedobrého v sobě… i v tobě. Setři mé polibky; byly… byly… nečisté,“ vydechla
bezhlase. „Musime se rozejit.“
Nedivala se na něho, neslyšela, co odpovidá; a hle, nyni se ji chvěji vička,
pod nimi se dělá slza, vyhrkne, kane rychle, zastavi se, a pak ji dohoni
druhá. Plakala beze zvuku, s rukama na volantu; a když se chtěl přibližit,
popojela kousek zpět.
„Už nejsi Prokopokopak,“ šeptala, „jsi nešťastný, nešťastný člověk. Viď, trháš
sebou na řetěze… jako já. Bylo to… nedobré pouto, co nás svázalo; a přece,
když to člověk přetrhává, je mu… je mu, jako by celé nitro šlo s sebou, i
srdce, i duše… Bude v člověku čisto, když zůstane tak prázdný a pustý?“ Slzy
ji vyhrkly prudčeji. „Milovala jsem tě, a teď už tě neuvidim. Jdi, jdi mi z
cesty, já otočim.“
Nehnul se, jako zkamenělý. Pojela těsně k němu. „Sbohem, Prokope,“ řekla tiše,
a počala pozpátku sjiždět po silnici. Rozběhl se za ni; tu sjižděla couvajic
vozem rychleji, rychleji, stále rychleji; bylo to, jako by se propadala.


XLVI.

Stanul a naslouchal trna hrůzou, zda nezaslechne praskot vozu roztřištěného
někde v zákrutu silnice. Neni to výbušné hučeni motoru z dálky? Neni to děsné
a smrtelné ticho konce? Bez sebe uháněl Prokop po silnici za ni. Seběhl
serpentinou dolů, k patě svahu; ani památky po voze. Utikal opět nahoru,
pátral po úbočich, slézal drásaje si ruce, kde rozeznával něco temného nebo
světlého; bylo to hloži nebo kameni, a tu opět klopýtal a drápal se na silnici
a zarýval se očima do tmy, zda… zda neni někde hromada trosek, a pod ni…
Byl opět nahoře u rozcesti; právě tady se začala propadat do tmy. Usedl na
milnik. Ticho, nesmirné ticho. Studené hvězdy popůlnočni, leti teď někde temný
meteor vozu? Což se nic neozve, nezavolá pták, neštěkne ve vsi pes, nedá nic
znameni života? Vše ustrnulo slavnostnim mlčenim smrti. A toto je tedy konec,
tichý a mrazivý a temný konec všeho; prázdnota vykroužená tmou a tichem;
prázdnota stojatá a ledová. Do kterého kouta se mám skrýt, abych jej vyplnil
svou bolesti? Kéž byste se zamžily, kéž by byl konec světa! Rozštipne se země,
a v rachotu sily promluvi Pán: Beru tě zpět, tvore bolestný a slabý; nebylo
čisto v tobě, a nedobré sily jsi rozpoutal. Milý, milý, ustelu ti lůžko z
nicoty.
Prokop se počal třásti pod trnovou korunou vesmiru. A tedy ničim neni utrpeni
člověka a nemá ceny; je maličké a schoulené, třesouci se bublinka na dně
prázdnoty. Dobře, dobře, praviš, že svět je nesmirný; ale já kéž zemru!
Na východě pobledla nebesa, chladně prosvitá silnice a bilé kameny; hleď,
stopy kol, stopy v mrtvém prachu. Prokop se zvedá ztuhlý a omámený, a dává se
na pochod. Tam dolů, směrem k Balttinu.
Putoval bez zastávky. Tady je vesnice, alej jeřabin, můstek přes tichou a
temnou řeku; zvedá se mlha a zastře slunce; a opět je šedý a chladný den,
červené střechy, červená stáda krav. Jak může být daleko do Balttinu? Šedesát
sedmdesát kilometrů. Suché listi, samé suché listi.
Po poledni usedl na hromádku štěrku; nemohl již dále. Jede tudy selský vozik;
sedlák zastavil a koukal na zhrouceného člověka. „Nechcete se svézt?“ Prokop
vděčně přikývl a beze slova usedl k němu. A pak vozik zastavil v městečku.
„Tak, tady jsme,“ řekl sedlák. „Kam vlastně jdete?“ Prokop slezl a putoval
dál. Jak může být do Balttinu daleko?
Začiná pršet; ale Prokop již nemůže dál a usedá na paženi mostu; dole se
vzteká a pěni studený potok. Z protějši strany leti auto, zpomali na mostě a
zastavi; z něho vyskoči pán v kozim kožiše a miři k Prokopovi. „Kde se tu
berete?“ Je to pan ďHémon, na tatarských očich má automobilové brýle, vypadá
jako obrovský huňatý brouk. „Jedu z Balttinu, hledaji vás.“
„Jak je daleko do Balttinu?“ šeptá Prokop.
„Čtyřicet kilometrů. Co tam chcete? Vydali na vás zatykač. Pojďte, odvezu
vás.“
Prokop zavrtěl hlavou.
„Princezna odjela,“ povidá pan ďHémon tiše. „Dnes ráno, s oncle Rohnem.
Předevšim, aby se zapomněla… jistá… nepřijemná věc s přejetým člověkem –“
„Je mrtev?“ vydechl Prokop.
„Dosud ne. A za druhé je princezna, jak snad vite, vážně tuberkulózni.
Odvážeji ji někam do Itálie.“
„Kam?“
„To nevim. Nikdo to nevi.“
Prokop vstal a zavrávoral. „Tak tedy – tak tedy –“
„Pojedete se mnou?“
„Ne-nevim. Kam?“
„Kam chcete.“
„Já – já bych chtěl – do Itálie.“
„Pojďte.“ Pan ďHémon pomohl Prokopovi do vozu, hodil na něho kožišinu a
zabouchl dviřka. Vůz se rozjel.
A zas se rozviji krajina, ale divně, jakoby ve snu a pozpátku: městečko,
topolová alej, štěrk, můstek, korálové jeřabiny, vesnice. Vůz supaje stoupá
serpentinami do svahu, a zde je rozcesti, kde se rozloučili. Prokop se zvedá a
chce vyskočit z vozu; ale pan ďHémon jej strhl zpět, přišlápl pedál a zasunul
na čtvrtou. Prokop zavřel oči; nyni již nejedou po cestě, ale vznesli se do
vzduchu a leti; vitr ho pere do tváři, citi mokré, hadrovité údery mračen,
výbuchy motoru splývaji v táhlý a hluboký řev, dole se asi prohýbá země, ale
Prokop se boji otevřit oči, aby zas neviděl letici aleje. Rychleji! zalknout
se! ještě rychleji! Obruč hrůzy a závrati mu stahuje prsa, nedýchá už a jektá
rozkoši šileného řiceni prostorem. Vůz klouže nahoru a dolů, někde pod nohama
se ozve křik lidi a zavyti psa, někdy se toči ležice skoro na boku, jako by
jimi zakroužila smršť; a zas, zase rovný let, čirá rychlost, strašné a lomozné
teteleni drnčici tětivy dálek.
Otevřel oči. Je mlhavý soumrak, řady světel se protlačuji šerem, tryskaji
továrni světla. Pan ďHémon proviji vůz klubkem ulic, klouže předměstim
podobným zřicenině a opět vyrazi do poli. Vůz smýká před sebou dlouhá tykadla
světla, ohmatává trus, bláto, kameny, svisti v ohybech, vybuchuje bubnovou
palbou a vrhá se na dlouhý pás silnice, jako by jej navijel. Vpravo a vlevo se
klikati úzké údoli mezi horami, vůz se do něho zavrtává, zapadá v lesich,
šroubuje se s rachotem nahoru a střemhlav se spoušti do nového údoli. Vesnice
vydechuje kotouče světla do husté mlhy, vůz proleti řiče a vrhaje za sebe
chuchvalce jisker, nakláni se, klouže, krouži ve spirále nahoru, nahoru,
nahoru, přeskakuje něco a padá. Stop! zastavili v černé tmě; ne, je tu domek,
pan ďHémon bruče vystupuje, tluče na dvéře a hovoři s lidmi; po chvili se
vraci s konvi vody a nalévá ji do syčiciho chladiče; v prudkém světle
reflektorů vypadá ve svém kožiše jako čert z dětské pohádky. Nyni obcházi vůz,
ohmatává pneumatiky, zvedá kapot a něco povidá; a Prokop zdřimnul nesmirnou
únavou. Pak opět ho chopilo nekonečné rytmické otřásáni; spal v koutě vozu a
nevěděl o ničem, po celé hodiny o ničem než o zmitavém kolébáni; a procitl
teprve, když vůz zastavil před zářicim hotelem v ostrém horském vzduchu mezi
plochami sněhu.
Vzchopil se, zcela zdřevěnělý a rozlámaný. „To… to neni Itálie,“ koktal
udiven.
„Ještě ne,“ řekl pan d,Hémon. „Ale teď se pojďte najist.“ Vedl Prokopa
oslepeného tolika světly do oddělené jidelničky; bělostný ubrus, střibro,
teplo, sklepnik podobný velvyslanci. Pan ďHémon ani neusedl; přecházel po
jidelně a dival se na špičky prstů. Prokop tupě a rozespale se svezl na židli;
bylo mu k smrti jedno jist nebo nejist. Nicméně vypil horký bujón, porýpal se
v nějakých jidlech stěži vládna vidličkou, točil mezi prsty sklenkou vina a
spálil si útroby horouci hořkosti kávy. Pan ďHémon vůbec neusedl; stále
přecházel po pokoji a v chůzi požil několik soust; a když byl Prokop hotov,
podal mu doutnik a zapálil. „Tak,“ řekl, „a nyni k věci.“
„Od této chvile,“ začal přecházeje, „budu pro vás prostě… kamarád Daimon.
Uvedu vás mezi naše lidi, neni to daleko odtud. Nesmite je brát přiliš vážně;
jsou to zčásti desperados, štvanci a běženci smeteni ze všech koutů světa,
zčásti fantasti, tlučhubové, diletanti spasitelstvi a doktrináři. Na jejich
program se nemusite ptát; jsou jenom materiál, který nasadime do naši hry.
Hlavni je, že vám můžeme dát k dispozici rozvětvenou a doposud tajnou
mezinárodni organizaci, která má všude své buňky. Jediný program je přimá
akce; na tu dostaneme všechny bez výjimky, beztoho po ni křiči jako po nové
hračce. Ostatně ,nová akčni linie‘ a ,destrukce v hlavách‘ bude mit pro ně
neodolatelné kouzlo; po prvnich úspěšich půjdou za vámi jako ovce, zejména
odstranite-li z vedeni ty, které vám označim.“
Mluvil hladce jako zkušený řečnik, totiž mysle přitom na něco jiného, a se
samozřejmou jistotou, jež vylučuje odpor a pochybnosti; Prokopovi se zdálo, že
už ho někdy slyšel.
„Vaše situace je jedinečná,“ pokračoval pořád chodě po pokoji. „Odmitl jste
nabidku jisté vlády; jednal jste jako rozumný člověk. Co vám mohou dát proti
tomu, co si můžete vzit sám? Byl byste blázen, abyste svou věc pustil z rukou.
Máte v hrsti prostředek, kterým můžete rozmetat všechny mocnosti světa. Já vám
poskytnu neomezený úvěr. Chcete padesát nebo sto miliónů liber? Můžete je mit
do týdne. Mně stači, že jste dosud jediným majitelem Krakatitu. Devět a půl
deka je zatim v drženi našich lidi, donesl jim to saský kamarád z Balttinu;
ale ti pitomci nemaji ani poněti o vaši chemii. Chovaji to jako svátost v
porcelánové piksle a třikráte týdně se div neseperou o to, kterou vládni
budovu světa tim maji vyhodit do povětři. Ostatně je uslyšite. Z té strany vám
tedy nehrozi nic. V Balttinu neni ani špetky Krakatitu. Pan Tomeš je patrně v
koncich se svými pokusy –“
„Kde je Jirka – Jirka Tomeš?“ vypravil ze sebe Prokop.
„Prachárny Grottup. Už ho tam maji dost s jeho věčnými sliby. A kdyby se mu to
náhodou přece jen podařilo sestrojit, nebude mit z toho dlouho radost. Za to
vám stojim já. Zkrátka vy jediný máte Krakatit v moci a nevydáte jej nikomu.
Budete mit k dispozici lidský materiál a všechny naše organizačni nitky. Já
vám dám tisk, který si platim. A konečně k vašim službám bude to, čemu se v
novinách řiká ,tajemná rádiová stanice‘, totiž naše ilegálni bezdrátové
spojeni, které takřečenými antivlnami nebo extinkčnimi jiskrami přivádi váš
Krakatit k rozpadu do dálky dvou až tři tisic kilometrů. To jsou vaše trumfy.
Dáte se do hry?“
„Co – co – co tim myslite?“ ozval se Prokop. „Co s tim mám dělat?“
Kamarád Daimon stanul a hleděl upřeně na Prokopa. „Budete dělat, co chcete.
Budete dělat veliké věci. Kdo vám ještě může poroučet?“


XLVII.

Daimon přitáhl židli k Prokopovi a usedl.
„Ano,“ začal zamyšleně, „je to až nemožno chápat. Prostě v dějinách neni
analogie moci, kterou vy máte v rukou. Budete dobývat světa s hrstkou lidi,
jako Cortez dobýval Mexika. Ne, ani to neni pravý obraz. S Krakatitem a
stanici držite v šachu celý svět. Je to podivné, ale je to tak. Stači hrst
bilého prášku, a v určenou vteřinu vyleti do povětři, co poručite. Kdo tomu
může zabránit? Fakticky jste neobmezeným pánem světa. Budete udilet rozkazy,
aniž vás kdo viděl. Je to směšné: můžete odtud ostřelovat pro mne a za mne
Portugalsko nebo Švédsko; za tři za čtyři dny budou prosit o mir, a vy budete
diktovat kontribuce, zákony, hranice, co vás napadne. V tuto chvili je jediná
velmoc; tou jste vy sám.
Myslite, že přehánim? Mám tu velmi obratné chlapiky schopné všeho. Vyhlaste
pro švandu válku Francii. Někdy o půlnoci vyleti ministerstva, Banque de
France, pošta, elektrárna, nádraži a několik kasáren. Přišti noci letiště,
arzenály, železnični mosty, munični továrny, přistavy, majáky a silnice. Mám
zatim jen sedm letadel; můžete trousit Krakatit, kde vám libo; pak se zapne
stanice, a je to. Tak co, zkusite to?“
Prokopovi bylo jako ve snu. „Ne! Proč bych to dělal?“
Daimon pokrčil rameny: „Protože můžete. Sila… se musi vybit. Má to za vás
udělat nějaký stát, když to můžete vykonat sám? Já nevim, co všechno můžete
provést; musi se začit, aby se to zkusilo; ručim vám za to, že tomu přijdete
na chuť. Chcete být samovládcem světa? Dobrá. Chcete svět vyhladit? Budiž.
Chcete jej obšťastnit tim, že mu vnutite věčný mir, Boha, nový řád, revoluci
či co? Proč ne? Jen začněte, na programu nezáleži; nakonec budete dělat jen
to, co vám vnuti skutečnosti vámi vytvořené. Můžete rozbit banky, krále,
industrialism, vojska, věčné bezprávi nebo co je vám libo; však se pak ukáže,
co s tim bude dál. Začněte s čimkoliv; pak už to poběži samo. Jen nehledejte
analogie v dějinách, neptejte se, co smite; vaše postaveni je bezpřikladné;
žádný Čingischán nebo Napoleon vám nepovědi, co máte dělat a kde jsou vaše
meze. Nikdo vám nemůže poradit; nikdo se nemůže vžit do bezuzdnosti vaši moci.
Musite být sám, chcete-li dojit až na kraj. Nikoho k sobě nepouštějte, kdo by
vám chtěl klást hranice nebo směr.“
„Ani vás, Daimone?“ ozval se Prokop ostře.
„Ani mne ne. Já stojim na straně sily. Jsem starý, zkušený a bohatý;
nepotřebuju nic, než aby se něco dělo a řitilo směrem, který určuje člověk. Mé
staré srdce se bude těšit tim, co budete provádět. Vymyslete si to
nejkrásnějši, nejsmělejši a nejrajštějši a uložte to světu právem své moci: ta
podivaná mne odměni za to, že vám sloužim.“
„Podejte mi ruku, Daimone,“ děl Prokop pln podezřeni.
„Ne, spálil bych vás,“ usmál se Daimon. „Mám starou, prastarou horečku. Co
jsem chtěl řici? Ano, jediná možnost sily je násili. Sila je schopnost vnutit
věcem pohyb; neujdete nakonec tomu, aby se všechno netočilo kolem vás.
Zvykejte si na to předem; oceňujte lidi jen jako své nástroje nebo jako
nástroje myšlenky, kterou si vezmete do hlavy. Vy chcete nemožné dobro;
následkem toho budete asi velmi krutý. Nezastavujte se před ničim, chcete-li
prosadit veliké ideály. Ostatně i to přijde samo sebou. Zdá se vám nyni, že je
nad vaše sily, abyste – já nevim v jaké formě – vladařil na zemi. Budiž, ale
neni to nad silu vašich nástrojů; vaše moc dosahuje dále než každá střizlivá
rozvaha.
Zařidite si své věci tak, abyste byl nezávislý na komkoliv. Ještě dnes vás dám
zvolit za předsedu zpravodajské komise; tim budete mit prakticky v rukou
extinkčni stanici; ostatně je zařizena v objektu, jenž je mým soukromým
majetkem. Za chvili uvidite naše směšné kamarády; nepoplašte je žádnými
velkými plány. Jsou na vás připraveni a přijmou vás s nadšenim. Promluvite k
nim několik frázi o blahu lidstva nebo co chcete; beztoho to zanikne v chaosu
názorů, kterému se řiká politické přesvědčeni.
Rozhodnete se sám, povedete-li prvni rány směrem politickým nebo hospodářským:
tedy budete-li nejdřiv bombardovat vojanské objekty nebo továrny a trati.
Prvni je efektnějši, druhé zasahuje hlouběji. Můžete zahájit generálni,
kruhový útok nebo si vyberete radiálni sektor; zvolite anonymni rozvrat nebo
veřejné a napohled šilené vyhlášeni boje. Neznám vašeho vkusu; ostatně na
formě nezáleži, jen když projevite svou moc. Jste nejvyššim soudcem světa;
odsuďte kohokoliv, naši lidé provedou váš rozsudek. Nepočitejte životů;
pracujete ve velkém, a celý svět má miliardy životů.
Hleďte, jsem průmyslnik, novinář, bankéř, politik, vše, co chcete; zkrátka
jsem zvyklý počitat, ohližet se na okolnosti a kramařit s omezenými šancemi.
Právě proto vám musim řici, a je to jediná rada, kterou vám dávám, než se
chopite vlády: nepočitejte a neohližejte se. Jakmile se jednou ohlédnete,
změnite se v plačici sloup jako žena Lotova. Já jsem rozum a čislo; hledim-li
vzhůru, chtěl bych se rozplynout v šilenstvi a v nespočetnosti. Vše, co je,
nevyhnutelně klesá z chaosu neomezenosti přes čislo k nicotě; každá velká sila
se stavi proti tomuto sestupnému pádu; každá velikost chce se stát
nesmirnosti. Zahozena je sila, která se nepřelije přes staré hranice. Vám je
dána do rukou moc vykonat nesmirné věci; jste ji hoden či chcete s ni žabařit?
Já, starý praktik, vám pravim: myslete na šilené a bezměrné skutky, na rozměry
bezpřikladné, na nesmyslné rekordy lidské moci; skutečnost vám uškubne padesát
i osmdesát procent z každého velikého plánu; ale to, co zůstane, musi ještě
být nesmirné. Pokoušejte se o nemožné, abyste uskutečnil aspoň nějakou
neznámou možnost. Vy vite, jak velká věc je experiment; dobrá, všichni vladaři
světa se nejvic děsi toho, že by to měli zkusit jinak, neslýchaně a obráceně;
nic neni konzervativnějši než lidské vládnuti. Vy jste prvni člověk na světě,
který může pokládat celý svět za svou laboratoř. Toto jest svrchované pokušeni
na temeni hory: nedám ti vše, co je pod tebou, k požitku a rozkoši moci; ale
je ti to dáno, abys toho dobýval, abys to předělal a zkusil něco lepšiho, než
je tento bidný a ukrutný svět. Světu je znovu a znovu třeba tvůrce; ale
tvůrce, který neni svrchovaným pánem a vládcem, je jenom blázen. Vaše myšlenky
budou rozkazy; vaše sny budou dějinné převraty; a kdybyste nepostavil nic vic
než svůj pomnik, stoji to za to. Přijměte, co je vaše.
A nyni půjdeme; čekaji na nás.“


XLVIII.

Daimon spustil motor a skočil do vozu. „Hned tam budeme.“ Auto se sváželo s
Hory Pokušeni do širokého údoli, letělo němou noci, přesmyklo se přes pokojné
sedlo a stanulo před rozlehlým dřevěným domem mezi olšemi; vypadalo to jako
starý mlýn. Daimon vyskočil z vozu a vedl Prokopa k dřevěným schodům; ale tam
se jim postavil do cesty člověk s vyhrnutým limcem. „Heslo?“ ptal se. „I kuš,“
zahučel Daimon a strhl si automobilové brýle; člověk ustoupil a Daimon se hnal
nahoru. Vešli do veliké nizké jizby, jež byla jako školni světnice: dvě řady
lavic, pódium a katedra a tabule; jenomže tam bylo plno dýmu a výparů a křiku.
Lavice byly přeplněny lidmi s klobouky na hlavách; všichni se hádali, na pódiu
křičel rudovousý kolohnát, za katedrou stál suchý, pedantický stařik a zuřivě
zvonil.
Daimon šel rovnou k pódiu a skočil nahoru. „Kamarádi,“ křičel, a jeho hlas
zněl nelidsky jako hlas racka. „Přivedl jsem vám někoho. Kamarád Krakatit.“
Udělalo se ticho, Prokop se citil uchopen a nešetrně omakáván padesáti páry
oči; jako ve snu vystoupil na pódium a rozhlédl se nevidomě po zamžené jizbě.
„Krakatit, Krakatit,“ hučelo to dole, a hukot stoupal ve křik: „Krakatit!
Krakatit! Krakatit!“ Před Prokopem stoji krásné rozcuchané děvče a podává mu
ruku: „Nazdar, kamaráde!“ Krátký horký stisk, vše slibujici žeh oči, a už je
tu dvacet jiných rukou: hrubých, pevných i vysušených žárem, vlhce studených i
zduchovnělých; a Prokop se citi zapnut v celý řetěz rukou, které si jej
podávaji a přisvojuji. „Krakatit, Krakatit!“
Pedantický stařik zvonil jako šilenec. Když to nic nepomohlo, vrhl se k
Prokopovi a potřásl mu rukou; měl ručičku vyschlou a kožnatou, jako z
pergamenu, a za ševcovskými brejličkami mu zářila ohromná radost. Dav zařval
nadšenim a utišil se. „Kamarádi,“ promluvil stařik, „přivitali jste kamaráda
Krakatita… se spontánni radosti… se spontánni a živou radosti, která… které
dávám výraz také z předsednického mista. Vitám tě v našem středu, kamaráde
Krakatite. Vitáme také předsedu Daimona… a děkujeme mu. Žádám kamaráda
Krakatita, aby usedl… jako host… na předsednickém pódiu. Delegáti ať se
vyslovi, mám-li dále řiditi schůzi já… nebo předseda Daimon.“
„Daimon!“
„Mazaud!“
„Daimon!“
„Mazaud! Mazaud!“
„K čertu s vašimi formalitami, Mazaude,“ zahučel Daimon. „Předsedejte a dost.“
„Schůze pokračuje,“ křičel stařik. „Slovo má delegát Peters.“
Rudovousý člověk se ujal opět slova; jak se zdálo, útočil na anglickou Labour
Party, ale nikdo ho neposlouchal. Všechny oči se až hmotně opiraji o Prokopa;
tamhle v koutě veliké, blouznivé oči souchotináře; vyvalený, modrý pohled
nějakého velkého vousatého chlapečka; kulaté a lesklé brýle examinujiciho
profesora; ježči zarostlá očička mrkajici z ohromného chundele šedivých
chlupů; oči pátravé, nepřátelské, zapadlé, dětinské, svaté i podlé. Prokop
těkal pohledem po natřiskaných lavicich a ucukl, jako by se spálil: potkal se
s pohledem rozcuchané divky; prohnula se, jako by klesala do peřin, gestem
vlnivým a jednoznačným. Utkvěl na divné holé hlavě, pod niž visel úzký
kabátek; čertvi je-li tomu tvoru dvacet let nebo padesát; ale než to rozřešil,
svraskla se celá hlava širokým, nadšeným a poctěným úsměvem. Jeden pohled ho
dráždil neodbytně; hledal jej mezi všemi, ale nenacházel ho.
Delegát Peters skončil koktaje a zmizel v lavici celý rudý. Všechny oči
dolehly na Prokopa napjatým a nutkavým očekávánim; stařik Mazaud něco formálně
odbreptal a naklonil se k Daimonovi. Bylo bezdeché ticho; a Prokop se zvedl
nevěda, co čini. „Slovo má kamarád Krakatit,“ ohlásil Mazaud mna si suché
ručičky.
Prokop se rozhlédl omámenýma očima: Cože mám dělat? Mluvit? Proč? Kdo jsou ti
lidé? – Zachytil lani oči souchotináře, přisný a zkoumavý lesk brýli, mrkajici
očka, oči zvědavé a cizi, lesklý a jihnouci pohled krásné divky; otevřela
hřišná, horká ústa samou pozornosti; v prvni lavici holý a svraštělý človiček
visi na jeho rtech uchvácenýma očima. Usmál se na něj potěšen.
„Lidé,“ začal tiše a jako ve snách, „v noci včerejši… jsem zaplatil nesmirnou
cenu. Prožil jsem… a ztratil…“ Vši moci se sebral. „Někdy zažiješ… bolest
takovou, že… že už neni jen tvá. I otevřeš oči a vidiš. Zatměl se vesmir a
země taji dech útrapou. Svět musi být vykoupen. Neunesl bys své bolesti,
kdybys trpěl jen ty sám. Vy všichni jste prošli peklem, vy všichni –“
Rozhlédl se po světnici; vše mu splývalo v jakousi mdle zářici podmořskou
vegetaci. „Kde máte Krakatit?“ zeptal se najednou podrážděně. „Kam jste jej
dali?‘
Stařik Mazaud zvedl opatrně porcelánovou svátost a vložil mu ji do rukou. Byla
to táž krabice, kterou kdysi nechal ve svém laboratornim baráku u Hybšmonky.
Otevřel viko a hrábl prsty do zrnitého prášku, mnul jej, rozmilal, čichal k
němu, vložil si špetku na jazyk; poznal jeho svěravou, silnou hořkost a
okoušel ji s rozkoši. „To je dobře,“ vydechl a tiskl tu drahocennou věc v obou
dlanich, jako by si o ni ohřival zkřehlé ruce.
„Ty jsi to,“ bručel polohlasně; „já tě znám; ty jsi výbušný živel. Přijde tvůj
okamžik, a vydáš vše; tak je to dobře.“ Vzhlédl nejistě z podoboči: „Co byste
chtěli vědět? Já rozumim jenom dvěma věcem: hvězdám a chemii. Krásné jsou…
nesmirné rozlohy času, věčný pořádek a stálost, a božské počtářstvi vesmiru;
řikám vám, že… nic neni krásnějšiho. Ale co mně jsou platny zákony věčnosti?
Přijde tvůj okamžik, a vybuchneš; vydáš lásku, bolest, myšlenku, já nevim co;
tvé největši a nejsilnějši je jenom okamžik. Ty, ty nejsi vřazen do
nekonečného řádu ani započitán do miliónů světelných let; a tedy… tedy ať to
tvé nic stoji za to! Vybuchni plamenem nejvyššim. Citiš se sevřen? Tak tedy
roztrhni svůj crusher a rozmetej skálu. Udělej misto pro svůj jediný okamžik.
Tak je to dobře.“
Nechápal sám jasně, co mluvi; ale unášelo ho temné puzeni vyslovit něco, co mu
hned zase unikalo. „Já… dělám jen chemii. Znám hmotu a… rozumim si s ni; to je
všecko. Hmota se drobi vzduchem a vodou; štěpi se, kvasi, hnije, hoři, přijimá
kyslik nebo se rozpadá; ale nikdy, slyšite, nikdy při tom nevydá vše, co v ni
je. A kdyby prošla celým koloběhem; kdyby se některý prášek země vtělil v
rostlinu a v živé maso a stal se myslici buničkou mozku Newtonova, a umřel s
nim a znovu se rozpadl, nevydal by všecko. Ale přinuťte jej… násilim, aby se
roztřištil a rozpoutal; hle, vybuchl v tisicině vteřiny; nyni, nyni teprve
vynaložil všechnu svou schopnost. A snad ani nespal; byl jenom spoután a dusil
se, zápasil potmě a čekal, až přijde jeho okamžik. Vydat vše! Je to jeho
právo. Já, já také musim vydat vše. Mám jenom zvětrávat a čekat… kvasit
nečistě… a drobit se, aniž bych kdy… rázem… vydal celého člověka? Raději… to
už raději v jediné vrcholné chvili… a přese vše… Neboť já věřim, že je dobře
vydat všecko. Ať je to dobré nebo špatné. Všecko je ve mně srostlé: dobré a
zlé a nejvyšši. Kdo žije, dělá zlé i dobré, jako by se drobil. Dělal jsem to i
to; ale nyni… musim vydat to nejvyšši. To je vykoupeni člověka. Neni to v
ničem, co jsem udělal; je to zarostlé ve mně… jako v kameni. I musim se
roztrhnout… moci… jako se roztrhne náboj; a nebudu se ptát, co přitom
roztřištim; ale bylo třeba… bylo mně třeba vydat to nejvyšši.“
Zápasil se slovy, namáhal se obsáhnout něco nevýslovného; ztrácel to každým
slovem, vraštil čelo a hledal v tváři naslouchajicich, zda snad nepochytili
smysl toho, co nebyl s to jinak vyslovit. Našel zářivou sympatii v čistých
očich souchotináře a soustředěné úsili ve vyjevených modrých očkách vousatého
obra tam vzadu; svrasklý človiček pil jeho slova s bezmeznou oddanosti
věřiciho a krásná divka je přijimala, polo ležic, milostnými záchvěvy těla.
Zato ostatni tváře na něho civěly cize, zvědavě nebo s rostouci lhostejnosti.
Proč vlastně mluvim?
„Prožil jsem,“ pokračoval tápavě a poněkud již rozdrážděn, „prožil jsem tolik…
co člověk může prožit. Proč vám to řikám? Protože nemám dost na tom; protože…
doposud nejsem vykoupen; nebylo v tom to nejvyšši. Je to… zapadlé v člověku
jako ve hmotě sila. Hmotu musiš porušit, aby vydala svou silu. Člověk se musi
rozpoutat, a porušit, a roztřištit, aby vydal svůj nejvyšši plamen. Aá, to by…
to by už bylo přiliš, aby ani pak nenašel, že… že dosáhl… že… že…“
Zakoktal se, zamračil se, hodil krabici s Krakatitem na katedru a usedl.


XLIX.

Bylo chvili rozpačité ticho.
„A to je všechno?“ ozval se ze středu lavic výsměšný hlas.
„To je všechno,“ zabručel Prokop znechucen.
„Neni.“ To řekl Daimon a vstal. „Kamarád Krakatit předpokládal, že delegáti
maji dobrou vůli rozumět –“
„Oho!“ zahlučelo to ve středu.
„Ano. Delegát Mezierski už musi mit trpělivost, až domluvim. Kamarád Krakatit
nám obrazně řekl, že je třeba,“ a tu Daimonův hlas zněl opět skřekem ptačim,
„že je třeba zahájit revoluci bez ohledu na teorii etap; revoluci ničivou a
výbušnou, ve které vydá lidstvo to nejvyšši, co v něm je utajeno. Člověk se
musi roztřištit, aby vydal vše. Společnost se musi roztřištit, aby v sobě
našla nejvyšši dobro. Vy se tady léta hádáte o nejvyšši dobro lidstva. Kamarád
Krakatit nás poučil, že stači uvést lidstvo v explozi, aby vyšlehlo daleko
výše, než jak by mu chtěly předpisovat vaše debaty; a neohližet se na to, co
se přitom rozbije. Pravim, že kamarád Krakatit má pravdu.“
„Má, má, má!“ Najednou se strhl křik a potlesk. „Krakatit! Krakatit!“
„Ticho,“ překřikl je Daimon. „A jeho slova maji tim větši váhu, že jsou
podložena faktickou moci tento výbuch provést. Kamarád Krakatit neni muž slov,
nýbrž činu. Přišel, aby nám uložil přimou akci. A já vám řikám, že bude
strašlivějši, než se kdo odvážil snit. A vypukne dnes, zitra, do týdne –“
Jeho slova zanikla v nepopsatelné vřavě. Vlna lidi se smýkla z lavic na pódium
a obklopila Prokopa. Objimali ho, tahali ho za ruce a křičeli „Krakatit!
Krakatit!“ Krásná divka s vlasy rozpoutanými divě zápasila, aby se k němu
prodrala klubkem lidi; vržena jich tlakem přilnula k němu hrudi; chtěl ji
odstrčit, objala ho a něco horečně sykala cizim jazykem. Zatim na kraji pódia
muž s brýlemi pomalu a tiše vykládal do prázdných lavic, že teoreticky neni
připustno vyvozovat sociologické závěry z neústrojné přirody. „Krakatit,
Krakatit,“ hučel dav, nikdo neseděl, Mazaud třepal zvonkem jako popelář; a
najednou se na katedru vyšvihl černý mladý muž a vysoko nade všemi mával ve
vztyčené ruce krabici s Krakatitem.
„Ticho,“ zařval, „a dolů! nebo vám to hodim pod nohy!“
Nastalo náhlé ticho; klubko se smeklo z pódia a couvalo. Nahoře zůstal jen
Mazaud se zvonkem v ruce, zmatený a bezradný, Daimon opřený o tabuli a Prokop,
na němž dosud visela ta temnovlasá menáda.
„Rosso,“ ozvaly se hlasy. „Srazte ho! Rosso dolů!“
Mladý muž na katedře divoce těkal žhoucima očima. „Nikdo se nehni! Mezierski
chce na mne střelit. Hodim,“ zaryčel a zatočil krabici.
Dav couval mruče jako rozlicená šelma. Dva tři lidé zvedli ruce, jini
následovali; byla chvilka dusného mlčeni.
„Jdi dolů,“ rozkřikl se stařik Mazaud. „Kdo ti dal slovo?“
„Hodim,“ hrozil Rosso napjatý jako luk.
„To je proti jednacimu řádu,“ rozčilil se Mazaud. „Já protestuju a… skládám
předsednictvi.“ Mrštil zvonkem na zem a sestoupil z pódia.
„Bravo, Mazaud,“ ozval se ironický hlas.
„Tys tomu pomohl.“
„Ticho,“ křičel Rosso a shazoval si vlasy s čela. „Já mám slovo. Kamarád
Krakatit nám řekl: Přijde tvůj okamžik, a vybuchneš; udělej misto pro svůj
jediný okamžik. – Dobrá, já jsem si vzal jeho slova k srdci.“
„To nebylo tak myšleno!“
„Ať žije Krakatit!“
Někdo začal hvizdat.
Daimon chopil Prokopa za loket a táhl ho k jakýmsi dviřkám za tabuli.
„Můžete hvizdat,“ pokračoval Rosso výsměšně. „Nikdo z vás nehvizdal, když se
před vás postavil tady ten cizi pán a… dělal misto pro svůj okamžik. Proč by
to nezkusil někdo jiný?“
„To je pravda,“ ozval se pokojný hlas.
Krásné děvče se postavilo před Prokopa, aby ho krylo svým tělem. Chtěl ji
odstrčit.
„Neni to pravda,“ křičela s očima planoucima. „On… on je…“
„Buď tiše,“ sykl Daimon.
„Poroučet dovede každý,“ mluvil Rosso zimničně. „Pokud mám tohle v ruce,
poroučim já. Mně je jedno, pojdu-li. Nikdo nesmi ven odtud! Galeasso, hlidej
dveře! Tak, teď si promluvime.“
„Ano, teď si promluvime,“ ozval se Daimon ostře.
Rosso se bleskem obrátil k němu; ale v tom okamžiku se vyřitil z lavic
modrooký obr s hlavou skloněnou jako beran, a dřive než se Rosso otočil,
popadl ho za nohy a podtrhl mu je; hlavou dolů letěl Rosso z katedry. V
úděsném tichu bouchne a zapraská hlava na prknech, a z pódia se kutáli vičko
porcelánové krabice dolů a pod škamna.
Prokop se hnal k bezduchému tělu; na Rossových prsou, na tváři, po zemi, v
kalužich krve byl rozsypán bilý prášek Krakatitu. Daimon jej zadržel; a tu již
se rozpoutal křik a několik lidi běželo na pódium. „Nešlapat na Krakatit,
vybuchne to,“ kázal nějaký roztřesklý hlas, ale už se vrhali na zem a sbirali
bilý prášek do krabiček od sirek, rvali se, váleli se v klubku na zemi.
„Zamkněte dveře,“ zaryčel kdosi. Světlo zhaslo. V tu chvili rozkopl Daimon
dviřka za tabuli a vytáhl Prokopa do tmy.
Posvitil si kapesni baterkou. Byl to kumbálek bez oken, stoly nakladené na
sobě, pivni tácky, nějaké zatuchlé šatstvo. Rychle táhl Prokopa dál: kyselá
černá dira chodby, černé a úzké schody dolů. Na schodech je dohonila
rozcuchaná divka. „Jdu s vámi,“ šeptala a zaryla prsty do Prokopovy paže.
Daimon vyrazil na dvůr kmitaje před sebou kruhem světla; byla propastná tma.
Vytrhl vrátka a pádil na silnici; a než Prokop doběhl k vozu, pokoušeje se
střásti divku, hrčel motor a Daimon skočil k volantu. „Rychle!“ Prokop se vrhl
do vozu a děvče za nim; vůz sebou trhl a letěl do tmy. Byla ledová zima; děvče
se třáslo v tenkých šatech, i zabalil ji Prokop do kožišiny a sám se vtiskl do
druhého kouta. Vůz uháněl špatnou měkkou cestou, zmital se z boku na bok,
vysazoval a opět rachotivě nabiral rychlosti. Prokop mrzl a uhýbal, kdykoliv
jej náraz vozu hodil k schoulené divce. Svezla se k němu. „Je ti zima, viď?“
šeptala, rozevřela kožišinu a halila ho do ni táhnouc ho k sobě. „Ohřej se,“
vydechla s šimravým smichem a přimkla se k němu celým tělem; byla horká a
kyprá, jako by nahá byla. Jeji rozpoutané vlasy vydechovaly pach hořký a
divoký, dráždily ho na tvářich a oslepovaly mu oči. Mluvila k němu zblizoučka
cizim jazykem, opakovala to ještě tišeji, ještě tišeji, brala jeho boltec mezi
jemně jektajici zuby; a náhle mu leži na prsou a vniká do jeho úst neřestným,
zkušeným, vláhyplným polibkem. Hrubě ji odstrčil; vztyčila se žasnouc, uraženě
odsedla a pohybem ramen smekla se sebe kožišinu; dulo mrazivě, i zvedl kožich
a položil ji jej znovu na ramena. Hodila sebou vztekle, vzdorovitě strhla
kožišinu a nechala ji válet na dně vozu. „Jak chcete,“ zabručel Prokop a
odvrátil se.
Vůz vyjel opět na tvrdou cestu a rozehnal se vyjici rychlosti. Z Daimona
nebylo vidět než záda zježená kozimi chlupy. Prokop se zalykal studeným
větrem; ohlédl se po divce, otočila si vlasy kolem krku a zajikala se zimou ve
svých lehkých šatečkách. Bylo mu ji lito; sebral kožich a hodil jej na ni;
odstrkovala jej v rozliceném vzdoru, a tu ji celou omotal kožišinou s hlavou a
se všim všudy jako balik a sevřel ji pažema: „Ani se nehnout!“
„Co, už zas vyvádi?“ hodil Daimon pokojně od volantu. „Nu tak ji…“
Prokop dělal, jako by přeslechl jeho cynismus; ale spoutaný balik v jeho
pažich se počal tiše chichtat.
„Je to hodná holka,“ pokračoval Daimon lhostejně. „Tvůj tatik byl spisovatel,
viď?“ Balik pokývl; a Daimon řekl Prokopovi jméno tak známé, tak osvicené a
čisté, že Prokop ustrnul a mimoděk uvolnil své drsné sevřeni. Balik sebou
zavrtěl a vyhoupl se mu na klin; zpod kožišiny vyčouhly krásné, hřišné nohy a
dětsky se bimbaly ve vzduchu. Přetáhl přes ně kožich, aby nemrzla; považovala
to nejspiš za hru, dusila se tichým smichem a kopala vyhazujic nohama. Sevřel
ji co nejniže mohl; tu zas nahoře vyklouzla plná děvi ruka a vjela mu do
obličeje v divé a milostné hře, rvala ho za vlasy, dráždila na krku, dobývala
se prsty do jeho sevřených úst. Nechal ji posléze činit; dotkla se jeho čela,
našla je přisně svraštěné a utrhla, jako by se spálila; teď je to bojácná
dětská pracička, která nevi, co smi; kradmo se bliži k jeho tváři, dotkne se
ji, ucukne, znovu se dotkne, pohladi a lehce, bázlivě se položi na hrubou lic.
V kožichu to hluboce vzdychlo a znehybnělo.
Auto se protáči spicim městečkem a klesá do širého kraje. „Tak co,“ obraci se
Daimon, „co řikáte kamarádům?“
„Tiše,“ šeptá nehybný Prokop „usnula.“


L.

Vůz zastavil v černém, lesnatém údoli. Prokop rozeznal potmě těžné věže a
haldy. „Tak, tady jsme,“ zabručel Daimon. „To je můj rudný důl a hamr; nestoji
to za nic. Nu, vystupte!“
„Mám ji tady nechat?“ ptal se Prokop tiše.
„Koho? Aha, vaši krasavici. Probuďte ji, zůstaneme tady.“
Prokop opatrně vystoupil nesa ji v náruči. „Kam ji mám položit?“
Daimon odemykal ponurý dům. „Co? Počkejte, já tu mám několik pokojů. Můžete ji
položit… já vás tam dovedu.“
Rozsvitil a vedl ho studenými kancelářskými chodbami; konečně vešel do jedněch
dveři a otočil kontakt. Byl to ošklivý nevyvětraný pokoj se zválenou posteli a
spuštěnou žaluzii. „Aha,“ bručel Daimon, „nocoval tu asi… jeden známý. Moc
pěkné to tu neni, že? Nu, jako u mládence. Položte ji sem na postel.“
Prokop opatrně složil tiše oddychujici balik. Daimon přecházel a mnul si ruce.
„Půjdeme teď do naši stanice. Je nahoře, na kopci, deset minut odtud. Nebo
chcete zůstat tady?“ Přistoupil k spici divce, rozhodil cip kožichu a odkryl
jeji nohy až nad kolena. „Je krásná, viďte? Škoda že jsem tak starý.“
Prokop se zamračil a zahalil ji nohy. „Ukažte mi vaši stanici,“ řekl suše.
Ústy Daimonovými trhl úsměšek. „Pojďte.“
Vedl ho dvorem. Ve strojovně se sviti, mašiny supaji, po dvoře se potlouká
topič s rukávy vyhrnutými a kouři dýmčičku. Nahoru do stráně vede lanová dráha
na rudné voziky a jeji konstrukce se rýsuje mrtvě jako ještěři žebra. „Musel
jsem zavřit tři jámy,“ vykládá Daimon. „Nevypláci se to. Už bych to dávno
prodal, nebýt stanice. Pojďte tudy.“ Pustil se po přikré pěšině lesem a do
kopce; Prokop jej sledoval jen po zvuku; byla černá tma a časem skanula ze
smrků těžká krůpěj. Daimon se zastavil a s námahou oddechoval. „Jsem stár,“
řekl, „už nemám dechu jako dřiv. Musim vic a vice spoléhat na lidi… Dnes nikdo
na stanici neni; kamarád telegrafista zůstal tam, s nimi… To je jedno;
pojďte!“
Temeno kopce bylo rozryté jako bojiště: opuštěné těžné věže, drátěná lana,
ohromné pusté haldy; a na největši haldě nahoře dřevěný baráček s anténami.
„To je… stanice,“ supěl udýchaný Daimon. „Stoji… na čtyřiceti tisicich tunách
magnetitu. Přirozený kondenzátor, rozumite? Celý kopec… je ohromná siť drátů.
Někdy vám to vyložim podrobně. Pomozte mi nahoru.“ Vydrápali se po sypké
haldě; těžký štěrk se jim s rachotem svážel pod nohama; ale konečně tady, tady
je stanice –
Prokop ustrnul nevěře svým očim: vždyť je to jeho laboratorni barák, tam doma,
v polich nad Hybšmonkou! tady ty nenatřené dvéře, pár světlejšich prken od
posledni správky, suky podobné očim – Jako vyjevený hmátl na veřeje: ovšem,
tuhle je ten rezavý ohnutý hřebik, který sám kdysi zatloukl! „Kde se to tu
vzalo?“ vyhrkl bezdeše.
„Co?“
„Ten barák.“
„Ten už tu stoji léta,“ řekl Daimon lhostejně. „Co na něm máte?“
„Nic.“ Prokop oběhl celý domek hmataje po stěnách a oknech. Ano, tady je ta
štěrbina, prasklé dřevo, vyražená tabulka v okně; vypadlý suk, pravdaže, a z
nitra zalepený papirem. Třesouci se rukou přejižděl známé ubohé podrobnosti;
všecko je, jak to bylo, všecko…
„Nu tak,“ ozval se Daimon, „už jste si to prohlédl? Otevřte, vy máte klič.“
Prokop jel rukou do kapsy. Nu ovšem, měl s sebou klič od své staré laboratoře…
tam doma; vstrčil jej do visaciho zámku, odemkl a vešel dovnitř; a – jako tam
doma – hmátl mechanicky vlevo a otočil kontaktem, který měl misto knofliku
hřebik – jako tam doma. Daimon vešel za nim. Bože, tady je můj kavalec dosud
neustlaný; mé umyvadlo, džbán s okrajem potlučeným, houba, ručnik, vše –
Otočil se do rohu; a to jsou ta stará železná kaminka s rourou spravovanou
drátem, bednička s uhelným mourem, a tam je rozbitá lenoška s nohama
pokleslýma, a čouhá z ni koudel a stočený drát; tady je ten cvoček v podlaze,
a tu je to propálené prkno, a skřiň, skřiň na šaty – Otevřel ji; klátily se
tam nějaké zvadlé kalhoty.
„Skvělé to tu neni,“ poznamenal Daimon. „Náš telegrafista je takový – nu,
podivin. Co řikáte aparátům?“
Prokop se obrátil ke stolu jako v snách. Ne, to tu nebylo, nenene, to sem
nepatři: misto nářadi chemikova je na jednom konci pultu tuctová lodni
radiostanice s položeným sluchátkem, přijimaci aparát, kondenzátory,
variometr, regulátor, pod stolem obyčejný transformačni agregát; a na druhém
konci –
„Tamto je normálni stanice,“ vysvětloval Daimon, „na obyčejné hovory. To druhé
je naše extinkčni stanice. Tou posiláme ty antivlny, protiproudy, umělé
magnetické bouře nebo jak to chcete jmenovat. To je celé naše tajemstvi.
Vyznáte se v tom?“
„Ne.“ Prokop zběžně přehlédl aparáty zcela nepodobné všemu, co znal. Mělo to
spoustu odporů, jakousi drátěnou mřižku, cosi podobného katodové trubici,
nějaké izolované bubny či co a podivný koherer, relé a tastr s kontakty;
nevěděl, co to vůbec je. Nechal aparátu a koukal na strop, je-li na něm také
ta divná kresba dřeva, která mu tam doma vždycky připominala hlavu starce.
Ano, je je je tam. A tamhle je to zrcátko s uraženým rohem –
„Co řikáte aparátu?“ ptal se Daimon.
„Je – eh – to je prvni konstrukce, že? Je to ještě přiliš složité.“ Padl očima
na fotografii, jež byla opřena o jakousi indukčni civku. Vzal ji do rukou;
byla to opojně krásná divči hlava. „Kdo je to?“ ptal se chraptivě.
Daimon mu nahlédl přes rameno. „Copak ji nepoznáváte? To je ta vaše krasavice,
co jste si ji sem přivezl v náruči. Skvostná holka, že?“
„Jak se sem dostala?“
Daimon se ušklibl. „Nu, asi ji zbožňuje náš telegrafista. Nechtěl byste
zapnout tamten veliký kontakt? Ten pákový. – Je to ten scvrklý človiček,
nevšiml jste si ho? Seděl v prvni lavici.“
Prokop hodil fotografii na stůl a zapnul kontakt. Po drátěné mřižce přeběhla
modrá jiskra. Daimon si pohrál prsty na tastru; tu začal celý aparát
světélkovat krátkými modrými zášlehy. „Tak,“ vydechl Daimon spokojeně a
zadival se bez hnuti do sršicich jisker.
Prokop popadl fotografii horečnýma rukama. Nu ovšem, rozumi se, to je to děvče
dole; o tom nemůže býti pochyby. Ale kdyby… kdyby snad měla závoj, a
kožišinku, zrosenou kožišinku až po ústa… a rukavičky – Prokop zaťal zuby. To
neni možno, že by ji byla tak podobna! Nachmuřil oči stihaje unikajici vidinu:
zas viděl divku v závoji, tiskne k prsoum zapečetěnou obálku a teď, teď k němu
obraci čistý a zoufalý pohled –
Bez sebe rozechvěnim srovnával obrázek s uniklou podobou. Bože na nebi, jak
vlastně vypadala? Vždyť já to nevim, lekl se; vim jen, že byla zastřená a
krásná. Krásná byla a zastřená, a nic vic, nic vic jsem neviděl. A tohle, ten
obrázek tady, veliké oči a ústa vážná a jemná, to že je ta – ta – ta spici
dole? Ta má přec ústa rozevřená, hřišná a rozevřená ústa a vlasy rozpoutané, a
nedivá se tak – nedivá se tak – Zrosený závoj mu zastřel oči. Ne, to je
nesmysl; toto vůbec neni to děvče dole, a neni ji ani podobna. Toto je tvář té
zastřené, jež přišla v hoři a úzkosti; jeji čelo je klidné a oči jsou
zastiněny bolesti; a ke rtům se ji lepi závoj, hustý závoj s rosičkou dechu –
Proč tehdy jej nezvedla, abych ji poznal!
„Pojďte, něco vám ukážu,“ ozval se Daimon a táhl Prokopa ven. Stáli na vrcholu
haldy; pod jejich nohama temná a spici země do nedozirna. „Divejte se tamhle,“
řekl Daimon a ukazoval rukou k obzoru. „Nevidite nic?“
„Nic. Ne, je tam světélko. Slabá záře.“
„Vite, co to je?“
Tu zahučelo slabě, jako by zaryl vitr v nočni tišině. „Hotovo,“ děl Daimon
slavnostně a smekl čepici. „Good night, kamarádi.“
Prokop se k němu tázavě obrátil.
„Nerozumite?“ povidal Daimon. „Teď teprve k nám doletěl výbuch. Padesát
kilometrů vzdušné čáry. Přesně dvě a půl minuty.“
„Jaký výbuch?“
„Krakatit. Ti pitomci si to cpali do sirkových škatulek. Myslim, že už budeme
mit od nich pokoj. Svoláme nový sjezd – bude nový výbor –“
„Vy – jste je –“
Daimon přikývl. „S nimi se nedalo pracovat. Jistě že se hádali do posledni
chvile o taktiku. Nejspiš tam hoři.“
Na obzoru bylo vidět jen slaboučkou červenou záři.
„Zůstal tam i vynálezce naši stanice. Zůstali tam všichni. Teď tedy to vezmete
do ruky sám – Hleďte, poslouchejte, jak je ticho. A přece odtud, tady z těch
drátů, šlehá do prostoru němá a přesná kanonáda. Teď jsme zastavili všechny
bezdrátové spoje, a telegrafistům to práská do uši, krach, krach! Ať se
vztekaji. Zatim se pan Tomeš někde v Grottup pachti dodělat Krakatit – Nenajde
to nikdy. A kdyby, kdyby! v tom okamžiku, jak by se mu to pod rukou sloučilo,
byl by konec – Tak jen pracuj, staničko, jiskři potichu a bombarduj celý
vesmir; nikdo, nikdo kromě vás nebude pánem Krakatitu. Teď jste jen vy, vy
sám, vy jediný –“ Položil mu ruku na rameno a ukázal mlčky kolem dokola: celý
svět. Byla tma bezhvězdná a pustá; jen na obzoru žiřila nizká ohnivá záplava.
„Ah, jsem unaven,“ zivl Daimon. „Byl to slušný den. Pojďme dolů.“


LI.

Daimon spěchal, aby už byl doma. „Kde je vlastně Grottup?“ zeptal se Prokop
zčistajasna, když už byli dole.
„Pojďte,“ děl Daimon, „ukážu vám to.“ Dovedl ho do továrni kanceláře a k
nástěnné mapě. „Tady,“ ukázal ohromným nehtem na mapě podškrtávaje malé
kolečko. „Nechcete pit? To vás zahřeje.“ Naléval sobě i Prokopovi do skleniček
něco černého jako smůla. „Na zdravi.“ Prokop do sebe obrátil kališek a zajikl
se; bylo to jako rozžhavené železo a hořké jako chinin; hlava se mu zatočila
nesmirnou závrati. „Už nechcete?“ vycenil Daimon žluté zuby. „Škoda. Nechcete
nechat čekat svou krasotinku, že?“ Pil sklenku po sklence; oči mu zeleně
blýskaly, chtěl žvanit, ale jazyk mu tuhl. „Poslyšte, vy jste chlapik,“
prohlašoval. „Zitra se do toho dejte. Starý Daimon vám udělá všechno, nač si
vzpomenete.“ Zvedl se toporně a klaněl se mu až po pás. „Tak je to v pořádku.
A teď – poč-počkejte –“ Počaly se mu plést všechny jazyky světa; pokud Prokop
rozuměl, byly to nejhrubši oplzlosti; nakonec bručel nesmyslnou pisničku,
trhal sebou jako v padoucnici a ztrácel vědomi; na rtech mu vystoupila žlutá
pěna.
„Hej, co je vám?“ křičel Prokop a zatřásl jim.
Otevřel těžce a blbě skelné oči. „Co… co je?“ blábolil, trochu se zvedl a
otřásl se. „Aha, já – já jsem – To nic neni.“ Promnul si čelo a křečovitě
zival. „A-ano, já vás dovedu do vašeho pokoje, že?“ Byl ošklivě zsinalý a celý
jeho tatarský obličej váčkovitě splaskl; vrávoral nejistě, jako by mu ztuhly
údy. „Tak pojďte.“
Šel rovnou do pokoje, kde nechali spici divku. „Aa,“ křikl ve dveřich,
„krasavice se probudila. Račte dál.“
Klečela u kamen; patrně právě zatopila, a divala se do praskajiciho plamene.
„Vida, jak to tu poklidila,“ bručel Daimon uznale. Skutečně, bylo vyvětráno a
trapný nelad pokoje kupodivu zmizel; bylo tu nenáročně a přijemně jako v
pokojné domácnosti.
„Hleďme, co dovedeš,“ divil se Daimon. „Holka, ty bys už měla zakotvit.“
Vstala a neobyčejně se začervenala i zmátla. „Nu, jen se neplaš,“ cenil se
Daimon. „Tedy ten kamarád se ti libi, viď?“
„Libi,“ řekla prostě a šla zavřit okno a spustit žaluzii.
Kamna teple zadýchala do světlého pokoje. „Děti, máte to tu pěkné,“ liboval si
Daimon a nahřival si ruce u kamen. „Hned bych tu zůstal.“
„Jen si jdi,“ vyhrkla rychle.
„Sejčas, holubičko,“ zubil se Daimon. „Mně… mně je teskno bez lidi. Koukej,
tvůj přitel je jako zařezaný. Počkej, já mu domluvim.“
Rozzlobila se prudce. „Nic mu nedomluviš! Ať je, jaký chce!“
Zvedl chlupaté oboči přeháněje úžas. „Copak? copak? snad jsi se do něho ne-
nezami –“
„Co je ti po tom?“ přerušila ho blýskajic očima. „Kdo tě tu potřebuje?“
Řehtal se tiše opřen o kamna. „Kdybys věděla, jak ti to sluši! Holka, holka, i
na tebe to jednou přišlo doopravdy? Ukaž se!“ Chtěl ji vzit za bradu;
ustoupila blednouc hněvem a ukázala zuby.
„Cože? I kousat chceš? S kýmpak jsi včera zas byla, že jsi tak – Aha, já už
vim; Rosso, viď?“
„To neni pravda,“ křikla se slzami v hlase.
„Nechte ji,“ ozval se Prokop přikře.
„Nunu, vždyť o nic nejde,“ bručel Daimon. „Tak abych vám nepřekážel, že?
Dobrou noc, děti.“ Couval a tlačil se ke zdi; a než Prokop vzhlédl, byl pryč.
Prokop si přitáhl židli k hučicim kamnům a zadival se do plamene; ani se po ni
neohlédl. Slyšel ji, jak váhavě, po špičkách přecházi po pokoji, zamyká a něco
rovná; nevi už co, stoji a mlči – Divná je moc plamene a plynoucich vod;
člověk se zahledi, omámi, zastavi; nemysli už, nevi a nevzpominá, ale děje se
v něm všechno, co kdy žil, co kdy žil, bez tvaru a bez času.
Klapl jeden pohozený střeviček a druhý; asi se zouvá. Jdi spat, děvče; až
usneš, podivám se, komu jsi podobna. Tichounce přešla a zastavila se; zas něco
přerovnává, bůhvi proč to tu chce mit tak pěkné a čisté. A najednou před nim
kleči na kolenou a vztahuje sličné ruce k jeho noze. „Zuju ti boty, nechceš?“
povidá tiše.
Vzal jeji hlavu do dlani a obrátil ji k sobě. Krásná, poddajná a podivně
vážná. „Znala jsi Tomše?“ ptal se chraptivě.
Přemýšlela a zavrtěla hlavou.
„Nelži! Ty jsi – ty jsi – Máš vdanou sestru?“
„Nemám.“ Vydrala se mu prudce z dlani. „Proč bych ti lhala? Všechno ti řeknu
naschvál abys věděl – na-schvál – Já já jsem zkažená holka.“ Zaryla se mu
tváři do kolen. „Všichni mne všich-ni abys to věděl –“
„I Daimon?“
Neodpověděla, jenom se otřásla. „Mů-můžeš mne kopnout já jsem óó nnnenesahej
na mne – já jsem kdy-bys věděl…“ Zrovna ztuhla.
„Nech toho,“ křikl zmučen a násilim zvedl ji hlavu. Jeji oči široce zely
úzkosti a zoufánim. Pustil ji a zaúpěl. Byla to taková podoba, že se zalykal
úděsem. „Mlč, mlč aspoň,“ mručel s hrdlem sešněrovaným.
Znovu se mu zaryla tváři do klina. „Nech mne já musim vvvšechno… Já já začala
když mně bylo tři-třináct…“ Zacpal ji dlani ústa; kousala ho do ruky a mumlala
svou děsnou zpověď mezi jeho prsty. „Buď tiše,“ křičel, ale dralo se to z ni,
jektala zuby a třásla se, mluvila, koktala – Jakžtakž ji umlčel. „Óó,“
sténala, „kdybys… věděl… co… co lidé… co dě-laji! A každý, každý byl ke mně
tak hrubý… Jako bych ani… ani zviře, ani kámen nebyla!“
„Přestaň,“ vydechl bez sebe a nevěda co činit hladil ji třesoucimi se pahýly
prstů po hlavě. Vzdychla uklidněně a znehybněla; citil jeji palčivý dech a tep
jejiho hrdla.
Začala se tiše chichtat. „Ty sis myslel, že spim… tam ve voze. Já jsem
nespala, já já jsem tak jenom naschvál dělala… a čekala jsem, že začneš… jako
jini. Vždyťs věděl, co jsem a jaká jsem… A… ty ses jen mračil a držels mne,
jako bych byla malá holčička, jako bych… nějaká… svátost byla…“ Uprostřed
smichu ji vytryskly slzy. „Já já byla najednou já nevim proč tak ráda jako
nikdy jako nikdy – a pyšná – a styděla jsem se hrozně, ale… přitom mně bylo
tak krásně –“ Štkajicimi ústy mu libala kolena. „Vy… vy jste mne ani
neprobudil… a položil… jako svátost… a nohy zakryl, a nic neřekl –“ Rozplakala
se nadobro. „Já já vám budu sloužit, nechte mne nechte mne… já vám zuju boty…
Prosim vás, prosim vás nezlobte se, že jsem dělala, jako bych spala! Prosim
vás –“
Chtěl ji zvednout hlavu; libala mu ruce. „Proboha, neplačte!“ vyhrkl.
„Kdo?“ protáhla udivena a přestala plakat. „Proč mně vykáte?“ Obracel ji tvář
nahoru; bránila se vši silou a zavrtávala se mu do kolen. „Ne, ne,“ drkotala s
hrůzou a smichem. „Já jsem uřvaná. Já já bych se vám… nelibila,“ vydechla tiše
a schovávala uplakanou tvář. „Když jste tak… dlouho… nešel! Já vám budu
sloužit a psát dopisy… já já se naučim psát na stroji, já umim pět řeči –
nevyženete mne? Když jste tak dlouho nešel, myslela jsem co co všechno bych
udělala… a on mi to zkazil on mluvil jako bych… jako bych byla… A neni to
pravda… já já už jsem řekla všechno; já budu… já udělám co řeknete… já chci
být hodná –“
„Vstaňte, prosim vás!“
Posadila se na paty, složila ruce v klin a hleděla na něho jako u vytrženi.
Nyni… nebyla už podobna oné v závoji; vzpomněl si na štkajici Anči. „Už
neplačte,“ zabručel měkce a nejistě.
„Vy jste krásný,“ vydechla s obdivem. Začervenal se a mručel nevěda co.
„Jděte… spat,“ zajikal se a pohladil ji po palčivé lici.
„Neošklivim se vám?“ šeptala zrůžovělá.
„Ne, naprosto ne.“ Nehnula se a pohližela na něho úzkostiplnýma očima; i
sklonil se k ni a polibil ji; zarděla se a vrátila mu to zmateně a neobratně,
jako by libala poprvé. „Jdi spat, jdi,“ zamumlal rozpačitě, „já ještě… musim…
něco rozvážit.“
Vstala poslušně a počala se tiše svlékat. Usedl do kouta, aby ji nepřekážel.
Odkládala šaty beze studu, ale také bez nejmenši frivolnosti, prostě a
samozřejmě jako žena ve své rodině; nespěchajic rozepiná knofličky a rozvazuje
tkanice, tichounce skládá prádlo, smeká zvolna punčochy se silných a
dokonalých nohou; zamysli se, hledi k zemi a hraje si po dětsku dlouhými,
bezúhonnými prsty chodidel; pohlédne na Prokopa, usměje se ruměnou radosti a
šeptá: „Já jsem tiše.“ Prokop ve svém koutě trne sotva dýchaje: vždyť je to
opět ona, divka v závoji; toto silné, vyspělé a překrásné tělo je jeji; takto
vážně a krásně odkládá šat po šatu, tak ji splývaji vlasy po pokojných
ramenou, tak, právě tak si hladi, zamyšlena a schoulena, plné a matné paže, a
takto, takto – Zavřel oči s tlukoucim srdcem. Zda jsi ji kdysi nevidal,
sviraje oči v nejpustši samotě, jak stoji pod tichou lampou rodiny, obraci k
tobě tvář a něco pravi, co jsi neslyšel? Zda jsi tehdy, mačkaje si ruce mezi
koleny, nezahlédl pod vičky semknutými pohyb jeji ruky, pohyb prostý a sličný,
v němž byla všechna mirná a mlčelivá radost domova? Jednou se ti zjevila,
stála k tobě zády s hlavou nad něčim skloněnou; a jindy jsi ji viděl čtouci
pod večerni lampou. Je toto snad jen pokračováni, a zmizelo by to, kdybych
otevřel oči, a nezbylo by nic než samota?
Otevřel oči. Divka ležela v posteli, přikryta až po bradu, a upirala na něho
oči v strašně pokorné lásce. Přistoupil k ni, sklonil se nad jeji tvář,
studoval jeji rysy s prudkou a netrpělivou pozornosti. Vzhlédla tázavě a
dělala mu misto po svém boku. „Nene,“ zamručel a polibil ji lehce na čelo.
„Jen spi.“ Zavřela poslušně oči a ani nedýchala.
Vrátil se po špičkách do svého kouta. Ne, neni ji podobna, ujišťoval se. Zdálo
se mu, že na něho hledi zpod přivřených viček; mučilo ho to, nemohl ani
myslet; mračil se, odvrátil hlavu, ale konečně vyskočil a po špičkách se šel
na ni podivat. Měla oči zavřené, ani nedýchala; byla sličná a oddaná. „Spi,“
zašeptal. Pokývla maličko hlavou. Zhasil a hmataje rukama se vrátil po
špičkách do svého kouta u okna.
Po předlouhé, přeteskné době se kradl ke dveřim jako zloděj. Neprobudi se?
Váhal s rukou na klice, s bouchajicim srdcem otevřel a vykradl se na dvůr.
Je dosud noc. Prokop se rozhlédl mezi haldami a přelezl plot. Dopadl na zem,
očistil se a hledal silnici.
Je stěži vidět na cestu. Prokop se rozhliži a chvěje se chladem. Kam, kam
vlastně? Do Balttinu?
Šel několik kroků a zastavil se; stoji a kouká do země. Tedy do Balttinu?
Škytl hrubým, bezslzným pláčem a obrátil se na patě.
Do Grottup!


LII.

Divně se toči dráhy světa. Kdybys sčetl všechny své kroky a cesty, jakou
složitou podobu by to nakreslilo? Neboť svými kroky rýsuje každý svou mapu
země.
Byl večer, když stál Prokop před mřižovým plotem grottupských závodů. Je to
rozsáhlé barákové pole, ozářené mlhovými koulemi obloukových lamp; ještě sviti
jedno nebo dvě okna; Prokop tiskne hlavu mezi mřižové pruty a volá: Haló!
Přibližil se vrátný nebo hlidač. „Co chcete? Dovnitř se nesmi.“
„Prosim vás, je u vás ještě pan inženýr Tomeš?“
„Co s nim chcete?“
„Musim s nim mluvit.“
„… Pan Tomeš je ještě v laboratoři. Nemůžete s nim mluvit.“
„Řekněte mu… řekněte mu, že na něj čeká jeho přitel Prokop… že mu má něco
dát.“
„Jděte dál od té mřiže,“ bručel člověk a někoho zavolal.
Po čtvrthodině běžel kdosi v dlouhém bilém plášti k mřiži.
„To jsi ty, Tomši?“ volal Prokop polohlasně.
„Ne, já jsem laborant. Pan inženýr nemůže přijit. Pan inženýr má důležitou
práci. Co si račte přát?“
„Musim s nim nutně mluvit.“
Laborant, otylý a čilý človiček, pokrčil rameny. „Prosim, to nepůjde. Pan
Tomeš dnes nemůže ani na vteřinu –“
„Děláte Krakatit?“
Laborant nedůvěřivě zafrkal. „Co vám je po tom?“
„Musim ho… před něčim varovat. Musim mu něco doručit.“
„Máte to dát mně. Já mu to donesu.“
„Ne, já… já to dám jenom jemu. Řekněte mu –“
„Tak si to prý máte nechat.“ Člověk v bilém plášti se otočil a odcházel.
„Počkejte,“ volal Prokop. „Dejte mu to. Vyřiďte mu… vyřiďte mu…“ Vylovil z
kapsy onu pomačkanou silnou obálku a podával ji skrze mřiž. Laborant ji vzal
podezřivě mezi prsty, a Prokopovi bylo, jako by právě něco přetrhl. „Řekněte
mu, že… že tu čekám, že ho prosim, aby… aby sem přišel!“
„Já mu to dám,“ uryl laborant a odešel.
Prokop se posadil na patnik. Z druhé strany plotu stál mlčelivý stin a hlidal
ho. Je syrová noc, holé větve se rozpinaji do mlhy, je slizko a zebavě. Po
čtvrthodině někdo přicházi k plotu; je to bledý nevyspalý chlapec s tváři jako
z tvarohu.
„Pan inženýr vzkazuje, že mnohokrát děkuje a že nemůže přijit a že nemáte
čekat,“ vyřizoval mechanicky.
„Počkejte,“ drtil Prokop netrpělivě. „Řekněte mu, že s nim musim mluvit; že…
že jde o jeho život. A že mu dám všechno, co chce, jen když… jen když mi pošle
jméno a adresu té dámy, co jsem mu od ni donesl tu obálku. Rozumite mi?“
„Pan inženýr jenom vzkázal, že mnohokrát děkuje,“ opakoval chlapec ospale, „a
že nemáte čekat –“
„Ale tak u čerta,“ zaskřipal Prokop zuby, „vyřiďte mu, ať sem přijde, jinak že
se odtud nehnu. A ať nechá práce, nebo… nebo mu to vyleti do povětři,
rozumite?“
„Prosim,“ řekl chlapec tupě.
„Ať… ať sem přijde! Ať mi dá tu adresu, jenom tu adresu, a… že mu pak nechám
všechno, rozuměl jste?“
„Prosim.“
„Tak už jděte, jděte rychle, u všech –“
Čekal v zimničné netrpělivosti. Neni… neni to lidský krok tam uvnitř? Zatanul
mu Daimon, jak nasupen, křivě fialovou hubu se divá do modrých jisker své
stanice. A ten pitomec Tomeš nejde! Kuti tam něco, tam, co záři to světlé
okno, a nevi, nevi, že je bombardován, že chvatnýma rukama zapaluje podkop sám
pod sebou a – Neni to lidský krok? Nikdo nejde.
Hrubý kašel otřásá Prokopem. Všechno ti vydám, šilenče, přijdeš-li mi jenom
řici jeji jméno! Nechci už nic; nechci už nic než ji nalézt; všeho se vzdám,
jen mi nech to jediné! Utkvěl očima v prázdnu: nyni tu stoji zahalena závojem,
u nohou suché listi, bleďoučká a divně vážná v této zsinalé tmě; spiná na
prsou ruce, nemá už obálku, a hledi na něho hlubokýma, upřenýma očima; studené
mženi ji zrosilo závoj i kožišinku. „Byl jste ke mně nezapomenutelně laskav,“
pravi tiše a zastřeně. Zvedl k ni ruce, zlomil ho litý kašel. Óó, což nikdo
nepřijde? Vrhl se k mřižovému plotu, aby jej přelezl.
„Zůstaňte tam, nebo střelim,“ křikl stin za plotem. „Co tu chcete?“
Prokop pustil plot. „Prosim vás chraptěl zoufale, „– řekněte panu Tomšovi…
řekněte mu…“
„Řekněte si mu to sám,“ přerušil ho hlas nelogicky; „ale hleďte, ať už jste
pryč.“
Prokop usedl na patnik. Snad Tomeš přijde, až mu to zase selže. Jistě, jistě
nenajde, jak se dělá Krakatit; pak přijde sám a zavolá mne… Seděl nahrben jako
prosebnik. „Poslyšte,“ ozval se, „já vám dám… deset tisic, když… když mne
pustite dovnitř.“
„Já vás dám sebrat,“ zabručel hlas přikře a neodmluvně.
„Já – já –,“ koktal Prokop, „já chci jen vědět tu adresu, vite? já chci jen…
vědět… Já vám dám všechno, když mi to opatřite! Vy… vy jste ženat a máte děti,
ale já… já jsem sám… a chci jenom nalézt…“
„Ticho buďte,“ osopil se hlas. „Jste opilý.“
Prokop umlknul a komihal trupem na patniku. Musim čekat, přemýšlel tupě. Proč
nikdo nejde? Všechno mu dám, i Krakatit, i všechno ostatni, jen když… „Byl
jste ke mně nezapomenutelně laskav.“ Ne, bůh chraň: já jsem člověk zlý; ale
vy, vy jste ve mně vzbudila vášeň laskavosti; všechno na světě bych udělal,
když jste na mne pohlédla; vidite, proto jsem tady. To nejkrásnějši na vás je,
že máte nade mnou moc, abych vám sloužil; proto, slyšite, proto vás musim
milovat!
„Co pořád máte?“ láteřil hlas za plotem. „Budete tiše nebo ne?“
Prokop vstal: „Prosim vás, prosim vás, řekněte mu –“
„Já na vás pošlu psa!“
K plotu se loudavě bližila bilá postava s hořicim uhlikem cigarety. „To jsi
ty, Tomši?“ zavolal Prokop.
„Ne. Vy jste tu ještě?“ Byl to laborant. „Člověče, vy jste blázen.“
„Prosim vás, přijde sem Tomeš?“
„Ani ho nenapadne,“ povidal laborant opovržlivě. „Nepotřebuje vás. Za čtvrt
hodiny to máme hotovo, a pak, gloria victoria! pak se napiju.“
„Prosim vás, řekněte mu, ať… ať mně dá jen tu adresu!“
„To už vyřizoval kluk,“ vycedil laborant. „Pan inženýr řekl, abyste mu vlezl
na záda. Bude se vytrhovat z práce, ne? Teď, když je v nejlepšim. Už to
vlastně máme, a teď jenom – a je to.“
Prokop vykřikl úděsem: „Běžte mu řici – rychle – ať nezapiná vysokou
frekvenci! Ať to zastavi! Nebo – nebo se stane – Běžte honem! On nevi – on –
on nevi, že Daimon – Proboha, zarazte ho!“
„Tja,“ vyprskl laborant v krátký smich. „Pan Tomeš vi, co má dělat; a vy –,“
tu vyletěl mřiži hořici oharek, „dobrou noc!“
Prokop skočil k plotu.
„Ruce vzhůru,“ zařval uvnitř hlas a vzápěti pronikavě hvizdla hlidačská
pišťalka. Prokop se dal na útěk.
Ubihal po silnici, skočil přes přikop a běžel po měkké louce; klopýtal
oranici, upadl, sebral se a uháněl dál. Zastavil se s buchajicim srdcem. Kolem
dokola mlha a pustá pole; teď už mne nechyti. Naslouchal; bylo ticho, slyšel
jen svůj sipavý dech. Ale což – což když vyleti Grottup do povětři? Chytil se
za hlavu a běžel dál; sklouzl do hlubokého úvozu, vydrápal se nahoru a kulhaje
skákal přes zorané pole. Oživla bolest staré fraktury a v prsou ho palčivě
bodalo; nemohl dále, usedl na studenou mez a dival se na Grottup mlhavě zářici
svými obloukovými lampami. Vypadalo to jako světelný ostrov v nesmirných
temnotách.
Je trnouci, zdušené ticho; a přece v okruhu tisiců a tisiců kilometrů se
odehrává děsný a bezoddyšný útok; Daimon na své Magnetové hoře řidi přišerně
tiché bubnové bombardement celého světa; milovými kmity si razi letici vlny
cestu rozlohami, aby zachytily a rozmetaly prvni prášek Krakatitu kdekoliv na
zemi. A tady v hlubině noci, uprostřed té bledé záplavy světla, pracuje
zarytý, šilený člověk, skloněný nad tajemným procesem přeměny – „Tomši,
pozor,“ vykřikl Prokop; ale jeho hlas zapadl ve tmě jako kámen hozený do tůně
dětskou rukou.
Vyskočil třesa se hrůzou a zimou a prchal dál, jen dál od Grottupu. Zabředl do
mokřiny a stanul; neozve se výbuch? Ne, ticho; a v novém poryvu hrůzy běžel
Prokop do svahu, klopýtal, svezl se na kolena, vyskočil a uháněl; zapadl v
houšti, hmatal rukama, prodiral se naslepo, sklouzl a sjižděl dolů; zvedl se,
utiral pot krvácejicima rukama a utikal dále.
Uprostřed poli našel něco světlého; hmatal na to, byl to poražený křiž. Těžce
sipaje usedl na prázdný podstavec. Mlžná záplava nad Grottupem je už daleko,
docela daleko na obzoru; je to jen nizké zářeni nad zemi. Prokop zhluboka
oddychoval; nic, ticho; tedy snad selhalo Tomšovi a nestane se to strašlivé.
Úzkostně naslouchal do dálky; nic, jen studené odkapáváni vody v nějaké
podzemni stružce; nic, jenom tlukouci srdce –
Tu vyrazila nad Grottupem obrovská černá masa, vše zhaslo; jako by se tma
roztrhla, vyšlehl vteřinu nato ohnivý sloup, strašlivě zaplál a rozhodil
kyklopskou hradbu dýmu; a tu již zadul hučici náraz vzduchu, něco zapraskalo,
stromy skřipavě zašuměly, a prásk! děsné švihnuti bičem, rachot, burácejici
úder a duněni; země se chvěje a ve vzduchu šileně viři urvané listi. Lapaje po
dechu, drže se oběma rukama podstavce křiže, aby ho to nesmetlo, pouli Prokop
oči do sršici výhně. I rozštipne se země moci ohňovou, a v rachotu hromu
promluvi Pán.
Ráz na ráz se vyvalil druhý a třeti masiv, roztrhl se rudým šlehnutim a zaplál
třeti, nejhroznějši výbuch; patrně chytly sklady. Nějaká hořici masa leti do
nebe, rozprskne se a snáši se deštěm explodujicich jisker. Zadul nesmirný
praštici rachot a měni se v bubnovou palbu; ve skladech exploduji zápalné
rakety a srši jako jiskry pod bušicim kladivem. Rozlil se brunátný oheň
požáru, jenž puká tata rrrtata suchými ranami jako hnizdo mitrajéz. Vyrazil
čtvrtý a pátý výbuch s třeskným zařvánim houfnice; požár přeletěl na obě
strany; hoři málem půl obzoru.
Teprve nyni doletěl zoufalý praskot skoseného lesa grottupského; ale už se
přes něj valila nárazová kanonáda hořicich skladů. Šestý výbuch se roztrhl
tvrdým ostrým třesknutim; patrně kresylit; vzápěti hlouběji, basově zahoukla
exploze sudů s dynamonem. Bleskem vyleti ohromný planouci projektil dopolou
nebes; vyšlehne vysoký plamen, zhasne a vyskoči o kus dál, ale teprve po
vteřinách zahluči rána a zaburáci hromový otřes. Na chvili ticho, že slyšiš
praskot ohně, jako když se rošti láme; nový rachotici a těžký náraz, a nad
grottupskými závody rázem se slehne plamen, nechávaje jen nizké žiřeni;
prudkým leticim plápolem hoři město Grottup.
Ztuhlý úděsem zvedl se Prokop a klopýtal odtud.


LIII.

Běžel po silnici těžce sipaje; přeběhl vršek kopce a utikal do údolu; ohnivá
záplava za nim mizela. Mizely věci a stiny zality plynouci mlhou; bylo to,
jako by vše nehmotně, mátožně odplývalo a bylo unášeno bezbřehou řekou, kde
nezašplouná vlna a racek nezakřiči. Děsil ho vlastni dupot v tichém a
nesmirném odtékáni všeho; tu zpomalil, zdusil kroky a putoval nezvučně do
mléčné tmy.
Na silnici před nim se zatřpytilo světélko; chtěl se mu vyhnout, stanul a
váhal. Lampa nad stolem, ohýnek v kamnech, lucerna cestu hledajici; nějaká
zmořená můrka v něm třásla křidly po blikajicim světélku. Bližil se loudavě,
jako by si netroufal; postál, hřál se zdálky na vrtivém ohničku, šel bliž a
bál se, že ho zas vyženou. Zastavil se opodál; je to vůz s plachtovou
střechou, na oji visi rozžatá lucerna a vrhá chvějivé hrstičky světla na
bilého koně, bilé kameny a bilé pně břizek u cesty; a konik má na hubě režný
pytlik a se skloněnou hlavou chroustá oves, má dlouhou střibrnou hřivu a ocas
nikdy nezastřižený; a u hlav mu stoji drobný stařik, má bilé vousy a střibrné
vlásky a je také tak režně světlý jako ta plachta na voze; přešlapuje,
přemýšli, něco si povidá a protahuje mezi prsty běloučkou hřivu konikovu.
Nyni se obrátil, divá se nevidomě do tmy a ptá se vratkým hláskem: „To jsi ty,
Prokope? Tak pojď, já už na tebe čekám.“
Prokop se nepodivil, jen se mu bezmezně ulevilo. „Už jdu,“ vydechl, „vždyť
jsem tak běžel!“
Dědeček k němu přistoupil a sáhl mu na kabát. „Jsi celý mokrý,“ řekl káravě.
„Ještě se nastydneš.“
„Dědečku,“ vyhrkl Prokop, „vite, že vyletěl Grottup?“
Stařeček potřásl litostivě hlavou. „A co lidu to tenkrát zabilo! Uhnal jsi se,
viď? Sedni si na kozlik, já tě dovezu.“ Cupal ke konikovi a pomalu mu
odvazoval pytlik s ovsem. „Hý, hý, tak už dost,“ šišlal. „Pojedeme, dostali
jsme hosta.“
„Co to vezete pod tou plachtou?“ ptal se Prokop.
Dědeček se k němu obrátil a zasmál se. „Svět,“ řekl. „Tys ještě neviděl svět?“
„Neviděl.“
„Tak ti to ukážu, počkej.“ Uložil pytlik s ovsem do vozu a jal se po jedné
straně odepinat plachtu naprosto nespěchaje. Odhrnul ji, a pod ni byla bedna
se zaskleným kukátkem. „Počkej,“ opakoval a hledal něco na zemi; sebral
větévku, sedl na bobek k svitilně a zapálil snitku, vše pomaličku a důkladně.
„Tak hoř pěkně, hoř,“ domlouval větvičce a chráně ji dlaněmi cupital k bedně,
zvedl viko a rozsvěcoval uvnitř nějakou lampičku. „Já to mám na olej,“
vysvětloval. „Někteři už sviti karbidem, ale… on karbid tuze páli do oči. A
taky je to taková věc, vybuchne to, a máš to; ještě to může někomu ubližit. A
olej, to je jako v kostele.“ Naklonil se k okénku a mrkal bledýma očkama
dovnitř. „Dost je vidět. To ti je krásné,“ šeptal nadšeně. „Pojď se podivat.
Ale musiš se ohnout, abys byl… maličký… jako děti. Tak.“
Prokop se schýlil ke kukátku. „To je řecký chrám Páně v Girgenti,“ začal
stařik vážně odřikavat, „na ostrově Sicilii; je zasvěcen Bohu čili Junoně
Lacinii. Podivej se na ty sloupy. Ty jsou udělány z tak velkých kusů, že na
každém kameni může jist celá rodina. Považ si, jaká je to práce. Mám otočit
dál? – Pohled z hory Penegal v Alpách, když zapadá slunce. To ti pak zahoři
snih takovým krásným a divným světlem, jak je tu uděláno. To je alpské světlo
a ta hora se jmenuje Latemar. Dál? – To je svaté město Benares v Indii; ta
řeka je posvátná a očišťuje hřichy. Tisice lidi tu našly, co hledaly.“
Byly to důtklivé, pečlivě narýsované obrázky ručně kolorované; barvy trochu
vybledly, papir zažloutl, a přece jim zůstala milá, potěšujici pestrost modři,
zeleni a žluti a červené kabátce lidi a čistá blankytnost nebes; a každá
travička byla vykreslena s láskou a pozornosti.
„Ta svatá řeka je Ganges,“ dodal starý s úctou a otočil klikou. „A to je
Zahur, nejkrásnějši zámek na světě.“
Prokop se zrovna přisál k okénku. Viděl skvostný zámek s lehkými kupolemi,
vysoké palmy a modrý vodotrysk; malinká postavička s pérem na turbanu, v
nachovém kabátci, žlutých plundrách a s tatarskou šavli zdravi až po zem dámu
v bilých šatech, jež vede na uzdě tančiciho koně. „Kde… kde je Zahur?“ šeptá
Prokop.
Dědeček pokrčil rameny. „Tam někde,“ řekl nejistě, „kde je nejkrásněji. Někdo
to najde a někdo ne. Mám otočit?“
„Ještě ne.“
Starý se odklidil dál a hladil koně po kýtě. „Čekej, nonono čekej,“ vykládal
tiše. „Musime mu ukázat, viš? Ať má radost.“
„Otočte, dědečku,“ prosil Prokop trna. Následoval hamburský přistav, Kreml,
polárni krajina se severni záři, sopka Krakatau, Brooklynský most, Notre-Dame,
vesnice domorodců z Bornea; Darwinův domek v Downu, bezdrátová stanice v
Poldhu, ulice v Šanghaji, vodopády Viktoriiny, hrad Pernštýn, petrolejové věže
v Baku. „A to je ten výbuch v Grottup,“ vysvětloval stařik; na obrázku se
válely kotouče růžového dýmu vržené až do nadhlavniku sirově žlutým plamenem;
v dýmu i plamenech nemožně visela roztrhaná lidská těla. „Zahynulo při něm
přes pět tisic lidi. Bylo to veliké neštěsti,“ vzdychl dědeček. „A to je
posledni obrázek. Tak co, viděl jsi svět?“
„Neviděl,“ bručel Prokop omámen.
Starý pokýval zklamaně hlavou. „Ty chceš vidět přiliš mnoho. Musiš být dlouho
živ.“ Sfoukl lampičku v kukátku a brumlaje pomalu stahoval plachtu. „Sedni si
na kozlik, pojedeme.“ Sejmul pytel, kterým byl přikryt konik, a položil jej
Prokopovi na ramena. „Aby ti nebyla zima,“ povidal sedaje k němu, vzal do ruky
opratě a tichounce hvizdl. Konik se dal v mirný klus. „Hý! Nono va-lášku,“
zazpival děda.
Mijela alej břiz a jeřabin, chalupy přikryté duchnou mlhy, kraj spici a
pokojný. „Dědečku,“ vydralo se z Prokopa, „proč se mi to vše stalo?“
„Cože?“
„Proč mne potkalo tolik věci?“
Starý přemýšlel. „To se jen zdá,“ povidal konečně. „Co člověka potkává,
vycházi z něho. To se jen tak z tebe odmotává jako z klubka.“
„To neni pravda,“ protestoval Prokop. „Proč jsem potkal princeznu? Dědečku,
vy… vy mne možná znáte. Vždyť já jsem hledal… tu jinou, že? A přece to přišlo
– proč? Tak řekněte!“
Stařik přemital žmoulaje měkkými rty. „To byla tvá pýcha,“ řekl pomalu. „To
tak někdy na člověka přijde, ani nevi jak, ale bylo to v něm. A začne kolem
sebe máchat –“ Ukazoval to bičem, až se konik polekal a začal uhánět. „Prr,
copak? copak?“ zavolal tenkým hláskem na koně. „Vidiš, zrovna tak to je, když
sebou mladý člověk házi; všechno se s nim splaši. A ono neni potřeba dělat
velké kousky. Seď a dávej pozor na cestu; taky dojedeš.“
„Dědečku,“ žaloval Prokop mhouře bolesti oči, „jednal jsem špatně?“
„Špatně nešpatně,“ děl starý rozvážně. „Lidem jsi ubližil. S rozumem bys to
nedělal, musi být rozum; a člověk musi myslet, k čemu je každá věc. Třeba…
můžeš stovkou zapálit, nebo zaplatit, co jsi dlužen; když zapáliš, je to jako
větši na pohled, ale… Stejně to máš se ženskými,“ dodal neočekávaně.
„Jednal jsem špatně?“
„Cože?“
„Byl jsem zlý?“
„… Nebylo v tobě čisto. Člověk… má vic myslet nežli citit. A ty jsi se hrnul
do všeho jako střelený.“
„Dědečku, to dělal Krakatit.“
„Cože?“
„Já… jsem udělal vynález – a z toho –“
„Kdyby to nebylo v tobě, nebylo by to v tvém vynálezu. Všecko dělá člověk sám
ze sebe. Počkej, teď přemýšlej; teď mysli a vzpomeň si, z čeho je ten tvůj
vynález a jak se dělá. Dobře si to rozvaž a pak teprve řekni, co viš. Hý,
nonono pšš!“
Vozik drkotal po chatrné silnici; bilý valášek horlivě pletl nohama natřásaným
a starožitným klusem; světlo tančilo po zemi, po stromech, po kameni, dědeček
poskakoval na kozliku a tichounce si pozpěvoval. Prokop si tvrdě přemnul čelo.
„Dědečku,“ zašeptal.
„Nu?“
„Já už to nevim!“
„Copak?“
„Já… já už nevim,… jak… se má… dělat… Krakatit!“
„Tak vidiš,“ děl starý spokojeně. „Přece jen jsi něco našel.“


LIV.

Prokopovi bylo, jako by jeli mirnou krajinou jeho dětstvi; ale bylo přiliš
mlhy, a světélko dosahovalo stěži po kraj cesty mžikavými kmity; po obou
stranách silnice pak byl svět neznámý a zamlklý.
„Hohohot,“ ozval se děda, a konik zajel ze silnice rovnou do toho zastřeného,
němého světa. Kola se bořila do měkké trávy; Prokop rozeznával nizký úval, na
obou stranách bezlisté háje a spanilá loučka mezi nimi. „Prrr,“ křikl starý a
pomalu slézal z kozliku. „Vstávej,“ povidal, „tak už jsme tady.“ Zvolna
odepinal postraňky. „Viš, sem na nás nikdo nepřijde.“
„Kdo?“
„… Četnici. Pořádek být musi… ale oni vždycky chtěji já nevim jaké papiry… a
povoleni… a odkud, a kam… Já se v tom ani nevyznám.“ Vypřahal koně a domlouval
mu tiše: „I mlč, dostaneš kousek chleba.“
Prokop, zdřevěnělý jizdou, sestoupil z kozliku. „Kde to jsme?“
„Tady, co je ta bouda,“ děl starý neurčitě. „Vyspiš se z toho, a bude to.“
Sejmul z oje lucernu a posvitil na prkennou boudičku, byl to senik či co, ale
bylo to staroučké, chatrné a nakloněné. „A já udělám oheň,“ řekl zpěvavě, „a
uvařim ti čaj, a až se vypotiš, bude ti zase dobře.“ Zabalil Prokopa do pytle
a postavil před něj svitilnu. „Počkej, co donesu dřivi. Sedni si tady.“ Užuž
šel, ale něco ho napadlo; zajel rukou do kapsy a dival se tázavě na Prokopa.
„Copak, dědečku?“
„Já… nevim… ale kdybys chtěl… Já jsem taky planetář.“ Vylovil ruku z kapsy a
ukázal: mezi prsty mu vykoukla bilá myška s rubinovýma očkama. „Já vim,“
zažvatlal rychle, „ty tomu nevěřiš, ale… ta myška je moc hezká – Chtěl bys?“
„Chci.“
„To je dobře,“ zaradoval se starý. „Š-š-š ma-lá, hop!“ Otevřel dlaň, a bilá
myška mu hbitě vyběhla po rukávě na rameno, čichla mu jemně k chlupatému uchu
a schovala se v jeho limci.
„Ta je krásná,“ vydechl Prokop.
Stařik zazářil. „Počkej, co umi,“ a už běžel k voziku, hrabal v něm a vracel
se s krabici plnou narovnaných listků. Zatřepal krabičkou a vyjevil
rozsvětlená očka do prázdna. „Ukaž, myško, ukaž mu jeho lásku.“ Hvizdl mezi
zuby jako netopýr. Myška vyskočila, sjela mu po rukávě a hopla na krabici;
Prokop bez dechu sledoval jeji růžové tlapičky, jak hledaji mezi listky;
uchopila jeden do zoubků a chtěla jej vytáhnout; jaksi nešel ven, i zatřepala
hlavou a popadla hnedle sousedni; povytáhla jej, sedla na bobek a hryzala si
malinké drápky.
„Tak to je tvá láska,“ šeptal starý nadšeně. „Vem si ji.“
Prokop vyňal vysunutý listek a sklonil se rychle k světlu. Byla to fotografie
děvčete… toho s rozpoutanými vlasy; má obnažen překrásný prs, a tady ty
náruživé, bezedné oči – Prokop ji poznal. „Dědečku,“ zasténal, „to neni ona!“
„Ukaž,“ podivil se starý a vzal mu obrázek z ruky. „A-a, to je škoda,“ broukal
litostivě. „Taková slečna! Lala, Lilitko, to neni ona, nanana ks ks ma-lá!“
Zastrčil obrázek a zas tak tichounce zapištěl. Myška se ohlédla rubinovou
zorničkou, popadla zas tamten listek do zubů a škubala hlavou; ne, nešlo to;
vyňala sousedni a začala se podrbávat.
Prokop se chopil obrázku; byla to Anči, venkovský snimek; nevi co s rukama, má
nedělni šaty a tak tu pěkně a hloupě stoji – „To neni ona,“ šeptal Prokop.
Děda mu vzal obrázek, pohladil jej a jako by mu něco povidal; pohlédl
nespokojeně, smutně na Prokopa a zas tak tenince piskl.
„Zlobite se?“ ptal se Prokop nesměle.
Starý neřekl nic a zamyšleně hleděl na myšku. Znovu se pokoušela vyjmout ten
zakleslý listek; ne, neni možno; otřepala se a vytáhla cip sousedniho. Byl to
obrázek princezny. Prokop zaúpěl a pustil jej na zem.
Starý se mlčky shýbl a zvedl obrázek.
„Já sám, já sám,“ chraptěl Prokop a hnal se rukou ke krabici. Děda mu zadržel
ruku: „To se nesmi!“
„Ale tam… tam je ona,“ drtil Prokop, „tam je ta pravá!“
„A-a, tam jsou všichni lidé,“ řekl starý a hladil svou krabici. „Teď dostaneš
planetu.“ Zasykl tiše, myška mu vyklouzla z rukávu, vytáhla zelený listek a
zas byla ta tam, jako střela; patrně ji Prokop poplašil. „Tak si to přečti,“
povidal stařik zaviraje pečlivě krabici. „Já zatim přinesu rošti; a už se
netrap.“ Pohladil konika, uložil krabici na dně vozu a zamiřil k háji. Jeho
světlý režný kabát se mihal ve tmě; valášek ho sledoval pohledem, pohodil
hlavou a pustil se za nim. „Ihaha,“ bylo slyšet zpivat dědečka, „ty chceš jit
se mnou? A-a, vida ho! Hoty, hotyhot, ma-lý!“
Zapadli v mlze, a Prokop si vzpomněl na zelený listek. „Vaše planeta,“ četl u
blikavého plaminku. „Jste člověk šlechetný, srdce dobrého a ve svém povoláni
nad jiné učený. Bude vám mnoho protivenstvi vytrpěti; ale budete-li se
střežiti prudkosti a vysokomyslnosti, dosáhnete vážnosti u svých sousedů a
vynikajiciho postaveni. Mnoho ztratite, ale později odměněn budete. Vaše
nešťastné dny jsou úterý a pátek. Saturn conj. b. b. Martis. DEO gratias.“
Dědeček se vynořil ze tmy s náruči plnou větviček a za nim bilá hlava koně.
„Tak co,“ šeptal napjatě a s jakýmsi autorským ostychem, „četl jsi? Je planeta
dobrá?“
„Je, dědečku.“
„Tak vidiš,“ oddychl si stařik uspokojen. „Všechno dopadne dobře. Nu
chválabohu, jen když je to tak.“ Složil hromadu rošti a radostně brebentě
rozžehl před boudou ohniček; zas něco kutil ve voze, přinesl kotlik a cupal
pro vodu. „Hned, hned to bude,“ brumlal horlivě. „Vař se, vař, máme tu hosta.“
Pobihal jako vzrušená hospodyňka; hned tu byl s chlebem a čichaje rozkoši
rozbaloval kousek selské slaniny. „A sůl, sůl,“ pleskl se do čela a zas běžel
k vozu. Konečně se uvelebil u ohnička, dal Prokopovi větši dil a sám pomalu
žmoulal každé sousto. Prokopovi šel do oči kouř či co, slzel a jedl; a dědeček
každé druhé sousto podával konikovi, který nad nim skláněl svou ozářenou
lysinu. A teď ho pojednou Prokop poznal závojem slz: vždyť je to ta stará,
vrásčitá tvář, kterou vždycky vidal na dřevěném stropě své laboratoře! Co se
na ni nadival usinaje! a ráno, když procitl, už nebyla k poznáni, a byly to
jen suky a léta a vlhkost a prach –
Dědeček se usmál. „Chutnalo ti? A-a, už zas se kaboni! Ale, ale!“ Naklonil se
nad kotlik. „Už se to vaři.“ Zvedl se s námahou a belhal se k vozu; za chvilku
tu byl s hrnéčky. „Na, podrž si to.“ Prokop si vzal hrnéček; byly na něm
namalovány pomněnky věnčici zlaté jméno „Ludmila“. Četl to dvacetkrát, a
vyhrkly mu slzy. „Dědečku,“ šeptal, „to… je… jeji jméno?“
Stařik se na něho dival smutnýma, vlidnýma očima. „Abys to teda věděl,“ řekl
tiše, „je.“
„A… najdu ji někdy?“
Dědeček neřekl nic, jen rychle zamžikal. „Ukaž,“ ozval se nejistě, „já ti
naleju.“
Třesouci se rukou nastavil Prokop hrnéček; a starý mu naléval opatrně tmavého
čaje. „Pij,“ řekl měkce, „pokud je to teplé.“
„Dě-dě-děkuju,“ vzlykal Prokop a upijel trpkého odvaru.
Starý si zamyšleně hladil dlouhé vlásky. „Je to hořké,“ povidal pomalu, „tuze
hořké, viď? Nechtěl bys kousek cukru?“
Prokop zavrtěl hlavou, sviralo ho to v ústech hořkosti slz, ale v prsou se mu
rozlévalo dobrodějné teplo.
Stařik hlasitě srkal ze svého hrnéčku. „Tak se podivej,“ řekl, aby něco
zamluvil, „co já tu mám namalováno.“ Podal mu svůj hrnéček; byla na něm kotva,
srdce a křiž. „To je vira, láska a naděje. Tak už neplač.“ Stál nad ohněm s
rukama sepjatýma. „Milý, milý,“ mluvil tiše, „už neuděláš to nejvyšši a
nevydáš všechno. Chtěl jsi se roztrhnout samou silou; a zůstaneš celý, a
nespasiš svět ani jej nerozbiješ. Mnoho v tobě zůstane zavřeno jako v kameni
oheň; tak dobrá, je to obětováno. Chtěl jsi dělat přiliš veliké věci, a budeš
dělat věci malé. Tak je to dobře.“
Prokop klečel před ohněm a netroufal si zvednouti oči; věděl nyni, že k němu
mluvi Bůh Otec.
„Tak je to dobře,“ šeptal.
„Tak je to dobře. Uděláš věci dobré lidem. Kdo mysli na nejvyšši, odvrátil oči
od lidi. Za to jim budeš sloužit.“
„Tak je to dobře,“ vydechl Prokop na kolenou.
„Nu tak vidiš,“ řekl dědeček potěšen a usedl na bobek. „Koukej, načpak je ten
tvůj – jak řikáš tomu vynálezu?“
Prokop zvedl hlavu. „Já… jsem už zapomněl.“
„To je jedno,“ těšil ho starý. „Přijdeš zas na jiné věci. Počkej, co jsem
chtěl řici? Aha. Načpak takový velký výbuch? Ještě tim někomu ubližiš. Ale
hledej a zkoumej; třeba najdeš… no třeba takové pf pf pf,“ ukazoval dědeček
pšukaje měkkými tvářemi, „viš? aby to dělalo jenom puf puf… a pohánělo to
nějakou věc, aby se lidem lip pracovalo. Rozumiš?“
„Vy myslite,“ mručel Prokop, „nějaký laciný pohon, ne?“
„Laciný, laciný,“ souhlasil starý radostně. „Aby to dalo hodně užitku. A aby
to taky svitilo, a hřálo, viš?“
„Počkejte,“ přemýšlel Prokop, „já nevim – To by se muselo zkusit… z jiného
konce.“
„No právě. Zkusit to z jiného konce, a je to. Nu tak vidiš, hned máš co dělat.
Ale teď toho nech, zitra je taky den. Já ti ustelu.“ Zvedl se a cupal k vozu.
„Ható hot, ma-lý,“ zazpival, „půjdeme spat.“ Vracel se s hubenou peřinkou pod
hlavu. „Tak pojď,“ řekl, vzal lucernu a vlezl do prkenné kůlničky. „Nu, slámy
je tu dost,“ broukal ustýlaje, „pro všechny tři. Chválabohu.“
Prokop usedl na slámu. „Dědečku,“ vyhrkl vyjeven, „podivejte se!“
„Copak?“
„Tady, na prknech.“ Na každém prkně kůlny bylo napsáno křidou velké pismeno; a
Prokop četl v blikajicich kmitech lucerny: K..R..A…..K..A..T..
„To nic, to nic,“ zabreptal dědeček konejšivě a honem stiral pismena čepici.
„Už je to pryč. Jen si lehni, já tě přikryju pytlem. Tak.“
Postavil se ve dveřich: „Dadada ma-lý,“ zazpival třesavě; a konik strčil do
dveři své pěkné střibrné čelo a otiral se hubou o stařečkův kabát. „Tak jdi,
jdi dovnitř,“ kázal mu starý, „a lehni.“
Valášek vešel, hrabal kopyty u druhé stěny a poklekl. „Já si pak lehnu mezi
vás,“ řekl dědeček; „on ti tu koniček nadýchá, a bude ti teplo, tak.“
Sedl si potichu ve dveřich; za nim ještě řeřavěl do tmy zhasinajici ohýnek, a
bylo vidět sladké, moudré oči koňovy, jak se po něm oddaně toči; a starý si
něco šeptal, pobroukával a kýval hlavou.
Prokopovi se sviraly oči mrazivou něžnosti. Vždyť je to… vždyť je to můj
nebožtik tatinek, napadlo ho; bože, jak zestárl! má už takový tenký oškubaný
krček –
„Prokope, spiš?“ zašeptal starý.
„Nespim,“ odpověděl Prokop chvěje se láskou.
Tu počal dědeček měkce prozpěvovat divnou a tichou piseň: „Lalala hou, dadada
pán, binkili bunkili hou ta ta…“
Prokop konečně usnul pokojným a posilujicim spánkem beze snů.
EOT;
}
