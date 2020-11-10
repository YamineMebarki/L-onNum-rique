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

/* vendor/symfony/stopwatch/Tests/StopwatchTest.php */
class __TwigTemplate_965bef19683a1994f3ba268169869582f9a9cc9317fcc26667b158eab5680960 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchTest.php"));

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
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * StopwatchTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @group time-sensitive
 */
class StopwatchTest extends TestCase
{
    const DELTA = 20;

    public function testStart()
    {
        \$stopwatch = new Stopwatch();
        \$event = \$stopwatch->start('foo', 'cat');

        \$this->assertInstanceOf('Symfony\\Component\\Stopwatch\\StopwatchEvent', \$event);
        \$this->assertEquals('cat', \$event->getCategory());
        \$this->assertSame(\$event, \$stopwatch->getEvent('foo'));
    }

    public function testStartWithoutCategory()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatchEvent = \$stopwatch->start('bar');
        \$this->assertSame('default', \$stopwatchEvent->getCategory());
        \$this->assertSame(\$stopwatchEvent, \$stopwatch->getEvent('bar'));
    }

    public function testIsStarted()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatch->start('foo', 'cat');

        \$this->assertTrue(\$stopwatch->isStarted('foo'));
    }

    public function testIsNotStarted()
    {
        \$stopwatch = new Stopwatch();

        \$this->assertFalse(\$stopwatch->isStarted('foo'));
    }

    public function testIsNotStartedEvent()
    {
        \$stopwatch = new Stopwatch();

        \$sections = new \\ReflectionProperty('Symfony\\Component\\Stopwatch\\Stopwatch', 'sections');
        \$sections->setAccessible(true);
        \$section = \$sections->getValue(\$stopwatch);

        \$events = new \\ReflectionProperty('Symfony\\Component\\Stopwatch\\Section', 'events');
        \$events->setAccessible(true);

        \$stopwatchMockEvent = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\StopwatchEvent')
            ->setConstructorArgs([microtime(true) * 1000])
            ->getMock()
        ;

        \$events->setValue(end(\$section), ['foo' => \$stopwatchMockEvent]);

        \$this->assertFalse(\$stopwatch->isStarted('foo'));
    }

    public function testStop()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatch->start('foo', 'cat');
        usleep(200000);
        \$event = \$stopwatch->stop('foo');

        \$this->assertInstanceOf('Symfony\\Component\\Stopwatch\\StopwatchEvent', \$event);
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);
    }

    public function testUnknownEvent()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->getEvent('foo');
    }

    public function testStopWithoutStart()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->stop('foo');
    }

    public function testMorePrecision()
    {
        \$stopwatch = new Stopwatch(true);

        \$stopwatch->start('foo');
        \$event = \$stopwatch->stop('foo');

        \$this->assertIsFloat(\$event->getStartTime());
        \$this->assertIsFloat(\$event->getEndTime());
        \$this->assertIsFloat(\$event->getDuration());
    }

    public function testSection()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');
        \$stopwatch->stop('foo');
        \$stopwatch->start('bar', 'cat');
        \$stopwatch->stop('bar');
        \$stopwatch->stopSection('1');

        \$stopwatch->openSection();
        \$stopwatch->start('foobar', 'cat');
        \$stopwatch->stop('foobar');
        \$stopwatch->stopSection('2');

        \$stopwatch->openSection();
        \$stopwatch->start('foobar', 'cat');
        \$stopwatch->stop('foobar');
        \$stopwatch->stopSection('0');

        // the section is an event by itself
        \$this->assertCount(3, \$stopwatch->getSectionEvents('1'));
        \$this->assertCount(2, \$stopwatch->getSectionEvents('2'));
        \$this->assertCount(2, \$stopwatch->getSectionEvents('0'));
    }

    public function testReopenASection()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');
        \$stopwatch->stopSection('section');

        \$stopwatch->openSection('section');
        \$stopwatch->start('bar', 'cat');
        \$stopwatch->stopSection('section');

        \$events = \$stopwatch->getSectionEvents('section');

        \$this->assertCount(3, \$events);
        \$this->assertCount(2, \$events['__section__']->getPeriods());
    }

    public function testReopenANewSectionShouldThrowAnException()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->openSection('section');
    }

    public function testReset()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');

        \$stopwatch->reset();

        \$this->assertEquals(new Stopwatch(), \$stopwatch);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/Tests/StopwatchTest.php";
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
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * StopwatchTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @group time-sensitive
 */
class StopwatchTest extends TestCase
{
    const DELTA = 20;

    public function testStart()
    {
        \$stopwatch = new Stopwatch();
        \$event = \$stopwatch->start('foo', 'cat');

        \$this->assertInstanceOf('Symfony\\Component\\Stopwatch\\StopwatchEvent', \$event);
        \$this->assertEquals('cat', \$event->getCategory());
        \$this->assertSame(\$event, \$stopwatch->getEvent('foo'));
    }

    public function testStartWithoutCategory()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatchEvent = \$stopwatch->start('bar');
        \$this->assertSame('default', \$stopwatchEvent->getCategory());
        \$this->assertSame(\$stopwatchEvent, \$stopwatch->getEvent('bar'));
    }

    public function testIsStarted()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatch->start('foo', 'cat');

        \$this->assertTrue(\$stopwatch->isStarted('foo'));
    }

    public function testIsNotStarted()
    {
        \$stopwatch = new Stopwatch();

        \$this->assertFalse(\$stopwatch->isStarted('foo'));
    }

    public function testIsNotStartedEvent()
    {
        \$stopwatch = new Stopwatch();

        \$sections = new \\ReflectionProperty('Symfony\\Component\\Stopwatch\\Stopwatch', 'sections');
        \$sections->setAccessible(true);
        \$section = \$sections->getValue(\$stopwatch);

        \$events = new \\ReflectionProperty('Symfony\\Component\\Stopwatch\\Section', 'events');
        \$events->setAccessible(true);

        \$stopwatchMockEvent = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\StopwatchEvent')
            ->setConstructorArgs([microtime(true) * 1000])
            ->getMock()
        ;

        \$events->setValue(end(\$section), ['foo' => \$stopwatchMockEvent]);

        \$this->assertFalse(\$stopwatch->isStarted('foo'));
    }

    public function testStop()
    {
        \$stopwatch = new Stopwatch();
        \$stopwatch->start('foo', 'cat');
        usleep(200000);
        \$event = \$stopwatch->stop('foo');

        \$this->assertInstanceOf('Symfony\\Component\\Stopwatch\\StopwatchEvent', \$event);
        \$this->assertEqualsWithDelta(200, \$event->getDuration(), self::DELTA);
    }

    public function testUnknownEvent()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->getEvent('foo');
    }

    public function testStopWithoutStart()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->stop('foo');
    }

    public function testMorePrecision()
    {
        \$stopwatch = new Stopwatch(true);

        \$stopwatch->start('foo');
        \$event = \$stopwatch->stop('foo');

        \$this->assertIsFloat(\$event->getStartTime());
        \$this->assertIsFloat(\$event->getEndTime());
        \$this->assertIsFloat(\$event->getDuration());
    }

    public function testSection()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');
        \$stopwatch->stop('foo');
        \$stopwatch->start('bar', 'cat');
        \$stopwatch->stop('bar');
        \$stopwatch->stopSection('1');

        \$stopwatch->openSection();
        \$stopwatch->start('foobar', 'cat');
        \$stopwatch->stop('foobar');
        \$stopwatch->stopSection('2');

        \$stopwatch->openSection();
        \$stopwatch->start('foobar', 'cat');
        \$stopwatch->stop('foobar');
        \$stopwatch->stopSection('0');

        // the section is an event by itself
        \$this->assertCount(3, \$stopwatch->getSectionEvents('1'));
        \$this->assertCount(2, \$stopwatch->getSectionEvents('2'));
        \$this->assertCount(2, \$stopwatch->getSectionEvents('0'));
    }

    public function testReopenASection()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');
        \$stopwatch->stopSection('section');

        \$stopwatch->openSection('section');
        \$stopwatch->start('bar', 'cat');
        \$stopwatch->stopSection('section');

        \$events = \$stopwatch->getSectionEvents('section');

        \$this->assertCount(3, \$events);
        \$this->assertCount(2, \$events['__section__']->getPeriods());
    }

    public function testReopenANewSectionShouldThrowAnException()
    {
        \$this->expectException('LogicException');
        \$stopwatch = new Stopwatch();
        \$stopwatch->openSection('section');
    }

    public function testReset()
    {
        \$stopwatch = new Stopwatch();

        \$stopwatch->openSection();
        \$stopwatch->start('foo', 'cat');

        \$stopwatch->reset();

        \$this->assertEquals(new Stopwatch(), \$stopwatch);
    }
}
", "vendor/symfony/stopwatch/Tests/StopwatchTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/Tests/StopwatchTest.php");
    }
}
