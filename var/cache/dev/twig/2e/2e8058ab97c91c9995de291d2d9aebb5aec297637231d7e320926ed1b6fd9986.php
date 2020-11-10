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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php */
class __TwigTemplate_d4991d7448c5f3244a9a5383c951879b3bb0425d1a204dbc9ac5199454f0f83c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Configuration;
use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use ProxyManager\\Proxy\\RemoteObjectInterface;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\ProxyGenerator\\RemoteObjectGenerator;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing remote proxy objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class RemoteObjectFactory extends AbstractBaseFactory
{
    /**
     * @var AdapterInterface
     */
    protected \$adapter;

    /**
     * @var \\ProxyManager\\ProxyGenerator\\RemoteObjectGenerator|null
     */
    private \$generator;

    /**
     * {@inheritDoc}
     *
     * @param AdapterInterface \$adapter
     * @param Configuration    \$configuration
     */
    public function __construct(AdapterInterface \$adapter, Configuration \$configuration = null)
    {
        parent::__construct(\$configuration);

        \$this->adapter = \$adapter;
    }

    /**
     * @param string|object \$instanceOrClassName
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(\$instanceOrClassName) : RemoteObjectInterface
    {
        \$proxyClassName = \$this->generateProxy(
            is_object(\$instanceOrClassName) ? get_class(\$instanceOrClassName) : \$instanceOrClassName
        );

        return \$proxyClassName::staticProxyConstructor(\$this->adapter);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new RemoteObjectGenerator();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php";
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

use ProxyManager\\Configuration;
use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use ProxyManager\\Proxy\\RemoteObjectInterface;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\ProxyGenerator\\RemoteObjectGenerator;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing remote proxy objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class RemoteObjectFactory extends AbstractBaseFactory
{
    /**
     * @var AdapterInterface
     */
    protected \$adapter;

    /**
     * @var \\ProxyManager\\ProxyGenerator\\RemoteObjectGenerator|null
     */
    private \$generator;

    /**
     * {@inheritDoc}
     *
     * @param AdapterInterface \$adapter
     * @param Configuration    \$configuration
     */
    public function __construct(AdapterInterface \$adapter, Configuration \$configuration = null)
    {
        parent::__construct(\$configuration);

        \$this->adapter = \$adapter;
    }

    /**
     * @param string|object \$instanceOrClassName
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(\$instanceOrClassName) : RemoteObjectInterface
    {
        \$proxyClassName = \$this->generateProxy(
            is_object(\$instanceOrClassName) ? get_class(\$instanceOrClassName) : \$instanceOrClassName
        );

        return \$proxyClassName::staticProxyConstructor(\$this->adapter);
    }

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new RemoteObjectGenerator();
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObjectFactory.php");
    }
}
