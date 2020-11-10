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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php */
class __TwigTemplate_44257a3704c80ce2843381c853bc8aa672fde7637df0ff8b6feb8f50856182b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_AU;

/**
 * Class Address
 * @see http://www.ipaustralia.gov.au/about-us/corporate/address-standards/
 * @package Faker\\Provider\\en_AU
 */
class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$cityPrefix = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port', 'St.');

    protected static \$buildingNumber = array('###', '##', '#');

    protected static \$buildingLetters = array('A','B','C','D');

    protected static \$streetSuffix = array(
        'Access', 'Alley', 'Alleyway', 'Amble', 'Anchorage', 'Approach', 'Arcade', 'Artery', 'Avenue', 'Basin', 'Beach', 'Bend', 'Block', 'Boulevard', 'Brace', 'Brae', 'Break', 'Bridge', 'Broadway', 'Brow', 'Bypass', 'Byway', 'Causeway', 'Centre', 'Centreway', 'Chase', 'Circle', 'Circlet', 'Circuit', 'Circus', 'Close', 'Colonnade', 'Common', 'Concourse', 'Copse', 'Corner', 'Corso', 'Court', 'Courtyard', 'Cove', 'Crescent', 'Crest', 'Cross', 'Crossing', 'Crossroad', 'Crossway', 'Cruiseway', 'Cul-de-sac', 'Cutting', 'Dale', 'Dell', 'Deviation', 'Dip', 'Distributor', 'Drive', 'Driveway', 'Edge', 'Elbow', 'End', 'Entrance', 'Esplanade', 'Estate', 'Expressway', 'Extension', 'Fairway', 'Fire Track', 'Firetrail', 'Flat', 'Follow', 'Footway', 'Foreshore', 'Formation', 'Freeway', 'Front', 'Frontage', 'Gap', 'Garden', 'Gardens', 'Gate', 'Gates', 'Glade', 'Glen', 'Grange', 'Green', 'Ground', 'Grove', 'Gully', 'Heights', 'Highroad', 'Highway', 'Hill', 'Interchange', 'Intersection', 'Junction', 'Key', 'Landing', 'Lane', 'Laneway', 'Lees', 'Line', 'Link', 'Little', 'Lookout', 'Loop', 'Lower', 'Mall', 'Meander', 'Mew', 'Mews', 'Motorway', 'Mount', 'Nook', 'Outlook', 'Parade', 'Park', 'Parklands', 'Parkway', 'Part', 'Pass', 'Path', 'Pathway', 'Piazza', 'Place', 'Plateau', 'Plaza', 'Pocket', 'Point', 'Port', 'Promenade', 'Quad', 'Quadrangle', 'Quadrant', 'Quay', 'Quays', 'Ramble', 'Ramp', 'Range', 'Reach', 'Reserve', 'Rest', 'Retreat', 'Ride', 'Ridge', 'Ridgeway', 'Right Of Way', 'Ring', 'Rise', 'River', 'Riverway', 'Riviera', 'Road', 'Roads', 'Roadside', 'Roadway', 'Ronde', 'Rosebowl', 'Rotary', 'Round', 'Route', 'Row', 'Rue', 'Run', 'Service Way', 'Siding', 'Slope', 'Sound', 'Spur', 'Square', 'Stairs', 'State Highway', 'Steps', 'Strand', 'Street', 'Strip', 'Subway', 'Tarn', 'Terrace', 'Thoroughfare', 'Tollway', 'Top', 'Tor', 'Towers', 'Track', 'Trail', 'Trailer', 'Triangle', 'Trunkway', 'Turn', 'Underpass', 'Upper', 'Vale', 'Viaduct', 'View', 'Villas', 'Vista', 'Wade', 'Walk', 'Walkway', 'Way', 'Wynd'
    );

    protected static \$postcode = array(
        // as per https://en.wikipedia.org/wiki/Postcodes_in_Australia
        // NSW
        '1###',
        '20##', '21##', '22##', '23##', '24##', '25##',
        '2619', '262#', '263#', '264#', '265#', '266#', '267#', '268#', '269#', '27##', '28##',
        '292#', '293#', '294#', '295#', '296#', '297#', '298#', '299#',
        // ACT
        '02##',
        '260#', '261#',
        '290#', '291#', '2920',
        // VIC
        '3###',
        '8###',
        // QLD
        '4###',
        '9###',
        // SA
        '5###',
        // WA
        '6###',
        // TAS
        '7###',
        // NT
        '08##',
        '09##',
    );

    protected static \$state = array(
        'Australian Capital Territory', 'New South Wales', 'Northern Territory', 'Queensland', 'South Australia', 'Tasmania', 'Victoria', 'Western Australia'
    );

    protected static \$stateAbbr = array(
        'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC', 'WA'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 60, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["buildingLetter"]) || array_key_exists("buildingLetter", $context) ? $context["buildingLetter"] : (function () { throw new RuntimeError('Variable "buildingLetter" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$secondaryAddressFormats = array(
        'Apt. ###',
        'Flat ##',
        'Suite ###',
        'Unit ##',
        'Level #',
        '### /',
        '## /',
        '# /',
    );

    /**
     * Returns a sane building letter
     * @example B
     */
    public static function buildingLetter()
    {
        return static::toUpper(static::randomElement(static::\$buildingLetters));
    }

    /**
     * Returns a sane city prefix
     * @example West
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * Returns a sane street suffix
     * @example Beach
     */
    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    /**
     * Returns a sane state
     * @example New South Wales
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  109 => 60,  103 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_AU;

/**
 * Class Address
 * @see http://www.ipaustralia.gov.au/about-us/corporate/address-standards/
 * @package Faker\\Provider\\en_AU
 */
class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$cityPrefix = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port', 'St.');

    protected static \$buildingNumber = array('###', '##', '#');

    protected static \$buildingLetters = array('A','B','C','D');

    protected static \$streetSuffix = array(
        'Access', 'Alley', 'Alleyway', 'Amble', 'Anchorage', 'Approach', 'Arcade', 'Artery', 'Avenue', 'Basin', 'Beach', 'Bend', 'Block', 'Boulevard', 'Brace', 'Brae', 'Break', 'Bridge', 'Broadway', 'Brow', 'Bypass', 'Byway', 'Causeway', 'Centre', 'Centreway', 'Chase', 'Circle', 'Circlet', 'Circuit', 'Circus', 'Close', 'Colonnade', 'Common', 'Concourse', 'Copse', 'Corner', 'Corso', 'Court', 'Courtyard', 'Cove', 'Crescent', 'Crest', 'Cross', 'Crossing', 'Crossroad', 'Crossway', 'Cruiseway', 'Cul-de-sac', 'Cutting', 'Dale', 'Dell', 'Deviation', 'Dip', 'Distributor', 'Drive', 'Driveway', 'Edge', 'Elbow', 'End', 'Entrance', 'Esplanade', 'Estate', 'Expressway', 'Extension', 'Fairway', 'Fire Track', 'Firetrail', 'Flat', 'Follow', 'Footway', 'Foreshore', 'Formation', 'Freeway', 'Front', 'Frontage', 'Gap', 'Garden', 'Gardens', 'Gate', 'Gates', 'Glade', 'Glen', 'Grange', 'Green', 'Ground', 'Grove', 'Gully', 'Heights', 'Highroad', 'Highway', 'Hill', 'Interchange', 'Intersection', 'Junction', 'Key', 'Landing', 'Lane', 'Laneway', 'Lees', 'Line', 'Link', 'Little', 'Lookout', 'Loop', 'Lower', 'Mall', 'Meander', 'Mew', 'Mews', 'Motorway', 'Mount', 'Nook', 'Outlook', 'Parade', 'Park', 'Parklands', 'Parkway', 'Part', 'Pass', 'Path', 'Pathway', 'Piazza', 'Place', 'Plateau', 'Plaza', 'Pocket', 'Point', 'Port', 'Promenade', 'Quad', 'Quadrangle', 'Quadrant', 'Quay', 'Quays', 'Ramble', 'Ramp', 'Range', 'Reach', 'Reserve', 'Rest', 'Retreat', 'Ride', 'Ridge', 'Ridgeway', 'Right Of Way', 'Ring', 'Rise', 'River', 'Riverway', 'Riviera', 'Road', 'Roads', 'Roadside', 'Roadway', 'Ronde', 'Rosebowl', 'Rotary', 'Round', 'Route', 'Row', 'Rue', 'Run', 'Service Way', 'Siding', 'Slope', 'Sound', 'Spur', 'Square', 'Stairs', 'State Highway', 'Steps', 'Strand', 'Street', 'Strip', 'Subway', 'Tarn', 'Terrace', 'Thoroughfare', 'Tollway', 'Top', 'Tor', 'Towers', 'Track', 'Trail', 'Trailer', 'Triangle', 'Trunkway', 'Turn', 'Underpass', 'Upper', 'Vale', 'Viaduct', 'View', 'Villas', 'Vista', 'Wade', 'Walk', 'Walkway', 'Way', 'Wynd'
    );

    protected static \$postcode = array(
        // as per https://en.wikipedia.org/wiki/Postcodes_in_Australia
        // NSW
        '1###',
        '20##', '21##', '22##', '23##', '24##', '25##',
        '2619', '262#', '263#', '264#', '265#', '266#', '267#', '268#', '269#', '27##', '28##',
        '292#', '293#', '294#', '295#', '296#', '297#', '298#', '299#',
        // ACT
        '02##',
        '260#', '261#',
        '290#', '291#', '2920',
        // VIC
        '3###',
        '8###',
        // QLD
        '4###',
        '9###',
        // SA
        '5###',
        // WA
        '6###',
        // TAS
        '7###',
        // NT
        '08##',
        '09##',
    );

    protected static \$state = array(
        'Australian Capital Territory', 'New South Wales', 'Northern Territory', 'Queensland', 'South Australia', 'Tasmania', 'Victoria', 'Western Australia'
    );

    protected static \$stateAbbr = array(
        'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC', 'WA'
    );

    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}}{{buildingLetter}} {{streetName}}',
        '{{secondaryAddress}} {{buildingNumber}} {{streetName}}',
    );

    protected static \$secondaryAddressFormats = array(
        'Apt. ###',
        'Flat ##',
        'Suite ###',
        'Unit ##',
        'Level #',
        '### /',
        '## /',
        '# /',
    );

    /**
     * Returns a sane building letter
     * @example B
     */
    public static function buildingLetter()
    {
        return static::toUpper(static::randomElement(static::\$buildingLetters));
    }

    /**
     * Returns a sane city prefix
     * @example West
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * Returns a sane street suffix
     * @example Beach
     */
    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    /**
     * Returns a sane state
     * @example New South Wales
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_AU/Address.php");
    }
}
