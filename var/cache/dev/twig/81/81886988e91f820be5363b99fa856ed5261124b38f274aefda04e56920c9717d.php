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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php */
class __TwigTemplate_3d6424af7ff7dbc56a61507297e88c795ed244e9e32b7538eb9ba89ae495f8e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Sorter;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @internal this class is to be used only by data-fixtures internals: do not
 *           rely on it in your own libraries/applications. This class is
 *           designed to work with {@see \\Doctrine\\Common\\DataFixtures\\Sorter\\TopologicalSorter}
 *           only.
 */
class Vertex
{
    const NOT_VISITED = 0;
    const IN_PROGRESS = 1;
    const VISITED     = 2;

    /**
     * @var int one of either {@see self::NOT_VISITED}, {@see self::IN_PROGRESS} or {@see self::VISITED}.
     */
    public \$state = self::NOT_VISITED;

    /**
     * @var ClassMetadata Actual node value
     */
    public \$value;

    /**
     * @var string[] Map of node dependencies defined as hashes.
     */
    public \$dependencyList = [];

    /**
     * @param ClassMetadata \$value
     */
    public function __construct(ClassMetadata \$value)
    {
        \$this->value = \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Sorter;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @internal this class is to be used only by data-fixtures internals: do not
 *           rely on it in your own libraries/applications. This class is
 *           designed to work with {@see \\Doctrine\\Common\\DataFixtures\\Sorter\\TopologicalSorter}
 *           only.
 */
class Vertex
{
    const NOT_VISITED = 0;
    const IN_PROGRESS = 1;
    const VISITED     = 2;

    /**
     * @var int one of either {@see self::NOT_VISITED}, {@see self::IN_PROGRESS} or {@see self::VISITED}.
     */
    public \$state = self::NOT_VISITED;

    /**
     * @var ClassMetadata Actual node value
     */
    public \$value;

    /**
     * @var string[] Map of node dependencies defined as hashes.
     */
    public \$dependencyList = [];

    /**
     * @param ClassMetadata \$value
     */
    public function __construct(ClassMetadata \$value)
    {
        \$this->value = \$value;
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/Vertex.php");
    }
}
