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

/* vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php */
class __TwigTemplate_c2b3591ad707654683dc72bfb77bb4a5bd55542c5d1bfa79e971a846f381598d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\DBAL\\DriverManager;
use Exception;
use InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Database tool allows you to easily drop your configured databases.
 *
 * @final
 */
class DropDatabaseDoctrineCommand extends DoctrineCommand
{
    const RETURN_CODE_NOT_DROP = 1;

    const RETURN_CODE_NO_FORCE = 2;

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        \$this
            ->setName('doctrine:database:drop')
            ->setDescription('Drops the configured database')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command')
            ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
            ->addOption('if-exists', null, InputOption::VALUE_NONE, 'Don\\'t trigger an error, when the database doesn\\'t exist')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Set this parameter to execute this action')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command drops the default connections database:

    <info>php %command.full_name%</info>

The <info>--force</info> parameter has to be used to actually drop the database.

You can also optionally specify the name of a connection to drop the database for:

    <info>php %command.full_name% --connection=default</info>

<error>Be careful: All data in a given database will be lost when executing this command.</error>
EOT
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$connectionName = \$input->getOption('connection');
        if (empty(\$connectionName)) {
            \$connectionName = \$this->getDoctrine()->getDefaultConnectionName();
        }
        \$connection = \$this->getDoctrineConnection(\$connectionName);

        \$ifExists = \$input->getOption('if-exists');

        \$params = \$connection->getParams();
        if (isset(\$params['master'])) {
            \$params = \$params['master'];
        }

        if (isset(\$params['shards'])) {
            \$shards = \$params['shards'];
            // Default select global
            \$params = array_merge(\$params, \$params['global']);
            if (\$input->getOption('shard')) {
                foreach (\$shards as \$shard) {
                    if (\$shard['id'] === (int) \$input->getOption('shard')) {
                        // Select sharded database
                        \$params = \$shard;
                        unset(\$params['id']);
                        break;
                    }
                }
            }
        }

        \$name = isset(\$params['path']) ? \$params['path'] : (isset(\$params['dbname']) ? \$params['dbname'] : false);
        if (! \$name) {
            throw new InvalidArgumentException(\"Connection does not contain a 'path' or 'dbname' parameter and cannot be dropped.\");
        }
        unset(\$params['dbname'], \$params['url']);

        if (! \$input->getOption('force')) {
            \$output->writeln('<error>ATTENTION:</error> This operation should not be executed in a production environment.');
            \$output->writeln('');
            \$output->writeln(sprintf('<info>Would drop the database <comment>%s</comment> for connection named <comment>%s</comment>.</info>', \$name, \$connectionName));
            \$output->writeln('Please run the operation with --force to execute');
            \$output->writeln('<error>All data will be lost!</error>');

            return self::RETURN_CODE_NO_FORCE;
        }

        // Reopen connection without database name set
        // as some vendors do not allow dropping the database connected to.
        \$connection->close();
        \$connection         = DriverManager::getConnection(\$params);
        \$shouldDropDatabase = ! \$ifExists || in_array(\$name, \$connection->getSchemaManager()->listDatabases());

        // Only quote if we don't have a path
        if (! isset(\$params['path'])) {
            \$name = \$connection->getDatabasePlatform()->quoteSingleIdentifier(\$name);
        }

        try {
            if (\$shouldDropDatabase) {
                \$connection->getSchemaManager()->dropDatabase(\$name);
                \$output->writeln(sprintf('<info>Dropped database <comment>%s</comment> for connection named <comment>%s</comment></info>', \$name, \$connectionName));
            } else {
                \$output->writeln(sprintf('<info>Database <comment>%s</comment> for connection named <comment>%s</comment> doesn\\'t exist. Skipped.</info>', \$name, \$connectionName));
            }
        } catch (Exception \$e) {
            \$output->writeln(sprintf('<error>Could not drop database <comment>%s</comment> for connection named <comment>%s</comment></error>', \$name, \$connectionName));
            \$output->writeln(sprintf('<error>%s</error>', \$e->getMessage()));

            return self::RETURN_CODE_NOT_DROP;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\DBAL\\DriverManager;
use Exception;
use InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Database tool allows you to easily drop your configured databases.
 *
 * @final
 */
class DropDatabaseDoctrineCommand extends DoctrineCommand
{
    const RETURN_CODE_NOT_DROP = 1;

    const RETURN_CODE_NO_FORCE = 2;

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        \$this
            ->setName('doctrine:database:drop')
            ->setDescription('Drops the configured database')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command')
            ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
            ->addOption('if-exists', null, InputOption::VALUE_NONE, 'Don\\'t trigger an error, when the database doesn\\'t exist')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Set this parameter to execute this action')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command drops the default connections database:

    <info>php %command.full_name%</info>

The <info>--force</info> parameter has to be used to actually drop the database.

You can also optionally specify the name of a connection to drop the database for:

    <info>php %command.full_name% --connection=default</info>

<error>Be careful: All data in a given database will be lost when executing this command.</error>
EOT
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$connectionName = \$input->getOption('connection');
        if (empty(\$connectionName)) {
            \$connectionName = \$this->getDoctrine()->getDefaultConnectionName();
        }
        \$connection = \$this->getDoctrineConnection(\$connectionName);

        \$ifExists = \$input->getOption('if-exists');

        \$params = \$connection->getParams();
        if (isset(\$params['master'])) {
            \$params = \$params['master'];
        }

        if (isset(\$params['shards'])) {
            \$shards = \$params['shards'];
            // Default select global
            \$params = array_merge(\$params, \$params['global']);
            if (\$input->getOption('shard')) {
                foreach (\$shards as \$shard) {
                    if (\$shard['id'] === (int) \$input->getOption('shard')) {
                        // Select sharded database
                        \$params = \$shard;
                        unset(\$params['id']);
                        break;
                    }
                }
            }
        }

        \$name = isset(\$params['path']) ? \$params['path'] : (isset(\$params['dbname']) ? \$params['dbname'] : false);
        if (! \$name) {
            throw new InvalidArgumentException(\"Connection does not contain a 'path' or 'dbname' parameter and cannot be dropped.\");
        }
        unset(\$params['dbname'], \$params['url']);

        if (! \$input->getOption('force')) {
            \$output->writeln('<error>ATTENTION:</error> This operation should not be executed in a production environment.');
            \$output->writeln('');
            \$output->writeln(sprintf('<info>Would drop the database <comment>%s</comment> for connection named <comment>%s</comment>.</info>', \$name, \$connectionName));
            \$output->writeln('Please run the operation with --force to execute');
            \$output->writeln('<error>All data will be lost!</error>');

            return self::RETURN_CODE_NO_FORCE;
        }

        // Reopen connection without database name set
        // as some vendors do not allow dropping the database connected to.
        \$connection->close();
        \$connection         = DriverManager::getConnection(\$params);
        \$shouldDropDatabase = ! \$ifExists || in_array(\$name, \$connection->getSchemaManager()->listDatabases());

        // Only quote if we don't have a path
        if (! isset(\$params['path'])) {
            \$name = \$connection->getDatabasePlatform()->quoteSingleIdentifier(\$name);
        }

        try {
            if (\$shouldDropDatabase) {
                \$connection->getSchemaManager()->dropDatabase(\$name);
                \$output->writeln(sprintf('<info>Dropped database <comment>%s</comment> for connection named <comment>%s</comment></info>', \$name, \$connectionName));
            } else {
                \$output->writeln(sprintf('<info>Database <comment>%s</comment> for connection named <comment>%s</comment> doesn\\'t exist. Skipped.</info>', \$name, \$connectionName));
            }
        } catch (Exception \$e) {
            \$output->writeln(sprintf('<error>Could not drop database <comment>%s</comment> for connection named <comment>%s</comment></error>', \$name, \$connectionName));
            \$output->writeln(sprintf('<error>%s</error>', \$e->getMessage()));

            return self::RETURN_CODE_NOT_DROP;
        }
    }
}
", "vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php");
    }
}
