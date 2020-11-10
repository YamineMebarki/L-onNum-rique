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

/* vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php */
class __TwigTemplate_a46eeb11ba42e0ce70771ac4bcd6b874ab7df8604eb0df55454668ddee76fec3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\lt_LT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('miestas');

    protected static \$regionSuffix = array('regionas');
    protected static \$streetSuffix = array(
        'g.', 'gatvė', 'prospektas', 'alėja',
    );

    protected static \$buildingNumber = array('##');

    protected static \$postcode = array('LT-#####');

    protected static \$country = array(
    'Afganistanas', 'Airija', 'Alandų salos', 'Albanija', 'Alžyras', 'Amerikos Samoa', 'Andora',
    'Angilija', 'Angola', 'Antarktis', 'Antigva ir Barbuda', 'Argentina', 'Armėnija', 'Aruba', 'Australija', 'Austrija',
    'Azerbaidžanas', 'Bahamos', 'Bahreinas', 'Baltarusija', 'Bangladešas', 'Barbadosas', 'Belgija', 'Belizas',
    'Beninas', 'Bermuda', 'Bisau Gvinėja', 'Bolivija', 'Bosnija ir Hercegovina', 'Botsvana', 'Bouvet sala', 'Brazilija',
    'Brunėjus', 'Bulgarija', 'Burkina Fasas', 'Burundis', 'Butanas', 'Centrinės Afrikos Respublika', 'Danija',
    'Didžioji Britanija', 'Didžiosios Britanijos Mergelių salos', 'Dominika', 'Dominikos Respublika',
    'Dramblio Kaulo Krantas',
    'Džersis', 'Džibutis', 'Egiptas', 'Ekvadoras', 'Eritrėja', 'Estija', 'Etiopija', 'Falklando salos', 'Farerų salos',
    'Fidžis', 'Filipinai', 'Gabonas', 'Gajana', 'Gambija', 'Gana', 'Gibraltaras', 'Graikija', 'Grenada', 'Grenlandija',
    'Gruzija', 'Guamas', 'Guernsis', 'Gvadelupė', 'Gvatemala', 'Gvinėja', 'Haitis', 'Heardo ir McDonaldo Salų Sritis',
    'Hondūras', 'Indija', 'Indijos vandenyno britų sritis', 'Indonezija', 'Irakas', 'Iranas', 'Islandija', 'Ispanija',
    'Italija', 'Izraelis', 'Jamaika', 'Japonija', 'Jemenas', 'Jordanija', 'Jungtiniai Arabų Emyratai', 'Jungtinių
    Valstijų mažosios aplinkinės salos', 'Jungtinės Valstijos', 'Juodkalnija', 'Kaimanų salos', 'Kalėdų sala',
    'Kambodža', 'Kamerūnas', 'Kanada', 'Kataras', 'Kazachstanas', 'Kenija', 'Kinija', 'Kinijos S.A.R.Honkongas',
    'Kipras', 'Kirgiztanas', 'Kiribatis', 'Kokosų salos', 'Kolumbija', 'Komorai', 'Kongas', 'Kongo Demokratinė
    Respublika', 'Kosta Rika', 'Kroatija', 'Kuba', 'Kuko salos', 'Kuveitas', 'Laosas', 'Latvija', 'Lenkija', 'Lesotas',
    'Libanas', 'Liberija', 'Libija', 'Lichtenšteinas', 'Lietuva', 'Liuksemburgas', 'Macao', 'Madagaskaras',
    'Makedonija', 'Malaizija', 'Malavis', 'Maldivai', 'Malis', 'Malta', 'Marianos šiaurinės salos', 'Marokas',
    'Martinika', 'Maršalo Salos', 'Mauricijus', 'Mauritanija', 'Mayotte’as', 'Meino sala', 'Meksika', 'Mergelių salos
    (JAV)', 'Mianmaras', 'Mikronezija', 'Moldova', 'Monakas', 'Mongolija', 'Montserratas', 'Mozambikas', 'Namibija',
    'Naujoji Kaledonija', 'Naujoji Zelandija', 'Nauru', 'Nepalas', 'Nežinoma ar neteisinga sritis', 'Nigerija',
    'Nigeris', 'Nikaragva', 'Niue', 'Norfolko sala', 'Norvegija', 'Nyderlandai', 'Olandijos Antilai', 'Omanas',
    'Pakistanas', 'Palau', 'Palestinos teritorija', 'Panama', 'Papua Naujoji Gvinėja', 'Paragvajus', 'Peru', 'Pietų
    Afrika', 'Pietų Džordžija ir Pietų Sandvičo salos', 'Pietų Korėja', 'Pitkernas', 'Portugalija', 'Prancūzija',
    'Prancūzijos Gviana', 'Prancūzijos Pietų sritys', 'Prancūzų Polinezija', 'Puerto Rikas', 'Pusiaujo Gvinėja',
    'Reunionas', 'Ruanda', 'Rumunija', 'Rusijos Federacija', 'Rytų Timoras', 'Saint-Martin', 'Saliamono salos',
    'Salvadoras', 'Samoa', 'San Marinas', 'San Tomė ir Principė', 'Saudo Arabija', 'Seišeliai', 'Sen Pjeras ir
    Mikelonas', 'Senegalas', 'Sent Kitsas ir Nevis', 'Serbija', 'Serbija ir Juodkalnija', 'Siera Leonė', 'Singapūras',
    'Sirija', 'Slovakija', 'Slovėnija', 'Somalis', 'Sudanas', 'Suomija', 'Surinamas', 'Svalbardo ir Jan Majen salos',
    'Svazilendas', 'Tadžikistanas', 'Tailandas', 'Taivanas', 'Tanzanija', 'Togas', 'Tokelau', 'Tonga', 'Trinidadas ir
    Tobagas', 'Tunisas', 'Turkija', 'Turkmėnistanas', 'Turkso ir Caicoso salos', 'Tuvalu', 'Uganda', 'Ukraina',
    'Urugvajus', 'Uzbekistanas', 'Vakarų Sachara', 'Vanuatu', 'Vatikanas', 'Venesuela', 'Vengrija', 'Vietnamas',
    'Vokietija', 'Wallisas ir Futuna', 'Zambija', 'Zimbabvė', 'Čadas', 'Čekija', 'Čilė', 'Šiaurės Korėja', 'Šri Lanka',
    'Švedija', 'Šveicarija', 'Šventasis Vincentas ir Grenadinai', 'Švento Baltramiejaus sala', 'Šventoji Elena',
    'Šventoji Liucija', 'Žaliasis Kyšulys');

    /**
     * @link https://lt.wikipedia.org/wiki/Lietuvos_etnokult%C5%ABriniai_regionai
     */
    protected static \$region = array(
        'Aukštaitija', 'Dzūkija', 'Suvalkija', 'Žemaitija'
    );

    /**
     * @link https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvos_miestai_pagal_gyventojus
     */
    protected static \$city = array('Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys',
        'Alytus', 'Marijampolė', 'Mažeikiai', 'Jonava', 'Utena', 'Kėdainiai', 'Telšiai', 'Visaginas', 'Tauragė',
        'Ukmergė'
    );

    protected static \$street = array(
        'Klaipėdos', 'Vilniaus', 'Kauno', 'Žalgirio', 'Saltoniškių', 'Laisvės', 'Didžioji', 'Liepų'
    );

    protected static \$addressFormats = array(
        \"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 77, $this->source); })()), "html", null, true);
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

    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 77,  131 => 76,  119 => 75,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\lt_LT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('miestas');

    protected static \$regionSuffix = array('regionas');
    protected static \$streetSuffix = array(
        'g.', 'gatvė', 'prospektas', 'alėja',
    );

    protected static \$buildingNumber = array('##');

    protected static \$postcode = array('LT-#####');

    protected static \$country = array(
    'Afganistanas', 'Airija', 'Alandų salos', 'Albanija', 'Alžyras', 'Amerikos Samoa', 'Andora',
    'Angilija', 'Angola', 'Antarktis', 'Antigva ir Barbuda', 'Argentina', 'Armėnija', 'Aruba', 'Australija', 'Austrija',
    'Azerbaidžanas', 'Bahamos', 'Bahreinas', 'Baltarusija', 'Bangladešas', 'Barbadosas', 'Belgija', 'Belizas',
    'Beninas', 'Bermuda', 'Bisau Gvinėja', 'Bolivija', 'Bosnija ir Hercegovina', 'Botsvana', 'Bouvet sala', 'Brazilija',
    'Brunėjus', 'Bulgarija', 'Burkina Fasas', 'Burundis', 'Butanas', 'Centrinės Afrikos Respublika', 'Danija',
    'Didžioji Britanija', 'Didžiosios Britanijos Mergelių salos', 'Dominika', 'Dominikos Respublika',
    'Dramblio Kaulo Krantas',
    'Džersis', 'Džibutis', 'Egiptas', 'Ekvadoras', 'Eritrėja', 'Estija', 'Etiopija', 'Falklando salos', 'Farerų salos',
    'Fidžis', 'Filipinai', 'Gabonas', 'Gajana', 'Gambija', 'Gana', 'Gibraltaras', 'Graikija', 'Grenada', 'Grenlandija',
    'Gruzija', 'Guamas', 'Guernsis', 'Gvadelupė', 'Gvatemala', 'Gvinėja', 'Haitis', 'Heardo ir McDonaldo Salų Sritis',
    'Hondūras', 'Indija', 'Indijos vandenyno britų sritis', 'Indonezija', 'Irakas', 'Iranas', 'Islandija', 'Ispanija',
    'Italija', 'Izraelis', 'Jamaika', 'Japonija', 'Jemenas', 'Jordanija', 'Jungtiniai Arabų Emyratai', 'Jungtinių
    Valstijų mažosios aplinkinės salos', 'Jungtinės Valstijos', 'Juodkalnija', 'Kaimanų salos', 'Kalėdų sala',
    'Kambodža', 'Kamerūnas', 'Kanada', 'Kataras', 'Kazachstanas', 'Kenija', 'Kinija', 'Kinijos S.A.R.Honkongas',
    'Kipras', 'Kirgiztanas', 'Kiribatis', 'Kokosų salos', 'Kolumbija', 'Komorai', 'Kongas', 'Kongo Demokratinė
    Respublika', 'Kosta Rika', 'Kroatija', 'Kuba', 'Kuko salos', 'Kuveitas', 'Laosas', 'Latvija', 'Lenkija', 'Lesotas',
    'Libanas', 'Liberija', 'Libija', 'Lichtenšteinas', 'Lietuva', 'Liuksemburgas', 'Macao', 'Madagaskaras',
    'Makedonija', 'Malaizija', 'Malavis', 'Maldivai', 'Malis', 'Malta', 'Marianos šiaurinės salos', 'Marokas',
    'Martinika', 'Maršalo Salos', 'Mauricijus', 'Mauritanija', 'Mayotte’as', 'Meino sala', 'Meksika', 'Mergelių salos
    (JAV)', 'Mianmaras', 'Mikronezija', 'Moldova', 'Monakas', 'Mongolija', 'Montserratas', 'Mozambikas', 'Namibija',
    'Naujoji Kaledonija', 'Naujoji Zelandija', 'Nauru', 'Nepalas', 'Nežinoma ar neteisinga sritis', 'Nigerija',
    'Nigeris', 'Nikaragva', 'Niue', 'Norfolko sala', 'Norvegija', 'Nyderlandai', 'Olandijos Antilai', 'Omanas',
    'Pakistanas', 'Palau', 'Palestinos teritorija', 'Panama', 'Papua Naujoji Gvinėja', 'Paragvajus', 'Peru', 'Pietų
    Afrika', 'Pietų Džordžija ir Pietų Sandvičo salos', 'Pietų Korėja', 'Pitkernas', 'Portugalija', 'Prancūzija',
    'Prancūzijos Gviana', 'Prancūzijos Pietų sritys', 'Prancūzų Polinezija', 'Puerto Rikas', 'Pusiaujo Gvinėja',
    'Reunionas', 'Ruanda', 'Rumunija', 'Rusijos Federacija', 'Rytų Timoras', 'Saint-Martin', 'Saliamono salos',
    'Salvadoras', 'Samoa', 'San Marinas', 'San Tomė ir Principė', 'Saudo Arabija', 'Seišeliai', 'Sen Pjeras ir
    Mikelonas', 'Senegalas', 'Sent Kitsas ir Nevis', 'Serbija', 'Serbija ir Juodkalnija', 'Siera Leonė', 'Singapūras',
    'Sirija', 'Slovakija', 'Slovėnija', 'Somalis', 'Sudanas', 'Suomija', 'Surinamas', 'Svalbardo ir Jan Majen salos',
    'Svazilendas', 'Tadžikistanas', 'Tailandas', 'Taivanas', 'Tanzanija', 'Togas', 'Tokelau', 'Tonga', 'Trinidadas ir
    Tobagas', 'Tunisas', 'Turkija', 'Turkmėnistanas', 'Turkso ir Caicoso salos', 'Tuvalu', 'Uganda', 'Ukraina',
    'Urugvajus', 'Uzbekistanas', 'Vakarų Sachara', 'Vanuatu', 'Vatikanas', 'Venesuela', 'Vengrija', 'Vietnamas',
    'Vokietija', 'Wallisas ir Futuna', 'Zambija', 'Zimbabvė', 'Čadas', 'Čekija', 'Čilė', 'Šiaurės Korėja', 'Šri Lanka',
    'Švedija', 'Šveicarija', 'Šventasis Vincentas ir Grenadinai', 'Švento Baltramiejaus sala', 'Šventoji Elena',
    'Šventoji Liucija', 'Žaliasis Kyšulys');

    /**
     * @link https://lt.wikipedia.org/wiki/Lietuvos_etnokult%C5%ABriniai_regionai
     */
    protected static \$region = array(
        'Aukštaitija', 'Dzūkija', 'Suvalkija', 'Žemaitija'
    );

    /**
     * @link https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvos_miestai_pagal_gyventojus
     */
    protected static \$city = array('Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys',
        'Alytus', 'Marijampolė', 'Mažeikiai', 'Jonava', 'Utena', 'Kėdainiai', 'Telšiai', 'Visaginas', 'Tauragė',
        'Ukmergė'
    );

    protected static \$street = array(
        'Klaipėdos', 'Vilniaus', 'Kauno', 'Žalgirio', 'Saltoniškių', 'Laisvės', 'Didžioji', 'Liepų'
    );

    protected static \$addressFormats = array(
        \"{{street}} {{streetSuffix}} {{buildingNumber}}-{{buildingNumber}}, {{city}}\",
        \"{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}}\",
        \"{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}} {{postcode}}\",
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

    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/lt_LT/Address.php");
    }
}
