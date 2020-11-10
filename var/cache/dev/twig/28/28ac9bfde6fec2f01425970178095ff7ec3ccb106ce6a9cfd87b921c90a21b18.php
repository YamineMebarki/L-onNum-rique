<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/symfony/intl/Resources/data/timezones/meta.json */
class __TwigTemplate_30030545d0d4974e1f6f9735e206a2cf160ef8edd0d931c02b2a225c82bc754a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/meta.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/meta.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Zones\": [
        \"Africa\\/Abidjan\",
        \"Africa\\/Accra\",
        \"Africa\\/Addis_Ababa\",
        \"Africa\\/Algiers\",
        \"Africa\\/Asmera\",
        \"Africa\\/Bamako\",
        \"Africa\\/Bangui\",
        \"Africa\\/Banjul\",
        \"Africa\\/Bissau\",
        \"Africa\\/Blantyre\",
        \"Africa\\/Brazzaville\",
        \"Africa\\/Bujumbura\",
        \"Africa\\/Cairo\",
        \"Africa\\/Casablanca\",
        \"Africa\\/Ceuta\",
        \"Africa\\/Conakry\",
        \"Africa\\/Dakar\",
        \"Africa\\/Dar_es_Salaam\",
        \"Africa\\/Djibouti\",
        \"Africa\\/Douala\",
        \"Africa\\/El_Aaiun\",
        \"Africa\\/Freetown\",
        \"Africa\\/Gaborone\",
        \"Africa\\/Harare\",
        \"Africa\\/Johannesburg\",
        \"Africa\\/Juba\",
        \"Africa\\/Kampala\",
        \"Africa\\/Khartoum\",
        \"Africa\\/Kigali\",
        \"Africa\\/Kinshasa\",
        \"Africa\\/Lagos\",
        \"Africa\\/Libreville\",
        \"Africa\\/Lome\",
        \"Africa\\/Luanda\",
        \"Africa\\/Lubumbashi\",
        \"Africa\\/Lusaka\",
        \"Africa\\/Malabo\",
        \"Africa\\/Maputo\",
        \"Africa\\/Maseru\",
        \"Africa\\/Mbabane\",
        \"Africa\\/Mogadishu\",
        \"Africa\\/Monrovia\",
        \"Africa\\/Nairobi\",
        \"Africa\\/Ndjamena\",
        \"Africa\\/Niamey\",
        \"Africa\\/Nouakchott\",
        \"Africa\\/Ouagadougou\",
        \"Africa\\/Porto-Novo\",
        \"Africa\\/Sao_Tome\",
        \"Africa\\/Tripoli\",
        \"Africa\\/Tunis\",
        \"Africa\\/Windhoek\",
        \"America\\/Adak\",
        \"America\\/Anchorage\",
        \"America\\/Anguilla\",
        \"America\\/Antigua\",
        \"America\\/Araguaina\",
        \"America\\/Argentina\\/La_Rioja\",
        \"America\\/Argentina\\/Rio_Gallegos\",
        \"America\\/Argentina\\/Salta\",
        \"America\\/Argentina\\/San_Juan\",
        \"America\\/Argentina\\/San_Luis\",
        \"America\\/Argentina\\/Tucuman\",
        \"America\\/Argentina\\/Ushuaia\",
        \"America\\/Aruba\",
        \"America\\/Asuncion\",
        \"America\\/Bahia\",
        \"America\\/Bahia_Banderas\",
        \"America\\/Barbados\",
        \"America\\/Belem\",
        \"America\\/Belize\",
        \"America\\/Blanc-Sablon\",
        \"America\\/Boa_Vista\",
        \"America\\/Bogota\",
        \"America\\/Boise\",
        \"America\\/Buenos_Aires\",
        \"America\\/Cambridge_Bay\",
        \"America\\/Campo_Grande\",
        \"America\\/Cancun\",
        \"America\\/Caracas\",
        \"America\\/Catamarca\",
        \"America\\/Cayenne\",
        \"America\\/Cayman\",
        \"America\\/Chicago\",
        \"America\\/Chihuahua\",
        \"America\\/Coral_Harbour\",
        \"America\\/Cordoba\",
        \"America\\/Costa_Rica\",
        \"America\\/Creston\",
        \"America\\/Cuiaba\",
        \"America\\/Curacao\",
        \"America\\/Danmarkshavn\",
        \"America\\/Dawson\",
        \"America\\/Dawson_Creek\",
        \"America\\/Denver\",
        \"America\\/Detroit\",
        \"America\\/Dominica\",
        \"America\\/Edmonton\",
        \"America\\/Eirunepe\",
        \"America\\/El_Salvador\",
        \"America\\/Fort_Nelson\",
        \"America\\/Fortaleza\",
        \"America\\/Glace_Bay\",
        \"America\\/Godthab\",
        \"America\\/Goose_Bay\",
        \"America\\/Grand_Turk\",
        \"America\\/Grenada\",
        \"America\\/Guadeloupe\",
        \"America\\/Guatemala\",
        \"America\\/Guayaquil\",
        \"America\\/Guyana\",
        \"America\\/Halifax\",
        \"America\\/Havana\",
        \"America\\/Hermosillo\",
        \"America\\/Indiana\\/Knox\",
        \"America\\/Indiana\\/Marengo\",
        \"America\\/Indiana\\/Petersburg\",
        \"America\\/Indiana\\/Tell_City\",
        \"America\\/Indiana\\/Vevay\",
        \"America\\/Indiana\\/Vincennes\",
        \"America\\/Indiana\\/Winamac\",
        \"America\\/Indianapolis\",
        \"America\\/Inuvik\",
        \"America\\/Iqaluit\",
        \"America\\/Jamaica\",
        \"America\\/Jujuy\",
        \"America\\/Juneau\",
        \"America\\/Kentucky\\/Monticello\",
        \"America\\/Kralendijk\",
        \"America\\/La_Paz\",
        \"America\\/Lima\",
        \"America\\/Los_Angeles\",
        \"America\\/Louisville\",
        \"America\\/Lower_Princes\",
        \"America\\/Maceio\",
        \"America\\/Managua\",
        \"America\\/Manaus\",
        \"America\\/Marigot\",
        \"America\\/Martinique\",
        \"America\\/Matamoros\",
        \"America\\/Mazatlan\",
        \"America\\/Mendoza\",
        \"America\\/Menominee\",
        \"America\\/Merida\",
        \"America\\/Metlakatla\",
        \"America\\/Mexico_City\",
        \"America\\/Miquelon\",
        \"America\\/Moncton\",
        \"America\\/Monterrey\",
        \"America\\/Montevideo\",
        \"America\\/Montreal\",
        \"America\\/Montserrat\",
        \"America\\/Nassau\",
        \"America\\/New_York\",
        \"America\\/Nipigon\",
        \"America\\/Nome\",
        \"America\\/Noronha\",
        \"America\\/North_Dakota\\/Beulah\",
        \"America\\/North_Dakota\\/Center\",
        \"America\\/North_Dakota\\/New_Salem\",
        \"America\\/Ojinaga\",
        \"America\\/Panama\",
        \"America\\/Pangnirtung\",
        \"America\\/Paramaribo\",
        \"America\\/Phoenix\",
        \"America\\/Port-au-Prince\",
        \"America\\/Port_of_Spain\",
        \"America\\/Porto_Velho\",
        \"America\\/Puerto_Rico\",
        \"America\\/Punta_Arenas\",
        \"America\\/Rainy_River\",
        \"America\\/Rankin_Inlet\",
        \"America\\/Recife\",
        \"America\\/Regina\",
        \"America\\/Resolute\",
        \"America\\/Rio_Branco\",
        \"America\\/Santa_Isabel\",
        \"America\\/Santarem\",
        \"America\\/Santiago\",
        \"America\\/Santo_Domingo\",
        \"America\\/Sao_Paulo\",
        \"America\\/Scoresbysund\",
        \"America\\/Sitka\",
        \"America\\/St_Barthelemy\",
        \"America\\/St_Johns\",
        \"America\\/St_Kitts\",
        \"America\\/St_Lucia\",
        \"America\\/St_Thomas\",
        \"America\\/St_Vincent\",
        \"America\\/Swift_Current\",
        \"America\\/Tegucigalpa\",
        \"America\\/Thule\",
        \"America\\/Thunder_Bay\",
        \"America\\/Tijuana\",
        \"America\\/Toronto\",
        \"America\\/Tortola\",
        \"America\\/Vancouver\",
        \"America\\/Whitehorse\",
        \"America\\/Winnipeg\",
        \"America\\/Yakutat\",
        \"America\\/Yellowknife\",
        \"Antarctica\\/Casey\",
        \"Antarctica\\/Davis\",
        \"Antarctica\\/DumontDUrville\",
        \"Antarctica\\/Macquarie\",
        \"Antarctica\\/Mawson\",
        \"Antarctica\\/McMurdo\",
        \"Antarctica\\/Palmer\",
        \"Antarctica\\/Rothera\",
        \"Antarctica\\/Syowa\",
        \"Antarctica\\/Troll\",
        \"Antarctica\\/Vostok\",
        \"Arctic\\/Longyearbyen\",
        \"Asia\\/Aden\",
        \"Asia\\/Almaty\",
        \"Asia\\/Amman\",
        \"Asia\\/Anadyr\",
        \"Asia\\/Aqtau\",
        \"Asia\\/Aqtobe\",
        \"Asia\\/Ashgabat\",
        \"Asia\\/Atyrau\",
        \"Asia\\/Baghdad\",
        \"Asia\\/Bahrain\",
        \"Asia\\/Baku\",
        \"Asia\\/Bangkok\",
        \"Asia\\/Barnaul\",
        \"Asia\\/Beirut\",
        \"Asia\\/Bishkek\",
        \"Asia\\/Brunei\",
        \"Asia\\/Calcutta\",
        \"Asia\\/Chita\",
        \"Asia\\/Choibalsan\",
        \"Asia\\/Colombo\",
        \"Asia\\/Damascus\",
        \"Asia\\/Dhaka\",
        \"Asia\\/Dili\",
        \"Asia\\/Dubai\",
        \"Asia\\/Dushanbe\",
        \"Asia\\/Famagusta\",
        \"Asia\\/Gaza\",
        \"Asia\\/Hebron\",
        \"Asia\\/Hong_Kong\",
        \"Asia\\/Hovd\",
        \"Asia\\/Irkutsk\",
        \"Asia\\/Jakarta\",
        \"Asia\\/Jayapura\",
        \"Asia\\/Jerusalem\",
        \"Asia\\/Kabul\",
        \"Asia\\/Kamchatka\",
        \"Asia\\/Karachi\",
        \"Asia\\/Katmandu\",
        \"Asia\\/Khandyga\",
        \"Asia\\/Krasnoyarsk\",
        \"Asia\\/Kuala_Lumpur\",
        \"Asia\\/Kuching\",
        \"Asia\\/Kuwait\",
        \"Asia\\/Macau\",
        \"Asia\\/Magadan\",
        \"Asia\\/Makassar\",
        \"Asia\\/Manila\",
        \"Asia\\/Muscat\",
        \"Asia\\/Nicosia\",
        \"Asia\\/Novokuznetsk\",
        \"Asia\\/Novosibirsk\",
        \"Asia\\/Omsk\",
        \"Asia\\/Oral\",
        \"Asia\\/Phnom_Penh\",
        \"Asia\\/Pontianak\",
        \"Asia\\/Pyongyang\",
        \"Asia\\/Qatar\",
        \"Asia\\/Qostanay\",
        \"Asia\\/Qyzylorda\",
        \"Asia\\/Rangoon\",
        \"Asia\\/Riyadh\",
        \"Asia\\/Saigon\",
        \"Asia\\/Sakhalin\",
        \"Asia\\/Samarkand\",
        \"Asia\\/Seoul\",
        \"Asia\\/Shanghai\",
        \"Asia\\/Singapore\",
        \"Asia\\/Srednekolymsk\",
        \"Asia\\/Taipei\",
        \"Asia\\/Tashkent\",
        \"Asia\\/Tbilisi\",
        \"Asia\\/Tehran\",
        \"Asia\\/Thimphu\",
        \"Asia\\/Tokyo\",
        \"Asia\\/Tomsk\",
        \"Asia\\/Ulaanbaatar\",
        \"Asia\\/Urumqi\",
        \"Asia\\/Ust-Nera\",
        \"Asia\\/Vientiane\",
        \"Asia\\/Vladivostok\",
        \"Asia\\/Yakutsk\",
        \"Asia\\/Yekaterinburg\",
        \"Asia\\/Yerevan\",
        \"Atlantic\\/Azores\",
        \"Atlantic\\/Bermuda\",
        \"Atlantic\\/Canary\",
        \"Atlantic\\/Cape_Verde\",
        \"Atlantic\\/Faeroe\",
        \"Atlantic\\/Madeira\",
        \"Atlantic\\/Reykjavik\",
        \"Atlantic\\/South_Georgia\",
        \"Atlantic\\/St_Helena\",
        \"Atlantic\\/Stanley\",
        \"Australia\\/Adelaide\",
        \"Australia\\/Brisbane\",
        \"Australia\\/Broken_Hill\",
        \"Australia\\/Currie\",
        \"Australia\\/Darwin\",
        \"Australia\\/Eucla\",
        \"Australia\\/Hobart\",
        \"Australia\\/Lindeman\",
        \"Australia\\/Lord_Howe\",
        \"Australia\\/Melbourne\",
        \"Australia\\/Perth\",
        \"Australia\\/Sydney\",
        \"CST6CDT\",
        \"EST5EDT\",
        \"Etc\\/GMT\",
        \"Etc\\/UTC\",
        \"Europe\\/Amsterdam\",
        \"Europe\\/Andorra\",
        \"Europe\\/Astrakhan\",
        \"Europe\\/Athens\",
        \"Europe\\/Belgrade\",
        \"Europe\\/Berlin\",
        \"Europe\\/Bratislava\",
        \"Europe\\/Brussels\",
        \"Europe\\/Bucharest\",
        \"Europe\\/Budapest\",
        \"Europe\\/Busingen\",
        \"Europe\\/Chisinau\",
        \"Europe\\/Copenhagen\",
        \"Europe\\/Dublin\",
        \"Europe\\/Gibraltar\",
        \"Europe\\/Guernsey\",
        \"Europe\\/Helsinki\",
        \"Europe\\/Isle_of_Man\",
        \"Europe\\/Istanbul\",
        \"Europe\\/Jersey\",
        \"Europe\\/Kaliningrad\",
        \"Europe\\/Kiev\",
        \"Europe\\/Kirov\",
        \"Europe\\/Lisbon\",
        \"Europe\\/Ljubljana\",
        \"Europe\\/London\",
        \"Europe\\/Luxembourg\",
        \"Europe\\/Madrid\",
        \"Europe\\/Malta\",
        \"Europe\\/Mariehamn\",
        \"Europe\\/Minsk\",
        \"Europe\\/Monaco\",
        \"Europe\\/Moscow\",
        \"Europe\\/Oslo\",
        \"Europe\\/Paris\",
        \"Europe\\/Podgorica\",
        \"Europe\\/Prague\",
        \"Europe\\/Riga\",
        \"Europe\\/Rome\",
        \"Europe\\/Samara\",
        \"Europe\\/San_Marino\",
        \"Europe\\/Sarajevo\",
        \"Europe\\/Saratov\",
        \"Europe\\/Simferopol\",
        \"Europe\\/Skopje\",
        \"Europe\\/Sofia\",
        \"Europe\\/Stockholm\",
        \"Europe\\/Tallinn\",
        \"Europe\\/Tirane\",
        \"Europe\\/Ulyanovsk\",
        \"Europe\\/Uzhgorod\",
        \"Europe\\/Vaduz\",
        \"Europe\\/Vatican\",
        \"Europe\\/Vienna\",
        \"Europe\\/Vilnius\",
        \"Europe\\/Volgograd\",
        \"Europe\\/Warsaw\",
        \"Europe\\/Zagreb\",
        \"Europe\\/Zaporozhye\",
        \"Europe\\/Zurich\",
        \"Indian\\/Antananarivo\",
        \"Indian\\/Chagos\",
        \"Indian\\/Christmas\",
        \"Indian\\/Cocos\",
        \"Indian\\/Comoro\",
        \"Indian\\/Kerguelen\",
        \"Indian\\/Mahe\",
        \"Indian\\/Maldives\",
        \"Indian\\/Mauritius\",
        \"Indian\\/Mayotte\",
        \"Indian\\/Reunion\",
        \"MST7MDT\",
        \"PST8PDT\",
        \"Pacific\\/Apia\",
        \"Pacific\\/Auckland\",
        \"Pacific\\/Bougainville\",
        \"Pacific\\/Chatham\",
        \"Pacific\\/Easter\",
        \"Pacific\\/Efate\",
        \"Pacific\\/Enderbury\",
        \"Pacific\\/Fakaofo\",
        \"Pacific\\/Fiji\",
        \"Pacific\\/Funafuti\",
        \"Pacific\\/Galapagos\",
        \"Pacific\\/Gambier\",
        \"Pacific\\/Guadalcanal\",
        \"Pacific\\/Guam\",
        \"Pacific\\/Honolulu\",
        \"Pacific\\/Johnston\",
        \"Pacific\\/Kiritimati\",
        \"Pacific\\/Kosrae\",
        \"Pacific\\/Kwajalein\",
        \"Pacific\\/Majuro\",
        \"Pacific\\/Marquesas\",
        \"Pacific\\/Midway\",
        \"Pacific\\/Nauru\",
        \"Pacific\\/Niue\",
        \"Pacific\\/Norfolk\",
        \"Pacific\\/Noumea\",
        \"Pacific\\/Pago_Pago\",
        \"Pacific\\/Palau\",
        \"Pacific\\/Pitcairn\",
        \"Pacific\\/Ponape\",
        \"Pacific\\/Port_Moresby\",
        \"Pacific\\/Rarotonga\",
        \"Pacific\\/Saipan\",
        \"Pacific\\/Tahiti\",
        \"Pacific\\/Tarawa\",
        \"Pacific\\/Tongatapu\",
        \"Pacific\\/Truk\",
        \"Pacific\\/Wake\",
        \"Pacific\\/Wallis\"
    ],
    \"ZoneToCountry\": {
        \"Africa\\/Abidjan\": \"CI\",
        \"Africa\\/Accra\": \"GH\",
        \"Africa\\/Addis_Ababa\": \"ET\",
        \"Africa\\/Algiers\": \"DZ\",
        \"Africa\\/Asmera\": \"ER\",
        \"Africa\\/Bamako\": \"ML\",
        \"Africa\\/Bangui\": \"CF\",
        \"Africa\\/Banjul\": \"GM\",
        \"Africa\\/Bissau\": \"GW\",
        \"Africa\\/Blantyre\": \"MW\",
        \"Africa\\/Brazzaville\": \"CG\",
        \"Africa\\/Bujumbura\": \"BI\",
        \"Africa\\/Cairo\": \"EG\",
        \"Africa\\/Casablanca\": \"MA\",
        \"Africa\\/Ceuta\": \"ES\",
        \"Africa\\/Conakry\": \"GN\",
        \"Africa\\/Dakar\": \"SN\",
        \"Africa\\/Dar_es_Salaam\": \"TZ\",
        \"Africa\\/Djibouti\": \"DJ\",
        \"Africa\\/Douala\": \"CM\",
        \"Africa\\/El_Aaiun\": \"EH\",
        \"Africa\\/Freetown\": \"SL\",
        \"Africa\\/Gaborone\": \"BW\",
        \"Africa\\/Harare\": \"ZW\",
        \"Africa\\/Johannesburg\": \"ZA\",
        \"Africa\\/Juba\": \"SS\",
        \"Africa\\/Kampala\": \"UG\",
        \"Africa\\/Khartoum\": \"SD\",
        \"Africa\\/Kigali\": \"RW\",
        \"Africa\\/Kinshasa\": \"CD\",
        \"Africa\\/Lagos\": \"NG\",
        \"Africa\\/Libreville\": \"GA\",
        \"Africa\\/Lome\": \"TG\",
        \"Africa\\/Luanda\": \"AO\",
        \"Africa\\/Lubumbashi\": \"CD\",
        \"Africa\\/Lusaka\": \"ZM\",
        \"Africa\\/Malabo\": \"GQ\",
        \"Africa\\/Maputo\": \"MZ\",
        \"Africa\\/Maseru\": \"LS\",
        \"Africa\\/Mbabane\": \"SZ\",
        \"Africa\\/Mogadishu\": \"SO\",
        \"Africa\\/Monrovia\": \"LR\",
        \"Africa\\/Nairobi\": \"KE\",
        \"Africa\\/Ndjamena\": \"TD\",
        \"Africa\\/Niamey\": \"NE\",
        \"Africa\\/Nouakchott\": \"MR\",
        \"Africa\\/Ouagadougou\": \"BF\",
        \"Africa\\/Porto-Novo\": \"BJ\",
        \"Africa\\/Sao_Tome\": \"ST\",
        \"Africa\\/Tripoli\": \"LY\",
        \"Africa\\/Tunis\": \"TN\",
        \"Africa\\/Windhoek\": \"NA\",
        \"America\\/Adak\": \"US\",
        \"America\\/Anchorage\": \"US\",
        \"America\\/Anguilla\": \"AI\",
        \"America\\/Antigua\": \"AG\",
        \"America\\/Araguaina\": \"BR\",
        \"America\\/Argentina\\/La_Rioja\": \"AR\",
        \"America\\/Argentina\\/Rio_Gallegos\": \"AR\",
        \"America\\/Argentina\\/Salta\": \"AR\",
        \"America\\/Argentina\\/San_Juan\": \"AR\",
        \"America\\/Argentina\\/San_Luis\": \"AR\",
        \"America\\/Argentina\\/Tucuman\": \"AR\",
        \"America\\/Argentina\\/Ushuaia\": \"AR\",
        \"America\\/Aruba\": \"AW\",
        \"America\\/Asuncion\": \"PY\",
        \"America\\/Bahia\": \"BR\",
        \"America\\/Bahia_Banderas\": \"MX\",
        \"America\\/Barbados\": \"BB\",
        \"America\\/Belem\": \"BR\",
        \"America\\/Belize\": \"BZ\",
        \"America\\/Blanc-Sablon\": \"CA\",
        \"America\\/Boa_Vista\": \"BR\",
        \"America\\/Bogota\": \"CO\",
        \"America\\/Boise\": \"US\",
        \"America\\/Buenos_Aires\": \"AR\",
        \"America\\/Cambridge_Bay\": \"CA\",
        \"America\\/Campo_Grande\": \"BR\",
        \"America\\/Cancun\": \"MX\",
        \"America\\/Caracas\": \"VE\",
        \"America\\/Catamarca\": \"AR\",
        \"America\\/Cayenne\": \"GF\",
        \"America\\/Cayman\": \"KY\",
        \"America\\/Chicago\": \"US\",
        \"America\\/Chihuahua\": \"MX\",
        \"America\\/Coral_Harbour\": \"CA\",
        \"America\\/Cordoba\": \"AR\",
        \"America\\/Costa_Rica\": \"CR\",
        \"America\\/Creston\": \"CA\",
        \"America\\/Cuiaba\": \"BR\",
        \"America\\/Curacao\": \"CW\",
        \"America\\/Danmarkshavn\": \"GL\",
        \"America\\/Dawson\": \"CA\",
        \"America\\/Dawson_Creek\": \"CA\",
        \"America\\/Denver\": \"US\",
        \"America\\/Detroit\": \"US\",
        \"America\\/Dominica\": \"DM\",
        \"America\\/Edmonton\": \"CA\",
        \"America\\/Eirunepe\": \"BR\",
        \"America\\/El_Salvador\": \"SV\",
        \"America\\/Fort_Nelson\": \"CA\",
        \"America\\/Fortaleza\": \"BR\",
        \"America\\/Glace_Bay\": \"CA\",
        \"America\\/Godthab\": \"GL\",
        \"America\\/Goose_Bay\": \"CA\",
        \"America\\/Grand_Turk\": \"TC\",
        \"America\\/Grenada\": \"GD\",
        \"America\\/Guadeloupe\": \"GP\",
        \"America\\/Guatemala\": \"GT\",
        \"America\\/Guayaquil\": \"EC\",
        \"America\\/Guyana\": \"GY\",
        \"America\\/Halifax\": \"CA\",
        \"America\\/Havana\": \"CU\",
        \"America\\/Hermosillo\": \"MX\",
        \"America\\/Indiana\\/Knox\": \"US\",
        \"America\\/Indiana\\/Marengo\": \"US\",
        \"America\\/Indiana\\/Petersburg\": \"US\",
        \"America\\/Indiana\\/Tell_City\": \"US\",
        \"America\\/Indiana\\/Vevay\": \"US\",
        \"America\\/Indiana\\/Vincennes\": \"US\",
        \"America\\/Indiana\\/Winamac\": \"US\",
        \"America\\/Indianapolis\": \"US\",
        \"America\\/Inuvik\": \"CA\",
        \"America\\/Iqaluit\": \"CA\",
        \"America\\/Jamaica\": \"JM\",
        \"America\\/Jujuy\": \"AR\",
        \"America\\/Juneau\": \"US\",
        \"America\\/Kentucky\\/Monticello\": \"US\",
        \"America\\/Kralendijk\": \"BQ\",
        \"America\\/La_Paz\": \"BO\",
        \"America\\/Lima\": \"PE\",
        \"America\\/Los_Angeles\": \"US\",
        \"America\\/Louisville\": \"US\",
        \"America\\/Lower_Princes\": \"SX\",
        \"America\\/Maceio\": \"BR\",
        \"America\\/Managua\": \"NI\",
        \"America\\/Manaus\": \"BR\",
        \"America\\/Marigot\": \"MF\",
        \"America\\/Martinique\": \"MQ\",
        \"America\\/Matamoros\": \"MX\",
        \"America\\/Mazatlan\": \"MX\",
        \"America\\/Mendoza\": \"AR\",
        \"America\\/Menominee\": \"US\",
        \"America\\/Merida\": \"MX\",
        \"America\\/Metlakatla\": \"US\",
        \"America\\/Mexico_City\": \"MX\",
        \"America\\/Miquelon\": \"PM\",
        \"America\\/Moncton\": \"CA\",
        \"America\\/Monterrey\": \"MX\",
        \"America\\/Montevideo\": \"UY\",
        \"America\\/Montreal\": \"CA\",
        \"America\\/Montserrat\": \"MS\",
        \"America\\/Nassau\": \"BS\",
        \"America\\/New_York\": \"US\",
        \"America\\/Nipigon\": \"CA\",
        \"America\\/Nome\": \"US\",
        \"America\\/Noronha\": \"BR\",
        \"America\\/North_Dakota\\/Beulah\": \"US\",
        \"America\\/North_Dakota\\/Center\": \"US\",
        \"America\\/North_Dakota\\/New_Salem\": \"US\",
        \"America\\/Ojinaga\": \"MX\",
        \"America\\/Panama\": \"PA\",
        \"America\\/Pangnirtung\": \"CA\",
        \"America\\/Paramaribo\": \"SR\",
        \"America\\/Phoenix\": \"US\",
        \"America\\/Port-au-Prince\": \"HT\",
        \"America\\/Port_of_Spain\": \"TT\",
        \"America\\/Porto_Velho\": \"BR\",
        \"America\\/Puerto_Rico\": \"PR\",
        \"America\\/Punta_Arenas\": \"CL\",
        \"America\\/Rainy_River\": \"CA\",
        \"America\\/Rankin_Inlet\": \"CA\",
        \"America\\/Recife\": \"BR\",
        \"America\\/Regina\": \"CA\",
        \"America\\/Resolute\": \"CA\",
        \"America\\/Rio_Branco\": \"BR\",
        \"America\\/Santa_Isabel\": \"MX\",
        \"America\\/Santarem\": \"BR\",
        \"America\\/Santiago\": \"CL\",
        \"America\\/Santo_Domingo\": \"DO\",
        \"America\\/Sao_Paulo\": \"BR\",
        \"America\\/Scoresbysund\": \"GL\",
        \"America\\/Sitka\": \"US\",
        \"America\\/St_Barthelemy\": \"BL\",
        \"America\\/St_Johns\": \"CA\",
        \"America\\/St_Kitts\": \"KN\",
        \"America\\/St_Lucia\": \"LC\",
        \"America\\/St_Thomas\": \"VI\",
        \"America\\/St_Vincent\": \"VC\",
        \"America\\/Swift_Current\": \"CA\",
        \"America\\/Tegucigalpa\": \"HN\",
        \"America\\/Thule\": \"GL\",
        \"America\\/Thunder_Bay\": \"CA\",
        \"America\\/Tijuana\": \"MX\",
        \"America\\/Toronto\": \"CA\",
        \"America\\/Tortola\": \"VG\",
        \"America\\/Vancouver\": \"CA\",
        \"America\\/Whitehorse\": \"CA\",
        \"America\\/Winnipeg\": \"CA\",
        \"America\\/Yakutat\": \"US\",
        \"America\\/Yellowknife\": \"CA\",
        \"Antarctica\\/Casey\": \"AQ\",
        \"Antarctica\\/Davis\": \"AQ\",
        \"Antarctica\\/DumontDUrville\": \"AQ\",
        \"Antarctica\\/Macquarie\": \"AU\",
        \"Antarctica\\/Mawson\": \"AQ\",
        \"Antarctica\\/McMurdo\": \"AQ\",
        \"Antarctica\\/Palmer\": \"AQ\",
        \"Antarctica\\/Rothera\": \"AQ\",
        \"Antarctica\\/Syowa\": \"AQ\",
        \"Antarctica\\/Vostok\": \"AQ\",
        \"Arctic\\/Longyearbyen\": \"SJ\",
        \"Asia\\/Aden\": \"YE\",
        \"Asia\\/Almaty\": \"KZ\",
        \"Asia\\/Amman\": \"JO\",
        \"Asia\\/Anadyr\": \"RU\",
        \"Asia\\/Aqtau\": \"KZ\",
        \"Asia\\/Aqtobe\": \"KZ\",
        \"Asia\\/Ashgabat\": \"TM\",
        \"Asia\\/Atyrau\": \"KZ\",
        \"Asia\\/Baghdad\": \"IQ\",
        \"Asia\\/Bahrain\": \"BH\",
        \"Asia\\/Baku\": \"AZ\",
        \"Asia\\/Bangkok\": \"TH\",
        \"Asia\\/Barnaul\": \"RU\",
        \"Asia\\/Beirut\": \"LB\",
        \"Asia\\/Bishkek\": \"KG\",
        \"Asia\\/Brunei\": \"BN\",
        \"Asia\\/Calcutta\": \"IN\",
        \"Asia\\/Chita\": \"RU\",
        \"Asia\\/Choibalsan\": \"MN\",
        \"Asia\\/Colombo\": \"LK\",
        \"Asia\\/Damascus\": \"SY\",
        \"Asia\\/Dhaka\": \"BD\",
        \"Asia\\/Dili\": \"TL\",
        \"Asia\\/Dubai\": \"AE\",
        \"Asia\\/Dushanbe\": \"TJ\",
        \"Asia\\/Famagusta\": \"CY\",
        \"Asia\\/Gaza\": \"PS\",
        \"Asia\\/Hebron\": \"PS\",
        \"Asia\\/Hong_Kong\": \"HK\",
        \"Asia\\/Hovd\": \"MN\",
        \"Asia\\/Irkutsk\": \"RU\",
        \"Asia\\/Jakarta\": \"ID\",
        \"Asia\\/Jayapura\": \"ID\",
        \"Asia\\/Jerusalem\": \"IL\",
        \"Asia\\/Kabul\": \"AF\",
        \"Asia\\/Kamchatka\": \"RU\",
        \"Asia\\/Karachi\": \"PK\",
        \"Asia\\/Katmandu\": \"NP\",
        \"Asia\\/Khandyga\": \"RU\",
        \"Asia\\/Krasnoyarsk\": \"RU\",
        \"Asia\\/Kuala_Lumpur\": \"MY\",
        \"Asia\\/Kuching\": \"MY\",
        \"Asia\\/Kuwait\": \"KW\",
        \"Asia\\/Macau\": \"MO\",
        \"Asia\\/Magadan\": \"RU\",
        \"Asia\\/Makassar\": \"ID\",
        \"Asia\\/Manila\": \"PH\",
        \"Asia\\/Muscat\": \"OM\",
        \"Asia\\/Nicosia\": \"CY\",
        \"Asia\\/Novokuznetsk\": \"RU\",
        \"Asia\\/Novosibirsk\": \"RU\",
        \"Asia\\/Omsk\": \"RU\",
        \"Asia\\/Oral\": \"KZ\",
        \"Asia\\/Phnom_Penh\": \"KH\",
        \"Asia\\/Pontianak\": \"ID\",
        \"Asia\\/Pyongyang\": \"KP\",
        \"Asia\\/Qatar\": \"QA\",
        \"Asia\\/Qostanay\": \"KZ\",
        \"Asia\\/Qyzylorda\": \"KZ\",
        \"Asia\\/Rangoon\": \"MM\",
        \"Asia\\/Riyadh\": \"SA\",
        \"Asia\\/Saigon\": \"VN\",
        \"Asia\\/Sakhalin\": \"RU\",
        \"Asia\\/Samarkand\": \"UZ\",
        \"Asia\\/Seoul\": \"KR\",
        \"Asia\\/Shanghai\": \"CN\",
        \"Asia\\/Singapore\": \"SG\",
        \"Asia\\/Srednekolymsk\": \"RU\",
        \"Asia\\/Taipei\": \"TW\",
        \"Asia\\/Tashkent\": \"UZ\",
        \"Asia\\/Tbilisi\": \"GE\",
        \"Asia\\/Tehran\": \"IR\",
        \"Asia\\/Thimphu\": \"BT\",
        \"Asia\\/Tokyo\": \"JP\",
        \"Asia\\/Tomsk\": \"RU\",
        \"Asia\\/Ulaanbaatar\": \"MN\",
        \"Asia\\/Urumqi\": \"CN\",
        \"Asia\\/Ust-Nera\": \"RU\",
        \"Asia\\/Vientiane\": \"LA\",
        \"Asia\\/Vladivostok\": \"RU\",
        \"Asia\\/Yakutsk\": \"RU\",
        \"Asia\\/Yekaterinburg\": \"RU\",
        \"Asia\\/Yerevan\": \"AM\",
        \"Atlantic\\/Azores\": \"PT\",
        \"Atlantic\\/Bermuda\": \"BM\",
        \"Atlantic\\/Canary\": \"ES\",
        \"Atlantic\\/Cape_Verde\": \"CV\",
        \"Atlantic\\/Faeroe\": \"FO\",
        \"Atlantic\\/Madeira\": \"PT\",
        \"Atlantic\\/Reykjavik\": \"IS\",
        \"Atlantic\\/South_Georgia\": \"GS\",
        \"Atlantic\\/St_Helena\": \"SH\",
        \"Atlantic\\/Stanley\": \"FK\",
        \"Australia\\/Adelaide\": \"AU\",
        \"Australia\\/Brisbane\": \"AU\",
        \"Australia\\/Broken_Hill\": \"AU\",
        \"Australia\\/Currie\": \"AU\",
        \"Australia\\/Darwin\": \"AU\",
        \"Australia\\/Eucla\": \"AU\",
        \"Australia\\/Hobart\": \"AU\",
        \"Australia\\/Lindeman\": \"AU\",
        \"Australia\\/Lord_Howe\": \"AU\",
        \"Australia\\/Melbourne\": \"AU\",
        \"Australia\\/Perth\": \"AU\",
        \"Australia\\/Sydney\": \"AU\",
        \"Europe\\/Amsterdam\": \"NL\",
        \"Europe\\/Andorra\": \"AD\",
        \"Europe\\/Astrakhan\": \"RU\",
        \"Europe\\/Athens\": \"GR\",
        \"Europe\\/Belgrade\": \"RS\",
        \"Europe\\/Berlin\": \"DE\",
        \"Europe\\/Bratislava\": \"SK\",
        \"Europe\\/Brussels\": \"BE\",
        \"Europe\\/Bucharest\": \"RO\",
        \"Europe\\/Budapest\": \"HU\",
        \"Europe\\/Busingen\": \"DE\",
        \"Europe\\/Chisinau\": \"MD\",
        \"Europe\\/Copenhagen\": \"DK\",
        \"Europe\\/Dublin\": \"IE\",
        \"Europe\\/Gibraltar\": \"GI\",
        \"Europe\\/Guernsey\": \"GG\",
        \"Europe\\/Helsinki\": \"FI\",
        \"Europe\\/Isle_of_Man\": \"IM\",
        \"Europe\\/Istanbul\": \"TR\",
        \"Europe\\/Jersey\": \"JE\",
        \"Europe\\/Kaliningrad\": \"RU\",
        \"Europe\\/Kiev\": \"UA\",
        \"Europe\\/Kirov\": \"RU\",
        \"Europe\\/Lisbon\": \"PT\",
        \"Europe\\/Ljubljana\": \"SI\",
        \"Europe\\/London\": \"GB\",
        \"Europe\\/Luxembourg\": \"LU\",
        \"Europe\\/Madrid\": \"ES\",
        \"Europe\\/Malta\": \"MT\",
        \"Europe\\/Mariehamn\": \"AX\",
        \"Europe\\/Minsk\": \"BY\",
        \"Europe\\/Monaco\": \"MC\",
        \"Europe\\/Moscow\": \"RU\",
        \"Europe\\/Oslo\": \"NO\",
        \"Europe\\/Paris\": \"FR\",
        \"Europe\\/Podgorica\": \"ME\",
        \"Europe\\/Prague\": \"CZ\",
        \"Europe\\/Riga\": \"LV\",
        \"Europe\\/Rome\": \"IT\",
        \"Europe\\/Samara\": \"RU\",
        \"Europe\\/San_Marino\": \"SM\",
        \"Europe\\/Sarajevo\": \"BA\",
        \"Europe\\/Saratov\": \"RU\",
        \"Europe\\/Simferopol\": \"UA\",
        \"Europe\\/Skopje\": \"MK\",
        \"Europe\\/Sofia\": \"BG\",
        \"Europe\\/Stockholm\": \"SE\",
        \"Europe\\/Tallinn\": \"EE\",
        \"Europe\\/Tirane\": \"AL\",
        \"Europe\\/Ulyanovsk\": \"RU\",
        \"Europe\\/Uzhgorod\": \"UA\",
        \"Europe\\/Vaduz\": \"LI\",
        \"Europe\\/Vatican\": \"VA\",
        \"Europe\\/Vienna\": \"AT\",
        \"Europe\\/Vilnius\": \"LT\",
        \"Europe\\/Volgograd\": \"RU\",
        \"Europe\\/Warsaw\": \"PL\",
        \"Europe\\/Zagreb\": \"HR\",
        \"Europe\\/Zaporozhye\": \"UA\",
        \"Europe\\/Zurich\": \"CH\",
        \"Indian\\/Antananarivo\": \"MG\",
        \"Indian\\/Chagos\": \"IO\",
        \"Indian\\/Christmas\": \"CX\",
        \"Indian\\/Cocos\": \"CC\",
        \"Indian\\/Comoro\": \"KM\",
        \"Indian\\/Kerguelen\": \"TF\",
        \"Indian\\/Mahe\": \"SC\",
        \"Indian\\/Maldives\": \"MV\",
        \"Indian\\/Mauritius\": \"MU\",
        \"Indian\\/Mayotte\": \"YT\",
        \"Indian\\/Reunion\": \"RE\",
        \"Pacific\\/Apia\": \"WS\",
        \"Pacific\\/Auckland\": \"NZ\",
        \"Pacific\\/Bougainville\": \"PG\",
        \"Pacific\\/Chatham\": \"NZ\",
        \"Pacific\\/Easter\": \"CL\",
        \"Pacific\\/Efate\": \"VU\",
        \"Pacific\\/Enderbury\": \"KI\",
        \"Pacific\\/Fakaofo\": \"TK\",
        \"Pacific\\/Fiji\": \"FJ\",
        \"Pacific\\/Funafuti\": \"TV\",
        \"Pacific\\/Galapagos\": \"EC\",
        \"Pacific\\/Gambier\": \"PF\",
        \"Pacific\\/Guadalcanal\": \"SB\",
        \"Pacific\\/Guam\": \"GU\",
        \"Pacific\\/Honolulu\": \"US\",
        \"Pacific\\/Johnston\": \"UM\",
        \"Pacific\\/Kiritimati\": \"KI\",
        \"Pacific\\/Kosrae\": \"FM\",
        \"Pacific\\/Kwajalein\": \"MH\",
        \"Pacific\\/Majuro\": \"MH\",
        \"Pacific\\/Marquesas\": \"PF\",
        \"Pacific\\/Midway\": \"UM\",
        \"Pacific\\/Nauru\": \"NR\",
        \"Pacific\\/Niue\": \"NU\",
        \"Pacific\\/Norfolk\": \"NF\",
        \"Pacific\\/Noumea\": \"NC\",
        \"Pacific\\/Pago_Pago\": \"AS\",
        \"Pacific\\/Palau\": \"PW\",
        \"Pacific\\/Pitcairn\": \"PN\",
        \"Pacific\\/Ponape\": \"FM\",
        \"Pacific\\/Port_Moresby\": \"PG\",
        \"Pacific\\/Rarotonga\": \"CK\",
        \"Pacific\\/Saipan\": \"MP\",
        \"Pacific\\/Tahiti\": \"PF\",
        \"Pacific\\/Tarawa\": \"KI\",
        \"Pacific\\/Tongatapu\": \"TO\",
        \"Pacific\\/Truk\": \"FM\",
        \"Pacific\\/Wake\": \"UM\",
        \"Pacific\\/Wallis\": \"WF\"
    },
    \"CountryToZone\": {
        \"AD\": [
            \"Europe\\/Andorra\"
        ],
        \"AE\": [
            \"Asia\\/Dubai\"
        ],
        \"AF\": [
            \"Asia\\/Kabul\"
        ],
        \"AG\": [
            \"America\\/Antigua\"
        ],
        \"AI\": [
            \"America\\/Anguilla\"
        ],
        \"AL\": [
            \"Europe\\/Tirane\"
        ],
        \"AM\": [
            \"Asia\\/Yerevan\"
        ],
        \"AO\": [
            \"Africa\\/Luanda\"
        ],
        \"AQ\": [
            \"Antarctica\\/Casey\",
            \"Antarctica\\/Davis\",
            \"Antarctica\\/DumontDUrville\",
            \"Antarctica\\/Mawson\",
            \"Antarctica\\/McMurdo\",
            \"Antarctica\\/Palmer\",
            \"Antarctica\\/Rothera\",
            \"Antarctica\\/Syowa\",
            \"Antarctica\\/Vostok\"
        ],
        \"AR\": [
            \"America\\/Argentina\\/La_Rioja\",
            \"America\\/Argentina\\/Rio_Gallegos\",
            \"America\\/Argentina\\/Salta\",
            \"America\\/Argentina\\/San_Juan\",
            \"America\\/Argentina\\/San_Luis\",
            \"America\\/Argentina\\/Tucuman\",
            \"America\\/Argentina\\/Ushuaia\",
            \"America\\/Buenos_Aires\",
            \"America\\/Catamarca\",
            \"America\\/Cordoba\",
            \"America\\/Jujuy\",
            \"America\\/Mendoza\"
        ],
        \"AS\": [
            \"Pacific\\/Pago_Pago\"
        ],
        \"AT\": [
            \"Europe\\/Vienna\"
        ],
        \"AU\": [
            \"Antarctica\\/Macquarie\",
            \"Australia\\/Adelaide\",
            \"Australia\\/Brisbane\",
            \"Australia\\/Broken_Hill\",
            \"Australia\\/Currie\",
            \"Australia\\/Darwin\",
            \"Australia\\/Eucla\",
            \"Australia\\/Hobart\",
            \"Australia\\/Lindeman\",
            \"Australia\\/Lord_Howe\",
            \"Australia\\/Melbourne\",
            \"Australia\\/Perth\",
            \"Australia\\/Sydney\"
        ],
        \"AW\": [
            \"America\\/Aruba\"
        ],
        \"AX\": [
            \"Europe\\/Mariehamn\"
        ],
        \"AZ\": [
            \"Asia\\/Baku\"
        ],
        \"BA\": [
            \"Europe\\/Sarajevo\"
        ],
        \"BB\": [
            \"America\\/Barbados\"
        ],
        \"BD\": [
            \"Asia\\/Dhaka\"
        ],
        \"BE\": [
            \"Europe\\/Brussels\"
        ],
        \"BF\": [
            \"Africa\\/Ouagadougou\"
        ],
        \"BG\": [
            \"Europe\\/Sofia\"
        ],
        \"BH\": [
            \"Asia\\/Bahrain\"
        ],
        \"BI\": [
            \"Africa\\/Bujumbura\"
        ],
        \"BJ\": [
            \"Africa\\/Porto-Novo\"
        ],
        \"BL\": [
            \"America\\/St_Barthelemy\"
        ],
        \"BM\": [
            \"Atlantic\\/Bermuda\"
        ],
        \"BN\": [
            \"Asia\\/Brunei\"
        ],
        \"BO\": [
            \"America\\/La_Paz\"
        ],
        \"BQ\": [
            \"America\\/Kralendijk\"
        ],
        \"BR\": [
            \"America\\/Araguaina\",
            \"America\\/Bahia\",
            \"America\\/Belem\",
            \"America\\/Boa_Vista\",
            \"America\\/Campo_Grande\",
            \"America\\/Cuiaba\",
            \"America\\/Eirunepe\",
            \"America\\/Fortaleza\",
            \"America\\/Maceio\",
            \"America\\/Manaus\",
            \"America\\/Noronha\",
            \"America\\/Porto_Velho\",
            \"America\\/Recife\",
            \"America\\/Rio_Branco\",
            \"America\\/Santarem\",
            \"America\\/Sao_Paulo\"
        ],
        \"BS\": [
            \"America\\/Nassau\"
        ],
        \"BT\": [
            \"Asia\\/Thimphu\"
        ],
        \"BW\": [
            \"Africa\\/Gaborone\"
        ],
        \"BY\": [
            \"Europe\\/Minsk\"
        ],
        \"BZ\": [
            \"America\\/Belize\"
        ],
        \"CA\": [
            \"America\\/Blanc-Sablon\",
            \"America\\/Cambridge_Bay\",
            \"America\\/Coral_Harbour\",
            \"America\\/Creston\",
            \"America\\/Dawson\",
            \"America\\/Dawson_Creek\",
            \"America\\/Edmonton\",
            \"America\\/Fort_Nelson\",
            \"America\\/Glace_Bay\",
            \"America\\/Goose_Bay\",
            \"America\\/Halifax\",
            \"America\\/Inuvik\",
            \"America\\/Iqaluit\",
            \"America\\/Moncton\",
            \"America\\/Montreal\",
            \"America\\/Nipigon\",
            \"America\\/Pangnirtung\",
            \"America\\/Rainy_River\",
            \"America\\/Rankin_Inlet\",
            \"America\\/Regina\",
            \"America\\/Resolute\",
            \"America\\/St_Johns\",
            \"America\\/Swift_Current\",
            \"America\\/Thunder_Bay\",
            \"America\\/Toronto\",
            \"America\\/Vancouver\",
            \"America\\/Whitehorse\",
            \"America\\/Winnipeg\",
            \"America\\/Yellowknife\"
        ],
        \"CC\": [
            \"Indian\\/Cocos\"
        ],
        \"CD\": [
            \"Africa\\/Kinshasa\",
            \"Africa\\/Lubumbashi\"
        ],
        \"CF\": [
            \"Africa\\/Bangui\"
        ],
        \"CG\": [
            \"Africa\\/Brazzaville\"
        ],
        \"CH\": [
            \"Europe\\/Zurich\"
        ],
        \"CI\": [
            \"Africa\\/Abidjan\"
        ],
        \"CK\": [
            \"Pacific\\/Rarotonga\"
        ],
        \"CL\": [
            \"America\\/Punta_Arenas\",
            \"America\\/Santiago\",
            \"Pacific\\/Easter\"
        ],
        \"CM\": [
            \"Africa\\/Douala\"
        ],
        \"CN\": [
            \"Asia\\/Shanghai\",
            \"Asia\\/Urumqi\"
        ],
        \"CO\": [
            \"America\\/Bogota\"
        ],
        \"CR\": [
            \"America\\/Costa_Rica\"
        ],
        \"CU\": [
            \"America\\/Havana\"
        ],
        \"CV\": [
            \"Atlantic\\/Cape_Verde\"
        ],
        \"CW\": [
            \"America\\/Curacao\"
        ],
        \"CX\": [
            \"Indian\\/Christmas\"
        ],
        \"CY\": [
            \"Asia\\/Famagusta\",
            \"Asia\\/Nicosia\"
        ],
        \"CZ\": [
            \"Europe\\/Prague\"
        ],
        \"DE\": [
            \"Europe\\/Berlin\",
            \"Europe\\/Busingen\"
        ],
        \"DJ\": [
            \"Africa\\/Djibouti\"
        ],
        \"DK\": [
            \"Europe\\/Copenhagen\"
        ],
        \"DM\": [
            \"America\\/Dominica\"
        ],
        \"DO\": [
            \"America\\/Santo_Domingo\"
        ],
        \"DZ\": [
            \"Africa\\/Algiers\"
        ],
        \"EC\": [
            \"America\\/Guayaquil\",
            \"Pacific\\/Galapagos\"
        ],
        \"EE\": [
            \"Europe\\/Tallinn\"
        ],
        \"EG\": [
            \"Africa\\/Cairo\"
        ],
        \"EH\": [
            \"Africa\\/El_Aaiun\"
        ],
        \"ER\": [
            \"Africa\\/Asmera\"
        ],
        \"ES\": [
            \"Africa\\/Ceuta\",
            \"Atlantic\\/Canary\",
            \"Europe\\/Madrid\"
        ],
        \"ET\": [
            \"Africa\\/Addis_Ababa\"
        ],
        \"FI\": [
            \"Europe\\/Helsinki\"
        ],
        \"FJ\": [
            \"Pacific\\/Fiji\"
        ],
        \"FK\": [
            \"Atlantic\\/Stanley\"
        ],
        \"FM\": [
            \"Pacific\\/Kosrae\",
            \"Pacific\\/Ponape\",
            \"Pacific\\/Truk\"
        ],
        \"FO\": [
            \"Atlantic\\/Faeroe\"
        ],
        \"FR\": [
            \"Europe\\/Paris\"
        ],
        \"GA\": [
            \"Africa\\/Libreville\"
        ],
        \"GB\": [
            \"Europe\\/London\"
        ],
        \"GD\": [
            \"America\\/Grenada\"
        ],
        \"GE\": [
            \"Asia\\/Tbilisi\"
        ],
        \"GF\": [
            \"America\\/Cayenne\"
        ],
        \"GG\": [
            \"Europe\\/Guernsey\"
        ],
        \"GH\": [
            \"Africa\\/Accra\"
        ],
        \"GI\": [
            \"Europe\\/Gibraltar\"
        ],
        \"GL\": [
            \"America\\/Danmarkshavn\",
            \"America\\/Godthab\",
            \"America\\/Scoresbysund\",
            \"America\\/Thule\"
        ],
        \"GM\": [
            \"Africa\\/Banjul\"
        ],
        \"GN\": [
            \"Africa\\/Conakry\"
        ],
        \"GP\": [
            \"America\\/Guadeloupe\"
        ],
        \"GQ\": [
            \"Africa\\/Malabo\"
        ],
        \"GR\": [
            \"Europe\\/Athens\"
        ],
        \"GS\": [
            \"Atlantic\\/South_Georgia\"
        ],
        \"GT\": [
            \"America\\/Guatemala\"
        ],
        \"GU\": [
            \"Pacific\\/Guam\"
        ],
        \"GW\": [
            \"Africa\\/Bissau\"
        ],
        \"GY\": [
            \"America\\/Guyana\"
        ],
        \"HK\": [
            \"Asia\\/Hong_Kong\"
        ],
        \"HN\": [
            \"America\\/Tegucigalpa\"
        ],
        \"HR\": [
            \"Europe\\/Zagreb\"
        ],
        \"HT\": [
            \"America\\/Port-au-Prince\"
        ],
        \"HU\": [
            \"Europe\\/Budapest\"
        ],
        \"ID\": [
            \"Asia\\/Jakarta\",
            \"Asia\\/Jayapura\",
            \"Asia\\/Makassar\",
            \"Asia\\/Pontianak\"
        ],
        \"IE\": [
            \"Europe\\/Dublin\"
        ],
        \"IL\": [
            \"Asia\\/Jerusalem\"
        ],
        \"IM\": [
            \"Europe\\/Isle_of_Man\"
        ],
        \"IN\": [
            \"Asia\\/Calcutta\"
        ],
        \"IO\": [
            \"Indian\\/Chagos\"
        ],
        \"IQ\": [
            \"Asia\\/Baghdad\"
        ],
        \"IR\": [
            \"Asia\\/Tehran\"
        ],
        \"IS\": [
            \"Atlantic\\/Reykjavik\"
        ],
        \"IT\": [
            \"Europe\\/Rome\"
        ],
        \"JE\": [
            \"Europe\\/Jersey\"
        ],
        \"JM\": [
            \"America\\/Jamaica\"
        ],
        \"JO\": [
            \"Asia\\/Amman\"
        ],
        \"JP\": [
            \"Asia\\/Tokyo\"
        ],
        \"KE\": [
            \"Africa\\/Nairobi\"
        ],
        \"KG\": [
            \"Asia\\/Bishkek\"
        ],
        \"KH\": [
            \"Asia\\/Phnom_Penh\"
        ],
        \"KI\": [
            \"Pacific\\/Enderbury\",
            \"Pacific\\/Kiritimati\",
            \"Pacific\\/Tarawa\"
        ],
        \"KM\": [
            \"Indian\\/Comoro\"
        ],
        \"KN\": [
            \"America\\/St_Kitts\"
        ],
        \"KP\": [
            \"Asia\\/Pyongyang\"
        ],
        \"KR\": [
            \"Asia\\/Seoul\"
        ],
        \"KW\": [
            \"Asia\\/Kuwait\"
        ],
        \"KY\": [
            \"America\\/Cayman\"
        ],
        \"KZ\": [
            \"Asia\\/Almaty\",
            \"Asia\\/Aqtau\",
            \"Asia\\/Aqtobe\",
            \"Asia\\/Atyrau\",
            \"Asia\\/Oral\",
            \"Asia\\/Qostanay\",
            \"Asia\\/Qyzylorda\"
        ],
        \"LA\": [
            \"Asia\\/Vientiane\"
        ],
        \"LB\": [
            \"Asia\\/Beirut\"
        ],
        \"LC\": [
            \"America\\/St_Lucia\"
        ],
        \"LI\": [
            \"Europe\\/Vaduz\"
        ],
        \"LK\": [
            \"Asia\\/Colombo\"
        ],
        \"LR\": [
            \"Africa\\/Monrovia\"
        ],
        \"LS\": [
            \"Africa\\/Maseru\"
        ],
        \"LT\": [
            \"Europe\\/Vilnius\"
        ],
        \"LU\": [
            \"Europe\\/Luxembourg\"
        ],
        \"LV\": [
            \"Europe\\/Riga\"
        ],
        \"LY\": [
            \"Africa\\/Tripoli\"
        ],
        \"MA\": [
            \"Africa\\/Casablanca\"
        ],
        \"MC\": [
            \"Europe\\/Monaco\"
        ],
        \"MD\": [
            \"Europe\\/Chisinau\"
        ],
        \"ME\": [
            \"Europe\\/Podgorica\"
        ],
        \"MF\": [
            \"America\\/Marigot\"
        ],
        \"MG\": [
            \"Indian\\/Antananarivo\"
        ],
        \"MH\": [
            \"Pacific\\/Kwajalein\",
            \"Pacific\\/Majuro\"
        ],
        \"MK\": [
            \"Europe\\/Skopje\"
        ],
        \"ML\": [
            \"Africa\\/Bamako\"
        ],
        \"MM\": [
            \"Asia\\/Rangoon\"
        ],
        \"MN\": [
            \"Asia\\/Choibalsan\",
            \"Asia\\/Hovd\",
            \"Asia\\/Ulaanbaatar\"
        ],
        \"MO\": [
            \"Asia\\/Macau\"
        ],
        \"MP\": [
            \"Pacific\\/Saipan\"
        ],
        \"MQ\": [
            \"America\\/Martinique\"
        ],
        \"MR\": [
            \"Africa\\/Nouakchott\"
        ],
        \"MS\": [
            \"America\\/Montserrat\"
        ],
        \"MT\": [
            \"Europe\\/Malta\"
        ],
        \"MU\": [
            \"Indian\\/Mauritius\"
        ],
        \"MV\": [
            \"Indian\\/Maldives\"
        ],
        \"MW\": [
            \"Africa\\/Blantyre\"
        ],
        \"MX\": [
            \"America\\/Bahia_Banderas\",
            \"America\\/Cancun\",
            \"America\\/Chihuahua\",
            \"America\\/Hermosillo\",
            \"America\\/Matamoros\",
            \"America\\/Mazatlan\",
            \"America\\/Merida\",
            \"America\\/Mexico_City\",
            \"America\\/Monterrey\",
            \"America\\/Ojinaga\",
            \"America\\/Santa_Isabel\",
            \"America\\/Tijuana\"
        ],
        \"MY\": [
            \"Asia\\/Kuala_Lumpur\",
            \"Asia\\/Kuching\"
        ],
        \"MZ\": [
            \"Africa\\/Maputo\"
        ],
        \"NA\": [
            \"Africa\\/Windhoek\"
        ],
        \"NC\": [
            \"Pacific\\/Noumea\"
        ],
        \"NE\": [
            \"Africa\\/Niamey\"
        ],
        \"NF\": [
            \"Pacific\\/Norfolk\"
        ],
        \"NG\": [
            \"Africa\\/Lagos\"
        ],
        \"NI\": [
            \"America\\/Managua\"
        ],
        \"NL\": [
            \"Europe\\/Amsterdam\"
        ],
        \"NO\": [
            \"Europe\\/Oslo\"
        ],
        \"NP\": [
            \"Asia\\/Katmandu\"
        ],
        \"NR\": [
            \"Pacific\\/Nauru\"
        ],
        \"NU\": [
            \"Pacific\\/Niue\"
        ],
        \"NZ\": [
            \"Pacific\\/Auckland\",
            \"Pacific\\/Chatham\"
        ],
        \"OM\": [
            \"Asia\\/Muscat\"
        ],
        \"PA\": [
            \"America\\/Panama\"
        ],
        \"PE\": [
            \"America\\/Lima\"
        ],
        \"PF\": [
            \"Pacific\\/Gambier\",
            \"Pacific\\/Marquesas\",
            \"Pacific\\/Tahiti\"
        ],
        \"PG\": [
            \"Pacific\\/Bougainville\",
            \"Pacific\\/Port_Moresby\"
        ],
        \"PH\": [
            \"Asia\\/Manila\"
        ],
        \"PK\": [
            \"Asia\\/Karachi\"
        ],
        \"PL\": [
            \"Europe\\/Warsaw\"
        ],
        \"PM\": [
            \"America\\/Miquelon\"
        ],
        \"PN\": [
            \"Pacific\\/Pitcairn\"
        ],
        \"PR\": [
            \"America\\/Puerto_Rico\"
        ],
        \"PS\": [
            \"Asia\\/Gaza\",
            \"Asia\\/Hebron\"
        ],
        \"PT\": [
            \"Atlantic\\/Azores\",
            \"Atlantic\\/Madeira\",
            \"Europe\\/Lisbon\"
        ],
        \"PW\": [
            \"Pacific\\/Palau\"
        ],
        \"PY\": [
            \"America\\/Asuncion\"
        ],
        \"QA\": [
            \"Asia\\/Qatar\"
        ],
        \"RE\": [
            \"Indian\\/Reunion\"
        ],
        \"RO\": [
            \"Europe\\/Bucharest\"
        ],
        \"RS\": [
            \"Europe\\/Belgrade\"
        ],
        \"RU\": [
            \"Asia\\/Anadyr\",
            \"Asia\\/Barnaul\",
            \"Asia\\/Chita\",
            \"Asia\\/Irkutsk\",
            \"Asia\\/Kamchatka\",
            \"Asia\\/Khandyga\",
            \"Asia\\/Krasnoyarsk\",
            \"Asia\\/Magadan\",
            \"Asia\\/Novokuznetsk\",
            \"Asia\\/Novosibirsk\",
            \"Asia\\/Omsk\",
            \"Asia\\/Sakhalin\",
            \"Asia\\/Srednekolymsk\",
            \"Asia\\/Tomsk\",
            \"Asia\\/Ust-Nera\",
            \"Asia\\/Vladivostok\",
            \"Asia\\/Yakutsk\",
            \"Asia\\/Yekaterinburg\",
            \"Europe\\/Astrakhan\",
            \"Europe\\/Kaliningrad\",
            \"Europe\\/Kirov\",
            \"Europe\\/Moscow\",
            \"Europe\\/Samara\",
            \"Europe\\/Saratov\",
            \"Europe\\/Ulyanovsk\",
            \"Europe\\/Volgograd\"
        ],
        \"RW\": [
            \"Africa\\/Kigali\"
        ],
        \"SA\": [
            \"Asia\\/Riyadh\"
        ],
        \"SB\": [
            \"Pacific\\/Guadalcanal\"
        ],
        \"SC\": [
            \"Indian\\/Mahe\"
        ],
        \"SD\": [
            \"Africa\\/Khartoum\"
        ],
        \"SE\": [
            \"Europe\\/Stockholm\"
        ],
        \"SG\": [
            \"Asia\\/Singapore\"
        ],
        \"SH\": [
            \"Atlantic\\/St_Helena\"
        ],
        \"SI\": [
            \"Europe\\/Ljubljana\"
        ],
        \"SJ\": [
            \"Arctic\\/Longyearbyen\"
        ],
        \"SK\": [
            \"Europe\\/Bratislava\"
        ],
        \"SL\": [
            \"Africa\\/Freetown\"
        ],
        \"SM\": [
            \"Europe\\/San_Marino\"
        ],
        \"SN\": [
            \"Africa\\/Dakar\"
        ],
        \"SO\": [
            \"Africa\\/Mogadishu\"
        ],
        \"SR\": [
            \"America\\/Paramaribo\"
        ],
        \"SS\": [
            \"Africa\\/Juba\"
        ],
        \"ST\": [
            \"Africa\\/Sao_Tome\"
        ],
        \"SV\": [
            \"America\\/El_Salvador\"
        ],
        \"SX\": [
            \"America\\/Lower_Princes\"
        ],
        \"SY\": [
            \"Asia\\/Damascus\"
        ],
        \"SZ\": [
            \"Africa\\/Mbabane\"
        ],
        \"TC\": [
            \"America\\/Grand_Turk\"
        ],
        \"TD\": [
            \"Africa\\/Ndjamena\"
        ],
        \"TF\": [
            \"Indian\\/Kerguelen\"
        ],
        \"TG\": [
            \"Africa\\/Lome\"
        ],
        \"TH\": [
            \"Asia\\/Bangkok\"
        ],
        \"TJ\": [
            \"Asia\\/Dushanbe\"
        ],
        \"TK\": [
            \"Pacific\\/Fakaofo\"
        ],
        \"TL\": [
            \"Asia\\/Dili\"
        ],
        \"TM\": [
            \"Asia\\/Ashgabat\"
        ],
        \"TN\": [
            \"Africa\\/Tunis\"
        ],
        \"TO\": [
            \"Pacific\\/Tongatapu\"
        ],
        \"TR\": [
            \"Europe\\/Istanbul\"
        ],
        \"TT\": [
            \"America\\/Port_of_Spain\"
        ],
        \"TV\": [
            \"Pacific\\/Funafuti\"
        ],
        \"TW\": [
            \"Asia\\/Taipei\"
        ],
        \"TZ\": [
            \"Africa\\/Dar_es_Salaam\"
        ],
        \"UA\": [
            \"Europe\\/Kiev\",
            \"Europe\\/Simferopol\",
            \"Europe\\/Uzhgorod\",
            \"Europe\\/Zaporozhye\"
        ],
        \"UG\": [
            \"Africa\\/Kampala\"
        ],
        \"UM\": [
            \"Pacific\\/Johnston\",
            \"Pacific\\/Midway\",
            \"Pacific\\/Wake\"
        ],
        \"US\": [
            \"America\\/Adak\",
            \"America\\/Anchorage\",
            \"America\\/Boise\",
            \"America\\/Chicago\",
            \"America\\/Denver\",
            \"America\\/Detroit\",
            \"America\\/Indiana\\/Knox\",
            \"America\\/Indiana\\/Marengo\",
            \"America\\/Indiana\\/Petersburg\",
            \"America\\/Indiana\\/Tell_City\",
            \"America\\/Indiana\\/Vevay\",
            \"America\\/Indiana\\/Vincennes\",
            \"America\\/Indiana\\/Winamac\",
            \"America\\/Indianapolis\",
            \"America\\/Juneau\",
            \"America\\/Kentucky\\/Monticello\",
            \"America\\/Los_Angeles\",
            \"America\\/Louisville\",
            \"America\\/Menominee\",
            \"America\\/Metlakatla\",
            \"America\\/New_York\",
            \"America\\/Nome\",
            \"America\\/North_Dakota\\/Beulah\",
            \"America\\/North_Dakota\\/Center\",
            \"America\\/North_Dakota\\/New_Salem\",
            \"America\\/Phoenix\",
            \"America\\/Sitka\",
            \"America\\/Yakutat\",
            \"Pacific\\/Honolulu\"
        ],
        \"UY\": [
            \"America\\/Montevideo\"
        ],
        \"UZ\": [
            \"Asia\\/Samarkand\",
            \"Asia\\/Tashkent\"
        ],
        \"VA\": [
            \"Europe\\/Vatican\"
        ],
        \"VC\": [
            \"America\\/St_Vincent\"
        ],
        \"VE\": [
            \"America\\/Caracas\"
        ],
        \"VG\": [
            \"America\\/Tortola\"
        ],
        \"VI\": [
            \"America\\/St_Thomas\"
        ],
        \"VN\": [
            \"Asia\\/Saigon\"
        ],
        \"VU\": [
            \"Pacific\\/Efate\"
        ],
        \"WF\": [
            \"Pacific\\/Wallis\"
        ],
        \"WS\": [
            \"Pacific\\/Apia\"
        ],
        \"YE\": [
            \"Asia\\/Aden\"
        ],
        \"YT\": [
            \"Indian\\/Mayotte\"
        ],
        \"ZA\": [
            \"Africa\\/Johannesburg\"
        ],
        \"ZM\": [
            \"Africa\\/Lusaka\"
        ],
        \"ZW\": [
            \"Africa\\/Harare\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/meta.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Zones\": [
        \"Africa\\/Abidjan\",
        \"Africa\\/Accra\",
        \"Africa\\/Addis_Ababa\",
        \"Africa\\/Algiers\",
        \"Africa\\/Asmera\",
        \"Africa\\/Bamako\",
        \"Africa\\/Bangui\",
        \"Africa\\/Banjul\",
        \"Africa\\/Bissau\",
        \"Africa\\/Blantyre\",
        \"Africa\\/Brazzaville\",
        \"Africa\\/Bujumbura\",
        \"Africa\\/Cairo\",
        \"Africa\\/Casablanca\",
        \"Africa\\/Ceuta\",
        \"Africa\\/Conakry\",
        \"Africa\\/Dakar\",
        \"Africa\\/Dar_es_Salaam\",
        \"Africa\\/Djibouti\",
        \"Africa\\/Douala\",
        \"Africa\\/El_Aaiun\",
        \"Africa\\/Freetown\",
        \"Africa\\/Gaborone\",
        \"Africa\\/Harare\",
        \"Africa\\/Johannesburg\",
        \"Africa\\/Juba\",
        \"Africa\\/Kampala\",
        \"Africa\\/Khartoum\",
        \"Africa\\/Kigali\",
        \"Africa\\/Kinshasa\",
        \"Africa\\/Lagos\",
        \"Africa\\/Libreville\",
        \"Africa\\/Lome\",
        \"Africa\\/Luanda\",
        \"Africa\\/Lubumbashi\",
        \"Africa\\/Lusaka\",
        \"Africa\\/Malabo\",
        \"Africa\\/Maputo\",
        \"Africa\\/Maseru\",
        \"Africa\\/Mbabane\",
        \"Africa\\/Mogadishu\",
        \"Africa\\/Monrovia\",
        \"Africa\\/Nairobi\",
        \"Africa\\/Ndjamena\",
        \"Africa\\/Niamey\",
        \"Africa\\/Nouakchott\",
        \"Africa\\/Ouagadougou\",
        \"Africa\\/Porto-Novo\",
        \"Africa\\/Sao_Tome\",
        \"Africa\\/Tripoli\",
        \"Africa\\/Tunis\",
        \"Africa\\/Windhoek\",
        \"America\\/Adak\",
        \"America\\/Anchorage\",
        \"America\\/Anguilla\",
        \"America\\/Antigua\",
        \"America\\/Araguaina\",
        \"America\\/Argentina\\/La_Rioja\",
        \"America\\/Argentina\\/Rio_Gallegos\",
        \"America\\/Argentina\\/Salta\",
        \"America\\/Argentina\\/San_Juan\",
        \"America\\/Argentina\\/San_Luis\",
        \"America\\/Argentina\\/Tucuman\",
        \"America\\/Argentina\\/Ushuaia\",
        \"America\\/Aruba\",
        \"America\\/Asuncion\",
        \"America\\/Bahia\",
        \"America\\/Bahia_Banderas\",
        \"America\\/Barbados\",
        \"America\\/Belem\",
        \"America\\/Belize\",
        \"America\\/Blanc-Sablon\",
        \"America\\/Boa_Vista\",
        \"America\\/Bogota\",
        \"America\\/Boise\",
        \"America\\/Buenos_Aires\",
        \"America\\/Cambridge_Bay\",
        \"America\\/Campo_Grande\",
        \"America\\/Cancun\",
        \"America\\/Caracas\",
        \"America\\/Catamarca\",
        \"America\\/Cayenne\",
        \"America\\/Cayman\",
        \"America\\/Chicago\",
        \"America\\/Chihuahua\",
        \"America\\/Coral_Harbour\",
        \"America\\/Cordoba\",
        \"America\\/Costa_Rica\",
        \"America\\/Creston\",
        \"America\\/Cuiaba\",
        \"America\\/Curacao\",
        \"America\\/Danmarkshavn\",
        \"America\\/Dawson\",
        \"America\\/Dawson_Creek\",
        \"America\\/Denver\",
        \"America\\/Detroit\",
        \"America\\/Dominica\",
        \"America\\/Edmonton\",
        \"America\\/Eirunepe\",
        \"America\\/El_Salvador\",
        \"America\\/Fort_Nelson\",
        \"America\\/Fortaleza\",
        \"America\\/Glace_Bay\",
        \"America\\/Godthab\",
        \"America\\/Goose_Bay\",
        \"America\\/Grand_Turk\",
        \"America\\/Grenada\",
        \"America\\/Guadeloupe\",
        \"America\\/Guatemala\",
        \"America\\/Guayaquil\",
        \"America\\/Guyana\",
        \"America\\/Halifax\",
        \"America\\/Havana\",
        \"America\\/Hermosillo\",
        \"America\\/Indiana\\/Knox\",
        \"America\\/Indiana\\/Marengo\",
        \"America\\/Indiana\\/Petersburg\",
        \"America\\/Indiana\\/Tell_City\",
        \"America\\/Indiana\\/Vevay\",
        \"America\\/Indiana\\/Vincennes\",
        \"America\\/Indiana\\/Winamac\",
        \"America\\/Indianapolis\",
        \"America\\/Inuvik\",
        \"America\\/Iqaluit\",
        \"America\\/Jamaica\",
        \"America\\/Jujuy\",
        \"America\\/Juneau\",
        \"America\\/Kentucky\\/Monticello\",
        \"America\\/Kralendijk\",
        \"America\\/La_Paz\",
        \"America\\/Lima\",
        \"America\\/Los_Angeles\",
        \"America\\/Louisville\",
        \"America\\/Lower_Princes\",
        \"America\\/Maceio\",
        \"America\\/Managua\",
        \"America\\/Manaus\",
        \"America\\/Marigot\",
        \"America\\/Martinique\",
        \"America\\/Matamoros\",
        \"America\\/Mazatlan\",
        \"America\\/Mendoza\",
        \"America\\/Menominee\",
        \"America\\/Merida\",
        \"America\\/Metlakatla\",
        \"America\\/Mexico_City\",
        \"America\\/Miquelon\",
        \"America\\/Moncton\",
        \"America\\/Monterrey\",
        \"America\\/Montevideo\",
        \"America\\/Montreal\",
        \"America\\/Montserrat\",
        \"America\\/Nassau\",
        \"America\\/New_York\",
        \"America\\/Nipigon\",
        \"America\\/Nome\",
        \"America\\/Noronha\",
        \"America\\/North_Dakota\\/Beulah\",
        \"America\\/North_Dakota\\/Center\",
        \"America\\/North_Dakota\\/New_Salem\",
        \"America\\/Ojinaga\",
        \"America\\/Panama\",
        \"America\\/Pangnirtung\",
        \"America\\/Paramaribo\",
        \"America\\/Phoenix\",
        \"America\\/Port-au-Prince\",
        \"America\\/Port_of_Spain\",
        \"America\\/Porto_Velho\",
        \"America\\/Puerto_Rico\",
        \"America\\/Punta_Arenas\",
        \"America\\/Rainy_River\",
        \"America\\/Rankin_Inlet\",
        \"America\\/Recife\",
        \"America\\/Regina\",
        \"America\\/Resolute\",
        \"America\\/Rio_Branco\",
        \"America\\/Santa_Isabel\",
        \"America\\/Santarem\",
        \"America\\/Santiago\",
        \"America\\/Santo_Domingo\",
        \"America\\/Sao_Paulo\",
        \"America\\/Scoresbysund\",
        \"America\\/Sitka\",
        \"America\\/St_Barthelemy\",
        \"America\\/St_Johns\",
        \"America\\/St_Kitts\",
        \"America\\/St_Lucia\",
        \"America\\/St_Thomas\",
        \"America\\/St_Vincent\",
        \"America\\/Swift_Current\",
        \"America\\/Tegucigalpa\",
        \"America\\/Thule\",
        \"America\\/Thunder_Bay\",
        \"America\\/Tijuana\",
        \"America\\/Toronto\",
        \"America\\/Tortola\",
        \"America\\/Vancouver\",
        \"America\\/Whitehorse\",
        \"America\\/Winnipeg\",
        \"America\\/Yakutat\",
        \"America\\/Yellowknife\",
        \"Antarctica\\/Casey\",
        \"Antarctica\\/Davis\",
        \"Antarctica\\/DumontDUrville\",
        \"Antarctica\\/Macquarie\",
        \"Antarctica\\/Mawson\",
        \"Antarctica\\/McMurdo\",
        \"Antarctica\\/Palmer\",
        \"Antarctica\\/Rothera\",
        \"Antarctica\\/Syowa\",
        \"Antarctica\\/Troll\",
        \"Antarctica\\/Vostok\",
        \"Arctic\\/Longyearbyen\",
        \"Asia\\/Aden\",
        \"Asia\\/Almaty\",
        \"Asia\\/Amman\",
        \"Asia\\/Anadyr\",
        \"Asia\\/Aqtau\",
        \"Asia\\/Aqtobe\",
        \"Asia\\/Ashgabat\",
        \"Asia\\/Atyrau\",
        \"Asia\\/Baghdad\",
        \"Asia\\/Bahrain\",
        \"Asia\\/Baku\",
        \"Asia\\/Bangkok\",
        \"Asia\\/Barnaul\",
        \"Asia\\/Beirut\",
        \"Asia\\/Bishkek\",
        \"Asia\\/Brunei\",
        \"Asia\\/Calcutta\",
        \"Asia\\/Chita\",
        \"Asia\\/Choibalsan\",
        \"Asia\\/Colombo\",
        \"Asia\\/Damascus\",
        \"Asia\\/Dhaka\",
        \"Asia\\/Dili\",
        \"Asia\\/Dubai\",
        \"Asia\\/Dushanbe\",
        \"Asia\\/Famagusta\",
        \"Asia\\/Gaza\",
        \"Asia\\/Hebron\",
        \"Asia\\/Hong_Kong\",
        \"Asia\\/Hovd\",
        \"Asia\\/Irkutsk\",
        \"Asia\\/Jakarta\",
        \"Asia\\/Jayapura\",
        \"Asia\\/Jerusalem\",
        \"Asia\\/Kabul\",
        \"Asia\\/Kamchatka\",
        \"Asia\\/Karachi\",
        \"Asia\\/Katmandu\",
        \"Asia\\/Khandyga\",
        \"Asia\\/Krasnoyarsk\",
        \"Asia\\/Kuala_Lumpur\",
        \"Asia\\/Kuching\",
        \"Asia\\/Kuwait\",
        \"Asia\\/Macau\",
        \"Asia\\/Magadan\",
        \"Asia\\/Makassar\",
        \"Asia\\/Manila\",
        \"Asia\\/Muscat\",
        \"Asia\\/Nicosia\",
        \"Asia\\/Novokuznetsk\",
        \"Asia\\/Novosibirsk\",
        \"Asia\\/Omsk\",
        \"Asia\\/Oral\",
        \"Asia\\/Phnom_Penh\",
        \"Asia\\/Pontianak\",
        \"Asia\\/Pyongyang\",
        \"Asia\\/Qatar\",
        \"Asia\\/Qostanay\",
        \"Asia\\/Qyzylorda\",
        \"Asia\\/Rangoon\",
        \"Asia\\/Riyadh\",
        \"Asia\\/Saigon\",
        \"Asia\\/Sakhalin\",
        \"Asia\\/Samarkand\",
        \"Asia\\/Seoul\",
        \"Asia\\/Shanghai\",
        \"Asia\\/Singapore\",
        \"Asia\\/Srednekolymsk\",
        \"Asia\\/Taipei\",
        \"Asia\\/Tashkent\",
        \"Asia\\/Tbilisi\",
        \"Asia\\/Tehran\",
        \"Asia\\/Thimphu\",
        \"Asia\\/Tokyo\",
        \"Asia\\/Tomsk\",
        \"Asia\\/Ulaanbaatar\",
        \"Asia\\/Urumqi\",
        \"Asia\\/Ust-Nera\",
        \"Asia\\/Vientiane\",
        \"Asia\\/Vladivostok\",
        \"Asia\\/Yakutsk\",
        \"Asia\\/Yekaterinburg\",
        \"Asia\\/Yerevan\",
        \"Atlantic\\/Azores\",
        \"Atlantic\\/Bermuda\",
        \"Atlantic\\/Canary\",
        \"Atlantic\\/Cape_Verde\",
        \"Atlantic\\/Faeroe\",
        \"Atlantic\\/Madeira\",
        \"Atlantic\\/Reykjavik\",
        \"Atlantic\\/South_Georgia\",
        \"Atlantic\\/St_Helena\",
        \"Atlantic\\/Stanley\",
        \"Australia\\/Adelaide\",
        \"Australia\\/Brisbane\",
        \"Australia\\/Broken_Hill\",
        \"Australia\\/Currie\",
        \"Australia\\/Darwin\",
        \"Australia\\/Eucla\",
        \"Australia\\/Hobart\",
        \"Australia\\/Lindeman\",
        \"Australia\\/Lord_Howe\",
        \"Australia\\/Melbourne\",
        \"Australia\\/Perth\",
        \"Australia\\/Sydney\",
        \"CST6CDT\",
        \"EST5EDT\",
        \"Etc\\/GMT\",
        \"Etc\\/UTC\",
        \"Europe\\/Amsterdam\",
        \"Europe\\/Andorra\",
        \"Europe\\/Astrakhan\",
        \"Europe\\/Athens\",
        \"Europe\\/Belgrade\",
        \"Europe\\/Berlin\",
        \"Europe\\/Bratislava\",
        \"Europe\\/Brussels\",
        \"Europe\\/Bucharest\",
        \"Europe\\/Budapest\",
        \"Europe\\/Busingen\",
        \"Europe\\/Chisinau\",
        \"Europe\\/Copenhagen\",
        \"Europe\\/Dublin\",
        \"Europe\\/Gibraltar\",
        \"Europe\\/Guernsey\",
        \"Europe\\/Helsinki\",
        \"Europe\\/Isle_of_Man\",
        \"Europe\\/Istanbul\",
        \"Europe\\/Jersey\",
        \"Europe\\/Kaliningrad\",
        \"Europe\\/Kiev\",
        \"Europe\\/Kirov\",
        \"Europe\\/Lisbon\",
        \"Europe\\/Ljubljana\",
        \"Europe\\/London\",
        \"Europe\\/Luxembourg\",
        \"Europe\\/Madrid\",
        \"Europe\\/Malta\",
        \"Europe\\/Mariehamn\",
        \"Europe\\/Minsk\",
        \"Europe\\/Monaco\",
        \"Europe\\/Moscow\",
        \"Europe\\/Oslo\",
        \"Europe\\/Paris\",
        \"Europe\\/Podgorica\",
        \"Europe\\/Prague\",
        \"Europe\\/Riga\",
        \"Europe\\/Rome\",
        \"Europe\\/Samara\",
        \"Europe\\/San_Marino\",
        \"Europe\\/Sarajevo\",
        \"Europe\\/Saratov\",
        \"Europe\\/Simferopol\",
        \"Europe\\/Skopje\",
        \"Europe\\/Sofia\",
        \"Europe\\/Stockholm\",
        \"Europe\\/Tallinn\",
        \"Europe\\/Tirane\",
        \"Europe\\/Ulyanovsk\",
        \"Europe\\/Uzhgorod\",
        \"Europe\\/Vaduz\",
        \"Europe\\/Vatican\",
        \"Europe\\/Vienna\",
        \"Europe\\/Vilnius\",
        \"Europe\\/Volgograd\",
        \"Europe\\/Warsaw\",
        \"Europe\\/Zagreb\",
        \"Europe\\/Zaporozhye\",
        \"Europe\\/Zurich\",
        \"Indian\\/Antananarivo\",
        \"Indian\\/Chagos\",
        \"Indian\\/Christmas\",
        \"Indian\\/Cocos\",
        \"Indian\\/Comoro\",
        \"Indian\\/Kerguelen\",
        \"Indian\\/Mahe\",
        \"Indian\\/Maldives\",
        \"Indian\\/Mauritius\",
        \"Indian\\/Mayotte\",
        \"Indian\\/Reunion\",
        \"MST7MDT\",
        \"PST8PDT\",
        \"Pacific\\/Apia\",
        \"Pacific\\/Auckland\",
        \"Pacific\\/Bougainville\",
        \"Pacific\\/Chatham\",
        \"Pacific\\/Easter\",
        \"Pacific\\/Efate\",
        \"Pacific\\/Enderbury\",
        \"Pacific\\/Fakaofo\",
        \"Pacific\\/Fiji\",
        \"Pacific\\/Funafuti\",
        \"Pacific\\/Galapagos\",
        \"Pacific\\/Gambier\",
        \"Pacific\\/Guadalcanal\",
        \"Pacific\\/Guam\",
        \"Pacific\\/Honolulu\",
        \"Pacific\\/Johnston\",
        \"Pacific\\/Kiritimati\",
        \"Pacific\\/Kosrae\",
        \"Pacific\\/Kwajalein\",
        \"Pacific\\/Majuro\",
        \"Pacific\\/Marquesas\",
        \"Pacific\\/Midway\",
        \"Pacific\\/Nauru\",
        \"Pacific\\/Niue\",
        \"Pacific\\/Norfolk\",
        \"Pacific\\/Noumea\",
        \"Pacific\\/Pago_Pago\",
        \"Pacific\\/Palau\",
        \"Pacific\\/Pitcairn\",
        \"Pacific\\/Ponape\",
        \"Pacific\\/Port_Moresby\",
        \"Pacific\\/Rarotonga\",
        \"Pacific\\/Saipan\",
        \"Pacific\\/Tahiti\",
        \"Pacific\\/Tarawa\",
        \"Pacific\\/Tongatapu\",
        \"Pacific\\/Truk\",
        \"Pacific\\/Wake\",
        \"Pacific\\/Wallis\"
    ],
    \"ZoneToCountry\": {
        \"Africa\\/Abidjan\": \"CI\",
        \"Africa\\/Accra\": \"GH\",
        \"Africa\\/Addis_Ababa\": \"ET\",
        \"Africa\\/Algiers\": \"DZ\",
        \"Africa\\/Asmera\": \"ER\",
        \"Africa\\/Bamako\": \"ML\",
        \"Africa\\/Bangui\": \"CF\",
        \"Africa\\/Banjul\": \"GM\",
        \"Africa\\/Bissau\": \"GW\",
        \"Africa\\/Blantyre\": \"MW\",
        \"Africa\\/Brazzaville\": \"CG\",
        \"Africa\\/Bujumbura\": \"BI\",
        \"Africa\\/Cairo\": \"EG\",
        \"Africa\\/Casablanca\": \"MA\",
        \"Africa\\/Ceuta\": \"ES\",
        \"Africa\\/Conakry\": \"GN\",
        \"Africa\\/Dakar\": \"SN\",
        \"Africa\\/Dar_es_Salaam\": \"TZ\",
        \"Africa\\/Djibouti\": \"DJ\",
        \"Africa\\/Douala\": \"CM\",
        \"Africa\\/El_Aaiun\": \"EH\",
        \"Africa\\/Freetown\": \"SL\",
        \"Africa\\/Gaborone\": \"BW\",
        \"Africa\\/Harare\": \"ZW\",
        \"Africa\\/Johannesburg\": \"ZA\",
        \"Africa\\/Juba\": \"SS\",
        \"Africa\\/Kampala\": \"UG\",
        \"Africa\\/Khartoum\": \"SD\",
        \"Africa\\/Kigali\": \"RW\",
        \"Africa\\/Kinshasa\": \"CD\",
        \"Africa\\/Lagos\": \"NG\",
        \"Africa\\/Libreville\": \"GA\",
        \"Africa\\/Lome\": \"TG\",
        \"Africa\\/Luanda\": \"AO\",
        \"Africa\\/Lubumbashi\": \"CD\",
        \"Africa\\/Lusaka\": \"ZM\",
        \"Africa\\/Malabo\": \"GQ\",
        \"Africa\\/Maputo\": \"MZ\",
        \"Africa\\/Maseru\": \"LS\",
        \"Africa\\/Mbabane\": \"SZ\",
        \"Africa\\/Mogadishu\": \"SO\",
        \"Africa\\/Monrovia\": \"LR\",
        \"Africa\\/Nairobi\": \"KE\",
        \"Africa\\/Ndjamena\": \"TD\",
        \"Africa\\/Niamey\": \"NE\",
        \"Africa\\/Nouakchott\": \"MR\",
        \"Africa\\/Ouagadougou\": \"BF\",
        \"Africa\\/Porto-Novo\": \"BJ\",
        \"Africa\\/Sao_Tome\": \"ST\",
        \"Africa\\/Tripoli\": \"LY\",
        \"Africa\\/Tunis\": \"TN\",
        \"Africa\\/Windhoek\": \"NA\",
        \"America\\/Adak\": \"US\",
        \"America\\/Anchorage\": \"US\",
        \"America\\/Anguilla\": \"AI\",
        \"America\\/Antigua\": \"AG\",
        \"America\\/Araguaina\": \"BR\",
        \"America\\/Argentina\\/La_Rioja\": \"AR\",
        \"America\\/Argentina\\/Rio_Gallegos\": \"AR\",
        \"America\\/Argentina\\/Salta\": \"AR\",
        \"America\\/Argentina\\/San_Juan\": \"AR\",
        \"America\\/Argentina\\/San_Luis\": \"AR\",
        \"America\\/Argentina\\/Tucuman\": \"AR\",
        \"America\\/Argentina\\/Ushuaia\": \"AR\",
        \"America\\/Aruba\": \"AW\",
        \"America\\/Asuncion\": \"PY\",
        \"America\\/Bahia\": \"BR\",
        \"America\\/Bahia_Banderas\": \"MX\",
        \"America\\/Barbados\": \"BB\",
        \"America\\/Belem\": \"BR\",
        \"America\\/Belize\": \"BZ\",
        \"America\\/Blanc-Sablon\": \"CA\",
        \"America\\/Boa_Vista\": \"BR\",
        \"America\\/Bogota\": \"CO\",
        \"America\\/Boise\": \"US\",
        \"America\\/Buenos_Aires\": \"AR\",
        \"America\\/Cambridge_Bay\": \"CA\",
        \"America\\/Campo_Grande\": \"BR\",
        \"America\\/Cancun\": \"MX\",
        \"America\\/Caracas\": \"VE\",
        \"America\\/Catamarca\": \"AR\",
        \"America\\/Cayenne\": \"GF\",
        \"America\\/Cayman\": \"KY\",
        \"America\\/Chicago\": \"US\",
        \"America\\/Chihuahua\": \"MX\",
        \"America\\/Coral_Harbour\": \"CA\",
        \"America\\/Cordoba\": \"AR\",
        \"America\\/Costa_Rica\": \"CR\",
        \"America\\/Creston\": \"CA\",
        \"America\\/Cuiaba\": \"BR\",
        \"America\\/Curacao\": \"CW\",
        \"America\\/Danmarkshavn\": \"GL\",
        \"America\\/Dawson\": \"CA\",
        \"America\\/Dawson_Creek\": \"CA\",
        \"America\\/Denver\": \"US\",
        \"America\\/Detroit\": \"US\",
        \"America\\/Dominica\": \"DM\",
        \"America\\/Edmonton\": \"CA\",
        \"America\\/Eirunepe\": \"BR\",
        \"America\\/El_Salvador\": \"SV\",
        \"America\\/Fort_Nelson\": \"CA\",
        \"America\\/Fortaleza\": \"BR\",
        \"America\\/Glace_Bay\": \"CA\",
        \"America\\/Godthab\": \"GL\",
        \"America\\/Goose_Bay\": \"CA\",
        \"America\\/Grand_Turk\": \"TC\",
        \"America\\/Grenada\": \"GD\",
        \"America\\/Guadeloupe\": \"GP\",
        \"America\\/Guatemala\": \"GT\",
        \"America\\/Guayaquil\": \"EC\",
        \"America\\/Guyana\": \"GY\",
        \"America\\/Halifax\": \"CA\",
        \"America\\/Havana\": \"CU\",
        \"America\\/Hermosillo\": \"MX\",
        \"America\\/Indiana\\/Knox\": \"US\",
        \"America\\/Indiana\\/Marengo\": \"US\",
        \"America\\/Indiana\\/Petersburg\": \"US\",
        \"America\\/Indiana\\/Tell_City\": \"US\",
        \"America\\/Indiana\\/Vevay\": \"US\",
        \"America\\/Indiana\\/Vincennes\": \"US\",
        \"America\\/Indiana\\/Winamac\": \"US\",
        \"America\\/Indianapolis\": \"US\",
        \"America\\/Inuvik\": \"CA\",
        \"America\\/Iqaluit\": \"CA\",
        \"America\\/Jamaica\": \"JM\",
        \"America\\/Jujuy\": \"AR\",
        \"America\\/Juneau\": \"US\",
        \"America\\/Kentucky\\/Monticello\": \"US\",
        \"America\\/Kralendijk\": \"BQ\",
        \"America\\/La_Paz\": \"BO\",
        \"America\\/Lima\": \"PE\",
        \"America\\/Los_Angeles\": \"US\",
        \"America\\/Louisville\": \"US\",
        \"America\\/Lower_Princes\": \"SX\",
        \"America\\/Maceio\": \"BR\",
        \"America\\/Managua\": \"NI\",
        \"America\\/Manaus\": \"BR\",
        \"America\\/Marigot\": \"MF\",
        \"America\\/Martinique\": \"MQ\",
        \"America\\/Matamoros\": \"MX\",
        \"America\\/Mazatlan\": \"MX\",
        \"America\\/Mendoza\": \"AR\",
        \"America\\/Menominee\": \"US\",
        \"America\\/Merida\": \"MX\",
        \"America\\/Metlakatla\": \"US\",
        \"America\\/Mexico_City\": \"MX\",
        \"America\\/Miquelon\": \"PM\",
        \"America\\/Moncton\": \"CA\",
        \"America\\/Monterrey\": \"MX\",
        \"America\\/Montevideo\": \"UY\",
        \"America\\/Montreal\": \"CA\",
        \"America\\/Montserrat\": \"MS\",
        \"America\\/Nassau\": \"BS\",
        \"America\\/New_York\": \"US\",
        \"America\\/Nipigon\": \"CA\",
        \"America\\/Nome\": \"US\",
        \"America\\/Noronha\": \"BR\",
        \"America\\/North_Dakota\\/Beulah\": \"US\",
        \"America\\/North_Dakota\\/Center\": \"US\",
        \"America\\/North_Dakota\\/New_Salem\": \"US\",
        \"America\\/Ojinaga\": \"MX\",
        \"America\\/Panama\": \"PA\",
        \"America\\/Pangnirtung\": \"CA\",
        \"America\\/Paramaribo\": \"SR\",
        \"America\\/Phoenix\": \"US\",
        \"America\\/Port-au-Prince\": \"HT\",
        \"America\\/Port_of_Spain\": \"TT\",
        \"America\\/Porto_Velho\": \"BR\",
        \"America\\/Puerto_Rico\": \"PR\",
        \"America\\/Punta_Arenas\": \"CL\",
        \"America\\/Rainy_River\": \"CA\",
        \"America\\/Rankin_Inlet\": \"CA\",
        \"America\\/Recife\": \"BR\",
        \"America\\/Regina\": \"CA\",
        \"America\\/Resolute\": \"CA\",
        \"America\\/Rio_Branco\": \"BR\",
        \"America\\/Santa_Isabel\": \"MX\",
        \"America\\/Santarem\": \"BR\",
        \"America\\/Santiago\": \"CL\",
        \"America\\/Santo_Domingo\": \"DO\",
        \"America\\/Sao_Paulo\": \"BR\",
        \"America\\/Scoresbysund\": \"GL\",
        \"America\\/Sitka\": \"US\",
        \"America\\/St_Barthelemy\": \"BL\",
        \"America\\/St_Johns\": \"CA\",
        \"America\\/St_Kitts\": \"KN\",
        \"America\\/St_Lucia\": \"LC\",
        \"America\\/St_Thomas\": \"VI\",
        \"America\\/St_Vincent\": \"VC\",
        \"America\\/Swift_Current\": \"CA\",
        \"America\\/Tegucigalpa\": \"HN\",
        \"America\\/Thule\": \"GL\",
        \"America\\/Thunder_Bay\": \"CA\",
        \"America\\/Tijuana\": \"MX\",
        \"America\\/Toronto\": \"CA\",
        \"America\\/Tortola\": \"VG\",
        \"America\\/Vancouver\": \"CA\",
        \"America\\/Whitehorse\": \"CA\",
        \"America\\/Winnipeg\": \"CA\",
        \"America\\/Yakutat\": \"US\",
        \"America\\/Yellowknife\": \"CA\",
        \"Antarctica\\/Casey\": \"AQ\",
        \"Antarctica\\/Davis\": \"AQ\",
        \"Antarctica\\/DumontDUrville\": \"AQ\",
        \"Antarctica\\/Macquarie\": \"AU\",
        \"Antarctica\\/Mawson\": \"AQ\",
        \"Antarctica\\/McMurdo\": \"AQ\",
        \"Antarctica\\/Palmer\": \"AQ\",
        \"Antarctica\\/Rothera\": \"AQ\",
        \"Antarctica\\/Syowa\": \"AQ\",
        \"Antarctica\\/Vostok\": \"AQ\",
        \"Arctic\\/Longyearbyen\": \"SJ\",
        \"Asia\\/Aden\": \"YE\",
        \"Asia\\/Almaty\": \"KZ\",
        \"Asia\\/Amman\": \"JO\",
        \"Asia\\/Anadyr\": \"RU\",
        \"Asia\\/Aqtau\": \"KZ\",
        \"Asia\\/Aqtobe\": \"KZ\",
        \"Asia\\/Ashgabat\": \"TM\",
        \"Asia\\/Atyrau\": \"KZ\",
        \"Asia\\/Baghdad\": \"IQ\",
        \"Asia\\/Bahrain\": \"BH\",
        \"Asia\\/Baku\": \"AZ\",
        \"Asia\\/Bangkok\": \"TH\",
        \"Asia\\/Barnaul\": \"RU\",
        \"Asia\\/Beirut\": \"LB\",
        \"Asia\\/Bishkek\": \"KG\",
        \"Asia\\/Brunei\": \"BN\",
        \"Asia\\/Calcutta\": \"IN\",
        \"Asia\\/Chita\": \"RU\",
        \"Asia\\/Choibalsan\": \"MN\",
        \"Asia\\/Colombo\": \"LK\",
        \"Asia\\/Damascus\": \"SY\",
        \"Asia\\/Dhaka\": \"BD\",
        \"Asia\\/Dili\": \"TL\",
        \"Asia\\/Dubai\": \"AE\",
        \"Asia\\/Dushanbe\": \"TJ\",
        \"Asia\\/Famagusta\": \"CY\",
        \"Asia\\/Gaza\": \"PS\",
        \"Asia\\/Hebron\": \"PS\",
        \"Asia\\/Hong_Kong\": \"HK\",
        \"Asia\\/Hovd\": \"MN\",
        \"Asia\\/Irkutsk\": \"RU\",
        \"Asia\\/Jakarta\": \"ID\",
        \"Asia\\/Jayapura\": \"ID\",
        \"Asia\\/Jerusalem\": \"IL\",
        \"Asia\\/Kabul\": \"AF\",
        \"Asia\\/Kamchatka\": \"RU\",
        \"Asia\\/Karachi\": \"PK\",
        \"Asia\\/Katmandu\": \"NP\",
        \"Asia\\/Khandyga\": \"RU\",
        \"Asia\\/Krasnoyarsk\": \"RU\",
        \"Asia\\/Kuala_Lumpur\": \"MY\",
        \"Asia\\/Kuching\": \"MY\",
        \"Asia\\/Kuwait\": \"KW\",
        \"Asia\\/Macau\": \"MO\",
        \"Asia\\/Magadan\": \"RU\",
        \"Asia\\/Makassar\": \"ID\",
        \"Asia\\/Manila\": \"PH\",
        \"Asia\\/Muscat\": \"OM\",
        \"Asia\\/Nicosia\": \"CY\",
        \"Asia\\/Novokuznetsk\": \"RU\",
        \"Asia\\/Novosibirsk\": \"RU\",
        \"Asia\\/Omsk\": \"RU\",
        \"Asia\\/Oral\": \"KZ\",
        \"Asia\\/Phnom_Penh\": \"KH\",
        \"Asia\\/Pontianak\": \"ID\",
        \"Asia\\/Pyongyang\": \"KP\",
        \"Asia\\/Qatar\": \"QA\",
        \"Asia\\/Qostanay\": \"KZ\",
        \"Asia\\/Qyzylorda\": \"KZ\",
        \"Asia\\/Rangoon\": \"MM\",
        \"Asia\\/Riyadh\": \"SA\",
        \"Asia\\/Saigon\": \"VN\",
        \"Asia\\/Sakhalin\": \"RU\",
        \"Asia\\/Samarkand\": \"UZ\",
        \"Asia\\/Seoul\": \"KR\",
        \"Asia\\/Shanghai\": \"CN\",
        \"Asia\\/Singapore\": \"SG\",
        \"Asia\\/Srednekolymsk\": \"RU\",
        \"Asia\\/Taipei\": \"TW\",
        \"Asia\\/Tashkent\": \"UZ\",
        \"Asia\\/Tbilisi\": \"GE\",
        \"Asia\\/Tehran\": \"IR\",
        \"Asia\\/Thimphu\": \"BT\",
        \"Asia\\/Tokyo\": \"JP\",
        \"Asia\\/Tomsk\": \"RU\",
        \"Asia\\/Ulaanbaatar\": \"MN\",
        \"Asia\\/Urumqi\": \"CN\",
        \"Asia\\/Ust-Nera\": \"RU\",
        \"Asia\\/Vientiane\": \"LA\",
        \"Asia\\/Vladivostok\": \"RU\",
        \"Asia\\/Yakutsk\": \"RU\",
        \"Asia\\/Yekaterinburg\": \"RU\",
        \"Asia\\/Yerevan\": \"AM\",
        \"Atlantic\\/Azores\": \"PT\",
        \"Atlantic\\/Bermuda\": \"BM\",
        \"Atlantic\\/Canary\": \"ES\",
        \"Atlantic\\/Cape_Verde\": \"CV\",
        \"Atlantic\\/Faeroe\": \"FO\",
        \"Atlantic\\/Madeira\": \"PT\",
        \"Atlantic\\/Reykjavik\": \"IS\",
        \"Atlantic\\/South_Georgia\": \"GS\",
        \"Atlantic\\/St_Helena\": \"SH\",
        \"Atlantic\\/Stanley\": \"FK\",
        \"Australia\\/Adelaide\": \"AU\",
        \"Australia\\/Brisbane\": \"AU\",
        \"Australia\\/Broken_Hill\": \"AU\",
        \"Australia\\/Currie\": \"AU\",
        \"Australia\\/Darwin\": \"AU\",
        \"Australia\\/Eucla\": \"AU\",
        \"Australia\\/Hobart\": \"AU\",
        \"Australia\\/Lindeman\": \"AU\",
        \"Australia\\/Lord_Howe\": \"AU\",
        \"Australia\\/Melbourne\": \"AU\",
        \"Australia\\/Perth\": \"AU\",
        \"Australia\\/Sydney\": \"AU\",
        \"Europe\\/Amsterdam\": \"NL\",
        \"Europe\\/Andorra\": \"AD\",
        \"Europe\\/Astrakhan\": \"RU\",
        \"Europe\\/Athens\": \"GR\",
        \"Europe\\/Belgrade\": \"RS\",
        \"Europe\\/Berlin\": \"DE\",
        \"Europe\\/Bratislava\": \"SK\",
        \"Europe\\/Brussels\": \"BE\",
        \"Europe\\/Bucharest\": \"RO\",
        \"Europe\\/Budapest\": \"HU\",
        \"Europe\\/Busingen\": \"DE\",
        \"Europe\\/Chisinau\": \"MD\",
        \"Europe\\/Copenhagen\": \"DK\",
        \"Europe\\/Dublin\": \"IE\",
        \"Europe\\/Gibraltar\": \"GI\",
        \"Europe\\/Guernsey\": \"GG\",
        \"Europe\\/Helsinki\": \"FI\",
        \"Europe\\/Isle_of_Man\": \"IM\",
        \"Europe\\/Istanbul\": \"TR\",
        \"Europe\\/Jersey\": \"JE\",
        \"Europe\\/Kaliningrad\": \"RU\",
        \"Europe\\/Kiev\": \"UA\",
        \"Europe\\/Kirov\": \"RU\",
        \"Europe\\/Lisbon\": \"PT\",
        \"Europe\\/Ljubljana\": \"SI\",
        \"Europe\\/London\": \"GB\",
        \"Europe\\/Luxembourg\": \"LU\",
        \"Europe\\/Madrid\": \"ES\",
        \"Europe\\/Malta\": \"MT\",
        \"Europe\\/Mariehamn\": \"AX\",
        \"Europe\\/Minsk\": \"BY\",
        \"Europe\\/Monaco\": \"MC\",
        \"Europe\\/Moscow\": \"RU\",
        \"Europe\\/Oslo\": \"NO\",
        \"Europe\\/Paris\": \"FR\",
        \"Europe\\/Podgorica\": \"ME\",
        \"Europe\\/Prague\": \"CZ\",
        \"Europe\\/Riga\": \"LV\",
        \"Europe\\/Rome\": \"IT\",
        \"Europe\\/Samara\": \"RU\",
        \"Europe\\/San_Marino\": \"SM\",
        \"Europe\\/Sarajevo\": \"BA\",
        \"Europe\\/Saratov\": \"RU\",
        \"Europe\\/Simferopol\": \"UA\",
        \"Europe\\/Skopje\": \"MK\",
        \"Europe\\/Sofia\": \"BG\",
        \"Europe\\/Stockholm\": \"SE\",
        \"Europe\\/Tallinn\": \"EE\",
        \"Europe\\/Tirane\": \"AL\",
        \"Europe\\/Ulyanovsk\": \"RU\",
        \"Europe\\/Uzhgorod\": \"UA\",
        \"Europe\\/Vaduz\": \"LI\",
        \"Europe\\/Vatican\": \"VA\",
        \"Europe\\/Vienna\": \"AT\",
        \"Europe\\/Vilnius\": \"LT\",
        \"Europe\\/Volgograd\": \"RU\",
        \"Europe\\/Warsaw\": \"PL\",
        \"Europe\\/Zagreb\": \"HR\",
        \"Europe\\/Zaporozhye\": \"UA\",
        \"Europe\\/Zurich\": \"CH\",
        \"Indian\\/Antananarivo\": \"MG\",
        \"Indian\\/Chagos\": \"IO\",
        \"Indian\\/Christmas\": \"CX\",
        \"Indian\\/Cocos\": \"CC\",
        \"Indian\\/Comoro\": \"KM\",
        \"Indian\\/Kerguelen\": \"TF\",
        \"Indian\\/Mahe\": \"SC\",
        \"Indian\\/Maldives\": \"MV\",
        \"Indian\\/Mauritius\": \"MU\",
        \"Indian\\/Mayotte\": \"YT\",
        \"Indian\\/Reunion\": \"RE\",
        \"Pacific\\/Apia\": \"WS\",
        \"Pacific\\/Auckland\": \"NZ\",
        \"Pacific\\/Bougainville\": \"PG\",
        \"Pacific\\/Chatham\": \"NZ\",
        \"Pacific\\/Easter\": \"CL\",
        \"Pacific\\/Efate\": \"VU\",
        \"Pacific\\/Enderbury\": \"KI\",
        \"Pacific\\/Fakaofo\": \"TK\",
        \"Pacific\\/Fiji\": \"FJ\",
        \"Pacific\\/Funafuti\": \"TV\",
        \"Pacific\\/Galapagos\": \"EC\",
        \"Pacific\\/Gambier\": \"PF\",
        \"Pacific\\/Guadalcanal\": \"SB\",
        \"Pacific\\/Guam\": \"GU\",
        \"Pacific\\/Honolulu\": \"US\",
        \"Pacific\\/Johnston\": \"UM\",
        \"Pacific\\/Kiritimati\": \"KI\",
        \"Pacific\\/Kosrae\": \"FM\",
        \"Pacific\\/Kwajalein\": \"MH\",
        \"Pacific\\/Majuro\": \"MH\",
        \"Pacific\\/Marquesas\": \"PF\",
        \"Pacific\\/Midway\": \"UM\",
        \"Pacific\\/Nauru\": \"NR\",
        \"Pacific\\/Niue\": \"NU\",
        \"Pacific\\/Norfolk\": \"NF\",
        \"Pacific\\/Noumea\": \"NC\",
        \"Pacific\\/Pago_Pago\": \"AS\",
        \"Pacific\\/Palau\": \"PW\",
        \"Pacific\\/Pitcairn\": \"PN\",
        \"Pacific\\/Ponape\": \"FM\",
        \"Pacific\\/Port_Moresby\": \"PG\",
        \"Pacific\\/Rarotonga\": \"CK\",
        \"Pacific\\/Saipan\": \"MP\",
        \"Pacific\\/Tahiti\": \"PF\",
        \"Pacific\\/Tarawa\": \"KI\",
        \"Pacific\\/Tongatapu\": \"TO\",
        \"Pacific\\/Truk\": \"FM\",
        \"Pacific\\/Wake\": \"UM\",
        \"Pacific\\/Wallis\": \"WF\"
    },
    \"CountryToZone\": {
        \"AD\": [
            \"Europe\\/Andorra\"
        ],
        \"AE\": [
            \"Asia\\/Dubai\"
        ],
        \"AF\": [
            \"Asia\\/Kabul\"
        ],
        \"AG\": [
            \"America\\/Antigua\"
        ],
        \"AI\": [
            \"America\\/Anguilla\"
        ],
        \"AL\": [
            \"Europe\\/Tirane\"
        ],
        \"AM\": [
            \"Asia\\/Yerevan\"
        ],
        \"AO\": [
            \"Africa\\/Luanda\"
        ],
        \"AQ\": [
            \"Antarctica\\/Casey\",
            \"Antarctica\\/Davis\",
            \"Antarctica\\/DumontDUrville\",
            \"Antarctica\\/Mawson\",
            \"Antarctica\\/McMurdo\",
            \"Antarctica\\/Palmer\",
            \"Antarctica\\/Rothera\",
            \"Antarctica\\/Syowa\",
            \"Antarctica\\/Vostok\"
        ],
        \"AR\": [
            \"America\\/Argentina\\/La_Rioja\",
            \"America\\/Argentina\\/Rio_Gallegos\",
            \"America\\/Argentina\\/Salta\",
            \"America\\/Argentina\\/San_Juan\",
            \"America\\/Argentina\\/San_Luis\",
            \"America\\/Argentina\\/Tucuman\",
            \"America\\/Argentina\\/Ushuaia\",
            \"America\\/Buenos_Aires\",
            \"America\\/Catamarca\",
            \"America\\/Cordoba\",
            \"America\\/Jujuy\",
            \"America\\/Mendoza\"
        ],
        \"AS\": [
            \"Pacific\\/Pago_Pago\"
        ],
        \"AT\": [
            \"Europe\\/Vienna\"
        ],
        \"AU\": [
            \"Antarctica\\/Macquarie\",
            \"Australia\\/Adelaide\",
            \"Australia\\/Brisbane\",
            \"Australia\\/Broken_Hill\",
            \"Australia\\/Currie\",
            \"Australia\\/Darwin\",
            \"Australia\\/Eucla\",
            \"Australia\\/Hobart\",
            \"Australia\\/Lindeman\",
            \"Australia\\/Lord_Howe\",
            \"Australia\\/Melbourne\",
            \"Australia\\/Perth\",
            \"Australia\\/Sydney\"
        ],
        \"AW\": [
            \"America\\/Aruba\"
        ],
        \"AX\": [
            \"Europe\\/Mariehamn\"
        ],
        \"AZ\": [
            \"Asia\\/Baku\"
        ],
        \"BA\": [
            \"Europe\\/Sarajevo\"
        ],
        \"BB\": [
            \"America\\/Barbados\"
        ],
        \"BD\": [
            \"Asia\\/Dhaka\"
        ],
        \"BE\": [
            \"Europe\\/Brussels\"
        ],
        \"BF\": [
            \"Africa\\/Ouagadougou\"
        ],
        \"BG\": [
            \"Europe\\/Sofia\"
        ],
        \"BH\": [
            \"Asia\\/Bahrain\"
        ],
        \"BI\": [
            \"Africa\\/Bujumbura\"
        ],
        \"BJ\": [
            \"Africa\\/Porto-Novo\"
        ],
        \"BL\": [
            \"America\\/St_Barthelemy\"
        ],
        \"BM\": [
            \"Atlantic\\/Bermuda\"
        ],
        \"BN\": [
            \"Asia\\/Brunei\"
        ],
        \"BO\": [
            \"America\\/La_Paz\"
        ],
        \"BQ\": [
            \"America\\/Kralendijk\"
        ],
        \"BR\": [
            \"America\\/Araguaina\",
            \"America\\/Bahia\",
            \"America\\/Belem\",
            \"America\\/Boa_Vista\",
            \"America\\/Campo_Grande\",
            \"America\\/Cuiaba\",
            \"America\\/Eirunepe\",
            \"America\\/Fortaleza\",
            \"America\\/Maceio\",
            \"America\\/Manaus\",
            \"America\\/Noronha\",
            \"America\\/Porto_Velho\",
            \"America\\/Recife\",
            \"America\\/Rio_Branco\",
            \"America\\/Santarem\",
            \"America\\/Sao_Paulo\"
        ],
        \"BS\": [
            \"America\\/Nassau\"
        ],
        \"BT\": [
            \"Asia\\/Thimphu\"
        ],
        \"BW\": [
            \"Africa\\/Gaborone\"
        ],
        \"BY\": [
            \"Europe\\/Minsk\"
        ],
        \"BZ\": [
            \"America\\/Belize\"
        ],
        \"CA\": [
            \"America\\/Blanc-Sablon\",
            \"America\\/Cambridge_Bay\",
            \"America\\/Coral_Harbour\",
            \"America\\/Creston\",
            \"America\\/Dawson\",
            \"America\\/Dawson_Creek\",
            \"America\\/Edmonton\",
            \"America\\/Fort_Nelson\",
            \"America\\/Glace_Bay\",
            \"America\\/Goose_Bay\",
            \"America\\/Halifax\",
            \"America\\/Inuvik\",
            \"America\\/Iqaluit\",
            \"America\\/Moncton\",
            \"America\\/Montreal\",
            \"America\\/Nipigon\",
            \"America\\/Pangnirtung\",
            \"America\\/Rainy_River\",
            \"America\\/Rankin_Inlet\",
            \"America\\/Regina\",
            \"America\\/Resolute\",
            \"America\\/St_Johns\",
            \"America\\/Swift_Current\",
            \"America\\/Thunder_Bay\",
            \"America\\/Toronto\",
            \"America\\/Vancouver\",
            \"America\\/Whitehorse\",
            \"America\\/Winnipeg\",
            \"America\\/Yellowknife\"
        ],
        \"CC\": [
            \"Indian\\/Cocos\"
        ],
        \"CD\": [
            \"Africa\\/Kinshasa\",
            \"Africa\\/Lubumbashi\"
        ],
        \"CF\": [
            \"Africa\\/Bangui\"
        ],
        \"CG\": [
            \"Africa\\/Brazzaville\"
        ],
        \"CH\": [
            \"Europe\\/Zurich\"
        ],
        \"CI\": [
            \"Africa\\/Abidjan\"
        ],
        \"CK\": [
            \"Pacific\\/Rarotonga\"
        ],
        \"CL\": [
            \"America\\/Punta_Arenas\",
            \"America\\/Santiago\",
            \"Pacific\\/Easter\"
        ],
        \"CM\": [
            \"Africa\\/Douala\"
        ],
        \"CN\": [
            \"Asia\\/Shanghai\",
            \"Asia\\/Urumqi\"
        ],
        \"CO\": [
            \"America\\/Bogota\"
        ],
        \"CR\": [
            \"America\\/Costa_Rica\"
        ],
        \"CU\": [
            \"America\\/Havana\"
        ],
        \"CV\": [
            \"Atlantic\\/Cape_Verde\"
        ],
        \"CW\": [
            \"America\\/Curacao\"
        ],
        \"CX\": [
            \"Indian\\/Christmas\"
        ],
        \"CY\": [
            \"Asia\\/Famagusta\",
            \"Asia\\/Nicosia\"
        ],
        \"CZ\": [
            \"Europe\\/Prague\"
        ],
        \"DE\": [
            \"Europe\\/Berlin\",
            \"Europe\\/Busingen\"
        ],
        \"DJ\": [
            \"Africa\\/Djibouti\"
        ],
        \"DK\": [
            \"Europe\\/Copenhagen\"
        ],
        \"DM\": [
            \"America\\/Dominica\"
        ],
        \"DO\": [
            \"America\\/Santo_Domingo\"
        ],
        \"DZ\": [
            \"Africa\\/Algiers\"
        ],
        \"EC\": [
            \"America\\/Guayaquil\",
            \"Pacific\\/Galapagos\"
        ],
        \"EE\": [
            \"Europe\\/Tallinn\"
        ],
        \"EG\": [
            \"Africa\\/Cairo\"
        ],
        \"EH\": [
            \"Africa\\/El_Aaiun\"
        ],
        \"ER\": [
            \"Africa\\/Asmera\"
        ],
        \"ES\": [
            \"Africa\\/Ceuta\",
            \"Atlantic\\/Canary\",
            \"Europe\\/Madrid\"
        ],
        \"ET\": [
            \"Africa\\/Addis_Ababa\"
        ],
        \"FI\": [
            \"Europe\\/Helsinki\"
        ],
        \"FJ\": [
            \"Pacific\\/Fiji\"
        ],
        \"FK\": [
            \"Atlantic\\/Stanley\"
        ],
        \"FM\": [
            \"Pacific\\/Kosrae\",
            \"Pacific\\/Ponape\",
            \"Pacific\\/Truk\"
        ],
        \"FO\": [
            \"Atlantic\\/Faeroe\"
        ],
        \"FR\": [
            \"Europe\\/Paris\"
        ],
        \"GA\": [
            \"Africa\\/Libreville\"
        ],
        \"GB\": [
            \"Europe\\/London\"
        ],
        \"GD\": [
            \"America\\/Grenada\"
        ],
        \"GE\": [
            \"Asia\\/Tbilisi\"
        ],
        \"GF\": [
            \"America\\/Cayenne\"
        ],
        \"GG\": [
            \"Europe\\/Guernsey\"
        ],
        \"GH\": [
            \"Africa\\/Accra\"
        ],
        \"GI\": [
            \"Europe\\/Gibraltar\"
        ],
        \"GL\": [
            \"America\\/Danmarkshavn\",
            \"America\\/Godthab\",
            \"America\\/Scoresbysund\",
            \"America\\/Thule\"
        ],
        \"GM\": [
            \"Africa\\/Banjul\"
        ],
        \"GN\": [
            \"Africa\\/Conakry\"
        ],
        \"GP\": [
            \"America\\/Guadeloupe\"
        ],
        \"GQ\": [
            \"Africa\\/Malabo\"
        ],
        \"GR\": [
            \"Europe\\/Athens\"
        ],
        \"GS\": [
            \"Atlantic\\/South_Georgia\"
        ],
        \"GT\": [
            \"America\\/Guatemala\"
        ],
        \"GU\": [
            \"Pacific\\/Guam\"
        ],
        \"GW\": [
            \"Africa\\/Bissau\"
        ],
        \"GY\": [
            \"America\\/Guyana\"
        ],
        \"HK\": [
            \"Asia\\/Hong_Kong\"
        ],
        \"HN\": [
            \"America\\/Tegucigalpa\"
        ],
        \"HR\": [
            \"Europe\\/Zagreb\"
        ],
        \"HT\": [
            \"America\\/Port-au-Prince\"
        ],
        \"HU\": [
            \"Europe\\/Budapest\"
        ],
        \"ID\": [
            \"Asia\\/Jakarta\",
            \"Asia\\/Jayapura\",
            \"Asia\\/Makassar\",
            \"Asia\\/Pontianak\"
        ],
        \"IE\": [
            \"Europe\\/Dublin\"
        ],
        \"IL\": [
            \"Asia\\/Jerusalem\"
        ],
        \"IM\": [
            \"Europe\\/Isle_of_Man\"
        ],
        \"IN\": [
            \"Asia\\/Calcutta\"
        ],
        \"IO\": [
            \"Indian\\/Chagos\"
        ],
        \"IQ\": [
            \"Asia\\/Baghdad\"
        ],
        \"IR\": [
            \"Asia\\/Tehran\"
        ],
        \"IS\": [
            \"Atlantic\\/Reykjavik\"
        ],
        \"IT\": [
            \"Europe\\/Rome\"
        ],
        \"JE\": [
            \"Europe\\/Jersey\"
        ],
        \"JM\": [
            \"America\\/Jamaica\"
        ],
        \"JO\": [
            \"Asia\\/Amman\"
        ],
        \"JP\": [
            \"Asia\\/Tokyo\"
        ],
        \"KE\": [
            \"Africa\\/Nairobi\"
        ],
        \"KG\": [
            \"Asia\\/Bishkek\"
        ],
        \"KH\": [
            \"Asia\\/Phnom_Penh\"
        ],
        \"KI\": [
            \"Pacific\\/Enderbury\",
            \"Pacific\\/Kiritimati\",
            \"Pacific\\/Tarawa\"
        ],
        \"KM\": [
            \"Indian\\/Comoro\"
        ],
        \"KN\": [
            \"America\\/St_Kitts\"
        ],
        \"KP\": [
            \"Asia\\/Pyongyang\"
        ],
        \"KR\": [
            \"Asia\\/Seoul\"
        ],
        \"KW\": [
            \"Asia\\/Kuwait\"
        ],
        \"KY\": [
            \"America\\/Cayman\"
        ],
        \"KZ\": [
            \"Asia\\/Almaty\",
            \"Asia\\/Aqtau\",
            \"Asia\\/Aqtobe\",
            \"Asia\\/Atyrau\",
            \"Asia\\/Oral\",
            \"Asia\\/Qostanay\",
            \"Asia\\/Qyzylorda\"
        ],
        \"LA\": [
            \"Asia\\/Vientiane\"
        ],
        \"LB\": [
            \"Asia\\/Beirut\"
        ],
        \"LC\": [
            \"America\\/St_Lucia\"
        ],
        \"LI\": [
            \"Europe\\/Vaduz\"
        ],
        \"LK\": [
            \"Asia\\/Colombo\"
        ],
        \"LR\": [
            \"Africa\\/Monrovia\"
        ],
        \"LS\": [
            \"Africa\\/Maseru\"
        ],
        \"LT\": [
            \"Europe\\/Vilnius\"
        ],
        \"LU\": [
            \"Europe\\/Luxembourg\"
        ],
        \"LV\": [
            \"Europe\\/Riga\"
        ],
        \"LY\": [
            \"Africa\\/Tripoli\"
        ],
        \"MA\": [
            \"Africa\\/Casablanca\"
        ],
        \"MC\": [
            \"Europe\\/Monaco\"
        ],
        \"MD\": [
            \"Europe\\/Chisinau\"
        ],
        \"ME\": [
            \"Europe\\/Podgorica\"
        ],
        \"MF\": [
            \"America\\/Marigot\"
        ],
        \"MG\": [
            \"Indian\\/Antananarivo\"
        ],
        \"MH\": [
            \"Pacific\\/Kwajalein\",
            \"Pacific\\/Majuro\"
        ],
        \"MK\": [
            \"Europe\\/Skopje\"
        ],
        \"ML\": [
            \"Africa\\/Bamako\"
        ],
        \"MM\": [
            \"Asia\\/Rangoon\"
        ],
        \"MN\": [
            \"Asia\\/Choibalsan\",
            \"Asia\\/Hovd\",
            \"Asia\\/Ulaanbaatar\"
        ],
        \"MO\": [
            \"Asia\\/Macau\"
        ],
        \"MP\": [
            \"Pacific\\/Saipan\"
        ],
        \"MQ\": [
            \"America\\/Martinique\"
        ],
        \"MR\": [
            \"Africa\\/Nouakchott\"
        ],
        \"MS\": [
            \"America\\/Montserrat\"
        ],
        \"MT\": [
            \"Europe\\/Malta\"
        ],
        \"MU\": [
            \"Indian\\/Mauritius\"
        ],
        \"MV\": [
            \"Indian\\/Maldives\"
        ],
        \"MW\": [
            \"Africa\\/Blantyre\"
        ],
        \"MX\": [
            \"America\\/Bahia_Banderas\",
            \"America\\/Cancun\",
            \"America\\/Chihuahua\",
            \"America\\/Hermosillo\",
            \"America\\/Matamoros\",
            \"America\\/Mazatlan\",
            \"America\\/Merida\",
            \"America\\/Mexico_City\",
            \"America\\/Monterrey\",
            \"America\\/Ojinaga\",
            \"America\\/Santa_Isabel\",
            \"America\\/Tijuana\"
        ],
        \"MY\": [
            \"Asia\\/Kuala_Lumpur\",
            \"Asia\\/Kuching\"
        ],
        \"MZ\": [
            \"Africa\\/Maputo\"
        ],
        \"NA\": [
            \"Africa\\/Windhoek\"
        ],
        \"NC\": [
            \"Pacific\\/Noumea\"
        ],
        \"NE\": [
            \"Africa\\/Niamey\"
        ],
        \"NF\": [
            \"Pacific\\/Norfolk\"
        ],
        \"NG\": [
            \"Africa\\/Lagos\"
        ],
        \"NI\": [
            \"America\\/Managua\"
        ],
        \"NL\": [
            \"Europe\\/Amsterdam\"
        ],
        \"NO\": [
            \"Europe\\/Oslo\"
        ],
        \"NP\": [
            \"Asia\\/Katmandu\"
        ],
        \"NR\": [
            \"Pacific\\/Nauru\"
        ],
        \"NU\": [
            \"Pacific\\/Niue\"
        ],
        \"NZ\": [
            \"Pacific\\/Auckland\",
            \"Pacific\\/Chatham\"
        ],
        \"OM\": [
            \"Asia\\/Muscat\"
        ],
        \"PA\": [
            \"America\\/Panama\"
        ],
        \"PE\": [
            \"America\\/Lima\"
        ],
        \"PF\": [
            \"Pacific\\/Gambier\",
            \"Pacific\\/Marquesas\",
            \"Pacific\\/Tahiti\"
        ],
        \"PG\": [
            \"Pacific\\/Bougainville\",
            \"Pacific\\/Port_Moresby\"
        ],
        \"PH\": [
            \"Asia\\/Manila\"
        ],
        \"PK\": [
            \"Asia\\/Karachi\"
        ],
        \"PL\": [
            \"Europe\\/Warsaw\"
        ],
        \"PM\": [
            \"America\\/Miquelon\"
        ],
        \"PN\": [
            \"Pacific\\/Pitcairn\"
        ],
        \"PR\": [
            \"America\\/Puerto_Rico\"
        ],
        \"PS\": [
            \"Asia\\/Gaza\",
            \"Asia\\/Hebron\"
        ],
        \"PT\": [
            \"Atlantic\\/Azores\",
            \"Atlantic\\/Madeira\",
            \"Europe\\/Lisbon\"
        ],
        \"PW\": [
            \"Pacific\\/Palau\"
        ],
        \"PY\": [
            \"America\\/Asuncion\"
        ],
        \"QA\": [
            \"Asia\\/Qatar\"
        ],
        \"RE\": [
            \"Indian\\/Reunion\"
        ],
        \"RO\": [
            \"Europe\\/Bucharest\"
        ],
        \"RS\": [
            \"Europe\\/Belgrade\"
        ],
        \"RU\": [
            \"Asia\\/Anadyr\",
            \"Asia\\/Barnaul\",
            \"Asia\\/Chita\",
            \"Asia\\/Irkutsk\",
            \"Asia\\/Kamchatka\",
            \"Asia\\/Khandyga\",
            \"Asia\\/Krasnoyarsk\",
            \"Asia\\/Magadan\",
            \"Asia\\/Novokuznetsk\",
            \"Asia\\/Novosibirsk\",
            \"Asia\\/Omsk\",
            \"Asia\\/Sakhalin\",
            \"Asia\\/Srednekolymsk\",
            \"Asia\\/Tomsk\",
            \"Asia\\/Ust-Nera\",
            \"Asia\\/Vladivostok\",
            \"Asia\\/Yakutsk\",
            \"Asia\\/Yekaterinburg\",
            \"Europe\\/Astrakhan\",
            \"Europe\\/Kaliningrad\",
            \"Europe\\/Kirov\",
            \"Europe\\/Moscow\",
            \"Europe\\/Samara\",
            \"Europe\\/Saratov\",
            \"Europe\\/Ulyanovsk\",
            \"Europe\\/Volgograd\"
        ],
        \"RW\": [
            \"Africa\\/Kigali\"
        ],
        \"SA\": [
            \"Asia\\/Riyadh\"
        ],
        \"SB\": [
            \"Pacific\\/Guadalcanal\"
        ],
        \"SC\": [
            \"Indian\\/Mahe\"
        ],
        \"SD\": [
            \"Africa\\/Khartoum\"
        ],
        \"SE\": [
            \"Europe\\/Stockholm\"
        ],
        \"SG\": [
            \"Asia\\/Singapore\"
        ],
        \"SH\": [
            \"Atlantic\\/St_Helena\"
        ],
        \"SI\": [
            \"Europe\\/Ljubljana\"
        ],
        \"SJ\": [
            \"Arctic\\/Longyearbyen\"
        ],
        \"SK\": [
            \"Europe\\/Bratislava\"
        ],
        \"SL\": [
            \"Africa\\/Freetown\"
        ],
        \"SM\": [
            \"Europe\\/San_Marino\"
        ],
        \"SN\": [
            \"Africa\\/Dakar\"
        ],
        \"SO\": [
            \"Africa\\/Mogadishu\"
        ],
        \"SR\": [
            \"America\\/Paramaribo\"
        ],
        \"SS\": [
            \"Africa\\/Juba\"
        ],
        \"ST\": [
            \"Africa\\/Sao_Tome\"
        ],
        \"SV\": [
            \"America\\/El_Salvador\"
        ],
        \"SX\": [
            \"America\\/Lower_Princes\"
        ],
        \"SY\": [
            \"Asia\\/Damascus\"
        ],
        \"SZ\": [
            \"Africa\\/Mbabane\"
        ],
        \"TC\": [
            \"America\\/Grand_Turk\"
        ],
        \"TD\": [
            \"Africa\\/Ndjamena\"
        ],
        \"TF\": [
            \"Indian\\/Kerguelen\"
        ],
        \"TG\": [
            \"Africa\\/Lome\"
        ],
        \"TH\": [
            \"Asia\\/Bangkok\"
        ],
        \"TJ\": [
            \"Asia\\/Dushanbe\"
        ],
        \"TK\": [
            \"Pacific\\/Fakaofo\"
        ],
        \"TL\": [
            \"Asia\\/Dili\"
        ],
        \"TM\": [
            \"Asia\\/Ashgabat\"
        ],
        \"TN\": [
            \"Africa\\/Tunis\"
        ],
        \"TO\": [
            \"Pacific\\/Tongatapu\"
        ],
        \"TR\": [
            \"Europe\\/Istanbul\"
        ],
        \"TT\": [
            \"America\\/Port_of_Spain\"
        ],
        \"TV\": [
            \"Pacific\\/Funafuti\"
        ],
        \"TW\": [
            \"Asia\\/Taipei\"
        ],
        \"TZ\": [
            \"Africa\\/Dar_es_Salaam\"
        ],
        \"UA\": [
            \"Europe\\/Kiev\",
            \"Europe\\/Simferopol\",
            \"Europe\\/Uzhgorod\",
            \"Europe\\/Zaporozhye\"
        ],
        \"UG\": [
            \"Africa\\/Kampala\"
        ],
        \"UM\": [
            \"Pacific\\/Johnston\",
            \"Pacific\\/Midway\",
            \"Pacific\\/Wake\"
        ],
        \"US\": [
            \"America\\/Adak\",
            \"America\\/Anchorage\",
            \"America\\/Boise\",
            \"America\\/Chicago\",
            \"America\\/Denver\",
            \"America\\/Detroit\",
            \"America\\/Indiana\\/Knox\",
            \"America\\/Indiana\\/Marengo\",
            \"America\\/Indiana\\/Petersburg\",
            \"America\\/Indiana\\/Tell_City\",
            \"America\\/Indiana\\/Vevay\",
            \"America\\/Indiana\\/Vincennes\",
            \"America\\/Indiana\\/Winamac\",
            \"America\\/Indianapolis\",
            \"America\\/Juneau\",
            \"America\\/Kentucky\\/Monticello\",
            \"America\\/Los_Angeles\",
            \"America\\/Louisville\",
            \"America\\/Menominee\",
            \"America\\/Metlakatla\",
            \"America\\/New_York\",
            \"America\\/Nome\",
            \"America\\/North_Dakota\\/Beulah\",
            \"America\\/North_Dakota\\/Center\",
            \"America\\/North_Dakota\\/New_Salem\",
            \"America\\/Phoenix\",
            \"America\\/Sitka\",
            \"America\\/Yakutat\",
            \"Pacific\\/Honolulu\"
        ],
        \"UY\": [
            \"America\\/Montevideo\"
        ],
        \"UZ\": [
            \"Asia\\/Samarkand\",
            \"Asia\\/Tashkent\"
        ],
        \"VA\": [
            \"Europe\\/Vatican\"
        ],
        \"VC\": [
            \"America\\/St_Vincent\"
        ],
        \"VE\": [
            \"America\\/Caracas\"
        ],
        \"VG\": [
            \"America\\/Tortola\"
        ],
        \"VI\": [
            \"America\\/St_Thomas\"
        ],
        \"VN\": [
            \"Asia\\/Saigon\"
        ],
        \"VU\": [
            \"Pacific\\/Efate\"
        ],
        \"WF\": [
            \"Pacific\\/Wallis\"
        ],
        \"WS\": [
            \"Pacific\\/Apia\"
        ],
        \"YE\": [
            \"Asia\\/Aden\"
        ],
        \"YT\": [
            \"Indian\\/Mayotte\"
        ],
        \"ZA\": [
            \"Africa\\/Johannesburg\"
        ],
        \"ZM\": [
            \"Africa\\/Lusaka\"
        ],
        \"ZW\": [
            \"Africa\\/Harare\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/timezones/meta.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/meta.json");
    }
}
