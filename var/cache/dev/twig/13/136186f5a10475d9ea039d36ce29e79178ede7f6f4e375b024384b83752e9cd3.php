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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php */
class __TwigTemplate_d65b36ed0cf2bcbb1c4ea58679b9b0e5ce089eaa9646141b06b3c57e99178c48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ResettableServicePass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ClearableService;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ResettableService;

class ResettableServicePassTest extends TestCase
{
    public function testCompilerPass()
    {
        \$container = new ContainerBuilder();
        \$container->register('one', ResettableService::class)
            ->setPublic(true)
            ->addTag('kernel.reset', ['method' => 'reset']);
        \$container->register('two', ClearableService::class)
            ->setPublic(true)
            ->addTag('kernel.reset', ['method' => 'clear']);

        \$container->register('services_resetter', ServicesResetter::class)
            ->setPublic(true)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();

        \$definition = \$container->getDefinition('services_resetter');

        \$this->assertEquals(
            [
                new IteratorArgument([
                    'one' => new Reference('one', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE),
                    'two' => new Reference('two', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE),
                ]),
                [
                    'one' => 'reset',
                    'two' => 'clear',
                ],
            ],
            \$definition->getArguments()
        );
    }

    public function testMissingMethod()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Tag kernel.reset requires the \"method\" attribute to be set.');
        \$container = new ContainerBuilder();
        \$container->register(ResettableService::class)
            ->addTag('kernel.reset');
        \$container->register('services_resetter', ServicesResetter::class)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();
    }

    public function testCompilerPassWithoutResetters()
    {
        \$container = new ContainerBuilder();
        \$container->register('services_resetter', ServicesResetter::class)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();

        \$this->assertFalse(\$container->has('services_resetter'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ResettableServicePass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ClearableService;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ResettableService;

class ResettableServicePassTest extends TestCase
{
    public function testCompilerPass()
    {
        \$container = new ContainerBuilder();
        \$container->register('one', ResettableService::class)
            ->setPublic(true)
            ->addTag('kernel.reset', ['method' => 'reset']);
        \$container->register('two', ClearableService::class)
            ->setPublic(true)
            ->addTag('kernel.reset', ['method' => 'clear']);

        \$container->register('services_resetter', ServicesResetter::class)
            ->setPublic(true)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();

        \$definition = \$container->getDefinition('services_resetter');

        \$this->assertEquals(
            [
                new IteratorArgument([
                    'one' => new Reference('one', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE),
                    'two' => new Reference('two', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE),
                ]),
                [
                    'one' => 'reset',
                    'two' => 'clear',
                ],
            ],
            \$definition->getArguments()
        );
    }

    public function testMissingMethod()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Tag kernel.reset requires the \"method\" attribute to be set.');
        \$container = new ContainerBuilder();
        \$container->register(ResettableService::class)
            ->addTag('kernel.reset');
        \$container->register('services_resetter', ServicesResetter::class)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();
    }

    public function testCompilerPassWithoutResetters()
    {
        \$container = new ContainerBuilder();
        \$container->register('services_resetter', ServicesResetter::class)
            ->setArguments([null, []]);
        \$container->addCompilerPass(new ResettableServicePass());

        \$container->compile();

        \$this->assertFalse(\$container->has('services_resetter'));
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/ResettableServicePassTest.php");
    }
}
