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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php */
class __TwigTemplate_d3dc6cb2538e71d350fe396ab5497b4e1c51c8c76e476fc07de34fba21ff692d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence;

/**
 * Base class to simplify ObjectManager decorators
 */
abstract class ObjectManagerDecorator implements ObjectManager
{
    /** @var ObjectManager */
    protected \$wrapped;

    /**
     * {@inheritdoc}
     */
    public function find(\$className, \$id)
    {
        return \$this->wrapped->find(\$className, \$id);
    }

    /**
     * {@inheritdoc}
     */
    public function persist(\$object)
    {
        \$this->wrapped->persist(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$object)
    {
        \$this->wrapped->remove(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\$object)
    {
        return \$this->wrapped->merge(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function clear(\$objectName = null)
    {
        \$this->wrapped->clear(\$objectName);
    }

    /**
     * {@inheritdoc}
     */
    public function detach(\$object)
    {
        \$this->wrapped->detach(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function refresh(\$object)
    {
        \$this->wrapped->refresh(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function flush()
    {
        \$this->wrapped->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(\$className)
    {
        return \$this->wrapped->getRepository(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function getClassMetadata(\$className)
    {
        return \$this->wrapped->getClassMetadata(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFactory()
    {
        return \$this->wrapped->getMetadataFactory();
    }

    /**
     * {@inheritdoc}
     */
    public function initializeObject(\$obj)
    {
        \$this->wrapped->initializeObject(\$obj);
    }

    /**
     * {@inheritdoc}
     */
    public function contains(\$object)
    {
        return \$this->wrapped->contains(\$object);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php";
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
 * Base class to simplify ObjectManager decorators
 */
abstract class ObjectManagerDecorator implements ObjectManager
{
    /** @var ObjectManager */
    protected \$wrapped;

    /**
     * {@inheritdoc}
     */
    public function find(\$className, \$id)
    {
        return \$this->wrapped->find(\$className, \$id);
    }

    /**
     * {@inheritdoc}
     */
    public function persist(\$object)
    {
        \$this->wrapped->persist(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$object)
    {
        \$this->wrapped->remove(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\$object)
    {
        return \$this->wrapped->merge(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function clear(\$objectName = null)
    {
        \$this->wrapped->clear(\$objectName);
    }

    /**
     * {@inheritdoc}
     */
    public function detach(\$object)
    {
        \$this->wrapped->detach(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function refresh(\$object)
    {
        \$this->wrapped->refresh(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function flush()
    {
        \$this->wrapped->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(\$className)
    {
        return \$this->wrapped->getRepository(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function getClassMetadata(\$className)
    {
        return \$this->wrapped->getClassMetadata(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFactory()
    {
        return \$this->wrapped->getMetadataFactory();
    }

    /**
     * {@inheritdoc}
     */
    public function initializeObject(\$obj)
    {
        \$this->wrapped->initializeObject(\$obj);
    }

    /**
     * {@inheritdoc}
     */
    public function contains(\$object)
    {
        return \$this->wrapped->contains(\$object);
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php");
    }
}
