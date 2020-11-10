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

/* vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php */
class __TwigTemplate_29e767380fdcd40a10bd9f9e761453bcad26be675b2bf4cc85722ebafa76a471 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hu_HU;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["capital"]) || array_key_exists("capital", $context) ? $context["capital"] : (function () { throw new RuntimeError('Variable "capital" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["capital"]) || array_key_exists("capital", $context) ? $context["capital"] : (function () { throw new RuntimeError('Variable "capital" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["capital"]) || array_key_exists("capital", $context) ? $context["capital"] : (function () { throw new RuntimeError('Variable "capital" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["bigCity"]) || array_key_exists("bigCity", $context) ? $context["bigCity"] : (function () { throw new RuntimeError('Variable "bigCity" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["bigCity"]) || array_key_exists("bigCity", $context) ? $context["bigCity"] : (function () { throw new RuntimeError('Variable "bigCity" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["smallerCity"]) || array_key_exists("smallerCity", $context) ? $context["smallerCity"] : (function () { throw new RuntimeError('Variable "smallerCity" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ".',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\",
    );
    protected static \$secondaryAddressFormats = array('##. emelet', '##. ajtó');

    /**
     * @example '10. emelet'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Pest'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Budapest'
     */
    public static function capital()
    {
        return static::randomElement(static::\$capitals);
    }

    /**
     * @example 'Pécs'
     */
    public static function bigCity()
    {
        return static::randomElement(static::\$bigCities);
    }

    /**
     * @example 'Várpalota'
     */
    public static function smallerCity()
    {
        return static::randomElement(static::\$smallerCities);
    }

    protected static \$buildingNumber = array('###', '##', '##', '#');

    /**
     * Coordinates inside the border of Hungary
     *
     * @example array('47.049242', '18.355119')
     * @return array | latitude, longitude
     */
    public static function localCoordinates()
    {
        return array(
            'latitude' => static::latitude(46.262740, 47.564721),
            'longitude' => static::longitude(17.077949, 20.604560)
        );
    }

    /* ----------- DATA -------------------- */

    protected static \$streetSuffix = array(
        'árok', 'átjáró', 'dűlősor', 'dűlőút', 'erdősor', 'fasor', 'forduló', 'gát', 'határsor', 'határút', 'híd', 'játszótér', 'kert', 'körönd', 'körtér', 'körút', 'köz', 'lakótelep', 'lejáró', 'lejtő', 'lépcső', 'liget', 'mélyút', 'orom', 'országút', 'ösvény', 'park', 'part', 'pincesor', 'rakpart', 'sétány', 'sétaút', 'sor', 'sugárút', 'tér', 'tere', 'turistaút', 'udvar', 'út', 'útja', 'utca', 'üdülőpart'
    );
    protected static \$postcode = array('####');
    protected static \$state = array(
        'Budapest', 'Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Bereg', 'Tolna', 'Vas', 'Veszprém', 'Zala'
    );
    protected static \$country = array(
        'Afganisztán', 'Albánia', 'Algéria', 'Amerikai Egyesült Államok', 'Andorra', 'Angola', 'Antigua és Barbuda', 'Argentína', 'Ausztria', 'Ausztrália', 'Azerbajdzsán',
        'Bahama-szigetek', 'Bahrein', 'Banglades', 'Barbados', 'Belgium', 'Belize', 'Benin', 'Bhután', 'Bolívia', 'Bosznia-Hercegovina', 'Botswana', 'Brazília', 'Brunei', 'Bulgária', 'Burkina Faso', 'Burma', 'Burundi',
        'Chile', 'Ciprus', 'Costa Rica', 'Csehország', 'Csád',
        'Dominikai Köztársaság', 'Dominikai Közösség', 'Dzsibuti', 'Dánia', 'Dél-Afrika', 'Dél-Korea', 'Dél-Szudán',
        'Ecuador', 'Egyenlítői-Guinea', 'Egyesült Arab Emírségek', 'Egyesült Királyság', 'Egyiptom', 'Elefántcsontpart', 'Eritrea', 'Etiópia',
        'Fehéroroszország', 'Fidzsi-szigetek', 'Finnország', 'Franciaország', 'Fülöp-szigetek',
        'Gabon', 'Gambia', 'Ghána', 'Grenada', 'Grúzia', 'Guatemala', 'Guinea', 'Guyana', 'Görögország',
        'Haiti', 'Hollandia', 'Horvátország',
        'India', 'Indonézia', 'Irak', 'Irán', 'Izland', 'Izrael',
        'Japán', 'Jemen', 'Jordánia',
        'Kambodzsa', 'Kamerun', 'Kanada', 'Katar', 'Kazahsztán', 'Kelet-Timor', 'Kenya', 'Kirgizisztán', 'Kiribati', 'Kolumbia', 'Kongói Demokratikus Köztársaság', 'Kongói Köztársaság', 'Kuba', 'Kuvait', 'Kína', 'Közép-Afrika',
        'Laosz', 'Lengyelország', 'Lesotho', 'Lettország', 'Libanon', 'Libéria', 'Liechtenstein', 'Litvánia', 'Luxemburg', 'Líbia',
        'Macedónia', 'Madagaszkár', 'Magyarország', 'Malawi', 'Maldív-szigetek', 'Mali', 'Malájzia', 'Marokkó', 'Marshall-szigetek', 'Mauritánia', 'Mexikó', 'Mikronézia', 'Moldova', 'Monaco', 'Mongólia', 'Montenegró', 'Mozambik', 'Málta',
        'Namíbia', 'Nauru', 'Nepál', 'Nicaragua', 'Niger', 'Nigéria', 'Norvégia', 'Németország',
        'Olaszország', 'Omán', 'Oroszország',
        'Pakisztán', 'Palau', 'Panama', 'Paraguay', 'Peru', 'Portugália', 'Pápua Új-Guinea',
        'Románia', 'Ruanda',
        'Saint Kitts és Nevis', 'Saint Vincent', 'Salamon-szigetek', 'Salvador', 'San Marino', 'Seychelle-szigetek', 'Spanyolország', 'Srí Lanka', 'Suriname', 'Svájc', 'Svédország', 'Szamoa', 'Szaúd-Arábia', 'Szenegál', 'Szerbia', 'Szingapúr', 'Szlovákia', 'Szlovénia', 'Szomália', 'Szudán', 'Szváziföld', 'Szíria', 'São Tomé és Príncipe',
        'Tadzsikisztán', 'Tanzánia', 'Thaiföld', 'Togo', 'Tonga', 'Trinidad és Tobago', 'Tunézia', 'Tuvalu', 'Törökország', 'Türkmenisztán',
        'Uganda', 'Ukrajna', 'Uruguay',
        'Vanuatu', 'Venezuela', 'Vietnám',
         'Zambia', 'Zimbabwe', 'Zöld-foki-szigetek',
         'Észak-Korea', 'Észtország', 'Írország', 'Örményország', 'Új-Zéland', 'Üzbegisztán'
    );

    /**
     * Source: https://hu.wikipedia.org/wiki/Magyarorsz%C3%A1g_v%C3%A1rosainak_list%C3%A1ja
     */
    protected static \$capitals = array('Budapest');
    protected static \$bigCities = array(
        'Békéscsaba', 'Debrecen', 'Dunaújváros', 'Eger', 'Érd', 'Győr', 'Hódmezővásárhely', 'Kaposvár', 'Kecskemét', 'Miskolc', 'Nagykanizsa', 'Nyíregyháza', 'Pécs', 'Salgótarján', 'Sopron', 'Szeged', 'Székesfehérvár', 'Szekszárd', 'Szolnok', 'Szombathely', 'Tatabánya', 'Veszprém', 'Zalaegerszeg'
    );
    protected static \$smallerCities = array(
        'Ajka', 'Aszód', 'Bácsalmás',
        'Baja', 'Baktalórántháza', 'Balassagyarmat', 'Balatonalmádi', 'Balatonfüred', 'Balmazújváros', 'Barcs', 'Bátonyterenye', 'Békés', 'Bélapátfalva', 'Berettyóújfalu', 'Bicske', 'Bóly', 'Bonyhád', 'Budakeszi',
        'Cegléd', 'Celldömölk', 'Cigánd', 'Csenger', 'Csongrád', 'Csorna', 'Csurgó',
        'Dabas', 'Derecske', 'Devecser', 'Dombóvár', 'Dunakeszi',
        'Edelény', 'Encs', 'Enying', 'Esztergom',
        'Fehérgyarmat', 'Fonyód', 'Füzesabony',
        'Gárdony', 'Gödöllő', 'Gönc', 'Gyál', 'Gyomaendrőd', 'Gyöngyös', 'Gyula',
        'Hajdúböszörmény', 'Hajdúhadház', 'Hajdúnánás', 'Hajdúszoboszló', 'Hatvan', 'Heves',
        'Ibrány',
        'Jánoshalma', 'Jászapáti', 'Jászberény',
        'Kalocsa', 'Kapuvár', 'Karcag', 'Kazincbarcika', 'Kemecse', 'Keszthely', 'Kisbér', 'Kiskőrös', 'Kiskunfélegyháza', 'Kiskunhalas', 'Kiskunmajsa', 'Kistelek', 'Kisvárda', 'Komárom', 'Komló', 'Körmend', 'Kőszeg', 'Kunhegyes', 'Kunszentmárton', 'Kunszentmiklós',
        'Lenti', 'Letenye',
        'Makó', 'Marcali', 'Martonvásár', 'Mátészalka', 'Mezőcsát', 'Mezőkovácsháza', 'Mezőkövesd', 'Mezőtúr', 'Mohács', 'Monor', 'Mór', 'Mórahalom', 'Mosonmagyaróvár',
        'Nagyatád', 'Nagykálló', 'Nagykáta', 'Nagykőrös', 'Nyíradony', 'Nyírbátor',
        'Orosháza', 'Oroszlány', 'Ózd',
        'Paks', 'Pannonhalma', 'Pápa', 'Pásztó', 'Pécsvárad', 'Pétervására', 'Pilisvörösvár', 'Polgárdi', 'Püspökladány', 'Putnok',
        'Ráckeve', 'Rétság',
        'Sárbogárd', 'Sarkad', 'Sárospatak', 'Sárvár', 'Sásd', 'Sátoraljaújhely', 'Sellye', 'Siklós', 'Siófok', 'Sümeg', 'Szarvas', 'Szécsény', 'Szeghalom', 'Szentendre', 'Szentes', 'Szentgotthárd', 'Szentlőrinc', 'Szerencs', 'Szigetszentmiklós', 'Szigetvár', 'Szikszó', 'Szob',
        'Tab', 'Tamási', 'Tapolca', 'Tata', 'Tét', 'Tiszafüred', 'Tiszakécske', 'Tiszaújváros', 'Tiszavasvári', 'Tokaj', 'Tolna', 'Törökszentmiklós',
        'Vác', 'Várpalota', 'Vásárosnamény', 'Vasvár', 'Vecsés',
        'Záhony', 'Zalaszentgrót', 'Zirc'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  98 => 21,  92 => 20,  84 => 17,  78 => 16,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hu_HU;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityFormats = array(
        '{{capital}}',
        '{{capital}}',
        '{{capital}}',
        '{{bigCity}}',
        '{{bigCity}}',
        '{{smallerCity}}',
    );
    protected static \$streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}',
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}.',
        '{{streetName}} {{buildingNumber}}. {{secondaryAddress}}',
    );
    protected static \$addressFormats = array(
        \"{{postcode}} {{city}}, {{streetAddress}}\",
    );
    protected static \$secondaryAddressFormats = array('##. emelet', '##. ajtó');

    /**
     * @example '10. emelet'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Pest'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Budapest'
     */
    public static function capital()
    {
        return static::randomElement(static::\$capitals);
    }

    /**
     * @example 'Pécs'
     */
    public static function bigCity()
    {
        return static::randomElement(static::\$bigCities);
    }

    /**
     * @example 'Várpalota'
     */
    public static function smallerCity()
    {
        return static::randomElement(static::\$smallerCities);
    }

    protected static \$buildingNumber = array('###', '##', '##', '#');

    /**
     * Coordinates inside the border of Hungary
     *
     * @example array('47.049242', '18.355119')
     * @return array | latitude, longitude
     */
    public static function localCoordinates()
    {
        return array(
            'latitude' => static::latitude(46.262740, 47.564721),
            'longitude' => static::longitude(17.077949, 20.604560)
        );
    }

    /* ----------- DATA -------------------- */

    protected static \$streetSuffix = array(
        'árok', 'átjáró', 'dűlősor', 'dűlőút', 'erdősor', 'fasor', 'forduló', 'gát', 'határsor', 'határút', 'híd', 'játszótér', 'kert', 'körönd', 'körtér', 'körút', 'köz', 'lakótelep', 'lejáró', 'lejtő', 'lépcső', 'liget', 'mélyút', 'orom', 'országút', 'ösvény', 'park', 'part', 'pincesor', 'rakpart', 'sétány', 'sétaút', 'sor', 'sugárút', 'tér', 'tere', 'turistaút', 'udvar', 'út', 'útja', 'utca', 'üdülőpart'
    );
    protected static \$postcode = array('####');
    protected static \$state = array(
        'Budapest', 'Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Bereg', 'Tolna', 'Vas', 'Veszprém', 'Zala'
    );
    protected static \$country = array(
        'Afganisztán', 'Albánia', 'Algéria', 'Amerikai Egyesült Államok', 'Andorra', 'Angola', 'Antigua és Barbuda', 'Argentína', 'Ausztria', 'Ausztrália', 'Azerbajdzsán',
        'Bahama-szigetek', 'Bahrein', 'Banglades', 'Barbados', 'Belgium', 'Belize', 'Benin', 'Bhután', 'Bolívia', 'Bosznia-Hercegovina', 'Botswana', 'Brazília', 'Brunei', 'Bulgária', 'Burkina Faso', 'Burma', 'Burundi',
        'Chile', 'Ciprus', 'Costa Rica', 'Csehország', 'Csád',
        'Dominikai Köztársaság', 'Dominikai Közösség', 'Dzsibuti', 'Dánia', 'Dél-Afrika', 'Dél-Korea', 'Dél-Szudán',
        'Ecuador', 'Egyenlítői-Guinea', 'Egyesült Arab Emírségek', 'Egyesült Királyság', 'Egyiptom', 'Elefántcsontpart', 'Eritrea', 'Etiópia',
        'Fehéroroszország', 'Fidzsi-szigetek', 'Finnország', 'Franciaország', 'Fülöp-szigetek',
        'Gabon', 'Gambia', 'Ghána', 'Grenada', 'Grúzia', 'Guatemala', 'Guinea', 'Guyana', 'Görögország',
        'Haiti', 'Hollandia', 'Horvátország',
        'India', 'Indonézia', 'Irak', 'Irán', 'Izland', 'Izrael',
        'Japán', 'Jemen', 'Jordánia',
        'Kambodzsa', 'Kamerun', 'Kanada', 'Katar', 'Kazahsztán', 'Kelet-Timor', 'Kenya', 'Kirgizisztán', 'Kiribati', 'Kolumbia', 'Kongói Demokratikus Köztársaság', 'Kongói Köztársaság', 'Kuba', 'Kuvait', 'Kína', 'Közép-Afrika',
        'Laosz', 'Lengyelország', 'Lesotho', 'Lettország', 'Libanon', 'Libéria', 'Liechtenstein', 'Litvánia', 'Luxemburg', 'Líbia',
        'Macedónia', 'Madagaszkár', 'Magyarország', 'Malawi', 'Maldív-szigetek', 'Mali', 'Malájzia', 'Marokkó', 'Marshall-szigetek', 'Mauritánia', 'Mexikó', 'Mikronézia', 'Moldova', 'Monaco', 'Mongólia', 'Montenegró', 'Mozambik', 'Málta',
        'Namíbia', 'Nauru', 'Nepál', 'Nicaragua', 'Niger', 'Nigéria', 'Norvégia', 'Németország',
        'Olaszország', 'Omán', 'Oroszország',
        'Pakisztán', 'Palau', 'Panama', 'Paraguay', 'Peru', 'Portugália', 'Pápua Új-Guinea',
        'Románia', 'Ruanda',
        'Saint Kitts és Nevis', 'Saint Vincent', 'Salamon-szigetek', 'Salvador', 'San Marino', 'Seychelle-szigetek', 'Spanyolország', 'Srí Lanka', 'Suriname', 'Svájc', 'Svédország', 'Szamoa', 'Szaúd-Arábia', 'Szenegál', 'Szerbia', 'Szingapúr', 'Szlovákia', 'Szlovénia', 'Szomália', 'Szudán', 'Szváziföld', 'Szíria', 'São Tomé és Príncipe',
        'Tadzsikisztán', 'Tanzánia', 'Thaiföld', 'Togo', 'Tonga', 'Trinidad és Tobago', 'Tunézia', 'Tuvalu', 'Törökország', 'Türkmenisztán',
        'Uganda', 'Ukrajna', 'Uruguay',
        'Vanuatu', 'Venezuela', 'Vietnám',
         'Zambia', 'Zimbabwe', 'Zöld-foki-szigetek',
         'Észak-Korea', 'Észtország', 'Írország', 'Örményország', 'Új-Zéland', 'Üzbegisztán'
    );

    /**
     * Source: https://hu.wikipedia.org/wiki/Magyarorsz%C3%A1g_v%C3%A1rosainak_list%C3%A1ja
     */
    protected static \$capitals = array('Budapest');
    protected static \$bigCities = array(
        'Békéscsaba', 'Debrecen', 'Dunaújváros', 'Eger', 'Érd', 'Győr', 'Hódmezővásárhely', 'Kaposvár', 'Kecskemét', 'Miskolc', 'Nagykanizsa', 'Nyíregyháza', 'Pécs', 'Salgótarján', 'Sopron', 'Szeged', 'Székesfehérvár', 'Szekszárd', 'Szolnok', 'Szombathely', 'Tatabánya', 'Veszprém', 'Zalaegerszeg'
    );
    protected static \$smallerCities = array(
        'Ajka', 'Aszód', 'Bácsalmás',
        'Baja', 'Baktalórántháza', 'Balassagyarmat', 'Balatonalmádi', 'Balatonfüred', 'Balmazújváros', 'Barcs', 'Bátonyterenye', 'Békés', 'Bélapátfalva', 'Berettyóújfalu', 'Bicske', 'Bóly', 'Bonyhád', 'Budakeszi',
        'Cegléd', 'Celldömölk', 'Cigánd', 'Csenger', 'Csongrád', 'Csorna', 'Csurgó',
        'Dabas', 'Derecske', 'Devecser', 'Dombóvár', 'Dunakeszi',
        'Edelény', 'Encs', 'Enying', 'Esztergom',
        'Fehérgyarmat', 'Fonyód', 'Füzesabony',
        'Gárdony', 'Gödöllő', 'Gönc', 'Gyál', 'Gyomaendrőd', 'Gyöngyös', 'Gyula',
        'Hajdúböszörmény', 'Hajdúhadház', 'Hajdúnánás', 'Hajdúszoboszló', 'Hatvan', 'Heves',
        'Ibrány',
        'Jánoshalma', 'Jászapáti', 'Jászberény',
        'Kalocsa', 'Kapuvár', 'Karcag', 'Kazincbarcika', 'Kemecse', 'Keszthely', 'Kisbér', 'Kiskőrös', 'Kiskunfélegyháza', 'Kiskunhalas', 'Kiskunmajsa', 'Kistelek', 'Kisvárda', 'Komárom', 'Komló', 'Körmend', 'Kőszeg', 'Kunhegyes', 'Kunszentmárton', 'Kunszentmiklós',
        'Lenti', 'Letenye',
        'Makó', 'Marcali', 'Martonvásár', 'Mátészalka', 'Mezőcsát', 'Mezőkovácsháza', 'Mezőkövesd', 'Mezőtúr', 'Mohács', 'Monor', 'Mór', 'Mórahalom', 'Mosonmagyaróvár',
        'Nagyatád', 'Nagykálló', 'Nagykáta', 'Nagykőrös', 'Nyíradony', 'Nyírbátor',
        'Orosháza', 'Oroszlány', 'Ózd',
        'Paks', 'Pannonhalma', 'Pápa', 'Pásztó', 'Pécsvárad', 'Pétervására', 'Pilisvörösvár', 'Polgárdi', 'Püspökladány', 'Putnok',
        'Ráckeve', 'Rétság',
        'Sárbogárd', 'Sarkad', 'Sárospatak', 'Sárvár', 'Sásd', 'Sátoraljaújhely', 'Sellye', 'Siklós', 'Siófok', 'Sümeg', 'Szarvas', 'Szécsény', 'Szeghalom', 'Szentendre', 'Szentes', 'Szentgotthárd', 'Szentlőrinc', 'Szerencs', 'Szigetszentmiklós', 'Szigetvár', 'Szikszó', 'Szob',
        'Tab', 'Tamási', 'Tapolca', 'Tata', 'Tét', 'Tiszafüred', 'Tiszakécske', 'Tiszaújváros', 'Tiszavasvári', 'Tokaj', 'Tolna', 'Törökszentmiklós',
        'Vác', 'Várpalota', 'Vásárosnamény', 'Vasvár', 'Vecsés',
        'Záhony', 'Zalaszentgrót', 'Zirc'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Address.php");
    }
}
