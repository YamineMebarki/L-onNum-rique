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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php */
class __TwigTemplate_6cc00be52a3cca055eb0d452b0fcd1a9b92d333ec192d7c3916a1c918f390694 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use SplObjectStorage;
use function strlen;

/**
 * Gathers SQL statements that allow to completely drop the current schema.
 */
class DropSchemaSqlCollector extends AbstractVisitor
{
    /** @var SplObjectStorage */
    private \$constraints;

    /** @var SplObjectStorage */
    private \$sequences;

    /** @var SplObjectStorage */
    private \$tables;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(AbstractPlatform \$platform)
    {
        \$this->platform = \$platform;
        \$this->clearQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->tables->attach(\$table);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        if (strlen(\$fkConstraint->getName()) === 0) {
            throw SchemaException::namedForeignKeyRequired(\$localTable, \$fkConstraint);
        }

        \$this->constraints->attach(\$fkConstraint, \$localTable);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        \$this->sequences->attach(\$sequence);
    }

    /**
     * @return void
     */
    public function clearQueries()
    {
        \$this->constraints = new SplObjectStorage();
        \$this->sequences   = new SplObjectStorage();
        \$this->tables      = new SplObjectStorage();
    }

    /**
     * @return string[]
     */
    public function getQueries()
    {
        \$sql = [];

        foreach (\$this->constraints as \$fkConstraint) {
            \$localTable = \$this->constraints[\$fkConstraint];
            \$sql[]      = \$this->platform->getDropForeignKeySQL(\$fkConstraint, \$localTable);
        }

        foreach (\$this->sequences as \$sequence) {
            \$sql[] = \$this->platform->getDropSequenceSQL(\$sequence);
        }

        foreach (\$this->tables as \$table) {
            \$sql[] = \$this->platform->getDropTableSQL(\$table);
        }

        return \$sql;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use SplObjectStorage;
use function strlen;

/**
 * Gathers SQL statements that allow to completely drop the current schema.
 */
class DropSchemaSqlCollector extends AbstractVisitor
{
    /** @var SplObjectStorage */
    private \$constraints;

    /** @var SplObjectStorage */
    private \$sequences;

    /** @var SplObjectStorage */
    private \$tables;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(AbstractPlatform \$platform)
    {
        \$this->platform = \$platform;
        \$this->clearQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->tables->attach(\$table);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        if (strlen(\$fkConstraint->getName()) === 0) {
            throw SchemaException::namedForeignKeyRequired(\$localTable, \$fkConstraint);
        }

        \$this->constraints->attach(\$fkConstraint, \$localTable);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        \$this->sequences->attach(\$sequence);
    }

    /**
     * @return void
     */
    public function clearQueries()
    {
        \$this->constraints = new SplObjectStorage();
        \$this->sequences   = new SplObjectStorage();
        \$this->tables      = new SplObjectStorage();
    }

    /**
     * @return string[]
     */
    public function getQueries()
    {
        \$sql = [];

        foreach (\$this->constraints as \$fkConstraint) {
            \$localTable = \$this->constraints[\$fkConstraint];
            \$sql[]      = \$this->platform->getDropForeignKeySQL(\$fkConstraint, \$localTable);
        }

        foreach (\$this->sequences as \$sequence) {
            \$sql[] = \$this->platform->getDropSequenceSQL(\$sequence);
        }

        foreach (\$this->tables as \$table) {
            \$sql[] = \$this->platform->getDropTableSQL(\$table);
        }

        return \$sql;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php");
    }
}
