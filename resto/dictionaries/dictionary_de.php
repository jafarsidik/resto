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
        'bild',
        'bilde',
        'erworben'
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
        'vor' => 'before',
        'nach' => 'after',
        'zwischen' => 'between',
        'und' => 'and',
        'bis' => 'and',
        'mit' => 'with',
        'ohne' => 'without',
        'weniger' => 'lesser',
        'kleiner' => 'lesser',
        'mehr' => 'greater',
        'großer' => 'greater',
        'gleich' => 'equal',
        'und' => 'and',
        'seit' => 'since',
        'letzten' => 'last',
        'letztem' => 'last',
        'letzter' => 'last',
        'heute' => 'today',
        'gestern' => 'yesterday'
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
        'meter' => 'm',
        'km' => 'km',
        'kilometer' => 'km',
        '%' => '%',
        'tag' => 'days',
        'tagen' => 'days',
        'monat' => 'months',
        'monaten' => 'months',
        'jahr' => 'years',
        'jahren' => 'years'
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
        'ein' => '1',
        'eins' => '1',
        'einen' => '1',
        'einem' => '1',
        'zwei' => '2',
        'drei' => '3',
        'vier' => '4',
        'funf' => '5',
        'sechs' => '6',
        'sieben' => '7',
        'acht' => '8',
        'neun' => '9',
        'zehn' => '10',
        'cent' => '100',
        'tausend' => '1000'
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
        'januar' => '01',
        'februar' => '02',
        'marz' => '03',
        'april' => '04',
        'mai' => '05',
        'juni' => '06',
        'juli' => '07',
        'august' => '08',
        'september' => '09',
        'oktober' => '10',
        'november' => '11',
        'dezember' => '12',
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
        'auflosung' => 'resolution',
        'orbit' => 'orbit'
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
            'europa' => 'europe',
            'ozeanien' => 'oceania',
            'asien' => 'asia',
            'sieben meere' => 'seven seas (open ocean)',
            'afrika' => 'africa',
            'antarktika' => 'antarctica',
            'nordamerika' => 'north america',
            'sudamerika' => 'south america'
        ),
        'country' => array(
            'afghanistan' => 'afghanistan',
            'albanien' => 'albania',
            'algerien' => 'algeria',
            'angola' => 'angola',
            'antarktika' => 'antarctica',
            'argentinien' => 'argentina',
            'armenien' => 'armenia',
            'australien' => 'australia',
            'osterreich' => 'austria',
            'aserbaidschan' => 'azerbaijan',
            'bahamas' => 'bahamas',
            'bangladesch' => 'bangladesh',
            'weißrussland' => 'belarus',
            'belgien' => 'belgium',
            'belize' => 'belize',
            'benin' => 'benin',
            'bhutan' => 'bhutan',
            'bolivien' => 'bolivia',
            'bosnien und herzegowina' => 'bosnia and herzegovina',
            'botswana' => 'botswana',
            'brasilien' => 'brazil',
            'brunei' => 'brunei',
            'bulgarien' => 'bulgaria',
            'burkina faso' => 'burkina faso',
            'burundi' => 'burundi',
            'kambodscha' => 'cambodia',
            'kamerun' => 'cameroon',
            'kanada' => 'canada',
            'zentralafrikanische republik' => 'central african republic',
            'tschad' => 'chad',
            'chile' => 'chile',
            'china' => 'china',
            'kolumbien' => 'colombia',
            'kongo' => 'congo',
            'costa rica' => 'costa rica',
            'kroatien' => 'croatia',
            'kuba' => 'cuba',
            'zypern' => 'cyprus',
            'tschechische republik' => 'czech republic',
            'dänemark' => 'denmark',
            'dschibuti' => 'djibouti',
            'dominikanische republik' => 'dominican republic',
            'ecuador' => 'ecuador',
            'agypten' => 'egypt',
            'el salvador' => 'el salvador',
            'aquatorial guinea' => 'equatorial guinea',
            'eritrea' => 'eritrea',
            'estland' => 'estonia',
            'athiopien' => 'ethiopia',
            'falkland inseln' => 'falkland islands',
            'fidschi' => 'fiji',
            'finnland' => 'finland',
            'frankreich' => 'france',
            'franzosisch sod und antarktisgebiete' => 'french southern and antarctic lands',
            'gabon' => 'gabon',
            'gambia' => 'gambia',
            'georgien' => 'georgia',
            'deutschland' => 'germany',
            'ghana' => 'ghana',
            'griechenland' => 'greece',
            'gronland' => 'greenland',
            'guatemala' => 'guatemala',
            'guinea' => 'guinea',
            'guinea bissau' => 'guinea-bissau',
            'guyana' => 'guyana',
            'haiti' => 'haiti',
            'honduras' => 'honduras',
            'ungarn' => 'hungary',
            'island' => 'iceland',
            'indien' => 'india',
            'indonesien' => 'indonesia',
            'iran' => 'iran',
            'irak' => 'iraq',
            'irland' => 'ireland',
            'israel' => 'israel',
            'italien' => 'italy',
            'elfenbeinkuste' => 'ivory coast',
            'jamaika' => 'jamaica',
            'japan' => 'japan',
            'jordan' => 'jordan',
            'kasachstan' => 'kazakhstan',
            'kenia' => 'kenya',
            'korea' => 'korea',
            'kosovo' => 'kosovo',
            'kuwait' => 'kuwait',
            'kirgisistan' => 'kyrgyzstan',
            'laos' => 'laos',
            'lettland' => 'latvia',
            'libanon' => 'lebanon',
            'lesotho' => 'lesotho',
            'liberia' => 'liberia',
            'libyen' => 'libya',
            'litauen' => 'lithuania',
            'luxemburg' => 'luxembourg',
            'mazedonien' => 'macedonia',
            'madagaskar' => 'madagascar',
            'malawi' => 'malawi',
            'malaysia' => 'malaysia',
            'mali' => 'mali',
            'mauretanien' => 'mauritania',
            'mexiko' => 'mexico',
            'moldawien' => 'moldova',
            'mongolei' => 'mongolia',
            'montenegro' => 'montenegro',
            'marokko' => 'morocco',
            'mosambik' => 'mozambique',
            'myanmar' => 'myanmar',
            'namibia' => 'namibia',
            'nepal' => 'nepal',
            'niederlande' => 'netherlands',
            'neukaledonien' => 'new caledonia',
            'neuseeland' => 'new zealand',
            'nicaragua' => 'nicaragua',
            'niger' => 'niger',
            'nigeria' => 'nigeria',
            'nordkorea' => 'north korea',
            'nordzypern' => 'northern cyprus',
            'norwegen' => 'norway',
            'oman' => 'oman',
            'pakistan' => 'pakistan',
            'palastina' => 'palestine',
            'panama' => 'panama',
            'papua neuguinea' => 'papua new guinea',
            'paraguay' => 'paraguay',
            'peru' => 'peru',
            'philippinen' => 'philippines',
            'polen' => 'poland',
            'portugal' => 'portugal',
            'puerto rico' => 'puerto rico',
            'katar' => 'qatar',
            'rumänien' => 'romania',
            'russland' => 'russia',
            'ruanda' => 'rwanda',
            'saudi arabien' => 'saudi arabia',
            'senegal' => 'senegal',
            'serbien' => 'serbia',
            'sierra leone' => 'sierra leone',
            'slowakei' => 'slovakia',
            'slowenien' => 'slovenia',
            'salomon inseln' => 'solomon islands',
            'somalia' => 'somalia',
            'somali' => 'somaliland',
            'sudafrika' => 'south africa',
            'sud sudan' => 'south sudan',
            'spanien' => 'spain',
            'sri lanka' => 'sri lanka',
            'sudan' => 'sudan',
            'suriname' => 'suriname',
            'swaziland' => 'swaziland',
            'schweden' => 'sweden',
            'schweiz' => 'switzerland',
            'syrien' => 'syria',
            'taiwan' => 'taiwan',
            'tadschikistan' => 'tajikistan',
            'tansania' => 'tanzania',
            'thailand' => 'thailand',
            'timor leste' => 'timor-leste',
            'togo' => 'togo',
            'trinidad und tobago' => 'trinidad and tobago',
            'tunesien' => 'tunisia',
            'truthahn' => 'turkey',
            'turkmenistan' => 'turkmenistan',
            'uganda' => 'uganda',
            'ukraine' => 'ukraine',
            'vereinigte arabische emirate' => 'united arab emirates',
            'vereinigtes konigreich' => 'united kingdom',
            'vereinigte staaten' => 'united states',
            'uruguay' => 'uruguay',
            'usbekistan' => 'uzbekistan',
            'vanuatu' => 'vanuatu',
            'venezuela' => 'venezuela',
            'vietnam' => 'vietnam',
            'westsahara' => 'western sahara',
            'jemen' => 'yemen',
            'sambia' => 'zambia',
            'simbabwe' => 'zimbabwe'
        ),
        'landuse' => array(
            'stadt' => 'urban',
            'dorf' => 'urban',
            'ernte' => 'cultivated',
            'wald' => 'forest',
            'walder' => 'forest',
            'krautig' => 'herbaceous',
            'wuste' => 'desert',
            'schnee' => 'snow',
            'schwemmt' => 'flooded',
            'wasser' => 'water'
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
        'africa' => 'Afrika',
        'antarctica' => 'Antarktika',
        'asia' => 'Asien',
        'europe' => 'Europa',
        'oceania' => 'Ozeanien',
        'north america' => 'Nordamerika',
        'south america' => 'Südamerika',
        'seven seas (open ocean)' => 'Sieben Meere',
        // countries
        'afghanistan' => 'Afghanistan',
        'albania' => 'Albanien',
        'algeria' => 'Algerien',
        'angola' => 'Angola',
        'antarctica' => 'Antarktika',
        'argentina' => 'Argentinien',
        'armenia' => 'Armenien',
        'australia' => 'Australien',
        'austria' => 'Österreich',
        'azerbaijan' => 'Aserbaidschan',
        'bahamas' => 'Bahamas',
        'bangladesh' => 'Bangladesch',
        'belarus' => 'Weißrussland',
        'belgium' => 'Belgien',
        'belize' => 'Belize',
        'benin' => 'Benin',
        'bhutan' => 'Bhutan',
        'bolivia' => 'Bolivien',
        'bosnia and herzegovina' => 'Bosnien und Herzegowina',
        'botswana' => 'Botswana',
        'brazil' => 'Brasilien',
        'brunei' => 'Brunei',
        'bulgaria' => 'Bulgarien',
        'burkina faso' => 'Burkina Faso',
        'burundi' => 'Burundi',
        'cambodia' => 'Kambodscha',
        'cameroon' => 'Kamerun',
        'canada' => 'Kanada',
        'central african republic' => 'Zentralafrikanische Republik',
        'chad' => 'Tschad',
        'chile' => 'Chile',
        'china' => 'China',
        'colombia' => 'Kolumbien',
        'congo' => 'Kongo',
        'costa rica' => 'Costa Rica',
        'croatia' => 'Kroatien',
        'cuba' => 'Kuba',
        'cyprus' => 'Zypern',
        'czech republic' => 'Tschechische Republik',
        'denmark' => 'Dänemark',
        'djibouti' => 'Dschibuti',
        'dominican republic' => 'Dominikanische Republik',
        'ecuador' => 'Ecuador',
        'egypt' => 'Ägypten',
        'el salvador' => 'El Salvador',
        'equatorial guinea' => 'Äquatorial-Guinea',
        'eritrea' => 'Eritrea',
        'estonia' => 'Estland',
        'ethiopia' => 'Äthiopien',
        'falkland islands' => 'Falkland-Inseln',
        'fiji' => 'Fidschi',
        'finland' => 'Finnland',
        'france' => 'Frankreich',
        'french southern and antarctic lands' => 'Französisch Süd-und Antarktisgebiete',
        'gabon' => 'Gabon',
        'gambia' => 'Gambia',
        'georgia' => 'Georgien',
        'germany' => 'Deutschland',
        'ghana' => 'Ghana',
        'greece' => 'Griechenland',
        'greenland' => 'Grönland',
        'guatemala' => 'Guatemala',
        'guinea' => 'Guinea',
        'guinea-bissau' => 'Guinea-Bissau',
        'guyana' => 'Guyana',
        'haiti' => 'Haiti',
        'honduras' => 'Honduras',
        'hungary' => 'Ungarn',
        'iceland' => 'Island',
        'india' => 'Indien',
        'indonesia' => 'Indonesien',
        'iran' => 'Iran',
        'iraq' => 'Irak',
        'ireland' => 'Irland',
        'israel' => 'Israel',
        'italy' => 'Italien',
        'ivory coast' => 'Elfenbeinküste',
        'jamaica' => 'Jamaika',
        'japan' => 'Japan',
        'jordan' => 'Jordan',
        'kazakhstan' => 'kasachstan',
        'kenya' => 'Kenia',
        'korea' => 'Korea',
        'kosovo' => 'kosovo',
        'kuwait' => 'Kuwait',
        'kyrgyzstan' => 'kirgisistan',
        'laos' => 'Laos',
        'latvia' => 'Lettland',
        'lebanon' => 'Libanon',
        'lesotho' => 'Lesotho',
        'liberia' => 'Liberia',
        'libya' => 'Libyen',
        'lithuania' => 'Litauen',
        'luxembourg' => 'Luxemburg',
        'macedonia' => 'Mazedonien',
        'madagascar' => 'Madagaskar',
        'malawi' => 'Malawi',
        'malaysia' => 'Malaysia',
        'mali' => 'Mali',
        'mauritania' => 'Mauretanien',
        'mexico' => 'Mexiko',
        'moldova' => 'Moldawien',
        'mongolia' => 'Mongolei',
        'montenegro' => 'Montenegro',
        'morocco' => 'Marokko',
        'mozambique' => 'Mosambik',
        'myanmar' => 'Myanmar',
        'namibia' => 'Namibia',
        'nepal' => 'Nepal',
        'netherlands' => 'Niederlande',
        'new caledonia' => 'Neukaledonien',
        'new zealand' => 'Neuseeland',
        'nicaragua' => 'Nicaragua',
        'niger' => 'Niger',
        'nigeria' => 'Nigeria',
        'north korea' => 'Nordkorea',
        'northern cyprus' => 'Nordzypern',
        'norway' => 'Norwegen',
        'oman' => 'Oman',
        'pakistan' => 'Pakistan',
        'palestine' => 'Palästina',
        'panama' => 'Panama',
        'papua new guinea' => 'Papua-Neuguinea',
        'paraguay' => 'Paraguay',
        'peru' => 'Peru',
        'philippines' => 'Philippinen',
        'poland' => 'Polen',
        'portugal' => 'Portugal',
        'puerto rico' => 'Puerto Rico',
        'qatar' => 'Katar',
        'romania' => 'Rumänien',
        'russia' => 'Russland',
        'rwanda' => 'ruanda',
        'saudi arabia' => 'Saudi-Arabien',
        'senegal' => 'Senegal',
        'serbia' => 'Serbien',
        'sierra leone' => 'Sierra Leone',
        'slovakia' => 'Slowakei',
        'slovenia' => 'Slowenien',
        'solomon islands' => 'Salomon-Inseln',
        'somalia' => 'Somalia',
        'somaliland' => 'Somali',
        'south africa' => 'Südafrika',
        'south sudan' => 'Süd-Sudan',
        'spain' => 'Spanien',
        'sri lanka' => 'Sri Lanka',
        'sudan' => 'Sudan',
        'suriname' => 'Suriname',
        'swaziland' => 'Swaziland',
        'sweden' => 'Schweden',
        'switzerland' => 'Schweiz',
        'syria' => 'Syrien',
        'taiwan' => 'Taiwan',
        'tajikistan' => 'Tadschikistan',
        'tanzania' => 'Tansania',
        'thailand' => 'Thailand',
        'timor-leste' => 'Timor-Leste',
        'togo' => 'Togo',
        'trinidad and tobago' => 'Trinidad und Tobago',
        'tunisia' => 'Tunesien',
        'turkey' => 'Truthahn',
        'turkmenistan' => 'Turkmenistan',
        'uganda' => 'Uganda',
        'ukraine' => 'Ukraine',
        'united arab emirates' => 'Vereinigte Arabische Emirate',
        'united kingdom' => 'Vereinigtes Königreich',
        'united states' => 'Vereinigte Staaten',
        'uruguay' => 'Uruguay',
        'uzbekistan' => 'Usbekistan',
        'vanuatu' => 'Vanuatu',
        'venezuela' => 'Venezuela',
        'vietnam' => 'Vietnam',
        'western sahara' => 'Westsahara',
        'yemen' => 'Jemen',
        'zambia' => 'Sambia',
        'zimbabwe' => 'Simbabwe',
        // landuse
        'urban' => 'Stadt',
        'cultivated' => 'Ernte',
        'forest' => 'Wald',
        'herbaceous' => 'Krautig',
        'desert' => 'Wüste',
        'snow' => 'Schnee',
        'flooded' => 'Schwemmt',
        'water' => 'Wasser',
        // RESTo application
        '_selfCollectionLink' => 'self',
        '_alternateCollectionLink' => 'alternate',
        '_firstCollectionLink' => 'first',
        '_lastCollectionLink' => 'last',
        '_nextCollectionLink' => 'next',
        '_previousCollectionLink' => 'previous',
        '_selfFeatureLink' => 'self',
        '_about' => 'Über',
        '_close' => 'schließen',
        '_acquiredOn' => 'erworben am <b>{a:1}</b>',
        '_placeHolder' => 'Suche - zB. {a:1}',
        '_query' => 'Suchfilter - {a:1}',
        '_notUnderstood' => 'Anforderung nicht enthalten - keine Suchfilter angewandt wird',
        '_noResult' => 'Keine Ergebnisse - versuchen Sie einen anderen suchen!',
        '_oneResult' => '1 ergebnis',
        '_multipleResult' => '{a:1} ergebnisse',
        '_firstPage' => '<<',
        '_previousPage' => 'Früher',
        '_nextPage' => 'Nächste',
        '_lastPage' => '>>',
        '_pagination' => '{a:1} bis {a:2}',
        '_identifier' => 'Kennzeichnung',
        '_resolution' => 'Auflösung',
        '_startDate' => 'Akquisition start',
        '_completionDate' => 'Ende der Akquisition',
        '_viewMetadata' => 'Metadaten anzeigen in {a:1}',
        '_viewMapshup' => 'Suche auf der Karte',
        '_viewMapshupFullResolution' => 'Suche auf der Karte',
        '_download' => 'Herunterladen',
        '_keywords' => 'Stichworte',
        '_atomLink' => 'ATOM-Link für {a:1}',
        '_htmlLink' => 'HTML-Link für {a:1}',
        '_jsonLink' => 'GeoJSON-Link für {a:1}',
        '_inLang' => 'Sie sind in {a:1}',
        '_switchLang' => 'Zeigen auf {a:1}',
        '_en' => 'Englisch',
        '_fr' => 'Französisch',
        '_it' => 'Italienisch',
        '_de' => 'Deutscher'
    )
);