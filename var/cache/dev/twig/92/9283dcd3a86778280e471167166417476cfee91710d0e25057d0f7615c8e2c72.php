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

/* vendor/symfony/maker-bundle/src/Maker/MakeCommand.php */
class __TwigTemplate_c5316eaa256ff858a8b7530cb2707c9f6c5c02de44dac18c7b522c891f386e74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeCommand.php"));

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
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeCommand extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:command';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new console command class')
            ->addArgument('name', InputArgument::OPTIONAL, sprintf('Choose a command name (e.g. <fg=yellow>app:%s</>)', Str::asCommand(Str::getRandomTerm())))
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeCommand.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$commandName = trim(\$input->getArgument('name'));
        \$commandNameHasAppPrefix = 0 === strpos(\$commandName, 'app:');

        \$commandClassNameDetails = \$generator->createClassNameDetails(
            \$commandNameHasAppPrefix ? substr(\$commandName, 4) : \$commandName,
            'Command\\\\',
            'Command',
            sprintf('The \"%s\" command name is not valid because it would be implemented by \"%s\" class, which is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores).', \$commandName, Str::asClassName(\$commandName, 'Command'))
        );

        \$generator->generateClass(
            \$commandClassNameDetails->getFullName(),
            'command/Command.tpl.php',
            [
                'command_name' => \$commandName,
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text([
            'Next: open your new command class and customize it!',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/console.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Command::class,
            'console'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeCommand.php";
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
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeCommand extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:command';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new console command class')
            ->addArgument('name', InputArgument::OPTIONAL, sprintf('Choose a command name (e.g. <fg=yellow>app:%s</>)', Str::asCommand(Str::getRandomTerm())))
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeCommand.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$commandName = trim(\$input->getArgument('name'));
        \$commandNameHasAppPrefix = 0 === strpos(\$commandName, 'app:');

        \$commandClassNameDetails = \$generator->createClassNameDetails(
            \$commandNameHasAppPrefix ? substr(\$commandName, 4) : \$commandName,
            'Command\\\\',
            'Command',
            sprintf('The \"%s\" command name is not valid because it would be implemented by \"%s\" class, which is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores).', \$commandName, Str::asClassName(\$commandName, 'Command'))
        );

        \$generator->generateClass(
            \$commandClassNameDetails->getFullName(),
            'command/Command.tpl.php',
            [
                'command_name' => \$commandName,
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text([
            'Next: open your new command class and customize it!',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/console.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Command::class,
            'console'
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeCommand.php");
    }
}
