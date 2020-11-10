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

/* vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php */
class __TwigTemplate_717fa942d71617af2130622dfd83fc5dd5806226f0bbdd462d9e989b6fbc07b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

/**
 * Finds a class in a PSR-0 structure.
 */
interface ClassFinderInterface
{
    /**
     * Finds a class.
     *
     * @param string \$class The name of the class.
     *
     * @return string|null The name of the class or NULL if not found.
     */
    public function findFile(\$class);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

/**
 * Finds a class in a PSR-0 structure.
 */
interface ClassFinderInterface
{
    /**
     * Finds a class.
     *
     * @param string \$class The name of the class.
     *
     * @return string|null The name of the class or NULL if not found.
     */
    public function findFile(\$class);
}
", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php");
    }
}
