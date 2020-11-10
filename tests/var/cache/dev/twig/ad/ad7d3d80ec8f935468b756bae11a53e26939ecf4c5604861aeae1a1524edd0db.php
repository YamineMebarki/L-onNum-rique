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

/* vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php */
class __TwigTemplate_7f37e9d5e4b1e06339922852605f2c23680d4f2b68058bc87f757492bd98a49a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\EventRegistry;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeSubscriber extends AbstractMaker
{
    private \$eventRegistry;

    public function __construct(EventRegistry \$eventRegistry)
    {
        \$this->eventRegistry = \$eventRegistry;
    }

    public static function getCommandName(): string
    {
        return 'make:subscriber';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new event subscriber class')
            ->addArgument('name', InputArgument::OPTIONAL, 'Choose a class name for your event subscriber (e.g. <fg=yellow>ExceptionSubscriber</>)')
            ->addArgument('event', InputArgument::OPTIONAL, 'What event do you want to subscribe to?')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeSubscriber.txt'))
        ;

        \$inputConf->setArgumentAsNonInteractive('event');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (!\$input->getArgument('event')) {
            \$events = \$this->eventRegistry->getAllActiveEvents();

            \$io->writeln(' <fg=green>Suggested Events:</>');
            \$io->listing(\$events);
            \$question = new Question(sprintf(' <fg=green>%s</>', \$command->getDefinition()->getArgument('event')->getDescription()));
            \$question->setAutocompleterValues(\$events);
            \$question->setValidator([Validator::class, 'notBlank']);
            \$event = \$io->askQuestion(\$question);
            \$input->setArgument('event', \$event);
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$subscriberClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'EventSubscriber\\\\',
            'Subscriber'
        );

        \$event = \$input->getArgument('event');
        \$eventFullClassName = \$this->eventRegistry->getEventClassName(\$event);
        \$eventClassName = \$eventFullClassName ? Str::getShortClassName(\$eventFullClassName) : null;

        \$generator->generateClass(
            \$subscriberClassNameDetails->getFullName(),
            'event/Subscriber.tpl.php',
            [
                'event' => class_exists(\$event) ? sprintf('%s::class', \$eventClassName) : sprintf('\\'%s\\'', \$event),
                'event_full_class_name' => \$eventFullClassName,
                'event_arg' => \$eventClassName ? sprintf('%s \$event', \$eventClassName) : '\$event',
                'method_name' => class_exists(\$event) ? Str::asEventMethod(\$eventClassName) : Str::asEventMethod(\$event),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new subscriber class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/event_dispatcher.html#creating-an-event-subscriber</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\EventRegistry;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeSubscriber extends AbstractMaker
{
    private \$eventRegistry;

    public function __construct(EventRegistry \$eventRegistry)
    {
        \$this->eventRegistry = \$eventRegistry;
    }

    public static function getCommandName(): string
    {
        return 'make:subscriber';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new event subscriber class')
            ->addArgument('name', InputArgument::OPTIONAL, 'Choose a class name for your event subscriber (e.g. <fg=yellow>ExceptionSubscriber</>)')
            ->addArgument('event', InputArgument::OPTIONAL, 'What event do you want to subscribe to?')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeSubscriber.txt'))
        ;

        \$inputConf->setArgumentAsNonInteractive('event');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (!\$input->getArgument('event')) {
            \$events = \$this->eventRegistry->getAllActiveEvents();

            \$io->writeln(' <fg=green>Suggested Events:</>');
            \$io->listing(\$events);
            \$question = new Question(sprintf(' <fg=green>%s</>', \$command->getDefinition()->getArgument('event')->getDescription()));
            \$question->setAutocompleterValues(\$events);
            \$question->setValidator([Validator::class, 'notBlank']);
            \$event = \$io->askQuestion(\$question);
            \$input->setArgument('event', \$event);
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$subscriberClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'EventSubscriber\\\\',
            'Subscriber'
        );

        \$event = \$input->getArgument('event');
        \$eventFullClassName = \$this->eventRegistry->getEventClassName(\$event);
        \$eventClassName = \$eventFullClassName ? Str::getShortClassName(\$eventFullClassName) : null;

        \$generator->generateClass(
            \$subscriberClassNameDetails->getFullName(),
            'event/Subscriber.tpl.php',
            [
                'event' => class_exists(\$event) ? sprintf('%s::class', \$eventClassName) : sprintf('\\'%s\\'', \$event),
                'event_full_class_name' => \$eventFullClassName,
                'event_arg' => \$eventClassName ? sprintf('%s \$event', \$eventClassName) : '\$event',
                'method_name' => class_exists(\$event) ? Str::asEventMethod(\$eventClassName) : Str::asEventMethod(\$event),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new subscriber class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/event_dispatcher.html#creating-an-event-subscriber</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php");
    }
}
