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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php */
class __TwigTemplate_f3b698881cef1810355b297bc0d4de8d8195fd861252e17034e73248ad88fcc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding\\SQLAzure\\Schema;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use RuntimeException;
use function in_array;

/**
 * Converts a single tenant schema into a multi-tenant schema for SQL Azure
 * Federations under the following assumptions:
 *
 * - Every table is part of the multi-tenant application, only explicitly
 *   excluded tables are non-federated. The behavior of the tables being in
 *   global or federated database is undefined. It depends on you selecting a
 *   federation before DDL statements or not.
 * - Every Primary key of a federated table is extended by another column
 *   'tenant_id' with a default value of the SQLAzure function
 *   `federation_filtering_value('tenant_id')`.
 * - You always have to work with `filtering=On` when using federations with this
 *   multi-tenant approach.
 * - Primary keys are either using globally unique ids (GUID, Table Generator)
 *   or you explicitly add the tenant_id in every UPDATE or DELETE statement
 *   (otherwise they will affect the same-id rows from other tenants as well).
 *   SQLAzure throws errors when you try to create IDENTIY columns on federated
 *   tables.
 */
class MultiTenantVisitor implements Visitor
{
    /** @var string[] */
    private \$excludedTables = [];

    /** @var string */
    private \$tenantColumnName;

    /** @var string */
    private \$tenantColumnType = 'integer';

    /**
     * Name of the federation distribution, defaulting to the tenantColumnName
     * if not specified.
     *
     * @var string
     */
    private \$distributionName;

    /**
     * @param string[]    \$excludedTables
     * @param string      \$tenantColumnName
     * @param string|null \$distributionName
     */
    public function __construct(array \$excludedTables = [], \$tenantColumnName = 'tenant_id', \$distributionName = null)
    {
        \$this->excludedTables   = \$excludedTables;
        \$this->tenantColumnName = \$tenantColumnName;
        \$this->distributionName = \$distributionName ?: \$tenantColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        if (in_array(\$table->getName(), \$this->excludedTables)) {
            return;
        }

        \$table->addColumn(\$this->tenantColumnName, \$this->tenantColumnType, [
            'default' => \"federation_filtering_value('\" . \$this->distributionName . \"')\",
        ]);

        \$clusteredIndex = \$this->getClusteredIndex(\$table);

        \$indexColumns   = \$clusteredIndex->getColumns();
        \$indexColumns[] = \$this->tenantColumnName;

        if (\$clusteredIndex->isPrimary()) {
            \$table->dropPrimaryKey();
            \$table->setPrimaryKey(\$indexColumns);
        } else {
            \$table->dropIndex(\$clusteredIndex->getName());
            \$table->addIndex(\$indexColumns, \$clusteredIndex->getName());
            \$table->getIndex(\$clusteredIndex->getName())->addFlag('clustered');
        }
    }

    /**
     * @param Table \$table
     *
     * @return Index
     *
     * @throws RuntimeException
     */
    private function getClusteredIndex(\$table)
    {
        foreach (\$table->getIndexes() as \$index) {
            if (\$index->isPrimary() && ! \$index->hasFlag('nonclustered')) {
                return \$index;
            }

            if (\$index->hasFlag('clustered')) {
                return \$index;
            }
        }
        throw new RuntimeException('No clustered index found on table ' . \$table->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding\\SQLAzure\\Schema;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use RuntimeException;
use function in_array;

/**
 * Converts a single tenant schema into a multi-tenant schema for SQL Azure
 * Federations under the following assumptions:
 *
 * - Every table is part of the multi-tenant application, only explicitly
 *   excluded tables are non-federated. The behavior of the tables being in
 *   global or federated database is undefined. It depends on you selecting a
 *   federation before DDL statements or not.
 * - Every Primary key of a federated table is extended by another column
 *   'tenant_id' with a default value of the SQLAzure function
 *   `federation_filtering_value('tenant_id')`.
 * - You always have to work with `filtering=On` when using federations with this
 *   multi-tenant approach.
 * - Primary keys are either using globally unique ids (GUID, Table Generator)
 *   or you explicitly add the tenant_id in every UPDATE or DELETE statement
 *   (otherwise they will affect the same-id rows from other tenants as well).
 *   SQLAzure throws errors when you try to create IDENTIY columns on federated
 *   tables.
 */
class MultiTenantVisitor implements Visitor
{
    /** @var string[] */
    private \$excludedTables = [];

    /** @var string */
    private \$tenantColumnName;

    /** @var string */
    private \$tenantColumnType = 'integer';

    /**
     * Name of the federation distribution, defaulting to the tenantColumnName
     * if not specified.
     *
     * @var string
     */
    private \$distributionName;

    /**
     * @param string[]    \$excludedTables
     * @param string      \$tenantColumnName
     * @param string|null \$distributionName
     */
    public function __construct(array \$excludedTables = [], \$tenantColumnName = 'tenant_id', \$distributionName = null)
    {
        \$this->excludedTables   = \$excludedTables;
        \$this->tenantColumnName = \$tenantColumnName;
        \$this->distributionName = \$distributionName ?: \$tenantColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        if (in_array(\$table->getName(), \$this->excludedTables)) {
            return;
        }

        \$table->addColumn(\$this->tenantColumnName, \$this->tenantColumnType, [
            'default' => \"federation_filtering_value('\" . \$this->distributionName . \"')\",
        ]);

        \$clusteredIndex = \$this->getClusteredIndex(\$table);

        \$indexColumns   = \$clusteredIndex->getColumns();
        \$indexColumns[] = \$this->tenantColumnName;

        if (\$clusteredIndex->isPrimary()) {
            \$table->dropPrimaryKey();
            \$table->setPrimaryKey(\$indexColumns);
        } else {
            \$table->dropIndex(\$clusteredIndex->getName());
            \$table->addIndex(\$indexColumns, \$clusteredIndex->getName());
            \$table->getIndex(\$clusteredIndex->getName())->addFlag('clustered');
        }
    }

    /**
     * @param Table \$table
     *
     * @return Index
     *
     * @throws RuntimeException
     */
    private function getClusteredIndex(\$table)
    {
        foreach (\$table->getIndexes() as \$index) {
            if (\$index->isPrimary() && ! \$index->hasFlag('nonclustered')) {
                return \$index;
            }

            if (\$index->hasFlag('clustered')) {
                return \$index;
            }
        }
        throw new RuntimeException('No clustered index found on table ' . \$table->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
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
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php");
    }
}
