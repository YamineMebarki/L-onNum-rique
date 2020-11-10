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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php */
class __TwigTemplate_65516830df7e3628360ec50aaf8d971347d3aeff2f814f1bc4a0864c7f00f28f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\TableDiff;

/**
 * Visit a SchemaDiff.
 */
interface SchemaDiffVisitor
{
    /**
     * Visit an orphaned foreign key whose table was deleted.
     */
    public function visitOrphanedForeignKey(ForeignKeyConstraint \$foreignKey);

    /**
     * Visit a sequence that has changed.
     */
    public function visitChangedSequence(Sequence \$sequence);

    /**
     * Visit a sequence that has been removed.
     */
    public function visitRemovedSequence(Sequence \$sequence);

    public function visitNewSequence(Sequence \$sequence);

    public function visitNewTable(Table \$table);

    public function visitNewTableForeignKey(Table \$table, ForeignKeyConstraint \$foreignKey);

    public function visitRemovedTable(Table \$table);

    public function visitChangedTable(TableDiff \$tableDiff);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\TableDiff;

/**
 * Visit a SchemaDiff.
 */
interface SchemaDiffVisitor
{
    /**
     * Visit an orphaned foreign key whose table was deleted.
     */
    public function visitOrphanedForeignKey(ForeignKeyConstraint \$foreignKey);

    /**
     * Visit a sequence that has changed.
     */
    public function visitChangedSequence(Sequence \$sequence);

    /**
     * Visit a sequence that has been removed.
     */
    public function visitRemovedSequence(Sequence \$sequence);

    public function visitNewSequence(Sequence \$sequence);

    public function visitNewTable(Table \$table);

    public function visitNewTableForeignKey(Table \$table, ForeignKeyConstraint \$foreignKey);

    public function visitRemovedTable(Table \$table);

    public function visitChangedTable(TableDiff \$tableDiff);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php");
    }
}
