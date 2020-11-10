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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php */
class __TwigTemplate_91eae4b53f44893c02463eea03534232a3358c43035c82f08faa7157d57a9c39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__unset` method for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicUnset extends MagicMethodGenerator
{
    /**
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__unset', [new ParameterGenerator('name')]);

        \$parent = GetMethodIfExists::get(\$originalClass, '__unset');

        \$callParent = '\$returnValue = & parent::__unset(\$name);';

        if (! \$parent) {
            \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_UNSET,
                'name',
                null,
                null,
                'returnValue'
            );
        }

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
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php";
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
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__unset` method for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicUnset extends MagicMethodGenerator
{
    /**
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__unset', [new ParameterGenerator('name')]);

        \$parent = GetMethodIfExists::get(\$originalClass, '__unset');

        \$callParent = '\$returnValue = & parent::__unset(\$name);';

        if (! \$parent) {
            \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_UNSET,
                'name',
                null,
                null,
                'returnValue'
            );
        }

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/MagicUnset.php");
    }
}
