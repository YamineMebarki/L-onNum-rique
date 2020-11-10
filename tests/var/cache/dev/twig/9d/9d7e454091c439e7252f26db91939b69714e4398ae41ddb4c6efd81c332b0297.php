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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php */
class __TwigTemplate_a2da8003bd53bbddd5cc30aa1785175ecb569e538e7204b75cbdf4cbeb6fedfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::setProxyInitializer}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetProxyInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$initializerProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$initializerProperty)
    {
        parent::__construct('setProxyInitializer');

        \$initializerParameter = new ParameterGenerator('initializer');

        \$initializerParameter->setType(Closure::class);
        \$initializerParameter->setDefaultValue(null);
        \$this->setParameter(\$initializerParameter);
        \$this->setBody('\$this->' . \$initializerProperty->getName() . ' = \$initializer;');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::setProxyInitializer}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetProxyInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$initializerProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$initializerProperty)
    {
        parent::__construct('setProxyInitializer');

        \$initializerParameter = new ParameterGenerator('initializer');

        \$initializerParameter->setType(Closure::class);
        \$initializerParameter->setDefaultValue(null);
        \$this->setParameter(\$initializerParameter);
        \$this->setBody('\$this->' . \$initializerProperty->getName() . ' = \$initializer;');
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/SetProxyInitializer.php");
    }
}
