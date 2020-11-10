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

/* vendor/symfony/maker-bundle/src/Maker/MakeController.php */
class __TwigTemplate_ca289b72df3204253fa2059cdeed307c4b802df81dbb2a0eb8191b544bcccc17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeController.php"));

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

use Doctrine\\Common\\Annotations\\Annotation;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeController extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:controller';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new controller class')
            ->addArgument('controller-class', InputArgument::OPTIONAL, sprintf('Choose a name for your controller class (e.g. <fg=yellow>%sController</>)', Str::asClassName(Str::getRandomTerm())))
            ->addOption('no-template', null, InputOption::VALUE_NONE, 'Use this option to disable template generation')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeController.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$controllerClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('controller-class'),
            'Controller\\\\',
            'Controller'
        );

        \$noTemplate = \$input->getOption('no-template');
        \$templateName = Str::asFilePath(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()).'/site.html.twig';
        \$controllerPath = \$generator->generateController(
            \$controllerClassNameDetails->getFullName(),
            'controller/Controller.tpl.php',
            [
                'route_path' => Str::asRoutePath(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'route_name' => Str::asRouteName(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'with_template' => \$this->isTwigInstalled() && !\$noTemplate,
                'template_name' => \$templateName,
            ]
        );

        if (\$this->isTwigInstalled() && !\$noTemplate) {
            \$generator->generateTemplate(
                \$templateName,
                'controller/twig_template.tpl.php',
                [
                    'controller_path' => \$controllerPath,
                    'root_directory' => \$generator->getRootDirectory(),
                    'class_name' => \$controllerClassNameDetails->getShortName(),
                ]
            );
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text('Next: Open your new controller class and add some pages!');
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Annotation::class,
            'doctrine/annotations'
        );
    }

    private function isTwigInstalled()
    {
        return class_exists(TwigBundle::class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeController.php";
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

use Doctrine\\Common\\Annotations\\Annotation;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeController extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:controller';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new controller class')
            ->addArgument('controller-class', InputArgument::OPTIONAL, sprintf('Choose a name for your controller class (e.g. <fg=yellow>%sController</>)', Str::asClassName(Str::getRandomTerm())))
            ->addOption('no-template', null, InputOption::VALUE_NONE, 'Use this option to disable template generation')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeController.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$controllerClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('controller-class'),
            'Controller\\\\',
            'Controller'
        );

        \$noTemplate = \$input->getOption('no-template');
        \$templateName = Str::asFilePath(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()).'/site.html.twig';
        \$controllerPath = \$generator->generateController(
            \$controllerClassNameDetails->getFullName(),
            'controller/Controller.tpl.php',
            [
                'route_path' => Str::asRoutePath(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'route_name' => Str::asRouteName(\$controllerClassNameDetails->getRelativeNameWithoutSuffix()),
                'with_template' => \$this->isTwigInstalled() && !\$noTemplate,
                'template_name' => \$templateName,
            ]
        );

        if (\$this->isTwigInstalled() && !\$noTemplate) {
            \$generator->generateTemplate(
                \$templateName,
                'controller/twig_template.tpl.php',
                [
                    'controller_path' => \$controllerPath,
                    'root_directory' => \$generator->getRootDirectory(),
                    'class_name' => \$controllerClassNameDetails->getShortName(),
                ]
            );
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text('Next: Open your new controller class and add some pages!');
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Annotation::class,
            'doctrine/annotations'
        );
    }

    private function isTwigInstalled()
    {
        return class_exists(TwigBundle::class);
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeController.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeController.php");
    }
}
