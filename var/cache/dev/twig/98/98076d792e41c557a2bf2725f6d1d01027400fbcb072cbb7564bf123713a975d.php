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

/* vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php */
class __TwigTemplate_cc40b08aeb3ed5db72f63f5d60bcaf0f94da828de7d32e155327dc736f4151f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\es_ES;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('San', 'Vall', \"L'\", 'Villa', 'El', 'Los', 'La', 'Las', 'O', 'A', 'Os', 'As');
    protected static \$citySuffix = array('del Vallès', 'del Penedès', 'del Bages', 'de Ulla', 'de Lemos', 'del Mirador', 'de Arriba', 'de la Sierra', 'del Barco', 'de San Pedro', 'del Pozo', 'del Puerto', 'de las Torres', 'Alta', 'Baja', 'Medio');
    protected static \$buildingNumber = array('###', '##', '#');
    protected static \$streetPrefix = array(
        'Calle', 'Avenida', 'Plaza', 'Paseo', 'Ronda', 'Travesía', 'Camino', 'Carrer', 'Avinguda', 'Plaça', 'Passeig', 'Travessera', 'Rúa', 'Praza', 'Ruela', 'Camiño'
    );
    protected static \$postcode = array('#####');
    protected static \$community = array(
        'Andalucía', 'Aragón', 'Principado de Asturias', 'Illes Balears', 'Canarias', 'Cantabria', 'Castilla y León', 'Castilla - La Mancha', 'Cataluña', 'Comunitat Valenciana', 'Extremadura', 'Galicia', 'Comunidad de Madrid', 'Región de Murcia', 'Comunidad Foral de Navarra', 'País Vasco', 'La Rioja', 'Ceuta', 'Melilla'
    );
    protected static \$state = array(
        'A Coruña', 'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ceuta', 'Ciudad Real', 'Cuenca', 'Córdoba', 'Girona', 'Granada', 'Guadalajara', 'Guipuzkoa', 'Huelva', 'Huesca', 'Illes Balears', 'Jaén', 'La Rioja', 'Las Palmas', 'León', 'Lleida', 'Lugo', 'Málaga', 'Madrid', 'Melilla', 'Murcia', 'Navarra', 'Ourense', 'Palencia', 'Pontevedra', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 'Santa Cruz de Tenerife', 'Tarragona', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
    );
    protected static \$country = array(
        'Afganistán','Albania','Alemania','Andorra','Angola','Antigua y Barbuda','Arabia Saudí','Argelia','Argentina','Armenia','Australia','Austria','Azerbaiyán',
        'Bahamas','Bangladés','Barbados','Baréin','Belice','Benín','Bielorrusia','Birmania','Bolivia','Bosnia-Herzegovina','Botsuana','Brasil','Brunéi Darusalam','Bulgaria','Burkina Faso','Burundi','Bután','Bélgica',
        'Cabo Verde','Camboya','Camerún','Canadá','Catar','Chad','Chile','China','Chipre','Ciudad del Vaticano','Colombia','Comoras','Congo','Corea del Norte','Corea del Sur','Costa Rica','Costa de Marfil','Croacia','Cuba',
        'Dinamarca','Dominica',
        'Ecuador','Egipto','El Salvador','Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia','España','Estados Unidos de América','Estonia','Etiopía',
        'Filipinas','Finlandia','Fiyi','Francia',
        'Gabón','Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guinea','Guinea Ecuatorial','Guinea-Bisáu','Guyana',
        'Haití','Honduras','Hungría',
        'India','Indonesia','Irak','Irlanda','Irán','Islandia','Islas Marshall','Islas Salomón','Israel','Italia',
        'Jamaica','Japón','Jordania',
        'Kazajistán','Kenia','Kirguistán','Kiribati','Kuwait',
        'Laos','Lesoto','Letonia','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Líbano',
        'Macedonia','Madagascar','Malasia','Malaui','Maldivas','Mali','Malta','Marruecos','Mauricio','Mauritania','Micronesia','Moldavia','Mongolia','Montenegro','Mozambique','México','Mónaco',
        'Namibia','Nauru','Nepal','Nicaragua','Nigeria','Noruega','Nueva Zelanda','Níger',
        'Omán',
        'Pakistán','Palaos','Panamá','Papúa Nueva Guinea','Paraguay','Países Bajos','Perú','Polonia','Portugal',
        'Reino Unido','Reino Unido de Gran Bretaña e Irlanda del Norte','República Centroafricana','República Checa','República Democrática del Congo','República Dominicana','Ruanda','Rumanía','Rusia',
        'Samoa','San Cristóbal y Nieves','San Marino','San Vicente y las Granadinas','Santa Lucía','Santo Tomé y Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Siria','Somalia','Sri Lanka','Suazilandia','Sudáfrica','Sudán','Suecia','Suiza','Surinam',
        'Tailandia','Tanzania','Tayikistán','Timor Oriental','Togo','Tonga','Trinidad y Tobago','Turkmenistán','Turquía','Tuvalu','Túnez',
        'Ucrania','Uganda','Uruguay','Uzbekistán',
        'Vanuatu','Venezuela','Vietnam',
        'Yemen','Yibuti',
        'Zambia','Zimbabue'
    );
    protected static \$cityFormats = array(
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 55, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 55, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 58, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 58, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\"
    );
    protected static \$secondaryAddressFormats = array('Bajos', 'Ático #º', 'Entre suelo #º', 'Bajo #º', '#º', '#º A', '#º B', '#º C', '#º D', '#º E', '#º F', '##º A', '##º B', '##º C', '##º D', '##º E', '##º F', '#º #º', '##º #º');

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Barcelona'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Comunidad de Madrid'
     */
    public static function community()
    {
        return static::randomElement(static::\$community);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 58,  126 => 55,  118 => 52,  112 => 51,  104 => 48,  98 => 47,  90 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\es_ES;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('San', 'Vall', \"L'\", 'Villa', 'El', 'Los', 'La', 'Las', 'O', 'A', 'Os', 'As');
    protected static \$citySuffix = array('del Vallès', 'del Penedès', 'del Bages', 'de Ulla', 'de Lemos', 'del Mirador', 'de Arriba', 'de la Sierra', 'del Barco', 'de San Pedro', 'del Pozo', 'del Puerto', 'de las Torres', 'Alta', 'Baja', 'Medio');
    protected static \$buildingNumber = array('###', '##', '#');
    protected static \$streetPrefix = array(
        'Calle', 'Avenida', 'Plaza', 'Paseo', 'Ronda', 'Travesía', 'Camino', 'Carrer', 'Avinguda', 'Plaça', 'Passeig', 'Travessera', 'Rúa', 'Praza', 'Ruela', 'Camiño'
    );
    protected static \$postcode = array('#####');
    protected static \$community = array(
        'Andalucía', 'Aragón', 'Principado de Asturias', 'Illes Balears', 'Canarias', 'Cantabria', 'Castilla y León', 'Castilla - La Mancha', 'Cataluña', 'Comunitat Valenciana', 'Extremadura', 'Galicia', 'Comunidad de Madrid', 'Región de Murcia', 'Comunidad Foral de Navarra', 'País Vasco', 'La Rioja', 'Ceuta', 'Melilla'
    );
    protected static \$state = array(
        'A Coruña', 'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ceuta', 'Ciudad Real', 'Cuenca', 'Córdoba', 'Girona', 'Granada', 'Guadalajara', 'Guipuzkoa', 'Huelva', 'Huesca', 'Illes Balears', 'Jaén', 'La Rioja', 'Las Palmas', 'León', 'Lleida', 'Lugo', 'Málaga', 'Madrid', 'Melilla', 'Murcia', 'Navarra', 'Ourense', 'Palencia', 'Pontevedra', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 'Santa Cruz de Tenerife', 'Tarragona', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
    );
    protected static \$country = array(
        'Afganistán','Albania','Alemania','Andorra','Angola','Antigua y Barbuda','Arabia Saudí','Argelia','Argentina','Armenia','Australia','Austria','Azerbaiyán',
        'Bahamas','Bangladés','Barbados','Baréin','Belice','Benín','Bielorrusia','Birmania','Bolivia','Bosnia-Herzegovina','Botsuana','Brasil','Brunéi Darusalam','Bulgaria','Burkina Faso','Burundi','Bután','Bélgica',
        'Cabo Verde','Camboya','Camerún','Canadá','Catar','Chad','Chile','China','Chipre','Ciudad del Vaticano','Colombia','Comoras','Congo','Corea del Norte','Corea del Sur','Costa Rica','Costa de Marfil','Croacia','Cuba',
        'Dinamarca','Dominica',
        'Ecuador','Egipto','El Salvador','Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia','España','Estados Unidos de América','Estonia','Etiopía',
        'Filipinas','Finlandia','Fiyi','Francia',
        'Gabón','Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guinea','Guinea Ecuatorial','Guinea-Bisáu','Guyana',
        'Haití','Honduras','Hungría',
        'India','Indonesia','Irak','Irlanda','Irán','Islandia','Islas Marshall','Islas Salomón','Israel','Italia',
        'Jamaica','Japón','Jordania',
        'Kazajistán','Kenia','Kirguistán','Kiribati','Kuwait',
        'Laos','Lesoto','Letonia','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Líbano',
        'Macedonia','Madagascar','Malasia','Malaui','Maldivas','Mali','Malta','Marruecos','Mauricio','Mauritania','Micronesia','Moldavia','Mongolia','Montenegro','Mozambique','México','Mónaco',
        'Namibia','Nauru','Nepal','Nicaragua','Nigeria','Noruega','Nueva Zelanda','Níger',
        'Omán',
        'Pakistán','Palaos','Panamá','Papúa Nueva Guinea','Paraguay','Países Bajos','Perú','Polonia','Portugal',
        'Reino Unido','Reino Unido de Gran Bretaña e Irlanda del Norte','República Centroafricana','República Checa','República Democrática del Congo','República Dominicana','Ruanda','Rumanía','Rusia',
        'Samoa','San Cristóbal y Nieves','San Marino','San Vicente y las Granadinas','Santa Lucía','Santo Tomé y Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Siria','Somalia','Sri Lanka','Suazilandia','Sudáfrica','Sudán','Suecia','Suiza','Surinam',
        'Tailandia','Tanzania','Tayikistán','Timor Oriental','Togo','Tonga','Trinidad y Tobago','Turkmenistán','Turquía','Tuvalu','Túnez',
        'Ucrania','Uganda','Uruguay','Uzbekistán',
        'Vanuatu','Venezuela','Vietnam',
        'Yemen','Yibuti',
        'Zambia','Zimbabue'
    );
    protected static \$cityFormats = array(
        '{{cityPrefix}} {{lastName}} {{citySuffix}}',
        '{{cityPrefix}} {{lastName}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{postcode}}, {{city}}\"
    );
    protected static \$secondaryAddressFormats = array('Bajos', 'Ático #º', 'Entre suelo #º', 'Bajo #º', '#º', '#º A', '#º B', '#º C', '#º D', '#º E', '#º F', '##º A', '##º B', '##º C', '##º D', '##º E', '##º F', '#º #º', '##º #º');

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Barcelona'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Comunidad de Madrid'
     */
    public static function community()
    {
        return static::randomElement(static::\$community);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Address.php");
    }
}
