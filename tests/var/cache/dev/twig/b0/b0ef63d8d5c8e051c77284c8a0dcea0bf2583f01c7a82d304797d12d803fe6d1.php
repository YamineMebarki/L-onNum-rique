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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php */
class __TwigTemplate_6f9412d7fe074e5e59b39dd9290f22d4a0d288fb0ffba57cdffaf5dc4f1da661 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence;

/**
 * Contract covering object managers for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ManagerRegistry extends ConnectionRegistry
{
    /**
     * Gets the default object manager name.
     *
     * @return string The default object manager name.
     */
    public function getDefaultManagerName();

    /**
     * Gets a named object manager.
     *
     * @param string \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function getManager(\$name = null);

    /**
     * Gets an array of all registered object managers.
     *
     * @return ObjectManager[] An array of ObjectManager instances
     */
    public function getManagers();

    /**
     * Resets a named object manager.
     *
     * This method is useful when an object manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new object manager as
     * the existing one is not useable anymore. This means that any
     * other object with a dependency on this object manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @param string|null \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function resetManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered object managers.
     *
     * @param string \$alias The alias.
     *
     * @return string The full namespace.
     */
    public function getAliasNamespace(\$alias);

    /**
     * Gets all object manager names.
     *
     * @return string[] An array of object manager names.
     */
    public function getManagerNames();

    /**
     * Gets the ObjectRepository for a persistent object.
     *
     * @param string \$persistentObject      The name of the persistent object.
     * @param string \$persistentManagerName The object manager name (null for the default one).
     *
     * @return ObjectRepository
     */
    public function getRepository(\$persistentObject, \$persistentManagerName = null);

    /**
     * Gets the object manager associated with a given class.
     *
     * @param string \$class A persistent object class name.
     *
     * @return ObjectManager|null
     */
    public function getManagerForClass(\$class);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence;

/**
 * Contract covering object managers for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ManagerRegistry extends ConnectionRegistry
{
    /**
     * Gets the default object manager name.
     *
     * @return string The default object manager name.
     */
    public function getDefaultManagerName();

    /**
     * Gets a named object manager.
     *
     * @param string \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function getManager(\$name = null);

    /**
     * Gets an array of all registered object managers.
     *
     * @return ObjectManager[] An array of ObjectManager instances
     */
    public function getManagers();

    /**
     * Resets a named object manager.
     *
     * This method is useful when an object manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new object manager as
     * the existing one is not useable anymore. This means that any
     * other object with a dependency on this object manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @param string|null \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function resetManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered object managers.
     *
     * @param string \$alias The alias.
     *
     * @return string The full namespace.
     */
    public function getAliasNamespace(\$alias);

    /**
     * Gets all object manager names.
     *
     * @return string[] An array of object manager names.
     */
    public function getManagerNames();

    /**
     * Gets the ObjectRepository for a persistent object.
     *
     * @param string \$persistentObject      The name of the persistent object.
     * @param string \$persistentManagerName The object manager name (null for the default one).
     *
     * @return ObjectRepository
     */
    public function getRepository(\$persistentObject, \$persistentManagerName = null);

    /**
     * Gets the object manager associated with a given class.
     *
     * @param string \$class A persistent object class name.
     *
     * @return ObjectManager|null
     */
    public function getManagerForClass(\$class);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php");
    }
}
