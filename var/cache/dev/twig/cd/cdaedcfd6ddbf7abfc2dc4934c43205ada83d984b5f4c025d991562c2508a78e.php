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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php */
class __TwigTemplate_0448e972a60bd0194ceee78aa9d39302dec05145caa00472742a3d6a0b4ad0c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\DataCollectorTranslatorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DataCollectorTranslatorPassTest extends TestCase
{
    private \$container;
    private \$dataCollectorTranslatorPass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->dataCollectorTranslatorPass = new DataCollectorTranslatorPass();

        \$this->container->setParameter('translator_implementing_bag', 'Symfony\\Component\\Translation\\Translator');
        \$this->container->setParameter('translator_not_implementing_bag', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\TranslatorWithTranslatorBag');

        \$this->container->register('translator.data_collector', 'Symfony\\Component\\Translation\\DataCollectorTranslator')
            ->setPublic(false)
            ->setDecoratedService('translator')
            ->setArguments([new Reference('translator.data_collector.inner')])
        ;

        \$this->container->register('data_collector.translation', 'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector')
            ->setArguments([new Reference('translator.data_collector')])
        ;
    }

    /**
     * @dataProvider getImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessKeepsDataCollectorTranslatorIfItImplementsTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('translator.data_collector'));
    }

    /**
     * @dataProvider getImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessKeepsDataCollectorIfTranslatorImplementsTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('data_collector.translation'));
    }

    public function getImplementingTranslatorBagInterfaceTranslatorClassNames()
    {
        return [
            ['Symfony\\Component\\Translation\\Translator'],
            ['%translator_implementing_bag%'],
        ];
    }

    /**
     * @dataProvider getNotImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessRemovesDataCollectorTranslatorIfItDoesNotImplementTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasDefinition('translator.data_collector'));
    }

    /**
     * @dataProvider getNotImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessRemovesDataCollectorIfTranslatorDoesNotImplementTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasDefinition('data_collector.translation'));
    }

    public function getNotImplementingTranslatorBagInterfaceTranslatorClassNames()
    {
        return [
            ['Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\TranslatorWithTranslatorBag'],
            ['%translator_not_implementing_bag%'],
        ];
    }
}

class TranslatorWithTranslatorBag implements TranslatorInterface
{
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\DataCollectorTranslatorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DataCollectorTranslatorPassTest extends TestCase
{
    private \$container;
    private \$dataCollectorTranslatorPass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->dataCollectorTranslatorPass = new DataCollectorTranslatorPass();

        \$this->container->setParameter('translator_implementing_bag', 'Symfony\\Component\\Translation\\Translator');
        \$this->container->setParameter('translator_not_implementing_bag', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\TranslatorWithTranslatorBag');

        \$this->container->register('translator.data_collector', 'Symfony\\Component\\Translation\\DataCollectorTranslator')
            ->setPublic(false)
            ->setDecoratedService('translator')
            ->setArguments([new Reference('translator.data_collector.inner')])
        ;

        \$this->container->register('data_collector.translation', 'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector')
            ->setArguments([new Reference('translator.data_collector')])
        ;
    }

    /**
     * @dataProvider getImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessKeepsDataCollectorTranslatorIfItImplementsTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('translator.data_collector'));
    }

    /**
     * @dataProvider getImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessKeepsDataCollectorIfTranslatorImplementsTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('data_collector.translation'));
    }

    public function getImplementingTranslatorBagInterfaceTranslatorClassNames()
    {
        return [
            ['Symfony\\Component\\Translation\\Translator'],
            ['%translator_implementing_bag%'],
        ];
    }

    /**
     * @dataProvider getNotImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessRemovesDataCollectorTranslatorIfItDoesNotImplementTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasDefinition('translator.data_collector'));
    }

    /**
     * @dataProvider getNotImplementingTranslatorBagInterfaceTranslatorClassNames
     */
    public function testProcessRemovesDataCollectorIfTranslatorDoesNotImplementTranslatorBagInterface(\$class)
    {
        \$this->container->register('translator', \$class);

        \$this->dataCollectorTranslatorPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasDefinition('data_collector.translation'));
    }

    public function getNotImplementingTranslatorBagInterfaceTranslatorClassNames()
    {
        return [
            ['Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\TranslatorWithTranslatorBag'],
            ['%translator_not_implementing_bag%'],
        ];
    }
}

class TranslatorWithTranslatorBag implements TranslatorInterface
{
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/DataCollectorTranslatorPassTest.php");
    }
}
