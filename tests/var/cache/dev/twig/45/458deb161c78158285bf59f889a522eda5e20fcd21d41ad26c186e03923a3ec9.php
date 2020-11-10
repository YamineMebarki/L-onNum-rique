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

/* vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php */
class __TwigTemplate_3bafb6d11d80715b3ca38d09b89d98192adce1eaf3929b395406355a9db10da9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Command;

use Doctrine\\Bundle\\DoctrineBundle\\Command\\DoctrineCommand;
use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;
use Doctrine\\Common\\DataFixtures\\Executor\\ORMExecutor;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use LogicException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use const E_USER_DEPRECATED;
use function implode;
use function method_exists;
use function sprintf;
use function trigger_error;

/**
 * Load data fixtures from bundles.
 */
class LoadDataFixturesDoctrineCommand extends DoctrineCommand
{
    /** @var SymfonyFixturesLoader */
    private \$fixturesLoader;

    public function __construct(SymfonyFixturesLoader \$fixturesLoader, ?ManagerRegistry \$doctrine = null)
    {
        if (\$doctrine === null) {
            @trigger_error(sprintf(
                'The \"%s\" constructor expects a \"%s\" instance as second argument, not passing it will throw a \\TypeError in DoctrineFixturesBundle 4.0.',
                static::class,
                ManagerRegistry::class
            ), E_USER_DEPRECATED);
        }

        // @todo The method_exists call can be removed once the DoctrineBundle dependency has been bumped to at least 1.10
        parent::__construct(method_exists(\$this, 'getDoctrine') ? \$doctrine : null);

        \$this->fixturesLoader = \$fixturesLoader;
    }

    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    protected function configure()
    {
        \$this
            ->setName('doctrine:fixtures:load')
            ->setDescription('Load data fixtures to your database')
            ->addOption('append', null, InputOption::VALUE_NONE, 'Append the data fixtures instead of deleting all data from the database first.')
            ->addOption('group', null, InputOption::VALUE_IS_ARRAY|InputOption::VALUE_REQUIRED, 'Only load fixtures that belong to this group')
            ->addOption('em', null, InputOption::VALUE_REQUIRED, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.')
            ->addOption('purge-with-truncate', null, InputOption::VALUE_NONE, 'Purge data by using a database-level TRUNCATE statement')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command loads data fixtures from your application:

  <info>php %command.full_name%</info>

Fixtures are services that are tagged with <comment>doctrine.fixture.orm</comment>.

If you want to append the fixtures instead of flushing the database first you can use the <comment>--append</comment> option:

  <info>php %command.full_name%</info> <comment>--append</comment>

By default Doctrine Data Fixtures uses DELETE statements to drop the existing rows from the database.
If you want to use a TRUNCATE statement instead you can use the <comment>--purge-with-truncate</comment> flag:

  <info>php %command.full_name%</info> <comment>--purge-with-truncate</comment>

To execute only fixtures that live in a certain group, use:

  <info>php %command.full_name%</info> <comment>--group=group1</comment>

EOT
        );
    }

    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        // @todo The method_exists call can be removed once the DoctrineBundle dependency has been bumped to at least 1.10
        if (method_exists(\$this, 'getDoctrine')) {
            \$doctrine = \$this->getDoctrine();
        } else {
            /** @var ManagerRegistry \$doctrine */
            \$doctrine = \$this->getContainer()->get('doctrine');
        }

        \$em = \$doctrine->getManager(\$input->getOption('em'));

        if (! \$input->getOption('append')) {
            if (! \$ui->confirm(sprintf('Careful, database \"%s\" will be purged. Do you want to continue?', \$em->getConnection()->getDatabase()), ! \$input->isInteractive())) {
                return;
            }
        }

        if (\$input->getOption('shard')) {
            if (! \$em->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(
                    'Connection of EntityManager \"%s\" must implement shards configuration.',
                    \$input->getOption('em')
                ));
            }

            \$em->getConnection()->connect(\$input->getOption('shard'));
        }

        \$groups   = \$input->getOption('group');
        \$fixtures = \$this->fixturesLoader->getFixtures(\$groups);
        if (! \$fixtures) {
            \$message = 'Could not find any fixture services to load';

            if (! empty(\$groups)) {
                \$message .= sprintf(' in the groups (%s)', implode(', ', \$groups));
            }

            \$ui->error(\$message . '.');

            return 1;
        }
        \$purger = new ORMPurger(\$em);
        \$purger->setPurgeMode(\$input->getOption('purge-with-truncate') ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE);
        \$executor = new ORMExecutor(\$em, \$purger);
        \$executor->setLogger(static function (\$message) use (\$ui) : void {
            \$ui->text(sprintf('  <comment>></comment> <info>%s</info>', \$message));
        });
        \$executor->execute(\$fixtures, \$input->getOption('append'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Command;

use Doctrine\\Bundle\\DoctrineBundle\\Command\\DoctrineCommand;
use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;
use Doctrine\\Common\\DataFixtures\\Executor\\ORMExecutor;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use LogicException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use const E_USER_DEPRECATED;
use function implode;
use function method_exists;
use function sprintf;
use function trigger_error;

/**
 * Load data fixtures from bundles.
 */
class LoadDataFixturesDoctrineCommand extends DoctrineCommand
{
    /** @var SymfonyFixturesLoader */
    private \$fixturesLoader;

    public function __construct(SymfonyFixturesLoader \$fixturesLoader, ?ManagerRegistry \$doctrine = null)
    {
        if (\$doctrine === null) {
            @trigger_error(sprintf(
                'The \"%s\" constructor expects a \"%s\" instance as second argument, not passing it will throw a \\TypeError in DoctrineFixturesBundle 4.0.',
                static::class,
                ManagerRegistry::class
            ), E_USER_DEPRECATED);
        }

        // @todo The method_exists call can be removed once the DoctrineBundle dependency has been bumped to at least 1.10
        parent::__construct(method_exists(\$this, 'getDoctrine') ? \$doctrine : null);

        \$this->fixturesLoader = \$fixturesLoader;
    }

    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    protected function configure()
    {
        \$this
            ->setName('doctrine:fixtures:load')
            ->setDescription('Load data fixtures to your database')
            ->addOption('append', null, InputOption::VALUE_NONE, 'Append the data fixtures instead of deleting all data from the database first.')
            ->addOption('group', null, InputOption::VALUE_IS_ARRAY|InputOption::VALUE_REQUIRED, 'Only load fixtures that belong to this group')
            ->addOption('em', null, InputOption::VALUE_REQUIRED, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.')
            ->addOption('purge-with-truncate', null, InputOption::VALUE_NONE, 'Purge data by using a database-level TRUNCATE statement')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command loads data fixtures from your application:

  <info>php %command.full_name%</info>

Fixtures are services that are tagged with <comment>doctrine.fixture.orm</comment>.

If you want to append the fixtures instead of flushing the database first you can use the <comment>--append</comment> option:

  <info>php %command.full_name%</info> <comment>--append</comment>

By default Doctrine Data Fixtures uses DELETE statements to drop the existing rows from the database.
If you want to use a TRUNCATE statement instead you can use the <comment>--purge-with-truncate</comment> flag:

  <info>php %command.full_name%</info> <comment>--purge-with-truncate</comment>

To execute only fixtures that live in a certain group, use:

  <info>php %command.full_name%</info> <comment>--group=group1</comment>

EOT
        );
    }

    // phpcs:ignore SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        // @todo The method_exists call can be removed once the DoctrineBundle dependency has been bumped to at least 1.10
        if (method_exists(\$this, 'getDoctrine')) {
            \$doctrine = \$this->getDoctrine();
        } else {
            /** @var ManagerRegistry \$doctrine */
            \$doctrine = \$this->getContainer()->get('doctrine');
        }

        \$em = \$doctrine->getManager(\$input->getOption('em'));

        if (! \$input->getOption('append')) {
            if (! \$ui->confirm(sprintf('Careful, database \"%s\" will be purged. Do you want to continue?', \$em->getConnection()->getDatabase()), ! \$input->isInteractive())) {
                return;
            }
        }

        if (\$input->getOption('shard')) {
            if (! \$em->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(
                    'Connection of EntityManager \"%s\" must implement shards configuration.',
                    \$input->getOption('em')
                ));
            }

            \$em->getConnection()->connect(\$input->getOption('shard'));
        }

        \$groups   = \$input->getOption('group');
        \$fixtures = \$this->fixturesLoader->getFixtures(\$groups);
        if (! \$fixtures) {
            \$message = 'Could not find any fixture services to load';

            if (! empty(\$groups)) {
                \$message .= sprintf(' in the groups (%s)', implode(', ', \$groups));
            }

            \$ui->error(\$message . '.');

            return 1;
        }
        \$purger = new ORMPurger(\$em);
        \$purger->setPurgeMode(\$input->getOption('purge-with-truncate') ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE);
        \$executor = new ORMExecutor(\$em, \$purger);
        \$executor->setLogger(static function (\$message) use (\$ui) : void {
            \$ui->text(sprintf('  <comment>></comment> <info>%s</info>', \$message));
        });
        \$executor->execute(\$fixtures, \$input->getOption('append'));
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php");
    }
}
