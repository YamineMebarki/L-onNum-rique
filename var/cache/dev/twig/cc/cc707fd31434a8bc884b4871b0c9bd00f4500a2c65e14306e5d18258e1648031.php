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

/* vendor/twig/twig/lib/Twig/Node/Expression/TempName.php */
class __TwigTemplate_4b63b9b3c41c25bddd5f31d5c3ed6d8c54b3c28aa409185331150b33ce95ab45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Node/Expression/TempName.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/lib/Twig/Node/Expression/TempName.php"));

        // line 1
        echo "<?php

use Twig\\Node\\Expression\\TempNameExpression;

class_exists('Twig\\Node\\Expression\\TempNameExpression');

@trigger_error(sprintf('Using the \"Twig_Node_Expression_TempName\" class is deprecated since Twig version 2.7, use \"Twig\\Node\\Expression\\TempNameExpression\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Node\\Expression\\TempNameExpression\" instead */
    class Twig_Node_Expression_TempName extends TempNameExpression
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/lib/Twig/Node/Expression/TempName.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Node\\Expression\\TempNameExpression;

class_exists('Twig\\Node\\Expression\\TempNameExpression');

@trigger_error(sprintf('Using the \"Twig_Node_Expression_TempName\" class is deprecated since Twig version 2.7, use \"Twig\\Node\\Expression\\TempNameExpression\" instead.'), E_USER_DEPRECATED);

if (\\false) {
    /** @deprecated since Twig 2.7, use \"Twig\\Node\\Expression\\TempNameExpression\" instead */
    class Twig_Node_Expression_TempName extends TempNameExpression
    {
    }
}
", "vendor/twig/twig/lib/Twig/Node/Expression/TempName.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/lib/Twig/Node/Expression/TempName.php");
    }
}
