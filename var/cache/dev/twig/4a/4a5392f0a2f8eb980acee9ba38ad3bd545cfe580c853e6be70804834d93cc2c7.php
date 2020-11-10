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

/* vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php */
class __TwigTemplate_71ed5634be667bdc68d05739821a291e13d7047dd0428670dcbeb4517eb2eeae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php"));

        // line 1
        echo "<?php

use Twig\\Sandbox\\SecurityNotAllowedTagError;

class_exists('Twig\\Sandbox\\SecurityNotAllowedTagError');

@trigger_error(sprintf('Using the \"Twig_Sandbox_SecurityNotAllowedTagError\" class is deprecated since Twig version 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedTagError\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedTagError\" instead */
    class Twig_Sandbox_SecurityNotAllowedTagError extends SecurityNotAllowedTagError
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Sandbox\\SecurityNotAllowedTagError;

class_exists('Twig\\Sandbox\\SecurityNotAllowedTagError');

@trigger_error(sprintf('Using the \"Twig_Sandbox_SecurityNotAllowedTagError\" class is deprecated since Twig version 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedTagError\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedTagError\" instead */
    class Twig_Sandbox_SecurityNotAllowedTagError extends SecurityNotAllowedTagError
    {
    }
}
", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php");
    }
}
