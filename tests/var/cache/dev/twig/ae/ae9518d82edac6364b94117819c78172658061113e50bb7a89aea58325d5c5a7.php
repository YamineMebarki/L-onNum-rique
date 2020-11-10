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

/* vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php */
class __TwigTemplate_206511063ebe0445147fac7515b287431d60579d82ac2a22e66fcf6ff5ebd40f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php"));

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

namespace Symfony\\Bundle\\WebServerBundle\\Command;

use Symfony\\Bundle\\WebServerBundle\\WebServer;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Shows the status of a process that is running PHP's built-in web server in
 * the background.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ServerStatusCommand extends Command
{
    protected static \$defaultName = 'server:status';

    private \$pidFileDirectory;

    public function __construct(string \$pidFileDirectory = null)
    {
        \$this->pidFileDirectory = \$pidFileDirectory;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputOption('pidfile', null, InputOption::VALUE_REQUIRED, 'PID file'),
                new InputOption('filter', null, InputOption::VALUE_REQUIRED, 'The value to display (one of port, host, or address)'),
            ])
            ->setDescription('Outputs the status of the local web server')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> shows the details of the given local web
server, such as the address and port where it is listening to:

  <info>php %command.full_name%</info>

To get the information as a machine readable format, use the
<comment>--filter</> option:

<info>php %command.full_name% --filter=port</info>

Supported values are <comment>port</>, <comment>host</>, and <comment>address</>.
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);
        \$server = new WebServer(\$this->pidFileDirectory);
        if (\$filter = \$input->getOption('filter')) {
            if (\$server->isRunning(\$input->getOption('pidfile'))) {
                list(\$host, \$port) = explode(':', \$address = \$server->getAddress(\$input->getOption('pidfile')));
                if ('address' === \$filter) {
                    \$output->write(\$address);
                } elseif ('host' === \$filter) {
                    \$output->write(\$host);
                } elseif ('port' === \$filter) {
                    \$output->write(\$port);
                } else {
                    throw new InvalidArgumentException(sprintf('\"%s\" is not a valid filter.', \$filter));
                }
            } else {
                return 1;
            }
        } else {
            if (\$server->isRunning(\$input->getOption('pidfile'))) {
                \$io->success(sprintf('Web server still listening on http://%s', \$server->getAddress(\$input->getOption('pidfile'))));
            } else {
                \$io->warning('No web server is listening.');

                return 1;
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php";
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

namespace Symfony\\Bundle\\WebServerBundle\\Command;

use Symfony\\Bundle\\WebServerBundle\\WebServer;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Shows the status of a process that is running PHP's built-in web server in
 * the background.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ServerStatusCommand extends Command
{
    protected static \$defaultName = 'server:status';

    private \$pidFileDirectory;

    public function __construct(string \$pidFileDirectory = null)
    {
        \$this->pidFileDirectory = \$pidFileDirectory;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputOption('pidfile', null, InputOption::VALUE_REQUIRED, 'PID file'),
                new InputOption('filter', null, InputOption::VALUE_REQUIRED, 'The value to display (one of port, host, or address)'),
            ])
            ->setDescription('Outputs the status of the local web server')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> shows the details of the given local web
server, such as the address and port where it is listening to:

  <info>php %command.full_name%</info>

To get the information as a machine readable format, use the
<comment>--filter</> option:

<info>php %command.full_name% --filter=port</info>

Supported values are <comment>port</>, <comment>host</>, and <comment>address</>.
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output instanceof ConsoleOutputInterface ? \$output->getErrorOutput() : \$output);
        \$server = new WebServer(\$this->pidFileDirectory);
        if (\$filter = \$input->getOption('filter')) {
            if (\$server->isRunning(\$input->getOption('pidfile'))) {
                list(\$host, \$port) = explode(':', \$address = \$server->getAddress(\$input->getOption('pidfile')));
                if ('address' === \$filter) {
                    \$output->write(\$address);
                } elseif ('host' === \$filter) {
                    \$output->write(\$host);
                } elseif ('port' === \$filter) {
                    \$output->write(\$port);
                } else {
                    throw new InvalidArgumentException(sprintf('\"%s\" is not a valid filter.', \$filter));
                }
            } else {
                return 1;
            }
        } else {
            if (\$server->isRunning(\$input->getOption('pidfile'))) {
                \$io->success(sprintf('Web server still listening on http://%s', \$server->getAddress(\$input->getOption('pidfile'))));
            } else {
                \$io->warning('No web server is listening.');

                return 1;
            }
        }

        return null;
    }
}
", "vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php");
    }
}
