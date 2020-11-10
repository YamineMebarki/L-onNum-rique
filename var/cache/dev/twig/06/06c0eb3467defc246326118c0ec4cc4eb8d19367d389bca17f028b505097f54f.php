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

/* vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php */
class __TwigTemplate_52e3b6f3dbc625b08ae0eca94dc1bd8c83e5a65c829524381659cb16b0831feb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @group time-sensitive
 */
class TimeDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        \$c = new TimeDataCollector();

        \$request = new Request();
        \$request->server->set('REQUEST_TIME', 1);

        \$c->collect(\$request, new Response());

        \$this->assertEquals(0, \$c->getStartTime());

        \$request->server->set('REQUEST_TIME_FLOAT', 2);

        \$c->collect(\$request, new Response());

        \$this->assertEquals(2000, \$c->getStartTime());

        \$request = new Request();
        \$c->collect(\$request, new Response());
        \$this->assertEquals(0, \$c->getStartTime());

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('getStartTime')->willReturn(123456.0);

        \$c = new TimeDataCollector(\$kernel);
        \$request = new Request();
        \$request->server->set('REQUEST_TIME', 1);

        \$c->collect(\$request, new Response());
        \$this->assertEquals(123456000, \$c->getStartTime());
        \$this->assertSame(class_exists(Stopwatch::class, false), \$c->isStopwatchInstalled());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @group time-sensitive
 */
class TimeDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        \$c = new TimeDataCollector();

        \$request = new Request();
        \$request->server->set('REQUEST_TIME', 1);

        \$c->collect(\$request, new Response());

        \$this->assertEquals(0, \$c->getStartTime());

        \$request->server->set('REQUEST_TIME_FLOAT', 2);

        \$c->collect(\$request, new Response());

        \$this->assertEquals(2000, \$c->getStartTime());

        \$request = new Request();
        \$c->collect(\$request, new Response());
        \$this->assertEquals(0, \$c->getStartTime());

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('getStartTime')->willReturn(123456.0);

        \$c = new TimeDataCollector(\$kernel);
        \$request = new Request();
        \$request->server->set('REQUEST_TIME', 1);

        \$c->collect(\$request, new Response());
        \$this->assertEquals(123456000, \$c->getStartTime());
        \$this->assertSame(class_exists(Stopwatch::class, false), \$c->isStopwatchInstalled());
    }
}
", "vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DataCollector/TimeDataCollectorTest.php");
    }
}
