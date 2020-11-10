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

/* vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php */
class __TwigTemplate_e77a35feae30e1b40646477858c09e8fc99bda5ea224fe8628772d5ced9c1953 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php"));

        // line 1
        echo "<?php

use Twig\\RuntimeLoader\\FactoryRuntimeLoader;

class_exists('Twig\\RuntimeLoader\\FactoryRuntimeLoader');

@trigger_error(sprintf('Using the \"Twig_FactoryRuntimeLoader\" class is deprecated since Twig version 2.7, use \"Twig\\RuntimeLoader\\FactoryRuntimeLoader\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\RuntimeLoader\\FactoryRuntimeLoader\" instead */
    class Twig_FactoryRuntimeLoader extends FactoryRuntimeLoader
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\RuntimeLoader\\FactoryRuntimeLoader;

class_exists('Twig\\RuntimeLoader\\FactoryRuntimeLoader');

@trigger_error(sprintf('Using the \"Twig_FactoryRuntimeLoader\" class is deprecated since Twig version 2.7, use \"Twig\\RuntimeLoader\\FactoryRuntimeLoader\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\RuntimeLoader\\FactoryRuntimeLoader\" instead */
    class Twig_FactoryRuntimeLoader extends FactoryRuntimeLoader
    {
    }
}
", "vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/lib/Twig/FactoryRuntimeLoader.php");
    }
}
