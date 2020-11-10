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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php */
class __TwigTemplate_875abcdad9f6eede051f5125b44d5e196cc5a3def253c88b8bae32b129566ec8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LoggerPass;
use Symfony\\Component\\HttpKernel\\Log\\Logger;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPassTest extends TestCase
{
    public function testAlwaysSetAutowiringAlias()
    {
        \$container = new ContainerBuilder();
        \$container->register('logger', 'Foo');

        (new LoggerPass())->process(\$container);

        \$this->assertFalse(\$container->getAlias(LoggerInterface::class)->isPublic());
    }

    public function testDoNotOverrideExistingLogger()
    {
        \$container = new ContainerBuilder();
        \$container->register('logger', 'Foo');

        (new LoggerPass())->process(\$container);

        \$this->assertSame('Foo', \$container->getDefinition('logger')->getClass());
    }

    public function testRegisterLogger()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.debug', false);

        (new LoggerPass())->process(\$container);

        \$definition = \$container->getDefinition('logger');
        \$this->assertSame(Logger::class, \$definition->getClass());
        \$this->assertFalse(\$definition->isPublic());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LoggerPass;
use Symfony\\Component\\HttpKernel\\Log\\Logger;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPassTest extends TestCase
{
    public function testAlwaysSetAutowiringAlias()
    {
        \$container = new ContainerBuilder();
        \$container->register('logger', 'Foo');

        (new LoggerPass())->process(\$container);

        \$this->assertFalse(\$container->getAlias(LoggerInterface::class)->isPublic());
    }

    public function testDoNotOverrideExistingLogger()
    {
        \$container = new ContainerBuilder();
        \$container->register('logger', 'Foo');

        (new LoggerPass())->process(\$container);

        \$this->assertSame('Foo', \$container->getDefinition('logger')->getClass());
    }

    public function testRegisterLogger()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.debug', false);

        (new LoggerPass())->process(\$container);

        \$definition = \$container->getDefinition('logger');
        \$this->assertSame(Logger::class, \$definition->getClass());
        \$this->assertFalse(\$definition->isPublic());
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/LoggerPassTest.php");
    }
}
