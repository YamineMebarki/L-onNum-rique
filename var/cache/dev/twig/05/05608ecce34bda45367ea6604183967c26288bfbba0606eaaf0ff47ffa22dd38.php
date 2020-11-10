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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php */
class __TwigTemplate_edc666fcb47ea76b22d490be189bcd7ae7313037f047b7af656b461e4f59ab58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\Persistence\\ObjectManager;
use InvalidArgumentException;
use function get_class;
use function sprintf;

/**
 * Class that holds event arguments for a preUpdate event.
 */
class PreUpdateEventArgs extends LifecycleEventArgs
{
    /** @var mixed[][] */
    private \$entityChangeSet;

    /**
     * @param object    \$entity
     * @param mixed[][] \$changeSet
     */
    public function __construct(\$entity, ObjectManager \$objectManager, array &\$changeSet)
    {
        parent::__construct(\$entity, \$objectManager);

        \$this->entityChangeSet = &\$changeSet;
    }

    /**
     * Retrieves the entity changeset.
     *
     * @return mixed[][]
     */
    public function getEntityChangeSet()
    {
        return \$this->entityChangeSet;
    }

    /**
     * Checks if field has a changeset.
     *
     * @param string \$field
     *
     * @return bool
     */
    public function hasChangedField(\$field)
    {
        return isset(\$this->entityChangeSet[\$field]);
    }

    /**
     * Gets the old value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getOldValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][0];
    }

    /**
     * Gets the new value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getNewValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][1];
    }

    /**
     * Sets the new value of this field.
     *
     * @param string \$field
     * @param mixed  \$value
     *
     * @return void
     */
    public function setNewValue(\$field, \$value)
    {
        \$this->assertValidField(\$field);

        \$this->entityChangeSet[\$field][1] = \$value;
    }

    /**
     * Asserts the field exists in changeset.
     *
     * @param string \$field
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    private function assertValidField(\$field)
    {
        if (! isset(\$this->entityChangeSet[\$field])) {
            throw new InvalidArgumentException(sprintf(
                'Field \"%s\" is not a valid field of the entity \"%s\" in PreUpdateEventArgs.',
                \$field,
                get_class(\$this->getObject())
            ));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\Persistence\\ObjectManager;
use InvalidArgumentException;
use function get_class;
use function sprintf;

/**
 * Class that holds event arguments for a preUpdate event.
 */
class PreUpdateEventArgs extends LifecycleEventArgs
{
    /** @var mixed[][] */
    private \$entityChangeSet;

    /**
     * @param object    \$entity
     * @param mixed[][] \$changeSet
     */
    public function __construct(\$entity, ObjectManager \$objectManager, array &\$changeSet)
    {
        parent::__construct(\$entity, \$objectManager);

        \$this->entityChangeSet = &\$changeSet;
    }

    /**
     * Retrieves the entity changeset.
     *
     * @return mixed[][]
     */
    public function getEntityChangeSet()
    {
        return \$this->entityChangeSet;
    }

    /**
     * Checks if field has a changeset.
     *
     * @param string \$field
     *
     * @return bool
     */
    public function hasChangedField(\$field)
    {
        return isset(\$this->entityChangeSet[\$field]);
    }

    /**
     * Gets the old value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getOldValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][0];
    }

    /**
     * Gets the new value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getNewValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][1];
    }

    /**
     * Sets the new value of this field.
     *
     * @param string \$field
     * @param mixed  \$value
     *
     * @return void
     */
    public function setNewValue(\$field, \$value)
    {
        \$this->assertValidField(\$field);

        \$this->entityChangeSet[\$field][1] = \$value;
    }

    /**
     * Asserts the field exists in changeset.
     *
     * @param string \$field
     *
     * @return void
     *
     * @throws InvalidArgumentException
     */
    private function assertValidField(\$field)
    {
        if (! isset(\$this->entityChangeSet[\$field])) {
            throw new InvalidArgumentException(sprintf(
                'Field \"%s\" is not a valid field of the entity \"%s\" in PreUpdateEventArgs.',
                \$field,
                get_class(\$this->getObject())
            ));
        }
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php");
    }
}
