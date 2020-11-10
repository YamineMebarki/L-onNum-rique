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

/* vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php */
class __TwigTemplate_6d92e2ad3ff17981745755d58e00980880923b29ebccf9f6dbeeecdc692331b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\kk_KZ;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 9, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companyPrefixes = array(
        'АҚ', 'ЖШС', 'ЖАҚ'
    );

    protected static \$companyNameSuffixes = array(
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком'
    );

    protected static \$companyElements = array(
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    );

    /**
     * @example 'ЖШС АлматыТелеком'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }

    /**
     * National Business Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fbus_business%2Ffor_businessmen%2Farticle%2Fbusiness_identification_number&lang=en
     * @param  \\DateTime \$registrationDate
     * @return string 12 digits, like 150140000019
     */
    public static function businessIdentificationNumber(\\DateTime \$registrationDate = null)
    {
        if (!\$registrationDate) {
            \$registrationDate = \\Faker\\Provider\\DateTime::dateTimeThisYear();
        }

        \$dateAsString              = \$registrationDate->format('ym');
        \$legalEntityType           = (string) static::numberBetween(4, 6);
        \$legalEntityAdditionalType = (string) static::numberBetween(0, 3);
        \$randomDigits              = (string) static::numerify('######');

        return \$dateAsString . \$legalEntityType . \$legalEntityAdditionalType . \$randomDigits;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  65 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\kk_KZ;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static \$companyPrefixes = array(
        'АҚ', 'ЖШС', 'ЖАҚ'
    );

    protected static \$companyNameSuffixes = array(
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком'
    );

    protected static \$companyElements = array(
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    );

    /**
     * @example 'ЖШС АлматыТелеком'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }

    /**
     * National Business Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fbus_business%2Ffor_businessmen%2Farticle%2Fbusiness_identification_number&lang=en
     * @param  \\DateTime \$registrationDate
     * @return string 12 digits, like 150140000019
     */
    public static function businessIdentificationNumber(\\DateTime \$registrationDate = null)
    {
        if (!\$registrationDate) {
            \$registrationDate = \\Faker\\Provider\\DateTime::dateTimeThisYear();
        }

        \$dateAsString              = \$registrationDate->format('ym');
        \$legalEntityType           = (string) static::numberBetween(4, 6);
        \$legalEntityAdditionalType = (string) static::numberBetween(0, 3);
        \$randomDigits              = (string) static::numerify('######');

        return \$dateAsString . \$legalEntityType . \$legalEntityAdditionalType . \$randomDigits;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Company.php");
    }
}
