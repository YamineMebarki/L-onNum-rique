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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php */
class __TwigTemplate_fde9f49b0b76c53c2a1108fb294d9a220d4ec475cbd403056de43003ec04b888 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Comparator;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Visitor\\DropSchemaSqlCollector;
use function count;

/**
 * Schema Synchronizer for Default DBAL Connection.
 */
class SingleDatabaseSynchronizer extends AbstractSchemaSynchronizer
{
    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(Connection \$conn)
    {
        parent::__construct(\$conn);
        \$this->platform = \$conn->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateSchema(Schema \$createSchema)
    {
        return \$createSchema->toSql(\$this->platform);
    }


    /**
     * {@inheritdoc}
     */
    public function getUpdateSchema(Schema \$toSchema, \$noDrops = false)
    {
        \$comparator = new Comparator();
        \$sm         = \$this->conn->getSchemaManager();

        \$fromSchema = \$sm->createSchema();
        \$schemaDiff = \$comparator->compare(\$fromSchema, \$toSchema);

        if (\$noDrops) {
            return \$schemaDiff->toSaveSql(\$this->platform);
        }

        return \$schemaDiff->toSql(\$this->platform);
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSchema(Schema \$dropSchema)
    {
        \$visitor = new DropSchemaSqlCollector(\$this->platform);
        \$sm      = \$this->conn->getSchemaManager();

        \$fullSchema = \$sm->createSchema();

        foreach (\$fullSchema->getTables() as \$table) {
            if (\$dropSchema->hasTable(\$table->getName())) {
                \$visitor->acceptTable(\$table);
            }

            foreach (\$table->getForeignKeys() as \$foreignKey) {
                if (! \$dropSchema->hasTable(\$table->getName())) {
                    continue;
                }

                if (! \$dropSchema->hasTable(\$foreignKey->getForeignTableName())) {
                    continue;
                }

                \$visitor->acceptForeignKey(\$table, \$foreignKey);
            }
        }

        if (! \$this->platform->supportsSequences()) {
            return \$visitor->getQueries();
        }

        foreach (\$dropSchema->getSequences() as \$sequence) {
            \$visitor->acceptSequence(\$sequence);
        }

        foreach (\$dropSchema->getTables() as \$table) {
            if (! \$table->hasPrimaryKey()) {
                continue;
            }

            \$columns = \$table->getPrimaryKey()->getColumns();
            if (count(\$columns) > 1) {
                continue;
            }

            \$checkSequence = \$table->getName() . '_' . \$columns[0] . '_seq';
            if (! \$fullSchema->hasSequence(\$checkSequence)) {
                continue;
            }

            \$visitor->acceptSequence(\$fullSchema->getSequence(\$checkSequence));
        }

        return \$visitor->getQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function getDropAllSchema()
    {
        \$sm      = \$this->conn->getSchemaManager();
        \$visitor = new DropSchemaSqlCollector(\$this->platform);

        \$schema = \$sm->createSchema();
        \$schema->visit(\$visitor);

        return \$visitor->getQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function createSchema(Schema \$createSchema)
    {
        \$this->processSql(\$this->getCreateSchema(\$createSchema));
    }

    /**
     * {@inheritdoc}
     */
    public function updateSchema(Schema \$toSchema, \$noDrops = false)
    {
        \$this->processSql(\$this->getUpdateSchema(\$toSchema, \$noDrops));
    }

    /**
     * {@inheritdoc}
     */
    public function dropSchema(Schema \$dropSchema)
    {
        \$this->processSqlSafely(\$this->getDropSchema(\$dropSchema));
    }

    /**
     * {@inheritdoc}
     */
    public function dropAllSchema()
    {
        \$this->processSql(\$this->getDropAllSchema());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Comparator;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Visitor\\DropSchemaSqlCollector;
use function count;

/**
 * Schema Synchronizer for Default DBAL Connection.
 */
class SingleDatabaseSynchronizer extends AbstractSchemaSynchronizer
{
    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(Connection \$conn)
    {
        parent::__construct(\$conn);
        \$this->platform = \$conn->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateSchema(Schema \$createSchema)
    {
        return \$createSchema->toSql(\$this->platform);
    }


    /**
     * {@inheritdoc}
     */
    public function getUpdateSchema(Schema \$toSchema, \$noDrops = false)
    {
        \$comparator = new Comparator();
        \$sm         = \$this->conn->getSchemaManager();

        \$fromSchema = \$sm->createSchema();
        \$schemaDiff = \$comparator->compare(\$fromSchema, \$toSchema);

        if (\$noDrops) {
            return \$schemaDiff->toSaveSql(\$this->platform);
        }

        return \$schemaDiff->toSql(\$this->platform);
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSchema(Schema \$dropSchema)
    {
        \$visitor = new DropSchemaSqlCollector(\$this->platform);
        \$sm      = \$this->conn->getSchemaManager();

        \$fullSchema = \$sm->createSchema();

        foreach (\$fullSchema->getTables() as \$table) {
            if (\$dropSchema->hasTable(\$table->getName())) {
                \$visitor->acceptTable(\$table);
            }

            foreach (\$table->getForeignKeys() as \$foreignKey) {
                if (! \$dropSchema->hasTable(\$table->getName())) {
                    continue;
                }

                if (! \$dropSchema->hasTable(\$foreignKey->getForeignTableName())) {
                    continue;
                }

                \$visitor->acceptForeignKey(\$table, \$foreignKey);
            }
        }

        if (! \$this->platform->supportsSequences()) {
            return \$visitor->getQueries();
        }

        foreach (\$dropSchema->getSequences() as \$sequence) {
            \$visitor->acceptSequence(\$sequence);
        }

        foreach (\$dropSchema->getTables() as \$table) {
            if (! \$table->hasPrimaryKey()) {
                continue;
            }

            \$columns = \$table->getPrimaryKey()->getColumns();
            if (count(\$columns) > 1) {
                continue;
            }

            \$checkSequence = \$table->getName() . '_' . \$columns[0] . '_seq';
            if (! \$fullSchema->hasSequence(\$checkSequence)) {
                continue;
            }

            \$visitor->acceptSequence(\$fullSchema->getSequence(\$checkSequence));
        }

        return \$visitor->getQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function getDropAllSchema()
    {
        \$sm      = \$this->conn->getSchemaManager();
        \$visitor = new DropSchemaSqlCollector(\$this->platform);

        \$schema = \$sm->createSchema();
        \$schema->visit(\$visitor);

        return \$visitor->getQueries();
    }

    /**
     * {@inheritdoc}
     */
    public function createSchema(Schema \$createSchema)
    {
        \$this->processSql(\$this->getCreateSchema(\$createSchema));
    }

    /**
     * {@inheritdoc}
     */
    public function updateSchema(Schema \$toSchema, \$noDrops = false)
    {
        \$this->processSql(\$this->getUpdateSchema(\$toSchema, \$noDrops));
    }

    /**
     * {@inheritdoc}
     */
    public function dropSchema(Schema \$dropSchema)
    {
        \$this->processSqlSafely(\$this->getDropSchema(\$dropSchema));
    }

    /**
     * {@inheritdoc}
     */
    public function dropAllSchema()
    {
        \$this->processSql(\$this->getDropAllSchema());
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php");
    }
}
