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

/* vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php */
class __TwigTemplate_f7d6a27004035da872c41f473fadfe6788062aa49a7d372b4ea3bcf1dd7c8bea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class DebugProcessorTest extends TestCase
{
    public function testDebugProcessor()
    {
        \$processor = new DebugProcessor();
        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(2, \$processor->getLogs());
        \$this->assertSame(1, \$processor->countErrors());
    }

    public function testDebugProcessorWithoutLogs()
    {
        \$processor = new DebugProcessor();

        \$this->assertCount(0, \$processor->getLogs());
        \$this->assertSame(0, \$processor->countErrors());
    }

    public function testWithRequestStack()
    {
        \$stack = new RequestStack();
        \$processor = new DebugProcessor(\$stack);
        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(2, \$processor->getLogs());
        \$this->assertSame(1, \$processor->countErrors());

        \$request = new Request();
        \$stack->push(\$request);

        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(4, \$processor->getLogs());
        \$this->assertSame(2, \$processor->countErrors());

        \$this->assertCount(2, \$processor->getLogs(\$request));
        \$this->assertSame(1, \$processor->countErrors(\$request));

        \$this->assertCount(0, \$processor->getLogs(new Request()));
        \$this->assertSame(0, \$processor->countErrors(new Request()));
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor::getLogs()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor::countErrors()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     */
    public function testInheritedClassWithoutArgument()
    {
        \$debugProcessorChild = new ClassThatInheritDebugProcessor();
        \$debugProcessorChild->getLogs();
        \$debugProcessorChild->countErrors();
    }

    private function getRecord(\$level = Logger::WARNING, \$message = 'test')
    {
        return [
            'message' => \$message,
            'context' => [],
            'level' => \$level,
            'level_name' => Logger::getLevelName(\$level),
            'channel' => 'test',
            'datetime' => new \\DateTime(),
            'extra' => [],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class DebugProcessorTest extends TestCase
{
    public function testDebugProcessor()
    {
        \$processor = new DebugProcessor();
        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(2, \$processor->getLogs());
        \$this->assertSame(1, \$processor->countErrors());
    }

    public function testDebugProcessorWithoutLogs()
    {
        \$processor = new DebugProcessor();

        \$this->assertCount(0, \$processor->getLogs());
        \$this->assertSame(0, \$processor->countErrors());
    }

    public function testWithRequestStack()
    {
        \$stack = new RequestStack();
        \$processor = new DebugProcessor(\$stack);
        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(2, \$processor->getLogs());
        \$this->assertSame(1, \$processor->countErrors());

        \$request = new Request();
        \$stack->push(\$request);

        \$processor(\$this->getRecord());
        \$processor(\$this->getRecord(Logger::ERROR));

        \$this->assertCount(4, \$processor->getLogs());
        \$this->assertSame(2, \$processor->countErrors());

        \$this->assertCount(2, \$processor->getLogs(\$request));
        \$this->assertSame(1, \$processor->countErrors(\$request));

        \$this->assertCount(0, \$processor->getLogs(new Request()));
        \$this->assertSame(0, \$processor->countErrors(new Request()));
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor::getLogs()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor::countErrors()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     */
    public function testInheritedClassWithoutArgument()
    {
        \$debugProcessorChild = new ClassThatInheritDebugProcessor();
        \$debugProcessorChild->getLogs();
        \$debugProcessorChild->countErrors();
    }

    private function getRecord(\$level = Logger::WARNING, \$message = 'test')
    {
        return [
            'message' => \$message,
            'context' => [],
            'level' => \$level,
            'level_name' => Logger::getLevelName(\$level),
            'channel' => 'test',
            'datetime' => new \\DateTime(),
            'extra' => [],
        ];
    }
}
", "vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Processor/DebugProcessorTest.php");
    }
}
