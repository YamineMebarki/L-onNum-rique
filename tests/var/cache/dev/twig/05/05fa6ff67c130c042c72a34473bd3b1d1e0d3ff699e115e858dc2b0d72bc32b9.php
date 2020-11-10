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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php */
class __TwigTemplate_51f12ac99edad58e3d21a2bb12faf053ac685f650825b16d654bacfa13ad6d60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::isProxyInitialized}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class IsProxyInitialized extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$valueHolderProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$valueHolderProperty)
    {
        parent::__construct('isProxyInitialized');
        \$this->setReturnType('bool');
        \$this->setBody('return null !== \$this->' . \$valueHolderProperty->getName() . ';');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php";
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

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::isProxyInitialized}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class IsProxyInitialized extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$valueHolderProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$valueHolderProperty)
    {
        parent::__construct('isProxyInitialized');
        \$this->setReturnType('bool');
        \$this->setBody('return null !== \$this->' . \$valueHolderProperty->getName() . ';');
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/IsProxyInitialized.php");
    }
}
