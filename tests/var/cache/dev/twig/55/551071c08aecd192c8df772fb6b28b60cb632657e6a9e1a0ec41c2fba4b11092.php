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

/* vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php */
class __TwigTemplate_0ad3f20d57fc1f8c4ecfca92b537c38461c077afbf39eeb584b7eb7cec415729 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use LogicException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Base class for Doctrine console commands to extend from.
 *
 * @internal
 */
abstract class DoctrineCommand extends Command
{
    /** @var ManagerRegistry|null */
    private \$doctrine;

    /** @var ContainerInterface|null */
    private \$container;

    public function __construct(ManagerRegistry \$doctrine = null)
    {
        parent::__construct();

        if (\$doctrine === null) {
            @trigger_error(sprintf(
                'The \"%s\" constructor expects a \"%s\" instance as first argument, not passing it will throw a \\TypeError in DoctrineBundle 2.0.',
                static::class,
                ManagerRegistry::class
            ), E_USER_DEPRECATED);
        }

        \$this->doctrine = \$doctrine;
    }

    /**
     * @deprecated
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated and will be removed in DoctrineBundle 2.0.', __METHOD__), E_USER_DEPRECATED);

        \$this->container = \$container;
    }

    /**
     * @deprecated
     *
     * @return ContainerInterface
     *
     * @throws LogicException
     */
    protected function getContainer()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated and will be removed in DoctrineBundle 2.0.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->container === null) {
            \$application = \$this->getApplication();
            if (\$application === null) {
                throw new LogicException('The container cannot be retrieved as the application instance is not yet set.');
            }

            \$this->container = \$application->getKernel()->getContainer();
        }

        return \$this->container;
    }

    /**
     * get a doctrine entity generator
     *
     * @return EntityGenerator
     */
    protected function getEntityGenerator()
    {
        \$entityGenerator = new EntityGenerator();
        \$entityGenerator->setGenerateAnnotations(false);
        \$entityGenerator->setGenerateStubMethods(true);
        \$entityGenerator->setRegenerateEntityIfExists(false);
        \$entityGenerator->setUpdateEntityIfExists(true);
        \$entityGenerator->setNumSpaces(4);
        \$entityGenerator->setAnnotationPrefix('ORM\\\\');

        return \$entityGenerator;
    }

    /**
     * Get a doctrine entity manager by symfony name.
     *
     * @param string   \$name
     * @param int|null \$shardId
     *
     * @return EntityManager
     */
    protected function getEntityManager(\$name, \$shardId = null)
    {
        \$manager = \$this->getDoctrine()->getManager(\$name);

        if (\$shardId) {
            if (! \$manager->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(\"Connection of EntityManager '%s' must implement shards configuration.\", \$name));
            }

            \$manager->getConnection()->connect(\$shardId);
        }

        return \$manager;
    }

    /**
     * Get a doctrine dbal connection by symfony name.
     *
     * @param string \$name
     *
     * @return Connection
     */
    protected function getDoctrineConnection(\$name)
    {
        return \$this->getDoctrine()->getConnection(\$name);
    }

    /**
     * @return ManagerRegistry
     */
    protected function getDoctrine()
    {
        return \$this->doctrine ?: \$this->doctrine = \$this->getContainer()->get('doctrine');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use LogicException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Base class for Doctrine console commands to extend from.
 *
 * @internal
 */
abstract class DoctrineCommand extends Command
{
    /** @var ManagerRegistry|null */
    private \$doctrine;

    /** @var ContainerInterface|null */
    private \$container;

    public function __construct(ManagerRegistry \$doctrine = null)
    {
        parent::__construct();

        if (\$doctrine === null) {
            @trigger_error(sprintf(
                'The \"%s\" constructor expects a \"%s\" instance as first argument, not passing it will throw a \\TypeError in DoctrineBundle 2.0.',
                static::class,
                ManagerRegistry::class
            ), E_USER_DEPRECATED);
        }

        \$this->doctrine = \$doctrine;
    }

    /**
     * @deprecated
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated and will be removed in DoctrineBundle 2.0.', __METHOD__), E_USER_DEPRECATED);

        \$this->container = \$container;
    }

    /**
     * @deprecated
     *
     * @return ContainerInterface
     *
     * @throws LogicException
     */
    protected function getContainer()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated and will be removed in DoctrineBundle 2.0.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->container === null) {
            \$application = \$this->getApplication();
            if (\$application === null) {
                throw new LogicException('The container cannot be retrieved as the application instance is not yet set.');
            }

            \$this->container = \$application->getKernel()->getContainer();
        }

        return \$this->container;
    }

    /**
     * get a doctrine entity generator
     *
     * @return EntityGenerator
     */
    protected function getEntityGenerator()
    {
        \$entityGenerator = new EntityGenerator();
        \$entityGenerator->setGenerateAnnotations(false);
        \$entityGenerator->setGenerateStubMethods(true);
        \$entityGenerator->setRegenerateEntityIfExists(false);
        \$entityGenerator->setUpdateEntityIfExists(true);
        \$entityGenerator->setNumSpaces(4);
        \$entityGenerator->setAnnotationPrefix('ORM\\\\');

        return \$entityGenerator;
    }

    /**
     * Get a doctrine entity manager by symfony name.
     *
     * @param string   \$name
     * @param int|null \$shardId
     *
     * @return EntityManager
     */
    protected function getEntityManager(\$name, \$shardId = null)
    {
        \$manager = \$this->getDoctrine()->getManager(\$name);

        if (\$shardId) {
            if (! \$manager->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(\"Connection of EntityManager '%s' must implement shards configuration.\", \$name));
            }

            \$manager->getConnection()->connect(\$shardId);
        }

        return \$manager;
    }

    /**
     * Get a doctrine dbal connection by symfony name.
     *
     * @param string \$name
     *
     * @return Connection
     */
    protected function getDoctrineConnection(\$name)
    {
        return \$this->getDoctrine()->getConnection(\$name);
    }

    /**
     * @return ManagerRegistry
     */
    protected function getDoctrine()
    {
        return \$this->doctrine ?: \$this->doctrine = \$this->getContainer()->get('doctrine');
    }
}
", "vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php");
    }
}
