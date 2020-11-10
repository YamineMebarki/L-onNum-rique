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

/* vendor/symfony/stopwatch/Tests/StopwatchEventTest.php */
class __TwigTemplate_400eac41c59528002aa1975321318cd22cae203abb21e29de5eb073ab0d0b941 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchEventTest.php"));

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

namespace Symfony\\Component\\Stopwatch\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * StopwatchEventTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @group time-sensitive
 */
class StopwatchEventTest extends TestCase
{
    const DELTA = 37;

    public function testGetOrigin()
    {
        \$event = new StopwatchEvent(12);
        \$this->assertEquals(12, \$event->getOrigin());
    }

    public function testGetCategory()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals('default', \$event->getCategory());

        \$event = new StopwatchEvent(microtime(true) * 1000, 'cat');
        \$this->assertEquals('cat', \$event->getCategory());
    }

    public function testGetPeriods()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals([], \$event->getPeriods());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$this->assertCount(1, \$event->getPeriods());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$event->start();
        \$event->stop();
        \$this->assertCount(2, \$event->getPeriods());
    }

    public function testLap()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->lap();
        \$event->stop();
        \$this->assertCount(2, \$event->getPeriods());
    }

    public function testDuration()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(200000);
        \$event->stop();
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        usleep(50000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);
    }

    public function testDurationBeforeStop()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(200000);
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        usleep(50000);
        \$event->start();
        usleep(100000);
        \$this->assertEqualsWithDelta(100, \$event->getDuration(), self::DELTA);
    }

    public function testStopWithoutStart()
    {
        \$this->expectException('LogicException');
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->stop();
    }

    public function testIsStarted()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$this->assertTrue(\$event->isStarted());
    }

    public function testIsNotStarted()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertFalse(\$event->isStarted());
    }

    public function testEnsureStopped()
    {
        // this also test overlap between two periods
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->start();
        usleep(100000);
        \$event->ensureStopped();
        \$this->assertEqualsWithDelta(300, \$event->getDuration(), self::DELTA);
    }

    public function testStartTime()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertLessThanOrEqual(0.5, \$event->getStartTime());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$this->assertLessThanOrEqual(1, \$event->getStartTime());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        \$this->assertEqualsWithDelta(0, \$event->getStartTime(), self::DELTA);
    }

    public function testHumanRepresentation()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals('default: 0.00 MiB - 0 ms', (string) \$event);
        \$event->start();
        \$event->stop();
        \$this->assertEquals(1, preg_match('/default: [0-9\\.]+ MiB - [0-9]+ ms/', (string) \$event));

        \$event = new StopwatchEvent(microtime(true) * 1000, 'foo');
        \$this->assertEquals('foo: 0.00 MiB - 0 ms', (string) \$event);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/Tests/StopwatchEventTest.php";
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

namespace Symfony\\Component\\Stopwatch\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * StopwatchEventTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @group time-sensitive
 */
class StopwatchEventTest extends TestCase
{
    const DELTA = 37;

    public function testGetOrigin()
    {
        \$event = new StopwatchEvent(12);
        \$this->assertEquals(12, \$event->getOrigin());
    }

    public function testGetCategory()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals('default', \$event->getCategory());

        \$event = new StopwatchEvent(microtime(true) * 1000, 'cat');
        \$this->assertEquals('cat', \$event->getCategory());
    }

    public function testGetPeriods()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals([], \$event->getPeriods());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$this->assertCount(1, \$event->getPeriods());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$event->start();
        \$event->stop();
        \$this->assertCount(2, \$event->getPeriods());
    }

    public function testLap()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->lap();
        \$event->stop();
        \$this->assertCount(2, \$event->getPeriods());
    }

    public function testDuration()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(200000);
        \$event->stop();
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        usleep(50000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);
    }

    public function testDurationBeforeStop()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(200000);
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        usleep(50000);
        \$event->start();
        usleep(100000);
        \$this->assertEqualsWithDelta(100, \$event->getDuration(), self::DELTA);
    }

    public function testStopWithoutStart()
    {
        \$this->expectException('LogicException');
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->stop();
    }

    public function testIsStarted()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$this->assertTrue(\$event->isStarted());
    }

    public function testIsNotStarted()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertFalse(\$event->isStarted());
    }

    public function testEnsureStopped()
    {
        // this also test overlap between two periods
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->start();
        usleep(100000);
        \$event->ensureStopped();
        \$this->assertEqualsWithDelta(300, \$event->getDuration(), self::DELTA);
    }

    public function testStartTime()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertLessThanOrEqual(0.5, \$event->getStartTime());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        \$event->stop();
        \$this->assertLessThanOrEqual(1, \$event->getStartTime());

        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$event->start();
        usleep(100000);
        \$event->stop();
        \$this->assertEqualsWithDelta(0, \$event->getStartTime(), self::DELTA);
    }

    public function testHumanRepresentation()
    {
        \$event = new StopwatchEvent(microtime(true) * 1000);
        \$this->assertEquals('default: 0.00 MiB - 0 ms', (string) \$event);
        \$event->start();
        \$event->stop();
        \$this->assertEquals(1, preg_match('/default: [0-9\\.]+ MiB - [0-9]+ ms/', (string) \$event));

        \$event = new StopwatchEvent(microtime(true) * 1000, 'foo');
        \$this->assertEquals('foo: 0.00 MiB - 0 ms', (string) \$event);
    }
}
", "vendor/symfony/stopwatch/Tests/StopwatchEventTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/Tests/StopwatchEventTest.php");
    }
}
