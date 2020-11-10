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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php */
class __TwigTemplate_97d4f157edba58551230485706ec10d14cf0c2059a24be9ca8387417ac7bd867 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Abstract Visitor with empty methods for easy extension.
 */
class AbstractVisitor implements Visitor, NamespaceVisitor
{
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptNamespace(\$namespaceName)
    {
    }

    public function acceptTable(Table \$table)
    {
    }

    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    public function acceptSequence(Sequence \$sequence)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Abstract Visitor with empty methods for easy extension.
 */
class AbstractVisitor implements Visitor, NamespaceVisitor
{
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptNamespace(\$namespaceName)
    {
    }

    public function acceptTable(Table \$table)
    {
    }

    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    public function acceptSequence(Sequence \$sequence)
    {
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php");
    }
}
