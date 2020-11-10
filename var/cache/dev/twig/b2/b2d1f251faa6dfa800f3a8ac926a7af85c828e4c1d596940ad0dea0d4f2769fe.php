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

/* vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php */
class __TwigTemplate_d3626e7950751fc7dd441e16e4db9546cc755894116a6d4f5db9d03f713ddae9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\ApplicationTester;

/**
 * @group functional
 */
class DebugAutowiringCommandTest extends AbstractWebTestCase
{
    public function testBasicFunctionality()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring']);

        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
        \$this->assertStringContainsString('(http_kernel)', \$tester->getDisplay());
    }

    public function testSearchArgument()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'kern']);

        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
        \$this->assertStringNotContainsString('Symfony\\Component\\Routing\\RouterInterface', \$tester->getDisplay());
    }

    public function testSearchIgnoreBackslashWhenFindingService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'HttpKernelHttpKernelInterface']);
        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
    }

    public function testSearchNoResults()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'foo_fake'], ['capture_stderr_separately' => true]);

        \$this->assertStringContainsString('No autowirable classes or interfaces found matching \"foo_fake\"', \$tester->getErrorOutput());
        \$this->assertEquals(1, \$tester->getStatusCode());
    }

    public function testSearchNotAliasedService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'redirect']);

        \$this->assertStringContainsString(' more concrete service would be displayed when adding the \"--all\" option.', \$tester->getDisplay());
    }

    public function testSearchNotAliasedServiceWithAll()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'redirect', '--all' => true]);
        \$this->assertStringContainsString('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.', \$tester->getDisplay());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\ApplicationTester;

/**
 * @group functional
 */
class DebugAutowiringCommandTest extends AbstractWebTestCase
{
    public function testBasicFunctionality()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring']);

        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
        \$this->assertStringContainsString('(http_kernel)', \$tester->getDisplay());
    }

    public function testSearchArgument()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'kern']);

        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
        \$this->assertStringNotContainsString('Symfony\\Component\\Routing\\RouterInterface', \$tester->getDisplay());
    }

    public function testSearchIgnoreBackslashWhenFindingService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'HttpKernelHttpKernelInterface']);
        \$this->assertStringContainsString('Symfony\\Component\\HttpKernel\\HttpKernelInterface', \$tester->getDisplay());
    }

    public function testSearchNoResults()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'foo_fake'], ['capture_stderr_separately' => true]);

        \$this->assertStringContainsString('No autowirable classes or interfaces found matching \"foo_fake\"', \$tester->getErrorOutput());
        \$this->assertEquals(1, \$tester->getStatusCode());
    }

    public function testSearchNotAliasedService()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'redirect']);

        \$this->assertStringContainsString(' more concrete service would be displayed when adding the \"--all\" option.', \$tester->getDisplay());
    }

    public function testSearchNotAliasedServiceWithAll()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:autowiring', 'search' => 'redirect', '--all' => true]);
        \$this->assertStringContainsString('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.', \$tester->getDisplay());
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/DebugAutowiringCommandTest.php");
    }
}
