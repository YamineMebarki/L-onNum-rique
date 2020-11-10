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

/* vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php */
class __TwigTemplate_4f95296df853257e995e85b1a086e169ea28a6db1fd23da0222c10ebadbb3bb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;

/**
 * Don't remove this test case, it tests the legacy group.
 *
 * @group legacy
 *
 * @runTestsInSeparateProcesses
 */
class ProcessIsolationTest extends TestCase
{
    /**
     * @expectedDeprecation DevLaon abc
     */
    public function testIsolation()
    {
        @trigger_error('DevLaon abc', E_USER_DEPRECATED);
        \$this->addToAssertionCount(1);
    }

    public function testCallingOtherErrorHandler()
    {
        \$class = class_exists('PHPUnit\\Framework\\Exception') ? 'PHPUnit\\Framework\\Exception' : 'PHPUnit_Framework_Exception';
        \$this->expectException(\$class);
        \$this->expectExceptionMessage('DevLaon that PHPUnit\\'s error handler fires.');

        trigger_error('DevLaon that PHPUnit\\'s error handler fires.', E_USER_WARNING);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;

/**
 * Don't remove this test case, it tests the legacy group.
 *
 * @group legacy
 *
 * @runTestsInSeparateProcesses
 */
class ProcessIsolationTest extends TestCase
{
    /**
     * @expectedDeprecation DevLaon abc
     */
    public function testIsolation()
    {
        @trigger_error('DevLaon abc', E_USER_DEPRECATED);
        \$this->addToAssertionCount(1);
    }

    public function testCallingOtherErrorHandler()
    {
        \$class = class_exists('PHPUnit\\Framework\\Exception') ? 'PHPUnit\\Framework\\Exception' : 'PHPUnit_Framework_Exception';
        \$this->expectException(\$class);
        \$this->expectExceptionMessage('DevLaon that PHPUnit\\'s error handler fires.');

        trigger_error('DevLaon that PHPUnit\\'s error handler fires.', E_USER_WARNING);
    }
}
", "vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/ProcessIsolationTest.php");
    }
}
