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

/* vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php */
class __TwigTemplate_fbee22700d7c8dcfe7389bef1951796605a3ee10af9bf1e476e508dc7f954c13 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php"));

        // line 1
        echo "<?php

use Twig\\Sandbox\\SecurityNotAllowedFunctionError;

class_exists('Twig\\Sandbox\\SecurityNotAllowedFunctionError');

@trigger_error(sprintf('Using the \"Twig_Sandbox_SecurityNotAllowedFunctionError\" class is deprecated since Twig version 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedFunctionError\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedFunctionError\" instead */
    class Twig_Sandbox_SecurityNotAllowedFunctionError extends SecurityNotAllowedFunctionError
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Sandbox\\SecurityNotAllowedFunctionError;

class_exists('Twig\\Sandbox\\SecurityNotAllowedFunctionError');

@trigger_error(sprintf('Using the \"Twig_Sandbox_SecurityNotAllowedFunctionError\" class is deprecated since Twig version 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedFunctionError\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Sandbox\\SecurityNotAllowedFunctionError\" instead */
    class Twig_Sandbox_SecurityNotAllowedFunctionError extends SecurityNotAllowedFunctionError
    {
    }
}
", "vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php");
    }
}
