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

/* vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php */
class __TwigTemplate_962aec984b681c648283b10691bcec0c7ae046f65af72de87af1d0dc68565a2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterReverseContainerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ReverseContainer;

class RegisterReverseContainerPassTest extends TestCase
{
    public function testCompileRemovesUnusedServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass');
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->compile();

        \$this->assertFalse(\$container->has('foo'));
    }

    public function testPublicServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setPublic(true);
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);
        \$container->compile();

        \$foo = \$container->get('foo');

        \$this->assertSame('foo', \$container->get('reverse_container')->getId(\$foo));
        \$this->assertSame(\$foo, \$container->get('reverse_container')->getService('foo'));
    }

    public function testReversibleServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar', 'stdClass')->setProperty('foo', new Reference('foo'))->setPublic(true);
        \$container->register('foo', 'stdClass')->addTag('container.reversible');
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);
        \$container->compile();

        \$foo = \$container->get('bar')->foo;

        \$this->assertSame('foo', \$container->get('reverse_container')->getId(\$foo));
        \$this->assertSame(\$foo, \$container->get('reverse_container')->getService('foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterReverseContainerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ReverseContainer;

class RegisterReverseContainerPassTest extends TestCase
{
    public function testCompileRemovesUnusedServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass');
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->compile();

        \$this->assertFalse(\$container->has('foo'));
    }

    public function testPublicServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setPublic(true);
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);
        \$container->compile();

        \$foo = \$container->get('foo');

        \$this->assertSame('foo', \$container->get('reverse_container')->getId(\$foo));
        \$this->assertSame(\$foo, \$container->get('reverse_container')->getService('foo'));
    }

    public function testReversibleServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar', 'stdClass')->setProperty('foo', new Reference('foo'))->setPublic(true);
        \$container->register('foo', 'stdClass')->addTag('container.reversible');
        \$container->register('reverse_container', ReverseContainer::class)
            ->addArgument(new Reference('service_container'))
            ->addArgument(new ServiceLocatorArgument([]))
            ->setPublic(true);

        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);
        \$container->compile();

        \$foo = \$container->get('bar')->foo;

        \$this->assertSame('foo', \$container->get('reverse_container')->getId(\$foo));
        \$this->assertSame(\$foo, \$container->get('reverse_container')->getService('foo'));
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/RegisterReverseContainerPassTest.php");
    }
}
