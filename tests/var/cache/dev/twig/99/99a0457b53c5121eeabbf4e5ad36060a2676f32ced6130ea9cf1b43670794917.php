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

/* vendor/symfony/web-server-bundle/Command/ServerStopCommand.php */
class __TwigTemplate_2c35d511914622386023f08b34b122801ec0e04aa4e95d1142fb9335cbe81f47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Command/ServerStopCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Command/ServerStopCommand.php"));

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
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Stops a background process running a local web server.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ServerStopCommand extends Command
{
    protected static \$defaultName = 'server:stop';

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
            ])
            ->setDescription('Stops the local web server that was started with the server:start command')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> stops the local web server:

  <info>php %command.full_name%</info>
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

        try {
            \$server = new WebServer(\$this->pidFileDirectory);
            \$server->stop(\$input->getOption('pidfile'));
            \$io->success('Stopped the web server.');
        } catch (\\Exception \$e) {
            \$io->error(\$e->getMessage());

            return 1;
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
        return "vendor/symfony/web-server-bundle/Command/ServerStopCommand.php";
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
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Stops a background process running a local web server.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ServerStopCommand extends Command
{
    protected static \$defaultName = 'server:stop';

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
            ])
            ->setDescription('Stops the local web server that was started with the server:start command')
            ->setHelp(<<<'EOF'
<info>%command.name%</info> stops the local web server:

  <info>php %command.full_name%</info>
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

        try {
            \$server = new WebServer(\$this->pidFileDirectory);
            \$server->stop(\$input->getOption('pidfile'));
            \$io->success('Stopped the web server.');
        } catch (\\Exception \$e) {
            \$io->error(\$e->getMessage());

            return 1;
        }

        return null;
    }
}
", "vendor/symfony/web-server-bundle/Command/ServerStopCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/Command/ServerStopCommand.php");
    }
}
