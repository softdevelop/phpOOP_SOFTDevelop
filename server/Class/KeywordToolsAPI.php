<?php

/**
 * Created by PhpStorm.
 * User: aleksa
 * Date: 12/16/15
 * Time: 11:51 AM
 */


/**
 * Created by PhpStorm.
 * User: aleksa
 * Date: 11/21/15
 * Time: 2:18 PM
 */
class KeywordToolsAPI
{



    public static $google = [
        "ad" => "Andorra (google.ad)",
        "ae" => "United Arab Emirates (google.ae)",
        "al" => "Albania (google.al)",
        "am" => "Armenia (google.am)",
        "as" => "American Samoa (google.as)",
        "at" => "Austria (google.at)",
        "az" => "Azerbaijan (google.az)",
        "ba" => "Bosnia and Herzegovina (google.ba)",
        "be" => "Belgium (google.be)",
        "bf" => "Burkina Faso (google.bf)",
        "bg" => "Bulgaria (google.bg)",
        "bi" => "Burundi (google.bi)",
        "bj" => "Benin (google.bj)",
        "bs" => "Bahamas (google.bs)",
        "bt" => "Bhutan (google.bt)",
        "by" => "Belarus (google.by)",
        "ca" => "Canada (google.ca)",
        "cat" => "Catalan Countries (google.cat)",
        "cd" => "Democratic Republic of the Congo (google.cd)",
        "cf" => "Central African Republic (google.cf)",
        "cg" => "Republic of the Congo (google.cg)",
        "ch" => "Switzerland (google.ch)",
        "ci" => "Ivory Coast (google.ci)",
        "cl" => "Chile (google.cl)",
        "cm" => "Cameroon (google.cm)",
        "cn" => "China (google.cn)",
        "ao" => "Angola (google.co.ao)",
        "bw" => "Botswana (google.co.bw)",
        "ck" => "Cook Islands (google.co.ck)",
        "cr" => "Costa Rica (google.co.cr)",
        "id" => "Indonesia (google.co.id)",
        "il" => "Israel (google.co.il)",
        "in" => "India (google.co.in)",
        "jp" => "Japan (google.co.jp)",
        "ke" => "Kenya (google.co.ke)",
        "kr" => "South Korea (google.co.kr)",
        "ls" => "Lesotho (google.co.ls)",
        "ma" => "Morocco (google.co.ma)",
        "mz" => "Mozambique (google.co.mz)",
        "nz" => "New Zealand (google.co.nz)",
        "th" => "Thailand (google.co.th)",
        "tz" => "Tanzania (google.co.tz)",
        "ug" => "Uganda (google.co.ug)",
        "uk" => "United Kingdom (google.co.uk)",
        "uz" => "Uzbekistan (google.co.uz)",
        "ve" => "Venezuela (google.co.ve)",
        "vi" => "United States Virgin Islands (google.co.vi)",
        "za" => "South Africa (google.co.za)",
        "zm" => "Zambia (google.co.zm)",
        "zw" => "Zimbabwe (google.co.zw)",
        "us" => "United States (google.com)",
        "af" => "Afghanistan (google.com.af)",
        "ag" => "Antigua and Barbuda (google.com.ag)",
        "ai" => "Anguilla (google.com.ai)",
        "ar" => "Argentina (google.com.ar)",
        "au" => "Australia (google.com.au)",
        "bd" => "Bangladesh (google.com.bd)",
        "bh" => "Bahrain (google.com.bh)",
        "bn" => "Brunei (google.com.bn)",
        "bo" => "Bolivia (google.com.bo)",
        "br" => "Brazil (google.com.br)",
        "bz" => "Belize (google.com.bz)",
        "co" => "Colombia (google.com.co)",
        "cu" => "Cuba (google.com.cu)",
        "cy" => "Cyprus (google.com.cy)",
        "do" => "Dominican Republic (google.com.do)",
        "ec" => "Ecuador (google.com.ec)",
        "eg" => "Egypt (google.com.eg)",
        "et" => "Ethiopia (google.com.et)",
        "fj" => "Fiji (google.com.fj)",
        "gh" => "Ghana (google.com.gh)",
        "gi" => "Gibraltar (google.com.gi)",
        "gt" => "Guatemala (google.com.gt)",
        "hk" => "Hong Kong (google.com.hk)",
        "jm" => "Jamaica (google.com.jm)",
        "kh" => "Cambodia (google.com.kh)",
        "kw" => "Kuwait (google.com.kw)",
        "lb" => "Lebanon (google.com.lb)",
        "ly" => "Libya (google.com.ly)",
        "mm" => "Burma (google.com.mm)",
        "mt" => "Malta (google.com.mt)",
        "mx" => "Mexico (google.com.mx)",
        "my" => "Malaysia (google.com.my)",
        "na" => "Namibia (google.com.na)",
        "nf" => "Norfolk Island (google.com.nf)",
        "ng" => "Nigeria (google.com.ng)",
        "ni" => "Nicaragua (google.com.ni)",
        "np" => "Nepal (google.com.np)",
        "om" => "Oman (google.com.om)",
        "pa" => "Panama (google.com.pa)",
        "pe" => "Peru (google.com.pe)",
        "pg" => "Papua New Guinea (google.com.pg)",
        "ph" => "Philippines (google.com.ph)",
        "pk" => "Pakistan (google.com.pk)",
        "pr" => "Puerto Rico (google.com.pr)",
        "py" => "Paraguay (google.com.py)",
        "qa" => "Qatar (google.com.qa)",
        "sa" => "Saudi Arabia (google.com.sa)",
        "sb" => "Solomon Islands (google.com.sb)",
        "sg" => "Singapore (google.com.sg)",
        "sl" => "Sierra Leone (google.com.sl)",
        "sv" => "El Salvador (google.com.sv)",
        "tj" => "Tajikistan (google.com.tj)",
        "tr" => "Turkey (google.com.tr)",
        "tw" => "Taiwan (google.com.tw)",
        "ua" => "Ukraine (google.com.ua)",
        "uy" => "Uruguay (google.com.uy)",
        "vc" => "Saint Vincent and the Grenadines (google.com.vc)",
        "vn" => "Vietnam (google.com.vn)",
        "cv" => "Cape Verde (google.cv)",
        "cz" => "Czech Republic (google.cz)",
        "de" => "Germany (google.de)",
        "dj" => "Djibouti (google.dj)",
        "dk" => "Denmark (google.dk)",
        "dm" => "Dominica (google.dm)",
        "dz" => "Algeria (google.dz)",
        "ee" => "Estonia (google.ee)",
        "es" => "Spain (google.es)",
        "fi" => "Finland (google.fi)",
        "fm" => "Federated States of Micronesia (google.fm)",
        "fr" => "France (google.fr)",
        "ga" => "Gabon (google.ga)",
        "ge" => "Georgia (google.ge)",
        "gg" => "Guernsey (google.gg)",
        "gl" => "Greenland (google.gl)",
        "gm" => "Gambia (google.gm)",
        "gp" => "Guadeloupe (google.gp)",
        "gr" => "Greece (google.gr)",
        "gy" => "Guyana (google.gy)",
        "hn" => "Honduras (google.hn)",
        "hr" => "Croatia (google.hr)",
        "ht" => "Haiti (google.ht)",
        "hu" => "Hungary (google.hu)",
        "ie" => "Ireland (google.ie)",
        "im" => "Isle of Man (google.im)",
        "iq" => "Iraq (google.iq)",
        "is" => "Iceland (google.is)",
        "it" => "Italy (google.it)",
        "je" => "Jersey (google.je)",
        "jo" => "Jordan (google.jo)",
        "kg" => "Kyrgyzstan (google.kg)",
        "ki" => "Kiribati (google.ki)",
        "kz" => "Kazakhstan (google.kz)",
        "la" => "Laos (google.la)",
        "li" => "Liechtenstein (google.li)",
        "lk" => "Sri Lanka (google.lk)",
        "lt" => "Lithuania (google.lt)",
        "lu" => "Luxembourg (google.lu)",
        "lv" => "Latvia (google.lv)",
        "md" => "Moldova (google.md)",
        "me" => "Montenegro (google.me)",
        "mg" => "Madagascar (google.mg)",
        "mk" => "Macedonia (google.mk)",
        "ml" => "Mali (google.ml)",
        "mn" => "Mongolia (google.mn)",
        "ms" => "Montserrat (google.ms)",
        "mu" => "Mauritius (google.mu)",
        "mv" => "Maldives (google.mv)",
        "mw" => "Malawi (google.mw)",
        "ne" => "Niger (google.ne)",
        "nl" => "Netherlands (google.nl)",
        "no" => "Norway (google.no)",
        "nr" => "Nauru (google.nr)",
        "nu" => "Niue (google.nu)",
        "pl" => "Poland (google.pl)",
        "pn" => "Pitcairn Islands (google.pn)",
        "ps" => "Palestine (google.ps)",
        "pt" => "Portugal (google.pt)",
        "ro" => "Romania (google.ro)",
        "rs" => "Serbia (google.rs)",
        "ru" => "Russia (google.ru)",
        "rw" => "Rwanda (google.rw)",
        "sc" => "Seychelles (google.sc)",
        "se" => "Sweden (google.se)",
        "sh" => "Saint Helena, Ascension and Tristan da Cunha (google.sh)",
        "si" => "Slovenia (google.si)",
        "sk" => "Slovakia (google.sk)",
        "sm" => "San Marino (google.sm)",
        "sn" => "Senegal (google.sn)",
        "so" => "Somalia (google.so)",
        "st" => "São Tomé and Príncipe (google.st)",
        "td" => "Chad (google.td)",
        "tg" => "Togo (google.tg)",
        "tk" => "Tokelau (google.tk)",
        "tl" => "Timor-Leste (google.tl)",
        "tm" => "Turkmenistan (google.tm)",
        "tn" => "Tunisia (google.tn)",
        "to" => "Tonga (google.to)",
        "tt" => "Trinidad and Tobago (google.tt)",
        "vg" => "British Virgin Islands (google.vg)",
        "vu" => "Vanuatu (google.vu)",
        "ws" => "Samoa (google.ws)"];

    public static $youtube = [
        "af"=>"Afghanistan (افغانستان)",
        "al"=>"Albania (Shqipëria)",
        "dz"=>"Algeria (الجزائر)",
        "as"=>"American Samoa (Amerika Sāmoa)",
        "ad"=>"Andorra",
        "ao"=>"Angola",
        "ai"=>"Anguilla",
        "aq"=>"Antarctica",
        "ag"=>"Antigua and Barbuda",
        "ar"=>"Argentina",
        "am"=>"Armenia (Hayastán)",
        "aw"=>"Aruba",
        "au"=>"Australia",
        "at"=>"Austria (Österreich)",
        "az"=>"Azerbaijan (Azərbaycan)",
        "bs"=>"Bahamas",
        "bh"=>"Bahrain (البحرين)",
        "bd"=>"Bangladesh (বাংলাদেশ)",
        "bb"=>"Barbados",
        "by"=>"Belarus (Беларусь)",
        "be"=>"Belgium (België)",
        "bz"=>"Belize",
        "bj"=>"Benin (Bénin)",
        "bm"=>"Bermuda",
        "bt"=>"Bhutan (འབྲུག་ཡུལ)",
        "bo"=>"Bolivia",
        "ba"=>"Bosnia and Herzegovina (Bosna i Hercegovina)",
        "bw"=>"Botswana",
        "bv"=>"Bouvet Island",
        "br"=>"Brazil (Brasil)",
        "io"=>"British Indian Ocean Territory",
        "bn"=>"Brunei (بروني)",
        "bg"=>"Bulgaria",
        "bf"=>"Burkina Faso",
        "bi"=>"Burundi",
        "kh"=>"Cambodia (Kampuchea)",
        "cm"=>"Cameroon (Cameroun)",
        "ca"=>"Canada",
        "cv"=>"Cape Verde (Cabo Verde)",
        "ky"=>"Cayman Islands",
        "cf"=>"Central African Republic (République Centrafricaine)",
        "td"=>"Chad (Tchad)",
        "cl"=>"Chile",
        "cn"=>"China (中国)",
        "cx"=>"Christmas Island",
        "cc"=>"Cocos (Keeling) Islands",
        "co"=>"Colombia",
        "km"=>"Comoros (جزر القمر)",
        "cg"=>"Congo",
        "cd"=>"Congo - Democratic Republic of",
        "ck"=>"Cook Islands",
        "cr"=>"Costa Rica",
        "ci"=>"Cote d'Ivoire",
        "hr"=>"Croatia (Hrvatska)",
        "cy"=>"Cyprus (Kypros)",
        "cz"=>"Czech Republic (Česká Republika)",
        "dk"=>"Denmark (Danmark)",
        "dj"=>"Djibouti (جيبوتي)",
        "dm"=>"Dominica",
        "do"=>"Dominican Republic (República Dominicana)",
        "tl"=>"Timor-Leste",
        "ec"=>"Ecuador",
        "eg"=>"Egypt (مصر)",
        "sv"=>"El Salvador",
        "gq"=>"Equatorial Guinea (Guinea Ecuatorial)",
        "er"=>"Eritrea (إرتريا)",
        "ee"=>"Estonia (Eesti)",
        "et"=>"Ethiopia (Ityop'ia)",
        "fk"=>"Falkland Islands (Islas Malvinas)",
        "fo"=>"Faroe Islands (Føroyar)",
        "fj"=>"Fiji",
        "fi"=>"Finland (Suomi)",
        "fr"=>"France",
        "gf"=>"French Guiana (Guyane)",
        "pf"=>"French Polynesia (Polynésie Française)",
        "tf"=>"French Southern Territories",
        "ga"=>"Gabon",
        "gm"=>"Gambia",
        "ge"=>"Georgia (Sak'art'velo)",
        "de"=>"Germany (Deutschland)",
        "gh"=>"Ghana",
        "gi"=>"Gibraltar",
        "gr"=>"Greece (Hellas)",
        "gl"=>"Greenland (Kalaallit Nunaat)",
        "gd"=>"Grenada",
        "gp"=>"Guadeloupe",
        "gu"=>"Guam (Guåhån)",
        "gt"=>"Guatemala",
        "gn"=>"Guinea (Guinée)",
        "gw"=>"Guinea-Bissau (Guiné-Bissau)",
        "gy"=>"Guyana",
        "ht"=>"Haiti (Haïti)",
        "hm"=>"Heard Island and McDonald Islands",
        "hn"=>"Honduras",
        "hk"=>"Hong Kong (香港)",
        "hu"=>"Hungary (Magyarország)",
        "is"=>"Iceland (Ísland)",
        "in"=>"India",
        "id"=>"Indonesia",
        "iq"=>"Iraq",
        "ie"=>"Ireland (Éire)",
        "il"=>"Israel (إسرائيل)",
        "it"=>"Italy (Italia)",
        "jm"=>"Jamaica",
        "jp"=>"Japan (日本)",
        "jo"=>"Jordan (الأردن)",
        "kz"=>"Kazakhstan (Қазақстан)",
        "ke"=>"Kenya",
        "ki"=>"Kiribati",
        "kw"=>"Kuwait (الكويت)",
        "kg"=>"Kyrgyzstan (Кыргызстан)",
        "la"=>"Laos (Lao)",
        "lv"=>"Latvia (Latvija)",
        "lb"=>"Lebanon (لبنان)",
        "ls"=>"Lesotho",
        "lr"=>"Liberia",
        "ly"=>"Libya",
        "li"=>"Liechtenstein",
        "lt"=>"Lithuania (Lietuva)",
        "lu"=>"Luxembourg (Lëtzebuerg)",
        "mo"=>"Macao",
        "mk"=>"Macedonia (Makedonija)",
        "mg"=>"Madagascar (Madagasikara)",
        "mw"=>"Malawi",
        "my"=>"Malaysia",
        "mv"=>"Maldives (Dhivehi Raajje)",
        "ml"=>"Mali",
        "mt"=>"Malta",
        "mh"=>"Marshall Islands",
        "mq"=>"Martinique",
        "mr"=>"Mauritania (Muritan)",
        "mu"=>"Mauritius (Maurice)",
        "yt"=>"Mayotte",
        "mx"=>"Mexico (México)",
        "fm"=>"Micronesia - Federated States of",
        "md"=>"Moldova",
        "mc"=>"Monaco",
        "mn"=>"Mongolia (Mongol Uls)",
        "ms"=>"Montserrat",
        "ma"=>"Morocco (Amerruk)",
        "mz"=>"Mozambique (Moçambique)",
        "na"=>"Namibia",
        "nr"=>"Nauru",
        "np"=>"Nepal (Nepāla)",
        "nl"=>"Netherlands (Nederland)",
        "nc"=>"New Caledonia (Nouvelle-Calédonie)",
        "nz"=>"New Zealand",
        "ni"=>"Nicaragua",
        "ne"=>"Niger",
        "ng"=>"Nigeria",
        "nu"=>"Niue",
        "nf"=>"Norfolk Island",
        "mp"=>"Northern Mariana Islands",
        "no"=>"Norway (Norge)",
        "om"=>"Oman (عُمان)",
        "pk"=>"Pakistan (پاکستان)",
        "pw"=>"Palau (Belau)",
        "ps"=>"West Bank",
        "pa"=>"Panama (Panamá)",
        "pg"=>"Papua New Guinea",
        "py"=>"Paraguay",
        "pe"=>"Peru (Perú)",
        "ph"=>"Philippines (Pilipinas)",
        "pn"=>"Pitcairn",
        "pl"=>"Poland (Polska)",
        "pt"=>"Portugal",
        "pr"=>"Puerto Rico",
        "qa"=>"Qatar (قطر)",
        "re"=>"Reunion (Réunion)",
        "ro"=>"Romania (România)",
        "ru"=>"Russia (Россия)",
        "rw"=>"Rwanda",
        "kn"=>"Saint Kitts and Nevis",
        "lc"=>"Saint Lucia",
        "vc"=>"Saint Vincent and the Grenadines",
        "ws"=>"Samoa",
        "sm"=>"San Marino",
        "st"=>"Sao Tome and Principe (São Tomé e Príncipe)",
        "sa"=>"Saudi Arabia (المملكة العربية السعودية)",
        "sn"=>"Senegal (Sénégal)",
        "sc"=>"Seychelles (Sesel)",
        "sl"=>"Sierra Leone",
        "sg"=>"Singapore",
        "sk"=>"Slovakia (Slovensko)",
        "si"=>"Slovenia (Slovenija)",
        "sb"=>"Solomon Islands",
        "so"=>"Somalia (Soomaaliya)",
        "za"=>"South Africa (Suid-Afrika)",
        "gs"=>"South Georgia and the South Sandwich Islands",
        "kr"=>"South Korea (한국)",
        "es"=>"Spain (España)",
        "lk"=>"Sri Lanka (Sri Lankā)",
        "sh"=>"Saint Helena",
        "pm"=>"Saint Pierre and Miquelon",
        "sr"=>"Suriname",
        "sj"=>"Svalbard and Jan Mayen",
        "sz"=>"Swaziland",
        "se"=>"Sweden (Sverige)",
        "ch"=>"Switzerland (Schweiz)",
        "tw"=>"Taiwan (中華民國)",
        "tj"=>"Tajikistan (Тоҷикистон)",
        "tz"=>"Tanzania",
        "th"=>"Thailand (ประเทศไทย)",
        "tg"=>"Togo",
        "tk"=>"Tokelau",
        "to"=>"Tonga",
        "tt"=>"Trinidad and Tobago",
        "tn"=>"Tunisia (Tunes)",
        "tr"=>"Turkey (Türkiye)",
        "tm"=>"Turkmenistan (Türkmenistan)",
        "tc"=>"Turks and Caicos Islands",
        "tv"=>"Tuvalu",
        "ug"=>"Uganda",
        "ua"=>"Ukraine (Україна)",
        "ae"=>"United Arab Emirates (الإمارات العربيّة المتّحدة)",
        "uk"=>"United Kingdom",
        "us"=>"United States",
        "um"=>"United States Minor Outlying Islands",
        "uy"=>"Uruguay (República Oriental del Uruguay)",
        "uz"=>"Uzbekistan (Ўзбекистон)",
        "vu"=>"Vanuatu",
        "va"=>"Holy See (Vatican City State) (Città del Vaticano)",
        "ve"=>"Venezuela",
        "vn"=>"Vietnam (Việt Nam)",
        "vg"=>"British Virgin Islands",
        "vi"=>"United States Virgin Islands",
        "wf"=>"Wallis and Futuna (Wallis-et-Futuna)",
        "eh"=>"Western Sahara",
        "ye"=>"Yemen (اليمن)",
        "zm"=>"Zambia",
        "zw"=>"Zimbabwe"];

    public static $bing = [
        "ar"=>"Argentina",
        "au"=>"Australia",
        "at"=>"Austria (Österreich)",
        "be"=>"Belgium (België)",
        "br"=>"Brazil (Brasil)",
        "ca"=>"Canada",
        "fr"=>"France",
        "de"=>"Germany (Deutschland)",
        "hk"=>"Hong Kong (香港)",
        "in"=>"India",
        "id"=>"Indonesia",
        "it"=>"Italy (Italia)",
        "jp"=>"Japan (日本)",
        "ko"=>"Korea (한국)",
        "my"=>"Malaysia",
        "mx"=>"Mexico (México)",
        "nl"=>"Netherlands (Nederland)",
        "nz"=>"New Zealand",
        "no"=>"Norway (Norge)",
        "cn"=>"People's Republic of China",
        "pl"=>"Poland (Polska)",
        "ph"=>"Republic of the Philippines",
        "ru"=>"Russia (Россия)",
        "xa"=>"Saudi Arabia (المملكة العربية السعودية)",
        "za"=>"South Africa (Suid-Afrika)",
        "es"=>"Spain (España)",
        "se"=>"Sweden (Sverige)",
        "ch"=>"Switzerland (Schweiz)",
        "tw"=>"Taiwan (中華民國)",
        "tr"=>"Turkey (Türkiye)",
        "gb"=>"United Kingdom",
        "us"=>"United States"];

    public static $appstore = [
        "al"=>"Albania (Shqipëria)",
        "dz"=>"Algeria (الجزائر)",
        "ao"=>"Angola",
        "ai"=>"Anguilla",
        "ag"=>"Antigua & Barbuda",
        "ar"=>"Argentina",
        "am"=>"Armenia (Hayastán)",
        "au"=>"Australia",
        "at"=>"Austria (Österreich)",
        "az"=>"Azerbaijan (Azərbaycan)",
        "bs"=>"Bahamas",
        "bh"=>"Bahrain (البحرين)",
        "bb"=>"Barbados",
        "by"=>"Belarus (Беларусь)",
        "be"=>"Belgium (België)",
        "bz"=>"Belize",
        "bj"=>"Benin (Bénin)",
        "bm"=>"Bermuda",
        "bt"=>"Bhutan (འབྲུག་ཡུལ)",
        "bo"=>"Bolivia",
        "bw"=>"Botswana",
        "br"=>"Brazil (Brasil)",
        "vg"=>"British Virgin Islands",
        "bn"=>"Brunei (بروني)",
        "bg"=>"Bulgaria",
        "bf"=>"Burkina-Faso",
        "kh"=>"Cambodia (Kampuchea)",
        "ca"=>"Canada",
        "cv"=>"Cape Verde (Cabo Verde)",
        "ky"=>"Cayman Islands",
        "td"=>"Chad (Tchad)",
        "cl"=>"Chile",
        "cn"=>"China (Zhōngguó)",
        "co"=>"Colombia",
        "cd"=>"Congo, Republic of",
        "cr"=>"Costa Rica",
        "hr"=>"Croatia (Hrvatska)",
        "cy"=>"Cyprus (Kypros)",
        "cz"=>"Czech Republic (Česká Republika)",
        "dk"=>"Denmark (Danmark)",
        "dm"=>"Dominica",
        "do"=>"Dominican Republic (República Dominicana)",
        "ec"=>"Ecuador",
        "eg"=>"Egypt (مصر)",
        "sv"=>"El Salvador",
        "ee"=>"Estonia (Eesti)",
        "fj"=>"Fiji",
        "fi"=>"Finland (Suomi)",
        "fr"=>"France",
        "gm"=>"Gambia",
        "de"=>"Germany (Deutschland)",
        "gh"=>"Ghana",
        "gr"=>"Greece (Hellas)",
        "gd"=>"Grenada",
        "gt"=>"Guatemala",
        "gw"=>"Guinea Bissau (Guiné Bissau)",
        "gy"=>"Guyana",
        "hn"=>"Honduras",
        "hk"=>"Hong Kong (香港)",
        "hu"=>"Hungary (Magyarország)",
        "is"=>"Iceland (Ísland)",
        "in"=>"India",
        "id"=>"Indonesia",
        "ie"=>"Ireland (Éire)",
        "il"=>"Israel (إسرائيل)",
        "it"=>"Italy (Italia)",
        "jm"=>"Jamaica",
        "jp"=>"Japan (日本)",
        "jo"=>"Jordan (الأردن)",
        "kz"=>"Kazakhstan (Қазақстан)",
        "ke"=>"Kenya",
        "kw"=>"Kuwait (الكويت)",
        "kg"=>"Kyrgyzstan (Кыргызстан)",
        "la"=>"Laos (Lao)",
        "lv"=>"Latvia (Latvija)",
        "lb"=>"Lebanon (لبنان)",
        "lr"=>"Liberia",
        "lt"=>"Lithuania (Lietuva)",
        "lu"=>"Luxembourg (Lëtzebuerg)",
        "mo"=>"Macau",
        "mk"=>"Macedonia (Makedonija)",
        "mg"=>"Madagascar (Madagasikara)",
        "mw"=>"Malawi",
        "my"=>"Malaysia",
        "ml"=>"Mali",
        "mt"=>"Malta, Republic of",
        "mr"=>"Mauritania (Muritan)",
        "mu"=>"Mauritius (Maurice)",
        "mx"=>"Mexico (México)",
        "fm"=>"Micronesian, Federated States of",
        "mn"=>"Mongolia (Mongol Uls)",
        "ms"=>"Montserrat",
        "md"=>"Moldova",
        "mz"=>"Mozambique (Moçambique)",
        "na"=>"Namibia",
        "np"=>"Nepal (Nepāla)",
        "nl"=>"Netherlands (Nederland)",
        "nz"=>"New Zealand",
        "ni"=>"Nicaragua",
        "ne"=>"Niger",
        "ng"=>"Nigeria",
        "no"=>"Norway (Norge)",
        "om"=>"Oman (عُمان)",
        "pk"=>"Pakistan (پاکستان)",
        "pw"=>"Palau (Belau)",
        "pa"=>"Panama (Panamá)",
        "gn"=>"Papua New Guinea",
        "py"=>"Paraguay",
        "pe"=>"Peru (Perú)",
        "ph"=>"Philippines (Pilipinas)",
        "pl"=>"Poland (Polska)",
        "pt"=>"Portugal",
        "qa"=>"Qatar (قطر)",
        "ro"=>"Romania (România)",
        "ru"=>"Russia (Россия)",
        "kn"=>"St. Kitts & Nevis",
        "lc"=>"St. Lucia",
        "vc"=>"St. Vincent & The Grenadines",
        "st"=>"Sao Tome e Principe (São Tomé e Príncipe)",
        "sa"=>"Saudi Arabia (المملكة العربية السعودية)",
        "sn"=>"Senegal (Sénégal)",
        "sc"=>"Seychelles (Sesel)",
        "sl"=>"Sierra Leone",
        "sg"=>"Singapore",
        "sk"=>"Slovakia (Slovensko)",
        "sj"=>"Slovenia (Slovenija)",
        "sb"=>"Soloman Islands",
        "za"=>"South Africa (Suid-Afrika)",
        "kr"=>"South Korea (한국)",
        "es"=>"Spain (España)",
        "lk"=>"Sri Lanka (Sri Lankā)",
        "sr"=>"Suriname",
        "sz"=>"Swaziland",
        "se"=>"Sweden (Sverige)",
        "ch"=>"Switzerland (Schweiz)",
        "tw"=>"Taiwan (中華民國)",
        "tj"=>"Tajikistan (Тоҷикистон)",
        "tz"=>"Tanzania",
        "th"=>"Thailand (ประเทศไทย)",
        "tt"=>"Trinidad & Tobago",
        "tn"=>"Tunisia (Tunes)",
        "tr"=>"Turkey (Türkiye)",
        "tm"=>"Turkmenistan (Türkmenistan)",
        "tc"=>"Turks & Caicos",
        "ug"=>"Uganda",
        "ua"=>"Ukraine (Україна)",
        "ae"=>"United Arab Emirates (الإمارات العربيّة المتّحدة)",
        "gb"=>"United Kingdom",
        "us"=>"United States",
        "uy"=>"Uruguay (República Oriental del Uruguay)",
        "uz"=>"Uzbekistan (Ўзбекистон)",
        "ve"=>"Venezuela",
        "vn"=>"Vietnam (Việt Nam)",
        "ye"=>"Yemen (اليمن)",
        "zw"=>"Zimbabwe"];

    public static $google_lng = [
        "af",
        "sq",
        "sm",
        "ar",
        "az",
        "eu",
        "be",
        "bn",
        "bh",
        "bs",
        "bg",
        "ca",
        "zh-CN",
        "zh-TW",
        "hr",
        "cs",
        "da",
        "nl",
        "en",
        "eo",
        "et",
        "fo",
        "fi",
        "fr",
        "fy",
        "gl",
        "ka",
        "de",
        "el",
        "gu",
        "iw",
        "hi",
        "hu",
        "is",
        "id",
        "ia",
        "ga",
        "it",
        "ja",
        "jw",
        "kn",
        "ko",
        "la",
        "lv",
        "lt",
        "mk",
        "ms",
        "ml",
        "mt",
        "mr",
        "ne",
        "no",
        "nn",
        "oc",
        "fa",
        "pl",
        "pt-BR",
        "pt-PT",
        "pa",
        "ro",
        "ru",
        "gd",
        "sr",
        "si",
        "sk",
        "sl",
        "es",
        "su",
        "sw",
        "sv",
        "tl",
        "ta",
        "te",
        "th",
        "ti",
        "tr",
        "uk",
        "ur",
        "uz",
        "vi",
        "cy",
        "xh",
        "zu"];

    public static $youtube_lng = [
        "ar",
        "bg",
        "ca",
        "zh_CN",
        "zh_TW",
        "hr",
        "cs",
        "da",
        "en",
        "et",
        "nl",
        "fi",
        "fr",
        "de",
        "el",
        "iw",
        "hi",
        "hu",
        "is",
        "id",
        "it",
        "ja",
        "ko",
        "lv",
        "lt",
        "no",
        "pl",
        "pt",
        "ro",
        "ru",
        "sr",
        "sk",
        "sl",
        "es",
        "sv",
        "tl",
        "th",
        "tr",
        "uk",
        "ur",
        "vi"];

    public static $bing_lng = [
        "ar",
        "zh",
        "nl",
        "en",
        "de",
        "fr",
        "it",
        "ja",
        "ko",
        "no",
        "pl",
        "pt",
        "ru",
        "es",
        "sv",
        "tr"];

    public static $appstore_lng = [
        "ar",
        "ca",
        "zh-CN",
        "zh-TW",
        "hr",
        "cs",
        "da",
        "nl",
        "en",
        "fi",
        "fr",
        "de",
        "el",
        "iw",
        "hi",
        "hu",
        "id",
        "it",
        "ja",
        "ko",
        "ms",
        "no",
        "pl",
        "pt-BR",
        "pt-PT",
        "ro",
        "ru",
        "sk",
        "es",
        "sv",
        "th",
        "tr",
        "uk",
        "vi"];






















}
