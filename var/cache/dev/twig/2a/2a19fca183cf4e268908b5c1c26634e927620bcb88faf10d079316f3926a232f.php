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

/* vendor/symfony/doctrine-bridge/RegistryInterface.php */
class __TwigTemplate_ba5b58f7ae17100ecd92635dcbf84e2bdcb5174ccecd043349d266011b2eec7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/RegistryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/RegistryInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\Persistence\\ManagerRegistry as ManagerRegistryInterface;
use Doctrine\\ORM\\EntityManager;

/**
 * References Doctrine connections and entity managers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RegistryInterface extends ManagerRegistryInterface
{
    /**
     * Gets the default entity manager name.
     *
     * @return string The default entity manager name
     */
    public function getDefaultEntityManagerName();

    /**
     * Gets a named entity manager.
     *
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function getEntityManager(\$name = null);

    /**
     * Gets an array of all registered entity managers.
     *
     * @return array An array of EntityManager instances
     */
    public function getEntityManagers();

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
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function resetEntityManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     *
     * @see Configuration::getEntityNamespace
     */
    public function getEntityNamespace(\$alias);

    /**
     * Gets all connection names.
     *
     * @return array An array of connection names
     */
    public function getEntityManagerNames();

    /**
     * Gets the entity manager associated with a given class.
     *
     * @param string \$class A Doctrine Entity class name
     *
     * @return EntityManager|null
     */
    public function getEntityManagerForClass(\$class);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/RegistryInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\Persistence\\ManagerRegistry as ManagerRegistryInterface;
use Doctrine\\ORM\\EntityManager;

/**
 * References Doctrine connections and entity managers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RegistryInterface extends ManagerRegistryInterface
{
    /**
     * Gets the default entity manager name.
     *
     * @return string The default entity manager name
     */
    public function getDefaultEntityManagerName();

    /**
     * Gets a named entity manager.
     *
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function getEntityManager(\$name = null);

    /**
     * Gets an array of all registered entity managers.
     *
     * @return array An array of EntityManager instances
     */
    public function getEntityManagers();

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
     * @param string \$name The entity manager name (null for the default one)
     *
     * @return EntityManager
     */
    public function resetEntityManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     *
     * @see Configuration::getEntityNamespace
     */
    public function getEntityNamespace(\$alias);

    /**
     * Gets all connection names.
     *
     * @return array An array of connection names
     */
    public function getEntityManagerNames();

    /**
     * Gets the entity manager associated with a given class.
     *
     * @param string \$class A Doctrine Entity class name
     *
     * @return EntityManager|null
     */
    public function getEntityManagerForClass(\$class);
}
", "vendor/symfony/doctrine-bridge/RegistryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/RegistryInterface.php");
    }
}
