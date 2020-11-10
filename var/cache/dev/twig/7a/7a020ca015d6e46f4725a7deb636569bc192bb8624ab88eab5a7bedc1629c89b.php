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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php */
class __TwigTemplate_316d6cf4c6f814fea9b9d8cb2a26b256e8e4c7fd67a5ac189d2c7ec47c78ca7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerRealRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerWeakRefPass;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class TestServiceContainerRefPassesTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('test.private_services_locator', ServiceLocator::class)
            ->setPublic(true)
            ->addArgument(0, []);

        \$container->addCompilerPass(new TestServiceContainerWeakRefPass(), PassConfig::TYPE_BEFORE_REMOVING, -32);
        \$container->addCompilerPass(new TestServiceContainerRealRefPass(), PassConfig::TYPE_AFTER_REMOVING);

        \$container->register('DevLaon\\public_service')
            ->setPublic(true)
            ->addArgument(new Reference('DevLaon\\private_used_shared_service'))
            ->addArgument(new Reference('DevLaon\\private_used_non_shared_service'))
        ;

        \$container->register('DevLaon\\private_used_shared_service');
        \$container->register('DevLaon\\private_unused_shared_service');
        \$container->register('DevLaon\\private_used_non_shared_service')->setShared(false);
        \$container->register('DevLaon\\private_unused_non_shared_service')->setShared(false);

        \$container->compile();

        \$expected = [
            'DevLaon\\private_used_shared_service' => new ServiceClosureArgument(new Reference('DevLaon\\private_used_shared_service')),
            'DevLaon\\private_used_non_shared_service' => new ServiceClosureArgument(new Reference('DevLaon\\private_used_non_shared_service')),
            'Psr\\Container\\ContainerInterface' => new ServiceClosureArgument(new Reference('service_container')),
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => new ServiceClosureArgument(new Reference('service_container')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition('test.private_services_locator')->getArgument(0));
        \$this->assertSame(\$container, \$container->get('test.private_services_locator')->get('Psr\\Container\\ContainerInterface'));
        \$this->assertFalse(\$container->getDefinition('DevLaon\\private_used_non_shared_service')->isShared());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerRealRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerWeakRefPass;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class TestServiceContainerRefPassesTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('test.private_services_locator', ServiceLocator::class)
            ->setPublic(true)
            ->addArgument(0, []);

        \$container->addCompilerPass(new TestServiceContainerWeakRefPass(), PassConfig::TYPE_BEFORE_REMOVING, -32);
        \$container->addCompilerPass(new TestServiceContainerRealRefPass(), PassConfig::TYPE_AFTER_REMOVING);

        \$container->register('DevLaon\\public_service')
            ->setPublic(true)
            ->addArgument(new Reference('DevLaon\\private_used_shared_service'))
            ->addArgument(new Reference('DevLaon\\private_used_non_shared_service'))
        ;

        \$container->register('DevLaon\\private_used_shared_service');
        \$container->register('DevLaon\\private_unused_shared_service');
        \$container->register('DevLaon\\private_used_non_shared_service')->setShared(false);
        \$container->register('DevLaon\\private_unused_non_shared_service')->setShared(false);

        \$container->compile();

        \$expected = [
            'DevLaon\\private_used_shared_service' => new ServiceClosureArgument(new Reference('DevLaon\\private_used_shared_service')),
            'DevLaon\\private_used_non_shared_service' => new ServiceClosureArgument(new Reference('DevLaon\\private_used_non_shared_service')),
            'Psr\\Container\\ContainerInterface' => new ServiceClosureArgument(new Reference('service_container')),
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => new ServiceClosureArgument(new Reference('service_container')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition('test.private_services_locator')->getArgument(0));
        \$this->assertSame(\$container, \$container->get('test.private_services_locator')->get('Psr\\Container\\ContainerInterface'));
        \$this->assertFalse(\$container->getDefinition('DevLaon\\private_used_non_shared_service')->isShared());
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/TestServiceContainerRefPassesTest.php");
    }
}
