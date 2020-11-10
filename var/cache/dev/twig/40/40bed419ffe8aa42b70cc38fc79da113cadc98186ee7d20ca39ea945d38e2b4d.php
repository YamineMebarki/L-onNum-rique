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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php */
class __TwigTemplate_a408ef98dd8e37d88d12ccfe889fda8fd08a14a97c19f113ca8be119485ecb11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for creating tables are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableEventArgs extends SchemaEventArgs
{
    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->tableDiff = \$tableDiff;
        \$this->platform  = \$platform;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableEventArgs
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php";
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
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function is_array;

/**
 * Event Arguments used when SQL queries for creating tables are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableEventArgs extends SchemaEventArgs
{
    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->tableDiff = \$tableDiff;
        \$this->platform  = \$platform;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableEventArgs
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
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php");
    }
}
