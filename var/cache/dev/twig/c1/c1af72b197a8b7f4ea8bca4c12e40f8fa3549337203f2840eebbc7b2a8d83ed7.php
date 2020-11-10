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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php */
class __TwigTemplate_04a31975a1e77d0ba3ad62cdad5b6c63b432d79c278ab8752980637b80a2b99e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_BE;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$postcode = array('####');

    protected static \$streetAddressFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetNameFormats = array('";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "');

    protected static \$cityFormats = array('";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "');

    protected static \$addressFormats = array(
        \"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\\n ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$streetSuffix = array(
        'rue', 'avenue', 'boulevard', 'chemin', 'chaussée', 'impasse', 'place'
    );

    /**
     * Source: http://fr.wikipedia.org/wiki/Ville_de_Belgique
     *
     * @var array
     */
    protected static \$cityNames = array(
        'Aarschot','Alost','Andenne','Antoing','Anvers','Arlon','Ath','Audenarde','Bastogne','Beaumont','Beauraing','Beringen','Bilzen','Binche',
        'Blankenberge','Bouillon','Braine-le-Comte','Bree','Bruges','Bruxelles','Charleroi','Châtelet','Chièvres','Chimay','Chiny','Ciney','Comines-Warneton','Courtrai',
        'Couvin','Damme','Deinze','Diest','Dilsen-Stokkem','Dinant','Dixmude','Durbuy','Eeklo','Enghien','Eupen','Fleurus','Florenville','Fontaine-l\\'Évêque','Fosses-la-Ville',
        'Furnes','Gand','Geel','Gembloux','Genappe','Genk','Gistel','Grammont','Hal','Halen','Hamont-Achel','Hannut','Harelbeke','Hasselt',
        'Herck-la-Ville','Herentals','Herstal','Herve','Hoogstraten','Houffalize','Huy','Izegem','Jodoigne','La Louvière','La Roche-en-Ardenne','Landen','Léau',
        'Le Rœulx','Lessines','Leuze-en-Hainaut','Liège','Lierre','Limbourg','Lokeren','Lommel','Looz','Lo-Reninge','Louvain','Maaseik','Malines',
        'Malmedy','Marche-en-Famenne','Menin','Messines','Mons','Montaigu-Zichem','Mortsel','Mouscron','Namur','Neufchâteau','Nieuport',
        'Ninove','Nivelles','Ostende','Ottignies-Louvain-la-Neuve','Oudenburg','Peer','Péruwelz','Philippeville','Poperinge','Renaix','Rochefort','Roulers',
        'Saint-Ghislain','Saint-Hubert','Saint-Nicolas','Saint-Trond','Saint-Vith','Seraing','Soignies','Stavelot','Termonde','Thuin',
        'Tielt','Tirlemont','Tongres','Torhout','Tournai','Turnhout','Verviers','Vilvorde','Virton','Visé','Walcourt','Waregem','Waremme','Wavre','Wervik',
        'Ypres','Zottegem'
    );

    protected static \$region = array(
        'Wallonie', 'Flandre', 'Bruxelles-Capitale'
    );

    protected static \$province = array(
        'Anvers', 'Limbourg', 'Flandre orientale', 'Brabant flamand', 'Flandre occidentale',
        'Hainaut', 'Liège', 'Luxembourg', 'Namur', 'Brabant wallon'
    );

    /**
     * Randomly returns a belgian province.
     *
     * @example 'Hainaut'
     *
     * @return string
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  69 => 15,  62 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_BE;

class Address extends \\Faker\\Provider\\fr_FR\\Address
{
    protected static \$postcode = array('####');

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    protected static \$streetNameFormats = array('{{streetSuffix}} {{lastName}}');

    protected static \$cityFormats = array('{{cityName}}');

    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n {{postcode}} {{city}}\",
    );

    protected static \$streetSuffix = array(
        'rue', 'avenue', 'boulevard', 'chemin', 'chaussée', 'impasse', 'place'
    );

    /**
     * Source: http://fr.wikipedia.org/wiki/Ville_de_Belgique
     *
     * @var array
     */
    protected static \$cityNames = array(
        'Aarschot','Alost','Andenne','Antoing','Anvers','Arlon','Ath','Audenarde','Bastogne','Beaumont','Beauraing','Beringen','Bilzen','Binche',
        'Blankenberge','Bouillon','Braine-le-Comte','Bree','Bruges','Bruxelles','Charleroi','Châtelet','Chièvres','Chimay','Chiny','Ciney','Comines-Warneton','Courtrai',
        'Couvin','Damme','Deinze','Diest','Dilsen-Stokkem','Dinant','Dixmude','Durbuy','Eeklo','Enghien','Eupen','Fleurus','Florenville','Fontaine-l\\'Évêque','Fosses-la-Ville',
        'Furnes','Gand','Geel','Gembloux','Genappe','Genk','Gistel','Grammont','Hal','Halen','Hamont-Achel','Hannut','Harelbeke','Hasselt',
        'Herck-la-Ville','Herentals','Herstal','Herve','Hoogstraten','Houffalize','Huy','Izegem','Jodoigne','La Louvière','La Roche-en-Ardenne','Landen','Léau',
        'Le Rœulx','Lessines','Leuze-en-Hainaut','Liège','Lierre','Limbourg','Lokeren','Lommel','Looz','Lo-Reninge','Louvain','Maaseik','Malines',
        'Malmedy','Marche-en-Famenne','Menin','Messines','Mons','Montaigu-Zichem','Mortsel','Mouscron','Namur','Neufchâteau','Nieuport',
        'Ninove','Nivelles','Ostende','Ottignies-Louvain-la-Neuve','Oudenburg','Peer','Péruwelz','Philippeville','Poperinge','Renaix','Rochefort','Roulers',
        'Saint-Ghislain','Saint-Hubert','Saint-Nicolas','Saint-Trond','Saint-Vith','Seraing','Soignies','Stavelot','Termonde','Thuin',
        'Tielt','Tirlemont','Tongres','Torhout','Tournai','Turnhout','Verviers','Vilvorde','Virton','Visé','Walcourt','Waregem','Waremme','Wavre','Wervik',
        'Ypres','Zottegem'
    );

    protected static \$region = array(
        'Wallonie', 'Flandre', 'Bruxelles-Capitale'
    );

    protected static \$province = array(
        'Anvers', 'Limbourg', 'Flandre orientale', 'Brabant flamand', 'Flandre occidentale',
        'Hainaut', 'Liège', 'Luxembourg', 'Namur', 'Brabant wallon'
    );

    /**
     * Randomly returns a belgian province.
     *
     * @example 'Hainaut'
     *
     * @return string
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_BE/Address.php");
    }
}
