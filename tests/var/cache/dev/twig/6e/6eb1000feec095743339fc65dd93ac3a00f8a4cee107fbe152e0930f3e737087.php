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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php */
class __TwigTemplate_585e687b6f695d93c0684ebe4514c27c0d6eca142f11598ac047110c0d35cca6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolderGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing proxy objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorValueHolderFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolderGenerator|null
     */
    private \$generator;

    /**
     * @param object     \$instance           the object to be wrapped within the value holder
     * @param \\Closure[] \$prefixInterceptors an array (indexed by method name) of interceptor closures to be called
     *                                       before method logic is executed
     * @param \\Closure[] \$suffixInterceptors an array (indexed by method name) of interceptor closures to be called
     *                                       after method logic is executed
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(
        \$instance,
        array \$prefixInterceptors = [],
        array \$suffixInterceptors = []
    ) : AccessInterceptorValueHolderInterface {
        \$proxyClassName = \$this->generateProxy(get_class(\$instance));

        return \$proxyClassName::staticProxyConstructor(\$instance, \$prefixInterceptors, \$suffixInterceptors);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new AccessInterceptorValueHolderGenerator();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php";
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

use ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolderGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing proxy objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorValueHolderFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolderGenerator|null
     */
    private \$generator;

    /**
     * @param object     \$instance           the object to be wrapped within the value holder
     * @param \\Closure[] \$prefixInterceptors an array (indexed by method name) of interceptor closures to be called
     *                                       before method logic is executed
     * @param \\Closure[] \$suffixInterceptors an array (indexed by method name) of interceptor closures to be called
     *                                       after method logic is executed
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(
        \$instance,
        array \$prefixInterceptors = [],
        array \$suffixInterceptors = []
    ) : AccessInterceptorValueHolderInterface {
        \$proxyClassName = \$this->generateProxy(get_class(\$instance));

        return \$proxyClassName::staticProxyConstructor(\$instance, \$prefixInterceptors, \$suffixInterceptors);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new AccessInterceptorValueHolderGenerator();
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php");
    }
}
