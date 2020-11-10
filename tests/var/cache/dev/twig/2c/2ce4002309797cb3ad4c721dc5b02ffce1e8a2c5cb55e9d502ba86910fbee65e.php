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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php */
class __TwigTemplate_f8fed21ebac29025575a65bbcb807aca9fb9d346ddcbba28a95887e22a3917eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Provides event arguments for the onClear event.
 */
class OnClearEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var string|null */
    private \$entityClass;

    /**
     * @param ObjectManager \$objectManager The object manager.
     * @param string|null   \$entityClass   The optional entity class.
     */
    public function __construct(\$objectManager, \$entityClass = null)
    {
        \$this->objectManager = \$objectManager;
        \$this->entityClass   = \$entityClass;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }

    /**
     * Returns the name of the entity class that is cleared, or null if all are cleared.
     *
     * @return string|null
     */
    public function getEntityClass()
    {
        return \$this->entityClass;
    }

    /**
     * Returns whether this event clears all entities.
     *
     * @return bool
     */
    public function clearsAllEntities()
    {
        return \$this->entityClass === null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Provides event arguments for the onClear event.
 */
class OnClearEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var string|null */
    private \$entityClass;

    /**
     * @param ObjectManager \$objectManager The object manager.
     * @param string|null   \$entityClass   The optional entity class.
     */
    public function __construct(\$objectManager, \$entityClass = null)
    {
        \$this->objectManager = \$objectManager;
        \$this->entityClass   = \$entityClass;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }

    /**
     * Returns the name of the entity class that is cleared, or null if all are cleared.
     *
     * @return string|null
     */
    public function getEntityClass()
    {
        return \$this->entityClass;
    }

    /**
     * Returns whether this event clears all entities.
     *
     * @return bool
     */
    public function clearsAllEntities()
    {
        return \$this->entityClass === null;
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php");
    }
}
