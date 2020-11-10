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

/* vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php */
class __TwigTemplate_02eb6f1f1f64d055a957f7fbe99fa1a0e064c5d6cf9c739526faac6b23a986c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Tests\\Command;

use Doctrine\\Bundle\\MigrationsBundle\\Command\\DoctrineCommand;
use Doctrine\\Migrations\\Configuration\\Configuration;
use org\\bovigo\\vfs\\vfsStream;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

class DoctrineCommandTest extends TestCase
{
    /** @var string */
    private \$migrationsDirectory;

    protected function setUp() : void
    {
        vfsStream::setup('migrations_directory');

        \$this->migrationsDirectory = vfsStream::url('migrations_directory');
    }

    public function testConfigureMigrations() : void
    {
        /** @var Configuration|MockObject \$configurationMock */
        \$configurationMock = \$this->createMock(Configuration::class);

        \$configurationMock->method('getMigrations')
            ->willReturn([]);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsDirectory')
            ->with(\$this->migrationsDirectory);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsNamespace')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setName')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsTableName')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnName')
            ->with('version');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnLength')
            ->with(255);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnLength')
            ->with(255);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsExecutedAtColumnName')
            ->with('executed_at');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsAreOrganizedByYear')
            ->with(true);

        \$configurationMock->expects(\$this->once())
            ->method('setAllOrNothing')
            ->with(false);

        DoctrineCommand::configureMigrations(\$this->getContainer(), \$configurationMock);
    }

    private function getContainer() : ContainerBuilder
    {
        return new ContainerBuilder(new ParameterBag([
            'doctrine_migrations.dir_name' => \$this->migrationsDirectory,
            'doctrine_migrations.namespace' => 'test',
            'doctrine_migrations.name' => 'test',
            'doctrine_migrations.table_name' => 'test',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 255,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.organize_migrations' => Configuration::VERSIONS_ORGANIZATION_BY_YEAR,
            'doctrine_migrations.custom_template' => null,
            'doctrine_migrations.all_or_nothing' => false,
        ]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Tests\\Command;

use Doctrine\\Bundle\\MigrationsBundle\\Command\\DoctrineCommand;
use Doctrine\\Migrations\\Configuration\\Configuration;
use org\\bovigo\\vfs\\vfsStream;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

class DoctrineCommandTest extends TestCase
{
    /** @var string */
    private \$migrationsDirectory;

    protected function setUp() : void
    {
        vfsStream::setup('migrations_directory');

        \$this->migrationsDirectory = vfsStream::url('migrations_directory');
    }

    public function testConfigureMigrations() : void
    {
        /** @var Configuration|MockObject \$configurationMock */
        \$configurationMock = \$this->createMock(Configuration::class);

        \$configurationMock->method('getMigrations')
            ->willReturn([]);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsDirectory')
            ->with(\$this->migrationsDirectory);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsNamespace')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setName')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsTableName')
            ->with('test');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnName')
            ->with('version');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnLength')
            ->with(255);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsColumnLength')
            ->with(255);

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsExecutedAtColumnName')
            ->with('executed_at');

        \$configurationMock->expects(\$this->once())
            ->method('setMigrationsAreOrganizedByYear')
            ->with(true);

        \$configurationMock->expects(\$this->once())
            ->method('setAllOrNothing')
            ->with(false);

        DoctrineCommand::configureMigrations(\$this->getContainer(), \$configurationMock);
    }

    private function getContainer() : ContainerBuilder
    {
        return new ContainerBuilder(new ParameterBag([
            'doctrine_migrations.dir_name' => \$this->migrationsDirectory,
            'doctrine_migrations.namespace' => 'test',
            'doctrine_migrations.name' => 'test',
            'doctrine_migrations.table_name' => 'test',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 255,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.organize_migrations' => Configuration::VERSIONS_ORGANIZATION_BY_YEAR,
            'doctrine_migrations.custom_template' => null,
            'doctrine_migrations.all_or_nothing' => false,
        ]));
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Tests/Command/DoctrineCommandTest.php");
    }
}
