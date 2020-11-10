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

/* vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php */
class __TwigTemplate_696b40918dd5f23ed718fba1d385d5d483b09b832f41a06bb3aab225de60ebbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php"));

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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

/**
 * A console command for retrieving information about event dispatcher.
 *
 * @author Matthieu Auger <mail@matthieuauger.com>
 *
 * @final
 */
class EventDispatcherDebugCommand extends Command
{
    protected static \$defaultName = 'debug:event-dispatcher';
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        parent::__construct();

        \$this->dispatcher = \$dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('event', InputArgument::OPTIONAL, 'An event name'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format  (txt, xml, json, or md)', 'txt'),
                new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw description'),
            ])
            ->setDescription('Displays configured listeners for an application')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command displays all configured listeners:

  <info>php %command.full_name%</info>

To get specific listeners for an event, specify its name:

  <info>php %command.full_name% kernel.request</info>
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$options = [];
        if (\$event = \$input->getArgument('event')) {
            if (!\$this->dispatcher->hasListeners(\$event)) {
                \$io->getErrorStyle()->warning(sprintf('The event \"%s\" does not have any registered listeners.', \$event));

                return;
            }

            \$options = ['event' => \$event];
        }

        \$helper = new DescriptorHelper();
        \$options['format'] = \$input->getOption('format');
        \$options['raw_text'] = \$input->getOption('raw');
        \$options['output'] = \$io;
        \$helper->describe(\$io, \$this->dispatcher, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php";
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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

/**
 * A console command for retrieving information about event dispatcher.
 *
 * @author Matthieu Auger <mail@matthieuauger.com>
 *
 * @final
 */
class EventDispatcherDebugCommand extends Command
{
    protected static \$defaultName = 'debug:event-dispatcher';
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        parent::__construct();

        \$this->dispatcher = \$dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('event', InputArgument::OPTIONAL, 'An event name'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format  (txt, xml, json, or md)', 'txt'),
                new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw description'),
            ])
            ->setDescription('Displays configured listeners for an application')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command displays all configured listeners:

  <info>php %command.full_name%</info>

To get specific listeners for an event, specify its name:

  <info>php %command.full_name% kernel.request</info>
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$options = [];
        if (\$event = \$input->getArgument('event')) {
            if (!\$this->dispatcher->hasListeners(\$event)) {
                \$io->getErrorStyle()->warning(sprintf('The event \"%s\" does not have any registered listeners.', \$event));

                return;
            }

            \$options = ['event' => \$event];
        }

        \$helper = new DescriptorHelper();
        \$options['format'] = \$input->getOption('format');
        \$options['raw_text'] = \$input->getOption('raw');
        \$options['output'] = \$io;
        \$helper->describe(\$io, \$this->dispatcher, \$options);
    }
}
", "vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php");
    }
}
