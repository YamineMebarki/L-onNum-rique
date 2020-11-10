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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php */
class __TwigTemplate_e45370a6b8386b5757a41468f16f5546fcd019fcd07976a417cf59e9e5d6fc5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Class that holds event arguments for a loadMetadata event.
 */
class LoadClassMetadataEventArgs extends EventArgs
{
    /** @var ClassMetadata */
    private \$classMetadata;

    /** @var ObjectManager */
    private \$objectManager;

    public function __construct(ClassMetadata \$classMetadata, ObjectManager \$objectManager)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated ClassMetadata.
     *
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
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
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php";
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
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Class that holds event arguments for a loadMetadata event.
 */
class LoadClassMetadataEventArgs extends EventArgs
{
    /** @var ClassMetadata */
    private \$classMetadata;

    /** @var ObjectManager */
    private \$objectManager;

    public function __construct(ClassMetadata \$classMetadata, ObjectManager \$objectManager)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated ClassMetadata.
     *
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
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
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php");
    }
}
