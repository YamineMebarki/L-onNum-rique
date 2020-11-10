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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php */
class __TwigTemplate_feece518f5101e7c8b11e3b4c58092c3e53f1aedfd846ee4c79be39e5dd647c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Tools\\Dumper;
use LogicException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function is_numeric;
use function stripos;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 */
class RunSqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:run-sql')
        ->setDescription('Executes arbitrary SQL directly from the command line.')
        ->setDefinition([
            new InputArgument('sql', InputArgument::REQUIRED, 'The SQL statement to execute.'),
            new InputOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of result set.', 7),
            new InputOption('force-fetch', null, InputOption::VALUE_NONE, 'Forces fetching the result.'),
        ])
        ->setHelp(<<<EOT
Executes arbitrary SQL directly from the command line.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$sql = \$input->getArgument('sql');

        if (\$sql === null) {
            throw new RuntimeException(\"Argument 'SQL' is required in order to execute this command correctly.\");
        }

        \$depth = \$input->getOption('depth');

        if (! is_numeric(\$depth)) {
            throw new LogicException(\"Option 'depth' must contains an integer value\");
        }

        if (stripos(\$sql, 'select') === 0 || \$input->getOption('force-fetch')) {
            \$resultSet = \$conn->fetchAll(\$sql);
        } else {
            \$resultSet = \$conn->executeUpdate(\$sql);
        }

        \$output->write(Dumper::dump(\$resultSet, (int) \$depth));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Tools\\Dumper;
use LogicException;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function is_numeric;
use function stripos;

/**
 * Task for executing arbitrary SQL that can come from a file or directly from
 * the command line.
 */
class RunSqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
        ->setName('dbal:run-sql')
        ->setDescription('Executes arbitrary SQL directly from the command line.')
        ->setDefinition([
            new InputArgument('sql', InputArgument::REQUIRED, 'The SQL statement to execute.'),
            new InputOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of result set.', 7),
            new InputOption('force-fetch', null, InputOption::VALUE_NONE, 'Forces fetching the result.'),
        ])
        ->setHelp(<<<EOT
Executes arbitrary SQL directly from the command line.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$conn = \$this->getHelper('db')->getConnection();

        \$sql = \$input->getArgument('sql');

        if (\$sql === null) {
            throw new RuntimeException(\"Argument 'SQL' is required in order to execute this command correctly.\");
        }

        \$depth = \$input->getOption('depth');

        if (! is_numeric(\$depth)) {
            throw new LogicException(\"Option 'depth' must contains an integer value\");
        }

        if (stripos(\$sql, 'select') === 0 || \$input->getOption('force-fetch')) {
            \$resultSet = \$conn->fetchAll(\$sql);
        } else {
            \$resultSet = \$conn->executeUpdate(\$sql);
        }

        \$output->write(Dumper::dump(\$resultSet, (int) \$depth));
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php");
    }
}
