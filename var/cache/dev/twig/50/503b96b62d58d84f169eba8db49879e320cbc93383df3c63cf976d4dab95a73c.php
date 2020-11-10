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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php */
class __TwigTemplate_e764ee5a163a912467a9868e0ba6b9bb362981f8e0ccfd0cad849c1a8737e064 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Proxy;

/**
 * Access interceptor object marker
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AccessInterceptorInterface extends ProxyInterface
{
    /**
     * Set or remove the prefix interceptor for a method
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/access-interceptor-value-holder.md
     *
     * A prefix interceptor should have a signature like following:
     *
     * <code>
     * \$interceptor = function (\$proxy, \$instance, string \$method, array \$params, & \$returnEarly) {};
     * </code>
     *
     * @param string        \$methodName        name of the intercepted method
     * @param \\Closure|null \$prefixInterceptor interceptor closure or null to unset the currently active interceptor
     *
     * @return void
     */
    public function setMethodPrefixInterceptor(string \$methodName, \\Closure \$prefixInterceptor = null);

    /**
     * Set or remove the suffix interceptor for a method
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/access-interceptor-value-holder.md
     *
     * A prefix interceptor should have a signature like following:
     *
     * <code>
     * \$interceptor = function (\$proxy, \$instance, string \$method, array \$params, \$returnValue, & \$returnEarly) {};
     * </code>
     *
     * @param string        \$methodName        name of the intercepted method
     * @param \\Closure|null \$suffixInterceptor interceptor closure or null to unset the currently active interceptor
     *
     * @return void
     */
    public function setMethodSuffixInterceptor(string \$methodName, \\Closure \$suffixInterceptor = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php";
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
 * Access interceptor object marker
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AccessInterceptorInterface extends ProxyInterface
{
    /**
     * Set or remove the prefix interceptor for a method
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/access-interceptor-value-holder.md
     *
     * A prefix interceptor should have a signature like following:
     *
     * <code>
     * \$interceptor = function (\$proxy, \$instance, string \$method, array \$params, & \$returnEarly) {};
     * </code>
     *
     * @param string        \$methodName        name of the intercepted method
     * @param \\Closure|null \$prefixInterceptor interceptor closure or null to unset the currently active interceptor
     *
     * @return void
     */
    public function setMethodPrefixInterceptor(string \$methodName, \\Closure \$prefixInterceptor = null);

    /**
     * Set or remove the suffix interceptor for a method
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/access-interceptor-value-holder.md
     *
     * A prefix interceptor should have a signature like following:
     *
     * <code>
     * \$interceptor = function (\$proxy, \$instance, string \$method, array \$params, \$returnValue, & \$returnEarly) {};
     * </code>
     *
     * @param string        \$methodName        name of the intercepted method
     * @param \\Closure|null \$suffixInterceptor interceptor closure or null to unset the currently active interceptor
     *
     * @return void
     */
    public function setMethodSuffixInterceptor(string \$methodName, \\Closure \$suffixInterceptor = null);
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/AccessInterceptorInterface.php");
    }
}
