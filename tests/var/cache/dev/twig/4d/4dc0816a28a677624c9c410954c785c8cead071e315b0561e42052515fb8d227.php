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

/* vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php */
class __TwigTemplate_379cdfaf1c788d2009d86b59f79d9eff1fc12f929fe813d5456c2bef773d1c7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class CachePoolListCommandTest extends AbstractWebTestCase
{
    protected function setUp(): void
    {
        static::bootKernel(['test_case' => 'CachePools', 'root_config' => 'config.yml']);
    }

    public function testListPools()
    {
        \$tester = \$this->createCommandTester(['cache.app', 'cache.system']);
        \$tester->execute([]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
        \$this->assertStringContainsString('cache.app', \$tester->getDisplay());
        \$this->assertStringContainsString('cache.system', \$tester->getDisplay());
    }

    public function testEmptyList()
    {
        \$tester = \$this->createCommandTester([]);
        \$tester->execute([]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
    }

    private function createCommandTester(array \$poolNames)
    {
        \$application = new Application(static::\$kernel);
        \$application->add(new CachePoolListCommand(\$poolNames));

        return new CommandTester(\$application->find('cache:pool:list'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class CachePoolListCommandTest extends AbstractWebTestCase
{
    protected function setUp(): void
    {
        static::bootKernel(['test_case' => 'CachePools', 'root_config' => 'config.yml']);
    }

    public function testListPools()
    {
        \$tester = \$this->createCommandTester(['cache.app', 'cache.system']);
        \$tester->execute([]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
        \$this->assertStringContainsString('cache.app', \$tester->getDisplay());
        \$this->assertStringContainsString('cache.system', \$tester->getDisplay());
    }

    public function testEmptyList()
    {
        \$tester = \$this->createCommandTester([]);
        \$tester->execute([]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:list exits with 0 in case of success');
    }

    private function createCommandTester(array \$poolNames)
    {
        \$application = new Application(static::\$kernel);
        \$application->add(new CachePoolListCommand(\$poolNames));

        return new CommandTester(\$application->find('cache:pool:list'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/CachePoolListCommandTest.php");
    }
}
