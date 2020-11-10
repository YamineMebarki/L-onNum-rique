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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php */
class __TwigTemplate_5132bdd02c66642e357e2ca1b816a33653cc592d3c5ec06c55096c028a4ba172 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_SG;

class Address extends \\Faker\\Provider\\Address
{

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$streetNumber = array('##', '###');

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$blockNumber = array(
        'Blk ##',
        'Blk ###',
        'Blk ###A',
        'Blk ###B',
        'Blk ###C',
        'Blk ###D',
        'Blk ###E',
        'Blk ###F',
        'Blk ###G',
        'Blk ###H',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected static \$streetSuffix = array(
        'Alley', 'Avenue',
        'Bridge',
        'Crescent',
        'Drive',
        'Grove',
        'Highway', 'Hill',
        'Lane', 'Link',
        'Park', 'Place',
        'Quay',
        'Road',
        'Walk', 'Way',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected static \$streetPrefix = array(
        'Jalan',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    // http://remembersingapore.org/2011/04/04/old-names-of-places/
    protected static \$streetName = array(
        'Adam', 'Airport', 'Alexandra', 'Aljunied', 'Ampang', 'Ann Siang', 'Angus', 'Anson', 'Armenian',
        'Balmoral', 'Battery', 'Bencoolen',
        'Collyer', 'Clarke', 'Church', 'Cecil', 'Cross', 'Chulia', 'Cheang Hong Lim', 'Chin Swee', 'Choon Guan',
        'Devonshire', 'Dublin', 'Duxton', 'D\\'Almeida',
        'East Coast', 'Eden', 'Edgware', 'Eunos',
        'Fifth', 'First', 'Funan', 'Fullerton',
        'George', 'Glasgow', 'Grange',
        'Havelock', 'High', 'Hylam',
        'International Business', 'International', 'Irving',
        'Jubilee',
        'Kensington Park', 'Kitchener', 'Knights',
        'Lancaster', 'Leicester', 'Lengkok Bahru', 'Lim Teck Kim',
        'Malay', 'Market', 'Middle', 'Malabar', 'Merchant', 'Mohammed Sultan',
        'Napier', 'Nathan', 'Newton',
        'Ocean', 'One Tree', 'Orchard', 'Outram', 'Ophir',
        'Pekin', 'Peng Siang', 'Prince Edward', 'Palmer',
        'Quality', 'Queen',
        'Raffles', 'Robinson', 'Rochor', 'Regent', 'Ridley', 'River Valley',
        'Sixth', 'Somerset', 'Stanley', 'Stamford', 'Shenton', 'Sultan',
        'Telok Ayer', 'Temple', 'Thomson', 'Unity', 'Victoria', 'Xilin', 'York', 'Zion',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$floorNumber = array(
        '##', '0#',
    );

    protected static \$apartmentNumber = array(
        '##', '###',
    );

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$addressFormats = array(
        \"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["streetNumber"]) || array_key_exists("streetNumber", $context) ? $context["streetNumber"] : (function () { throw new RuntimeError('Variable "streetNumber" does not exist.', 85, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["townName"]) || array_key_exists("townName", $context) ? $context["townName"] : (function () { throw new RuntimeError('Variable "townName" does not exist.', 85, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["blockNumber"]) || array_key_exists("blockNumber", $context) ? $context["blockNumber"] : (function () { throw new RuntimeError('Variable "blockNumber" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["floorNumber"]) || array_key_exists("floorNumber", $context) ? $context["floorNumber"] : (function () { throw new RuntimeError('Variable "floorNumber" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["townName"]) || array_key_exists("townName", $context) ? $context["townName"] : (function () { throw new RuntimeError('Variable "townName" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$townName = 'SINGAPORE';

    protected static \$postcode = array('######');

    protected static \$country = array(
        'SINGAPORE',
    );

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public function streetNumber()
    {
        return static::numerify(static::randomElement(static::\$streetNumber));
    }

    public function blockNumber()
    {
        return static::numerify(static::randomElement(static::\$blockNumber));
    }

    public function floorNumber()
    {
        return static::randomElement(static::\$floorNumber);
    }

    public function apartmentNumber()
    {
        return static::randomElement(static::\$apartmentNumber);
    }

    public function townName()
    {
        return static::\$townName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  139 => 85,  121 => 72,  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_SG;

class Address extends \\Faker\\Provider\\Address
{

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$streetNumber = array('##', '###');

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$blockNumber = array(
        'Blk ##',
        'Blk ###',
        'Blk ###A',
        'Blk ###B',
        'Blk ###C',
        'Blk ###D',
        'Blk ###E',
        'Blk ###F',
        'Blk ###G',
        'Blk ###H',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected static \$streetSuffix = array(
        'Alley', 'Avenue',
        'Bridge',
        'Crescent',
        'Drive',
        'Grove',
        'Highway', 'Hill',
        'Lane', 'Link',
        'Park', 'Place',
        'Quay',
        'Road',
        'Walk', 'Way',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    protected static \$streetPrefix = array(
        'Jalan',
    );

    // http://www.streetdirectory.com/asia_travel/travel/street/alphabet2/
    // http://remembersingapore.org/2011/04/04/old-names-of-places/
    protected static \$streetName = array(
        'Adam', 'Airport', 'Alexandra', 'Aljunied', 'Ampang', 'Ann Siang', 'Angus', 'Anson', 'Armenian',
        'Balmoral', 'Battery', 'Bencoolen',
        'Collyer', 'Clarke', 'Church', 'Cecil', 'Cross', 'Chulia', 'Cheang Hong Lim', 'Chin Swee', 'Choon Guan',
        'Devonshire', 'Dublin', 'Duxton', 'D\\'Almeida',
        'East Coast', 'Eden', 'Edgware', 'Eunos',
        'Fifth', 'First', 'Funan', 'Fullerton',
        'George', 'Glasgow', 'Grange',
        'Havelock', 'High', 'Hylam',
        'International Business', 'International', 'Irving',
        'Jubilee',
        'Kensington Park', 'Kitchener', 'Knights',
        'Lancaster', 'Leicester', 'Lengkok Bahru', 'Lim Teck Kim',
        'Malay', 'Market', 'Middle', 'Malabar', 'Merchant', 'Mohammed Sultan',
        'Napier', 'Nathan', 'Newton',
        'Ocean', 'One Tree', 'Orchard', 'Outram', 'Ophir',
        'Pekin', 'Peng Siang', 'Prince Edward', 'Palmer',
        'Quality', 'Queen',
        'Raffles', 'Robinson', 'Rochor', 'Regent', 'Ridley', 'River Valley',
        'Sixth', 'Somerset', 'Stanley', 'Stamford', 'Shenton', 'Sultan',
        'Telok Ayer', 'Temple', 'Thomson', 'Unity', 'Victoria', 'Xilin', 'York', 'Zion',
    );

    protected static \$streetAddressFormats = array(
        '{{streetPrefix}} {{streetName}}',
        '{{streetName}} {{streetSuffix}}',
    );

    protected static \$floorNumber = array(
        '##', '0#',
    );

    protected static \$apartmentNumber = array(
        '##', '###',
    );

    // http://en.wikipedia.org/wiki/Singapore_Post#Address_format
    protected static \$addressFormats = array(
        \"{{streetNumber}} {{streetAddress}}\\n{{townName}} {{postcode}}\",
        \"{{blockNumber}} {{streetAddress}}\\n{{floorNumber}} {{apartmentNumber}}\\n{{townName}} {{postcode}}\",
    );

    protected static \$townName = 'SINGAPORE';

    protected static \$postcode = array('######');

    protected static \$country = array(
        'SINGAPORE',
    );

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public function streetNumber()
    {
        return static::numerify(static::randomElement(static::\$streetNumber));
    }

    public function blockNumber()
    {
        return static::numerify(static::randomElement(static::\$blockNumber));
    }

    public function floorNumber()
    {
        return static::randomElement(static::\$floorNumber);
    }

    public function apartmentNumber()
    {
        return static::randomElement(static::\$apartmentNumber);
    }

    public function townName()
    {
        return static::\$townName;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_SG/Address.php");
    }
}
