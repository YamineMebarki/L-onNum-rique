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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php */
class __TwigTemplate_8eb2f69c0bf660993ae9032cc021edee311ede2486ef573719170a10dc9d51d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;

class TableGeneratorSchemaVisitor implements Visitor
{
    /** @var string */
    private \$generatorTableName;

    /**
     * @param string \$generatorTableName
     */
    public function __construct(\$generatorTableName = 'sequences')
    {
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$table = \$schema->createTable(\$this->generatorTableName);
        \$table->addColumn('sequence_name', 'string');
        \$table->addColumn('sequence_value', 'integer', ['default' => 1]);
        \$table->addColumn('sequence_increment_by', 'integer', ['default' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;

class TableGeneratorSchemaVisitor implements Visitor
{
    /** @var string */
    private \$generatorTableName;

    /**
     * @param string \$generatorTableName
     */
    public function __construct(\$generatorTableName = 'sequences')
    {
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$table = \$schema->createTable(\$this->generatorTableName);
        \$table->addColumn('sequence_name', 'string');
        \$table->addColumn('sequence_value', 'integer', ['default' => 1]);
        \$table->addColumn('sequence_increment_by', 'integer', ['default' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php");
    }
}
