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

/* vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php */
class __TwigTemplate_ca328f4ae214f9e5072fe78def4e70c4379a5cfd9dc5e7df6d47a82eff75956d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php"));

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
use Symfony\\Component\\Serializer\\Serializer;

/**
 * @author Piotr Grabski-Gradzinski <piotr.gradzinski@gmail.com>
 */
final class MakeSerializerEncoder extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:serializer:encoder';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new serializer encoder class')
            ->addArgument('name', InputArgument::OPTIONAL, 'Choose a class name for your encoder (e.g. <fg=yellow>YamlEncoder</>)')
            ->addArgument('format', InputArgument::OPTIONAL, 'Pick your format name (e.g. <fg=yellow>yaml</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeSerializerEncoder.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$encoderClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Serializer\\\\',
            'Encoder'
        );
        \$format = \$input->getArgument('format');

        \$generator->generateClass(
            \$encoderClassNameDetails->getFullName(),
            'serializer/Encoder.tpl.php',
            [
                'format' => \$format,
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new serializer encoder class and start customizing it.',
            'Find the documentation at <fg=yellow>http://symfony.com/doc/current/serializer/custom_encoders.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Serializer::class,
            'serializer'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php";
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
use Symfony\\Component\\Serializer\\Serializer;

/**
 * @author Piotr Grabski-Gradzinski <piotr.gradzinski@gmail.com>
 */
final class MakeSerializerEncoder extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:serializer:encoder';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new serializer encoder class')
            ->addArgument('name', InputArgument::OPTIONAL, 'Choose a class name for your encoder (e.g. <fg=yellow>YamlEncoder</>)')
            ->addArgument('format', InputArgument::OPTIONAL, 'Pick your format name (e.g. <fg=yellow>yaml</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeSerializerEncoder.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$encoderClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Serializer\\\\',
            'Encoder'
        );
        \$format = \$input->getArgument('format');

        \$generator->generateClass(
            \$encoderClassNameDetails->getFullName(),
            'serializer/Encoder.tpl.php',
            [
                'format' => \$format,
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new serializer encoder class and start customizing it.',
            'Find the documentation at <fg=yellow>http://symfony.com/doc/current/serializer/custom_encoders.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Serializer::class,
            'serializer'
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php");
    }
}
