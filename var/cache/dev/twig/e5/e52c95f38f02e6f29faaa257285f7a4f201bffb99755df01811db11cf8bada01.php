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

/* vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php */
class __TwigTemplate_d950def4553e104555f3743ff60ee39265a09d42462252b1c72a2524ffb1e4df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fi_FI;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('Pohjois', 'Etelä', 'Itä', 'Länsi', 'Uusi', 'Uus');
    protected static \$citySuffix = array('kylä', 'niemi', 'järvi', 'joki', 'lampi', 'mäki', 'vesi', 'niemi', 'harju', 'lahti', 'harju', 'salmi', 'koski', 'pudas', 'saari');
    protected static \$buildingNumber = array('####', '###', '##', '#', '#');
    protected static \$streetSuffix = array(
        'tie', 'kuja', 'polku', 'kierros', 'kulma', 'katu', 'kaarre', 'kaari', 'rinne', 'kaarto', 'haka', 'silta', 'rinne', 'töyry'
    );
    protected static \$postcode = array('#####');
    protected static \$state = array(
        'Ahvenanmaa', 'Etelä-Karjala', 'Etelä-Pohjanmaa', 'Etelä-Savo', 'Kainuu', 'Kanta-Häme', 'Keski-Pohjanmaa', 'Keski-Suomi', 'Kymenlaakso', 'Lappi', 'Pirkanmaa', 'Pohjanmaa', 'Pohjois-Karjala', 'Pohjois-Pohjanmaa', 'Pohjois-Savo', 'Päijät-Häme', 'Satakunta', 'Uusimaa', 'Varsinais-Suomi'
    );
    protected static \$country = array(
        'Afganistan', 'Alankomaat', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua ja Barbuda', 'Argentiina', 'Armenia', 'Australia', 'Azerbaidẑan',
        'Bahama', 'Bahrain', 'Bangladesh', 'Barbados', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia ja Hertsegovina', 'Botswana', 'Brasilia', 'Brunel', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Chile', 'Costa Rica',
        'Djibouti', 'Dominica', 'Dominikaaninen tasavalta',
        'Ecuador', 'Egypti', 'El Salvador', 'Eritrea', 'Espanja', 'Etelä-Afrikka', 'Etelä-Korea', 'Etelä-Sudan', 'Etiopia', 'Fidẑi', 'Filippiinit',
        'Gabon', 'Gambia', 'Georgia', 'Ghana', 'Grenada', 'Guatemala', 'Guinea-Bissau', 'Guinea', 'Guyana',
        'Haiti', 'Honduras',
        'Indonesia', 'Intia', 'Irak', 'Iran', 'Irlanti', 'Islanti', 'Israel', 'Italia', 'Itä-Timor', 'Itävalta',
        'Jamaika', 'Japani', 'Jemen', 'Jordania',
        'Kambodẑa', 'Kamerun', 'Kanada', 'Kap Verde', 'Kazakstan', 'Kenia', 'Keski-Afrikan tasavalta', 'Kiina', 'Kirgisia', 'Kiribati', 'Kolumbia', 'Komorit', 'Kongon demokraattinen tasavalta', 'Kongon tasavalta', 'Kosovo', 'Kreikka', 'Kroatia', 'Kuuba', 'Kuwait', 'Kypros',
        'Laos', 'Latvia', 'Lesotho', 'Libanon', 'Liberai', 'Libya', 'Lichtenstein', 'Liettua', 'Luxemburg',
        'Madagaskar', 'Makedonia', 'Malawi', 'Malediivit', 'Malesia', 'Mali', 'Malta', 'Marokko', 'Marshallinsaaret', 'Mauritania', 'Mauritius', 'Meksiko', 'Mikronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeria', 'Niger', 'Norja', 'Norsunluurannikko',
        'Oman',
        'Pakistan', 'Palau', 'Panama', 'Papua-Uusi-Guinea', 'Paraguay', 'Peru', 'Pohjois-Korea', 'Portugali', 'Puola', 'Päiväntasaajan Guinea',
        'Qatar',
        'Ranska', 'Romania', 'Ruanda', 'Ruotsi',
        'Saint Kitts ja Nevis', 'Saint Lucia', 'Saint Vincent ja Grenadiinit', 'Saksa', 'Salomonsaaret', 'Sambia', 'Samoa', 'San Marino', 'São Tomé ja Príncipe', 'Saudi-Arabia', 'Senegal', 'Serbia', 'Seychellit', 'Sierra Leone', 'Singapore', 'Slovakia', 'Somalia', 'Sri Lanka', 'Sudan', 'Suomi', 'Suriname', 'Swazimaa', 'Sveitsi', 'Syyria',
        'Tadẑikistan', 'Tansania', 'Tanska', 'Thaimaa', 'Togo', 'Tonga', 'Trinidad ja Tobago', 'Tšad', 'Tšekki', 'Tunisia', 'Turkki', 'Turkmenistan', 'Tuvalu',
        'Uganda', 'Ukraina', 'Unkari', 'Uruguay', 'Uusi-Seelanti', 'Uzbekistan',
        'Valko-Venäjä', 'Vanuatu', 'Vatikaanivaltio', 'Venzuela', 'Venäjä', 'Vietnam', 'Viro',
        'Yhdistyneet Arabiemiirikunnat', 'Yhdistynyt kuningaskunta', 'Yhdysvallat',
        'Zimbabwe'
    );
    protected static \$cityFormats = array(
        '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 43, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 45, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 46, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 49, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 50, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$addressFormats = array(
        \"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 57, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\",
    );
    protected static \$secondaryAddressFormats = array('###');

    /**
     * @example 'Pohjois'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '123'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Pohjois-Pohjanmaa'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  140 => 57,  130 => 54,  124 => 53,  117 => 50,  112 => 49,  105 => 46,  100 => 45,  94 => 44,  87 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fi_FI;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('Pohjois', 'Etelä', 'Itä', 'Länsi', 'Uusi', 'Uus');
    protected static \$citySuffix = array('kylä', 'niemi', 'järvi', 'joki', 'lampi', 'mäki', 'vesi', 'niemi', 'harju', 'lahti', 'harju', 'salmi', 'koski', 'pudas', 'saari');
    protected static \$buildingNumber = array('####', '###', '##', '#', '#');
    protected static \$streetSuffix = array(
        'tie', 'kuja', 'polku', 'kierros', 'kulma', 'katu', 'kaarre', 'kaari', 'rinne', 'kaarto', 'haka', 'silta', 'rinne', 'töyry'
    );
    protected static \$postcode = array('#####');
    protected static \$state = array(
        'Ahvenanmaa', 'Etelä-Karjala', 'Etelä-Pohjanmaa', 'Etelä-Savo', 'Kainuu', 'Kanta-Häme', 'Keski-Pohjanmaa', 'Keski-Suomi', 'Kymenlaakso', 'Lappi', 'Pirkanmaa', 'Pohjanmaa', 'Pohjois-Karjala', 'Pohjois-Pohjanmaa', 'Pohjois-Savo', 'Päijät-Häme', 'Satakunta', 'Uusimaa', 'Varsinais-Suomi'
    );
    protected static \$country = array(
        'Afganistan', 'Alankomaat', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua ja Barbuda', 'Argentiina', 'Armenia', 'Australia', 'Azerbaidẑan',
        'Bahama', 'Bahrain', 'Bangladesh', 'Barbados', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia ja Hertsegovina', 'Botswana', 'Brasilia', 'Brunel', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Chile', 'Costa Rica',
        'Djibouti', 'Dominica', 'Dominikaaninen tasavalta',
        'Ecuador', 'Egypti', 'El Salvador', 'Eritrea', 'Espanja', 'Etelä-Afrikka', 'Etelä-Korea', 'Etelä-Sudan', 'Etiopia', 'Fidẑi', 'Filippiinit',
        'Gabon', 'Gambia', 'Georgia', 'Ghana', 'Grenada', 'Guatemala', 'Guinea-Bissau', 'Guinea', 'Guyana',
        'Haiti', 'Honduras',
        'Indonesia', 'Intia', 'Irak', 'Iran', 'Irlanti', 'Islanti', 'Israel', 'Italia', 'Itä-Timor', 'Itävalta',
        'Jamaika', 'Japani', 'Jemen', 'Jordania',
        'Kambodẑa', 'Kamerun', 'Kanada', 'Kap Verde', 'Kazakstan', 'Kenia', 'Keski-Afrikan tasavalta', 'Kiina', 'Kirgisia', 'Kiribati', 'Kolumbia', 'Komorit', 'Kongon demokraattinen tasavalta', 'Kongon tasavalta', 'Kosovo', 'Kreikka', 'Kroatia', 'Kuuba', 'Kuwait', 'Kypros',
        'Laos', 'Latvia', 'Lesotho', 'Libanon', 'Liberai', 'Libya', 'Lichtenstein', 'Liettua', 'Luxemburg',
        'Madagaskar', 'Makedonia', 'Malawi', 'Malediivit', 'Malesia', 'Mali', 'Malta', 'Marokko', 'Marshallinsaaret', 'Mauritania', 'Mauritius', 'Meksiko', 'Mikronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeria', 'Niger', 'Norja', 'Norsunluurannikko',
        'Oman',
        'Pakistan', 'Palau', 'Panama', 'Papua-Uusi-Guinea', 'Paraguay', 'Peru', 'Pohjois-Korea', 'Portugali', 'Puola', 'Päiväntasaajan Guinea',
        'Qatar',
        'Ranska', 'Romania', 'Ruanda', 'Ruotsi',
        'Saint Kitts ja Nevis', 'Saint Lucia', 'Saint Vincent ja Grenadiinit', 'Saksa', 'Salomonsaaret', 'Sambia', 'Samoa', 'San Marino', 'São Tomé ja Príncipe', 'Saudi-Arabia', 'Senegal', 'Serbia', 'Seychellit', 'Sierra Leone', 'Singapore', 'Slovakia', 'Somalia', 'Sri Lanka', 'Sudan', 'Suomi', 'Suriname', 'Swazimaa', 'Sveitsi', 'Syyria',
        'Tadẑikistan', 'Tansania', 'Tanska', 'Thaimaa', 'Togo', 'Tonga', 'Trinidad ja Tobago', 'Tšad', 'Tšekki', 'Tunisia', 'Turkki', 'Turkmenistan', 'Tuvalu',
        'Uganda', 'Ukraina', 'Unkari', 'Uruguay', 'Uusi-Seelanti', 'Uzbekistan',
        'Valko-Venäjä', 'Vanuatu', 'Vatikaanivaltio', 'Venzuela', 'Venäjä', 'Vietnam', 'Viro',
        'Yhdistyneet Arabiemiirikunnat', 'Yhdistynyt kuningaskunta', 'Yhdysvallat',
        'Zimbabwe'
    );
    protected static \$cityFormats = array(
        '{{cityPrefix}}-{{firstName}}{{citySuffix}}',
        '{{cityPrefix}}-{{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{firstName}}{{streetSuffix}}',
        '{{lastName}}{{streetSuffix}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}'
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}, {{state}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );
    protected static \$secondaryAddressFormats = array('###');

    /**
     * @example 'Pohjois'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '123'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Pohjois-Pohjanmaa'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/Address.php");
    }
}
