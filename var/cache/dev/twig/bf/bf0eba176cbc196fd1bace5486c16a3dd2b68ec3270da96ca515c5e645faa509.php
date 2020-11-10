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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php */
class __TwigTemplate_f7c8147b15521576fa36bdc7147a50531f9d903aa93824d57f0e74253a2ea33e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__isset` for method interceptor value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicIsset extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$valueHolder
     * @param PropertyGenerator   \$prefixInterceptors
     * @param PropertyGenerator   \$suffixInterceptors
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__isset', [new ParameterGenerator('name')]);

        \$parent          = GetMethodIfExists::get(\$originalClass, '__isset');
        \$valueHolderName = \$valueHolder->getName();

        \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
            PublicScopeSimulator::OPERATION_ISSET,
            'name',
            'value',
            \$valueHolder,
            'returnValue'
        );

        if (! \$publicProperties->isEmpty()) {
            \$callParent = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
                . '    \$returnValue = isset(\$this->' . \$valueHolderName . '->\$name);'
                . \"\\n} else {\\n    \$callParent\\n}\\n\\n\";
        }

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$valueHolder,
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
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__isset` for method interceptor value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicIsset extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$valueHolder
     * @param PropertyGenerator   \$prefixInterceptors
     * @param PropertyGenerator   \$suffixInterceptors
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__isset', [new ParameterGenerator('name')]);

        \$parent          = GetMethodIfExists::get(\$originalClass, '__isset');
        \$valueHolderName = \$valueHolder->getName();

        \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
            PublicScopeSimulator::OPERATION_ISSET,
            'name',
            'value',
            \$valueHolder,
            'returnValue'
        );

        if (! \$publicProperties->isEmpty()) {
            \$callParent = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
                . '    \$returnValue = isset(\$this->' . \$valueHolderName . '->\$name);'
                . \"\\n} else {\\n    \$callParent\\n}\\n\\n\";
        }

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$valueHolder,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicIsset.php");
    }
}
