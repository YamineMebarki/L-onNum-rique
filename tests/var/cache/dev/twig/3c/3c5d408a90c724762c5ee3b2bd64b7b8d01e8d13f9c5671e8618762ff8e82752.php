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

/* vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php */
class __TwigTemplate_0ec938406a888704156c5a1f167f20e902c2ae7ebdd57376432558d7a5f3c5f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php"));

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

namespace Symfony\\Bundle\\WebServerBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Bundle\\WebServerBundle\\DependencyInjection\\WebServerExtension;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class WebServerExtensionTest extends TestCase
{
    public function testLoad()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.project_dir', __DIR__);
        \$container->setParameter('kernel.cache_dir', __DIR__.'/var/cache/test');
        \$container->setParameter('kernel.environment', 'test');
        (new WebServerExtension())->load([], \$container);

        \$this->assertSame(
            __DIR__.'/test',
            \$container->getDefinition('web_server.command.server_run')->getArgument(0)
        );
        \$this->assertSame(
            __DIR__.'/test',
            \$container->getDefinition('web_server.command.server_start')->getArgument(0)
        );

        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_run')->getArgument(2)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_start')->getArgument(2)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_stop')->getArgument(0)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_status')->getArgument(0)
        );

        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_run'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_start'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_stop'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_status'));
        \$this->assertSame(class_exists(ConsoleFormatter::class), \$container->hasDefinition('web_server.command.server_log'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php";
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

namespace Symfony\\Bundle\\WebServerBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Bundle\\WebServerBundle\\DependencyInjection\\WebServerExtension;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class WebServerExtensionTest extends TestCase
{
    public function testLoad()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.project_dir', __DIR__);
        \$container->setParameter('kernel.cache_dir', __DIR__.'/var/cache/test');
        \$container->setParameter('kernel.environment', 'test');
        (new WebServerExtension())->load([], \$container);

        \$this->assertSame(
            __DIR__.'/test',
            \$container->getDefinition('web_server.command.server_run')->getArgument(0)
        );
        \$this->assertSame(
            __DIR__.'/test',
            \$container->getDefinition('web_server.command.server_start')->getArgument(0)
        );

        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_run')->getArgument(2)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_start')->getArgument(2)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_stop')->getArgument(0)
        );
        \$this->assertSame(
            __DIR__.'/var/cache',
            \$container->getDefinition('web_server.command.server_status')->getArgument(0)
        );

        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_run'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_start'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_stop'));
        \$this->assertTrue(\$container->hasDefinition('web_server.command.server_status'));
        \$this->assertSame(class_exists(ConsoleFormatter::class), \$container->hasDefinition('web_server.command.server_log'));
    }
}
", "vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/Tests/DependencyInjection/WebServerExtensionTest.php");
    }
}
