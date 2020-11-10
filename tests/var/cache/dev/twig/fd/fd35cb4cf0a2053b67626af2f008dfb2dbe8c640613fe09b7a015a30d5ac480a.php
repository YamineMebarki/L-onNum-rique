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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php */
class __TwigTemplate_a9a21bfe1d2c42214d35a6564fc74b10e156c96ab6f4881df2ba891fd6221c1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\Migrations\\Exception\\NoTablesFound;
use Doctrine\\Migrations\\Generator\\Generator;
use Doctrine\\Migrations\\Generator\\SqlGenerator;
use function count;
use function implode;

/**
 * The SchemaDumper class is responsible for dumping the current state of your database schema to a migration. This
 * is to be used in conjunction with the Rollup class.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Rollup
 */
class SchemaDumper
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var Generator */
    private \$migrationGenerator;

    /** @var SqlGenerator */
    private \$migrationSqlGenerator;

    public function __construct(
        AbstractPlatform \$platform,
        AbstractSchemaManager \$schemaManager,
        Generator \$migrationGenerator,
        SqlGenerator \$migrationSqlGenerator
    ) {
        \$this->platform              = \$platform;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationGenerator    = \$migrationGenerator;
        \$this->migrationSqlGenerator = \$migrationSqlGenerator;
    }

    /**
     * @throws NoTablesFound
     */
    public function dump(
        string \$versionNumber,
        bool \$formatted = false,
        int \$lineLength = 120
    ) : string {
        \$schema = \$this->schemaManager->createSchema();

        \$up   = [];
        \$down = [];

        foreach (\$schema->getTables() as \$table) {
            \$upSql = \$this->platform->getCreateTableSQL(\$table);

            \$upCode = \$this->migrationSqlGenerator->generate(
                \$upSql,
                \$formatted,
                \$lineLength
            );

            if (\$upCode !== '') {
                \$up[] = \$upCode;
            }

            \$downSql = [\$this->platform->getDropTableSQL(\$table)];

            \$downCode = \$this->migrationSqlGenerator->generate(
                \$downSql,
                \$formatted,
                \$lineLength
            );

            if (\$downCode === '') {
                continue;
            }

            \$down[] = \$downCode;
        }

        if (count(\$up) === 0) {
            throw NoTablesFound::new();
        }

        \$up   = implode(\"\\n\", \$up);
        \$down = implode(\"\\n\", \$down);

        return \$this->migrationGenerator->generateMigration(
            \$versionNumber,
            \$up,
            \$down
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\Migrations\\Exception\\NoTablesFound;
use Doctrine\\Migrations\\Generator\\Generator;
use Doctrine\\Migrations\\Generator\\SqlGenerator;
use function count;
use function implode;

/**
 * The SchemaDumper class is responsible for dumping the current state of your database schema to a migration. This
 * is to be used in conjunction with the Rollup class.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Rollup
 */
class SchemaDumper
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var Generator */
    private \$migrationGenerator;

    /** @var SqlGenerator */
    private \$migrationSqlGenerator;

    public function __construct(
        AbstractPlatform \$platform,
        AbstractSchemaManager \$schemaManager,
        Generator \$migrationGenerator,
        SqlGenerator \$migrationSqlGenerator
    ) {
        \$this->platform              = \$platform;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationGenerator    = \$migrationGenerator;
        \$this->migrationSqlGenerator = \$migrationSqlGenerator;
    }

    /**
     * @throws NoTablesFound
     */
    public function dump(
        string \$versionNumber,
        bool \$formatted = false,
        int \$lineLength = 120
    ) : string {
        \$schema = \$this->schemaManager->createSchema();

        \$up   = [];
        \$down = [];

        foreach (\$schema->getTables() as \$table) {
            \$upSql = \$this->platform->getCreateTableSQL(\$table);

            \$upCode = \$this->migrationSqlGenerator->generate(
                \$upSql,
                \$formatted,
                \$lineLength
            );

            if (\$upCode !== '') {
                \$up[] = \$upCode;
            }

            \$downSql = [\$this->platform->getDropTableSQL(\$table)];

            \$downCode = \$this->migrationSqlGenerator->generate(
                \$downSql,
                \$formatted,
                \$lineLength
            );

            if (\$downCode === '') {
                continue;
            }

            \$down[] = \$downCode;
        }

        if (count(\$up) === 0) {
            throw NoTablesFound::new();
        }

        \$up   = implode(\"\\n\", \$up);
        \$down = implode(\"\\n\", \$down);

        return \$this->migrationGenerator->generateMigration(
            \$versionNumber,
            \$up,
            \$down
        );
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/SchemaDumper.php");
    }
}
