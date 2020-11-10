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

/* vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php */
class __TwigTemplate_5df7aa682e98c3d7bb8157921e2c1dcbcf57950b331afe34ac2cde32e7b3109b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;

class CoverageListenerTest extends TestCase
{
    public function test()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('This test cannot be run on Windows.');
        }

        exec('type phpdbg 2> /dev/null', \$output, \$returnCode);

        if (\\PHP_VERSION_ID >= 70000 && 0 === \$returnCode) {
            \$php = 'phpdbg -qrr';
        } else {
            exec('php --ri xdebug -d zend_extension=xdebug.so 2> /dev/null', \$output, \$returnCode);
            if (0 !== \$returnCode) {
                \$this->markTestSkipped('Xdebug is required to run this test.');
            }
            \$php = 'php -d zend_extension=xdebug.so';
        }

        \$dir = __DIR__.'/../Tests/Fixtures/coverage';
        \$phpunit = \$_SERVER['argv'][0];

        exec(\"\$php \$phpunit -c \$dir/phpunit-without-listener.xml.dist \$dir/tests/ --coverage-text 2> /dev/null\", \$output);
        \$output = implode(\"\\n\", \$output);
        \$this->assertStringContainsString('FooCov', \$output);

        exec(\"\$php \$phpunit -c \$dir/phpunit-with-listener.xml.dist \$dir/tests/ --coverage-text 2> /dev/null\", \$output);
        \$output = implode(\"\\n\", \$output);
        \$this->assertStringNotContainsString('FooCov', \$output);
        \$this->assertStringContainsString(\"SutNotFoundTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversDefaultClassTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversNothingTest::test\\nCould not find the tested class.\", \$output);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php";
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

class CoverageListenerTest extends TestCase
{
    public function test()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('This test cannot be run on Windows.');
        }

        exec('type phpdbg 2> /dev/null', \$output, \$returnCode);

        if (\\PHP_VERSION_ID >= 70000 && 0 === \$returnCode) {
            \$php = 'phpdbg -qrr';
        } else {
            exec('php --ri xdebug -d zend_extension=xdebug.so 2> /dev/null', \$output, \$returnCode);
            if (0 !== \$returnCode) {
                \$this->markTestSkipped('Xdebug is required to run this test.');
            }
            \$php = 'php -d zend_extension=xdebug.so';
        }

        \$dir = __DIR__.'/../Tests/Fixtures/coverage';
        \$phpunit = \$_SERVER['argv'][0];

        exec(\"\$php \$phpunit -c \$dir/phpunit-without-listener.xml.dist \$dir/tests/ --coverage-text 2> /dev/null\", \$output);
        \$output = implode(\"\\n\", \$output);
        \$this->assertStringContainsString('FooCov', \$output);

        exec(\"\$php \$phpunit -c \$dir/phpunit-with-listener.xml.dist \$dir/tests/ --coverage-text 2> /dev/null\", \$output);
        \$output = implode(\"\\n\", \$output);
        \$this->assertStringNotContainsString('FooCov', \$output);
        \$this->assertStringContainsString(\"SutNotFoundTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversDefaultClassTest::test\\nCould not find the tested class.\", \$output);
        \$this->assertStringNotContainsString(\"CoversNothingTest::test\\nCould not find the tested class.\", \$output);
    }
}
", "vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/CoverageListenerTest.php");
    }
}
