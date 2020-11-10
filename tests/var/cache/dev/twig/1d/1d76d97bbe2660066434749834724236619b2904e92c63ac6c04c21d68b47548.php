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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php */
class __TwigTemplate_93fc26c6815339210e8e64aa157f3b0f8098b34a129a8b9e5935f07c0dc15cf3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Base interface for proxy generators - describes how a proxy generator should use
 * reflection classes to modify given class generators
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ProxyGeneratorInterface
{
    /**
     * Apply modifications to the provided \$classGenerator to proxy logic from \$originalClass
     *
     * @param \\ReflectionClass                    \$originalClass
     * @param \\Zend\\Code\\Generator\\ClassGenerator \$classGenerator
     *
     * @return void
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Base interface for proxy generators - describes how a proxy generator should use
 * reflection classes to modify given class generators
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ProxyGeneratorInterface
{
    /**
     * Apply modifications to the provided \$classGenerator to proxy logic from \$originalClass
     *
     * @param \\ReflectionClass                    \$originalClass
     * @param \\Zend\\Code\\Generator\\ClassGenerator \$classGenerator
     *
     * @return void
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator);
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ProxyGeneratorInterface.php");
    }
}
