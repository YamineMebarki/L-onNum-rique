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

/* vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php */
class __TwigTemplate_286e6954609ba3d27afc1834cec27ad4f9da18d7570fdfeb5c4574e0dbf54fe9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\lv_LV;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('pilsēta');

    protected static \$regionSuffix = array('reģions');
    protected static \$streetPrefix = array(
        'iela', 'bulvāris', 'skvērs', 'gāte',
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('LV ####');

    /**
     * @link https://lv.wikipedia.org/wiki/Suver%C4%93no_valstu_uzskait%C4%ABjums
     */
    protected static \$country = array(
        'Afganistāna', 'Albānija', 'Alžīrija', 'Amerikas Savienotās Valstis', 'Andora', 'Angola', 'Antigva un Barbuda',
        'Apvienotie Arābu Emirāti', 'Argentīna', 'Armēnija', 'Austrālija', 'Austrija', 'Austrumtimora', 'Azerbaidžāna',
        'Bahamas', 'Bahreina', 'Baltkrievija', 'Bangladeša', 'Barbadosa', 'Beliza', 'Beļģija', 'Benina', 'Bolīvija',
        'Bosnija un Hercegovina', 'Botsvana', 'Brazīlija', 'Bruneja', 'Bulgārija', 'Burkinafaso', 'Burundi', 'Butāna',
        'Centrālāfrikas Republika', 'Čada', 'Čehija', 'Čīle', 'Dānija', 'Dienvidāfrikas Republika', 'Dienvidkoreja',
        'Dienvidsudāna', 'Dominika', 'Dominikāna', 'Džibutija', 'Ekvadora', 'Ekvatoriālā Gvineja', 'Eritreja',
        'Etiopija', 'Ēģipte', 'Fidži', 'Filipīnas', 'Francija', 'Gabona', 'Gajāna', 'Gambija', 'Gana', 'Grenada',
        'Grieķija', 'Gruzija', 'Gvatemala', 'Gvineja', 'Gvineja-Bisava', 'Haiti', 'Hondurasa', 'Horvātija', 'Igaunija',
        'Indija', 'Indonēzija', 'Irāka', 'Irāna', 'Islande', 'Itālija', 'Izraēla', 'Īrija', 'Jamaika', 'Japāna',
        'Jaunzēlande', 'Jemena', 'Jordānija', 'Kaboverde', 'Kambodža', 'Kamerūna', 'Kanāda', 'Katara', 'Kazahstāna',
        'Kenija', 'Kipra', 'Kirgizstāna', 'Kiribati', 'Kolumbija', 'Komoru Salas', 'Kongo', 'Kongo DR', 'Kostarika',
        'Kotdivuāra', 'Krievija', 'Kuba', 'Kuveita', 'Ķīna', 'Laosa', 'Latvija', 'Lesoto', 'Libāna', 'Libērija',
        'Lībija', 'Lielbritānija', 'Lietuva', 'Lihtenšteina', 'Luksemburga', 'Madagaskara', 'Maķedonijas Republika',
        'Malaizija', 'Malāvija', 'Maldīvija', 'Mali', 'Malta', 'Maroka', 'Māršala Salas', 'Maurīcija', 'Mauritānija',
        'Meksika', 'Melnkalne', 'Mikronēzija', 'Mjanma', 'Moldova', 'Monako', 'Mongolija', 'Mozambika', 'Namībija',
        'Nauru', 'Nepāla', 'Nīderlande', 'Nigēra', 'Nigērija', 'Nikaragva', 'Norvēģija', 'Omāna', 'Pakistāna', 'Palau',
        'Panama', 'Papua-Jaungvineja', 'Paragvaja', 'Peru', 'Polija', 'Portugāle', 'Ruanda', 'Rumānija', 'Salvadora',
        'Samoa', 'Sanmarīno', 'Santome un Prinsipi', 'Saūda Arābija', 'Seišelu Salas', 'Senegāla',
        'Sentkitsa un Nevisa', 'Sentlūsija', 'Sentvinsenta un Grenadīnas', 'Serbija', 'Singapūra', 'Sīrija',
        'Sjerraleone', 'Slovākija', 'Slovēnija', 'Somālija', 'Somija', 'Spānija', 'Sudāna', 'Surinama', 'Svazilenda',
        'Šrilanka', 'Šveice', 'Tadžikistāna', 'Taizeme', 'Tanzānija', 'Togo', 'Tonga', 'Trinidāda un Tobāgo',
        'Tunisija', 'Turcija', 'Turkmenistāna', 'Tuvalu', 'Uganda', 'Ukraina', 'Ungārija', 'Urugvaja', 'Uzbekistāna',
        'Vācija', 'Vanuatu', 'Vatikāns', 'Venecuēla', 'Vjetnama', 'Zālamana Salas', 'Zambija', 'Ziemeļkoreja',
        'Zimbabve', 'Zviedrija',
    );

    protected static \$region = array(
        'Kurzemes', 'Latgales', 'Rīgas', 'Vidzemes', 'Zemgales'
    );

    protected static \$city = array('Aizkraukle' ,'Aluksne','Balvi', 'Bauska','Cesis',
        'Daugavpils', 'Dobele','Gulbene', 'Jekabpils', 'Jelgava', 'Kraslava', 'Kuldiga', 'Liepaja',
        'Limbazi', 'Ludza', 'Madona', 'Mobile Phones', 'Ogre', 'Preili', 'Rezekne', 'Rīga', 'Ventspils'
    );

    protected static \$street = array(
        'Alfrēda Kalniņa', 'Alksnāja', 'Amatu', 'Anglikāņu', 'Arhitektu', 'Arsenāla', 'Artilērijas',
        'Aspazijas', 'Atgriežu', 'Audēju', 'Basteja', 'Baumaņa', 'Bīskapa', 'Blaumaņa', 'Brīvības', 'Brīvības',
        'Bruņinieku', 'Dainas', 'Daugavas'
    );

    protected static \$addressFormats = array(
        \"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 63,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\lv_LV;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('pilsēta');

    protected static \$regionSuffix = array('reģions');
    protected static \$streetPrefix = array(
        'iela', 'bulvāris', 'skvērs', 'gāte',
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('LV ####');

    /**
     * @link https://lv.wikipedia.org/wiki/Suver%C4%93no_valstu_uzskait%C4%ABjums
     */
    protected static \$country = array(
        'Afganistāna', 'Albānija', 'Alžīrija', 'Amerikas Savienotās Valstis', 'Andora', 'Angola', 'Antigva un Barbuda',
        'Apvienotie Arābu Emirāti', 'Argentīna', 'Armēnija', 'Austrālija', 'Austrija', 'Austrumtimora', 'Azerbaidžāna',
        'Bahamas', 'Bahreina', 'Baltkrievija', 'Bangladeša', 'Barbadosa', 'Beliza', 'Beļģija', 'Benina', 'Bolīvija',
        'Bosnija un Hercegovina', 'Botsvana', 'Brazīlija', 'Bruneja', 'Bulgārija', 'Burkinafaso', 'Burundi', 'Butāna',
        'Centrālāfrikas Republika', 'Čada', 'Čehija', 'Čīle', 'Dānija', 'Dienvidāfrikas Republika', 'Dienvidkoreja',
        'Dienvidsudāna', 'Dominika', 'Dominikāna', 'Džibutija', 'Ekvadora', 'Ekvatoriālā Gvineja', 'Eritreja',
        'Etiopija', 'Ēģipte', 'Fidži', 'Filipīnas', 'Francija', 'Gabona', 'Gajāna', 'Gambija', 'Gana', 'Grenada',
        'Grieķija', 'Gruzija', 'Gvatemala', 'Gvineja', 'Gvineja-Bisava', 'Haiti', 'Hondurasa', 'Horvātija', 'Igaunija',
        'Indija', 'Indonēzija', 'Irāka', 'Irāna', 'Islande', 'Itālija', 'Izraēla', 'Īrija', 'Jamaika', 'Japāna',
        'Jaunzēlande', 'Jemena', 'Jordānija', 'Kaboverde', 'Kambodža', 'Kamerūna', 'Kanāda', 'Katara', 'Kazahstāna',
        'Kenija', 'Kipra', 'Kirgizstāna', 'Kiribati', 'Kolumbija', 'Komoru Salas', 'Kongo', 'Kongo DR', 'Kostarika',
        'Kotdivuāra', 'Krievija', 'Kuba', 'Kuveita', 'Ķīna', 'Laosa', 'Latvija', 'Lesoto', 'Libāna', 'Libērija',
        'Lībija', 'Lielbritānija', 'Lietuva', 'Lihtenšteina', 'Luksemburga', 'Madagaskara', 'Maķedonijas Republika',
        'Malaizija', 'Malāvija', 'Maldīvija', 'Mali', 'Malta', 'Maroka', 'Māršala Salas', 'Maurīcija', 'Mauritānija',
        'Meksika', 'Melnkalne', 'Mikronēzija', 'Mjanma', 'Moldova', 'Monako', 'Mongolija', 'Mozambika', 'Namībija',
        'Nauru', 'Nepāla', 'Nīderlande', 'Nigēra', 'Nigērija', 'Nikaragva', 'Norvēģija', 'Omāna', 'Pakistāna', 'Palau',
        'Panama', 'Papua-Jaungvineja', 'Paragvaja', 'Peru', 'Polija', 'Portugāle', 'Ruanda', 'Rumānija', 'Salvadora',
        'Samoa', 'Sanmarīno', 'Santome un Prinsipi', 'Saūda Arābija', 'Seišelu Salas', 'Senegāla',
        'Sentkitsa un Nevisa', 'Sentlūsija', 'Sentvinsenta un Grenadīnas', 'Serbija', 'Singapūra', 'Sīrija',
        'Sjerraleone', 'Slovākija', 'Slovēnija', 'Somālija', 'Somija', 'Spānija', 'Sudāna', 'Surinama', 'Svazilenda',
        'Šrilanka', 'Šveice', 'Tadžikistāna', 'Taizeme', 'Tanzānija', 'Togo', 'Tonga', 'Trinidāda un Tobāgo',
        'Tunisija', 'Turcija', 'Turkmenistāna', 'Tuvalu', 'Uganda', 'Ukraina', 'Ungārija', 'Urugvaja', 'Uzbekistāna',
        'Vācija', 'Vanuatu', 'Vatikāns', 'Venecuēla', 'Vjetnama', 'Zālamana Salas', 'Zambija', 'Ziemeļkoreja',
        'Zimbabve', 'Zviedrija',
    );

    protected static \$region = array(
        'Kurzemes', 'Latgales', 'Rīgas', 'Vidzemes', 'Zemgales'
    );

    protected static \$city = array('Aizkraukle' ,'Aluksne','Balvi', 'Bauska','Cesis',
        'Daugavpils', 'Dobele','Gulbene', 'Jekabpils', 'Jelgava', 'Kraslava', 'Kuldiga', 'Liepaja',
        'Limbazi', 'Ludza', 'Madona', 'Mobile Phones', 'Ogre', 'Preili', 'Rezekne', 'Rīga', 'Ventspils'
    );

    protected static \$street = array(
        'Alfrēda Kalniņa', 'Alksnāja', 'Amatu', 'Anglikāņu', 'Arhitektu', 'Arsenāla', 'Artilērijas',
        'Aspazijas', 'Atgriežu', 'Audēju', 'Basteja', 'Baumaņa', 'Bīskapa', 'Blaumaņa', 'Brīvības', 'Brīvības',
        'Bruņinieku', 'Dainas', 'Daugavas'
    );

    protected static \$addressFormats = array(
        \"{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{cityPrefix}}, {{street}} {{streetPrefix}}, {{buildingNumber}}\",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/lv_LV/Address.php");
    }
}
