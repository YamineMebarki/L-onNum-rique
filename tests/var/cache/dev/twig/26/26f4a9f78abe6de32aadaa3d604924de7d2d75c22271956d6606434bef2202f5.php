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

/* vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php */
class __TwigTemplate_8f6aec59bf1e71117adbe1636757b95724bc5cf30ff63b748f0c679f52848ea5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hy_AM;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{

    protected static \$codes = array(91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49);

    protected static \$numberFormats = array(
        '######',
        '##-##-##',
        '###-###',
    );

    protected static \$formats = array(
        '0";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '(0";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '+374";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '+374 ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
    );

    public function phoneNumber()
    {
        return static::numerify(\$this->generator->parse(static::randomElement(static::\$formats)));
    }

    public function code()
    {
        return static::randomElement(static::\$codes);
    }

    /**
     * @return mixed
     */
    public function numberFormat()
    {
        return static::randomElement(static::\$numberFormats);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  73 => 19,  67 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hy_AM;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{

    protected static \$codes = array(91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49);

    protected static \$numberFormats = array(
        '######',
        '##-##-##',
        '###-###',
    );

    protected static \$formats = array(
        '0{{code}} {{numberFormat}}',
        '(0{{code}}) {{numberFormat}}',
        '+374{{code}} {{numberFormat}}',
        '+374 {{code}} {{numberFormat}}',
    );

    public function phoneNumber()
    {
        return static::numerify(\$this->generator->parse(static::randomElement(static::\$formats)));
    }

    public function code()
    {
        return static::randomElement(static::\$codes);
    }

    /**
     * @return mixed
     */
    public function numberFormat()
    {
        return static::randomElement(static::\$numberFormats);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/PhoneNumber.php");
    }
}
