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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php */
class __TwigTemplate_0ea73fe206c21445fb6acd092d4c59d8e8bc30cad78909b280128ebe673736fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__sleep` for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicSleep extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__sleep');

        \$parent = GetMethodIfExists::get(\$originalClass, '__sleep');

        \$callParent = \$parent ? '\$returnValue = & parent::__sleep();' : '\$returnValue = array_keys((array) \$this);';

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__sleep` for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicSleep extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__sleep');

        \$parent = GetMethodIfExists::get(\$originalClass, '__sleep');

        \$callParent = \$parent ? '\$returnValue = & parent::__sleep();' : '\$returnValue = array_keys((array) \$this);';

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicSleep.php");
    }
}
