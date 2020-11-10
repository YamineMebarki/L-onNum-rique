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

/* vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php */
class __TwigTemplate_5c0ebfe8a8406150adeca7b1a9826d389817140c8601fb519e6dbd757ef5fb54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Doctrine\\Common\\Cache\\Cache;

/**
 * Base cache command.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
abstract class CacheCommand extends Command implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    /**
     * Get the requested cache provider service.
     *
     * @param string \$cacheName
     *
     * @return \\Doctrine\\Common\\Cache\\Cache
     *
     * @throws \\InvalidArgumentException
     */
    protected function getCacheProvider(\$cacheName)
    {
        \$container = \$this->getContainer();

        // Try to use user input as cache service alias.
        \$cacheProvider = \$container->get(\$cacheName, ContainerInterface::NULL_ON_INVALID_REFERENCE);

        // If cache provider was not found try the service provider name.
        if ( ! \$cacheProvider instanceof Cache) {
            \$cacheProvider = \$container->get('doctrine_cache.providers.' . \$cacheName, ContainerInterface::NULL_ON_INVALID_REFERENCE);
        }
        // Cache provider was not found.
        if ( ! \$cacheProvider instanceof Cache) {
            throw new \\InvalidArgumentException('Cache provider not found.');
        }

        return \$cacheProvider;
    }

    /**
     * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
     */
    protected function getContainer()
    {
        return \$this->container;
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Doctrine\\Common\\Cache\\Cache;

/**
 * Base cache command.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
abstract class CacheCommand extends Command implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    /**
     * Get the requested cache provider service.
     *
     * @param string \$cacheName
     *
     * @return \\Doctrine\\Common\\Cache\\Cache
     *
     * @throws \\InvalidArgumentException
     */
    protected function getCacheProvider(\$cacheName)
    {
        \$container = \$this->getContainer();

        // Try to use user input as cache service alias.
        \$cacheProvider = \$container->get(\$cacheName, ContainerInterface::NULL_ON_INVALID_REFERENCE);

        // If cache provider was not found try the service provider name.
        if ( ! \$cacheProvider instanceof Cache) {
            \$cacheProvider = \$container->get('doctrine_cache.providers.' . \$cacheName, ContainerInterface::NULL_ON_INVALID_REFERENCE);
        }
        // Cache provider was not found.
        if ( ! \$cacheProvider instanceof Cache) {
            throw new \\InvalidArgumentException('Cache provider not found.');
        }

        return \$cacheProvider;
    }

    /**
     * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
     */
    protected function getContainer()
    {
        return \$this->container;
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }
}
", "vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php");
    }
}
