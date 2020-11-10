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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php */
class __TwigTemplate_d484d58387b138622ba4cae3711c94a3ffeabb29bca05fd2206abd630a8d78c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_CA;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$cityPrefix = array('Saint-', 'Sainte-', 'St-', 'Ste-');

    /**
     * The suffixes come from this list of communities in Québec
     * http://fr.wikipedia.org/wiki/Liste_des_municipalités_locales_du_Québec
     */
    protected static \$citySuffix = array(
        // Bas-Saint-Laurent
        '-des-Sables', '-sur-Mer', '-des-Neiges', '-des-Sept-Douleurs', '-du-Portage', '-du-Loup', '-des-Lacs', '-de-Lessard',
        '-de-Kamourasca', '-de-Témiscouata', '-de-Ladrière', '-de-Rimouski', '-de-Rivière-du-Loup', '-du-Lac', '-du-Ha! Ha!',
        '-du-Lac-Long', '-de-Rioux', '-du-Squatec', '-de-Métis', '-d\\'Ixworth', '-de-la-Croix', '-de-Matane', '-du-Lac-Humqui',
        '-de-Mérici', '-de-la-Pocatière', '-sur-le-Lac',
        // Saguenay–Lac-Saint-Jean
        '-de-Lorette', '-du-Lac-Saint-Jean', '-de-Bourget', '-de-Falardeau', '-les-Plaines', '-de-Sales', '-de-Taillon',
        '-de-Milot', '-du-Nord',
        // Québec (Capitale-Nationale)
        '-aux-Coudres', '-des-Anges', '-de-Desmaures', '-les-Neiges', '-de-l\\'Île-d\\'Orléans', '-de-Valcartier',
        '-de-Portneuf', '-du-Cap-Tourmente', '-des-Carrières', '-des-Caps', '-de-Beaupré', '-de-Laval', '-de-la-Jacques-Cartier',
        '-d\\'Auvergne',
        // Mauricie
        '-de-Monteauban', '-du-Mont-Carmel', '-des-Monts', '-de-Maskinongé', '-de-Caxton', '-des-Grès', '-le-Grand',
        '-de-Vincennes', '-du-Parc', '-de-Champlain', '-de-Mékinac', '-de-Prémont', '-de-la-Pérade', '-de-Batiscan',
        // Estrie (Cantons de l'est)
        '-Ouest', '-Est', '-Sud', '-Nord', '-des-Bois', '-de-Woburn', '-de-Brompton', '-de-Bolton', '-de-Windsor',
        '-de-Clifton', '-de-Paquette', '-de-la-Rochelle', '-de-Hatley', '-de-Whitton',
        // Montréal
        '-de-Bellevue',
        // Chaudière-Appalaches
        '-de-Buckland', '-des-Pins', '-du-Rosaire', '-d\\'Issoudun', '-de-Jésus', '-d\\'Irlande', '-de-l\\'Isle-aux-Grues',
        '-de-Tilly', '-de-Lellis', '-de-Bellechasse', '-de-Lessard', '-de-L\\'Islet', '-de-Lotbinière', '-de-Beauce',
        '-de-Forsyth', '-de-Panet', '-de-la-Rivière-du-Sud', '-de-Dorset', '-de-Shenley', '-de-Leeds', '-de-Wolfestown',
        '-de-Joly', '-de-Brébeuf', '-de-Coleraine', '-des-Érables', '-Bretenières', '-de-Lauzon', '-de-Standon',
        '-de-Gonzague', '-de-Beaurivage', '-de-Dorchester', '-de-Cranbourne', '-de-Broughton', '-de-la-Rivière-du-Sud',
        '-des-Aulnaies', '-les-Mines', '-de-Lotbinière', '-de-Patton', '-sur-Rivière-du-Sud', '-de-Beauregard', '-de-Watford'
    );

    /**
     * @example 'Saint-Marc-des-Carrières' or 'Sainte-Monique'
     */
    protected static \$cityFormats = array(
        '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 47, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$buildingNumber = array('#####', '####', '###', '##', '#');

    protected static \$streetSuffix = array(
        'Autoroute', 'Avenue', 'Boulevard', 'Chemin', 'Route', 'Rue', 'Pont'
    );

    protected static \$postcode = array('?#? #?#', '?#?#?#');

    /**
     * @example 'Avenue Bolduc'
     */
    protected static \$streetNameFormats = array(
        '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 64, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 69, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 69, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["stateAbbr"]) || array_key_exists("stateAbbr", $context) ? $context["stateAbbr"] : (function () { throw new RuntimeError('Variable "stateAbbr" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$secondaryAddressFormats = array('Apt. ###', 'Suite ###', 'Bureau ###');

    protected static \$state = array(
        'Alberta', 'Colombie-Britannique', 'Manitoba', 'Nouveau-Brunswick', 'Terre-Neuve-et-Labrador', 'Nouvelle-Écosse', 'Ontario', 'Île-du-Prince-Édouard', 'Québec', 'Saskatchewan'
    );

    protected static \$stateAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK'
    );

    /**
     * @example 'Saint-'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '-des-Sables'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    /**
     * @example 'Bureau 500'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Québec'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'QC'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 73,  137 => 69,  131 => 68,  122 => 64,  116 => 63,  97 => 48,  91 => 47,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_CA;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$cityPrefix = array('Saint-', 'Sainte-', 'St-', 'Ste-');

    /**
     * The suffixes come from this list of communities in Québec
     * http://fr.wikipedia.org/wiki/Liste_des_municipalités_locales_du_Québec
     */
    protected static \$citySuffix = array(
        // Bas-Saint-Laurent
        '-des-Sables', '-sur-Mer', '-des-Neiges', '-des-Sept-Douleurs', '-du-Portage', '-du-Loup', '-des-Lacs', '-de-Lessard',
        '-de-Kamourasca', '-de-Témiscouata', '-de-Ladrière', '-de-Rimouski', '-de-Rivière-du-Loup', '-du-Lac', '-du-Ha! Ha!',
        '-du-Lac-Long', '-de-Rioux', '-du-Squatec', '-de-Métis', '-d\\'Ixworth', '-de-la-Croix', '-de-Matane', '-du-Lac-Humqui',
        '-de-Mérici', '-de-la-Pocatière', '-sur-le-Lac',
        // Saguenay–Lac-Saint-Jean
        '-de-Lorette', '-du-Lac-Saint-Jean', '-de-Bourget', '-de-Falardeau', '-les-Plaines', '-de-Sales', '-de-Taillon',
        '-de-Milot', '-du-Nord',
        // Québec (Capitale-Nationale)
        '-aux-Coudres', '-des-Anges', '-de-Desmaures', '-les-Neiges', '-de-l\\'Île-d\\'Orléans', '-de-Valcartier',
        '-de-Portneuf', '-du-Cap-Tourmente', '-des-Carrières', '-des-Caps', '-de-Beaupré', '-de-Laval', '-de-la-Jacques-Cartier',
        '-d\\'Auvergne',
        // Mauricie
        '-de-Monteauban', '-du-Mont-Carmel', '-des-Monts', '-de-Maskinongé', '-de-Caxton', '-des-Grès', '-le-Grand',
        '-de-Vincennes', '-du-Parc', '-de-Champlain', '-de-Mékinac', '-de-Prémont', '-de-la-Pérade', '-de-Batiscan',
        // Estrie (Cantons de l'est)
        '-Ouest', '-Est', '-Sud', '-Nord', '-des-Bois', '-de-Woburn', '-de-Brompton', '-de-Bolton', '-de-Windsor',
        '-de-Clifton', '-de-Paquette', '-de-la-Rochelle', '-de-Hatley', '-de-Whitton',
        // Montréal
        '-de-Bellevue',
        // Chaudière-Appalaches
        '-de-Buckland', '-des-Pins', '-du-Rosaire', '-d\\'Issoudun', '-de-Jésus', '-d\\'Irlande', '-de-l\\'Isle-aux-Grues',
        '-de-Tilly', '-de-Lellis', '-de-Bellechasse', '-de-Lessard', '-de-L\\'Islet', '-de-Lotbinière', '-de-Beauce',
        '-de-Forsyth', '-de-Panet', '-de-la-Rivière-du-Sud', '-de-Dorset', '-de-Shenley', '-de-Leeds', '-de-Wolfestown',
        '-de-Joly', '-de-Brébeuf', '-de-Coleraine', '-des-Érables', '-Bretenières', '-de-Lauzon', '-de-Standon',
        '-de-Gonzague', '-de-Beaurivage', '-de-Dorchester', '-de-Cranbourne', '-de-Broughton', '-de-la-Rivière-du-Sud',
        '-des-Aulnaies', '-les-Mines', '-de-Lotbinière', '-de-Patton', '-sur-Rivière-du-Sud', '-de-Beauregard', '-de-Watford'
    );

    /**
     * @example 'Saint-Marc-des-Carrières' or 'Sainte-Monique'
     */
    protected static \$cityFormats = array(
        '{{cityPrefix}}{{firstName}}{{citySuffix}}',
        '{{cityPrefix}}{{firstName}}',
    );

    protected static \$buildingNumber = array('#####', '####', '###', '##', '#');

    protected static \$streetSuffix = array(
        'Autoroute', 'Avenue', 'Boulevard', 'Chemin', 'Route', 'Rue', 'Pont'
    );

    protected static \$postcode = array('?#? #?#', '?#?#?#');

    /**
     * @example 'Avenue Bolduc'
     */
    protected static \$streetNameFormats = array(
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}'
    );

    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{city}}, {{stateAbbr}} {{postcode}}\",
    );

    protected static \$secondaryAddressFormats = array('Apt. ###', 'Suite ###', 'Bureau ###');

    protected static \$state = array(
        'Alberta', 'Colombie-Britannique', 'Manitoba', 'Nouveau-Brunswick', 'Terre-Neuve-et-Labrador', 'Nouvelle-Écosse', 'Ontario', 'Île-du-Prince-Édouard', 'Québec', 'Saskatchewan'
    );

    protected static \$stateAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK'
    );

    /**
     * @example 'Saint-'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '-des-Sables'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    /**
     * @example 'Bureau 500'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Québec'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'QC'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_CA/Address.php");
    }
}
