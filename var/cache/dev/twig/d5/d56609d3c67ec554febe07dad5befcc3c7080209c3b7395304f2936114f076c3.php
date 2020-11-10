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

/* vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php */
class __TwigTemplate_41a1ab22fff19e903386203c07b397a3fa32f71fb5fe179c58019f2a94e94ca4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\Common\\Persistence\\ObjectRepository;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * Fetches repositories from the container or falls back to normal creation.
 */
final class ContainerRepositoryFactory implements RepositoryFactory
{
    /** @var ObjectRepository[] */
    private \$managedRepositories = [];

    /** @var ContainerInterface|null */
    private \$container;

    /**
     * @param ContainerInterface \$container A service locator containing the repositories
     */
    public function __construct(ContainerInterface \$container = null)
    {
        // When DoctrineBundle requires Symfony 3.3+, this can be removed
        // and the \$container argument can become required.
        if (\$container === null) {
            throw new InvalidArgumentException(sprintf('The first argument of %s::__construct() is required on Symfony 3.3 or higher.', self::class));
        }

        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryServiceId = \$metadata->customRepositoryClassName;

        \$customRepositoryName = \$metadata->customRepositoryClassName;
        if (\$customRepositoryName !== null) {
            // fetch from the container
            if (\$this->container && \$this->container->has(\$customRepositoryName)) {
                \$repository = \$this->container->get(\$customRepositoryName);

                if (! \$repository instanceof ObjectRepository) {
                    throw new RuntimeException(sprintf('The service \"%s\" must implement ObjectRepository (or extend a base class, like ServiceEntityRepository).', \$repositoryServiceId));
                }

                return \$repository;
            }

            // if not in the container but the class/id implements the interface, throw an error
            if (is_a(\$customRepositoryName, ServiceEntityRepositoryInterface::class, true)) {
                throw new RuntimeException(sprintf('The \"%s\" entity repository implements \"%s\", but its service could not be found. Make sure the service exists and is tagged with \"%s\".', \$customRepositoryName, ServiceEntityRepositoryInterface::class, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            if (! class_exists(\$customRepositoryName)) {
                throw new RuntimeException(sprintf('The \"%s\" entity has a repositoryClass set to \"%s\", but this is not a valid class. Check your class naming. If this is meant to be a service id, make sure this service exists and is tagged with \"%s\".', \$metadata->name, \$customRepositoryName, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            // allow the repository to be created below
        }

        return \$this->getOrCreateRepository(\$entityManager, \$metadata);
    }

    private function getOrCreateRepository(EntityManagerInterface \$entityManager, ClassMetadata \$metadata)
    {
        \$repositoryHash = \$metadata->getName() . spl_object_hash(\$entityManager);
        if (isset(\$this->managedRepositories[\$repositoryHash])) {
            return \$this->managedRepositories[\$repositoryHash];
        }

        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return \$this->managedRepositories[\$repositoryHash] = new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\Common\\Persistence\\ObjectRepository;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * Fetches repositories from the container or falls back to normal creation.
 */
final class ContainerRepositoryFactory implements RepositoryFactory
{
    /** @var ObjectRepository[] */
    private \$managedRepositories = [];

    /** @var ContainerInterface|null */
    private \$container;

    /**
     * @param ContainerInterface \$container A service locator containing the repositories
     */
    public function __construct(ContainerInterface \$container = null)
    {
        // When DoctrineBundle requires Symfony 3.3+, this can be removed
        // and the \$container argument can become required.
        if (\$container === null) {
            throw new InvalidArgumentException(sprintf('The first argument of %s::__construct() is required on Symfony 3.3 or higher.', self::class));
        }

        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryServiceId = \$metadata->customRepositoryClassName;

        \$customRepositoryName = \$metadata->customRepositoryClassName;
        if (\$customRepositoryName !== null) {
            // fetch from the container
            if (\$this->container && \$this->container->has(\$customRepositoryName)) {
                \$repository = \$this->container->get(\$customRepositoryName);

                if (! \$repository instanceof ObjectRepository) {
                    throw new RuntimeException(sprintf('The service \"%s\" must implement ObjectRepository (or extend a base class, like ServiceEntityRepository).', \$repositoryServiceId));
                }

                return \$repository;
            }

            // if not in the container but the class/id implements the interface, throw an error
            if (is_a(\$customRepositoryName, ServiceEntityRepositoryInterface::class, true)) {
                throw new RuntimeException(sprintf('The \"%s\" entity repository implements \"%s\", but its service could not be found. Make sure the service exists and is tagged with \"%s\".', \$customRepositoryName, ServiceEntityRepositoryInterface::class, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            if (! class_exists(\$customRepositoryName)) {
                throw new RuntimeException(sprintf('The \"%s\" entity has a repositoryClass set to \"%s\", but this is not a valid class. Check your class naming. If this is meant to be a service id, make sure this service exists and is tagged with \"%s\".', \$metadata->name, \$customRepositoryName, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            // allow the repository to be created below
        }

        return \$this->getOrCreateRepository(\$entityManager, \$metadata);
    }

    private function getOrCreateRepository(EntityManagerInterface \$entityManager, ClassMetadata \$metadata)
    {
        \$repositoryHash = \$metadata->getName() . spl_object_hash(\$entityManager);
        if (isset(\$this->managedRepositories[\$repositoryHash])) {
            return \$this->managedRepositories[\$repositoryHash];
        }

        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return \$this->managedRepositories[\$repositoryHash] = new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
", "vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php");
    }
}
