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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php */
class __TwigTemplate_e74716b52e7b8cbfd98027e7c3b226118a14f445dc5144fd2c81aee77e351684 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Proxy\\VirtualProxyInterface;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolderGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;

/**
 * Factory responsible of producing virtual proxy instances
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingValueHolderFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\LazyLoadingValueHolderGenerator|null
     */
    private \$generator;

    public function createProxy(
        string \$className,
        \\Closure \$initializer,
        array \$proxyOptions = []
    ) : VirtualProxyInterface {
        \$proxyClassName = \$this->generateProxy(\$className, \$proxyOptions);

        return \$proxyClassName::staticProxyConstructor(\$initializer);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new LazyLoadingValueHolderGenerator();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Proxy\\VirtualProxyInterface;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolderGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;

/**
 * Factory responsible of producing virtual proxy instances
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingValueHolderFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\LazyLoadingValueHolderGenerator|null
     */
    private \$generator;

    public function createProxy(
        string \$className,
        \\Closure \$initializer,
        array \$proxyOptions = []
    ) : VirtualProxyInterface {
        \$proxyClassName = \$this->generateProxy(\$className, \$proxyOptions);

        return \$proxyClassName::staticProxyConstructor(\$initializer);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new LazyLoadingValueHolderGenerator();
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php");
    }
}
