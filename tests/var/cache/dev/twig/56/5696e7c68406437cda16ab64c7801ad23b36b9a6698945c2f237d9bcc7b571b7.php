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

/* vendor/symfony/var-dumper/Command/ServerDumpCommand.php */
class __TwigTemplate_373e9932a9049e4a68b5e9fb288eec306456ec9191d6f570b762b7415d4b1c8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Command/ServerDumpCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Command/ServerDumpCommand.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarDumper\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

/**
 * Starts a dump server to collect and output dumps on a single place with multiple formats support.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class ServerDumpCommand extends Command
{
    protected static \$defaultName = 'server:dump';

    private \$server;

    /** @var DumpDescriptorInterface[] */
    private \$descriptors;

    public function __construct(DumpServer \$server, array \$descriptors = [])
    {
        \$this->server = \$server;
        \$this->descriptors = \$descriptors + [
            'cli' => new CliDescriptor(new CliDumper()),
            'html' => new HtmlDescriptor(new HtmlDumper()),
        ];

        parent::__construct();
    }

    protected function configure()
    {
        \$availableFormats = implode(', ', array_keys(\$this->descriptors));

        \$this
            ->addOption('format', null, InputOption::VALUE_REQUIRED, sprintf('The output format (%s)', \$availableFormats), 'cli')
            ->setDescription('Starts a dump server that collects and displays dumps in a single place')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> starts a dump server that collects and displays
dumps in a single place for debugging you application:

  <info>php %command.full_name%</info>

You can consult dumped data in HTML format in your browser by providing the <comment>--format=html</comment> option
and redirecting the output to a file:

  <info>php %command.full_name% --format=\"html\" > dump.html</info>

EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$format = \$input->getOption('format');

        if (!\$descriptor = \$this->descriptors[\$format] ?? null) {
            throw new InvalidArgumentException(sprintf('Unsupported format \"%s\".', \$format));
        }

        \$errorIo = \$io->getErrorStyle();
        \$errorIo->title('Symfony Var Dumper Server');

        \$this->server->start();

        \$errorIo->success(sprintf('Server listening on %s', \$this->server->getHost()));
        \$errorIo->comment('Quit the server with CONTROL-C.');

        \$this->server->listen(function (Data \$data, array \$context, int \$clientId) use (\$descriptor, \$io) {
            \$descriptor->describe(\$io, \$data, \$context, \$clientId);
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Command/ServerDumpCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarDumper\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

/**
 * Starts a dump server to collect and output dumps on a single place with multiple formats support.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class ServerDumpCommand extends Command
{
    protected static \$defaultName = 'server:dump';

    private \$server;

    /** @var DumpDescriptorInterface[] */
    private \$descriptors;

    public function __construct(DumpServer \$server, array \$descriptors = [])
    {
        \$this->server = \$server;
        \$this->descriptors = \$descriptors + [
            'cli' => new CliDescriptor(new CliDumper()),
            'html' => new HtmlDescriptor(new HtmlDumper()),
        ];

        parent::__construct();
    }

    protected function configure()
    {
        \$availableFormats = implode(', ', array_keys(\$this->descriptors));

        \$this
            ->addOption('format', null, InputOption::VALUE_REQUIRED, sprintf('The output format (%s)', \$availableFormats), 'cli')
            ->setDescription('Starts a dump server that collects and displays dumps in a single place')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> starts a dump server that collects and displays
dumps in a single place for debugging you application:

  <info>php %command.full_name%</info>

You can consult dumped data in HTML format in your browser by providing the <comment>--format=html</comment> option
and redirecting the output to a file:

  <info>php %command.full_name% --format=\"html\" > dump.html</info>

EOF
            )
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$format = \$input->getOption('format');

        if (!\$descriptor = \$this->descriptors[\$format] ?? null) {
            throw new InvalidArgumentException(sprintf('Unsupported format \"%s\".', \$format));
        }

        \$errorIo = \$io->getErrorStyle();
        \$errorIo->title('Symfony Var Dumper Server');

        \$this->server->start();

        \$errorIo->success(sprintf('Server listening on %s', \$this->server->getHost()));
        \$errorIo->comment('Quit the server with CONTROL-C.');

        \$this->server->listen(function (Data \$data, array \$context, int \$clientId) use (\$descriptor, \$io) {
            \$descriptor->describe(\$io, \$data, \$context, \$clientId);
        });
    }
}
", "vendor/symfony/var-dumper/Command/ServerDumpCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Command/ServerDumpCommand.php");
    }
}