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

/* vendor/symfony/maker-bundle/src/Maker/MakeVoter.php */
class __TwigTemplate_95f34de013f688a3b11cb6f4be8fb6fd82468040bf74b8860f87e3c32ef025b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeVoter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeVoter.php"));

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
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeVoter extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:voter';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new security voter class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the security voter class (e.g. <fg=yellow>BlogPostVoter</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeVoter.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$voterClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Security\\\\Voter\\\\',
            'Voter'
        );

        \$generator->generateClass(
            \$voterClassNameDetails->getFullName(),
            'security/Voter.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your voter and add your logic.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/security/voters.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Voter::class,
            'security'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeVoter.php";
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
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeVoter extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:voter';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new security voter class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the security voter class (e.g. <fg=yellow>BlogPostVoter</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeVoter.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$voterClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Security\\\\Voter\\\\',
            'Voter'
        );

        \$generator->generateClass(
            \$voterClassNameDetails->getFullName(),
            'security/Voter.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your voter and add your logic.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/security/voters.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Voter::class,
            'security'
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeVoter.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php");
    }
}
