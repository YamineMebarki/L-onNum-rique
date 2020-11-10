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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php */
class __TwigTemplate_b5fc365bd6db2313d709ac86fb6802eb0e689212d0dda6c1ff0b9f18cbb91941 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_CH;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static \$streetPrefix = array('Rue', 'Rue', 'Chemin', 'Avenue', 'Boulevard', 'Place', 'Impasse');

    protected static \$postcode = array('####');

    /**
     * @link https://fr.wikipedia.org/wiki/Villes_de_Suisse
     */
    protected static \$cityNames = array(
        'Aarau', 'Aarberg', 'Aarburg', 'Agno', 'Aigle VD', 'Altdorf', 'Altstätten', 'Appenzell', 'Arbon', 'Ascona', 'Aubonne', 'Avenches',
        'Baden', 'Bad Zurzach', 'Bâle', 'Bellinzone', 'Berne', 'Beromünster', 'Berthoud', 'Biasca', 'Bienne', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten AG', 'Brigue', 'Brugg', 'Bulle', 'Bülach',
        'Cerlier', 'Châtel-Saint-Denis',
        'Coire', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Delémont', 'Diessenhofen', 'Échallens', 'Eglisau', 'Elgg', 'Estavayer-le-Lac',
        'Frauenfeld', 'Fribourg',
        'Genève', 'Glaris', 'Gordola', 'Grandcour', 'Grandson', 'Greifensee', 'Grüningen', 'Gruyères',
        'Hermance', 'Huttwil',
        'Ilanz',
        'Kaiserstuhl', 'Klingnau',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Le Landeron', 'Les Clées', 'Lachen', 'Langenthal', 'Laufon', 'Laufenburg', 'Laupen', 'Lausanne', 'Lenzburg', 'Loèche', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Lucerne',
        'Maienfeld', 'Martigny', 'Mellingen', 'Mendrisio', 'Monthey', 'Morat', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Münchenstein',
        'Neuchâtel', 'Neunkirch', 'Nidau', 'Nyon',
        'Olten', 'Orbe', 'Orsières',
        'Payerne', 'Porrentruy',
        'Rapperswil', 'Regensberg', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romont FR', 'Rorschach', 'Rue',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Saint-Gall', 'Sargans', 'Sarnen', 'Schaffhouse', 'Schwytz', 'Sembrancher', 'Sempach', 'Sion', 'Soleure', 'Splügen', 'Stans', 'Steckborn', 'Stein am Rhein', 'Sursee',
        'Thoune', 'Thusis',
        'Unterseen', 'Uznach',
        'Valangin', 'Vevey', 'Villeneuve', 'Viège',
        'Waldenburg', 'Walenstadt', 'Wangen an der Aare', 'Werdenberg', 'Wiedlisbach', 'Wil', 'Willisau', 'Winterthour',
        'Yverdon-les-Bains',
        'Zofingue', 'Zoug', 'Zurich'
    );

    /**
     * @link https://fr.wikipedia.org/wiki/Canton_suisse
     */
    protected static \$canton = array(
        array('AG' => 'Argovie'),
        array('AI' => 'Appenzell Rhodes-Intérieures'),
        array('AR' => 'Appenzell Rhodes-Extérieures'),
        array('BE' => 'Berne'),
        array('BL' => 'Bâle-Campagne'),
        array('BS' => 'Bâle-Ville'),
        array('FR' => 'Fribourg'),
        array('GE' => 'Genève'),
        array('GL' => 'Glaris'),
        array('GR' => 'Grisons'),
        array('JU' => 'Jura'),
        array('LU' => 'Lucerne'),
        array('NE' => 'Neuchâtel'),
        array('NW' => 'Nidwald'),
        array('OW' => 'Obwald'),
        array('SG' => 'Saint-Gall'),
        array('SH' => 'Schaffhouse'),
        array('SO' => 'Soleure'),
        array('SZ' => 'Schwytz'),
        array('TG' => 'Thurgovie'),
        array('TI' => 'Tessin'),
        array('UR' => 'Uri'),
        array('VD' => 'Vaud'),
        array('VS' => 'Valais'),
        array('ZG' => 'Zoug'),
        array('ZH' => 'Zurich')
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
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 80, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 85, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 88, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * Returns a random street prefix
     * @example Rue
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 88,  147 => 85,  138 => 81,  132 => 80,  126 => 79,  119 => 75,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_CH;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static \$streetPrefix = array('Rue', 'Rue', 'Chemin', 'Avenue', 'Boulevard', 'Place', 'Impasse');

    protected static \$postcode = array('####');

    /**
     * @link https://fr.wikipedia.org/wiki/Villes_de_Suisse
     */
    protected static \$cityNames = array(
        'Aarau', 'Aarberg', 'Aarburg', 'Agno', 'Aigle VD', 'Altdorf', 'Altstätten', 'Appenzell', 'Arbon', 'Ascona', 'Aubonne', 'Avenches',
        'Baden', 'Bad Zurzach', 'Bâle', 'Bellinzone', 'Berne', 'Beromünster', 'Berthoud', 'Biasca', 'Bienne', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten AG', 'Brigue', 'Brugg', 'Bulle', 'Bülach',
        'Cerlier', 'Châtel-Saint-Denis',
        'Coire', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Delémont', 'Diessenhofen', 'Échallens', 'Eglisau', 'Elgg', 'Estavayer-le-Lac',
        'Frauenfeld', 'Fribourg',
        'Genève', 'Glaris', 'Gordola', 'Grandcour', 'Grandson', 'Greifensee', 'Grüningen', 'Gruyères',
        'Hermance', 'Huttwil',
        'Ilanz',
        'Kaiserstuhl', 'Klingnau',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Le Landeron', 'Les Clées', 'Lachen', 'Langenthal', 'Laufon', 'Laufenburg', 'Laupen', 'Lausanne', 'Lenzburg', 'Loèche', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Lucerne',
        'Maienfeld', 'Martigny', 'Mellingen', 'Mendrisio', 'Monthey', 'Morat', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Münchenstein',
        'Neuchâtel', 'Neunkirch', 'Nidau', 'Nyon',
        'Olten', 'Orbe', 'Orsières',
        'Payerne', 'Porrentruy',
        'Rapperswil', 'Regensberg', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romont FR', 'Rorschach', 'Rue',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Saint-Gall', 'Sargans', 'Sarnen', 'Schaffhouse', 'Schwytz', 'Sembrancher', 'Sempach', 'Sion', 'Soleure', 'Splügen', 'Stans', 'Steckborn', 'Stein am Rhein', 'Sursee',
        'Thoune', 'Thusis',
        'Unterseen', 'Uznach',
        'Valangin', 'Vevey', 'Villeneuve', 'Viège',
        'Waldenburg', 'Walenstadt', 'Wangen an der Aare', 'Werdenberg', 'Wiedlisbach', 'Wil', 'Willisau', 'Winterthour',
        'Yverdon-les-Bains',
        'Zofingue', 'Zoug', 'Zurich'
    );

    /**
     * @link https://fr.wikipedia.org/wiki/Canton_suisse
     */
    protected static \$canton = array(
        array('AG' => 'Argovie'),
        array('AI' => 'Appenzell Rhodes-Intérieures'),
        array('AR' => 'Appenzell Rhodes-Extérieures'),
        array('BE' => 'Berne'),
        array('BL' => 'Bâle-Campagne'),
        array('BS' => 'Bâle-Ville'),
        array('FR' => 'Fribourg'),
        array('GE' => 'Genève'),
        array('GL' => 'Glaris'),
        array('GR' => 'Grisons'),
        array('JU' => 'Jura'),
        array('LU' => 'Lucerne'),
        array('NE' => 'Neuchâtel'),
        array('NW' => 'Nidwald'),
        array('OW' => 'Obwald'),
        array('SG' => 'Saint-Gall'),
        array('SH' => 'Schaffhouse'),
        array('SO' => 'Soleure'),
        array('SZ' => 'Schwytz'),
        array('TG' => 'Thurgovie'),
        array('TI' => 'Tessin'),
        array('UR' => 'Uri'),
        array('VD' => 'Vaud'),
        array('VS' => 'Valais'),
        array('ZG' => 'Zoug'),
        array('ZH' => 'Zurich')
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} de {{cityName}}',
        '{{streetPrefix}} de {{lastName}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    /**
     * Returns a random street prefix
     * @example Rue
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
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_CH/Address.php");
    }
}
