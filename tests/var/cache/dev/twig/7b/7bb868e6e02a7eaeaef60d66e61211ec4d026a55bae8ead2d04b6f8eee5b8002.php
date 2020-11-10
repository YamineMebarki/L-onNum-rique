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

/* vendor/doctrine/doctrine-bundle/Registry.php */
class __TwigTemplate_4017a10dbbecccaa3b20eeb56982a8c88de2864dd2949d6d8aba993c5199d733 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Registry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Registry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\ORMException;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

/**
 * References all Doctrine connections and entity managers in a given Container.
 */
class Registry extends ManagerRegistry implements RegistryInterface
{
    /**
     * @param string[] \$connections
     * @param string[] \$entityManagers
     * @param string   \$defaultConnection
     * @param string   \$defaultEntityManager
     */
    public function __construct(ContainerInterface \$container, array \$connections, array \$entityManagers, \$defaultConnection, \$defaultEntityManager)
    {
        \$this->container = \$container;

        parent::__construct('ORM', \$connections, \$entityManagers, \$defaultConnection, \$defaultEntityManager, 'Doctrine\\ORM\\Proxy\\Proxy');
    }

    /**
     * Gets the default entity manager name.
     *
     * @deprecated
     *
     * @return string The default entity manager name
     */
    public function getDefaultEntityManagerName()
    {
        @trigger_error('getDefaultEntityManagerName is deprecated since Symfony 2.1. Use getDefaultManagerName instead', E_USER_DEPRECATED);

        return \$this->getDefaultManagerName();
    }

    /**
     * Gets a named entity manager.
     *
     * @deprecated
     *
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function getEntityManager(\$name = null)
    {
        @trigger_error('getEntityManager is deprecated since Symfony 2.1. Use getManager instead', E_USER_DEPRECATED);

        return \$this->getManager(\$name);
    }

    /**
     * Gets an array of all registered entity managers
     *
     * @deprecated
     *
     * @return EntityManager[] an array of all EntityManager instances
     */
    public function getEntityManagers()
    {
        @trigger_error('getEntityManagers is deprecated since Symfony 2.1. Use getManagers instead', E_USER_DEPRECATED);

        return \$this->getManagers();
    }

    /**
     * Resets a named entity manager.
     *
     * This method is useful when an entity manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new entity manager as
     * the existing one is not usable anymore. This means that any
     * other object with a dependency on this entity manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @deprecated
     *
     * @param string \$name The entity manager name (null for the default one)
     */
    public function resetEntityManager(\$name = null)
    {
        @trigger_error('resetEntityManager is deprecated since Symfony 2.1. Use resetManager instead', E_USER_DEPRECATED);

        \$this->resetManager(\$name);
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @deprecated
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getEntityNamespace(\$alias)
    {
        @trigger_error('getEntityNamespace is deprecated since Symfony 2.1. Use getAliasNamespace instead', E_USER_DEPRECATED);

        return \$this->getAliasNamespace(\$alias);
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @see Configuration::getEntityNamespace
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getAliasNamespace(\$alias)
    {
        foreach (array_keys(\$this->getManagers()) as \$name) {
            try {
                return \$this->getManager(\$name)->getConfiguration()->getEntityNamespace(\$alias);
            } catch (ORMException \$e) {
            }
        }

        throw ORMException::unknownEntityNamespace(\$alias);
    }

    /**
     * Gets all connection names.
     *
     * @deprecated
     *
     * @return string[] An array of connection names
     */
    public function getEntityManagerNames()
    {
        @trigger_error('getEntityManagerNames is deprecated since Symfony 2.1. Use getManagerNames instead', E_USER_DEPRECATED);

        return \$this->getManagerNames();
    }

    /**
     * Gets the entity manager associated with a given class.
     *
     * @deprecated
     *
     * @param string \$class A Doctrine Entity class name
     *
     * @return EntityManager|null
     */
    public function getEntityManagerForClass(\$class)
    {
        @trigger_error('getEntityManagerForClass is deprecated since Symfony 2.1. Use getManagerForClass instead', E_USER_DEPRECATED);

        return \$this->getManagerForClass(\$class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Registry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\ORMException;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

/**
 * References all Doctrine connections and entity managers in a given Container.
 */
class Registry extends ManagerRegistry implements RegistryInterface
{
    /**
     * @param string[] \$connections
     * @param string[] \$entityManagers
     * @param string   \$defaultConnection
     * @param string   \$defaultEntityManager
     */
    public function __construct(ContainerInterface \$container, array \$connections, array \$entityManagers, \$defaultConnection, \$defaultEntityManager)
    {
        \$this->container = \$container;

        parent::__construct('ORM', \$connections, \$entityManagers, \$defaultConnection, \$defaultEntityManager, 'Doctrine\\ORM\\Proxy\\Proxy');
    }

    /**
     * Gets the default entity manager name.
     *
     * @deprecated
     *
     * @return string The default entity manager name
     */
    public function getDefaultEntityManagerName()
    {
        @trigger_error('getDefaultEntityManagerName is deprecated since Symfony 2.1. Use getDefaultManagerName instead', E_USER_DEPRECATED);

        return \$this->getDefaultManagerName();
    }

    /**
     * Gets a named entity manager.
     *
     * @deprecated
     *
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function getEntityManager(\$name = null)
    {
        @trigger_error('getEntityManager is deprecated since Symfony 2.1. Use getManager instead', E_USER_DEPRECATED);

        return \$this->getManager(\$name);
    }

    /**
     * Gets an array of all registered entity managers
     *
     * @deprecated
     *
     * @return EntityManager[] an array of all EntityManager instances
     */
    public function getEntityManagers()
    {
        @trigger_error('getEntityManagers is deprecated since Symfony 2.1. Use getManagers instead', E_USER_DEPRECATED);

        return \$this->getManagers();
    }

    /**
     * Resets a named entity manager.
     *
     * This method is useful when an entity manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new entity manager as
     * the existing one is not usable anymore. This means that any
     * other object with a dependency on this entity manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @deprecated
     *
     * @param string \$name The entity manager name (null for the default one)
     */
    public function resetEntityManager(\$name = null)
    {
        @trigger_error('resetEntityManager is deprecated since Symfony 2.1. Use resetManager instead', E_USER_DEPRECATED);

        \$this->resetManager(\$name);
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @deprecated
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getEntityNamespace(\$alias)
    {
        @trigger_error('getEntityNamespace is deprecated since Symfony 2.1. Use getAliasNamespace instead', E_USER_DEPRECATED);

        return \$this->getAliasNamespace(\$alias);
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @see Configuration::getEntityNamespace
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getAliasNamespace(\$alias)
    {
        foreach (array_keys(\$this->getManagers()) as \$name) {
            try {
                return \$this->getManager(\$name)->getConfiguration()->getEntityNamespace(\$alias);
            } catch (ORMException \$e) {
            }
        }

        throw ORMException::unknownEntityNamespace(\$alias);
    }

    /**
     * Gets all connection names.
     *
     * @deprecated
     *
     * @return string[] An array of connection names
     */
    public function getEntityManagerNames()
    {
        @trigger_error('getEntityManagerNames is deprecated since Symfony 2.1. Use getManagerNames instead', E_USER_DEPRECATED);

        return \$this->getManagerNames();
    }

    /**
     * Gets the entity manager associated with a given class.
     *
     * @deprecated
     *
     * @param string \$class A Doctrine Entity class name
     *
     * @return EntityManager|null
     */
    public function getEntityManagerForClass(\$class)
    {
        @trigger_error('getEntityManagerForClass is deprecated since Symfony 2.1. Use getManagerForClass instead', E_USER_DEPRECATED);

        return \$this->getManagerForClass(\$class);
    }
}
", "vendor/doctrine/doctrine-bundle/Registry.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Registry.php");
    }
}
