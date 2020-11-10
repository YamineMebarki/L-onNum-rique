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

/* vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php */
class __TwigTemplate_62f36a2332408061401f263ae9d5fad680211e607afb34af9e3963c165c78bef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php"));

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
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Workflow\\Dumper\\GraphvizDumper;
use Symfony\\Component\\Workflow\\Dumper\\PlantUmlDumper;
use Symfony\\Component\\Workflow\\Dumper\\StateMachineGraphvizDumper;
use Symfony\\Component\\Workflow\\Marking;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class WorkflowDumpCommand extends Command
{
    protected static \$defaultName = 'workflow:dump';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::REQUIRED, 'A workflow name'),
                new InputArgument('marking', InputArgument::IS_ARRAY, 'A marking (a list of places)'),
                new InputOption('label', 'l', InputOption::VALUE_REQUIRED, 'Labels a graph'),
                new InputOption('dump-format', null, InputOption::VALUE_REQUIRED, 'The dump format [dot|puml]', 'dot'),
            ])
            ->setDescription('Dump a workflow')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the graphical representation of a
workflow in different formats

<info>DOT</info>:  %command.full_name% <workflow name> | dot -Tpng > workflow.png
<info>PUML</info>: %command.full_name% <workflow name> --dump-format=puml | java -jar plantuml.jar -p > workflow.png

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$container = \$this->getApplication()->getKernel()->getContainer();
        \$serviceId = \$input->getArgument('name');

        if (\$container->has('workflow.'.\$serviceId)) {
            \$workflow = \$container->get('workflow.'.\$serviceId);
            \$type = 'workflow';
        } elseif (\$container->has('state_machine.'.\$serviceId)) {
            \$workflow = \$container->get('state_machine.'.\$serviceId);
            \$type = 'state_machine';
        } else {
            throw new InvalidArgumentException(sprintf('No service found for \"workflow.%1\$s\" nor \"state_machine.%1\$s\".', \$serviceId));
        }

        if ('puml' === \$input->getOption('dump-format')) {
            \$transitionType = 'workflow' === \$type ? PlantUmlDumper::WORKFLOW_TRANSITION : PlantUmlDumper::STATEMACHINE_TRANSITION;
            \$dumper = new PlantUmlDumper(\$transitionType);
        } elseif ('workflow' === \$type) {
            \$dumper = new GraphvizDumper();
        } else {
            \$dumper = new StateMachineGraphvizDumper();
        }

        \$marking = new Marking();

        foreach (\$input->getArgument('marking') as \$place) {
            \$marking->mark(\$place);
        }

        \$options = [
            'name' => \$serviceId,
            'nofooter' => true,
            'graph' => [
                'label' => \$input->getOption('label'),
            ],
        ];
        \$output->writeln(\$dumper->dump(\$workflow->getDefinition(), \$marking, \$options));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php";
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
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Workflow\\Dumper\\GraphvizDumper;
use Symfony\\Component\\Workflow\\Dumper\\PlantUmlDumper;
use Symfony\\Component\\Workflow\\Dumper\\StateMachineGraphvizDumper;
use Symfony\\Component\\Workflow\\Marking;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class WorkflowDumpCommand extends Command
{
    protected static \$defaultName = 'workflow:dump';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::REQUIRED, 'A workflow name'),
                new InputArgument('marking', InputArgument::IS_ARRAY, 'A marking (a list of places)'),
                new InputOption('label', 'l', InputOption::VALUE_REQUIRED, 'Labels a graph'),
                new InputOption('dump-format', null, InputOption::VALUE_REQUIRED, 'The dump format [dot|puml]', 'dot'),
            ])
            ->setDescription('Dump a workflow')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the graphical representation of a
workflow in different formats

<info>DOT</info>:  %command.full_name% <workflow name> | dot -Tpng > workflow.png
<info>PUML</info>: %command.full_name% <workflow name> --dump-format=puml | java -jar plantuml.jar -p > workflow.png

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$container = \$this->getApplication()->getKernel()->getContainer();
        \$serviceId = \$input->getArgument('name');

        if (\$container->has('workflow.'.\$serviceId)) {
            \$workflow = \$container->get('workflow.'.\$serviceId);
            \$type = 'workflow';
        } elseif (\$container->has('state_machine.'.\$serviceId)) {
            \$workflow = \$container->get('state_machine.'.\$serviceId);
            \$type = 'state_machine';
        } else {
            throw new InvalidArgumentException(sprintf('No service found for \"workflow.%1\$s\" nor \"state_machine.%1\$s\".', \$serviceId));
        }

        if ('puml' === \$input->getOption('dump-format')) {
            \$transitionType = 'workflow' === \$type ? PlantUmlDumper::WORKFLOW_TRANSITION : PlantUmlDumper::STATEMACHINE_TRANSITION;
            \$dumper = new PlantUmlDumper(\$transitionType);
        } elseif ('workflow' === \$type) {
            \$dumper = new GraphvizDumper();
        } else {
            \$dumper = new StateMachineGraphvizDumper();
        }

        \$marking = new Marking();

        foreach (\$input->getArgument('marking') as \$place) {
            \$marking->mark(\$place);
        }

        \$options = [
            'name' => \$serviceId,
            'nofooter' => true,
            'graph' => [
                'label' => \$input->getOption('label'),
            ],
        ];
        \$output->writeln(\$dumper->dump(\$workflow->getDefinition(), \$marking, \$options));
    }
}
", "vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php");
    }
}
