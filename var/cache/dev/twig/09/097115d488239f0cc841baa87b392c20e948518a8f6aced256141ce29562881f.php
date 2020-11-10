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

/* vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php */
class __TwigTemplate_06a22bf331b3ab457f04a42ba3ce42f44bbfd679ec30e267f4da23584ba6691b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pl_PL;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companySuffix = array('S.A.', 'i syn', 'sp. z o.o.', 'sp. j.', 'sp. p.', 'sp. k.', 'S.K.A', 's. c.', 'P.P.O.F');

    protected static \$companyPrefix = array('Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia');

    /**
     * @example 'Grupa'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    /*
     * Register of the National Economy
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 9 digit number
     */
    public static function regon()
    {
        \$weights = array(8, 9, 2, 3, 4, 5, 6, 7);
        \$regionNumber = static::numberBetween(0, 49) * 2 + 1;
        \$result = array((int) (\$regionNumber / 10), \$regionNumber % 10);
        for (\$i = 2, \$size = count(\$weights); \$i < \$size; \$i++) {
            \$result[\$i] = static::randomDigit();
        }
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum %= 11;
        if (\$checksum == 10) {
            \$checksum = 0;
        }
        \$result[] = \$checksum;

        return implode('', \$result);
    }

    /**
     * Register of the National Economy, local entity number
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 14 digit number
     */
    public static function regonLocal()
    {
        \$weights = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
        \$result = str_split(static::regon());
        for (\$i = count(\$result), \$size = count(\$weights); \$i < \$size; \$i++) {
            \$result[\$i] = static::randomDigit();
        }
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum %= 11;
        if (\$checksum == 10) {
            \$checksum = 0;
        }
        \$result[] = \$checksum;

        return implode('', \$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 14,  78 => 13,  72 => 12,  66 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pl_PL;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{lastName}}-{{lastName}}',
    );

    protected static \$companySuffix = array('S.A.', 'i syn', 'sp. z o.o.', 'sp. j.', 'sp. p.', 'sp. k.', 'S.K.A', 's. c.', 'P.P.O.F');

    protected static \$companyPrefix = array('Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia');

    /**
     * @example 'Grupa'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    /*
     * Register of the National Economy
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 9 digit number
     */
    public static function regon()
    {
        \$weights = array(8, 9, 2, 3, 4, 5, 6, 7);
        \$regionNumber = static::numberBetween(0, 49) * 2 + 1;
        \$result = array((int) (\$regionNumber / 10), \$regionNumber % 10);
        for (\$i = 2, \$size = count(\$weights); \$i < \$size; \$i++) {
            \$result[\$i] = static::randomDigit();
        }
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum %= 11;
        if (\$checksum == 10) {
            \$checksum = 0;
        }
        \$result[] = \$checksum;

        return implode('', \$result);
    }

    /**
     * Register of the National Economy, local entity number
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 14 digit number
     */
    public static function regonLocal()
    {
        \$weights = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
        \$result = str_split(static::regon());
        for (\$i = count(\$result), \$size = count(\$weights); \$i < \$size; \$i++) {
            \$result[\$i] = static::randomDigit();
        }
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum %= 11;
        if (\$checksum == 10) {
            \$checksum = 0;
        }
        \$result[] = \$checksum;

        return implode('', \$result);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Company.php");
    }
}
