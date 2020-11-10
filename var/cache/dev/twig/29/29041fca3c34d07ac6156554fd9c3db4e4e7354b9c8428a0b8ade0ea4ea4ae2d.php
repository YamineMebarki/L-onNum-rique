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

/* vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php */
class __TwigTemplate_92385c5882f966174c99b911a99d586789e1ef7f40f720d2b03842ce458d7e60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\it_CH;

class Address extends \\Faker\\Provider\\it_IT\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static \$streetPrefix = array('Piazza', 'Strada', 'Via', 'Borgo', 'Contrada', 'Rotonda', 'Incrocio');

    protected static \$postcode = array('####');

    /**
     * @link https://it.wikipedia.org/wiki/Citt%C3%A0_svizzere
     */
    protected static \$cityNames = array(
        'Aarau', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Allschwil', 'Altstätten', 'Amriswil', 'Arbon', 'Arth',
        'Baar', 'Baden', 'Basilea', 'Bassersdorf', 'Bellinzona', 'Belp', 'Berna', 'Bienne', 'Binningen', 'Birsfelden', 'Briga-Glis', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach',
        'Carouge', 'Cham', 'Chêne-Bougeries', 'Coira',
        'Davos', 'Delémont', 'Dietikon', 'Dübendorf', 'Ebikon',
        'Ecublens', 'Einsiedeln', 'Emmen',
        'Frauenfeld', 'Freienbach', 'Friburgo',
        'Ginevra', 'Gland', 'Gossau', 'Grenchen',
        'Herisau', 'Hinwil', 'Horgen', 'Horw',
        'Illnau-Effretikon', 'Ittigen',
        'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht', 'Küssnacht',
        'La Chaux-de-Fonds', 'La Tour-de-Peilz', 'Lancy', 'Langenthal', 'Le Grand-Saconnex', 'Le Locle', 'Liestal', 'Locarno', 'Losanna', 'Lucerna', 'Lugano', 'Lyss',
        'Martigny', 'Meilen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morges', 'Muri bei Bern', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen',
        'Neuchâtel', 'Neuhausen am Rheinfall', 'Nyon',
        'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Ostermundigen',
        'Pfäffikon', 'Pratteln', 'Prilly', 'Pully',
        'Rapperswil-Jona', 'Regensdorf', 'Reinach', 'Renens', 'Rheinfelden', 'Richterswil', 'Riehen', 'Rüti',
        'San Gallo', 'Schlieren', 'Sciaffusa', 'Sierre', 'Sion', 'Soletta', 'Spiez', 'Spreitenbach', 'Steffisburg', 'Stäfa', 'Svitto',
        'Thalwil', 'Thun', 'Thônex',
        'Uster', 'Uzwil',
        'Val-de-Travers', 'Vernier', 'Versoix', 'Vevey', 'Veyrier', 'Villars-sur-Glâne', 'Volketswil',
        'Wallisellen', 'Weinfelden', 'Wettingen', 'Wetzikon', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen', 'Zollikon', 'Zugo', 'Zurigo'
    );

    /**
     * @link https://it.wikipedia.org/wiki/Cantoni_della_Svizzera
     */
    protected static \$canton = array(
        array('AG' => 'Argovia'),
        array('AI' => 'Appenzello Interno'),
        array('AR' => 'Appenzello Esterno'),
        array('BE' => 'Berna'),
        array('BL' => 'Basilea Campagna'),
        array('BS' => 'Basilea Città'),
        array('FR' => 'Friburgo'),
        array('GE' => 'Ginevra'),
        array('GL' => 'Glarona'),
        array('GR' => 'Grigioni'),
        array('JU' => 'Giura'),
        array('LU' => 'Lucerna'),
        array('NE' => 'Neuchâtel'),
        array('NW' => 'Nidvaldo'),
        array('OW' => 'Obvaldo'),
        array('SG' => 'San Gallo'),
        array('SH' => 'Sciaffusa'),
        array('SO' => 'Soletta'),
        array('SZ' => 'Svitto'),
        array('TG' => 'Turgovia'),
        array('TI' => 'Ticino'),
        array('UR' => 'Uri'),
        array('VD' => 'Vaud'),
        array('VS' => 'Vallese'),
        array('ZG' => 'Zugo'),
        array('ZH' => 'Zurigo')
    );

    protected static \$cityFormats = array(
        '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 80, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * Returns a random street prefix
     * @example Via
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Returns a random city name.
     * @example Luzern
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::\$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        \$canton = static::canton();
        return key(\$canton);
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        \$canton = static::canton();
        return current(\$canton);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 87,  141 => 84,  132 => 80,  126 => 79,  119 => 75,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\it_CH;

class Address extends \\Faker\\Provider\\it_IT\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static \$streetPrefix = array('Piazza', 'Strada', 'Via', 'Borgo', 'Contrada', 'Rotonda', 'Incrocio');

    protected static \$postcode = array('####');

    /**
     * @link https://it.wikipedia.org/wiki/Citt%C3%A0_svizzere
     */
    protected static \$cityNames = array(
        'Aarau', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Allschwil', 'Altstätten', 'Amriswil', 'Arbon', 'Arth',
        'Baar', 'Baden', 'Basilea', 'Bassersdorf', 'Bellinzona', 'Belp', 'Berna', 'Bienne', 'Binningen', 'Birsfelden', 'Briga-Glis', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach',
        'Carouge', 'Cham', 'Chêne-Bougeries', 'Coira',
        'Davos', 'Delémont', 'Dietikon', 'Dübendorf', 'Ebikon',
        'Ecublens', 'Einsiedeln', 'Emmen',
        'Frauenfeld', 'Freienbach', 'Friburgo',
        'Ginevra', 'Gland', 'Gossau', 'Grenchen',
        'Herisau', 'Hinwil', 'Horgen', 'Horw',
        'Illnau-Effretikon', 'Ittigen',
        'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht', 'Küssnacht',
        'La Chaux-de-Fonds', 'La Tour-de-Peilz', 'Lancy', 'Langenthal', 'Le Grand-Saconnex', 'Le Locle', 'Liestal', 'Locarno', 'Losanna', 'Lucerna', 'Lugano', 'Lyss',
        'Martigny', 'Meilen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morges', 'Muri bei Bern', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen',
        'Neuchâtel', 'Neuhausen am Rheinfall', 'Nyon',
        'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Ostermundigen',
        'Pfäffikon', 'Pratteln', 'Prilly', 'Pully',
        'Rapperswil-Jona', 'Regensdorf', 'Reinach', 'Renens', 'Rheinfelden', 'Richterswil', 'Riehen', 'Rüti',
        'San Gallo', 'Schlieren', 'Sciaffusa', 'Sierre', 'Sion', 'Soletta', 'Spiez', 'Spreitenbach', 'Steffisburg', 'Stäfa', 'Svitto',
        'Thalwil', 'Thun', 'Thônex',
        'Uster', 'Uzwil',
        'Val-de-Travers', 'Vernier', 'Versoix', 'Vevey', 'Veyrier', 'Villars-sur-Glâne', 'Volketswil',
        'Wallisellen', 'Weinfelden', 'Wettingen', 'Wetzikon', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen', 'Zollikon', 'Zugo', 'Zurigo'
    );

    /**
     * @link https://it.wikipedia.org/wiki/Cantoni_della_Svizzera
     */
    protected static \$canton = array(
        array('AG' => 'Argovia'),
        array('AI' => 'Appenzello Interno'),
        array('AR' => 'Appenzello Esterno'),
        array('BE' => 'Berna'),
        array('BL' => 'Basilea Campagna'),
        array('BS' => 'Basilea Città'),
        array('FR' => 'Friburgo'),
        array('GE' => 'Ginevra'),
        array('GL' => 'Glarona'),
        array('GR' => 'Grigioni'),
        array('JU' => 'Giura'),
        array('LU' => 'Lucerna'),
        array('NE' => 'Neuchâtel'),
        array('NW' => 'Nidvaldo'),
        array('OW' => 'Obvaldo'),
        array('SG' => 'San Gallo'),
        array('SH' => 'Sciaffusa'),
        array('SO' => 'Soletta'),
        array('SZ' => 'Svitto'),
        array('TG' => 'Turgovia'),
        array('TI' => 'Ticino'),
        array('UR' => 'Uri'),
        array('VD' => 'Vaud'),
        array('VS' => 'Vallese'),
        array('ZG' => 'Zugo'),
        array('ZH' => 'Zurigo')
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    /**
     * Returns a random street prefix
     * @example Via
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Returns a random city name.
     * @example Luzern
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::\$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        \$canton = static::canton();
        return key(\$canton);
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        \$canton = static::canton();
        return current(\$canton);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Address.php");
    }
}
