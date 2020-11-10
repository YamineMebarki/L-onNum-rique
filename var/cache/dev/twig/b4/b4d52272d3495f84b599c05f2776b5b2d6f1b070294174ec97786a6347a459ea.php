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

/* vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php */
class __TwigTemplate_1ee0fe62d335e809648a280d2054249c286caadbf832b4acba2f3b76afff7f2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @group legacy
 */
class TimedPhpEngineTest extends TestCase
{
    public function testThatRenderLogsTime()
    {
        \$container = \$this->getContainer();
        \$templateNameParser = \$this->getTemplateNameParser();
        \$globalVariables = \$this->getGlobalVariables();
        \$loader = \$this->getLoader(\$this->getStorage());

        \$stopwatch = \$this->getStopwatch();
        \$stopwatchEvent = \$this->getStopwatchEvent();

        \$stopwatch->expects(\$this->once())
            ->method('start')
            ->with('template.php (index.php)', 'template')
            ->willReturn(\$stopwatchEvent);

        \$stopwatchEvent->expects(\$this->once())->method('stop');

        \$engine = new TimedPhpEngine(\$templateNameParser, \$container, \$loader, \$stopwatch, \$globalVariables);
        \$engine->render('index.php');
    }

    /**
     * @return Container
     */
    private function getContainer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\Container')->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Templating\\TemplateNameParserInterface
     */
    private function getTemplateNameParser()
    {
        \$templateReference = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateReferenceInterface')->getMock();
        \$templateNameParser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$templateNameParser->expects(\$this->any())
            ->method('parse')
            ->willReturn(\$templateReference);

        return \$templateNameParser;
    }

    /**
     * @return GlobalVariables
     */
    private function getGlobalVariables()
    {
        return \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Templating\\Storage\\StringStorage
     */
    private function getStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Templating\\Storage\\StringStorage')
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    /**
     * @param \\Symfony\\Component\\Templating\\Storage\\StringStorage \$storage
     *
     * @return \\Symfony\\Component\\Templating\\Loader\\Loader
     */
    private function getLoader(\$storage)
    {
        \$loader = \$this->getMockForAbstractClass('Symfony\\Component\\Templating\\Loader\\Loader');
        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$storage);

        return \$loader;
    }

    /**
     * @return \\Symfony\\Component\\Stopwatch\\StopwatchEvent
     */
    private function getStopwatchEvent()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\StopwatchEvent')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Stopwatch\\Stopwatch
     */
    private function getStopwatch()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @group legacy
 */
class TimedPhpEngineTest extends TestCase
{
    public function testThatRenderLogsTime()
    {
        \$container = \$this->getContainer();
        \$templateNameParser = \$this->getTemplateNameParser();
        \$globalVariables = \$this->getGlobalVariables();
        \$loader = \$this->getLoader(\$this->getStorage());

        \$stopwatch = \$this->getStopwatch();
        \$stopwatchEvent = \$this->getStopwatchEvent();

        \$stopwatch->expects(\$this->once())
            ->method('start')
            ->with('template.php (index.php)', 'template')
            ->willReturn(\$stopwatchEvent);

        \$stopwatchEvent->expects(\$this->once())->method('stop');

        \$engine = new TimedPhpEngine(\$templateNameParser, \$container, \$loader, \$stopwatch, \$globalVariables);
        \$engine->render('index.php');
    }

    /**
     * @return Container
     */
    private function getContainer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\Container')->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Templating\\TemplateNameParserInterface
     */
    private function getTemplateNameParser()
    {
        \$templateReference = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateReferenceInterface')->getMock();
        \$templateNameParser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$templateNameParser->expects(\$this->any())
            ->method('parse')
            ->willReturn(\$templateReference);

        return \$templateNameParser;
    }

    /**
     * @return GlobalVariables
     */
    private function getGlobalVariables()
    {
        return \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Templating\\Storage\\StringStorage
     */
    private function getStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Templating\\Storage\\StringStorage')
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    /**
     * @param \\Symfony\\Component\\Templating\\Storage\\StringStorage \$storage
     *
     * @return \\Symfony\\Component\\Templating\\Loader\\Loader
     */
    private function getLoader(\$storage)
    {
        \$loader = \$this->getMockForAbstractClass('Symfony\\Component\\Templating\\Loader\\Loader');
        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$storage);

        return \$loader;
    }

    /**
     * @return \\Symfony\\Component\\Stopwatch\\StopwatchEvent
     */
    private function getStopwatchEvent()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\StopwatchEvent')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \\Symfony\\Component\\Stopwatch\\Stopwatch
     */
    private function getStopwatch()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')->getMock();
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/TimedPhpEngineTest.php");
    }
}
