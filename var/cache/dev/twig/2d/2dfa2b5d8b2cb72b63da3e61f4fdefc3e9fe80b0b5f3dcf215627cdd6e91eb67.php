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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php */
class __TwigTemplate_b33035eb6788737a49aff8725badc6691c6714e484e8ef9d4bc55f4cadb73458 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use function in_array;

/**
 * Represents the change of a column.
 */
class ColumnDiff
{
    /** @var string */
    public \$oldColumnName;

    /** @var Column */
    public \$column;

    /** @var string[] */
    public \$changedProperties = [];

    /** @var Column */
    public \$fromColumn;

    /**
     * @param string   \$oldColumnName
     * @param string[] \$changedProperties
     */
    public function __construct(\$oldColumnName, Column \$column, array \$changedProperties = [], ?Column \$fromColumn = null)
    {
        \$this->oldColumnName     = \$oldColumnName;
        \$this->column            = \$column;
        \$this->changedProperties = \$changedProperties;
        \$this->fromColumn        = \$fromColumn;
    }

    /**
     * @param string \$propertyName
     *
     * @return bool
     */
    public function hasChanged(\$propertyName)
    {
        return in_array(\$propertyName, \$this->changedProperties);
    }

    /**
     * @return Identifier
     */
    public function getOldColumnName()
    {
        \$quote = \$this->fromColumn && \$this->fromColumn->isQuoted();

        return new Identifier(\$this->oldColumnName, \$quote);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use function in_array;

/**
 * Represents the change of a column.
 */
class ColumnDiff
{
    /** @var string */
    public \$oldColumnName;

    /** @var Column */
    public \$column;

    /** @var string[] */
    public \$changedProperties = [];

    /** @var Column */
    public \$fromColumn;

    /**
     * @param string   \$oldColumnName
     * @param string[] \$changedProperties
     */
    public function __construct(\$oldColumnName, Column \$column, array \$changedProperties = [], ?Column \$fromColumn = null)
    {
        \$this->oldColumnName     = \$oldColumnName;
        \$this->column            = \$column;
        \$this->changedProperties = \$changedProperties;
        \$this->fromColumn        = \$fromColumn;
    }

    /**
     * @param string \$propertyName
     *
     * @return bool
     */
    public function hasChanged(\$propertyName)
    {
        return in_array(\$propertyName, \$this->changedProperties);
    }

    /**
     * @return Identifier
     */
    public function getOldColumnName()
    {
        \$quote = \$this->fromColumn && \$this->fromColumn->isQuoted();

        return new Identifier(\$this->oldColumnName, \$quote);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php");
    }
}
