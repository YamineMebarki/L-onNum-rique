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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php */
class __TwigTemplate_53667995bb8c636e5420751448366d8d19de29c345a9e8bea2358f739d2904e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of entities.
 */
class LifecycleEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var object */
    private \$object;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ObjectManager \$objectManager)
    {
        \$this->object        = \$object;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated entity.
     *
     * @deprecated
     *
     * @return object
     */
    public function getEntity()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated object.
     *
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php";
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
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of entities.
 */
class LifecycleEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var object */
    private \$object;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ObjectManager \$objectManager)
    {
        \$this->object        = \$object;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated entity.
     *
     * @deprecated
     *
     * @return object
     */
    public function getEntity()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated object.
     *
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
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
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php");
    }
}
