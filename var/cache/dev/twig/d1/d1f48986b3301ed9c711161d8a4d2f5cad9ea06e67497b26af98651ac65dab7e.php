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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php */
class __TwigTemplate_06eff092686afd467aefd4bbddf181dc5b27200dbf29eb7e40e97cef20295794 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Proxy;

/**
 * Lazy loading object identifier
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface LazyLoadingInterface extends ProxyInterface
{
    /**
     * Set or unset the initializer for the proxy instance
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-value-holder.md#lazy-initialization
     *
     * An initializer should have a signature like following:
     *
     * <code>
     * \$initializer = function (& \$wrappedObject, \$proxy, string \$method, array \$parameters, & \$initializer) {};
     * </code>
     *
     * @param \\Closure|null \$initializer
     *
     * @return mixed
     */
    public function setProxyInitializer(\\Closure \$initializer = null);

    /**
     * @return \\Closure|null
     */
    public function getProxyInitializer();

    /**
     * Force initialization of the proxy
     *
     * @return bool true if the proxy could be initialized
     */
    public function initializeProxy() : bool;

    /**
     * Retrieves current initialization status of the proxy
     */
    public function isProxyInitialized() : bool;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Proxy;

/**
 * Lazy loading object identifier
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface LazyLoadingInterface extends ProxyInterface
{
    /**
     * Set or unset the initializer for the proxy instance
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-value-holder.md#lazy-initialization
     *
     * An initializer should have a signature like following:
     *
     * <code>
     * \$initializer = function (& \$wrappedObject, \$proxy, string \$method, array \$parameters, & \$initializer) {};
     * </code>
     *
     * @param \\Closure|null \$initializer
     *
     * @return mixed
     */
    public function setProxyInitializer(\\Closure \$initializer = null);

    /**
     * @return \\Closure|null
     */
    public function getProxyInitializer();

    /**
     * Force initialization of the proxy
     *
     * @return bool true if the proxy could be initialized
     */
    public function initializeProxy() : bool;

    /**
     * Retrieves current initialization status of the proxy
     */
    public function isProxyInitialized() : bool;
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php");
    }
}
