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

/* vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php */
class __TwigTemplate_f24908daca82f9d70dec3866f4601bdab5431a62a63dd1541526b074faf44513 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\kk_KZ;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('қаласы');

    protected static \$regionSuffix = array('облысы');
    protected static \$streetSuffix = array(
        'көшесі', 'даңғылы',
    );

    protected static \$buildingNumber = array('###');
    protected static \$postcode = array('0#####');
    // Todo list all country names in the world
    protected static \$country = array(
        'Қазақстан',
        'Ресей',
    );

    protected static \$region = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static \$city = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static \$street = array(
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    );

    protected static \$addressFormats = array(
        \"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$streetAddressFormats = array(
        \"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\"
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  118 => 74,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\kk_KZ;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('қаласы');

    protected static \$regionSuffix = array('облысы');
    protected static \$streetSuffix = array(
        'көшесі', 'даңғылы',
    );

    protected static \$buildingNumber = array('###');
    protected static \$postcode = array('0#####');
    // Todo list all country names in the world
    protected static \$country = array(
        'Қазақстан',
        'Ресей',
    );

    protected static \$region = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static \$city = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static \$street = array(
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    );

    protected static \$addressFormats = array(
        \"{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{citySuffix}}, {{street}} {{streetSuffix}}, {{buildingNumber}}\",
    );

    protected static \$streetAddressFormats = array(
        \"{{street}} {{streetSuffix}}, {{buildingNumber}}\"
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Address.php");
    }
}
