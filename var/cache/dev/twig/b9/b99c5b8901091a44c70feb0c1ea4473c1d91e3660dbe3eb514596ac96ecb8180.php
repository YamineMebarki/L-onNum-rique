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

/* vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php */
class __TwigTemplate_99720706e7c2cadaaa5546b3b4c83e377f8b909e23e2271a141cf0242026c354 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php"));

        // line 1
        echo "<?php
namespace Faker\\Provider\\ro_MD;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static \$apartmentNumber = array('#', '##');
    protected static \$floor = array('#', '##');
    protected static \$block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static \$blockSegment = array('A', 'B', 'C', 'D');

    protected static \$streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Calea', 'P-ța', 'Str-la'
    );

    // random selection of seemingly frequently used streets and naming categories
    protected static \$streetPlainName = array(
        // historical events
        'Eroilor', 'Independenței', 'Lenin', 'Unirii', '31 August 1989', 'Sovietului',
        // historical people
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Mitropolitul Varlaam', 'Traian', 'Decebal', 'Alexandru cel Bun', 'Alexandri V.', 'Arhangelul Mihail',
        // national and international people names
        'Veronica Micle', 'Ion Creangă', 'Mihai Eminescu', 'B. P. Hașdeu',
        // nature-related
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului', 'Trandafirilor',
        // work-related
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        // geography related
        'Chisinau', 'Paris'
    );

    protected static \$postcode = array('####');

    // http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Republica_Moldova
    protected static \$cityNames = array(
        'Chișinău', 'Tiraspol', 'Bălți', 'Tighina', 'Râbnița', 'Cahul', 'Ungheni', 'Soroca',
        'Orhei', 'Dubăsari', 'Comrat', 'Ceadâr-Lunga', 'Strășeni', 'Căușeni', 'Drochia', 'Slobozia',
        'Edineț', 'Vulcănești', 'Durlești', 'Hâncești', 'Ialoveni', 'Fălești', 'Călărași', 'Codru',
        'Taraclia', 'Florești', 'Cimișlia', 'Sângerei', 'Dnestrovsc', 'Nisporeni', 'Grigoriopol',
        'Basarabeasca', 'Râșcani', 'Glodeni', 'Camenca', 'Rezina', 'Leova', 'Cricova', 'Dondușeni',
        'Ocnița', 'Briceni', 'Otaci', 'Anenii Noi', 'Ștefan Vodă', 'Cupcini', 'Sângera', 'Criuleni',
        'Telenești', 'Șoldănești', 'Tvardița', 'Lipcani', 'Vadul lui Vodă', 'Iargara', 'Căinari',
        'Cantemir', 'Vatra', 'Biruința', 'Crasnoe', 'Cornești', 'Costești', 'Mărculești', 'Ghindești',
        'Tiraspolul Nou', 'Frunză', 'Bucovăț', 'Maiac'
    );

    // http://ro.wikipedia.org/wiki/Lista_statelor_lumii#Lista_statelor_lumii
    protected static \$country = array(
        'Afganistan', 'Africa de Sud', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua și Barbuda', 'Arabia Saudită', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaidjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Birmania', 'Bolivia', 'Bosnia și Herțegovina', 'Botswana', 'Brazilia', 'Brunei', 'Bulgaria',
        'Burkina Faso', 'Burundi', 'Cambodgia', 'Camerun', 'Canada', 'Capul Verde', 'Cehia', 'Republica Centrafricană', 'Chile', 'Republica Populară Chineză', 'Ciad', 'Cipru', 'Columbia', 'Comore',
        'Republica Democrată Congo', 'Republica Congo', 'Coreea de Nord', 'Coreea de Sud', 'Costa Rica', 'Coasta de Fildeș', 'Croația', 'Cuba', 'Danemarca', 'Djibouti', 'Dominica',
        'Republica Dominicană', 'Ecuador', 'Egipt', 'El Salvador', 'Elveția', 'Emiratele Arabe Unite', 'Eritreea', 'Estonia', 'Etiopia', 'Fiji', 'Filipine', 'Finlanda', 'Franța', 'Gabon', 'Gambia',
        'Georgia', 'Germania', 'Ghana', 'Grecia', 'Grenada', 'Guatemala', 'Guineea', 'Guineea-Bissau', 'Guineea Ecuatorială', 'Guyana', 'Haiti', 'Honduras',
        'India', 'Indonezia', 'Iordania', 'Irak', 'Iran', 'Republica Irlanda', 'Islanda', 'Israel', 'Italia', 'Jamaica', 'Japonia', 'Kazahstan', 'Kenya', 'Kirghizstan', 'Kiribati', 'Kuweit',
        'Laos', 'Lesotho', 'Letonia', 'Liban', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburg', 'Republica Macedonia', 'Madagascar', 'Malawi', 'Malaezia', 'Maldive', 'Mali', 'Malta',
        'Maroc', 'Insulele Marshall', 'Mauritania', 'Mauritius', 'Mexic', 'Statele Federate ale Microneziei', 'Republica Moldova', 'Monaco', 'Mongolia', 'Mozambic', 'Muntenegru', 'Namibia', 'Nauru',
        'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Norvegia', 'Noua Zeelandă', 'Olanda', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Noua Guinee', 'Paraguay', 'Peru', 'Polonia', 'Portugalia',
        'Qatar', 'Regatul Unit', 'România', 'Rusia', 'Rwanda', 'Samoa', 'San Marino', 'São Tomé și Príncipe', 'São Tomé e Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sfânta Lucia',
        'Sfântul Cristofor și Nevis', 'Saint Vincent and the Grenadines', 'Sierra Leone', 'Singapore', 'Siria', 'Slovacia', 'Slovenia', 'Insulele Solomon', 'Somalia', 'Spania', 'Sri Lanka',
        'Statele Unite ale Americii', 'Sudan', 'Sudanul de Sud', 'Suedia', 'Surinam', 'Swaziland', 'Tadjikistan', 'Tanzania', 'Thailanda', 'Timorul de Est', 'Togo', 'Tonga', 'Trinidad-Tobago',
        'Tunisia', 'Turcia', 'Turkmenistan', 'Tuvalu', 'Ucraina', 'Uganda', 'Ungaria', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    );

    protected static \$cityFormats = array(
        '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "',
        'Mun. ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetPlainName"]) || array_key_exists("streetPlainName", $context) ? $context["streetPlainName"] : (function () { throw new RuntimeError('Variable "streetPlainName" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 79, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 79, $this->source); })()), "html", null, true);
        echo ", et. ";
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new RuntimeError('Variable "floor" does not exist.', 79, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 80, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 80, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 80, $this->source); })()), "html", null, true);
        echo ", sc. ";
        echo twig_escape_filter($this->env, (isset($context["blockSegment"]) || array_key_exists("blockSegment", $context) ? $context["blockSegment"] : (function () { throw new RuntimeError('Variable "blockSegment" does not exist.', 80, $this->source); })()), "html", null, true);
        echo ", et. ";
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new RuntimeError('Variable "floor" does not exist.', 80, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 84, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 84, $this->source); })()), "html", null, true);
        echo ", CP ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function block()
    {
        return static::numerify(static::randomElement(static::\$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::\$blockSegment);
    }

    public static function floor()
    {
        return static::numerify(static::randomElement(static::\$floor));
    }

    public static function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::\$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::\$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 84,  170 => 80,  158 => 79,  148 => 78,  142 => 77,  136 => 76,  130 => 75,  121 => 71,  114 => 67,  110 => 66,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Provider\\ro_MD;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static \$apartmentNumber = array('#', '##');
    protected static \$floor = array('#', '##');
    protected static \$block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static \$blockSegment = array('A', 'B', 'C', 'D');

    protected static \$streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Calea', 'P-ța', 'Str-la'
    );

    // random selection of seemingly frequently used streets and naming categories
    protected static \$streetPlainName = array(
        // historical events
        'Eroilor', 'Independenței', 'Lenin', 'Unirii', '31 August 1989', 'Sovietului',
        // historical people
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Mitropolitul Varlaam', 'Traian', 'Decebal', 'Alexandru cel Bun', 'Alexandri V.', 'Arhangelul Mihail',
        // national and international people names
        'Veronica Micle', 'Ion Creangă', 'Mihai Eminescu', 'B. P. Hașdeu',
        // nature-related
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului', 'Trandafirilor',
        // work-related
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        // geography related
        'Chisinau', 'Paris'
    );

    protected static \$postcode = array('####');

    // http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Republica_Moldova
    protected static \$cityNames = array(
        'Chișinău', 'Tiraspol', 'Bălți', 'Tighina', 'Râbnița', 'Cahul', 'Ungheni', 'Soroca',
        'Orhei', 'Dubăsari', 'Comrat', 'Ceadâr-Lunga', 'Strășeni', 'Căușeni', 'Drochia', 'Slobozia',
        'Edineț', 'Vulcănești', 'Durlești', 'Hâncești', 'Ialoveni', 'Fălești', 'Călărași', 'Codru',
        'Taraclia', 'Florești', 'Cimișlia', 'Sângerei', 'Dnestrovsc', 'Nisporeni', 'Grigoriopol',
        'Basarabeasca', 'Râșcani', 'Glodeni', 'Camenca', 'Rezina', 'Leova', 'Cricova', 'Dondușeni',
        'Ocnița', 'Briceni', 'Otaci', 'Anenii Noi', 'Ștefan Vodă', 'Cupcini', 'Sângera', 'Criuleni',
        'Telenești', 'Șoldănești', 'Tvardița', 'Lipcani', 'Vadul lui Vodă', 'Iargara', 'Căinari',
        'Cantemir', 'Vatra', 'Biruința', 'Crasnoe', 'Cornești', 'Costești', 'Mărculești', 'Ghindești',
        'Tiraspolul Nou', 'Frunză', 'Bucovăț', 'Maiac'
    );

    // http://ro.wikipedia.org/wiki/Lista_statelor_lumii#Lista_statelor_lumii
    protected static \$country = array(
        'Afganistan', 'Africa de Sud', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua și Barbuda', 'Arabia Saudită', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaidjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Birmania', 'Bolivia', 'Bosnia și Herțegovina', 'Botswana', 'Brazilia', 'Brunei', 'Bulgaria',
        'Burkina Faso', 'Burundi', 'Cambodgia', 'Camerun', 'Canada', 'Capul Verde', 'Cehia', 'Republica Centrafricană', 'Chile', 'Republica Populară Chineză', 'Ciad', 'Cipru', 'Columbia', 'Comore',
        'Republica Democrată Congo', 'Republica Congo', 'Coreea de Nord', 'Coreea de Sud', 'Costa Rica', 'Coasta de Fildeș', 'Croația', 'Cuba', 'Danemarca', 'Djibouti', 'Dominica',
        'Republica Dominicană', 'Ecuador', 'Egipt', 'El Salvador', 'Elveția', 'Emiratele Arabe Unite', 'Eritreea', 'Estonia', 'Etiopia', 'Fiji', 'Filipine', 'Finlanda', 'Franța', 'Gabon', 'Gambia',
        'Georgia', 'Germania', 'Ghana', 'Grecia', 'Grenada', 'Guatemala', 'Guineea', 'Guineea-Bissau', 'Guineea Ecuatorială', 'Guyana', 'Haiti', 'Honduras',
        'India', 'Indonezia', 'Iordania', 'Irak', 'Iran', 'Republica Irlanda', 'Islanda', 'Israel', 'Italia', 'Jamaica', 'Japonia', 'Kazahstan', 'Kenya', 'Kirghizstan', 'Kiribati', 'Kuweit',
        'Laos', 'Lesotho', 'Letonia', 'Liban', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburg', 'Republica Macedonia', 'Madagascar', 'Malawi', 'Malaezia', 'Maldive', 'Mali', 'Malta',
        'Maroc', 'Insulele Marshall', 'Mauritania', 'Mauritius', 'Mexic', 'Statele Federate ale Microneziei', 'Republica Moldova', 'Monaco', 'Mongolia', 'Mozambic', 'Muntenegru', 'Namibia', 'Nauru',
        'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Norvegia', 'Noua Zeelandă', 'Olanda', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Noua Guinee', 'Paraguay', 'Peru', 'Polonia', 'Portugalia',
        'Qatar', 'Regatul Unit', 'România', 'Rusia', 'Rwanda', 'Samoa', 'San Marino', 'São Tomé și Príncipe', 'São Tomé e Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sfânta Lucia',
        'Sfântul Cristofor și Nevis', 'Saint Vincent and the Grenadines', 'Sierra Leone', 'Singapore', 'Siria', 'Slovacia', 'Slovenia', 'Insulele Solomon', 'Somalia', 'Spania', 'Sri Lanka',
        'Statele Unite ale Americii', 'Sudan', 'Sudanul de Sud', 'Suedia', 'Surinam', 'Swaziland', 'Tadjikistan', 'Tanzania', 'Thailanda', 'Timorul de Est', 'Togo', 'Tonga', 'Trinidad-Tobago',
        'Tunisia', 'Turcia', 'Turkmenistan', 'Tuvalu', 'Ucraina', 'Uganda', 'Ungaria', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
        'Mun. {{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{streetPlainName}}',
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, et. {{floor}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, sc. {{blockSegment}}, et. {{floor}}, ap. {{apartmentNumber}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{city}}, CP {{postcode}}\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function block()
    {
        return static::numerify(static::randomElement(static::\$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::\$blockSegment);
    }

    public static function floor()
    {
        return static::numerify(static::randomElement(static::\$floor));
    }

    public static function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::\$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::\$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ro_MD/Address.php");
    }
}
