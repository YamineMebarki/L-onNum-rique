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

/* vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php */
class __TwigTemplate_2c96ca58bf6b784e9b598025dd3b7a1961a46c0f8e34aeca01f3453c8dc4dd1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Validator\\DependencyInjection\\AddValidatorInitializersPass;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

class AddValidatorInitializersPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('initializer1')
            ->addTag('validator.initializer')
        ;
        \$container
            ->register('initializer2')
            ->addTag('validator.initializer')
        ;
        \$container
            ->register('validator.builder')
            ->addArgument([])
        ;

        (new AddValidatorInitializersPass())->process(\$container);

        \$this->assertEquals(
            [['addObjectInitializers', [[new Reference('initializer1'), new Reference('initializer2')]]]],
            \$container->getDefinition('validator.builder')->getMethodCalls()
        );
    }

    /**
     * @group legacy
     */
    public function testLegacyTranslatorProxy()
    {
        \$translator = new TestTranslator();
        \$proxy = new LegacyTranslatorProxy(\$translator);
        \$this->assertSame(\$translator, \$proxy->getTranslator());

        \$container = new ContainerBuilder();
        \$container
            ->register('validator.builder')
            ->addMethodCall('setTranslator', [new Reference('translator')])
        ;

        \$container->register('translator', TestTranslator::class);

        (new AddValidatorInitializersPass())->process(\$container);

        \$this->assertEquals(
            [['setTranslator', [(new Definition(LegacyTranslatorProxy::class))->addArgument(new Reference('translator'))]]],
            \$container->getDefinition('validator.builder')->removeMethodCall('addObjectInitializers')->getMethodCalls()
        );
    }
}

class TestTranslator implements TranslatorInterface, LocaleAwareInterface
{
    use TranslatorTrait;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Validator\\DependencyInjection\\AddValidatorInitializersPass;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

class AddValidatorInitializersPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('initializer1')
            ->addTag('validator.initializer')
        ;
        \$container
            ->register('initializer2')
            ->addTag('validator.initializer')
        ;
        \$container
            ->register('validator.builder')
            ->addArgument([])
        ;

        (new AddValidatorInitializersPass())->process(\$container);

        \$this->assertEquals(
            [['addObjectInitializers', [[new Reference('initializer1'), new Reference('initializer2')]]]],
            \$container->getDefinition('validator.builder')->getMethodCalls()
        );
    }

    /**
     * @group legacy
     */
    public function testLegacyTranslatorProxy()
    {
        \$translator = new TestTranslator();
        \$proxy = new LegacyTranslatorProxy(\$translator);
        \$this->assertSame(\$translator, \$proxy->getTranslator());

        \$container = new ContainerBuilder();
        \$container
            ->register('validator.builder')
            ->addMethodCall('setTranslator', [new Reference('translator')])
        ;

        \$container->register('translator', TestTranslator::class);

        (new AddValidatorInitializersPass())->process(\$container);

        \$this->assertEquals(
            [['setTranslator', [(new Definition(LegacyTranslatorProxy::class))->addArgument(new Reference('translator'))]]],
            \$container->getDefinition('validator.builder')->removeMethodCall('addObjectInitializers')->getMethodCalls()
        );
    }
}

class TestTranslator implements TranslatorInterface, LocaleAwareInterface
{
    use TranslatorTrait;
}
", "vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/DependencyInjection/AddValidatorInitializersPassTest.php");
    }
}
