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

/* vendor/symfony/framework-bundle/Command/RouterDebugCommand.php */
class __TwigTemplate_8a0132f3be6c352d9d5ad3f6146d2a60afe6f21f86bb85a09713228605cecdda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/RouterDebugCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/RouterDebugCommand.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Console\\Helper\\DescriptorHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * A console command for retrieving information about routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @final
 */
class RouterDebugCommand extends Command
{
    protected static \$defaultName = 'debug:router';
    private \$router;
    private \$fileLinkFormatter;

    public function __construct(RouterInterface \$router, FileLinkFormatter \$fileLinkFormatter = null)
    {
        parent::__construct();

        \$this->router = \$router;
        \$this->fileLinkFormatter = \$fileLinkFormatter;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'A route name'),
                new InputOption('show-controllers', null, InputOption::VALUE_NONE, 'Show assigned controllers in overview'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format (txt, xml, json, or md)', 'txt'),
                new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw route(s)'),
            ])
            ->setDescription('Displays current routes for an application')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> displays the configured routes:

  <info>php %command.full_name%</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException When route does not exist
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$name = \$input->getArgument('name');
        \$helper = new DescriptorHelper(\$this->fileLinkFormatter);
        \$routes = \$this->router->getRouteCollection();

        if (\$name) {
            if (!(\$route = \$routes->get(\$name)) && \$matchingRoutes = \$this->findRouteNameContaining(\$name, \$routes)) {
                \$default = 1 === \\count(\$matchingRoutes) ? \$matchingRoutes[0] : null;
                \$name = \$io->choice('Select one of the matching routes', \$matchingRoutes, \$default);
                \$route = \$routes->get(\$name);
            }

            if (!\$route) {
                throw new InvalidArgumentException(sprintf('The route \"%s\" does not exist.', \$name));
            }

            \$helper->describe(\$io, \$route, [
                'format' => \$input->getOption('format'),
                'raw_text' => \$input->getOption('raw'),
                'name' => \$name,
                'output' => \$io,
            ]);
        } else {
            \$helper->describe(\$io, \$routes, [
                'format' => \$input->getOption('format'),
                'raw_text' => \$input->getOption('raw'),
                'show_controllers' => \$input->getOption('show-controllers'),
                'output' => \$io,
            ]);
        }
    }

    private function findRouteNameContaining(string \$name, RouteCollection \$routes): array
    {
        \$foundRoutesNames = [];
        foreach (\$routes as \$routeName => \$route) {
            if (false !== stripos(\$routeName, \$name)) {
                \$foundRoutesNames[] = \$routeName;
            }
        }

        return \$foundRoutesNames;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/RouterDebugCommand.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Console\\Helper\\DescriptorHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * A console command for retrieving information about routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @final
 */
class RouterDebugCommand extends Command
{
    protected static \$defaultName = 'debug:router';
    private \$router;
    private \$fileLinkFormatter;

    public function __construct(RouterInterface \$router, FileLinkFormatter \$fileLinkFormatter = null)
    {
        parent::__construct();

        \$this->router = \$router;
        \$this->fileLinkFormatter = \$fileLinkFormatter;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'A route name'),
                new InputOption('show-controllers', null, InputOption::VALUE_NONE, 'Show assigned controllers in overview'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format (txt, xml, json, or md)', 'txt'),
                new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw route(s)'),
            ])
            ->setDescription('Displays current routes for an application')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> displays the configured routes:

  <info>php %command.full_name%</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException When route does not exist
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$name = \$input->getArgument('name');
        \$helper = new DescriptorHelper(\$this->fileLinkFormatter);
        \$routes = \$this->router->getRouteCollection();

        if (\$name) {
            if (!(\$route = \$routes->get(\$name)) && \$matchingRoutes = \$this->findRouteNameContaining(\$name, \$routes)) {
                \$default = 1 === \\count(\$matchingRoutes) ? \$matchingRoutes[0] : null;
                \$name = \$io->choice('Select one of the matching routes', \$matchingRoutes, \$default);
                \$route = \$routes->get(\$name);
            }

            if (!\$route) {
                throw new InvalidArgumentException(sprintf('The route \"%s\" does not exist.', \$name));
            }

            \$helper->describe(\$io, \$route, [
                'format' => \$input->getOption('format'),
                'raw_text' => \$input->getOption('raw'),
                'name' => \$name,
                'output' => \$io,
            ]);
        } else {
            \$helper->describe(\$io, \$routes, [
                'format' => \$input->getOption('format'),
                'raw_text' => \$input->getOption('raw'),
                'show_controllers' => \$input->getOption('show-controllers'),
                'output' => \$io,
            ]);
        }
    }

    private function findRouteNameContaining(string \$name, RouteCollection \$routes): array
    {
        \$foundRoutesNames = [];
        foreach (\$routes as \$routeName => \$route) {
            if (false !== stripos(\$routeName, \$name)) {
                \$foundRoutesNames[] = \$routeName;
            }
        }

        return \$foundRoutesNames;
    }
}
", "vendor/symfony/framework-bundle/Command/RouterDebugCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php");
    }
}
