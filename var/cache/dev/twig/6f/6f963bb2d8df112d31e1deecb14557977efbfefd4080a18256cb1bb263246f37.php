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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php */
class __TwigTemplate_070ad9e2f7aae92a9251a814ec1367ed566f964ebfd22165af053494623f77a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject\\Adapter;

use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use Zend\\Server\\Client;

/**
 * Remote Object base adapter
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
abstract class BaseAdapter implements AdapterInterface
{
    /**
     * Adapter client
     *
     * @var \\Zend\\Server\\Client
     */
    protected \$client;

    /**
     * Service name mapping
     *
     * @var string[]
     */
    protected \$map = [];

    /**
     * Constructor
     *
     * @param Client \$client
     * @param array  \$map    map of service names to their aliases
     */
    public function __construct(Client \$client, array \$map = [])
    {
        \$this->client = \$client;
        \$this->map    = \$map;
    }

    /**
     * {@inheritDoc}
     */
    public function call(string \$wrappedClass, string \$method, array \$params = [])
    {
        \$serviceName = \$this->getServiceName(\$wrappedClass, \$method);

        if (\\array_key_exists(\$serviceName, \$this->map)) {
            \$serviceName = \$this->map[\$serviceName];
        }

        return \$this->client->call(\$serviceName, \$params);
    }

    /**
     * Get the service name will be used by the adapter
     */
    abstract protected function getServiceName(string \$wrappedClass, string \$method) : string;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject\\Adapter;

use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use Zend\\Server\\Client;

/**
 * Remote Object base adapter
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
abstract class BaseAdapter implements AdapterInterface
{
    /**
     * Adapter client
     *
     * @var \\Zend\\Server\\Client
     */
    protected \$client;

    /**
     * Service name mapping
     *
     * @var string[]
     */
    protected \$map = [];

    /**
     * Constructor
     *
     * @param Client \$client
     * @param array  \$map    map of service names to their aliases
     */
    public function __construct(Client \$client, array \$map = [])
    {
        \$this->client = \$client;
        \$this->map    = \$map;
    }

    /**
     * {@inheritDoc}
     */
    public function call(string \$wrappedClass, string \$method, array \$params = [])
    {
        \$serviceName = \$this->getServiceName(\$wrappedClass, \$method);

        if (\\array_key_exists(\$serviceName, \$this->map)) {
            \$serviceName = \$this->map[\$serviceName];
        }

        return \$this->client->call(\$serviceName, \$params);
    }

    /**
     * Get the service name will be used by the adapter
     */
    abstract protected function getServiceName(string \$wrappedClass, string \$method) : string;
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/BaseAdapter.php");
    }
}
