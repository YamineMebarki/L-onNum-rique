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

/* vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php */
class __TwigTemplate_65e59dc60d3418d4885a0a0a05836ef81134b2008b2bfd0f875ee7161db8951e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass;

class TranslationPassTest extends TestCase
{
    public function testValidCollector()
    {
        \$loader = (new Definition())
            ->addTag('translation.loader', ['alias' => 'xliff', 'legacy-alias' => 'xlf']);

        \$reader = new Definition();

        \$translator = (new Definition())
            ->setArguments([null, null, null, null]);

        \$container = new ContainerBuilder();
        \$container->setDefinition('translator.default', \$translator);
        \$container->setDefinition('translation.reader', \$reader);
        \$container->setDefinition('translation.xliff_loader', \$loader);

        \$pass = new TranslatorPass('translator.default', 'translation.reader');
        \$pass->process(\$container);

        \$expectedReader = (new Definition())
            ->addMethodCall('addLoader', ['xliff', new Reference('translation.xliff_loader')])
            ->addMethodCall('addLoader', ['xlf', new Reference('translation.xliff_loader')])
        ;
        \$this->assertEquals(\$expectedReader, \$reader);

        \$expectedLoader = (new Definition())
            ->addTag('translation.loader', ['alias' => 'xliff', 'legacy-alias' => 'xlf'])
        ;
        \$this->assertEquals(\$expectedLoader, \$loader);

        \$this->assertSame(['translation.xliff_loader' => ['xliff', 'xlf']], \$translator->getArgument(3));

        \$expected = ['translation.xliff_loader' => new ServiceClosureArgument(new Reference('translation.xliff_loader'))];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$translator->getArgument(0))->getArgument(0));
    }

    public function testValidCommandsViewPathsArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator.default')
            ->setArguments([null, null, null, null])
        ;
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([null, null, null, null, null, [], []])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([null, null, null, null, null, null, [], []])
        ;
        \$container->register('twig.template_iterator')
            ->setArguments([null, null, ['other/templates' => null, 'tpl' => 'App']])
        ;
        \$container->setParameter('twig.default_path', 'templates');

        \$pass = new TranslatorPass('translator.default');
        \$pass->process(\$container);

        \$expectedViewPaths = ['other/templates', 'tpl'];

        \$this->assertSame('templates', \$debugCommand->getArgument(4));
        \$this->assertSame('templates', \$updateCommand->getArgument(5));
        \$this->assertSame(\$expectedViewPaths, \$debugCommand->getArgument(6));
        \$this->assertSame(\$expectedViewPaths, \$updateCommand->getArgument(7));
    }

    public function testCommandsViewPathsArgumentsAreIgnoredWithOldServiceDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator.default')
            ->setArguments([null, null, null, null])
        ;
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([
                new Reference('translator'),
                new Reference('translation.reader'),
                new Reference('translation.extractor'),
                '%translator.default_path%',
                null,
            ])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([
                new Reference('translation.writer'),
                new Reference('translation.reader'),
                new Reference('translation.extractor'),
                '%kernel.default_locale%',
                '%translator.default_path%',
                null,
            ])
        ;
        \$container->register('twig.template_iterator')
            ->setArguments([null, null, ['other/templates' => null, 'tpl' => 'App']])
        ;
        \$container->setParameter('twig.default_path', 'templates');

        \$pass = new TranslatorPass('translator.default');
        \$pass->process(\$container);

        \$this->assertSame('templates', \$debugCommand->getArgument(4));
        \$this->assertSame('templates', \$updateCommand->getArgument(5));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass;

class TranslationPassTest extends TestCase
{
    public function testValidCollector()
    {
        \$loader = (new Definition())
            ->addTag('translation.loader', ['alias' => 'xliff', 'legacy-alias' => 'xlf']);

        \$reader = new Definition();

        \$translator = (new Definition())
            ->setArguments([null, null, null, null]);

        \$container = new ContainerBuilder();
        \$container->setDefinition('translator.default', \$translator);
        \$container->setDefinition('translation.reader', \$reader);
        \$container->setDefinition('translation.xliff_loader', \$loader);

        \$pass = new TranslatorPass('translator.default', 'translation.reader');
        \$pass->process(\$container);

        \$expectedReader = (new Definition())
            ->addMethodCall('addLoader', ['xliff', new Reference('translation.xliff_loader')])
            ->addMethodCall('addLoader', ['xlf', new Reference('translation.xliff_loader')])
        ;
        \$this->assertEquals(\$expectedReader, \$reader);

        \$expectedLoader = (new Definition())
            ->addTag('translation.loader', ['alias' => 'xliff', 'legacy-alias' => 'xlf'])
        ;
        \$this->assertEquals(\$expectedLoader, \$loader);

        \$this->assertSame(['translation.xliff_loader' => ['xliff', 'xlf']], \$translator->getArgument(3));

        \$expected = ['translation.xliff_loader' => new ServiceClosureArgument(new Reference('translation.xliff_loader'))];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$translator->getArgument(0))->getArgument(0));
    }

    public function testValidCommandsViewPathsArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator.default')
            ->setArguments([null, null, null, null])
        ;
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([null, null, null, null, null, [], []])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([null, null, null, null, null, null, [], []])
        ;
        \$container->register('twig.template_iterator')
            ->setArguments([null, null, ['other/templates' => null, 'tpl' => 'App']])
        ;
        \$container->setParameter('twig.default_path', 'templates');

        \$pass = new TranslatorPass('translator.default');
        \$pass->process(\$container);

        \$expectedViewPaths = ['other/templates', 'tpl'];

        \$this->assertSame('templates', \$debugCommand->getArgument(4));
        \$this->assertSame('templates', \$updateCommand->getArgument(5));
        \$this->assertSame(\$expectedViewPaths, \$debugCommand->getArgument(6));
        \$this->assertSame(\$expectedViewPaths, \$updateCommand->getArgument(7));
    }

    public function testCommandsViewPathsArgumentsAreIgnoredWithOldServiceDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator.default')
            ->setArguments([null, null, null, null])
        ;
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([
                new Reference('translator'),
                new Reference('translation.reader'),
                new Reference('translation.extractor'),
                '%translator.default_path%',
                null,
            ])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([
                new Reference('translation.writer'),
                new Reference('translation.reader'),
                new Reference('translation.extractor'),
                '%kernel.default_locale%',
                '%translator.default_path%',
                null,
            ])
        ;
        \$container->register('twig.template_iterator')
            ->setArguments([null, null, ['other/templates' => null, 'tpl' => 'App']])
        ;
        \$container->setParameter('twig.default_path', 'templates');

        \$pass = new TranslatorPass('translator.default');
        \$pass->process(\$container);

        \$this->assertSame('templates', \$debugCommand->getArgument(4));
        \$this->assertSame('templates', \$updateCommand->getArgument(5));
    }
}
", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DependencyInjection/TranslationPassTest.php");
    }
}
