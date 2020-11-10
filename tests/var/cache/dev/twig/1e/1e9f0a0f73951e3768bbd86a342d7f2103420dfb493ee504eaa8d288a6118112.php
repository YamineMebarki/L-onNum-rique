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

/* vendor/symfony/framework-bundle/Command/RouterMatchCommand.php */
class __TwigTemplate_57697bcbf30ef641e034f4f14c31582b707b53bb43d0b5297d47ee7e67ae7505 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/RouterMatchCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/RouterMatchCommand.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * A console command to test route matching.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterMatchCommand extends Command
{
    protected static \$defaultName = 'router:match';

    private \$router;

    public function __construct(RouterInterface \$router)
    {
        parent::__construct();

        \$this->router = \$router;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('path_info', InputArgument::REQUIRED, 'A path info'),
                new InputOption('method', null, InputOption::VALUE_REQUIRED, 'Sets the HTTP method'),
                new InputOption('scheme', null, InputOption::VALUE_REQUIRED, 'Sets the URI scheme (usually http or https)'),
                new InputOption('host', null, InputOption::VALUE_REQUIRED, 'Sets the URI host'),
            ])
            ->setDescription('Helps debug routes by simulating a path info match')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> shows which routes match a given request and which don't and for what reason:

  <info>php %command.full_name% /foo</info>

or

  <info>php %command.full_name% /foo --method POST --scheme https --host symfony.com --verbose</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$context = \$this->router->getContext();
        if (null !== \$method = \$input->getOption('method')) {
            \$context->setMethod(\$method);
        }
        if (null !== \$scheme = \$input->getOption('scheme')) {
            \$context->setScheme(\$scheme);
        }
        if (null !== \$host = \$input->getOption('host')) {
            \$context->setHost(\$host);
        }

        \$matcher = new TraceableUrlMatcher(\$this->router->getRouteCollection(), \$context);

        \$traces = \$matcher->getTraces(\$input->getArgument('path_info'));

        \$io->newLine();

        \$matches = false;
        foreach (\$traces as \$trace) {
            if (TraceableUrlMatcher::ROUTE_ALMOST_MATCHES == \$trace['level']) {
                \$io->text(sprintf('Route <info>\"%s\"</> almost matches but %s', \$trace['name'], lcfirst(\$trace['log'])));
            } elseif (TraceableUrlMatcher::ROUTE_MATCHES == \$trace['level']) {
                \$io->success(sprintf('Route \"%s\" matches', \$trace['name']));

                \$routerDebugCommand = \$this->getApplication()->find('debug:router');
                \$routerDebugCommand->run(new ArrayInput(['name' => \$trace['name']]), \$output);

                \$matches = true;
            } elseif (\$input->getOption('verbose')) {
                \$io->text(sprintf('Route \"%s\" does not match: %s', \$trace['name'], \$trace['log']));
            }
        }

        if (!\$matches) {
            \$io->error(sprintf('None of the routes match the path \"%s\"', \$input->getArgument('path_info')));

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
        return "vendor/symfony/framework-bundle/Command/RouterMatchCommand.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * A console command to test route matching.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterMatchCommand extends Command
{
    protected static \$defaultName = 'router:match';

    private \$router;

    public function __construct(RouterInterface \$router)
    {
        parent::__construct();

        \$this->router = \$router;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('path_info', InputArgument::REQUIRED, 'A path info'),
                new InputOption('method', null, InputOption::VALUE_REQUIRED, 'Sets the HTTP method'),
                new InputOption('scheme', null, InputOption::VALUE_REQUIRED, 'Sets the URI scheme (usually http or https)'),
                new InputOption('host', null, InputOption::VALUE_REQUIRED, 'Sets the URI host'),
            ])
            ->setDescription('Helps debug routes by simulating a path info match')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> shows which routes match a given request and which don't and for what reason:

  <info>php %command.full_name% /foo</info>

or

  <info>php %command.full_name% /foo --method POST --scheme https --host symfony.com --verbose</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$context = \$this->router->getContext();
        if (null !== \$method = \$input->getOption('method')) {
            \$context->setMethod(\$method);
        }
        if (null !== \$scheme = \$input->getOption('scheme')) {
            \$context->setScheme(\$scheme);
        }
        if (null !== \$host = \$input->getOption('host')) {
            \$context->setHost(\$host);
        }

        \$matcher = new TraceableUrlMatcher(\$this->router->getRouteCollection(), \$context);

        \$traces = \$matcher->getTraces(\$input->getArgument('path_info'));

        \$io->newLine();

        \$matches = false;
        foreach (\$traces as \$trace) {
            if (TraceableUrlMatcher::ROUTE_ALMOST_MATCHES == \$trace['level']) {
                \$io->text(sprintf('Route <info>\"%s\"</> almost matches but %s', \$trace['name'], lcfirst(\$trace['log'])));
            } elseif (TraceableUrlMatcher::ROUTE_MATCHES == \$trace['level']) {
                \$io->success(sprintf('Route \"%s\" matches', \$trace['name']));

                \$routerDebugCommand = \$this->getApplication()->find('debug:router');
                \$routerDebugCommand->run(new ArrayInput(['name' => \$trace['name']]), \$output);

                \$matches = true;
            } elseif (\$input->getOption('verbose')) {
                \$io->text(sprintf('Route \"%s\" does not match: %s', \$trace['name'], \$trace['log']));
            }
        }

        if (!\$matches) {
            \$io->error(sprintf('None of the routes match the path \"%s\"', \$input->getArgument('path_info')));

            return 1;
        }

        return null;
    }
}
", "vendor/symfony/framework-bundle/Command/RouterMatchCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php");
    }
}
