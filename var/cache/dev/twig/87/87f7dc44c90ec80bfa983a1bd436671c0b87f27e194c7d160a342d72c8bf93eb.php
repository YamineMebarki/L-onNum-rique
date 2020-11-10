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

/* vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php */
class __TwigTemplate_3725ba522b06d86da5f9c3c2b01b25f1b4e351b2c80decb67acfe99bed8ec581 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\bn_BD;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$names = array(
        'রহিম', 'করিম', 'বাবলু'
    );

    protected static \$types = array(
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    );

    public static function companyType()
    {
        return static::randomElement(static::\$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$names);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\bn_BD;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{companyName}} {{companyType}}'
    );

    protected static \$names = array(
        'রহিম', 'করিম', 'বাবলু'
    );

    protected static \$types = array(
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    );

    public static function companyType()
    {
        return static::randomElement(static::\$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$names);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/bn_BD/Company.php");
    }
}
