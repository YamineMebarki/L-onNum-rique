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

/* vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php */
class __TwigTemplate_b61c1998f09c610786f8b681443eba0fc7b55049ecf02d4d2101ed9b12b285e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestAssertionsTrait;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\BrowserKit\\Client;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;
use Symfony\\Component\\Panther\\PantherTestCaseTrait;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class MakeFunctionalTest extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:functional-test';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new functional test class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the functional test class (e.g. <fg=yellow>DefaultControllerTest</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFunctionalTest.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$testClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Tests\\\\',
            'DevLaon'
        );

        \$generator->generateClass(
            \$testClassNameDetails->getFullName(),
            'test/Functional.tpl.php',
            [
                'web_assertions_are_available' => trait_exists(WebTestAssertionsTrait::class),
                'panther_is_available' => trait_exists(PantherTestCaseTrait::class),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new test class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/testing.html#functional-tests</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Client::class,
            'browser-kit',
            true,
            true
        );
        \$dependencies->addClassDependency(
            CssSelectorConverter::class,
            'css-selector',
            true,
            true
        );
        \$dependencies->addClassDependency(
            PantherTestCaseTrait::class,
            'panther',
            false,
            true
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestAssertionsTrait;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\BrowserKit\\Client;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;
use Symfony\\Component\\Panther\\PantherTestCaseTrait;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class MakeFunctionalTest extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:functional-test';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new functional test class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the functional test class (e.g. <fg=yellow>DefaultControllerTest</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFunctionalTest.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$testClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Tests\\\\',
            'DevLaon'
        );

        \$generator->generateClass(
            \$testClassNameDetails->getFullName(),
            'test/Functional.tpl.php',
            [
                'web_assertions_are_available' => trait_exists(WebTestAssertionsTrait::class),
                'panther_is_available' => trait_exists(PantherTestCaseTrait::class),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new test class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/testing.html#functional-tests</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Client::class,
            'browser-kit',
            true,
            true
        );
        \$dependencies->addClassDependency(
            CssSelectorConverter::class,
            'css-selector',
            true,
            true
        );
        \$dependencies->addClassDependency(
            PantherTestCaseTrait::class,
            'panther',
            false,
            true
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php");
    }
}
