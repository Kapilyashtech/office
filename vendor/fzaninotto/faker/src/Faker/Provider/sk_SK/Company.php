<?php

namespace Faker\Provider\sk_SK;

class Company extends \Faker\Provider\Company {
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
		'{{lastName}}-{{lastName}}',
		'{{lastName}}, {{lastName}} and {{lastName}}',
	);

	protected static $catchPhraseWords = array(
		array(
			'Adaptivne', 'Automatické', 'Vyvážené', 'Obchodný-sústredený', 'centralizované', 'Cloned', 'kompatibilné', 'nastaviteľný', 'Cross-group', 'Cross-platform', 'zákaznika zamerané', 'Prispôsobiteľné', 'Decentralizované', 'De-inžinierstva', 'prenesenú', 'Digitálne', 'distribuované', 'Rôzne', 'Down veľkosti', 'Rozširený', 'Celopodnikové ', ' Ergonomická', 'Expanded', 'Rozširené', 'Plne konfigurovateľné', 'Funkcia na báze', 'Základný', 'Perspektivne', 'inovativne', 'integrované', 'Intuitivne', 'Inverzný', 'Povinne monitorovaná', 'Multi-prešitia', 'multi-laterálne', 'Viacvrstvová', 'Viacvrstvová', 'Sieťová', 'Objektovo založená', 'Open-architektúru', 'Open-source', 'Operativny', 'Optimalizované', 'Voliteľný', 'Organické', 'Organizovaná', 'Trvalé', 'Polarizované', 'Preventivne', 'Aktivne', 'Na zisk zameraná', 'Hlboká', 'programovateľný', 'progresivne', 'verejného kľúča', 'kvalita zamerané', 'reaktivne', 'Rekonštruované', 'Znižená', 'Právo veľké', 'robustné', 'Bezpečné', 'Jednoduchšie', 'Prepinanie', 'Synchronizované', 'synergický', 'spojil', 'tim-orientovaná', 'Univerzálne', 'Uživateľsky privetivý', 'Univerzálne', 'Virtuálne', 'Vizionárske',
		),
		array(
			'kontrola', 'analýzu', 'asymetrický', 'asynchrónne', 'pristup orientovaný', 'pozadi', 'na širku pásma, monitorovať', 'obojsmerná', 'rozštiepené', 'jasne myslenie', 'klient-driven', 'klient-server', 'koherentné', 'súdržnosti', 'kompozitné', 'kontextový', 'kontextovo založená', 'obsah na báze', 'oddaný', 'dopytom', 'učebný', 'riadiace', 'diskrétne', 'dynamická', 'posilnenie', 'zahŕňajúci', 'manažér', 'explicitné', 'vyžaruje', 'odolné proti chybám', 'popredia', 'čerstvé myslenia', 'Globálne', 'heuristický', 'homogénna', 'ľudských zdrojov', 'hybridný', 'pôsobivých', 'čiastkové', 'nehmotnej', 'interaktivny', 'stredné', 'miestna', 'logistické', 'maximálny', 'metodickú', 'kritické', 'mobil', 'modulárny', 'motivuje', 'multimediálny', 'multi-štát', 'multi-tasking', 'národný', 'založená na skutočných potrebách', 'neutrálny', 'objektovo orientovaný', 'optimálnu', 'optimalizácia', 'radikálne', 'v reálnom čase', 'vzájomná', 'regionálne', 'citlivý', 'škálovateľné', 'stredné', 'zameriavalo na hľadanie riešenia', 'stabilný', 'statické', 'systematické', 'systémové', 'systém-hodný', 'hmotná', 'terciárny', 'prechodné', 'jednotný', 'pridaná hodnota', 'dobre modulovaný',
		),
		array(
			'schopnosť', 'pristup', 'algoritmus', 'aliancie', 'analyzátor', 'aplikácie', 'pristup', 'architektúra', 'archiv', 'pole', 'postoj', 'referenčné', 'schopnosť', 'kapacita', 'výzva', 'okruh', 'spolupráca', 'zložitosť', 'koncept', 'konglomerát', 'pohotovostný', 'jadro', 'databáza', 'sklad dát', 'definicie', 'emulácia', 'kódovanie', 'šifrovanie', 'extranet', 'firmware', 'flexibilita', 'počasia', 'rám', 'rámec', 'funkcie', 'funkcie', 'hardware', 'help-desk', 'hierarchie', 'húb', 'vykonávanie', 'infraštruktúra', 'iniciativa', 'inštalácia', 'rozhranie', 'encyklopédia', 'pákový efekt', 'metodika', 'migrácia', 'model', 'moderátor', 'kontrola', 'moratórium', 'neurónové-siete', 'paradigma', 'paralelné', 'politika', 'portál', 'produkt', 'produktivita', 'projekt', 'projekcie', 'protokol', 'služba', 'softvér', 'riešenie', 'normalizácie', 'stratégia', 'štruktúra', 'úspech', 'nadstavba', 'pomoc', 'synergia', 'priepustnosť', 'časovom horizonte', 'sadu nástrojov', 'využitie', 'web', 'pracovná sila',
		),
	);

	protected static $bsWords = array(
		array(
			'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize',
		),
		array(
			'clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich',
		),
		array(
			'synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'webservices', 'methodologies',
		),
	);

	protected static $companySuffix = array('s.r.o.', 'a.s.', 'v.o.s.');

	/**
	 * @example 'Robust full-range hub'
	 */
	public function catchPhrase() {
		$result = array();
		foreach (static::$catchPhraseWords as &$word) {
			$result[] = static::randomElement($word);
		}

		return join($result, ' ');
	}

	/**
	 * @example 'integrate extensible convergence'
	 */
	public function bs() {
		$result = array();
		foreach (static::$bsWords as &$word) {
			$result[] = static::randomElement($word);
		}

		return join($result, ' ');
	}
}
