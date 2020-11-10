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

/* vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php */
class __TwigTemplate_b6056eed5d7ae664571a1dc192cc8600e170d82ea51dc4ea7a84f728e561853d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php"));

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
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class TranslationDebugCommandTest extends AbstractWebTestCase
{
    private \$application;

    protected function setUp(): void
    {
        \$kernel = static::createKernel(['test_case' => 'TransDebug', 'root_config' => 'config.yml']);
        \$this->application = new Application(\$kernel);
    }

    public function testDumpAllTrans()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['locale' => 'en']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('missing    messages     hello_from_construct_arg_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_subscriber_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_property_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_method_calls_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_controller', \$tester->getDisplay());
        \$this->assertStringContainsString('unused     validators   This value should be blank.', \$tester->getDisplay());
        \$this->assertStringContainsString('unused     security     Invalid CSRF token.', \$tester->getDisplay());
    }

    private function createCommandTester(): CommandTester
    {
        \$command = \$this->application->find('debug:translation');

        return new CommandTester(\$command);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php";
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
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class TranslationDebugCommandTest extends AbstractWebTestCase
{
    private \$application;

    protected function setUp(): void
    {
        \$kernel = static::createKernel(['test_case' => 'TransDebug', 'root_config' => 'config.yml']);
        \$this->application = new Application(\$kernel);
    }

    public function testDumpAllTrans()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['locale' => 'en']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('missing    messages     hello_from_construct_arg_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_subscriber_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_property_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_method_calls_service', \$tester->getDisplay());
        \$this->assertStringContainsString('missing    messages     hello_from_controller', \$tester->getDisplay());
        \$this->assertStringContainsString('unused     validators   This value should be blank.', \$tester->getDisplay());
        \$this->assertStringContainsString('unused     security     Invalid CSRF token.', \$tester->getDisplay());
    }

    private function createCommandTester(): CommandTester
    {
        \$command = \$this->application->find('debug:translation');

        return new CommandTester(\$command);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/TranslationDebugCommandTest.php");
    }
}
