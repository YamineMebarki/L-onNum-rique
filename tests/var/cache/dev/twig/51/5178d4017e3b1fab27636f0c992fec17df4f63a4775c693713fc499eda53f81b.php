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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php */
class __TwigTemplate_881a7f97f2a96f71f04b8fae41e25ec8e0a1ed977698b080cd18b60ac54e8ac5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterLocaleAwareServicesPass;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

class RegisterLocaleAwareServicesPassTest extends TestCase
{
    public function testCompilerPass()
    {
        \$container = new ContainerBuilder();

        \$container->register('locale_aware_listener', LocaleAwareListener::class)
                  ->setPublic(true)
                  ->setArguments([null, null]);

        \$container->register('some_locale_aware_service', LocaleAwareInterface::class)
                  ->setPublic(true)
                  ->addTag('kernel.locale_aware');

        \$container->register('another_locale_aware_service', LocaleAwareInterface::class)
                  ->setPublic(true)
                  ->addTag('kernel.locale_aware');

        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->compile();

        \$this->assertEquals(
            [
                new IteratorArgument([
                    0 => new Reference('some_locale_aware_service'),
                    1 => new Reference('another_locale_aware_service'),
                ]),
                null,
            ],
            \$container->getDefinition('locale_aware_listener')->getArguments()
        );
    }

    public function testListenerUnregisteredWhenNoLocaleAwareServices()
    {
        \$container = new ContainerBuilder();

        \$container->register('locale_aware_listener', LocaleAwareListener::class)
                  ->setPublic(true)
                  ->setArguments([null, null]);

        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->compile();

        \$this->assertFalse(\$container->hasDefinition('locale_aware_listener'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterLocaleAwareServicesPass;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

class RegisterLocaleAwareServicesPassTest extends TestCase
{
    public function testCompilerPass()
    {
        \$container = new ContainerBuilder();

        \$container->register('locale_aware_listener', LocaleAwareListener::class)
                  ->setPublic(true)
                  ->setArguments([null, null]);

        \$container->register('some_locale_aware_service', LocaleAwareInterface::class)
                  ->setPublic(true)
                  ->addTag('kernel.locale_aware');

        \$container->register('another_locale_aware_service', LocaleAwareInterface::class)
                  ->setPublic(true)
                  ->addTag('kernel.locale_aware');

        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->compile();

        \$this->assertEquals(
            [
                new IteratorArgument([
                    0 => new Reference('some_locale_aware_service'),
                    1 => new Reference('another_locale_aware_service'),
                ]),
                null,
            ],
            \$container->getDefinition('locale_aware_listener')->getArguments()
        );
    }

    public function testListenerUnregisteredWhenNoLocaleAwareServices()
    {
        \$container = new ContainerBuilder();

        \$container->register('locale_aware_listener', LocaleAwareListener::class)
                  ->setPublic(true)
                  ->setArguments([null, null]);

        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->compile();

        \$this->assertFalse(\$container->hasDefinition('locale_aware_listener'));
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/RegisterLocaleAwareServicesPassTest.php");
    }
}
