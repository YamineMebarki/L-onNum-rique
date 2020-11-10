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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php */
class __TwigTemplate_43c7f1d44082c63a4c10b20574934f597f91a89392eae8e9354ab29fd76892ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy;

use Closure;
use Doctrine\\Common\\Persistence\\Proxy as BaseProxy;

/**
 * Interface for proxy classes.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Marco Pivetta  <ocramius@gmail.com>
 * @since  2.4
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
interface Proxy extends BaseProxy
{
    /**
     * Marks the proxy as initialized or not.
     *
     * @param boolean \$initialized
     *
     * @return void
     */
    public function __setInitialized(\$initialized);

    /**
     * Sets the initializer callback to be used when initializing the proxy. That
     * initializer should accept 3 parameters: \$proxy, \$method and \$params. Those
     * are respectively the proxy object that is being initialized, the method name
     * that triggered initialization and the parameters passed to that method.
     *
     * @param Closure|null \$initializer
     *
     * @return void
     */
    public function __setInitializer(Closure \$initializer = null);

    /**
     * Retrieves the initializer callback used to initialize the proxy.
     *
     * @see __setInitializer
     *
     * @return Closure|null
     */
    public function __getInitializer();

    /**
     * Sets the callback to be used when cloning the proxy. That initializer should accept
     * a single parameter, which is the cloned proxy instance itself.
     *
     * @param Closure|null \$cloner
     *
     * @return void
     */
    public function __setCloner(Closure \$cloner = null);

    /**
     * Retrieves the callback to be used when cloning the proxy.
     *
     * @see __setCloner
     *
     * @return Closure|null
     */
    public function __getCloner();

    /**
     * Retrieves the list of lazy loaded properties for a given proxy
     *
     * @return array Keys are the property names, and values are the default values
     *               for those properties.
     */
    public function __getLazyProperties();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy;

use Closure;
use Doctrine\\Common\\Persistence\\Proxy as BaseProxy;

/**
 * Interface for proxy classes.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Marco Pivetta  <ocramius@gmail.com>
 * @since  2.4
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
interface Proxy extends BaseProxy
{
    /**
     * Marks the proxy as initialized or not.
     *
     * @param boolean \$initialized
     *
     * @return void
     */
    public function __setInitialized(\$initialized);

    /**
     * Sets the initializer callback to be used when initializing the proxy. That
     * initializer should accept 3 parameters: \$proxy, \$method and \$params. Those
     * are respectively the proxy object that is being initialized, the method name
     * that triggered initialization and the parameters passed to that method.
     *
     * @param Closure|null \$initializer
     *
     * @return void
     */
    public function __setInitializer(Closure \$initializer = null);

    /**
     * Retrieves the initializer callback used to initialize the proxy.
     *
     * @see __setInitializer
     *
     * @return Closure|null
     */
    public function __getInitializer();

    /**
     * Sets the callback to be used when cloning the proxy. That initializer should accept
     * a single parameter, which is the cloned proxy instance itself.
     *
     * @param Closure|null \$cloner
     *
     * @return void
     */
    public function __setCloner(Closure \$cloner = null);

    /**
     * Retrieves the callback to be used when cloning the proxy.
     *
     * @see __setCloner
     *
     * @return Closure|null
     */
    public function __getCloner();

    /**
     * Retrieves the list of lazy loaded properties for a given proxy
     *
     * @return array Keys are the property names, and values are the default values
     *               for those properties.
     */
    public function __getLazyProperties();
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php");
    }
}
