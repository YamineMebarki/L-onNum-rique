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

/* vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php */
class __TwigTemplate_8559e46a1bbd73f7cc2dadfb7c62d055b73c9ad3ec0217c9ff158e6404ad62ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fa_IR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["companyField"]) || array_key_exists("companyField", $context) ? $context["companyField"] : (function () { throw new RuntimeError('Variable "companyField" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companyPrefix = array(
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    );

    protected static \$companyField = array(
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد'
    );

    protected static \$contract = array(
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    );

    /**
     * @example 'شرکت'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::\$companyField);
    }

    /**
    * @example 'تمام وقت'
    * @return string
    */
    public function contract()
    {
        return static::randomElement(static::\$contract);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 15,  98 => 14,  92 => 13,  84 => 12,  76 => 11,  68 => 10,  60 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fa_IR;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    );

    protected static \$companyPrefix = array(
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    );

    protected static \$companyField = array(
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد'
    );

    protected static \$contract = array(
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    );

    /**
     * @example 'شرکت'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::\$companyField);
    }

    /**
    * @example 'تمام وقت'
    * @return string
    */
    public function contract()
    {
        return static::randomElement(static::\$contract);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Company.php");
    }
}
