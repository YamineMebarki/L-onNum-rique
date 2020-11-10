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

/* vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php */
class __TwigTemplate_ef2929a08635b6e588e15010b0df62a9cc9659e43f40aa2d7eeb775956f5bf11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php"));

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
 * Database tool allows you to easily create your configured databases.
 *
 * @final
 */
class CreateDatabaseDoctrineCommand extends DoctrineCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        \$this
            ->setName('doctrine:database:create')
            ->setDescription('Creates the configured database')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command')
            ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
            ->addOption('if-not-exists', null, InputOption::VALUE_NONE, 'Don\\'t trigger an error, when the database already exists')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command creates the default connections database:

    <info>php %command.full_name%</info>

You can also optionally specify the name of a connection to create the database for:

    <info>php %command.full_name% --connection=default</info>
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

        \$ifNotExists = \$input->getOption('if-not-exists');

        \$params = \$connection->getParams();
        if (isset(\$params['master'])) {
            \$params = \$params['master'];
        }

        // Cannot inject `shard` option in parent::getDoctrineConnection
        // cause it will try to connect to a non-existing database
        if (isset(\$params['shards'])) {
            \$shards = \$params['shards'];
            // Default select global
            \$params = array_merge(\$params, \$params['global']);
            unset(\$params['global']['dbname'], \$params['global']['path'], \$params['global']['url']);
            if (\$input->getOption('shard')) {
                foreach (\$shards as \$i => \$shard) {
                    if (\$shard['id'] === (int) \$input->getOption('shard')) {
                        // Select sharded database
                        \$params = array_merge(\$params, \$shard);
                        unset(\$params['shards'][\$i]['dbname'], \$params['shards'][\$i]['path'], \$params['shards'][\$i]['url'], \$params['id']);
                        break;
                    }
                }
            }
        }

        \$hasPath = isset(\$params['path']);
        \$name    = \$hasPath ? \$params['path'] : (isset(\$params['dbname']) ? \$params['dbname'] : false);
        if (! \$name) {
            throw new InvalidArgumentException(\"Connection does not contain a 'path' or 'dbname' parameter and cannot be created.\");
        }
        // Need to get rid of _every_ occurrence of dbname from connection configuration and we have already extracted all relevant info from url
        unset(\$params['dbname'], \$params['path'], \$params['url']);

        \$tmpConnection = DriverManager::getConnection(\$params);
        \$tmpConnection->connect(\$input->getOption('shard'));
        \$shouldNotCreateDatabase = \$ifNotExists && in_array(\$name, \$tmpConnection->getSchemaManager()->listDatabases());

        // Only quote if we don't have a path
        if (! \$hasPath) {
            \$name = \$tmpConnection->getDatabasePlatform()->quoteSingleIdentifier(\$name);
        }

        \$error = false;
        try {
            if (\$shouldNotCreateDatabase) {
                \$output->writeln(sprintf('<info>Database <comment>%s</comment> for connection named <comment>%s</comment> already exists. Skipped.</info>', \$name, \$connectionName));
            } else {
                \$tmpConnection->getSchemaManager()->createDatabase(\$name);
                \$output->writeln(sprintf('<info>Created database <comment>%s</comment> for connection named <comment>%s</comment></info>', \$name, \$connectionName));
            }
        } catch (Exception \$e) {
            \$output->writeln(sprintf('<error>Could not create database <comment>%s</comment> for connection named <comment>%s</comment></error>', \$name, \$connectionName));
            \$output->writeln(sprintf('<error>%s</error>', \$e->getMessage()));
            \$error = true;
        }

        \$tmpConnection->close();

        return \$error ? 1 : 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php";
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
 * Database tool allows you to easily create your configured databases.
 *
 * @final
 */
class CreateDatabaseDoctrineCommand extends DoctrineCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        \$this
            ->setName('doctrine:database:create')
            ->setDescription('Creates the configured database')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command')
            ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
            ->addOption('if-not-exists', null, InputOption::VALUE_NONE, 'Don\\'t trigger an error, when the database already exists')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command creates the default connections database:

    <info>php %command.full_name%</info>

You can also optionally specify the name of a connection to create the database for:

    <info>php %command.full_name% --connection=default</info>
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

        \$ifNotExists = \$input->getOption('if-not-exists');

        \$params = \$connection->getParams();
        if (isset(\$params['master'])) {
            \$params = \$params['master'];
        }

        // Cannot inject `shard` option in parent::getDoctrineConnection
        // cause it will try to connect to a non-existing database
        if (isset(\$params['shards'])) {
            \$shards = \$params['shards'];
            // Default select global
            \$params = array_merge(\$params, \$params['global']);
            unset(\$params['global']['dbname'], \$params['global']['path'], \$params['global']['url']);
            if (\$input->getOption('shard')) {
                foreach (\$shards as \$i => \$shard) {
                    if (\$shard['id'] === (int) \$input->getOption('shard')) {
                        // Select sharded database
                        \$params = array_merge(\$params, \$shard);
                        unset(\$params['shards'][\$i]['dbname'], \$params['shards'][\$i]['path'], \$params['shards'][\$i]['url'], \$params['id']);
                        break;
                    }
                }
            }
        }

        \$hasPath = isset(\$params['path']);
        \$name    = \$hasPath ? \$params['path'] : (isset(\$params['dbname']) ? \$params['dbname'] : false);
        if (! \$name) {
            throw new InvalidArgumentException(\"Connection does not contain a 'path' or 'dbname' parameter and cannot be created.\");
        }
        // Need to get rid of _every_ occurrence of dbname from connection configuration and we have already extracted all relevant info from url
        unset(\$params['dbname'], \$params['path'], \$params['url']);

        \$tmpConnection = DriverManager::getConnection(\$params);
        \$tmpConnection->connect(\$input->getOption('shard'));
        \$shouldNotCreateDatabase = \$ifNotExists && in_array(\$name, \$tmpConnection->getSchemaManager()->listDatabases());

        // Only quote if we don't have a path
        if (! \$hasPath) {
            \$name = \$tmpConnection->getDatabasePlatform()->quoteSingleIdentifier(\$name);
        }

        \$error = false;
        try {
            if (\$shouldNotCreateDatabase) {
                \$output->writeln(sprintf('<info>Database <comment>%s</comment> for connection named <comment>%s</comment> already exists. Skipped.</info>', \$name, \$connectionName));
            } else {
                \$tmpConnection->getSchemaManager()->createDatabase(\$name);
                \$output->writeln(sprintf('<info>Created database <comment>%s</comment> for connection named <comment>%s</comment></info>', \$name, \$connectionName));
            }
        } catch (Exception \$e) {
            \$output->writeln(sprintf('<error>Could not create database <comment>%s</comment> for connection named <comment>%s</comment></error>', \$name, \$connectionName));
            \$output->writeln(sprintf('<error>%s</error>', \$e->getMessage()));
            \$error = true;
        }

        \$tmpConnection->close();

        return \$error ? 1 : 0;
    }
}
", "vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php");
    }
}
