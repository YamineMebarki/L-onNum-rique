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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php */
class __TwigTemplate_4c9d3e65f60537d898355b911ac47a3b953dee17fa54b1c0d85b3ebe5b60f3e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ColumnDiff;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for changing table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableChangeColumnEventArgs extends SchemaEventArgs
{
    /** @var ColumnDiff */
    private \$columnDiff;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(ColumnDiff \$columnDiff, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->columnDiff = \$columnDiff;
        \$this->tableDiff  = \$tableDiff;
        \$this->platform   = \$platform;
    }

    /**
     * @return ColumnDiff
     */
    public function getColumnDiff()
    {
        return \$this->columnDiff;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return \$this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string|string[] \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableChangeColumnEventArgs
     */
    public function addSql(\$sql)
    {
        if (is_array(\$sql)) {
            \$this->sql = array_merge(\$this->sql, \$sql);
        } else {
            \$this->sql[] = \$sql;
        }

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ColumnDiff;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for changing table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableChangeColumnEventArgs extends SchemaEventArgs
{
    /** @var ColumnDiff */
    private \$columnDiff;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(ColumnDiff \$columnDiff, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->columnDiff = \$columnDiff;
        \$this->tableDiff  = \$tableDiff;
        \$this->platform   = \$platform;
    }

    /**
     * @return ColumnDiff
     */
    public function getColumnDiff()
    {
        return \$this->columnDiff;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return \$this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string|string[] \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableChangeColumnEventArgs
     */
    public function addSql(\$sql)
    {
        if (is_array(\$sql)) {
            \$this->sql = array_merge(\$this->sql, \$sql);
        } else {
            \$this->sql[] = \$sql;
        }

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php");
    }
}
