<?php

/*
 * Dictionary structure :
 * 
 *      array(
 *          excluded => array(),
 *          modifiers => array(),
 *          units => array(),
 *          months => array(),
 *          numbers => array(),
 *          instruments => array(),
 *          keywords => array(),
 *          keywordsTranslation => array(),
 *          restoTranslation => array()
 *      )
 * 
 * IMPORTANT : all keys and values must be in 7bits lower case
 * (i.e. no accents) except for values from 'keywordsTranslation' and 'restoTranslation arrays
 * 
 */
return array(
    /*
     * List of words in the query that are
     * considered as 'noise' for the query analysis
     * and thus excluded from the analysis
     */
    'excluded' => array(
        'image',
        'images',
        'acquise',
        'acquises',
        'comprise',
        'comprises',
        'couverture',
        'aire',
        'zone',
        'ayant'
    ),
    /*
     * Modifiers
     * 
     * Valid modifiers values are
     *  - with
     *  - witout
     *  - less
     *  - greater
     *  - and
     * 
     * For each entry 
     *   - the key (left side) is what the user types 
     *   - the value (right side) is the equivalent modifier
     */
    'modifiers' => array(
        'avant' => 'before',
        'apres' => 'after',
        'entre' => 'between',
        'de' => 'between',
        'a' => 'and',
        'contenant' => 'with',
        'avec' => 'with',
        'sans' => 'without',
        'pas' => 'without',
        'moins' => 'lesser',
        'inferieur' => 'lesser',
        'inferieure' => 'lesser',
        'plus' => 'greater',
        'superieur' => 'greater',
        'superieure' => 'greater',
        'egal' => 'equal',
        'egale' => 'equal',
        'egaux' => 'equal',
        'et' => 'and',
        'depuis' => 'since',
        'dernier' => 'last',
        'derniers' => 'last',
        'derniere' => 'last',
        'dernieres' => 'last',
        'aujourd' => 'today',
        'hier' => 'yesterday'
    ),
    /*
     * Units
     * 
     * For each entry 
     *   - the key (left side) is what the user types
     *   - the value (right side) is the equivalent unit
     * 
     */
    'units' => array(
        'm' => 'm',
        'metre' => 'm',
        'metres' => 'm',
        'km' => 'km',
        'kilometre' => 'km',
        'kilometres' => 'km',
        'pourcent' => '%',
        'pourcents' => '%',
        'pourcentage' => '%',
        '%' => '%',
        'jour' => 'days',
        'jours' => 'days',
        'mois' => 'months',
        'an' => 'years',
        'ans' => 'years',
        'annee' => 'years',
        'annees' => 'years'
    ),
    /*
     * Numbers
     * 
     * For each entry 
     *   - the key (left side) is the textual number
     *   - the value (right side) is number
     * 
     */
    'numbers' => array(
        'un' => '1',
        'deux' => '2',
        'trois' => '3',
        'quatre' => '4',
        'cinq' => '5',
        'six' => '6',
        'sept' => '7',
        'huit' => '8',
        'neuf' => '9',
        'dix' => '10',
        'cent' => '100',
        'mille' => '1000'
    ),
    /*
     * Months
     * 
     * For each entry 
     *   - the key (left side) is the month
     *   - the value (right side) is the equivalent
     *     month number (from 01 to 12)
     * 
     */
    'months' => array(
        'janvier' => '01',
        'fevrier' => '02',
        'mars' => '03',
        'avril' => '04',
        'mai' => '05',
        'juin' => '06',
        'juillet' => '07',
        'aout' => '08',
        'septembre' => '09',
        'octobre' => '10',
        'novembre' => '11',
        'decembre' => '12',
    ),
    /*
     * Quantities
     * 
     * Quantity is the entity on which apply a comparaison modifier
     * 
     *  e.g.
     *      "resolution   lesser    than 10  meters"
     *       <quantity> <modifier>           <units>
     * 
     */
    'quantities' => array(
        'resolution' => 'resolution',
        'orbite' => 'orbit',
        'nuage' => 'cloud',
        'nuageuse' => 'cloud'
    ),
    /*
     * Keywords
     * 
     * For each entry 
     *   - the key (left side) is what the user types
     *   - the value (right side) is the equivalent value
     *     stored within the database (keywords column)
     * 
     */
    'keywords' => array(
        'continent' => array(
            'europe' => 'europe',
            'oceanie' => 'oceania',
            'asie' => 'asia',
            'sept mers' => 'seven seas (open ocean)',
            'afrique' => 'africa',
            'antarctique' => 'antarctica',
            'amerique du nord' => 'north america',
            'amerique du sud' => 'south america'
        ),
        'country' => array(
            'afghanistan' => 'afghanistan',
            'albanie' => 'albania',
            'algerie' => 'algeria',
            'angola' => 'angola',
            'antarctique' => 'antarctica',
            'argentine' => 'argentina',
            'armenie' => 'armenia',
            'australie' => 'australia',
            'autriche' => 'austria',
            'azerbaidjan' => 'azerbaijan',
            'bahamas' => 'bahamas',
            'bangladesh' => 'bangladesh',
            'bielorussie' => 'belarus',
            'belgique' => 'belgium',
            'belize' => 'belize',
            'benin' => 'benin',
            'bhoutan' => 'bhutan',
            'bolivie' => 'bolivia',
            'bosnie herzegovine' => 'bosnia and herzegovina',
            'botswana' => 'botswana',
            'bresil' => 'brazil',
            'brunei' => 'brunei',
            'bulgarie' => 'bulgaria',
            'burkina faso' => 'burkina faso',
            'burundi' => 'burundi',
            'cambodge' => 'cambodia',
            'cameroon' => 'cameroon',
            'canada' => 'canada',
            'republique centre africaine' => 'central african republic',
            'tchad' => 'chad',
            'chili' => 'chile',
            'chine' => 'china',
            'colombie' => 'colombia',
            'congo' => 'congo',
            'congo' => 'congo',
            'costa rica' => 'costa rica',
            'croatie' => 'croatia',
            'cuba' => 'cuba',
            'chypre' => 'cyprus',
            'republique tcheque' => 'czech republic',
            'danemark' => 'denmark',
            'djibouti' => 'djibouti',
            'republique dominicaine' => 'dominican republic',
            'equateur' => 'ecuador',
            'egypte' => 'egypt',
            'salvador' => 'el salvador',
            'guinee equatorial' => 'equatorial guinea',
            'erythree' => 'eritrea',
            'estonie' => 'estonia',
            'ethiopie' => 'ethiopia',
            'malouines' => 'falkland islands',
            'fidji' => 'fiji',
            'finlande' => 'finland',
            'france' => 'france',
            'terres australes et antarctiques françaises' => 'french southern and antarctic lands',
            'gabon' => 'gabon',
            'gambie' => 'gambia',
            'georgie' => 'georgia',
            'allemagne' => 'germany',
            'ghana' => 'ghana',
            'grece' => 'greece',
            'groenland' => 'greenland',
            'guatemala' => 'guatemala',
            'guinee' => 'guinea',
            'guinee-bissau' => 'guinea-bissau',
            'guyana' => 'guyana',
            'haiti' => 'haiti',
            'honduras' => 'honduras',
            'hongrie' => 'hungary',
            'islande' => 'iceland',
            'inde' => 'india',
            'indonesie' => 'indonesia',
            'iran' => 'iran',
            'iraq' => 'iraq',
            'irelande' => 'ireland',
            'israel' => 'israel',
            'italie' => 'italy',
            'cote ivoire' => 'ivory coast',
            'jamaique' => 'jamaica',
            'japon' => 'japan',
            'jordanie' => 'jordan',
            'kazakhstan' => 'kazakhstan',
            'kenya' => 'kenya',
            'coree' => 'korea',
            'kosovo' => 'kosovo',
            'koweit' => 'kuwait',
            'kyrgyzstan' => 'kyrgyzstan',
            'laos' => 'laos',
            'lettonie' => 'latvia',
            'liban' => 'lebanon',
            'lesotho' => 'lesotho',
            'liberia' => 'liberia',
            'libye' => 'libya',
            'lithuanie' => 'lithuania',
            'luxembourg' => 'luxembourg',
            'macedoine' => 'macedonia',
            'madagascar' => 'madagascar',
            'malawi' => 'malawi',
            'malaisie' => 'malaysia',
            'mali' => 'mali',
            'mauritanie' => 'mauritania',
            'mexique' => 'mexico',
            'moldavie' => 'moldova',
            'mongolie' => 'mongolia',
            'montenegro' => 'montenegro',
            'maroc' => 'morocco',
            'mozambique' => 'mozambique',
            'myanmar' => 'myanmar',
            'namibie' => 'namibia',
            'nepal' => 'nepal',
            'hollande' => 'netherlands',
            'nouvelle caledonie' => 'new caledonia',
            'nouvelle zelande' => 'new zealand',
            'nicaragua' => 'nicaragua',
            'niger' => 'niger',
            'nigeria' => 'nigeria',
            'coree du nord' => 'north korea',
            'chypre du nord' => 'northern cyprus',
            'norvege' => 'norway',
            'oman' => 'oman',
            'pakistan' => 'pakistan',
            'palestine' => 'palestine',
            'panama' => 'panama',
            'papouasie nouvelle guinee' => 'papua new guinea',
            'paraguay' => 'paraguay',
            'perou' => 'peru',
            'philippines' => 'philippines',
            'pologne' => 'poland',
            'portugal' => 'portugal',
            'porto rico' => 'puerto rico',
            'qatar' => 'qatar',
            'roumanie' => 'romania',
            'russie' => 'russia',
            'rwanda' => 'rwanda',
            'arabie saoudite' => 'saudi arabia',
            'senegal' => 'senegal',
            'serbie' => 'serbia',
            'sierra leone' => 'sierra leone',
            'slovaquie' => 'slovakia',
            'slovenie' => 'slovenia',
            'salomon' => 'solomon islands',
            'somalie' => 'somalia',
            'somaliland' => 'somaliland',
            'afrique du sud' => 'south africa',
            'sud soudan' => 'south sudan',
            'espagne' => 'spain',
            'sri lanka' => 'sri lanka',
            'soudan' => 'sudan',
            'suriname' => 'suriname',
            'swaziland' => 'swaziland',
            'suede' => 'sweden',
            'suisse' => 'switzerland',
            'syrie' => 'syria',
            'taiwan' => 'taiwan',
            'tajikistan' => 'tajikistan',
            'tanzanie' => 'tanzania',
            'thailande' => 'thailand',
            'timor-leste' => 'timor-leste',
            'togo' => 'togo',
            'trinite et tobago' => 'trinidad and tobago',
            'tunisie' => 'tunisia',
            'turquie' => 'turkey',
            'turkmenistan' => 'turkmenistan',
            'uganda' => 'uganda',
            'ukraine' => 'ukraine',
            'emirats arabe unis' => 'united arab emirates',
            'angleterre' => 'united kingdom',
            'royaume uni' => 'united kingdom',
            'uk' => 'united kingdom',
            'etats unis' => 'united states',
            'usa' => 'united states',
            'uruguay' => 'uruguay',
            'ouzbekistan' => 'uzbekistan',
            'vanuatu' => 'vanuatu',
            'venezuela' => 'venezuela',
            'vietnam' => 'vietnam',
            'sahara occidental' => 'western sahara',
            'yemen' => 'yemen',
            'zambie' => 'zambia',
            'zimbabwe' => 'zimbabwe'
        ),
        'landuse' => array(
            'artificiel' => 'urban',
            'urbain' => 'urban',
            'ville' => 'urban',
            'cultive' => 'cultivated',
            'foret' => 'forest',
            'forets' => 'forest',
            'herbace' => 'herbaceous',
            'desert' => 'desert',
            'neige' => 'snow',
            'inondable' => 'flooded',
            'eau' => 'water'
        )
    ),
    /*
     * Keywords translation array
     * (should be empty for english dictionary)
     * 
     * For each entry 
     *   - the key (left side) is the keyword (lower case no accent)
     *   - the value (right side) is transaltion
     * 
     */
    'translation' => array(
        // continents
        'africa' => 'Afrique',
        'antarctica' => 'Antarctique',
        'asia' => 'Asie',
        'europe' => 'Europe',
        'oceania' => 'Océanie',
        'north america' => 'Amérique du Nord',
        'south america' => 'Amérique du Sud',
        'seven seas (open ocean)' => 'Sept mers',
        // countries
        'afghanistan' => 'Afghanistan',
        'albania' => 'Albanie',
        'algeria' => 'Algérie',
        'angola' => 'Angola',
        'antarctica' => 'Antarctique',
        'argentina' => 'Argentine',
        'armenia' => 'Arménie',
        'australia' => 'Australie',
        'austria' => 'Autriche',
        'azerbaijan' => 'Azerbaïdjan',
        'bahamas' => 'Bahamas',
        'bangladesh' => 'Bangladesh',
        'belarus' => 'Biélorussie',
        'belgium' => 'Belgique',
        'belize' => 'Belize',
        'benin' => 'Bénin',
        'bhutan' => 'Bhoutan',
        'bolivia' => 'Bolivie',
        'bosnia and herzegovina' => 'Bosnie-Herzégovine',
        'botswana' => 'Botswana',
        'brazil' => 'Brésil',
        'brunei' => 'Brunei',
        'bulgaria' => 'Bulgarie',
        'burkina faso' => 'Burkina Faso',
        'burundi' => 'Burundi',
        'cambodia' => 'Cambodge',
        'cameroon' => 'Cameroun',
        'canada' => 'Canada',
        'central african republic' => 'République centrafricaine',
        'chad' => 'Tchad',
        'chile' => 'Chili',
        'china' => 'Chine',
        'colombia' => 'Colombie',
        'congo' => 'Congo',
        'costa rica' => 'Costa Rica',
        'croatia' => 'Croatie',
        'cuba' => 'Cuba',
        'cyprus' => 'Chypre',
        'czech republic' => 'République tchèque',
        'denmark' => 'Danemark',
        'djibouti' => 'Djibouti',
        'dominican republic' => 'République Dominicaine',
        'ecuador' => 'Équateur',
        'egypt' => 'Egypte',
        'el salvador' => 'Salvador',
        'equatorial guinea' => 'Guinée équatoriale',
        'eritrea' => 'Erythrée',
        'estonia' => 'Estonie',
        'ethiopia' => 'Ethiopie',
        'falkland islands' => 'Malouines',
        'fiji' => 'Fidji',
        'finland' => 'Finlande',
        'france' => 'France',
        'french southern and antarctic lands' => 'Terres Australes et Antarctiques Françaises',
        'gabon' => 'Gabon',
        'gambia' => 'Gambie',
        'georgia' => 'Géorgie',
        'germany' => 'Allemagne',
        'ghana' => 'Ghana',
        'greece' => 'Grèce',
        'greenland' => 'Groenland',
        'guatemala' => 'Guatemala',
        'guinea' => 'Guinée',
        'guinea-bissau' => 'Guinée-Bissau',
        'guyana' => 'Guyane',
        'haiti' => 'Haïti',
        'honduras' => 'Honduras',
        'hungary' => 'Hongrie',
        'iceland' => 'Islande',
        'india' => 'Inde',
        'indonesia' => 'Indonésie',
        'iran' => 'Iran',
        'iraq' => 'Irak',
        'ireland' => 'Irlande',
        'israel' => 'Israël',
        'italy' => 'Italie',
        'ivory coast' => 'Côte d\'Ivoire',
        'jamaica' => 'Jamaïque',
        'japan' => 'Japon',
        'jordan' => 'Jordanie',
        'kazakhstan' => 'kazakhstan',
        'kenya' => 'Kenya',
        'korea' => 'Corée',
        'kosovo' => 'Kosovo',
        'kuwait' => 'Koweit',
        'kyrgyzstan' => 'Kirghizistan',
        'laos' => 'Laos',
        'latvia' => 'Lettonie',
        'lebanon' => 'Liban',
        'lesotho' => 'Lesotho',
        'liberia' => 'Libéria',
        'libya' => 'Libye',
        'lithuania' => 'Lituanie',
        'luxembourg' => 'Luxembourg',
        'macedonia' => 'Macédoine',
        'madagascar' => 'Madagascar',
        'malawi' => 'Malawi',
        'malaysia' => 'Malaisie',
        'mali' => 'Mali',
        'mauritania' => 'Mauritanie',
        'mexico' => 'Mexique',
        'moldova' => 'Moldova',
        'mongolia' => 'Mongolie',
        'montenegro' => 'Monténégro',
        'morocco' => 'Maroc',
        'mozambique' => 'Mozambique',
        'myanmar' => 'Myanmar',
        'namibia' => 'Namibie',
        'nepal' => 'Népal',
        'netherlands' => 'Pays-Bas',
        'new caledonia' => 'Nouvelle-Calédonie',
        'new zealand' => 'Nouvelle-Zélande',
        'nicaragua' => 'Nicaragua',
        'niger' => 'Niger',
        'nigeria' => 'Nigeria',
        'north korea' => 'Corée du Nord',
        'northern cyprus' => 'Chypre du Nord',
        'norway' => 'Norvège',
        'oman' => 'Oman',
        'pakistan' => 'Pakistan',
        'palestine' => 'Palestine',
        'panama' => 'Panama',
        'papua new guinea' => 'Papouasie-Nouvelle- Guinée',
        'paraguay' => 'Paraguay',
        'peru' => 'Pérou',
        'philippines' => 'Philippines',
        'poland' => 'Pologne',
        'portugal' => 'Portugal',
        'puerto rico' => 'Puerto Rico',
        'qatar' => 'Qatar',
        'romania' => 'Roumanie',
        'russia' => 'Russie',
        'rwanda' => 'Rwanda',
        'saudi arabia' => 'Arabie Saoudite',
        'senegal' => 'Sénégal',
        'serbia' => 'Serbie',
        'sierra leone' => 'Sierra leone',
        'slovakia' => 'Slovaquie',
        'slovenia' => 'Slovénie',
        'solomon islands' => 'Iles Salomon',
        'somalia' => 'Somalie',
        'somaliland' => 'Somaliland',
        'south africa' => 'Afrique du Sud',
        'south sudan' => 'Sud Soudan',
        'spain' => 'Espagne',
        'sri lanka' => 'Sri Lanka',
        'sudan' => 'Soudan',
        'suriname' => 'Surinam',
        'swaziland' => 'Swaziland',
        'sweden' => 'Suède',
        'switzerland' => 'Suisse',
        'syria' => 'Syrie',
        'taiwan' => 'Taiwan',
        'tajikistan' => 'Tadjikistan',
        'tanzania' => 'Tanzanie',
        'thailand' => 'Thaïlande',
        'timor-leste' => 'Timor-Leste',
        'togo' => 'Togo',
        'trinidad and tobago' => 'Trinidad et Tobago',
        'tunisia' => 'Tunisie',
        'turkey' => 'Turquie',
        'turkmenistan' => 'Turkménistan',
        'uganda' => 'Ouganda',
        'ukraine' => 'Ukraine',
        'united arab emirates' => 'Emirats Arabes Unis',
        'united kingdom' => 'Royaume-uni',
        'united states' => 'Etats-unis',
        'uruguay' => 'Uruguay',
        'uzbekistan' => 'Ouzbékistan',
        'vanuatu' => 'Vanuatu',
        'venezuela' => 'Venezuela',
        'vietnam' => 'Viêt-Nam',
        'western sahara' => 'Sahara Occidental',
        'yemen' => 'Yémen',
        'zambia' => 'Zambie',
        'zimbabwe' => 'Zimbabwe',
        // landuse
        'urban' => 'Urbain',
        'cultivated' => 'Cultivé',
        'flooded' => 'Inondable',
        'forest' => 'Forêt',
        'herbaceous' => 'Herbacé',
        'snow' => 'Neige',
        'water' => 'Eau',
        // RESTo application
        '_selfCollectionLink' => 'self',
        '_alternateCollectionLink' => 'alternate',
        '_firstCollectionLink' => 'first',
        '_lastCollectionLink' => 'last',
        '_nextCollectionLink' => 'next',
        '_previousCollectionLink' => 'previous',
        '_selfFeatureLink' => 'self',
        '_about' => 'A propos',
        '_close' => 'fermer',
        '_acquiredOn' => 'acquise en <b>{a:1}</b>',
        '_placeHolder' => 'Chercher - ex. {a:1}',
        '_query' => 'Filtres de recherche - {a:1}',
        '_notUnderstood' => 'Requête non comprise - aucun filtre de recherche n\'est appliqué',
        '_noResult' => 'Aucun résultat - essayez une autre recherche !',
        '_oneResult' => '1 résultat',
        '_multipleResult' => '{a:1} résultats',
        '_firstPage' => '<<',
        '_previousPage' => 'Précédent',
        '_nextPage' => 'Suivant',
        '_lastPage' => '>>',
        '_pagination' => '{a:1} à {a:2}',
        '_identifier' => 'Identifiant',
        '_resolution' => 'Résolution',
        '_startDate' => 'Début d\'acquisition',
        '_completionDate' => 'Fin d\'acquisition',
        '_viewMetadata' => 'Voir les métadonnées en {a:1}',
        '_viewMapshup' => 'Afficher sur une carte',
        '_viewMapshupFullResolution' => 'Afficher sur la carte',
        '_download' => 'Télécharger',
        '_keywords' => 'Mots clés',
        '_atomLink' => 'Lien ATOM pour {a:1}',
        '_htmlLink' => 'Lien HTML pour {a:1}',
        '_jsonLink' => 'Lien GeoJSON pour {a:1}',
        '_inLang' => 'Vous êtes en langue {a:1}',
        '_switchLang' => 'Passer en langue {a:1}',
        '_en' => 'anglaise',
        '_fr' => 'française',
        '_it' => 'italienne',
        '_de' => 'allemande'
    )
);