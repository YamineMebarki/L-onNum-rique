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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php */
class __TwigTemplate_55eb53157b54aefff2596d4d5c413deb88009d1909f8f41f93bb5d406cd97185 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\LoggingTranslatorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class LoggingTranslatorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('translator.logging', true);
        \$container->setParameter('translator.class', 'Symfony\\Component\\Translation\\Translator');
        \$container->register('monolog.logger');
        \$container->setAlias('logger', 'monolog.logger');
        \$container->register('translator.default', '%translator.class%');
        \$container->register('translator.logging', '%translator.class%');
        \$container->setAlias('translator', 'translator.default');
        \$translationWarmerDefinition = \$container->register('translation.warmer')
            ->addArgument(new Reference('translator'))
            ->addTag('container.service_subscriber', ['id' => 'translator'])
            ->addTag('container.service_subscriber', ['id' => 'foo']);

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        \$this->assertEquals(
            ['container.service_subscriber' => [
                ['id' => 'foo'],
                ['key' => 'translator', 'id' => 'translator.logging.inner'],
            ]],
            \$translationWarmerDefinition->getTags()
        );
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNotLoggerDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('identity_translator');
        \$container->setAlias('translator', 'identity_translator');

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNotTranslatorDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('monolog.logger');
        \$container->setAlias('logger', 'monolog.logger');

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\LoggingTranslatorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class LoggingTranslatorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('translator.logging', true);
        \$container->setParameter('translator.class', 'Symfony\\Component\\Translation\\Translator');
        \$container->register('monolog.logger');
        \$container->setAlias('logger', 'monolog.logger');
        \$container->register('translator.default', '%translator.class%');
        \$container->register('translator.logging', '%translator.class%');
        \$container->setAlias('translator', 'translator.default');
        \$translationWarmerDefinition = \$container->register('translation.warmer')
            ->addArgument(new Reference('translator'))
            ->addTag('container.service_subscriber', ['id' => 'translator'])
            ->addTag('container.service_subscriber', ['id' => 'foo']);

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        \$this->assertEquals(
            ['container.service_subscriber' => [
                ['id' => 'foo'],
                ['key' => 'translator', 'id' => 'translator.logging.inner'],
            ]],
            \$translationWarmerDefinition->getTags()
        );
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNotLoggerDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('identity_translator');
        \$container->setAlias('translator', 'identity_translator');

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNotTranslatorDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('monolog.logger');
        \$container->setAlias('logger', 'monolog.logger');

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new LoggingTranslatorPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/LoggingTranslatorPassTest.php");
    }
}
